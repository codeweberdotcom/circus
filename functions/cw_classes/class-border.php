<?php

//* ---Border Class ACF---

class CW_Border
{
   public $border_position;
   public $border_color;
   public $final_border_class;

   public function __construct($border_position, $border_color, $final_border_class)
   {
      $this->border_position = $this->cw_border_position($border_position);
      $this->border_color = $this->cw_border_color($border_color);
      $this->final_border_class = $this->final_border_class($final_border_class);
   }

   //Border Position
   public function cw_border_position($border_position)
   {
      if (get_sub_field('cw_position')) {
         $cw_border_position = 'card-border-' . get_sub_field('cw_position');
      } else {
         $cw_border_position = 'card-border-' . $border_position;
      }
      return $cw_border_position;
   }

   //Border Color
   public function cw_border_color($border_color)
   {
      $color_border_object = new CW_Color(NULL, NULL);
      $border_color = 'border-' . $color_border_object->color;
      return $border_color;
   }

   //Final Class
   public function final_border_class($final_border_class)
   {
      if ($this->border_position !== NULL && $this->border_color !== NULL) {
         $border_class_object = array();
         if ($this->border_position !== NULL) {
            $border_class_object[] = $this->border_position;
         }
         if ($this->border_color !== NULL) {
            $border_class_object[] = $this->border_color;
         }
         $final_border_class = implode(' ', $border_class_object);
      } else {
         $final_border_class = NULL;
      }
      return $final_border_class;
   }
}
