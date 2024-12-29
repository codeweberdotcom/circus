<?php

/**
 *  FAQ 5
 */


$block = new CW_Settings(
  $cw_settings = array(
    // 'subtitle' => 'FAQ',
    // 'patternSubtitle' => '<div class="fs-15 text-uppercase text-primary mb-3">%s</div>',

    // 'title' => 'Pricing FAQ',
    // 'patternTitle' => '<h2 class="display-4 mb-3 text-center">%s</h2>',

    // 'paragraph' => 'If you don\'t see an answer to your question, you can send us an email from our contact form.',
    // 'patternParagraph' => '<p class="lead text-center mb-10 px-md-16 px-lg-0">%s</p>',

    // 'buttons' => '<a href="#" class="btn btn-primary rounded-pill">All FAQ</a>',
    // 'buttons_pattern' => '<div class="d-flex justify-content-center justify-content-lg-start flex-wrap" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">%s</div>',

    'background_class_default' => 'wrapper bg-light',

    'divider' => true,

    'accordeon_demo' => '',
  )
);
?>


<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
  <div class="container py-14 py-md-16">
    <div class="row gx-md-8 gx-xl-12 gy-10">
      <div class="col-lg-6">
        <div class="d-flex flex-row">
          <div>
            <span class="icon btn btn-sm btn-circle btn-primary pe-none me-5"><i class="uil uil-comment-exclamation"></i></span>
          </div>
          <div>
            <h4>Can I cancel my subscription?</h4>
            <p class="mb-0">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod maecenas.</p>
          </div>
        </div>
      </div>
      <!-- /column -->
      <div class="col-lg-6">
        <div class="d-flex flex-row">
          <div>
            <span class="icon btn btn-sm btn-circle btn-primary pe-none me-5"><i class="uil uil-comment-exclamation"></i></span>
          </div>
          <div>
            <h4>Which payment methods do you accept?</h4>
            <p class="mb-0">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod maecenas.</p>
          </div>
        </div>
      </div>
      <!-- /column -->
      <div class="col-lg-6">
        <div class="d-flex flex-row">
          <div>
            <span class="icon btn btn-sm btn-circle btn-primary pe-none me-5"><i class="uil uil-comment-exclamation"></i></span>
          </div>
          <div>
            <h4>How can I manage my Account?</h4>
            <p class="mb-0">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod maecenas.</p>
          </div>
        </div>
      </div>
      <!-- /column -->
      <div class="col-lg-6">
        <div class="d-flex flex-row">
          <div>
            <span class="icon btn btn-sm btn-circle btn-primary pe-none me-5"><i class="uil uil-comment-exclamation"></i></span>
          </div>
          <div>
            <h4>Is my credit card information secure?</h4>
            <p class="mb-0">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod maecenas.</p>
          </div>
        </div>
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