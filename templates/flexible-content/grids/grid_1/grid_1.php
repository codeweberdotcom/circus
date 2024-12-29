<?php
$responsivecol = new ResponsiveCol;
$class_col = $responsivecol->responsives();
if (get_row_layout() == 'grid_1') : ?>
   <div class="row g-6 mt-3 mb-10">
      <?php if (have_rows('grid_image')) :
         while (have_rows('grid_image')) : the_row();
            $image_c = new ImageCustomizable; ?>
            <div class="<?php echo $class_col; ?>">
               <?php $image_c->image(); ?>
            </div>
         <?php endwhile;
      else : ?>
         <div class="row g-6 mt-3 mb-10">
            <div class="col-md-6">
               <figure class="hover-scale rounded cursor-dark"><a href="<?php echo get_template_directory_uri(); ?>/dist/img/photos/b8-full.jpg" data-glightbox="title: Heading; description: Purus Vulputate Sem Tellus Quam" data-gallery="post"><img src="<?php echo get_template_directory_uri(); ?>/dist/img/photos/b8.jpg" alt=""></a></figure>
            </div>
            <!--/column -->
            <div class="col-md-6">
               <figure class="hover-scale rounded cursor-dark"><a href="<?php echo get_template_directory_uri(); ?>/dist/img/photos/b9-full.jpg" data-glightbox="" data-gallery="post"><img src="<?php echo get_template_directory_uri(); ?>/dist/img/photos/b9.jpg" alt=""></a></figure>
            </div>
            <!--/column -->
            <div class="col-md-6">
               <figure class="hover-scale rounded cursor-dark"><a href="<?php echo get_template_directory_uri(); ?>/dist/img/photos/b10-full.jpg" data-glightbox="" data-gallery="post"><img src="<?php echo get_template_directory_uri(); ?>/dist/img/photos/b10.jpg" alt=""></a></figure>
            </div>
            <!--/column -->
            <div class="col-md-6">
               <figure class="hover-scale rounded cursor-dark"><a href="<?php echo get_template_directory_uri(); ?>/dist/img/photos/b11-full.jpg" data-glightbox="" data-gallery="post"><img src="<?php echo get_template_directory_uri(); ?>/dist/img/photos/b11.jpg" alt=""></a></figure>
            </div>
            <!--/column -->
         </div>
      <?php endif; ?>
   </div>
<?php endif; ?>