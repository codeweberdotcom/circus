<?php

/**
 * Testimonial 6
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

$counter_title = 'Satisfied Customers';
$counter_color = 'primary';
$counter_number = '5000+';

if (have_rows('counter_item')) {
   while (have_rows('counter_item')) {
      the_row();
      if (get_sub_field('counter_number')) {
         $counter_number = get_sub_field('counter_number');
      }
      if (get_sub_field('counter_title')) {
         $btn_title = get_sub_field('counter_title');
      }
      $btn_color_object = new CW_Color(NULL, NULL);
      $counter_color = $btn_color_object->color;
   }
}

$block = new CW_Settings(
   $cw_settings = array(

      'multi_image' => array(
         array(
            '/dist/img/photos/g5.jpg',
            NULL,
            'sandbox_hero_6',
            '<figure %5$s %9$s>%6$s<img %4$s src="%1$s" srcset="%1$s" %3$s />%7$s %10$s %11$s</figure>',
            '<figure class="rounded mt-md-10 position-relative"><img src="' . get_template_directory_uri() . '/dist/img/photos/g5.jpg" srcset="' . get_template_directory_uri() . '/dist/img/photos/g5@2x.jpg 2x" alt=""></figure>'
         ),

         array(
            '/dist/img/photos/g6.jpg',
            NULL,
            'sandbox_hero_6',
            '<figure %5$s %9$s>%6$s<img %4$s src="%1$s" srcset="%1$s" %3$s />%7$s %10$s %11$s</figure>',
            '<figure class="rounded"><img src="' . get_template_directory_uri() . '/dist/img/photos/g6.jpg" srcset="' . get_template_directory_uri() . '/dist/img/photos/g6@2x.jpg 2x" alt=""></figure>'
         ),

      ),

      'background_class_default' => 'wrapper bg-light',

      // 'divider' => true,

      'shapes' => array('<div class="shape bg-dot primary rellax w-18 h-18" data-rellax-speed="1" style="top: 0; left: -1.4rem; z-index: 0;"></div>'),
   )
);
?>


<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
   <div class="container py-14 py-md-16">
      <div class="row gx-lg-8 gx-xl-12 gy-6 align-items-center">
         <div class="col-lg-7 position-relative">
            <?php echo $block->shapes; ?>
            <!--/shape -->
            <div class="row gx-md-5 gy-5">
               <div class="col-md-6">
                  <?php if (isset($block->multi_images[0])) {
                     echo $block->multi_images[0];
                  } ?>
               </div>
               <!--/column -->
               <div class="col-md-6">
                  <div class="row gx-md-5 gy-5">
                     <div class="col-md-12 order-md-2">
                        <?php if (isset($block->multi_images[1])) {
                           echo $block->multi_images[1];
                        } ?>
                     </div>
                     <!--/column -->
                     <div class="col-md-10">
                        <div class="card bg-<?php echo $counter_color; ?> text-center">
                           <div class="card-body py-11 counter-wrapper">
                              <h3 class="counter text-nowrap"><?php echo $counter_number; ?></h3>
                              <p class="mb-0"><?php echo $counter_title; ?></p>
                           </div>
                           <!--/.card-body -->
                        </div>
                        <!--/.card -->
                     </div>
                     <!--/column -->
                  </div>
                  <!--/.row -->
               </div>
               <!--/column -->
            </div>
            <!--/.row -->
         </div>
         <!--/column -->
         <div class="col-lg-5 mt-5">
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
                                       $testimonial = ReadMore(get_sub_field('testimonial'), $link, 140);
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
   <!-- /.container -->
   <?php if ($block->divider_wave) {
      echo $block->divider_wave;
   } ?>
   <!-- /divider -->
</section>
<!-- /section -->