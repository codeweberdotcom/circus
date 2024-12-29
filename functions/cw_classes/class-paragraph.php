<?php

//* ---Paragraph---

class CW_Parargraph
{
   public $paragraph_color;
   public $paragraph_text;
   public $paragraph_tag;
   public $paragraph_display;
   public $paragraph_lead;
   public $paragraph_fs;
   public $paragraph_align;
   public $paragraph_id;
   public $paragraph_class;
   public $paragraph_final;

   public function __construct($paragraph_color, $paragraph_text, $paragraph_tag, $paragraph_display, $paragraph_lead, $paragraph_fs, $paragraph_align, $paragraph_id, $paragraph_class, $paragraph_pattern)
   {
      $this->paragraph_color = $this->cw_paragraph_color($paragraph_color);
      $this->paragraph_text = $this->cw_paragraph_text($paragraph_text);
      $this->paragraph_tag = $this->cw_paragraph_tag($paragraph_tag);
      $this->paragraph_display = $this->cw_paragraph_display($paragraph_display);
      $this->paragraph_lead = $this->cw_paragraph_lead($paragraph_lead);
      $this->paragraph_fs = $this->cw_paragraph_fs($paragraph_fs);
      $this->paragraph_align = $this->cw_paragraph_align($paragraph_align);
      $this->paragraph_id = $this->cw_paragraph_id($paragraph_id);
      $this->paragraph_class = $this->cw_paragraph_class($paragraph_class);
      $this->paragraph_final = $this->cw_paragraph_final($paragraph_pattern);
   }

   //Paragraph_color
   public function cw_paragraph_color($paragraph_color)
   {
      if (have_rows('cw_paragraph')) {
         while (have_rows('cw_paragraph')) {
            the_row();
            $paragraph_color_object = new CW_Color(NULL, NULL);
            if ($paragraph_color_object->color !== 'none') {
               $cw_paragraph_color = 'text-' . $paragraph_color_object->color;
            } else {
               $cw_paragraph_color = $paragraph_color;
            }
         }
      } else {
         $cw_paragraph_color = NULL;
      }
      return $cw_paragraph_color;
   }

   //Paragraph_text
   public function cw_paragraph_text($paragraph_text)
   {
      if (have_rows('cw_paragraph')) {
         while (have_rows('cw_paragraph')) {
            the_row();
            if (get_sub_field('cw_paragraph')) {
               $cw_paragraph_text = get_sub_field('cw_paragraph');
            } else {
               $cw_paragraph_text = $paragraph_text;
            }
         }
      } else {
         $cw_paragraph_text = NULL;
      }
      return $cw_paragraph_text;
   }

   //Paragraph_tag
   public function cw_paragraph_tag($paragraph_tag)
   {
      if (have_rows('cw_paragraph')) {
         while (have_rows('cw_paragraph')) {
            the_row();
            if (get_sub_field('cw_tag')) {
               $cw_paragraph_tag = get_sub_field('cw_tag');
            } else {
               $cw_paragraph_tag = $paragraph_tag;
            }
         }
      } else {
         $cw_paragraph_tag = NULL;
      }
      return $cw_paragraph_tag;
   }

   //Paragraph_display
   public function cw_paragraph_display($paragraph_display)
   {
      if (have_rows('cw_paragraph')) {
         while (have_rows('cw_paragraph')) {
            the_row();
            if (get_sub_field('cw_class_display')) {
               $cw_paragraph_display = get_sub_field('cw_class_display');
            } else {
               $cw_paragraph_display = $paragraph_display;
            }
         }
      } else {
         $cw_paragraph_display = NULL;
      }
      return $cw_paragraph_display;
   }

   //Paragraph_lead
   public function cw_paragraph_lead($paragraph_lead)
   {
      if (have_rows('cw_paragraph')) {
         while (have_rows('cw_paragraph')) {
            the_row();
            if (get_sub_field('class_lead')) {
               $cw_paragraph_lead = get_sub_field('class_lead');
            } else {
               $cw_paragraph_lead = $paragraph_lead;
            }
         }
      } else {
         $cw_paragraph_lead = NULL;
      }
      return $cw_paragraph_lead;
   }

