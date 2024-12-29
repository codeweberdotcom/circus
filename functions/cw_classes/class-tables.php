<?php

//* ---Image Class ACF---

class CW_Tables
{
   public $root_theme;
   public $color_table;
   public $class_table;
   public $responsive_table;
   public $final_table;

   public function __construct(
      $color_table,
      $class_table,
      $demo_table
   ) {

      $this->root_theme = get_template_directory_uri();

      $this->color_table = $this->cw_color_table($color_table);
      $this->class_table = $this->cw_class_table($class_table);
      $this->responsive_table = $this->cw_responsive_table();
      $this->final_table = $this->cw_final_table($demo_table);
   }

   //Color table
   public function
   cw_color_table($color_table)
   {
      if (have_rows('table')) {
         while (have_rows('table')) {
            the_row();
            if (get_sub_field('color') !== 'Default') {
               $cw_color_table = 'table-' . get_sub_field('color');
            } else {
               $cw_color_table = NULL;
            }
         }
      } else {
         $cw_color_table = NULL;
      }
      return $cw_color_table;
   }

   //Class table
   public function
   cw_class_table($class_table)
   {
      $class_table_array = array();
      if (have_rows('table')) {
         while (have_rows('table')) {
            the_row();
            $class_table_array = array();
            if (get_sub_field('striped') == 1) {
               $class_table_array[] = 'table-striped';
            }
            if (get_sub_field('bordered') == 1) {
               $class_table_array[] = 'table-bordered';
            }
            if (get_sub_field('borderless') == 1) {
               $class_table_array[] = 'table-borderless';
            }
            if (get_sub_field('hoverable_rows') == 1) {
               $class_table_array[] = 'table-hover';
            }
         }
      }
      $cw_class_table = implode(' ', $class_table_array);

      return $cw_class_table;
   }


   //Responsive table
   public function
   cw_responsive_table()
   {
      if (have_rows('table')) {
         while (have_rows('table')) {
            the_row();
            if (get_sub_field('responsive') == 1) {
               $cw_responsive_table = 'true';
            } else {
               $cw_responsive_table = 'false';
            }
         }
      } else {
         $cw_responsive_table = 'true';
      }
      return $cw_responsive_table;
   }

   //Final table
   public function
   cw_final_table($demo_table)
   {
      if ($demo_table !== NULL) {
         $cw_final_table = $demo_table;
      } else {
         $class_table = $this->class_table;
         $color_table = $this->color_table;
         if (have_rows('table')) {
            while (have_rows('table')) {
               the_row();
               $table = get_sub_field('table');
               if ($table) {

                  $cw_final_table = '';
                  if ($this->responsive_table == 'true') {
                     $cw_final_table .= '<div class="table-responsive">';
                  } else {
                     $cw_final_table .= NULL;
                  }

                  $cw_final_table = '<table class="table ' . $class_table . ' ' . $color_table . '">';
                  if ($table['header']) {
                     $cw_final_table .= '<thead><tr>';
                     $cw_final_table .= '';
                     foreach ($table['header'] as $th) {
                        $cw_final_table .= '<th>';
                        $cw_final_table .= $th['c'];
                        $cw_final_table .= '</th>';
                     }
                     $cw_final_table .= '</tr>';
                     $cw_final_table .= '</thead>';
                  }

                  $cw_final_table .= '<tbody>';
                  foreach ($table['body'] as $tr) {
                     $cw_final_table .= '<tr>';
                     foreach ($tr as $td) {
                        $cw_final_table .= '<td>' . $td['c'] . '</td>';
                     }
                     $cw_final_table .= '</tr>';
                  }
                  $cw_final_table .= '</tbody>';
                  $cw_final_table .= '</table>';
                  if ($this->responsive_table == 'true') {
                     $cw_final_table .= '</div>';
                  } else {
                     $cw_final_table .= NULL;
                  }
               } else {
                  $cw_final_table = NULL;
               }
            }
         } else {
            $cw_final_table = NULL;
         }
      }

      return $cw_final_table;
   }
}
