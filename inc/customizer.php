<?php

/**
 * Class wpbase_Customizer
 *
 * @link http://codex.wordpress.org/Theme_Customization_API
 * @since wpbase 1.1.0
 */
class wpbase_Customizer {
	public static function register ( $wp_customize ) {
		$wp_customize->add_panel('global-modules', array(
			'title' => __('Global Modules', 'wpbase'),
			'priority' => 30
		));
		$wp_customize->add_section('footer', array(
			'title' => __('Footer', 'wpbase'),
			'panel' => 'global-modules',
			'priority' => 100
		));
		$wp_customize->add_setting( 'footer_copyright_text_setting',
			array(
				'default' => __('Copyright &copy; %s by %s', date('Y'), get_bloginfo('name')),
				'transport' => 'refresh',
				'sanitize_callback' => 'wp_filter_nohtml_kses'
			)
		);
		$wp_customize->add_control( 'footer_copyright_text',
			array(
				'label' => __( 'Footer Copyright Text' ),
				'section' => 'footer',
				'settings' => 'footer_copyright_text_setting',
				'priority' => 10,
				'type' => 'textarea',
				'input_attrs' => array( // Optional.
					'placeholder' => __( 'Enter your copyright text here', 'wpbase' ),
				),
			)
		);
	}

	public static function header_output() {

	}

	public static function live_preview() {
		wp_enqueue_script(
			'wpbase-customizer',
			get_template_directory_uri() . '/assets/js/customizer.js',
			array(  'jquery', 'customize-preview' ),
			'',
			true
		);
	}

	public static function generate_css( $selector, $style, $mod_name, $prefix='', $postfix='', $echo=true ) {
		$return = '';
		$mod = get_theme_mod($mod_name);
		if ( ! empty( $mod ) ) {
			$return = sprintf('%s { %s:%s; }',
				$selector,
				$style,
				$prefix.$mod.$postfix
			);
			if ( $echo ) {
				echo $return;
			}
		}
		return $return;
	}
}

// Setup the Theme Customizer settings and controls...
add_action( 'customize_register' , array( 'wpbase_Customizer' , 'register' ) );

// Output custom CSS to live site
add_action( 'wp_head' , array( 'wpbase_Customizer' , 'header_output' ) );

// Enqueue live preview javascript in Theme Customizer admin screen
add_action( 'customize_preview_init' , array( 'wpbase_Customizer' , 'live_preview' ) );
