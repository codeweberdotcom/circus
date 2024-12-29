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
               <div class="row gx-md-10 gy-10 gy-md-13 isotope">
                  <?php
                  global $query_string;
                  query_posts($query_string . "&posts_per_page=9");
                  if (
                     have_posts()
                  ) :
                     while (have_posts('showposts=5')) {
                        the_post();
                        $taxonomy_list = wp_get_post_terms($post->ID, 'projects_category', array('fields' => 'names')); ?>
                        <?php $taxonomy_list_slug = wp_get_post_terms($post->ID, 'projects_category', array('fields' => 'slugs')); ?>
                        <div class="project item col-md-6 col-xl-4 <?php echo implode(' ', $taxonomy_list_slug); ?>">
                           <figure class="lift rounded mb-6">

                              <?php
                              if (get_theme_mod('codeweber_page_project_click') == 'popup') { ?>
                                 <a href="<?php echo get_the_post_thumbnail_url($post->ID, 'sandbox_hero_6'); ?>" data-glightbox data-gallery="projects">
                                    <?php echo get_the_post_thumbnail($post->ID, 'archive_4'); ?>
                                 </a>
                              <?php } else { ?>
                                 <a href="<?php echo get_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID, 'archive_4'); ?></a>
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
                  <?php };
                  endif; ?>
               </div>
               <!-- /.row -->
            </div>
            <!-- /.grid -->
            <?php codeweber_pagination(); ?>
            <!-- /post pagination -->
         </div>
         <!-- /.container -->
      </section>
      <!-- /section -->