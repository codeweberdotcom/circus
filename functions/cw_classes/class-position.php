<?php

//* ---Paragraph---

class CW_Position
{
   public $position_x;
   public $position_y;
   public $parametr_x;
   public $parametr_y;
   public $position_final;
   public function __construct($position_x, $position_y, $parametr_x, $parametr_y, $position_final)
   {
      $this->position_final = $this->cw_position_final();
   }

   //Parametr_final
   public function cw_position_final()
   {
      if (have_rows('cw_position_x')) {
         while (have_rows('cw_position_x')) {
            the_row();
            $parameter_one = get_sub_field('position') . ': ' . get_sub_field('number');
         }
      } else {
         $parameter_one = NULL;
      }
      if (have_rows('cw_position_y')) {
         while (have_rows('cw_position_y')) {
            the_row();
            $parameter_two = get_sub_field('position') . ': ' . get_sub_field('number');
         }
      } else {
         $parameter_two = NULL;
      }
      $cw_position_final = 'style="' . $parameter_one . '; ' . $parameter_two . ';"';

      return $cw_position_final;
   }
}
