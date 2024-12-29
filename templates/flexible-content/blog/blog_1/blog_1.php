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
      <h2 class="display-4 mb-3 text-center"><?php echo $settings->title; ?></h2>
      <p class="lead fs-lg mb-10 text-center px-md-16 px-lg-21 px-xl-0"><?php echo $settings->paragraph; ?></p>
      <?php get_template_part("templates/flexible-content/sliders/slider_3/slider_3"); ?>
   </div>
   <!-- /.container -->
</section>
<!-- /section -->