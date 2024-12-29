<?php

/**
 * Portfolio 3
 */

$argss = array(
   'posts_per_page' => 3,
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
      'title' => 'Check out some of our recent projects below.',
      'patternTitle' => '<h2 class="display-4 mb-4 pe-xxl-15 %2$s">%1$s</h2>',
      'subtitle' => 'We love to turn ideas into beautiful things.',
      'patternSubtitle' => '<p class="lead fs-lg mb-0 %2$s">%1$s</p>',
      'background_class_default' => 'wrapper bg-light',
      'divider' => true,
   )
);
?>
<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
   <div class="container py-14 py-md-16">
      <?php
      $query = new WP_Query($argss);
      if ($query->have_posts()) { ?>
         <div class="projects-tiles">
            <div class="project grid grid-view">
               <div class="row gx-md-8 gx-xl-12 gy-10 gy-md-12 isotope">

                  <div class="item col-md-6 mt-md-7 mt-lg-15">
                     <div class="project-details d-flex justify-content-center align-self-end flex-column ps-0 pb-0">
                        <div class="post-header">
                           <?php echo $block->subtitle_first; ?>
                           <?php echo $block->title; ?>
                           <?php echo $block->subtitle_second; ?>
                        </div>
                        <!-- /.post-header -->
                     </div>
                     <!-- /.project-details -->
                  </div>
                  <!-- /.item -->
                  <?php
                  $row_num = 0;
                  while ($query->have_posts()) {
                     $query->the_post();
                     $post_id =  get_the_id();
                     if ($row_num == 0) { ?>
                        <div class="item col-md-6">
                           <figure class="lift <?php echo get_theme_mod('codeweber_image'); ?> mb-6"><a href="<?php echo the_permalink(); ?>"> <img src="<?php echo get_the_post_thumbnail_url($post_id, 'sandbox_features_1'); ?>" srcset="<?php echo get_the_post_thumbnail_url($post_id, 'sandbox_features_1'); ?>" alt="" /></a></figure>
                           <div class="post-category text-line mb-3 text-violet"><?php echo strip_tags(get_the_term_list($post_id, 'projects_category', NULL, ',', '')); ?></div>
                           <h2 class="post-title h3"><?php echo get_the_title(); ?></h2>
                        </div>
                        <!-- /.item -->
                     <?php } elseif ($row_num == 1) { ?>

                        <div class="item col-md-6">
                           <figure class="lift <?php echo get_theme_mod('codeweber_image'); ?> mb-6"><a href="<?php echo the_permalink(); ?>"> <img src="<?php echo get_the_post_thumbnail_url($post_id, 'sandbox_hero_18'); ?>" srcset="<?php echo get_the_post_thumbnail_url($post_id, 'sandbox_hero_18'); ?>" alt="" /></a></figure>
                           <div class="post-category text-line mb-3 text-leaf"><?php echo strip_tags(get_the_term_list($post_id, 'projects_category', NULL, ',', '')); ?></div>
                           <h2 class="post-title h3"><?php echo get_the_title(); ?></h2>
                        </div>
                        <!-- /.item -->

                     <?php } elseif ($row_num == 2) { ?>
                        <div class="item col-md-6">
                           <figure class="lift <?php echo get_theme_mod('codeweber_image'); ?> mb-6"><a href="<?php echo the_permalink(); ?>"> <img src="<?php echo get_the_post_thumbnail_url($post_id, 'testimonial_2'); ?>" srcset="<?php echo get_the_post_thumbnail_url($post_id, 'testimonial_2'); ?>" alt="" /></a></figure>
                           <div class="post-category text-line mb-3 text-leaf"><?php echo strip_tags(get_the_term_list($post_id, 'projects_category', NULL, ',', '')); ?></div>
                           <h2 class="post-title h3"><?php echo get_the_title(); ?></h2>
                        </div>
                        <!-- /.item -->
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
            <!-- /.project -->
         </div>
         <!-- /.projects-tiles -->
   </div>
   <!-- /.container -->
   <?php if ($block->divider_wave) {
      echo $block->divider_wave;
   } ?>
   <!-- /divider -->
</section>
<!-- /section -->