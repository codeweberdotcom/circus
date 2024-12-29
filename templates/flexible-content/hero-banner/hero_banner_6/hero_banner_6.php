<?php

/**
 * Hero 6
 */
$block = new CW_Settings(
   $cw_settings = array(
      'title' => 'Get all of your steps, exercise, sleep and meds in one place.',
      'patternTitle' => '<h1 class="display-2 mb-4 mx-sm-n2 mx-md-0 %2$s">%1$s</h1>',

      'paragraph' => 'Sandbox is now available to download from both the App Store and Google Play Store.',
      'patternParagraph' => '<p class="lead fs-lg mb-7 px-md-10 px-lg-0 %2$s">%1$s</p>',

      // 'subtitle' => 'Grow Your Business with Our Solutions.',
      // 'patternSubtitle' => '<h2 class="fs-15 text-uppercase text-muted mb-3">%s</h2>',

      'buttons' => '<div class="d-flex justify-content-center justify-content-lg-start flex-wrap" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">
               <span><a class="btn btn-primary btn-icon btn-icon-start rounded me-2"><i class="uil uil-apple"></i> App Store</a></span>
               <span><a class="btn btn-green btn-icon btn-icon-start rounded"><i class="uil uil-google-play"></i> Google Play</a></span>
            </div>',
      'buttons_pattern' => '<div class="d-flex justify-content-center justify-content-lg-start flex-wrap" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">%s</div>',

      'background_class_default' => 'wrapper bg-soft-primary',
      'background_data_default' => '/dist/img/photos/bg16.png',
      'background_video_preview' => '/dist/img/photos/movie2.jpg',
      'background_video_url' => '/dist/media/movie2.mp4',
      'background_pattern_url' => '/dist/img/pattern.png',

      'divider' => true,
      //'divider_angles' => 'upper-start',
      //'divider_wave' => '<!-- Wave 2 --><div class="overflow-hidden"><div class="divider text-white mx-n2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 60"><path fill="currentColor" d="M0,0V60H1440V0A5771,5771,0,0,1,0,0Z"/></svg></div></div><!-- /.overflow-hidden -->',


      'image_pattern' => '<figure class="position-lg-absolute col-12 col-lg-10 col-xl-11 col-xxl-10 px-lg-5 px-xl-0 ms-n5 ms-sm-n8 ms-md-n10 ms-lg-0 mb-md-4 mb-lg-0 zindex-1" style="top: -1%%; left: -21%%;"  data-cue="fadeIn" %9$s>%6$s<img %4$s src="%1$s" srcset="%1$s" %3$s  />%7$s %10$s %11$s</figure>',
      'image_link' => '/dist/img/photos/devices.png',
      'image_thumb_size' => 'sandbox_hero_6',
      'image_big_size' => 'project_1',

      // 'label_demo' => '<div class="card shadow-lg position-absolute zindex-1" style="bottom: 2rem; left: -2rem;"><div class="card-body py-4 px-5"><div class="d-flex flex-row align-items-center"><div><img src="' . get_template_directory_uri() . '/dist/img/icons/lineal/check.svg" class="svg-inject icon-svg icon-svg-sm text-primary mx-auto me-3" alt="" /></div><div><h3 class="counter mb-0 text-nowrap">250+</h3><p class="fs-14 lh-sm mb-0 text-nowrap">Projects Done</p></div></div></div><!--/.card-body --></div><!--/.card -->',

      // 'label_pattern' => '<div class="card shadow-lg position-absolute zindex-1 %6$s" %7$s><div class="card-body py-4 px-5"><div class="d-flex flex-row align-items-center"><div>%2$s</div><div><h3 class="counter mb-0 text-nowrap">%3$s</h3><p class="fs-14 lh-sm mb-0 text-nowrap">%4$s</p>%5$s</div></div></div><!--/.card-body --></div><!--/.card -->',

      // 'column_class_1' => '',
      // 'column_class_2' => 'order-lg-2',
   )
);
?>



<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>

   <div class="container pt-5 pb-15 py-lg-17 py-xl-19 pb-xl-20 position-relative">

      <?php echo $block->images; ?>
      <!--/swiper -->
      <div class="row gx-0 align-items-center">
         <div class="col-md-10 offset-md-1 col-lg-5 offset-lg-7 offset-xxl-6 ps-xxl-12 mt-md-n9 text-center text-lg-start" data-group="page-title" data-delay="600">

            <?php echo $block->title; ?>
            <!--/title -->

            <?php echo $block->paragraph; ?>
            <!--/pargraph -->

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