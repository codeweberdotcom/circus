<?php

/**
 *  Call to Action 1_1
 */


$block = new CW_Settings(
   $cw_settings = array(
      'subtitle' => 'Join Our Community',
      'patternSubtitle' => '<h2 class="fs-16 text-uppercase text-line text-white mb-3 %2$s">%1$s</h2>',

      'title' => 'We are trusted by over 5000+ clients. Join them by using our services and grow your business.',
      'patternTitle' => '<h3 class="display-4 mb-6 text-white pe-xxl-18 %2$s">%1$s</h3>',

      'buttons' => '<a href="#" class="btn btn-white rounded mb-0 text-nowrap">Join Us</a>',
      'buttons_pattern' => '<div class="d-flex flex-wrap justify-content-start" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">%s</div>',

      'background_class_default' => 'wrapper image-wrapper bg-image bg-overlay',
      'background_data_default' => '/dist/img/photos/bg1.jpg',

      'divider' => true,

   )
);
?>

<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?> overflow-hidden" <?php echo $block->background_data; ?>>
   <div class="container py-18">
      <div class="row">
         <div class="col-lg-8">
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