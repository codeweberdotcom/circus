<?php

/**
 * CW
 */
$features = new CW_Settings(
   $cw_settings = array(
      'title' => 'Wonder how much faster your website can go? Easily check your SEO Score now.',
      'patternTitle' => ' <h3 class="display-4 mb-5 %2$s">%1$s</h3>',
      'paragraph' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.',
      'patternParagraph' => '<p class="mb-7 %2$s">%1$s</p>',
      'subtitle' => 'Analize now',
      'patternSubtitle' => '<h2 class="fs-16 text-uppercase text-muted mb-3 %2$s">%1$s</h2>',

      // 'buttons' => '<span><a class="btn btn-primary rounded-pill me-2">Try It For Free</a></span>',
      // 'buttons_pattern' => '<div class="d-flex justify-content-center justify-content-lg-start flex-wrap" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">%s</div>',

      //'divider' => 'bg-gradient-reverse-primary',

      'background_class_default' => 'bg-gradient-reverse-primary',
      'background_data_default' => '/dist/img/photos/bg16.png',
      'background_video_preview' => '/dist/img/photos/movie2.jpg',
      'background_video_url' => '/dist/media/movie2.mp4',
      'background_pattern_url' => '/dist/img/pattern.png',

      'image_pattern' => '<figure %5$s><img class="w-auto" src="%1$s" srcset="%2$s" alt="%3$s"></figure>',
      'image_link' => '/dist/img/illustrations/i8.png',
      'image_thumb_size' => 'sandbox_hero_1',
      'image_big_size' => 'project_1',

      'swiper' => array('swiper' => true, 'xs' => '1'),

      //'shapes' => array('<div class="shape rounded-circle bg-soft-blue rellax w-16 h-16" data-rellax-speed="1" style="bottom: -0.5rem; right: -2.2rem; z-index: 0;"></div>', '<div class="shape bg-dot yellow rellax w-16 h-17" data-rellax-speed="1" style="top: -0.5rem; left: -2.5rem; z-index: 0;"></div>'),

      //'features' => '<div class="col-md-6 col-xl-3"><div class="card shadow-lg"><div class="card-body"><img src="' . get_template_directory_uri() . '/dist/img/icons/lineal/search-2.svg" class="svg-inject icon-svg icon-svg-md text-yellow mb-3" alt="" /><h4>SEO Services</h4><p class="mb-2">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus cras justo.</p><a href="#" class="more hover link-yellow">Learn More</a></div><!--/.card-body --></div><!--/.card --></div><!--/column -->',
      //'features_pattern' => '<div class="col-md-6 col-xl-3 %1$s"><div class="card shadow-lg"><div class="card-body">%2$s<h4>%3$s</h4><p class="mb-5">%4$s</p>%5$s</div><!--/.card-body --></div><!--/.card --></div><!--/column -->',

      'list' => true,
      'list_demo' => '<div class="row gy-3"><div class="col-xl-6"><ul class="icon-list bullet-bg bullet-soft-primary mb-0"><li><span><i class="uil uil-check"></i></span><span>Aenean quam ornare. Curabitur blandit.</span></li><li class="mt-3"><span><i class="uil uil-check"></i></span><span>Nullam quis risus eget urna mollis ornare.</span></li></ul></div><!--/column --><div class="col-xl-6"><ul class="icon-list bullet-bg bullet-soft-primary mb-0"><li><span><i class="uil uil-check"></i></span><span>Etiam porta euismod malesuada mollis.</span></li><li class="mt-3"><span><i class="uil uil-check"></i></span><span>Vivamus sagittis lacus vel augue rutrum.</span></li></ul></div><!--/column --></div><!--/.row -->',

      'column_class_1' => '',
      'column_class_2' => 'order-lg-2'
   )
);
?>


<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $features->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $features->background_data; ?>>
   <div class="container py-14 py-md-16">
      <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
         <div class="col-lg-7 <?php echo $features->column_class_1; ?>">
            <?php echo $features->swiper_final; ?>
            <!--/swiper -->
         </div>
         <!--/column -->
         <div class="col-lg-5 <?php echo $features->column_class_2; ?>">
            <?php $dasdas = new CW_Tables(NULL, NULL, NULL); ?>
            <?php echo $dasdas->final_table; ?>
         </div>
         <!--/column -->
      </div>
      <!--/.row -->
   </div>
   <!-- /.container -->
</section>