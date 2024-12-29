<?php

/**
 * Features 1
 */

$block = new CW_Settings(
   $cw_settings = array(
      'title' => 'Package Design',
      'patternTitle' => '<h2 class="h3 display-4 mb-4 %2$s">%1$s</h2>',

      'paragraph' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Maecenas faucibus mollis interdum. Maecenas sed diam eget risus varius.',
      'patternParagraph' => '<p class="mb-5 %2$s">%1$s</p>',

      'buttons' => '<a href="#" class="btn btn-soft-leaf rounded-pill mt-6 mb-0">More Details</a>',
      'buttons_pattern' => '<div class="d-flex justify-content-center justify-content-lg-start flex-wrap" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">%s</div>',

      'background_class_default' => 'wrapper bg-light',
      'divider' => true,

      'swiper' => array(
         'swiper_container_class' => 'overflow-hidden',
         'image_class' => '',
         'data_thumbs' => NULL,
         'wrapper_image_class' => '',
         'image_pattern' => '<figure %5$s %9$s>%6$s<img %4$s src="%1$s" srcset="%1$s" %3$s />%7$s %10$s %11$s</figure>',
         'image_thumb_size' => 'sandbox_hero_11',
         'image_demo' => '<figure class="rounded mb-0"><img src="' . get_template_directory_uri() . '/dist/img/photos/se3.jpg" srcset="' . get_template_directory_uri() . '/dist/img/photos/se3@2x.jpg 2x" alt=""></figure>',
         'image_big_size' => 'project_1',
         'img_link' => '/dist/img/photos/se3.jpg',
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

      'label_demo' => '<div class="card shadow-lg" style="bottom: 5rem; right: 5rem;"><div class="card-body py-4 px-5"><div class="d-flex flex-row align-items-center"><div><img src="' . get_template_directory_uri() . '/dist/img/icons/lineal/check.svg" class="svg-inject icon-svg icon-svg-sm text-primary mx-auto me-3" alt="" /></div><div><h3 class="counter mb-0 text-nowrap">250+</h3><p class="fs-14 lh-sm mb-0 text-nowrap">Projects Done</p></div></div></div><!--/.card-body --></div><!--/.card -->',
      'label_pattern' => '<div class="card shadow-lg position-absolute zindex-1 %6$s" %7$s><div class="card-body py-4 px-5"><div class="d-flex flex-row align-items-center"><div>%2$s</div><div><h3 class="counter mb-0 text-nowrap">%3$s</h3><p class="fs-14 lh-sm mb-0 text-nowrap">%4$s</p>%5$s</div></div></div><!--/.card-body --></div><!--/.card -->',

      'shapes' => array('<div class="shape bg-line leaf rounded-circle rellax w-17 h-17" data-rellax-speed="1" style="top: -2rem; right: -0.6rem;"></div>', '<div class="shape bg-pale-violet rounded-circle rellax w-17 h-17" data-rellax-speed="1" style="bottom: -2rem; left: -0.4rem;"></div>'),

      'list' => true,
      'list_demo' => '<div class="row gy-3"><div class="col-xl-6"><ul class="icon-list bullet-bg bullet-soft-leaf mb-0"><li><span><i class="uil uil-check"></i></span><span>Aenean quam ornare curabitur blandit consectetur.</span></li><li class="mt-3"><span><i class="uil uil-check"></i></span><span>Nullam quis risus eget urna mollis ornare aenean leo.</span></li></ul></div><!--/column --><div class="col-xl-6"><ul class="icon-list bullet-bg bullet-soft-leaf mb-0"><li><span><i class="uil uil-check"></i></span><span>Etiam porta euismod malesuada mollis nisl ornare sem.</span></li><li class="mt-3"><span><i class="uil uil-check"></i></span><span>Vivamus sagittis lacus augue rutrum maecenas.</span></li></ul></div><!--/column --></div><!--/.row -->',

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
            <!--/shape -->
            <?php echo $block->swiper_final; ?>
            <!--/swiper -->
         </div>
         <!--/column -->
         <div class="col-lg-6 <?php echo $block->column_class_2; ?>">
            <?php echo $block->title; ?>
            <!--/title -->
            <?php echo $block->paragraph; ?>
            <!--/paragraph -->
            <?php echo $block->list; ?>
            <!--/list -->
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