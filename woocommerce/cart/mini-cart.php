<?php

/**
 * Mini-cart
 *
 * Contains the markup for the mini-cart, used by the cart widget.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/mini-cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 5.2.0
 */

defined('ABSPATH') || exit;

do_action('woocommerce_before_mini_cart'); ?>

<?php if (!WC()->cart->is_empty()) : ?>
	<div class="offcanvas-body d-flex flex-column">
		<div class="mini_cart_offcanvas">
			<div class="shopping-cart woocommerce-mini-cart cart_list product_list_widget <?php echo esc_attr($args['list_class']); ?>">
				<?php
				do_action('woocommerce_before_mini_cart_contents');
				foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) {
					$_product   = apply_filters('woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key);
					$product_id = apply_filters('woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key);

					if ($_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters('woocommerce_widget_cart_item_visible', true, $cart_item, $cart_item_key)) {
						$product_name      = apply_filters('woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key);
						$thumbnail         = apply_filters('woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key);
						$product_price     = apply_filters('woocommerce_cart_item_price', WC()->cart->get_product_price($_product), $cart_item, $cart_item_key);
						$product_permalink = apply_filters('woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink($cart_item) : '', $cart_item, $cart_item_key);
				?>
						<div class="shopping-cart-item d-flex justify-content-between mb-4 woocommerce-mini-cart-item <?php echo esc_attr(apply_filters('woocommerce_mini_cart_item_class', 'mini_cart_item', $cart_item, $cart_item_key)); ?>">
							<div class="d-flex flex-row">
								<figure class="rounded w-17">
									<?php if (empty($product_permalink)) : ?>
										<?php echo $thumbnail; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
										?>
									<?php else : ?>
										<a href="<?php echo esc_url($product_permalink); ?>">
											<?php echo $thumbnail; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
											?>
										</a>
									<?php endif; ?>

								</figure>
								<div class="w-100 ms-4">
									<div class="h3 post-title fs-16 lh-xs mb-1"><a href="<?php echo esc_url($product_permalink); ?>" class="link-dark"><?php echo wp_kses_post($product_name); ?></a></div>
									<?php echo wc_get_formatted_cart_item_data($cart_item); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
									?>
									<p class="price fs-sm"><?php echo $cart_item['quantity']; ?> &times; <span class="amount"><?php echo wp_kses_post($product_price); ?></span></p>
								</div>
							</div>
							<?php
							echo apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
								'woocommerce_cart_item_remove_link',
								sprintf(
									'<div class="ms-2"><a href="%s" class="remove remove_from_cart_button link-dark" aria-label="%s" data-product_id="%s" data-cart_item_key="%s" data-product_sku="%s"><i class="uil uil-trash-alt"></i></a></div>',
									esc_url(wc_get_cart_remove_url($cart_item_key)),
									esc_attr__('Remove this item', 'woocommerce'),
									esc_attr($product_id),
									esc_attr($cart_item_key),
									esc_attr($_product->get_sku())
								),
								$cart_item_key
							);
							?>
						</div>
						<!--/.shopping-cart-item -->
				<?php
					}
				}
				do_action('woocommerce_mini_cart_contents');
				?>
			</div>
		</div>
		<div class="offcanvas-footer flex-column text-center">
			<div class="d-flex w-100 justify-content-between mb-4">
				<?php
				/**
				 * Hook: woocommerce_widget_shopping_cart_total.
				 *
				 * @hooked woocommerce_widget_shopping_cart_subtotal - 10
				 */
				do_action('woocommerce_widget_shopping_cart_total');
				?>
			</div>
			<?php
			if (get_field('sidepanel_text_delivery', 'option')) { ?>
				<p class="fs-14 mb-3"><?php echo get_field('sidepanel_text_delivery', 'option'); ?></p>
			<?php } ?>
			<?php do_action('woocommerce_widget_shopping_cart_before_buttons'); ?>
			<?php do_action('woocommerce_widget_shopping_cart_buttons'); ?>
			<?php do_action('woocommerce_widget_shopping_cart_after_buttons'); ?>
		</div>
		<!-- /.offcanvas-footer-->
	</div>
	<!-- /.offcanvas-body-->
<?php else : ?>
	<p class="woocommerce-mini-cart__empty-message p-6"><?php esc_html_e('No products in the cart.', 'woocommerce'); ?></p>
<?php endif; ?>
<?php do_action('woocommerce_after_mini_cart'); ?>