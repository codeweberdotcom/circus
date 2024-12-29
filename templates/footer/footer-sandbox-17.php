  <footer class="bg-dark text-inverse">
     <div class="container pt-20 pt-lg-21 pb-7">
        <div class="row gy-6 gy-lg-0">
           <div class="col-lg-4">
              <div class="widget">
                 <h3 class="h2 mb-3 text-white"><?php esc_html_e('Join the Community', 'codeweber'); ?></h3>
                 <p class="lead mb-5"><?php esc_html_e("Let's make something great together. We are trusted by over 5000+ clients. Join them by using our services and grow your business.", 'codeweber'); ?></p>
                 <a href="#" class="btn btn-white  rounded-pill"><?php esc_html_e('Join Us', 'codeweber'); ?></a>
              </div>
              <!-- /.widget -->
           </div>
           <!-- /column -->
           <div class="col-md-4 col-lg-2 offset-lg-2">
              <div class="widget">
                 <h4 class="widget-title text-white mb-3"><?php esc_html_e('Need Help?', 'codeweber'); ?></h4>
                 <?php get_template_part('templates/components/footer-menu-light', ''); ?>
              </div>
              <!-- /.widget -->
           </div>
           <!-- /column -->
           <div class="col-md-4 col-lg-2">
              <div class="widget">
                 <h4 class="widget-title text-white mb-3"><?php esc_html_e('Learn More', 'codeweber'); ?></h4>
                 <?php get_template_part('templates/components/footer-menu', ''); ?>
              </div>
              <!-- /.widget -->
           </div>
           <!-- /column -->
           <div class="col-md-4 col-lg-2">
              <div class="widget">
                 <h4 class="widget-title text-white mb-3"><?php esc_html_e('Get in Touch ', 'codeweber'); ?></h4>
                 <address><?php echo brk_adress(); ?></address>
                 <a href="mailto:<?php echo brk_email(); ?>"><?php echo brk_email(); ?></a><br />
                 <?php echo brk_phone_one(NULL); ?><br />
                 <?php echo brk_phone_two(NULL); ?><br />
              </div>
              <!-- /.widget -->
           </div>
           <!-- /column -->
        </div>
        <!--/.row -->
        <hr class="mt-13 mt-md-15 mb-7" />
        <div class="d-md-flex align-items-center justify-content-between">
           <p class="mb-2 mb-lg-0"><a class="text-white-50" href="<?php echo esc_attr(wp_get_theme()->get('ThemeURI')); ?>" target="_blank">
                 © <?php echo date("Y"); ?> <?php esc_html_e('Made with', 'codeweber'); ?> Codeweber</a>
              <br class="d-block d-lg-none" /><?php esc_html_e('All rights reserved.', 'codeweber'); ?>
           </p>
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