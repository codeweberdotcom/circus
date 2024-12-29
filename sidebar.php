<?php

if (class_exists('WooCommerce')) {
	if (is_shop() || is_product_tag() || is_product_category() || is_product_taxonomy()) {
		if (is_active_sidebar('woocommerce_sidebar') || has_action('woocommerce_sidebar_start') || has_action('woocommerce_sidebar_end')) { ?>
			<aside class="col-lg-3 sidebar">
				<?php do_action('woocommerce_sidebar_start');
				dynamic_sidebar('woocommerce_sidebar');
				do_action('woocommerce_sidebar_end'); ?>
			</aside> <!-- #sidebar-main-wrapper -->
	<?php }
	}
}

if (is_page() && !dynamic_sidebar()) { ?>
	<?php if (is_active_sidebar('sidebar-page') || has_action('sidebar_page_start') || has_action('sidebar_page_end')) { ?>
		<aside class="col-sm-4 mt-5 mt-md-0 ps-md-5">
			<?php do_action('sidebar_page_start'); ?>
			<?php dynamic_sidebar('sidebar-page'); ?>
			<?php do_action('sidebar_page_end'); ?>
		</aside> <!-- #sidebar-main-wrapper -->
	<?php }; ?>

<?php } elseif (is_post_type_archive('services') || is_tax('service_category') || is_tax('types_of_services') || is_singular('services')) { ?>
	<?php if (is_active_sidebar('sidebar-services') || has_action('sidebar_services_start') || has_action('sidebar_services_end')) { ?>
		<aside class="col-sm-4 mt-5 mt-md-0 ps-md-5">
			<?php do_action('sidebar_services_start'); ?>
			<?php dynamic_sidebar('sidebar-services'); ?>
			<?php do_action('sidebar_services_end'); ?>
		</aside> <!-- #sidebar-main-wrapper -->
	<?php }; ?>


<?php } elseif (is_search() && isset($_GET['s'])) { ?>
	<?php if (is_active_sidebar('search_sidebar') || has_action('sidebar_search_start') || has_action('sidebar_search_end')) { ?>
		<aside class="col-sm-4 mt-5 mt-md-0 ps-md-5">
			<?php do_action('sidebar_search_start'); ?>
			<?php dynamic_sidebar('search_sidebar'); ?>
			<?php do_action('sidebar_search_end'); ?>
		</aside> <!-- #sidebar-main-wrapper -->
	<?php }; ?>


<?php } elseif (is_post_type_archive('faq') || is_singular('faq') || is_tax('faq_tag') || is_tax('faq_categories')) { ?>
	<?php if (is_active_sidebar('sidebar_faq') || has_action('sidebar_faq_start') || has_action('sidebar_faq_end')) { ?>
		<aside class="col-sm-4 mt-5 mt-md-0 ps-md-5">
			<?php do_action('sidebar_faq_start'); ?>
			<?php dynamic_sidebar('sidebar_faq'); ?>
			<?php do_action('sidebar_faq_end'); ?>
		</aside> <!-- #sidebar-main-wrapper -->
	<?php }; ?>
<?php } elseif (is_post_type_archive('testimonials')) { ?>
	<?php if (is_active_sidebar('sidebar-testimonials') || has_action('sidebar_testimonials_start') || has_action('sidebar_testimonials_end')) { ?>
		<aside class="col-sm-4 mt-5 mt-md-0 ps-md-5">
			<?php do_action('sidebar_testimonials_start'); ?>
			<?php dynamic_sidebar('sidebar-testimonials'); ?>
			<?php do_action('sidebar_testimonials_end'); ?>
		</aside> <!-- #sidebar-main-wrapper -->
	<?php };
} else { ?>
	<?php if (class_exists('WooCommerce')) {
		if (!is_shop() && !is_product_tag() && !is_product_category() && !is_product_taxonomy()) {
			if (is_active_sidebar('woocommerce_sidebar') || has_action('woocommerce_sidebar_start') || has_action('woocommerce_sidebar_end')) { ?>
				<aside class="col-sm-4 mt-5 mt-md-0 ps-md-5">
					<?php do_action('sidebar_main_start'); ?>
					<?php dynamic_sidebar('sidebar-main'); ?>
					<?php do_action('sidebar_main_end'); ?>
				</aside> <!-- #sidebar-main-wrapper -->
		<?php }
		}
	} else { ?>
		<aside class="col-sm-4 mt-5 mt-md-0 ps-md-5">
			<?php do_action('sidebar_main_start'); ?>
			<?php dynamic_sidebar('sidebar-main'); ?>
			<?php do_action('sidebar_main_end'); ?>
		</aside> <!-- #sidebar-main-wrapper -->
	<?php } ?>
<?php };
