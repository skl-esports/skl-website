<?php
/**
 * @package pro
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="post-container-pro">
			
			
			<?php if(has_post_thumbnail()): ?>
				<div class="featured-blog-pro"><?php if(get_post_meta($post->ID, 'pro_external_link', true)): ?><a href="<?php echo esc_url( get_post_meta($post->ID, 'pro_external_link', true) );?>"><?php else: ?><a href="<?php the_permalink(); ?>"><?php endif; ?><?php the_post_thumbnail('progression-blog'); ?></a></div>
				<?php else: ?>
					<?php if(get_post_meta($post->ID, 'pro_gallery', true) ): ?>
						<div class="featured-blog-pro">
							<div class="flexslider gallery-progression">
					      		<ul class="slides">
									<?php $gallery_pro = get_post_meta( get_the_id(), 'pro_gallery', false ); foreach ( $gallery_pro as $single_gallery_img ) ?>
									<?php if($gallery_pro):  foreach($gallery_pro as $single_gallery_img): ?>
										<?php $image = wp_get_attachment_image_src($single_gallery_img, 'progression-blog'); ?>				
										<li>
											<?php if(get_post_meta($post->ID, 'pro_external_link', true)): ?><a href="<?php echo esc_url( get_post_meta($post->ID, 'pro_external_link', true) );?>"><?php else: ?><a href="<?php the_permalink(); ?>"><?php endif; ?><img src="<?php echo esc_attr($image[0]);?>" alt="Gallery Image"></a>
										</li>
									<?php endforeach; endif; ?>
								</ul>
							</div><!-- close .flexslider -->
						</div>
					<?php else: ?>
						<?php if(get_post_meta($post->ID, 'pro_video_post', true)): ?>
							<div class="featured-blog-pro"><?php echo apply_filters('the_content', get_post_meta($post->ID, 'pro_video_post', true)); ?></div>
						<?php endif; ?>
					<?php endif; ?>
			<?php endif; ?>			
				
			<h1 class="blog-title-pro"><?php if(get_post_meta($post->ID, 'pro_external_link', true)): ?><a href="<?php echo esc_url( get_post_meta($post->ID, 'pro_external_link', true) );?>"><?php else: ?><a href="<?php the_permalink(); ?>"><?php endif; ?><?php the_title(); ?></a></h1>
			
			<?php if ( 'post' == get_post_type() ) : ?>
				<div class="post-meta-pro">
					 <span class="author-meta-pro"><i class="fa fa-user"></i><?php the_author_posts_link(); ?></span>
					 <span class="date-meta-pro"><i class="fa fa-calendar"></i><a href="<?php echo get_month_link(get_the_time('Y'), get_the_time('m')); ?>"><?php the_time(get_option('date_format')); ?></a></span>
					<span class="comment-meta-pro"><i class="fa fa-comment"></i><?php comments_popup_link( '' . esc_html__( 'No Comments', 'quark-progression' ) . '', esc_html__( '1 Comment', 'quark-progression' ), esc_html__( '% Comments', 'quark-progression' ) ); ?></span>
					 <span class="cat-meta-pro"><i class="fa fa-folder-open"></i><?php the_category(', '); ?></span>
				</div>
			<?php endif; ?>
			
			
			<?php if ( 'post' == get_post_type() ) : ?>
				<div class="summary-post-pro"><?php the_content( sprintf( wp_kses( __( 'Continue reading', 'quark-progression' ), array( 'span' => array( 'class' => array() ) ) ), the_title( '<span class="screen-reader-text">"', '"</span>', false ) ) ); ?></div>
			<?php endif; ?>
			
			
			<?php wp_link_pages( array(
					'before' => '<div class="page-nav-pro">' . esc_html__( 'Pages:', 'quark-progression' ),
					'after'  => '</div>',
					'link_before' => '<span>',
					'link_after'  => '</span>',
				) );
			?>
			
	
	<?php if ( is_sticky() && is_home() && ! is_paged() ) { printf( '<div class="sticky-post-pro">%s</div>', esc_html__( 'Featured', 'quark-progression' ) ); } ?>
	<div class="clearfix-pro"></div>
	</div><!-- close .post-container-pro -->
</article><!-- #post-## -->