<?php

/**
 * Facts 100_2
 */

$argss = array(
   'posts_per_page' => 10,
   'post_type' => 'testimonials',
);

$testimonials = get_sub_field('posts');
if ($testimonials) {
   $cw_post_ids = array();
   foreach ($testimonials as $post_ids) {
      $cw_post_ids[] = $post_ids;
   }
   $cw_post_idsd = implode(',', $testimonials);
   $argss['post__in'] = $cw_post_ids;
}

$bg_image = '' . get_template_directory_uri() . '/dist/img/photos/tm1.jpg';

if (get_sub_field('cw_image_bg')) {
   $bg_image = get_sub_field('cw_image_bg');
}

$type_field = get_sub_field('select_type');

$block = new CW_Settings(
   $cw_settings = array(
      'subtitle' => 'Company Facts',
      'patternSubtitle' => '<h2 class="fs-16 text-uppercase text-line text-primary mb-3 %2$s">%1$s</h2>',

      'title' => 'We are proud of our works',
      'patternTitle' => '<h3 class="display-4 mb-0 pe-xxl-15 %2$s">%1$s</h3>',

      'background_class_default' => 'wrapper bg-soft-primary',

      'divider' => true,

      'features' => '<div class="col-md-4"><div class="counter counter-lg h3" style="visibility: visible;">1000+</div><p>Completed Projects</p></div><!--/column -->',
      'features_pattern' => '<div class="col-md-4 %1$s">%2$s<div class="h3 counter counter-lg" style="visibility: visible;">%3$s</div><p">%4$s</p></div><!--/column -->',

      'shapes' => array('<div class="shape rounded-circle bg-line primary rellax w-18 h-18" data-rellax-speed="1" style="top: -2rem; right: -2.7rem; z-index:0;"></div>', '<div class="shape rounded-circle bg-soft-primary rellax w-18 h-18" data-rellax-speed="1" style="bottom: -1rem; left: -3rem; z-index:0;"></div>'),

   )

);
?>

<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
   <div class="container py-14 pt-md-17 pb-md-21">
      <div class="row gx-lg-8 gx-xl-12 gy-10 gy-lg-0 mb-2 align-items-end">
         <div class="col-lg-6">
            <?php echo $block->subtitle_first; ?>
            <!--/subtitle -->
            <?php echo $block->title; ?>
            <!--/title -->
            <?php echo $block->subtitle_second; ?>
            <!--/subtitle -->
         </div>
         <!-- /column -->
         <div class="col-lg-6 mt-lg-2">
            <div class="row align-items-center counter-wrapper gy-6 text-center">
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
   <?php if ($block->divider_wave) {
      echo $block->divider_wave;
   } ?>
   <!-- /divider -->
</section>
<!-- /section -->
<section class="wrapper bg-light">
   <div class="container py-16 py-md-18 position-relative">
      <div class="position-relative mt-n18 mt-md-n23">
         <?php echo $block->shapes; ?>
         <!--/shape -->
         <div data-cue="slideInDown" class="card shadow-lg">
            <div class="row gx-0">
               <div class="col-lg-6 image-wrapper bg-image bg-cover rounded-top rounded-lg-start" data-image-src="<?php echo $bg_image; ?>">
               </div>
               <!--/column -->
               <div class="col-lg-6">
                  <div class="p-10 p-md-11 p-lg-13">
                     <?php
                     $query = new WP_Query($argss);
                     if ($query->have_posts()) { ?>
                        <div class="swiper-container dots-closer mb-6" data-margin="30" data-dots="true">
                           <div class="swiper">
                              <div class="swiper-wrapper">
                                 <?php
                                 while ($query->have_posts()) {
                                    $query->the_post();
                                    $post_id =  get_the_id();
                                    if (have_rows('testimonials_post_field', $post_id)) :
                                       while (have_rows('testimonials_post_field', $post_id)) : the_row();
                                          if (get_sub_field('status') == 1) {
                                             if (get_sub_field('name')) {
                                                $name = get_sub_field('name');
                                             } else {
                                                $name = NULL;
                                             }

                                             $link = '/testimonials/';
                                             if (get_sub_field('testimonial')) {
                                                $testimonial = ReadMore(get_sub_field('testimonial'), $link, 200);
                                             } else {
                                                $testimonial = NULL;
                                             }

                                             if ($type_field == 'Job') {
                                                if (get_sub_field('job_title')) {
                                                   $job_title = get_sub_field('job_title');
                                                } else {
                                                   $job_title  = NULL;
                                                }
                                             } elseif ($type_field == 'City') {
                                                if (get_sub_field('town')) {
                                                   $job_title = get_sub_field('town');
                                                } else {
                                                   $job_title  = NULL;
                                                }
                                             } elseif ($type_field == 'Company name') {
                                                if (get_sub_field('company')) {
                                                   $job_title = get_sub_field('company');
                                                } else {
                                                   $job_title  = NULL;
                                                }
                                             } else {
                                                $job_title  = NULL;
                                             } ?>
                                             <div class="swiper-slide">
                                                <blockquote class="icon icon-top fs-lg text-center">
                                                   <p>“<?php echo $testimonial; ?>”</p>
                                                   <div class="blockquote-details justify-content-center text-center">
                                                      <div class="info ps-0">
                                                         <div class="mb-1 h5"><?php echo $name ?></div>
                                                         <?php if ($job_title) { ?>
                                                            <p class="mb-0"><?php echo $job_title ?></p>
                                                         <?php } ?>
                                                      </div>
                                                   </div>
                                                </blockquote>
                                             </div>
                                             <!--/.swiper-slide -->
                                 <?php }
                                       endwhile;
                                    endif;
                                 }
                                 ?>
                              </div>
                              <!--/.swiper-wrapper -->
                           </div>
                           <!-- /.swiper -->
                        </div>
                        <!-- /.swiper-container -->
                     <?php
                     }
                     wp_reset_postdata();
                     ?>
                  </div>
                  <!--/div -->
               </div>
               <!--/column -->
            </div>
            <!--/.row -->
         </div>
         <!-- /.card -->
      </div>
      <!-- /div -->
   </div>
   <!-- /.container -->
</section>
<!-- /section -->