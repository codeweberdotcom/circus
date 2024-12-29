<?php

/**
 * Cleanup Woocommerce
 * Set WooCommerce image dimensions upon theme activation
 * https://woocommerce.com/document/disable-the-default-stylesheet/
 */
add_filter('woocommerce_enqueue_styles', 'jk_dequeue_styles');
function jk_dequeue_styles($enqueue_styles)
{
   unset($enqueue_styles['woocommerce-general']);   // Remove the gloss
   unset($enqueue_styles['woocommerce-layout']);      // Remove the layout
   unset($enqueue_styles['woocommerce-smallscreen']);   // Remove the smallscreen optimisation
   return $enqueue_styles;
}

// Or just remove them all in one line
add_filter('woocommerce_enqueue_styles', '__return_empty_array');


/**
 * Disable Flexslider JS
 */
function flex_dequeue_script()
{
   wp_dequeue_script('flexslider');
}
add_action('wp_print_scripts', 'flex_dequeue_script', 100);


/**
 * Disable Zoom Jquery JS
 */
function zoom_dequeue_script()
{
   wp_dequeue_script('zoom');
}
add_action('wp_print_scripts', 'zoom_dequeue_script', 100);


/**
 * Disable Photoswipe JS
 */
function photoswipe_dequeue_script()
{
   wp_dequeue_script('photoswipe-ui-default');
}
add_action('wp_print_scripts', 'photoswipe_dequeue_script', 100);
