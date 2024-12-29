<?php

/**
 * Contact 5
 */

$demo_form = '<form class="contact-form needs-validation" method="post" action="./assets/php/contact.php" novalidate>
              <div class="messages"></div>
              <div class="row gx-4">
                <div class="col-md-6">
                  <div class="form-floating mb-4">
                    <input id="form_name" type="text" name="name" class="form-control" placeholder="Jane" required>
                    <label for="form_name">First Name *</label>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                    <div class="invalid-feedback">
                      Please enter your first name.
                    </div>
                  </div>
                </div>
                <!-- /column -->
                <div class="col-md-6">
                  <div class="form-floating mb-4">
                    <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Doe" required>
                    <label for="form_lastname">Last Name *</label>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                    <div class="invalid-feedback">
                      Please enter your last name.
                    </div>
                  </div>
                </div>
                <!-- /column -->
                <div class="col-md-6">
                  <div class="form-floating mb-4">
                    <input id="form_email" type="email" name="email" class="form-control" placeholder="jane.doe@example.com" required>
                    <label for="form_email">Email *</label>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                    <div class="invalid-feedback">
                      Please provide a valid email address.
                    </div>
                  </div>
                </div>
                <!-- /column -->
                <div class="col-md-6">
                  <div class="form-select-wrapper mb-4">
                    <select class="form-select" id="form-select" name="department" required>
                      <option selected disabled value="">Select a department</option>
                      <option value="Sales">Sales</option>
                      <option value="Marketing">Marketing</option>
                      <option value="Customer Support">Customer Support</option>
                    </select>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                    <div class="invalid-feedback">
                      Please select a department.
                    </div>
                  </div>
                </div>
                <!-- /column -->
                <div class="col-12">
                  <div class="form-floating mb-4">
                    <textarea id="form_message" name="message" class="form-control" placeholder="Your message" style="height: 150px" required></textarea>
                    <label for="form_message">Message *</label>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                    <div class="invalid-feedback">
                      Please enter your messsage.
                    </div>
                  </div>
                </div>
                <!-- /column -->
                <div class="col-12">
                  <div class="form-check mb-4">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                    <label class="form-check-label" for="invalidCheck">
                      I agree to <a href="#" class="hover">terms and policy</a>.
                    </label>
                    <div class="invalid-feedback">
                      You must agree before submitting.
                    </div>
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

      'background_class_default' => 'wrapper bg-light',
      'divider' => true,

      'column_class_1' => '',
      'column_class_2' => 'order-lg-2',
   )
);
?>

<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
   <div class="container py-14 py-md-16">
      <div class="row">
         <div class="col-xl-10 mx-auto">
            <div class="row gy-10 gx-lg-8 gx-xl-12">
               <div class="col-lg-8 <?php echo $block->column_class_1; ?>">
                  <?php echo $cf_form; ?>
                  <!-- /form -->
               </div>
               <!--/column -->
               <div class="col-lg-4 <?php echo $block->column_class_2; ?>">
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
<!-- /section -->