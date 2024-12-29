<?php

//* ---Buttons Class ACF---

class CW_Button
{
   public $text_button;
   public $shape_button;
   public $size_button;
   public $type_button;
   public $color_button;
   public $link_button;

   public $class_button;
   public $import_class;

   public $icon_button;
   public $id_button;

   public $button_bs_target;

   public $button_url;
   public $button_link_url_target;
   public $button_title_link;
   public $classes_button;
   public $link_object;
   public $link_type;
   public $ghligthbox;

   public $button_data;

   public $final_button;

   public function __construct($import_class, $data)
   {
      $this->text_button = $this->cw_text_button();
      $this->type_button = $this->cw_type_button();
      $this->link_button = $this->cw_link_button();
      $this->icon_button = $this->cw_icon_button();
      $this->shape_button = $this->cw_shape_button();
      $this->class_button = $this->cw_class_button($import_class);
      $this->color_button = $this->cw_color_button();
      $this->size_button = $this->cw_size_button();

      $this->id_button = $this->cw_id_button();
      $this->classes_button  = $this->cw_button_classes($import_class);

      $this->final_button = $this->cw_final_button($import_class, $data);
   }


   //Icon 
   public function cw_icon_button()
   {
      if (have_rows('cw_buttons')) {
         while (have_rows('cw_buttons')) {
            the_row();
            $button_icon = get_sub_field('cw_unicons');
         }
      } else {
         $button_icon = NULL;
      }
      return $button_icon;
   }

   //Type
   public function cw_type_button()
   {
      if (have_rows('cw_buttons')) {
         while (have_rows('cw_buttons')) {
            the_row();
            $button_type = get_sub_field('cw_button_type');
         }
      } else {
         $button_type = NULL;
      }
      return $button_type;
   }

   // Text
   public function cw_text_button()
   {
      if (have_rows('cw_buttons')) {
         while (have_rows('cw_buttons')) {
            the_row();
            if (get_sub_field('cw_button_text')) {
               $text_button = get_sub_field('cw_button_text');
            } else {
               $text_button = 'Button';
            }
         }
      } else {
         $text_button  = NULL;
      }
      return $text_button;
   }

   //Class
   public function cw_class_button()
   {
      if (have_rows('cw_buttons')) {
         while (have_rows('cw_buttons')) {
            the_row();
            if (get_sub_field('cw_class')) {
               $class_button = get_sub_field('cw_class');
            } else {
               $class_button = NULL;
            }
         }
      } else {
         $class_button = NULL;
      }
      return $class_button;
   }

   //ID
   public function cw_id_button()
   {
      if (have_rows('cw_buttons')) {
         while (have_rows('cw_buttons')) {
            the_row();
            if (get_sub_field('cw_id')) {
               $id_button = 'id="' . get_sub_field('cw_id') . '"';
            } else {
               $id_button = NULL;
            }
         }
      } else {
         $id_button = NULL;
      }
      return $id_button;
   }

   //Shape
   public function cw_shape_button()
   {
      if (have_rows('cw_buttons')) {
         while (have_rows('cw_buttons')) {
            the_row();
            if (get_sub_field('cw_shape_button') == 'Square') {
               $shape_button = 'rounded-0';
            } elseif (get_sub_field('cw_shape_button') == 'Pill') {
               $shape_button = 'rounded-pill';
            } elseif (get_sub_field('cw_shape_button') == 'Rounded') {
               $shape_button = '';
            } elseif (get_sub_field('cw_shape_button') == 'Theme') {
               $shape_button = get_theme_mod('codeweber_button_form');
            } else {
               $shape_button = NULL;
            }
         }
      } else {
         $shape_button = NULL;
      }
      return $shape_button;
   }

   //Size
   public function cw_size_button()
   {
      if (have_rows('cw_buttons')) {
         while (have_rows('cw_buttons')) {
            the_row();
            if (get_sub_field('cw_button_type') !== 'Link') {
               if (get_sub_field('button_size') == 'Lg') {
                  $size_button = 'btn-lg';
               } elseif (get_sub_field('button_size') == 'Sm') {
                  $size_button = 'btn-sm';
               } elseif (get_sub_field('button_size') == 'Md') {
                  $size_button = '';
               } elseif (get_sub_field('button_size') == 'Theme') {
                  $size_button = get_theme_mod('codeweber_button_size');
               }
            } else {
               $size_button = NULL;
            }
         }
      } else {
         $size_button = NULL;
      }
      return $size_button;
   }

