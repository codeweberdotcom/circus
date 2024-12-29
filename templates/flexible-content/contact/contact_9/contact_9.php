<?php

/**
 * Contact 9
 */

$final_icon = '<img src="' . get_template_directory_uri() . '/dist/img/icons/lineal/email.svg" class="svg-inject icon-svg icon-svg-sm mb-4" alt="" />';
$icon = new CW_Icon(NULL, NULL, 'mb-4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, $final_icon, NULL);

$demo_form = '<form class="contact-form needs-validation" method="post" action="./assets/php/contact.php" novalidate>
              <div class="messages"></div>
              <div class="row gx-4">
                <div class="col-md-6">
                  <div class="form-floating mb-4">
                    <input id="frm_name" type="text" name="name" class="form-control border-0" placeholder="Jane" required="required" data-error="First Name is required.">
                    <label for="frm_name">Name *</label>
                    <div class="invalid-feedback">
                      Please enter your name.
                    </div>
                  </div>
                </div>
                <!-- /column -->
                <div class="col-md-6">
                  <div class="form-floating mb-4">
                    <input id="frm_email" type="email" name="email" class="form-control border-0" placeholder="jane.doe@example.com" required="required" data-error="Valid email is required.">
                    <label for="frm_email">Email *</label>
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
                    <textarea id="frm_message" name="message" class="form-control border-0" placeholder="Your message" style="height: 150px" required></textarea>
                    <label for="frm_message">Message *</label>
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
                  <input type="submit" class="btn btn-outline-primary rounded-pill btn-send mb-3" value="Send message">
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
    'title' => 'If you like what you see, let\'s work together.',
    'patternTitle' => '<h2 class="display-4 mb-3 pe-lg-10 %2$s">%1$s</h2>',

    'subtitle' => 'I bring rapid solutions to make the life of my clients easier. Have any questions? Reach out to me from this contact form and I will get back to you shortly.',
    'patternSubtitle' => '<p class="lead pe-lg-12 mb-0 %2$s">%1$s</p>',

    'background_class_default' => 'wrapper bg-light',
    'divider' => true,


    'column_class_1' => '',
    'column_class_2' => 'order-lg-2',
  )
);
?>

<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
  <div class="container py-14 py-md-16">
    <div class="card bg-soft-primary">
      <div class="card-body p-12">
        <div class="row gx-md-8 gx-xl-12 gy-10">
          <div class="col-lg-6 <?php echo $block->column_class_1; ?>">
            <?php echo $icon->final_icon; ?>
            <!--/final_icon -->
            <?php echo $block->subtitle_first; ?>
            <!--/subtitle -->
            <?php echo $block->title; ?>
            <!--/title -->
            <?php echo $block->subtitle_second; ?>
            <!--/subtitle -->
          </div>
          <!-- /column -->
          <div class="col-lg-6 <?php echo $block->column_class_2; ?>">
            <?php echo $cf_form; ?>
            <!-- /form -->
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!--/.card-body -->
    </div>
    <!--/.card -->
  </div>
  <!-- /.container -->
  <?php if ($block->divider_wave) {
    echo $block->divider_wave;
  } ?>
  <!-- /divider -->
</section>
<!-- /section -->