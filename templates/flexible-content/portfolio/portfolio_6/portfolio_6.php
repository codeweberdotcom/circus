<?php

/**
 * Portfolio 1
 */

$argss = array(
   'posts_per_page' => 6,
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
      'title' => 'Latest Projects',
      'patternTitle' => '<h2 class="display-4 mb-3 %2$s">%1$s</h2>',
      'subtitle' => 'Check out some of my latest projects with creative ideas.',
      'patternSubtitle' => '<p class="lead fs-20 mb-0 %2$s">%1$s</p>',
      'background_class_default' => 'wrapper bg-light',
      'divider' => true,
      'buttons' => ' <a href="/projects" class="btn btn-primary rounded-pill mb-0">See All Projects</a>',
      'buttons_pattern' => '<div class="d-flex justify-content-center justify-content-lg-start flex-wrap">%s</div>',
   )
);
?>

<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
   <div class="container py-14 pt-md-16">
      <div class="row align-items-center mb-10">
         <div class="col-md-8 col-lg-9 col-xl-8 col-xxl-7 pe-xl-20">
            <?php echo $block->subtitle_first; ?>
            <?php echo $block->title; ?>
            <?php echo $block->subtitle_second; ?>
         </div>
         <!--/column -->
         <div class="col-md-4 col-lg-3 ms-md-auto text-md-end mt-5 mt-md-0">
            <?php echo $block->buttons; ?>
         </div>
         <!--/column -->
      </div>
      <!--/.row -->

      <?php
      $querys = new WP_Query($argss);
      if ($querys->have_posts()) {
         $num = 0;
         while ($querys->have_posts()) {
            $querys->the_post();

            $post_id =  get_the_id();
            if (have_rows('main_information', $post_id)) {
               while (have_rows('main_information', $post_id)) {
                  the_row();
                  $short_description = get_sub_field('short_description');
               }
            }
            if ($num == 0) { ?>
               <div class="card bg-soft-violet mb-10">
                  <div class="card-body p-12 pb-0">
                     <div class="row">
                        <div class="col-lg-4 pb-12 align-self-center">
                           <div class="post-category mb-3 text-violet"><?php echo strip_tags(get_the_term_list($post_id, 'projects_category', NULL, ',', '')); ?></div>
                           <h3 class="h1 post-title mb-3"><?php echo get_the_title(); ?></h3>
                           <p><?php echo $short_description; ?></p>
                           <a href="<?php echo the_permalink(); ?>" class="more hover link-violet"><?php esc_html_e('See Project', 'codeweber') ?></a>
                        </div>
                        <!-- /column -->
                        <div class="col-lg-7 offset-lg-1 align-self-end">
                           <figure><img class="img-fluid" src="<?php echo get_the_post_thumbnail_url($post_id, 'project_1_1'); ?>" srcset="<?php echo     get_the_post_thumbnail_url($post_id, 'project_1_1'); ?>" alt="" /></figure>
                        </div>
                        <!-- /column -->
                     </div>
                     <!-- /.row -->
                  </div>
                  <!--/.card-body -->
               </div>
               <!--/.card -->
            <?php
            } elseif ($num == 1) { ?>
               <div class="card bg-soft-blue mb-10">
                  <div class="card-body p-12">
                     <div class="row gy-10 align-items-center">
                        <div class="col-lg-4 order-lg-2 offset-lg-1">
                           <div class="post-category mb-3 text-blue"><?php echo strip_tags(get_the_term_list($post_id, 'projects_category', NULL, ',', '')); ?></div>
                           <h3 class="h1 post-title mb-3"><?php echo get_the_title(); ?></h3>
                           <p><?php echo $short_description; ?></p>
                           <a href="<?php echo the_permalink(); ?>" class="more hover link-blue"><?php esc_html_e('See Project', 'codeweber') ?></a>
                        </div>
                        <!-- /column -->
                        <div class="col-lg-7">
                           <figure><img class="img-fluid" src="<?php echo get_the_post_thumbnail_url($post_id, 'project_1_1'); ?>" srcset="<?php echo get_the_post_thumbnail_url($post_id, 'project_1_1'); ?>" alt="" /></figure>
                        </div>
                        <!-- /column -->
                     </div>
                     <!-- /.row -->
                  </div>
                  <!--/.card-body -->
               </div>
               <!--/.card -->
            <?php
            } elseif ($num == 2) { ?>
               <div class="row gx-md-8 gx-xl-10">
                  <div class="col-lg-6">
                     <div class="card bg-soft-leaf mb-10">
                        <div class="card-body p-12 pb-0">
                           <div class="post-category mb-3 text-leaf"><?php echo strip_tags(get_the_term_list($post_id, 'projects_category', NULL, ',', '')); ?></div>
                           <h3 class="h1 post-title mb-3"><?php echo get_the_title(); ?></h3>
                           <p><?php echo $short_description; ?></p>
                           <a href="<?php echo the_permalink(); ?>" class="more hover link-leaf mb-8"><?php esc_html_e('See Project', 'codeweber') ?></a>
                        </div>
                        <!--/.card-body -->
                        <img class="card-img-bottom" src="<?php echo get_the_post_thumbnail_url($post_id, 'testimonial_2'); ?>" srcset="<?php echo get_the_post_thumbnail_url($post_id, 'testimonial_2'); ?>" alt="" />
                     </div>
                     <!--/.card -->
                  </div>
                  <!-- /column -->
               <?php
            } elseif ($num == 3) { ?>
                  <div class="col-lg-6">
                     <div class="card bg-soft-pink">
                        <div class="card-body p-12 pb-0">
                           <div class="post-category mb-3 text-pink"><?php echo strip_tags(get_the_term_list($post_id, 'projects_category', NULL, ',', '')); ?></div>
                           <h3 class="h1 post-title mb-3"><?php echo get_the_title(); ?></h3>
                           <p><?php echo $short_description; ?></p>
                           <a href="<?php echo the_permalink(); ?>" class="more hover link-pink mb-8"><?php esc_html_e('See Project', 'codeweber') ?></a>
                        </div>
                        <!--/.card-body -->
                        <img class="card-img-bottom" src="<?php echo get_the_post_thumbnail_url($post_id, 'testimonial_2'); ?>" srcset="<?php echo get_the_post_thumbnail_url($post_id, 'testimonial_2'); ?>" alt="" />
                     </div>
                     <!--/.card -->
                  </div>
                  <!-- /column -->
               </div>
      <?php
            }
            $num++;
         }
      } ?>

   </div>
   <!-- /.container -->
   <?php if ($block->divider_wave) {
      echo $block->divider_wave;
   } ?>
   <!-- /divider -->
</section>
<!-- /section -->