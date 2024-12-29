<?php

//* ---Tooltip ACF---

class CW_Tooltip
{
   public $type_tooltip;
   public $tooltip_position;
   public $tooltip_title;
   public $tooltip_content;
   public $tooltip_data;


   public function __construct($type_tooltip, $tooltip_position, $tooltip_title, $tooltip_content, $tooltip_data)
   {
      $this->type_tooltip = $this->cw_type_tooltip($type_tooltip);
      $this->tooltip_position = $this->cw_tooltip_position($tooltip_position);
      $this->tooltip_title = $this->cw_tooltip_title($tooltip_title);
      $this->tooltip_content = $this->cw_tooltip_content($tooltip_content);
      $this->tooltip_data = $this->cw_tooltip_data($tooltip_data);
   }

   //type_tooltip
   public function cw_type_tooltip($type_tooltip)
   {
      if (get_sub_field('type_tooltip')) {
         $cw_type_tooltip = get_sub_field('type_tooltip');
      } elseif ($type_tooltip !== NULL) {
         $cw_type_tooltip = $type_tooltip;
      } else {
         $cw_type_tooltip = NULL;
      }
      return $cw_type_tooltip;
   }

   //tooltip_position
   public function cw_tooltip_position($tooltip_position)
   {
      if (get_sub_field('cw_position')) {
         $cw_tooltip_position = get_sub_field('cw_position');
      } elseif ($tooltip_position !== NULL) {
         $cw_tooltip_position = $tooltip_position;
      } else {
         $cw_tooltip_position = NULL;
      }
      return $cw_tooltip_position;
   }

   //tooltip_title
   public function cw_tooltip_title($tooltip_title)
   {
      if (get_sub_field('cw_title')) {
         $cw_tooltip_title = get_sub_field('cw_title');
      } elseif ($tooltip_title !== NULL) {
         $cw_tooltip_title = $tooltip_title;
      } else {
         $cw_tooltip_title = NULL;
      }
      return $cw_tooltip_title;
   }

   //tooltip_content
   public function cw_tooltip_content($tooltip_content)
   {
      if (get_sub_field('cw_paragraph')) {
         $cw_tooltip_content = get_sub_field('cw_paragraph');
      } elseif ($tooltip_content !== NULL) {
         $cw_tooltip_content = $tooltip_content;
      } else {
         $cw_tooltip_content = NULL;
      }
      return $cw_tooltip_content;
   }

   //tooltip_data
   public function cw_tooltip_data($tooltip_data)
   {
      $data_tooltip = array();

      if ($this->tooltip_position !== NULL) {
         $data_tooltip[] = 'data-bs-placement="' . $this->tooltip_position . '"';
      }

      if ($this->tooltip_title !== NULL) {
         $data_tooltip[] = 'title="' . $this->tooltip_title . '"';
      }

      if ($this->type_tooltip == 'Tooltip') {
         $data_tooltip[] = 'data-bs-toggle="tooltip"';
      } elseif ($this->type_tooltip == 'Popover') {
         $data_tooltip[] = 'data-bs-toggle="popover"';
         $data_tooltip[] = 'tabindex="0"';
         $data_tooltip[] = 'data-bs-trigger="focus"';
         $data_tooltip[] = 'data-bs-content="' . $this->tooltip_content . '"';
      }

      $cw_tooltip_data = implode(' ', $data_tooltip);
      return $cw_tooltip_data;
   }
}
