<?php

include 'woocommerce-clean.php';
include 'woocommerce-single-product.php';
include 'woocommerce-archive.php';
include 'woocommerce-cart.php';
include 'woocommerce-checkout.php';
include 'woocommerce-offcanvas-cart.php';
include 'woocommerce-mobile-bottom-menu.php';
//include 'woocommerce-category-banner.php';
include 'woocommerce_customizer.php';
include 'woocommerce-page_header.php';

/**
 * Remove Downloads from Account menu
 */
function custom_my_account_menu_items($items)
{
   unset($items['downloads']);
   return $items;
}
add_filter('woocommerce_account_menu_items', 'custom_my_account_menu_items');

/**
 * Display item meta data.
 *
 * @since  3.0.0
 * @param  WC_Order_Item $item Order Item.
 * @param  array         $args Arguments.
 * @return string|void
 */
function wc_display_item_meta($item, $args = array())
{
   $strings = array();
   $html    = '';
   $args    = wp_parse_args(
      $args,
      array(
         'before'       => '',
         'after'        => '',
         'separator'    => '',
         'echo'         => true,
         'autop'        => false,
         'label_before' => '<div class="small">',
         'label_after'  => '',
         'value_before' => '',
         'value_after'  => '</div>'
      )
   );
   foreach ($item->get_all_formatted_meta_data() as $meta_id => $meta) {
      $value     = $args['autop'] ? wp_kses_post($meta->display_value) : wp_kses_post(make_clickable(trim($meta->display_value)));
      $strings[] = $args['label_before'] . wp_kses_post($meta->display_key) . $args['label_after'] . $args['value_before'] . ': ' . wp_strip_all_tags($value) . $args['value_after'];
   }

   if ($strings) {
      $html = $args['before'] . implode($args['separator'], $strings) . $args['after'];
   }

   $html = apply_filters('woocommerce_display_item_meta', $html, $item, $args);

   if ($args['echo']) {
      // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
      echo $html;
   } else {
      return $html;
   }
}


/**
 * Ajax фильтр Woocommerce - Увеличиваем количество вариаций, которые могут учавствовать в ajax запросе с 30 до 100
 * https://stackoverflow.com/a/46001103/20374350
 */
function custom_wc_ajax_variation_threshold($qty, $product)
{
   return 100; // Increase default 30 to 50
}
add_filter('woocommerce_ajax_variation_threshold', 'custom_wc_ajax_variation_threshold', 100, 2);


//????
add_filter('woocommerce_attribute', 'woocommerce_attribute_filter_callback', 10, 3);
function woocommerce_attribute_filter_callback($formatted_values, $attribute, $values)
{
   return wptexturize(implode(', ', $values));
}


/***
 * Sale Flash on product in percantagle
 * 
 * https://stackoverflow.com/a/52559420/20374350
 */
add_filter('woocommerce_sale_flash', 'add_percentage_to_sale_badge', 20, 3);
function add_percentage_to_sale_badge($html, $post, $product)
{

   if ($product->is_type('variable')) {
      $percentages = array();

      // Get all variation prices
      $prices = $product->get_variation_prices();

      // Loop through variation prices
      foreach ($prices['price'] as $key => $price) {
         // Only on sale variations
         if ($prices['regular_price'][$key] !== $price) {
            // Calculate and set in the array the percentage for each variation on sale
            $percentages[] = round(100 - (floatval($prices['sale_price'][$key]) / floatval($prices['regular_price'][$key]) * 100));
         }
      }
      // We keep the highest value
      $percentage = max($percentages) . '%';
   } elseif ($product->is_type('grouped')) {
      $percentages = array();

      // Get all variation prices
      $children_ids = $product->get_children();

      // Loop through variation prices
      foreach ($children_ids as $child_id) {
         $child_product = wc_get_product($child_id);

         $regular_price = (float) $child_product->get_regular_price();
         $sale_price    = (float) $child_product->get_sale_price();

         if ($sale_price != 0 || !empty($sale_price)) {
            // Calculate and set in the array the percentage for each child on sale
            $percentages[] = round(100 - ($sale_price / $regular_price * 100));
         }
      }
      // We keep the highest value
      $percentage = max($percentages) . '%';
   } else {
      $regular_price = (float) $product->get_regular_price();
      $sale_price    = (float) $product->get_sale_price();

      if ($sale_price != 0 || !empty($sale_price)) {
         $percentage    = round(100 - ($sale_price / $regular_price * 100)) . '%';
      } else {
         return $html;
      }
   }
   return '<span class="onsale avatar bg-pink text-white w-10 h-10 position-absolute text-uppercase fs-13 m-2"><span> ' . $percentage . '</span></span>';
}


