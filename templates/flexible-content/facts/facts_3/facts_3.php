<?php

/**
 * Facts 3
 */
$block = new CW_Settings(
   $cw_settings = array(

      'background_class_default' => 'card image-wrapper bg-full bg-image bg-overlay',
      'background_data_default' => '/dist/img/photos/bg2.jpg',

      'features' => '<div class="col-6 col-lg-3"><h3 class="counter counter-lg text-white">7518</h3><p>Completed Projects</p></div><!--/column -->',
      'features_pattern' => '<div class="col-6 col-lg-3 %1$s"><div class="h3 counter counter-lg text-white">%3$s</div><p>%4$s</p></div><!--/column -->',
      // 'features_style_icon' => 'mb-3'

      // 'divider' => true,
   )
);
?>

<section class="wrapper bg-light">
   <div class="container py-14 py-md-16">
      <div class="row">
         <div class="col-xl-10 mx-auto">
            <div id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
               <div class="card-body p-9 p-xl-10">
                  <div class="row align-items-center counter-wrapper gy-4 text-center text-white">
                     <?php echo $block->features; ?>
                     <!--/features -->
                  </div>
                  <!--/.row -->
               </div>
               <!--/.card-body -->
            </div>
            <!--/.card -->
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