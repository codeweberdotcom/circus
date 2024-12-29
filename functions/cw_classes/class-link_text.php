<?php

//* ---Link text---

class CW_LinkText
{
   public $link_type;
   public $link_text;
   public $link_color;
   public $link;

   public $link_final;

   public function __construct($link_type, $link_text, $link_color, $link)
   {
      $this->link_type = $this->cw_link_type($link_type);
      $this->link_text = $this->cw_link_text($link_text);
      $this->link_color = $this->cw_link_color($link_color);
      $this->link = $this->cw_link();


      $this->link_final = $this->cw_link_final($link);
   }

   //link_type
   public function cw_link_type($link_type)
   {
      if (have_rows('cw_links')) :
         while (have_rows('cw_links')) : the_row();
            $link_type = get_sub_field('cw_type_link');
         endwhile;
      else :
         $link_type = NULL;
      endif;

      return $link_type;
   }

   //link_text
   public function cw_link_text($link_text)
   {
      if (have_rows('cw_links')) :
         while (have_rows('cw_links')) : the_row();
            $link_text = get_sub_field('cw_text_link');
         endwhile;
      else :
         $link_text = 'Link example';
      endif;
      return $link_text;
   }

   //link_color
   public function cw_link_color()
   {
      if (have_rows('cw_links')) :
         while (have_rows('cw_links')) : the_row();
            $color = new CW_Color(NULL, NULL);
            $link_color = $color->color;
         endwhile;
      else :
         $link_color = NULL;
      endif;
      return $link_color;
   }

   //link
   public function cw_link()
   {

      $link = NULL;

      return $link;
   }

   //Features_list
   public function cw_link_final($link)
   {
      $link_type = $this->link_type;
      $link_color = $this->link_color;
      if ($link_color) {
         $link_color = 'link-' . $link_color;
      }
      $link_text = $this->link_text;
      $link = $this->link;

      if ($link_type == 'Link 1') {
         $link_pattern = '<a href="%1$s" class="hover link-body %3$s">%2$s</a>';
      } elseif ($link_type == 'Link 2') {
         $link_pattern = '<a href="%1$s" class="hover %3$s">%2$s</a>';
      } elseif ($link_type == 'Link 3') {
         $link_pattern = '<a href="%1$s" class="hover more %3$s">%2$s</a>';
      } elseif ($link_type == 'Link 4') {
         $link_pattern = '<a href="%1$s" class="hover-2 link-body %3$s">%2$s</a>';
      } elseif ($link_type == 'Link 5') {
         $link_pattern = '<a href="%1$s" class="hover-2 %3$s">%2$s</a>';
      } elseif ($link_type == 'Link 6') {
         $link_pattern = '<a href="%1$s" class="hover-2 more %3$s">%2$s</a>';
      } elseif ($link_type == 'Link 7') {
         $link_pattern = '<a href="%1$s" class="hover-3 link-body %3$s">%2$s</a>';
      } elseif ($link_type == 'Link 8') {
         $link_pattern = '<a href="%1$s" class="hover-3 %3$s">%2$s</a>';
      } elseif ($link_type == 'Link 9') {
         $link_pattern = '<a href="%1$s" class="hover-3 more %3$s">%2$s</a>';
      } else {
         $link_pattern = NULL;
      }

      if ($link_type !== 'none') {
         $link_final = sprintf($link_pattern, $link, $link_text, $link_color);
      } else {
         $link_final = NULL;
      }

      return $link_final;
   }
}
