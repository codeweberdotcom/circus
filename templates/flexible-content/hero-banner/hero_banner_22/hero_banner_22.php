<?php

/**
 * Hero 22
 */
$block = new CW_Settings(
   $cw_settings = array(
      'title' => 'Grow your business with our marketing solutions',
      'patternTitle' => '<h1 class="h3 display-1 fs-54 text-white mb-7 %2$s">%1$s</h1>',

      // 'paragraph' => 'We carefully consider our solutions to support each and every stage of your growth.',
      // 'patternParagraph' => '<p class="lead fs-24 lh-sm text-white mb-7 pe-md-18 pe-lg-0 pe-xxl-15">%s</p>',

      'subtitle' => 'Hello! We are Sandbox',
      'patternSubtitle' => '<p class="h6 text-uppercase ls-xl text-white mb-5 %2$s">%1$s</p>',

      'buttons_pattern' => '<div class="d-flex justify-content-center" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">%s</div>',
      'buttons' => ' <a href="' . get_template_directory_uri() . '/dist/media/movie.mp4" class="btn btn-circle btn-white btn-play ripple mx-auto" data-glightbox><i class="icn-caret-right"></i></a>',

      'background_class_default' => 'wrapper image-wrapper bg-cover bg-image bg-overlay bg-overlay-500',
      'background_data_default' => '/dist/img/photos/bg26.jpg',
      //'background_video_preview' => '/dist/img/photos/movie2.jpg',
      //'background_video_url' => '/dist/media/movie2.mp4',
      //'background_pattern_url' => '/dist/img/pattern.png',

      'divider' => 'true',
      //'divider_angles' => 'upper-start',
      'divider_wave' => '<div class="overflow-hidden"><div class="divider text-white mx-n2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 60"><path fill="currentColor" d="M0,0V60H1440V0A5771,5771,0,0,1,0,0Z" /></svg></div></div><!-- /.overflow-hidden -->',
   )
);
?>


<section id="<?php echo esc_html($args['block_id']); ?>" class="section-frame br-fix overflow-hidden">
   <div class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
      <?php if ($block->background_video_bool == true) { ?>
         <video poster="<?php echo $block->background_video_preview; ?>" src="<?php echo $block->background_video_url; ?>" autoplay loop playsinline muted></video>
         <div class="video-content">
         <?php } ?>
         <!-- /video background -->
         <div class="container pt-18 pt-lg-21 pb-17 pb-lg-19 text-center">
            <div class="row">
               <div class="col-md-9 col-lg-8 col-xl-7 col-xxl-6 mx-auto" data-cues="zoomIn" data-group="page-title" data-interval="-200" data-delay="500">
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
         </div>
         <!-- /.wrapper -->
</section>
<!--/section -->