<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package pro
 */
?>
<?php if(get_post_meta($post->ID, 'progression_page_sidebar', true) == 'right-sidebar' ) : ?><div id="main-container-pro"><?php endif; ?>
<?php if(get_post_meta($post->ID, 'progression_page_sidebar', true) == 'left-sidebar' ) : ?><div id="main-container-pro"><?php endif; ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
		<div class="page-content-pro">
			<?php the_content(); ?>
			<?php wp_link_pages( array(
					'before' => '<div class="page-nav-pro">' . esc_html__( 'Pages:', 'quark-progression' ),
					'after'  => '</div>',
					'link_before' => '<span>',
					'link_after'  => '</span>',
				) );
			?>
		</div><!-- .entry-content -->
	
	</article><!-- #post-## -->

	<?php if ( comments_open() || get_comments_number() ) : comments_template(); endif; ?>

<?php if(get_post_meta($post->ID, 'progression_page_sidebar', true) == 'right-sidebar' ) : ?></div><!-- close #main-container-pro --><?php get_sidebar(); ?><?php endif; ?>
<?php if(get_post_meta($post->ID, 'progression_page_sidebar', true) == 'left-sidebar' ) : ?></div><!-- close #main-container-pro --><?php get_sidebar(); ?><?php endif; ?>