<?php
/**
 * The Template for displaying all single products.
 *
 * Override this template by copying it to yourtheme/woocommerce/single-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
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
		
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="container-single-woocommerce-pro<?php  $attachment_ids = $product->get_gallery_attachment_ids(); if ( $attachment_ids ) { echo " gallery-of-images-top-pro"; }	 ?>">
			<?php wc_get_template_part( 'content', 'single-product' ); ?>
			</div>
		<?php endwhile; // end of the loop. ?>

	
<?php get_footer( 'shop' ); ?>