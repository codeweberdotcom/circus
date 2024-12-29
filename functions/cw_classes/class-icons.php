<?php

//* ---Icon Class ACF---

class CW_Icon
{
   public $type_icon;
   public $form_icon;
   public $size_icon;
   public $unicons_icon;
   public $lineal_icon;
   public $image_icon;
   public $color_icon;
   public $number_icon;
   public $class_icon;
   public $id_icon;
   public $final_icon;

   public $style_icon;

   public function __construct($type_icon, $form_icon, $class_icon, $size_icon, $unicons_icon, $lineal_icon, $image_icon, $color_icon, $number_icon, $id_icon, $final_icon, $fetures_image_size)

   {
      $this->class_icon = $this->cw_class_icon($class_icon);
      $this->type_icon = $this->cw_type_icon($type_icon);
      $this->id_icon = $this->cw_id_icon();
      $this->style_icon = $this->cw_style_icon();
      $this->color_icon = $this->cw_color_icon($color_icon);
      $this->form_icon = $this->cw_form_icon($form_icon);
      $this->size_icon = $this->cw_size_icon($size_icon);
      $this->unicons_icon = $this->cw_unicons_icon($unicons_icon, $class_icon);
      $this->image_icon = $this->cw_image_icon($image_icon, $class_icon, $fetures_image_size);
      $this->lineal_icon = $this->cw_lineal_icon($lineal_icon, $class_icon);
      $this->number_icon = $this->cw_number_icon($number_icon, $class_icon);
      $this->final_icon = $this->cw_final_icon($final_icon, $class_icon);
   }

   // Type
   public function cw_style_icon()
   {
      if (have_rows('cw_icons')) {
         while (have_rows('cw_icons')) {
            the_row();
            $cw_style_icon = get_sub_field('cw_icon_style');
         }
      } else {
         $cw_style_icon = NULL;
      }
      return $cw_style_icon;
   }

   // Type
   public function cw_type_icon($type_icon)
   {
      if (have_rows('cw_icons')) {
         while (have_rows('cw_icons')) {
            the_row();
            $type_icon = get_sub_field('cw_type_icon');
         }
      }
      return $type_icon;
   }

   // Class
   public function cw_class_icon($class_icon)
   {

      if (have_rows('cw_icons')) {
         while (have_rows('cw_icons')) {
            the_row();
            $cw_class_icon_array = array();
            if ($class_icon !== NULL) {
               $cw_class_icon_array[] =  $class_icon;
            }
            if (get_sub_field('cw_class')) {
               $cw_class_icon_array[] = get_sub_field('cw_class');
            }

            $cw_class_icon = implode(' ', $cw_class_icon_array);
         }
      }
      return $cw_class_icon;
   }

   // ID
   public function cw_id_icon()
   {
      if (have_rows('cw_icons')) {
         while (have_rows('cw_icons')) {
            the_row();
            if (get_sub_field('cw_id')) {
               $id_icon = 'id="' . get_sub_field('cw_id') . '"';
            } else {
               $id_icon = NULL;
            }
         }
      } else {
         $id_icon = NULL;
      }
      return $id_icon;
   }

   //Color
   public function cw_color_icon($color_icon)
   {
      if (have_rows('cw_icons')) {
         while (have_rows('cw_icons')) {
            the_row();
            $color = new CW_Color(NULL, NULL);
            if ($color->color == 'none') {
               $color_icon = '';
            } else {
               $color_icon = $color->color;
            }

            if ($this->style_icon == 'outline') {
               $cw_color_icon = 'outline-' . $color_icon;
            } else {
               $cw_color_icon = $color_icon;
            }

            if (get_sub_field('cw_icon_form') == 'none') {
               $cw_color_icon = 'text-' . $color->color;
            }
         }
      } else {
         $cw_color_icon = NULL;
      }
      return $cw_color_icon;
   }

   //Form
   public function cw_form_icon($form_icon)
   {
      if (have_rows('cw_icons')) {
         while (have_rows('cw_icons')) {
            the_row();
            $form_icon = get_sub_field('cw_icon_form');
         }
      }
      return $form_icon;
   }


   //Size
   public function cw_size_icon($size_icon)
   {
      if (have_rows('cw_icons')) {
         while (have_rows('cw_icons')) {
            the_row();
            $size_icon = get_sub_field('cw_icon_size');
         }
      }
      return $size_icon;
   }

