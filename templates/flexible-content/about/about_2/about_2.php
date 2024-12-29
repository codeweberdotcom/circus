<?php

/**
 * About 2
 */

$final_icon = '<img src="' . get_template_directory_uri() . '/dist/img/icons/lineal/handshake.svg" class="svg-inject icon-svg icon-svg-md mb-4" alt="" />';
$icon = new CW_Icon(NULL, NULL, 'mb-4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, $final_icon, NULL);

$btn_title = 'Year Experience';
$btn_color = 'primary';
$btn_number = '20+';

if (have_rows('icon_text_count')) {
   while (have_rows('icon_text_count')) {
      the_row();
      if (get_sub_field('cw_number')) {
         $btn_number = get_sub_field('cw_number');
      }
      if (get_sub_field('cw_title')) {
         $btn_title = get_sub_field('cw_title');
      }
      $btn_color_object = new CW_Color(NULL, NULL);
      $btn_color = $btn_color_object->color;
   }
}

$block = new CW_Settings(
   $cw_settings = array(
      'title' => 'We are a creative company that focuses on establishing long-term relationships with customers.',
      'patternTitle' => '<h3 class="display-5 mb-5 %2$s">%1$s</h3>',

      'paragraph' => 'Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Vestibulum id ligula porta felis euismod semper. Vestibulum id ligula.',
      'patternParagraph' => '<p class="mb-7 %2$s">%1$s</p>',

      'multi_image' => array(
         array(
            '/dist/img/photos/ab1.jpg',
            NULL,
            'project_1',
            '<figure %5$s %9$s>%6$s<img %4$s src="%1$s" srcset="%1$s" %3$s />%7$s %10$s %11$s</figure>',
            '<figure class="rounded"><img src="' . get_template_directory_uri() . '/dist/img/photos/ab1.jpg" srcset="' . get_template_directory_uri() . '/dist/img/photos/ab1.jpg" alt=""></figure>'
         ),

         array(
            '/dist/img/photos/ab2.jpg',
            NULL,
            'project_1',
            '<figure %5$s %9$s>%6$s<img %4$s src="%1$s" srcset="%1$s" %3$s />%7$s %10$s %11$s</figure>',
            '<figure class="rounded"><img src="' . get_template_directory_uri() . '/dist/img/photos/ab2.jpg" srcset="' . get_template_directory_uri() . '/dist/img/photos/ab2.jpg" alt=""></figure>'
         ),

         array(
            '/dist/img/photos/ab3.jpg',
            NULL,
            'project_1',
            '<figure %5$s %9$s>%6$s<img %4$s src="%1$s" srcset="%1$s" %3$s />%7$s %10$s %11$s</figure>',
            '<figure class="rounded"><img src="' . get_template_directory_uri() . '/dist/img/photos/ab3.jpg" srcset="' . get_template_directory_uri() . '/dist/img/photos/ab3.jpg" alt=""></figure>'
         ),
      ),

      'background_class_default' => 'wrapper bg-light',

      'divider' => 'true',

      'column_class_1' => '',
      'column_class_2' => 'order-lg-2',

      'features' => '<div class="col-md-4"><h3 class="counter text-primary">7518</h3><p>Completed Projects</p></div><!--/column -->',

      'features_pattern' => '<div class="col-md-4 %1$s"><h3 class="counter text-primary">%3$s</h3><p>%4$s</p></div><!--/column -->',

      // 'features_style_icon' => 'me-4'
   )
);
?>

<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
   <div class="container py-14 py-md-16">
      <div class="row gx-lg-8 gx-xl-12 gy-12 align-items-center">
         <div class="col-lg-6 position-relative <?php echo $block->column_class_1; ?>">
            <div class="btn btn-circle btn-<?php echo $btn_color; ?> pe-none position-absolute counter-wrapper flex-column d-none d-md-flex zindex-1" style="top: 50%; left: 50%; transform: translate(-50%, -50%); width: 170px; height: 170px;">
               <div class="mb-1 mt-n2"><span class="counter counter-lg"><?php echo $btn_number; ?></span></div>
               <p><?php echo $btn_title; ?></p>
            </div>
            <div class="row gx-md-5 gy-5 align-items-center">
               <div class="col-md-6">
                  <div class="row gx-md-5 gy-5">
                     <div class="col-md-10 offset-md-2">
                        <?php if (isset($block->multi_images[0])) {
                           echo $block->multi_images[0];
                        } ?>
                     </div>
                     <!--/column -->
                     <div class="col-md-12">
                        <?php if (isset($block->multi_images[1])) {
                           echo $block->multi_images[1];
                        } ?>
                     </div>
                     <!--/column -->
                  </div>
                  <!--/.row -->
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
            <?php echo $icon->final_icon; ?>
            <!--/final_icon -->
            <?php echo $block->title; ?>
            <!--/title -->
            <?php echo $block->paragraph; ?>
            <!--/pargraph -->
            <div class="row counter-wrapper gy-6">
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