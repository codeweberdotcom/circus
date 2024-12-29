<?php

/**
 * Contact 11
 */

$demo_form = '<form class="contact-form needs-validation" method="post" action="./assets/php/contact.php" novalidate>
                    <div class="messages"></div>
                    <div class="row gx-4">
                      <div class="col-md-6">
                        <div class="form-floating mb-4">
                          <input id="form_name" type="text" name="name" class="form-control bg-white-700 border-0" placeholder="Name" required>
                          <label for="form_name">Name *</label>
                          <div class="valid-feedback">
                            Looks good!
                          </div>
                          <div class="invalid-feedback">
                            Please enter your name.
                          </div>
                        </div>
                      </div>
                      <!-- /column -->
                      <div class="col-md-6">
                        <div class="form-floating mb-4">
                          <input id="form_email" type="email" name="email" class="form-control bg-white-700 border-0" placeholder="jane.doe@example.com" required>
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
                      <div class="col-12">
                        <div class="form-floating mb-4">
                          <textarea id="form_message" name="message" class="form-control bg-white-700 border-0" placeholder="Your message" style="height: 150px" required></textarea>
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
                      <div class="col-12 text-center">
                        <input type="submit" class="btn btn-primary rounded-pill btn-send" value="Send message">
                      </div>
                      <!-- /column -->
                    </div>
                    <!-- /.row -->
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
    'title' => 'Request Photography Pricing',
    'patternTitle' => '<h2 class="display-5 mb-3 text-center %2$s">%1$s</h2>',

    'subtitle' => 'For more information please get in touch using the form below:',
    'patternSubtitle' => '<p class="lead fs-lg text-center mb-10 %2$s">%1$s</p>',

    'background_class_default' => 'wrapper image-wrapper bg-image bg-overlay',
    'background_data_default' => '/dist/img/photos/bg36.jpg',

  )
);
?>

<section class="overflow-hidden px-0">
  <div id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
    <div class="container py-15 py-md-17">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <div class="card border-0 bg-white-900">
            <div class="card-body py-lg-13 px-lg-16">
              <?php echo $block->subtitle_first; ?>
              <!--/subtitle -->
              <?php echo $block->title; ?>
              <!--/title -->
              <?php echo $block->subtitle_second; ?>
              <!--/subtitle -->
              <?php echo $cf_form; ?>
              <!-- /form -->
            </div>
            <!--/.card-body -->
          </div>
          <!--/.card -->
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.wrapper -->
</section>
<!-- /section -->