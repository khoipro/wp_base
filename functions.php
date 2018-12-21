<?php
/**
 * Theme Requirements
 */
require get_parent_theme_file_path( '/inc/theme-init.php' );
require get_parent_theme_file_path( '/inc/customizer.php' );

add_action('wp_enqueue_scripts', 'wpbase_register_javascript', 100);

function wpbase_register_javascript() {
	wp_register_script('mediaelement', plugins_url('wp-mediaelement.min.js', __FILE__), array('jquery'), '4.8.2', true);
	wp_enqueue_script('mediaelement');
}
