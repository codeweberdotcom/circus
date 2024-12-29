<?php

/**
 * Features 12
 */


$block = new CW_Settings(
   $cw_settings = array(

      'background_class_default' => 'wrapper bg-light',

      'divider' => true,

      'features' => '<div class="col-lg-4"><div class="d-flex flex-row"><div><div class="icon btn btn-circle disabled btn-primary me-4"> <i class="uil uil-phone-volume"></i> </div></div><div><h4>24/7 Support</h4><p class="mb-2">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget. Fusce dapibus tellus.</p><a href="#" class="more hover">Learn More</a></div></div></div><!--/column -->',
      'features_pattern' => '<div class="col-lg-4 %1$s"><div class="d-flex flex-row"><div>%2$s</div><div><h4>%3$s</h4><p class="mb-2">%4$s</p>%5$s</div></div></div><!--/column -->',
      'features_style_icon' => 'me-4',

   )
);
?>


<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
   <div class="container py-14 py-md-16">
      <div class="row gx-lg-8 gx-xl-12 gy-6 px-xl-5">
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