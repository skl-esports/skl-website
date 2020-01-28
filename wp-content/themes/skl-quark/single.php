<?php
/**
 * The template for displaying all single posts.
 *
 * @package pro
 */

get_header(); ?>
	
	
	<?php if( get_option( 'page_for_posts' ) ) : $cover_page = get_page( get_option( 'page_for_posts' ) ); ?>
	
	<?php if(get_post_meta($cover_page->ID, 'progression_page_title', true) == 'hide' ) : ?><?php else: ?>
	<div id="page-title-pro">
		<div class="width-container-pro">
			<h1 class="entry-title-pro"><?php $page_for_posts = get_option('page_for_posts'); ?><?php echo get_the_title($page_for_posts); ?></h1>
			<?php if(get_post_meta($cover_page->ID, 'progression_sub_title', true)) : ?><h2><?php echo esc_html( get_post_meta($cover_page->ID, 'progression_sub_title', true) );?></h2><?php endif; ?>
		</div>
	</div><!-- #page-title-pro -->
	<?php endif; ?>
	<?php else: ?>
		<div id="page-title-pro">
			<div class="width-container-pro">
				<h1 class="entry-title-pro"><?php esc_html_e( 'Latest Posts', 'quark-progression' ); ?></h1>
			</div>
		</div><!-- #page-title-pro -->
	<?php endif; ?>
	
	
	<div id="content-pro" class="site-content">
		<div class="width-container-pro<?php if( get_option( 'page_for_posts' ) ) : $cover_page = get_page( get_option( 'page_for_posts' ) ); ?><?php if(get_post_meta($cover_page->ID, 'progression_page_sidebar', true) == 'left-sidebar' ) : ?> left-sidebar-pro<?php endif; ?><?php endif; ?>">
			
			<?php if( get_option( 'page_for_posts' ) ) : $cover_page = get_page( get_option( 'page_for_posts' ) ); ?>
			<?php if(get_post_meta($cover_page->ID, 'progression_page_sidebar', true) == 'right-sidebar' ) : ?><div id="main-container-pro"><?php endif; ?>
			<?php if(get_post_meta($cover_page->ID, 'progression_page_sidebar', true) == 'left-sidebar' ) : ?><div id="main-container-pro"><?php endif; ?>
			<?php endif; ?>
			
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'single' ); ?>

			<?php endwhile; // end of the loop. ?>
			
			<?php if( get_option( 'page_for_posts' ) ) : $cover_page = get_page( get_option( 'page_for_posts' ) ); ?>
			<?php if(get_post_meta($cover_page->ID, 'progression_page_sidebar', true) == 'right-sidebar' ) : ?></div><!-- close #main-container-pro --><?php get_sidebar(); ?><?php endif; ?>
			<?php if(get_post_meta($cover_page->ID, 'progression_page_sidebar', true) == 'left-sidebar' ) : ?></div><!-- close #main-container-pro --><?php get_sidebar(); ?><?php endif; ?>
			<?php endif; ?>
			
		<div class="clearfix-pro"></div>
		</div><!-- close .width-container-pro -->
	</div><!-- #content-pro -->
<?php get_footer(); ?>