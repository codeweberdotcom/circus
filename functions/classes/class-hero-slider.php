<?php
/* Add Hero Slider */
class HeroSlider
{
   public $root_theme = NULL;
   public $default_slides = NULL;

   public function heroslideritems()
   {
      $i = 0;
      if (have_rows('hero_slider_hero_slider')) :
         while (have_rows('hero_slider_hero_slider')) : the_row();

            /*/* Add buttons */
            $button = new Buttons();
            $button->form_button = "rounded-pill";
            $button->button_size = 'btn-lg';
            $button->animate_swiper = 'true';
            $button->default_button = '<div class="animate__animated animate__slideInUp animate__delay-3s"><a href="#" class="btn btn-lg btn-outline-white rounded-pill">Contact Us</a></div>';

            /*Slide item */
            /* --- */
            $position_text = get_sub_field('position_text');
            $button->class_button_wrapper = 'd-flex justify-content-' . $position_text . ' flex-wrap';
            $title = get_sub_field('title');
            $paragraph = get_sub_field('paragraph');
            $button->animate_swiper_class = 'class="animate__animated animate__slideInUp animate__delay-3s"';

            /* --- */
            $position_text = get_sub_field('position_text');
            if ($position_text == 'start') :
               $position_text = 'col-md-10 offset-md-1 col-lg-7 offset-lg-0 col-xl-6 col-xxl-5 text-center text-lg-start justify-content-center align-self-center align-items-start';
               $button_wrapper_class = 'justify-content-start';
            elseif ($position_text == 'end') :
               $position_text = 'col-md-10 offset-md-1 col-lg-7 offset-lg-5 col-xl-6 offset-xl-6 col-xxl-5 offset-xxl-6 text-center text-lg-start justify-content-center align-self-center align-items-start';
               $button_wrapper_class = 'justify-content-start';
            elseif ($position_text == 'center') :
               $position_text = 'col-md-11 col-lg-8 col-xl-7 col-xxl-6 mx-auto text-center justify-content-center align-self-center';
               $button_wrapper_class = 'justify-content-center';
            endif;

            $textcolor = 'white';
            /* Dark or white */
            if (get_sub_field('light_or_dark') == 0) :
               $textcolor = 'white';
            elseif (get_sub_field('light_or_dark') == 1) :
               $textcolor = 'dark';
            endif;

            /* --- */
            $photo = get_sub_field('photo');
            if ($photo) :
               $size = 'sandbox_hero_15';
               $image_url = esc_url($photo['sizes'][$size]); ?>
               <?php if ($i == 0) : ?>
                  <?php $title_tag = 'h1'; ?>
               <?php else : ?>
                  <?php $title_tag = 'h2'; ?>
               <?php endif; ?>
               <div class="swiper-slide h-100 bg-overlay bg-overlay-400 bg-dark" style="background-image:url(<?php echo $image_url; ?>);">
                  <div class="container h-100">
                     <div class="row h-100">
                        <div class="<?php echo $position_text; ?>">
                           <?php echo '<' . $title_tag . ' class="display-1 fs-56 mb-4 text-' . $textcolor . ' animate__animated animate__slideInDown animate__delay-1s">' . $title . '</' . $title_tag . '>'; ?>

                           <p class="lead fs-23 lh-sm mb-7 text-<?php echo $textcolor; ?> animate__animated animate__slideInRight animate__delay-2s"><?php echo $paragraph; ?></p>
                           <!--  buttons group -->
                           <?php $button->showbuttons(); ?>
                           <!--/buttons group -->
                        </div>
                        <!--/column -->
                     </div>
                     <!--/.row -->
                  </div>
                  <!--/.container -->
               </div>
               <!--/.swiper-slide -->
            <?php endif; ?>
            <?php $i++; ?>
         <?php endwhile; ?>

      <?php else : ?>
         <div class="swiper-slide h-100 bg-overlay bg-overlay-400 bg-dark" style="background-image:url(<?php echo $this->root_theme; ?>/dist/img/photos/bg7.jpg);">
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

         <div class="swiper-slide h-100 bg-overlay bg-overlay-400 bg-dark" style="background-image:url(<?php echo $this->root_theme; ?>/dist/img/photos/bg8.jpg);">
            <div class="container h-100">
               <div class="row h-100">
                  <div class="col-md-11 col-lg-8 col-xl-7 col-xxl-6 mx-auto text-center justify-content-center align-self-center">
                     <h2 class="display-1 fs-56 mb-4 text-white animate__animated animate__slideInDown animate__delay-1s">We are trusted by over a million customers.</h2>
                     <p class="lead fs-23 lh-sm mb-7 text-white animate__animated animate__slideInRight animate__delay-2s">Here a few reasons why our customers choose us.</p>
                     <div class="animate__animated animate__slideInUp animate__delay-3s"><a href="<?php echo $this->root_theme; ?>/dist/media/movie.mp4" class="btn btn-circle btn-white btn-play ripple mx-auto mb-5" data-glightbox><i class="icn-caret-right"></i></a></div>
                  </div>
                  <!--/column -->
               </div>
               <!--/.row -->
            </div>
            <!--/.container -->
         </div>
         <!--/.swiper-slide -->

         <div class="swiper-slide h-100 bg-overlay bg-overlay-400 bg-dark" style="background-image:url(<?php echo $this->root_theme; ?>/dist/img/photos/bg9.jpg);">
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
      <?php   }

