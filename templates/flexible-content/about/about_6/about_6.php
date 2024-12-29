<?php

/**
 *  About 6
 */
$block = new CW_Settings(
   $cw_settings = array(
      'title' => 'We bring rapid solutions to make the life of our customers easier.',
      'patternTitle' => ' <h2 class="display-4 mb-6 pe-xxl-6 %2$s">%1$s</h2>',

      'background_class_default' => 'wrapper bg-light',

      'divider' => true,

      'swiper' => array(
         'swiper_container_class' => 'overflow-hidden',
         'image_class' => '',
         'data_thumbs' => NULL,
         'wrapper_image_class' => '',
         'image_pattern' => '<figure %5$s %9$s>%6$s<img %4$s src="%1$s" srcset="%1$s" %3$s />%7$s %10$s %11$s</figure>',
         'image_thumb_size' => 'sandbox_hero_1',
         'image_demo' => '<figure><img class="w-auto" src="' . get_template_directory_uri() . '/dist/img/illustrations/i8.png" srcset="' . get_template_directory_uri() . '/dist/img/illustrations/i8@2x.png 2x" alt="" /></figure>',
         'image_big_size' => 'project_1',
         'img_link' => '/dist/img/illustrations/i2.png',
         'image_shape' => 'rounded',
         'data_margin' => '30',
         'nav' => 'true',
         'nav_color' => 'nav-light',
         'nav_position' => 'nav-start',
         'dots' => 'true',
         'dots_color' => 'dots-light',
         'dots_position' => 'dots-over',
         'swiper_effect' => 'slide',
         'base_items' => '1',
         'items_xs' => '1',
         'items_sm' => '1',
         'items_md' => '1',
         'items_lg' => '1',
         'items_xl' => '1',
         'items_xxl' => '1',
         'autoplay' => 'false',
         'autoplay_time' => '5000',
         'loop' => 'false',
         'autoheight' => 'false',


      ),

      'label_demo' => '<div class="card shadow-lg" style="bottom: 5rem; right: 5rem;"><div class="card-body py-4 px-5"><div class="d-flex flex-row align-items-center"><div><img src="' . get_template_directory_uri() . '/dist/img/icons/lineal/check.svg" class="svg-inject icon-svg icon-svg-sm text-primary mx-auto me-3" alt="" /></div><div><h3 class="counter mb-0 text-nowrap">250+</h3><p class="fs-14 lh-sm mb-0 text-nowrap">Projects Done</p></div></div></div><!--/.card-body --></div><!--/.card -->',

      'label_pattern' => '<div class="card shadow-lg position-absolute zindex-1 %6$s" %7$s><div class="card-body py-4 px-5"><div class="d-flex flex-row align-items-center"><div>%2$s</div><div><h3 class="counter mb-0 text-nowrap">%3$s</h3><p class="fs-14 lh-sm mb-0 text-nowrap">%4$s</p>%5$s</div></div></div><!--/.card-body --></div><!--/.card -->',


      'column_class_1' => '',
      'column_class_2' => 'order-lg-2',

      'progress' => '<ul class="progress-list mt-3"><li><p>Marketing</p><div class="progressbar line blue" data-value="100"></div></li><li><p>Strategy</p><div class="progressbar line yellow" data-value="80"></div></li><li><p>Development</p><div class="progressbar line orange" data-value="85"></div></li><li><p>Data Analysis</p><div class="progressbar line green" data-value="90"></div></li></ul><!-- /.progress-list -->',

      'progress_item_wrappers' => array('<div class="row gy-6 text-center">', '</div>', '<div class="col-6">', '</div>'),
   )
);
?>






<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
   <div class="container py-14 py-md-16">
      <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
         <div class="col-lg-7 <?php echo $block->column_class_1; ?>">
            <?php echo $block->swiper_final; ?>
         </div>
         <!--/column -->
         <div class="col-lg-5 <?php echo $block->column_class_2; ?>">
            <?php echo $block->title; ?>
            <!--/title -->
            <?php echo $block->progress; ?>
            <!-- /.progress-list -->
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