<?php

/**
 * Portfolio 1
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
      'title' => 'Recent Projects',
      'patternTitle' => '<h2 class="display-4 mb-3 %2$s">%1$s</h2>',
      'subtitle' => 'We love to turn ideas into beautiful things.',
      'patternSubtitle' => '<p class="lead fs-lg %2$s">%1$s</p>',
      'background_class_default' => 'wrapper bg-light',
      'divider' => true,
   )
);
?>

<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
   <div class="container py-14 py-md-16">
      <div class="row align-items-center mb-7">
         <div class="col-md-8 col-lg-8 col-xl-7 col-xxl-6 pe-lg-17">
            <?php echo $block->subtitle_first; ?>
            <?php echo $block->title; ?>
            <?php echo $block->subtitle_second; ?>
         </div>
         <!--/column -->
      </div>
      <!--/.row -->
      <?php
      $query = new WP_Query($argss);
      if ($query->have_posts()) { ?>
         <div class="projects-tiles">
            <div class="project grid grid-view">
               <div class="row gx-md-8 gx-xl-12 gy-10 gy-md-12 isotope">
                  <?php
                  $row_num = 0;
                  while ($query->have_posts()) {
                     $query->the_post();
                     $post_id =  get_the_id();
                     if ($row_num == 0) { ?>
                        <div class="item col-md-5">
                           <figure class="lift <?php echo get_theme_mod('codeweber_image'); ?> mb-6"><a href="<?php echo the_permalink(); ?>"> <img src="<?php echo get_the_post_thumbnail_url($post_id, 'sandbox_features_1'); ?>" srcset="<?php echo get_the_post_thumbnail_url($post_id, 'sandbox_features_1'); ?>" alt="" /></a></figure>
                           <div class="post-category mb-3 text-purple"><?php echo get_the_term_list($post_id, 'projects_category', NULL, ',', ''); ?></div>
                           <h3 class="post-title"><?php echo get_the_title(); ?></h3>
                        </div>
                        <!-- /.item -->
                     <?php } elseif ($row_num == 1) { ?>
                        <div class="item col-md-7 mt-md-17">
                           <figure class="lift rounded mb-6"><a href="<?php echo the_permalink(); ?>"> <img src="<?php echo get_the_post_thumbnail_url($post_id, 'sandbox_hero_18'); ?>" srcset="<?php echo get_the_post_thumbnail_url($post_id, 'sandbox_hero_18'); ?>" alt="" /></a></figure>
                           <div class="post-category mb-3 text-orange"><?php echo get_the_term_list($post_id, 'projects_category', NULL, ',', ''); ?></div>
                           <h3 class="post-title"><?php echo get_the_title(); ?></h3>
                        </div>
                        <!-- /.item -->
                     <?php } elseif ($row_num == 2) { ?>
                        <div class="item col-md-5">
                           <figure class="lift rounded mb-6"><a href="<?php echo the_permalink(); ?>"> <img src="<?php echo get_the_post_thumbnail_url($post_id, 'project_1_1'); ?>" srcset="<?php echo get_the_post_thumbnail_url($post_id, 'project_1_1'); ?>" alt="" /></a></figure>
                           <div class="post-category mb-3 text-red"><?php echo get_the_term_list($post_id, 'projects_category', NULL, ',', ''); ?></div>
                           <h3 class="post-title"><?php echo get_the_title(); ?></h3>
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