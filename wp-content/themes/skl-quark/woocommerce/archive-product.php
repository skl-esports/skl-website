<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive.
 *
 * Override this template by copying it to yourtheme/woocommerce/archive-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>
	<?php $your_shop_page = get_post( wc_get_page_id( 'shop' ) ); ?>
	
	
	<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
		<?php if(get_post_meta($your_shop_page->ID, 'progression_page_title', true) == 'hide' ) : ?><?php else: ?><?php if(get_post_meta($your_shop_page->ID, 'progression_page_title', true) == 'slider' ) : ?><?php else: ?>
		<div id="page-title-pro">
				<h1 class="entry-title-pro"><?php woocommerce_page_title(); ?></h1>
				<?php if(get_post_meta($your_shop_page->ID, 'progression_sub_title', true)) : ?><h2><?php echo esc_html( get_post_meta($your_shop_page->ID, 'progression_sub_title', true) );?></h2><?php endif; ?>
		</div><!-- #page-title-pro -->
		<?php endif; ?><?php endif; ?>
	<?php endif; ?>
	
	
	
	
	<div id="content-pro">
		<div class="width-container-pro<?php if(get_post_meta($your_shop_page->ID, 'progression_page_sidebar', true) == 'left-sidebar' ) : ?> left-sidebar-pro<?php endif; ?>">
			
			
			
		<?php if(get_post_meta($your_shop_page->ID, 'progression_page_sidebar', true) == 'right-sidebar' ) : ?><div id="main-container-pro"><?php endif; ?>
		<?php if(get_post_meta($your_shop_page->ID, 'progression_page_sidebar', true) == 'left-sidebar' ) : ?><div id="main-container-pro"><?php endif; ?>
		
		<?php do_action( 'woocommerce_before_main_content' ); ?>
		
		
		<?php do_action( 'woocommerce_archive_description' ); ?>
		
		<div class="woocommerce columns-<?php echo esc_attr(get_theme_mod( 'woocommerce_columns_pro', '3')); ?>">

		<?php if ( have_posts() ) : ?>

			<?php do_action( 'woocommerce_before_shop_loop' ); ?>

			<?php woocommerce_product_loop_start(); ?>

				<?php woocommerce_product_subcategories(); ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<?php wc_get_template_part( 'content', 'product' ); ?>

				<?php endwhile; // end of the loop. ?>

			<?php woocommerce_product_loop_end(); ?>

			<?php do_action( 'woocommerce_after_shop_loop' ); ?>

		<?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>

			<?php wc_get_template( 'loop/no-products-found.php' ); ?>

		<?php endif; ?>
		
		</div><!-- close .woocommerce columns-3 -->

	<?php do_action( 'woocommerce_after_main_content' ); ?>
	
	<?php if(get_post_meta($your_shop_page->ID, 'progression_page_sidebar', true) == 'right-sidebar' ) : ?></div><!-- close #main-container-pro --><?php do_action( 'woocommerce_sidebar' );?><div class="clearfix-pro"></div><?php endif; ?>
	<?php if(get_post_meta($your_shop_page->ID, 'progression_page_sidebar', true) == 'left-sidebar' ) : ?></div><!-- close #main-container-pro --><?php do_action( 'woocommerce_sidebar' );?><div class="clearfix-pro"></div><?php endif; ?>

		</div><!-- close .width-container-pro -->
	</div><!-- #content-pro -->

<?php get_footer( 'shop' ); ?>