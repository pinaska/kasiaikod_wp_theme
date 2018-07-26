<?php
/**
 * Kasia i kod Theme Customizer
 *
 * @package kasiaikod
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function kasiaikod_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname', array(
				'selector'        => '.site-title a',
				'render_callback' => 'kasiaikod_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription', array(
				'selector'        => '.site-description',
				'render_callback' => 'kasiaikod_customize_partial_blogdescription',
			)
		);
	}

	/**
	 * Theme options.
	 */
	$wp_customize->add_section(
		'theme_options', array(
			'title'    => __( 'Theme Options', 'kasiaikod' ),
			'priority' => 130, // Before Additional CSS.
		)
	);

	if ( function_exists( 'kasiaikod_lazyload_images' ) ) {
		$wp_customize->add_setting(
			'lazy_load_media', array(
				'default'           => 'lazyload',
				'sanitize_callback' => 'kasiaikod_sanitize_lazy_load_media',
				'transport'         => 'postMessage',
			)
		);

		$wp_customize->add_control(
			'lazy_load_media', array(
				'label'           => __( 'Lazy-load images', 'kasiaikod' ),
				'section'         => 'theme_options',
				'type'            => 'radio',
				'description'     => __( 'Lazy-loading images means images are loaded only when they are in view. Improves performance, but can result in content jumping around on slower connections.', 'kasiaikod' ),
				'choices'         => array(
					'lazyload'    => __( 'Lazy-load on (default)', 'kasiaikod' ),
					'no-lazyload' => __( 'Lazy-load off', 'kasiaikod' ),
				),
			)
		);
	}
}
add_action( 'customize_register', 'kasiaikod_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function kasiaikod_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function kasiaikod_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function kasiaikod_customize_preview_js() {
	wp_enqueue_script( 'kasiaikod-customizer', get_theme_file_uri( '/js/customizer.js' ), array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'kasiaikod_customize_preview_js' );

/**
 * Sanitize the lazy-load media options.
 *
 * @param string $input Lazy-load setting.
 */
function kasiaikod_sanitize_lazy_load_media( $input ) {
	$valid = array(
		'lazyload' => __( 'Lazy-load images', 'kasiaikod' ),
		'no-lazyload' => __( 'Load images immediately', 'kasiaikod' ),
	);

	if ( array_key_exists( $input, $valid ) ) {
		return $input;
	}

	return '';
}
