<?php

/**
 * Process 8
 */
$block = new CW_Settings(
   $cw_settings = array(
      'subtitle' => 'How It Works',
      'patternSubtitle' => '<h2 class="fs-16 text-uppercase text-muted mb-3 %2$s">%1$s</h2>',
      'title' => 'Download the app, create your profile and <span class="text-gradient gradient-7">voilà</span>, you\'re all set!',
      'patternTitle' => '<h3 class="display-3 mb-8 px-xl-6 %2$s">%1$s</h3>',

      'background_class_default' => 'wrapper',
      'divider' => true,

      'shapes' => array(
         '<img src="' . get_template_directory_uri()  . '/dist/img/svg/doodle5.svg" class="w-15 position-absolute d-none d-lg-block" data-delay="1800" style="bottom: -60%; right: 10%" alt="">',
         '<img src="' . get_template_directory_uri()  . '/dist/img/svg/doodle6.svg" class="h-15 position-absolute d-none d-lg-block" data-delay="1800" style="top: -40%; left: -5%" alt="">'
      ),

      'swiper' => array(
         'swiper_container_class' => 'overflow-hidden',
         'image_class' => '',
         'data_thumbs' => NULL,
         'wrapper_image_class' => '',
         'image_pattern' => '<figure %5$s %9$s>%6$s<img %4$s src="%1$s" srcset="%1$s" %3$s />%7$s %10$s %11$s</figure>',
         'image_thumb_size' => 'sandbox_process_8',
         'image_demo' => '<figure class="mx-auto"><img src="' . get_template_directory_uri()  . '/dist/img/photos/devices4.png" srcset="' . get_template_directory_uri()  . '/dist/img/photos/devices4@2x.png 2x" alt=""></figure>',
         'image_big_size' => 'project_1',
         'img_link' => '/dist/img/photos/devices4.png',
         'image_shape' => 'rounded',
         'data_margin' => '30',
         'nav' => 'true',
         'nav_color' => 'nav-light',
         'nav_position' => 'nav-start',
         'dots' => 'true',
         'dots_color' => 'dots-light',
         'dots_position' => 'dots-over',
         'swiper_effect' => 'slide',
         'base_items' => '1',
         'items_xs' => '1',
         'items_sm' => '1',
         'items_md' => '1',
         'items_lg' => '1',
         'items_xl' => '1',
         'items_xxl' => '1',
         'autoplay' => 'false',
         'autoplay_time' => '1500',
         'loop' => 'false',
         'autoheight' => 'false',
      ),

      'label_demo' => '<div class="card shadow-lg position-absolute zindex-1" style="bottom: 2rem; right: 2rem;"><div class="card-body py-4 px-5"><div class="d-flex flex-row align-items-center"><div><img src="' . get_template_directory_uri() . '/dist/img/icons/lineal/check.svg" class="svg-inject icon-svg icon-svg-sm text-primary mx-auto me-3" alt="" /></div><div><h3 class="counter mb-0 text-nowrap">250+</h3><p class="fs-14 lh-sm mb-0 text-nowrap">Projects Done</p></div></div></div><!--/.card-body --></div><!--/.card -->',
      'label_pattern' => '<div class="card shadow-lg position-absolute zindex-1 %6$s" %7$s><div class="card-body py-4 px-5"><div class="d-flex flex-row align-items-center"><div>%2$s</div><div><h3 class="counter mb-0 text-nowrap">%3$s</h3><p class="fs-14 lh-sm mb-0 text-nowrap">%4$s</p>%5$s</div></div></div><!--/.card-body --></div><!--/.card -->',

      // 'column_class_1' => '',
      // 'column_class_2' => 'order-lg-2',

      'features' => '<span class="fs-60 lh-1 mb-3 fw-normal text-gradient gradient-7">01</span><h4 class="fs-20">Download Application</h4><p class="mb-0 px-xl-7">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus.</p>',
      'features_pattern' => '%2$s<h3 class="fs-20">%3$s</h3><p class="mb-3 px-xl-7">%4$s</p>%5$s'
   )
);
?>




<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
   <div class="container py-14 py-md-16">
      <div class="row text-center">
         <div class="col-md-10 col-lg-7 mx-auto position-relative">
            <?php echo $block->shapes; ?>
            <!--/shapes -->
            <?php echo $block->subtitle_first; ?>
            <!--/subtitle -->
            <?php echo $block->title; ?>
            <!--/title -->
            <?php echo $block->subtitle_second; ?>
            <!--/subtitle -->
         </div>
         <!-- /column -->
      </div>
      <!-- /.row -->
      <div class="row">
         <div class="col-xxl-11 mx-auto">
            <div class="row gy-10 gy-lg-0 text-center d-flex align-items-center">
               <div class="col-md-6 col-lg-4 mx-auto mb-n10 mb-lg-0">
                  <?php echo $block->swiper_final; ?>
                  <!--/swiper -->
               </div>
               <!-- /column -->
               <div class="w-100 d-lg-none"></div>
               <div class="col-md-6 col-lg-4 order-lg-first">
                  <div class="mb-8">
                     <?php if (isset($block->features_array[0])) {
                        echo $block->features_array[0];
                     } else { ?>
                        <span class="fs-60 lh-1 mb-3 fw-normal text-gradient gradient-7">01</span>
                        <h4 class="fs-20">Download Application</h4>
                        <p class="mb-3 px-xl-7">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus.</p>
                        <!-- /div -->
                     <?php } ?>
                     <!--/features -->
                  </div>
                  <!-- /div -->
                  <div>
                     <?php if (isset($block->features_array[1])) {
                        echo $block->features_array[1];
                     } else { ?>
                        <span class="fs-60 lh-1 mb-3 fw-normal text-gradient gradient-7">02</span>
                        <h4 class="fs-20">Quick Registration</h4>
                        <p class="mb-0 px-xl-7">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus.</p>
                     <?php } ?>
                  </div>
                  <!-- /div -->
               </div>
               <!-- /column -->
               <div class="col-md-6 col-lg-4">
                  <div class="mb-8">
                     <?php if (isset($block->features_array[2])) {
                        echo $block->features_array[2];
                     } else { ?>
                        <span class="fs-60 lh-1 mb-3 fw-normal text-gradient gradient-7">03</span>
                        <h4 class="fs-20">Track Your Spending</h4>
                        <p class="mb-0 px-xl-7">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus.</p>
                     <?php } ?>
                  </div>
                  <!-- /div -->
                  <div>
                     <?php if (isset($block->features_array[3])) {
                        echo $block->features_array[3];
                     } else { ?>
                        <span class="fs-60 lh-1 mb-3 fw-normal text-gradient gradient-7">04</span>
                        <h4 class="fs-20">Have Total Control</h4>
                        <p class="mb-0 px-xl-7">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus.</p>
                     <?php } ?>
                  </div>
                  <!-- /div -->
               </div>
               <!-- /column -->
            </div>
            <!-- /.row -->
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