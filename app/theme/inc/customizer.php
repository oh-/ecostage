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
	// define your settings, then your sections, then your controls (controls need a section and a setting to function)
	// Settings		
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	// _s Call to action settings and controls
	$wp_customize->add_setting( '_s_cta_text', array(
		'default'           => 'Call to Action', //Possibly this could be $wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
		'sanitize_callback' => '_s_cta_text',
		 'transport'         => 'refresh',
	) );

	// Sections
	$wp_customize->add_section( '_s_cta', array(
		'title'	=> __('_s Call to Action','_s'),
		'priority' => 30,
	) );

	// Controls
        /*
	 * Types of properties available to render
	 * ***
	 * 'type' properties for control settings
	 * text (default)
	 * checkbox
	 * radio (requires choices array in $args)
	 * select (requires choices array in $args)
	 * dropdown-pages
	 * textarea (since WordPress 4.0)

	 * ***
	 * The format (Class)  of adding a new control that is just plain text
	 * ***
	 * $wp_customize->add_control(
	 * ) );

	 */
	 // Sections
	 // Add an additional description to the header image section.
	 /* $wp_customize->get_section( 'header_image' )->description = __( 'Applied to the header on small screens and the sidebar on wide screens.', '_s' );

	 * $wp_customize->add_section( '_s_cta', array(
	 * 	'title'	=> __('_s Call to Action','_s'),
	 * 	'priority' => 30,
	 * ) );

	 * // Controls
	 * Types of properties available to render
	 * 'type' properties for control settings
	 * text (default)
	 * checkbox
	 * radio (requires choices array in $args)
	 * select (requires choices array in $args)
	 * dropdown-pages
	 * textarea (since WordPress 4.0)

	 * ***
	 * The format (Class)  of adding a new control that is just plain text
	 * ***
	 * $wp_customize->add_control(
	 *     new WP_Customize_Control(
	 * 	$wp_customize,
	 * 	'your_setting_id',
	 * 	array(
	 * 	    'label'          => __( 'Dark or light theme version?', 'theme_name' ),
	 * 	    'section'        => 'your_section_id',
	 * 	    'settings'       => 'your_setting_id',
	 * 	    'type'           => 'radio',
	 * 	    'choices'        => array(
	 * 		'dark'   => __( 'Dark' ),
	 * 		'light'  => __( 'Light' )
	 * 	    )
	 * 	)
	 *     )
	 * );
         */
	$wp_customize->add_control(  new WP_Customize_Control( $wp_customize, '_s_cta_text', array(
		'label'		=> __( 'CTA Call Text', '_s' ),
		'section'	=> '_s_cta',
		'settings'	=> '_s_cta_text',
		'type'		=> 'textarea'
	) ) );


}
add_action( 'customize_register', '_s_customize_register' );

/**
 * Register color schemes for Twenty Fifteen.
 *
 * Can be filtered with {@see '_s_color_schemes'}.
 *
 * The order of colors in a colors array:
 * 1. Main Background Color.
 * 2. Sidebar Background Color.
 * 3. Box Background Color.
 * 4. Main Text and Link Color.
 * 5. Sidebar Text and Link Color.
 * 6. Meta Box Background Color.
 *
 * @since Twenty Fifteen 1.0
 *
 * @return array An associative array of color scheme options.
 */
function _s_get_color_schemes() {
	return apply_filters( '_s_color_schemes', array(
		'default' => array(
			'label'  => __( 'Default', '_s' ),
			'colors' => array(
				'#f1f1f1',
				'#ffffff',
				'#ffffff',
				'#333333',
				'#333333',
				'#f7f7f7',
			),
		),
		'dark'    => array(
			'label'  => __( 'Dark', '_s' ),
			'colors' => array(
				'#111111',
				'#202020',
				'#202020',
				'#bebebe',
				'#bebebe',
				'#1b1b1b',
			),
		),
		'yellow'  => array(
			'label'  => __( 'Yellow', '_s' ),
			'colors' => array(
				'#f4ca16',
				'#ffdf00',
				'#ffffff',
				'#111111',
				'#111111',
				'#f1f1f1',
			),
		),
		'pink'    => array(
			'label'  => __( 'Pink', '_s' ),
			'colors' => array(
				'#ffe5d1',
				'#e53b51',
				'#ffffff',
				'#352712',
				'#ffffff',
				'#f1f1f1',
			),
		),
		'purple'  => array(
			'label'  => __( 'Purple', '_s' ),
			'colors' => array(
				'#674970',
				'#2e2256',
				'#ffffff',
				'#2e2256',
				'#ffffff',
				'#f1f1f1',
			),
		),
		'blue'   => array(
			'label'  => __( 'Blue', '_s' ),
			'colors' => array(
				'#e9f2f9',
				'#55c3dc',
				'#ffffff',
				'#22313f',
				'#ffffff',
				'#f1f1f1',
			),
		),
	) );
}
/*
 * Custom function to extend textbox.
 */
if( class_exists( 'WP_Customize_Control' ) ):
	class WP_Customize_Textarea_Control extends WP_Customize_Control {
		public $type = 'textarea';
 
		public function render_content() {
			?>
		<label>
			<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
			<textarea rows="5" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
		</label>
		<?php
		}
	}
endif;


/**
 * Colorscheme choices
 */


if ( ! function_exists( '_s_get_color_scheme_choices' ) ) :
/**
 * Returns an array of color scheme choices registered for Twenty Fifteen.
 *
 * @since Twenty Fifteen 1.0
 *
 * @return array Array of color schemes.
 */
function _s_get_color_scheme_choices() {
	$color_schemes                = _s_get_color_schemes();
	$color_scheme_control_options = array();

	foreach ( $color_schemes as $color_scheme => $value ) {
		$color_scheme_control_options[ $color_scheme ] = $value['label'];
	}

	return $color_scheme_control_options;
}
endif; // _s_get_color_scheme_choices

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function _s_customize_preview_js() {
	wp_enqueue_script( '_s_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', '_s_customize_preview_js' );
