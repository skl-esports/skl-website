<?php
/**
 * The Header for our theme.
 *
 * @package pro
 * @since pro 1.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<?php include( get_template_directory() . '/header/page-loader.php'); ?>
	<div id="boxed-layout-pro">
		<?php if (get_theme_mod( 'fixed_menu_pro', 'fixed-pro' ) == 'fixed-pro') : ?><div id="sticky-header-pro" class="menu-default-pro"><?php endif; ?>
			<header id="masthead-pro" class="site-header-pro">
			
					<div id="logo-nav-pro">
						<div class="width-container-pro">
							<h1 id="logo-pro" class="logo-inside-nav-pro"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo esc_attr( get_theme_mod( 'progression_theme_logo', get_template_directory_uri() . '/images/logo.png' ) ); ?>" alt="<?php bloginfo('name'); ?>" <?php if (get_theme_mod( 'sticky_pro_theme_logo')): ?>class="default-logo-pro"<?php endif; ?>><?php if (get_theme_mod( 'sticky_pro_theme_logo')): ?><img src="<?php echo esc_attr(get_theme_mod( 'sticky_pro_theme_logo')); ?>" alt="<?php bloginfo('name'); ?>" class="sticky-logo-pro"><?php endif; ?></a></h1>
								
							<?php if (class_exists('Woocommerce')) : ?><?php include( get_template_directory() . '/header/cart-header.php'); ?><?php endif; ?>
							<div class="mobile-menu-icon-pro noselect"><i class="fa fa-bars"></i></div>
							<nav id="site-navigation" class="main-navigation"><?php wp_nav_menu( array('theme_location' => 'primary', 'menu_class' => 'sf-menu', 'fallback_cb' => false, 'walker'  => new ProgressionFrontendWalker ) ); ?><?php if ( has_nav_menu( 'primary' ) ):  ?><?php endif; ?></nav>
						<div class="clearfix-pro"></div>
					</div><!-- close .width-container-pro -->
				</div>
				<?php include( get_template_directory() . '/header/mobile-navigation.php'); ?>
			</header>
		<?php if (get_theme_mod( 'fixed_menu_pro', 'fixed-pro' ) == 'fixed-pro') : ?></div><?php endif; ?>
		
		