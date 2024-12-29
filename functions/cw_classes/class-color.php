<?php

//* ---Typography Class ACF---

class CW_Color
{
   public $color;
   public $bg_color;

   public function __construct($color, $bg_color)
   {
      $this->color = $this->cw_color($color);
      $this->bg_color = $this->cw_background_color($bg_color);
   }

   public function cw_color($color)
   {
      if (have_rows('color')) :
         while (have_rows('color')) : the_row();
            $type_color = get_sub_field('select_type_color');
            if ($type_color == 'Solid') :
               $color = get_sub_field('select_solid_color');
            elseif ($type_color == 'Soft') :
               $color = 'soft-' . get_sub_field('select_solid_color');
            //$this->base_color_icon = get_sub_field('select_solid_color'); 
            elseif ($type_color == 'Pale') :
               $color = 'pale-' . get_sub_field('select_solid_color');
            elseif ($type_color == 'Gradient') :
               $color =  'gradient ' . get_sub_field('gradient_color');
            elseif ($type_color == 'None') :
               $color = 'none';
            else :
               $color = 'none';
            endif;
         endwhile;
      else :
         $color = 'none';
      endif;

      return $color;
   }

   public function cw_background_color($bg_color)
   {
      if (have_rows('color')) :
         while (have_rows('color')) : the_row();
            $type_color = get_sub_field('select_type_color');
            if ($type_color == 'Solid') :
               $color = 'bg-' . get_sub_field('select_solid_color');
            elseif ($type_color == 'Soft') :
               $color = 'bg-soft-' . get_sub_field('select_solid_color');
            //$this->base_color_icon = get_sub_field('select_solid_color'); 
            elseif ($type_color == 'Pale') :
               $color = 'bg-pale-' . get_sub_field('select_solid_color');
            elseif ($type_color == 'Gradient') :
               $color =  get_sub_field('gradient_color');
            elseif ($type_color == 'None') :
               if ($bg_color !== NULL) {
                  $color = $bg_color;
               } else {
                  $color = 'none';
               }
            else :
               $color = 'none';
            endif;
         endwhile;
      else :
         $color = 'none';
      endif;

      return $color;
   }
}
