<?php

/**
 * Hero 5
 */
$block = new CW_Settings(
   $cw_settings = array(
      'title' => 'Staying on top of your bills never been this easy',
      'patternTitle' => '<h1 class="display-1 mb-4 %2$s">%1$s</h1>',

      'paragraph' => 'Easily achieve your saving goals. Have all your recurring and one time expenses and incomes in one place.',
      'patternParagraph' => '<p class="lead fs-lg px-xl-12 px-xxl-6 mb-7 %2$s">%1$s</p>',

      // 'subtitle' => 'Grow Your Business with Our Solutions.',
      // 'patternSubtitle' => '<h2 class="fs-15 text-uppercase text-muted mb-3">%s</h2>',

      'buttons' => '<div class="d-flex justify-content-center" data-cues="slideInDown" data-group="page-title-buttons" data-delay="600">
                  <span><a class="btn btn-primary rounded mx-1">Get Started</a></span>
                  <span><a class="btn btn-green rounded mx-1">Free Trial</a></span>
               </div>',
      'buttons_pattern' => '<div class="d-flex justify-content-center" data-cues="slideInDown" data-group="page-title-buttons" data-delay="600">%s</div>',

      'background_class_default' => 'wrapper bg-soft-primary',
      // 'background_data_default' => '/dist/img/photos/bg16.png',
      // 'background_video_preview' => '/dist/img/photos/movie2.jpg',
      // 'background_video_url' => '/dist/media/movie2.mp4',
      // 'background_pattern_url' => '/dist/img/pattern.png',

      //'divider' => true,
      //'divider_angles' => 'upper-start',
      //'divider_wave' => '<!-- Wave 2 --><div class="overflow-hidden"><div class="divider text-white mx-n2"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 60"><path fill="currentColor" d="M0,0V60H1440V0A5771,5771,0,0,1,0,0Z"/></svg></div></div><!-- /.overflow-hidden -->',

      // 'image_pattern' => '<figure %5$s><img class="img-fluid" src="%1$s" srcset="%2$s" alt="%3$s" /></figure>',
      // 'image_link' => '/dist/img/illustrations/i12.png',
      // 'image_thumb_size' => 'sandbox_hero_1',
      // 'image_big_size' => 'project_1',

      'swiper' => array(
         'swiper_container_class' => '',
         'image_class' => 'img-fluid',
         'wrapper_image_class' => '',
         'image_pattern' => '<figure class="img-fluid mx-auto rounded shadow-lg" data-cue="slideInUp"  %9$s>%6$s<img %4$s src="%1$s" srcset="%1$s" %3$s  />%7$s %10$s %11$s</figure>',
         'image_thumb_size' => 'sandbox_hero_5',
         'image_demo' => '<img class="img-fluid mx-auto rounded shadow-lg" data-cue="slideInUp" src="' . get_template_directory_uri() . '/dist/img/photos/sa1.jpg" srcset="' . get_template_directory_uri() . '/dist/img/photos/sa1@2x.jpg 2x" alt="" />',
         'image_big_size' => 'project_1',
         'img_link' => '/dist/img/photos/sa1.jpg',
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
         'image_shape' => 'rounded',

      ),

      'label_demo' => '<div class="card shadow-lg position-absolute zindex-1" style="bottom: 10%%; right: 2%%;"><div class="card-body py-4 px-5"><div class="d-flex flex-row align-items-center"><div><img src="' . get_template_directory_uri() . '/dist/img/icons/lineal/check.svg" class="svg-inject icon-svg icon-svg-sm text-primary mx-auto me-3" alt="" /></div><div><h3 class="counter mb-0 text-nowrap">250+</h3><p class="fs-14 lh-sm mb-0 text-nowrap">Projects Done</p></div></div></div><!--/.card-body --></div><!--/.card -->',

      'label_pattern' => '<div class="card shadow-lg position-absolute zindex-1 %6$s" %7$s><div class="card-body py-4 px-5"><div class="d-flex flex-row align-items-center"><div>%2$s</div><div><h3 class="counter mb-0 text-nowrap">%3$s</h3><p class="fs-14 lh-sm mb-0 text-nowrap">%4$s</p>%5$s</div></div></div><!--/.card-body --></div><!--/.card -->',

      //'column_class_1' => '',
      //'column_class_2' => 'order-lg-2',
   )
);
?>




