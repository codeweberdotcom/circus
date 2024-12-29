<?php
//* --- Buttons Group Class ACF---

class Buttons
{
   public $form_button = NULL;
   public $button_outline = NULL;
   public $button_size = NULL;
   public $button_link = '#';
   public $gradient = NULL;
   public $ghligthbox = NULL;
   public $count = NULL;
   public $class_button_wrapper = "d-flex justify-content-start flex-wrap";
   public $default_button;
   public $data_cues = "slideInDown";
   public $data_group = "page-title-buttons";
   public $data_delay = "900";
   public $animate_swiper = 'false';
   public $animate_swiper_class = NULL;
   public $button_paddings = 'me-2 mb-2';

   //* Function Data Buttons *//
   public function showbuttons()
   {
      /* Count row buttons*/
      $count = 0;
      $repeater = get_sub_field('button_repeater');
      if (is_array($repeater)) {
         $this->count = count($repeater);
      }

      if (have_rows('button_repeater')) :

         /* Animate swiper */
         if ($this->animate_swiper == 'true') :
            $class_button_swiper_animate = 'animate__animated animate__slideInUp animate__delay-3s';
            $this->data_cues = NULL;
            $this->data_group = NULL;
            $this->data_delay = NULL;
         elseif ($this->animate_swiper == 'false') :
            $class_button_swiper_animate = NULL;
         endif;

         if ($this->count > 1) :
            echo "<div class='{$this->class_button_wrapper}' data-cues='{$this->data_cues}' data-group='{$this->data_group}' data-delay='{$this->data_delay}'>";
         endif;

         while (have_rows('button_repeater')) : the_row();
            $i = 0;
            if (have_rows('button_button')) :
               while (have_rows('button_button')) : the_row();

                  /* link */
                  $ghligthbox = NULL;
                  if (get_sub_field('select_type') == 'Page or Post') :

                     $button_link = get_sub_field('button_link');
                     if ($button_link) :
                        $button_link = get_permalink($button_link);
                     else :
                        $button_link = '#';
                     endif;

                  elseif (get_sub_field('select_type') == 'Taxonomy') :

                     $taxonomy = get_sub_field('taxonomy');
                     if ($taxonomy) :
                        $button_link = esc_url(get_term_link($taxonomy));
                     else :
                        $button_link = '#';
                     endif;
                  elseif (get_sub_field('select_type') == 'URL') :

                     if (get_sub_field('url')) :
                        $button_link = get_sub_field('url');
                     else :
                        $button_link = '#';
                     endif;

                  elseif (get_sub_field('select_type') == 'Video URL') :

                     if (get_sub_field('video_url')) :
                        $button_link = get_sub_field('video_url');
                        $ghligthbox = 'data-glightbox';
                     else :
                        $button_link = '#';
                     endif;

                  elseif (get_sub_field('select_type') == 'Form' && !is_admin()) :
                     $contact_form = get_sub_field('contact_form');
                     if ($contact_form) :
                        $cf7_id = $contact_form;
                        $button_bs_target = '#modal-form-' . $cf7_id;
                        global $forms;
                        if (is_array($forms)) :
                           array_push($forms, $cf7_id);
                        endif;
                     endif;
                  else :
                     $button_bs_target = '#';
                     $button_link = $this->button_link;
                  endif;

                  /* outline */
                  if (get_sub_field('outline_btn') == 1) :
                     $outline_class = "-outline";
                  else :
                     $outline_class = NULL;
                  endif;

                  /* color button class */
                  $color_button = get_sub_field('select_type_color');
                  if ($color_button == 'Solid') :
                     $color_btn = '-' . get_sub_field('theme_btn_solid_color');
                  elseif ($color_button == 'Soft') :
                     $color_btn = '-' . get_sub_field('theme_btn_soft_color');
                  elseif ($color_button == 'Gradient') :
                     $color_btn = '-gradient ' . get_sub_field('gradient_btn');
                  endif;

                  $color_button = 'btn' . $outline_class . $color_btn;

                  /* add icon classes */
                  if (get_sub_field('icon')) :
                     $icon_class = 'btn-icon btn-icon-start';
                     $icon_font = get_sub_field('icon');
                  else :
                     $icon_class = NULL;
                     $icon_font = NULL;
                  endif;

                  /* text button */
                  $text_button = get_sub_field('text_on_btn');

                  /* button size */
                  $button_size = $this->button_size;

                  /* button form */
                  $form_button = $this->form_button;

                  /* button type */
                  $button_type = get_sub_field('button_type');
                  if ($button_type == 'Expand') :
                     $button_type = ' btn-expand';
                     $icon_font = '<i class="uil uil-arrow-right"></i>';
                     $form_button = 'rounded-pill';
                  elseif ($button_type == 'Play') :
                     $button_type = ' btn-circle btn-play ripple';
                     $icon_font = '<i class="icn-caret-right"></i>';
                  elseif ($button_type == 'Default') :
                     $button_type = NULL;
                     $form_button = get_theme_mod('codeweber_button_form');
                     $button_size = get_theme_mod('codeweber_button_size');
                  elseif ($button_type == 'None') :
                     $button_type = 'none';
                  endif;

                  /* Show buttons */
                  if (get_sub_field('select_type') == 'Form') :
                     if (get_sub_field('button_type') == 'Expand') :
                        $button = '<span ' . $this->animate_swiper_class . '><button class = "btn ' . $color_button . ' ' . $class_button_swiper_animate . ' ' . $form_button . ' ' . $button_type . $this->button_paddings . '" data-bs-toggle="modal" data-bs-target="' . $button_bs_target . '">' . $icon_font . '<span>' . $text_button . '</span></button></span>';
                     elseif (get_sub_field('button_type') == 'Play') :
                        $button = '<span ' . $this->animate_swiper_class . '><button class = "btn ' . $color_button . ' ' . $class_button_swiper_animate . ' ' . $button_type . $this->button_paddings . '" data-bs-toggle="modal" data-bs-target="' . $button_bs_target . '">' . $icon_font .  '</button></span>';
                     elseif (get_sub_field('button_type') == 'None') :
                        $button = NULL;
                     else :
                        $button = '<span' . $this->animate_swiper_class . '><button class = "btn ' . $color_button . ' ' . $button_size . ' ' . $class_button_swiper_animate . ' ' . $icon_class . ' ' . $form_button . ' ' . $button_type . $this->button_paddings . '" data-bs-toggle="modal" data-bs-target="' . $button_bs_target . '"><span>' . $icon_font  . $text_button . '</span></button></span>';
                     endif;
                  else :
                     if (get_sub_field('button_type') == 'Expand') :
                        $button = '<span ' . $this->animate_swiper_class . '><a href="' . $button_link . '" class = "btn ' . $color_button . ' ' . $form_button . ' ' . $class_button_swiper_animate . ' ' . $button_type . $this->button_paddings . '" ' . $ghligthbox . '>' . $icon_font . '<span>' . $text_button . '</span></a></span>';
                     elseif (get_sub_field('button_type') == 'Play') :
                        $button = '<span ' . $this->animate_swiper_class . '><a href="' . $button_link . '" class = "btn ' . $color_button . ' ' . $class_button_swiper_animate . ' ' . $button_type . $this->button_paddings . '" ' . $ghligthbox . '>' . $icon_font .  '</a></span>';
                     elseif (get_sub_field('button_type') == 'None') :
                        $button = NULL;
                     else :
                        $button = '<span ' . $this->animate_swiper_class . '"><a href="' . $button_link . '" class = "btn ' . $color_button . ' ' . $button_size . ' ' . $class_button_swiper_animate . ' ' . $icon_class . ' ' . $form_button . ' ' . $button_type . $this->button_paddings . '" ' . $ghligthbox . '><span>' . $icon_font  . $text_button . '</span></a></span>';
                     endif;
                  endif;
                  echo $button;
               endwhile;
            endif;
         endwhile;
         if ($this->count > 1) :
            echo '</div>';
         endif;
      else :
         echo $this->default_button;
      endif;
   }

