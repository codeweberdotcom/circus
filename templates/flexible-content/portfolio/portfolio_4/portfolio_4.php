<?php

/**
 * Portfolio 4
 */

$argss = array(
   'posts_per_page' => 10,
   'post_type' => 'projects',
);

$portfolio = get_sub_field('posts');
if ($portfolio) {
   $cw_post_ids = array();
   foreach ($portfolio as $post_ids) {
      $cw_post_ids[] = $post_ids;
   }
   $cw_post_idsd = implode(',', $portfolio);
   $argss['post__in'] = $cw_post_ids;
}

$categories = get_sub_field('categories');
if ($categories) {
   $get_terms_args = array(
      'taxonomy' => 'projects_category',
      'include' => $categories,
   );

   $argss['tax_query'] = array(
      array(
         'taxonomy' => 'projects_category',
         'field' => 'id',
         'terms' => $categories
      )
   );
}

$block = new CW_Settings(
   $cw_settings = array(
      'subtitle' => 'Latest Projects',
      'patternSubtitle' => '<h2 class="fs-15 text-uppercase text-muted mb-3 %2$s">%1$s</h2>',
      'title' => 'Check out some of our awesome projects with creative ideas and great design.',
      'patternTitle' => '<h3 class="display-4 mb-10 %2$s">%1$s</h3>',
      'background_class_default' => 'wrapper bg-light',
      'divider' => true,
   )
);
?>
<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
   <div class="container pt-14 pt-md-16">
      <div class="row">
         <div class="col-lg-9 col-xl-8 col-xxl-7 mx-auto text-center">
            <?php echo $block->subtitle_first; ?>
            <?php echo $block->title; ?>
            <?php echo $block->subtitle_second; ?>
         </div>
         <!-- /column -->
      </div>
      <!-- /.row -->
   </div>
   <!-- /.container -->
   <div class="container-fluid px-md-6">
      <?php
      $query = new WP_Query($argss);
      if ($query->have_posts()) { ?>
         <div class="swiper-container grid-view mb-6" data-margin="30" data-dots="true" data-items-xl="3" data-items-md="2" data-items-xs="1">
            <div class="swiper">
               <div class="swiper-wrapper">
                  <?php
                  while ($query->have_posts()) {
                     $query->the_post();
                     $post_id =  get_the_id();
                  ?>
                     <div class="swiper-slide">
                        <figure class="<?php echo get_theme_mod('codeweber_image'); ?> mb-6"><img src="<?php echo get_the_post_thumbnail_url($post_id, 'project_1_1'); ?>" srcset="<?php echo get_the_post_thumbnail_url($post_id, 'project_1_1'); ?>" alt="" /><a class="item-link" href="<?php echo get_the_post_thumbnail_url($post_id, 'sandbox_hero_6'); ?>" data-glightbox data-gallery="projects-group"><i class="uil uil-focus-add"></i></a></figure>
                     </div>
                     <!--/.swiper-slide -->
                  <?php
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
   <!-- /.container-fluid -->
   <?php if ($block->divider_wave) {
      echo $block->divider_wave;
   } ?>
   <!-- /divider -->
</section>
<!-- /section -->