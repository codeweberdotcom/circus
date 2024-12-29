<?php

/**
 * Hero 13
 */
$block = new CW_Settings(
   $cw_settings = array(
      'title' => 'We bring rapid solutions for your business',
      'patternTitle' => '<h1 class="h3 display-1 text-white mb-7 %2$s">%1$s</h1>',

      // 'paragraph' => 'We carefully consider our solutions to support each and every stage of your growth.',
      // 'patternParagraph' => '<p class="lead fs-24 lh-sm text-white mb-7 pe-md-18 pe-lg-0 pe-xxl-15">%s</p>',

      'subtitle' => 'Hello! This is Sandbox',
      'patternSubtitle' => '<p class="h6 text-uppercase ls-xl text-white mb-5 %2$s">%1$s</p>',

      'buttons_pattern' => '<div class="d-flex justify-content-center" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">%s</div>',
      'buttons' => ' <a href="' . get_template_directory_uri() . '/dist/media/movie.mp4" class="btn btn-circle btn-white btn-play ripple mx-auto mb-5" data-glightbox><i class="icn-caret-right"></i></a>',

      'background_class_default' => 'wrapper image-wrapper bg-image bg-overlay bg-overlay-300 text-white',
      'background_data_default' => '/dist/img/photos/bg2.jpg',
      //'background_video_preview' => '/dist/img/photos/movie2.jpg',
      //'background_video_url' => '/dist/media/movie2.mp4',
      //'background_pattern_url' => '/dist/img/pattern.png',

      // 'shapes' => array(
      //    '<div class="shape bg-dot primary rellax w-17 h-19" data-rellax-speed="1" style="top: -1.7rem; left: -1.5rem;"></div>',
      //    '<div class="shape rounded bg-soft-primary rellax d-md-block" data-rellax-speed="0" style="bottom: -1.8rem; right: -0.8rem; width: 85%; height: 90%;"></div>'
      // ),

      //'typewriter' => 'scustomer satisfaction,business needs,creative ideas',

      //'image_pattern' => '<figure class="rounded shadow-lg"><img src="%1$s" srcset="%2$s" alt="%3$s""></figure>',
      //'image_link' => '/dist/img/photos/about13.jpg',
      //'image_thumb_size' => 'sandbox_hero_3',
      //'image_big_size' => 'project_1',


      'swiper' => array(
         'swiper_container_class' => 'rounded overflow-hidden',
         'image_class' => '',
         'wrapper_image_class' => '',
         'image_pattern' => '<figure %5$s %9$s>%6$s<img %4$s src="%1$s" srcset="%1$s" %3$s />%7$s %10$s %11$s</figure>',
         'image_thumb_size' => 'sandbox_hero_14',
         'image_demo' => '<figure class="rounded"><img src="' . get_template_directory_uri() . '/dist/img/photos/about5.jpg" srcset="' . get_template_directory_uri() . '/dist/img/photos/about5@2x.jpg 2x" alt="" /></figure>',
         'image_big_size' => 'project_1',
         'img_link' => '/dist/img/photos/about5.jpg',
         'data_margin' => '30',
         'nav' => 'false',
         'nav_color' => 'nav-light',
         'nav_position' => 'nav-start',
         'dots' => 'true',
         'dots_color' => 'nav-start',
         'dots_position' => 'dots-over',
         'swiper_effect' => 'slide',
         'base_items' => '1',
         'items_xs' => '1',
         'items_sm' => '1',
         'items_md' => '1',
         'items_lg' => '1',
         'items_xl' => '1',
         'items_xxl' => '1',
         'autoplay' => 'true',
         'autoplay_time' => '3000',
         'loop' => 'loop',
         'autoheight' => 'false',
         'image_shape' => 'rounded',
      ),

      'features' => '<div class="col-6 col-lg-3"><h3 class="counter counter-lg text-white">7518</h3><p>Completed Projects</p></div><!--/column -->',
      'features_pattern' => '<div class="col-6 col-lg-3 %1$s"><h3 class="counter counter-lg text-white">%3$s</h3><p>%4$s</p></div><!--/column -->',

      //'column_class_1' => '',
      //'column_class_2' => 'offset-lg-1  order-lg-2',
   )
);
?>


<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
   <?php if ($block->background_video_bool == true) { ?>
      <video poster="<?php echo $block->background_video_preview; ?>" src="<?php echo $block->background_video_url; ?>" autoplay loop playsinline muted></video>
      <div class="video-content">
      <?php } ?>
      <!-- /video background -->
      <div class="container pt-17 pb-19 pt-md-19 pb-md-20 text-center">
         <div class="row mb-11">
            <div class="col-md-9 col-lg-7 col-xxl-6 mx-auto" data-cues="zoomIn" data-group="page-title" data-interval="-200">
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
</section>
<!-- /section -->
<section class="wrapper wrapper bg-light angled upper-end lower-end">
   <div class="container pb-14 pb-md-16">
      <div class="row">
         <div class="col-12 mt-n20">
            <?php echo $block->swiper_final; ?>
            <div class="row position-relative zindex-20" data-cue="slideInUp">
               <div class="col-xl-10 mx-auto">
                  <div class="card image-wrapper bg-full bg-image bg-overlay bg-overlay-300 text-white mt-n5 mt-lg-0 mt-lg-n50p mb-lg-n50p border-radius-lg-top" <?php echo $block->background_data; ?>>
                     <div class="card-body p-9 p-xl-10">
                        <div class="row align-items-center counter-wrapper gy-4 text-center">
                           <?php echo $block->features; ?>
                           <!--/features -->
                        </div>
                        <!--/.row -->
                     </div>
                     <!--/.card-body -->
                  </div>
                  <!--/.card -->
               </div>
               <!-- /column -->
            </div>
            <!-- /.row -->
         </div>
         <!-- /column -->
      </div>
      <!-- /.row -->
   </div>
   <!-- /.container -->

</section>
<!-- /section -->