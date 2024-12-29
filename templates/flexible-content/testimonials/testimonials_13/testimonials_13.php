<?php

/**
 * Testimonial 13
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

      'title' => 'We are proud of our works',
      'patternTitle' => '<h2 class="h3 display-4 mb-3 pe-xxl-15 %2$s">%1$s</h2>',

      'subtitle' => 'We bring solutions to make life easier for our customers.',
      'patternSubtitle' => '<p class="lead fs-lg mb-0 pe-xxl-10 %2$s">%1$s</p>',

      'features' => '<div class="col-md-4"><img src="' . get_template_directory_uri() . '/dist/img/icons/solid/target.svg" class="svg-inject icon-svg icon-svg-sm solid-duo text-grape-fuchsia mb-3" alt="" /><h3 class="counter">1000+</h3><p class="mb-0">Completed Projects</p></div><!-- /column -->',
      'features_pattern' => '<div class="col-md-4 %1$s">%2$s<h3 class="counter">%3$s</h3><p class="mb-0">%4$s</p>%5$s</div><!--/column -->',
      'features_style_icon' => 'mb-3',

      'background_class_default' => 'card image-wrapper bg-full bg-image bg-overlay bg-overlay-light-500 pb-15',
      'background_data_default' => '/dist/img/photos/bg22.png',

      'divider' => true,
   )
);

?>

<section id="<?php echo esc_html($args['block_id']); ?>" class="wrapper bg-light">
   <div class="container-card pt-14 pt-md-16">
      <div class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
         <div class="card-body py-14 px-0">
            <div class="container">
               <div class="row gx-lg-8 gx-xl-12 gy-10 gy-lg-0">
                  <div class="col-lg-4 text-center text-lg-start">
                     <?php echo $block->subtitle_first; ?>
                     <!--/subtitle -->
                     <?php echo $block->title; ?>
                     <!--/title -->
                     <?php echo $block->subtitle_second; ?>
                     <!--/subtitle -->
                  </div>
                  <!-- /column -->
                  <div class="col-lg-8 mt-lg-2">
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
         </div>
         <!--/.card-body -->
      </div>
      <!--/.card -->
   </div>
   <!-- /.container-card -->
   <div class="container">
      <div class="grid mb-16">
         <div class="row isotope gy-6 mt-n18">

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
                                 $testimonial = ReadMore(get_sub_field('testimonial'), $link, 115);
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
                        <div class="item col-md-6 col-xl-3">
                           <div class="card shadow-lg card-border-bottom border-soft-primary">
                              <div class="card-body">
                                 <span class="ratings <?php echo acf_rating(); ?> fs-20 mb-3"></span>
                                 <blockquote class="icon mb-0">
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
                              <!-- /.card-body -->
                           </div>
                           <!-- /.card -->
                        </div>
                        <!--/column -->
                     <?php } elseif ($row_num == 1) { ?>
                        <div class="item col-md-6 col-xl-3">
                           <div class="card shadow-lg card-border-bottom border-soft-primary">
                              <div class="card-body">
                                 <span class="ratings <?php echo acf_rating(); ?> fs-20 mb-3"></span>
                                 <blockquote class="icon mb-0">
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
                              <!-- /.card-body -->
                           </div>
                           <!-- /.card -->
                        </div>
                        <!--/column -->
                     <?php } elseif ($row_num == 2) { ?>
                        <div class="item col-md-6 col-xl-3">
                           <div class="card shadow-lg card-border-bottom border-soft-primary">
                              <div class="card-body">
                                 <span class="ratings <?php echo acf_rating(); ?> fs-20 mb-3"></span>
                                 <blockquote class="icon mb-0">
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
                              <!-- /.card-body -->
                           </div>
                           <!-- /.card -->
                        </div>
                        <!--/column -->
                     <?php } elseif ($row_num == 3) { ?>
                        <div class="item col-md-6 col-xl-3">
                           <div class="card shadow-lg card-border-bottom border-soft-primary">
                              <div class="card-body">
                                 <span class="ratings <?php echo acf_rating(); ?> fs-20 mb-3"></span>
                                 <blockquote class="icon mb-0">
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
</section>
<!-- /section -->