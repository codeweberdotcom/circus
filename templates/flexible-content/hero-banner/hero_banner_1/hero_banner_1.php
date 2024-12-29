<?php

/**
 * Hero 1
 */

if (have_rows('breadcrumbs')) {
  while (have_rows('breadcrumbs')) {
    the_row();
    if (get_sub_field('cw_breadcrumbs_bool') == 1) {
      $br_color = get_sub_field('cw_breadcrumbs_color');
      $br_show = true;
    } else {
      $br_color = 'text-dark';
      $br_show = NULL;
    }
  }
}

$block = new CW_Settings(
  $cw_settings = array(
    'title' => 'Grow Your Business with Our Solutions.',
    'patternTitle' => '<h1 class="display-1 mb-5 mx-md-n5 mx-lg-0 %2$s">%1$s</h1>',

    'paragraph' => 'We help our clients to increase their website traffic, rankings and visibility in search results.',
    'patternParagraph' => '<p class="lead fs-lg mb-7 %2$s">%1$s</p>',

    // 'subtitle' => 'Grow Your Business with Our Solutions.',
    // 'patternSubtitle' => '<h2 class="fs-15 text-uppercase text-muted mb-3">%s</h2>',

    'buttons' => '<span><a class="btn btn-primary rounded-pill me-2">Try It For Free</a></span>',
    'buttons_pattern' => '<div class="d-flex justify-content-center justify-content-lg-start flex-wrap" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">%s</div>',

    'background_class_default' => 'wrapper bg-gradient-primary',
    //'background_data_default' => '/dist/img/photos/bg16.png',
    //'background_video_preview' => '/dist/img/photos/movie2.jpg',
    //'background_video_url' => '/dist/media/movie2.mp4',
    //'background_pattern_url' => '/dist/img/pattern.png',

    'divider' => true,
    //'divider_angles' => 'upper-start',
    //'divider_wave' => '<!-- Wave 2 --><div class="overflow-hidden"><div class="divider text-white mx-n2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 60"><path fill="currentColor" d="M0,0V60H1440V0A5771,5771,0,0,1,0,0Z"/></svg></div></div><!-- /.overflow-hidden -->',

    // 'image_pattern' => '<figure %5$s><img class="w-auto" src="%1$s" srcset="%2$s" alt="%3$s" /></figure>',
    // 'image_link' => '/dist/img/illustrations/i2.png',
    // 'image_thumb_size' => 'sandbox_hero_1',
    // 'image_big_size' => 'project_1',

    'swiper' => array(
      'swiper_container_class' => 'rounded overflow-hidden',
      'image_class' => 'w-auto',
      'wrapper_image_class' => '',
      'image_pattern' => '<figure %5$s %9$s>%6$s<img %4$s src="%1$s" srcset="%1$s" %3$s />%7$s %10$s %11$s</figure>',
      'image_thumb_size' => 'sandbox_hero_1',
      'image_demo' => '<figure><img %4$s src="' . get_template_directory_uri() . '/dist/img/illustrations/i2.png" srcset="' . get_template_directory_uri() . '/dist/img/illustrations/i2@2x.png 2x" alt="" /></figure>',
      'image_big_size' => 'project_1',
      'img_link' => '/dist/img/illustrations/i2.png',
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

    'label_demo' => '<div class="card shadow-lg position-absolute zindex-1" style="bottom: 2rem; right: 2rem;"><div class="card-body py-4 px-5"><div class="d-flex flex-row align-items-center"><div><img src="' . get_template_directory_uri() . '/dist/img/icons/lineal/check.svg" class="svg-inject icon-svg icon-svg-sm text-primary mx-auto me-3" alt="" /></div><div><h3 class="counter mb-0 text-nowrap">250+</h3><p class="fs-14 lh-sm mb-0 text-nowrap">Projects Done</p></div></div></div><!--/.card-body --></div><!--/.card -->',

    'label_pattern' => '<div class="card shadow-lg position-absolute zindex-1 %6$s" %7$s><div class="card-body py-4 px-5"><div class="d-flex flex-row align-items-center"><div>%2$s</div><div><h3 class="counter mb-0 text-nowrap">%3$s</h3><p class="fs-14 lh-sm mb-0 text-nowrap">%4$s</p>%5$s</div></div></div><!--/.card-body --></div><!--/.card -->',

    'column_class_1' => '',
    'column_class_2' => 'order-lg-2',
  )
);
?>

<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
  <?php if ($block->background_video_bool == true) { ?>
    <video poster="<?php echo $block->background_video_preview; ?>" src="<?php echo $block->background_video_url; ?>" autoplay loop playsinline muted></video>
    <div class="video-content">
    <?php } ?>
    <!-- /video background -->
    <div class="container pt-10 pt-md-14 pb-8 text-center">
      <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
        <div class="col-lg-7 <?php echo $block->column_class_1; ?>">
          <?php echo $block->swiper_final; ?>
          <!--/swiper -->
        </div>
        <!-- /column -->
        <div class="col-md-10 col-lg-5 offset-md-1 offset-lg-0 text-center text-lg-start <?php echo $block->column_class_2; ?>">
          <?php codeweber_breadcrumbs(NULL, $br_color, $br_show); ?>
          <!--/breadcrumb -->
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