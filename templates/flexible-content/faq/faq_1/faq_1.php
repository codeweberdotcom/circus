<?php

/**
 *  FAQ 1
 */


$block = new CW_Settings(
   $cw_settings = array(
      'title' => 'Common Questions',
      'patternTitle' => '<h2 class="display-4 mb-3 %2$s">%1$s</h2>',

      'subtitle' => 'If you don\'t see an <span class="underline">answer to your question</span>, you can send us an email from our contact form.',
      'patternSubtitle' => '<p class="lead fs-lg mb-6 pe-xxl-10 %2$s">%1$s</p>',

      'background_class_default' => 'wrapper bg-light',

      'divider' => true,

      'swiper' => array(
         'swiper_container_class' => 'overflow-hidden',
         'image_class' => '',
         'data_thumbs' => NULL,
         'wrapper_image_class' => '',
         'image_pattern' => '<figure %5$s %9$s>%6$s<img %4$s src="%1$s" srcset="%1$s" %3$s />%7$s %10$s %11$s</figure>',
         'image_thumb_size' => 'sandbox_faq_1',
         'image_demo' => '<figure><img class="w-auto" src="' . get_template_directory_uri() . '/dist/img/illustrations/i5.png" srcset="' . get_template_directory_uri() . '/dist/img/illustrations/i5@2x.png 2x" alt="" /></figure>',
         'image_big_size' => 'project_1',
         'img_link' => '/dist/img/illustrations/i5.png',
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
         'autoplay_time' => '3000',
         'loop' => 'false',
         'autoheight' => 'false',
      ),

      'label_demo' => '<div class="card shadow-lg" style="bottom: 5rem; right: 5rem;"><div class="card-body py-4 px-5"><div class="d-flex flex-row align-items-center"><div><img src="' . get_template_directory_uri() . '/dist/img/icons/lineal/check.svg" class="svg-inject icon-svg icon-svg-sm text-primary mx-auto me-3" alt="" /></div><div><h3 class="counter mb-0 text-nowrap">250+</h3><p class="fs-14 lh-sm mb-0 text-nowrap">Projects Done</p></div></div></div><!--/.card-body --></div><!--/.card -->',

      'label_pattern' => '<div class="card shadow-lg position-absolute zindex-1 %6$s" %7$s><div class="card-body py-4 px-5"><div class="d-flex flex-row align-items-center"><div>%2$s</div><div><h3 class="counter mb-0 text-nowrap">%3$s</h3><p class="fs-14 lh-sm mb-0 text-nowrap">%4$s</p>%5$s</div></div></div><!--/.card-body --></div><!--/.card -->',

      'column_class_1' => '',
      'column_class_2' => 'order-lg-2',

      'accordeon_demo' => '<div class="accordion accordion-wrapper" id="accordionExample-2">
               <div class="card plain accordion-item">
                  <div class="card-header" id="headingOne-2">
                     <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseOne-2" aria-expanded="true" aria-controls="collapseOne-2"> Can I cancel my subscription? </button>
                  </div>
                  <!--/.card-header -->
                  <div id="collapseOne-2" class="accordion-collapse collapse show" aria-labelledby="headingOne-2" data-bs-parent="#accordionExample-2">
                     <div class="card-body">
                        <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel.</p>
                     </div>
                     <!--/.card-body -->
                  </div>
                  <!--/.accordion-collapse -->
               </div>
               <!--/.accordion-item -->
               <div class="card plain accordion-item">
                  <div class="card-header" id="headingTwo-2">
                     <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo-2" aria-expanded="false" aria-controls="collapseTwo-2"> Which payment methods do you accept? </button>
                  </div>
                  <!--/.card-header -->
                  <div id="collapseTwo-2" class="accordion-collapse collapse" aria-labelledby="headingTwo-2" data-bs-parent="#accordionExample-2">
                     <div class="card-body">
                        <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel.</p>
                     </div>
                     <!--/.card-body -->
                  </div>
                  <!--/.accordion-collapse -->
               </div>
               <!--/.accordion-item -->
               <div class="card plain accordion-item">
                  <div class="card-header" id="headingThree-2">
                     <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree-2" aria-expanded="false" aria-controls="collapseThree-2"> How can I manage my Account? </button>
                  </div>
                  <!--/.card-header -->
                  <div id="collapseThree-2" class="accordion-collapse collapse" aria-labelledby="headingThree-2" data-bs-parent="#accordionExample-2">
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
      <div class="row gx-lg-8 gx-xl-12 gy-10">
         <div class="col-lg-6 <?php echo $block->column_class_1; ?>">
            <?php echo $block->swiper_final; ?>
            <!--/swiper -->
         </div>
         <!--/column -->
         <div class="col-lg-6 <?php echo $block->column_class_2; ?>">
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