<?php

/**
 *  FAQ 3
 */


$block = new CW_Settings(
   $cw_settings = array(
      'title' => 'Pricing FAQ',
      'patternTitle' => '<h2 class="display-4 mb-3 text-center %2$s">%1$s</h2>',

      'subtitle' => 'If you don\'t see an answer to your question, you can send us an email from our contact form.',
      'patternSubtitle' => '<p class="lead text-center mb-10 px-md-16 px-lg-0 %2$s">%1$s</p>',

      'background_class_default' => 'wrapper bg-light',

      'divider' => true,

      'accordeon_demo' => '<div class="col-lg-6 mb-0">
            <div id="accordion-1" class="accordion-wrapper">
               <div class="card accordion-item">
                  <div class="card-header" id="accordion-heading-1-1">
                     <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-1-1" aria-expanded="false" aria-controls="accordion-collapse-1-1">Can I cancel my subscription?</button>
                  </div>
                  <!-- /.card-header -->
                  <div id="accordion-collapse-1-1" class="collapse" aria-labelledby="accordion-heading-1-1" data-bs-target="#accordion-1">
                     <div class="card-body">
                        <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec sed odio dui. Cras justo odio, dapibus ac facilisis.</p>
                     </div>
                     <!-- /.card-body -->
                  </div>
                  <!-- /.collapse -->
               </div>
               <!-- /.card -->
               <div class="card accordion-item">
                  <div class="card-header" id="accordion-heading-1-2">
                     <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-1-2" aria-expanded="false" aria-controls="accordion-collapse-1-2">Which payment methods do you accept?</button>
                  </div>
                  <!-- /.card-header -->
                  <div id="accordion-collapse-1-2" class="collapse" aria-labelledby="accordion-heading-1-2" data-bs-target="#accordion-1">
                     <div class="card-body">
                        <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec sed odio dui. Cras justo odio, dapibus ac facilisis.</p>
                     </div>
                     <!-- /.card-body -->
                  </div>
                  <!-- /.collapse -->
               </div>
               <!-- /.card -->
               <div class="card accordion-item">
                  <div class="card-header" id="accordion-heading-1-3">
                     <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-1-3" aria-expanded="false" aria-controls="accordion-collapse-1-3">How can I manage my Account?</button>
                  </div>
                  <!-- /.card-header -->
                  <div id="accordion-collapse-1-3" class="collapse" aria-labelledby="accordion-heading-1-3" data-bs-target="#accordion-1">
                     <div class="card-body">
                        <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec sed odio dui. Cras justo odio, dapibus ac facilisis.</p>
                     </div>
                     <!-- /.card-body -->
                  </div>
                  <!-- /.collapse -->
               </div>
               <!-- /.card -->
               <div class="card accordion-item">
                  <div class="card-header" id="accordion-heading-1-4">
                     <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-1-4" aria-expanded="false" aria-controls="accordion-collapse-1-4">Is my credit card information secure?</button>
                  </div>
                  <!-- /.card-header -->
                  <div id="accordion-collapse-1-4" class="collapse" aria-labelledby="accordion-heading-1-4" data-bs-target="#accordion-1">
                     <div class="card-body">
                        <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec sed odio dui. Cras justo odio, dapibus ac facilisis.</p>
                     </div>
                     <!-- /.card-body -->
                  </div>
                  <!-- /.collapse -->
               </div>
               <!-- /.card -->
            </div>
            <!-- /.accordion-wrapper -->
         </div>
         <!--/column -->
         <div class="col-lg-6">
            <div id="accordion-2" class="accordion-wrapper">
               <div class="card accordion-item">
                  <div class="card-header" id="accordion-heading-2-1">
                     <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-2-1" aria-expanded="false" aria-controls="accordion-collapse-2-1">How do I get my subscription receipt?</button>
                  </div>
                  <!-- /.card-header -->
                  <div id="accordion-collapse-2-1" class="collapse" aria-labelledby="accordion-heading-2-1" data-bs-target="#accordion-2">
                     <div class="card-body">
                        <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec sed odio dui. Cras justo odio, dapibus ac facilisis.</p>
                     </div>
                     <!-- /.card-body -->
                  </div>
                  <!-- /.collapse -->
               </div>
               <!-- /.card -->
               <div class="card accordion-item">
                  <div class="card-header" id="accordion-heading-2-2">
                     <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-2-2" aria-expanded="false" aria-controls="accordion-collapse-2-2">Are there any discounts for people in need?</button>
                  </div>
                  <!-- /.card-header -->
                  <div id="accordion-collapse-2-2" class="collapse" aria-labelledby="accordion-heading-2-2" data-bs-target="#accordion-2">
                     <div class="card-body">
                        <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec sed odio dui. Cras justo odio, dapibus ac facilisis.</p>
                     </div>
                     <!-- /.card-body -->
                  </div>
                  <!-- /.collapse -->
               </div>
               <!-- /.card -->
               <div class="card accordion-item">
                  <div class="card-header" id="accordion-heading-2-3">
                     <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-2-3" aria-expanded="false" aria-controls="accordion-collapse-2-3">Do you offer a free trial edit?</button>
                  </div>
                  <!-- /.card-header -->
                  <div id="accordion-collapse-2-3" class="collapse" aria-labelledby="accordion-heading-2-3" data-bs-target="#accordion-2">
                     <div class="card-body">
                        <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec sed odio dui. Cras justo odio, dapibus ac facilisis.</p>
                     </div>
                     <!-- /.card-body -->
                  </div>
                  <!-- /.collapse -->
               </div>
               <!-- /.card -->
               <div class="card accordion-item">
                  <div class="card-header" id="accordion-heading-2-4">
                     <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-2-4" aria-expanded="false" aria-controls="accordion-collapse-2-4">How do I reset my Account password?</button>
                  </div>
                  <!-- /.card-header -->
                  <div id="accordion-collapse-2-4" class="collapse" aria-labelledby="accordion-heading-2-4" data-bs-target="#accordion-2">
                     <div class="card-body">
                        <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec sed odio dui. Cras justo odio, dapibus ac facilisis.</p>
                     </div>
                     <!-- /.card-body -->
                  </div>
                  <!-- /.collapse -->
               </div>
               <!-- /.card -->
            </div>
            <!-- /.accordion-wrapper -->
         </div>
         <!--/column -->',
   )
);
?>





<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
   <div class="container py-14 py-md-16">
      <?php echo $block->subtitle_first; ?>
      <!--/subtitle -->
      <?php echo $block->title; ?>
      <!--/title -->
      <?php echo $block->subtitle_second; ?>
      <!--/subtitle -->

      <?php echo $block->accordeon; ?>
      <!--/.accordion -->

   </div>
   <!-- /.container -->
   <?php if ($block->divider_wave) {
      echo $block->divider_wave;
   } ?>
   <!-- /divider -->
</section>
<!-- /section -->