<?php

/**
 * Single Product Image
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-image.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.1
 */

defined('ABSPATH') || exit;

// Note: `wc_get_gallery_image_html` was added in WC 3.3.2 and did not exist prior. This check protects against theme overrides being used on older versions of WC.
if (!function_exists('wc_get_gallery_image_html')) {
   return;
}

global $product;

$columns  = apply_filters('woocommerce_product_thumbnails_columns', 4);
$post_thumbnail_id = $product->get_image_id();
$wrapper_classes   = apply_filters(
   'woocommerce_single_product_image_gallery_classes',
   array(
      'woocommerce-product-gallery',
      'woocommerce-product-gallery--' . ($post_thumbnail_id ? 'with-images' : 'without-images'),
      'woocommerce-product-gallery--columns-' . absint($columns),
      'images',
   )
);
?>

<div class="col-lg-6">
   <div class="swiper-container swiper-thumbs-container " data-margin="10" data-dots="false" data-nav="true" data-thumbs="true">
      <?php do_action('codeweber_woo_product_image_start'); ?>
      <div class="swiper <?php echo esc_attr(implode(' ', array_map('sanitize_html_class', $wrapper_classes))); ?>" style="opacity: 0; transition: opacity .25s ease-in-out;">
         <div class="woocommerce-product-gallery__wrapper swiper-wrapper">
            <?php do_action('codeweber_woo_product_main_image_start'); ?>
            <?php
            if ($post_thumbnail_id) {
               $html = my_custom_img_function($post_thumbnail_id, true, 'full');
            } else {
               $html  = '<div class="woocommerce-product-gallery__image--placeholder">';
               $html .= sprintf('<img src="%s" alt="%s" class="wp-post-image" />', esc_url(wc_placeholder_img_src('woocommerce_single')), esc_html__('Awaiting product image', 'woocommerce'));
               $html .= '</div>';
            }

            echo apply_filters('woocommerce_single_product_image_thumbnail_html', $html, $post_thumbnail_id); // phpcs:disable WordPress.XSS.EscapeOutput.OutputNotEscaped
            $attachment_ids = $product->get_gallery_image_ids();
            if ($attachment_ids && $product->get_image_id()) {
               foreach ($attachment_ids as $attachment_id) {
                  echo apply_filters('woocommerce_single_product_image_thumbnail_html', my_custom_img_function($attachment_id, true, 'full'), $attachment_id); // phpcs:disable WordPress.XSS.EscapeOutput.OutputNotEscaped
               }
            }
            ?>
            <?php do_action('codeweber_woo_product_main_image_finish'); ?>
         </div>
      </div>

      <div class="swiper swiper-thumbs">
         <div class="swiper-wrapper">
            <?php do_action('codeweber_woo_product_thumb_image_start'); ?>
            <?php
            $html_thumb = my_custom_img_function($post_thumbnail_id, true, 'thumbnail');
            echo apply_filters('woocommerce_single_product_image_thumbnail_html', $html_thumb, $post_thumbnail_id); // phpcs:disable WordPress.XSS.EscapeOutput.OutputNotEscaped
            do_action('woocommerce_product_thumbnails');
            ?>
            <?php do_action('codeweber_woo_product_thumb_image_finish'); ?>
         </div>
         <!--/.swiper-wrapper -->
      </div>
      <!-- /.swiper -->

      <?php do_action('codeweber_woo_product_image_finish'); ?>
   </div>
</div>