  <footer class="bg-soft-primary">
     <div class="container">
        <div class="card shadow-lg mt-n16 mt-md-n21 mb-15 mb-md-14">
           <div class="row gx-0">
              <div class="col-lg-6 image-wrapper bg-image bg-cover rounded-top rounded-lg-start d-none d-md-block" data-image-src="<?php echo get_template_directory_uri(); ?>./dist/img/photos/tm1.jpg">
              </div>
              <!--/column -->
              <div class="col-lg-6">
                 <div class="p-10 p-md-11 p-lg-13">
                    <h2 class="display-4 mb-3"><?php esc_html_e('Let’s Talk', 'codeweber'); ?></h2>
                    <p class="lead fs-lg"><?php esc_html_e("Let's make something great together. We are trusted by over 5000+ clients. Join them by using our services and grow your business.", 'codeweber'); ?></p>
                    <p><?php esc_html_e('Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Maecenas faucibus mollis interdum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.', 'codeweber'); ?></p>
                    <a href="#" class="btn btn-primary <?php echo GetThemeButton(); ?>rounded-pill mt-2"><?php esc_html_e('Join Us', 'codeweber'); ?></a>
                 </div>
                 <!--/div -->
              </div>
              <!--/column -->
           </div>
           <!--/.row -->
        </div>
        <!-- /.card -->
     </div>
     <!-- /.container -->
     <div class="container pb-12 text-center">
        <div class="row mt-n10 mt-lg-0">
           <div class="col-xl-10 mx-auto">
              <div class="row mb-3">
                 <div class="col-md-4">
                    <div class="widget">
                       <h4 class="widget-title"><?php esc_html_e('Address', 'codeweber'); ?></h4>
                       <address><?php echo brk_adress(); ?></address>
                    </div>
                    <!-- /.widget -->
                 </div>
                 <!--/column -->
                 <div class="col-md-4">
                    <div class="widget">
                       <h4 class="widget-title"><?php esc_html_e('Phone', 'codeweber'); ?></h4>
                       <p><?php echo brk_phone_one(NULL); ?><br />
                          <?php echo brk_phone_two(NULL); ?><br /></p>
                    </div>
                    <!-- /.widget -->
                 </div>
                 <!--/column -->
                 <div class="col-md-4">
                    <div class="widget">
                       <h4 class="widget-title"><?php esc_html_e('E-mail', 'codeweber'); ?></h4>
                       <p><a href="mailto:<?php echo brk_email(); ?>" class="link-body alert-link hover"><?php echo brk_email(); ?></a></p>
                    </div>
                    <!-- /.widget -->
                 </div>
                 <!--/column -->
              </div>
              <!--/.row -->
              <p><a class="link-body alert-link hover" href="<?php echo esc_attr(wp_get_theme()->get('ThemeURI')); ?>" target="_blank">
                    © <?php echo date("Y"); ?> <?php esc_html_e('Made with', 'codeweber'); ?> Codeweber</a>
                 <br class="d-none d-lg-block" /><?php esc_html_e('All rights reserved.', 'codeweber'); ?>
              </p>
              <nav class="nav social justify-content-center">
                 <?php if (class_exists('ACF')) {
                     get_template_part('templates/components/socialicons', '');
                  }; ?>
              </nav>
              <!-- /.social -->
           </div>
           <!-- /column -->
        </div>
        <!-- /.row -->
     </div>
     <!-- /.container -->
  </footer>