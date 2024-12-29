<?php

//* ---Background Class ACF---

class CW_Shape
{
   public $shape_type;
   public $shape_color;
   public $shape_size;
   public $size_height;
   public $shape_svg;
   public $shape_doodle;
   public $shape_form;
   public $shape_position;
   public $final_shape;

   public function __construct($shape_type, $shape_color, $shape_size, $shape_svg, $shape_form, $shape_position, $shape_doodle)
   {
      $this->shape_type = $this->cw_shape_type($shape_type);
      $this->shape_color = $this->cw_shape_color($shape_color);
      $this->shape_svg = $this->cw_shape_svg($shape_svg);
      $this->shape_doodle = $this->cw_shape_doodle($shape_doodle);
      $this->shape_size = $this->cw_shape_size($shape_size);
      $this->shape_form = $this->cw_shape_form($shape_form);
      $this->shape_position = $this->cw_shape_position($shape_position);
      $this->final_shape = $this->cw_final_shape();
   }


   //Type
   public function cw_shape_type($shape_type = NULL)
   {
      if ($shape_type !== NULL) {
         $cw_shape_type = $shape_type;
      } elseif (get_sub_field('cw_type_shape')) {
         $cw_shape_type = get_sub_field('cw_type_shape');
      } else {
         $cw_shape_type = NULL;
      }
      return $cw_shape_type;
   }

   //Type
   public function cw_shape_form($shape_form)
   {
      if ($shape_form !== NULL) {
         $cw_shape_form = $shape_form;
      } elseif (get_sub_field('cw_form')) {
         $cw_shape_form = get_sub_field('cw_form');
      } else {
         $cw_shape_form = NULL;
      }
      return $cw_shape_form;
   }

   //Color
   public function cw_shape_color($shape_color)
   {
      $cw_shape_color_object = new CW_Color(NULL, NULL);
      $cw_shape_color = $cw_shape_color_object->color;
      return $cw_shape_color;
   }

   //SVG
   public function cw_shape_svg($shape_svg)
   {
      if ($shape_svg !== NULL) {
         $cw_shape_svg = get_template_directory_uri() . '/dist/img/svg/' . $shape_svg . '.svg';
      } elseif (get_sub_field('cw_svg')) {
         $cw_shape_svg = get_template_directory_uri() . '/dist/img/svg/' . get_sub_field('cw_svg') . '.svg';
      } else {
         $cw_shape_svg = NULL;
      }

      return $cw_shape_svg;
   }

   //Doodle
   public function cw_shape_doodle($shape_doodle)
   {
      if ($shape_doodle !== NULL) {
         $cw_shape_doodle = get_template_directory_uri() . '/dist/img/svg/' . $shape_doodle . '.svg';
      } elseif (get_sub_field('cw_svg')) {
         $cw_shape_doodle = get_template_directory_uri() . '/dist/img/svg/' . get_sub_field('cw_doodles') . '.svg';
      } else {
         $cw_shape_doodle = NULL;
      }

      return  $cw_shape_doodle;
   }

   //Size
   public function cw_shape_size($shape_size)
   {
      if ($shape_size !== NULL) {
         $cw_shape_size = $shape_size;
      } elseif (get_sub_field('cw_width') && get_sub_field('cw_height')) {
         $cw_shape_width = get_sub_field('cw_width');
         $cw_shape_height = get_sub_field('cw_height');
         $cw_shape_size_array = array();
         if ($cw_shape_width !== 'none') {
            $cw_shape_size_array[] = 'w-' . $cw_shape_width;
         }
         if ($cw_shape_height !== 'none') {
            $cw_shape_size_array[] = 'h-' . $cw_shape_height;
         }
         $cw_shape_size = implode(' ', $cw_shape_size_array);
      } else {
         $cw_shape_size = NULL;
      }

      return $cw_shape_size;
   }

