<?php

//* --- Settings Class ACF---

class CW_Section_Settings
{
   public $cw_settings;

   public $patterntitle;
   public $patternsubtitle;
   public $patternparagraph;

   public function __construct($cw_settings)
   {
      $this->root_theme = get_template_directory_uri();
      $this->cw_settings = $cw_settings;
      $this->title = $this->cw_get_title();
   }
}
