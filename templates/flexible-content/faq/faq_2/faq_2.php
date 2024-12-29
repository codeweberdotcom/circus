<?php

/**
 *  FAQ 2
 */


$block = new CW_Settings(
   $cw_settings = array(
      'subtitle' => 'FAQ',
      'patternSubtitle' => '<h2 class="fs-15 text-uppercase text-primary mb-3 %2$s">%1$s</h2>',

      'title' => 'If you don\'t see an answer to your question, you can send us an email from our contact form.',
      'patternTitle' => '<h3 class="display-5 mb-4 %2$s">%1$s</h3>',

      'paragraph' => 'Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Nullam quis risus eget urna mollis ornare.',
      'patternParagraph' => '<p class="lead mb-6 %2$s">%1$s</p>',

      'buttons' => '<a href="#" class="btn btn-primary rounded-pill">All FAQ</a>',
      'buttons_pattern' => '<div class="d-flex justify-content-center justify-content-lg-start flex-wrap" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">%s</div>',

      'background_class_default' => 'wrapper bg-light',

      'divider' => true,


      'column_class_1' => '',
      'column_class_2' => 'order-lg-2',

      'accordeon_demo' => '<div id="accordion-3" class="accordion-wrapper">
               <div class="card accordion-item">
                  <div class="card-header" id="accordion-heading-3-1">
                     <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-3-1" aria-expanded="false" aria-controls="accordion-collapse-3-1">How do I get my subscription receipt?</button>
                  </div>
                  <!-- /.card-header -->
                  <div id="accordion-collapse-3-1" class="collapse" aria-labelledby="accordion-heading-3-1" data-bs-target="#accordion-3">
                     <div class="card-body">
                        <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec sed odio dui. Cras justo odio, dapibus ac facilisis.</p>
                     </div>
                     <!-- /.card-body -->
                  </div>
                  <!-- /.collapse -->
               </div>
               <!-- /.card -->
               <div class="card accordion-item">
                  <div class="card-header" id="accordion-heading-3-2">
                     <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-3-2" aria-expanded="false" aria-controls="accordion-collapse-3-2">Are there any discounts for people in need?</button>
                  </div>
                  <!-- /.card-header -->
                  <div id="accordion-collapse-3-2" class="collapse" aria-labelledby="accordion-heading-3-2" data-bs-target="#accordion-3">
                     <div class="card-body">
                        <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec sed odio dui. Cras justo odio, dapibus ac facilisis.</p>
                     </div>
                     <!-- /.card-body -->
                  </div>
                  <!-- /.collapse -->
               </div>
               <!-- /.card -->
               <div class="card accordion-item">
                  <div class="card-header" id="accordion-heading-3-3">
                     <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-3-3" aria-expanded="false" aria-controls="accordion-collapse-3-3">Do you offer a free trial edit?</button>
                  </div>
                  <!-- /.card-header -->
                  <div id="accordion-collapse-3-3" class="collapse" aria-labelledby="accordion-heading-3-3" data-bs-target="#accordion-3">
                     <div class="card-body">
                        <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec sed odio dui. Cras justo odio, dapibus ac facilisis.</p>
                     </div>
                     <!-- /.card-body -->
                  </div>
                  <!-- /.collapse -->
               </div>
               <!-- /.card -->
               <div class="card accordion-item">
                  <div class="card-header" id="accordion-heading-3-4">
                     <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-3-4" aria-expanded="false" aria-controls="accordion-collapse-3-4">How do I reset my Account password?</button>
                  </div>
                  <!-- /.card-header -->
                  <div id="accordion-collapse-3-4" class="collapse" aria-labelledby="accordion-heading-3-4" data-bs-target="#accordion-3">
                     <div class="card-body">
                        <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec sed odio dui. Cras justo odio, dapibus ac facilisis.</p>
                     </div>
                     <!-- /.card-body -->
                  </div>
                  <!-- /.collapse -->
               </div>
               <!-- /.card -->
            </div>
            <!-- /.accordion-wrapper -->',
   )
);
?>



<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
   <div class="container py-14 py-md-16">
      <div class="row gx-lg-8 gx-xl-12 gy-10">
         <div class="col-lg-6 mb-0 <?php echo $block->column_class_1; ?>">
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
         <div class="col-lg-6 <?php echo $block->column_class_2; ?>">
            <?php echo $block->accordeon; ?>
            <!--/.accordion -->
         </div>
         <!--/column -->
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