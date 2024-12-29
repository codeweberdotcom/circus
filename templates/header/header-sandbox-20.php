      <header class="wrapper">
        <nav class="navbar navbar-expand-lg classic transparent position-absolute navbar-dark">
          <div class="container flex-lg-row flex-nowrap align-items-center">
            <div class="navbar-brand w-100">
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
            <div class="navbar-other w-100 d-flex ms-auto">
              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <li class="nav-item dropdown language-select text-uppercase">
                  <a class="nav-link dropdown-item dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">En</a>
                  <ul class="dropdown-menu">
                    <li class="nav-item"><a class="dropdown-item" href="#">En</a></li>
                    <li class="nav-item"><a class="dropdown-item" href="#">De</a></li>
                    <li class="nav-item"><a class="dropdown-item" href="#">Es</a></li>
                  </ul>
                </li>
                <li class="nav-item"><a class="nav-link" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-info"><i class="uil uil-info-circle"></i></a></li>
                <li class="nav-item d-lg-none">
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