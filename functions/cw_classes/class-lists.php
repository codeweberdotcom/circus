<?php

//---Lists---

class CW_List
{
   public $list_type;
   public $list_color;
   public $list_icon;
   public $list_class;
   public $list_responsive_class;
   public $lists_final;

   public function __construct($list_type, $list_color, $list_icon, $list_class, $lists_final)
   {
      $this->list_type = $this->cw_list_type($list_type);
      $this->list_color = $this->cw_list_color($list_color);
      $this->list_icon = $this->cw_list_icon($list_icon);
      $this->list_class = $this->cw_list_class($list_class);
      $this->lists_final = $this->cw_list_final($lists_final);
   }


   //list_type
   public function cw_list_type($list_type)
   {
      if (get_sub_field('cw_type_list')) {
         $cw_list_type = get_sub_field('cw_type_list');
      } elseif ($list_type !== NULL) {
         $cw_list_type = $list_type;
      } else {
         $cw_list_type = NULL;
      }
      return $cw_list_type;
   }



   //list_color
   public function cw_list_color($list_color)
   {
      $color_object = new CW_Color(NULL, NULL);
      $cw_list_color = $color_object->color;
      if ($list_color !== NULL) {
         $cw_list_color = $list_color;
      }
      return $cw_list_color;
   }

   //list_icon
   public function cw_list_icon($list_icon)
   {

      if (get_sub_field('cw_icon') &&  get_sub_field('cw_type_list') !== 'type 1') {
         $cw_list_icon = get_sub_field('cw_icon');
      } elseif ($list_icon !== NULL) {
         $cw_list_icon = $list_icon;
      } else {
         $cw_list_icon = NULL;
      }

      return $cw_list_icon;
   }

   //list_class
   public function cw_list_class($list_class)
   {
      $color = $this->list_color;
      $list_class_array = array();
      if ($this->list_type == 'type 1') {
         $list_class_array[] = 'unordered-list';
         $list_class_array[] = 'bullet-' . $color;
         $list_class_array[] = $this->list_responsive_class;
      } elseif ($this->list_type == 'type 2') {
         $list_class_array[] = 'icon-list';
         $list_class_array[] = 'bullet-' . $color;
         $list_class_array[] = $this->list_responsive_class;
      } elseif ($this->list_type == 'type 3') {
         $list_class_array[] = 'icon-list';
         $list_class_array[] = 'bullet-bg bullet-' . $color;
      } elseif ($list_class !== NULL) {
         $list_class_array[] = $list_class;
      } else {
         $cw_list_class = NULL;
      }
      $cw_list_class = implode(' ', $list_class_array);
      return $cw_list_class;
   }

   //list_final
   public function cw_list_final($lists_final)
   {
      //$count = count(get_sub_field('cw_list'));
      $cw_lists_final = '';

      if (have_rows('cw_list')) {
         $cw_lists_final .= '<ul class="' . $this->list_class . '">';
         while (have_rows('cw_list')) {
            the_row();
            $cw_lists_final .= '<li>';
            if ($this->list_type !== 'type 1') {
               $cw_lists_final .= '<span>' . $this->list_icon . '</span>';
               $cw_lists_final .= '<span>' . get_sub_field('cw_text') . '</span>';
            } else {
               $cw_lists_final .= get_sub_field('cw_text');
            }
            $cw_lists_final .= '</li>';
         }
         $cw_lists_final .= '</ul>';
      }
      return $cw_lists_final;
   }
}


class CW_ListCol
{
   public $list_type;
   public $list_color;
   public $list_icon;
   public $list_class;
   public $list_responsive_class;
   public $listcol_final;

   public function __construct($list_type, $list_color, $list_icon, $list_class, $listcol_final, $row_class, $row_id)
   {
      $this->list_responsive_class = $this->cw_list_responsive_class();
      $this->listcol_final = $this->cw_listcol_final($list_type, $list_color, $list_icon, $list_class, $listcol_final, $row_class, $row_id);
   }


   //list_type
   public function cw_list_responsive_class()
   {
      if (have_rows('cw_list')) {
         while (have_rows('cw_list')) {
            the_row();
            if (have_rows('responsive_settings')) :
               while (have_rows('responsive_settings')) : the_row();
                  $cw_responsive_object = new CW_Responsive_col(NULL, NULL, NULL, NULL, NULL, NULL, NULL);
               endwhile;
            endif;
         }
      }
      $cw_responsive_class = $cw_responsive_object->responsive_class_final;
      return $cw_responsive_class;
   }



   //list_col_final
   public function cw_listcol_final($list_type, $list_color, $list_icon, $list_class,  $listcol_final, $row_class, $row_id)
   {
      $cw_listcol_final = array();
      if (have_rows('cw_list')) {
         while (have_rows('cw_list')) {
            the_row();
            if (is_array(get_sub_field('cw_list_column'))) {
               $count_col = count(get_sub_field('cw_list_column'));
            }
         }
      }

      if (have_rows('cw_list')) {
         while (have_rows('cw_list')) {
            the_row();
            if (get_sub_field('cw_class')) {
               $class_row = ' ' . get_sub_field('cw_class');
            } elseif ($row_class !== NULL) {
               $class_row = ' ' . $row_class;
            } else {
               $class_row = NULL;
            }
         }
      }

      if (have_rows('cw_list')) {
         while (have_rows('cw_list')) {
            the_row();
            if (get_sub_field('cw_id')) {
               $id_row = 'id="' . get_sub_field('cw_id') . '"';
            } elseif ($row_class !== NULL) {
               $id_row = 'id="' . $row_id . '"';
            } else {
               $id_row = NULL;
            }
         }
      }

      if (have_rows('cw_list')) {
         while (have_rows('cw_list')) {
            the_row();
            if (have_rows('cw_list_column') && $count_col >= 1) {
               $cw_listcol_final[] = '<div class="row' . $class_row . '" ' . $id_row . '>';
            }
         }
      }

      if (have_rows('cw_list')) {
         while (have_rows('cw_list')) {
            the_row();
            if (have_rows('cw_list_column')) {
               while (have_rows('cw_list_column')) {
                  the_row();
                  $cw_listcol_final[] = '<div class="' . $this->list_responsive_class . '">';
                  $cw_list_object = new CW_List($list_type, $list_color, $list_icon, $list_class,  $listcol_final);
                  $cw_listcol_final[] = $cw_list_object->lists_final;
                  $cw_listcol_final[] = '</div>';
               }
            }
         }
      }

      if (have_rows('cw_list')) {
         while (have_rows('cw_list')) {
            the_row();
            if (have_rows('cw_list_column') && $count_col >= 1) {
               $cw_listcol_final[] = '</div>';
            }
         }
      }

      $cw_listcol_finals = implode('', $cw_listcol_final);

      return $cw_listcol_finals;
   }
}
