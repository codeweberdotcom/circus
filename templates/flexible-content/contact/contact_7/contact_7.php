<?php

/**
 * Contact 7
 */

$final_icon = '<img src="' . get_template_directory_uri() . '/dist/img/icons/lineal/puzzle-2.svg" class="svg-inject icon-svg icon-svg-md mb-4" alt="" />';
$icon = new CW_Icon(NULL, NULL, 'mb-4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, $final_icon, NULL);

$block = new CW_Settings(
   $cw_settings = array(
      'title' => 'Join Our Community',
      'patternTitle' => '<h2 class="display-4 mb-3 %2$s">%1$s</h2>',

      'subtitle' => 'We are trusted by over 5000+ clients. Join them by using our services and grow your business.',
      'patternSubtitle' => '<p class="lead fs-lg mb-6 px-xl-10 px-xxl-15 %2$s">%1$s</p>',

      'background_class_default' => 'wrapper bg-light',
      'divider' => true,

   )
);
?>


<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo $block->section_class; ?> <?php echo esc_html($args['block_class']); ?>" <?php echo $block->background_data; ?>>
   <div class="container py-14 py-md-16 text-center">
      <div class="row">
         <div class="col-md-9 col-lg-7 col-xl-7 mx-auto text-center">
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
      </div>
      <!-- /.row -->
      <div class="row">
         <div class="col-md-6 col-lg-5 col-xl-4 mx-auto">
            <div class="newsletter-wrapper">
               <!-- Begin Mailchimp Signup Form -->
               <div id="mc_embed_signup2">
                  <form action="https://elemisfreebies.us20.list-manage.com/subscribe/post?u=aa4947f70a475ce162057838d&amp;id=b49ef47a9a" method="post" id="mc-embedded-subscribe-form2" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                     <div id="mc_embed_signup_scroll2">
                        <div class="mc-field-group input-group form-floating">
                           <input type="email" value="" name="EMAIL" class="required email form-control" placeholder="Email Address" id="mce-EMAIL2">
                           <label for="mce-EMAIL2">Email Address</label>
                           <input type="submit" value="Join" name="subscribe" id="mc-embedded-subscribe2" class="btn btn-primary">
                        </div>
                        <div id="mce-responses2" class="clear">
                           <div class="response" id="mce-error-response2" style="display:none"></div>
                           <div class="response" id="mce-success-response2" style="display:none"></div>
                        </div> <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_ddc180777a163e0f9f66ee014_4b1bcfa0bc" tabindex="-1" value=""></div>
                        <div class="clear"></div>
                     </div>
                  </form>
               </div>
               <!--End mc_embed_signup-->
            </div>
            <!-- /.newsletter-wrapper -->
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