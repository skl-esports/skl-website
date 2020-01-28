<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package pro
 * @since pro 1.0
 */
?>
		<footer id="site-footer">
			
			<?php if ( is_active_sidebar( 'Footer Widgets' ) ) { ?>
			<div id="widget-area-qube">
				<div class="width-container-pro <?php echo esc_attr(get_theme_mod('pro_widget_count', 'footer-1-pro')); ?>">
					<?php dynamic_sidebar( 'Footer Widgets' ); ?>
					<div class="clearfix-pro"></div>
				</div><!-- close .width-container-pro -->
			</div><!-- close #widget-area-pro -->
			<?php } ?>
			
			<div id="copyright-pro">
				<div class="width-container-pro">
					<?php echo wp_kses(get_theme_mod( 'footer_copyright_pro', '2015 All Rights Reserved. Developed by ProgressionStudios' ), true); ?>
				</div>
			</div><!-- close #copyright-pro -->
			
		</footer>
	</div><!-- close #boxed-layout-pro -->
	<a href="#0" id="pro-scroll-top"><?php esc_html_e( 'Scroll to top', 'quark-progression' ); ?></a>
<?php wp_footer(); ?>
</body>
</html>