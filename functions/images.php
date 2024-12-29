<?php

/**
 * https://developer.wordpress.org/reference/functions/add_image_size/
 * add_image_size( $name:string, $width:integer, $height:integer, $crop:boolean|array )
 * array( 'x_crop_position', 'y_crop_position' )
 * x_crop_position > left center right
 * y_crop_position > top center bottom
 */

if (!function_exists('brk_image_settings')) {
	function brk_image_settings()
	{
		add_image_size('brk_big', 1400, 800, true);

		add_image_size('brk_single', 800, 500, true);
		add_image_size('brk_post_sm', 140, 140, true);

		add_image_size('cw_icon_sm', 50, 50, true);
		add_image_size('cw_icon_md', 70, 70, true);
		add_image_size('cw_icon_lg', 100, 100, true);


		add_image_size('sandbox_hero_1', 800, 538, true);
		add_image_size('sandbox_hero_2', 625, 598, true);
		add_image_size('sandbox_hero_3', 590, 650, true);
		add_image_size('sandbox_hero_4', 901, 358, true);
		add_image_size('sandbox_hero_8', 388, 510, true);
		add_image_size('sandbox_hero_5', 1000, 625, true);
		add_image_size('sandbox_hero_6', 1100, 900, true);
		add_image_size('sandbox_hero_9', 285, 546, true);
		add_image_size('sandbox_hero_10', 1200, 581, true);
		add_image_size('sandbox_hero_11', 575, 550, true);
		add_image_size('sandbox_hero_14', 1200, 650, true);
		add_image_size('sandbox_hero_15', 1920, 1040, true);
		add_image_size('sandbox_hero_16', 560, 540, true);
		add_image_size('sandbox_hero_17', 1920, 890, true);
		add_image_size('sandbox_hero_18', 800, 800, true);
		add_image_size('sandbox_hero_26', 800, 1080, true);


		add_image_size('sandbox_about_4', 450, 450, true);

		add_image_size('sandbox_faq_1', 800, 590, true);

		add_image_size('sandbox_process_8', 373, 682, true);

		add_image_size('sandbox_features_1', 595, 507, true);
		add_image_size('sandbox_features_6', 800, 621, true);
		add_image_size('sandbox_features_10', 350, 338, true);

		add_image_size('sandbox_slider_1', 560, 350, true);
		add_image_size('sandbox_slider_2', 460, 307, true);

		add_image_size('sandbox_youtube_mq', 480, 360, true);



		add_image_size('sandbox_clients_logo_1', 272, 80, true);
		add_image_size('sandbox_clients_logo_1-1', 272, 80, false);
		add_image_size('sandbox_clients_logo_2', 140, 90, true);

		add_image_size('contact_2', 480, 550, true);

		add_image_size('testimonial_2', 575, 383, true);
		add_image_size('testimonial_8', 455, 655, true);
		add_image_size('testimonial_16', 385, 360, true);

		add_image_size('cart_checkout', 90, 100, true);


		add_image_size('project_1', 1290, 735, true);
		add_image_size('project_1_1', 630, 420, true);


		add_image_size('project_4_banner', 1920, 600, true);
		add_image_size('project_4', 410, 555, true);
		add_image_size('project_4_1', 850, 555, true);

		add_image_size('process_3', 650, 874, true);

		add_image_size('team-1', 300, 300, true);

		add_image_size('archive_4', 410, 410, true);
		add_image_size('archive_4_2', 410, 445, true);
		add_image_size('archive_4_1', 410, 310, true);


		add_image_size('circus_1', 340, 420, true);
		add_image_size('circus_2', 295, 362, true);

		remove_image_size('large');
		// remove_image_size('thumbnail');
		remove_image_size('medium');
		remove_image_size('medium_large');
		remove_image_size('1536x1536');
		remove_image_size('2048x2048');
	}
}
add_action('after_setup_theme', 'brk_image_settings');


// --- Set image compression value ---
// https://developer.wordpress.org/reference/hooks/jpeg_quality/

function brk_image_quality()
{
	return 80;
}
add_filter('jpeg_quality', 'brk_image_quality');
