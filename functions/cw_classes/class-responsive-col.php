<?php

//* ---Responsive col---

class CW_Responsive_col
{
   public $responsive_class_base;
   public $responsive_class_sm;
   public $responsive_class_md;
   public $responsive_class_lg;
   public $responsive_class_xl;
   public $responsive_class_xxl;

   public $responsive_class_final;

   public function __construct($responsive_class_base, $responsive_class_sm, $responsive_class_md, $responsive_class_lg, $responsive_class_xl, $responsive_class_xxl)
   {
      $this->responsive_class_base = $this->cw_responsive_class_base($responsive_class_base);
      $this->responsive_class_sm = $this->cw_responsive_class_sm($responsive_class_sm);
      $this->responsive_class_md = $this->cw_responsive_class_md($responsive_class_md);
      $this->responsive_class_lg = $this->cw_responsive_class_lg($responsive_class_lg);
      $this->responsive_class_xl = $this->cw_responsive_class_xl($responsive_class_xl);
      $this->responsive_class_xxl = $this->cw_responsive_class_xxl($responsive_class_xxl);
      $this->responsive_class_final = $this->cw_responsive_class_final();
   }


   //Responsive_class_base
   public function cw_responsive_class_base($responsive_class_base)
   {
      if ($responsive_class_base !== NULL) {
         $cw_responsive_class_base = 'col-' . $responsive_class_base;
      } elseif (get_sub_field('cw_column_base')) {
         $cw_responsive_class_base = 'col-' . get_sub_field('cw_column_base');
      } else {
         $cw_responsive_class_base = NULL;
      }
      return $cw_responsive_class_base;
   }

   //Responsive_class_sm
   public function cw_responsive_class_sm($responsive_class_sm)
   {
      if ($responsive_class_sm !== NULL) {
         $cw_responsive_class_sm = 'col-' . $responsive_class_sm;
      } elseif (get_sub_field('cw_column_sm')) {
         $cw_responsive_class_sm = 'col-sm-' . get_sub_field('cw_column_sm');
      } else {
         $cw_responsive_class_sm = NULL;
      }
      return $cw_responsive_class_sm;
   }


   //Responsive_class_md
   public function cw_responsive_class_md($responsive_class_md)
   {
      if ($responsive_class_md !== NULL) {
         $cw_responsive_class_md = 'col-' . $responsive_class_md;
      } elseif (get_sub_field('cw_column_md')) {
         $cw_responsive_class_md = 'col-md-' . get_sub_field('cw_column_md');
      } else {
         $cw_responsive_class_md = NULL;
      }
      return $cw_responsive_class_md;
   }

   //Responsive_class_lg
   public function cw_responsive_class_lg($responsive_class_lg)
   {
      if ($responsive_class_lg !== NULL) {
         $cw_responsive_class_lg = 'col-' . $responsive_class_lg;
      } elseif (get_sub_field('cw_column_lg')) {
         $cw_responsive_class_lg = 'col-lg-' . get_sub_field('cw_column_lg');
      } else {
         $cw_responsive_class_lg = NULL;
      }
      return $cw_responsive_class_lg;
   }

   //Responsive_class_xl
   public function cw_responsive_class_xl($responsive_class_xl)
   {
      if ($responsive_class_xl !== NULL) {
         $cw_responsive_class_xl = 'col-' . $responsive_class_xl;
      } elseif (get_sub_field('cw_column_xl')) {
         $cw_responsive_class_xl = 'col-xl-' . get_sub_field('cw_column_xl');
      } else {
         $cw_responsive_class_xl = NULL;
      }
      return $cw_responsive_class_xl;
   }

   //Responsive_class_xxl
   public function cw_responsive_class_xxl($responsive_class_xxl)
   {
      if ($responsive_class_xxl !== NULL) {
         $cw_responsive_class_xxl = 'col-' . $responsive_class_xxl;
      } elseif (get_sub_field('cw_column_xxl')) {
         $cw_responsive_class_xxl = 'col-xxl-' . get_sub_field('cw_column_xxl');
      } else {
         $cw_responsive_class_xxl = NULL;
      }
      return $cw_responsive_class_xxl;
   }


   //Responsive_class_final
   public function cw_responsive_class_final()
   {
      $final_responsive_class_array = array();

      if ($this->responsive_class_base) {
         $final_responsive_class_array[] = $this->responsive_class_base;
      }
      if ($this->responsive_class_sm) {
         $final_responsive_class_array[] = $this->responsive_class_sm;
      }
      if ($this->responsive_class_md) {
         $final_responsive_class_array[] = $this->responsive_class_md;
      }
      if ($this->responsive_class_lg) {
         $final_responsive_class_array[] = $this->responsive_class_lg;
      }
      if ($this->responsive_class_xl) {
         $final_responsive_class_array[] = $this->responsive_class_xl;
      }
      if ($this->responsive_class_xxl) {
         $final_responsive_class_array[] = $this->responsive_class_xxl;
      }

      $cw_responsive_class_final = implode(' ', $final_responsive_class_array);

      return $cw_responsive_class_final;
   }
}