/**
 * Output the proceed to checkout button.
 * Woocommerce
 * wc-template-functions.php
 * 2296 row
 */
function woocommerce_widget_shopping_cart_proceed_to_checkout()
{
   echo '<a href="' . esc_url(wc_get_checkout_url()) . '" class="button checkout wc-forward btn btn-primary btn-icon btn-icon-start ' . GetThemeButton() . ' w-100 mb-4"><i class="uil uil-credit-card fs-18"></i>' . esc_html__('Checkout', 'woocommerce') . '</a>';
}


/**
 * Output the view cart button.
 * Woocommerce
 * wc-template-functions.php
 * 2285 row
 */
function woocommerce_widget_shopping_cart_button_view_cart()
{
   echo '<a href="' . esc_url(wc_get_cart_url()) . '" class="button wc-forward btn btn-outline-primary btn-icon btn-icon-start ' . GetThemeButton() . ' w-100 mb-2"><i class="uil uil-shopping-basket"></i>' . esc_html__('View cart', 'woocommerce') . '</a>';
}


/**
 * Output to view cart subtotal.
 * Woocommerce
 * wc-template-functions.php
 * 2307 row
 * @since 3.7.0
 */
function woocommerce_widget_shopping_cart_subtotal()
{
   echo '<span>' . esc_html__('Subtotal:', 'woocommerce') . '</span><span class="h6 mb-0"> ' . WC()->cart->get_cart_subtotal() . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
}


/**
 * Change number of related products output
 */
add_filter('woocommerce_output_related_products_args', 'jk_related_products_args', 20);
function jk_related_products_args($args)
{
   $args['posts_per_page'] = 6; // 4 related products
   $args['columns'] = 2; // arranged in 2 columns
   return $args;
}


/**
 * Move related products to Footer Start
 */
remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20);
add_action('codeweber_footer_start', 'woocommerce_output_related_products', 1);



/**
 * overwritten from https://woocommerce.wp-a2z.org/oik_api/wc_get_gallery_image_html/
 */
function my_custom_img_function($attachment_id, $main_image = false, $size = NULL)
{
   $flexslider        = (bool) apply_filters('woocommerce_single_product_flexslider_enabled', get_theme_support('wc-product-gallery-slider'));
   $gallery_thumbnail = wc_get_image_size('gallery_thumbnail');
   $thumbnail_size    = apply_filters('woocommerce_gallery_thumbnail_size', array($gallery_thumbnail['width'], $gallery_thumbnail['height']));
   $image_size        = apply_filters('woocommerce_gallery_image_size', $flexslider || $main_image ? 'woocommerce_single' : $thumbnail_size);
   $full_size         = apply_filters('woocommerce_gallery_full_size', apply_filters('woocommerce_product_thumbnails_large_size', 'full'));
   $thumbnail_src     = wp_get_attachment_image_src($attachment_id, $thumbnail_size);
   $full_src          = wp_get_attachment_image_src($attachment_id, $full_size);
   $alt_text          = trim(wp_strip_all_tags(get_post_meta($attachment_id, '_wp_attachment_image_alt', true)));



   $image = wp_get_attachment_image(
      $attachment_id,
      $image_size,
      false,
      apply_filters(
         'woocommerce_gallery_image_html_attachment_image_params',
         array(
            'title'                   => _wp_specialchars(get_post_field('post_title', $attachment_id), ENT_QUOTES, 'UTF-8', true),
            'data-caption'            => _wp_specialchars(get_post_field('post_excerpt', $attachment_id), ENT_QUOTES, 'UTF-8', true),
            'data-src'                => esc_url($full_src[0]),
            'data-large_image'        => esc_url($full_src[0]),
            'data-large_image_width'  => esc_attr($full_src[1]),
            'data-large_image_height' => esc_attr($full_src[2]),
            'class'                   => esc_attr($main_image ? 'wp-post-image' : ''),
         ),
         $attachment_id,
         $image_size,
         $main_image
      )
   );

   if ($size == 'full') {

      return '<div data-thumb="' . esc_url($thumbnail_src[1]) . '" data-thumb-alt="' . esc_attr($alt_text) . '" class="woocommerce-product-gallery__image swiper-slide"><figure class="' . get_theme_mod('codeweber_image') . '">' . $image . '<a class="item-link" href="' . esc_url($full_src[0]) . '" data-glightbox data-gallery="product-group"><i class="uil uil-focus-add"></i></a></figure></div>';
   } elseif ($size == 'thumbnail') {
      return '
      <div class="swiper-slide"><img src="' . esc_url($thumbnail_src[0]) . '" class="' . get_theme_mod('codeweber_image') . '" alt="" /></div>';
   }
}


