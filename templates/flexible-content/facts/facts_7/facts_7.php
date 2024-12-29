<?php

/**
 * Facts 7
 */
$block = new CW_Settings(
   $cw_settings = array(
      'subtitle' => 'Save Time and Money',
      'patternSubtitle' => '<h2 class="fs-16 text-uppercase text-muted mb-3 %2$s">%1$s</h2>',

      'title' => 'Save your time and money by choosing our <span class="underline-3 style-2 yellow">professional</span> team.',
      'patternTitle' => '<h3 class="display-3 mb-0 pe-xl-10 pe-xxl-15 %2$s">%1$s</h3>',

      'background_class_default' => 'wrapper bg-light',

      'divider' => true,

      'column_class_1' => '',
      'column_class_2' => 'order-lg-2',

      'progress' => '<div class="row gy-6 text-center"><div class="col-md-6"><div class="progressbar semi-circle fuchsia" data-value="95"></div><h4 class="mb-0">Customer Satisfaction</h4></div><!-- /column --></div><!-- /.row -->',
      'progress_item_wrappers' => array('<div class="row gy-6 text-center">', '</div>', '<div class="col-6">', '</div>'),
   )
);
?>

<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
   <div class="container py-14 py-md-16">
      <div class="row align-items-center gy-8">
         <div class="col-lg-7 text-center text-lg-start <?php echo $block->column_class_1; ?>">
            <?php echo $block->subtitle_first; ?>
            <!--/subtitle -->
            <?php echo $block->title; ?>
            <!--/title -->
            <?php echo $block->subtitle_second; ?>
            <!--/subtitle -->
         </div>
         <!-- /column -->
         <div class="col-lg-5 <?php echo $block->column_class_2; ?>">
            <?php echo $block->progress; ?>
            <!-- /.progress-list -->
            <!-- /.row -->
         </div>
         <!-- /column -->
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