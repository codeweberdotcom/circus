<?php

/**
 * Contact 3
 */

$counter_title = 'Satisfied Customers';
$counter_color = 'primary';
$counter_number = '5000+';

if (have_rows('counter_item')) {
   while (have_rows('counter_item')) {
      the_row();
      if (get_sub_field('counter_number')) {
         $counter_number = get_sub_field('counter_number');
      }
      if (get_sub_field('counter_title')) {
         $btn_title = get_sub_field('counter_title');
      }
      $btn_color_object = new CW_Color(NULL, NULL);
      $counter_color = $btn_color_object->color;
   }
}

$block = new CW_Settings(
   $cw_settings = array(

      'title' => 'Let’s Talk',
      'patternTitle' => '<h2 class="display-4 mb-3 %2$s">%1$s</h2>',

      'subtitle' => 'Let\'s make something great together. We are <span class="underline">trusted by</span> over 5000+ clients. Join them by using our services and grow your business.',
      'patternSubtitle' => '<p class="lead fs-lg %2$s">%1$s</p>',

      'paragraph' => 'Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Maecenas faucibus mollis interdum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.',
      'patternParagraph' => '<p class="%2$s">%1$s</p>',

      'buttons' => '<a href="#" class="btn btn-primary rounded-pill mt-2">Join Us</a>',
      'buttons_pattern' => '<div class="d-flex justify-content-center justify-content-lg-start flex-wrap" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">%s</div>',

      'multi_image' => array(
         array(
            '/dist/img/photos/g5.jpg',
            NULL,
            'project_1',
            '<figure %5$s %9$s>%6$s<img %4$s src="%1$s" srcset="%1$s" %3$s />%7$s %10$s %11$s</figure>',
            '<figure class="rounded mt-md-10 position-relative"><img src="' . get_template_directory_uri() . '/dist/img/photos/g5.jpg" srcset="' . get_template_directory_uri() . '/dist/img/photos/g5@2x.jpg 2x" alt=""></figure>'
         ),

         array(
            '/dist/img/photos/g6.jpg',
            NULL,
            'project_1',
            '<figure %5$s %9$s>%6$s<img %4$s src="%1$s" srcset="%1$s" %3$s />%7$s %10$s %11$s</figure>',
            '<figure class="rounded"><img src="' . get_template_directory_uri() . '/dist/img/photos/g6.jpg" srcset="' . get_template_directory_uri() . '/dist/img/photos/g6@2x.jpg 2x" alt=""></figure>'
         ),

      ),

      'background_class_default' => 'wrapper bg-light',

      'divider' => true,

      'shapes' => array('<div class="shape bg-dot primary rellax w-18 h-18" data-rellax-speed="1" style="top: 0; left: -1.4rem; z-index: 0;"></div>'),

      'column_class_1' => '',
      'column_class_2' => 'order-lg-2',

   )
);
?>

<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
   <div class="container py-14 py-md-16">
      <div class="row gy-10 gx-lg-8 gx-xl-12 align-items-center">
         <div class="col-lg-7 position-relative <?php echo $block->column_class_1; ?>">
            <?php echo $block->shapes; ?>
            <!--/shape -->
            <div class="row gx-md-5 gy-5">
               <div class="col-md-6">
                  <?php if (isset($block->multi_images[0])) {
                     echo $block->multi_images[0];
                  } ?>
               </div>
               <!--/column -->
               <div class="col-md-6">
                  <div class="row gx-md-5 gy-5">
                     <div class="col-md-12 order-md-2">
                        <?php if (isset($block->multi_images[1])) {
                           echo $block->multi_images[1];
                        } ?>
                     </div>
                     <!--/column -->
                     <div class="col-md-10">
                        <div class="card bg-<?php echo $counter_color; ?> text-center counter-wrapper">
                           <div class="card-body py-11">
                              <h3 class="counter text-nowrap"><?php echo $counter_number; ?></h3>
                              <p class="mb-0"><?php echo $counter_title; ?></p>
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
            </div>
            <!--/.row -->
         </div>
         <!--/column -->
         <div class="col-lg-5 <?php echo $block->column_class_2; ?>">
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