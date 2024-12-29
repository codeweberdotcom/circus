    <section class="wrapper bg-light">
       <div class="container pt-10 pt-md-14">
          <div class="row">
             <div class="col-md-8 col-lg-7 col-xl-6 col-xxl-5">
                <h1 class="display-1 mb-3"><?php echo codeweber_page_title(); ?></h1>
                <?php if (get_theme_mod('project_description')) { ?>
                   <p class="lead fs-lg pe-lg-15 pe-xxl-12"><?php echo get_theme_mod('project_description'); ?></p>
                <?php } else { ?>
                   <p class="lead fs-lg pe-lg-15 pe-xxl-12">Check out some of our awesome projects with creative ideas and great design.</p>
                <?php }; ?>
                <?php codeweber_breadcrumbs(NULL, NULL, true); ?>
             </div>
             <!-- /column -->
          </div>
          <!-- /.row -->
       </div>
       <!-- /.container -->
    </section>
    <!-- /section -->

    <?php $terms = get_terms([
         'taxonomy' => 'projects_category',
         'hide_empty' => true,
      ]);
      ?>

    <section class="wrapper bg-light">
       <div class="container py-14 py-md-16">
          <div class="grid grid-view projects-masonry pb-14 pb-md-16">
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
                     $size_img = array('sandbox_hero_2', 'project_1_1');
                     $size_finish = array_rand($size_img, 1);
                     $taxonomy_list = wp_get_post_terms($post->ID, 'projects_category', array('fields' => 'names')); ?>
                   <?php $taxonomy_list_slug = wp_get_post_terms($post->ID, 'projects_category', array('fields' => 'slugs')); ?>
                   <div class="project item col-md-6 <?php echo implode(' ', $taxonomy_list_slug); ?>">
                      <figure class="lift rounded mb-6">

                         <a href="<?php echo get_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID, $size_img[$size_finish]); ?></a>

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