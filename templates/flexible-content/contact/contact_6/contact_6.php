<?php

/**
 * Contact 6
 */
if (get_sub_field('class_div')) {
   $class_cust = get_sub_field('class_div');
} else {
   $class_cust = '';
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



$block = new CW_Settings(
   $cw_settings = array(

      'background_class_default' => 'wrapper bg-light',
      'divider' => true,

   )
);
?>

<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
   <div class="container py-14 py-md-16">
      <div class="row">
         <div class="col-xl-10 mx-auto <?php echo $class_cust; ?>">
            <div class="card">
               <div class="row gx-0">
                  <div class="col-lg-6 align-self-stretch">
                     <div class="map map-full rounded-top rounded-lg-start">
                        <iframe src="<?php echo $map_url; ?>" style="width:100%; height: 480px; border:0" allowfullscreen></iframe>
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
                              <address><?php echo $address_line_1; ?>, <?php echo $address_line_2; ?></address>
                           </div>
                        </div>
                        <!--/div -->
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
   </div>
   <!-- /.container -->
   <?php if ($block->divider_wave) {
      echo $block->divider_wave;
   } ?>
   <!-- /divider -->
</section>
<!-- /section -->