<?php

/**
 * Contact 6_1
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
                  <div class="col-12 text-center">
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
   $class_cust = 'mt-n19';
}

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

$contact_form = get_sub_field('contact_form');
if ($contact_form) {
   foreach ($contact_form as $post_ids) {
      $contact_link =  do_shortcode('[contact-form-7 id="' . $post_ids . '"]');
   }
   $cf_form = $contact_link;
} else {
   $cf_form = $demo_form;
}

if (get_sub_field('block_title')) {
   $block_title = get_sub_field('block_title');
} else {
   $block_title = 'Here are 3 working steps to organize our business projects.';
}




$block = new CW_Settings(
   $cw_settings = array(

      'title' => 'Drop Us a Line',
      'patternTitle' => '<h2 class="display-4 mb-3 text-center %2$s">%1$s</h2>',

      'subtitle' => 'Reach out to us from our contact form and we will get back to you shortly.',
      'patternSubtitle' => '<p class="lead text-center mb-10 %2$s">%1$s</p>',

      'background_class_default' => 'wrapper bg-light',
      'divider' => true,

      'features' => '<div class="col-md-4 text-center"><h3 class="counter counter-lg text-primary">7518</h3><p>Completed Projects</p></div><!--/column -->',
      'features_pattern' => '<div class="col-md-4 text-center %1$s"><div class="h3 counter counter-lg text-primary">%3$s</div><p>%4$s</p></div><!--/column -->',

   )
);


?>

<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
   <div class="container pb-11">
      <div class="row mb-14 mb-md-16">
         <div class="col-xl-10 mx-auto <?php echo $class_cust; ?>">
            <div class="card">
               <div class="row gx-0">
                  <div class="col-lg-6 align-self-stretch">
                     <div class="map map-full rounded-top rounded-lg-start">
                        <iframe src="<?php echo $map_url; ?>" style="width: 100%; height: 100%; min-height: 480px; border:0" allowfullscreen></iframe>
                     </div>
                     <!-- /.map -->
                  </div>
                  <!--/column -->
                  <div class="col-lg-6">
                     <div class="p-10 p-md-11 p-lg-14">
                        <div class="d-flex flex-row">
                           <div>
                              <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-location-pin-alt"></i> </div>
                           </div>
                           <div class="align-self-start justify-content-start">
                              <h5 class="mb-1"><?php esc_html_e('Address', 'codeweber'); ?></h5>
                              <address><?php echo $address_line_1; ?>, <br class="d-none d-md-block" /><?php echo $address_line_2; ?></address>
                           </div>
                        </div>
                        <!--/div -->

                        <?php if (have_rows('time_working', 'option')) { ?>
                           <div class="d-flex flex-row">
                              <div>
                                 <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-clock"></i> </div>
                              </div>
                              <div>
                                 <h5 class="mb-1"><?php esc_html_e('Time working', 'codeweber'); ?></h5>
                                 <table class="table table-borderless table-sm">
                                    <tbody>
                                       <?php
                                       while (have_rows('time_working', 'option')) {
                                          the_row();
                                          $day_start = get_sub_field('day_start');
                                          $day_end = get_sub_field('day_end');
                                          $time_start = get_sub_field('time_start');
                                          $time_end = get_sub_field('time_end');

                                          if ($day_start && $day_end) {
                                             $days_string = '<span>' . $day_start . '</span> - <span>' . $day_end . '</span>';
                                          } else {
                                             $days_string = '<span>' . $day_start . '</span>';
                                          }

                                          if ($time_start && $time_end) {
                                             $time_string = '<span>' . $time_start . '</span> - <span>' . $time_end . '</span>';
                                          }

                                          $weekend = get_sub_field('weekend');
                                          if ($weekend == true) {
                                             $times = 'Выходной';
                                             $color_style = 'class="text-pinterest"';
                                          } else {
                                             $times = $time_string;
                                             $color_style = '';
                                          }


                                       ?>
                                          <tr <?php echo $color_style; ?>>
                                             <td class="pt-0"><?php echo $days_string; ?></td>
                                             <td class="pt-0"><?php echo $times; ?></td>
                                          </tr>
                                       <?php
                                       }
                                       ?>
                                    </tbody>
                                 </table>
                              </div>

                           </div>
                           <!--/div --> <?php } ?>

                        <div class="d-flex flex-row">
                           <div>
                              <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-phone-volume"></i> </div>
                           </div>
                           <div>
                              <h5 class="mb-1"><?php esc_html_e('Phone', 'codeweber'); ?></h5>
                              <p><?php echo brk_phones(NULL); ?></p>
                           </div>
                        </div>
                        <!--/div -->
                        <div class="d-flex flex-row">
                           <div>
                              <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-envelope"></i> </div>
                           </div>
                           <div>
                              <h5 class="mb-1"><?php esc_html_e('E-mail', 'codeweber'); ?></h5>
                              <p class="mb-0"><a href="mailto:<?php echo $e_mail_address; ?>" class="link-body"><?php echo $e_mail_address; ?></a></p>
                              <?php if ($e_mail_address_1) { ?>
                                 <p class="mb-0"><a href="mailto:<?php echo $e_mail_address_1; ?>" class="link-body"><?php echo $e_mail_address_1; ?></a></p>
                              <?php } ?>
                           </div>
                        </div>
                        <!--/div -->



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
         <div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
            <?php echo $block->subtitle_first; ?>
            <!--/subtitle -->
            <?php echo $block->title; ?>
            <!--/title -->
            <?php echo $block->subtitle_second; ?>
            <!--/subtitle -->
            <?php echo $cf_form; ?>
            <!-- /form -->
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

<section class="wrapper image-wrapper bg-auto no-overlay bg-image text-center bg-map" data-image-src="<?php echo get_template_directory_uri(); ?>/dist/img/map.png" style="background-image: url(&quot;<?php echo get_template_directory_uri(); ?>/dist/img/map.png&quot;);">
   <div class="container pt-0 pb-14 pt-md-16 pb-md-18">
      <div class="row">
         <div class="col-lg-9 col-xxl-8 mx-auto">
            <h3 class="display-4 mb-8 px-xl-12"><?php echo $block_title; ?></h3>
         </div>
         <!-- /.row -->
      </div>
      <!-- /column -->
      <div class="row">
         <div class="col-md-10 col-lg-9 col-xl-7 mx-auto">
            <div class="row align-items-center counter-wrapper gy-4 gy-md-0">
               <?php echo $block->features; ?>
            </div>
            <!--/.row -->
         </div>
         <!-- /column -->
      </div>
      <!-- /.row -->
   </div>
   <!-- /.container -->
</section>