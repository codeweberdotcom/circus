<?php

/**
 * Testimonial 3
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

$type_field = get_sub_field('select_type');

$block = new CW_Settings(
   $cw_settings = array(

      'title' => 'Our Community',
      'patternTitle' => '<h2 class="display-4 mb-3 %2$s">%1$s</h2>',

      'subtitle' => 'Customer satisfaction is our major goal. See what our clients are saying about our services.',
      'patternSubtitle' => '<p class="lead fs-lg mb-6 %2$s">%1$s</p>',

      'buttons' => '<a href="/testimonials/" class="btn btn-primary rounded-pill">All Testimonials</a>',
      'buttons_pattern' => '<div class="d-flex justify-content-center justify-content-lg-start flex-wrap" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">%s</div>',

      'background_class_default' => 'wrapper bg-light',

      'divider' => true,

      'shapes' => array('<div class="shape rounded-circle bg-soft-yellow rellax w-16 h-16" data-rellax-speed="1" style="top: -0.7rem; right: -1.7rem;"></div>' . '<div class="shape rounded-circle bg-line red rellax w-16 h-16" data-rellax-speed="1" style="bottom: -0.5rem; left: -1.4rem;"></div>'),

   )
);
?>

<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
   <div class="container py-14 py-md-16">
      <div class="row gx-xl-12 gy-10">
         <div class="col-xl-4">
            <?php echo $block->subtitle_first; ?>
            <!--/subtitle -->
            <?php echo $block->title; ?>
            <!--/title -->
            <?php echo $block->subtitle_second; ?>
            <!--/subtitle -->
            <?php echo $block->buttons; ?>
            <!--/buttons group -->
         </div>
         <!-- /column -->
         <div class="col-xl-8">
            <div class="position-relative">
               <?php echo $block->shapes; ?>
               <!--/shape -->
               <?php
               $query = new WP_Query($argss);
               if ($query->have_posts()) { ?>
                  <div class="swiper-container dots-closer mb-6" data-margin="0" data-dots="true" data-items-md="2" data-items-xs="1">
                     <div class="swiper">
                        <div class="swiper-wrapper">
                           <?php
                           while ($query->have_posts()) {
                              $query->the_post();
                              $post_id =  $post->ID;
                              if (have_rows('testimonials_post_field', $post_id)) {
                                 while (have_rows('testimonials_post_field', $post_id)) {
                                    the_row();

                                    if (get_sub_field('status') == 1) {
                                       if (get_sub_field('name')) {
                                          $name = get_sub_field('name');
                                       } else {
                                          $name = NULL;
                                       }

                                       $photo = get_sub_field('photo');
                                       if (get_sub_field('photo')) {
                                          $avatar_url = esc_url($photo['sizes']['cw_icon_lg']);;
                                       } else {
                                          $avatar_url = '#';
                                       }

                                       $link = '/testimonials/';
                                       if (get_sub_field('testimonial')) {
                                          $testimonial = ReadMore(get_sub_field('testimonial'), $link, 150);
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
                                          <div class="item-inner">
                                             <div class="card">
                                                <div class="card-body">
                                                   <blockquote class="icon mb-0">
                                                      <p>“<?php echo $testimonial; ?>”</p>
                                                      <div class="blockquote-details">
                                                         <img class="rounded-circle w-12" src="<?php echo $avatar_url; ?>" alt="" />
                                                         <div class="info">
                                                            <h5 class="mb-1"><?php echo $name ?></h5>
                                                            <?php if ($job_title) { ?>
                                                               <p class="mb-0"><?php echo $job_title ?></p>
                                                            <?php } ?>
                                                         </div>
                                                      </div>
                                                   </blockquote>
                                                </div>
                                                <!--/.card-body -->
                                             </div>
                                             <!-- /.card -->
                                          </div>
                                          <!-- /.item-inner -->
                                       </div>
                                       <!--/.swiper-slide -->
                           <?php
                                    }
                                 };
                              };
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
               ?>
            </div>
            <!-- /.position-relative -->
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