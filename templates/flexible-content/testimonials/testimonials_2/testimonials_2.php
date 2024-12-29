<?php

/**
 * Testimonial 2
 */

$argss = array(
   'posts_per_page' => 10,
   'post_type' => 'testimonials',
   'orderby' => 'rand',
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

$type_field = get_sub_field('select_type');

$block = new CW_Settings(
   $cw_settings = array(
      'swiper' => array(
         'swiper_container_class' => 'overflow-hidden',
         'image_class' => '',
         'data_thumbs' => NULL,
         'wrapper_image_class' => 'position-absolute d-none d-lg-block',
         'image_pattern' => '<figure %5$s %9$s style="top: 50%%; right:0; width: 45%%; height: auto; transform: translateY(-50%%); z-index:2">%6$s<img %4$s src="%1$s" srcset="%1$s" %3$s />%7$s %10$s %11$s</figure>',
         'image_thumb_size' => 'testimonial_2',
         'image_demo' => '<figure class="' . get_theme_mod('codeweber_image') . ' position-absolute d-none d-lg-block" style="top: 50%; right:0; width: 45%; height: auto; transform: translateY(-50%); z-index:2"><img src="' . get_template_directory_uri() . '/dist/img/photos/tei1.jpg" srcset="' . get_template_directory_uri() . '/dist/img/photos/tei1@2x.jpg 2x" alt=""></figure>',
         'image_big_size' => 'sandbox_hero_6',
         'img_link' => '/dist/img/photos/tei1.jpg',
      ),
      'background_class_default' => 'wrapper bg-light',
      'divider' => 'true', // не работает
   )
);
?>

<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
   <div class="container py-14 py-md-16">
      <div class="row position-relative">
         <?php echo $block->swiper_final; ?>
         <!--/swiper -->
         <div class="col-lg-9 text-center">
            <div class="card bg-gray">
               <div class="card-body p-md-10 py-xxl-16">
                  <div class="row gx-0">
                     <div class="col-lg-8 ps-xl-10">
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
                                                   <span class="ratings <?php echo acf_rating(); ?> fs-20 mb-3"></span>
                                                   <blockquote class="border-0 fs-lg mb-0">
                                                      <p>“<?php echo $testimonial; ?>”</p>
                                                      <div class="blockquote-details justify-content-center text-center">
                                                         <div class="info p-0">
                                                            <h4 class="mb-1"><?php echo $name ?></h4>
                                                            <?php if ($job_title) { ?>
                                                               <p class="mb-0"><?php echo $job_title ?></p>
                                                            <?php } ?>
                                                         </div>
                                                      </div>
                                                   </blockquote>

                                                </div>
                                                <!--/.swiper-slide -->
                                    <?php
                                             }
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
                     <!-- /column -->
                  </div>
                  <!-- /.row -->
               </div>
               <!--/.card-body -->
            </div>
            <!--/.card -->
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