<?php
/**
 * _s Theme Customizer
 *
 * @package _s
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function _s_customize_register( $wp_customize ) {

	/* here are the examples
         */
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	/*
	 * Sections 
	 */
	$wp_customize->add_section('_s_cta', array(
		'title' => __('Call to action', '_s'),
		'description' => __('Text for Theme Call to Action, or main heading', '_s')
	));

	$wp_customize->add_section('_s_header', array(
		'title' => __('Header Image', '_s'),
		'description' => __('Header Image', '_s')
	));
        /*
	 * Call to Action
         */
	// CTA Button Link
	$wp_customize->add_setting('_s_cta_link', array(
		'default' => 'http://www.madeso.uk/r/te',
	));
	$wp_customize->add_control( new WP_Customize_Control($wp_customize, '_s_cta_link', array(
		'label' => __('enter the link where you would like the button to go', '_s'),
		'section' => '_s_cta',
		'setting' => '_s_cta_link',
		'type' => 'text'
	) ));
	
	// CTA Button Text
	$wp_customize->add_setting('_s_cta_link_text', array(
		'default' => __('Call to action link', '_s'),
	));
	$wp_customize->add_control( new WP_Customize_Control($wp_customize, '_s_cta_link_text', array(
		'label' => __('Call to action button text', '_s'),
		'section' => '_s_cta',
		'setting' => '_s_cta_link_text',
		'type' => 'text'
	) ));

	// Call to Action text
	$wp_customize->add_setting('_s_cta_text', array(
		'default' => __('We are building a global movement of performing arts practitioners interested in placing sustainability at the heart of their creative practices', '_s'),
	));
	$wp_customize->add_control( new WP_Customize_Control($wp_customize, '_s_cta_text', array(
		'label' => __('Call to action', '_s'),
		'section' => '_s_cta',
		'setting' => '_s_cta_text',
		'type' => 'textarea'
	) ));

        /*
	 * Header Image
         */
	$wp_customize->add_setting('_s_header_image', array(
		'default' => 'default',
	));
	$wp_customize->add_control( new WP_Customize_Header_Image_Control($wp_customize, '_s_header_image', array(
		'label' => __('Custom Header', '_s'),
		'section' => '_s_header',
		'setting' => '_s_header_image',
	) ));
}
add_action( 'customize_register', '_s_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function _s_customize_preview_js() {
	wp_enqueue_script( '_s_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', '_s_customize_preview_js' );
