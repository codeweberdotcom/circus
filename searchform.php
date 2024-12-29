<?php
$searchtext = esc_html__('Search', 'codeweber');


if (class_exists('DGWT_WC_Ajax_Search') && class_exists('WooCommerce')) {
	echo do_shortcode('[fibosearch]');
} else { ?>
	<form class="search-form w-100" action="<?php echo esc_url_raw(home_url()); ?>" method="get">
		<div class="row g-2">
			<div class="col">
				<input id="search-form" class="form-control" type="search" placeholder="<?php echo esc_attr($searchtext); ?>" aria-label="<?php echo esc_attr($searchtext); ?>" name="s">
			</div>
		</div>
	</form>

<?php

}
?>