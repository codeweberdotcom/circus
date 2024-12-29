<?php

/**
 * WooCommerce Product Wrapper Class filter.
 *
 * https://stackoverflow.com/a/64805994/20374350
 * 
 * @since 3.6.2
 * @param array      $classes Array of CSS classes.
 * @param WC_Product $product Product object.
 */

function filter_woocommerce_post_class($classes, $product)
{
   // is_product() - Returns true on a single product page
   // NOT single product page, so return
   if (!is_product()) return $classes;
   global $codeweber;
   // Add wrapper product class
   $classes[] = 'row gx-md-8 gx-xl-12 gy-8';
   if (isset($codeweber['page_settings']['page_header_type'])) {
      if ($codeweber['page_settings']['page_header_type'] == 'type_7' || $codeweber['page_settings']['page_header_type'] == 'type_5') {
         if ($codeweber['page_settings']['header_style'] == 'transparent') {
            $classes[] = 'mt-n20 rounded shadow bg-light';
         } elseif ($codeweber['page_settings']['header_style'] == 'solid') {
            $classes[] = 'mt-n22 rounded shadow bg-light';
         }
      }
   }

   return $classes;
}

add_filter('woocommerce_post_class', 'filter_woocommerce_post_class', 10, 2);


/**
 * Change Title
 */
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_title', 5);
function woocommerce_add_custom_text_after_product_title()
{
   global $codeweber;
   if (isset($codeweber['page_settings']['page_header_type'])) {
      if ($codeweber['page_settings']['page_header_type'] == 'type_9') { ?>
         <div class="post-header mb-5">
            <h1 class="post-title display-5"><?php the_title(); ?></h1>
         </div>
<?php
      }
   }
}



add_action('woocommerce_single_product_summary', 'woocommerce_add_custom_text_after_product_title', 5);


/**
 * Remove 'p' tag from Short Description
 * https://wpcommerce.ru/threads/kak-otkljuchit-formatirovanie-v-kratkom-opisanii-tovara.2866/post-15736
 */

remove_filter('woocommerce_short_description', 'wpautop');


/**
 * WooCommerce
 * Override the quantity input with a bootstrap dropdown
 * https://misha.agency/woocommerce/pole-kolichestva-tovara-v-vide-vypadayushhego-spiska.html
 */

function woocommerce_quantity_input($args = array(), $product = null, $echo = true)
{
   if (is_null($product)) {
      $product = $GLOBALS['product'];
   }

   // Default values
   $defaults = array(
      'input_name' => 'quantity',
      'input_value' => '1',
      'max_value' => apply_filters('woocommerce_quantity_input_max', -1, $product),
      'min_value' => apply_filters('woocommerce_quantity_input_min', 0, $product),
      'step' => 1,
   );
   $args = apply_filters('woocommerce_quantity_input_args', wp_parse_args($args, $defaults), $product);
   $args['min_value'] = max($args['min_value'], 0);
   $args['max_value'] = 0 < $args['max_value'] ? $args['max_value'] : 10;
   if (
      '' !== $args['max_value'] && $args['max_value'] < $args['min_value']
   ) {
      $args['max_value'] = $args['min_value'];
   }
   $options = '';

   // Add loop
   for ($count = $args['min_value']; $count <= $args['max_value']; $count = $count + $args['step']) {

      // Cart item quantity defined?
      if ('' !== $args['input_value'] && $args['input_value'] >= 1 && $count == $args['input_value']) {
         $selected = 'selected';
      } else {
         $selected = '';
      }
      $options .= '<option value="' . $count . '"' . $selected . '>' . $count . '</option>';
   }
   $html = '<div><div class="quantity form-select-wrapper"><select class="form-select ' . get_theme_mod('codeweber_button_form') . ' " name="' . $args['input_name'] . '">' . $options . '</select></div><!--/.form-select-wrapper --></div>';
   if ($echo) {
      echo $html;
   } else {
      return $html;
   }
}


/**
 * WooCommerce: Add class to Dropdown Variation Product
 * https://www.stackfinder.ru/questions/58594970/woocommerce-add-class-to-variation-dropdown
 */
add_filter('woocommerce_dropdown_variation_attribute_options_args', static function ($args) {
   $args['class'] = 'form-control';
   return $args;
}, 2);


