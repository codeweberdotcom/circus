<?php

/**
 * Testimonial 16
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

      'subtitle' => 'Happy Customers',
      'patternSubtitle' => '<h2 class="fs-16 text-uppercase text-primary mb-3 %2$s">%1$s</h2>',

      'title' => 'Don\'t take our word for it. See what customers are saying about us.',
      'patternTitle' => '<h3 class="display-4 mb-10 px-xxl-10 %2$s">%1$s</h3>',

      'swiper' => array(
         'swiper_container_class' => '',
         'image_class' => '',
         'data_thumbs' => NULL,
         'wrapper_image_class' => '',
         'image_pattern' => '<figure %5$s %9$s>%6$s<img %4$s src="%1$s" srcset="%1$s" %3$s />%7$s %10$s %11$s</figure>',
         'image_thumb_size' => 'testimonial_16',
         'image_demo' => '<div class="img-mask mask-3"><img src="' . get_template_directory_uri() . '/dist/img/photos/about28.jpg" srcset="' . get_template_directory_uri() . '/dist/img/photos/about28@2x.jpg 2x" alt="" /></div>',
         'image_big_size' => 'sandbox_hero_6',
         'img_link' => '/dist/img/photos/about28.jpg',
         'image_shape' => 'img-mask mask-3',
      ),
      'background_class_default' => 'wrapper bg-light',
      'divider' => 'true',
   )
);
?>

<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
   <div class="container py-14 py-md-16">
      <div class="card bg-soft-primary">
         <div class="card-body py-14 px-lg-0">
            <div class="row text-center">
               <div class="col-lg-8 offset-lg-2">
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
            <div class="row gx-lg-8 gx-xl-12 align-items-center">
               <div class="col-lg-5 ms-auto col-xl-4 d-none d-lg-flex">
                  <?php echo $block->swiper_final; ?>
                  <!--/swiper -->
               </div>
               <!--/column -->
               <div class="col-lg-6 col-xl-6 col-xxl-5 me-auto">
                  <?php
                  $query = new WP_Query($argss);
                  if ($query->have_posts()) { ?>
                     <div class="swiper-container dots-start dots-closer mb-6" data-margin="30" data-dots="true">
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
                                             $testimonial = ReadMore(get_sub_field('testimonial'), $link, 185);
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
                                             <blockquote class="border-0 fs-lg mb-0">
                                                <p>“<?php echo $testimonial; ?>”</p>
                                                <div class="blockquote-details">
                                                   <div class="info ps-0">
                                                      <h5 class="mb-1"><?php echo $name ?></h5>
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
               <!--/column -->
            </div>
            <!--/.row -->
         </div>
         <!--/.card-body -->
      </div>
      <!--/.card -->
   </div>
   <!-- /.container -->
</section>
<!-- /section -->