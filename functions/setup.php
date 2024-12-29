<?php

/**
 * https://developer.wordpress.org/reference/functions/add_theme_support/
 */

if (!function_exists('codeweber')) {

	function codeweber()
	{

		// Enable featured images
		add_theme_support('post-thumbnails');

		// Enable theme logo
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 100,
				'width'       => 400,
				'flex-height' => true,
				'flex-width'  => true,
				'header-text' => array('site-title', 'site-description'),
			)
		);

		// Enable Woocommerce
		add_theme_support('woocommerce');

		// Enable RSS feeds
		add_theme_support('automatic-feed-links');

		// Enable HTML5 markup
		add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));

		// Enable title meta tag to <head>
		add_theme_support('title-tag');

		// Enable Widgets refresh from Customizer
		add_theme_support('customize-selective-refresh-widgets');

		// Set max content width (embedded)
		if (!isset($content_width)) {
			$content_width = 1400;
		}

		// Load translations
		load_theme_textdomain('codeweber', get_template_directory() . '/languages');

		// Add excerpt to pages
		// add_post_type_support( 'page', 'excerpt' );
	}
}

add_action('after_setup_theme', 'codeweber');
