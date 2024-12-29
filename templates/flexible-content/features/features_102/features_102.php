<?php

/* Add settings */
$settings = new Settings();
$settings->title = 'Our Services.';
$settings->paragraph = 'We specialize in web, mobile and identity design. We love to turn ideas into beautiful things.';
//$settings->imageurl = '/dist/img/illustrations/i6.png';
//$settings->videourl = '/dist/media/movie.mp4';
// $settings->backgroundurl = '/dist/img/photos/bg4.jpg';
//$settings->typewriter = 'customer satisfaction,business needs,creative ideas';
//$settings->backgroundcolor = 'dark';
//$settings->backgroundcolor_light = 'soft-primary';
//$settings->textcolor = 'light';
$settings->GetDataACF();
?>

<?php
/* Add Features */
$features = new Features();
$features->root_theme = get_template_directory_uri();
$features->title = '24/7 Support';
$features->paragraph = NULL;
$features->link_url = "#";
$features->link_text = NULL;
$features->iconpaddingclass = "mb-3";
$features->pattern = '<div class="col-md-6 col-xl-3">
         <div class="card h-100 shadow-lg card-border-bottom border-%5$s lift border-hover-primary">
          <div class="card-body">
             %3$s
            <h3 class="h4">%1$s</h4>
            <p class="mb-2">%2$s</p>
           %4$s
          </div>
          <!--/.card-body -->
        </div>
        <!--/.card -->
      </div>
      <!--/column -->';
$features->default_features = '<div class="col-md-6 col-xl-3">
        <div class="card shadow-lg card-border-bottom border-soft-yellow lift">
          <div class="card-body">
            <img src="' . get_template_directory_uri() . '/dist/img/icons/lineal/browser.svg" class="svg-inject icon-svg icon-svg-md text-yellow mb-3" alt="" />
            <h3 class="h4">Content Marketing</h4>
            <p class="mb-2">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus cras justo.</p>
            <a href="#" class="more hover link-yellow">Learn More</a>
          </div>
          <!--/.card-body -->
        </div>
        <!--/.card -->
      </div>
      <!--/column -->
      <div class="col-md-6 col-xl-3">
        <div class="card shadow-lg card-border-bottom border-soft-green lift">
          <div class="card-body">
            <img src="' . get_template_directory_uri() . '/dist/img/icons/lineal/chat-2.svg" class="svg-inject icon-svg icon-svg-md text-green mb-3" alt="" />
            <h3 class="h4">Social Engagement</h4>
            <p class="mb-2">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus cras justo.</p>
            <a href="#" class="more hover link-green">Learn More</a>
          </div>
          <!--/.card-body -->
        </div>
        <!--/.card -->
      </div>
      <!--/column -->
      <div class="col-md-6 col-xl-3">
        <div class="card shadow-lg card-border-bottom border-soft-orange lift">
          <div class="card-body">
            <img src="' . get_template_directory_uri() . '/dist/img/icons/lineal/id-card.svg" class="svg-inject icon-svg icon-svg-md text-orange mb-3" alt="" />
            <h3 class="h4">Identity & Branding</h4>
            <p class="mb-2">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus cras justo.</p>
            <a href="#" class="more hover link-orange">Learn More</a>
          </div>
          <!--/.card-body -->
        </div>
        <!--/.card -->
      </div>
      <!--/column -->
      <div class="col-md-6 col-xl-3">
        <div class="card shadow-lg card-border-bottom border-soft-blue lift">
          <div class="card-body">
            <img src="' . get_template_directory_uri() . '/dist/img/icons/lineal/gift.svg" class="svg-inject icon-svg icon-svg-md text-blue mb-3" alt="" />
            <h3 class="h4">Product Design</h4>
            <p class="mb-2">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus cras justo.</p>
            <a href="#" class="more hover link-blue">Learn More</a>
          </div>
          <!--/.card-body -->
        </div>
        <!--/.card -->
      </div>';
?>
<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo esc_html($args['block_class']); ?> wrapper bg-light">
  <div class="container pt-14 pt-md-16 pb-14 pb-md-16">
    <div class="row gx-md-5 gy-5">
      <div class="col-md-6 col-xl-9">
        <div class="card h-100 shadow-lg card-border-bottom border-white">
          <div class="card-body">
            <h2 class="display-4 mb-3"><?php echo $settings->title; ?></h2>
            <p class="lead mb-0"><?php echo $settings->paragraph; ?></p>
          </div>
          <!--/.card-body -->
        </div>
        <!--/.card -->
      </div>
      <!--/column -->

      <?php echo $features->Feutures(); ?>
      <!--/column -->
    </div>
    <!--/.row -->
  </div>
  <!-- /.container -->
</section>
<!-- /section -->