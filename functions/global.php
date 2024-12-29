<?php
include 'global_function/faq_functions.php';
include 'global_function/page_functions.php';
include 'global_function/services_functions.php';
include 'global_function/project_functions.php';
include 'global_function/blog_functions.php';
include 'global_function/testimonials_functions.php';
include 'global_function/header_functions.php';
include 'global_function/footer_functions.php';
include 'global_function/page_header_generator.php';
include 'global_function/404_functions.php';


/**
 * Enable SVG support ---
 */

function brk_svg_upload($mimes)
{
	$mimes['svg']  = 'image/svg+xml';
	$mimes['svgz'] = 'image/svg+xml';

	return $mimes;
}
add_filter('upload_mimes', 'brk_svg_upload');

function brk_svg_mimetype($data = null, $file = null, $filename = null, $mimes = null)
{
	$ext = isset($data['ext']) ? $data['ext'] : '';
	if (strlen($ext) < 1) {
		$exploded = explode('.', $filename);
		$ext      = strtolower(end($exploded));
	}
	if ('svg' === $ext) {
		$data['type'] = 'image/svg+xml';
		$data['ext']  = 'svg';
	} elseif ('svgz' === $ext) {
		$data['type'] = 'image/svg+xml';
		$data['ext']  = 'svgz';
	}

	return $data;
}
add_filter('wp_check_filetype_and_ext', 'brk_svg_mimetype', 10, 4);



//??? --- Excerpt lenght --- 
function brk_excerpt_length($length)
{
	return 40;
}
// add_filter( 'excerpt_length', 'brk_excerpt_length', 999 );


//??? --- Thumbnail alt --- BRK Old
// Echoes the "alt" value of a post thumbnail as inserted in the media gallery

function brk_thumbnail_alt()
{
	$brk_thumbnail_alt = get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true);
	echo esc_attr($brk_thumbnail_alt);
}


/*
 Breadcrumbs 
 *
 * $color: 'text-white', 'text-muted', NULL;
 * $align: 'center', 'right';
 * 
 */

function codeweber_breadcrumbs($align, $color, $show)
{
	if (function_exists('yoast_breadcrumb') && $show == true) {

		// http://yoast/breadcrumbs
		yoast_breadcrumb('<nav class="breadcrumb d-flex justify-content-center mt-3">', '</nav>');
	} elseif (function_exists('rank_math_the_breadcrumbs') && $show == true) {

		if ($align == 'center') {
			add_filter(
				'rank_math/frontend/breadcrumb/args',
				function ($args) {
					$args = array(
						'delimiter'   => '',
						'wrap_before' => '<nav class="d-inline-block" aria-label="breadcrumb"><ol class="breadcrumb mb-0 justify-content-center">',
						'wrap_after'  => '</ol></nav>',
						'before'      =>
						'<li class="breadcrumb-item text-muted">',
						'after'       => '</li>',
					);
					return $args;
				}
			);
		} elseif ($align == 'right') {
			// https://s.rankmath.com/breadcrumbs
			add_filter(
				'rank_math/frontend/breadcrumb/args',
				function ($args) {
					$args = array(
						'delimiter'   => '',
						'wrap_before' => '<nav class="d-inline-block" aria-label="breadcrumb"><ol class="breadcrumb mb-0 justify-content-end">',
						'wrap_after'  => '</ol></nav>',
						'before'      =>
						'<li class="breadcrumb-item text-muted">',
						'after'       => '</li>',
					);
					return $args;
				}
			);
		} else {
			// https://s.rankmath.com/breadcrumbs
			add_filter(
				'rank_math/frontend/breadcrumb/args',
				function ($args) {
					$args = array(
						'delimiter'   => '',
						'wrap_before' => '<nav class="d-inline-block" aria-label="breadcrumb"><ol class="breadcrumb mb-0">',
						'wrap_after'  => '</ol></nav>',
						'before'      =>
						'<li class="breadcrumb-item text-muted">',
						'after'       => '</li>',
					);
					return $args;
				}
			);
		}
		if ($color !== NULL && $color == 'text-white') {
			add_filter(
				'rank_math/frontend/breadcrumb/html',
				function ($html, $crumbs, $class) {
					$html = str_replace('<li class="breadcrumb-item text-muted">', '<li class="breadcrumb-item text-white">', $html);
					$html = str_replace('<span class="text-muted">', '<span class="text-white">', $html);
					return $html;
				},
				10,
				3
			);
		}

		rank_math_the_breadcrumbs();
	} elseif (function_exists("seopress_display_breadcrumbs") && $show == true) {
		seopress_display_breadcrumbs();
	}
}

