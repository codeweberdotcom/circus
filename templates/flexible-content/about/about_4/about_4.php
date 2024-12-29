<?php

/**
 * About 4
 */

$final_icon = '<img src="' . get_template_directory_uri() . '/dist/img/icons/lineal/megaphone.svg" class="svg-inject icon-svg icon-svg-md mb-4" alt="" />';
$icon = new CW_Icon(NULL, NULL, 'mb-4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, $final_icon, NULL);


$block = new CW_Settings(
   $cw_settings = array(
      'title' => 'Who Are We?',
      'patternTitle' => '<h2 class="display-4 mb-3 %2$s">%1$s</h2>',

      'subtitle' => 'We are a digital and branding company that believes in the power of creative strategy and along with great design.',
      'patternSubtitle' => '<p class="lead fs-lg %2$s">%1$s</p>',

      'paragraph' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.',
      'patternParagraph' => '<p class="mb-6 %2$s">%1$s</p>',

      'swiper' => array(
         'swiper_container_class' => 'overflow-hidden',
         'image_class' => 'w-auto',
         'data_thumbs' => NULL,
         'wrapper_image_class' => '',
         'image_pattern' => '<figure %5$s %9$s>%6$s<img %4$s src="%1$s" srcset="%1$s" %3$s />%7$s %10$s %11$s</figure>',
         'image_thumb_size' => 'sandbox_features_6',
         'image_demo' => '<div class="overlap-grid overlap-grid-2"><div class="item"><figure class="rounded shadow"><img src="' . get_template_directory_uri() . '/dist/img/photos/about2.jpg" srcset="' . get_template_directory_uri() . '/dist/img/photos/about2@2x.jpg 2x" alt=""></figure></div><div class="item"><figure class="rounded shadow"><img src="' . get_template_directory_uri() . '/dist/img/photos/about3.jpg" srcset="' . get_template_directory_uri() . '/dist/img/photos/about3@2x.jpg 2x" alt=""></figure></div></div>',
         'image_big_size' => 'sandbox_hero_6',
         'img_link' => '/dist/img/photos/about2.jpg',

      ),
      'label_demo' => '<div class="card shadow-lg" style="bottom: 5rem; right: 5rem;"><div class="card-body py-4 px-5"><div class="d-flex flex-row align-items-center"><div><img src="' . get_template_directory_uri() . '/dist/img/icons/lineal/check.svg" class="svg-inject icon-svg icon-svg-sm text-primary mx-auto me-3" alt="" /></div><div><h3 class="counter mb-0 text-nowrap">250+</h3><p class="fs-14 lh-sm mb-0 text-nowrap">Projects Done</p></div></div></div><!--/.card-body --></div><!--/.card -->',
      'label_pattern' => '<div class="card shadow-lg position-absolute zindex-1 %6$s" %7$s><div class="card-body py-4 px-5"><div class="d-flex flex-row align-items-center"><div>%2$s</div><div><h3 class="counter mb-0 text-nowrap">%3$s</h3><p class="fs-14 lh-sm mb-0 text-nowrap">%4$s</p>%5$s</div></div></div><!--/.card-body --></div><!--/.card -->',

      'list' => 'true',
      'list_demo' => '<div class="row gy-3 gx-xl-8"><div class="col-xl-6"><ul class="icon-list bullet-bg bullet-soft-primary mb-0"><li><span><i class="uil uil-check"></i></span><span>Aenean eu leo quam ornare curabitur blandit tempus.</span></li><li class="mt-3"><span><i class="uil uil-check"></i></span><span>Nullam quis risus eget urna mollis ornare donec elit.</span></li></ul></div><!--/column --><div class="col-xl-6"><ul class="icon-list bullet-bg bullet-soft-primary mb-0"><li><span><i class="uil uil-check"></i></span><span>Etiam porta sem malesuada magna mollis euismod.</span></li><li class="mt-3"><span><i class="uil uil-check"></i></span><span>Fermentum massa vivamus faucibus amet euismod.</span></li></ul></div><!--/column --></div><!--/.row -->',

      'background_class_default' => 'wrapper bg-light',

      'divider' => true,

      'shapes' => array('<div class="shape bg-dot primary rellax w-16 h-20" data-rellax-speed="1" style="top: 3rem; left: 5.5rem"></div>'),

      'column_class_1' => 'order-lg-2',
      'column_class_2' => 'order-lg-1',

   )
);
?>

<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
   <div class="container py-14 py-md-16">
      <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
         <div class="col-lg-6 position-relative <?php echo $block->column_class_1; ?>">
            <?php echo $block->shapes; ?>
            <!--/shapes -->
            <?php echo $block->swiper_final; ?>
            <!--/swiper -->
         </div>
         <!--/column -->
         <div class="col-lg-6 <?php echo $block->column_class_2; ?>">
            <?php echo $icon->final_icon; ?>
            <!--/final_icon -->
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