<?php

/**
 * Facts 8
 */
$block = new CW_Settings(
   $cw_settings = array(
      'subtitle' => 'Company Facts',
      'patternSubtitle' => '<h2 class="fs-16 text-uppercase text-muted mb-3 %2$s">%1$s</h2>',

      'title' => 'Save your time and money by choosing our professional team.',
      'patternTitle' => '<h3 class="display-4 mb-10 px-lg-20 px-xl-20 %2$s">%1$s</h3>',

      'background_class_default' => 'wrapper bg-soft-primary',

      'divider' => true,

      'column_class_1' => '',
      'column_class_2' => 'order-lg-2',

      'progress' => '<div class="row gy-6 text-center"><div class="col-md-6 col-lg-3"><div class="progressbar semi-circle purple" data-value="75"></div><h4>New Visitors</h4><p class="mb-0">Maecenas faucibus mollis interdum. Aenean eu leo.</p></div><!-- /column --></div><!-- /.row -->',

      'progress_item_wrappers' => array('<div class="row gy-6 text-center">', '</div>', '<div class="col-md-6 col-lg-3">', '</div>'),
   )
);
?>



<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
   <div class="container py-17">
      <div class="row text-center">
         <div class="col-xl-11 col-xxl-10 mx-auto">
            <?php echo $block->subtitle_first; ?>
            <!--/subtitle -->
            <?php echo $block->title; ?>
            <!--/title -->
            <?php echo $block->subtitle_second; ?>
            <!--/subtitle -->
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