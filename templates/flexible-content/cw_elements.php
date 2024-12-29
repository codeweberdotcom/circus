<?php

/**
 * Block template file: templates/flexible-content/elements/icon.php
 *
 * Icon Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

?>

<?php if (have_rows('cw_elements')) : ?>
   <?php while (have_rows('cw_elements')) : the_row(); ?>
   <?php $layout = get_row_layout(); ?>
       <?php $layout_path = 'templates/flexible-content/cw_elements/' . $layout; ?>
      <?php get_template_part($layout_path, '', array()); ?>
   <?php endwhile; ?>
<?php else : ?>
   <?php echo 'CW Elements'; // no layouts found 
   ?>
<?php endif; ?>