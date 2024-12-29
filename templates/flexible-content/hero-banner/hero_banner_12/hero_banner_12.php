<?php

/**
 * Hero 12
 */
$block = new CW_Settings(
  $cw_settings = array(
    'title' => 'Creative. Smart. Awesome.',
    'patternTitle' => '<h1 class="display-1 mb-5 mx-md-n5 mx-lg-0 %2$s">%1$s</h1>',

    'paragraph' => 'We specialize in web, mobile and identity design. We love to turn ideas into beautiful things.',
    'patternParagraph' => '<p class="lead fs-lg mb-7 %2$s">%1$s</p>',

    // 'subtitle' => 'Grow Your Business with Our Solutions.',
    // 'patternSubtitle' => '<h2 class="fs-15 text-uppercase text-muted mb-3">%s</h2>',

    'buttons' => '<div class="d-flex justify-content-center justify-content-lg-start flex-wrap" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">
    <span><a class="btn btn-primary rounded me-2">See Projects</a></span><span><a class="btn btn-yellow rounded">Learn More</a></span></div>',
    'buttons_pattern' => '<div class="d-flex justify-content-center justify-content-lg-start flex-wrap" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">%s</div>',

    'background_class_default' => 'wrapper bg-soft-primary',
    'background_data_default' => '/dist/img/photos/bg16.png',
    'background_video_preview' => '/dist/img/photos/movie2.jpg',
    'background_video_url' => '/dist/media/movie2.mp4',
    'background_pattern_url' => '/dist/img/pattern.png',

    //'divider' => true,
    //'divider_angles' => 'upper-start',
    //'divider_wave' => '<!-- Wave 2 --><div class="overflow-hidden"><div class="divider text-white mx-n2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 60"><path fill="currentColor" d="M0,0V60H1440V0A5771,5771,0,0,1,0,0Z"/></svg></div></div><!-- /.overflow-hidden -->',

    // 'image_pattern' => '<figure %5$s><img class="w-auto" src="%1$s" srcset="%2$s" alt="%3$s" /></figure>',
    // 'image_link' => '/dist/img/illustrations/i6.png',
    // 'image_thumb_size' => 'sandbox_hero_1',
    // 'image_big_size' => 'project_1',

    'swiper' => array(
      'swiper_container_class' => 'rounded',
      'image_class' => 'rounded',
      'wrapper_image_class' => 'rounded',
      'image_pattern' => '<figure %5$s %9$s>%6$s<img %4$s src="%1$s" srcset="%1$s" %3$s />%7$s %10$s %11$s</figure>',
      'image_thumb_size' => 'sandbox_hero_1',
      'image_demo' => '<figure><img class="w-auto" src="' . get_template_directory_uri() . '/dist/img/illustrations/i6.png" srcset="' . get_template_directory_uri() . '/dist/img/illustrations/i6@2x.png 2x" alt="" /></figure>',
      'image_big_size' => 'project_1',
      'img_link' => '/dist/img/illustrations/i6.png',
      'image_shape' => 'rounded',
      'data_margin' => '30',
      'nav' => 'true',
      'nav_color' => 'nav-dark',
      'nav_position' => 'nav-bottom',
      'dots' => 'true',
      'dots_color' => 'dots-dark',
      'dots_position' => 'dots-start',
      'swiper_effect' => 'fade',
      'base_items' => '1',
      'items_xs' => '1',
      'items_sm' => '1',
      'items_md' => '1',
      'items_lg' => '1',
      'items_xl' => '1',
      'items_xxl' => '1',
      'autoplay' => 'false',
      'autoplay_time' => '500',
      'loop' => 'false',
      'autoheight' => 'false',

      'label_demo' => '<div class="card shadow-lg" style="bottom: 5rem; right: 5rem;"><div class="card-body py-4 px-5"><div class="d-flex flex-row align-items-center"><div><img src="' . get_template_directory_uri() . '/dist/img/icons/lineal/check.svg" class="svg-inject icon-svg icon-svg-sm text-primary mx-auto me-3" alt="" /></div><div><h3 class="counter mb-0 text-nowrap">250+</h3><p class="fs-14 lh-sm mb-0 text-nowrap">Projects Done</p></div></div></div><!--/.card-body --></div><!--/.card -->',

      'label_pattern' => '<div class="card shadow-lg position-absolute zindex-1 %6$s" %7$s><div class="card-body py-4 px-5"><div class="d-flex flex-row align-items-center"><div>%2$s</div><div><h3 class="counter mb-0 text-nowrap">%3$s</h3><p class="fs-14 lh-sm mb-0 text-nowrap">%4$s</p>%5$s</div></div></div><!--/.card-body --></div><!--/.card -->'
    ),

    'column_class_1' => 'order-2 order-lg-0',
    'column_class_2' => '',

    'features' => '<div class="col-md-6 col-xl-3"><div class="card shadow-lg card-border-bottom border-soft-yellow"><div class="card-body"><img src="' . get_template_directory_uri() . '/dist/img/icons/lineal/search-2.svg" class="svg-inject icon-svg icon-svg-md text-yellow mb-3" alt="" /><h4>SEO Services</h4><p class="mb-2">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus cras justo.</p><a href="#" class="more hover link-yellow">Learn More</a></div><!--/.card-body --></div><!--/.card --></div><!--/column -->',

    'features_pattern' => '<div class="col-md-6 col-xl-3 %1$s"><div class="card shadow-lg %6$s"><div class="card-body">%2$s<h4>%3$s</h4><p class="mb-5">%4$s</p>%5$s</div><!--/.card-body --></div><!--/.card --></div><!--/column -->'
  )
);
?>



<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
  <div class="container pt-10 pb-15 pt-md-14 pb-md-20">
    <div class="row gx-lg-8 gx-xl-12 gy-10 mb-5 align-items-center">
      <div class="col-md-10 offset-md-1 offset-lg-0 col-lg-5 text-center text-lg-start <?php echo $block->column_class_1; ?>" data-group="page-title" data-delay="600">
        <?php echo $block->title; ?>
        <!--/title -->
        <?php echo $block->paragraph; ?>
        <!--/pargraph -->
        <?php echo $block->buttons; ?>
        <!--/buttons group -->
      </div>
      <!-- /column -->
      <div class="col-lg-7 <?php echo $block->column_class_2; ?>" data-cue="slideInDown">
        <?php echo $block->swiper_final; ?>
        <!--/swiper -->
      </div>
      <!-- /column -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</section>
<!-- /section -->
<section class="wrapper bg-light">
  <div class="container pt-14 pt-md-16 pb-9 pb-md-11 pb-md-17">
    <div class="row gx-md-5 gy-5 mt-n18 mt-md-n21 mb-14 mb-md-17">
      <?php echo $block->features; ?>
      <!--/features -->
    </div>
    <!--/.row -->
  </div>
  <!-- /.container -->
</section>
<!-- /section -->