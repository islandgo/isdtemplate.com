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
</body>
</html>
