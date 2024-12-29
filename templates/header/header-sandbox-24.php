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
<header class="wrapper bg-gray">
   <nav class="navbar navbar-expand-lg extended extended-alt navbar-light navbar-bg-light <?php echo $class_nav; ?>">
      <div class="container flex-lg-column">
         <div class="topbar d-flex flex-row justify-content-lg-center align-items-center">
            <div class="navbar-brand">
               <?php echo codeweber_logo($color_logo, NULL, NULL); ?>
            </div>
         </div>
         <!-- /.d-flex -->
         <div class="navbar-collapse-wrapper bg-white d-flex flex-row align-items-center justify-content-between">
            <div class="navbar-other w-100 d-none d-lg-block">
               <nav class="nav social social-muted">
                  <?php if (class_exists('ACF')) {
                     get_template_part('templates/components/socialicons', '');
                  }; ?>
               </nav>
               <!-- /.social -->
            </div>
            <!-- /.navbar-other -->
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
            <div class="navbar-other w-100 d-flex">
               <ul class="navbar-nav flex-row align-items-center ms-auto">
                  <li class="nav-item"><a class="nav-link" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-info"><i class="uil uil-info-circle"></i></a></li>
                  <li class="nav-item"><a class="nav-link" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-search"><i class="uil uil-search"></i></a></li>
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
   <div class="offcanvas offcanvas-top bg-light" id="offcanvas-search" data-bs-scroll="true">
      <div class="container d-flex flex-row py-6">
         <form class="search-form w-100">
            <input id="search-form" type="text" class="form-control" placeholder="Type keyword and hit enter">
         </form>
         <!-- /.search-form -->
         <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <!-- /.container -->
   </div>
   <!-- /.offcanvas -->
</header>
<!-- /header -->