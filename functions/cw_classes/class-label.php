<?php

//* ---Label Class ACF---

class CW_Labels
{
   public $label_pattern;
   public $label_demo;
   public $final_labels;

   public function __construct($label_pattern, $label_demo, $final_labels)
   {
      $this->label_pattern = $this->cw_label_pattern($label_pattern);
      $this->label_demo = $this->cw_label_demo($label_demo);
      $this->final_labels = $this->cw_final_labels($final_labels, $label_demo, $label_pattern);
   }

   // Label_pattern
   public function cw_label_pattern($label_pattern)
   {
      if ($label_pattern !== NULL) {
         $cw_label_pattern = $label_pattern;
      } else {
         $cw_label_pattern = NULL;
      }
      return $cw_label_pattern;
   }

   // Labels demo
   public function cw_label_demo($label_demo)
   {
      if ($label_demo !== NULL) {
         $cw_label_demo = $label_demo;
      } else {
         $cw_label_demo = NULL;
      }
      return $cw_label_demo;
   }

   // Final_labels
   public function cw_final_labels($final_labels, $label_demo, $label_pattern)
   {
      $class_icon = 'me-3';
      $style_object = new CW_Position(NULL, NULL, NULL, NULL, NULL);
      $style = $style_object->position_final;



      $features_item = new CW_Feature(NULL, NULL, NULL, NULL, $this->label_pattern, $this->label_demo,  $style, NULL, $class_icon, NULL, NULL);
      $cw_final_label =  $features_item->features_item_final;



      return $cw_final_label;
   }
}
