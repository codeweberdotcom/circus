<?php

/**
 * Features 2
 */
$block = new CW_Settings(
   $cw_settings = array(
      'subtitle' => 'What We Do?',
      'patternSubtitle' => '<h2 class="fs-15 text-uppercase text-muted mb-3 %2$s">%1$s</h2>',

      'title' => 'The service we offer is specifically designed to meet your needs.',
      'patternTitle' => '<h3 class="display-4 mb-9 %2$s"> %1$s</h3>',

      'background_class_default' => 'wrapper bg-light',

      'divider' => true,

      'features' => '<div class="col-md-6 col-lg-3"><div class="icon btn btn-block btn-lg btn-soft-yellow pe-none mb-5"> <i class="uil uil-phone-volume"></i> </div><h4>24/7 Support</h4><p class="mb-3">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus. Cras justo.</p><a href="#" class="more hover link-yellow">Learn More</a></div><!--/column -->',
      'features_pattern' => '<div class="col-md-6 col-lg-3 %1$s">%2$s<h4>%3$s</h4><p class="mb-3">%4$s</p>%5$s</div><!--/column -->'
   )
);
?>

<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
   <div class="container py-14 py-md-16">
      <div class="row">
         <div class="col-lg-8 col-xl-7 col-xxl-6">
            <?php echo $block->subtitle_first; ?>
            <!--/subtitle -->
            <?php echo $block->title; ?>
            <!--/title -->
            <?php echo $block->subtitle_second; ?>
            <!--/subtitle -->
         </div>
         <!-- /column -->
      </div>
      <!-- /row -->
      <div class="row gx-md-8 gy-8">
         <?php echo $block->features; ?>
         <!--/features -->
      </div>
      <!--/row -->
   </div>
   <!-- /container -->
   <?php if ($block->divider_wave) {
      echo $block->divider_wave;
   } ?>
   <!-- /divider -->
</section>
<!-- /section -->