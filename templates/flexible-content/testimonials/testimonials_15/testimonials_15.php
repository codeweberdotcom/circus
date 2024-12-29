<?php

/**
 * Testimonial 15
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
      'patternTitle' => '<h2 class="display-5 mb-4 text-center text-white">%s</h2>',

      'background_class_default' => 'wrapper image-wrapper bg-image bg-overlay',
      'background_data_default' => '/dist/img/photos/bg35.jpg',

      'divider' => true,
   )
);

?>

<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
   <div class="container py-15 py-md-17">
      <?php echo $block->title; ?>
      <!--/title -->
      <?php
      $query = new WP_Query($argss);
      if ($query->have_posts()) { ?>
         <div class="swiper-container dots-closer dots-light dots-light-75" data-margin="0" data-dots="true" data-items-xl="3" data-items-md="2" data-items-xs="1">
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
                              } ?>

                              <div class="swiper-slide">
                                 <div class="item-inner">
                                    <div class="card border-0 bg-white-900">
                                       <div class="card-body">
                                          <span class="ratings <?php echo acf_rating(); ?> mb-3"></span>
                                          <blockquote class="border-0 mb-0">
                                             <p>“<?php echo $testimonial; ?>”</p>
                                             <div class="blockquote-details">
                                                <div class="info p-0">
                                                   <h5 class="mb-0"><?php echo $name ?></h5>
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
                                 <!-- /.item-inner -->
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
   <!-- /.container -->
</section>
<!-- /section -->