<?php

//* ---Typography Class ACF---

class CW_Column
{
   public $column_width;
   public $column_offset;
   public $column_order;
   public $column_class;
   public $column_id;
   public $column_final_class;


   public function __construct($column_width, $column_offset, $column_order, $column_class, $column_id, $column_final_class)
   {
      $this->column_width = $this->cw_column_width($column_width);
      $this->column_offset = $this->cw_column_offset($column_offset);
      $this->column_order = $this->cw_column_order($column_order);
      $this->column_class = $this->cw_column_class($column_class);
      $this->column_id = $this->cw_column_id($column_id);

      $this->column_final_class = $this->cw_column_final_class($column_final_class);
   }

   public function cw_column_class($column_class)
   {

      if (have_rows('cw_column')) {
         while (have_rows('cw_column')) {
            the_row();
            if (get_sub_field('cw_class')) {
               $cw_column_class = get_sub_field('cw_class');
            } else {
               $cw_column_class = NULL;
            }
         }
      }
      return $cw_column_class;
   }

   public function cw_column_id($column_id)
   {
      if (have_rows('cw_column')) {
         while (have_rows('cw_column')) {
            if (get_sub_field('cw_id')) {
               $cw_column_id = get_sub_field('cw_id');
            } else {
               $cw_column_id = NULL;
            }
         }
      }
      return $cw_column_id;
   }

   public function cw_column_width($column_width)
   {
      if (have_rows('cw_column')) {
         while (have_rows('cw_column')) {
            $cw_column_width = array();
            if (have_rows('cw_width')) :
               while (have_rows('cw_width')) : the_row();
                  if (get_sub_field('cw_column_base')) {
                     $cw_column_width[] = 'col-' . get_sub_field('cw_column_base');
                  }
                  if (get_sub_field('cw_column_sm')) {
                     $cw_column_width[] = 'col-sm-' . get_sub_field('cw_column_sm');
                  }
                  if (get_sub_field('cw_column_md')) {
                     $cw_column_width[] = 'col-md-' . get_sub_field('cw_column_md');
                  }
                  if (get_sub_field('cw_column_lg')) {
                     $cw_column_width[] = 'col-lg-' . get_sub_field('cw_column_lg');
                  }
                  if (get_sub_field('cw_column_xl')) {
                     $cw_column_width[] = 'col-xl-' . get_sub_field('cw_column_xl');
                  }
                  if (get_sub_field('cw_column_xxl')) {
                     $cw_column_width[] = 'col-xxl-' . get_sub_field('cw_column_xxl');
                  }

                  $cw_column_width = implode(' ', $cw_column_width);
               endwhile;
            endif;
         }
      }
      return $cw_column_width;
   }

   public function cw_column_offset($column_offset)
   {
      if (have_rows('cw_column')) {
         while (have_rows('cw_column')) {
            $cw_column_offset = array();
            if (have_rows('cw_offset')) :
               while (have_rows('cw_offset')) : the_row();
                  if (get_sub_field('cw_column_base')) {
                     $cw_column_offset[] = 'offset-' . get_sub_field('cw_column_base');
                  }
                  if (get_sub_field('cw_column_sm')) {
                     $cw_column_offset[] = 'offset-sm-' . get_sub_field('cw_column_sm');
                  }
                  if (get_sub_field('cw_column_md')) {
                     $cw_column_offset[] = 'offset-md-' . get_sub_field('cw_column_md');
                  }
                  if (get_sub_field('cw_column_lg')) {
                     $cw_column_offset[] = 'offset-lg-' . get_sub_field('cw_column_lg');
                  }
                  if (get_sub_field('cw_column_xl')) {
                     $cw_column_offset[] = 'offset-xl-' . get_sub_field('cw_column_xl');
                  }
                  if (get_sub_field('cw_column_xxl')) {
                     $cw_column_offset[] = 'offset-xxl-' . get_sub_field('cw_column_xxl');
                  }

                  $cw_column_offset = implode(' ', $cw_column_offset);
               endwhile;
            endif;
         }
      }
      return $cw_column_offset;
   }


   public function cw_column_order($column_order)
   {
      if (have_rows('cw_column')) {
         while (have_rows('cw_column')) {
            $cw_column_order = array();
            if (have_rows('cw_order')) :
               while (have_rows('cw_order')) : the_row();
                  if (get_sub_field('cw_column_base')) {
                     $cw_column_order[] = 'order-' . get_sub_field('cw_column_base');
                  }
                  if (get_sub_field('cw_column_sm')) {
                     $cw_column_order[] = 'order-sm-' . get_sub_field('cw_column_sm');
                  }
                  if (get_sub_field('cw_column_md')) {
                     $cw_column_order[] = 'order-md-' . get_sub_field('cw_column_md');
                  }
                  if (get_sub_field('cw_column_lg')) {
                     $cw_column_order[] = 'order-lg-' . get_sub_field('cw_column_lg');
                  }
                  if (get_sub_field('cw_column_xl')) {
                     $cw_column_order[] = 'order-xl-' . get_sub_field('cw_column_xl');
                  }
                  if (get_sub_field('cw_column_xxl')) {
                     $cw_column_order[] = 'order-xxl-' . get_sub_field('cw_column_xxl');
                  }

                  $cw_column_order = implode(' ', $cw_column_order);
               endwhile;
            endif;
         }
      }
      return $cw_column_order;
   }

   public function cw_column_final_class($column_final_class)
   {
      if ($this->column_class !== NULL) {
         $cw_column_final_class = $this->column_class;
      } elseif ($this->column_width || $this->column_offset || $this->column_order) {
         $cw_column_final_class_array = array();
         if ($this->column_width) {
            $cw_column_final_class_array[] = $this->column_width;
         }
         if ($this->column_offset) {
            $cw_column_final_class_array[] = $this->column_offset;
         }
         if ($this->column_order) {
            $cw_column_final_class_array[] = $this->column_order;
         }
         $cw_column_final_class = implode(' ', $cw_column_final_class_array);
      } else {
         $cw_column_final_class = $column_final_class;
      }

      return $cw_column_final_class;
   }
}
