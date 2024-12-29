<?php

/**
 * Features 10
 */


$block = new CW_Settings(
   $cw_settings = array(

      'title' => 'What We Do?',
      'patternTitle' => '<h2 class="display-4 mb-3 %2$s">%1$s</h2>',

      'subtitle' => 'The full service we are offering is <span class="underline">specifically</span> designed to meet your business needs and projects.',
      'patternSubtitle' => '<p class="lead fs-lg mb-8 pe-xxl-2 %2$s">%1$s</p>',

      'background_class_default' => 'wrapper bg-light',

      'divider' => true,

      'multi_image' => array(
         array('/dist/img/photos/g1.jpg', 'sandbox_features_10', 'project_1', '<figure %5$s %9$s>%6$s<img %4$s src="%1$s" srcset="%1$s" %3$s />%7$s %10$s %11$s</figure>', '<figure class="rounded"><img src="' . get_template_directory_uri() . '/dist/img/photos/g1.jpg" srcset="' . get_template_directory_uri() . '/dist/img/photos/g1@2x.jpg 2x" alt=""></figure>'),

         array('/dist/img/photos/g2.jpg', 'sandbox_features_10', 'project_1', '<figure %5$s %9$s>%6$s<img %4$s src="%1$s" srcset="%1$s" %3$s />%7$s %10$s %11$s</figure>', '<figure class="rounded"><img src="' . get_template_directory_uri() . '/dist/img/photos/g2.jpg" srcset="' . get_template_directory_uri() . '/dist/img/photos/g26@2x.jpg 2x" alt=""></figure>'),

         array('/dist/img/photos/g3.jpg', 'sandbox_features_10', 'project_1', '<figure %5$s %9$s>%6$s<img %4$s src="%1$s" srcset="%1$s" %3$s />%7$s %10$s %11$s</figure>', '<figure class="rounded"><img src="' . get_template_directory_uri() . '/dist/img/photos/g3.jpg" srcset="' . get_template_directory_uri() . '/dist/img/photos/g3@2x.jpg 2x" alt=""></figure>'),

         array('/dist/img/photos/g4.jpg', 'sandbox_features_10', 'project_1', '<figure %5$s %9$s>%6$s<img %4$s src="%1$s" srcset="%1$s" %3$s />%7$s %10$s %11$s</figure>', '<figure class="rounded"><img src="' . get_template_directory_uri() . '/dist/img/photos/g4.jpg" srcset="' . get_template_directory_uri() . '/dist/img/photos/g4@2x.jpg 2x" alt=""></figure>'),
      ),

      'features' => '<div class="col-md-6 col-lg-12 col-xl-6"><div class="d-flex flex-row"><div><div class="icon btn btn-circle btn-lg btn-soft-primary disabled me-5"> <i class="uil uil-phone-volume"></i> </div></div><div><h4 class="mb-1">24/7 Support</h4><p class="mb-0">Nulla vitae elit libero pharetra augue dapibus.</p></div></div></div><!--/column -->',
      'features_pattern' => '<div class="col-md-6 col-lg-12 col-xl-6 %1$s"><div class="d-flex flex-row"><div>%2$s</div><div><h4 class="mb-1">%3$s</h4><p class="mb-0">%4$s</p>%5$s</div></div></div><!--/column -->',
      'features_style_icon' => 'me-5',

      'column_class_1' => 'order-lg-2',
      'column_class_2' => '',

   )
);
?>

<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
   <div class="container py-14 py-md-16">
      <div class="row gx-lg-8 gy-8 align-items-center">
         <div class="col-lg-6 <?php echo $block->column_class_1; ?>">
            <div class="row gx-md-5 gy-5">
               <div class="col-md-4 offset-md-2 align-self-end">
                  <?php if (isset($block->multi_images[0])) {
                     echo $block->multi_images[0];
                  } ?>
               </div>
               <!--/column -->
               <div class="col-md-6 align-self-end">
                  <?php if (isset($block->multi_images[1])) {
                     echo $block->multi_images[1];
                  } ?>
               </div>
               <!--/column -->
               <div class="col-md-6 offset-md-1">
                  <?php if (isset($block->multi_images[2])) {
                     echo $block->multi_images[2];
                  } ?>
               </div>
               <!--/column -->
               <div class="col-md-4 align-self-start">
                  <figure class="rounded"><img src="./assets/img/photos/g4.jpg" srcset="./assets/img/photos/g4@2x.jpg 2x" alt=""></figure>
                  <?php if (isset($block->multi_images[3])) {
                     echo $block->multi_images[3];
                  } ?>
               </div>
               <!--/column -->
            </div>
            <!--/.row -->
         </div>
         <!--/column -->
         <div class="col-lg-6  <?php echo $block->column_class_2; ?>">
            <?php echo $block->subtitle_first; ?>
            <!--/subtitle -->
            <?php echo $block->title; ?>
            <!--/title -->
            <?php echo $block->subtitle_second; ?>
            <!--/subtitle -->
            <div class="row gx-xl-10 gy-6">
               <?php echo $block->features; ?>
               <!--/features -->
            </div>
            <!--/.row -->
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