/**
 * Sale on Cart Page
 * https://wpgid.ru/woocommerce/kak-v-korzine-woocommerce-poluchit-podytog-bez-skidki-po-aktsiyam.html
 */

function codeweber_get_cart_subtotal_and_discount()
{
   global $woocommerce;
   $discount_total = 0;
   // Перебираем товары по акции и суммируем скидку
   foreach ($woocommerce->cart->get_cart() as $cart_item_key => $values) {
      $_product = $values['data'];
      if ($_product->is_on_sale() && !empty($_product->get_sale_price()) && is_numeric($_product->get_sale_price())) {
         $regular_price = $_product->get_regular_price();
         $sale_price = $_product->get_sale_price();
         $discount = ($regular_price - $sale_price) * $values['quantity'];
         $discount_total += $discount;
      }
   }
   // Записываем значения в переменные в зависимости от того есть скидки или их нету
   if ($discount_total > 0 || $woocommerce->cart->discount_cart > 0) {
      $discount = $discount_total + $woocommerce->cart->discount_cart;
      $discount_sale = $discount_total;
      $subtotal = $discount_total + $woocommerce->cart->get_subtotal();
   } else {
      $discount = '';
      $discount_sale = '';
      $subtotal =  $woocommerce->cart->get_subtotal();
   }

   // Собираем значения в массив
   $array = [
      'subtotal'      => $subtotal,
      'discount_all'  => $discount,
      'discount_sale' => $discount_sale,

   ];

   return $array;
}


/**
 * Transport Sale flash Single Product
 */
remove_action('woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10, 3);
add_action('woocommerce_before_product_gallery', 'woocommerce_show_product_sale_flash', 10);


/**
 * Transport Sale flash Loop Product
 */
remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10, 3);
add_action('woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 1);


/**
 * Woocommerce Product Single Add To cart
 * Добавить в корзину AJAX Простой товар
 */

function ql_woocommerce_ajax_add_to_cart_js()
{
   if (function_exists('is_product') && is_product()) {
      wp_enqueue_script('custom_script', get_template_directory_uri() . '/woocommerce/ajax_add_to_cart.js', array('jquery'), '1.0');
   }
}
add_action('wp_enqueue_scripts', 'ql_woocommerce_ajax_add_to_cart_js');
add_action('wp_ajax_ql_woocommerce_ajax_add_to_cart', 'ql_woocommerce_ajax_add_to_cart');
add_action('wp_ajax_nopriv_ql_woocommerce_ajax_add_to_cart', 'ql_woocommerce_ajax_add_to_cart');
function ql_woocommerce_ajax_add_to_cart()
{
   $product_id = apply_filters('ql_woocommerce_add_to_cart_product_id', absint($_POST['product_id']));
   $quantity = empty($_POST['quantity']) ? 1 : wc_stock_amount($_POST['quantity']);
   $variation_id = absint($_POST['variation_id']);
   $passed_validation = apply_filters('ql_woocommerce_add_to_cart_validation', true, $product_id, $quantity);
   $product_status = get_post_status($product_id);
   if ($passed_validation && WC()->cart->add_to_cart($product_id, $quantity, $variation_id) && 'publish' === $product_status) {
      do_action('ql_woocommerce_ajax_added_to_cart', $product_id);
      if ('yes' === get_option('ql_woocommerce_cart_redirect_after_add')) {
         wc_add_to_cart_message(array($product_id => $quantity), true);
      }
      WC_AJAX::get_refreshed_fragments();
   } else {
      $data = array(
         'error' => true,
         'product_url' => apply_filters('ql_woocommerce_cart_redirect_after_error', get_permalink($product_id), $product_id)
      );
      echo wp_send_json($data);
   }
   wp_die();
}


/*
* Plugin TI WooCommerce Wishlist
* https://ru.wordpress.org/plugins/ti-woocommerce-wishlist/
*/

function woocommerce_add_wishlist_button()
{
   if (function_exists('tinv_get_option')) {
      echo do_shortcode('[ti_wishlists_addtowishlist]');
   }
}

add_action('woocommerce_after_add_to_cart_button', 'woocommerce_add_wishlist_button', 5);
