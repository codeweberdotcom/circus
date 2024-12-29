<?php

//* ---Columns_Two---

class CW_Columns_Two
{
   public $column_class_1;
   public $column_class_2;
   public $column_mirror;

   public function __construct($column_class_1, $column_class_2, $column_mirror)
   {
      $this->column_mirror = $this->cw_column_mirror($column_mirror);
      $this->column_class_1 = $this->cw_column_class_1($column_class_1, $column_class_2);
      $this->column_class_2 = $this->cw_column_class_2($column_class_1, $column_class_2);
   }

   public function cw_column_class_1($column_class_1, $column_class_2)
   {
      if ($this->column_mirror == true) {
         if (get_sub_field('cw_column_class_1')) {
            $cw_column_class_1 = get_sub_field('cw_column_class_1');
         } elseif ($column_class_1) {
            $cw_column_class_1 = $column_class_1;
         } else {
            $cw_column_class_1 = NULL;
         }
      } else {
         if (get_sub_field('cw_column_class_2')) {
            $cw_column_class_1 = get_sub_field('cw_column_class_2');
         } elseif ($column_class_2) {
            $cw_column_class_1 = $column_class_2;
         } else {
            $cw_column_class_1 = NULL;
         }
      }
      return $cw_column_class_1;
   }

   public function cw_column_class_2($column_class_1, $column_class_2)
   {
      if ($this->column_mirror == true) {
         if (get_sub_field('cw_column_class_2')) {
            $cw_column_class_2 = get_sub_field('cw_column_class_2');
         } elseif ($column_class_2) {
            $cw_column_class_2 = $column_class_2;
         } else {
            $cw_column_class_2 = NULL;
         }
      } else {
         if (get_sub_field('cw_column_class_1')) {
            $cw_column_class_2 = get_sub_field('cw_column_class_1');
         } elseif ($column_class_1) {
            $cw_column_class_2 = $column_class_1;
         } else {
            $cw_column_class_2 = NULL;
         }
      }
      return $cw_column_class_2;
   }

   public function cw_column_mirror($column_mirror)
   {
      if (get_sub_field('mirror') == 1) :
         $mirror = true;
      else :
         $mirror = false;
      endif;
      return $mirror;
   }
}
