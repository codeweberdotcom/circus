<?php

/**
 * Hero 23
 */

$block1 = new CW_Settings(
   $cw_settings = array(
      'title' => 'couples & wedding photographer',
      'patternTitle' => '<h1 class="display-1 fs-60 text-white  animate__animated animate__zoomIn animate__delay-2s %2$s">%1$s</h1>',

      'subtitle' => 'I\'m Julia Sandbox',
      'patternSubtitle' => '<div class="fs-19 text-uppercase ls-xl text-white mb-3 animate__animated animate__zoomIn animate__delay-1s %2$s">%1$s</div>',

      'buttons_pattern' => '<div class="d-flex justify-content-center mt-5 animate__animated animate__zoomIn animate__delay-3s">%s</div>',
      'buttons' => ' <a href="' . get_template_directory_uri() . '/dist/media/movie.mp4" class="btn btn-circle btn-white btn-play ripple mx-auto mt-5 animate__animated animate__zoomIn animate__delay-3s" data-glightbox><i class="icn-caret-right"></i></a>',

   )
);

$block = new CW_Settings(
   $cw_settings = array(
      'background_class_default' => 'wrapper bg-dark',
      'swiper' => array(
         'swiper_first_slide' => 'true', // нет
         'swiper_container_class' => 'swiper-thumbs-container swiper-fullscreen nav-dark',
         'swiper_container_data' => '',
         'swiper_container_content' => '<div class="swiper-static"><div class="container h-100 d-flex align-items-center justify-content-center"><div class="row"><div class="col-lg-8 mx-auto mt-n10 text-center">' . $block1->subtitle . $block1->title . $block1->buttons . '</div><!-- /column --></div><!-- /.row --></div><!-- /.container --></div><!-- /.swiper-static -->',
         'image_class' => '',
         'data_thumbs' => 'true',
         'wrapper_image_class' => '',
         'swiper-slide_class' => 'bg-overlay bg-overlay-400 bg-dark bg-image', // нету
         'swiper-slide_data' => 'data-image-src="' . get_template_directory_uri() . '/dist/img/photos/bg28.jpg"', // нету
         'image_pattern' => '<figure %5$s %9$s><img class="w-auto" src="%1$s" srcset="%2$s" alt="%3$s" />%7$s %10$s %11$s</figure>',
         'image_thumb_size' => 'cw_icon_sm',
         'image_demo' => '<figure><img %4$s src="' . get_template_directory_uri() . '/dist/img/illustrations/i2.png" srcset="' . get_template_directory_uri() . '/dist/img/illustrations/i2@2x.png 2x" alt="" /></figure>',
         'image_big_size' => 'sandbox_hero_15',
         'img_link' => '/dist/img/illustrations/i2.png',
         'data_margin' => '0',
         'nav' => 'true',
         'nav_color' => 'nav-light',
         'nav_position' => 'nav-start',
         'dots' => 'false',
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
         'autoplay_time' => '5000',
         'loop' => 'loop',
         'autoheight' => 'false',
         'image_shape' => 'rounded'
      ),
   )
);
?>

<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
   <?php echo $block->swiper_final; ?>
</section>
<!-- /section -->