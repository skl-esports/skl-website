<?php
/**
 * qube Theme Customizer
 *
 * @package pro
 */
get_template_part('inc/customizer/new', 'controls');
get_template_part('inc/customizer/typography', 'controls');

/* Remove Default Theme Customizer Panels that aren't useful */
function pro_change_default_customizer_panels ( $wp_customize ) {
	$wp_customize->remove_section("themes"); //Remove Active Theme + Theme Changer
	
	$wp_customize->remove_section("title_tagline"); // Remove Title & Tagline Section
   $wp_customize->remove_section("static_front_page"); // Remove Front Page Section	
		
	//$wp_customize->get_section('themes')->priority = 500;
	// $wp_customize->remove_panel("widgets");  //Widgets Panel
}
add_action( "customize_register", "pro_change_default_customizer_panels" );


/**
 * Adds the individual sections, settings, and controls to the theme customizer
 */
function qube_customizer( $wp_customize ) {
	
	
	/* Panel - General */
	$wp_customize->add_panel( 'general_panel_pro', array(
		'priority'    => 10,
        'title'       => esc_html__( 'General', 'quark-progression' ),
    ) );
	
	/* Section - General - Logo */
	$wp_customize->add_section( 'section_logo_pro', array(
		'title'          => esc_html__( 'Logo', 'quark-progression' ),
		'panel'          => 'general_panel_pro', // Not typically needed.
		'priority'       => 10,
	) );
	
	/* Setting - General - Site Logo */
	$wp_customize->add_setting( 'progression_theme_logo' ,array(
		'default' => get_template_directory_uri().'/images/logo.png',
		'sanitize_callback' => 'progression_sanitize_text',
	) );
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'progression_theme_logo', array(
		'section' => 'section_logo_pro',
		'priority'   => 10,
		))
	);
	
	/* Setting - General - Site Logo */
	$wp_customize->add_setting('pro_theme_logo_width',array(
		'default' => '150',
		'sanitize_callback' => 'progression_sanitize_text',
	) );
	$wp_customize->add_control( new Progression_Controls_Slider_Control($wp_customize, 'pro_theme_logo_width', array(
		'label'    => esc_html__( 'Logo Width (px)', 'quark-progression' ),
		'section'  => 'section_logo_pro',
		'priority'   => 15,
		'choices'     => array(
			'min'  => 0,
			'max'  => 1200,
			'step' => 1
		),
	) ) );
	
	/* Setting - General - Site Logo */
	$wp_customize->add_setting('theme_logo_margin_top',array(
		'default' => '20',
		'sanitize_callback' => 'progression_sanitize_text',
	) );
	$wp_customize->add_control( new Progression_Controls_Slider_Control($wp_customize, 'theme_logo_margin_top', array(
		'label'    => esc_html__( 'Logo Margin Top (px)', 'quark-progression' ),
		'section'  => 'section_logo_pro',
		'priority'   => 20,
		'choices'     => array(
			'min'  => 0,
			'max'  => 150,
			'step' => 1
		),
	) ) );
	
	/* Setting - General - Site Logo */
	$wp_customize->add_setting('theme_logo_margin_bottom',array(
		'default' => '23',
		'sanitize_callback' => 'progression_sanitize_text',
	) );
	$wp_customize->add_control( new Progression_Controls_Slider_Control($wp_customize, 'theme_logo_margin_bottom', array(
		'label'    => esc_html__( 'Logo Margin Bottom (px)', 'quark-progression' ),
		'section'  => 'section_logo_pro',
		'priority'   => 25,
		'choices'     => array(
			'min'  => 0,
			'max'  => 150,
			'step' => 1
		),
	) ) );
	
	/* Setting - General - Site Logo */
	$wp_customize->add_setting( 'pro_theme_fav_icon' ,array(
		'sanitize_callback' => 'progression_sanitize_text',
	) );
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'pro_theme_fav_icon', array(
		'label'    => esc_html__( 'Favicon', 'quark-progression' ),
		'description'    => esc_html__( 'File must be .png or .ico format. Recommended Dimensions: 32px by 32px', 'quark-progression' ),
		'section' => 'section_logo_pro',
		'priority'   => 40,
		))
	);
	
	
	
	
	
	
	
	
	
	/* Section - General - Fixed Navigation */
	$wp_customize->add_section( 'section_sticky_navigation', array(
		'title'          => esc_html__( 'Sticky Navigation', 'quark-progression' ),
		'panel'          => 'general_panel_pro', // Not typically needed.
		'priority'       => 15,
	) );
	/* Section - General - Sticky Navigation */
	$wp_customize->add_setting( 'fixed_menu_pro', array(
		'default' => 'fixed-pro',
		'sanitize_callback' => 'progression_sanitize_text',
	) );
	$wp_customize->add_control(new Progression_Controls_Radio_Buttonset_Control($wp_customize, 'fixed_menu_pro', array(
		'section'  => 'section_sticky_navigation',
		'priority'   => 5,
		'choices'     => array(
			'fixed-pro' => esc_html__( 'Show Sticky Nav', 'quark-progression' ),
			'not-fixed-pro' => esc_html__( 'Hide Sticky Nav', 'quark-progression' ),
		),
	) ) );
	
	
	/* Setting - General - Sticky Navigation */
	$wp_customize->add_setting( 'sticky_pro_theme_logo' ,array(
		'sanitize_callback' => 'progression_sanitize_text',
	) );
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'sticky_pro_theme_logo', array(
		'label'    => esc_html__( 'Optional Sticky Nav Logo', 'quark-progression' ),
		'section' => 'section_sticky_navigation',
		'priority'   => 10,
		))
	);
	
	/* Setting - General - Sticky Navigation */
	$wp_customize->add_setting('sticky_pro_theme_logo_width',array(
		'default' => '130',
		'sanitize_callback' => 'progression_sanitize_text',
	) );
	$wp_customize->add_control( new Progression_Controls_Slider_Control($wp_customize, 'sticky_pro_theme_logo_width', array(
		'label'    => esc_html__( 'Logo Width (px)', 'quark-progression' ),
		'section'  => 'section_sticky_navigation',
		'priority'   => 12,
		'choices'     => array(
			'min'  => 0,
			'max'  => 1200,
			'step' => 1
		),
	) ) );
	
	
	/* Setting - General - Sticky Navigation */
	$wp_customize->add_setting('sticky_theme_logo_margin_top',array(
		'default' => '14',
		'sanitize_callback' => 'progression_sanitize_text',
	) );
	$wp_customize->add_control( new Progression_Controls_Slider_Control($wp_customize, 'sticky_theme_logo_margin_top', array(
		'label'    => esc_html__( 'Logo Margin Top (px)', 'quark-progression' ),
		'section'  => 'section_sticky_navigation',
		'priority'   => 30,
		'choices'     => array(
			'min'  => 0,
			'max'  => 100,
			'step' => 1
		),
	) ) );
	/* Setting - General - Sticky Navigation */
	$wp_customize->add_setting('sticky_theme_logo_margin_bottom',array(
		'default' => '16',
		'sanitize_callback' => 'progression_sanitize_text',
	) );
	$wp_customize->add_control( new Progression_Controls_Slider_Control($wp_customize, 'sticky_theme_logo_margin_bottom', array(
		'label'    => esc_html__( 'Logo Margin Bottom (px)', 'quark-progression' ),
		'section'  => 'section_sticky_navigation',
		'priority'   => 35,
		'choices'     => array(
			'min'  => 0,
			'max'  => 100,
			'step' => 1
		),
	) ) );
	/* Setting - General - Sticky Navigation */
	$wp_customize->add_setting('sticky_theme_nav_padding',array(
		'default' => '31',
		'sanitize_callback' => 'progression_sanitize_text',
	) );
	$wp_customize->add_control( new Progression_Controls_Slider_Control($wp_customize, 'sticky_theme_nav_padding', array(
		'label'    => esc_html__( 'Navigation Padding Top/Bottom', 'quark-progression' ),
		'section'  => 'section_sticky_navigation',
		'priority'   => 40,
		'choices'     => array(
			'min'  => 0,
			'max'  => 100,
			'step' => 1
		),
	) ) );
	
	/* Setting - Backgrounds - Header Background */
	$wp_customize->add_setting( 'sticky_font_color_pro', array(
		'default'	=> '',
		'sanitize_callback' => 'progression_sanitize_text',
	) );
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'sticky_font_color_pro', array(
		'label'    => esc_html__( 'Sticky Font Color', 'quark-progression' ),
		'section'  => 'section_sticky_navigation',
		'priority'   => 55,
		)
	) );
		

	/* Setting - Backgrounds - Header Background */
	$wp_customize->add_setting( 'sticky_hover_font_color_pro', array(
		'default'	=> '',
		'sanitize_callback' => 'progression_sanitize_text',
	) );
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'sticky_hover_font_color_pro', array(
		'label'    => esc_html__( 'Sticky Hover Font Color', 'quark-progression' ),
		'section'  => 'section_sticky_navigation',
		'priority'   => 55,
		)
	) );
		
	
	
	/* Setting - Backgrounds - Header Background */
	$wp_customize->add_setting( 'sticky_header_bg_color_pro', array(
		'default'	=> 'rgba(4,1,29,  0.92)',
		'sanitize_callback' => 'progression_sanitize_text',
	) );
	$wp_customize->add_control(new Progression_Customize_Alpha_Color_Control($wp_customize, 'sticky_header_bg_color_pro', array(
		'default'	=> 'rgba(4,1,29,  0.92)',
		'label'    => esc_html__( 'Header Background Color', 'quark-progression' ),
		'section'  => 'section_sticky_navigation',
		'priority'   => 100,
		)
	) );
	
	/* Setting - Backgrounds - Header Background */
	$wp_customize->add_setting( 'sticky_header_border_color_pro', array(
		'default'	=> 'rgba(4,1,29,  0.92)',
		'sanitize_callback' => 'progression_sanitize_text',
	) );
	$wp_customize->add_control(new Progression_Customize_Alpha_Color_Control($wp_customize, 'sticky_header_border_color_pro', array(
		'default'	=> 'rgba(4,1,29,  0.92)',
		'label'    => esc_html__( 'Header Border Bottom Color', 'quark-progression' ),
		'section'  => 'section_sticky_navigation',
		'priority'   => 120,
		)
	) );
	

	
	/* Section - General - Layout */
	$wp_customize->add_section( 'section_global_pro', array(
		'title'          => esc_html__( 'General Layout', 'quark-progression' ),
		'panel'          => 'general_panel_pro', // Not typically needed.
		'priority'       => 26,
	) );
	
	/* Setting - General - Layout */
	$wp_customize->add_setting( 'pro_site_layout_wide', array(
		'default' => 'full-width-pro',
		'sanitize_callback' => 'progression_sanitize_text',
	) );
	$wp_customize->add_control(new Progression_Controls_Radio_Buttonset_Control($wp_customize, 'pro_site_layout_wide', array(
		'label'    => esc_html__( 'Site Layout', 'quark-progression' ),
		'section'  => 'section_global_pro',
		'priority'   => 10,
		'choices'     => array(
			'full-width-pro' => esc_html__( 'Full Width', 'quark-progression' ),
			'boxed-pro' => esc_html__( 'Boxed', 'quark-progression' ),
		),
	) ) );


	
	/* Section - General - Page Transitions */
	$wp_customize->add_section( 'section_page_transition_pro', array(
		'title'          => esc_html__( 'Page Loader', 'quark-progression' ),
		'panel'          => 'general_panel_pro', // Not typically needed.
		'priority'       => 26,
	) );

	/* Setting - General - Page Transitions */
	$wp_customize->add_setting( 'pro_page_transition' ,array(
		'default' => 'transition-off-pro',
		'sanitize_callback' => 'progression_sanitize_text',
	) );
	$wp_customize->add_control(new Progression_Controls_Radio_Buttonset_Control($wp_customize, 'pro_page_transition', array(
		'label'    => esc_html__( 'Display Page Loader?', 'quark-progression' ),
		'section' => 'section_page_transition_pro',
		'priority'   => 10,
		'choices'     => array(
			'transition-on-pro' => esc_html__( 'On', 'quark-progression' ),
			'transition-off-pro' => esc_html__( 'Off', 'quark-progression' ),
		),
		))
	);


	/* Setting - General - Page Transitions */
	$wp_customize->add_setting( 'pro_transition_loader' ,array(
		'default' => 'cube-grid-pro',
		'sanitize_callback' => 'progression_sanitize_text',
	) );
	$wp_customize->add_control( 'pro_transition_loader', array(
		'label'    => esc_html__( 'Page Loader Animation', 'quark-progression' ),
		'section' => 'section_page_transition_pro',
		'type' => 'select',
		'priority'   => 15,
		'choices' => array(
	        'cube-grid-pro' => esc_html__( 'Cube Grid Animation', 'quark-progression' ),
	        'rotating-plane-pro' => esc_html__( 'Rotating Plane Animation', 'quark-progression' ),
	        'double-bounce-pro' => esc_html__( 'Doube Bounce Animation', 'quark-progression' ),
	        'sk-rectangle-pro' => esc_html__( 'Rectangle Animation', 'quark-progression' ),
			'sk-cube-pro' => esc_html__( 'Wandering Cube Animation', 'quark-progression' ),
			'sk-chasing-dots-pro' => esc_html__( 'Chasing Dots Animation', 'quark-progression' ),
			'sk-circle-child-pro' => esc_html__( 'Circle Animation', 'quark-progression' ),
		
		 ),
		)
	);


	/* Setting - General - Page Transitions */
	$wp_customize->add_setting( 'pro_loading_text_new' ,array(
		'sanitize_callback' => 'progression_sanitize_text',
	) );
	$wp_customize->add_control( 'pro_loading_text_new', array(
		'label'    => esc_html__( 'Optional Loading Text', 'quark-progression' ),
		'section' => 'section_page_transition_pro',
		'type' => 'text',
		'priority'   => 25,
		)
	);


	/* Setting - General - Scroll To Top */
	$wp_customize->add_setting( 'pro_page_loader_text', array(
		'default' => '#24cdc1',
		'sanitize_callback' => 'progression_sanitize_text',
	) );
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'pro_page_loader_text', array(
		'label'    => esc_html__( 'Page Loader Color', 'quark-progression' ),
		'section'  => 'section_page_transition_pro',
		'priority'   => 30,
	) ) );


	/* Setting - General - Scroll To Top */
	$wp_customize->add_setting( 'pro_page_loader_bg', array(
		'default' => '#1b1d27',
		'sanitize_callback' => 'progression_sanitize_text',
	) );
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'pro_page_loader_bg', array(
		'label'    => esc_html__( 'Page Loader Background', 'quark-progression' ),
		'section'  => 'section_page_transition_pro',
		'priority'   => 35,
	) ) );
	
	
	
	
	
	
	/* Section - General - Layout */
	$wp_customize->add_section( 'section_google_pro', array(
		'title'          => esc_html__( 'Google Analytics', 'quark-progression' ),
		'panel'          => 'general_panel_pro', // Not typically needed.
		'priority'       => 149,
	) );
	
	/* Setting - General - Layout */
	$wp_customize->add_setting( 'custom_google_pro' ,array(
		'default' => '',
		'sanitize_callback' => 'progression_sanitize_text',
	) );
	$wp_customize->add_control( 'custom_google_pro', array(
		'description'          => esc_html__( 'Add-in your Google Analytics tracking id', 'quark-progression' ),
		'section' => 'section_google_pro',
		'type' => 'text',
		'priority'   => 10,
		)
	);
	
	
	
	
	/* Section - General - Custom CSS */
	$wp_customize->add_section( 'section_css_pro', array(
		'title'          => esc_html__( 'Custom CSS', 'quark-progression' ),
		'panel'          => 'general_panel_pro', // Not typically needed.
		'priority'       => 150,
	) );
	
	/* Setting - General - Custom CSS */
	$wp_customize->add_setting( 'custom_css_pro' ,array(
		'default' => '',
		'sanitize_callback' => 'progression_sanitize_text',
	) );
	$wp_customize->add_control( 'custom_css_pro', array(
		'description'          => esc_html__( 'Add-in any custom styles here', 'quark-progression' ),
		'section' => 'section_css_pro',
		'type' => 'textarea',
		'priority'   => 10,
		)
	);
	
	

	
	


	
	/* Panel - Header */
	$wp_customize->add_panel( 'header_panel_pro', array(
		'priority'    => 14,
        'title'       => esc_html__( 'Header', 'quark-progression' ),
    ) );

	
		/* Section - Typography - Header/Navigation Fonts */
		$wp_customize->add_setting('nav_padding_top_bottom',array(
			'default' => '40',
			'sanitize_callback' => 'progression_sanitize_text',
		) );
		$wp_customize->add_control( new Progression_Controls_Slider_Control($wp_customize, 'nav_padding_top_bottom', array(
			'label'    => esc_html__( 'Padding Top/Bottom', 'quark-progression' ),
			'section'  => 'tt_font_pro-navigation-font',
			'priority'   => 505,
			'choices'     => array(
				'min'  => 0,
				'max'  => 100,
				'step' => 1
			),
		) ) );
		$wp_customize->add_setting('nav_font_size_pro',array(
			'default' => '13',
			'sanitize_callback' => 'progression_sanitize_text',
		) );
		$wp_customize->add_control( new Progression_Controls_Slider_Control($wp_customize, 'nav_font_size_pro', array(
			'label'    => esc_html__( 'Font Size', 'quark-progression' ),
			'section'  => 'tt_font_pro-navigation-font',
			'priority'   => 505,
			'choices'     => array(
				'min'  => 0,
				'max'  => 40,
				'step' => 1
			),
		) ) );
		$wp_customize->add_setting( 'nav_font_color_pro', array(
			'default' => '#cccccc',
			'sanitize_callback' => 'progression_sanitize_text',
		) );
		$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'nav_font_color_pro', array(
			'label'    => esc_html__( 'Font Color', 'quark-progression' ),
			'section'  => 'tt_font_pro-navigation-font',
			'priority'   => 510,
		) ) );
		$wp_customize->add_setting( 'nav_hover_font_color_pro', array(
			'default' => '#ffffff',
			'sanitize_callback' => 'progression_sanitize_text',
		) );
		$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'nav_hover_font_color_pro', array(
			'label'    => esc_html__( 'Font Hover Color', 'quark-progression' ),
			'section'  => 'tt_font_pro-navigation-font',
			'priority'   => 515,
		) ) );
		
		$wp_customize->add_setting( 'nav_border_font_color_pro', array(
			'default' => '#0abedf',
			'sanitize_callback' => 'progression_sanitize_text',
		) );
		$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'nav_border_font_color_pro', array(
			'label'    => esc_html__( 'Hover Border Bottom Color', 'quark-progression' ),
			'section'  => 'tt_font_pro-navigation-font',
			'priority'   => 515,
		) ) );
		
		
		$wp_customize->add_setting( 'header_cart_divider_bg_pro', array(
			'default' => 'rgba(255,255,255,  0.15)',
			'sanitize_callback' => 'progression_sanitize_text',
		) );
		$wp_customize->add_control(new Progression_Customize_Alpha_Color_Control($wp_customize, 'header_cart_divider_bg_pro', array(
			'default' => 'rgba(255,255,255,  0.15)',
			'label'    => esc_html__( 'Cart Icon Divider Color', 'quark-progression' ),
			'section'  => 'tt_font_pro-navigation-font',
			'priority'   => 520,
		) ) );
		
		$wp_customize->add_setting( 'header_cart_bg_pro', array(
			'default' => '#18bfde',
			'sanitize_callback' => 'progression_sanitize_text',
		) );
		$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'header_cart_bg_pro', array(
			'label'    => esc_html__( 'Cart Icon Background', 'quark-progression' ),
			'section'  => 'tt_font_pro-navigation-font',
			'priority'   => 525,
		) ) );
		
		
		$wp_customize->add_setting( 'highlight_bg_pro', array(
			'default' => '#0abedf',
			'sanitize_callback' => 'progression_sanitize_text',
		) );
		$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'highlight_bg_pro', array(
			'label'    => esc_html__( 'Highlight Button Color', 'quark-progression' ),
			'description'    => esc_html__( 'Add class "highlight-button" to a navigation menu item to create a button.', 'quark-progression' ),
			'section'  => 'tt_font_pro-navigation-font',
			'priority'   => 600,
		) ) );
		
		
		$wp_customize->add_setting( 'highlight_hover_bg_pro', array(
			'default' => '#0abedf',
			'sanitize_callback' => 'progression_sanitize_text',
		) );
		$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'highlight_hover_bg_pro', array(
			'label'    => esc_html__( 'Highlight Button Hover Color', 'quark-progression' ),
			'section'  => 'tt_font_pro-navigation-font',
			'priority'   => 650,
		) ) );
	
	
	
		/* Section - Typography - SUB Sub-Navigation Fonts */
		$wp_customize->add_setting('sub_nav_padding_top_bottom',array(
			'default' => '15',
			'sanitize_callback' => 'progression_sanitize_text',
		) );
		$wp_customize->add_control( new Progression_Controls_Slider_Control($wp_customize, 'sub_nav_padding_top_bottom', array(
			'label'    => esc_html__( 'Padding Top/Bottom', 'quark-progression' ),
			'section'  => 'tt_font_pro-sub-navigation-font',
			'priority'   => 505,
			'choices'     => array(
				'min'  => 0,
				'max'  => 80,
				'step' => 1
			),
		) ) );
		$wp_customize->add_setting('sub_nav_font_size_pro',array(
			'default' => '11',
			'sanitize_callback' => 'progression_sanitize_text',
		) );
		$wp_customize->add_control( new Progression_Controls_Slider_Control($wp_customize, 'sub_nav_font_size_pro', array(
			'label'    => esc_html__( 'Font Size', 'quark-progression' ),
			'section'  => 'tt_font_pro-sub-navigation-font',
			'priority'   => 505,
			'choices'     => array(
				'min'  => 0,
				'max'  => 40,
				'step' => 1
			),
		) ) );
		$wp_customize->add_setting( 'sub_nav_font_color_pro', array(
			'default' => '#a8a8a8',
			'sanitize_callback' => 'progression_sanitize_text',
		) );
		$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'sub_nav_font_color_pro', array(
			'label'    => esc_html__( 'Font Color', 'quark-progression' ),
			'section'  => 'tt_font_pro-sub-navigation-font',
			'priority'   => 510,
		) ) );
		$wp_customize->add_setting( 'sub_nav_hover_font_color_pro', array(
			'default' => '#ffffff',
			'sanitize_callback' => 'progression_sanitize_text',
		) );
		$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'sub_nav_hover_font_color_pro', array(
			'label'    => esc_html__( 'Font Hover Color', 'quark-progression' ),
			'section'  => 'tt_font_pro-sub-navigation-font',
			'priority'   => 515,
		) ) );
		
		
		$wp_customize->add_setting( 'sub_nav_border_color_pro', array(
			'default' => 'rgba(255,255,255,  0.06)',
			'sanitize_callback' => 'progression_sanitize_text',
		) );
		$wp_customize->add_control(new Progression_Customize_Alpha_Color_Control($wp_customize, 'sub_nav_border_color_pro', array(
			'default' => 'rgba(255,255,255,  0.06)',
			'label'    => esc_html__( 'Divider Color', 'quark-progression' ),
			'section'  => 'tt_font_pro-sub-navigation-font',
			'priority'   => 550,
		) ) );
		
		/* Setting - Backgrounds - Header Background */
		$wp_customize->add_setting( 'sub_nav_border_top_pro', array(
			'default'	=> '#18aecd',
			'sanitize_callback' => 'progression_sanitize_text',
		) );
		$wp_customize->add_control(new Progression_Customize_Alpha_Color_Control($wp_customize, 'sub_nav_border_top_pro', array(
			'default'	=> '#18aecd',
			'label'    => esc_html__( 'Border Top Color', 'quark-progression' ),
			'section'  => 'tt_font_pro-sub-navigation-font',
			'priority'   => 580,
			)
		) );
		
		/* Setting - Backgrounds - Header Background */
		$wp_customize->add_setting( 'sub_navigation_bg_color', array(
			'default'	=> 'rgba(4,1,18,  0.9)',
			'sanitize_callback' => 'progression_sanitize_text',
		) );
		$wp_customize->add_control(new Progression_Customize_Alpha_Color_Control($wp_customize, 'sub_navigation_bg_color', array(
			'default'	=> 'rgba(4,1,18,  0.9)',
			'label'    => esc_html__( 'Background Color', 'quark-progression' ),
			'section'  => 'tt_font_pro-sub-navigation-font',
			'priority'   => 600,
			)
		) );
	
	
	
	

	/* Section - Backgrounds - Header Background */
	$wp_customize->add_section( 'section_header_bg_pro', array(
		'title'          => esc_html__( 'Header Background', 'quark-progression' ),
		'panel'          => 'header_panel_pro', // Not typically needed.
		'priority'       => 40,
	) );
	
	/* Setting - Backgrounds - Header Background */
	$wp_customize->add_setting( 'header_divider_pro', array(
		'default'	=> 'rgba(255,255,255,  0.15)',
		'sanitize_callback' => 'progression_sanitize_text',
	) );
	$wp_customize->add_control(new Progression_Customize_Alpha_Color_Control($wp_customize, 'header_divider_pro', array(
		'default'	=> 'rgba(255,255,255,  0.15)',
		'label'    => esc_html__( 'Header Divider Color', 'quark-progression' ),
		'section'  => 'section_header_bg_pro',
		'priority'   => 5,
		)
	) );
		
	
	/* Setting - Backgrounds - Header Background */
	$wp_customize->add_setting( 'header_bg_color_pro', array(
		'default'	=> 'rgba(0, 0, 0,  0.1)',
		'sanitize_callback' => 'progression_sanitize_text',
	) );
	$wp_customize->add_control(new Progression_Customize_Alpha_Color_Control($wp_customize, 'header_bg_color_pro', array(
		'default'	=> 'rgba(0, 0, 0,  0.1)',
		'label'    => esc_html__( 'Header Background Color', 'quark-progression' ),
		'section'  => 'section_header_bg_pro',
		'priority'   => 10,
		)
	) );

	
	
		
	
	
	/* Setting - Backgrounds - Header Background */
	$wp_customize->add_setting( 'header_img_bg_image_pro' ,array(
		'sanitize_callback' => 'progression_sanitize_text',
	) );
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'header_img_bg_image_pro', array(
		'label'    => esc_html__( 'Header Background Image', 'quark-progression' ),
		'section' => 'section_header_bg_pro',
		'priority'   => 30,
		)
	) );
	/* Setting - Backgrounds - Header Background */
	$wp_customize->add_setting( 'header_img_bg_cover_pro', array(
		'default' => 'cover-pro',
		'sanitize_callback' => 'progression_sanitize_text',
	) );
	$wp_customize->add_control(new Progression_Controls_Radio_Buttonset_Control($wp_customize, 'header_img_bg_cover_pro', array(
		'label'    => esc_html__( 'Background Cover or Pattern', 'quark-progression' ),
		'section'  => 'section_header_bg_pro',
		'priority'   => 40,
		'choices'     => array(
			'cover-pro' => esc_html__( 'Cover', 'quark-progression' ),
			'pattern-pro' => esc_html__( 'Pattern', 'quark-progression' ),
		),)
	) );		
			
	




		
	  	/* Setting - Backgrounds - Body Background */
	  	$wp_customize->add_setting( 'sidebar_bg_pro', array(
	  		'default'	=> '#f5f5f5',
	  		'sanitize_callback' => 'progression_sanitize_text',
	  	) );
	  	$wp_customize->add_control(new Progression_Customize_Alpha_Color_Control($wp_customize, 'sidebar_bg_pro', array(
			'default'	=> '#f5f5f5',
	  		'label'    => esc_html__( 'Sidebar Background Color', 'quark-progression' ),
	  		'section'  => 'tt_font_pro-sidebar',
	  		'priority'   => 20,
	  		)
	  	) );
			
		  	$wp_customize->add_setting( 'sidebar_divider_pro', array(
		  		'default'	=> '#ffffff',
		  		'sanitize_callback' => 'progression_sanitize_text',
		  	) );
		  	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'sidebar_divider_pro', array(
				'default'	=> '#ffffff',
		  		'label'    => esc_html__( 'Sidebar Divider Color', 'quark-progression' ),
		  		'section'  => 'tt_font_pro-sidebar',
		  		'priority'   => 25,
		  		)
		  	) );
		
	
	
			  	/* Setting - Backgrounds - Body Background */
			  	$wp_customize->add_setting( 'sidebar_link_color_pro', array(
			  		'default'	=> '#1e1e1e',
			  		'sanitize_callback' => 'progression_sanitize_text',
			  	) );
			  	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'sidebar_link_color_pro', array(
			  		'label'    => esc_html__( 'Sidebar Link Color', 'quark-progression' ),
			  		'section'  => 'tt_font_pro-sidebar',
			  		'priority'   => 600,
			  		)
			  	) );
					
	  	/* Setting - Backgrounds - Body Background */
	  	$wp_customize->add_setting( 'sidebar_link_hover_pro', array(
	  		'default'	=> '#999999',
	  		'sanitize_callback' => 'progression_sanitize_text',
	  	) );
	  	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'sidebar_link_hover_pro', array(
	  		'label'    => esc_html__( 'Sidebar Link Hover Color', 'quark-progression' ),
	  		'section'  => 'tt_font_pro-sidebar',
	  		'priority'   => 605,
	  		)
	  	) );
	
	
	
	

	/* Setting - General - Site Logo */
	$wp_customize->add_setting('pro_button_font_size',array(
		'default' => '11',
		'sanitize_callback' => 'progression_sanitize_text',
	) );
	$wp_customize->add_control( new Progression_Controls_Slider_Control($wp_customize, 'pro_button_font_size', array(
		'label'    => esc_html__( 'Button Font Size (px)', 'quark-progression' ),
		'section'  => 'tt_font_pro-buttons-default',
		'priority'   => 400,
		'choices'     => array(
			'min'  => 0,
			'max'  => 30,
			'step' => 1
		),
	) ) );
	
  	/* Setting - Backgrounds - Body Background */
  	$wp_customize->add_setting( 'button_font_color_pro', array(
  		'default'	=> '#ffffff',
  		'sanitize_callback' => 'progression_sanitize_text',
  	) );
  	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'button_font_color_pro', array(
  		'label'    => esc_html__( 'Button Color', 'quark-progression' ),
  		'section'  => 'tt_font_pro-buttons-default',
  		'priority'   => 430,
  		)
  	) );
		

  	/* Setting - Backgrounds - Body Background */
  	$wp_customize->add_setting( 'button_font_background_pro', array(
  		'default'	=> '#46445f',
  		'sanitize_callback' => 'progression_sanitize_text',
  	) );
  	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'button_font_background_pro', array(
  		'label'    => esc_html__( 'Button Background', 'quark-progression' ),
  		'section'  => 'tt_font_pro-buttons-default',
  		'priority'   => 440,
  		)
  	) );
		

		
	  	/* Setting - Backgrounds - Body Background */
	  	$wp_customize->add_setting( 'button_font_hover_pro', array(
	  		'default'	=> '#ffffff',
	  		'sanitize_callback' => 'progression_sanitize_text',
	  	) );
	  	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'button_font_hover_pro', array(
	  		'label'    => esc_html__( 'Button Font Hover', 'quark-progression' ),
	  		'section'  => 'tt_font_pro-buttons-default',
	  		'priority'   => 448,
	  		)
	  	) );
  	/* Setting - Backgrounds - Body Background */
  	$wp_customize->add_setting( 'button_font_background_hover_pro', array(
  		'default'	=> '#060326',
  		'sanitize_callback' => 'progression_sanitize_text',
  	) );
  	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'button_font_background_hover_pro', array(
  		'label'    => esc_html__( 'Button Background Hover', 'quark-progression' ),
  		'section'  => 'tt_font_pro-buttons-default',
  		'priority'   => 450,
  		)
  	) );




  	/* Setting - Backgrounds - Body Background */
  	$wp_customize->add_setting( 'blog_link_heading_color', array(
  		'default'	=> '#1e1e1e',
  		'sanitize_callback' => 'progression_sanitize_text',
  	) );
  	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'blog_link_heading_color', array(
  		'label'    => esc_html__( 'Blog Heading Link Color', 'quark-progression' ),
  		'section'  => 'tt_font_pro-blog-headings',
  		'priority'   => 500,
  		)
  	) );
	

  	/* Setting - Backgrounds - Body Background */
  	$wp_customize->add_setting( 'blog_link_heading_hover_color', array(
  		'default'	=> '#0abedf',
  		'sanitize_callback' => 'progression_sanitize_text',
  	) );
  	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'blog_link_heading_hover_color', array(
  		'label'    => esc_html__( 'Blog Heading Link Hover Color', 'quark-progression' ),
  		'section'  => 'tt_font_pro-blog-headings',
  		'priority'   => 505,
  		)
  	) );		
	
	
	
	/* Panel - Typography */
	$wp_customize->add_panel( 'body_main_panel_pro', array(
		'priority'    => 20,
        'title'       => esc_html__( 'Body', 'quark-progression' ),
    ) );
	 
	 
  	/* Setting - Backgrounds - Body Background */
  	$wp_customize->add_setting( 'default_font_link_pro', array(
  		'default'	=> '#0abedf',
  		'sanitize_callback' => 'progression_sanitize_text',
  	) );
  	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'default_font_link_pro', array(
  		'label'    => esc_html__( 'Default Link Color', 'quark-progression' ),
  		'section'  => 'tt_font_pro-global',
  		'priority'   => 425,
  		)
  	) );
	 
	 
	  	/* Setting - Backgrounds - Body Background */
	  	$wp_customize->add_setting( 'default_hover_link_font_color_pro', array(
	  		'default'	=> '#46445f',
	  		'sanitize_callback' => 'progression_sanitize_text',
	  	) );
	  	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'default_hover_link_font_color_pro', array(
	  		'label'    => esc_html__( 'Default Link Hover Color', 'quark-progression' ),
	  		'section'  => 'tt_font_pro-global',
	  		'priority'   => 425,
	  		)
	  	) );
	 

	
			/* Setting - General - Site Logo */
			$wp_customize->add_setting('pro_padding_top_page_title',array(
				'default' => '183',
				'sanitize_callback' => 'progression_sanitize_text',
			) );
			$wp_customize->add_control( new Progression_Controls_Slider_Control($wp_customize, 'pro_padding_top_page_title', array(
				'label'    => esc_html__( 'Page Title Padding Top (px)', 'quark-progression' ),
				'section'  => 'tt_font_pro-page-title-headings',
				'priority'   => 420,
				'choices'     => array(
					'min'  => 0,
					'max'  => 300,
					'step' => 1
				),
			) ) );
			
			
			/* Setting - General - Site Logo */
			$wp_customize->add_setting('pro_padding_bottom_page_title',array(
				'default' => '90',
				'sanitize_callback' => 'progression_sanitize_text',
			) );
			$wp_customize->add_control( new Progression_Controls_Slider_Control($wp_customize, 'pro_padding_bottom_page_title', array(
				'label'    => esc_html__( 'Page Title Padding Bottom (px)', 'quark-progression' ),
				'section'  => 'tt_font_pro-page-title-headings',
				'priority'   => 420,
				'choices'     => array(
					'min'  => 0,
					'max'  => 300,
					'step' => 1
				),
			) ) );
	
	
 	/* Setting - Backgrounds - Body Background */
 	$wp_customize->add_setting( 'page_title_bg_pro', array(
 		'default'	=> '#060326',
 		'sanitize_callback' => 'progression_sanitize_text',
 	) );
 	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'page_title_bg_pro', array(
 		'label'    => esc_html__( 'Page Title Background Color', 'quark-progression' ),
 		'section'  => 'tt_font_pro-page-title-headings',
 		'priority'   => 425,
 		)
 	) );
		
		
		
		/* Setting - Backgrounds - Footer Background */
		$wp_customize->add_setting( 'page_title_bg_image_pro' ,array(
			'default' => get_template_directory_uri().'/images/page-title.jpg',
			'sanitize_callback' => 'progression_sanitize_text',
		) );
		$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'page_title_bg_image_pro', array(
			'label'    => esc_html__( 'Page Title Background Image', 'quark-progression' ),
			'section' => 'tt_font_pro-page-title-headings',
			'priority'   => 450,
			)
		) );
		/* Setting - Backgrounds - Footer Background */
		$wp_customize->add_setting( 'page_title_bg_cover_pro', array(
			'default' => 'cover-pro',
			'sanitize_callback' => 'progression_sanitize_text',
		) );
		$wp_customize->add_control(new Progression_Controls_Radio_Buttonset_Control($wp_customize, 'page_title_bg_cover_pro', array(
			'label'    => esc_html__( 'Background Cover or Pattern', 'quark-progression' ),
			'section'  => 'tt_font_pro-page-title-headings',
			'priority'   => 460,
			'choices'     => array(
				'cover-pro' => esc_html__( 'Cover', 'quark-progression' ),
				'pattern-pro' => esc_html__( 'Pattern', 'quark-progression' ),
			),)
		) );	
		

	
	

	
	/* Section - Backgrounds - Body Background */
	$wp_customize->add_section( 'section_body_pro', array(
		'title'          => esc_html__( 'Body Background', 'quark-progression' ),
		'panel'          => 'body_main_panel_pro', // Not typically needed.
		'priority'       => 200,
	) );
	
	/* Setting - Backgrounds - Body Background */
	$wp_customize->add_setting( 'body_bg_color_pro', array(
		'default'	=> '#ffffff',
		'sanitize_callback' => 'progression_sanitize_text',
	) );
	$wp_customize->add_control(new Progression_Customize_Alpha_Color_Control($wp_customize, 'body_bg_color_pro', array(
		'default'	=> '#ffffff',
		'label'    => esc_html__( 'Background Color', 'quark-progression' ),
		'section'  => 'section_body_pro',
		'priority'   => 10,
		)
	) );
	/* Setting - Backgrounds - Body Background */
	$wp_customize->add_setting( 'body_bg_image_pro' ,array(
		'sanitize_callback' => 'progression_sanitize_text',
	) );
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'body_bg_image_pro', array(
		'label'    => esc_html__( 'Background Image', 'quark-progression' ),
		'section' => 'section_body_pro',
		'priority'   => 20,
		)
	) );
	/* Setting - Backgrounds - Body Background */
	$wp_customize->add_setting( 'body_bg_cover_pro', array(
		'default' => 'cover-pro',
		'sanitize_callback' => 'progression_sanitize_text',
	) );
	$wp_customize->add_control(new Progression_Controls_Radio_Buttonset_Control($wp_customize, 'body_bg_cover_pro', array(
		'label'    => esc_html__( 'Background Cover or Pattern', 'quark-progression' ),
		'section'  => 'section_body_pro',
		'priority'   => 30,
		'choices'     => array(
			'cover-pro' => esc_html__( 'Cover', 'quark-progression' ),
			'pattern-pro' => esc_html__( 'Pattern', 'quark-progression' ),
		),)
	) );
	
	
	
	/* Section - Backgrounds - Boxed Background */
	$wp_customize->add_section( 'section_boxed_pro', array(
		'title'          => esc_html__( 'Boxed Layout Background', 'quark-progression' ),
		'panel'          => 'body_main_panel_pro', // Not typically needed.
		'priority'       => 240,
	) );
	
	/* Setting - Backgrounds - Boxed Background */
	$wp_customize->add_setting( 'boxed_bg_color_pro', array(
		'default'	=> '#ffffff',
		'sanitize_callback' => 'progression_sanitize_text',
	) );
	$wp_customize->add_control(new Progression_Customize_Alpha_Color_Control($wp_customize, 'boxed_bg_color_pro', array(
		'default'	=> '#ffffff',
		'label'    => esc_html__( 'Background Color', 'quark-progression' ),
		'section'  => 'section_boxed_pro',
		'priority'   => 10,
		)
	) );
	/* Setting - Backgrounds - Boxed Background */
	$wp_customize->add_setting( 'boxed_bg_image_pro' ,array(
		'sanitize_callback' => 'progression_sanitize_text',
	) );
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'boxed_bg_image_pro', array(
		'label'    => esc_html__( 'Background Image', 'quark-progression' ),
		'section' => 'section_boxed_pro',
		'priority'   => 20,
		)
	) );
	/* Setting - Backgrounds - Boxed Background */
	$wp_customize->add_setting( 'boxed_bg_cover_pro', array(
		'default' => 'cover-pro',
		'sanitize_callback' => 'progression_sanitize_text',
	) );
	$wp_customize->add_control(new Progression_Controls_Radio_Buttonset_Control($wp_customize, 'boxed_bg_cover_pro', array(
		'label'    => esc_html__( 'Background Cover or Pattern', 'quark-progression' ),
		'section'  => 'section_boxed_pro',
		'priority'   => 30,
		'choices'     => array(
			'cover-pro' => esc_html__( 'Cover', 'quark-progression' ),
			'pattern-pro' => esc_html__( 'Pattern', 'quark-progression' ),
		),)
	) );
		
		
		
	
	

	/* Panel - Footer */
	$wp_customize->add_panel( 'footer_panel_pro', array(
		'priority'    => 25,
        'title'       => esc_html__( 'Footer', 'quark-progression' ),
    ) );
	
	
	/* Section - General - Footer */
	$wp_customize->add_section( 'section_copyright_text_pro', array(
		'title'          => esc_html__( 'Footer General', 'quark-progression' ),
		'panel'          => 'footer_panel_pro', // Not typically needed.
		'priority'       => 5,
	) );
	/* Setting - General - Footer */
	$wp_customize->add_setting( 'footer_copyright_pro' ,array(
		'default' => '2015 All Rights Reserved. Developed by ProgressionStudios',
		'sanitize_callback' => 'progression_sanitize_text',
	) );
	$wp_customize->add_control( 'footer_copyright_pro', array(
		'section' => 'section_copyright_text_pro',
		'type' => 'text',
		'priority'   => 10,
		)
	);
	
	/* Section - Layout - Footer */
	$wp_customize->add_setting( 'pro_widget_count', array(
		'default' => 'footer-1-pro',
		'sanitize_callback' => 'progression_sanitize_text',
	) );
	$wp_customize->add_control(new Progression_Controls_Radio_Buttonset_Control($wp_customize, 'pro_widget_count', array(
		'label'    => esc_html__( 'Footer Widget Count', 'quark-progression' ),
		'section'  => 'section_copyright_text_pro',
		'priority'   => 20,
		'choices'     => array(
			'footer-1-pro' => esc_html__( '1', 'quark-progression' ),
			'footer-2-pro' => esc_html__( '2', 'quark-progression' ),
			'footer-3-pro' => esc_html__( '3', 'quark-progression' ),
			'footer-4-pro' => esc_html__( '4', 'quark-progression' ),
			'footer-5-pro' => esc_html__( '5', 'quark-progression' ),
		),
	) ) );
	
	/* Setting - General - Scroll To Top */
	$wp_customize->add_setting( 'copyright_color_pro', array(
		'default' => '#7b7a86',
		'sanitize_callback' => 'progression_sanitize_text',
	) );
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'copyright_color_pro', array(
		'label'    => esc_html__( 'Copyright Font Color', 'quark-progression' ),
		'section'  => 'section_copyright_text_pro',
		'priority'   => 15,
	) ) );
	
	
	
	
	
	/* Section - General - Scroll To Top */
	$wp_customize->add_section( 'section_scroll_pro', array(
		'title'          => esc_html__( 'Scroll To Top Button', 'quark-progression' ),
		'panel'          => 'footer_panel_pro', // Not typically needed.
		'priority'       => 500,
	) );

	/* Setting - General - Scroll To Top */
	$wp_customize->add_setting( 'pro_scroll_top', array(
		'default' => 'scroll-on-pro',
		'sanitize_callback' => 'progression_sanitize_text',
	) );
	$wp_customize->add_control(new Progression_Controls_Radio_Buttonset_Control($wp_customize, 'pro_scroll_top', array(
		'label'    => esc_html__( 'Scroll To Top Button', 'quark-progression' ),
		'section'  => 'section_scroll_pro',
		'priority'   => 10,
		'choices'     => array(
			'scroll-on-pro' => esc_html__( 'On', 'quark-progression' ),
			'scroll-off-pro' => esc_html__( 'Off', 'quark-progression' ),
		),
	) ) );

	/* Setting - General - Scroll To Top */
	$wp_customize->add_setting( 'pro_scroll_color', array(
		'default' => '#ffffff',
		'sanitize_callback' => 'progression_sanitize_text',
	) );
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'pro_scroll_color', array(
		'label'    => esc_html__( 'Color', 'quark-progression' ),
		'section'  => 'section_scroll_pro',
		'priority'   => 15,
	) ) );


	/* Setting - General - Scroll To Top */
	$wp_customize->add_setting( 'pro_scroll_bg_color', array(
		'default' => 'rgba(0,0,0,  0.3)',
		'sanitize_callback' => 'progression_sanitize_text',
	) );
	$wp_customize->add_control(new Progression_Customize_Alpha_Color_Control($wp_customize, 'pro_scroll_bg_color', array(
		'label'    => esc_html__( 'Background', 'quark-progression' ),
		'default' => 'rgba(0,0,0,  0.3)',
		'section'  => 'section_scroll_pro',
		'priority'   => 20,
	) ) );

	/* Setting - General - Scroll To Top */
	$wp_customize->add_setting( 'pro_scroll_border_color', array(
		'default' => 'rgba(255,255,255,  0.2)',
		'sanitize_callback' => 'progression_sanitize_text',
	) );
	$wp_customize->add_control(new Progression_Customize_Alpha_Color_Control($wp_customize, 'pro_scroll_border_color', array(
		'label'    => esc_html__( 'Border', 'quark-progression' ),
		'default' => 'rgba(255,255,255,  0.2))',
		'section'  => 'section_scroll_pro',
		'priority'   => 25,
	) ) );

	/* Setting - General - Scroll To Top */
	$wp_customize->add_setting( 'pro_scroll_hvr_color', array(
		'default' => '#ffffff',
		'sanitize_callback' => 'progression_sanitize_text',
	) );
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'pro_scroll_hvr_color', array(
		'label'    => esc_html__( 'Hover Color', 'quark-progression' ),
		'section'  => 'section_scroll_pro',
		'priority'   => 30,
	) ) );


	/* Setting - General - Scroll To Top */
	$wp_customize->add_setting( 'pro_scroll_hvr_bg_color', array(
		'default' => '#0abedf',
		'sanitize_callback' => 'progression_sanitize_text',
	) );
	$wp_customize->add_control(new Progression_Customize_Alpha_Color_Control($wp_customize, 'pro_scroll_hvr_bg_color', array(
		'label'    => esc_html__( 'Hover Background', 'quark-progression' ),
		'default' => '#0abedf',
		'section'  => 'section_scroll_pro',
		'priority'   => 40,
	) ) );

	/* Setting - General - Scroll To Top */
	$wp_customize->add_setting( 'pro_scroll_hvr_border_color', array(
		'default' => '#0abedf',
		'sanitize_callback' => 'progression_sanitize_text',
	) );
	$wp_customize->add_control(new Progression_Customize_Alpha_Color_Control($wp_customize, 'pro_scroll_hvr_border_color', array(
		'label'    => esc_html__( 'Border', 'quark-progression' ),
		'default' => '#0abedf',
		'section'  => 'section_scroll_pro',
		'priority'   => 50,
	) ) );
	
	
	
	/* Section - Backgrounds - Footer Background */
	$wp_customize->add_section( 'section_footer_bg_pro', array(
		'title'          => esc_html__( 'Footer Background', 'quark-progression' ),
		'panel'          => 'footer_panel_pro', // Not typically needed.
		'priority'       => 40,
	) );
	
	
	$wp_customize->add_setting( 'copyright_border_top_pro', array(
		'default'	=> 'rgba(255,255,255,  0.10)',
		'sanitize_callback' => 'progression_sanitize_text',
	) );
	$wp_customize->add_control(new Progression_Customize_Alpha_Color_Control($wp_customize, 'copyright_border_top_pro', array(
		'default'	=> 'rgba(255,255,255,  0.10)',
		'label'    => esc_html__( 'Footer Divider Color', 'quark-progression' ),
		'section'  => 'section_footer_bg_pro',
		'priority'   => 5,
		)
	) );

	
	
	/* Setting - Backgrounds - Footer Background */
	$wp_customize->add_setting( 'footer_bg_color_pro', array(
		'default'	=> '#050225',
		'sanitize_callback' => 'progression_sanitize_text',
	) );
	$wp_customize->add_control(new Progression_Customize_Alpha_Color_Control($wp_customize, 'footer_bg_color_pro', array(
		'default'	=> '#050225',
		'label'    => esc_html__( 'Footer Background Color', 'quark-progression' ),
		'section'  => 'section_footer_bg_pro',
		'priority'   => 10,
		)
	) );
	/* Setting - Backgrounds - Footer Background */
	$wp_customize->add_setting( 'footer_bg_image_pro' ,array(
		'sanitize_callback' => 'progression_sanitize_text',
	) );
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'footer_bg_image_pro', array(
		'label'    => esc_html__( 'Footer Background Image', 'quark-progression' ),
		'section' => 'section_footer_bg_pro',
		'priority'   => 20,
		)
	) );
	/* Setting - Backgrounds - Footer Background */
	$wp_customize->add_setting( 'footer_bg_cover_pro', array(
		'default' => 'cover-pro',
		'sanitize_callback' => 'progression_sanitize_text',
	) );
	$wp_customize->add_control(new Progression_Controls_Radio_Buttonset_Control($wp_customize, 'footer_bg_cover_pro', array(
		'label'    => esc_html__( 'Background Cover or Pattern', 'quark-progression' ),
		'section'  => 'section_footer_bg_pro',
		'priority'   => 30,
		'choices'     => array(
			'cover-pro' => esc_html__( 'Cover', 'quark-progression' ),
			'pattern-pro' => esc_html__( 'Pattern', 'quark-progression' ),
		),)
	) );	
	
	
	$wp_customize->add_setting( 'footer_font_link_pro', array(
		'default'	=> '#9592b0',
		'sanitize_callback' => 'progression_sanitize_text',
	) );
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'footer_font_link_pro', array(
		'label'    => esc_html__( 'Footer Link Color', 'quark-progression' ),
		'section'  => 'tt_font_pro-footer-font',
		'priority'   => 500,
		)
	) );
	
	
	$wp_customize->add_setting( 'footer_font_link_hover_pro', array(
		'default'	=> '#ffffff',
		'sanitize_callback' => 'progression_sanitize_text',
	) );
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'footer_font_link_hover_pro', array(
		'label'    => esc_html__( 'Footer Link Hover Color', 'quark-progression' ),
		'section'  => 'tt_font_pro-footer-font',
		'priority'   => 500,
		)
	) );
	
	
	
	/* Panel - WooCOmmerce */
	$wp_customize->add_panel( 'panel_woocommerce_pro', array(
		'priority'    => 24,
		'title'       => esc_html__( 'eCommerce', 'quark-progression' ),
	) );
	
	/* Setting - Layout - WooCommerce */
	$wp_customize->add_setting( 'woocommerce_post_count_pro' ,array(
		'default' => '12',
		'sanitize_callback' => 'progression_sanitize_text',
	) );
	$wp_customize->add_control( 'woocommerce_post_count_pro', array(
		'label'          => esc_html__( 'Shop Posts Per Page', 'quark-progression' ),
		'section' => 'tt_font_pro-ecommerce-font',
		'type' => 'text',
		'priority'   => 10,
		)
	);
	
	/* Setting - Layout - WooCommerce */
	$wp_customize->add_setting( 'woocommerce_columns_pro' ,array(
		'default' => '3',
		'sanitize_callback' => 'progression_sanitize_text',
	) );
	$wp_customize->add_control(new Progression_Controls_Radio_Buttonset_Control($wp_customize, 'woocommerce_columns_pro', array(
		'label'          => esc_html__( 'Shop Posts Per Row', 'quark-progression' ),
		'section' => 'tt_font_pro-ecommerce-font',
		'priority'   => 25,
		'choices' => array(
		            '1' => esc_html__( '1', 'quark-progression' ),
		            '2' => esc_html__( '2', 'quark-progression' ),
		            '3' => esc_html__( '3', 'quark-progression' ),
		            '4' => esc_html__( '4', 'quark-progression' ),
						'5' => esc_html__( '5', 'quark-progression' ),
						'6' => esc_html__( '6', 'quark-progression' ),
					),
	) ) );
			
	

}
add_action( 'customize_register', 'qube_customizer' );