add_filter('woocommerce_breadcrumb_defaults', 'jk_woocommerce_breadcrumbs');
function jk_woocommerce_breadcrumbs()
{
	return array(
		'delimiter' => '',
		'wrap_before' => '<nav class="d-inline-block" aria-label="breadcrumb"><ol class="breadcrumb mb-0">',
		'wrap_after' => '</ol></nav>',
		'before' => '<li class="breadcrumb-item">',
		'after' => '</li>',
	);
}


add_filter('rank_math/frontend/breadcrumb/html', function ($html, $crumbs, $class) {
	$html = str_replace('<span class="separator"> - </span>', '', $html);
	return $html;
}, 10, 3);


add_filter(
	'rank_math/frontend/breadcrumb/html',
	function ($html, $crumbs, $class) {
		$html = str_replace('<span class="last">' . get_the_title() . '</span>', '<span class="text-muted">' . get_the_title() . '</span>', $html);
		return $html;
	},
	10,
	3
);


// Sandbox Page Loader Function 
function sandbox_page_loader()
{
	if (get_theme_mod('codeweber_page_loader') == 1) {
		echo '<div class="page-loader"></div>';
	} else {
		return;
	}
};


// Sandbox Frame Content Open Function 
function sandbox_frame_open()
{
	if (get_field('cw_frame_content')) {
		if (get_field('cw_frame_content') == 'default') {
			if (get_theme_mod('codeweber_frame_content') == 1) {
				echo '<div class="page-frame bg-light">';
			} else {
				return;
			}
		} elseif (get_field('cw_frame_content') == 'frame') {
			echo '<div class="page-frame bg-light">';
		} else {
			return;
		}
	} elseif (get_theme_mod('codeweber_frame_content') == 1) {
		echo '<div class="page-frame bg-light">';
	} else {
		return;
	}
};


// Sandbox Frame Content Close Function
function sandbox_frame_close()
{
	if (get_field('cw_frame_content')) {
		if (get_field('cw_frame_content') == 'default') {
			if (get_theme_mod('codeweber_frame_content') == 1) {
				echo '</div>';
			} else {
				return;
			}
		} elseif (get_field('cw_frame_content') == 'frame') {
			echo '</div>';
		} else {
			return;
		}
	} elseif (get_theme_mod('codeweber_frame_content') == 1) {
		echo '</div>';
	} else {
		return;
	}
};


// Sandbox Container Content Open Function

// function codeweber_container_start()
// {
// 	if (is_page(array(sanitize_title('cookie-policy'), sanitize_title('terms-and-conditions')))) {
// 		echo '<div class="container py-14 py-md-16">';
// 	}
// }

// add_action('page_content_start', 'codeweber_container_start', 0);


// // Sandbox Container Content Close Function

// function codeweber_container_end()
// {
// 	if (is_page(sanitize_title('cookie-policy'), sanitize_title('terms-and-conditions'))) {
// 		echo '</div>';
// 	}
// }

// add_action('page_content_end', 'codeweber_container_end', 0);



/**
 * Page title Function 
 */
function codeweber_page_title()
{
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	if ($paged !== 1) {
		$page_num = '<span class="text-ash"> (Страница ' . $paged . ')</span>';
	} else {
		$page_num = NULL;
	}

	if (!is_front_page() || !is_home()) {
		if (class_exists('WooCommerce')) {
			if (is_shop()) {
				$title =  woocommerce_page_title(false) . $page_num;
			} elseif (is_post_type_archive('projects') && get_theme_mod('project_title')) {
				$title = get_theme_mod('project_title');
			} elseif (is_tag() || is_category() || is_archive() || is_author()) {
				$title = get_the_archive_title();
			} elseif (is_page()) {
				$title =  get_the_title();
			} elseif (is_search()) {
				$title = esc_html__('Results for: ', 'codeweber');
				$title .= get_search_query();
			} elseif (is_single()) {
				$title = get_the_title();
			} else {
				$title = esc_html(get_the_title(get_option('page_for_posts', true)));
			}
		} else {
			if (is_post_type_archive('projects') && get_theme_mod('project_title')) {
				$title = get_theme_mod('project_title');
			} elseif (is_tag() || is_category() || is_archive() || is_author()) {
				$title = get_the_archive_title();
			} elseif (is_page()) {
				$title =  get_the_title();
			} elseif (is_search()) {
				$title = esc_html__('Results for: ', 'codeweber');
				$title .= get_search_query();
			} elseif (is_single()) {
				$title = get_the_title();
			} else {
				$title = esc_html(get_the_title(get_option('page_for_posts', true)));
			}
		}
	} elseif (is_front_page() || is_home()) {
		$title = esc_html(get_the_title(get_option('page_for_posts', true)));
	}

	return $title;
}

