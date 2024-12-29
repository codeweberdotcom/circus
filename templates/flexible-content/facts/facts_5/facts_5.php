<?php

/**
 * Facts 5
 */
$block = new CW_Settings(
   $cw_settings = array(

      'background_class_default' => 'wrapper bg-light',

      'divider' => true,

      'features' => '<div class="col-md-6 col-lg-4"><div class="card"><div class="card-body"><div class="d-flex flex-row align-items-center"><div><div class="icon btn btn-circle btn-lg btn-soft-red pe-none mx-auto me-4 mb-lg-3 mb-xl-0"> <i class="uil uil-users-alt"></i> </div>
       </div><div><h3 class="counter mb-1">3472</h3><p class="mb-0">Happy Customers</p></div></div></div><!--/.card-body --></div><!--/.card --></div><!--/column -->',

      'features_pattern' => '<div class="col-md-6 col-lg-4 %1$s"><div class="card"><div class="card-body"><div class="d-flex flex-row align-items-center %6$s"><div>%2$s</div><div><div class="h3 counter mb-1">%3$s</div><p class="mb-0">%4$s</p></div></div></div></div></div><!--/column -->',

      'features_style_icon' => 'me-4'
   )
);
?>

<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
   <div class="container py-14 py-md-16">
      <div class="row">
         <div class="col-xl-10 col-xxl-9 mx-auto">
            <div class="row align-items-center justify-content-center counter-wrapper gy-6">
               <?php echo $block->features; ?>
               <!--/features -->
            </div>
            <!--/.row -->
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