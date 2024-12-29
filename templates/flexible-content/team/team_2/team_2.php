<?php

/**
 * Team 2
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
      'title' => 'Save your time and money by choosing our professional team.',
      'patternTitle' => '<h2 class="display-4 mb-3 px-lg-14 %2$s">%1$s</h2>',

      // 'subtitle' => 'Think unique and be innovative. Make a difference with Sandbox.',
      // 'patternSubtitle' => '<h3 class="display-4 mb-7 px-lg-19 px-xl-18">%s</h3>',

      // 'paragraph' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.',
      // 'patternParagraph' => '<p class="mb-6">%s</p>',

      'background_class_default' => 'wrapper bg-light',

      'divider' => true,

      'shapes' => array('<div class="shape rounded-circle bg-soft-yellow rellax w-16 h-16" data-rellax-speed="1" style="bottom: 0.5rem; right: -1.7rem;"></div>', '
         <div class="shape rounded-circle bg-line red rellax w-16 h-16" data-rellax-speed="1" style="top: 0.5rem; left: -1.7rem;"></div>'),
   )
);
?>

<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
   <div class="container py-14 py-md-16">
      <div class="row mb-3">
         <div class="col-md-10 col-xl-9 col-xxl-7 mx-auto text-center">
            <img src="<?php echo get_template_directory_uri(); ?>/dist/img/icons/lineal/team.svg" class="svg-inject icon-svg icon-svg-md mb-4" alt="" />
            <?php echo $block->title; ?>
            <!--/title -->
         </div>
         <!--/column -->
      </div>
      <!--/.row -->
      <div class="position-relative">
         <?php echo $block->shapes; ?>
         <!--/shapes -->
         <div class="swiper-container dots-closer mb-6" data-margin="0" data-dots="true" data-items-xxl="4" data-items-lg="3" data-items-md="2" data-items-xs="1">
            <div class="swiper">
               <div class="swiper-wrapper">
                  <?php $query = new WP_Query($argss);
                  if ($query->have_posts()) {
                     $num = 0;
                     while ($query->have_posts()) {
                        $query->the_post();
                        $post_id =  get_the_id(); ?>
                        <div class="swiper-slide">
                           <div class="item-inner">
                              <div class="card">
                                 <div class="card-body">
                                    <img class="rounded-circle w-15 mb-4" src="<?php echo get_the_post_thumbnail_url($post_id, 'cw_icon_lg'); ?>" srcset="<?php echo get_the_post_thumbnail_url($post_id, 'cw_icon_lg'); ?>" alt="" />
                                    <h4 class="mb-1"><?php the_title(); ?></h4>
                                    <div class="meta mb-2"><?php the_field('job_title', $post_id); ?></div>
                                    <!-- /.job title -->
                                    <?php if (get_the_excerpt()) { ?>
                                       <p class="mb-2"><?php the_excerpt(); ?></p>
                                    <?php } else { ?>
                                       <p class="mb-2">Fermentum massa justo sit amet risus morbi leo.</p>
                                    <?php } ?>
                                    <!-- /.excerpt -->
                                    <?php $demo = '<nav class="nav social mb-0">
                                       <a href="#"><i class="uil uil-twitter"></i></a>
                                       <a href="#"><i class="uil uil-facebook-f"></i></a>
                                       <a href="#"><i class="uil uil-dribbble"></i></a>
                                    </nav>'; ?>
                                    <?php $social_object = new CW_Social(NULL, $demo, 'mb-0', $post_id); ?>
                                    <?php echo $social_object->social_final; ?>
                                    <!-- /.social -->
                                 </div>
                                 <!--/.card-body -->
                              </div>
                              <!-- /.card -->
                           </div>
                           <!-- /.item-inner -->
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
      <!-- /.position-relative -->
   </div>
   <!-- /.container -->
   <?php if ($block->divider_wave) {
      echo $block->divider_wave;
   } ?>
   <!-- /divider -->
</section>
<!-- /section -->