/**
 *  Nav Walker attributes fix for Bootstrap 5
 */

function codeweber_bs5_toggle_fix($atts)
{

	if (array_key_exists('data-toggle', $atts)) {
		unset($atts['data-toggle']);
		$atts['data-bs-toggle'] = 'dropdown';
	}
	return $atts;
}
add_filter('nav_menu_link_attributes', 'codeweber_bs5_toggle_fix');



/**
 * Navbar Classes
 */
function codeweber_is_active_nav_item($item, $args)
{
	if (!property_exists($args, 'walker') || !is_a($args->walker, 'WP_Bootstrap_Navwalker')) {
		return false;
	}
	if (!$item->current && !$item->current_item_ancestor) {
		return false;
	}
	return true;
}


function codeweber_add_active_class_to_anchor($atts, $item, $args)
{
	if (false === codeweber_is_active_nav_item($item, $args)) {
		return $atts;
	}
	if (isset($atts['class'])) {
		$atts['class'] .= ' active';
	} else {
		$atts['class'] = 'active';
	}
	return $atts;
}
add_filter('nav_menu_link_attributes', 'codeweber_add_active_class_to_anchor', 10, 3);


function brk_remove_active_class_from_li($classes, $item, $args)
{
	if (false === codeweber_is_active_nav_item($item, $args)) {
		return $classes;
	}
	return array_diff($classes, array('active'));
}
add_filter('nav_menu_css_class', 'brk_remove_active_class_from_li', 10, 3);


/**
 * Is Post Type
 */
// function is_post_type($type)
// {
// 	global $wp_query;
// 	if ($type == get_post_type($wp_query->post->ID)) {
// 		return true;
// 	} else {
// 		return false;
// 	}
// }


/**
 * Modal Post to footer
 */

