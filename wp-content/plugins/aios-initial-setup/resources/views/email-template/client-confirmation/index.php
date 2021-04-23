<!-- BEGIN: Row Box -->
<div class="wpui-row wpui-row-box">
	<div class="wpui-col-md-3">
		<p><span class="wpui-settings-title">Font family, size, and color</span></p>
	</div>
	<div class="wpui-col-md-9">
		<div class="wpui-row">
			<div class="wpui-col-md-6">
				<div class="form-group">
					<select name="<?=$options['name_fonts_client']?>" id="<?=$options['name_fonts_client']?>" class="w-100">
						<?php
							foreach ($safe_fonts as $category => $families) {
								echo '<optgroup label="' . ucwords(str_replace('-', ' ', $category)) . '">';
									foreach ($families as $font) {
										$value = $font . ', ' . $category;
										echo '<option value="' . $value . '" ' . selected($options['fonts_client'], $value, false ) . ' style="font-family: ' . $font . ';">' . $font . '</option>';
									}
								echo '</optgroup>';
							}
						?>
					</select>
				</div>
			</div>
			<div class="wpui-col-md-2">
				<div class="form-group">
					<select name="<?= $options['name_fonts_size_client'] ?>" id="<?= $options['name_fonts_size_client'] ?>" class="w-100">
						<?php
							foreach ($font_sizes as $size) {
								echo '<option value="' . $size . '" ' . selected( $options['fonts_size_client'], $size, false ) . ' style="font-size: ' . $size . 'px;">' . $size . 'px</option>';
							}
						?>
					</select>
				</div>
			</div>
			<div class="wpui-col-md-4">
				<div class="form-group">
					<input type="text" class="aios-color-picker" data-alpha="false" data-default-color="#000" name="<?= $options['name_fonts_color_client'] ?>" id="<?= $options['name_fonts_color_client'] ?>" value="<?= $options['fonts_color_client'] ?>">
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END: Row Box -->

<!-- BEGIN: Row Box -->
<div class="wpui-row wpui-row-box">
	<div class="wpui-col-md-3">
		<p><span class="wpui-settings-title">Header</span></p>
	</div>
	<div class="wpui-col-md-9">
		<div class="form-group">
			<?php
				$custom_header_content = $options['header_client'];
				$custom_header_id = $options['name_header_client'];
				$custom_header_setting = [
          'wpautop' => false,
          'media_buttons' => true,
          'tinymce' => false,
          'textarea_rows' => 5,
          'tabindex' => 1,
          'textarea_name' => $custom_header_id, // Editor #ID
        ];

				wp_editor(
					$custom_header_content,
					$custom_header_id,
					$custom_header_setting
				);
			?>
		</div>
	</div>
</div>
<!-- END: Row Box -->

<!-- BEGIN: Row Box -->
<div class="wpui-row wpui-row-box">
	<div class="wpui-col-md-3">
		<p><span class="wpui-settings-title">Intro Text</span></p>
	</div>
	<div class="wpui-col-md-9">
		<div class="form-group">
			<?php
				$custom_header_content = $options['intro_client'];
				$custom_header_id = $options['name_intro_client'];
				$custom_header_setting = [
          'wpautop' => false,
          'media_buttons' => true,
          'tinymce' => false,
          'textarea_rows' => 5,
          'tabindex' => 1,
          'textarea_name' => $custom_header_id, // Editor #ID
        ];

				wp_editor(
					$custom_header_content,
					$custom_header_id,
					$custom_header_setting
				);
			?>
		</div>
	</div>
</div>
<!-- END: Row Box -->

<!-- BEGIN: Row Box -->
<div class="wpui-row wpui-row-box">
	<div class="wpui-col-md-3">
		<p><span class="wpui-settings-title">Closing Text</span></p>
	</div>
	<div class="wpui-col-md-9">
		<div class="form-group">
			<?php
				$custom_header_content = $options['closing_client'];
				$custom_header_id = $options['name_closing_client'];
				$custom_header_setting = [
          'wpautop' => false,
          'media_buttons' => true,
          'tinymce' => false,
          'textarea_rows' => 5,
          'tabindex' => 1,
          'textarea_name' => $custom_header_id, // Editor #ID
        ];

				wp_editor(
					$custom_header_content,
					$custom_header_id,
					$custom_header_setting
				);
			?>
		</div>
	</div>
</div>
<!-- END: Row Box -->

<!-- BEGIN: Row Box -->
<div class="wpui-row wpui-row-box">
	<div class="wpui-col-md-3">
		<p><span class="wpui-settings-title">Footer</span></p>
	</div>
	<div class="wpui-col-md-9">
		<div class="form-group">
			<?php
				$custom_footer_content = $options['footer_client'];
				$custom_footer_id = $options['name_footer_client'];
				$custom_footer_setting = [
          'wpautop' => false,
          'media_buttons' => true,
          'tinymce' => false,
          'textarea_rows' => 10,
          'tabindex' => 2,
          'textarea_name' => $custom_footer_id, // Editor #ID
        ];

				wp_editor(
					$custom_footer_content,
					$custom_footer_id,
					$custom_footer_setting
				);
			?>
		</div>
	</div>
</div>
<!-- END: Row Box -->

<!-- BEGIN: Row Box -->
<div class="wpui-row wpui-row-box">
	<div class="wpui-col-md-3">
		<p><span class="wpui-settings-title">Preview</span></p>
	</div>
	<div class="wpui-col-md-9">
    <?= do_shortcode('
      <table width="100%" align="center" border="0" cellspacing="0" cellpadding="0" bgcolor="#ffffff" style="padding-top: 25px; padding-bottom: 25px;">
        <tr>
          <td align="center" valign="top">
            <table width="600" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td align="center" valign="top" bgcolor="#ffffff" style="padding-bottom: 20px; border-bottom: solid 1px #cacaca;' . $options['client_font_style'] . '">
                  ' . $options['header_client'] . '
                </td>
              </tr>
              <tr>
                <td align="left" valign="top" bgcolor="#ffffff" style="padding: 20px 0 10px;' . $options['client_font_style'] . '">
                  ' . $options['intro_client'] . '
                </td>
              </tr>
              <tr>
                <td align="left" valign="top" bgcolor="#ffffff" style="padding: 0;' . $options['client_font_style'] . '">
                  <strong><em>Message Body</em></strong>
                </td>
              </tr>
              <tr>
                <td align="left" valign="top" bgcolor="#ffffff" style="padding: 10px 0 20px;' . $options['client_font_style'] . '">
                  ' . $options['closing_client'] . '
                </td>
              </tr>
              <tr>
                <td align="center" valign="top" bgcolor="#ffffff" style="padding-top: 20px; border-top: solid 1px #cacaca;' . $options['client_font_style'] . '">
                  ' . $options['footer_client'] . '
                </td>
              </tr>
            </table>
          </td>
        </tr>
      </table>') ?>
	</div>
</div>
<!-- END: Row Box -->

<div class="wpui-row wpui-row-submit">
	<div class="wpui-col-md-12">
		<div class="form-group">
			<input type="submit" class="save-option-ajax wpui-secondary-button text-uppercase" value="Save Changes">
		</div>
	</div>
</div>
