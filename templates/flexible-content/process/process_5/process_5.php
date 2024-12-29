<?php

/**
 * Process 5
 */
//Title
if (get_sub_field('title')) {
   $title_text = get_sub_field('title');
} else {
   $title_text = 'Here are 3 working steps to organize our business projects.';
}

//Icon
$final_icon = '<img src="' . get_template_directory_uri() . '/dist/img/icons/lineal/list.svg" class="svg-inject icon-svg icon-svg-md mb-4" alt="" />';
$icon = new CW_Icon(NULL, NULL, 'mb-4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, $final_icon,  NULL);

$block = new CW_Settings(
   $cw_settings = array(
      'title' => 'How It Works?',
      'patternTitle' => '<h3 class="display-6 mb-3 %2$s">%1$s</h3>',

      'subtitle' => 'Find out everything you need to know and more about how we create our business process models.',
      'patternSubtitle' => '<p class="lead fs-lg pe-lg-5 %2$s">%1$s</p>',

      'paragraph' => 'Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Nullam quis risus eget urna mollis ornare.</p><p class="mb-6">Nullam id dolor id nibh ultricies vehicula ut id elit. Vestibulum id ligula porta felis euismod semper. Aenean lacinia bibendum nulla sed consectetur. Sed posuere consectetur est at lobortis. Vestibulum id ligula porta felis.',
      'patternParagraph' => '<p class="%2$s">%1$s</p>',

      'buttons' => ' <a href="#" class="btn btn-primary rounded-pill mb-0">Learn More</a>',
      'buttons_pattern' => '<div class="d-flex justify-content-center justify-content-lg-start flex-wrap" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">%s</div>',

      'background_class_default' => 'wrapper bg-light',

      'divider' => true,

      'column_class_1' => 'order-lg-2',
      'column_class_2' => '',

      'features' => '<div class="card me-lg-6"><div class="card-body p-6"><div class="d-flex flex-row"><div><span class="icon btn btn-circle btn-lg btn-soft-primary pe-none me-4"><span class="number">01</span></span></div><div><h4 class="mb-1">Collect Ideas</h4><p class="mb-0">Nulla vitae elit libero pharetra augue dapibus.</p></div></div></div><!--/.card-body --></div><!--/.card -->',
      'features_pattern' => '<div class="card %6$s"><div class="card-body p-6"><div class="d-flex flex-row"><div>%2$s</div><div><h4 class="mb-1">%3$s</h4><p class="mb-0">%4$s</p>%5$s</div></div></div><!--/.card-body --></div><!--/.card -->',
      'features_style_icon' => 'me-4',
   )
);
?>


<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
   <?php if ($block->background_video_bool == true) { ?>
      <video poster="<?php echo $block->background_video_preview; ?>" src="<?php echo $block->background_video_url; ?>" autoplay loop playsinline muted></video>
      <div class="video-content">
      <?php } ?>
      <!-- /video background -->
      <div class="container py-14 py-md-16">
         <div class="row mb-5">
            <div class="col-md-10 col-xl-8 col-xxl-7 mx-auto text-center ">
               <?php echo $icon->final_icon; ?>
               <h2 class="display-4 mb-4 px-lg-14"><?php echo $title_text; ?></h2>
               <!-- /title -->
            </div>
            <!-- /column -->
         </div>
         <!-- /.row -->
         <div class="row gx-md-8 gx-xl-12 gy-10 align-items-center">
            <div class="col-lg-6 <?php echo $block->column_class_1; ?>">
               <?php echo $block->features; ?>
            </div>
            <!--/column -->
            <div class="col-lg-6 <?php echo $block->column_class_2; ?>">
               <?php echo $block->subtitle_first; ?>
               <!--/subtitle -->
               <?php echo $block->title; ?>
               <!--/title -->
               <?php echo $block->subtitle_second; ?>
               <!--/subtitle -->
               <?php echo $block->paragraph; ?>
               <!--/pargraph -->
               <?php echo $block->buttons; ?>
               <!--/buttons group -->
            </div>
            <!--/column -->
         </div>
         <!--/.row -->
      </div>
      <!-- /.container -->
      <?php if ($block->background_video_bool == true) { ?>
      </div>
      </video>
   <?php } ?>
   <!-- /video background -->
   <?php if ($block->divider_wave) {
      echo $block->divider_wave;
   } ?>
   <!-- /divider -->
</section>
<!-- /section -->