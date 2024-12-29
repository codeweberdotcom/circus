<?php

if (have_rows('responsive_settings')) {
   while (have_rows('responsive_settings')) {
      the_row();
      $responsive_obj = new CW_Responsive_col(NULL, NULL, NULL, NULL, NULL, NULL);
      $responsive_col = $responsive_obj->responsive_class_final;
   }
}

/**
 * About 1
 */
$services_post = get_sub_field('services_post', get_the_ID());
$block = new CW_Settings(
   $cw_settings = array(
      'title' => 'Latest Projects',
      'patternTitle' => ' <h2 class="display-4 mb-3 %2$s">%1$s</h2>',
      'subtitle' => 'Check out some of my latest projects with creative ideas.',
      'patternSubtitle' => ' <p class="lead fs-20 mb-0 %2$s">%1$s</p>',
      'background_class_default' => 'wrapper bg-light',
      'divider' => true,
      'buttons' => '<a href="/services/" class="btn btn-primary rounded-pill mb-0">Все Услуги</a>',
      'buttons_pattern' => '<div class="d-flex justify-content-center justify-content-lg-start flex-wrap" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">%s</div>',
      'responsive' => '',

   )
);
?>

<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
   <div class="container py-14 py-md-16">
      <div class="row align-items-center mb-10">
         <div class="col-md-8 col-lg-9 col-xl-8 col-xxl-7 pe-xl-20">
            <?php echo $block->subtitle_first; ?>
            <!--/subtitle -->
            <?php echo $block->title; ?>
            <!--/title -->
            <?php echo $block->subtitle_second; ?>
            <!--/subtitle -->
         </div>
         <!--/column -->
         <div class="col-md-4 col-lg-3 ms-md-auto text-md-end mt-5 mt-md-0">
            <?php echo $block->buttons; ?>
            <!--/buttons group -->
         </div>
         <!--/column -->
      </div>
      <!--/.row -->
      <div class="row grid-view gx-md-8 gy-8">
         <?php if ($services_post) : ?>
            <?php foreach ($services_post as $post) : ?>
               <?php setup_postdata($post);
               $post_id = $post->post_ID;
               ?>
               <div class="col-md-6 col-lg-4">
                  <div class="position-relative">
                     <div class="shape rounded bg-soft-blue rellax d-md-block" data-rellax-speed="0" style="bottom: -0.75rem; right: -0.75rem; width: 98%; height: 98%; z-index:0"></div>
                     <a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>" class="card lift service_card">
                        <figure class="card-img-top">
                           <?php $post_id = get_the_ID(); ?>
                           <?php $izobrazhenie = get_the_post_thumbnail($post_id, 'sandbox_slider_2'); ?>
                           <?php if ($izobrazhenie) : ?>
                              <?php $attachment_id = get_post_thumbnail_id($post_id); // ID вложения 
                              ?>
                              <?php
                              printf(
                                 '<img class="img-fluid " src="%s" srcset="%s">',
                                 wp_get_attachment_image_url($attachment_id, 'sandbox_slider_2'),
                                 wp_get_attachment_image_srcset($attachment_id, 'sandbox_slider_2')
                              );
                              ?>
                           <?php endif; ?>
                        </figure>
                        <div class="card-body px-6 py-5 d-flex flex-row justify-content-between align-items-center">
                           <h3 class="mb-1 h4"><?php the_title(); ?></h3>
                        </div>
                        <!--/.card-body -->
                     </a>
                     <!-- /.card -->
                  </div>
                  <!-- /div -->
               </div>
               <!--/column -->
            <?php endforeach; ?>
            <?php wp_reset_postdata(); ?>
         <?php endif; ?>
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