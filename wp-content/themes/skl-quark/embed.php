<?php
/**
 * The template used for displaying page content in page.php
 * Template Name: Embed Full-Screen
 * @package pro
 */
?>

<style type="text/css">
	body {
		background: #000;
		margin: 0;
		padding: 0;
		height: 100%;
		mein-height: 100%;
	}
	#back-to-skl {
		background: #000;
		width: 100%;
		height: 45px;
	}
	#back-image {
		background: url(/wp-content/themes/quark-progression.bak/images/back-to-skl.png) no-repeat;
		margin: 5px;
		height: 40px;
		width: 226px;
		background-size: cover;
	}
</style>

<div id="back-to-skl"><a href="javascript:history.back()"><div id="back-image"></a></div></div>

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content', 'page' ); ?>
			<?php endwhile; ?>