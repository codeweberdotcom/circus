<?php

/**
 *  Call to Action 3
 */

//Icon
$final_icon = '<img src="' . get_template_directory_uri() . '/dist/img/icons/lineal/puzzle-2.svg" class="svg-inject icon-svg icon-svg-md mb-4" alt="" />';
$icon = new CW_Icon(NULL, NULL, 'mb-4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, $final_icon, NULL);

$block = new CW_Settings(
   $cw_settings = array(

      'title' => 'Join Our Community',
      'patternTitle' => '<h2 class="display-4 mb-3 %2$s">%1$s</h2>',

      'subtitle' => 'We are trusted by over 5000+ clients. Join them by using our services and grow your business.',
      'patternSubtitle' => '<p class="lead fs-lg mb-6 px-xl-10 px-xxl-15 %2$s">%1$s</p>',

      'buttons' => '<a href="#" class="btn btn-primary rounded">Join Us</a>',
      'buttons_pattern' => '<div class="d-flex flex-wrap justify-content-center" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">%s</div>',

      'background_class_default' => 'wrapper bg-light',

      'divider' => true,
   )
);
?>

<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
   <div class="container py-14 py-md-16 text-center">
      <div class="row">
         <div class="col-md-9 col-lg-7 col-xl-7 mx-auto text-center">
            <?php echo $icon->final_icon; ?>
            <?php echo $block->subtitle_first; ?>
            <!--/subtitle -->
            <?php echo $block->title; ?>
            <!--/title -->
            <?php echo $block->subtitle_second; ?>
            <!--/subtitle -->
            <?php echo $block->buttons; ?>
            <!--/buttons group -->
         </div>
         <!-- /column -->
      </div>
      <!-- /.row -->
   </div>
   <!-- /.container -->
   <?php if ($block->divider_wave) {
      echo $block->divider_wave;
   } ?>
   <!-- /divider -->
</section>
<!-- /section -->