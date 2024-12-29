  <footer class="bg-dark text-inverse">
     <div class="container pt-13 pb-7">
        <div class="row gy-6 gy-lg-0">
           <div class="col-lg-4">
              <div class="widget">
                 <?php echo codeweber_logo('light', true, NULL); ?>
                 <?php echo footer_about_company_option(); ?>
              </div>
              <!-- /.widget -->
           </div>
           <!-- /column -->
           <div class="col-md-4 col-lg-2 offset-lg-2">
              <div class="widget">
                 <h4 class="widget-title text-white mb-3"><?php esc_html_e('Services', 'codeweber'); ?></h4>
                 <?php get_template_part('templates/components/footer-menu-light', ''); ?>
              </div>
              <!-- /.widget -->
           </div>
           <!-- /column -->
           <div class="col-md-4 col-lg-2">
              <div class="widget">
                 <h4 class="widget-title text-white mb-3"><?php esc_html_e('Phone', 'codeweber'); ?></h4>
                 <?php echo brk_phone_one(NULL); ?><br />
                 <?php echo brk_phone_two(NULL); ?><br />
              </div>
              <!-- /.widget -->
           </div>
           <!-- /column -->
           <div class="col-md-4 col-lg-2">
              <div class="widget">
                 <h4 class="widget-title text-white mb-3"><?php esc_html_e('Address', 'codeweber'); ?></h4>
                 <address><?php echo brk_adress(); ?></address>
              </div>
              <!-- /.widget -->
           </div>
           <!-- /column -->
        </div>
        <!--/.row -->
        <hr class="mt-11 mt-md-12 mb-7" />
        <div class="d-md-flex align-items-center justify-content-between">
           <p class="mb-2 mb-lg-0"><a class="text-white-50" href="<?php echo esc_attr(wp_get_theme()->get('ThemeURI')); ?>" target="_blank">
                 <?php echo year_of_birth_company(); ?></a>
              <br class="d-block d-lg-none" /><?php echo esc_html__('All rights reserved.', 'codeweber'); ?>
           </p>

           <?php
               wp_nav_menu(
                  array(
                     'theme_location'    => 'header_1',
                     'depth'             => 1,
                     'container'         => '',
                     'container_class'   => '',
                     'container_id'      => '',
                     'menu_class'        => 'navbar-nav',
                     'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                     'walker'            => new WP_Bootstrap_Navwalker(),
                  )
               );

           ?>
           <nav class="nav social social-white text-md-end">
              <?php if (class_exists('ACF')) {
                  get_template_part('templates/components/socialicons', '');
               }; ?>
           </nav>
           <!-- /.social -->
        </div>
        <!-- /div -->
     </div>
     <!-- /.container -->
  </footer>