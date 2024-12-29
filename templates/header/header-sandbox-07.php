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
   <nav class="navbar navbar-expand-lg fancy navbar-light navbar-bg-light caret-none <?php echo $class_nav; ?>">
      <div class="container">
         <div class="navbar-collapse-wrapper bg-white d-flex flex-row flex-nowrap w-100 justify-content-between align-items-center">
            <div class="navbar-brand w-100">
               <?php echo codeweber_logo($color_logo, NULL, NULL); ?>
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
                  <li class="nav-item">
                     <nav class="nav social social-muted justify-content-end text-end">
                        <?php if (class_exists('ACF')) {
                           get_template_part('templates/components/socialicons', '');
                        }; ?>
                     </nav>
                     <!-- /.social -->
                  </li>
                  <li class="nav-item d-lg-none">
                     <button class="hamburger offcanvas-nav-btn"><span></span></button>
                  </li>
               </ul>
               <!-- /.navbar-nav -->
            </div>
            <!-- /.navbar-other -->
         </div>
         <!-- /.navbar-collapse-wrapper -->
      </div>
      <!-- /.container -->
   </nav>
   <!-- /.navbar -->
</header>
<!-- /header -->