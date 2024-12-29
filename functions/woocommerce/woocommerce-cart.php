<?php


add_filter('woocommerce_cart_item_thumbnail', 'custom_class_woocommerce_cart_item_thumbnail_filter', 10, 3);

function custom_class_woocommerce_cart_item_thumbnail_filter($product_image, $cart_item, $cart_item_key)
{
   $product_image = str_replace('class="', 'class="your-class ', $product_image);
   return $product_image;
}



/**
 * Show sale prices in the cart.
 */
function codeweber_show_sale_price_at_cart($old_display, $cart_item, $cart_item_key)
{
   /** @var WC_Product $product */
   $product = $cart_item['data'];

   if ($product) {
      return $product->get_price_html();
   }
   return $old_display;
}
add_filter('woocommerce_cart_item_price', 'codeweber_show_sale_price_at_cart', 10, 3);