   /**/

   public function heroslideritems1()
   {
      if (have_rows('hero_slider_hero_slider')) :
         while (have_rows('hero_slider_hero_slider')) : the_row();

            /*/* Add buttons */
            $button = new Buttons();
            $button->form_button = "rounded";
            $button->button_size = 'btn-lg';
            $button->animate_swiper = 'true';
            $button->default_button = '<div class="animate__animated animate__slideInUp animate__delay-3s"><a href="#" class="btn btn-lg btn-outline-white rounded-pill">Contact Us</a></div>';

            /*Slide item */
            /* --- */
            $position_text = get_sub_field('position_text');
            $button->class_button_wrapper = 'd-flex justify-content-center justify-content-lg-start start flex-wrap';
            $title = get_sub_field('title');
            $paragraph = get_sub_field('paragraph');
            $button->animate_swiper_class = 'class="animate__animated animate__slideInUp animate__delay-3s"';

            /* --- */
            $position_text = get_sub_field('position_text');
            if ($position_text == 'start') :
               $position_text = 'col-md-10 offset-md-1 col-lg-7 offset-lg-0 col-xl-6 col-xxl-5 text-center text-lg-start justify-content-center align-self-center align-items-start';
               $button_wrapper_class = 'justify-content-start';
            elseif ($position_text == 'end') :
               $position_text = 'col-md-10 offset-md-1 col-lg-7 offset-lg-5 col-xl-6 offset-xl-6 col-xxl-5 offset-xxl-6 text-center text-lg-start justify-content-center align-self-center align-items-start';
               $button_wrapper_class = 'justify-content-start';
            elseif ($position_text == 'center') :
               $position_text = 'col-md-11 col-lg-8 col-xl-7 col-xxl-6 mx-auto text-center justify-content-center align-self-center';
               $button_wrapper_class = 'justify-content-start';
            endif;

            $textcolor = 'white';
            /* Dark or white */
            if (get_sub_field('light_or_dark') == 0) :
               $textcolor = 'white';
            elseif (get_sub_field('light_or_dark') == 1) :
               $textcolor = 'dark';
            endif;


            /* --- */
            $photo = get_sub_field('photo');
            if ($photo) :
               $size = 'sandbox_hero_14';
               $image_url = esc_url($photo['sizes'][$size]); ?>
               <div class="swiper-slide h-100 " ;">
                  <section class="wrapper bg-light position-relative min-vh-70 d-lg-flex align-items-center">
                     <div class="rounded-4-lg-start col-lg-6 order-lg-2 position-lg-absolute top-0 end-0 image-wrapper bg-image bg-cover h-100 min-vh-50 animate__animated animate__slideInUp animate__delay-1s" data-image-src="<?php echo $image_url; ?>">
                     </div>
                     <!--/column -->
                     <div class="container">
                        <div class="row">
                           <div class="col-lg-6">
                              <div class="mt-10 mt-md-11 mt-lg-n10 px-5 px-md-11 ps-lg-0 pe-lg-13 text-center text-lg-start">
                                 <h1 class="display-1 mb-5 animate__animated animate__slideInDown animate__delay-1s"><?php echo $title; ?></h1>
                                 <p class="lead fs-25 lh-sm mb-7 pe-md-10 animate__animated animate__slideInRight animate__delay-2s"><?php echo $paragraph; ?></p>
                                 <!--  buttons group -->
                                 <?php $button->showbuttons(); ?>
                                 <!--/buttons group -->
                              </div>
                              <!--/div -->
                           </div>
                           <!--/column -->
                        </div>
                        <!--/.row -->
                     </div>
                     <!-- /.container -->
                  </section>
                  <!-- /section -->
                  <!--/.container -->
               </div>
               <!--/.swiper-slide -->
            <?php endif; ?>
         <?php endwhile; ?>
      <?php else : ?>

         <div class="swiper-slide h-100 " ;">
            <section class="wrapper bg-light position-relative min-vh-70 d-lg-flex align-items-center">
               <div class="rounded-4-lg-start col-lg-6 order-lg-2 position-lg-absolute top-0 end-0 image-wrapper bg-image bg-cover h-100 min-vh-50 animate__animated animate__slideInUp animate__delay-1s" data-image-src="<?php echo $this->root_theme; ?>/dist/img/photos/about16.jpg">
               </div>
               <!--/column -->
               <div class="container">
                  <div class="row">
                     <div class="col-lg-6">
                        <div class="mt-10 mt-md-11 mt-lg-n10 px-5 px-md-11 ps-lg-0 pe-lg-13 text-center text-lg-start">
                           <h1 class="display-1 mb-5 animate__animated animate__slideInDown animate__delay-1s">Just sit & relax while we take care of your business needs.</h1>
                           <p class="lead fs-25 lh-sm mb-7 pe-md-10 animate__animated animate__slideInRight animate__delay-2s">We make your spending stress-free for you to have the perfect control.</p>
                           <div class="d-flex justify-content-center justify-content-lg-start animate__animated animate__slideInUp animate__delay-3s">
                              <span><a href="#" class="btn btn-lg btn-primary rounded-pill me-2">Explore Now</a></span>
                              <span><a href="#" class="btn btn-lg btn-outline-primary rounded-pill">Contact Us</a></span>
                           </div>
                        </div>
                        <!--/div -->
                     </div>
                     <!--/column -->
                  </div>
                  <!--/.row -->
               </div>
               <!-- /.container -->
            </section>
            <!-- /section -->
            <!--/.container -->
         </div>

         <div class="swiper-slide h-100 " ;">
            <section class="wrapper bg-light position-relative min-vh-70 d-lg-flex align-items-center">
               <div class="rounded-4-lg-start col-lg-6 order-lg-2 position-lg-absolute top-0 end-0 image-wrapper bg-image bg-cover h-100 min-vh-50 animate__animated animate__slideInUp animate__delay-1s" data-image-src="<?php echo $this->root_theme; ?>/dist/img/photos/about16.jpg">
               </div>
               <!--/column -->
               <div class="container">
                  <div class="row">
                     <div class="col-lg-6">
                        <div class="mt-10 mt-md-11 mt-lg-n10 px-5 px-md-11 ps-lg-0 pe-lg-13 text-center text-lg-start">
                           <h1 class="display-1 mb-5 animate__animated animate__slideInDown animate__delay-1s">Just sit & relax while we take care of your business needs.</h1>
                           <p class="lead fs-25 lh-sm mb-7 pe-md-10 animate__animated animate__slideInRight animate__delay-2s">We make your spending stress-free for you to have the perfect control.</p>
                           <div class="d-flex justify-content-center justify-content-lg-start animate__animated animate__slideInUp animate__delay-3s">
                              <span><a href="#" class="btn btn-lg btn-primary rounded-pill me-2">Explore Now</a></span>
                              <span><a href="#" class="btn btn-lg btn-outline-primary rounded-pill">Contact Us</a></span>
                           </div>
                        </div>
                        <!--/div -->
                     </div>
                     <!--/column -->
                  </div>
                  <!--/.row -->
               </div>
               <!-- /.container -->
            </section>
            <!-- /section -->
            <!--/.container -->
         </div>
      <?php endif; ?>
<?php   }
}
