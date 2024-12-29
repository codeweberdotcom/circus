<?php

/**
 * About 1
 */
$block = new CW_Settings(
   $cw_settings = array(
      'subtitle' => 'What Makes Us Different?',
      'patternSubtitle' => '<h2 class="fs-16 text-uppercase text-muted mb-3 %2$s">%1$s</h2>',

      'title' => 'We bring <span class="underline-3 style-2 yellow">solutions</span> to make life easier for our customers.',
      'patternTitle' => '<h3 class="display-3 mb-10 %2$s">%1$s</h3>',

      'background_class_default' => 'wrapper bg-light',

      'divider' => true,

      'multi_image' => array(
         array(
            '/dist/img/photos/g8.jpg',
            NULL,
            'project_1',
            '<figure %5$s %9$s>%6$s<img %4$s src="%1$s" srcset="%1$s" %3$s />%7$s %10$s %11$s</figure>',
            '<figure class="rounded mx-5"><img src="' . get_template_directory_uri() . '/dist/img/photos/g8.jpg" srcset="' . get_template_directory_uri() . '/dist/img/photos/g8@2x.jpg 2x" alt=""></figure>'
         ),

         array(
            '/dist/img/photos/g9.jpg',
            NULL,
            'project_1',
            '<figure %5$s %9$s>%6$s<img %4$s src="%1$s" srcset="%1$s" %3$s />%7$s %10$s %11$s</figure>',
            '<figure class="rounded"><img src="' . get_template_directory_uri() . '/dist/img/photos/g9.jpg" srcset="' . get_template_directory_uri() . '/dist/img/photos/g9@2x.jpg 2x" alt=""></figure>'
         ),

         array(
            '/dist/img/photos/g10.jpg',
            NULL,
            'project_1',
            '<figure %5$s %9$s>%6$s<img %4$s src="%1$s" srcset="%1$s" %3$s />%7$s %10$s %11$s</figure>',
            '<figure class="rounded"><img src="' . get_template_directory_uri() . '/dist/img/photos/g10.jpg" srcset="' . get_template_directory_uri() . '/dist/img/photos/g10@2x.jpg 2x" alt=""></figure>'
         ),
      ),

      // 'shapes' => array('<div class="shape bg-soft-primary rounded-circle rellax w-20 h-20" data-rellax-speed="1" style="top: -2rem; right: -1.9rem;"></div>'),

      'column_class_1' => '',
      'column_class_2' => 'order-lg-2',

      'features' => '<div class="col-md-6"><div class="d-flex flex-row"><div>
      <img src="' . get_template_directory_uri() . '/dist/img/icons/solid/lamp.svg" class="svg-inject icon-svg icon-svg-xs solid-mono text-fuchsia me-4" alt="" />
      </div><div><h4 class="mb-1">Creativity</h4><p class="mb-0">Curabitur blandit lacus porttitor ridiculus mus.</p></div></div></div><!--/column -->',

      'features_pattern' => '<div class="col-md-6"><div class="d-flex flex-row %6$s"><div>%2$s</div><div><h4 class="mb-1">%3$s</h4><p class="mb-0">%4$s</p></div></div></div><!--/column -->',

      'features_style_icon' => 'me-4'
   )
);
?>

<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
   <div class="container py-14 py-md-16">
      <div class="row gy-10 gy-sm-13 gx-md-8 gx-xl-12 align-items-center">
         <div class="col-lg-6 <?php echo $block->column_class_1; ?>">
            <div class="row gx-md-5 gy-5">
               <div class="col-12">
                  <?php if (isset($block->multi_images[0])) {
                     echo $block->multi_images[0];
                  } ?>
               </div>
               <!--/column -->
               <div class="col-md-6">
                  <?php if (isset($block->multi_images[1])) {
                     echo $block->multi_images[1];
                  } ?>
               </div>
               <!--/column -->
               <div class="col-md-6">
                  <?php if (isset($block->multi_images[2])) {
                     echo $block->multi_images[2];
                  } ?>
               </div>
               <!--/column -->
            </div>
            <!--/.row -->
         </div>
         <!--/column -->
         <div class="col-lg-6 <?php echo $block->column_class_2; ?>">
            <?php echo $block->subtitle_first; ?>
            <!--/subtitle -->
            <?php echo $block->title; ?>
            <!--/title -->
            <?php echo $block->subtitle_second; ?>
            <!--/subtitle -->
            <div class="row gy-8">
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