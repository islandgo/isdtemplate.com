<<<<<<< HEAD
<?php if ( !is_home() && !is_page_template( 'template-fullwidth.php' ) && !is_page_template( 'template-homepage.php' ) ) : ?>
<div class="clearfix"></div>
</div><!-- end of #inner-page-wrapper .inner -->
</div><!-- end of #inner-page-wrapper -->
<?php endif ?>
</main>

<footer class="footer">
	<div class="footer-top">
		<!-- Footer Contact -->
		<div class="footer-contact">
			<div class="footer-contact-item">
				<span class="ai-font-phone"></span>
				<?php echo do_shortcode('[ai_phone href="+1.713.551.1842"] 713.551.1842[/ai_phone]')?>
			</div>
			<div class="footer-contact-item">
				<span class="ai-font-envelope-f"></span>
				<?php echo do_shortcode('[mail_to email="jemila@remaxlegacyliving.com"] jemila@remaxlegacyliving.com[/mail_to]')?>
			</div>
			<div class="footer-contact-item">
				<span class="ai-font-location-c"></span>
				<span class="location">Home Smart Success Realty LLC <br> 169 S River Road #3, BEDFORD, NH, 03110</span>
			</div>
		</div>
		<div class="footer-group">
			<div class="footer-logo">
				<img alt="logo" class="img-responsive"
					src="<?php echo get_stylesheet_directory_uri() ?>/images/footer-logo.png" width="360"
					height="260" />
			</div>
			<ul class="footer-smi">
				<li>
					<a href="[ai_client_facebook]" target="_blank" aria-label="facebook">
						<span class="ai-font-facebook"></span>
					</a>
				</li>
				<li>
					<a href="[ai_client_twitter]" target="_blank" aria-label="twitter">
						<span class="ai-font-twitter"></span>
					</a>
				</li>
				<li>
					<a href="[ai_client_youtube]" target="_blank" aria-label="youtube">
						<span class="ai-font-youtube"></span>
					</a>
				</li>
				<li>
					<a href="[ai_client_linkedin]" target="_blank" aria-label="linkedin">
						<span class="ai-font-linkedin"></span>
					</a>
				</li>
				<li>
					<a href="[ai_client_instagram]" target="_blank" aria-label="instagram">
						<span class="ai-font-instagram"></span>
					</a>
				</li>

			</ul>
		</div>
		<div class="footer-nav">
			<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu_class' => 'footernav', 'theme_location' => 'primary-menu','depth'=>1 ) ); ?>
		</div>
	</div>
	<!-- Footer Bottom -->
	<p class="footer-outro">Jemila Winsey is committed to providing an accessible website. If you have difficulty
		accessing content, have difficulty viewing a file on the website, or notice any accessibility problems, please
		contact us at
		<?php echo do_shortcode('[ai_phone href="+1.713.551.1842"] 713.551.1842[/ai_phone]')?> to specify the nature of
		the accessibility issue and any assistive technology you
		use. We strive to provide the content you need in the format you require.
	</p>

	<p class="copyright">Copyright ©
		<?php echo do_shortcode('[currentYear]')?> <span class="sitename">Jemila Winsey.</span> All rights
		reserved. <a class="sitemap" href="<?php echo do_shortcode('[blogurl]')?>/sitemap">Sitemap</a>.
		<?php echo do_shortcode('[agentimage_credits credits="Real Estate Website Design by <a target="_blank" href="https://www.agentimage.com" style="text-decoration:underline;font-weight:bold">Agent Image</a>"]'); ?>
	</p>
	<div class="mls">
		<em class="ai-font-realtor-mls" title="MLS"></em>
		<em class="ai-font-eho" title="MLS"></em>
	</div>
</footer>

<?php do_action('aios_neighborhoods_footer')?>
<?php do_action('aios_landing_page_footer')?>

</div><!-- end of #main-wrapper -->


<?php wp_footer(); ?>
=======
			<?php if ( !is_home() && !is_page_template( 'template-fullwidth.php' ) && !is_page_template( 'template-homepage.php' ) ) : ?>
			<div class="clearfix"></div>
			</div><!-- end of #inner-page-wrapper .inner -->
			</div><!-- end of #inner-page-wrapper -->
		<?php endif ?>
	</main>
	
		<footer class="footer">
			<div class="container">
				<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu_class' => 'footernav', 'theme_location' => 'primary-menu','depth'=>1 ) ); ?>
				<div class="footer-lower">
					<p class="copyright">© Copyright 2021 <span class="sitename"> Brooke & Nieto Real Estate Team. </span>All rights reserved. <a class="sitemap" href="<?php echo do_shortcode('[blogurl]')?>/sitemap">Sitemap</a> | Design by <a target="_blank" href="https://www.agentimage.com" style="text-decoration:underline;font-weight:bold">Agent Image</a> - Real Estate Web Development</p>
					<div class="mls">
						<em class="ai-font-eho" title="MLS"></em>	
						<em class="ai-font-realtor-mls" title="MLS"></em>
					</div>
				</div>
			</div>		
		</footer>
		
		<?php do_action('aios_neighborhoods_footer')?>
		<?php do_action('aios_landing_page_footer')?>
		
	</div><!-- end of #main-wrapper -->


	<?php wp_footer(); ?>
>>>>>>> f2643324ff70065de82f4df7b7fbab20a949a9d8
</body>

</html>