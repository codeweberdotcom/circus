<?php

/**
 * Woocommerce 1
 */

$block = new CW_Settings(
   $cw_settings = array(
      'subtitle' => 'Our Models',
      'patternSubtitle' => '<h2 class="fs-16 text-uppercase text-muted mb-3 %2$s">%1$s</h2>',

      'title' => 'Check out some of our awesome projects with creative ideas and great design.',
      'patternTitle' => '<h3 class="display-4 mb-9 %2$s">%1$s</h3>',

      'background_class_default' => 'wrapper bg-light',
      'divider' => true,

      'shapes' => array('<div class="shape bg-line leaf rounded-circle rellax w-17 h-17" data-rellax-speed="1" style="top: -2rem; right: -0.6rem;"></div>', '<div class="shape bg-pale-violet rounded-circle rellax w-17 h-17" data-rellax-speed="1" style="bottom: -2rem; left: -0.4rem;"></div>'),
   )
);
?>

<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
   <div class="container py-14 py-md-16">
      <div class="row">
         <div class="col-lg-9 col-xl-8 col-xxl-7">
            <?php echo $block->subtitle_first; ?>
            <!--/subtitle -->
            <?php echo $block->title; ?>
            <!--/title -->
            <?php echo $block->subtitle_second; ?>
            <!--/subtitle -->
         </div>
      </div>
      <?php $products = get_sub_field('products');
      if ($products) { ?>
         <div class="swiper-container grid-view mb-6" data-margin="30" data-dots="true" data-items-xl="4" data-items-md="2" data-items-xs="1" data-nav="true">
            <div class="swiper">
               <div class="swiper-wrapper">
                  <?php
                  foreach ($products as $post_ids) { ?>
                     <div class="swiper-slide">
                        <figure class="rounded mb-6">
                           <?php
                           $image = wp_get_attachment_image_src(get_post_thumbnail_id($post_ids), 'team-1');
                           ?>
                           <?php
                           $image_big = wp_get_attachment_image_src(get_post_thumbnail_id($post_ids), 'sandbox_hero_18');
                           ?>
                           <img src="<?php echo $image[0]; ?>" srcset="<?php echo $image[0]; ?>" alt="" />
                           <a class="item-link" href="<?php echo $image_big[0]; ?>" data-glightbox="title: <?php echo get_the_title($post_ids); ?>;" data-gallery="projects-group"><i class="uil uil-focus-add"></i></a>
                        </figure>
                        <div class="project-details d-flex justify-content-center flex-column">
                           <div class="post-header">
                              <h4 class="post-title h3"><a href="<?php echo get_permalink($post_ids); ?>" class="link-dark"><?php echo get_the_title($post_ids); ?></a></h4>
                           </div>
                           <!-- /.post-header -->
                        </div>
                        <!-- /.project-details -->
                     </div>
                     <!--/.swiper-slide -->
                  <?php }
                  ?>
               </div>
               <!--/.swiper-wrapper -->
            </div>
            <!-- /.swiper -->
         </div>
         <!-- /.swiper-container -->
      <?php
      }; ?>
      <?php do_action('button_after_flexible_content_woo_1_'); ?>
   </div>
   <!-- /.container -->
</section>
<!-- /section -->