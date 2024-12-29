<?php

/**
 * https://developer.wordpress.org/themes/functionality/navigation-menus/
 */

if (!function_exists('codeweber_navmenus')) {

	function codeweber_navmenus()
	{

		register_nav_menus(
			array(
				'header_1' => esc_html__('Header Menu One', 'codeweber'),
				'header_2' => esc_html__('Header Menu Two', 'codeweber'),
				'woocommerce' => esc_html__('Woocommerce', 'codeweber'),
				'projects' => esc_html__('Projects', 'codeweber'),
				'services' => esc_html__('Services', 'codeweber'),
				'offcanvas_left' => esc_html__('Offcanvas Menu Left', 'codeweber'),
				'offcanvas_right' => esc_html__('Offcanvas Menu Right', 'codeweber'),
				'faq' => esc_html__('FAQ', 'codeweber'),
				'testimonials' => esc_html__('Testimonials', 'codeweber'),
				'footer' => esc_html__('Footer Menu', 'codeweber'),
				'footer_1' => esc_html__('Footer Menu 1', 'codeweber'),
				'footer_2' => esc_html__('Footer Menu 2', 'codeweber'),
				'footer_3' => esc_html__('Footer Menu 3', 'codeweber'),
			)
		);
	}
}

add_action('after_setup_theme', 'codeweber_navmenus');
