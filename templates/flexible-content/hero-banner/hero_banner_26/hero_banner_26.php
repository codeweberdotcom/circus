<?php

/**
 * Hero 26
 */
$block = new CW_Settings(
  $cw_settings = array(
    'title' => 'Grow Your Business with <br class="d-none d-md-block d-lg-none" /><span class="text-primary">Our Marketing Solutions</span>',
    'patternTitle' => '<h1 class="display-1 mb-4 me-xl-5 mt-lg-n10 %2$s">%1$s</h1>',

    'paragraph' => 'We help our clients to increase their website <br class="d-none d-md-block d-lg-none" /> traffic, rankings and visibility in search results.',
    'patternParagraph' => '<p class="lead fs-24 lh-sm mb-7 pe-xxl-15 %2$s">%1$s</p>',

    // 'subtitle' => 'Grow Your Business with Our Solutions.',
    // 'patternSubtitle' => '<h2 class="fs-15 text-uppercase text-muted mb-3">%s</h2>',

    'buttons' => '<div class="d-inline-flex me-2"><a href="#" class="btn btn-lg btn-grape rounded">Try it for Free</a></div>
          <div class="d-inline-flex"><a href="#" class="btn btn-lg btn-outline-grape rounded">Explore Now</a></div>',
    'buttons_pattern' => '<div class="d-flex justify-content-center justify-content-lg-start flex-wrap" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">%s</div>',

    'background_class_default' => 'wrapper bg-soft-primary',
    //'background_data_default' => '/dist/img/photos/bg16.png',
    //'background_video_preview' => '/dist/img/photos/movie2.jpg',
    //'background_video_url' => '/dist/media/movie2.mp4',
    //'background_pattern_url' => '/dist/img/pattern.png',

    //'typewriter' => 'easy usage,fast transactions,secure payments',

    'divider' => true,
    //'divider_angles' => 'upper-start',
    'divider_wave' => '<!-- Wave 8 --><div class="overflow-hidden"><div class="divider text-white mx-n2"><svg viewBox="0 0 1140 114" xmlns="http://www.w3.org/2000/svg"><path fill="currentColor" d="M1135.37 0.490889C1127.67 1.75327 1120.55 4.63509 1115.27 8.61985L1112.38 10.8003L1108.23 8.75613C1102.15 5.76302 1098.35 4.81361 1091.3 4.5297C1087.63 4.38116 1084.15 4.49563 1082.22 4.8286C1077.56 5.63264 1071.32 7.84352 1067.74 9.95991C1063.66 12.3788 1058.61 17.4611 1056.69 21.0974C1055.86 22.6592 1055.03 23.9365 1054.83 23.9365C1054.64 23.9365 1053.27 23.5204 1051.79 23.0121C1045.35 20.7926 1036.46 20.1721 1029.21 21.4363C1020.1 23.0235 1011.97 27.0659 1005.33 33.2997L1001.41 36.9847L999.14 35.4465C993.539 31.6503 984.262 27.949 976.325 26.3432C970.074 25.0785 957.034 25.2062 950.8 26.5926C933.13 30.5233 918.163 41.3851 909.679 56.4338C908.558 58.423 907.48 60.3172 907.284 60.6434C907.009 61.1004 905.929 60.7692 902.582 59.2029C890.155 53.3857 878.421 50.7546 864.909 50.7546C851.408 50.7546 838.516 53.7032 827.189 59.3814L823.766 61.0976L821.965 59.723C804.429 46.3419 781.33 39.4177 760.077 41.1711C745.572 42.3681 731.138 46.9184 719.878 53.8436C718.188 54.8838 716.732 55.7346 716.644 55.7346C716.556 55.7346 715.928 54.1506 715.25 52.2141C713.053 45.9454 709.582 40.6678 704.76 36.2597C701.301 33.0989 698.926 31.5118 694.452 29.3736C688.055 26.3155 684.545 25.5878 676.164 25.5828C669.52 25.5791 668.545 25.6859 664.808 26.8288C659.573 28.4296 655.035 30.6137 651.432 33.2661L648.577 35.3675L643.519 33.9979C635.676 31.8738 632.322 31.4404 623.697 31.4359C614.587 31.4314 609.676 32.1604 601.666 34.7084C594.989 36.8316 589.277 39.6162 583.273 43.6736C578.928 46.61 578.275 46.9225 578.039 46.1798C577.454 44.3364 572.993 38.0926 570.147 35.134C562.748 27.4416 554.042 22.8636 543.645 21.1978C538.755 20.4147 529.536 20.8303 524.885 22.0441C516.224 24.304 508.675 28.6013 502.883 34.5689C501.77 35.7168 500.682 36.6558 500.467 36.6558C500.251 36.6558 499.221 36.0693 498.176 35.3521C493.151 31.9024 484.481 28.317 477.031 26.608C471.953 25.4429 460.532 24.98 455.022 25.7154C435.088 28.3756 418.231 39.7943 408.432 57.2741L406.216 61.2271L405.916 59.6245C405.75 58.7432 404.701 56.1966 403.584 53.9658C398.863 44.5349 389.01 37.1259 377.207 34.1319C362.772 30.4706 347.698 33.6395 336.382 42.7147L332.777 45.6065L331.964 42.3804C329.193 31.3773 320.461 23.0062 307.664 19.0855C304.064 17.9821 302.959 17.8595 296.404 17.8349C290.662 17.8136 288.476 17.9867 285.994 18.6576C278.366 20.7213 272.265 24.2018 267.675 29.1083C265.061 31.9029 261.653 36.9143 261.653 37.9645C261.653 38.8008 261.23 38.5718 258.773 36.4046C255.695 33.6886 249.121 30.4579 244.845 29.5594C238.446 28.2147 230.557 29.2486 224.634 32.2086C219.571 34.7379 214.012 40.07 210.493 45.7728L208.881 48.3829L205.637 47.0447C191.157 41.0744 173.498 39.4331 157.874 42.6066C148.348 44.5413 137.197 48.9508 129.913 53.6623C128.1 54.8352 126.469 55.6279 126.289 55.4239C126.109 55.22 125.607 53.929 125.175 52.5548C123.141 46.0907 118.47 39.0098 113.5 34.8569C98.9939 22.7359 79.2313 22.0932 64.0945 33.2498L61.1859 35.3934L57.2807 34.2014C51.12 32.3203 47.0548 31.6535 39.9748 31.3614C32.2142 31.0421 25.8146 31.8211 18.5233 33.9734C13.6764 35.4043 5.89537 38.8739 2.15773 41.2715L0 42.6556V78.0406V113.426H720H1440V82.5141V51.6027L1438.75 50.4916C1435.02 47.1741 1427.14 42.3595 1421.09 39.707C1389.74 25.9503 1347.22 28.798 1321.21 46.3965L1316.67 49.4704L1314.17 48.0359C1302.69 41.4428 1289.49 37.1287 1276.42 35.6941C1270.54 35.0491 1258.17 35.4229 1252.62 36.4128C1244.18 37.9186 1233.37 41.336 1227.38 44.3914L1225.41 45.3984L1223.59 43.1848C1214.95 32.671 1202.28 26.4354 1187.37 25.3661L1183.27 25.0722L1182.03 21.8656C1178.21 12.0422 1168.85 4.77001 1155.66 1.37033C1150.26 -0.0201522 1140.95 -0.423988 1135.37 0.490889Z" /></svg></div></div><!-- /.overflow-hidden -->',

    // 'image_pattern' => '<figure %5$s><img class="w-auto" src="%1$s" srcset="%2$s" alt="%3$s" /></figure>',
    // 'image_link' => '/dist/img/photos/clouds.png',
    // 'image_thumb_size' => 'sandbox_hero_1',
    // 'image_big_size' => 'project_1',
    //'shapes' => array('<div class="shape bg-dot primary rellax w-17 h-21" data-rellax-speed="1" style="top: -2.5rem; right: -2.7rem;"></div>'),

    'swiper' => array(
      'swiper_container_class' => 'img-fluid mb-n12 mb-md-n14 mb-lg-n19',
      'image_class' => 'img-fluid mb-n12 mb-md-n14 mb-lg-n19',
      'wrapper_image_class' => 'img-fluid mb-n12 mb-md-n14 mb-lg-n19',
      'image_pattern' => '<figure %5$s %9$s>%6$s<img %4$s src="%1$s" srcset="%1$s" %3$s />%7$s %10$s %11$s</figure>',
      'image_thumb_size' => 'sandbox_hero_26',
      'image_demo' => '<figure><img class="img-fluid mb-n12 mb-md-n14 mb-lg-n19" src="' . get_template_directory_uri() . '/dist/img/illustrations/3d11.png" srcset="' . get_template_directory_uri() . '/img/illustrations/3d11@2x.png 2x" data-cue="fadeIn" data-delay="300" alt="" /></figure>',
      'image_big_size' => 'project_1',
      'img_link' => '/dist/img/illustrations/3d11.png',
      'data_margin' => '30',
      'nav' => 'false',
      'nav_color' => NULL,
      'nav_position' => NULL,
      'dots' => 'true',
      'dots_color' => NULL,
      'dots_position' => 'dots-over',
      'swiper_effect' => 'fade',
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
      'image_shape' => 'rounded',
    ),

    'label_demo' => '<div class="card shadow-lg position-absolute" style="bottom: 10%%; right: 2%%;"><div class="card-body py-4 px-5"><div class="d-flex flex-row align-items-center"><div><img src="' . get_template_directory_uri() . '/dist/img/icons/lineal/check.svg" class="svg-inject icon-svg icon-svg-sm text-primary mx-auto me-3" alt="" /></div><div><h3 class="counter mb-0 text-nowrap">250+</h3><p class="fs-14 lh-sm mb-0 text-nowrap">Projects Done</p></div></div></div><!--/.card-body --></div><!--/.card -->',

    'label_pattern' => '<div class="card shadow-lg position-absolute %6$s" %7$s><div class="card-body py-4 px-5"><div class="d-flex flex-row align-items-center"><div>%2$s</div><div><h3 class="counter mb-0 text-nowrap">%3$s</h3><p class="fs-14 lh-sm mb-0 text-nowrap">%4$s</p>%5$s</div></div></div><!--/.card-body --></div><!--/.card -->',

    'column_class_1' => '',
    'column_class_2' => 'order-lg-2',

  )
);
?>



<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
  <div class="container pt-10 pt-lg-12 pt-xl-12 pt-xxl-10 pb-lg-10 pb-xl-10 pb-xxl-0">
    <div class="row gx-md-8 gx-xl-12 gy-10 align-items-center text-center text-lg-start">
      <div class="col-lg-6" <?php echo $block->column_class_1; ?> data-group="page-title" data-delay="900">
        <?php echo $block->title; ?>
        <!--/title -->
        <?php echo $block->paragraph; ?>
        <!--/pargraph -->
        <?php echo $block->buttons; ?>
        <!--/buttons group -->
      </div>
      <!--/column -->
      <div class="col-10 col-md-7 mx-auto col-lg-6 col-xl-5 ms-xl-5 <?php echo $block->column_class_2; ?>">
        <?php echo $block->swiper_final; ?>
      </div>
      <!--/column -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
  <?php if ($block->divider_wave) {
    echo $block->divider_wave;
  } ?>
  <!-- /divider -->
</section>
<!-- /section -->