/* Sanitize Text */
function progression_sanitize_text( $input ) {
    return wp_kses_post( force_balance_tags( $input ) );
}

/* Sanitize Code */
function pro_sanitize_code( $input ) {
   return wp_kses(  $input, 
	array(
      'div' => array(
          'id' => array(),
  		  'class' => array(),
        'style' => array(),
      ),
      'form' => array(
			'action' => array(),
          'method' => array(),
          'id' => array(),
  		  'name' => array(),
  		  'class' => array(),
  		  'target' => array(),
      ),
    'input' => array(
        'value' => array(),
        'placeholder' => array(),
		  'type' => array(),
		  'name' => array(),
		  'class' => array(),
		  'id' => array(),
		  'tabindex' => array(),
    ),
	    'a' => array(
	        'href' => array(),
	        'title' => array()
	    ),
		 
	    'br' => array(),
	    'em' => array(),
		 'strong' => array(),
	) );
}



function qube_customize_js()
{
    ?>
	<script type="text/javascript">
	jQuery(document).ready(function($) {
		'use strict';
		
		<?php if (get_theme_mod( 'pro_page_transition', 'transition-off-pro') == "transition-on-pro") : ?>
		(function($) {
			var didDone = false;
			    function done() {
			        if(!didDone) {
			            didDone = true;
						$("#page-loader-pro").addClass('finished-loading');
						$("#page-loader-pro").fadeOut(1000);
			        }
			    }
			    var loaded = false;
			    var minDone = false;
			    //The minimum timeout.
			    setTimeout(function(){
			        minDone = true;
			        //If loaded, fire the done callback.
			        if(loaded)  {  done(); } }, 200);
			    //The maximum timeout.
			    setTimeout(function(){  done();   }, 2500);
			    //Bind the load listener.
			    $(window).load(function(){  loaded = true;
			        if(minDone) { done(); }
			    });
		})(jQuery);
		<?php endif ?>
		
	});
	</script>
    <?php
}
add_action('wp_footer', 'qube_customize_js');


