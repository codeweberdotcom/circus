<?php

/**
 * Facts 6
 */
$block = new CW_Settings(
   $cw_settings = array(

      'background_class_default' => 'wrapper bg-light',

      'divider' => true,

      'features' => '<div class="col-md-3"><img src="' . get_template_directory_uri() . '/dist/img/icons/lineal/check.svg" class="svg-inject icon-svg icon-svg-lg text-primary mb-3" alt="" /><h3 class="counter">7518</h3><p class="mb-0">Completed Projects</p></div><!--/column -->',
      'features_pattern' => '<div class="col-md-3 %1$s">%2$s<div class="h3 counter">%3$s</div><p>%4$s</p></div><!--/column -->',
      'features_style_icon' => 'mb-3'
   )
);
?>



<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
   <div class="container py-14 py-md-16">
      <div class="row">
         <div class="col-xl-10 mx-auto">
            <div class="row align-items-center counter-wrapper gy-6 text-center">
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