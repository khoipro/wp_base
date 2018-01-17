<?php

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
