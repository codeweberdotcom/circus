<?php

/**
 * Facts 1
 */
$block = new CW_Settings(
   $cw_settings = array(
      'title' => 'Join Our Community',
      'patternTitle' => '<h2 class="display-4 mb-3 %2$s">%1$s</h2>',

      'subtitle' => 'We have considered our business solutions to support you on every stage of your growth.',
      'patternSubtitle' => '<p class="lead fs-lg %2$s">%1$s</p>',

      'paragraph' => 'Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur.',
      'patternParagraph' => '<p class="mb-0 %2$s">%1$s</p>',

      'background_class_default' => 'wrapper bg-light',

      'divider' => true,

      'column_class_1' => 'order-lg-2 offset-lg-1',
      'column_class_2' => '',

      'features' => '<div class="item col-md-6"><div class="card shadow-lg"><div class="card-body"><div class="d-flex d-lg-block d-xl-flex flex-row"><div><div class="icon btn btn-circle btn-lg btn-soft-purple pe-none mx-auto me-4 mb-lg-3 mb-xl-0"> <i class="uil uil-presentation-check"></i> </div></div><div><h3 class="counter mb-1">7518</h3><p class="mb-0">Projects Done</p></div></div></div><!--/.card-body --></div><!--/.card --></div><!--/column -->',

      'features_pattern' => '<div class="item col-md-6"><div class="card shadow-lg %6$s"><div class="card-body"><div class="d-flex flex-row "><div>%2$s</div><div><div class="h4 counter mb-1">%3$s</div><p class="mb-0">%4$s</p></div></div></div></div></div><!--/column -->',

      'features_style_icon' => 'me-4'
   )
);
?>

<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
   <div class="container py-14 py-md-16">
      <div class="row gx-lg-0 gy-10 align-items-center">
         <div class="col-lg-6 <?php echo $block->column_class_1; ?> grid">
            <div class="row gx-md-5 gy-5 align-items-center counter-wrapper isotope">
               <?php echo $block->features; ?>
               <!--/features -->
            </div>
            <!--/.row -->
         </div>
         <!--/column -->
         <div class="col-lg-5 <?php echo $block->column_class_2; ?>">
            <?php echo $block->subtitle_first; ?>
            <!--/subtitle -->
            <?php echo $block->title; ?>
            <!--/title -->
            <?php echo $block->subtitle_second; ?>
            <!--/subtitle -->
            <?php echo $block->paragraph; ?>
            <!--/pargraph -->
         </div>
         <!--/column -->
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