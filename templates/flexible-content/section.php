<?php

/**
 * Block template file: templates/flexible-content/section.php
 *
 * Section Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'section-' . $block['id'];
if (!empty($block['anchor'])) {
   $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-section';
if (!empty($block['className'])) {
   $classes .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
   $classes .= ' align' . $block['align'];
}
?>

<?php
/**
 * CW Section
 */
$section = new CW_Settings(
   $cw_settings = array(
      'background_class_default' => 'wrapper bg-light',
      'divider' => true
   )
);
$classes .= ' ' . $section->background_class;
$classes .= ' ' . $section->divider_class;
?>

<section id="<?php echo esc_attr($id); ?>" class="wrapper <?php echo esc_attr($classes); ?>" <?php echo $section->background_data; ?>>
   <?php if ($section->background_video_bool == true) { ?>
      <video poster="<?php echo $section->background_video_preview; ?>" src="<?php echo $section->background_video_url; ?>" autoplay loop playsinline muted></video>
      <div class="video-content">
      <?php } ?>
      <!-- /open video wrapper -->

      <?php if ($section->background_video_bool == true) { ?>
         <video poster="<?php echo $section->background_video_preview; ?>" src="<?php echo $section->background_video_url; ?>" autoplay loop playsinline muted></video>
         <div class="video-content">
         <?php } ?>
         <!-- /open video wrapper -->

         <div class="container">
            <InnerBlocks />
            <!-- /content -->
         </div>

         <?php if ($section->background_video_bool == true) { ?>
         </div>
         </video>
      <?php } ?>
      <!-- /close video wrapper -->

      <?php if ($section->divider_wave !== NULL) { ?>
         <?php echo $section->divider_wave; ?>
      <?php } ?>
      <!-- /section wave/border divider -->

</section>
<!-- /section -->