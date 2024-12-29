<?php

/**
 * Testimonial 11
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

      'background_class_default' => 'wrapper bg-light',

      'divider' => true,
   )
);
?>

<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
   <div class="container py-14 py-md-16">
      <div class="row">
         <div class="col-md-10 col-lg-8 mx-auto">
            <?php
            $query = new WP_Query($argss);
            if ($query->have_posts()) { ?>
               <div class="swiper-container dots-closer text-center mb-6" data-margin="30" data-dots="true">
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

                                    $photo = get_sub_field('photo');
                                    if (get_sub_field('photo')) {
                                       $avatar_url = esc_url($photo['sizes']['cw_icon_lg']);;
                                    } else {
                                       $avatar_url = '#';
                                    }

                                    $link = '/testimonials/';
                                    if (get_sub_field('testimonial')) {
                                       $testimonial = ReadMore(get_sub_field('testimonial'), $link, 155);
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
                                       <blockquote class="border-0 fs-lg">
                                          <p>“<?php echo $testimonial; ?>”</p>
                                          <div class="blockquote-details justify-content-center">
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
   <!-- /.container -->
</section>
<!-- /section -->