add_filter('woocommerce_get_image_size_single', 'my_set_product_img_size');
add_filter('woocommerce_get_image_size_shop_single', 'my_set_product_img_size');
add_filter('woocommerce_get_image_size_woocommerce_single', 'my_set_product_img_size');
function my_set_product_img_size()
{
   $size = array(
      'width'  => 600,
      'height' => 600,
      'crop'   => 1,
   );
   return $size;
}


add_filter('woocommerce_get_image_size_gallery_thumbnail', function ($size) {
   return array(
      'width'  => 150,
      'height' => 150,
      'crop'   => 0,
   );
});

add_filter("woocommerce_reset_variations_link", "__return_false");


/**
 * Disable Bredcrumbs
 */

add_filter('woocommerce_get_breadcrumb', '__return_false');
remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0);


/**
 * Change wrapper Woocommerce
 */

remove_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action('woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);


function cw_woocommerce_output_content_wrapper()
{
   echo '<section class="wrapper bg-light">
      <div class="shop-wrapper container py-14 py-md-16">';
}
add_action('woocommerce_before_main_content', 'cw_woocommerce_output_content_wrapper', 10);

function cw_woocommerce_output_content_wrapper_end()
{
   echo '</div></div>';
}
add_action('woocommerce_after_main_content', 'cw_woocommerce_output_content_wrapper_end', 10);



/**
 * Set Cart/Checkout Wrapper
 */

function cart_checkout_wrapper_start()
{
   if (is_cart() || is_checkout() || is_privacy_policy()) {
      echo '<section class="wrapper bg-light"><div class="container pt-12 pt-md-14 pb-14 pb-md-16">';
   }
}

add_action('page_content_start', 'cart_checkout_wrapper_start', 10);


function cart_checkout_wrapper_end()
{
   if (is_cart() || is_checkout() || is_privacy_policy()) {
      echo '</div></section>';
   }
}

add_action('page_content_end', 'cart_checkout_wrapper_end', 10);



/**
 * Set Page Header
 */

function woocommerce_page_header()
{
   if (is_tax()) {
      $taxonomy_prefix = 'product_cat';
      $term_id = get_queried_object_id();
      $term_id_prefixed = $taxonomy_prefix . '_' . $term_id;
   } else {
      $term_id_prefixed = NULL;
   }


   if (get_field('pageheader', $term_id_prefixed) !== NULL) {
      if (get_field('pageheader', $term_id_prefixed) !== 'disable' && get_field('pageheader', $term_id_prefixed) !== 'default') {
         if (get_field('pageheader', $term_id_prefixed) == 'type_1' || get_field('pageheader', $term_id_prefixed) == 'type_4') {
            get_template_part('templates/sections/common', 'breadcrumb');
         }

         if (get_field('pageheader', $term_id_prefixed) !== 'type_4') {

            if (get_field('pageheader', $term_id_prefixed) == 'type_1') {
               get_template_part('templates/sections/common', 'pageheader_2');
            } elseif (get_field('pageheader', $term_id_prefixed) == 'type_2') {
               get_template_part('templates/sections/common', 'pageheader');
            } elseif (get_field('pageheader', $term_id_prefixed) == 'type_3') {
               get_template_part('templates/sections/common', 'pageheader_1');
            }
         }
      } elseif (get_field('pageheader', $term_id_prefixed) == 'default' && !is_404() && get_field('pageheader', $term_id_prefixed) !== 'disable') {
         if (get_theme_mod('codeweber_page_woocommerce_header') == 'type_1' || get_theme_mod('codeweber_page_woocommerce_header') == 'type_4') {
            get_template_part('templates/sections/common', 'breadcrumb');
         }


         if (get_theme_mod('codeweber_page_woocommerce_header') == 'type_2') {
            get_template_part('templates/sections/common', 'pageheader');
         } elseif (get_theme_mod('codeweber_page_woocommerce_header') == 'type_3') {
            get_template_part('templates/sections/common', 'pageheader_1');
         } elseif (get_theme_mod('codeweber_page_woocommerce_header') == 'type_1') {
            get_template_part('templates/sections/common', 'pageheader_2');
         } elseif (get_theme_mod('codeweber_page_woocommerce_header') !== 'type_4') {
         }
      }
   } elseif (get_theme_mod('codeweber_page_woocommerce_header') == 'type_1' || get_theme_mod('codeweber_page_woocommerce_header') == 'type_4'  && !is_404()) {
      get_template_part('templates/sections/common', 'breadcrumb');

      if (get_theme_mod('codeweber_page_woocommerce_header') !== 'type_4' && !is_singular('product')) {
         if (get_theme_mod('codeweber_page_woocommerce_header') == 'type_2') {
            get_template_part('templates/sections/common', 'pageheader');
         } elseif (get_theme_mod('codeweber_page_woocommerce_header') == 'type_3') {
            get_template_part('templates/sections/common', 'pageheader_1');
         } elseif (get_theme_mod('codeweber_page_woocommerce_header') == 'type_1') {
            get_template_part('templates/sections/common', 'pageheader_2');
         } else {
            get_template_part('templates/sections/common', 'breadcrumb');
            get_template_part('templates/sections/common', 'pageheader');
         }
      }
   } elseif (get_theme_mod('codeweber_page_woocommerce_header') == 'type_2' || get_theme_mod('codeweber_page_woocommerce_header') == 'type_3' && !is_404()) {
      if (get_theme_mod('codeweber_page_woocommerce_header') !== 'type_4') {
         if (get_theme_mod('codeweber_page_woocommerce_header') == 'type_2') {
            get_template_part('templates/sections/common', 'pageheader');
         } elseif (get_theme_mod('codeweber_page_woocommerce_header') == 'type_3') {
            get_template_part('templates/sections/common', 'pageheader_1');
         } elseif (get_theme_mod('codeweber_page_woocommerce_header') == 'type_1') {
            get_template_part('templates/sections/common', 'pageheader_2');
         } else {
            get_template_part('templates/sections/common', 'breadcrumb');
            get_template_part('templates/sections/common', 'pageheader');
         }
      }
   }
}

add_action('woocommerce_after_header', 'woocommerce_page_header', 5);


/**
 * Set Account Page Wrapper
 */

function page_wrapper_start()
{
   if (is_account_page()) {
      echo '<section class="wrapper bg-light"><div class="container pt-12 pt-md-14 pb-14 pb-md-16">';
   }
}

add_action('page_content_start', 'page_wrapper_start', 10);


function page_wrapper_end()
{
   if (is_account_page()) {
      echo '</div></section>';
   }
}

add_action('page_content_end', 'page_wrapper_end', 10);


/**
 * Woocommerce flip image
 */


add_action('woocommerce_before_shop_loop_item_title', 'add_on_hover_shop_loop_image');

function add_on_hover_shop_loop_image()
{
   if (isset(wc_get_product()->get_gallery_image_ids()[0])) {
      $image_id = wc_get_product()->get_gallery_image_ids()[0];

      if ($image_id) {
         echo wp_get_attachment_image($image_id, 'archive_4');
      } else {  //assuming not all products have galleries set

         echo wp_get_attachment_image(wc_get_product()->get_image_id());
      }
   }
}


add_filter('rank_math/frontend/breadcrumb/items', function ($crumbs, $class) {
   if (is_single()) {
      array_pop($crumbs);
   }
   return $crumbs;
}, 10, 2);

//https://habr.com/ru/articles/579670/#habracut
add_filter('sanitize_taxonomy_name', function ($urldecode, $taxonomy) {
   $urldecode = mb_substr($urldecode, 0, 27, 'utf-8');
   return $urldecode;
}, 10, 2);



/**
 *Plugin Name: Ti_wishlist_script
 */
add_action('wp_footer', 'ti_wishlist_script');

function ti_wishlist_script()
{
   if (function_exists('tinv_get_option_defaults')) {
?>
      <script>
         document.querySelector('.tinvwl-input-group-btn .button').setAttribute("class", "btn btn-primary");
         document.querySelector('.tinvwl-to-right .button').setAttribute("class", "btn btn-primary");
         document.querySelector('.tinvwl-to-right .button').setAttribute("class", "btn btn-primary");
      </script>
      <?php
   }
}


/**
 * Header woo nav cart element
 */
add_action('before_header_nav_woo', 'header_nav_cart_woo', 100);

if (!function_exists('header_nav_cart_woo')) {
   function header_nav_cart_woo()
   {

      if (class_exists('WooCommerce')) {
         if (function_exists('tinv_get_option_defaults')) { ?>
            <li class="nav-item d-none d-lg-block"><?php echo do_shortcode('[ti_wishlist_products_counter]'); ?>
            <?php
         }
            ?>
            <li class="nav-item d-none d-lg-block">
               <a href="#" class="nav-link position-relative d-flex flex-row align-items-center" id="header-cart" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-cart">
                  <i class="uil uil-shopping-cart"></i>
                  <span class="badge badge-cart bg-primary"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
               </a>
            </li>
         <?php
      }
   }
}



add_action('before_header_nav_woo', 'header_nav_account_woo', 90);

if (!function_exists('header_nav_account_woo')) {

   function header_nav_account_woo()
   {
      if (class_exists('WooCommerce')) { ?>
            <li class="nav-item dropdown language-select">
               <a class="nav-link dropdown-item dropdown-toggle dropdown-toggle-split" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="uil uil-user-circle"></i></a>
               <ul class="dropdown-menu">
                  <?php if (is_user_logged_in()) { ?>
                     <li class="nav-item">
                        <?php
                        global $current_user;
                        $current_user = wp_get_current_user();
                        echo '<p class="dropdown-item disabled mb-0">' . __('Hello', 'codeweber') . ', ' . $current_user->display_name . '</p>';
                        ?>
                     </li>
                     <hr class="my-1" />
                  <?php }; ?>

                  <li class="nav-item">
                     <?php if (is_user_logged_in()) { ?>
                        <a href="<?php echo get_permalink(get_option('woocommerce_myaccount_page_id')); ?>" class="dropdown-item" title="<?php _e('My Account', 'codeweber'); ?>"><?php _e('My Account', 'codeweber'); ?></a>
                     <?php } else { ?>
                        <a href="<?php echo get_permalink(get_option('woocommerce_myaccount_page_id')); ?>" class="dropdown-item" title="<?php _e('Login / Register', 'codeweber'); ?>"><?php _e('Login / Register', 'codeweber'); ?></a>
                     <?php } ?>
                  </li>

                  <?php if (class_exists('WooCommerce')) {
                     if (is_user_logged_in()) { ?>
                        <li class="nav-item"><a class="dropdown-item" href="<?php echo wc_get_account_endpoint_url('orders'); ?>" title="<?php _e('Orders', 'codeweber'); ?>"><?php _e('Orders', 'codeweber'); ?></a></li>
                     <?php }; ?>

                     <li class="nav-item">
                        <a class="dropdown-item" href="<?php echo wc_get_cart_url() ?>" title="<?php _e('Cart', 'codeweber'); ?>"><?php _e('Cart', 'codeweber'); ?></a>
                     </li>
                     <li class="nav-item">
                        <a class="dropdown-item" href="<?php echo wc_get_checkout_url() ?>" title="<?php _e('Checkout', 'codeweber'); ?>"><?php _e('Checkout', 'codeweber'); ?></a>
                     </li>
                  <?php if (is_user_logged_in()) {
                        echo '<li class="nav-item"><a class="dropdown-item" href="' . wp_logout_url(get_permalink(wc_get_page_id(' myaccount'))) . '" title="' . __('Checkout', 'codeweber') . '">' . __('Logout', 'codeweber') . '</a></li>';
                     }
                  }
                  ?>

               </ul>
            </li>
            <?php }
      }
   }


   add_action('before_header_three', 'header_nav_button_right', 110);

   if (!function_exists('header_nav_button_right')) {
      function header_nav_button_right()
      {
         if (have_rows('cw_buttons', 'option')) {
            while (have_rows('cw_buttons', 'option')) {
               the_row();
               $buttons_object = new CW_Buttons(NULL, NULL, NULL, NULL); ?>
               <li class="nav-item d-none d-md-block">
                  <?php echo $buttons_object->final_buttons; ?>
               </li>
            <?php } ?>
   <?php }
      }
   }
