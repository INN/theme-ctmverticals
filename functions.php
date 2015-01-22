<?php
/**
 * Your theme's custom functions go here
 */

/**
 * This simple function is used in `tests/test-functions.php` to demonstrate
 * how to write a simple unit test.
 *
 * @see "tests/test-functions.php"
 */
function your_theme_hello_world() {
	return "Hello World!";
}

/**
 * Register a custom homepage layout
 *
 * @see "homepages/layouts/your_homepage_layout.php"
 */
function register_custom_homepage_layout() {
	include_once __DIR__ . '/homepages/layouts/your_homepage_layout.php';
	register_homepage_layout('YourHomepageLayout');
}
add_action('init', 'register_custom_homepage_layout', 0);


/**
 * Register a custom widget
 *
 * @see "inc/widgets/your_simple_widget.php"
 */
function register_widget() {
	include_once __DIR__ . '/inc/widgets/your_simple_widget.php';
	register_widget('your_simple_widget');
}
add_action('widgets_init', 'register_widget', 1);

/**
 * Include your theme's javascript
 *
 * @see "js/your_theme.js"
 */
function enqueue_script() {
	$version = '0.1.0';
	wp_enqueue_script(
		'your_theme',
		get_stylesheet_directory() . '/js/your_theme.js',
		array('jquery'),
		$version,
		true
	);
}
add_action('wp_enqueue_scripts', 'enqueue_script');