   //Paragraph_fs
   public function cw_paragraph_fs($paragraph_fs)
   {
      if (have_rows('cw_paragraph')) {
         while (have_rows('cw_paragraph')) {
            the_row();
            if (get_sub_field('class_fs')) {
               $cw_paragraph_fs = get_sub_field('class_fs');
            } else {
               $cw_paragraph_fs = $paragraph_fs;
            }
         }
      } else {
         $cw_paragraph_fs = NULL;
      }
      return $cw_paragraph_fs;
   }

   //Paragraph_align
   public function cw_paragraph_align($paragraph_align)
   {

      if (have_rows('cw_paragraph')) {
         while (have_rows('cw_paragraph')) {
            the_row();
            if (get_sub_field('text_align')) {
               $cw_paragraph_align = get_sub_field('text_align');
            } else {
               $cw_paragraph_align = $paragraph_align;
            }
         }
      } else {
         $cw_paragraph_align = NULL;
      }
      return $cw_paragraph_align;
   }

   //Paragraph_id
   public function cw_paragraph_id($paragraph_id)
   {
      if (have_rows('cw_paragraph')) {
         while (have_rows('cw_paragraph')) {
            the_row();
            if (get_sub_field('cw_id')) {
               $cw_paragraph_id = get_sub_field('cw_id');
            } else {
               $cw_paragraph_id = $paragraph_id;
            }
         }
      } else {
         $cw_paragraph_id = NULL;
      }
      return $cw_paragraph_id;
   }

   //Paragraph_id
   public function cw_paragraph_class($paragraph_class)
   {
      if (have_rows('cw_paragraph')) {
         while (have_rows('cw_paragraph')) {
            the_row();
            if (get_sub_field('cw_class')) {
               $cw_paragraph_class = get_sub_field('cw_class');
            } else {
               $cw_paragraph_class = $paragraph_class;
            }
         }
      } else {
         $cw_paragraph_class = NULL;
      }
      return $cw_paragraph_class;
   }

   //Paragraph final 
   public function cw_paragraph_final($paragraph_pattern)
   {
      $classes = array();
      if ($this->paragraph_align) {
         $classes[] = $this->paragraph_align;
      }
      if ($this->paragraph_color) {
         $classes[] = $this->paragraph_color;
      }
      if ($this->paragraph_display) {
         $classes[] = $this->paragraph_display;
      }
      if ($this->paragraph_fs) {
         $classes[] = $this->paragraph_fs;
      }
      if ($this->paragraph_lead) {
         $classes[] = $this->paragraph_lead;
      }
      if ($this->paragraph_class) {
         $classes[] = $this->paragraph_class;
      }

      if ($classes) {
         $class = ' class="' . implode(' ', $classes) . '"';
         $class_p = implode(' ', $classes);
      } else {
         $class_p = NULL;
         $class = NULL;
      }
      if ($this->paragraph_id) {
         $id = ' id="' . $this->paragraph_id . '"';
      } else {
         $id = NULL;
      }
      if ($this->paragraph_tag) {
         $tag = $this->paragraph_tag;
      } else {
         $tag = NULL;
      }

      if ($paragraph_pattern !== NULL) {
         $text = sprintf($paragraph_pattern, $this->paragraph_text, $class_p);
      } else {
         $text = $this->paragraph_text;
      }
      if ($tag) {
         $cw_paragraph_final = '<' . $tag . ' ' . $class .  $id . '>' . $this->paragraph_text . '</' . $tag . '>';
      } elseif ($paragraph_pattern !== NULL) {
         $cw_paragraph_final = $text;
      } else {
         $cw_paragraph_final = $text;
      }
      return $cw_paragraph_final;
   }
}
