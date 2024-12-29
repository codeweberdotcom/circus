<?php

/**
 * Testimonial 11
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

      'background_class_default' => 'card image-wrapper bg-full bg-image bg-overlay bg-overlay-400',
      'background_data_default' => '/dist/img/photos/bg2.jpg',

      // 'divider' => true,
   )
);
?>

<section class="wrapper bg-light">
   <div class="container py-14 py-md-16">
      <div class="row text-white text-center">
         <div class="col-xl-10 mx-auto mb-14 mb-lg-n6">
            <div class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
               <div class="card-body p-9 p-xl-12">
                  <div class="row gx-0">
                     <div class="col-xxl-9 mx-auto">
                        <?php
                        $query = new WP_Query($argss);
                        if ($query->have_posts()) { ?>
                           <div class="swiper-container dots-light dots-closer mb-6" data-margin="30" data-dots="true">
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
                                                   $testimonial = ReadMore(get_sub_field('testimonial'), $link, 125);
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
                                                   <span class="ratings <?php echo acf_rating(); ?> mb-3"></span>
                                                   <blockquote class="border-0 fs-lg mb-2">
                                                      <p>“<?php echo $testimonial; ?>”</p>
                                                      <div class="blockquote-details justify-content-center text-center">
                                                         <div class="info ps-0">
                                                            <h5 class="mb-1 text-white"><?php echo $name ?></h5>
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
</section>
<!-- /section -->