<?php

/**
 * Process 3
 */
$block = new CW_Settings(
   $cw_settings = array(
      'subtitle' => 'How It Works',
      'patternSubtitle' => '<h2 class="fs-15 text-uppercase text-muted mb-3 %2$s">%1$s</div>',
      'title' => 'Download the app, create your profile and voilà, you\'re all set!',
      'patternTitle' => '<h3 class="display-4 mb-5 %2$s">%1$s</h2>',
      'paragraph' => 'Donec ullamcorper nulla non metus auctor fringilla. Cras mattis consectetur purus sit amet fermentum. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Nulla vitae elit libero. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo.',
      'patternParagraph' => '<p class="mb-8 %2$s">%1$s</p>',

      'background_class_default' => 'wrapper bg-light',
      //'background_data_default' => '/dist/img/photos/bg16.png',
      //'background_video_preview' => '/dist/img/photos/movie2.jpg',
      //'background_video_url' => '/dist/media/movie2.mp4',
      //'background_pattern_url' => '/dist/img/pattern.png',

      'divider' => true,
      //'divider_angles' => 'upper-start',
      //'divider_wave' => '<!-- Wave 2 --><div class="overflow-hidden"><div class="divider text-white mx-n2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 60"><path fill="currentColor" d="M0,0V60H1440V0A5771,5771,0,0,1,0,0Z"/></svg></div></div><!-- /.overflow-hidden -->',

      'swiper' => array(
         'swiper_container_class' => 'overflow-hidden rounded',
         'image_class' => 'rounded',
         'wrapper_image_class' => 'rounded',
         'swiper-slide_class' => NULL,
         'image_pattern' => '<figure %5$s %9$s><img %4$s src="%1$s" srcset="%2$s" alt="%3$s" />%7$s %10$s %11$s</figure>',
         'image_thumb_size' => 'process_3',
         'image_demo' => '<figure><img src="' . get_template_directory_uri() . '/dist/img/photos/device.png" srcset="' . get_template_directory_uri() . '/dist/img/photos/device@2x.png 2x" alt="" /></figure>',
         'image_big_size' => 'project_1',
         'img_link' => '/dist/img/photos/device.png',

         'data_margin' => '30',
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
         'autoplay_time' => '3000',
         'loop' => 'loop',

         'autoheight' => 'false',
         'image_shape' => 'rounded'
      ),

      'label_demo' => '<div class="card shadow-lg position-absolute zindex-1" style="bottom: 2rem; right: 2rem;"><div class="card-body py-4 px-5"><div class="d-flex flex-row align-items-center"><div><img src="' . get_template_directory_uri() . '/dist/img/icons/lineal/check.svg" class="svg-inject icon-svg icon-svg-sm text-primary mx-auto me-3" alt="" /></div><div><h3 class="counter mb-0 text-nowrap">250+</h3><p class="fs-14 lh-sm mb-0 text-nowrap">Projects Done</p></div></div></div><!--/.card-body --></div><!--/.card -->',

      'label_pattern' => '<div class="card shadow-lg position-absolute zindex-1 %6$s" %7$s><div class="card-body py-4 px-5"><div class="d-flex flex-row align-items-center"><div>%2$s</div><div><h3 class="counter mb-0 text-nowrap">%3$s</h3><p class="fs-14 lh-sm mb-0 text-nowrap">%4$s</p>%5$s</div></div></div><!--/.card-body --></div><!--/.card -->',

      'column_class_1' => '',
      'column_class_2' => 'order-lg-2',

      'features' => '<div class="col-md-4"> <img src="' . get_template_directory_uri() . '/dist/img/icons/lineal/cloud-computing.svg" class="svg-inject icon-svg icon-svg-sm text-green mb-3" alt="" /><h4 class="mb-1">1. Download</h4><p class="mb-0">Nulla vitae elit libero elit non porta eget.</p></div><!--/column -->',

      'features_pattern' => '<div class="col-md-4">%2$s<h4 class="mb-1">%3$s</h4><p class="mb-0">%4$s</p></div><!--/column -->',

      'features_style_icon' => 'mb-3'
   )
);
?>

<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
   <?php if ($block->background_video_bool == true) { ?>
      <video poster="<?php echo $block->background_video_preview; ?>" src="<?php echo $block->background_video_url; ?>" autoplay loop playsinline muted></video>
      <div class="video-content">
      <?php } ?>
      <!-- /video background -->
      <div class="container pt-9 pt-lg-11 pb-14 pb-lg-6">
         <div class="row gx-lg-8 gx-xl-10 align-items-center">
            <div class="col-lg-6 <?php echo $block->column_class_1; ?>">
               <?php echo $block->swiper_final; ?>
               <!--/swiper -->
            </div>
            <!-- /column -->
            <div class="col-lg-6 <?php echo $block->column_class_2; ?>">
               <?php echo $block->subtitle_first; ?>
               <!--/subtitle -->
               <?php echo $block->title; ?>
               <!--/title -->
               <?php echo $block->subtitle_second; ?>
               <!--/subtitle -->
               <?php echo $block->paragraph; ?>
               <!--/pargraph -->
               <div class="row gy-6 gx-xxl-8 process-wrapper">
                  <?php echo $block->features; ?>
                  <!--/features -->
               </div>
               <!--/.row -->
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