   //Link Button
   public function cw_link_button()
   {
      if (have_rows('cw_buttons')) {
         while (have_rows('cw_buttons')) {
            the_row();
            $link_effect = get_sub_field('cw_link_effect');

            if ($link_effect == 'Link 1') {
               $cw_link_button = 'hover link-body';
            } elseif ($link_effect == 'Link 2') {
               $cw_link_button = 'hover';
            } elseif ($link_effect == 'Link 3') {
               $cw_link_button = 'hover more';
            } elseif ($link_effect == 'Link 4') {
               $cw_link_button = 'hover-2 link-body';
            } elseif ($link_effect == 'Link 5') {
               $cw_link_button = 'hover-2';
            } elseif ($link_effect == 'Link 6') {
               $cw_link_button = 'hover-2 more';
            } elseif ($link_effect == 'Link 7') {
               $cw_link_button = 'hover-3 link-body';
            } elseif ($link_effect == 'Link 8') {
               $cw_link_button = 'hover-3';
            } elseif ($link_effect == 'Link 9') {
               $cw_link_button = 'hover-3 more';
            } else {
               $cw_link_button = NULL;
            }
         }
      } else {
         $cw_link_button = NULL;
      }
      return $cw_link_button;
   }

   //Color
   public function cw_color_button()
   {
      if (have_rows('cw_buttons')) {
         while (have_rows('cw_buttons')) : the_row();
            $color = new CW_Color(NULL, NULL);
            if ($color->color == 'none') {
               $color_button = '';
            } elseif (get_sub_field('cw_button_type') == 'Link') {
               $color_button = 'link-' . $color->color;
            } elseif (get_sub_field('button_style') == 'Outline') {
               $color_button = 'btn-outline-' . $color->color;
            } else {
               $color_button = 'btn-' . $color->color;
            }
         endwhile;
      } else {
         $color_button = NULL;
      }
      return $color_button;
   }

   //Button Classes
   public function cw_button_classes($import_class)
   {
      if ($import_class !== NULL) {
         $this->import_class = $import_class;
      }
      $button_classes_array = array();

      if ($this->shape_button) {
         $button_classes_array[] = $this->shape_button;
      }
      if ($this->size_button && $this->type_button !== "Expand") {
         $button_classes_array[] = $this->size_button;
      }
      if ($this->color_button) {
         $button_classes_array[] = $this->color_button;
      }
      if ($this->class_button) {
         $button_classes_array[] = $this->class_button;
      }
      if ($this->import_class) {
         $button_classes_array[] = $this->import_class;
      }
      $cw_button_classes =  implode(' ', $button_classes_array);

      return $cw_button_classes;
   }

