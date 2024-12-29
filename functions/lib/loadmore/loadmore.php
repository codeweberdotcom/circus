<?php

/**
 * Shortcode for listing Ajax Project
 * Link: https://ioecapsule.com/wordpress-load-more-posts-using-ajax-on-button-click/
 */


function projects_load_more_scripts()
{
   wp_enqueue_script('jquery');
   wp_register_script('loadmore_script', get_template_directory_uri() . '/functions/lib/loadmore/ajax.js', array('jquery'));
   wp_localize_script('loadmore_script', 'loadmore_params', array(
      'ajaxurl' => admin_url('admin-ajax.php'),
   ));
   wp_enqueue_script('loadmore_script');
}

add_action('wp_enqueue_scripts', 'projects_load_more_scripts');


function projects_load_more_ajax_handler()
{
   $type = $_POST['type'];
   $category = isset($_POST['category']) ? $_POST['category'] : '';
   $args['paged'] = $_POST['page'] + 1;
   $args['post_status'] = 'publish';
   $args['posts_per_page'] =  $_POST['limit'];
   $args['post_type'] =  'projects';
   $args['hide_empty'] =  true;

   if ($type == 'archive') {
      $args['category_name'] = $category;
   }
   query_posts($args);
   if (have_posts()) :
      while (have_posts()) : the_post();
         $post_id = get_the_ID();
         $size_finish = 'archive_4';
?>
         <div class="project item col-md-6 col-xl-3 mb-6">
            <figure class="overlay overlay-1 <?php echo get_theme_mod('codeweber_image'); ?>"><a href="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post_id), 'sandbox_hero_6'); ?>" data-glightbox data-gallery="shots-group"> <?php echo get_the_post_thumbnail($post_id, $size_finish); ?></a>
               <figcaption>
                  <h3 class="h5 from-top mb-0"><?php echo the_title(); ?></h3>
               </figcaption>
            </figure>
         </div>
         <!-- /.project -->
   <?php
      endwhile;
   endif;
   die;
}
add_action('wp_ajax_loadmore', 'projects_load_more_ajax_handler');
add_action('wp_ajax_nopriv_loadmore', 'projects_load_more_ajax_handler');





add_shortcode('projects_ajax', 'projects_ajax');

function projects_ajax($atts)
{
   ob_start();
   $atts = shortcode_atts(
      array(
         'category_id' => 'test',
      ),
      $atts
   ); ?>
   <div class="posts_ajax card card-body mb-6">
      <div class="latest_posts_wrapper mb-6 row">

         <?php
         $paged = (get_query_var('page')) ? get_query_var('page') : 1;
         $latests = new WP_Query(array(
            'post_type' => 'projects',
            'hide_empty' => true,
            'posts_per_page' => 8,
            'paged' => $paged,
            'tax_query' => array(
               array(
                  'taxonomy' => 'projects_category',
                  'field'    => 'id',
                  'terms'    => $atts['category_id']
               )
            )
         ));

         while ($latests->have_posts()) {
            $latests->the_post();
            $post_id = get_the_ID();
            $size_finish = 'archive_4';
         ?>
            <div class="project item col-md-6 col-xl-3 mb-6">
               <figure class="overlay overlay-1 <?php echo get_theme_mod('codeweber_image'); ?>"><a href="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post_id), 'sandbox_hero_6'); ?>" data-glightbox data-gallery="shots-group"> <?php echo get_the_post_thumbnail($post_id, $size_finish); ?></a>
                  <figcaption>
                     <h3 class="h5 from-top mb-0"><?php the_title(); ?></h3>
                  </figcaption>
               </figure>
            </div>
            <!-- /.project -->
         <?php }
         wp_reset_postdata(); ?>
      </div>
      <script>
         var limit = 8,
            page = 1,
            type = 'latest',
            category = '',
            max_pages_latest = <?php echo $latests->max_num_pages ?>
      </script>
      <?php if ($latests->max_num_pages > 1) {
         echo '<div class="load_more text-center">
                    <a href="#" class="btn btn-primary btn-load-more">Показать еще</a> 
                </div>';
      } else { ?>
      <?php }
      wp_reset_query();
      ?>
   </div>
<?php
   return ob_get_clean();
}
