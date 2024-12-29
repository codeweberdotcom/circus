<?php

/**
 * Features 8
 */

$block = new CW_Settings(
   $cw_settings = array(
      'subtitle' => 'App Features',
      'patternSubtitle' => '<h2 class="fs-15 text-uppercase text-muted mb-3 %2$s">%1$s</h2>',

      'title' => 'Sandbox is the only app you need to track your goals for better health.',
      'patternTitle' => '<h3 class="display-4 mb-9 %2$s">%1$s</h3>',

      'background_class_default' => 'wrapper bg-light',

      'divider' => true,

      'features' => '<div class="col-md-6 col-lg-4"><div class="d-flex flex-row"><div><img src="' . get_template_directory_uri() . '/dist/img/icons/lineal/target.svg" class="svg-inject icon-svg icon-svg-sm text-aqua me-4" alt="" /></div><div><h4 class="mb-1">Fitness Goal</h4><p class="mb-0">Duis mollis gravida commodo id luctus erat porttitor ligula, eget lacinia odio sem aget elit nullam quis risus eget.</p></div></div></div><!--/column -->',
      'features_pattern' => '<div class="col-md-6 col-lg-4 %1$s">
      <a href="%11$s" class="d-flex flex-row %6$s lift"><div>%2$s</div><div class="align-self-center"><h4 class="mb-0 ">%3$s</h4></div></a>
      
      </div><!--/column -->',
      'features_style_icon' => 'me-4',
   )
);
?>

<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
   <div class="container py-14 py-md-16">
      <div class="row">
         <div class="col-md-10 col-lg-8 ">
            <?php echo $block->subtitle_first; ?>
            <!--/subtitle -->
            <?php echo $block->title; ?>
            <!--/title -->
            <?php echo $block->subtitle_second; ?>
            <!--/subtitle -->
         </div>
         <!-- /column -->
      </div>
      <!-- /.row -->
      <div class="row gx-lg-8 gx-xl-8 gy-8">
         <?php echo $block->features; ?>
         <!--/features -->
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