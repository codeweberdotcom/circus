<?php

/**
 * Features 7
 */


$block = new CW_Settings(
   $cw_settings = array(

      'title' => 'What I Do?',
      'patternTitle' => '<h2 class="display-4 mb-3 %2$s">%1$s</h2>',

      'subtitle' => 'Duis mollis est commodo luctus nisi erat porttitor ligula, eget lacinia odio sem nec elit. Nullam quis risus eget urna mollis ornare vel. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, vel scelerisque nisl.',
      'patternSubtitle' => '<p class="lead fs-20 mb-5 %2$s">%1$s</p>',

      'background_class_default' => 'wrapper bg-light',

      'divider' => true,

      'progress' => '<ul class="progress-list"><li><p>Web Design</p><div class="progressbar line soft-violet" data-value="100"></div></li><li><p>Mobile Design</p><div class="progressbar line soft-blue" data-value="80"></div></li><li><p>Development</p><div class="progressbar line soft-leaf" data-value="85"></div></li><li><p>SEO</p><div class="progressbar line soft-pink" data-value="90"></div></li></ul><!-- /.progress-list -->',
      'progress_item_wrappers' => array('<div class="row gy-6 text-center">', '</div>', '<div class="col-6">', '</div>'),

      'features' => '<div class="col-md-6 col-lg-3"><img src="' . get_template_directory_uri() . '/dist/img/icons/lineal/browser.svg" class="svg-inject icon-svg icon-svg-md text-violet mb-3" alt="" /><h4>Web Design</h4><p class="mb-2">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus. Cras justo cum sociis natoque magnis.</p></div><!--/column -->',
      'features_pattern' => '<div class="col-md-6 col-lg-3 %1$s">%2$s<h4>%3$s</h4><p class="mb-2">%4$s</p>%5$s</div><!--/column -->',
      'features_style_icon' => 'mb-3',

      'column_class_1' => 'order-lg-2',
      'column_class_2' => '',

   )
);
?>

<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
   <div class="container py-14 py-md-16">
      <div class="row gx-lg-8 gx-xl-12 gy-6 mb-10">
         <div class="col-lg-6 <?php echo $block->column_class_1; ?>">
            <?php echo $block->progress; ?>
            <!-- /.progress-list -->
         </div>
         <!--/column -->
         <div class="col-lg-6 <?php echo $block->column_class_2; ?>">
            <?php echo $block->subtitle_first; ?>
            <!--/subtitle -->
            <?php echo $block->title; ?>
            <!--/title -->
            <?php echo $block->subtitle_second; ?>
            <!--/subtitle -->
         </div>
         <!--/column -->
      </div>
      <!--/.row -->
      <div class="row gx-lg-8 gx-xl-12 gy-6 text-center">
         <?php echo $block->features; ?>
         <!--/features -->
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