<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
   <div class="container pt-10 pb-15 pt-md-14 pb-md-20 text-center">
      <div class="row">
         <div class="col-md-10 col-lg-8 col-xl-8 col-xxl-6 mx-auto mb-13" data-group="page-title">
            <?php echo $block->title; ?>
            <!--/title -->
            <?php echo $block->paragraph; ?>
            <!--/pargraph -->
            <?php echo $block->buttons; ?>
            <!--/buttons group -->
         </div>
      </div>
      <!-- /column -->
   </div>
   <!-- /.row -->
   </div>
   <!-- /.container -->
</section>
<!-- /section -->
<section class="wrapper bg-light">
   <div class="container pb-14 pb-md-16 mb-lg-22 mb-xl-24">
      <div class="row gx-0 mb-16 mb-mb-20">
         <div class="col-9 col-sm-10 col-lg-9 mx-auto mt-n15 mt-md-n20" data-cues data-group="images" data-delay="1500">
            <?php echo $block->swiper_final;
            if (have_rows('cw_multi_image')) {
               while (have_rows('cw_multi_image')) {
                  the_row();
                  $cw_image_1 = get_sub_field('cw_image_1');
                  if ($cw_image_1) { ?>
                     <img class="position-absolute rounded shadow-lg" data-cue="slideInRight" src="<?php echo esc_url($cw_image_1['url']); ?>" srcset="<?php echo esc_url($cw_image_1['url']); ?>" style="top: 20%; right:-10%; max-width:30%; height: auto;" alt="<?php echo esc_attr($cw_image_1['alt']); ?>" />
                  <?php } else { ?>
                     <img class="position-absolute rounded shadow-lg" data-cue="slideInRight" src="<?php echo get_template_directory_uri(); ?>/dist/img/photos/sa2.jpg" srcset="<?php echo get_template_directory_uri(); ?>/dist/img/photos/sa2@2x.jpg 2x" style="top: 20%; right:-10%; max-width:30%; height: auto;" alt="" />
                  <?php }
                  $cw_image_2 = get_sub_field('cw_image_2');
                  if ($cw_image_2) { ?>
                     <img class="position-absolute rounded shadow-lg" data-cue="slideInLeft" src="<?php echo esc_url($cw_image_2['url']); ?>" srcset="<?php echo esc_url($cw_image_2['url']); ?>" style="top: 10%; left:-10%; max-width:30%; height: auto;" alt="<?php echo esc_attr($cw_image_2['alt']); ?>" />
                  <?php } else { ?>
                     <img class="position-absolute rounded shadow-lg" data-cue="slideInLeft" src="<?php echo get_template_directory_uri(); ?>/dist/img/photos/sa3.jpg" srcset="<?php echo get_template_directory_uri(); ?>/dist/img/photos/sa3@2x.jpg 2x" style="top: 10%; left:-10%; max-width:30%; height: auto;" alt="" />
                  <?php }
                  $cw_image_3 = get_sub_field('cw_image_3');
                  if ($cw_image_3) { ?>
                     <img class="position-absolute rounded shadow-lg" data-cue="slideInLeft" src="<?php echo esc_url($cw_image_3['url']); ?>" srcset="<?php echo esc_url($cw_image_3['url']); ?>" style="bottom: 10%; left:-13%; max-width:30%; height: auto;" alt="<?php echo esc_attr($cw_image_3['alt']); ?>" />
                  <?php } else { ?>
                     <img class="position-absolute rounded shadow-lg" data-cue="slideInLeft" src="<?php echo get_template_directory_uri(); ?>/dist/img/photos/sa4.jpg" srcset="<?php echo get_template_directory_uri(); ?>/dist/img/photos/sa4@2x.jpg 2x" style="bottom: 10%; left:-13%; max-width:30%; height: auto;" alt="" />
            <?php }
               }
            } ?>
         </div>
         <!-- /column -->
      </div>
      <!-- /.row -->
   </div>
   <!-- /.container -->
</section>
<!-- /section -->