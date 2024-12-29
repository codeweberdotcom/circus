<?php

/**
 * Hero 20
 */
$block = new CW_Settings(
  $cw_settings = array(
    'title' => ' ',
    'patternTitle' => '<h1 class="display-1 fs-54 text-white mb-5 %2$s">%1$s</h1>',

    'paragraph' => 'We are a digital agency specializing in web design, mobile development and seo optimization.',
    'patternParagraph' => '<p class="lead fs-24 mb-0 mx-xxl-8 %2$s">%1$s</p>',

    // 'subtitle' => 'Grow Your Business with Our Solutions.',
    // 'patternSubtitle' => '<h2 class="fs-15 text-uppercase text-muted mb-3">%s</h2>',


    'typewriter' => 'Rapid Solutions,Innovative Thinking,Top-Notch Support',


    // 'buttons' => '<a href="#" class="btn btn-lg btn-gradient gradient-1 rounded">Explore Now</a>',
    // 'buttons_pattern' => '<div class="d-flex justify-content-center justify-content-lg-start flex-wrap" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">%s</div>',

    'background_class_default' => 'video-wrapper bg-overlay bg-overlay-gradient px-0 mt-0 min-vh-80',
    //'background_data_default' => '/dist/img/photos/movie2.jpg',
    'background_video_preview' => '/dist/img/photos/movie2.jpg',
    'background_video_url' => '/dist/media/movie2.mp4',
    //'background_pattern_url' => '/dist/img/pattern.png',

    //'divider' => true,
    //'divider_angles' => 'upper-start',
    //'divider_wave' => '<!-- Wave 2 --><div class="overflow-hidden"><div class="divider text-white mx-n2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 60"><path fill="currentColor" d="M0,0V60H1440V0A5771,5771,0,0,1,0,0Z"/></svg></div></div><!-- /.overflow-hidden -->',

    // 'image_pattern' => '<figure %5$s><img class="w-auto" src="%1$s" srcset="%2$s" alt="%3$s" /></figure>',
    // 'image_link' => '/dist/img/illustrations/i6.png',
    // 'image_thumb_size' => 'sandbox_hero_1',
    // 'image_big_size' => 'project_1',
    //'shapes' => array('<div class="shape bg-dot primary rellax w-17 h-21" data-rellax-speed="1" style="top: -2.5rem; right: -2.7rem;"></div>'),

    // 'swiper' => array(
    //   'swiper_container_class' => 'img-fluid mb-n18',
    //   'image_class' => 'img-fluid mb-n18',
    //   'wrapper_image_class' => NULL,
    //   'image_pattern' => '<figure %5$s><img src="%1$s" srcset="%2$s" alt="%3$s" /></figure>',
    //   'image_thumb_size' => 'sandbox_hero_18',
    //   'image_demo' => '<figure><img class="img-fluid mb-n18" src="' . get_template_directory_uri() . '/dist/img/illustrations/3d6.png" srcset="' . get_template_directory_uri() . '/dist/img/illustrations/3d6@2x.png 2x" alt="" data-cue="fadeIn" data-delay="300" /></figure>',
    //   'image_big_size' => 'project_1',
    //   'img_link' => '/dist/img/illustrations/3d6.png',
    //   'data_margin' => '30',
    //   'nav' => 'true',
    //   'nav_color' => NULL,
    //   'nav_position' => NULL,
    //   'dots' => 'false',
    //   'dots_color' => NULL,
    //   'dots_position' => NULL,
    //   'swiper_effect' => NULL,
    //   'base_items' => '1',
    //   'items_xs' => '1',
    //   'items_sm' => '1',
    //   'items_md' => '1',
    //   'items_lg' => '1',
    //   'items_xl' => '1',
    //   'items_xxl' => '1',
    //   'autoplay' => 'false',
    //   'autoplay_time' => '3000',
    //   'loop' => 'false',
    //   'autoheight' => 'false',
    //   'image_shape' => ''
    // ),

    // 'column_class_1' => '',
    // 'column_class_2' => '',

  )
);
?>


<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
  <?php if ($block->background_video_bool == true) { ?>
    <video poster="<?php echo $block->background_video_preview; ?>" src="<?php echo $block->background_video_url; ?>" autoplay loop playsinline muted></video>
    <div class="video-content">
    <?php } ?>
    <!-- /video background -->
    <div class="container text-center">
      <div class="row">
        <div class="col-lg-8 col-xl-6 text-center text-white mx-auto">
          <?php echo $block->title; ?>
          <!--/title -->
          <?php echo $block->paragraph; ?>
          <!--/pargraph -->
        </div>
        <!-- /column -->
      </div>
    </div>
    <!-- /.video-content -->
    </div>
    <!-- /.content-overlay -->
</section>
<!-- /section -->