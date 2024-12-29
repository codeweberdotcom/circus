<?php

/**
 * Cart totals
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart-totals.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 2.3.6
 */

defined('ABSPATH') || exit;

?>
<div class="cart_totals <?php echo (WC()->customer->has_calculated_shipping()) ? 'calculated_shipping' : ''; ?>">
   <?php do_action('woocommerce_before_cart_totals'); ?>
   <h3 class="mb-4"><?php esc_html_e('Cart totals', 'woocommerce'); ?></h3>
   <div class="table-responsive">
      <table cellspacing="0" class="shop_table shop_table_responsive table table-order mb-0">
         <tbody>
            <tr>
               <td class="ps-0"><strong class="text-dark"><?php esc_html_e('Subtotal', 'codeweber'); ?></strong></td>
               <td data-title="<?php esc_attr_e('Subtotal', 'codeweber'); ?>" class="pe-0 text-end">
                  <p class="price"><?php wc_cart_totals_subtotal_html(); ?></p>
               </td>
            </tr>
            <tr>
               <?php foreach (WC()->cart->get_coupons() as $code => $coupon) : ?>
                  <td class="ps-0"><strong class="text-dark cart-discount coupon-<?php echo esc_attr(sanitize_title($code)); ?>"><?php wc_cart_totals_coupon_label($coupon); ?></strong></td>
                  <td class="pe-0 text-end" data-title="<?php echo esc_attr(wc_cart_totals_coupon_label($coupon, false)); ?>">
                     <p class="price text-red"><?php wc_cart_totals_coupon_html($coupon); ?></p>
                  </td>
               <?php endforeach; ?>
            </tr>
            <?php $sales_and_discounts = codeweber_get_cart_subtotal_and_discount(); ?>
            <?php global $woocommerce; ?>
            <?php if ($sales_and_discounts['discount_sale']) { ?>
               <tr>
                  <td class="ps-0"><strong class="text-dark cart-sale"><?php esc_html_e('Sale', 'codeweber'); ?></strong></td>
                  <td class="pe-0 text-end" data-title="<?php esc_html_e('Sale', 'codeweber'); ?>">
                     <p class="price text-red"><?php echo wc_price($sales_and_discounts['discount_sale']); ?></p>
                  </td>

               </tr>




         </tbody>
      </table>

   <?php } ?>
   <?php if (WC()->cart->needs_shipping() && WC()->cart->show_shipping()) : ?>
      <?php do_action('woocommerce_cart_totals_before_shipping'); ?>
      <?php wc_cart_totals_shipping_html(); ?>
      <?php do_action('woocommerce_cart_totals_after_shipping'); ?>
   <?php elseif (WC()->cart->needs_shipping() && 'yes' === get_option('woocommerce_enable_shipping_calc')) : ?>
      <tr class="shipping">
         <td class="ps-0"><strong class="text-dark"><?php esc_html_e('Shipping', 'woocommerce'); ?></strong></td>
         <td class="pe-0 text-end" data-title="<?php esc_attr_e('Shipping', 'woocommerce'); ?>">
            <p class="price"><?php woocommerce_shipping_calculator(); ?></p>
         </td>
      </tr>
   <?php endif; ?>

   <table cellspacing="0" class="shop_table shop_table_responsive table table-order">
      <tbody>

         <?php foreach (WC()->cart->get_fees() as $fee) : ?>
            <tr>
               <td class="ps-0"><strong class="text-dark"><?php echo esc_html($fee->name); ?></strong></td>
               <td class="pe-0 text-end" data-title="<?php echo esc_attr($fee->name); ?>">
                  <p class="price"><?php wc_cart_totals_fee_html($fee); ?></p>
               </td>
            </tr>
         <?php endforeach; ?>
         <?php
         if (wc_tax_enabled() && !WC()->cart->display_prices_including_tax()) {
            $taxable_address = WC()->customer->get_taxable_address();
            $estimated_text  = '';

            if (WC()->customer->is_customer_outside_base() && !WC()->customer->has_calculated_shipping()) {
               /* translators: %s location. */
               $estimated_text = sprintf(' <small>' . esc_html__('(estimated for %s)', 'woocommerce') . '</small>', WC()->countries->estimated_for_prefix($taxable_address[0]) . WC()->countries->countries[$taxable_address[0]]);
            }
            if ('itemized' === get_option('woocommerce_tax_total_display')) {
               foreach (WC()->cart->get_tax_totals() as $code => $tax) { // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited
         ?>
                  <tr class="tax-rate tax-rate-<?php echo esc_attr(sanitize_title($code)); ?>">
                     <td class="ps-0"><strong class="text-dark"><?php echo esc_html($tax->label) . $estimated_text; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
                                                                  ?></strong></td>
                     <td class="pe-0 text-end" data-title="<?php echo esc_attr($tax->label); ?>">
                        <p class="price text-dark fw-bold"><?php echo wp_kses_post($tax->formatted_amount); ?></p>
                     </td>
                  </tr>
               <?php
               }
            } else {
               ?>
               <tr class="tax-total">
                  <td class="ps-0"><strong class="text-dark"><?php echo esc_html(WC()->countries->tax_or_vat()) . $estimated_text; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
                                                               ?></strong></td>
                  <td class="pe-0 text-end" data-title="<?php echo esc_attr(WC()->countries->tax_or_vat()); ?>">
                     <p class="price"><?php wc_cart_totals_taxes_total_html(); ?></p>
                  </td>
               </tr>
         <?php
            }
         }
         ?>
         <?php do_action('woocommerce_cart_totals_before_order_total'); ?>
         <tr class="order-total">
            <td class="ps-0"><strong class="text-dark"><?php esc_html_e('Total', 'woocommerce'); ?></strong></td>
            <td class="pe-0 text-end" data-title="<?php esc_attr_e('Total', 'woocommerce'); ?>">
               <p class="price text-dark fw-bold"><?php wc_cart_totals_order_total_html(); ?></p>
            </td>
         </tr>
         <?php do_action('woocommerce_cart_totals_after_order_total'); ?>
      </tbody>
   </table>
   </div>

   <div class="wc-proceed-to-checkout">
      <?php do_action('woocommerce_proceed_to_checkout'); ?>
   </div>

   <?php do_action('woocommerce_after_cart_totals'); ?>

</div>