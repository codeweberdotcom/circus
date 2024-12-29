<?php

/**
 * Testimonial 1
 */

$argss = array(
   'posts_per_page' => 4,
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

      'subtitle' => 'Customer satisfaction is our major goal. See what our customers are saying about us.',
      'patternSubtitle' => '<p class="lead fs-lg %2$s">%1$s</p>',

      'paragraph' => 'Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Nulla vitae elit libero, a pharetra augue. Maecenas faucibus mollis interdum. Vestibulum id ligula porta felis euismod semper.',
      'patternParagraph' => '<p class="%2$s">%1$s</p>',

      'buttons' => '<a href="/testimonials/" class="btn btn-navy rounded-pill mt-3">All Testimonials</a>',
      'buttons_pattern' => '<div class="d-flex justify-content-center justify-content-lg-start flex-wrap" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">%s</div>',

      'background_class_default' => 'wrapper bg-light',

      'divider' => true,
   )
);

?>

<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
   <div class="container py-14 py-md-16">
      <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
         <div class="col-lg-7">
            <?php
            $query = new WP_Query($argss);
            if ($query->have_posts()) { ?>
               <div class="row gx-md-5 gy-5">
                  <?php
                  $row_num = 0;
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
                                 $testimonial = ReadMore(get_sub_field('testimonial'), $link, 70);
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
                              }
                           }
                        endwhile;
                     endif;

                     if ($row_num == 0) { ?>
                        <div class="col-md-6 col-xl-5 align-self-end">
                           <div class="card bg-pale-yellow">
                              <div class="card-body">
                                 <blockquote class="icon mb-0">
                                    <p>“<?php echo $testimonial; ?>”</p>
                                    <div class="blockquote-details">
                                       <div class="info p-0">
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
                           <!--/.card -->
                        </div>
                        <!--/column -->
                     <?php } elseif ($row_num == 1) { ?>
                        <div class="col-md-6 align-self-end">
                           <div class="card bg-pale-red">
                              <div class="card-body">
                                 <blockquote class="icon mb-0">
                                    <p>“<?php echo $testimonial; ?>”</p>
                                    <div class="blockquote-details">
                                       <div class="info p-0">
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
                           <!--/.card -->
                        </div>
                        <!--/column -->
                     <?php } elseif ($row_num == 2) { ?>
                        <div class="col-md-6 col-xl-5 offset-xl-1">
                           <div class="card bg-pale-leaf">
                              <div class="card-body">
                                 <blockquote class="icon mb-0">
                                    <p>“<?php echo $testimonial; ?>”</p>
                                    <div class="blockquote-details">
                                       <div class="info p-0">
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
                           <!--/.card -->
                        </div>
                        <!--/column -->
                     <?php } elseif ($row_num == 3) { ?>
                        <div class="col-md-6 align-self-start">
                           <div class="card bg-pale-blue">
                              <div class="card-body">
                                 <blockquote class="icon mb-0">
                                    <p>“<?php echo $testimonial; ?>”</p>
                                    <div class="blockquote-details">
                                       <div class="info p-0">
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
                           <!--/.card -->
                        </div>
                        <!--/column -->
                  <?php  }
                     $row_num++;
                  }
                  ?>
               <?php
            }
            wp_reset_postdata();
               ?>
               </div>
               <!--/.row -->
         </div>
         <!--/column -->
         <div class="col-lg-5">
            <?php echo $block->subtitle_first; ?>
            <!--/subtitle -->
            <?php echo $block->title; ?>
            <!--/title -->
            <?php echo $block->subtitle_second; ?>
            <!--/subtitle -->
            <?php echo $block->paragraph; ?>
            <!--/paragraph -->
            <?php echo $block->buttons; ?>
            <!--/buttons group -->

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