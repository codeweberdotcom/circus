<?php

/**
 * Hero 14
 */
$block = new CW_Settings(
   $cw_settings = array(
      'title' => 'We bring rapid solutions for your business.',
      'patternTitle' => '<h1 class="display-1 fs-66 lh-xxs mb-0 %2$s">%1$s</h1>',

      'paragraph' => 'We are an award winning branding design agency that strongly believes in the power of creative ideas.',
      'patternParagraph' => '<p class="lead fs-25 my-3 %2$s">%1$s</p>',

      'buttons' => '<a href="#" class="more hover">Learn More</a>',
      'buttons_pattern' => '<div class="d-flex justify-content-center justify-content-lg-start flex-wrap" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">%s</div>',

      'background_class_default' => 'wrapper bg-soft-primary',
      'background_data_default' => '/dist/img/photos/bg16.png',
      'background_video_preview' => '/dist/img/photos/movie2.jpg',
      'background_video_url' => '/dist/media/movie2.mp4',
      'background_pattern_url' => '/dist/img/pattern.png',

      'divider' => true,

      'shapes' => array('<div class="shape bg-dot primary rellax w-17 h-21" data-rellax-speed="1" style="top: -2.5rem; right: -2.7rem;"></div>'),

      'swiper' => array(
         'swiper_container_class' => 'rounded mb-md-n20',
         'image_class' => 'rounded mb-md-n20',
         'wrapper_image_class' => 'rounded mb-md-n20',
         'image_pattern' => '<figure %5$s %9$s><img src="%1$s" srcset="%2$s" alt="%3$s" />%7$s %10$s %11$s</figure>',
         'image_thumb_size' => 'sandbox_hero_14',
         'image_demo' => '<figure class="rounded mb-md-n20"><img src="' . get_template_directory_uri() . '/dist/img/photos/about18.jpg" srcset="' . get_template_directory_uri() . '/dist/img/photos/about18@2x.jpg 2x" alt="" /></figure>',
         'image_big_size' => 'project_1',
         'img_link' => '/dist/img/photos/about18.jpg',
         'data_margin' => '30',
         'nav' => 'true',
         'nav_color' => '',
         'nav_position' => '',
         'dots' => 'true',
         'dots_color' => '',
         'dots_position' => '',
         'swiper_effect' => '',
         'base_items' => '1',
         'items_xs' => '1',
         'items_sm' => '1',
         'items_md' => '1',
         'items_lg' => '1',
         'items_xl' => '1',
         'items_xxl' => '1',
         'autoplay' => 'true',
         'autoplay_time' => '500',
         'loop' => 'true',
         'autoheight' => 'false',
         'image_shape' => 'rounded'
      ),


   )
);
?>


<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
   <div class="container pt-10 pt-md-14 pb-14 pb-md-0">
      <div class="row gx-md-8 gx-lg-12 gy-3 gy-lg-0 mb-13">
         <div class="col-lg-6">
            <?php echo $block->title; ?>
            <!--/title -->
         </div>
         <!-- /column -->
         <div class="col-lg-6">
            <?php echo $block->paragraph; ?>
            <!--/pargraph -->
            <?php echo $block->buttons; ?>
            <!--/buttons group -->
         </div>
         <!-- /column -->
      </div>
      <!-- /.row -->
      <div class="position-relative">
         <?php echo $block->shapes; ?>
         <!--/.shape -->
         <?php echo $block->swiper_final; ?>
      </div>
   </div>
   <!-- /.container -->
   <?php if ($block->divider_wave) {
      echo $block->divider_wave;
   } ?>
   <!-- /divider -->
</section>
<!-- /section -->