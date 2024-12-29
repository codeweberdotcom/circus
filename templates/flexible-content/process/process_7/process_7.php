<?php

/**
 * Process 7
 */
$block = new CW_Settings(
   $cw_settings = array(
      'subtitle' => 'How It Works?',
      'patternSubtitle' => '<h2 class="fs-16 text-uppercase text-muted mb-3 %2$s">%1$s</h2>',
      'title' => 'Find out everything about creating a business model.',
      'patternTitle' => '<h3 class="display-4 mb-6 %2$s">%1$s</h3>',

      'background_class_default' => 'wrapper bg-light',
      'divider' => true,

      'swiper' => array(
         'swiper_container_class' => 'overflow-hidden rounded',
         'image_class' => 'rounded',
         'wrapper_image_class' => 'rounded',
         'swiper-slide_class' => NULL,
         'image_pattern' => '<figure %5$s %9$s><img %4$s src="%1$s" srcset="%2$s" alt="%3$s" />%7$s %10$s %11$s</figure>',
         'image_thumb_size' => 'sandbox_faq_1',
         'image_demo' => '<figure><img class="w-auto" src="' . get_template_directory_uri()  . '/dist/img/illustrations/i9.png" srcset="' . get_template_directory_uri()  . '/dist/img/illustrations/i9@2x.png 2x" alt="" /></figure>',
         'image_big_size' => 'project_1',
         'img_link' => '/dist/img/illustrations/i9.png',
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

      'features' => ' <div class="col-md-6"><h4><span class="text-primary">1.</span> Creative Ideas</h4><p class="mb-0">Nulla vitae elit libero a augue donec id elit non mi porta.</p></div>',
      'features_pattern' => '<div class="col-md-6"><h4><span class="text-primary">%8$s</span> %3$s</h4><p class="mb-0">%4$s</p></div>'
   )
);
?>

<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
   <?php if ($block->background_video_bool == true) { ?>
      <video poster="<?php echo $block->background_video_preview; ?>" src="<?php echo $block->background_video_url; ?>" autoplay loop playsinline muted></video>
      <div class="video-content">
      <?php } ?>
      <!-- /video background -->
      <div class="container py-14 py-md-16">
         <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
            <div class="col-lg-7 <?php echo $block->column_class_1; ?>">
               <?php echo $block->swiper_final; ?>
               <!--/swiper -->
            </div>
            <!--/column -->
            <div class="col-lg-5 <?php echo $block->column_class_2; ?>">
               <?php echo $block->subtitle_first; ?>
               <!--/subtitle -->
               <?php echo $block->title; ?>
               <!--/title -->
               <?php echo $block->subtitle_second; ?>
               <!--/subtitle -->
               <div class="row gy-4">
                  <?php echo $block->features; ?>
                  <!--/features -->
               </div>
               <!--/.row -->
            </div>
            <!--/column -->
         </div>
         <!--/.row -->
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