   //Final Button
   public function cw_final_button($import_class, $data)
   {
      if (have_rows('cw_buttons')) {
         while (have_rows('cw_buttons')) {
            the_row();
            $cw_link_object = new CW_Link(NULL, NULL, NULL);
            $button_url = $cw_link_object->link_url;

            if ($cw_link_object->link_type == 'Tooltip' || $cw_link_object->link_type == 'Popover') {
               $button_data = $cw_link_object->link_data;
            } else {
               $button_data = NULL;
            }
            if ($data !== NULL) {
               $button_data = $data;
            }
            $ghligthbox = $cw_link_object->link_glightbox;

            $button_link_url_target = $cw_link_object->link_url_target;
            $button_title_link = $cw_link_object->link_url_title;
            $button_bs_target = $cw_link_object->link_form;
         }
      }

      $button_id = $this->id_button;
      $icon_button = $this->icon_button;
      $type_button = $this->type_button;
      $text_button = $this->text_button;

      if ($type_button !== 'None') {
         if ($type_button == 'Theme') {
            $button_classes_array = array('btn');
            $button_classes_array[] = $this->classes_button;
            $button_classes = implode(' ', $button_classes_array);
            $icon_button = NULL;
         } elseif ($type_button == 'Icon') {
            $button_classes_array = array();
            $button_classes_array[] = 'btn btn-icon btn-icon-start';
            $button_classes_array[] = $this->classes_button;
            $icon_button = $icon_button;
            $button_classes = implode(' ', $button_classes_array);
         } elseif ($type_button == 'Expand') {
            $button_classes_array = array();
            $button_classes_array[] = 'btn btn-expand rounded-pill';
            $button_classes_array[] = $this->classes_button;
            $button_classes = implode(' ', $button_classes_array);
            $icon_button = '<i class="uil uil-arrow-right"></i>';
            $text_button = '<span>' . $text_button . '</span>';
         } elseif ($type_button == 'Play') {
            $button_classes_array = array();
            $button_classes_array[] = 'btn btn-circle btn-play ripple';
            $button_classes_array[] = $this->classes_button;
            $button_classes = implode(' ', $button_classes_array);
            $icon_button = '<i class="icn-caret-right"></i>';
            $text_button = NULL;
         } elseif ($type_button == 'Circle') {
            $button_classes_array = array();
            $button_classes_array[] = 'btn btn-circle';
            $button_classes_array[] = $this->classes_button;
            $button_classes = implode(' ', $button_classes_array);
            $icon_button = '<span><i class="uil uil-check"></i></span>';
            $text_button = NULL;
         } elseif ($type_button == 'Link') {
            $button_classes_array = array();
            $button_classes_array[] = $this->link_button;
            $button_classes_array[] = $this->classes_button;
            $button_classes = implode(' ', $button_classes_array);
            $icon_button = NULL;
         }

         if ($type_button == 'Link') {
            $final_button = '<a role="button" ' . $button_url . ' ' . $button_link_url_target . ' ' . $button_title_link . ' class="' . $button_classes . '"' .  $button_id . ' ' . $ghligthbox . ' ' . $button_bs_target . ' ' . $button_data . '>' . $icon_button . $text_button . '</a>';
         } elseif ($button_url !== 'href="#" role="button"') {
            $final_button = '<a role="button" ' . $button_url . ' ' . $button_link_url_target . ' ' . $button_title_link . ' class="' . $button_classes . '"' .  $button_id . ' ' . $ghligthbox . ' ' . $button_bs_target . ' ' . $button_data . '>' . $icon_button . $text_button . '</a>';
         } else {
            $final_button = '<a role="button" ' . $button_link_url_target . ' ' . $button_title_link . ' class="' . $button_classes . '"' .  $button_id . ' ' . $ghligthbox . ' ' . $button_bs_target . ' ' . $button_data . '>' . $icon_button . $text_button . '</a>';
         }
      } else {
         $final_button = NULL;
      }
      return $final_button;
   }
}


class CW_Buttons
{
   public $final_buttons;
   public $buttons_pattern;
   public $buttons_items;
   public $button_item_class;

   public function __construct($buttons_pattern, $buttons_items, $button_item_class, $data)
   {
      $this->final_buttons = $this->cw_final_buttons($buttons_pattern, $buttons_items, $button_item_class, $data);
   }
   public function cw_final_buttons($buttons_pattern, $buttons_items, $button_item_class, $data)
   {
      $buttons_array = array();
      if (is_array(get_sub_field('cw_buttons_repeater'))) {
         $count = count(get_sub_field('cw_buttons_repeater'));
      } else {
         $count = NULL;
      }
      if (have_rows('cw_buttons_repeater')) {

         while (have_rows('cw_buttons_repeater')) {
            the_row();
            if ($count == 1) {
               $button = new CW_Button($button_item_class, $data);
               $buttons_array[] = '<div>' . $button->final_button . '</div>';
            } else {
               $button = new CW_Button($button_item_class . 'mb-2 me-2', NULL);
               $buttons_array[] = '<span>' . $button->final_button . '</span>';
            }
         }
         $buttons_list = implode('', $buttons_array);
      } else {
         $buttons_list = $buttons_items;
      }
      if ($count >=  2) {
         $buttons_final = sprintf($buttons_pattern, $buttons_list);
      } else {
         $buttons_final = $buttons_list;
      }
      return $buttons_final;
   }
}