   //Position
   public function cw_shape_position($shape_position)
   {
      if ($shape_position !== NULL) {
         $cw_shape_position = $shape_position;
      } else {
         if (have_rows('cw_position_x')) :
            while (have_rows('cw_position_x')) : the_row();
               $cw_shape_position_x = get_sub_field('position') . ': ' . get_sub_field('number');
            endwhile;
         else :
            $cw_shape_position_y = 'left: 0';
         endif;


         if (have_rows('cw_position_y')) :
            while (have_rows('cw_position_y')) : the_row();
               $cw_shape_position_y = get_sub_field('position') . ': ' . get_sub_field('number');
            endwhile;
         else :
            $cw_shape_position_x = 'top: 0';
         endif;
      }

      $cw_shape_position = 'style="' . $cw_shape_position_x . '; ' . $cw_shape_position_y . '; z-index: 0;"';
      return $cw_shape_position;
   }

   //Final
   public function cw_final_shape()
   {
      if ($this->shape_type == 'Dot') {
         $type = 'bg-dot';
         if ($this->shape_color) {
            $color = $this->shape_color;
         }
         if ($this->shape_form == 'Circle') {
            $form = 'rounded-circle';
         } elseif ($this->shape_form == 'Rounded') {
            $form = 'rounded';
         } else {
            $form = NULL;
         }
         $final_settings = $type . ' ' . $color . ' ' . $form;
      } elseif ($this->shape_type == 'Line') {
         $type = 'bg-line';
         if ($this->shape_color) {
            $color = $this->shape_color;
         }
         if ($this->shape_form == 'Circle') {
            $form = 'rounded-circle';
         } elseif ($this->shape_form == 'Rounded') {
            $form = 'rounded';
         } else {
            $form = NULL;
         }
         $final_settings = $type . ' ' . $color . ' ' . $form;
      } elseif ($this->shape_type == 'Solid') {

         if ($this->shape_color) {
            $color = 'bg-' . $this->shape_color;
         }
         if ($this->shape_form == 'Circle') {
            $form = 'rounded-circle';
         } elseif ($this->shape_form == 'Rounded') {
            $form = 'rounded';
         } else {
            $form = NULL;
         }
         $final_settings =  $color . ' ' . $form;
      } elseif ($this->shape_type == 'SVG') {
         if ($this->shape_color) {
            $color = $this->shape_color;
         }
         $final_settings = $color;
      } else {
         $final_settings = NULL;
      }

      if ($this->shape_position) {
         $position = $this->shape_position;
      } else {
         $position = NULL;
      }

      if ($this->shape_size) {
         $size = $this->shape_size;
      } else {
         $size = NULL;
      }

      if ($this->size_height) {
         $size_height = $this->size_height;
      } else {
         $size_height = NULL;
      }



      if ($this->shape_svg) {
         $link = $this->shape_svg;
      } else {
         $link = '#';
      }

      if ($this->shape_doodle) {
         $link_doodle = $this->shape_doodle;
      } else {
         $link_doodle = '#';
      }


      if ($this->shape_type == 'Doodles') {
         $cw_shape_final = '<img src="' . $link_doodle . '" class="position-absolute ' . $size . ' d-none d-lg-block" alt="" ' . $position . '>';
      } elseif ($this->shape_type !== 'SVG') {
         $cw_shape_final = '<div class="shape rellax ' . $final_settings . ' ' . $size . '" data-rellax-speed="1" ' . $position . '></div>';
      } elseif ($this->shape_type == NULL) {
         $cw_shape_final = NULL;
      } else {
         $cw_shape_final = '<div class="shape rellax ' . $final_settings . ' ' . $size . '" data-rellax-speed="1" ' . $position . '><img src="' . $link . '" class="svg-inject icon-svg w-100 h-100" alt="" /></div>';
      }
      return $cw_shape_final;
   }
}


class CW_Shapes
{
   public $final_shapes;
   public function __construct()
   {
      $this->final_shapes = $this->cw_final_shapes();
   }

   //Shapes
   public function cw_final_shapes()
   {
      if (have_rows('cw_shapes')) {
         $cw_shape_array = array();
         while (have_rows('cw_shapes')) : the_row();
            $cw_shape_object = new CW_Shape(NULL, NULL, NULL, NULL, NULL, NULL, NULL);
            $cw_shape_array[] = $cw_shape_object->final_shape;
         endwhile;
         $cw_final_shapes = implode('', $cw_shape_array);
      } else {
         $cw_final_shapes = NULL;
      }

      return $cw_final_shapes;
   }
}
