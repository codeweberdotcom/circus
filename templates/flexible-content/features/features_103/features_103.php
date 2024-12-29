<?php

/**
 * Features 103
 */


$block = new CW_Settings(
  $cw_settings = array(

    'background_class_default' => 'wrapper bg-light',

    'divider' => true,

    'features' => '
    <div class="col-lg-4">
    <div class="d-flex flex-col card card-body h-100 lift">
    <div class="d-flex align-items-center mb-3">
    <div class="icon btn btn-circle disabled btn-primary me-4"> <i class="uil uil-phone-volume"></i> 
    </div>
    <h4 class="mb-0 " >24/7 Support</h4>
    </div>
    <div>
    <p class="mb-2">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget. Fusce dapibus tellus.</p>
    <a href="#" class="more hover">Learn More</a>
    </div>
    </div>
    </div><!--/column -->',

    'features_pattern' => '<div class="col-lg-4 %1$s"><div class="d-flex flex-col card card-body h-100 lift"><div class="d-flex align-items-center mb-3">%2$s %3$s</div><div><p class="mb-2">%4$s</p>%5$s</div></div></div><!--/column -->',
    'features_style_icon' => 'me-4',

    'title' => 'Who Are We?',
    'patternTitle' => '<h2 class="display-4 mb-3 %2$s">%1$s</h2>',

    'subtitle' => 'We are a digital and branding company that believes in the power of creative strategy and along with great design.',
    'patternSubtitle' => '<p class="lead fs-lg %2$s">%1$s</p>',

  )
);
?>


<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
  <div class="container py-14 py-md-16">
    <div class="row">
      <div class="col-lg-8 col-xl-7 col-xxl-6 mb-5">
        <?php echo $block->subtitle_first; ?>
        <!--/subtitle -->
        <?php echo $block->title; ?>
        <!--/title -->
        <?php echo $block->subtitle_second; ?>
        <!--/subtitle -->
      </div>
      <!-- /column -->
    </div>
    <!-- /row -->
    <div class="row gx-lg-6 gx-xl-6 gy-6">
      <?php echo $block->features; ?>
    </div>
    <!--/.row -->
  </div>
  <!-- /.container -->
  <?php if ($block->divider_wave) {
    echo $block->divider_wave;
  } ?>
  <!-- /divider -->
</section>
<!-- /section -->