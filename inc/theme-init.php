<?php

/**
 * Add required activate plugin ACF
 */

function cares_required_module() {
	if( !function_exists('the_field') ) {
		function load_acf_required_message() { ?>
			<div class="notice notice-warning is-dismissible">
				<p><?php _e( 'This theme needs Advanced Custom Fields to work.', 'cares' ); ?></p>
			</div>
		<?php }
		add_action('admin_notices', 'load_acf_required_message');
		add_action('wp_footer', 'load_acf_required_message');
	}
}

add_action('after_setup_theme', 'cares_required_module');

/**
 * Add notice error when ACF is not activate
 */



function cares_setup() {
	$text_domain = 'wp_base';
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-logo' );
	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
	register_nav_menus( array(
		'top'    => __( 'Top Menu', $text_domain ),
		'main' => __( 'Main Menu', $text_domain ),
		'social' => __( 'Social Menu', $text_domain )
	) );
}

add_action( 'after_setup_theme', 'cares_setup' );

function cares_scripts() {
	wp_enqueue_style( 'main-style', get_theme_file_uri( '/assets/css/main.css' ), array(), '1.0' );
	wp_enqueue_script( 'main-scripts', get_theme_file_uri( '/assets/js/main.js' ), array(), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'cares_scripts' );
