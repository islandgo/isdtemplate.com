<?php

namespace AiosInitialSetup\App\Modules\ContactFormFixFormDataCompatibility;

class Module
{
	/**
	 * Module constructor.
	 */
	public function __construct()
	{
		add_action('admin_init', [$this, 'fixScripts'], 100);
		add_action('wp_enqueue_scripts', [$this, 'enqueueAssetsForFix'], 9);
	}

	/**
	 * Enqueue file if wpcf7 is greater than 48
	 */
	public function enqueueAssetsForFix() {

		if ( !$this->is_wpcf7_gte_48() ) {
			return;
		}

		$file_path = get_option('asis_contact_form_7_formdata_compatibilty_file_path');
		$file_url = content_url() . '/aios-initial-setup-cf7-formdata-compatibility/scripts.js';

		/* 	Make sure that the file generated by this module exists before using it. */
		if ( file_exists( $file_path ) ) {
			/* Enqueue corrected scripts.js */

			$in_footer = true;

			if ( 'header' === wpcf7_load_js() ) {
				$in_footer = false;
			}

			wp_register_script('contact-form-7', $file_url, ['jquery'], WPCF7_VERSION, $in_footer);
			wp_enqueue_script('contact-form-7');

		}
	}

	/**
	 * @return bool
	 */
	public function is_wpcf7_gte_48() {

		if ( !defined('WPCF7_VERSION') ) {
			return false;
		}

		if ( ((float) WPCF7_VERSION) >= 4.8 ) {
			return true;
		}

		return false;

	}

	/**
	 * @return bool
	 */
	public function has_wpcf7_version_changed() {

		$version = get_option('aios_cf7_formdata_compatibilty_wpcf7_version');
		if ($version !== WPCF7_VERSION) {
			update_option('aios_cf7_formdata_compatibilty_wpcf7_version', WPCF7_VERSION);
			return true;
		}

		return false;

	}

	/**
	 * @return bool|void
	 */
	public function fixScripts() {

		/* Only run on WPCF7 versions using XHR2 (versions >= 4.8) */
		if (! $this->is_wpcf7_gte_48()) {
			return;
		}

		/* Only regenerate if WPCF7 version has changed */
		if (! $this->has_wpcf7_version_changed()) {
			return;
		}

		/* Prepare WP Filesystem */
		$access_type = get_filesystem_method();
		if($access_type === 'direct')
		{
			$creds = request_filesystem_credentials(site_url() . '/wp-admin/', '', false, false, array());
			if ( ! WP_Filesystem($creds) ) {
				/* any problems and we exit */
				return false;
			}

			global $wp_filesystem;

			/* Correct original scripts file */
			$cf7Path = WPCF7_PLUGIN_DIR . DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR . 'js' . DIRECTORY_SEPARATOR;

			if (file_exists($cf7Path . 'scripts.js')) {
				$scripts_content = file_get_contents($cf7Path . 'scripts.js');
			} else {
				$scripts_content = file_get_contents($cf7Path . 'index.js');
			}

			$corrected_scripts = str_replace(	"if ( typeof window.FormData !== 'function' ) {",
				"if ( typeof window.FormData === 'undefined' ) {",
				$scripts_content);

			/* Save corrected scripts file */
			$folder = get_home_path() . 'wp-content' . DIRECTORY_SEPARATOR . 'aios-initial-setup-cf7-formdata-compatibility';
			$file_path = $folder . DIRECTORY_SEPARATOR . 'scripts.js';

			if ( wp_mkdir_p( $folder ) ) {
				$wp_filesystem->put_contents(
					$file_path,
					$corrected_scripts,
					FS_CHMOD_FILE
				);
			}

			update_option('asis_contact_form_7_formdata_compatibilty_file_path', $file_path);
		}
	}
}

new Module();