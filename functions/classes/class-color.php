<?php
//* --- Color Class ACF---

class Color
{
   public $color_icon = 'primary';
   public $base_color_icon = 'primary';
   public function ColorIcon()
   {
      if (have_rows('type_color')) :
         while (have_rows('type_color')) : the_row();
            $type_color = get_sub_field('select_type_color');
            if ($type_color == 'Solid') :
               $this->color_icon = get_sub_field('theme_btn_solid_color');
            elseif ($type_color == 'Soft') :
               $this->color_icon = 'soft-' . get_sub_field('theme_btn_solid_color');
               $this->base_color_icon = get_sub_field('theme_btn_solid_color');
            elseif ($type_color == 'Gradient') :
               $this->color_icon = get_sub_field('gradient_btn') . ' gradient';
            endif;
         endwhile;
      endif;
   }
}
