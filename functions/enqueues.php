<?php

/**
 * https://developer.wordpress.org/themes/basics/including-css-javascript/
 */

if (!function_exists('brk_styles_scripts')) {
	function brk_styles_scripts()
	{
		$theme_version = wp_get_theme()->get('Version');

		// --- CSS ---
		//wp_enqueue_style('google-fonts', get_template_directory_uri() . '/dist/css/fonts/urbanist.css', false, $theme_version, 'all');
		wp_enqueue_style('plugin-styles', get_template_directory_uri() . '/dist/css/plugins.css', false, $theme_version, 'all');
		wp_enqueue_style('theme-styles', get_template_directory_uri() . '/dist/css/style.css', false, $theme_version, 'all');

		// --- Change Theme Color
		if (get_theme_mod('codeweber_color') == 'custom') :
			wp_enqueue_style('color-styles', get_template_directory_uri() . '/dist/css/colors/custom.css', false, $theme_version, 'all');
		else :
			//wp_enqueue_style('color-styles', get_template_directory_uri() . '/dist/css/colors/' . get_theme_mod('codeweber_color') . '.css', false, $theme_version, 'all');
		endif;

		// --- Custom CSS ---
		wp_enqueue_style('root-styles', get_template_directory_uri() . '/style.css', false, $theme_version, 'all');

		// --- JS ---

		//* add comment reply script */
		if (is_singular() and comments_open() and (get_option('thread_comments') == 1)) wp_enqueue_script('comment-reply');

		/*dist add codeweber theme scripts */
		wp_enqueue_script('plugins-scripts', get_template_directory_uri() . '/dist/js/plugins.js', false, $theme_version, true);
		wp_enqueue_script('theme-scripts', get_template_directory_uri() . '/dist/js/theme.js', false, $theme_version, true);
	}
}
add_action('wp_enqueue_scripts', 'brk_styles_scripts');

// --- Unicons ACF admin styles and Blokcs Gutenberg---
if (!function_exists('brk_styles_scripts_admin')) {
	function brk_styles_scripts_admin()
	{
		$theme_version = wp_get_theme()->get('Version');

		// --- Unicons admin acf ---
		wp_enqueue_style('plugin-styles1', get_template_directory_uri() . '/dist/css/plugins.css', false, $theme_version, 'all');
		wp_enqueue_style('theme-styles1', get_template_directory_uri() . '/dist/css/style.css', false, $theme_version, 'all');

		/* Gutenberg Admin Flexible Content CSS*/
		wp_enqueue_style('gutenberg_admin_styles', get_template_directory_uri() . '/templates/flexible-content/flexible-block.css', false, $theme_version, 'all');

		// --- JS ---
		wp_enqueue_script('plugins-scripts2', get_template_directory_uri() . '/dist/js/plugins.js', false, $theme_version, true);
		wp_enqueue_script('theme-scripts2', get_template_directory_uri() . '/dist/js/theme.js', false, $theme_version, true);
	}
}
add_action('admin_enqueue_scripts', 'brk_styles_scripts_admin');
