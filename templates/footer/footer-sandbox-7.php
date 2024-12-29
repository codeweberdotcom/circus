  <footer class="bg-gradient-reverse-primary">
     <div class="container pt-13 pt-md-15 pb-7">
        <div class="card image-wrapper bg-full bg-image bg-overlay bg-overlay-400 mb-13" data-image-src="<?php echo get_template_directory_uri(); ?>/dist/img/photos/bg2.jpg">
           <div class="card-body p-9 p-xl-11">
              <div class="row align-items-center gy-6">
                 <div class="col-lg-7">
                    <h3 class="display-5 text-white"><?php esc_html_e('Subscribe to our newsletter', 'codeweber'); ?></h3>
                    <p class="lead pe-lg-12 mb-0 text-white"><?php esc_html_e("Subscribe to our newsletter to get our news & deals delivered to you. Don't worry, we hate spam and we respect your privacy.", 'codeweber'); ?></p>
                 </div>
                 <!-- /column -->
                 <div class="col-lg-5 col-xl-4 offset-xl-1">
                    <div class="newsletter-wrapper">
                       <!-- Begin Mailchimp Signup Form -->
                       <div id="mc_embed_signup2">
                          <form action="https://elemisfreebies.us20.list-manage.com/subscribe/post?u=aa4947f70a475ce162057838d&amp;id=b49ef47a9a" method="post" id="mc-embedded-subscribe-form2" name="mc-embedded-subscribe-form" class="validate dark-fields" target="_blank" novalidate>
                             <div id="mc_embed_signup_scroll2">
                                <div class="mc-field-group input-group form-floating">
                                   <input type="email" value="" name="EMAIL" class="required email form-control <?php echo GetThemeButton(); ?>" placeholder="Email Address" id="mce-EMAIL2">
                                   <label for="mce-EMAIL2" class="position-absolute"><?php esc_html_e('Email Address', 'codeweber'); ?></label>
                                   <input type="submit" value="Join" name="subscribe" id="mc-embedded-subscribe2" class="btn btn-primary">
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
                 <!-- /column -->
              </div>
              <!-- /.row -->
           </div>
           <!--/.card-body -->
        </div>
        <!--/.card -->
        <div class="row gy-6 gy-lg-0">
           <div class="col-lg-4">
              <div class="widget">
                 <h3 class="h2 mb-3 "><?php esc_html_e('Join the Community', 'codeweber'); ?></h3>
                 <p class="lead mb-5"><?php esc_html_e("Let's make something great together. We are trusted by over 5000+ clients. Join them by using our services and grow your business.", 'codeweber'); ?></p>
                 <a href="#" class="btn  btn-primary rounded-pill"><?php esc_html_e('Join Us', 'codeweber'); ?></a>
              </div>
              <!-- /.widget -->
           </div>
           <!-- /column -->
           <div class="col-md-4 col-lg-2 offset-lg-2">
              <div class="widget">
                 <h4 class="widget-title  mb-3"><?php esc_html_e('Need Help?', 'codeweber'); ?></h4>
                 <?php get_template_part('templates/components/footer-menu-light', ''); ?>
              </div>
              <!-- /.widget -->
           </div>
           <!-- /column -->
           <div class="col-md-4 col-lg-2">
              <div class="widget">
                 <h4 class="widget-title  mb-3"><?php esc_html_e('Learn More', 'codeweber'); ?></h4>
                 <?php get_template_part('templates/components/footer-menu-light', ''); ?>
              </div>
              <!-- /.widget -->
           </div>
           <!-- /column -->
           <div class="col-md-4 col-lg-2">
              <div class="widget">
                 <h4 class="widget-title  mb-3"><?php esc_html_e('Get in Touch ', 'codeweber'); ?></h4>
                 <address><?php echo brk_adress(); ?></address>
                 <a href="mailto:<?php echo brk_email(); ?>" class="link-body"><?php echo brk_email(); ?></a><br />
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
           <p class="mb-2 mb-lg-0"><a class="link-body" href="<?php echo esc_attr(wp_get_theme()->get('ThemeURI')); ?>" target="_blank">
                 © <?php echo date("Y"); ?> <?php esc_html_e('Made with', 'codeweber'); ?> Codeweber</a>
              <br class="d-block d-lg-none" /><?php esc_html_e('All rights reserved.', 'codeweber'); ?>
           </p>
           <nav class="nav social  text-md-end">
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