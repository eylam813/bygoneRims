<?php
/**
 * bygone Theme Customizer
 *
 * @package bygone
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function bygone_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'bygone_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'bygone_customize_partial_blogdescription',
		) );
	}



	// PANELS
	$wp_customize->add_panel('bygone_social_media_panel', array(
		'title' => esc_html__('Social Media', 'bygone-theme'),
		'capability' => 'edit_theme_options',
	));


	// SECTIONS
	// facebook
	$wp_customize->add_section('bygone_facebook_section', array(
		'title' => esc_html__('Facebook', 'sample-theme'),
		'capability' => 'edit_theme_options',
		'panel' => 'bygone_social_media_panel',
	));

	// instagram
	$wp_customize->add_section('bygone_instagram_section', array(
		'title' => esc_html__('Instagram', 'sample-theme'),
		'capability' => 'edit_theme_options',
		'panel' => 'bygone_social_media_panel',
	));

	// twitter
	$wp_customize->add_section('bygone_twitter_section', array(
		'title' => esc_html__('Twitter', 'sample-theme'),
		'capability' => 'edit_theme_options',
		'panel' => 'bygone_social_media_panel',
	));

	
	// SETTINGS
	// facebook
	$wp_customize->add_setting('bygone_facebook_url', array(
		'transport' => 'refresh',
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	));

	// instagram
	$wp_customize->add_setting('bygone_instagram_url', array(
		'transport' => 'refresh',
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	));

	// twitter
	$wp_customize->add_setting('bygone_twitter_url', array(
		'transport' => 'refresh',
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	));


	// CONTROLS
	// facebook
	$wp_customize->add_control('bygone_facebook_url', array(
		'label' => esc_html__('Facebook URL', 'bygone_theme'),
		'description' => esc_html__('Add URL to display facebook', 'bygone_theme'),
		'section' => 'bygone_facebook_section',
		'type' => 'input',
		'input_attrs' => array(
			'class' => 'my-custom-class-for-js',
			'style' => 'border: 1px solid #900',
			'placeholder' => esc_html__('http://facebook.com', 'bygone_theme'),
		),
	));

	// instagram
	$wp_customize->add_control('bygone_instagram_url', array(
		'label' => esc_html__('Instagram URL', 'bygone_theme'),
		'description' => esc_html__('Add URL to display Instagram', 'bygone_theme'),
		'section' => 'bygone_instagram_section',
		'type' => 'input',
		'input_attrs' => array(
			'class' => 'my-custom-class-for-js',
			'style' => 'border: 1px solid #900',
			'placeholder' => esc_html__('http://instagram.com', 'bygone_theme'),
		),
	));

	// twitter
	$wp_customize->add_control('bygone_twitter_url', array(
		'label' => esc_html__('Twitter URL', 'bygone_theme'),
		'description' => esc_html__('Add URL to display twitter', 'bygone_theme'),
		'section' => 'bygone_twitter_section',
		'type' => 'input',
		'input_attrs' => array(
			'class' => 'my-custom-class-for-js',
			'style' => 'border: 1px solid #900',
			'placeholder' => esc_html__('http://twitter.com', 'bygone_theme'),
		),
	));


}
add_action( 'customize_register', 'bygone_customize_register' );



/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function bygone_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function bygone_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function bygone_customize_preview_js() {
	wp_enqueue_script( 'bygone-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'bygone_customize_preview_js' );
