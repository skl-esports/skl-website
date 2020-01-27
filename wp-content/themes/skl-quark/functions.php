<?php
/**
 * pro functions and definitions
 *
 * @package pro
 * @since pro 1.0
 */


if ( ! function_exists( 'progression_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 *
 * @since progression 1.0
 */

	
function progression_setup() {
	
	if(function_exists( 'set_revslider_as_theme' )){
		add_action( 'init', 'progression_ezio_custom_slider_rev' );
		function progression_ezio_custom_slider_rev() { set_revslider_as_theme(); }
	}
	add_action( 'vc_before_init', 'progression_SetAsTheme' );
	function progression_SetAsTheme() { vc_set_as_theme( $disable_updater = true ); }

	
	// Post Thumbnails
	add_theme_support( 'post-thumbnails' );
	
	add_image_size('progression-blog', 1000, 500, true);

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on pro, use a find and replace
	 * to change 'quark-progression' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'quark-progression', get_template_directory() . '/languages' );

	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );
	
	
	/**
	 * Custom Widgets
	 */
	require( get_template_directory() . '/inc/widgets/widgets.php' );
	
	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );
	

	/**
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'quark-progression' ),
		'mobile-menu' => esc_html__( 'Mobile Menu', 'quark-progression' ),
	) );
	
	
	
}
endif; // progression_setup
add_action( 'after_setup_theme', 'progression_setup' );


/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since pro 1.0
 */
if ( ! isset( $content_width ) )
	$content_width = 1140; /* pixels */


/**
 * Register widgetized area and update sidebar with default widgets
 *
 * @since pro 1.0
 */
function progression_widgets_init() {
	register_sidebar( array(
		'name' => esc_html__( 'Sidebar', 'quark-progression' ),
		'description'   => esc_html__('Default sidebar', 'quark-progression'),
		'id' => 'sidebar-1',
		'before_widget' => '<div id="%1$s" class="sidebar-item widget %2$s">',
		'after_widget' => '</div><div class="sidebar-divider-pro"></div>',
		'before_title' => '<h6 class="widget-title">',
		'after_title' => '</h6>',
	) );
	
	register_sidebar( array(
		'name' => esc_html__( 'Shop Sidebar', 'quark-progression' ),
		'description'   => esc_html__( 'WooCommerce sidebar', 'quark-progression' ),
		'id' => 'sidebar-shop',
		'before_widget' => '<div id="%1$s" class="sidebar-item widget %2$s">',
		'after_widget' => '</div><div class="sidebar-divider-pro"></div>',
		'before_title' => '<h6 class="widget-title">',
		'after_title' => '</h6>',
	) );
	
	register_sidebar( array(
		'name' => esc_html__( 'Footer Widgets', 'quark-progression' ),
		'description' => esc_html__( 'Footer widgets', 'quark-progression' ),
		'id' => 'footer-widgets',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>',
	) );
	
}
add_action( 'widgets_init', 'progression_widgets_init' );


add_filter( 'safe_style_css', function( $styles ) {
    $styles[] = 'display';
	 $styles[] = 'position';
	 $styles[] = 'left';
    return $styles;
} );


/**
 * Enqueue scripts and styles
 */
function progression_scripts() {
	wp_enqueue_style( 'progression-style', get_stylesheet_uri());
	wp_enqueue_style( 'progression-google-fonts', progression_fonts_url(), array( 'progression-style' ), '1.0.0' );
	wp_enqueue_script( 'progression-plugins', get_template_directory_uri() . '/js/plugins.js', array( 'jquery' ), '20120206', true );
	wp_enqueue_script( 'progression-scripts', get_template_directory_uri() . '/js/script.js', array( 'jquery' ), '20120206', true );
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) { wp_enqueue_script( 'comment-reply' ); }
}
add_action( 'wp_enqueue_scripts', 'progression_scripts' );



/**
 * Enqueue google fonts
 */
function progression_fonts_url() {
    $progression_font_url = '';

    /*
    Translators: If there are characters in your language that are not supported
    by chosen font(s), translate this to 'off'. Do not translate into your own language.
     */
    if ( 'off' !== _x( 'on', 'Google font: on or off', 'quark-progression' ) ) {
        $progression_font_url = add_query_arg( 'family', urlencode( 'Poppins:500,300,600|Martel Sans:400,600&subset=latin' ), "//fonts.googleapis.com/css" );
    }
	 
    return $progression_font_url;
}



/**
 * Enqueue or de-enqueue third party plugin scripts/styles
 */
function progression_plugin_styles_scripts() {
	wp_enqueue_style( 'prettyphoto' );
	
	wp_deregister_style( 'flexslider' );
	wp_deregister_style( 'font-awesome' );
	
	wp_deregister_script( 'prettyphoto' );

}
add_action( 'wp_enqueue_scripts', 'progression_plugin_styles_scripts', 100 );


/**
 * Custom Editor Styles
 */
function progression_add_editor_styles() {
    add_editor_style( 'inc/editor-style.css' );
}
add_action( 'admin_init', 'progression_add_editor_styles' );


/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Custom Metabox Fields
 */
require get_template_directory() . '/inc/Custom-Meta-Boxes/custom-meta-boxes.php';

/**
 * Theme Customizer
 */
require get_template_directory() . '/inc/default-customizer.php';

/**
 * Theme Customizer
 */
require get_template_directory() . '/inc/mega-menu/mega-menu-framework.php';


/**
 * Load Plugin Activiation
 */
/** require get_template_directory() . '/inc/tgm-plugin-activation/plugin-activation.php'; */


/**
 * WooCommerce Functions
 */
if ( ! function_exists( 'woocommerce' ) ) require get_template_directory() . '/inc/woocommerce-functions.php';