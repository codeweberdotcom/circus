<?php

/**
 * Features 5
 */


$block = new CW_Settings(
   $cw_settings = array(

      'title' => 'We have considered our solutions to support every stage of growth.',
      'patternTitle' => '<h2 class="display-4 mb-5 %2$s">%1$s</h2>',

      'paragraph' => 'Etiam porta sem malesuada magna mollis euismod. Donec ullamcorper nulla non metus auctor fringilla. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce dapibus, tellus ac cursus commodo.',
      'patternParagraph' => '<p class="mb-5 %2$s">%1$s</p>',

      'background_class_default' => 'wrapper bg-light',

      'divider' => true,

      'shapes' => array('<div class="shape rounded bg-pale-red rellax d-md-block" data-rellax-speed="0" style="top: 50%; left: 50%; width: 50%; height: 60%; transform: translate(-50%,-50%);z-index:0"></div>'),

      'multi_image' => array(
         array('/dist/img/photos/sa5.jpg', 'sandbox_about_4', 'project_1', '<figure %5$s %9$s>%6$s<img %4$s src="%1$s" srcset="%1$s" %3$s />%7$s %10$s %11$s</figure>', '<figure class="img-fluid rounded shadow-lg mb-5"><img src="' . get_template_directory_uri() . '/dist/img/photos/sa5.jpg" srcset="' . get_template_directory_uri() . '/dist/img/photos/sa5@2x.jpg 2x" alt=""></figure>'),

         array('/dist/img/photos/sa6.jpg', 'sandbox_about_4', 'project_1', '<figure %5$s %9$s>%6$s<img %4$s src="%1$s" srcset="%1$s" %3$s />%7$s %10$s %11$s</figure>', '<figure class="img-fluid rounded shadow-lg d-flex col-10 ms-auto"><img src="' . get_template_directory_uri() . '/dist/img/photos/sa6.jpg" srcset="' . get_template_directory_uri() . '/dist/img/photos/sa6@2x.jpg 2x" alt=""></figure>'),

         array('/dist/img/photos/sa7.jpg', 'sandbox_about_4', 'project_1', '<figure %5$s %9$s>%6$s<img %4$s src="%1$s" srcset="%1$s" %3$s />%7$s %10$s %11$s</figure>', '<figure class="img-fluid rounded shadow-lg my-5"><img src="' . get_template_directory_uri() . '/dist/img/photos/sa7.jpg" srcset="' . get_template_directory_uri() . '/dist/img/photos/sa7@2x.jpg 2x" alt=""></figure>'),

         array('/dist/img/photos/sa8.jpg', 'sandbox_about_4', 'project_1', '<figure %5$s %9$s>%6$s<img %4$s src="%1$s" srcset="%1$s" %3$s />%7$s %10$s %11$s</figure>', '<figure class="img-fluid rounded shadow-lg d-flex col-10"><img src="' . get_template_directory_uri() . '/dist/img/photos/sa8.jpg" srcset="' . get_template_directory_uri() . '/dist/img/photos/sa8@2x.jpg 2x" alt=""></figure>'),
      ),

      'list' => true,
      'list_demo' => '<div class="row gy-3"><div class="col-xl-6"><ul class="icon-list bullet-bg bullet-soft-red mb-0"><li><span><i class="uil uil-check"></i></span><span>Aenean quam ornare curabitur blandit consectetur.</span></li><li class="mt-3"><span><i class="uil uil-check"></i></span><span>Nullam quis risus eget urna mollis ornare aenean leo.</span></li></ul></div><!--/column --><div class="col-xl-6"><ul class="icon-list bullet-bg bullet-soft-red mb-0"><li><span><i class="uil uil-check"></i></span><span>Etiam porta euismod malesuada mollis nisl ornare.</span></li><li class="mt-3"><span><i class="uil uil-check"></i></span><span>Vivamus sagittis lacus augue rutrum maecenas odio.</span></li></ul></div><!--/column --></div><!--/row -->',

      'column_class_1' => '',
      'column_class_2' => 'order-lg-2',

   )
);
?>

<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
   <div class="container py-14 py-md-16">
      <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
         <div class="col-lg-6 position-relative <?php echo $block->column_class_1; ?>">
            <?php echo $block->shapes; ?>
            <!--/shapes -->
            <div class="row gx-md-5 gy-5 position-relative">
               <div class="col-6">
                  <?php if (isset($block->multi_images[0])) {
                     echo $block->multi_images[0];
                  } ?>
                  <?php if (isset($block->multi_images[1])) {
                     echo $block->multi_images[1];
                  } ?>
               </div>
               <!-- /column -->
               <div class="col-6">
                  <?php if (isset($block->multi_images[2])) {
                     echo $block->multi_images[2];
                  } ?>
                  <?php if (isset($block->multi_images[3])) {
                     echo $block->multi_images[3];
                  } ?>
               </div>
               <!-- /column -->
            </div>
            <!-- /row -->
         </div>
         <!--/column -->
         <div class="col-lg-6 <?php echo $block->column_class_2; ?>">
            <?php echo $block->title; ?>
            <!--/title -->
            <?php echo $block->paragraph; ?>
            <!--/pargraph -->
            <?php echo $block->list; ?>
            <!--/list -->
         </div>
         <!--/column -->
      </div>
      <!--/row -->
   </div>
   <!-- /container -->
   <?php if ($block->divider_wave) {
      echo $block->divider_wave;
   } ?>
   <!-- /divider -->
</section>
<!-- /section -->