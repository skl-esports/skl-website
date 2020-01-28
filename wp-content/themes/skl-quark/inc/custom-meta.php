<?php
/**
 * Define the metabox and field configurations.
 *
 * @param  array $meta_boxes
 * @return array
 */
function pro_page_metaboxes( array $meta_boxes_pro ) {
	
	$page_fields_pro = array(
		
		array( 
			'id' => 'progression_sub_title',  
			'name' => esc_html__('Sub-title (optional)', 'quark-progression'),
			'type' => 'text'
		),
		
		
		array( 
			'id' => 'progression_page_title',  
			'name' => esc_html__('Page Title Display', 'quark-progression'),
			'type' => 'select',
			'options' => array( 
				'show' => esc_html__('Default Display', 'quark-progression'), 
				'hide' => esc_html__('Hide Page Title', 'quark-progression'), 
			),
			'cols' => '6'
		),
		
		array( 
			'id' => 'progression_page_sidebar',  
			'name' => esc_html__('Sidebar Display', 'quark-progression'),
			'type' => 'select',
			'options' => array( 
				'hidden-sidebar' => esc_html__('Hide Sidebar', 'quark-progression'), 
				'right-sidebar' => esc_html__('Sidebar Right', 'quark-progression'), 
				'left-sidebar' => esc_html__('Sidebar Left', 'quark-progression') 
			),
			'cols' => '6'
		),
		
		array( 
			'id' => 'progression_header_image',  
			'name' => esc_html__('Page Title Background Image', 'quark-progression'),
			'type' => 'image',
			'cols' => '6'
		),
		
		array( 
			'id' => 'progression_nav_bg',  
			'name' => esc_html__('Navigation Override Background Color', 'quark-progression'),
			'type' => 'colorpicker',
			'cols' => '6'
		),
		
	);

	$meta_boxes_pro[] = array(
		'title' => esc_html__('Page Settings', 'quark-progression'),
		'pages'      => array('page'),
		'priority'    => 'core', // Meta box context
		'context'    => 'normal', // Meta box context
		'fields' => $page_fields_pro
	);

	return $meta_boxes_pro;

}
add_filter( 'cmb_meta_boxes', 'pro_page_metaboxes' );



function progression_post_metaboxes( array $meta_boxes_pro ) {
	
	$post_fields_pro = array(
		array( 
			'id' => 'pro_gallery',  
			'name' => esc_html__('Image Gallery', 'quark-progression'),
			'desc' => esc_html__('Add-in images to display a gallery.', 'quark-progression'),
			'type' => 'image',
			'repeatable' => true
		),
		array( 
			'id' => 'pro_video_post',  
			'name' => esc_html__('Audio/Video Embed', 'quark-progression'),
			'desc' => esc_html__('Paste in your video url or embed code', 'quark-progression'),
			'type' => 'text'
		),
		array( 
			'id' => 'pro_external_link',  
			'name' => esc_html__('External Link', 'quark-progression'),
			'desc' => esc_html__('Make your post link to another page', 'quark-progression'),
			'type' => 'text'
		)
	);

	$meta_boxes_pro[] = array(
		'title' => esc_html__('Post Settings', 'quark-progression'),
		'pages'      => array('post'),
		'priority'   => 'high', // Meta box priority
		'context'    => 'normal', // Meta box context
		'fields' => $post_fields_pro
	);

	return $meta_boxes_pro;

}
add_filter( 'cmb_meta_boxes', 'progression_post_metaboxes' );

