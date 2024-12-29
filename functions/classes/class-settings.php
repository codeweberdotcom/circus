<?php
//* --- Settings Class ACF---

class Settings
{
   public $root_theme;
   public $title = "Grow Your Business with Our Solutions.";
   public $subtitle = "Hello! This is Sandbox.";
   public $paragraph = 'We help our clients to increase their website traffic, rankings and visibility in search results.';
   public $imageurl = '/dist/img/photos/about18.jpg';
   public $video_url = '/dist/media/movie.mp4';
   public $backgroundurl = '/dist/img/photos/bg4.jpg';
   public $typewriter = 'customer satisfaction,business needs,creative ideas';
   public $backgroundcolor = 'dark';
   public $backgroundcolor_light = 0;
   public $textcolor = 'white';
   public $section_id = NULL;
   public $section_classes = NULL;
   public $column_one = NULL;
   public $column_two = NULL;
   public $style_parameters = NULL;

   public function __construct()
   {
      $this->root_theme = get_template_directory_uri();
      $this->features = new Icons;
      $this->backgroundcolor = $this->cw_get_background_color();
   }

   public function cw_get_background_color()
   {
      if (get_sub_field('dark_or_white_light_or_dark') == 0) :
         $this->backgroundcolor = $this->backgroundcolor;
         $this->textcolor = 'light';
      elseif (get_sub_field('dark_or_white_light_or_dark') == 1) :
         if ($this->backgroundcolor_light == 0) :
            $this->backgroundcolor = $this->backgroundcolor_light;
            $this->textcolor = 'dark';
         else :
            $this->backgroundcolor = $this->backgroundcolor;
            $this->textcolor = 'light';
         endif;
      endif;
   }

   public function GetDataACF()
   {

      if (get_sub_field('mirror') == 0) :
         if (get_sub_field('reverse_mobile') == 1) :
            $this->column_one = 'order-1 order-lg-2';
            $this->column_two = '';
         elseif (get_sub_field('reverse_mobile') == 0) :
            $this->column_one = 'order-lg-2';
            $this->column_two = '';
         endif;
         $this->style_parameters = 'top: -2rem; right: -1.9rem;';
      elseif (get_sub_field('mirror') == 1) :
         if (get_sub_field('reverse_mobile') == 1) :
            $this->column_one = 'order-2 order-lg-1';
            $this->column_two = 'order-1 order-lg-2';
         elseif (get_sub_field('reverse_mobile') == 0) :
            $this->column_one = '';
            $this->column_two = '';
         endif;
         $this->style_parameters = 'top: -2rem; left: -1.9rem;';
      endif;

      if (get_sub_field('title')) :
         $this->title = get_sub_field('title');
      endif;

      if (get_sub_field('subtitle')) :
         $this->subtitle = get_sub_field('subtitle');
      endif;

      if (get_sub_field('paragraph')) :
         $this->paragraph = get_sub_field('paragraph');
      endif;



      /* --- Typewriter --- */
      if (have_rows('typewriter_effect_text')) :
         $typewriterarray = array();
         while (have_rows('typewriter_effect_text')) : the_row();
            array_push($typewriterarray, get_sub_field('text'));
         endwhile;
         $this->typewriter = implode(", ", $typewriterarray);
      endif;

      $background = get_sub_field('background');
      if ($background) :
         $this->backgroundurl = esc_url($background['url']);
      endif;

      $video_url = get_sub_field('video');
      if ($video_url) :
         $this->video_url = $video_url;
      endif;
   }
};
