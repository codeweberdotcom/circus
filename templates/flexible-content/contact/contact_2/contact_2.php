<?php

/**
 * Contact 2
 */

$final_icon = '<img src="' . get_template_directory_uri() . '/dist/img/icons/lineal/telemarketer.svg" class="svg-inject icon-svg icon-svg-md mb-4" alt="" />';
$icon = new CW_Icon(NULL, NULL, 'mb-4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, $final_icon, NULL);

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
      'title' => 'Convinced yet? Let\'s make something great together.',
      'patternTitle' => '<h2 class="display-4 mb-8 %2$s">%1$s</h2>',

      'background_class_default' => 'wrapper bg-light',
      'divider' => true,

      'swiper' => array(
         'swiper_container_class' => 'overflow-hidden',
         'image_class' => '',
         'data_thumbs' => NULL,
         'wrapper_image_class' => 'rounded',
         'image_pattern' => '<figure %5$s %9$s>%6$s<img %4$s src="%1$s" srcset="%1$s" %3$s />%7$s %10$s %11$s</figure>',
         'image_thumb_size' => 'contact_2',
         'image_demo' => '<figure class="rounded"><img src="' . get_template_directory_uri() . '/dist/img/photos/about4.jpg" srcset="' . get_template_directory_uri() . '/dist/img/photos/about4@2x.png 2x" alt="" /></figure>',
         'image_big_size' => 'sandbox_hero_6',
         'img_link' => '/dist/img/photos/about4.jpg',

      ),

      'shapes' => array('<div class="shape bg-dot primary rellax w-17 h-21" data-rellax-speed="1" style="top: -2rem; left: -1.4rem;"></div>'),

      'column_class_1' => '',
      'column_class_2' => 'order-lg-2',
   )
);
?>

<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
   <div class="container py-14 py-md-16">
      <div class="row gx-md-8 gx-xl-12 gy-10 align-items-center">
         <div class="col-md-8 col-lg-6 offset-lg-0 col-xl-5 offset-xl-1 position-relative <?php echo $block->column_class_1; ?>">
            <?php echo $block->shapes; ?>
            <!--/shape -->
            <?php echo $block->swiper_final; ?>
            <!--/swiper -->
         </div>
         <!--/column -->
         <div class="col-lg-6 <?php echo $block->column_class_2; ?>">
            <?php echo $icon->final_icon; ?>
            <!--/final_icon -->
            <?php echo $block->title; ?>
            <!--/title -->
            <div class="d-flex flex-row">
               <div>
                  <div class="icon text-primary fs-28 me-6 mt-n1"> <i class="uil uil-location-pin-alt"></i> </div>
               </div>
               <div>
                  <h5 class="mb-1"><?php esc_html_e('Address', 'codeweber'); ?></h5>
                  <address><?php echo $address_line_1; ?> <br class="d-none d-md-block" /><?php echo $address_line_2; ?></address>
               </div>
            </div>
            <div class="d-flex flex-row">
               <div>
                  <div class="icon text-primary fs-28 me-6 mt-n1"> <i class="uil uil-phone-volume"></i> </div>
               </div>
               <div>
                  <h5 class="mb-1"><?php esc_html_e('Phone', 'codeweber'); ?></h5>
                  <p><?php echo brk_phones(NULL); ?></p>
               </div>
            </div>
            <div class="d-flex flex-row">
               <div>
                  <div class="icon text-primary fs-28 me-6 mt-n1"> <i class="uil uil-envelope"></i> </div>
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