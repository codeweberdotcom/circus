<?php

/**
 * Contact 8_1
 */
$demo_form = '<form class="contact-form needs-validation" method="post" action="./assets/php/contact.php" novalidate="">
                     <div class="messages"></div>
                     <div class="row gx-4">
                        <div class="col-md-6">
                           <div class="form-floating mb-4">
                              <input id="form_name" type="text" name="name" class="form-control" placeholder="Jane" required="">
                              <label for="form_name">First Name *</label>
                              <div class="valid-feedback"> Looks good! </div>
                              <div class="invalid-feedback"> Please enter your first name. </div>
                           </div>
                        </div>
                        <!-- /column -->
                        <div class="col-md-6">
                           <div class="form-floating mb-4">
                              <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Doe" required="">
                              <label for="form_lastname">Last Name *</label>
                              <div class="valid-feedback"> Looks good! </div>
                              <div class="invalid-feedback"> Please enter your last name. </div>
                           </div>
                        </div>
                        <!-- /column -->
                        <div class="col-md-6">
                           <div class="form-floating mb-4">
                              <input id="form_email" type="email" name="email" class="form-control" placeholder="jane.doe@example.com" required="">
                              <label for="form_email">Email *</label>
                              <div class="valid-feedback"> Looks good! </div>
                              <div class="invalid-feedback"> Please provide a valid email address. </div>
                           </div>
                        </div>
                        <!-- /column -->
                        <div class="col-md-6">
                           <div class="form-select-wrapper mb-4">
                              <select class="form-select" id="form-select" name="department" required="">
                                 <option selected="" disabled="" value="">Select a department</option>
                                 <option value="Sales">Sales</option>
                                 <option value="Marketing">Marketing</option>
                                 <option value="Customer Support">Customer Support</option>
                              </select>
                              <div class="valid-feedback"> Looks good! </div>
                              <div class="invalid-feedback"> Please select a department. </div>
                           </div>
                        </div>
                        <!-- /column -->
                        <div class="col-12">
                           <div class="form-floating mb-4">
                              <textarea id="form_message" name="message" class="form-control" placeholder="Your message" style="height: 150px" required=""></textarea>
                              <label for="form_message">Message *</label>
                              <div class="valid-feedback"> Looks good! </div>
                              <div class="invalid-feedback"> Please enter your messsage. </div>
                           </div>
                        </div>
                        <!-- /column -->
                        <div class="col-12">
                           <div class="form-check mb-4">
                              <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required="">
                              <label class="form-check-label" for="invalidCheck"> I agree to <a href="#" class="hover">terms and policy</a>. </label>
                              <div class="invalid-feedback"> You must agree before submitting. </div>
                           </div>
                        </div>
                        <!-- /column -->
                        <div class="col-12">
                           <input type="submit" class="btn btn-primary rounded-pill btn-send mb-3" value="Send message">
                           <p class="text-muted"><strong>*</strong> These fields are required.</p>
                        </div>
                        <!-- /column -->
                     </div>
                     <!-- /.row -->
                  </form>
                  <!-- /form -->';

if (get_sub_field('class_div')) {
   $class_cust = get_sub_field('class_div');
} else {
   $class_cust = NULL;
}

$bg_image = '' . get_template_directory_uri() . '/dist/img/photos/tm1.jpg';

if (get_sub_field('cw_image_bg')) {
   $bg_image = get_sub_field('cw_image_bg');
}

$contact_form = get_sub_field('contact_form');
if ($contact_form) {
   foreach ($contact_form as $post_ids) {
      $contact_link =  do_shortcode('[contact-form-7 id="' . $post_ids . '"]');
   }
   $cf_form = $contact_link;
} else {
   $cf_form = $demo_form;
}
$title_contact_form = get_sub_field('title_contact_form');

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
if (get_field('email_1', 'option')) {
   $e_mail_address_1 = get_field('email_1', 'option');
} else {
   $e_mail_address_1 = '';
}


if (get_field('map_url', 'option')) {
   $map_url = get_field('map_url', 'option');
} else {
   $map_url = 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25387.23478654725!2d-122.06115399490332!3d37.309248660190086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb4571bd377ab%3A0x394d3fe1a3e178b4!2sCupertino%2C%20CA%2C%20USA!5e0!3m2!1sen!2str!4v1645437305701!5m2!1sen!2str';
}


$block = new CW_Settings(
   $cw_settings = array(
      'title' => 'Let’s Talk',
      'patternTitle' => '<h2 class="display-4 mb-3 %2$s">%1$s</h2>',

      'subtitle' => 'Let\'s make something great together. We are trusted by over 5000+ clients. Join them by using our services and grow your business.',
      'patternSubtitle' => '<p class="lead fs-lg %2$s">%1$s</p>',

      'paragraph' => 'Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Maecenas faucibus mollis interdum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.',
      'patternParagraph' => '<p class=" %2$s">%1$s</p>',

      'buttons' => '<a href="#" class="btn btn-primary rounded-pill mt-2">Join Us</a>',
      'buttons_pattern' => '<div class="d-flex justify-content-center justify-content-lg-start flex-wrap" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">%s</div>',

      'background_class_default' => 'wrapper bg-light',
      'divider' => true,

   )
);
?>

<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
   <div class="container pb-14 pb-md-16">
      <div class="row">
         <div class="col <?php echo $class_cust; ?> mb-16">
            <div class="card shadow-lg">
               <div class="row gx-0">
                  <div class="col-lg-6 image-wrapper bg-image bg-cover rounded-top rounded-lg-start d-none d-md-block" data-image-src="<?php echo $bg_image; ?>">
                  </div>
                  <!--/column -->
                  <div class="col-lg-6">
                     <div class="p-10 p-md-11 p-lg-13">
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
                     <!--/div -->
                  </div>
                  <!--/column -->
               </div>
               <!--/.row -->
            </div>
            <!-- /.card -->
         </div>
         <!-- /column -->
      </div>
      <!-- /.row -->
      <div class="row">

         <div class="col-xl-12 mx-auto">
            <?php if ($title_contact_form) { ?>
               <div class="display-5 mb-4"><?php echo $title_contact_form; ?></div>
            <?php } ?>

            <div class="row gy-10 gx-lg-8 gx-xl-12">
               <div class="col-lg-8">
                  <?php echo $cf_form; ?>
                  <!-- /form -->
               </div>
               <!--/column -->
               <div class="col-lg-4">
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
                        <p class="mb-0"><a href="mailto:<?php echo $e_mail_address; ?>" class="text-body"><?php echo $e_mail_address; ?></a></p>
                        <?php if ($e_mail_address_1) { ?>
                           <p><a href="mailto:<?php echo $e_mail_address_1; ?>" class="text-body"><?php echo $e_mail_address_1; ?></a></p>
                        <?php } ?>
                     </div>
                  </div>
               </div>
               <!--/column -->
            </div>
            <!--/.row -->
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
<section class="wrapper bg-light">
   <div class="map">
      <iframe src="<?php echo $map_url; ?>" style="width:100%; height: 500px; border:0" allowfullscreen=""></iframe>
   </div>
   <!-- /.map -->
</section>