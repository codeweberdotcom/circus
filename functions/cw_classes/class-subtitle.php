<?php

//* ---SubTitle---

class CW_SubTitle
{
   public $sub_title_type;
   public $sub_title_color;
   public $sub_title_text;
   public $sub_title_tag;
   public $sub_title_display;
   public $sub_title_lead;
   public $sub_title_fs;
   public $sub_title_align;
   public $sub_title_id;
   public $sub_title_class;
   public $sub_title_final;
   public $sub_title_final_first;
   public $sub_title_final_second;

   public function __construct($sub_title_color, $sub_title_text, $sub_title_tag, $sub_title_display, $sub_title_lead, $sub_title_fs, $sub_title_align, $sub_title_id, $sub_title_class, $sub_title_pattern, $lead)
   {
      $this->sub_title_type = $this->cw_subtitle_type();
      $this->sub_title_color = $this->cw_subtitle_color($sub_title_color);
      $this->sub_title_text = $this->cw_subtitle_text($sub_title_text);
      $this->sub_title_tag = $this->cw_subtitle_tag($sub_title_tag);
      $this->sub_title_display = $this->cw_subtitle_display($sub_title_display);
      $this->sub_title_lead = $this->cw_subtitle_lead($sub_title_lead);
      $this->sub_title_fs = $this->cw_subtitle_fs($sub_title_fs);
      $this->sub_title_align = $this->cw_subtitle_align($sub_title_align);
      $this->sub_title_id = $this->cw_subtitle_id($sub_title_id);
      $this->sub_title_class = $this->cw_subtitle_class($sub_title_class);
      $this->sub_title_final = $this->cw_subtitle_final($sub_title_pattern, $lead);
   }

   //SubTitle_type
   public function cw_subtitle_type()
   {
      if (have_rows('cw_subtitle')) {
         while (have_rows('cw_subtitle')) {
            the_row();
            $cw_subtitle_type = get_sub_field('type_subtitle');
         }
      } else {
         $cw_subtitle_type = 'type_1';
      }
      return $cw_subtitle_type;
   }


   //SubTitle_color
   public function cw_subtitle_color($sub_title_color)
   {
      if (have_rows('cw_subtitle')) {
         while (have_rows('cw_subtitle')) {
            the_row();
            $sub_title_color_object = new CW_Color(NULL, NULL);
            if ($sub_title_color_object->color !== 'none') {
               $cw_subtitle_color = 'text-' . $sub_title_color_object->color;
            } else {
               $cw_subtitle_color = $sub_title_color;
            }
         }
      } else {
         $cw_subtitle_color = NULL;
      }
      return $cw_subtitle_color;
   }

   //SubTitle_text
   public function cw_subtitle_text($sub_title_text)
   {
      if (have_rows('cw_subtitle')) {
         while (have_rows('cw_subtitle')) {
            the_row();
            if (get_sub_field('cw_subtitle')) {
               $cw_subtitle_text = get_sub_field('cw_subtitle');
            } else {
               $cw_subtitle_text = $sub_title_text;
            }
         }
      } else {
         $cw_subtitle_text = NULL;
      }
      return $cw_subtitle_text;
   }

   //SubTitle_tag
   public function cw_subtitle_tag($sub_title_tag)
   {
      if (have_rows('cw_subtitle')) {
         while (have_rows('cw_subtitle')) {
            the_row();
            if (get_sub_field('cw_tag')) {
               $cw_subtitle_tag = get_sub_field('cw_tag');
            } else {
               $cw_subtitle_tag = $sub_title_tag;
            }
         }
      } else {
         $cw_subtitle_tag = NULL;
      }
      return $cw_subtitle_tag;
   }

   //SubTitle_display
   public function cw_subtitle_display($sub_title_display)
   {
      if (have_rows('cw_subtitle')) {
         while (have_rows('cw_subtitle')) {
            the_row();
            if (get_sub_field('cw_class_display')) {
               $cw_subtitle_display = get_sub_field('cw_class_display');
            } else {
               $cw_subtitle_display = $sub_title_display;
            }
         }
      } else {
         $cw_subtitle_display = NULL;
      }
      return $cw_subtitle_display;
   }

   //SubTitle_lead
   public function cw_subtitle_lead($sub_title_lead)
   {
      if (have_rows('cw_subtitle')) {
         while (have_rows('cw_subtitle')) {
            the_row();
            if (get_sub_field('class_lead')) {
               $cw_subtitle_lead = get_sub_field('class_lead');
            } else {
               $cw_subtitle_lead = $sub_title_lead;
            }
         }
      } else {
         $cw_subtitle_lead = NULL;
      }
      return $cw_subtitle_lead;
   }

