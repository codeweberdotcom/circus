<?php
/* Add settings */
$settings = new Settings();
$settings->title = "How We Do It?";
$settings->subtitle = "What We Do?";
$settings->paragraph = 'We make your spending <span class="underline">stress-free</span> for you to have the perfect control.';
//$settings->imageurl = get_template_directory_uri() . '/dist/img/illustrations/i2.png';
//$settings->videourl = get_template_directory_uri() . '/dist/media/movie.mp4';
//$settings->typewriter = 'customer satisfaction,business needs,creative ideas';
$settings->backgroundcolor = 'dark';
$settings->backgroundcolor_light = 'light';
$settings->textcolor = 'white';
$settings->GetDataACF();


/* Add Features */
$features = new Features();
$features->root_theme = get_template_directory_uri();
$features->title = '24/7 Support';
$features->paragraph = 'Vestibulum id ligula porta felis euismod semper. Sed posuere consectetur est at lobortis.';
$features->link_url = "#";
$features->link_text = "Learn More";
$features->iconsize = 'btn-lg';
$features->iconform = 'btn-circle';
$features->linkcolor = 'primary';
$features->iconpaddingclass = 'disabled mb-4';
$features->pattern = '<div class="col-md-6 col-lg-3">
                       %3$s
                       <h4 class="mb-1">%1$s</h4>
                       <p class="mb-0">%2$s</p>
                       </div>
                       <!--/column -->';
$features->default_features = ' <div class="col-md-6 col-lg-3"> <span class="icon btn btn-circle btn-lg btn-soft-primary disabled mb-4"><span class="number">01</span></span>
            <h4 class="mb-1">Concept</h4>
            <p class="mb-0">Nulla vitae elit libero elit non porta gravida eget metus cras. Aenean eu leo quam. Pellentesque ornare.</p>
         </div>
         <!--/column -->
         <div class="col-md-6 col-lg-3"> <span class="icon btn btn-circle btn-lg btn-primary disabled mb-4"><span class="number">02</span></span>
            <h4 class="mb-1">Prepare</h4>
            <p class="mb-0">Vestibulum id ligula porta felis euismod semper. Sed posuere consectetur est at lobortis.</p>
         </div>
         <!--/column -->
         <div class="col-md-6 col-lg-3"> <span class="icon btn btn-circle btn-lg btn-soft-primary disabled mb-4"><span class="number">03</span></span>
            <h4 class="mb-1">Retouch</h4>
            <p class="mb-0">Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Nulla vitae elit libero.</p>
         </div>
         <!--/column -->
         <div class="col-md-6 col-lg-3"> <span class="icon btn btn-circle btn-lg btn-soft-primary disabled mb-4"><span class="number">04</span></span>
            <h4 class="mb-1">Finalize</h4>
            <p class="mb-0">Integer posuere erat, consectetur adipiscing elit. Fusce dapibus, tellus ac cursus commodo.</p>
         </div>
         <!--/column -->';
?>

<section class="wrapper bg-light">
   <div class="container py-14 py-md-16">
      <h2 class="display-4 mb-3"><?php echo $settings->title; ?></h2>
      <p class="lead fs-lg mb-8"><?php echo $settings->paragraph; ?></p>
      <div class="row gx-lg-8 gx-xl-12 gy-6 process-wrapper">
         <?php echo $features->Feutures(); ?>
      </div>
      <!--/.row -->
   </div>
   <!-- /.container -->
</section>
<!-- /section -->