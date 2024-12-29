<?php

/**
 * Process 2
 */
$block = new CW_Settings(
   $cw_settings = array(
      'title' => 'How We Do It?',
      'patternTitle' => '<h2 class="display-4 mb-3 %2$s">%1$s</h2>',

      'subtitle' => 'We make your spending <span class="underline">stress-free</span> for you to have the perfect control.',
      'patternSubtitle' => '<p class="lead fs-lg mb-8 %2$s">%1$s</p>',

      'background_class_default' => 'wrapper bg-light',

      'divider' => 'true',

      'features' => '<div class="col-md-6 col-lg-3"><span class="icon btn btn-circle btn-lg btn-primary pe-none mb-4"><span class="number">02</span></span><h4 class="mb-1">Prepare</h4><p class="mb-0">Vestibulum id ligula porta felis euismod semper. Sed posuere consectetur est at lobortis.</p></div><!--/column -->',

      'features_pattern' => '<div class="col-md-6 col-lg-3 %1$s">%2$s<h3 class="mb-1">%3$s</h3><p class="mb-3">%4$s</p>%5$s</div><!--/column -->',
      'features_style_icon' => 'mb-4',
   )
);
?>


<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
   <?php if ($block->background_video_bool == true) { ?>
      <video poster="<?php echo $block->background_video_preview; ?>" src="<?php echo $block->background_video_url; ?>" autoplay loop playsinline muted></video>
      <div class="video-content">
      <?php } ?>
      <!-- /video background -->
      <div class="container py-14 py-md-16">
         <?php echo $block->subtitle_first; ?>
         <!--/subtitle -->
         <?php echo $block->title; ?>
         <!--/title -->
         <?php echo $block->subtitle_second; ?>
         <!--/subtitle -->
         <div class="row gx-lg-8 gx-xl-12 gy-6 process-wrapper line">
            <?php echo $block->features; ?>
            <!--/features -->
         </div>
         <!--/.row -->
      </div>
      <!-- /.container -->
      <?php if ($block->background_video_bool == true) { ?>
      </div>
      </video>
   <?php } ?>
   <!-- /video background -->
   <?php if ($block->divider_wave) {
      echo $block->divider_wave;
   } ?>
   <!-- /divider -->
</section>
<!-- /section -->