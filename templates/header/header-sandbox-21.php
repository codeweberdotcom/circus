         <?php if ($args['style_nav'] == 'transparent') {
            $class_nav = 'position-absolute navbar-dark';
         }   ?>

         <header class="wrapper bg-light">
            <nav class="navbar navbar-expand-lg classic transparent navbar-light <?php echo $class_nav; ?>">
               <div class="container flex-lg-row flex-nowrap align-items-center">
                  <div class="navbar-brand w-100 pe-3">
                     <?php echo codeweber_logo(NULL, NULL, NULL); ?>
                  </div>
                  <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                     <div class="offcanvas-header d-lg-none">
                        <?php echo codeweber_logo('light', NULL, NULL); ?>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                     </div>
                     <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
                        <?php get_template_part('templates/components/main-menu', ''); ?>
                        <!-- /.navbar-nav -->
                        <div class="offcanvas-footer d-lg-none">
                           <div>
                              <?php md_offcanvas_contact_option(); ?>
                              <?php md_social_icons_option(); ?>
                              <!-- /.social -->
                           </div>
                        </div>
                        <!-- /.offcanvas-footer -->
                     </div>
                     <!-- /.offcanvas-body -->
                  </div>
                  <!-- /.navbar-collapse -->
                  <div class="navbar-other ms-lg-4">
                     <ul class="navbar-nav flex-row align-items-center ms-auto">
                        <?php if (have_rows('cw_buttons', 'option')) {
                           while (have_rows('cw_buttons', 'option')) {
                              the_row();
                              $buttons_object = new CW_Buttons('<div class="d-flex justify-content-center">%s</div>', '<a href="#" class="btn btn-sm btn-primary rounded-pill">' . esc_html__('Contact', 'codeweber') . '</a>', NULL, NULL); ?>
                              <li class="nav-item d-none d-md-block">
                                 <?php echo $buttons_object->final_buttons; ?>
                              </li>
                           <?php } ?>
                        <?php } ?>
                        <li class="nav-item d-lg-none ms-0">
                           <button class="hamburger offcanvas-nav-btn"><span></span></button>
                        </li>
                     </ul>
                     <!-- /.navbar-nav -->
                  </div>
                  <!-- /.navbar-other -->
               </div>
               <!-- /.container -->
            </nav>
            <!-- /.navbar -->
         </header>
         <!-- /header -->