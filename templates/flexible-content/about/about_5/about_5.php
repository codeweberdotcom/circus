<?php

/**
 *  About 5
 */


$block = new CW_Settings(
  $cw_settings = array(
    'title' => 'A few reasons why our valued customers choose us.',
    'patternTitle' => '<h2 class="display-5 mb-7 %2$s">%1$s</h2>',

    'subtitle' => 'Why Choose Us?',
    'patternSubtitle' => '<p class="fs-15 text-uppercase text-line text-primary mb-3 %2$s">%1$s</p>',

    'background_class_default' => 'wrapper bg-light',

    //'divider' => true,

    'swiper' => array(
      'swiper_container_class' => 'overflow-hidden',
      'image_class' => '',
      'data_thumbs' => NULL,
      'wrapper_image_class' => '',
      'image_pattern' => '<figure %5$s %9$s>%6$s<img %4$s src="%1$s" srcset="%1$s" %3$s />%7$s %10$s %11$s</figure>',
      'image_thumb_size' => 'sandbox_hero_1',
      'image_demo' => '<figure><img class="w-auto" src="' . get_template_directory_uri() . '/dist/img/illustrations/i2.png" srcset="' . get_template_directory_uri() . '/dist/img/illustrations/i2@2x.png 2x" alt="" /></figure>',
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

    'column_class_1' => 'order-lg-2',
    'column_class_2' => '',

    'accordeon_demo' => '<div class="accordion accordion-wrapper" id="accordionExample">
          <div class="card plain accordion-item">
            <div class="card-header" id="headingOne">
              <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> Professional Design </button>
            </div>
            <!--/.card-header -->
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
              <div class="card-body">
                <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel.</p>
              </div>
              <!--/.card-body -->
            </div>
            <!--/.accordion-collapse -->
          </div>
          <!--/.accordion-item -->
          <div class="card plain accordion-item">
            <div class="card-header" id="headingTwo">
              <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> Top-Notch Support </button>
            </div>
            <!--/.card-header -->
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
              <div class="card-body">
                <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel.</p>
              </div>
              <!--/.card-body -->
            </div>
            <!--/.accordion-collapse -->
          </div>
          <!--/.accordion-item -->
          <div class="card plain accordion-item">
            <div class="card-header" id="headingThree">
              <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> Header and Slider Options </button>
            </div>
            <!--/.card-header -->
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
              <div class="card-body">
                <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel.</p>
              </div>
              <!--/.card-body -->
            </div>
            <!--/.accordion-collapse -->
          </div>
          <!--/.accordion-item -->
        </div>
        <!--/.accordion -->',
  )
);
?>



<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
  <div class="container py-14 py-md-16">
    <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
      <div class="col-lg-7 <?php echo $block->column_class_1; ?>">
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
        <?php echo $block->accordeon; ?>
        <!--/.accordion -->
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