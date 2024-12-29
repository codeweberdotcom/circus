<?php

/**
 * Features 13
 */


$block = new CW_Settings(
   $cw_settings = array(
      'subtitle' => 'What We Do?',
      'patternSubtitle' => '<h2 class=" fs-16 text-uppercase text-primary mb-3 %2$s">%1$s</h2>',

      'title' => 'The service we offer is specifically designed to meet your needs.',
      'patternTitle' => '<h3 class="display-3 mb-10 px-xxl-10 %2$s">%1$s</h3>',

      'background_class_default' => 'wrapper bg-light',

      'divider' => true,

      'features' => '<div class="col-lg-4">
            <div class="px-md-15 px-lg-3">
               <figure class="mb-6"><img class="img-fluid" src="' . get_template_directory_uri() . '/dist/img/illustrations/i24.png" srcset="' . get_template_directory_uri() . '/dist/img/illustrations/i24@2x.png 2x" alt="" /></figure>
               <h3>Web Design</h3>
               <p class="mb-2">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget. Fusce dapibus tellus.</p>
               <a href="#" class="more hover">Learn More</a>
            </div>
            <!--/.px -->
         </div>
         <!--/column -->',
      'features_pattern' => '<div class="col-lg-4 %1$s"><div class="px-md-15 px-lg-3"><figure class="mb-6">%2$s</figure><h3>%3$s</h3><p class="mb-2">%4$s</p>%5$s</div></div><!--/column -->',
      'features_style_icon' => 'img-fluid',
      'features_image_size' => 'archive_4_1',
   )
);
?>

<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
   <div class="container py-14 py-md-16">
      <div class="row text-center">
         <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
            <?php echo $block->subtitle_first; ?>
            <!--/subtitle -->
            <?php echo $block->title; ?>
            <!--/title -->
            <?php echo $block->subtitle_second; ?>
            <!--/subtitle -->
         </div>
         <!-- /column -->
      </div>
      <!-- /.row -->
      <div class="row gx-lg-8 gx-xl-12 gy-11 px-xxl-5 text-center d-flex align-items-end">
         <?php echo $block->features; ?>
         <!--/features -->
      </div>
      <!--/.row -->
   </div>
   <!-- /.container -->
   <?php if ($block->divider_wave) {
      echo $block->divider_wave;
   } ?>
   <!-- /divider -->
</section>
<!-- /section -->