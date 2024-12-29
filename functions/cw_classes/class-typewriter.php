<?php

//* ---Typewriter---

class CW_Typewriter
{
   public $typewriter_loop;
   public $typewriter_delay;
   public $typewriter_color;
   public $typewriter_cursor;
   public $typewriter_text;
   public $typewriter_clean_text;
   public $typewriter_effect;
   public $typewriter_class;


   public $typewriter_final;

   public function __construct($cw_settings)
   {
      $this->typewriter_loop = $this->cw_typewriter_loop($cw_settings);
      $this->typewriter_effect = $this->cw_typewriter_effect($cw_settings);
      $this->typewriter_delay = $this->cw_typewriter_delay($cw_settings);
      $this->typewriter_color = $this->cw_typewriter_color($cw_settings);
      $this->typewriter_cursor = $this->cw_typewriter_cursor($cw_settings);
      $this->typewriter_text = $this->cw_typewriter_text($cw_settings);
      $this->typewriter_class = $this->cw_typewriter_class($cw_settings);


      $this->typewriter_final = $this->cw_typewriter_final($cw_settings);
   }


   //Typewriter_loop
   public function cw_typewriter_effect($cw_settings)
   {
      if (have_rows('typewriter')) {
         while (have_rows('typewriter')) {
            the_row();
            if (get_sub_field('cw_effect') == 'rotator-fade') {
               $cw_typewriter_effect = 'rotator-fade';
            } elseif (get_sub_field('cw_effect') == 'rotator-zoom') {
               $cw_typewriter_effect = 'rotator-zoom';
            } elseif (get_sub_field('cw_effect') == 'cursor') {
               $cw_typewriter_effect = 'cursor';
            }
         }
      } else {
         $cw_typewriter_effect = true;
      }
      return $cw_typewriter_effect;
   }


   //Typewriter_loop
   public function cw_typewriter_loop($cw_settings)
   {
      if (have_rows('typewriter')) :
         while (have_rows('typewriter')) : the_row();
            if (get_sub_field('cw_loop') == 1) :
               $typewriter_loop = ' data-loop="true"';
            else :
               $typewriter_loop = ' data-loop="false"';
            endif;
         endwhile;
      else :
         $typewriter_loop = true;
      endif;
      return $typewriter_loop;
   }

   //Typewriter_delay
   public function cw_typewriter_delay($cw_settings)
   {
      if (have_rows('typewriter')) :
         while (have_rows('typewriter')) : the_row();
            if (get_sub_field('cw_delay')) {
               $typewriter_delay = ' data-delay="' . get_sub_field('cw_delay') . '"';
            } else {
               $typewriter_delay = NULL;
            }
         endwhile;
      else :
         $typewriter_delay = NULL;
      endif;
      return $typewriter_delay;
   }

   //Typewriter_color
   public function cw_typewriter_color($cw_settings)
   {
      if (have_rows('typewriter')) :
         while (have_rows('typewriter')) : the_row();
            $typewriter_color =  new CW_Color(NULL, NULL);
         endwhile;
      else :
         $typewriter_color = NULL;
      endif;
      return $typewriter_color;
   }

   //Typewriter_Class
   public function cw_typewriter_class($cw_settings)
   {
      if (have_rows('typewriter')) :
         while (have_rows('typewriter')) : the_row();
            $typewriter_class =  get_sub_field('cw_class');
         endwhile;
      else :
         $typewriter_class = NULL;
      endif;
      return $typewriter_class;
   }

   //Typewriter_cursor
   public function cw_typewriter_cursor($cw_settings)
   {
      if (have_rows('typewriter')) :
         while (have_rows('typewriter')) : the_row();
            if (get_sub_field('cw_cursor') == 1) :
               $typewriter_cursor = '<span class="cursor text-primary" data-owner="typer">';
            else :
               $typewriter_cursor = NULL;
            endif;

         endwhile;
      else :
         $typewriter_cursor = NULL;
      endif;
      return $typewriter_cursor;
   }

   //Typewriter_text
   public function cw_typewriter_text($cw_settings)
   {
      if (have_rows('typewriter')) {
         $typewriter_text_array = array();
         while (have_rows('typewriter')) : the_row();
            if (have_rows('cw_typewriter')) :
               while (have_rows('cw_typewriter')) : the_row();
                  $typewriter_text_array[] = get_sub_field('cw_text');
               endwhile;
               $typewriter_text = 'data-words="' . implode(',', $typewriter_text_array) . '"';
               $this->typewriter_clean_text = implode(',', $typewriter_text_array);
            else :
               $typewriter_text = 'data-words="' . $cw_settings['typewriter'] . '"';
               $this->typewriter_clean_text = $cw_settings['typewriter'];
            endif;
         endwhile;
      } else {
         $typewriter_text = NULL;
      }
      return $typewriter_text;
   }

   //Typewriter_Final
   public function cw_typewriter_final($cw_settings)
   {
      $typewriter_text = $this->typewriter_text;
      $data_typewriter = $this->typewriter_delay;
      $data_typewriter .= $this->typewriter_loop;
      $data_typewriter .= $this->typewriter_text;
      $color_typewriter = $this->typewriter_color;
      $class_typewriter = $this->typewriter_class;
      if ($typewriter_text) {
         if ($this->typewriter_effect == 'cursor') {
            $final_typewriter = '<span class="' . $class_typewriter . ' typer text-' . $color_typewriter->color . '" ' . $data_typewriter . '></span><span class="' . $class_typewriter . ' cursor text-' . $color_typewriter->color . '" data-owner="typer"></span>';
         } elseif ($this->typewriter_effect == 'rotator-zoom') {
            $final_typewriter = '<span class="rotator-zoom text-' . $color_typewriter->color . '">' . $this->typewriter_clean_text . '</span>';
         } elseif ($this->typewriter_effect == 'rotator-fade') {
            $final_typewriter = '<span class="rotator-fade text-' . $color_typewriter->color . '">' . $this->typewriter_clean_text . '</span>';
         } else {
            $final_typewriter = NULL;
         }
      } else {
         $final_typewriter = NULL;
      }


      return $final_typewriter;
   }
}
