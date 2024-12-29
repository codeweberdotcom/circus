<?php

/**
 * Contact 1
 */

$block = new CW_Settings(
   $cw_settings = array(
      'title' => 'Let’s Talk',
      'patternTitle' => '<h2 class="display-4 mb-3 %2$s">%1$s</h2>',

      'subtitle' => 'Let\'s make something great together. We are <span class="underline purple">trusted by</span> over 5000+ clients. Join them by using our services and grow your business.',
      'patternSubtitle' => '<p class="lead fs-lg %2$s">%1$s</p>',

      'paragraph' => 'Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Maecenas faucibus mollis interdum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.',
      'patternParagraph' => '<p class="%2$s">%1$s</p>',

      'buttons' => '<a href="#" class="btn btn-purple rounded-pill mt-2">Join Us</a>',
      'buttons_pattern' => '<div class="d-flex justify-content-center justify-content-lg-start flex-wrap" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">%s</div>',

      'background_class_default' => 'wrapper bg-light',
      'divider' => true,

      'swiper' => array(
         'swiper_container_class' => 'overflow-hidden',
         'image_class' => 'w-auto',
         'data_thumbs' => NULL,
         'wrapper_image_class' => '',
         'image_pattern' => '<figure %5$s %9$s>%6$s<img %4$s src="%1$s" srcset="%1$s" %3$s />%7$s %10$s %11$s</figure>',
         'image_thumb_size' => 'sandbox_features_6',
         'image_demo' => '<figure><img class="w-auto" src="' . get_template_directory_uri() . '/dist/img/illustrations/i14.png" srcset="' . get_template_directory_uri() . '/dist/img/illustrations/i14@2x.png 2x" alt="" /></figure>',
         'image_big_size' => 'sandbox_hero_6',
         'img_link' => '/dist/img/illustrations/i14.png',

      ),

      'column_class_1' => 'order-lg-2',
      'column_class_2' => '',
   )
);
?>

<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
   <div class="container py-14 py-md-16">
      <div class="row gy-10 gx-lg-8 gx-xl-12 align-items-center">
         <div class="col-lg-7 <?php echo $block->column_class_1; ?> position-relative">
            <?php echo $block->swiper_final; ?>
            <!--/swiper -->
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