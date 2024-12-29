<?php

/**
 * Features 9
 */


$block = new CW_Settings(
   $cw_settings = array(

      'title' => 'What We Do?',
      'patternTitle' => '<h2 class="display-4 mb-3 %2$s">%1$s</h2>',

      'subtitle' => 'The full service we are offering is specifically designed to meet your business needs.',
      'patternSubtitle' => '<p class="lead fs-lg %2$s">%1$s</p>',

      'paragraph' => 'Donec ullamcorper nulla non metus auctor fringilla. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam quis risus eget urna mollis ornare vel eu leo. Nullam quis risus eget urna mollis ornare vel eu leo. Maecenas faucibus mollis elit interdum. Duis mollis, est non commodo luctus, nisi erat ligula.',
      'patternParagraph' => '<p class="%2$s">%1$s</p>',

      'buttons' => '<a href="#" class="btn btn-purple rounded-pill mt-3">More Details</a>',
      'buttons_pattern' => '<div class="d-flex justify-content-center justify-content-lg-start flex-wrap" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">%s</div>',

      'background_class_default' => 'wrapper bg-light',

      'divider' => true,

      'multi_image' => array(
         array('/dist/img/photos/se1.jpg', 'sandbox_about_4', 'project_1', '<figure %5$s %9$s>%6$s<img %4$s src="%1$s" srcset="%1$s" %3$s />%7$s %10$s %11$s</figure>', '<figure class="rounded mb-6"><img src="' . get_template_directory_uri() . '/dist/img/photos/se1.jpg" srcset="' . get_template_directory_uri() . '/dist/img/photos/se1@2x.jpg 2x" alt=""></figure>'),

         array('/dist/img/photos/se2.jpg', 'sandbox_about_4', 'project_1', '<figure %5$s %9$s>%6$s<img %4$s src="%1$s" srcset="%1$s" %3$s />%7$s %10$s %11$s</figure>', '<figure class="rounded mb-6 mb-md-0"><img src="' . get_template_directory_uri() . '/dist/img/photos/se2.jpg" srcset="' . get_template_directory_uri() . '/dist/img/photos/se2@2x.jpg 2x" alt=""></figure>'),
      ),

      'features' => '<div class="icon btn btn-circle btn-lg btn-soft-purple disabled mb-3"> <i class="uil uil-mobile-android"></i> </div><h4>Mobile Design</h4><p class="mb-2">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida.</p><a href="#" class="more hover link-purple">Learn More</a>',
      'features_pattern' => '%2$s<h4>%3$s</h4><p class="mb-2">%4$s</p>%5$s',
      // 'features_style_icon' => 'mb-3',

      'column_class_1' => '',
      'column_class_2' => 'order-lg-2',

   )
);
?>

<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
   <div class="container py-14 py-md-16">
      <div class="row gx-lg-0 gy-10 align-items-center">
         <div class="col-lg-6">
            <div class="row g-6 text-center">
               <div class="col-md-6">
                  <div class="row">
                     <div class="col-lg-12">
                        <?php if (isset($block->multi_images[0])) {
                           echo $block->multi_images[0];
                        } ?>
                     </div>
                     <!-- /column -->
                     <div class="col-lg-12">
                        <div class="card">
                           <div class="card-body">

                              <?php if (isset($block->features_array[0])) {
                                 echo $block->features_array[0];
                              } else { ?>
                                 <div class="icon btn btn-circle btn-lg btn-soft-purple disabled mb-3"> <i class="uil uil-monitor"></i> </div>
                                 <h4>Web Design</h4>
                                 <p class="mb-2">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida.</p>
                                 <a href="#" class="more hover link-purple">Learn More</a>
                                 <!-- /div -->
                              <?php } ?>
                              <!--/features -->


                           </div>
                           <!--/.card-body -->
                        </div>
                        <!--/.card -->
                     </div>
                     <!-- /column -->
                  </div>
                  <!-- /.row -->
               </div>
               <!-- /column -->
               <div class="col-md-6">
                  <div class="row">
                     <div class="col-lg-12 order-md-2">
                        <?php if (isset($block->multi_images[1])) {
                           echo $block->multi_images[1];
                        } ?>
                     </div>
                     <!-- /column -->
                     <div class="col-lg-12">
                        <div class="card mb-md-6 mt-lg-6">
                           <div class="card-body">
                              <?php if (isset($block->features_array[1])) {
                                 echo $block->features_array[1];
                              } else { ?>
                                 <div class="icon btn btn-circle btn-lg btn-soft-purple disabled mb-3"> <i class="uil uil-mobile-android"></i> </div>
                                 <h4>Mobile Design</h4>
                                 <p class="mb-2">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida.</p>
                                 <a href="#" class="more hover link-purple">Learn More</a>
                                 <!-- /div -->
                              <?php } ?>
                              <!--/features -->
                           </div>
                           <!--/.card-body -->
                        </div>
                        <!--/.card -->
                     </div>
                     <!-- /column -->
                  </div>
                  <!-- /.row -->
               </div>
               <!-- /column -->
            </div>
            <!-- /.row -->
         </div>
         <!-- /column -->
         <div class="col-lg-5 offset-lg-1">
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
         <!-- /column -->
      </div>
      <!-- /.row -->
   </div>
   <!-- /.container -->
   <?php if ($block->divider_wave) {
      echo $block->divider_wave;
   } ?>
   <!-- /divider -->
</section>
<!-- /section -->