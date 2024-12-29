  <section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo esc_html($args['block_class']); ?> overflow-hidden px-0 ">
    <div class="swiper-container swiper-hero dots-over" data-margin="0" data-autoplay="true" data-autoplaytime="5000" data-nav="true" data-dots="true" data-items="1">
      <div class="swiper">
        <div class="swiper-wrapper">
          <?php if (get_field('rounded') == 1) : ?>
            <?php // echo 'true'; 
            ?>
          <?php else : ?>
            <?php // echo 'false'; 
            ?>
          <?php endif; ?>
          <?php if (have_rows('cw_slider_full')) : ?>
            <?php while (have_rows('cw_slider_full')) : the_row();
              $block = new CW_Settings(
                $cw_settings = array(
                  'title' => 'We bring solutions to make life easier.',
                  'patternTitle' => '<h2 class="display-1 fs-56 mb-4 text-white animate__animated animate__slideInDown animate__delay-1s %2$s">%1$s</h2>',

                  'paragraph' => 'We are a creative company that focuses on long term relationships with customers.',
                  'patternParagraph' => '<p class="lead fs-23 lh-sm mb-7 text-white animate__animated animate__slideInRight animate__delay-2s %2$s">%1$s</p>',

                  'buttons' => '<div class="animate__animated animate__slideInUp animate__delay-3s"><a href="#" class="btn btn-lg btn-outline-white rounded-pill">Read More</a></div>',
                  'buttons_pattern' => '<div class="animate__animated animate__slideInUp animate__delay-3s">%s</div>',
                )
              );
              $position = get_sub_field('cw_content_position');
              if ($position == 'left') {
                $position_class = 'col-md-10 offset-md-1 col-lg-7 offset-lg-0 col-xl-6 col-xxl-5 text-center text-lg-start justify-content-center align-self-center align-items-start';
              } elseif ($position == 'center') {
                $position_class = 'col-md-11 col-lg-8 col-xl-7 col-xxl-6 mx-auto text-center justify-content-center align-self-center';
              } elseif ($position == 'right') {
                $position_class = 'col-md-10 offset-md-1 col-lg-7 offset-lg-5 col-xl-6 offset-xl-6 col-xxl-5 offset-xxl-6 text-center text-lg-start justify-content-center align-self-center align-items-start';
              }
              if (have_rows('cw_image1')) {
                while (have_rows('cw_image1')) {
                  the_row();
                  $cw_image = get_sub_field('cw_image');
                  if ($cw_image) {
                    $image_link = esc_url($cw_image['url']);
                    $image_alt = esc_url($cw_image['alt']);
                  }
                }
              } ?>
              <div class="swiper-slide h-100 bg-overlay bg-overlay-400 bg-dark" style="background-image:url(<?php echo $image_link; ?>">
                <div class="container h-100">
                  <div class="row h-100">
                    <div class="<?php echo $position_class; ?>">
                      <?php echo $block->title; ?>
                      <!-- title -->
                      <?php echo $block->paragraph; ?>
                      <!--/pargraph -->
                      <?php echo $block->buttons; ?>
                      <!--/buttons group -->
                    </div>
                    <!--/column -->
                  </div>
                  <!--/.row -->
                </div>
                <!--/.container -->
              </div>
              <!--/.swiper-slide -->
            <?php endwhile; ?>
          <?php else : ?>

            <div class="swiper-slide h-100 bg-overlay bg-overlay-400 bg-dark" style="background-image:url(<?php echo get_template_directory_uri(); ?>/dist/img/photos/bg7.jpg);">
              <div class="container h-100">
                <div class="row h-100">
                  <div class="col-md-10 offset-md-1 col-lg-7 offset-lg-0 col-xl-6 col-xxl-5 text-center text-lg-start justify-content-center align-self-center align-items-start">
                    <h2 class="display-1 fs-56 mb-4 text-white animate__animated animate__slideInDown animate__delay-1s">We bring solutions to make life easier.</h2>
                    <p class="lead fs-23 lh-sm mb-7 text-white animate__animated animate__slideInRight animate__delay-2s">We are a creative company that focuses on long term relationships with customers.</p>
                    <div class="animate__animated animate__slideInUp animate__delay-3s"><a href="#" class="btn btn-lg btn-outline-white rounded-pill">Read More</a></div>
                  </div>
                  <!--/column -->
                </div>
                <!--/.row -->
              </div>
              <!--/.container -->
            </div>
            <!--/.swiper-slide -->
            <div class="swiper-slide h-100 bg-overlay bg-overlay-400 bg-dark" style="background-image:url(<?php echo get_template_directory_uri(); ?>/dist/img/photos/bg8.jpg);">
              <div class="container h-100">
                <div class="row h-100">
                  <div class="col-md-11 col-lg-8 col-xl-7 col-xxl-6 mx-auto text-center justify-content-center align-self-center">
                    <h2 class="display-1 fs-56 mb-4 text-white animate__animated animate__slideInDown animate__delay-1s">We are trusted by over a million customers.</h2>
                    <p class="lead fs-23 lh-sm mb-7 text-white animate__animated animate__slideInRight animate__delay-2s">Here a few reasons why our customers choose us.</p>
                    <div class="animate__animated animate__slideInUp animate__delay-3s"><a href="<?php echo get_template_directory_uri(); ?>/dist/media/movie.mp4" class="btn btn-circle btn-white btn-play ripple mx-auto mb-5" data-glightbox><i class="icn-caret-right"></i></a></div>
                  </div>
                  <!--/column -->
                </div>
                <!--/.row -->
              </div>
              <!--/.container -->
            </div>
            <!--/.swiper-slide -->
            <div class="swiper-slide h-100 bg-overlay bg-overlay-400 bg-dark" style="background-image:url(<?php echo get_template_directory_uri(); ?>/dist/img/photos/bg9.jpg);">
              <div class="container h-100">
                <div class="row h-100">
                  <div class="col-md-10 offset-md-1 col-lg-7 offset-lg-5 col-xl-6 offset-xl-6 col-xxl-5 offset-xxl-6 text-center text-lg-start justify-content-center align-self-center align-items-start">
                    <h2 class="display-1 fs-56 mb-4 text-white animate__animated animate__slideInDown animate__delay-1s">Just sit and relax.</h2>
                    <p class="lead fs-23 lh-sm mb-7 text-white animate__animated animate__slideInRight animate__delay-2s">We make sure your spending is stress free so that you can have the perfect control.</p>
                    <div class="animate__animated animate__slideInUp animate__delay-3s"><a href="#" class="btn btn-lg btn-outline-white rounded-pill">Contact Us</a></div>
                  </div>
                  <!--/column -->
                </div>
                <!--/.row -->
              </div>
              <!--/.container -->
            </div>
            <!--/.swiper-slide -->

          <?php endif; ?>
        </div>
        <!--/.swiper-wrapper -->
      </div>
      <!-- /.swiper -->
    </div>
    <!-- /.swiper-container -->
  </section>