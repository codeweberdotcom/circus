  <footer class="bg-pale-primary">
     <div class="container pt-13 pt-md-15 pb-6 pb-md-8">
        <div class="row gy-6 gy-lg-0">
           <div class="col-md-4 col-lg-3">
              <div class="widget">
                 <h4 class="widget-title mb-3"><?php esc_html_e('Get in Touch', 'codeweber'); ?></h4>
                 <address class="pe-xl-15 pe-xxl-17"><?php echo brk_adress(); ?></address>
                 <a href="mailto:<?php echo brk_email(); ?>"><?php echo brk_email(); ?></a><br />
                 <?php echo brk_phone_one(NULL); ?><br />
                 <?php echo brk_phone_two(NULL); ?><br />
              </div>
              <!-- /.widget -->
              <div class="widget">
                 <h4 class="widget-title mb-3"><?php esc_html_e('Elsewhere', 'codeweber'); ?></h4>
                 <nav class="nav social social-dark">
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
                 <h4 class="widget-title mb-3"><?php esc_html_e('Services', 'codeweber'); ?></h4>
                 <?php get_template_part('templates/components/footer-menu-light', ''); ?>
              </div>
              <!-- /.widget -->
           </div>
           <!-- /column -->
           <div class="col-md-4 col-lg-3">
              <div class="widget">
                 <h4 class="widget-title mb-3"><?php esc_html_e('Learn More', 'codeweber'); ?></h4>
                 <?php get_template_part('templates/components/footer-menu-light-1', ''); ?>
              </div>
              <!-- /.widget -->
           </div>
           <!-- /column -->
           <div class="col-md-4 col-lg-3">
              <h4 class="widget-title mb-3"><?php esc_html_e('Popular Posts', 'codeweber'); ?></h4>
              <?php
               sandbox_recent_post();
               ?>
              <!-- /.recent-posts -->

           </div>
           <!-- /column -->
        </div>
        <!--/.row -->
        <p class="mt-6 mb-0 text-center"><a class="text-dark-50" href="<?php echo esc_attr(wp_get_theme()->get('ThemeURI')); ?>" target="_blank">
              © <?php echo date("Y"); ?> <?php esc_html_e('Made with', 'codeweber'); ?> Codeweber</a>
           <br class="d-block d-lg-none" /><?php esc_html_e('All rights reserved.', 'codeweber'); ?>
        </p>
     </div>
     <!-- /.container -->
  </footer>