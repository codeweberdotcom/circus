<?php

/**
 * Open Offcanvas after added to cart
 * https://stackoverflow.com/a/47463018/20374350
 */

add_action('wp_footer', 'custom_jquery_add_to_cart_script');
function custom_jquery_add_to_cart_script()
{
   if (is_shop() || is_product_category() || is_product_tag()) : // Only for archives pages
?>
      <script type="text/javascript">
         // Ready state
         (function($) {
            $(document.body).on('added_to_cart', function() {
               document.getElementById("header-cart").click();
            });
         })(jQuery); // "jQuery" Working with WP (added the $ alias as argument)
      </script>
   <?php
   endif;
}


/**
 * Show cart contents / total Ajax
 */
add_filter('woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment');

function woocommerce_header_add_to_cart_fragment($fragments)
{
   global $woocommerce;
   ob_start();
   ?>
   <span class="badge badge-cart bg-primary"><?php echo $woocommerce->cart->cart_contents_count; ?></span>
<?php
   $fragments['span.badge.badge-cart.bg-primary'] = ob_get_clean();
   return $fragments;
}


/**
 * Ajax Update OffCanvas Cart
 */

add_filter('woocommerce_add_to_cart_fragments', function ($fragments) {
   ob_start();
?>
   <div class="offcanvas_cart_wrapper">
      <?php do_action('codeweber_offcanvas_cart_start'); ?>
      <div class="offcanvas-header">
         <div class="h3 mb-0"><?php echo esc_html__('Your cart', 'codeweber'); ?> </div>
         <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <?php woocommerce_mini_cart(); ?>
      <?php do_action('codeweber_offcanvas_cart_end'); ?>
   </div>
<?php $fragments['div.offcanvas_cart_wrapper'] = ob_get_clean();
   return $fragments;
});
