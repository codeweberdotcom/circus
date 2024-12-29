    <?php
      if ($args['style_nav'] == 'transparent') {
         $class_nav = 'position-absolute ';
         $class_nav .= $args['bg_nav'];
      } elseif ($args['style_nav'] == 'solid') {
         $class_nav = $args['bg_nav'];
      } else {
         $class_nav = NULL;
      }

      $transparent_style = $args['style_nav'];

      if ($args['bg_nav'] == 'navbar-dark') {
         $color_logo = 'light';
      } elseif ($args['bg_nav'] == 'navbar-light') {
         $color_logo = 'dark';
         $transparent_style = 'solid';
      }
      ?>

    <header class="wrapper bg-soft-primary">
       <nav class="navbar navbar-expand-lg extended navbar-light navbar-bg-light caret-none <?php echo $class_nav; ?>">
          <div class="container flex-lg-column">
             <div class="topbar d-flex flex-row w-100 justify-content-between align-items-center">
                <div class="navbar-brand">
                   <?php echo codeweber_logo($color_logo, NULL, NULL); ?>
                </div>
                <div class="navbar-other ms-auto">
                   <ul class="navbar-nav flex-row align-items-center">
                      <li class="nav-item"><a class="nav-link" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-info"><i class="uil uil-info-circle"></i></a></li>
                      <li class="nav-item dropdown language-select text-uppercase">
                         <a class="nav-link dropdown-item dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">En</a>
                         <ul class="dropdown-menu">
                            <li class="nav-item"><a class="dropdown-item" href="#">En</a></li>
                            <li class="nav-item"><a class="dropdown-item" href="#">De</a></li>
                            <li class="nav-item"><a class="dropdown-item" href="#">Es</a></li>
                         </ul>
                      </li>
                      <li class="nav-item d-lg-none">
                         <button class="hamburger offcanvas-nav-btn"><span></span></button>
                      </li>
                   </ul>
                   <!-- /.navbar-nav -->
                </div>
                <!-- /.navbar-other -->
             </div>
             <!-- /.d-flex -->
             <div class="navbar-collapse-wrapper bg-white d-flex flex-row align-items-center">
                <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                   <div class="offcanvas-header d-lg-none">
                      <?php echo codeweber_logo('light', NULL, NULL); ?>
                      <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                   </div>
                   <div class="offcanvas-body d-flex flex-column h-100">
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
                </div>
                <!-- /.navbar-collapse -->
                <div class="navbar-other ms-auto w-100 d-none d-lg-block">
                   <nav class="nav social social-muted justify-content-end text-end">
                      <?php if (class_exists('ACF')) {
                           get_template_part('templates/components/socialicons', '');
                        }; ?>
                   </nav>
                   <!-- /.social -->
                </div>
                <!-- /.navbar-other -->
             </div>
             <!-- /.navbar-collapse-wrapper -->
          </div>
          <!-- /.container -->
       </nav>
       <!-- /.navbar -->
       <div class="offcanvas offcanvas-end text-dark bg-light" id="offcanvas-info" data-bs-scroll="true">
          <div class="offcanvas-header">
             <?php echo codeweber_logo($color_logo, NULL, NULL); ?>
             <button type="button" class="btn-close btn-close-dark" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body pb-6">
             <?php echo about_company_option(); ?>
             <!-- /.widget -->
             <?php offcanvas_contact_option(); ?>
             <!-- /.widget -->
             <?php offcanvas_menu_option(); ?>
             <!-- /.widget -->
             <?php social_icons_option(); ?>
             <!-- /.widget -->
          </div>
          <!-- /.offcanvas-body -->
       </div>
       <!-- /.offcanvas -->
    </header>
    <!-- /header -->