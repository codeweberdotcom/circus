<?php

/**
 * Block template file: templates/flexible-content/modal.php
 *
 * Modal Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'modal-' . $block['id'];
if (!empty($block['anchor'])) {
   $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-modal';
if (!empty($block['className'])) {
   $classes .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
   $classes .= ' align' . $block['align'];
}
?>

<?php if (have_rows('modal')) : ?>
   <?php while (have_rows('modal')) : the_row(); ?>
      <?php $layout = get_row_layout(); ?>
      <?php $block_id = esc_attr($id); ?>
      <?php $layout_path = 'templates/flexible-content/modal/' . $layout . '/' . $layout; ?>
      <?php get_template_part($layout_path, '', array($layout, 'block_id' => $block_id, 'block_class' => $classes)); ?>
   <?php endwhile; ?>
<?php else : ?>
   <h1>modal</h1>
<?php endif; ?>