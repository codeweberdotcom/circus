<?php

//* ---Typography Class ACF---

class CW_Typography

{
   public $root_theme;
   public $tag;
   public $display;
   public $textdecoration;
   public $textalign;
   public $tiny_headings;
   public $lead;
   public $lists;
   public $blockquote;
   public $dropcap;

   public function __construct($cw_typography)
   {
      $this->root_theme = get_template_directory_uri();
      $this->cw_typography = $cw_typography;

      $this->tag = $this->cw_get_tag();
      // $this->display = $this->cw_get_display();
      // $this->textdecoration = $this->cw_get_textdecoration();
   }

   public function cw_get_tag()
   {
      if (have_rows('typography', $user_id_prefixed)) :
         while (have_rows('typography', $user_id_prefixed)) : the_row();
            $tag = get_sub_field('cw_tag');
         endwhile;
      endif;
      return $tag;
   }

   private function cw_get_display()
   {
   }

   private function cw_get_textdecoration()
   {
   }
}
