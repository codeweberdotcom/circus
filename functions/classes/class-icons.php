<?php
//* --- Icons Class ACF---

class Icons
{
   public $icon = NULL;
   public $icon_url = NULL;
   public $icon_type = 'Unicons';
   public $iconform = 'btn-circle';
   public $iconnumber = NULL;
   public $iconsize = '';
   public function GetIcon()
   {
      if (have_rows('type_icons')) :
         while (have_rows('type_icons')) : the_row();
            $this->iconsize = get_sub_field('icon_size');
            $this->icon_type = get_sub_field('select_type_icons');
            $this->iconform =  get_sub_field('icon_form');
            $this->iconnumber = get_sub_field('number');
            $this->icon = get_sub_field('icon');
            if (get_sub_field('icon_lineal_svg')) {
               $this->icon_url = get_template_directory_uri() . '/dist/img/icons/lineal/' . get_sub_field('icon_lineal_svg') . '.svg';
            }
         endwhile;
      endif;
   }
   public function GetColorIcon()
   {
      if (have_rows('icon')) : ?>
			<?php while (have_rows('icon')) : the_row();

            if (have_rows('type_color')) :
               while (have_rows('type_color')) : the_row();
                  $type_color = get_sub_field('select_type_color');
                  if ($type_color == 'Solid') :
                     $color_icon = get_sub_field('theme_btn_solid_color');
                     $base_color_icon = get_sub_field('theme_btn_solid_color');
                  elseif ($type_color == 'Soft') :
                     $color_icon = 'soft-' . get_sub_field('theme_btn_solid_color');
                     $base_color_icon = get_sub_field('theme_btn_solid_color');
                  elseif ($type_color == 'Gradient') :
                     $color_icon = get_sub_field('gradient_btn') . ' gradient';
                  endif;
               endwhile;
            endif;
            if (have_rows('type_icons')) :
               while (have_rows('type_icons')) : the_row();
                  $this->iconsize = get_sub_field('icon_size');
                  $this->icon_type = get_sub_field('select_type_icons');
                  $this->iconform = get_sub_field('icon_form');
                  $this->iconnumber = get_sub_field('number');
                  $this->icon = get_sub_field('icon');
                  $this->iconpaddingclass = 'mb-3 pe-none';
                  if (get_sub_field('icon_lineal_svg')) {
                     $this->icon_url = get_template_directory_uri() . '/dist/img/icons/lineal/' . get_sub_field('icon_lineal_svg') . '.svg';
                  }
               endwhile;
            endif;
            if ($this->icon_type == 'Unicons') :
               $icon_block = '<div class="icon btn ' . $this->iconform . ' btn-' . $this->iconsize . ' btn-' . $color_icon . ' ' . $this->iconpaddingclass . ' ">' . $this->icon . '</div>';
               echo $icon_block;
            elseif ($this->icon_type == 'SVG') :
               $icon_block = '<img src="' . $this->icon_url . '" class="svg-inject icon-svg icon-svg-' . $this->iconsize . ' text-' . $base_color_icon . ' ' . $this->iconpaddingclass . '"/>';
               echo $icon_block;
            elseif ($this->icon_type == 'Number') :
               $icon_block = '<span class="icon btn ' . $this->iconform . ' btn-' . $this->iconsize . ' btn-' .   $color_icon . ' ' . $this->iconpaddingclass . '"><span class="number fs-18">' . $this->iconnumber . '</span></span>';
               echo $icon_block;
            elseif ($this->icon_type == 'None') :
            endif;
         endwhile;
      endif;
   }
}
