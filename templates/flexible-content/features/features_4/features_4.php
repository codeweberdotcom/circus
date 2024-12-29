<?php

/**
 * Features 4
 */


$block = new CW_Settings(
   $cw_settings = array(

      'subtitle' => 'What We Do?',
      'patternSubtitle' => '<h2 class="fs-15 text-uppercase text-muted mb-3 %2$s">%1$s</h2>',

      'title' => 'The service we offer is specifically designed to meet your needs.',
      'patternTitle' => '<h3 class="display-4 mb-5 %2$s">%1$s</h3>',

      'paragraph' => 'Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Maecenas sed diam eget risus varius blandit sit amet non magna. Maecenas faucibus mollis interdum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.',
      'patternParagraph' => '<p class="%2$s">%1$s</p>',

      'buttons' => '<a href="#" class="btn btn-navy rounded-pill mt-3">More Details</a>',
      'buttons_pattern' => '<div class="d-flex justify-content-center justify-content-lg-start flex-wrap" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">%s</div>',

      'background_class_default' => 'wrapper bg-light',

      'divider' => true,

      'features' => '<img src="' . get_template_directory_uri() . '/dist/img/icons/lineal/telephone-3.svg" class="svg-inject icon-svg icon-svg-md text-yellow mb-3" alt="" /><h4>24/7 Support</h4><p class="mb-0">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta.</p>',
      'features_pattern' => '%2$s<h4>%3$s</h4><p class="mb-0">%4$s</p>%5$s',
      // 'features_style_icon' => 'mb-3',

      'column_class_1' => '',
      'column_class_2' => 'order-lg-2',

   )
);
?>

<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
   <div class="container py-14 py-md-16">
      <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
         <div class="col-lg-7 order-lg-2">
            <div class="row gx-md-5 gy-5">
               <div class="col-md-5 offset-md-1 align-self-end">
                  <div class="card bg-pale-yellow">
                     <div class="card-body">
                        <?php if (isset($block->features_array[0])) {
                           echo $block->features_array[0];
                        } else { ?>
                           <img src="<?php echo get_template_directory_uri(); ?>/dist/img/icons/lineal/telephone-3.svg" class="svg-inject icon-svg icon-svg-md text-yellow mb-3" alt="" />
                           <h4>24/7 Support</h4>
                           <p class="mb-0">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta.</p>
                        <?php } ?>
                     </div>
                     <!--/.card-body -->
                  </div>
                  <!--/.card -->
               </div>
               <!--/column -->
               <div class="col-md-6 align-self-end">
                  <div class="card bg-pale-red">
                     <div class="card-body">
                        <?php if (isset($block->features_array[1])) {
                           echo $block->features_array[1];
                        } else { ?>
                           <img src="<?php echo get_template_directory_uri(); ?>/dist/img/icons/lineal/shield.svg" class="svg-inject icon-svg icon-svg-md text-red mb-3" alt="" />
                           <h4>Secure Payments</h4>
                           <p class="mb-0">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta.</p>
                        <?php } ?>
                     </div>
                     <!--/.card-body -->
                  </div>
                  <!--/.card -->
               </div>
               <!--/column -->
               <div class="col-md-5">
                  <div class="card bg-pale-leaf">
                     <div class="card-body">
                        <?php if (isset($block->features_array[2])) {
                           echo $block->features_array[2];
                        } else { ?>
                           <img src="<?php echo get_template_directory_uri(); ?>/dist/img/icons/lineal/cloud-computing-3.svg" class="svg-inject icon-svg icon-svg-md text-leaf mb-3" alt="" />
                           <h4>Daily Updates</h4>
                           <p class="mb-0">Nulla vitae elit libero, a pharetra augue.</p>
                        <?php } ?>
                     </div>
                     <!--/.card-body -->
                  </div>
                  <!--/.card -->
               </div>
               <!--/column -->
               <div class="col-md-6 align-self-start">
                  <div class="card bg-pale-primary">
                     <div class="card-body">
                        <?php if (isset($block->features_array[2])) {
                           echo $block->features_array[2];
                        } else { ?>
                           <img src="<?php echo get_template_directory_uri(); ?>/dist/img/icons/lineal/analytics.svg" class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="" />
                           <h4>Market Research</h4>
                           <p class="mb-0">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget.</p>
                        <?php } ?>
                     </div>
                     <!--/.card-body -->
                  </div>
                  <!--/.card -->
               </div>
               <!--/column -->
            </div>
            <!--/.row -->
         </div>
         <!--/column -->
         <div class="col-lg-5">
            <?php echo $block->subtitle_first; ?>
            <!--/subtitle -->
            <?php echo $block->title; ?>
            <!--/title -->
            <?php echo $block->subtitle_second; ?>
            <!--/subtitle -->
            <?php echo $block->paragraph; ?>
            <!--/paragraph -->
            <?php echo $block->buttons; ?>
            <!--/buttons group -->
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