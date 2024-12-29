<?php

/**
 * Features 3
 */
$block = new CW_Settings(
   $cw_settings = array(
      'subtitle' => 'What We Do?',
      'patternSubtitle' => '<h2 class="fs-16 text-uppercase text-muted mb-3 %2$s">%1$s</h2>',

      'title' => 'The service we offer is specifically designed to meet your needs.',
      'patternTitle' => '<h3 class="display-4 mb-10 px-xl-10 %2$s">%1$s</h3>',

      'background_class_default' => 'wrapper bg-light',
      'divider' => true,

      'shapes' => array('<div class="shape rounded-circle bg-soft-blue rellax w-16 h-16" data-rellax-speed="1" style="bottom: -0.5rem; right: -2.2rem; z-index: 0;"></div>', '<div class="shape bg-dot yellow rellax w-16 h-17" data-rellax-speed="1" style="top: -0.5rem; left: -2.5rem; z-index: 0;"></div>'),

      'features' => '<div class="col-md-6 col-xl-3"><div class="card shadow-lg"><div class="card-body"><img src="' . get_template_directory_uri() . '/dist/img/icons/lineal/search-2.svg" class="svg-inject icon-svg icon-svg-md text-yellow mb-3" alt="" /><h4>SEO Services</h4><p class="mb-2">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus cras justo.</p><a href="#" class="more hover link-yellow">Learn More</a></div><!--/.card-body --></div><!--/.card --></div><!--/column -->',
      'features_pattern' => '<div class="col-md-6 col-xl-3 %1$s"><div class="card shadow-lg %6$s"><div class="card-body">%2$s<h4>%3$s</h4><p class="mb-5">%4$s</p>%5$s</div><!--/.card-body --></div><!--/.card --></div><!--/column -->',

      'features_style_icon' => 'mb-3',

   )
);
?>



<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
   <div class="container py-14 py-md-16 text-center">
      <div class="row">
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
      <!-- /row -->
      <div class="position-relative">
         <?php echo $block->shapes; ?>
         <!--/shape -->
         <div class="row gx-md-5 gy-5 text-center">
            <?php echo $block->features; ?>
         </div>
         <!--/row -->
      </div>
      <!-- /position-relative -->
   </div>
   <!-- /container -->
   <?php if ($block->divider_wave) {
      echo $block->divider_wave;
   } ?>
   <!-- /divider -->
</section>
<!-- /section -->