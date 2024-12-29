<?php

/**
 * CW Image
 */
$block = new CW_Settings(
   $cw_settings = array(
      'swiper' => array(
         'swiper_container_class' => '',
         'image_class' => 'w-auto',
         'wrapper_image_class' => '',
         'image_pattern' => '<figure %5$s %9$s>%6$s<img %4$s src="%1$s" srcset="%1$s" %3$s />%7$s %10$s %11$s</figure>',
         'image_thumb_size' => 'sandbox_hero_18',
         'image_demo' => '<figure><img class="w-auto" src="' . get_template_directory_uri() . '/dist/img/photos/about7.jpg" srcset="' . get_template_directory_uri() . '/dist/img/photos/about7@2x.jpg 2x" alt="" /></figure>',
         'image_big_size' => 'project_1',
         'img_link' => '/dist/img/photos/about7.jpg',
         'data_margin' => '30',
         'nav' => 'true',
         'nav_color' => 'nav-light',
         'nav_position' => 'nav-start',
         'dots' => 'true',
         'dots_color' => 'nav-start',
         'dots_position' => 'dots-over',
         'swiper_effect' => 'slide',
         'base_items' => '1',
         'items_xs' => '1',
         'items_sm' => '1',
         'items_md' => '1',
         'items_lg' => '1',
         'items_xl' => '1',
         'items_xxl' => '1',
         'autoplay' => 'true',
         'autoplay_time' => '3000',
         'loop' => 'loop',
         'autoheight' => 'false',
         'image_shape' => 'rounded'
      ),

      'label_demo' => '<div class="card shadow-lg position-absolute zindex-1" style="bottom: 2rem; left: -2rem;"><div class="card-body py-4 px-5"><div class="d-flex flex-row align-items-center"><div><img src="' . get_template_directory_uri() . '/dist/img/icons/lineal/check.svg" class="svg-inject icon-svg icon-svg-sm text-primary mx-auto me-3" alt="" /></div><div><h3 class="counter mb-0 text-nowrap">250+</h3><p class="fs-14 lh-sm mb-0 text-nowrap">Projects Done</p></div></div></div><!--/.card-body --></div><!--/.card -->',

      'label_pattern' => '<div class="card shadow-lg position-absolute zindex-1 %6$s" %7$s><div class="card-body py-4 px-5"><div class="d-flex flex-row align-items-center"><div>%2$s</div><div><h3 class="counter mb-0 text-nowrap">%3$s</h3><p class="fs-14 lh-sm mb-0 text-nowrap">%4$s</p>%5$s</div></div></div><!--/.card-body --></div><!--/.card -->',
   )
);

echo $block->swiper_final;