function qube_google_analyticsjs()
{
    ?>
    <?php if (get_theme_mod( 'custom_google_pro')) : ?>
	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', '<?php echo esc_attr(get_theme_mod('custom_google_pro')); ?>']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script><?php endif ?>
    <?php
}
add_action('wp_head', 'qube_google_analyticsjs');



function qube_customize_css()
{
    ?>
<?php if (get_theme_mod( 'pro_theme_fav_icon' )) : ?><link rel="icon"  href="<?php echo esc_attr(get_theme_mod( 'pro_theme_fav_icon')); ?>"><?php endif; ?>
<style type="text/css">
	<?php if (get_theme_mod( 'custom_css_pro')) : ?><?php echo esc_attr(get_theme_mod('custom_css_pro')); ?><?php endif ?>
	a { color:<?php echo esc_attr(get_theme_mod('default_font_link_pro', '#0abedf')); ?>; }
	#boxed-layout-pro .widget .price_slider .ui-slider-handle, #boxed-layout-pro .widget .price_slider .ui-slider-range, #sidebar .tagcloud a:hover, #site-footer .tagcloud a:hover { background:<?php echo esc_attr(get_theme_mod('default_font_link_pro', '#0abedf')); ?>; }
	.flex-control-paging li a.flex-active { border-color:<?php echo esc_attr(get_theme_mod('default_font_link_pro', '#0abedf')); ?>; }
	a:hover, .post-meta-pro a:hover { color:<?php echo esc_attr(get_theme_mod('default_hover_link_font_color_pro', '#46445f')); ?>; }
	body #logo-pro, body #logo-pro img {max-width:<?php echo esc_attr( get_theme_mod('pro_theme_logo_width', '150') ); ?>px;}
	header#masthead-pro h1#logo-pro a { padding-top:<?php echo esc_attr(get_theme_mod('theme_logo_margin_top', '20')); ?>px; padding-bottom:<?php echo esc_attr(get_theme_mod('theme_logo_margin_bottom', '23')); ?>px; }
	
	#sticky-header-pro.menu-resized-pro header#masthead-pro {background:<?php echo esc_attr(get_theme_mod('sticky_header_bg_color_pro', 'rgba(4,1,29,  0.92)')); ?>;}	
	#sticky-header-pro.menu-resized-pro header#masthead-pro:after { background:<?php echo esc_attr(get_theme_mod('sticky_header_border_color_pro', 'rgba(4,1,29,  0.92)')); ?>;  }
	body #sticky-header-pro.menu-resized-pro #logo-pro, body #sticky-header-pro.menu-resized-pro #logo-pro img {max-width:<?php echo esc_attr(get_theme_mod('sticky_pro_theme_logo_width', '130')); ?>px;}
	#sticky-header-pro.menu-resized-pro header#masthead-pro  h1#logo-pro a { padding-top:<?php echo esc_attr(get_theme_mod('sticky_theme_logo_margin_top', '14')); ?>px; padding-bottom:<?php echo esc_attr(get_theme_mod('sticky_theme_logo_margin_bottom', '16')); ?>px; }
	.menu-resized-pro .sf-menu a {<?php if (get_theme_mod( 'sticky_font_color_pro')) : ?>color:<?php echo esc_attr(get_theme_mod('sticky_font_color_pro')); ?>;<?php endif; ?> padding-top:<?php echo esc_attr(get_theme_mod('sticky_theme_nav_padding', '31')); ?>px; padding-bottom:<?php echo esc_attr(get_theme_mod('sticky_theme_nav_padding', '31')); ?>px; }
	<?php if (get_theme_mod( 'sticky_hover_font_color_pro')) : ?>.menu-resized-pro .sf-menu li.current-menu-item a, .menu-resized-pro .sf-menu a:hover, .menu-resized-pro .sf-menu li.sfHover a {color:<?php echo esc_attr(get_theme_mod('sticky_hover_font_color_pro')); ?>; }<?php endif; ?>
	
	body footer#site-footer a.progression-button { background:<?php echo esc_attr(get_theme_mod('highlight_bg_pro', '#0abedf')); ?>;  }
	header#masthead-pro .sf-menu li.highlight-button a:before { height:<?php echo esc_attr(get_theme_mod('nav_font_size_pro', '11') + 28); ?>px; margin-top:-<?php echo esc_attr( (get_theme_mod('nav_font_size_pro', '11') + 30 ) / 2 ); ?>px;   background:<?php echo esc_attr(get_theme_mod('highlight_bg_pro', '#0abedf')); ?>; }
	body footer#site-footer a.progression-button:hover, header#masthead-pro .sf-menu li.highlight-button a:hover:before { background:<?php echo esc_attr(get_theme_mod('highlight_hover_bg_pro', '#0abedf')); ?>;}
	#sticky-header-pro.menu-resized-pro .sf-menu li.highlight-button a:before {
		height:<?php echo esc_attr(get_theme_mod('nav_font_size_pro', '11') + 26); ?>px; margin-top:-<?php echo esc_attr( (get_theme_mod('nav_font_size_pro', '11') + 28 ) / 2 ); ?>px; 
	}
	
	.sf-menu a  {color:<?php echo esc_attr(get_theme_mod('nav_font_color_pro', '#cccccc')); ?>; font-size:<?php echo esc_attr(get_theme_mod('nav_font_size_pro', '13')); ?>px;  padding-top:<?php echo esc_attr(get_theme_mod('nav_padding_top_bottom', '40')); ?>px; padding-bottom:<?php echo esc_attr(get_theme_mod('nav_padding_top_bottom', '40')); ?>px;  }
	
	a.cart-icon-pro {
		font-size:<?php echo esc_attr(get_theme_mod('nav_font_size_pro', '13') + 2); ?>px;
		margin-top:<?php echo esc_attr(get_theme_mod('nav_padding_top_bottom', '40') - 9); ?>px; 
		margin-bottom:<?php echo esc_attr(get_theme_mod('nav_padding_top_bottom', '40') - 9); ?>px; 
		color:<?php echo esc_attr(get_theme_mod('nav_font_color_pro', '#cccccc')); ?>; }
	.menu-resized-pro a.cart-icon-pro {<?php if (get_theme_mod( 'sticky_font_color_pro')) : ?>color:<?php echo esc_attr(get_theme_mod('sticky_font_color_pro')); ?>;<?php endif; ?>
	margin-top:<?php echo esc_attr(get_theme_mod('sticky_theme_nav_padding', '31') - 9); ?>px; 
	margin-bottom:<?php echo esc_attr(get_theme_mod('sticky_theme_nav_padding', '31') - 9); ?>px; 
	}
	
	a.cart-icon-pro:before { background:<?php echo esc_attr(get_theme_mod('header_cart_divider_bg_pro', 'rgba(255,255,255,  0.15)')); ?>; }
	a.cart-icon-pro span.shopping-cart-header-count { background:<?php echo esc_attr(get_theme_mod('header_cart_bg_pro', '#18bfde')); ?>; }
	a.cart-icon-pro span.shopping-cart-header-count:before { border-right:4px solid <?php echo esc_attr(get_theme_mod('header_cart_bg_pro', '#18bfde')); ?>; }
	
	.sf-menu a:before { margin-top:<?php echo esc_attr(get_theme_mod('nav_font_size_pro', '13') + 3); ?>px; }
	a.cart-icon-pro:hover, .sf-menu li.current-menu-item a, .sf-menu a:hover, .sf-menu li.sfHover a, .menu-show-hide-pro { color:<?php echo esc_attr(get_theme_mod('nav_hover_font_color_pro', '#ffffff')); ?>; }
	.sf-menu li.current-menu-item a:before, .sf-menu a:hover:before, .sf-menu li.sfHover a:before { background:<?php echo esc_attr(get_theme_mod('nav_border_font_color_pro', '#0abedf')); ?>; }
	.sf-menu ul { background:<?php echo esc_attr( get_theme_mod('sub_navigation_bg_color', 'rgba(4,1,18,  0.9)') ); ?>; }
	.sf-menu li li a { font-size:<?php echo esc_attr( get_theme_mod('sub_nav_font_size_pro', '11') ); ?>px; padding-top:<?php echo esc_attr( get_theme_mod('sub_nav_padding_top_bottom', '15') ); ?>px; padding-bottom:<?php echo esc_attr( get_theme_mod('sub_nav_padding_top_bottom', '15') ); ?>px; }
	.sf-menu li li a, .sf-mega li.sf-mega-section .deep-level li a, .sf-mega li.sf-mega-section .deep-level li:last-child a, .sf-menu li.sfHover li.sfHover li a, .sf-menu li.sfHover li.sfHover li.sfHover li a, .sf-menu li.sfHover li.sfHover li.sfHover li.sfHover li a, .sf-menu li.sfHover li.sfHover li.sfHover li.sfHover li.sfHover li a { border-color: <?php echo esc_attr( get_theme_mod('sub_nav_border_color_pro', 'rgba(255,255,255,  0.06)') ); ?>; }
	.sf-mega ul {  border-color: <?php echo esc_attr( get_theme_mod('sub_nav_border_color_pro', 'rgba(255,255,255,  0.06)') ); ?>;  }
	.sf-mega h2.mega-menu-heading { border-color:<?php echo esc_attr( get_theme_mod('sub_nav_border_color_pro', 'rgba(255,255,255,  0.06)') ); ?>; }
	.menu-resized-pro .sf-menu li.sfHover li a, .menu-resized-pro .sf-menu li.sfHover li.sfHover li a, .menu-resized-pro .sf-menu li.sfHover li.sfHover li.sfHover li a, .menu-resized-pro .sf-menu li.sfHover li.sfHover li.sfHover li.sfHover li a, .menu-resized-pro .sf-menu li.sfHover li.sfHover li.sfHover li.sfHover li.sfHover li a,
	.sf-menu li.sfHover li a, .sf-menu li.sfHover li.sfHover li a, .sf-menu li.sfHover li.sfHover li.sfHover li a, .sf-menu li.sfHover li.sfHover li.sfHover li.sfHover li a, .sf-menu li.sfHover li.sfHover li.sfHover li.sfHover li.sfHover li a { color:<?php echo esc_attr( get_theme_mod('sub_nav_font_color_pro', '#a8a8a8') ); ?>; }
	.menu-resized-pro  .sf-menu li.sfHover li a:hover, .menu-resized-pro .sf-menu li.sfHover li.sfHover a, .menu-resized-pro .sf-menu li.sfHover li li a:hover, .menu-resized-pro .sf-menu li.sfHover li.sfHover li.sfHover a, .menu-resized-pro .sf-menu li.sfHover li li li a:hover, .menu-resized-pro .sf-menu li.sfHover li.sfHover li.sfHover a:hover, .menu-resized-pro .sf-menu li.sfHover li.sfHover li.sfHover li.sfHover a, .menu-resized-pro .sf-menu li.sfHover li li li li a:hover, .menu-resized-pro .sf-menu li.sfHover li.sfHover li.sfHover li.sfHover a:hover, .menu-resized-pro .sf-menu li.sfHover li.sfHover li.sfHover li.sfHover li.sfHover a, .menu-resized-pro .sf-menu li.sfHover li li li li li a:hover, .menu-resized-pro .sf-menu li.sfHover li.sfHover li.sfHover li.sfHover li.sfHover a:hover, .menu-resized-pro .sf-menu li.sfHover li.sfHover li.sfHover li.sfHover li.sfHover li.sfHover a,
	.sf-menu li.sfHover li a:hover, .sf-menu li.sfHover li.sfHover a, .sf-menu li.sfHover li li a:hover, .sf-menu li.sfHover li.sfHover li.sfHover a, .sf-menu li.sfHover li li li a:hover, .sf-menu li.sfHover li.sfHover li.sfHover a:hover, .sf-menu li.sfHover li.sfHover li.sfHover li.sfHover a, .sf-menu li.sfHover li li li li a:hover, .sf-menu li.sfHover li.sfHover li.sfHover li.sfHover a:hover, .sf-menu li.sfHover li.sfHover li.sfHover li.sfHover li.sfHover a, .sf-menu li.sfHover li li li li li a:hover, .sf-menu li.sfHover li.sfHover li.sfHover li.sfHover li.sfHover a:hover, .sf-menu li.sfHover li.sfHover li.sfHover li.sfHover li.sfHover li.sfHover a { color:<?php echo esc_attr( get_theme_mod('sub_nav_hover_font_color_pro', '#ffffff') ); ?>; }
	.sf-mega h2.mega-menu-heading, .sf-mega h2.mega-menu-heading a, .sf-mega h2.mega-menu-heading a:hover {color:<?php echo esc_attr( get_theme_mod('sub_nav_hover_font_color_pro', '#ffffff') ); ?>; }
	.sf-menu ul, .sf-mega li.sf-mega-section .deep-level li a,
	.sf-menu li li:last-child a, .sf-menu li li:last-child li:last-child a, .sf-menu li li:last-child li:last-child li:last-child a, .sf-menu li.sfHover li.sfHover li.sfHover li.sfHover li:last-child a,
	.sf-menu li li:last-child li:last-child li:last-child li:last-child a, .sf-menu li.sfHover li.sfHover li.sfHover li.sfHover li.sfHover li:last-child a  { border-color: <?php echo esc_attr( get_theme_mod('sub_nav_border_color_pro', 'rgba(255,255,255,  0.06)') ); ?>; }
	
	header .sf-mega, .sf-menu ul {border-top:1px solid <?php echo esc_attr( get_theme_mod('sub_nav_border_top_pro', '#18aecd') ); ?>; }
	
	header#masthead-pro:after { background:<?php echo esc_attr( get_theme_mod('header_divider_pro', 'rgba(255,255,255,  0.15)') ); ?>;  }
	
	footer#site-footer a { color:<?php echo esc_attr(get_theme_mod('footer_font_link_pro', '#9592b0')); ?>; }

	footer#site-footer a:hover { color:<?php echo esc_attr(get_theme_mod('footer_font_link_hover_pro', '#ffffff')); ?>; }
	
	.post-container-pro h1.blog-title-pro, .post-container-pro h1.blog-title-pro a {color:<?php echo esc_attr(get_theme_mod('blog_link_heading_color', '#1e1e1e')); ?>;}
	.post-container-pro h1.blog-title-pro a:hover {color:<?php echo esc_attr(get_theme_mod('blog_link_heading_hover_color', '#0abedf')); ?>;}
	
	#sidebar { background:<?php echo esc_attr(get_theme_mod('sidebar_bg_pro', '#f5f5f5')); ?>;}
	#sidebar .sidebar-divider-pro {background:<?php echo esc_attr(get_theme_mod('sidebar_divider_pro', '#ffffff')); ?>;}
	#sidebar a { color:<?php echo esc_attr(get_theme_mod('sidebar_link_color_pro', '#1e1e1e')); ?>; }
	#sidebar a:hover { color:<?php echo esc_attr(get_theme_mod('sidebar_link_hover_pro', '#999999')); ?>; }
	
	
	
	.woocommerce .cart_totals a.checkout-button,
	#content-pro .woocommerce input.button,
	body #content-pro .woocommerce p.return-to-shop a.button,
	#single-product-container-pro button.button,	#sidebar a.progression-button, .post-container-pro a.more-link, .woocommerce-tabs #review_form .form-submit input#submit, .wpcf7 input.wpcf7-submit, 	#commentform input.submit {font-size:<?php echo esc_attr(get_theme_mod('pro_button_font_size', '11')); ?>px;}
	
	
	#boxed-layout-pro .width-container-pro .widget .widget_shopping_cart_content p.buttons a.button,
	body .widget .widget_shopping_cart_content .buttons a.button,
	.width-container-pro .widget button.button,
	.woocommerce .cart_totals a.checkout-button,
	#content-pro .woocommerce input.button,
	.woocommerce .woocommerce-message  a.button,
	#content-pro .woocommerce p.return-to-shop a.button,
	#single-product-container-pro button.button,
	.comment-navigation a:hover, .page-nav-pro span, .page-nav-pro a span:hover, ul.page-numbers li .current, ul.page-numbers li a:hover,
	.post-password-form input[type=submit], #sidebar a.progression-button, .post-container-pro a.more-link, .woocommerce-tabs #review_form .form-submit input#submit, .wpcf7 input.wpcf7-submit, #commentform input.submit { color:<?php echo esc_attr(get_theme_mod('button_font_color_pro', '#ffffff' )); ?>; background:<?php echo esc_attr(get_theme_mod('button_font_background_pro', '#46445f' )); ?>; border-color: <?php echo esc_attr(get_theme_mod('button_font_background_pro', '#46445f' )); ?>; }	
	
	#boxed-layout-pro .width-container-pro .widget .widget_shopping_cart_content p.buttons a.button:hover, .width-container-pro .widget button.button:hover, .woocommerce .cart_totals a.checkout-button:hover, #content-pro .woocommerce input.button:hover, .woocommerce .woocommerce-message  a.button:hover, #content-pro .woocommerce p.return-to-shop a.button:hover, #single-product-container-pro button.button:hover, #sidebar a.progression-button:hover, .post-password-form input[type=submit]:hover, .post-container-pro a.more-link:hover, .woocommerce-tabs #review_form .form-submit input#submit:hover, .wpcf7 input.wpcf7-submit:hover, #commentform input.submit:hover { background:<?php echo esc_attr(get_theme_mod('button_font_background_hover_pro', '#060326')); ?>; border-color:<?php echo esc_attr(get_theme_mod('button_font_background_hover_pro', '#060326')); ?>; color:<?php echo esc_attr(get_theme_mod('button_font_hover_pro', '#ffffff')); ?>; }
	

	.page-nav-pro span, .page-nav-pro a span:hover, ul.page-numbers li a, ul.page-numbers li .current, ul.page-numbers li a:hover, body .post-container-pro a.more-link {font-size:<?php echo esc_attr(get_theme_mod('pro_button_font_size', '11' ) - 2); ?>px; }
	
	footer#site-footer #copyright-pro {color:<?php echo esc_attr(get_theme_mod('copyright_color_pro', '#7b7a86')); ?>; border-color:<?php echo esc_attr(get_theme_mod('copyright_border_top_pro', 'rgba(255,255,255,  0.10)')); ?>; }
	footer#site-footer { background:<?php echo esc_attr(get_theme_mod('footer_bg_color_pro', '#050225')); ?>; <?php if (get_theme_mod( 'footer_bg_image_pro')) : ?>background-image:url("<?php echo esc_attr(get_theme_mod( 'footer_bg_image_pro' )); ?>"); <?php if (get_theme_mod( 'footer_bg_cover_pro', 'cover-pro') == "cover-pro") : ?>background-position: center center;-webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;<?php else: ?>background-repeat:repeat-all;<?php endif ?><?php endif ?>}
	
	#page-title-pro {padding-top:<?php echo esc_attr(get_theme_mod('pro_padding_top_page_title', '183')); ?>px; padding-bottom:<?php echo esc_attr(get_theme_mod('pro_padding_bottom_page_title', '90')); ?>px; background:<?php echo esc_attr(get_theme_mod('page_title_bg_pro', '#060326')); ?>;<?php if (get_theme_mod( 'page_title_bg_image_pro', get_template_directory_uri().'/images/page-title.jpg')) : ?>background-image:url("<?php echo esc_attr(get_theme_mod( 'page_title_bg_image_pro', get_template_directory_uri().'/images/page-title.jpg' )); ?>"); <?php if (get_theme_mod( 'page_title_bg_cover_pro', 'cover-pro') == "cover-pro") : ?>background-position: center center;-webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;<?php else: ?>background-repeat:repeat-all;<?php endif ?><?php endif ?> }
	
	
	/* Page */
	<?php  global $post; if(is_page() && get_post_meta($post->ID, 'progression_header_image', true)): ?><?php $gallery_pro = get_post_meta( get_the_id(), 'progression_header_image', false ); foreach ( $gallery_pro as $single_gallery_img ) ?><?php $image = wp_get_attachment_image_src($single_gallery_img, 'full'); ?>#page-title-pro {background-image:url(<?php echo esc_attr($image[0]);?>);}<?php endif ?>
	<?php  global $post; if(is_page() && get_post_meta($post->ID, 'progression_nav_bg', true)): ?>body header#masthead-pro {background:<?php echo esc_attr( get_post_meta($post->ID, 'progression_nav_bg', true) );?>;}<?php endif ?>
	
	
	/* Index */
	<?php if( get_option( 'page_for_posts' ) ) : $cover_page = get_page( get_option( 'page_for_posts' ) ); ?><?php if(is_home()  && get_post_meta($cover_page->ID, 'progression_header_image', true) ): ?><?php $gallery_pro = get_post_meta( $cover_page->ID, 'progression_header_image', false ); foreach ( $gallery_pro as $single_gallery_img ) ?><?php $image = wp_get_attachment_image_src($single_gallery_img, 'full'); ?>#page-title-pro {background-image:url(<?php echo esc_attr($image[0]);?>);}<?php endif ?><?php endif ?>
	<?php if( get_option( 'page_for_posts' ) ) : $cover_page = get_page( get_option( 'page_for_posts' ) ); ?><?php if(is_home()  && get_post_meta($cover_page->ID, 'progression_nav_bg', true) ): ?>body header#masthead-pro {background:<?php echo esc_attr( get_post_meta($cover_page->ID, 'progression_nav_bg', true) );?>;}<?php endif ?><?php endif ?>
	
	
	/* Post */
	<?php if( get_option( 'page_for_posts' ) ) : $cover_page = get_page( get_option( 'page_for_posts' ) ); ?><?php if(is_singular( 'post' )   && get_post_meta($cover_page->ID, 'progression_header_image', true) ): ?>
	<?php $gallery_pro = get_post_meta( $cover_page->ID, 'progression_header_image', false ); foreach ( $gallery_pro as $single_gallery_img ) ?><?php $image = wp_get_attachment_image_src($single_gallery_img, 'full'); ?>#page-title-pro {background-image:url(<?php echo esc_attr($image[0]);?>);}<?php endif ?><?php endif ?>
	<?php if( get_option( 'page_for_posts' ) ) : $cover_page = get_page( get_option( 'page_for_posts' ) ); ?><?php if(is_singular( 'post' )   && get_post_meta($cover_page->ID, 'progression_nav_bg', true) ): ?>body header#masthead-pro {background:<?php echo esc_attr( get_post_meta($cover_page->ID, 'progression_nav_bg', true) );?>;}<?php endif ?><?php endif ?>
	
	
	/* Shop */
	<?php if (class_exists('Woocommerce')) : ?><?php $your_shop_page = get_post( wc_get_page_id( 'shop' ) ); if(is_shop() && get_post_meta($your_shop_page->ID, 'progression_header_image', true) ): ?>
		<?php $gallery_pro = get_post_meta( wc_get_page_id( 'shop' ) , 'progression_header_image', false ); foreach ( $gallery_pro as $single_gallery_img ) ?><?php $image = wp_get_attachment_image_src($single_gallery_img, 'full'); ?>#page-title-pro {background-image:url(<?php echo esc_attr($image[0]);?>);}<?php endif ?>
	<?php endif ?>
	<?php if (class_exists('Woocommerce')) : ?><?php $your_shop_page = get_post( wc_get_page_id( 'shop' ) ); if(is_singular( 'product' ) && get_post_meta($your_shop_page->ID, 'progression_header_image', true) ): ?>
		<?php $gallery_pro = get_post_meta( wc_get_page_id( 'shop' ) , 'progression_header_image', false ); foreach ( $gallery_pro as $single_gallery_img ) ?><?php $image = wp_get_attachment_image_src($single_gallery_img, 'full'); ?>#page-title-pro {background-image:url(<?php echo esc_attr($image[0]);?>);}<?php endif ?>
	<?php endif ?>
	
	<?php if (class_exists('Woocommerce')) : ?><?php $your_shop_page = get_post( wc_get_page_id( 'shop' ) ); if(is_shop() && get_post_meta($your_shop_page->ID, 'progression_nav_bg', true) ): ?>body header#masthead-pro {background:<?php echo esc_attr( get_post_meta($your_shop_page->ID, 'progression_nav_bg', true) );?>; }<?php endif ?><?php endif ?>
	<?php if (class_exists('Woocommerce')) : ?><?php $your_shop_page = get_post( wc_get_page_id( 'shop' ) ); if(is_singular( 'product' ) && get_post_meta($your_shop_page->ID, 'progression_nav_bg', true) ): ?>body header#masthead-pro {background:<?php echo esc_attr( get_post_meta($your_shop_page->ID, 'progression_nav_bg', true) );?>; }<?php endif ?><?php endif ?>
	
	body {background-color:<?php echo esc_attr(get_theme_mod('body_bg_color_pro', '#ffffff')); ?>; 
	<?php if (get_theme_mod( 'body_bg_image_pro')) : ?>background-image:url("<?php echo esc_attr(get_theme_mod( 'body_bg_image_pro' )); ?>"); <?php if (get_theme_mod( 'body_bg_cover_pro', 'cover-pro') == "cover-pro") : ?>background-position: center center;-webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;<?php else: ?>background-repeat:repeat-all;<?php endif ?><?php endif ?>}
	
	header#masthead-pro {background:	<?php echo esc_attr(get_theme_mod('header_bg_color_pro', 'rgba(0, 0, 0,  0.1)') ); ?>; <?php if (get_theme_mod( 'header_img_bg_image_pro')) : ?>background-image:url("<?php echo esc_attr(get_theme_mod( 'header_img_bg_image_pro' )); ?>"); <?php if (get_theme_mod( 'header_img_bg_cover_pro', 'cover-pro') == "cover-pro") : ?>background-position: center center;-webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;<?php else: ?>background-repeat:repeat-all;<?php endif ?><?php endif ?>}	
	
	
	#pro-scroll-top { color:<?php echo esc_attr(get_theme_mod('pro_scroll_color', '#ffffff')); ?>; background: <?php echo esc_attr(get_theme_mod('pro_scroll_bg_color', 'rgba(0,0,0,  0.3)')); ?>; border-top:1px solid <?php echo esc_attr(get_theme_mod('pro_scroll_border_color', 'rgba(255,255,255,  0.2)')); ?>; border-left:1px solid <?php echo esc_attr(get_theme_mod('pro_scroll_border_color', 'rgba(255,255,255,  0.2)')); ?>; border-right:1px solid <?php echo esc_attr(get_theme_mod('pro_scroll_border_color', 'rgba(255,255,255,  0.2)')); ?>; }
	
	#pro-scroll-top:hover {  background: <?php echo esc_attr(get_theme_mod('pro_scroll_hvr_bg_color', '#0abedf')); ?>; border-color:<?php echo esc_attr(get_theme_mod('pro_scroll_hvr_border_color', '#0abedf')); ?>; }
	<?php if (get_theme_mod( 'pro_scroll_top') == "scroll-off-pro") : ?>a#pro-scroll-top {display:none;}<?php endif ?>
	
	.sk-circle .sk-child:before, .sk-rotating-plane, .sk-double-bounce .sk-child, .sk-wave .sk-rect, .sk-wandering-cubes .sk-cube, .sk-spinner-pulse, .sk-chasing-dots .sk-child, .sk-three-bounce .sk-child, .sk-fading-circle .sk-circle:before, .sk-cube-grid .sk-cube{background-color:<?php echo esc_attr(get_theme_mod('pro_page_loader_text', '#24cdc1')); ?>;}
	#page-loader-pro { background:<?php echo esc_attr(get_theme_mod('pro_page_loader_bg', '#1b1d27')); ?>; color:<?php echo esc_attr(get_theme_mod('pro_page_loader_text', '#84adc0')); ?>; }
	
	<?php if ( get_theme_mod( 'pro_site_layout_wide') == 'boxed-pro') : ?>
	#boxed-layout-pro {
		position:relative;
		width:1200px;
		margin-left:auto; margin-right:auto; 
		background:<?php echo esc_attr(get_theme_mod('boxed_bg_color_pro', '#f7f8f8')); ?>;-moz-box-shadow:0px 0px 15px rgba(0, 0, 0, 0.05); -webkit-box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.05); box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.05);
	}
	@media only screen and (min-width: 960px) and (max-width: 1240px) {
		body #boxed-layout-pro {width:92%;}
	}
	<?php endif; ?>
</style>
    <?php
}
add_action('wp_head', 'qube_customize_css');