<?php

//* --- Title ---

class CW_Title
{
   public $title_color;
   public $title_text;
   public $title_pattern;
   public $title_tag;
   public $title_display;
   public $title_lead;
   public $title_fs;
   public $title_align;
   public $title_id;
   public $title_class;
   public $title_final;

   public function __construct($title_color, $title_text, $title_tag, $title_display, $title_lead, $title_fs, $title_align, $title_id, $title_class, $title_pattern, $typewriter)
   {
      $this->title_color = $this->cw_title_color($title_color);
      $this->title_text = $this->cw_title_text($title_text);
      $this->title_pattern = $this->cw_title_pattern($title_pattern);
      $this->title_tag = $this->cw_title_tag($title_tag);
      $this->title_display = $this->cw_title_display($title_display);
      $this->title_lead = $this->cw_title_lead($title_lead);
      $this->title_fs = $this->cw_title_fs($title_fs);
      $this->title_align = $this->cw_title_align($title_align);
      $this->title_id = $this->cw_title_id($title_id);
      $this->title_class = $this->cw_title_class($title_class, $title_text);
      $this->title_final = $this->cw_title_final($title_pattern, $typewriter);
   }

   //Title_color
   public function cw_title_pattern($title_pattern)
   {
      if ($title_pattern !== NULL) {
         $cw_title_pattern = $title_pattern;
      } else {
         $cw_title_pattern = NULL;
      }
      return $cw_title_pattern;
   }


   //Title_color
   public function cw_title_color($title_color)
   {
      if (have_rows('cw_title')) {
         while (have_rows('cw_title')) {
            the_row();
            $title_color_object = new CW_Color(NULL, NULL);
            if ($title_color_object->color !== 'none') {
               $cw_title_color = 'text-' . $title_color_object->color;
            } else {
               $cw_title_color = $title_color;
            }
         };
      } else {
         $cw_title_color = NULL;
      };

      return $cw_title_color;
   }

   //Title_text
   public function cw_title_text($title_text)
   {
      if (have_rows('cw_title')) {
         while (have_rows('cw_title')) {
            the_row();
            if (get_sub_field('cw_title')) {
               $cw_title_text = get_sub_field('cw_title');
            } else {
               $cw_title_text = $title_text;
            }
         };
      } else {
         $cw_title_text = NULL;
      };

      return $cw_title_text;
   }

   //Title_tag
   public function cw_title_tag($title_tag)
   {
      if (have_rows('cw_title')) {
         while (have_rows('cw_title')) {
            the_row();
            if (get_sub_field('cw_tag')) {
               $cw_title_tag = get_sub_field('cw_tag');
            } else {
               $cw_title_tag = $title_tag;
            }
         };
      } else {
         $cw_title_tag = NULL;
      };
      return $cw_title_tag;
   }

   //Title_display
   public function cw_title_display($title_display)
   {
      if (have_rows('cw_title')) {
         while (have_rows('cw_title')) {
            the_row();
            if (get_sub_field('cw_class_display')) {
               $cw_title_display = get_sub_field('cw_class_display');
            } else {
               $cw_title_display = $title_display;
            }
         };
      } else {
         $cw_title_display = NULL;
      };
      return $cw_title_display;
   }

   //Title_lead
   public function cw_title_lead($title_lead)
   {
      if (have_rows('cw_title')) {
         while (have_rows('cw_title')) {
            the_row();
            if (get_sub_field('class_lead')) {
               $cw_title_lead = get_sub_field('class_lead');
            } else {
               $cw_title_lead = $title_lead;
            }
         };
      } else {
         $cw_title_lead = NULL;
      };
      return $cw_title_lead;
   }

   //Title_fs
   public function cw_title_fs($title_fs)
   {
      if (have_rows('cw_title')) {
         while (have_rows('cw_title')) {
            the_row();
            if (get_sub_field('class_fs')) {
               $cw_title_fs = get_sub_field('class_fs');
            } else {
               $cw_title_fs = $title_fs;
            }
         };
      } else {
         $cw_title_fs = NULL;
      };
      return $cw_title_fs;
   }

   //Title_align
   public function cw_title_align($title_align)
   {

      if (have_rows('cw_title')) {
         while (have_rows('cw_title')) {
            the_row();
            if (get_sub_field('text_align')) {
               $cw_title_align = get_sub_field('text_align');
            } else {
               $cw_title_align = $title_align;
            }
         };
      } else {
         $cw_title_align = NULL;
      };
      return $cw_title_align;
   }

   //Title_id
   public function cw_title_id($title_id)
   {
      if (have_rows('cw_title')) {
         while (have_rows('cw_title')) {
            the_row();
            if (get_sub_field('cw_id')) {
               $cw_title_id = get_sub_field('cw_id');
            } else {
               $cw_title_id = $title_id;
            }
         };
      } else {
         $cw_title_id = NULL;
      };
      return $cw_title_id;
   }

   //Title_id
   public function cw_title_class($title_class)
   {
      if (have_rows('cw_title')) {
         while (have_rows('cw_title')) {
            the_row();
            if (get_sub_field('cw_class')) {
               $cw_title_class = get_sub_field('cw_class');
            } else {
               $cw_title_class = $title_class;
            }
         };
      } else {
         $cw_title_class = NULL;
      };
      return $cw_title_class;
   }

   //Title final 
   public function cw_title_final($title_pattern, $typewriter)
   {

      $classes = array();
      if ($this->title_align) {
         $classes[] = $this->title_align;
      }
      if ($this->title_color) {
         $classes[] = $this->title_color;
      }
      if ($this->title_display) {
         $classes[] = $this->title_display;
      }
      if ($this->title_fs) {
         $classes[] = $this->title_fs;
      }
      if ($this->title_lead) {
         $classes[] = $this->title_lead;
      }
      if ($this->title_class) {
         $classes[] = $this->title_class;
      }

      if (is_numeric(mb_substr($this->title_text, 0, -1))) {
         $classes[] = 'counter';
      }

      if ($classes) {
         $class = ' class="' . implode(' ', $classes) . '"';
         $class_p = implode(' ', $classes);
      } else {
         $class_p = NULL;
         $class = NULL;
      }
      if ($this->title_id) {
         $id = ' id="' . $this->title_id . '"';
      } else {
         $id = NULL;
      }
      if ($this->title_tag) {
         $tag = $this->title_tag;
      } else {
         $tag = NULL;
      }



      if ($this->title_pattern !== NULL && !$tag) {
         $title_text = $this->title_text;
         if ($typewriter !== NULL) {
            $title_text .= ' <br>' . $typewriter;
         }
         $text = sprintf($this->title_pattern, $title_text, $class_p);
      } else {
         $text = $this->title_text;
         if ($typewriter !== NULL) {
            $text .= ' <br>' . $typewriter;
         }
      }



      if ($tag) {
         $cw_title_final = '<' . $tag . ' ' . $class .  $id . '>' . $text . '</' . $tag . '>';
      } elseif ($this->title_pattern !== NULL) {
         $cw_title_final = $text;
      } else {
         $cw_title_final = $text;
      }

      return $cw_title_final;
   }
}
