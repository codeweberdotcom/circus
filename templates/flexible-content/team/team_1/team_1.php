<?php

/**
 * Team 1
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
      'subtitle' => 'Our Team',
      'patternSubtitle' => '<h2 class="fs-15 text-uppercase text-muted mb-3 %2$s">%1$s</h2>',

      'title' => 'Think unique and be innovative. Make a difference with Sandbox.',
      'patternTitle' => '<h3 class="display-4 mb-7 px-lg-19 px-xl-18 %2$s">%1$s</h3>',

      // 'paragraph' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.',
      // 'patternParagraph' => '<p class="mb-6">%s</p>',

      'background_class_default' => 'wrapper bg-light',
      'divider' => true,

      //'shapes' => array('<div class="shape bg-soft-primary rounded-circle rellax w-20 h-20" data-rellax-speed="1" style="top: -2rem; right: -1.9rem;"></div>'),
   )
);
?>

<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
   <div class="container py-14 py-md-16">
      <div class="row mb-3">
         <div class="col-md-10 col-lg-12 col-xl-10 col-xxl-9 mx-auto text-center">
            <?php echo $block->subtitle_first; ?>
            <!--/subtitle -->
            <?php echo $block->title; ?>
            <!--/title -->
            <?php echo $block->subtitle_second; ?>
            <!--/subtitle -->
         </div>
         <!--/column -->
      </div>
      <!--/.row -->
      <div class="row grid-view gx-md-8 gx-xl-10 gy-8 gy-lg-0">
         <?php $query = new WP_Query($argss);
         if ($query->have_posts()) {
            $num = 0;
            while ($query->have_posts()) {
               $query->the_post();
               $post_id =  get_the_id(); ?>
               <div class="col-md-6 col-lg-3">
                  <div class="position-relative">
                     <?php if ($num == 0 || $num == 4) {
                        $color_shape = 'blue';
                     } elseif ($num == 1 || $num == 5) {
                        $color_shape = 'red';
                     } elseif ($num == 2 || $num == 6) {
                        $color_shape = 'green';
                     } elseif ($num == 3 || $num == 7) {
                        $color_shape = 'violet';
                     } else {
                        $color_shape = 'blue';
                     } ?>
                     <div class="shape rounded bg-soft-<?php echo $color_shape; ?> rellax d-md-block" data-rellax-speed="0" style="bottom: -0.75rem; right: -0.75rem; width: 98%; height: 98%; z-index:0"></div>

                     <div class="card">
                        <figure class="card-img-top"><img class="img-fluid" src="<?php echo get_the_post_thumbnail_url($post_id, 'team-1'); ?>" srcset="<?php echo get_the_post_thumbnail_url($post_id, 'team-1'); ?>" alt="" /></figure>
                        <div class="card-body px-6 py-5">
                           <h4 class="mb-1"><?php the_title(); ?></h4>
                           <p class="mb-0"><?php the_field('job_title', $post_id); ?></p>
                        </div>
                        <!--/.card-body -->
                     </div>
                     <!-- /.card -->
                  </div>
                  <!-- /div -->
               </div>
               <!--/column -->
         <?php $num++;
            }
         } ?>
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