<?php
global $codeweber;
?>

<section class="wrapper bg-light<?php echo $codeweber['page_settings']['angle_class']; ?>">
   <div class="container pt-9 pt-md-11 pb-14 pb-md-16<?php echo $codeweber['page_settings']['container_class']; ?>">
      <div class="projects-overflow mt-md-10 mb-10 mb-lg-15<?php echo $codeweber['page_settings']['content_class']; ?>">
         <?php $item_num = 0; ?>
         <?php while (have_posts()) :
            the_post();
            global $post;
         ?>
            <?php if ($item_num == 0) {
               $class_responsive = 'col-lg-8 col-xl-7 offset-xl-1';
               $style_responsive = 'right: 10%; bottom: 25%;';
            } elseif ($item_num == 1) {
               $class_responsive = 'col-lg-7 offset-lg-5 col-xl-6 offset-xl-5';
               $style_responsive = 'left: 18%; bottom: 25%;';
            } elseif ($item_num == 2) {
               $class_responsive = 'col-lg-9 col-xl-7 offset-xl-2';
               $style_responsive = 'right: 3%; bottom: 25%;';
            } elseif ($item_num == 3) {
               $class_responsive = 'col-lg-9 offset-lg-3 col-xl-7 offset-xl-4';
               $style_responsive = 'left: 12%; bottom: 25%;';
            } elseif ($item_num == 4) {
               $class_responsive = 'col-lg-8 col-xl-6 offset-xl-1';
               $style_responsive = 'right: 15%; bottom: 25%;';
            } elseif ($item_num == 5) {
               $class_responsive = 'col-lg-9 offset-lg-3 col-xl-7';
               $style_responsive = 'left: 18%; bottom: 25%;';
            } elseif ($item_num == 6) {
               $class_responsive = 'col-lg-8 col-xl-6 offset-xl-1';
               $style_responsive = 'right: 15%; bottom: 25%;';
            } elseif ($item_num == 7) {
               $item_num = 0;
               $class_responsive = 'col-lg-8 col-xl-7 offset-xl-1';
               $style_responsive = 'right: 10%; bottom: 25%;';
            }
            ?>
            <div class="project item">
               <div class="row">
                  <figure class="<?php echo $class_responsive; ?> rounded"><?php echo get_the_post_thumbnail($post->ID, 'sandbox_hero_18'); ?></figure>
                  <div class="project-details d-flex justify-content-center flex-column" style="<?php echo $style_responsive; ?>">
                     <div class="card shadow rellax" data-rellax-xs-speed="0" data-rellax-mobile-speed="0">
                        <div class="card-body">
                           <div class="post-header">

                              <div class="post-category text-line text-purple mb-3"><?php echo wp_get_post_terms(get_the_ID(), 'projects_category')[0]->name; ?></div>
                              <h2 class="post-title mb-3"><?php the_title(); ?></h2>
                           </div>
                           <!-- /.post-header -->
                           <div class="post-content">
                              <p><?php the_field('short_description'); ?></p>
                              <a href="<?php the_permalink(); ?>" class="more hover link-purple"><?php esc_html_e('See Project', 'codeweber') ?></a>
                           </div>
                           <!-- /.post-content -->
                        </div>
                        <!-- /.card-body -->
                     </div>
                     <!-- /.card -->
                  </div>
                  <!-- /.project-details -->
               </div>
               <!-- /.row -->
            </div>
            <!-- /.project -->
            <?php $item_num++; ?>
         <?php endwhile; ?>
      </div>
      <!-- /.projects-overflow -->

      <?php codeweber_pagination(); ?>
      <!-- /post pagination -->

   </div>
   <!-- /.container -->
</section>
<!-- /section -->