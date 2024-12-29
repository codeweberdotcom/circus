<?php
/* Add settings */
$settings = new Settings();
$settings->title = "Our News";
//$settings->subtitle = "What We Do?";
$settings->paragraph = 'Here are the latest company news from our blog that got the most attention.';
//$settings->imageurl = get_template_directory_uri() . '/dist/img/illustrations/i2.png';
//$settings->videourl = get_template_directory_uri() . '/dist/media/movie.mp4';
//$settings->typewriter = 'customer satisfaction,business needs,creative ideas';
$settings->backgroundcolor = 'dark';
$settings->backgroundcolor_light = 'light';
$settings->textcolor = 'white';
$settings->GetDataACF();
?>


<section class="wrapper bg-light">
   <div class="container py-14 py-md-16">
      <div class="row">
         <div class="col-lg-9 col-xl-8 col-xxl-7 mx-auto">
            <h2 class="fs-15 text-uppercase text-primary text-center"><?php echo $settings->title; ?></h2>
            <h3 class="display-4 mb-6 text-center"><?php echo $settings->paragraph; ?></h3>
         </div>
         <!-- /column -->
      </div>
      <!-- /.row -->
      <div class="position-relative">
         <div class="shape bg-dot primary rellax w-17 h-20" data-rellax-speed="1" style="top: 0; left: -1.7rem;"></div>
         <?php get_template_part("templates/flexible-content/sliders/slider_4/slider_4"); ?>
      </div>
      <!-- /.position-relative -->
   </div>
   <!-- /.container -->
</section>
<!-- /section -->