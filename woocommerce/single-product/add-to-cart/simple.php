<?php

/**
 * Simple product add to cart
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/add-to-cart/simple.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined('ABSPATH') || exit;

global $product;

if (!$product->is_purchasable()) {
   return;
}

echo wc_get_stock_html($product); // WPCS: XSS ok.

if ($product->is_in_stock()) : ?>

   <?php do_action('woocommerce_before_add_to_cart_form'); ?>


   <!-- <div class="qty-input rounded border-qty overflow-auto flex-nowrap">
      <button class="qty-count qty-count--minus bg-light border-0" data-action="minus" type="button"><i class="uil uil-minus"></i></button>
      <input class="product-qty border-0 bg-light text-ash text-center  border-0" type="number" name="product-qty" min="1" max="300" value="1">
      <button class="qty-count qty-count--add  bg-light border-0" data-action="add" type="button"><i class="uil uil-plus"></i></button>
   </div> -->


   <form class="cart" action="<?php echo esc_url(apply_filters('woocommerce_add_to_cart_form_action', $product->get_permalink())); ?>" method="post" enctype='multipart/form-data'>
      <div class="col-lg-9 d-flex flex-row pt-2 flex-wrap">
         <?php do_action('woocommerce_before_add_to_cart_button'); ?>

         <?php
         do_action('woocommerce_before_add_to_cart_quantity');

         woocommerce_quantity_input(
            array(
               'min_value'   => apply_filters('woocommerce_quantity_input_min', $product->get_min_purchase_quantity(), $product),
               'max_value'   => apply_filters('woocommerce_quantity_input_max', $product->get_max_purchase_quantity(), $product),
               'input_value' => isset($_POST['quantity']) ? wc_stock_amount(wp_unslash($_POST['quantity'])) : $product->get_min_purchase_quantity(), // WPCS: CSRF ok, input var ok.
            )
         );

         do_action('woocommerce_after_add_to_cart_quantity');
         ?>
         <div class="flex-grow-1 mx-2">
            <button type="submit" name="add-to-cart" value="<?php echo esc_attr($product->get_id()); ?>" class="single_add_to_cart_button button alt btn btn-primary btn-icon btn-icon-start <?php echo get_theme_mod('codeweber_button_form'); ?> w-100 flex-grow-1"><i class="uil uil-shopping-bag"></i><?php echo esc_html($product->single_add_to_cart_text()); ?></button>
         </div>

         <!-- <div>
            <button class="btn btn-block btn-outline-red wishlist_button btn-icon <?php echo GetThemeButton(); ?> px-3 w-100 h-100"><i class="uil uil-heart"></i></button>
         </div> 
         <div class="ps-1">
            <button class="btn btn-block btn-outline-red btn-icon <?php echo GetThemeButton(); ?> px-3 w-100 h-100"><i class="uil uil-exchange"></i></i></button>
         </div> -->
         <?php do_action('woocommerce_after_add_to_cart_button'); ?>
      </div>
   </form>

   <?php do_action('woocommerce_after_add_to_cart_form'); ?>

<?php endif; ?>