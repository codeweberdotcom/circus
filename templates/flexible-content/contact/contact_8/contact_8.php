<?php

/**
 * Contact 8
 */
if (get_sub_field('class_div')) {
   $class_cust = get_sub_field('class_div');
} else {
   $class_cust = '';
}

$bg_image = '' . get_template_directory_uri() . '/dist/img/photos/tm1.jpg';

if (get_sub_field('cw_image_bg')) {
   $bg_image = get_sub_field('cw_image_bg');
}

$block = new CW_Settings(
   $cw_settings = array(
      'title' => 'Let’s Talk',
      'patternTitle' => '<h2 class="display-4 mb-3 %2$s">%1$s</h2>',

      'subtitle' => 'Let\'s make something great together. We are trusted by over 5000+ clients. Join them by using our services and grow your business.',
      'patternSubtitle' => '<p class="lead fs-lg %2$s">%1$s</p>',

      'paragraph' => 'Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Maecenas faucibus mollis interdum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.',
      'patternParagraph' => '<p class=" %2$s">%1$s</p>',

      'buttons' => '<a href="#" class="btn btn-primary rounded-pill mt-2">Join Us</a>',
      'buttons_pattern' => '<div class="d-flex justify-content-center justify-content-lg-start flex-wrap" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">%s</div>',

      'background_class_default' => 'wrapper bg-light',
      'divider' => true,

   )
);
?>

<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
   <div class="container py-14 py-md-16">
      <div class="card shadow-lg">
         <div class="row gx-0">
            <div class="col-lg-6 image-wrapper bg-image bg-cover rounded-top rounded-lg-start d-none d-md-block" data-image-src="<?php echo $bg_image; ?>">
            </div>
            <!--/column -->
            <div class="col-lg-6">
               <div class="p-10 p-md-11 p-lg-13">
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
               <!--/div -->
            </div>
            <!--/column -->
         </div>
         <!--/.row -->
      </div>
      <!-- /.card -->
   </div>
   <!-- /.container -->
   <?php if ($block->divider_wave) {
      echo $block->divider_wave;
   } ?>
   <!-- /divider -->
</section>
<!-- /section -->