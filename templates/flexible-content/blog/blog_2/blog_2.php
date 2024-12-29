<?php
/* Add settings */
$settings = new Settings();
$settings->title = "Our Journal";
//$settings->subtitle = "What We Do?";
$settings->paragraph = 'Here are the latest news from our blog that got the most attention.';
//$settings->imageurl = get_template_directory_uri() . '/dist/img/illustrations/i2.png';
//$settings->videourl = get_template_directory_uri() . '/dist/media/movie.mp4';
//$settings->typewriter = 'customer satisfaction,business needs,creative ideas';
$settings->backgroundcolor = 'dark';
$settings->backgroundcolor_light = 'light';
$settings->textcolor = 'white';
$settings->GetDataACF();

/* Add buttons */
$button = new Buttons();
$button->form_button = "rounded-pill";
$button->button_size = NULL;
$button->class_button_wrapper = "d-flex justify-content-center flex-wrap justify-content-lg-start";
$button->data_cues = "slideInDown";
$button->data_group = "page-title-buttons";
$button->data_delay = "900";
$button->default_button = ' <a href="#" class="btn btn-soft-primary rounded-pill">View All News</a>';
?>


<section class="wrapper bg-light">
   <div class="container py-14 py-md-16">
      <div class="row gx-lg-8 gx-xl-12 gy-10 gy-lg-0">
         <div class="col-lg-4 mt-lg-2">
            <h2 class="display-4 mb-3"><?php echo $settings->title; ?></h2>
            <p class="lead fs-lg mb-6 pe-xxl-5"><?php echo $settings->paragraph; ?></p>
            <!--  buttons group -->
            <?php $button->showbuttons(); ?>
            <!--/buttons group -->
         </div>
         <!-- /column -->
         <div class="col-lg-8">
            <?php get_template_part("templates/flexible-content/sliders/slider_2/slider_2"); ?>
            <!-- /column -->
         </div>
         <!-- /.row -->
      </div>
      <!-- /.container -->
</section>
<!-- /section -->