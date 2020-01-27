<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package pro
 */

get_header(); ?>

	<div id="page-title-pro" class="page-title-pro">
		<div class="width-container-pro fadeInBlock">
			<h1 class="entry-title-pro"><?php esc_html_e( '404 Error', 'quark-progression' ); ?></h1>
			<h2><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'quark-progression' ); ?></h2>
		</div>
	</div><!-- #page-title-pro -->
	
	<div id="content-pro">
		<div class="width-container-pro">
			
			<br>
			<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links in the navigation or a search?', 'quark-progression' ); ?></p>
			<?php get_search_form(); ?>
			<br>
			
		<div class="clearfix-pro"></div>
		</div><!-- close .width-container-pro -->
	</div><!-- #content-pro -->
	
<?php get_footer(); ?>