function add_modal_to_footer()
{
	$top_posts = get_posts([
		'posts_per_page' => -1,
		'post_type' => 'modal',
	]);

	if ($top_posts) {
		foreach ($top_posts as $item) {
			setup_postdata($item);
			$post_id = $item->ID;
			if (get_field('type_modal', $post_id) == 'Type 1') {
				if (have_rows('cw_modal_settings', $post_id)) {
					while (have_rows('cw_modal_settings', $post_id)) {
						the_row();
						$title_object = new CW_Title(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
						$title = $title_object->title_text;

						$paragraph_object = new CW_Parargraph(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
						$paragraph = $paragraph_object->paragraph_text;

						$button_pattern = '<div class="d-flex justify-content-center justify-content-lg-start" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">%s</div>';
						$button_demo = '<a href="#" class="btn btn-primary rounded-pill" data-bs-dismiss="modal" aria-label="Close">I Understand</a>';
						$button_object = new CW_Buttons($button_pattern, $button_demo, 'cookie_accept', 'data-bs-dismiss="modal"');
						$button = $button_object->final_buttons;
					}
				} ?>
				<div id="cookie_notification" class="modal fade modal-bottom-center" id="modal-<?php $post_id; ?>" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="staticBackdropLabel">
					<div class="modal-dialog modal-xl">
						<div class="modal-content">
							<div class="modal-body p-6">
								<div class="row">
									<div class="col-md-12 col-lg-8 mb-4 mb-lg-0 my-auto align-items-center">
										<h4 class="mb-2"><?php echo $title; ?></h4>
										<p class="mb-0"><?php echo $paragraph; ?></p>
									</div>
									<!--/column -->
									<div class="col-md-5 col-lg-4 text-lg-end my-auto">
										<?php echo $button; ?>
									</div>
									<!--/column -->
								</div>
								<!--/.row -->
							</div>
							<!--/.modal-body -->
						</div>
						<!--/.modal-content -->
					</div>
					<!--/.modal-dialog -->
				</div>
				<!--/.modal -->
				<script type="text/javascript">
					function checkCookies() {
						let cookieDate = localStorage.getItem('cookieDate');
						let cookieNotification = document.getElementById('cookie_notification');
						let cookieBtn = cookieNotification.querySelector('.cookie_accept');

						// Если записи про кукисы нет или она просрочена на 1 год, то показываем информацию про кукисы
						if (!cookieDate || (+cookieDate + 31536000000) < Date.now()) {
							cookieNotification.classList.add('modal-popup');
						}

						// При клике на кнопку, в локальное хранилище записывается текущая дата в системе UNIX
						cookieBtn.addEventListener('click', function() {
							localStorage.setItem('cookieDate', Date.now());
							cookieNotification.classList.remove('modal-popup');
						})
					}
					checkCookies();
				</script>
			<?php
			} elseif (get_field('type_modal', $post_id) == 'Type 2') {

				if (have_rows('cw_modal_settings', $post_id)) {
					while (have_rows('cw_modal_settings', $post_id)) {
						the_row();
						$title_object = new CW_Title(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
						$title = $title_object->title_text;

						$paragraph_object = new CW_Parargraph(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
						$paragraph = $paragraph_object->paragraph_text;

						$button_pattern = '<div class="d-flex justify-content-center justify-content-lg-start" data-group="page-title-buttons" data-delay="900">%s</div>';
						$button_demo = '<a href="#" class="btn btn-primary rounded-pill" data-bs-dismiss="modal" aria-label="Close">I Understand</a>';
						$button_object = new CW_Buttons($button_pattern, $button_demo, 'cookie_accept', 'data-bs-dismiss="modal"');
						$button = $button_object->final_buttons;
						$cw_image = get_sub_field('cw_image', $post_id);
						if ($cw_image) :
							$image_url =  esc_url($cw_image['sizes']['project_1_1']);
						endif;
					}
				}

			?>
				<div class="modal fade modal-popup" id="modal-<?php $post_id; ?>" tabindex="-1">
					<div class="modal-dialog modal-dialog-centered modal-md">
						<div class="modal-content text-center">
							<div class="modal-body">
								<button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								<div class="row">
									<div class="col-md-10 offset-md-1">
										<figure class="mb-6"><img src="<?php echo $image_url; ?>" srcset="<?php echo $image_url; ?>" alt="" /></figure>
									</div>
									<!-- /column -->
								</div>
								<!-- /.row -->
								<h3><?php echo $title; ?></h3>
								<p class="mb-6"><?php echo $paragraph; ?></p>
								<div class="newsletter-wrapper">
									<div class="row">
										<div class="col-md-10 offset-md-1">
											<!-- Begin Mailchimp Signup Form -->
											<div id="mc_embed_signup">
												<form action="https://elemisfreebies.us20.list-manage.com/subscribe/post?u=aa4947f70a475ce162057838d&amp;id=b49ef47a9a" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
													<div id="mc_embed_signup_scroll">
														<div class="mc-field-group input-group form-floating">
															<input type="email" value="" name="EMAIL" class="required email form-control" placeholder="Email Address" id="mce-EMAIL">
															<label for="mce-EMAIL">Email Address</label>
															<input type="submit" value="Join" name="subscribe" id="mc-embedded-subscribe" class="btn btn-primary">
														</div>
														<div id="mce-responses" class="clear">
															<div class="response" id="mce-error-response" style="display:none"></div>
															<div class="response" id="mce-success-response" style="display:none"></div>
														</div> <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
														<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_ddc180777a163e0f9f66ee014_4b1bcfa0bc" tabindex="-1" value=""></div>
														<div class="clear"></div>
													</div>
												</form>
											</div>
											<!--End mc_embed_signup-->
										</div>
										<!-- /.newsletter-wrapper -->
									</div>
									<!-- /column -->
								</div>
								<!-- /.row -->
							</div>
							<!--/.modal-body -->
						</div>
						<!--/.modal-content -->
					</div>
					<!--/.modal-dialog -->
				</div>
				<!--/.modal -->

<?php
			}
		}
	}
	wp_reset_postdata();
}

add_action('codeweber_footer_start', 'add_modal_to_footer', 150);


/**
 * Negative margin for Hero banner if Page Frame enabled
 */
function page_frame_banner()
{
	if (get_theme_mod('codeweber_frame_content') == true) {
		echo 'mt-0';
	}
}



/* Metrics Yandex Google */
add_action('wp_head', 'metrics');
function metrics()
{
	if (get_field('counter_yandex', 'option')) {
		the_field('counter_yandex', 'option');
	}
	if (get_field('counter_google', 'option')) {
		the_field('counter_google', 'option');
	}
};
