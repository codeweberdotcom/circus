  <footer class="bg-dark text-inverse">
     <div class="container py-13 py-md-15">
        <div class="row gy-6 gy-lg-0">
           <div class="col-lg-4">
              <div class="widget">
                 <?php echo codeweber_logo('light', true, NULL); ?>
                 <p class="mb-4"><a class="text-white-50" href="<?php echo esc_attr(wp_get_theme()->get('ThemeURI')); ?>" target="_blank">
                       © <?php echo date("Y"); ?> <?php esc_html_e('Made with', 'codeweber'); ?> Codeweber</a>
                    <br class="d-none d-lg-block" /><?php esc_html_e('All rights reserved.', 'codeweber'); ?>
                 </p>
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
           <div class="col-md-4 col-lg-2 offset-lg-2">
              <div class="widget">
                 <h4 class="widget-title mb-3 text-white"><?php esc_html_e('Need Help?', 'codeweber'); ?></h4>
                 <?php get_template_part('templates/components/footer-menu', ''); ?>
              </div>
              <!-- /.widget -->
           </div>
           <!-- /column -->
           <div class="col-md-4 col-lg-2">
              <div class="widget">
                 <h4 class="widget-title mb-3 text-white"><?php esc_html_e('Learn More', 'codeweber'); ?></h4>
                 <?php get_template_part('templates/components/footer-menu-1', ''); ?>
              </div>
              <!-- /.widget -->
           </div>
           <!-- /column -->
           <div class="col-md-4 col-lg-2">
              <div class="widget">
                 <h4 class="widget-title mb-3 text-white"><?php esc_html_e('Get in Touch ', 'codeweber'); ?></h4>
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
     </div>
     <!-- /.container -->
  </footer>