<?php
// get_template_part( 'templates/footer/footer', 'columns' );
do_action('codeweber_footer_start'); ?>

<?php if (get_field('footer') && get_field('footer') !== 'default') {
	get_template_part('templates/footer/footer', get_field('footer'));
} elseif (get_theme_mod('codeweber_footer')) {
	get_template_part('templates/footer/footer', get_theme_mod('codeweber_footer'));
} else {
	get_template_part('templates/footer/footer', 'sandbox-25_cw');
}

?>


<!--  generate forms start -->
<?php global $forms; ?>
<?php $forms = array_unique($forms); ?>
<?php if (isset($forms)) {
	foreach ($forms as $item) {
		$form = '<div class="modal fade" id="modal-form-' . $item . '" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered modal-sm">
                        <div class="modal-content">
                        <div class="modal-body">
                        <button id="' . $item . '" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" ></button>';
		$form .= do_shortcode("[contact-form-7 id='{$item}']");
		$form .= '</div></div></div></div>';
		echo  $form;
	}
}
?>
<!--  generate forms end -->
<div class="progress-wrap">
	<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
		<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
	</svg>
</div>
<?php do_action('codeweber_footer_end'); ?>
<?php wp_footer(); ?>
<?php do_action('codeweber_end_content_wrapper'); ?>
</div> <!-- #content-wrapper -->
<?php sandbox_frame_close(); ?>
<?php do_action('codeweber_end_body'); ?>
</body>


