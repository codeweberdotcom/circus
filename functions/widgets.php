<?php

/**
 * Consultant Widget
 */
function consultant_widget()
{ ?>
   <?php if (get_field('show_consultant_widget', 'option') == 1) {
      if (have_rows('consultant_widget', 'option')) {
         while (have_rows('consultant_widget', 'option')) {
            the_row(); ?>
            <div class="widget mb-md-0 sticky-top">
               <div class="card">
                  <div class="card-body">
                     <?php $photo_consultant = get_sub_field('photo_consultant');
                     if ($photo_consultant) { ?>
                        <img class="rounded-circle w-15 mb-4" src="<?php echo esc_url($photo_consultant['sizes']['cw_icon_lg']); ?>" srcset="<?php echo esc_url($photo_consultant['sizes']['cw_icon_lg']); ?>" alt="" />
                     <?php } else { ?>
                        <img class="rounded-circle w-15 mb-4" src="<?php echo get_template_directory_uri(); ?>/dist/img/avatars/te3.jpg" srcset="<?php echo    get_template_directory_uri(); ?>/dist/img/avatars/te3@2x.jpg 2x" alt="" />
                     <?php };

                     if (get_sub_field('consultant_name')) { ?>
                        <h4 class="mb-1"><?php echo get_sub_field('consultant_name'); ?></h4>
                     <?php } else { ?>
                        <h4 class="mb-1"><?php echo esc_html_e('Alexey', 'codeweber'); ?></h4>
                     <?php }

                     if (get_sub_field('job_title')) { ?>
                        <div class="meta mb-2"><?php echo get_sub_field('job_title'); ?></div>
                     <?php } else { ?>
                        <div class="meta mb-2"><?php echo esc_html_e('Consultant'); ?></div>
                     <?php }


                     if (get_sub_field('description')) { ?>
                        <p class="mb-3"><?php echo get_sub_field('description'); ?></p>
                     <?php } else { ?>
                        <p class="mb-3"><?php echo esc_html_e('Our specialists will answer any question of interest.'); ?></p>
                     <?php }


                     if (get_field('show_social', 'option') == 1) { ?>
                        <nav class="nav social mb-3">
                           <?php get_template_part('templates/components/socialicons', '');  ?>
                        </nav>
                     <?php }

                     $button = new CW_Buttons('<div class="d-flex justify-content-center">%s</div>', '<a href="#" class="btn btn-primary rounded w-100">Ask a question</a>', 'w-100', NULL); ?>

                     <?php
                     echo $button->final_buttons; ?>
                     <!-- /.buttons -->
                  </div>
                  <!--/.card-body -->
               </div>
               <!-- /.card -->
            </div>
      <?php
         }
      }
   }
}


add_action('sidebar_faq_end', 'consultant_widget', 100);
add_action('sidebar_main_end', 'consultant_widget', 100);
add_action('sidebar_testimonials_end', 'consultant_widget', 100);
add_action('sidebar_search_end', 'consultant_widget', 100);
add_action('sidebar_faq_end_type_1', 'consultant_widget', 100);




/**
 * Testimonial Widget - Add Review
 */

function testimonial_yandex()
{
   if (get_field('yandex_testimonials_code', 'option')) {
      ?>
      <div class="widget">
         <?php echo get_field('yandex_testimonials_code', 'option'); ?>
      </div>
   <?php
   }
}

add_action('sidebar_testimonials_start', 'testimonial_yandex', 10);


/**
 * FAQ Categories Widget
 */

function categories_menu_faq_widget()
{
   $args = [
      'taxonomy' => ['faq_categories'], // название таксономии с WP 4.5
      'orderby' => 'name',
      'order' => 'ASC',
      'hide_empty' => true,
      'update_term_meta_cache' => true, // подгружать метаданные в кэш
   ];
   $categories = get_terms($args); ?>
   <div class="widget">
      <h4 class="widget-title mb-3"><?php esc_html_e('FAQ categories', 'codeweber'); ?></h4>
      <ul class="unordered-list bullet-primary text-reset">
         <?php foreach ($categories as $category) {
            $tag_link = get_tag_link($category->term_id); ?>
            <li><a href="<?php echo $tag_link; ?>" title='<?php echo $category->name; ?>' class="<?php echo $category->slug; ?>"><?php echo $category->name; ?></a></li>
         <?php } ?>
      </ul>
   </div>
   <!-- /.widget -->

<?php }

add_action('sidebar_faq_end', 'categories_menu_faq_widget', 5);


/**
 * FAQ Cloud Links Widget
 */

