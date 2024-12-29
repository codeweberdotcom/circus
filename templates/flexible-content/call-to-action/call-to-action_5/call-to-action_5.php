<?php

/**
 *  Call to Action 5
 */


$block = new CW_Settings(
   $cw_settings = array(

      'subtitle' => 'Analyze Now',
      'patternSubtitle' => '<h2 class="fs-16 text-uppercase text-primary mb-3 %2$s">%1$s</h2>',

      'title' => 'Wonder how much faster your website can go? Easily check your SEO Score now.',
      'patternTitle' => '<h3 class="display-4 mb-0 %2$s">%1$s</h3>',

      'background_class_default' => 'wrapper bg-soft-primary',

      'divider' => true,

   )
);
?>

<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
   <div class="container py-14 py-md-16">
      <div class="row mb-8">
         <div class="col-lg-8 mx-auto text-center">
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
      <div class="row">
         <div class="col-lg-5 mx-auto">
            <form action="#">
               <div class="form-floating input-group">
                  <input type="url" class="form-control border-0" placeholder="Enter Website URL" id="analyze">
                  <label for="analyze">Enter Website URL</label>
                  <button class="btn btn-primary" type="button">Analyze</button>
               </div>
            </form>
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