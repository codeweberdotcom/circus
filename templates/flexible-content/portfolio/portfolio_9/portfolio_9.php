<?php

/**
 * Portfolio 9
 */

$type_view = get_sub_field('select_type');
if ($type_view == 'category') {
   $categories = get_sub_field('categories');
   $category_array = array();
   $term_ids = array();

   if ($categories) :
      $get_terms_args = array(
         'taxonomy' => 'projects_category',
         'hide_empty' => 0,
         'include' => $categories,
      );

   endif;
} else {
   $category_array = '';
   $terms = get_terms([
      'taxonomy' => 'projects_category',
      'hide_empty' => true,
   ]);
}


$block = new CW_Settings(
   $cw_settings = array(
      'title' => 'My Selected Shots',
      'patternTitle' => '<h2 class="display-5 mb-3 %2$s">%1$s</h2>',
      'subtitle' => 'Photography is my passion and I love to turn ideas into beautiful things.',
      'patternSubtitle' => '<p class="lead fs-lg %2$s">%1$s</p>',
      'background_class_default' => 'wrapper bg-light',
      'divider' => true,
   )
);
?>


<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>

   <div class="container py-14 py-md-16 text-center">
      <div class="row">
         <div class="col-lg-10 col-xl-8 col-xxl-7 mx-auto mb-8">
            <?php echo $block->subtitle_first; ?>
            <?php echo $block->title; ?>
            <!--/title -->
            <?php echo $block->subtitle_second; ?>
            <!--/subtitle -->
         </div>
         <!-- /column -->
      </div>
      <!-- /.row -->

      <div class="grid grid-view projects-masonry">
         <div class="isotope-filter filter mb-10">
            <ul>
               <li><a class="filter-item active" data-filter="*"><?php esc_html_e('All', 'codeweber') ?></a></li>
               <?php if (is_array($category_array)) {
                  foreach ($categories as $terms) {
                     $term = get_term($terms); ?>
                     <li><a class="filter-item" data-filter=".<?php echo $term->slug; ?>"><?php echo $term->name; ?></a></li>
                  <?php
                  }
               } else { ?>
                  <?php foreach ($terms as $term) { ?>
                     <li><a class="filter-item" data-filter=".<?php echo $term->slug; ?>"><?php echo $term->name; ?></a></li>
               <?php  }
               } ?>
            </ul>
         </div>
         <div class="row gx-md-6 gy-6 isotope">
            <?php
            if (is_array($category_array)) {
               $query = new WP_Query([
                  'post_type' => 'projects',
                  'hide_empty' => true,
                  'posts_per_page' => 9,
                  'tax_query' => array(
                     array(
                        'taxonomy' => 'projects_category',
                        'field'    => 'id',
                        'terms'    => $categories
                     )
                  )
               ]);
            } else {
               $query = new WP_Query([
                  'post_type' => 'projects',
                  'hide_empty' => true,
                  'posts_per_page' => 9,

               ]);
            }

            while ($query->have_posts()) {
               $query->the_post();
               $size_img = array('archive_4', 'archive_4_1', 'archive_4_2');
               $size_finish = array_rand($size_img, 1);
               $taxonomy_list = wp_get_post_terms($post->ID, 'projects_category', array('fields' => 'names')); ?>
               <?php $taxonomy_list_slug = wp_get_post_terms($post->ID, 'projects_category', array('fields' => 'slugs')); ?>
               <div class="project item col-md-6 col-xl-4 <?php echo implode(' ', $taxonomy_list_slug); ?>">
                  <figure class="overlay overlay-1 <?php echo get_theme_mod('codeweber_image'); ?>"><a href="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'sandbox_hero_6'); ?>" data-glightbox data-gallery="shots-group"> <?php echo get_the_post_thumbnail($post->ID, $size_img[$size_finish]); ?></a>
                     <figcaption>
                        <h3 class="h5 from-top mb-0"><?php echo esc_html($post->post_title); ?></h3>
                     </figcaption>
                  </figure>
               </div>
               <!-- /.project -->
            <?php } ?>
         </div>
         <!-- /.row -->
      </div>
      <!-- /.grid -->
   </div>
   <!-- /.container -->
   <?php if ($block->divider_wave) {
      echo $block->divider_wave;
   } ?>
   <!-- /divider -->
</section>
<!-- /section -->