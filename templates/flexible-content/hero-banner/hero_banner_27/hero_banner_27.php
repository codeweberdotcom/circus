<?php

/**
 * Hero 27
 */
$block = new CW_Settings(
  $cw_settings = array(
    'title' => 'We bring solutions to make life <span class="underline-3 style-3 yellow">easier</span>',
    'patternTitle' => '<h1 class="display-1 fs-56 mb-4 mt-0 mt-lg-5 ls-xs pe-xl-5 pe-xxl-0 %2$s">%1$s</h1>',

    'paragraph' => 'We are a creative company that focuses on long term relationships with customers.',
    'patternParagraph' => '<p class="lead fs-23 lh-sm mb-7 pe-lg-5 pe-xl-5 pe-xxl-0 %2$s">%1$s</p>',

    'buttons' => '<div><a href="#" class="btn btn-lg btn-primary rounded">Read More</a></div>',
    'buttons_pattern' => '<div class="d-flex justify-content-center justify-content-lg-start flex-wrap" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">%s</div>',

    'background_class_default' => 'wrapper image-wrapper bg-cover bg-image bg-xs-none bg-gray',
    'background_data_default' => '/dist/img/photos/bg37.jpg',

    'divider' => true,
  )
);
?>

<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
  <div class="container pt-17 pb-15 py-sm-17 py-xxl-20">
    <div class="row">
      <div class="col-sm-6 col-xxl-5 text-center text-sm-start" data-group="page-title" data-interval="-200" data-delay="500">
        <?php echo $block->title; ?>
        <!--/title -->
        <?php echo $block->paragraph; ?>
        <!--/pargraph -->
        <?php echo $block->buttons; ?>
        <!--/buttons group -->
      </div>
      <!--/column -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
  <?php if ($block->divider_wave) {
    echo $block->divider_wave;
  } ?>
  <!-- /divider -->
</section>
<!-- /section -->