   public function showbuttonsoption()
   {

      /* Count row buttons*/
      $count = 0;
      $repeater = get_sub_field('button_repeater', 'option');
      if (is_array($repeater)) {
         $this->count = count($repeater);
      }

      if (have_rows('button_repeater', 'option')) :

         /* Animate swiper */
         if ($this->animate_swiper == 'true') :
            $class_button_swiper_animate = 'animate__animated animate__slideInUp animate__delay-3s';
            $this->data_cues = NULL;
            $this->data_group = NULL;
            $this->data_delay = NULL;
         elseif ($this->animate_swiper == 'false') :
            $class_button_swiper_animate = NULL;
         endif;

         if ($this->count > 1) :
            echo "<div class='{$this->class_button_wrapper}' data-cues='{$this->data_cues}' data-group='{$this->data_group}' data-delay='{$this->data_delay}'>";
         endif;

         while (have_rows('button_repeater', 'option')) : the_row();
            $i = 0;
            if (have_rows('button_button')) :
               while (have_rows('button_button')) : the_row();

                  /* link */
                  $ghligthbox = NULL;
                  if (get_sub_field('select_type') == 'Page or Post') :
                     $button_link = get_sub_field('button_link');
                     if ($button_link) :
                        $button_link = get_permalink($button_link);
                     endif;
                  elseif (get_sub_field('select_type') == 'Taxonomy') :
                     $taxonomy = get_sub_field('taxonomy');
                     if ($taxonomy) :
                        $button_link = esc_url(get_term_link($taxonomy));
                     endif;
                  elseif (get_sub_field('select_type') == 'URL') :
                     $button_link = get_sub_field('url');
                  elseif (get_sub_field('select_type') == 'Video URL') :
                     $button_link = get_sub_field('video_url');
                     $ghligthbox = 'data-glightbox';
                  elseif (get_sub_field('select_type') == 'Form') :
                     $contact_form = get_sub_field('contact_form');
                     if ($contact_form) :
                        global $forms;
                        $cf7_id = $contact_form;
                        $button_bs_target = "#modal-form-{$cf7_id}";
                        if (!is_admin()) {
                           array_push($forms, $cf7_id);
                        }
                     endif;
                  else :
                     $button_bs_target = '#';
                     $button_link = $this->button_link;
                  endif;

                  /* outline */
                  if (get_sub_field('outline_btn') == 1) :
                     $outline_class = "-outline";
                  else :
                     $outline_class = NULL;
                  endif;

                  /* color button class */
                  $color_button = get_sub_field('select_type_color');
                  if ($color_button == 'Solid') :
                     $color_btn = '-' . get_sub_field('theme_btn_solid_color');
                  elseif ($color_button == 'Soft') :
                     $color_btn = '-' . get_sub_field('theme_btn_soft_color');
                  elseif ($color_button == 'Gradient') :
                     $color_btn = '-gradient ' . get_sub_field('gradient_btn');
                  endif;

                  $color_button = 'btn' . $outline_class . $color_btn;

                  /* add icon classes */
                  if (get_sub_field('icon')) :
                     $icon_class = 'btn-icon btn-icon-start';
                     $icon_font = get_sub_field('icon');
                  else :
                     $icon_class = NULL;
                     $icon_font = NULL;
                  endif;

                  /* text button */
                  $text_button = get_sub_field('text_on_btn');

                  /* button size */
                  $button_size = $this->button_size;

                  /* button form */
                  $form_button = $this->form_button;

                  /* button type */
                  $button_type = get_sub_field('button_type');
                  if ($button_type == 'Expand') :
                     $button_type = ' btn-expand';
                     $icon_font = '<i class="uil uil-arrow-right"></i>';
                     $form_button = 'rounded-pill';
                  elseif ($button_type == 'Play') :
                     $button_type = ' btn-circle btn-play ripple';
                     $icon_font = '<i class="icn-caret-right"></i>';
                  elseif ($button_type == 'Default') :
                     $button_type = NULL;
                     $form_button = get_theme_mod('codeweber_button_form');
                     $button_size = get_theme_mod('codeweber_button_size');
                  elseif ($button_type == 'None') :
                     $button_type = 'none';
                  endif;

                  /* Show buttons */
                  if (get_sub_field('select_type') == 'Form') :
                     if (get_sub_field('button_type') == 'Expand') :
                        $button = '<span ' . $this->animate_swiper_class . '><button class = "btn ' . $color_button . ' ' . $class_button_swiper_animate . ' ' . $form_button . ' ' . $button_type . $this->button_paddings . '" data-bs-toggle="modal" data-bs-target="' . $button_bs_target . '">' . $icon_font . '<span>' . $text_button . '</span></button></span>';
                     elseif (get_sub_field('button_type') == 'Play') :
                        $button = '<span ' . $this->animate_swiper_class . '><button class = "btn ' . $color_button . ' ' . $class_button_swiper_animate . ' ' . $button_type . $this->button_paddings . '" data-bs-toggle="modal" data-bs-target="' . $button_bs_target . '">' . $icon_font .  '</button></span>';
                     elseif (get_sub_field('button_type') == 'None') :
                        $button = NULL;
                     else :
                        $button = '<span' . $this->animate_swiper_class . '><button class = "btn ' . $color_button . ' ' . $button_size . ' ' . $class_button_swiper_animate . ' ' . $icon_class . ' ' . $form_button . $button_type . ' me-2 mb-2" data-bs-toggle="modal" data-bs-target="' . $button_bs_target . '"><span>' . $icon_font  . $text_button . '</span></button></span>';
                     endif;
                  else :
                     if (get_sub_field('button_type') == 'Expand') :
                        $button = '<span ' . $this->animate_swiper_class . '><a href="' . $button_link . '" class = "btn ' . $color_button . ' ' . $form_button . ' ' . $class_button_swiper_animate . ' ' . $button_type . $this->button_paddings . '" ' . $ghligthbox . '>' . $icon_font . '<span>' . $text_button . '</span></a></span>';
                     elseif (get_sub_field('button_type') == 'Play') :
                        $button = '<span ' . $this->animate_swiper_class . '><a href="' . $button_link . '" class = "btn ' . $color_button . ' ' . $class_button_swiper_animate . ' ' . $button_type . $this->button_paddings . '" ' . $ghligthbox . '>' . $icon_font .  '</a></span>';
                     elseif (get_sub_field('button_type') == 'None') :
                        $button = NULL;
                     else :
                        $button = '<span ' . $this->animate_swiper_class . '"><a href="' . $button_link . '" class = "btn ' . $color_button . ' ' . $button_size . ' ' . $class_button_swiper_animate . ' ' . $icon_class . ' ' . $form_button . ' ' . $button_type . $this->button_paddings . '" ' . $ghligthbox . '><span>' . $icon_font  . $text_button . '</span></a></span>';
                     endif;
                  endif;
                  echo $button;
               endwhile;
            endif;
         endwhile;
         if ($this->count > 1) :
            echo '</div>';
         endif;
      else :
         echo $this->default_button;
      endif;
   }
}
