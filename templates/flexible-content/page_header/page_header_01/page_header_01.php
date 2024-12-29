<?php

/**
 * Page Header 01
 */
$block = new CW_Settings(
   $cw_settings = array(
      'title' => 'Get in Touch',
      'patternTitle' => '<h1 class="display-1 mb-3 text-white %2$s">%1$s</h1>',

      'background_class_default' => 'wrapper image-wrapper bg-image bg-overlay bg-overlay-400 text-white',
      'background_data_default' => '/dist/img/photos/bg3.jpg',

      'divider' => true,

      // 'column_class_1' => 'order-lg-2',
      // 'column_class_2' => '',
   )
);

?>

<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?> overflow-hidden" <?php echo $block->background_data; ?>>
   <div class="container pt-17 pb-20 pt-md-19 pb-md-21 text-center">
      <div class="row">
         <div class="col-lg-8 mx-auto">
            <?php echo $block->title; ?>
            <!--/title -->
            <?php codeweber_breadcrumbs(NULL, 'text-white', true); ?>
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