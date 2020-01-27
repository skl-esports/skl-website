<?php
function stats_theme_enqueue_styles() {
 
    $parent_style = 'progression-style';
 
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'stats-style',
        get_stylesheet_directory_uri() . '/css/style.min.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'stats_theme_enqueue_styles' );
?>