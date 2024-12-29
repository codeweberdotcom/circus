<?php

/**
 * Single variation cart button
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined('ABSPATH') || exit;

global $product;
?>
<div class="woocommerce-variation-add-to-cart variations_button row">


	<?php do_action('woocommerce_before_add_to_cart_button'); ?>

	<div class="col-lg-9 d-flex flex-row pt-2">

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
			<button type="submit" class="single_add_to_cart_button button alt btn btn-primary btn-icon btn-icon-start <?php echo get_theme_mod('codeweber_button_form'); ?> w-100 flex-grow-1"><?php echo esc_html($product->single_add_to_cart_text()); ?></button>
		</div>

		<!-- <div>
			<button class="btn btn-block btn-outline-red btn-icon <?php echo GetThemeButton(); ?> px-3 w-100 h-100"><i class="uil uil-heart"></i></button>
		</div>
		<div class="ps-1">
			<button class="btn btn-block btn-outline-red btn-icon <?php echo GetThemeButton(); ?> px-3 w-100 h-100"><i class="uil uil-exchange"></i></i></button>
		</div> -->

		<?php do_action('woocommerce_after_add_to_cart_button'); ?>

	</div>
	<input type="hidden" name="add-to-cart" value="<?php echo absint($product->get_id()); ?>" />
	<input type="hidden" name="product_id" value="<?php echo absint($product->get_id()); ?>" />
	<input type="hidden" name="variation_id" class="variation_id" value="0" />

</div>