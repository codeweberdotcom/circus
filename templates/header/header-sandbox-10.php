    <?php
      if ($args['style_nav'] == 'transparent') {
         $class_nav = 'position-absolute navbar-dark';
      }

      $transparent_style = $args['style_nav'];

      if ($args['bg_nav'] == 'nav-dark') {
         $color_logo = 'light';
      } elseif ($args['bg_nav'] == 'nav-light') {
         $color_logo = 'dark';
      } else {
         $color_logo = NULL;
      }
      ?>
    <header class="wrapper bg-light">
       <div class="bg-navy text-white fw-bold fs-15">
          <div class="container py-2 d-md-flex flex-md-row">
             <div class="d-flex flex-row align-items-center">
                <div class="icon text-white fs-22 mt-1 me-2"> <i class="uil uil-location-pin-alt"></i></div>
                <address class="mb-0"><?php echo brk_adress(); ?></address>
             </div>
             <div class="d-flex flex-row align-items-center me-6 ms-auto">
                <div class="icon text-white fs-22 mt-1 me-2"> <i class="uil uil-phone-volume"></i></div>
                <p class="mb-0"> <?php echo brk_phone_one('light'); ?> </p>
             </div>
             <div class="d-flex flex-row align-items-center">
                <div class="icon text-white fs-22 mt-1 me-2"> <i class="uil uil-message"></i></div>
                <p class="mb-0"><a href="mailto:<?php echo brk_email(); ?>" class="link-white hover"><?php echo brk_email(); ?></a></p>
             </div>
          </div>
          <!-- /.container -->
       </div>
       <nav class="navbar navbar-expand-lg center-nav transparent <?php echo $class_nav; ?>">
          <div class="container flex-lg-row flex-nowrap align-items-center">
             <div class="navbar-brand w-100 pe-3">
                <?php echo codeweber_logo($color_logo, NULL, $transparent_style); ?>
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
                   <?php if (have_rows('cw_buttons', 'option')) {
                        while (have_rows('cw_buttons', 'option')) {
                           the_row();
                           $buttons_object = new CW_Buttons('<div class="d-flex justify-content-center">%s</div>', '<a href="#" class="btn btn-sm btn-primary rounded">' . esc_html__('Contact', 'codeweber') . '</a>', NULL, NULL); ?>
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