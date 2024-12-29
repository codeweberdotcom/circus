<?php

/**
 *  Call to Action 2
 */


$block = new CW_Settings(
   $cw_settings = array(
      'title' => 'We are trusted by over 5000+ clients. Join them by using our services and grow your business.',
      'patternTitle' => '<h2 class="display-6 mb-6 mb-lg-0 pe-lg-10 pe-xl-5 pe-xxl-18 text-white %2$s">%1$s</h2>',

      'buttons' => '<a href="#" class="btn btn-white rounded-pill mb-0 text-nowrap">Join Us</a>',
      'buttons_pattern' => '<div class="d-flex flex-wrap justify-content-center" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">%s</div>',

      'background_class_default' => 'card image-wrapper bg-full bg-image bg-overlay bg-overlay-400',
      'background_data_default' => '/dist/img/photos/bg3.jpg',

   )
);
?>

<section id="<?php echo esc_html($args['block_id']); ?>" class="wrapper bg-light">
   <div class="container py-14 py-md-16">
      <div class="row">
         <div class="col-xl-10 mx-auto">
            <div class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
               <div class="card-body p-6 p-md-11 d-lg-flex flex-row align-items-lg-center justify-content-md-between text-center text-lg-start">
                  <?php echo $block->title; ?>
                  <!--/title -->
                  <?php echo $block->buttons; ?>
                  <!--/buttons group -->
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
</section>
<!-- /section -->