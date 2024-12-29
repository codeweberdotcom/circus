    <?php
      global $codeweber;
      $terms = get_terms([
         'taxonomy' => 'projects_category',
         'hide_empty' => true,
      ]);
      ?>

    <section class="wrapper bg-light<?php echo $codeweber['page_settings']['angle_class']; ?>">
       <div class="container py-14 py-md-16<?php echo $codeweber['page_settings']['container_class']; ?>">
          <div class="grid grid-view projects-masonry pb-14 pb-md-16<?php echo $codeweber['page_settings']['content_class']; ?>">
             <div class="isotope-filter filter mb-10">
                <p><?php esc_html_e('Filter:', 'codeweber') ?></p>
                <ul>
                   <li><a class="filter-item active" data-filter="*"><?php esc_html_e('All', 'codeweber') ?></a></li>
                   <?php foreach ($terms as $term) { ?>
                      <li><a class="filter-item" data-filter=".<?php echo $term->slug; ?>"><?php echo $term->name; ?></a></li>
                   <?php } ?>
                </ul>
             </div>
             <div class="row gx-md-10 gy-10 gy-md-13 isotope">
                <?php $my_posts = new WP_Query;
                  $myposts = $my_posts->query([
                     'post_type' => 'projects',
                     'hide_empty' => true,
                     'posts_per_page' => -1
                  ]);


                  $query = new WP_Query([
                     'post_type' => 'projects',
                     'hide_empty' => true,
                     'posts_per_page' => -1
                  ]);

                  while ($query->have_posts()) {
                     $query->the_post();
                     $size_img = array('archive_4', 'archive_4_1', 'archive_4_2');
                     $size_finish = array_rand($size_img, 1);
                     $taxonomy_list = wp_get_post_terms($post->ID, 'projects_category', array('fields' => 'names')); ?>
                   <?php $taxonomy_list_slug = wp_get_post_terms($post->ID, 'projects_category', array('fields' => 'slugs')); ?>
                   <div class="project item col-md-6 col-xl-4 <?php echo implode(' ', $taxonomy_list_slug); ?>">
                      <figure class="lift <?php echo get_theme_mod('codeweber_image'); ?> mb-6">


                         <?php
                           if (get_theme_mod('codeweber_page_project_click') == 'popup') { ?>
                            <a href="<?php echo get_the_post_thumbnail_url($post->ID, 'sandbox_hero_6'); ?>" data-glightbox data-gallery="projects">
                               <?php echo get_the_post_thumbnail($post->ID, $size_img[$size_finish]); ?>
                            </a>
                         <?php } else { ?>
                            <a href="<?php echo get_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID, $size_img[$size_finish]); ?></a>
                         <?php }
                           ?>

                      </figure>
                      <div class="project-details d-flex justify-content-center flex-column">
                         <div class="post-header">
                            <div class="post-category text-line mb-3 text-purple"><?php echo implode(', ', $taxonomy_list); ?></div>
                            <h3 class="post-title"><?php echo esc_html($post->post_title); ?></h3>
                         </div>
                         <!-- /.post-header -->
                      </div>
                      <!-- /.project-details -->
                   </div>
                   <!-- /.project -->
                <?php } ?>
                <?php wp_reset_postdata(); ?>
             </div>
             <!-- /.row -->
          </div>
          <!-- /.grid -->
       </div>
       <!-- /.container -->
    </section>
    <!-- /section -->