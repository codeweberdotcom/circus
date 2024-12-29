<?php

/**
 * CW Buttons
 */
$hero = new CW_Settings(
   $cw_settings = array(
      'buttons_pattern' => '<div class="d-flex justify-content-center justify-content-lg-start flex-wrap" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">
      %s
      </div>',
      'buttons' => '<span><a href="#" class="btn btn-lg btn-white rounded-pill me-2">Explore Now</a></span><span><a href="#" class="btn btn-lg btn-outline-white rounded-pill">Contact Us</a></span>'
   )
);

echo $hero->buttons;
