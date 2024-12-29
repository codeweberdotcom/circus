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

      'title' => 'Happy Customers',
      'patternTitle' => '<h2 class="fs-15 text-uppercase text-muted mb-3 %2$s">%1$s</h2>',

      'subtitle' => 'Don\'t take our word for it. See what customers are saying about us.',
      'patternSubtitle' => '<h3 class="display-4 mb-10 px-xl-10 px-xxl-15 %2$s">%1$s</h3>',

      'background_class_default' => 'wrapper bg-light',
      'divider' => 'true',
   )
);
?>

<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
   <div class="container py-14 py-md-16">
      <div class="row">
         <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2 mx-auto text-center">
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
      <div class="grid">
         <div class="row isotope gy-6">
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
                                 $testimonial = ReadMore(get_sub_field('testimonial'), $link, 175);
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
                        <div class="item col-md-6 col-xl-4">
                           <div class="card">
                              <div class="card-body">
                                 <span class="ratings <?php echo acf_rating(); ?> mb-3"></span>
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
                              <!-- /.card-body -->
                           </div>
                           <!-- /.card -->
                        </div>
                        <!--/column -->
                     <?php } elseif ($row_num == 1) { ?>
                        <div class="item col-md-6 col-xl-4">
                           <div class="card">
                              <div class="card-body">
                                 <span class="ratings <?php echo acf_rating(); ?> mb-3"></span>
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
                              <!-- /.card-body -->
                           </div>
                           <!-- /.card -->
                        </div>
                        <!--/column -->
                     <?php } elseif ($row_num == 2) { ?>
                        <div class="item col-md-6 col-xl-4">
                           <div class="card">
                              <div class="card-body">
                                 <span class="ratings <?php echo acf_rating(); ?> mb-3"></span>
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
                              <!-- /.card-body -->
                           </div>
                           <!-- /.card -->
                        </div>
                        <!--/column -->
                     <?php } elseif ($row_num == 3) { ?>
                        <div class="item col-md-6 col-xl-4">
                           <div class="card">
                              <div class="card-body">
                                 <span class="ratings <?php echo acf_rating(); ?> mb-3"></span>
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
                              <!-- /.card-body -->
                           </div>
                           <!-- /.card -->
                        </div>
                        <!--/column -->
                     <?php } elseif ($row_num == 4) { ?>
                        <div class="item col-md-6 col-xl-4">
                           <div class="card">
                              <div class="card-body">
                                 <span class="ratings <?php echo acf_rating(); ?> mb-3"></span>
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
                              <!-- /.card-body -->
                           </div>
                           <!-- /.card -->
                        </div>
                        <!--/column -->
                     <?php } elseif ($row_num == 5) { ?>
                        <div class="item col-md-6 col-xl-4">
                           <div class="card">
                              <div class="card-body">
                                 <span class="ratings <?php echo acf_rating(); ?> mb-3"></span>
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
                              <!-- /.card-body -->
                           </div>
                           <!-- /.card -->
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
               <!-- /.row -->
         </div>
         <!-- /.grid-view -->
      </div>
      <!-- /.container -->
      <?php if ($block->divider_wave) {
         echo $block->divider_wave;
      } ?>
      <!-- /divider -->
</section>
<!-- /section -->