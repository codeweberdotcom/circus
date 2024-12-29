<?php

/**
 * Show options for ordering
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/orderby.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.6.0
 */

if (!defined('ABSPATH')) {
	exit;
}
?>

<div class="row align-items-center mb-10 position-relative zindex-1">
	<div class="col-md-7 col-xl-8 pe-xl-10">
		<?php if (get_theme_mod('codeweber_page_woocommerce_header') == 'type_4') : ?>
			<h1 class="display-6 mb-1 h2"><?php echo codeweber_page_title(); ?></h1>
		<?php endif; ?>
		<p class="mb-0 text-muted"><?php do_action('codeweber_result_count'); ?></p>
	</div>
	<!--/column -->
	<div class="col-md-5 col-xl-4 ms-md-auto text-md-end mt-5 mt-md-0">
		<form class="woocommerce-ordering form-select-wrapper" method="get">
			<select name="orderby" class="orderby form-select" aria-label="<?php esc_attr_e('Shop order', 'woocommerce'); ?>">
				<?php foreach ($catalog_orderby_options as $id => $name) : ?>
					<option value="<?php echo esc_attr($id); ?>" <?php selected($orderby, $id); ?>><?php echo esc_html($name); ?></option>
				<?php endforeach; ?>
			</select>
			<input type="hidden" name="paged" value="1" />
			<?php wc_query_string_form_fields(null, array('orderby', 'submit', 'paged', 'product-page')); ?>
		</form>
		<!--/.form-select-wrapper -->
	</div>
	<!--/column -->
</div>
<?php
do_action('codeweber_after_orderby');
