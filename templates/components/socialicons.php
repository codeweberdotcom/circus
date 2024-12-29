<?php

// --- Single icon -----
foreach (codeweber_socialicons() as $key => $value) {
	if (get_field('social_' . $key, 'option')) { ?>
		<a href="<?php echo esc_attr(get_field('social_' . $key, 'option')); ?>" title="<?php echo esc_attr($value['social-name']); ?>" target="_blank">
			<i class="fs-30 <?php echo esc_attr($value['icon-style']) . ' ' . esc_attr($value['icon-name']); ?>"></i>
		</a>
<?php
	};
};
?>