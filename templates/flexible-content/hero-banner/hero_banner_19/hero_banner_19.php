<?php

/**
 * Hero 19
 */
$block = new CW_Settings(
  $cw_settings = array(
    'title' => 'We bring solutions to make life <span class="underline-3 style-2 yellow">easier</span>',
    'patternTitle' => '<h1 class="display-1 text-white fs-60 mb-4 px-md-15 px-lg-0 %2$s">%1$s</h1>',

    'paragraph' => 'We are a creative company that focuses on long term relationships with customers..',
    'patternParagraph' => '<p class="lead fs-24 text-white lh-sm mb-7 mx-md-13 mx-lg-10 %2$s">%1$s</p>',

    // 'subtitle' => 'Grow Your Business with Our Solutions.',
    // 'patternSubtitle' => '<h2 class="fs-15 text-uppercase text-muted mb-3">%s</h2>',

    'buttons' => '<div><a class="btn btn-white rounded mb-10 mb-xxl-5">Read More</a></div>',
    'buttons_pattern' => '<div class="d-flex justify-content-center justify-content-lg-start flex-wrap" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">%s</div>',

    'background_class_default' => 'wrapper image-wrapper bg-image bg-overlay bg-overlay-300',
    'background_data_default' => '/dist/img/photos/bg16.png',
    'background_video_preview' => '/dist/img/photos/movie2.jpg',
    'background_video_url' => '/dist/media/movie2.mp4',
    'background_pattern_url' => '/dist/img/pattern.png',

    'divider' => 'true',
    //'divider_angles' => 'upper-start',
    'divider_wave' => '<!-- Wave 2 --><div class="overflow-hidden"><div class="divider text-white mx-n2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 60"><path fill="currentColor" d="M0,0V60H1440V0A5771,5771,0,0,1,0,0Z"/></svg></div></div><!-- /.overflow-hidden -->',

    // 'image_pattern' => '<figure %5$s><img class="w-auto" src="%1$s" srcset="%2$s" alt="%3$s" /></figure>',
    // 'image_link' => '/dist/img/illustrations/i6.png',
    // 'image_thumb_size' => 'sandbox_hero_1',
    // 'image_big_size' => 'project_1',

    'swiper' => array(
      'swiper_container_class' => 'rounded',
      'image_class' => 'rounded',
      'wrapper_image_class' => 'rounded',
      'image_pattern' => '<figure %5$s><img class="w-auto" src="%1$s" srcset="%2$s" alt="%3$s" /></figure>',
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
    ),

    'column_class_1' => 'order-2 order-lg-0',
    'column_class_2' => '',

    'features' => '<div class="col-md-6 col-xl-3"><div class="card shadow-lg"><div class="card-body">
    <img src="' . get_template_directory_uri() . '/dist/img/icons/solid/edit.svg" class="svg-inject icon-svg icon-svg-sm solid-mono text-fuchsia mb-3" alt="" /><h4>Content Marketing</h4>
    <p class="mb-2">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus cras justo.</p>
    <a href="#" class="more hover link-fuchsia">Learn More</a></div><!--/.card-body --></div><!--/.card --></div><!--/column -->',

    'features_pattern' => '<div class="col-md-6 col-xl-3 %1$s"><div class="card shadow-lg %6$s"><div class="card-body">%2$s<h4>%3$s</h4><p class="mb-5">%4$s</p>%5$s</div><!--/.card-body --></div><!--/.card --></div><!--/column -->',
  )
);
?>



<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
  <div class="container pt-17 pb-19 pt-md-18 pb-md-17 text-center">
    <div class="row">
      <div class="col-lg-8 col-xl-7 col-xxl-6 mx-auto" data-group="page-title">
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
<section class="wrapper bg-light">
  <div class="container pb-15 pb-md-17">
    <div class="row gx-md-5 gy-5 mt-n19">
      <?php echo $block->features; ?>
      <!--/features -->
    </div>
    <!--/.row -->
  </div>
  <!-- /.container -->
</section>
<!-- /section -->