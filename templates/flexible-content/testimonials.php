<?php

/**
 * Block template file: templates/flexible-content/testimonials.php
 *
 * Testimonials Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'testimonials-' . $block['id'];
if (!empty($block['anchor'])) {
   $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-testimonials';
if (!empty($block['className'])) {
   $classes .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
   $classes .= ' align' . $block['align'];
}
?>

<?php if (have_rows('testimonials_template')) : ?>
   <?php while (have_rows('testimonials_template')) : the_row(); ?>
      <?php $layout = get_row_layout(); ?>
      <?php $block_id = esc_attr($id); ?>
      <?php $layout_path = 'templates/flexible-content/testimonials/' . $layout . '/' . $layout; ?>
      <?php get_template_part($layout_path, '', array($layout, 'block_id' => $block_id, 'block_class' => $classes)); ?>
   <?php endwhile; ?>
<?php else : ?>
   <h1>Testimonials</h1>
<?php endif; ?>