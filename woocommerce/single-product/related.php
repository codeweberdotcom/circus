<?php

/**
 * Related Products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/related.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.9.0
 */

if (!defined('ABSPATH')) {
	exit;
}

if (!is_archive() && $related_products) : ?>
	<section class="wrapper bg-gray related products">
		<div class="container py-14 py-md-16">
			<h3 class="h2 mb-6 text-center"><?php echo esc_html__('You Might Also Like', 'codeweber'); ?></h3>
			<div class="swiper-container blog grid-view shop mb-6" data-margin="30" data-dots="true" data-items-xl="4" data-items-md="2" data-items-xs="1">
				<div class="swiper">
					<ul class="swiper-wrapper list-unstyled products">

						<?php foreach ($related_products as $related_product) : ?>
							<?php $post_object = get_post($related_product->get_id());
							setup_postdata($GLOBALS['post'] = &$post_object); // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited, Squiz.PHP.DisallowMultipleAssignments.Found
							?>
							<li class="swiper-slide project item product">
								<?php wc_get_template_part('content', 'related-product'); ?>
							</li>
							<!--/.swiper-slide -->
						<?php endforeach; ?>

					</ul>
					<!--/.swiper-wrapper -->
				</div>
				<!-- /.swiper -->
			</div>
			<!-- /.swiper-container -->
		</div>
		<!-- /.container -->
	</section>
	<!-- /section -->
<?php
endif;
wp_reset_postdata();
?>