<?php

/**
 * About 9
 */
$block = new CW_Settings(
   $cw_settings = array(
      'subtitle' => 'What Makes Us Different?',
      'patternSubtitle' => '<h2 class="fs-16 text-uppercase text-gradient gradient-1 mb-3 %2$s">%1$s</h2>',

      'title' => 'We make spending stress free so you have the perfect control.',
      'patternTitle' => '<h3 class="display-4 mb-4 me-lg-n5 %2$s">%1$s</h3>',

      'paragraph' => 'Etiam porta sem malesuada magna mollis euismod. Donec ullamcorper nulla non metus auctor fringilla. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce dapibus, tellus ac cursus. Integer posuere erat a ante venenatis dapibus posuere velit.',
      'patternParagraph' => '<p class="mb-6 %2$s">%1$s</p>',

      'background_class_default' => 'wrapper bg-light',

      'divider' => true,

      'swiper' => array(
         'swiper_container_class' => 'overflow-hidden',
         'image_class' => '',
         'data_thumbs' => NULL,
         'wrapper_image_class' => '',
         'image_pattern' => '<figure %5$s %9$s>%6$s<img %4$s src="%1$s" srcset="%1$s" %3$s />%7$s %10$s %11$s</figure>',
         'image_thumb_size' => 'sandbox_hero_2',
         'image_demo' => '<figure class="rounded"><img class="img-fluid" src="' . get_template_directory_uri() . '/dist/img/photos/about27.jpg" srcset="' . get_template_directory_uri() . '/dist/img/photos/about27@2x.jpg 2x" alt=""></figure><div class="card shadow-lg position-absolute d-none d-md-block" style="top: 15%; left: -7%"><div class="card-body py-4 px-5"><div class="d-flex flex-row align-items-center"><div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 234.66" data-inject-url="https://sandbox.elemisthemes.com/assets/img/icons/solid/cloud-group.svg" class="svg-inject icon-svg icon-svg-sm solid-duo text-grape-fuchsia me-3"><circle class="fill-secondary" cx="128" cy="149.33" r="21.33"></circle><path class="fill-secondary" d="M162.67 234.66H93.34a8 8 0 01-8-8v-16a29.36 29.36 0 0129.33-29.33h26.67a29.35 29.35 0 0129.33 29.33v16a8 8 0 01-8 8zm32-64h-14.19a55.46 55.46 0 0116.85 40v2.67H216a8.06 8.06 0 008-8V200a29.32 29.32 0 00-29.33-29.34zm-133.34 0A29.31 29.31 0 0032 200v5.35a8.06 8.06 0 008 8h18.67v-2.67a55.46 55.46 0 0116.85-40z"></path><circle class="fill-secondary" cx="74.67" cy="138.66" r="21.33"></circle><circle class="fill-secondary" cx="181.33" cy="138.66" r="21.33"></circle><path class="fill-primary" d="M27.2 162.94a52.21 52.21 0 018.8-6.56A42.48 42.48 0 01107.73 112a41 41 0 0140.54 0A42.48 42.48 0 01220 156.38a55.09 55.09 0 015.83 4 64.4 64.4 0 00-26.65-118.49A81.31 81.31 0 00128 0C90.19 0 57.39 26.3 49.1 62.18 21.54 65.07 0 88.22 0 116.26c0 19.93 11 37.21 27.2 46.68z"></path></svg></div><div><h3 class="fs-25 counter mb-0 text-nowrap" style="visibility: visible;">25000+</h3><p class="fs-16 lh-sm mb-0 text-nowrap">Happy Clients</p></div></div></div><!--/.card-body --></div>',
         'image_big_size' => 'project_1',
         'img_link' => '/dist/img/photos/about27.jpg',
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
         'autoplay_time' => '1500',
         'loop' => 'false',
         'autoheight' => 'false',
      ),

      'label_demo' => '<div class="card shadow-lg position-absolute d-none d-md-block" style="top: 15%%; left: -7%%;"> <div class="card-body py-4 px-5">
      <div class="d-flex flex-row align-items-center"><div><img src="' . get_template_directory_uri() . '/dist/img/icons/solid/cloud-group.svg" class="svg-inject icon-svg icon-svg-sm solid-duo text-grape-fuchsia me-3" alt="" /></div><div><h3 class="fs-25 counter mb-0 text-nowrap">25000+</h3><p class="fs-16 lh-sm mb-0 text-nowrap">Happy Clients</p></div></div></div><!--/.card-body --></div><!--/.card -->',

      'label_pattern' => '<div class="card shadow-lg position-absolute zindex-1 %6$s" %7$s><div class="card-body py-4 px-5"><div class="d-flex flex-row align-items-center"><div>%2$s</div><div><h3 class="counter mb-0 text-nowrap">%3$s</h3><p class="fs-14 lh-sm mb-0 text-nowrap">%4$s</p>%5$s</div></div></div><!--/.card-body --></div><!--/.card -->',

      'list' => 'true',
      'list_demo' => '<ul class="icon-list bullet-bg bullet-soft-primary"><li><i class="uil uil-check"></i>Aenean eu leo quam. Pellentesque ornare.</li>
      <li><i class="uil uil-check"></i>Nullam quis risus eget urna mollis ornare.</li><li><i class="uil uil-check"></i>Donec id elit non mi porta gravida at eget.</li>
      </ul>',

      'progress' => '<div class="card-body p-6"><div class="progressbar semi-circle fuchsia mb-3" data-value="80"></div><h4 class="mb-0">Time Saved</h4></div>',
      'progress_item_wrappers' => array('<div class="card-body p-6">', '</div>'),

      'column_class_1' => 'offset-lg-1 order-lg-2',
      'column_class_2' => '',
   )
);
?>

<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
   <div class="container py-14 py-md-16">
      <div class="row gx-md-8 gy-10 align-items-center">
         <div class="col-lg-6 position-relative <?php echo $block->column_class_1; ?>">
            <?php echo $block->swiper_final; ?>
            <!--/swiper -->
            <div class="card shadow-lg position-absolute text-center d-none d-md-block" style="bottom: 10%; left: -10%;">
               <?php echo $block->progress; ?>
               <!-- /.progress-list -->
               <!--/.card-body -->
            </div>
            <!--/.card -->
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
            <!--/pargraph -->
            <?php echo $block->list; ?>
            <!--/list -->
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