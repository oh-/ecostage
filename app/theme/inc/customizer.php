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
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	$wp_customize->get_section( 'header-infi' )->transport = 'postMessage';
	$wp_customize->add_section( 'header_infi', array(
		'title' => __('Main Header info'),
		'description' => __('Add the Header paragraph and button text here'),
	) );
	$wp_customize->add_setting( '_s_options[call]', array(
		'type' => 'theme_mod', //  or 'option'
		'defaults' => 'We are fighting a cause!',
		'sanitize_callback' => 'call_to_action',
	) );
	$wp_customize->add_control('call_to_action', array(
		'label' => __('Call To Action Text'),
		'type' => 'textarea', // core provides checkbox, textarea, radio( array('key' => 'value')), select, array('key' => 'value') dropdown-pages. or any HTML <input> element
		'section' => 'header_infi',
	) );
}
add_action( 'customize_register', '_s_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function _s_customize_preview_js() {
	wp_enqueue_script( '_s_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', '_s_customize_preview_js' );
