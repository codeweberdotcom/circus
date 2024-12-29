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
      'patternSubtitle' => '<h2 class="fs-16 text-uppercase text-primary mb-3 %2$s">%1$s</h2>',
      'title' => 'Check out some of our awesome projects with creative ideas and great design.',
      'patternTitle' => '<h3 class="display-3 mb-10 %2$s">%1$s</h3>',
      'background_class_default' => 'wrapper bg-light',
      'divider' => true,
   )
);
?>

<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
   <div class="overflow-hidden">
      <div class="container py-14 py-md-16">
         <div class="row">
            <div class="col-lg-10 col-xl-9 col-xxl-8 mx-auto text-center">
               <?php echo $block->subtitle_first; ?>
               <?php echo $block->title; ?>
               <?php echo $block->subtitle_second; ?>
            </div>
            <!-- /column -->
         </div>
         <!-- /.row -->
         <div class="container-fluid px-md-6">
            <?php
            $query = new WP_Query($argss);
            if ($query->have_posts()) { ?>
               <div class="swiper-container grid-view nav-bottom nav-color mb-14" data-margin="30" data-dots="false" data-nav="true" data-items-md="2" data-items-xs="1">
                  <div class="swiper overflow-visible">
                     <div class="swiper-wrapper">
                        <?php
                        while ($query->have_posts()) {
                           $query->the_post();
                           $post_id =  get_the_id();
                        ?>
                           <div class="swiper-slide">
                              <figure class="<?php echo get_theme_mod('codeweber_image'); ?> mb-7"><a href="<?php echo the_permalink(); ?>"><img src="<?php echo    get_the_post_thumbnail_url($post_id, 'project_1_1'); ?>" srcset="<?php echo get_the_post_thumbnail_url($post_id, 'project_1_1'); ?>" alt="" /></a></figure>
                              <div class="project-details d-flex justify-content-center flex-column">
                                 <div class="post-header">
                                    <h2 class="post-title h3"><a href="<?php echo the_permalink(); ?>" class="link-dark"><?php echo get_the_title(); ?></a></h2>
                                    <div class="post-category text-ash"><?php echo strip_tags(get_the_term_list($post_id, 'projects_category', NULL, ',', '')); ?></div>
                                 </div>
                                 <!-- /.post-header -->
                              </div>
                              <!-- /.project-details -->
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