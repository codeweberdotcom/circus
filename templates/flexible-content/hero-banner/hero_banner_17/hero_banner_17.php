<?php

/**
 * Hero 17
 */
$block = new CW_Settings(
   $cw_settings = array(
      'title' => 'We bring rapid solutions for your business.',
      'patternTitle' => '<h1 class="display-1 fs-58 mb-7 %2$s">%1$s</h1>',

      //'paragraph' => 'Hello! This is Sandbox',
      //'patternParagraph' => '<p class="h2 fs-16 text-uppercase ls-xl text-dark mb-4">%s</p>',

      'subtitle' => 'Hello! This is Sandbox',
      'patternSubtitle' => '<p class="h2 fs-16 text-uppercase ls-xl text-dark mb-4 %2$s">%1$s</p>',

      'buttons' => '<div class="d-flex justify-content-center" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">
               <span><a href="#" class="btn btn-lg btn-primary rounded-pill me-2">Explore Now</a></span>
               <span><a href="#" class="btn btn-lg btn-outline-primary rounded-pill">Contact Us</a></span>
            </div>',
      'buttons_pattern' => '<div class="d-flex justify-content-center" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">%s</div>',

      'background_class_default' => 'wrapper bg-gray',
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
      //'shapes' => array('<div class="shape bg-dot primary rellax w-17 h-21" data-rellax-speed="1" style="top: -2.5rem; right: -2.7rem;"></div>'),

      'swiper' => array(
         'swiper_container_class' => '',
         'image_class' => '',
         'wrapper_image_class' => NULL,
         'image_pattern' => '<figure %5$s %9$s>%6$s<img %4$s src="%1$s" srcset="%1$s" %3$s />%7$s %10$s %11$s</figure>',
         'image_thumb_size' => 'sandbox_hero_17',
         'image_demo' => '<figure class="" style="bottom: 0; left: 0; z-index: 2;"><img src="' . get_template_directory_uri() . '/dist/img/photos/bg11.jpg" srcset="" alt="" /></figure>',
         'image_big_size' => 'project_1',
         'img_link' => '/dist/img/photos/bg11.jpg',
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
         'image_shape' => ''
      ),

      //'column_class_1' => '',
      //'column_class_2' => '',

   )
);
?>

<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?> px-0 overflow-hidden" <?php echo $block->background_data; ?>>
   <div class="container pt-12 pt-md-16 text-center">
      <div class="row">
         <div class="col-lg-8 col-xxl-7 mx-auto text-center" data-group="page-title" data-delay="600">
            <?php echo $block->subtitle_first; ?>
            <!--/subtitle -->
            <?php echo $block->title; ?>
            <!--/title -->
            <?php echo $block->subtitle_second; ?>
            <!--/subtitle -->
            <?php echo $block->buttons; ?>
            <!--/buttons group -->
         </div>
         <!--/column -->
      </div>
      <!-- /.row -->
   </div>
   <!-- /.container -->
   <?php echo $block->swiper_final; ?>
   <!--/swiper -->
</section>
<!-- /section -->