<?php

/**
 * Team 3
 */

$argss = array(
   'posts_per_page' => 10,
   'post_type' => 'staff',
);

$team = get_sub_field('custom_post');
if ($team) {
   $cw_post_ids = array();
   foreach ($team as $team) {
      $cw_post_ids[] = $team;
   }
   $cw_post_idsd = implode(',', $cw_post_ids);
   $argss['post__in'] = $cw_post_ids;
   $argss['orderby'] = 'post__in';
}

$block = new CW_Settings(
   $cw_settings = array(
      'subtitle' => 'Meet the Team',
      'patternSubtitle' => '<h2 class="fs-15 text-uppercase text-line text-primary text-center mb-3 %2$s">%1$s</h2>',
      'title' => 'Save your time and money by choosing our professional team.',
      'patternTitle' => ' <h3 class="display-5 mb-5 %2$s">%1$s</h3>',
      'paragraph' => 'Donec id elit non mi porta gravida at eget metus. Morbi leo risus, porta ac consectetur ac, vestibulum at eros tempus porttitor.',
      'patternParagraph' => '<p class="%2$s">%1$s</p>',

      'background_class_default' => 'wrapper bg-light',
      'divider' => true,

      'buttons' => '<a href="#" class="btn btn-primary rounded-pill mt-3">See All Members</a>',
      'buttons_pattern' => '<div class="d-flex justify-content-center justify-content-lg-start flex-wrap" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">%s</div>',
   )
);
?>

<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
   <div class="container py-14 py-md-16">
      <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
         <div class="col-lg-4">
            <?php echo $block->subtitle_first; ?>
            <!--/subtitle -->
            <?php echo $block->title; ?>
            <!--/title -->
            <?php echo $block->subtitle_second; ?>
            <!--/subtitle -->
            <?php echo $block->paragraph; ?>
            <!--/paragraph -->
            <?php echo $block->buttons; ?>
            <!--/buttons group -->
         </div>
         <!--/column -->
         <div class="col-lg-8">
            <div class="swiper-container text-center mb-6" data-margin="30" data-dots="true" data-items-xl="3" data-items-md="2" data-items-xs="1">
               <div class="swiper">
                  <div class="swiper-wrapper">
                     <?php $query = new WP_Query($argss);
                     if ($query->have_posts()) {
                        $num = 0;
                        while ($query->have_posts()) {
                           $query->the_post();
                           $post_id =  get_the_id(); ?>
                           <div class="swiper-slide">
                              <img class="rounded-circle w-20 mx-auto mb-4" src="<?php echo get_the_post_thumbnail_url($post_id, 'team-1'); ?>" srcset="<?php echo get_the_post_thumbnail_url($post_id, 'team-1'); ?>" alt="" />
                              <h4 class="mb-1"><?php the_title(); ?></h4>
                              <div class="meta mb-2"><?php the_field('job_title', $post_id); ?></div>
                              <!-- /.job title -->
                              <?php if (get_the_excerpt()) { ?>
                                 <p class="mb-2"><?php the_excerpt(); ?></p>
                              <?php } else { ?>
                                 <p class="mb-2">Fermentum massa justo sit amet risus morbi leo.</p>
                              <?php } ?>
                              <!-- /.excerpt -->
                              <?php $demo = '<nav class="nav social justify-content-center text-center mb-0"><a href="#"><i class="uil uil-youtube"></i></a><a href="#"><i class="uil uil-facebook-f"></i></a><a href="#"><i class="uil uil-dribbble"></i></a></nav>'; ?>
                              <?php $social_object = new CW_Social(NULL, $demo, 'justify-content-center text-center mb-0', $post_id); ?>
                              <?php echo $social_object->social_final; ?>
                              <!-- /.social -->
                           </div>
                           <!--/.swiper-slide -->
                     <?php }
                     }
                     ?>
                  </div>
                  <!--/.swiper-wrapper -->
               </div>
               <!-- /.swiper -->
            </div>
            <!-- /.swiper-container -->
         </div>
         <!--/column -->
      </div>
      <!--/.row -->
   </div>
   <!-- /.container -->
</section>
<!-- /section -->