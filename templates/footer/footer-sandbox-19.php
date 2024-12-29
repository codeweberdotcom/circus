  <footer class="bg-light">
     <div class="container pb-13 pb-md-15">
        <div class="card image-wrapper bg-full bg-image bg-overlay bg-overlay-300 mb-14" data-image-src="<?php echo get_template_directory_uri(); ?>./dist/img/photos/bg16.png">
           <div class="card-body p-10 p-xl-12">
              <div class="row text-center">
                 <div class="col-xl-11 col-xxl-9 mx-auto">
                    <h2 class="fs-16 text-uppercase text-white mb-3"><?php esc_html_e('Join Our Community', 'codeweber'); ?></h2>
                    <h3 class="display-3 mb-8 px-lg-8 text-white"><?php esc_html_e('We are', 'codeweber'); ?> <span class="underline-3 style-2 yellow"><?php esc_html_e('trusted', 'codeweber'); ?></span> <?php esc_html_e('by over 5000+ clients. Join them now and grow your business.', 'codeweber'); ?></h3>
                 </div>
                 <!-- /column -->
              </div>
              <!-- /.row -->
              <div class="d-flex justify-content-center">
                 <span><a class="btn btn-white rounded"><?php esc_html_e('Get Started', 'codeweber'); ?></a></span>
              </div>
           </div>
           <!--/.card-body -->
        </div>
        <!--/.card -->
        <div class="row gy-6 gy-lg-0">
           <div class="col-md-4 col-lg-3">
              <div class="widget">
                 <?php echo codeweber_logo('dark', true, NULL); ?>
                 <p class="mb-4">
                    <a class="link-body" href="<?php echo esc_attr(wp_get_theme()->get('ThemeURI')); ?>" target="_blank">
                       © <?php echo date("Y"); ?> <?php esc_html_e('Made with', 'codeweber'); ?> Codeweber</a>
                    <br class="d-none d-lg-block" /><?php esc_html_e('All rights reserved.', 'codeweber'); ?>
                 </p>
                 <nav class="nav social ">
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
                 <h4 class="widget-title  mb-3"><?php esc_html_e('Get in Touch ', 'codeweber'); ?></h4>
                 <address class="pe-xl-15 pe-xxl-17"><?php echo brk_adress(); ?></address>
                 <a href="mailto:<?php echo brk_email(); ?>" class="link-body"><?php echo brk_email(); ?></a><br />
                 <?php echo brk_phone_one(NULL); ?><br />
                 <?php echo brk_phone_two(NULL); ?><br />
              </div>
              <!-- /.widget -->
           </div>
           <!-- /column -->
           <div class="col-md-4 col-lg-3">
              <div class="widget">
                 <h4 class="widget-title  mb-3"><?php esc_html_e('Learn More', 'codeweber'); ?></h4>
                 <?php get_template_part('templates/components/footer-menu-light', ''); ?>
              </div>
              <!-- /.widget -->
           </div>
           <!-- /column -->
           <div class="col-md-12 col-lg-3">
              <div class="widget">
                 <h4 class="widget-title  mb-3"><?php esc_html_e('Our Newsletter', 'codeweber'); ?></h4>
                 <p class="mb-5"><?php esc_html_e('Subscribe to our newsletter to get our news & deals delivered to you.', 'codeweber'); ?></p>
                 <div class="newsletter-wrapper">
                    <!-- Begin Mailchimp Signup Form -->
                    <div id="mc_embed_signup2">
                       <form action="https://elemisfreebies.us20.list-manage.com/subscribe/post?u=aa4947f70a475ce162057838d&amp;id=b49ef47a9a" method="post" id="mc-embedded-subscribe-form2" name="mc-embedded-subscribe-form" class="validate " target="_blank" novalidate>
                          <div id="mc_embed_signup_scroll2">
                             <div class="mc-field-group input-group form-floating">
                                <input type="email" value="" name="EMAIL" class="required email form-control <?php echo GetThemeButton(); ?>" placeholder="Email Address" id="mce-EMAIL2">
                                <label for="mce-EMAIL2"><?php esc_html_e('Email Address', 'codeweber'); ?></label>
                                <input type="submit" value="Join" name="subscribe" id="mc-embedded-subscribe2" class="btn btn-primary <?php echo GetThemeButton(); ?>">
                             </div>
                             <div id="mce-responses2" class="clear">
                                <div class="response" id="mce-error-response2" style="display:none"></div>
                                <div class="response" id="mce-success-response2" style="display:none"></div>
                             </div> <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                             <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_ddc180777a163e0f9f66ee014_4b1bcfa0bc" tabindex="-1" value=""></div>
                             <div class="clear"></div>
                          </div>
                       </form>
                    </div>
                    <!--End mc_embed_signup-->
                 </div>
                 <!-- /.newsletter-wrapper -->
              </div>
              <!-- /.widget -->
           </div>
           <!-- /column -->
        </div>
        <!--/.row -->
     </div>
     <!-- /.container -->
  </footer>