   // Image
   public function cw_image_icon($image_icon, $class_icon, $fetures_image_size)
   {



      if (have_rows('cw_icons')) {
         while (have_rows('cw_icons')) {
            the_row();
            if (get_sub_field('cw_image')) {
               $image = get_sub_field('cw_image');
               $form = $this->form_icon;
               $size = $this->size_icon;
               $classes_icon = array();

               if ($size !== 'none') {
                  if ($form == 'btn-circle')
                     $classes_icon[] = 'rounded-pill';
                  elseif ($form == 'btn-block') {
                     $classes_icon[] = 'rounded';
                  } else {
                     $classes_icon[] = NULL;
                  }
               }

               $classes_icon[] = $this->class_icon;

               if ($size !== 'none') {
                  if ($size == 'sm') {
                     $size = 'cw_icon_sm';
                     $classes_icon[] = 'w-10';
                  } elseif ($size == 'md') {
                     $size = 'cw_icon_md';
                     $classes_icon[] = 'w-12';
                  } elseif ($size == 'lg') {
                     $size = 'cw_icon_lg';
                     $classes_icon[] = 'w-15';
                  } elseif ($size == 'image') {
                     $size = 'cw_icon_image';
                     $classes_icon[] = 'w-100';
                  }
               } elseif ($size == 'none' && $fetures_image_size !== NULL) {
                  $size = $fetures_image_size;
               } else {
                  $size = NULL;
               }

               $class = 'class="' . implode(' ', $classes_icon) . '"';

               if ($size !== NULL) {
                  $image_icon = '<img ' . $class . ' src="' . get_sub_field('cw_image') . '"/>';
               } else {
                  $image_icon = NULL;
               }
            } else {
               $image_icon = NULL;
            }
         }
      } else {
         $image_icon = NULL;
      }
      return $image_icon;
   }

   //Unicons
   public function cw_unicons_icon($unicons_icon, $class_icon)
   {
      if (have_rows('cw_icons')) {
         while (have_rows('cw_icons')) {
            the_row();
            $unicons_icon = get_sub_field('cw_unicons');
         }
      }
      return $unicons_icon;
   }


   //Lineal
   public function cw_lineal_icon($lineal_icon, $class_icon)
   {
      if (have_rows('cw_icons')) {
         while (have_rows('cw_icons')) {
            the_row();
            if (get_sub_field('cw_icon_size')) {
               $classes_icon = array();
               $classes_icon[] = 'icon-svg-' . $this->size_icon;
               $classes_icon[] = 'text-' . $this->color_icon;
               $classes_icon[] = 'svg-inject icon-svg';
               $classes_icon[] = $this->class_icon;
               $classes = 'class="' . implode(' ', $classes_icon) . '"';
            }
            if (get_sub_field('cw_lineal_svg')) {
               $lineal_icon =  '<img ' . $classes . ' src="' . get_template_directory_uri() . '/dist/img/icons/lineal/' . get_sub_field('cw_lineal_svg') . '.svg" ' . $this->id_icon . '/>';
            } else {
               $lineal_icon = '';
            }
         }
      }
      return $lineal_icon;
   }

   //Number
   public function cw_number_icon($number_icon, $class_icon)
   {
      if (have_rows('cw_icons')) {
         while (have_rows('cw_icons')) {
            the_row();
            $number_icon = get_sub_field('cw_number');
         }
      }
      return $number_icon;
   }

   //Final Icon
   public function cw_final_icon($final_icon, $class_icon)
   {

      if (have_rows('cw_icons')) {
         while (have_rows('cw_icons')) {
            the_row();
            if ($this->type_icon !== 'None') {
               if ($this->type_icon == 'Unicons') {
                  if ($this->form_icon !== 'none') {
                     $cw_final_icon = '<div class="icon btn ' . $this->form_icon . ' btn-' . $this->size_icon . ' btn-' . $this->color_icon . ' ' . $class_icon . '" ' . $this->id_icon . '>' . $this->unicons_icon . '</div>';
                  } else {
                     $cw_unicons_icon = $this->unicons_icon;
                     $string = $cw_unicons_icon;
                     $patterns = '/">/';
                     $replacements = ' ' . $class_icon . '">';
                     $str =  preg_replace($patterns, $replacements, $string);
                     $cw_final_icon = $str;
                  }
               } elseif ($this->type_icon == 'SVG') {
                  $cw_final_icon =  $this->lineal_icon;
               } elseif ($this->type_icon == 'Number') {
                  if ($this->form_icon !== 'none') {
                     $cw_final_icon =  '<div class="icon btn ' . $this->form_icon . ' btn-' . $this->size_icon . ' btn-' . $this->color_icon . ' ' . $class_icon . '" ' . $this->id_icon . '><span class="number">' . $this->number_icon . '</span></div>';
                  } else {
                     $cw_final_icon =  '<span class="fs-60 lh-1 mb-3 d-block fw-normal ' . $this->color_icon . ' ' . $class_icon . '" ' . $this->id_icon . '>' . $this->number_icon . '</span>';
                  }
               } elseif ($this->type_icon == 'Image') {
                  $cw_final_icon =  $this->image_icon;
               } else {
                  $cw_final_icon = NULL;
               }
            } else {
               $cw_final_icon = $final_icon;
            }
         }
      } else {
         $cw_final_icon = NULL;
      }
      return
         $cw_final_icon;
   }
}
