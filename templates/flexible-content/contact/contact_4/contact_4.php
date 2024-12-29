<?php

/**
 * Contact 4
 */

if (get_field('address_1', 'option')) {
   $address_line_1 = get_field('address_1', 'option');
} else {
   $address_line_1 = 'Moonshine St. 14/05 Light City,';
}
if (get_field('address_2', 'option')) {
   $address_line_2 = get_field('address_2', 'option');
} else {
   $address_line_2 = 'London, United Kingdom';
}
if (get_field('email', 'option')) {
   $e_mail_address = get_field('email', 'option');
} else {
   $e_mail_address = 'info@codeweber.com';
}



$block = new CW_Settings(
   $cw_settings = array(
      'subtitle' => 'Get In Touch',
      'patternSubtitle' => '<h2 class="fs-15 text-uppercase text-line text-primary text-center mb-3 %2$s">%1$s</h2>',

      'title' => 'Got any questions? Don\'t hesitate to get in touch.',
      'patternTitle' => '<h3 class="display-5 mb-7 %2$s">%1$s</h3>',

      'background_class_default' => 'wrapper bg-light',
      'divider' => true,

      'swiper' => array(
         'swiper_container_class' => 'overflow-hidden',
         'image_class' => 'w-auto',
         'data_thumbs' => NULL,
         'wrapper_image_class' => '',
         'image_pattern' => '<figure %5$s %9$s>%6$s<img %4$s src="%1$s" srcset="%1$s" %3$s />%7$s %10$s %11$s</figure>',
         'image_thumb_size' => 'sandbox_faq_1',
         'image_demo' => '<figure><img class="w-auto" src="' . get_template_directory_uri() . '/dist/img/illustrations/i5.png" srcset="' . get_template_directory_uri() . '/dist/img/illustrations/i5@2x.png 2x" alt="" /></figure>',
         'image_big_size' => 'sandbox_hero_6',
         'img_link' => '/dist/img/illustrations/i5.png',

      ),

      'column_class_1' => '',
      'column_class_2' => 'order-lg-2',
   )
);
?>

<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
   <div class="container py-14 py-md-16">
      <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
         <div class="col-lg-7 <?php echo $block->column_class_1; ?>">
            <?php echo $block->swiper_final; ?>
            <!--/swiper -->
         </div>
         <!--/column -->
         <div class="col-lg-5 <?php echo $block->column_class_2; ?>">
            <?php echo $block->subtitle_first; ?>
            <!--/subtitle -->
            <?php echo $block->title; ?>
            <!--/title -->
            <?php echo $block->subtitle_second; ?>
            <!--/subtitle -->
            <div class="d-flex flex-row">
               <div>
                  <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-location-pin-alt"></i> </div>
               </div>
               <div>
                  <h5 class="mb-1"><?php esc_html_e('Address', 'codeweber'); ?></h5>
                  <address><?php echo $address_line_1; ?>, <?php echo $address_line_2; ?></address>
               </div>
            </div>
            <div class="d-flex flex-row">
               <div>
                  <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-phone-volume"></i> </div>
               </div>
               <div>
                  <h5 class="mb-1"><?php esc_html_e('Phone', 'codeweber'); ?></h5>
                  <p><?php echo brk_phones(NULL); ?></p>
               </div>
            </div>
            <div class="d-flex flex-row">
               <div>
                  <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-envelope"></i> </div>
               </div>
               <div>
                  <h5 class="mb-1"><?php esc_html_e('E-mail', 'codeweber'); ?></h5>
                  <p class="mb-0"><a href="mailto:<?php echo $e_mail_address; ?>" class="link-body"><?php echo $e_mail_address; ?></a></p>
               </div>
            </div>
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