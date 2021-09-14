<?php

namespace AiosInitialSetup\App\Controllers;

use AiosInitialSetup\App\Http\Request;
use AiosInitialSetup\Config\Assets;

class FrontendEnqueueController
{
  use Assets;

  private $enqueue_cdn;
  private $quick_search;
  private $handlers;
  private $global_assets = null;

  /**
   * FrontendEnqueue constructor.
   */
  public function __construct()
  {
    $this->enqueue_cdn = $this->enqueue_options();
    $this->quick_search = $this->quick_search_options();
    $this->handlers = $this->enqueue_separated_names($this->enqueue_cdn);

    // Replace wp jquery core
    add_action('wp_default_scripts', [$this, 'replace_scripts'], -1);

    // Enqueue files
    // add_action('wp_head', [$this, 'preload_files'], 0);
    add_action('wp_enqueue_scripts', [$this, 'enqueueCdnLibraries']);

    // Add async attr for script tag
    add_filter('script_loader_tag', [$this, 'scriptFilter'], 10, 2);

    // Add user navigated from same domain
    add_filter('body_class', [$this, 'navigateOnSameDomainAndPostTypeSlug'], 11);

    // fallback: body_class navigateOnSameDomainAndPostTypeSlug
    add_action('wp_footer', [$this, 'domainReferer'], 10);

    // Disabled lazy load by default in WordPress 5.5.x or higher
    add_filter('wp_lazy_loading_enabled', '__return_false');

    // Remove breadcrumb from content
    add_action('init', [$this, 'removeParentThemeActions'], 99);
  }

  /**
   * Replace jQuery Scripts
   *
   * @param $scripts
   */
  public function replace_scripts($scripts)
  {
    $jQueryMigrate = get_option('aios-jquery-migrate', []);

    if ((is_admin() && (isset($jQueryMigrate['admin']) && $jQueryMigrate['admin'] === '1')) || (!is_admin() && (!isset($jQueryMigrate['frontend']) || ($jQueryMigrate['frontend'] !== '1')))) {
      $this->jquery_assets($scripts);
    }
  }

  /**
   * Enqueue CDN libraries.
   *
   * @since 2.8.6
   *
   * @access public
   */
  public function enqueueCdnLibraries() {
  	// Is migrated?
	  $jQueryMigrate = get_option('aios-jquery-migrate', []);
	  $useLegacyJquery = ! isset($jQueryMigrate['frontend']) || $jQueryMigrate['frontend'] !== '1';

    // Enqueue Required Assets
    $this->enqueue_required_assets($this->enqueue_cdn);
	  $this->enqueue_default_assets($useLegacyJquery);
	  $this->enqueue_separated_assets($this->handlers, $this->quick_search);

    if ($this->quick_search['enabled'] ?? '' !== '') {
      $localize_handler_name = is_null($this->global_assets) ? 'aios-quick-search-js' : 'aios-merged-resources';
      wp_localize_script($localize_handler_name, 'aios_qs_ajax', [get_site_url() . '/31jislt2xAmlqApY8aDhWbCzmonLuOZp']);
    }

    // Enqueue script for specific single
    if (is_singular() && get_option('thread_comments')) {
      wp_enqueue_script('comment-reply');
    }

    // Enqueue generate page css
    $generatePages = get_option('aios-generate-pages', []);

    if (! empty($generatePages)) {
      if (isset($generatePages['about'])) {
        wp_enqueue_style('aios-generated-about-page', AIOS_INITIAL_SETUP_RESOURCES . "css/{$generatePages['about']}.min.css");
      }

      if (isset($generatePages['contact'])) {
        wp_enqueue_style('aios-generated-contact-page', AIOS_INITIAL_SETUP_RESOURCES . "css/{$generatePages['contact']}.min.css");
      }
    }

  }

  /**
   * Add custom attributes to enqueued scripts
   *
   * @param $tag
   * @param $handle
   * @return mixed
   * @since 4.5.6
   *
   * @access public
   */
  public function scriptFilter($tag, $handle) {
    if ($handle === 'aios-picturefill') {
      $tag = str_replace(' src', ' async src', $tag);
    } elseif ($handle === 'aios-lazysizes') {
      $tag = str_replace(' src', ' async src', $tag);
    }

    return $tag;
  }

  /**
   * Add class of post type and post name
   * Add class if http referrer is same domain
   *
   * @since 4.3.0
   * @access public
   * @param array $classes - available classes for body
   * @return array
   */
  public function navigateOnSameDomainAndPostTypeSlug($classes)
  {
    global $post;
    if (isset($post)) {
      $classes[] = "post-{$post->post_type}-{$post->post_name}";
    }

    if (isset($_SERVER['HTTP_REFERER'])) {
      if (strpos($_SERVER['HTTP_REFERER'], home_url()) !== false) {
        $classes[] = 'user-navigated-from-a-page-on-the-site';
      }
    }

    return $classes;
  }

  /**
   * Add fallback for caching enabled "if site referer same domain"
   *
   * @return void
   * @since 4.3.0
   * @access public
   */
  public function domainReferer()
  {
    echo '<script>
        var docRef = (  document.referrer == undefined ? "" :  document.referrer );
        if ( document.referrer.indexOf( "' . home_url() . '" ) !== -1 && !document.body.classList.contains( "user-navigated-from-a-page-on-the-site" ) ) document.body.className += " user-navigated-from-a-page-on-the-site";
      </script>';
  }

  /**
   * Remove Breadcrumb from Content
   *
   * @since 5.4.9
   */
  public function removeParentThemeActions()
  {
    $aios_metaboxes_breadcrumb = get_option('aios-metaboxes-breadcrumb', 0);

    if ($aios_metaboxes_breadcrumb) {
      global $aios_starter_theme_hook_action;
      remove_filter('aios_starter_theme_before_inner_page_content_filter', [$aios_starter_theme_hook_action, 'aios_starter_theme_add_breadcrumbs']);
    }
  }
}

new FrontendEnqueueController();