function cloud_links_faq_widget()
{
   $args = [
      'taxonomy'      => ['faq_tag'], // название таксономии с WP 4.5
      'orderby'       => 'name',
      'order'         => 'ASC',
      'hide_empty'    => true,
      'update_term_meta_cache' => true, // подгружать метаданные в кэш
   ];
   $faq_tags = get_terms($args); ?>
   <div class="widget">
      <h4 class="widget-title mb-3"><?php esc_html_e('FAQ tags', 'codeweber'); ?></h4>
      <ul class="list-unstyled tag-list mb-0">
         <?php foreach ($faq_tags as $faq_tag) {
            $tag_link = get_tag_link($faq_tag->term_id); ?>
            <li><a href="<?php echo $tag_link; ?>" title='<?php echo $faq_tag->name; ?>' class="btn btn-soft-ash btn-sm rounded-pill mb-0 <?php echo $faq_tag->slug; ?>"><?php echo $faq_tag->name; ?></a></li>
         <?php } ?>
      </ul>
   </div>

<?php }

add_action('sidebar_faq_end', 'cloud_links_faq_widget', 10);


/**
 * Blog Categories Links Widget
 */

function categories_menu_blog_widget()
{
   $args = [
      'taxonomy'      => ['category'], // название таксономии с WP 4.5
      'orderby'       => 'name',
      'order'         => 'ASC',
      'hide_empty'    => true,
      'update_term_meta_cache' => true, // подгружать метаданные в кэш
   ];
   $categories = get_terms($args); ?>
   <div class="widget">
      <h4 class="widget-title mb-3"><?php esc_html_e('Blog categories', 'codeweber'); ?></h4>
      <ul class="unordered-list bullet-primary text-reset">
         <?php foreach ($categories as $category) {
            $tag_link = get_tag_link($category->term_id); ?>
            <li><a href="<?php echo $tag_link; ?>" title='<?php echo $category->name; ?>' class="<?php echo $category->slug; ?>"><?php echo $category->name; ?></a></li>
         <?php } ?>
      </ul>
   </div>
   <!-- /.widget -->

   <?php }

add_action('sidebar_main_end', 'categories_menu_blog_widget', 5);



/**
 * Blog Recent Post Widget
 */

function recent_post_blog_widget()
{
   $result = wp_get_recent_posts([
      'numberposts' => 3,
      'offset' => 0,
      'category' => 0,
      'orderby' => 'post_date',
      'order' => 'DESC',
      'include' => '',
      'exclude' => '',
      'meta_key' => '',
      'meta_value' => '',
      'post_type' => 'post',
      'post_status' => 'publish',
      'suppress_filters' => true,
   ], OBJECT);

   if (!empty($result)) { // Check if $result is not empty
   ?>
      <div class="widget">
         <h3 class="h4 widget-title mb-3"><?php esc_html_e('Recent Posts', 'codeweber'); ?></h3>
         <ul class="image-list">
            <?php
            foreach ($result as $post) {
               setup_postdata($post);
               $id = $post->ID;
               $title = $post->post_title;
            ?>
               <li>
                  <figure class="rounded"><a href="<?php the_permalink($id); ?>"><?php echo get_the_post_thumbnail($id, 'brk_post_sm', array('class' => 'alignleft')); ?></a></figure>
                  <div class="post-content">
                     <h4 class="h6 mb-2"> <a href="<?php the_permalink($id); ?>"><?php echo $title; ?></a> </h4>
                     <ul class="post-meta">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span><?php echo get_the_date('d F Y', $post); ?></span></li>
                        <li class="post-comments"><a href="<?php echo get_permalink($id); ?>/#comments"><i class="uil uil-comment"></i><?php echo get_comments_number($id); ?></a></li>
                     </ul>
                     <!-- /.post-meta -->
                  </div>
               </li>
            <?php
            }
            ?>
         </ul>
      </div>
   <?php
      wp_reset_postdata();
   } else {
      // Handle the case where no posts are found
      echo '<div class="widget">';
      echo '<h3 class="h4 widget-title mb-3">' . esc_html__('Recent Posts', 'codeweber') . '</h3>';
      echo '<p>' . esc_html__('No recent posts found.', 'codeweber') . '</p>';
      echo '</div>';
   }
}
add_action('sidebar_main_end', 'recent_post_blog_widget', 10);




/**
 * FAQ Cloud Links Widget
 */

function cloud_links_blog_widget()
{
   $args = [
      'taxonomy'      => ['post_tag'], // название таксономии с WP 4.5
      'orderby'       => 'name',
      'order'         => 'ASC',
      'hide_empty'    => true,
      'update_term_meta_cache' => true, // подгружать метаданные в кэш
   ];
   $post_tags = get_terms($args); ?>
   <div class="widget">
      <h4 class="widget-title mb-3"><?php esc_html_e('Post tags', 'codeweber'); ?></h4>
      <ul class="list-unstyled tag-list mb-0">
         <?php foreach ($post_tags as $post_tag) {
            $tag_link = get_tag_link($post_tag->term_id); ?>
            <li><a href="<?php echo $tag_link; ?>" title='<?php echo $post_tag->name; ?>' class="btn btn-soft-ash btn-sm rounded-pill mb-0 <?php echo $post_tag->slug; ?>"><?php echo $post_tag->name; ?></a></li>
         <?php } ?>
      </ul>
   </div>

<?php }

add_action('sidebar_main_end', 'cloud_links_blog_widget', 20);
