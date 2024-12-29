<?php

//* ---Progress Class ACF---

class CW_ProgressItem
{
   public $type_progress;
   public $color_progress;
   public $title_progress;
   public $paragraph_progress;
   public $num_progress;
   public $progress_final;

   public function __construct($type_progress, $title_progress, $num_progress, $color_progress, $progress_final, $paragraph_progress, $pattern_array)
   {
      $this->type_progress = $this->cw_type_progress($type_progress);
      $this->color_progress = $this->cw_color_progress($color_progress);
      $this->title_progress = $this->cw_title_progress($title_progress);
      $this->paragraph_progress = $this->cw_paragraph_progress($paragraph_progress);
      $this->num_progress = $this->cw_num_progress($num_progress);
      $this->progress_final = $this->cw_progress_final($progress_final);
   }


   public function cw_paragraph_progress($paragraph_progress)
   {
      if (get_sub_field('cw_paragraph')) {
         $cw_paragraph_progress = get_sub_field('cw_paragraph');
      } elseif ($paragraph_progress !== NULL) {
         $cw_paragraph_progress =  $paragraph_progress;
      } else {
         $cw_paragraph_progress = NULL;
      }
      return $cw_paragraph_progress;
   }


   public function cw_title_progress($title_progress)
   {
      if (get_sub_field('title')) {
         $cw_title_progress = get_sub_field('title');
      } elseif ($title_progress !== NULL) {
         $cw_title_progress =  $title_progress;
      } else {
         $cw_title_progress = NULL;
      }
      return $cw_title_progress;
   }

   public function cw_num_progress($num_progress)
   {
      if (get_sub_field('number')) {
         $cw_num_progress = get_sub_field('number');
      } elseif ($num_progress !== NULL) {
         $cw_num_progress =  $num_progress;
      } else {
         $cw_num_progress = '100';
      }
      return $cw_num_progress;
   }

   public function cw_type_progress($type_progress)
   {
      if ($type_progress !== NULL) {
         $cw_type_progress =  $type_progress;
      } else {
         $cw_type_progress  = 'line';
      }
      return $cw_type_progress;
   }

   public function cw_color_progress($color_progress)
   {
      $color_object = new CW_Color(NULL, NULL);
      $cw_color_progress = $color_object->color;
      return $cw_color_progress;
   }

   public function cw_progress_final($progress_final)
   {
      $progress_class_array = array();
      if ($this->type_progress == 'line') {
         $progress_class_array[] = $this->type_progress;
      } elseif ($this->type_progress == 'semi-circle') {
         $progress_class_array[] = $this->type_progress;
      }
      $progress_class_array[] = $this->color_progress;

      if ($this->title_progress !== NULL) {
         $title = '<p>' . $this->title_progress . '</p>';
      } else {
         $title = NULL;
      }

      if ($this->paragraph_progress !== NULL) {
         $paragraph = $this->paragraph_progress;
      } else {
         $paragraph = NULL;
      }

      $data_value = $this->num_progress;
      $progress_class = implode(' ', $progress_class_array);

      $cw_progress_final = '';
      if ($this->type_progress == 'line') {
         $cw_progress_final = '' . $title . '<div class="progressbar ' . $progress_class . '" data-value="' . $data_value . '"></div>';
      } elseif ($this->type_progress == 'semi-circle') {

         $cw_progress_final = '<div class="progressbar ' . $progress_class . '" data-value="' . $data_value . '"></div>';

         if ($this->title_progress !== NULL) {
            $cw_progress_final .= '<div class="h4 text-center">' . $title . '</div>';
         }

         if ($this->paragraph_progress !== NULL) {
            $cw_progress_final .= '<p class="mb-0 text-center">' . $paragraph . '</p>';
         }
      }
      return $cw_progress_final;
   }
}


class CW_ProgressList
{
   public $progress_final;
   public function __construct($type_progress, $progress_final, $pattern_array)
   {
      $this->progress_final = $this->cw_progress_final($type_progress, $progress_final, $pattern_array);
   }
   public function cw_progress_final($type_progress, $progress_final, $pattern_array)
   {
      if (have_rows('progress')) {
         while (have_rows('progress')) {
            the_row();
            $type_progress = get_sub_field('cw_progress_type');

            $progress_list = '';

            if ($pattern_array !== NULL && $type_progress !== 'line') {
               $progress_list .= $pattern_array[0];
            }


            if (have_rows('cw_progress_list')) {

               if ($type_progress == 'line') {
                  $progress_list .= '<ul class="progress-list">';
               }

               while (have_rows('cw_progress_list')) {
                  the_row();



                  if ($type_progress == 'line') {
                     $progress_list .= '<li>';
                  }

                  if ($pattern_array !== NULL && $type_progress !== 'line') {
                     $progress_list .= $pattern_array[2];
                  }


                  $progress_item_object = new CW_ProgressItem($type_progress, NULL, NULL, NULL, NULL, NULL, $pattern_array);
                  $progress_list .=  $progress_item_object->progress_final;

                  if ($pattern_array !== NULL && $type_progress !== 'line') {
                     $progress_list .= $pattern_array[3];
                  }

                  if ($type_progress == 'line' && $type_progress !== 'line') {
                     $progress_list .= '</li>';
                  }
               }

               if ($pattern_array !== NULL && $type_progress !== 'line') {
                  $progress_list .= $pattern_array[1];
               }


               if ($type_progress == 'line') {
                  $progress_list .= '</ul>';
               }
               $cw_progess_final = $progress_list;
            } else {
               $cw_progess_final = $progress_final;
            }
         }
      } else {
         $cw_progess_final = NULL;
      }
      return $cw_progess_final;
   }
}
