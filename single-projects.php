<?php

get_header();
global $post;
if (have_rows('main_information')) :
   while (have_rows('main_information')) : the_row();
      if (get_sub_field('date')) {
         $project_date = get_sub_field('date');
      }
      if (get_sub_field('link')) {
         $project_link = get_sub_field('link');
      } else {
         $project_link = NULL;
      }
      if (get_sub_field('cms')) {
         $project_cms = get_sub_field('cms');
      } else {
         $project_cms = NULL;
      }
      if (get_sub_field('short_description')) {
         $project_short_description = get_sub_field('short_description');
      } else {
         $project_short_description = NULL;
      }
      if (get_sub_field('title_description')) {
         $project_title_description = get_sub_field('title_description');
      } else {
         $project_title_description = NULL;
      }
      if (get_sub_field('description')) {
         $project_description = get_sub_field('description');
      } else {
         $project_description = NULL;
      }
      if (get_sub_field('title_description_2')) {
         $project_title_description_2 = get_sub_field('title_description_2');
      } else {
         $project_title_description_2 = NULL;
      }
      if (get_sub_field('description_2')) {
         $project_description_2 = get_sub_field('description_2');
      } else {
         $project_description_ = NULL;
      }
   endwhile;
endif; ?>
<?php if ($codeweber['page_settings']['page_header_type'] == 'default' || $codeweber['page_settings']['page_header_type'] == NULL) { ?>
   <?php $class_project = 'mt-n17 mt-md-n21'; ?>
   <section class="wrapper bg-soft-primary">
      <div class="container pt-10 pb-19 pt-md-14 pb-md-22 text-center">
         <div class="row">
            <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
               <div class="post-header">
                  <?php if (wp_get_post_terms(get_the_ID(), 'projects_category')) { ?>
                     <div class="post-category text-line">
                        <a href="<?php echo get_term_link(wp_get_post_terms(get_the_ID(), 'projects_category')[0]->term_id);  ?>" class="hover" rel="category"><?php echo wp_get_post_terms(get_the_ID(), 'projects_category')[0]->name; ?></a>
                     </div>
                  <?php }; ?>
                  <!-- /.post-category -->
                  <h1 class="display-1 mb-3"><?php echo codeweber_page_title(); ?></h1>
                  <?php if (isset($project_short_description)) { ?>
                     <p class="lead px-md-12 px-lg-12 px-xl-15 px-xxl-18"><?php echo $project_short_description;  ?></p>
                  <?php } ?>
                  <?php codeweber_breadcrumbs(NULL, NULL, true); ?>
               </div>
               <!-- /.post-header -->
            </div>
            <!-- /column -->
         </div>
         <!-- /.row -->
      </div>
      <!-- /.container -->
   </section>
   <!-- /section -->
<?php } else {
   $class_project = NULL;
} ?>

