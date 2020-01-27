<?php
/**
 * The template for displaying product category thumbnails within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product_cat.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see 	    http://docs.woothemes.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.6.1
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<li <?php wc_product_cat_class(); ?>>
<div class="shop-container-pro">
	<?php do_action( 'woocommerce_before_subcategory', $category ); ?>
	
	<div class="image-index-woo-pro">
		<a href="<?php echo get_term_link( $category->slug, 'product_cat' ); ?>"><?php do_action( 'woocommerce_before_subcategory_title', $category ); ?></a>
	</div>
	<a href="<?php echo get_term_link( $category->slug, 'product_cat' ); ?>">
		<h3>
			<?php
				echo $category->name;
				if ( $category->count > 0 )
					echo apply_filters( 'woocommerce_subcategory_count_html', ' <mark class="count">(' . $category->count . ')</mark>', $category );
			?>
		</h3>
		<?php do_action( 'woocommerce_after_subcategory_title', $category ); ?>
	</a>
	<?php do_action( 'woocommerce_after_subcategory', $category ); ?>
</div>
</li>
