<?php

/**
 * Contact 10
 */

$demo_form = '<form class="contact-form needs-validation" method="post" action="./assets/php/contact.php" novalidate>
          <div class="messages"></div>
          <div class="form-floating mb-4">
            <input id="form_name2" type="text" name="name" class="form-control" placeholder="Jane" required="required" data-error="Name is required.">
            <label for="form_name2">Name *</label>
            <div class="valid-feedback">
              Looks good!
            </div>
            <div class="invalid-feedback">
              Please enter your name.
            </div>
          </div>
          <div class="form-floating mb-4">
            <input id="form_email2" type="email" name="email" class="form-control" placeholder="jane.doe@example.com" required="required" data-error="Valid email is required.">
            <label for="form_email2">Email *</label>
            <div class="valid-feedback">
              Looks good!
            </div>
            <div class="invalid-feedback">
              Please provide a valid email address.
            </div>
          </div>
          <div class="form-floating mb-4">
            <textarea id="form_message2" name="message" class="form-control" placeholder="Your message" style="height: 150px" required></textarea>
            <label for="form_message2">Message *</label>
            <div class="valid-feedback">
              Looks good!
            </div>
            <div class="invalid-feedback">
              Please enter your messsage.
            </div>
          </div>
          <input type="submit" class="btn btn-primary rounded-pill btn-send mb-3" value="Send message">
          <p class="text-muted"><strong>*</strong> These fields are required.</p>
        </form>
        <!-- /form -->';
$contact_form = get_sub_field('contact_form');
if ($contact_form) {
   foreach ($contact_form as $post_ids) {
      $contact_link =  do_shortcode('[contact-form-7 id="' . $post_ids . '"]');
   }
   $cf_form = $contact_link;
} else {
   $cf_form = $demo_form;
}

$block = new CW_Settings(
   $cw_settings = array(
      'title' => 'Get In Touch',
      'patternTitle' => '<h2 class="display-4 mb-3 %2$s">%1$s</h2>',

      'subtitle' => 'Have any questions? Reach out to us from our contact form and we will get back to you shortly.',
      'patternSubtitle' => '<p class="lead mb-8 pe-xl-10 %2$s">%1$s</p>',

      'background_class_default' => 'wrapper bg-light',
      'divider' => true,

      'swiper' => array(
         'swiper_container_class' => 'overflow-hidden',
         'image_class' => '',
         'data_thumbs' => NULL,
         'wrapper_image_class' => 'ps-xxl-10',
         'image_pattern' => '<figure %5$s %9$s>%6$s<img %4$s src="%1$s" srcset="%1$s" %3$s />%7$s %10$s %11$s</figure>',
         'image_thumb_size' => 'sandbox_process_8',
         'image_demo' => '<figure class="ps-xxl-10"><img src="' . get_template_directory_uri() . '/dist/img/photos/woman.png" srcset="' . get_template_directory_uri() . '/dist/img/photos/woman@2x.png 2x" alt=""></figure>',
         'image_big_size' => 'sandbox_hero_6',
         'img_link' => '/dist/img/photos/woman.png',

      ),

      'shapes' => array('<div class="shape rounded-circle bg-soft-primary rellax w-21 h-21" data-rellax-speed="1" style="top: 8rem; left: 2rem"></div>'),

      'column_class_1' => '',
      'column_class_2' => 'order-lg-2 offset-xl-1',
   )
);
?>

<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
   <div class="container py-14 pt-lg-16 pb-lg-0">
      <div class="row gx-lg-8 gx-xl-0 gy-10 align-items-center">
         <div class="col-lg-6 col-xl-5 position-relative d-none d-lg-block <?php echo $block->column_class_1; ?>">
            <?php echo $block->shapes; ?>
            <!--/shape -->
            <?php echo $block->swiper_final; ?>
            <!--/swiper -->
         </div>
         <!--/column -->
         <div class="col-lg-6 col-xl-5 <?php echo $block->column_class_2; ?>">
            <?php echo $block->subtitle_first; ?>
            <!--/subtitle -->
            <?php echo $block->title; ?>
            <!--/title -->
            <?php echo $block->subtitle_second; ?>
            <!--/subtitle -->
            <?php echo $cf_form; ?>
            <!-- /form -->
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