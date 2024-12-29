<?php

//* ---Features Class ACF---

class CW_Feature
{
   public $features_icon;
   public $features_title;
   public $features_title_class;
   public $features_style;
   public $features_paragraph;
   public $features_paragraph_class;
   public $features_link;
   public $feature_blocklink;
   public $features_border_class;
   public $features_pattern;
   public $features_item_final;
   public $features_list_final;

   public function __construct($features_icon, $features_title, $features_paragraph, $features_link, $features_pattern, $demo, $style, $num, $class_icon, $fetures_image_size, $feature_blocklink)
   {
      $this->features_icon = $this->cw_features_icon($features_icon, $style, $class_icon, $fetures_image_size);
      $this->features_style = $this->cw_features_style($style);
      $this->features_title = $this->cw_features_title($features_title);
      $this->features_border_class = $this->cw_features_border_class();
      $this->features_paragraph = $this->cw_features_paragraph($features_paragraph);
      $this->features_link = $this->cw_features_link($features_link);
      $this->feature_blocklink = $this->cw_feature_blocklink($feature_blocklink);
      $this->features_item_final = $this->cw_features_item_final($features_pattern, $features_title, $demo, $style, $num, $class_icon);
   }

   //Features_style
   public function cw_features_style($style)
   {
      if ($style !== NULL) {
         $cw_features_style = $style;
      } else {
         $cw_features_style = NULL;
      }
      return $cw_features_style;
   }


   //Features_border
   public function cw_features_border_class()
   {
      if (have_rows('cw_features_item')) {
         while (have_rows('cw_features_item')) {
            the_row();
            $features_border_object = new CW_Border(NULL, NULL, NULL);
            //Add border class
            if ($features_border_object->border_position !== 'card-border-none') {
               $features_border_class = $features_border_object->final_border_class;
            } else {
               $features_border_class = NULL;
            }
         }
      } else {
         $features_border_class = NULL;
      }
      return $features_border_class;
   }

   //Features_icon
   public function cw_features_icon($features_icon, $style, $class_icon, $fetures_image_size)
   {

      if (have_rows('cw_features_item')) {
         while (have_rows('cw_features_item')) {
            the_row();
            if ($style !== NULL) {
               $style_icon = $style;
            } else {
               $style_icon = NULL;
            }
            $features_icon_object = new CW_Icon(NULL, NULL, $class_icon, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, $fetures_image_size);
            $features_icon =  $features_icon_object->final_icon;
         }
      } else {
         $features_icon = NULL;
      }


      return $features_icon;
   }

   //Features_title
   public function cw_features_title($features_title)
   {
      if (have_rows('cw_features_item')) {
         while (have_rows('cw_features_item')) {
            the_row();
            $features_object = new CW_Title(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, $features_title, NULL);
            $features_title =  $features_object->title_final;
         }
      } else {
         $features_title = NULL;
      }
      return $features_title;
   }

   //Features_paragraph
   public function cw_features_paragraph($features_paragraph)
   {
      if (have_rows('cw_features_item')) {
         while (have_rows('cw_features_item')) {
            the_row();
            $features_object = new CW_Parargraph(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, $features_paragraph);
            $features_paragraph =  $features_object->paragraph_final;
         }
      } else {
         $features_paragraph = NULL;
      }
      return $features_paragraph;
   }

   //Features_link
   public function cw_features_link($features_link)
   {
      if (have_rows('cw_features_item')) {
         while (have_rows('cw_features_item')) {
            the_row();
            $features_link_object =  new CW_Buttons($buttons_pattern = NULL, $buttons_items = NULL, NULL, NULL);
            $features_link = $features_link_object->final_buttons;
         }
      } else {
         $features_link = NULL;
      }
      return $features_link;
   }


   //Features_link
   public function cw_feature_blocklink($feature_blocklink)
   {
      if (have_rows('cw_features_item')) {
         while (have_rows('cw_features_item')) {
            the_row();

            $link_block = get_sub_field('link_block');
            if ($link_block) {
               $feature_blocklink = esc_url($link_block['url']);
            } else {
               $feature_blocklink = NULL;
            };
         }
      } else {
         $feature_blocklink = NULL;
      }
      return $feature_blocklink;
   }

   //Features_item
   public function cw_features_item_final($features_pattern, $features_title, $demo, $style, $num, $class_icon)
   {

      $link = $this->features_link;
      $title = $this->features_title;
      $title_class = $this->features_title_class;
      $paragraph = $this->features_paragraph;
      $paragraph_class = $this->features_paragraph_class;
      $icon = $this->features_icon;
      $card_class_array = array();
      $block_link = $this->feature_blocklink;

      if (have_rows('cw_features_item')) {
         while (have_rows('cw_features_item')) {
            the_row();

            //Add default class
            if (get_sub_field('cw_class')) {
               $card_class_array[] = ' ' . get_sub_field('cw_class');
            }

            if ($this->features_border_class !== NULL) {
               $card_class_array[] = $this->features_border_class;
            }

            $card_class = implode(' ', $card_class_array);
            if (!$title && !$paragraph && !$icon) {
               $features_item = $demo;
            } else {
               $features_item_pattern = $features_pattern;
               $features_item = sprintf($features_item_pattern, NULL, $icon, $title, $paragraph, $link, $card_class, $style, $num, $title_class, $paragraph_class, $block_link);
            }
         }
      } else {
         $features_item = NULL;
      }
      return $features_item;
   }
}



//* ---Features Class ACF---

class CW_Features
{
   public $features_list_final;
   public $features_array_final;

   public function __construct($features_pattern, $demo, $class_icon, $fetures_image_size, $features_title_pattern, $features_paragraph_pattern)
   {
      $this->features_list_final = $this->cw_features_list_final($features_pattern, $demo, $class_icon, $fetures_image_size, $features_title_pattern, $features_paragraph_pattern);
   }

   //Features_list
   public function cw_features_list_final($features_pattern, $demo, $class_icon, $fetures_image_size, $features_title_pattern, $features_paragraph_pattern)
   {
      if (have_rows('cw_features')) {
         $cw_features_array = array();
         $cw_features_list = '';
         $num = '1';
         while (have_rows('cw_features')) {
            the_row();
            $num_s = $num . '.';
            $features_item = new CW_Feature(
               NULL,
               $features_title_pattern,
               $features_paragraph_pattern,
               NULL,
               $features_pattern,
               $demo,
               NULL,
               $num_s,
               $class_icon,
               $fetures_image_size,
               NULL
            );
            $cw_features_array[] = $features_item->features_item_final;
            $cw_features_list .= $features_item->features_item_final;
            $num++;
         }
         $this->features_array_final = $cw_features_array;
      } else {
         $cw_features_list = NULL;
      }

      return $cw_features_list;
   }
}
