<?php
global $codeweber;

?>

<section class="wrapper bg-light<?php echo $codeweber['page_settings']['angle_class']; ?>">
   <div class="container <?php echo $codeweber['page_settings']['container_class']; ?>">
      <div class="row">
         <?php if (is_active_sidebar('sidebar-faq') || has_action('sidebar_faq_start') || has_action('sidebar_faq_end')) {
            $class_faq_content = 'col-lg-8';
         } else {
            $class_faq_content = 'col';
         } ?>
         <div class="<?php echo $class_faq_content; ?>">
            <div class="blog classic-view">
               <?php while (have_posts()) :
                  the_post();
                  get_template_part('templates/content/loop', 'faq');
               endwhile;
               codeweber_pagination(); ?>
               <!-- /post pagination -->
            </div>
         </div>
         <?php get_sidebar(); ?>
         <?php /** Services Content */ ?>
         <!-- /.container -->
      </div>
   </div>
</section>
<!-- /section -->