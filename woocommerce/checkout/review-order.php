<?php

/**
 * Review order table
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/review-order.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 5.2.0
 */

defined('ABSPATH') || exit;
?>
<div class="shop_table woocommerce-checkout-review-order-table">
	<div class="shopping-cart mb-7">
		<?php
		do_action('woocommerce_review_order_before_cart_contents');

		foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) {
			$_product = apply_filters('woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key);
			$image_url = wp_get_attachment_image_src(get_post_thumbnail_id($cart_item['product_id']), 'cart_checkout');
			$thumbnail = apply_filters('woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key);
			if ($_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters('woocommerce_checkout_cart_item_visible', true, $cart_item, $cart_item_key)) {
		?>
				<div class="shopping-cart-item d-flex justify-content-between mb-4">
					<div class="d-flex flex-row d-flex align-items-center">
						<figure class="rounded w-17"><a href="<?php echo get_permalink($cart_item['product_id']); ?>"><?php echo $thumbnail; ?></a></figure>
						<div class="w-100 ms-4">
							<h3 class="post-title h6 lh-xs mb-1"><a href="<?php echo get_permalink($cart_item['product_id']); ?>" class="link-dark"><?php echo wp_kses_post(apply_filters('woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key)) . '&nbsp;'; ?>
									<?php echo apply_filters('woocommerce_checkout_cart_item_quantity', ' <strong class="product-quantity">' . sprintf('&times;&nbsp;%s', $cart_item['quantity']) . '</strong>', $cart_item, $cart_item_key); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
									?></a></h3>
							<?php echo wc_get_formatted_cart_item_data($cart_item); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
							?>
						</div>
					</div>
					<div class="ms-2 d-flex align-items-center">
						<p class="price fs-sm"><span class="amount nowrap">
								<?php echo apply_filters('woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal($_product, $cart_item['quantity']), $cart_item, $cart_item_key); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
								?></span>
						</p>
					</div>
				</div>
		<?php
			}
		}

		do_action('woocommerce_review_order_after_cart_contents');
		?>
	</div>
	<div>

		<?php if (WC()->cart->needs_shipping() && WC()->cart->show_shipping()) : ?>
			<?php do_action('woocommerce_review_order_before_shipping'); ?>
			<?php wc_cart_totals_shipping_html(); ?>
			<?php do_action('woocommerce_review_order_after_shipping'); ?>
		<?php endif; ?>

		<div class="table-responsive">
			<table class="table table-order">
				<tbody>
					<tr>
						<td class="ps-0"><strong class="text-dark"><?php esc_html_e('Subtotal', 'woocommerce'); ?></strong></td>
						<td class="pe-0 text-end">
							<p class="price nowrap"><?php wc_cart_totals_subtotal_html(); ?></p>
						</td>
					</tr>
					<?php
					$discount_total = 0;
					foreach (WC()->cart->get_cart() as $cart_item_key => $values) {
						$product = $values['data'];
						if ($product->is_on_sale()) {
							$regular_price = $product->get_regular_price();
							$sale_price = $product->get_sale_price();
							$discount = ((float)$regular_price - (float)$sale_price) * (int)$values['quantity'];
							$discount_total += $discount;
						}
					}
					if ($discount_total > 0) { ?>

						<tr>
							<td class="ps-0"><strong class="text-dark"><?php esc_html_e('Sale', 'codeweber'); ?></strong></td>
							<td class="pe-0 text-end" data-title="<?php esc_html_e('Sale', 'codeweber'); ?>">
								<p class="price text-red"><?php echo wc_price($discount_total + WC()->cart->get_discount_total()); ?></p>
							</td>
						</tr>

					<?php }
					?>
					<?php foreach (WC()->cart->get_coupons() as $code => $coupon) : ?>
						<tr class="cart-discount coupon-<?php echo esc_attr(sanitize_title($code)); ?>">
							<td class="ps-0"><strong class="text-dark"><?php wc_cart_totals_coupon_label($coupon); ?></strong></td>
							<td class="pe-0 text-end">
								<p class="price nowrap"><?php wc_cart_totals_coupon_html($coupon); ?></p>
							</td>
						</tr>
					<?php endforeach; ?>
					<?php foreach (WC()->cart->get_fees() as $fee) : ?>
						<tr class="fee">
							<td class="ps-0"><strong class="text-dark"><?php echo esc_html($fee->name); ?></strong></td>
							<td class="pe-0 text-end">
								<p class="price nowrap"><?php wc_cart_totals_fee_html($fee); ?></p>
							</td>
						</tr>
					<?php endforeach; ?>
					<?php if (wc_tax_enabled() && !WC()->cart->display_prices_including_tax()) : ?>
						<?php if ('itemized' === get_option('woocommerce_tax_total_display')) : ?>
							<?php foreach (WC()->cart->get_tax_totals() as $code => $tax) : // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited 
							?>
								<tr class="tax-rate tax-rate-<?php echo esc_attr(sanitize_title($code)); ?>">
									<td class=" ps-0"><strong class="text-dark"><?php echo esc_html($tax->label); ?></strong></td>
									<td class="pe-0 text-end">
										<p class="price nowrap"><?php echo wp_kses_post($tax->formatted_amount); ?></p>
									</td>
								</tr>
							<?php endforeach; ?>
						<?php else : ?>
							<div class="tax-total">
								<div><?php echo esc_html(WC()->countries->tax_or_vat()); ?></div>
								<div><?php wc_cart_totals_taxes_total_html(); ?></div>
							</div>
						<?php endif; ?>
					<?php endif; ?>
					<?php do_action('woocommerce_review_order_before_order_total'); ?>
					<tr class="order-total">
						<td class="ps-0"><strong class="text-dark"><?php esc_html_e('Total', 'woocommerce'); ?></strong></td>
						<td class="pe-0 text-end">
							<p class="price nowrap"><?php wc_cart_totals_order_total_html(); ?></p>
						</td>
					</tr>

				</tbody>
			</table>
		</div>
		<?php do_action('woocommerce_review_order_after_order_total'); ?>
	</div>
</div>