<section class="wrapper bg-light wrapper-border">
   <div class="container pb-14 pb-md-16">
      <div class="row">
         <div class="col-12">
            <article class="<?php echo $class_project; ?>">
               <figure class="rounded mb-8 mb-md-12">
                  <img src="<?php echo get_the_post_thumbnail_url($post, 'project_1'); ?>" />
               </figure>
               <div class="row">
                  <div class="col-lg-10 offset-lg-1">
                     <?php if (isset($project_title_description)) { ?>
                        <h2 class="display-6 mb-4"><?php echo $project_title_description; ?></h2>
                     <?php } else { ?>
                        <h2 class="display-6 mb-4"><?php esc_html_e('Title', 'codeweber'); ?></h2>
                     <?php } ?>
                     <div class="row gx-0">
                        <div class="col-md-9 text-justify">
                           <?php if (isset($project_description)) { ?>
                              <?php echo $project_description; ?>
                           <?php } else { ?>
                              <p>Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Integer posuere erat a ante venenatis. Etiam porta sem malesuada magna mollis euismod. Aenean lacinia bibendum.</p>
                              <p>Donec id elit non mi porta gravida at eget metus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
                           <?php } ?>
                        </div>
                        <!--/column -->
                        <div class="col-md-2 ms-auto">
                           <ul class="list-unstyled">
                              <?php if (isset($project_date)) { ?>
                                 <li>
                                    <div class="h5 mb-1"><?php echo __('Date', 'codeweber'); ?></div>
                                    <p><?php echo $project_date; ?></p>
                                 </li>
                              <?php }; ?>
                              <?php if (isset($project_cms)) { ?>
                                 <li>
                                    <div class="h5 mb-1"><?php echo __('CMS', 'codeweber'); ?></div>
                                    <p><?php echo $project_cms; ?></p>
                                 </li>
                              <?php }; ?>
                           </ul>
                           <?php if (isset($project_link)) { ?>
                              <a href="<?php echo $project_link; ?>" class="more hover"><?php echo __('Go to the website', 'codeweber'); ?></a>
                           <?php }; ?>
                        </div>
                        <!--/column -->
                     </div>
                     <!--/.row -->
                  </div>
                  <!-- /column -->
               </div>
               <!--/.row -->
               <div class="row mt-5 gx-md-6 gy-6">
                  <?php if (have_rows('izobrazheniya')) : ?>
                     <?php $num = 0; ?>
                     <?php while (have_rows('izobrazheniya')) : the_row(); ?>
                        <?php if (have_rows('image') && $num <= 3) : ?>
                           <?php while (have_rows('image')) :
                              the_row(); ?>
                              <?php $image = get_sub_field('image'); ?>
                              <?php if ($image) : ?>
                                 <div class="item col-md-6">
                                    <figure class="hover-scale rounded cursor-dark"><a href="<?php echo esc_url($image['sizes']['brk_big']); ?>" data-glightbox data-gallery="project-1"><img src="<?php echo esc_url($image['sizes']['project_1_1']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /></a></figure>
                                 </div>
                                 <!--/column -->
                              <?php endif; ?>
                           <?php endwhile; ?>
                        <?php endif; ?>
                        <?php $num++; ?>
                     <?php endwhile; ?>
                  <?php endif; ?>
               </div>
               <!-- /.row -->
               <?php if (isset($project_title_description_2) && isset($project_description_2)) { ?>
                  <div class="row mt-8 mt-md-12">
                     <div class="col-md-10 offset-md-1 text-justify">
                        <h2 class="mb-4"><?php echo $project_title_description_2; ?></h2>
                        <?php echo $project_description_2; ?>
                     </div>
                     <!-- /column -->
                  </div>
                  <!-- /.row -->
               <?php } else { ?>
                  <div class="row mt-8 mt-md-12">
                     <div class="col-md-10 offset-md-1 text-justify">
                        <h2 class="mb-4"><?php esc_html_e('Title', 'codeweber'); ?></h2>
                        <p>Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Integer posuere erat a ante venenatis. Etiam porta sem malesuada magna mollis euismod. Aenean lacinia bibendum.</p>
                        <p>Donec id elit non mi porta gravida at eget metus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
                     </div>
                     <!-- /column -->
                  </div>
                  <!-- /.row -->
               <?php } ?>
            </article>
            <!-- /.project -->
         </div>
         <!-- /column -->
      </div>
      <!-- /.row -->
   </div>
   <!-- /.container -->
</section>
<!-- /section -->
<?php the_content(); ?>
<!-- /content -->
<section class="wrapper bg-light">
   <div class="container py-10">
      <div class="row gx-md-6 gy-3 gy-md-0">
         <?php codeweber_posts_nav(); ?>
         <aside class="col-md-4 sidebar text-center text-md-end">
            <?php codeweber_share_page(); ?>
         </aside>
         <!-- /column .sidebar -->
      </div>
      <!--/.row -->
   </div>
   <!-- /.container -->
</section>
<!-- /section -->
</div>
<!-- /.content-wrapper -->
<?php get_footer();