   //SubTitle_fs
   public function cw_subtitle_fs($sub_title_fs)
   {
      if (have_rows('cw_subtitle')) {
         while (have_rows('cw_subtitle')) {
            the_row();
            if (get_sub_field('class_fs')) {
               $cw_subtitle_fs = get_sub_field('class_fs');
            } else {
               $cw_subtitle_fs = $sub_title_fs;
            }
         }
      } else {
         $cw_subtitle_fs = NULL;
      }
      return $cw_subtitle_fs;
   }

   //SubTitle_align
   public function cw_subtitle_align($sub_title_align)
   {

      if (have_rows('cw_subtitle')) {
         while (have_rows('cw_subtitle')) {
            the_row();
            if (get_sub_field('text_align')) {
               $cw_subtitle_align = get_sub_field('text_align');
            } else {
               $cw_subtitle_align = $sub_title_align;
            }
         }
      } else {
         $cw_subtitle_align = NULL;
      }
      return $cw_subtitle_align;
   }

   //SubTitle_id
   public function cw_subtitle_id($sub_title_id)
   {
      if (have_rows('cw_subtitle')) {
         while (have_rows('cw_subtitle')) {
            the_row();
            if (get_sub_field('cw_id')) {
               $cw_subtitle_id = get_sub_field('cw_id');
            } else {
               $cw_subtitle_id = $sub_title_id;
            }
         }
      } else {
         $cw_subtitle_id = NULL;
      }

      return $cw_subtitle_id;
   }

   //SubTitle_class
   public function cw_subtitle_class($sub_title_class)
   {
      if (have_rows('cw_subtitle')) {
         while (have_rows('cw_subtitle')) {
            the_row();
            if (get_sub_field('cw_class')) {
               $cw_subtitle_class = get_sub_field('cw_class');
            } else {
               $cw_subtitle_class = $sub_title_class;
            }
         }
      } else {
         $cw_subtitle_class = NULL;
      }
      return $cw_subtitle_class;
   }

   //SubTitle final 
   public function cw_subtitle_final($sub_title_pattern, $lead)
   {
      $type_subtitle = $this->sub_title_type;

      $classes = array();
      if ($this->sub_title_align) {
         $classes[] = $this->sub_title_align;
      }
      if ($this->sub_title_color) {
         $classes[] = $this->sub_title_color;
      }
      if ($this->sub_title_display) {
         $classes[] = $this->sub_title_display;
      }
      if ($this->sub_title_fs) {
         $classes[] = $this->sub_title_fs;
      }
      if ($this->sub_title_lead) {
         $classes[] = $this->sub_title_lead;
      }
      if ($this->sub_title_class) {
         $classes[] = $this->sub_title_class;
      }

      if ($classes) {
         $class = ' class="' . implode(' ', $classes) . '"';
         $class_p = implode(' ', $classes);
      } else {
         $class_p = NULL;
         $class = NULL;
      }
      if ($this->sub_title_id) {
         $id = ' id="' . $this->sub_title_id . '"';
      } else {
         $id = NULL;
      }
      if ($this->sub_title_tag) {
         $tag = $this->sub_title_tag;
      } else {
         $tag = NULL;
      }


      if ($type_subtitle == 'Type 1') {
         if (get_theme_mod('codeweber_sub_title_color') !== 'default') {
            $sub_title_pattern = '<h2 class="fs-16 text-uppercase ' . get_theme_mod('codeweber_sub_title_color') . ' mb-3 ' . $class_p . '">%s</h2>';
         }

         if (get_theme_mod('codeweber_sub_title') !== 'default') {
            $sub_title_pattern = '<h2 class="fs-16 text-uppercase text-line mb-3 ' . $class_p . '">%s</h2>';
         }

         if (get_theme_mod('codeweber_sub_title_color') !== 'default' && get_theme_mod('codeweber_sub_title') !== 'default') {
            $sub_title_pattern = '<h2 class="fs-16 text-uppercase text-line mb-3 ' . get_theme_mod('codeweber_sub_title_color') . ' ' . $class_p . '">%s</h2>';
         }
      }

      if ($sub_title_pattern !== NULL) {
         $text = sprintf($sub_title_pattern, $this->sub_title_text, $class_p);
      }
      if ($tag) {
         $cw_subtitle_final = '<' . $tag . ' ' . $class .  $id . '>' . $this->sub_title_text . '</' . $tag . '>';
      } elseif ($sub_title_pattern !== NULL) {
         $cw_subtitle_final = $text;
      } else {
         $cw_subtitle_final = $text;
      }

      if ($type_subtitle == 'Type 1') {
         $this->sub_title_final_first = $cw_subtitle_final;
         $this->sub_title_final_second = NULL;
      } elseif ($type_subtitle == 'Type 2') {
         $this->sub_title_final_first = NULL;
         $this->sub_title_final_second = $cw_subtitle_final;
      } elseif ($type_subtitle == 'Disable') {
         $this->sub_title_final_first = NULL;
         $this->sub_title_final_second = NULL;
      }

      return $cw_subtitle_final;
   }
}
