<?php

/**
 *
 * @package pro
 * @since pro 1.0
 */

get_header(); ?>
	
	
	<?php if(get_post_meta($post->ID, 'progression_page_title', true) == 'hide' ) : ?><?php else: ?>
	<div id="page-title-pro">
		<div class="width-container-pro">
			<?php the_title( '<h1 class="entry-title-pro">', '</h1>' ); ?>
			<?php if(get_post_meta($post->ID, 'progression_sub_title', true)) : ?><h2><?php echo esc_html( get_post_meta($post->ID, 'progression_sub_title', true) );?></h2><?php endif; ?>
		</div>
	</div><!-- #page-title-pro -->
	<?php endif; ?>
	

	<div id="content-pro"<?php if(get_post_meta($post->ID, 'progression_page_title', true) == 'hide' ) : ?> class="no-padding-pro"<?php endif; ?>>
		<div class="width-container-pro<?php if(get_post_meta($post->ID, 'progression_page_sidebar', true) == 'left-sidebar' ) : ?> left-sidebar-pro<?php endif; ?>">
			
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content', 'page' ); ?>
			<?php endwhile; ?>
		
		<div class="clearfix-pro"></div>
		</div><!-- close .width-container-pro -->
	</div><!-- #content-pro -->
	
<?php get_footer(); ?>