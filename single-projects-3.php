<?php
/*
Template Name: Projects 3
Template Post Type: projects
*/

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

<?php $image_project_array = array(); ?>
<?php if (have_rows('izobrazheniya')) : ?>
   <?php while (have_rows('izobrazheniya')) : the_row(); ?>
      <?php if (have_rows('image')) : ?>
         <?php while (have_rows('image')) :
            the_row(); ?>
            <?php $image_project_array[] = get_sub_field('image'); ?>
         <?php endwhile; ?>
      <?php endif; ?>
   <?php endwhile; ?>
<?php endif; ?>


<section class="wrapper image-wrapper bg-image overflow-hidden mt-0 bg-cover bg-height bg-overlay text-white" data-image-src="<?php echo $image_project_array[0]['sizes']['project_4_banner']; ?>"></section>
<section class="wrapper  bg-light wrapper-border">
   <div class="container py-14 py-md-16">
      <div class="row">
         <div class="col-lg-10 mx-auto">
            <h1 class="display-4 mb-4"><?php echo codeweber_page_title(); ?></h1>
            <div class="row gx-0 mb-12">
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
                  <?php if ($project_link !== "") { ?>
                     <a href="<?php echo $project_link; ?>" class="more hover"><?php echo __('Go to the website', 'codeweber'); ?></a>
                  <?php }; ?>
               </div>
               <!--/column -->
            </div>
            <!--/.row -->
         </div>
         <!--/column -->
      </div>
      <!--/.row -->
      <div class="row gy-6 mb-12">
         <?php if (isset($image_project_array[1])) { ?>
            <div class="col-md-12">
               <figure class="hover-scale rounded cursor-dark">
                  <a href="<?php echo $image_project_array[1]['sizes']['brk_big']; ?>" data-glightbox data-gallery="project-4">
                     <img src="<?php echo $image_project_array[1]['sizes']['project_1']; ?>" srcset="<?php echo $image_project_array[1]['sizes']['project_1']; ?> 2x" alt="" />
                  </a>
               </figure>
            </div>
            <!-- /column -->
         <?php } else { ?>
            <div class="col-md-12">
               <figure class="hover-scale rounded cursor-dark">
                  <a href="<?php echo get_template_directory_uri(); ?>/dist/img/placeholder.jpg" data-glightbox data-gallery="project-4">
                     <img src="<?php echo get_template_directory_uri(); ?>/dist/img/placeholder.jpg" srcset="<?php echo get_template_directory_uri(); ?>/dist/img/placeholder.jpg 2x" alt="" />
                  </a>
               </figure>
            </div>
            <!-- /column -->
         <?php } ?>
         <?php if (isset($image_project_array[2])) { ?>
            <div class="col-md-6">
               <figure class="hover-scale rounded cursor-dark">
                  <a href="<?php echo $image_project_array[2]['sizes']['brk_big']; ?>" data-glightbox data-gallery="project-4">
                     <img src="<?php echo $image_project_array[2]['sizes']['project_1_1']; ?>" srcset="<?php echo $image_project_array[2]['sizes']['project_1_1']; ?> 2x" alt="" />
                  </a>
               </figure>
            </div>
            <!-- /column -->
         <?php } else { ?>
            <div class="col-md-6">
               <figure class="hover-scale rounded cursor-dark">
                  <a href="<?php echo get_template_directory_uri(); ?>/dist/img/placeholder.jpg" data-glightbox data-gallery="project-4">
                     <img src="<?php echo get_template_directory_uri(); ?>/dist/img/placeholder.jpg" srcset="<?php echo get_template_directory_uri(); ?>/dist/img/placeholder.jpg 2x" alt="" />
                  </a>
               </figure>
            </div>
            <!-- /column -->
         <?php } ?>
         <?php if (isset($image_project_array[3])) { ?>
            <div class="col-md-6">
               <figure class="hover-scale rounded cursor-dark">
                  <a href="<?php echo $image_project_array[3]['sizes']['brk_big']; ?>" data-glightbox data-gallery="project-4">
                     <img src="<?php echo $image_project_array[3]['sizes']['project_1_1']; ?>" srcset="<?php echo $image_project_array[3]['sizes']['project_1_1']; ?> 2x" alt="" />
                  </a>
               </figure>
            </div>
            <!-- /column -->
         <?php } else { ?>
            <div class="col-md-6">
               <figure class="hover-scale rounded cursor-dark">
                  <a href="<?php echo get_template_directory_uri(); ?>/dist/img/placeholder.jpg" data-glightbox data-gallery="project-4">
                     <img src="<?php echo get_template_directory_uri(); ?>/dist/img/placeholder.jpg" srcset="<?php echo get_template_directory_uri(); ?>/dist/img/placeholder.jpg 2x" alt="" />
                  </a>
               </figure>
            </div>
            <!-- /column -->
         <?php } ?>
      </div>
      <!-- /.row -->
      <div class="row mb-12">
         <div class="col-lg-10 mx-auto">
            <?php if (isset($project_title_description_2)) { ?>
               <h2 class="display-6 mb-4"><?php echo $project_title_description_2; ?></h2>
            <?php } else { ?>
               <h2 class="display-6 mb-4"><?php esc_html_e('Title', 'codeweber'); ?></h2>
            <?php } ?>
            <?php if (isset($project_description)) { ?>
               <?php echo $project_description_2; ?>
            <?php } else { ?>
               <p>Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Integer posuere erat a ante venenatis. Etiam porta sem malesuada magna mollis euismod. Aenean lacinia bibendum.</p>
               <p>Donec id elit non mi porta gravida at eget metus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
            <?php } ?>
         </div>
         <!--/column -->
      </div>
      <!--/.row -->
      <div class="row gy-6">
         <?php if (isset($image_project_array[4])) { ?>
            <div class="col-md-12">
               <figure class="hover-scale rounded cursor-dark">
                  <a href="<?php echo $image_project_array[4]['sizes']['brk_big']; ?>" data-glightbox data-gallery="project-4">
                     <img src="<?php echo $image_project_array[4]['sizes']['brk_big']; ?>" srcset="<?php echo $image_project_array[4]['sizes']['brk_big']; ?> 2x" alt="" />
                  </a>
               </figure>
            </div>
            <!-- /column -->
         <?php } else { ?>
            <div class="col-md-12">
               <figure class="hover-scale rounded cursor-dark">
                  <a href="<?php echo get_template_directory_uri(); ?>/dist/img/placeholder.jpg" data-glightbox data-gallery="project-4">
                     <img src="<?php echo get_template_directory_uri(); ?>/dist/img/placeholder.jpg" srcset="<?php echo get_template_directory_uri(); ?>/dist/img/placeholder.jpg 2x" alt="" />
                  </a>
               </figure>
            </div>
            <!-- /column -->
         <?php } ?>
         <?php if (isset($image_project_array[5])) { ?>
            <div class="col-md-4">
               <figure class="hover-scale rounded cursor-dark">
                  <a href="<?php echo $image_project_array[5]['sizes']['brk_big']; ?>" data-glightbox data-gallery="project-4">
                     <img src="<?php echo $image_project_array[5]['sizes']['project_4']; ?>" srcset="<?php echo $image_project_array[5]['sizes']['project_4']; ?> 2x" alt="" />
                  </a>
               </figure>
            </div>
            <!-- /column -->
         <?php } else { ?>
            <div class="col-md-4">
               <figure class="hover-scale rounded cursor-dark">
                  <a href="<?php echo get_template_directory_uri(); ?>/dist/img/placeholder.jpg" data-glightbox data-gallery="project-4">
                     <img src="<?php echo get_template_directory_uri(); ?>/dist/img/placeholder.jpg" srcset="<?php echo get_template_directory_uri(); ?>/dist/img/placeholder.jpg 2x" alt="" />
                  </a>
               </figure>
            </div>
            <!-- /column -->
         <?php } ?>
         <?php if (isset($image_project_array[6])) { ?>
            <div class="col-md-8">
               <figure class="hover-scale rounded cursor-dark">
                  <a href="<?php echo $image_project_array[6]['sizes']['brk_big']; ?>" data-glightbox data-gallery="project-4">
                     <img src="<?php echo $image_project_array[6]['sizes']['project_4_1']; ?>" srcset="<?php echo $image_project_array[6]['sizes']['project_4_1']; ?> 2x" alt="" />
                  </a>
               </figure>
            </div>
            <!-- /column -->
         <?php } else { ?>
            <div class="col-md-8">
               <figure class="hover-scale rounded cursor-dark">
                  <a href="<?php echo get_template_directory_uri(); ?>/dist/img/placeholder.jpg" data-glightbox data-gallery="project-4">
                     <img src="<?php echo get_template_directory_uri(); ?>/dist/img/placeholder.jpg" srcset="<?php echo get_template_directory_uri(); ?>/dist/img/placeholder.jpg 2x" alt="" />
                  </a>
               </figure>
            </div>
            <!-- /column -->
         <?php } ?>
         <?php if (isset($image_project_array[7])) { ?>
            <div class="col-md-12">
               <figure class="hover-scale rounded cursor-dark">
                  <a href="<?php echo $image_project_array[7]['sizes']['brk_big']; ?>" data-glightbox data-gallery="project-4">
                     <img src="<?php echo $image_project_array[7]['sizes']['brk_big']; ?>" srcset="<?php echo $image_project_array[7]['sizes']['brk_big']; ?> 2x" alt="" />
                  </a>
               </figure>
            </div>
            <!-- /column -->
         <?php } else { ?>
            <div class="col-md-12">
               <figure class="hover-scale rounded cursor-dark">
                  <a href="<?php echo get_template_directory_uri(); ?>/dist/img/placeholder.jpg" data-glightbox data-gallery="project-4">
                     <img src="<?php echo get_template_directory_uri(); ?>/dist/img/placeholder.jpg" srcset="<?php echo get_template_directory_uri(); ?>/dist/img/placeholder.jpg 2x" alt="" />
                  </a>
               </figure>
            </div>
            <!-- /column -->
         <?php } ?>
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
