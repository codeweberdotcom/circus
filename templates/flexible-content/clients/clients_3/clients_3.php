<?php

/**
 * Clients 3
 */

$block = new CW_Settings(
   $cw_settings = array(
      'subtitle' => 'Our Clients',
      'patternSubtitle' => '<h2 class="fs-15 text-uppercase text-muted mb-3 %2$s">%1$s</h2>',

      'title' => 'We are trusted by over 300+ clients. Join them by using our services and grow your business.',
      'patternTitle' => ' <h3 class="display-5 mb-0 %2$s">%1$s</h3>',

      'paragraph' => 'Donec ullamcorper nulla non metus auctor fringilla. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Maecenas faucibus mollis interdum. Cras justo odio mollis.',
      'patternParagraph' => '<p class="lead mb-0 %2$s">%1$s</p>',

      'background_class_default' => 'wrapper bg-light',

      'swiper' => array(
         'swiper_container_class' => 'clients',
         'image_class' => '',
         'wrapper_image_class' => '',
         'image_pattern' => '<img src="%1$s" srcset="%1$s" %3$s />',
         'image_thumb_size' => 'sandbox_clients_logo_1-1',
         'image_demo' => '<img src="' . get_template_directory_uri() . '/dist/img/brands/c3.png" srcset="' . get_template_directory_uri() . '/dist/img/brands/c3.png" alt="" data-cue="fadeIn" data-delay="300" />',
         'image_big_size' => 'project_1',
         'img_link' => '/dist/img/brands/c3.png',
         'data_margin' => '80',
         'nav' => 'false',
         'nav_color' => '',
         'nav_position' => '',
         'dots' => 'false',
         'dots_color' => '',
         'dots_position' => 'dots-over',
         'swiper_effect' => 'slide',
         'base_items' => '2',
         'items_xs' => '2',
         'items_sm' => '2',
         'items_md' => '3',
         'items_lg' => '7',
         'items_xl' => '7',
         'items_xxl' => '7',
         'autoplay' => 'false',
         'autoplay_time' => '3000',
         'loop' => 'loop',
         'autoheight' => 'false',
         'image_shape' => NULL,
      ),
      //'divider' => true,
   )
);
?>


<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
   <div class="container py-14 py-md-16">
      <?php echo $block->subtitle_first; ?>
      <!--/subtitle -->
      <div class="row gx-lg-8 mb-10 gy-5">
         <div class="col-lg-6">
            <?php echo $block->title; ?>
            <!--/title -->
            <?php echo $block->subtitle_second; ?>
            <!--/subtitle -->
         </div>
         <!-- /column -->
         <div class="col-lg-6">
            <?php echo $block->paragraph; ?>
         </div>
         <!-- /column -->
      </div>
      <!-- /.row -->
      <div class="row row-cols-2 row-cols-md-3 row-cols-xl-5 gx-lg-6 gy-6 justify-content-center">

         <?php $type_client = get_sub_field('cw_type_clients');
         if ($type_client == 'post') {
            $cw_posts = get_sub_field('cw_posts');
            if ($cw_posts) {
               foreach ($cw_posts as $post_ids) {
                  $cw_logotip = get_field('cw_logotip', $post_ids);
                  if ($cw_logotip) {  ?>
                     <div class="col">
                        <div class="card shadow-lg h-100 align-items-center">
                           <div class="card-body align-items-center d-flex px-3 py-6 p-md-8">
                              <figure class="px-md-3 px-xl-0 px-xxl-3 mb-0"><img src="<?php echo esc_url($cw_logotip['sizes']['sandbox_slider_2']); ?>" alt="<?php echo esc_attr($cw_logotip['alt']); ?>" /></figure>
                           </div>
                           <!--/.card-body -->
                        </div>
                        <!--/.card -->
                     </div>
                     <!--/column -->
               <?php };
               }
            }
         } elseif ($type_client == 'image') {
            if (have_rows('images')) : ?>
               <?php while (have_rows('images')) : the_row(); ?>
                  <?php $cw_image = get_sub_field('cw_image'); ?>
                  <?php if ($cw_image) : ?>
                     <div class="col">
                        <div class="card shadow-lg h-100 align-items-center">
                           <div class="card-body align-items-center d-flex px-3 py-6 p-md-8">
                              <figure class="px-md-3 px-xl-0 px-xxl-3 mb-0"><img src="<?php echo esc_url($cw_image['sizes']['sandbox_slider_2']); ?>" alt="<?php echo esc_attr($cw_image['alt']); ?>" /></figure>
                           </div>
                           <!--/.card-body -->
                        </div>
                        <!--/.card -->
                     </div>
                     <!--/column -->
                  <?php endif; ?>
               <?php endwhile; ?>
            <?php else : ?>
               <?php // no rows found 
               ?>
         <?php endif;
         }
         ?>
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