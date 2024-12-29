  <footer class="bg-dark text-inverse">
     <div class="container py-13 py-md-15">
        <div class="row gy-6 gy-lg-0">
           <div class="col-md-4 col-lg-3">
              <h4 class="widget-title text-white mb-3"><?php esc_html_e('Popular Posts', 'codeweber'); ?></h4>
              <?php
               sandbox_recent_post();
               ?>
              <!-- /.recent-posts -->
           </div>
           <!-- /column -->
           <div class="col-md-4 col-lg-3">
              <div class="widget">
                 <h4 class="widget-title text-white mb-3"><?php esc_html_e('Tags', 'codeweber'); ?></h4>
                 <?php
                  $tags = get_tags([
                     'number'       => 4,
                     'order'        => 'ASC',
                     'hide_empty'   => true,
                  ]); ?>
                 <ul class="list-unstyled tag-list">
                    <?php foreach ($tags as $tag) {
                        $tag_link = get_tag_link($tag->term_id); ?>
                       <li><a href="<?php echo $tag_link; ?>" title='<?php echo $tag->name; ?>' class="btn btn-soft-ash text-white  btn-sm rounded-pill"><?php echo $tag->name; ?></a></li>
                    <?php } ?>
                 </ul>
              </div>
              <!-- /.widget -->
              <div class="widget">
                 <h4 class="widget-title text-white mb-3"><?php esc_html_e('Categories', 'codeweber'); ?></h4>
                 <ul class="unordered-list text-reset bullet-white">
                    <?php
                     $categories = get_categories([
                        'number'       => 3,
                        'order'        => 'ASC',
                        'hide_empty'   => true,
                     ]);
                     foreach ($categories as $category) {
                        echo '<li><a href="' . get_category_link($category->term_id) . '">' . $category->name . ' (' . $category->count . ')</a></li>';
                     }
                     ?>
                 </ul>
              </div>
              <!-- /.widget -->
           </div>
           <!-- /column -->
           <div class="col-md-4 col-lg-3">
              <div class="widget">
                 <h4 class="widget-title text-white mb-3"><?php esc_html_e('Get in Touch', 'codeweber'); ?></h4>
                 <address class="pe-xl-15 pe-xxl-17"><?php echo brk_adress(); ?></address>
                 <a href="mailto:<?php echo brk_email(); ?>"><?php echo brk_email(); ?></a><br />
                 <?php echo brk_phone_one(NULL); ?><br />
                 <?php echo brk_phone_two(NULL); ?><br />
              </div>
              <!-- /.widget -->
              <div class="widget">
                 <h4 class="widget-title text-white mb-3"><?php esc_html_e('Elsewhere', 'codeweber'); ?></h4>
                 <nav class="nav social social-white">
                    <?php if (class_exists('ACF')) {
                        get_template_part('templates/components/socialicons', '');
                     }; ?>
                 </nav>
                 <!-- /.social -->
              </div>
              <!-- /.widget -->
           </div>
           <!-- /column -->
           <div class="col-md-4 col-lg-3">
              <div class="widget">
                 <h4 class="widget-title text-white mb-3"><?php esc_html_e('Learn More', 'codeweber'); ?></h4>
                 <?php get_template_part('templates/components/footer-menu-light', ''); ?>
              </div>
              <!-- /.widget -->
              <div class="widget">
                 <h4 class="widget-title text-white mb-3"><?php esc_html_e('Need Help?', 'codeweber'); ?></h4>
                 <?php get_template_part('templates/components/footer-menu-light-1', ''); ?>
              </div>
              <!-- /.widget -->
           </div>
           <!-- /column -->
        </div>
        <!--/.row -->
        <p class="mt-6 mb-0 text-center"><a class="text-white-50" href="<?php echo esc_attr(wp_get_theme()->get('ThemeURI')); ?>" target="_blank">
              © <?php echo date("Y"); ?> <?php esc_html_e('Made with', 'codeweber'); ?> Codeweber</a>
           <br class="d-block d-lg-none" /><?php esc_html_e('All rights reserved.', 'codeweber'); ?>
        </p>
     </div>
     <!-- /.container -->
  </footer>