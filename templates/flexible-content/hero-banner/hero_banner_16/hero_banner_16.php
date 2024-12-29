<?php

/**
 * Hero 16
 */
$block = new CW_Settings(
  $cw_settings = array(
    'title' => 'I\'m User Interface Designer & Developer.',
    'patternTitle' => '<h1 class="display-1 mb-5 %2$s">%1$s</h1>',

    'paragraph' => 'Hello! I\'m Julia, a freelance user interface designer & developer based in London. I’m very passionate about the work that I do.',
    'patternParagraph' => '<p class="lead fs-25 lh-sm mb-7 px-md-10 px-lg-0 %2$s">%1$s</p>',

    // 'subtitle' => 'Grow Your Business with Our Solutions.',
    // 'patternSubtitle' => '<h2 class="fs-15 text-uppercase text-muted mb-3">%s</h2>',

    'buttons' => '<div class="d-flex justify-content-center justify-content-lg-start flex-wrap" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">
          <span><a href="#" class="btn btn-lg btn-primary rounded-pill me-2">See My Works</a></span>
          <span><a href="#" class="btn btn-lg btn-outline-primary rounded-pill">Contact Me</a></span>
        </div>',
    'buttons_pattern' => '<div class="d-flex justify-content-center justify-content-lg-start flex-wrap" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">%s</div>',

    'background_class_default' => 'wrapper bg-gray',
    'background_data_default' => '/dist/img/photos/bg16.png',
    'background_video_preview' => '/dist/img/photos/movie2.jpg',
    'background_video_url' => '/dist/media/movie2.mp4',
    'background_pattern_url' => '/dist/img/pattern.png',

    'divider' => true,
    //'divider_angles' => 'upper-start',
    //'divider_wave' => '<!-- Wave 2 --><div class="overflow-hidden"><div class="divider text-white mx-n2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 60"><path fill="currentColor" d="M0,0V60H1440V0A5771,5771,0,0,1,0,0Z"/></svg></div></div><!-- /.overflow-hidden -->',

    // 'image_pattern' => '<figure %5$s><img class="w-auto" src="%1$s" srcset="%2$s" alt="%3$s" /></figure>',
    // 'image_link' => '/dist/img/illustrations/i6.png',
    // 'image_thumb_size' => 'sandbox_hero_1',
    // 'image_big_size' => 'project_1',
    //'shapes' => array('<div class="shape bg-dot primary rellax w-17 h-21" data-rellax-speed="1" style="top: -2.5rem; right: -2.7rem;"></div>'),

    'swiper' => array(
      'swiper_container_class' => 'w-100',
      'image_class' => '',
      'wrapper_image_class' => NULL,
      'image_pattern' => '<figure %5$s %9$s><img class="w-auto" src="%1$s" srcset="%2$s" alt="%3$s" />%7$s %10$s %11$s</figure>',
      'image_thumb_size' => 'sandbox_hero_16',
      'image_demo' => '<div class="img-mask mask-1"><img src="' . get_template_directory_uri() . '/dist/img/photos/about17.jpg" srcset="' . get_template_directory_uri() . '/dist/img/photos/about17@2x.jpg 2x" alt="" /></div><div class="card shadow-lg position-absolute" style="bottom: 10%; right: 2%;"><div class="card-body py-4 px-5"><div class="d-flex flex-row align-items-center"><div><img src="' . get_template_directory_uri() . '/dist/img/icons/lineal/check.svg" class="svg-inject icon-svg icon-svg-sm text-primary mx-auto me-3" alt="" /></div><div><h3 class="counter mb-0 text-nowrap">250+</h3><p class="fs-14 lh-sm mb-0 text-nowrap">Projects Done</p></div></div></div><!--/.card-body --></div><!--/.card -->',
      'image_big_size' => 'project_1',
      'img_link' => '/dist/img/photos/about17.jpg',
      'data_margin' => '30',
      'nav' => 'true',
      'nav_color' => NULL,
      'nav_position' => NULL,
      'dots' => 'false',
      'dots_color' => NULL,
      'dots_position' => NULL,
      'swiper_effect' => NULL,
      'base_items' => '1',
      'items_xs' => '1',
      'items_sm' => '1',
      'items_md' => '1',
      'items_lg' => '1',
      'items_xl' => '1',
      'items_xxl' => '1',
      'autoplay' => 'false',
      'autoplay_time' => '3000',
      'loop' => 'false',
      'autoheight' => 'false',
      'image_shape' => 'img-mask mask-1',
    ),

    'label_demo' => '<div class="card shadow-lg" style="bottom: 5rem; right: 5rem;"><div class="card-body py-4 px-5"><div class="d-flex flex-row align-items-center"><div><img src="' . get_template_directory_uri() . '/dist/img/icons/lineal/check.svg" class="svg-inject icon-svg icon-svg-sm text-primary mx-auto me-3" alt="" /></div><div><h3 class="counter mb-0 text-nowrap">250+</h3><p class="fs-14 lh-sm mb-0 text-nowrap">Projects Done</p></div></div></div><!--/.card-body --></div><!--/.card -->',

    'label_pattern' => '<div class="card shadow-lg position-absolute zindex-1 %6$s" %7$s><div class="card-body py-4 px-5"><div class="d-flex flex-row align-items-center"><div>%2$s</div><div><h3 class="counter mb-0 text-nowrap">%3$s</h3><p class="fs-14 lh-sm mb-0 text-nowrap">%4$s</p>%5$s</div></div></div><!--/.card-body --></div><!--/.card -->',

    'column_class_1' => '',
    'column_class_2' => 'order-lg-2 offset-lg-1',

  )
);
?>

<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
  <div class="container pt-12 pt-md-14 pb-14 pb-md-16">
    <div class="row gy-10 gy-md-13 gy-lg-0 align-items-center">
      <div class="col-md-8 col-lg-5 d-flex position-relative mx-auto <?php echo $block->column_class_1; ?>" data-group="header">
        <?php echo $block->swiper_final; ?>
        <!--/swiper -->
      </div>
      <!--/column -->
      <div class="col-lg-5 text-center text-lg-start <?php echo $block->column_class_2; ?>" data-group="page-title" data-delay="600">
        <?php echo $block->title; ?>
        <!--/title -->
        <?php echo $block->paragraph; ?>
        <!--/pargraph -->
        <?php echo $block->buttons; ?>
        <!--/buttons group -->
      </div>
      <!--/column -->
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