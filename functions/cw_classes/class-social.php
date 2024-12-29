<?php

//* ---Accordeon Class ACF---

class CW_Social
{
   public $type_social;
   public $social_final;


   public function __construct($type_social, $social_final, $class_nav, $post_id)
   {
      $this->type_social = $this->cw_type_social($type_social, $post_id);
      $this->social_final = $this->cw_social_final($social_final, $class_nav, $post_id);
   }

   public function cw_type_social($type_social, $post_id)
   {
      if (have_rows('social_profiles', $post_id)) {
         while (have_rows('social_profiles', $post_id)) {
            the_row();
            if (get_sub_field('type')) {
               $cw_type_social = get_sub_field('type');
            } else {
               $cw_type_social = NULL;
            }
         }
      } else {
         $cw_type_social = NULL;
      }
      return $cw_type_social;
   }


   public function cw_social_final($social_final, $class_nav, $post_id)
   {
      $social_final_array = array();
      $pattern_1 = '<a href="%1$s" class="btn btn-circle btn-sm btn-%2$s"><i class="uil uil-%2$s"></i></a>';
      $pattern_2 = '<a href="%1$s"><i class="uil uil-%2$s"></i></a>';
      if ($post_id !== NULL) {
         $cw_post_id = $post_id;
      } else {
         $cw_post_id = NULL;
      }
      if (have_rows('social_profiles', $cw_post_id)) {
         while (have_rows('social_profiles', $cw_post_id)) {
            the_row();
            if (have_rows('social')) {
               while (have_rows('social')) {
                  the_row();
                  if (get_sub_field('telegram') && $this->type_social == 'Type 1') {
                     $social_final_array[] =  sprintf($pattern_1, get_sub_field('telegram'), 'telegram');
                  } elseif (get_sub_field('telegram')) {
                     $social_final_array[] =  sprintf($pattern_2, get_sub_field('telegram'), 'telegram');
                  }

                  if (get_sub_field('whatsapp') && $this->type_social == 'Type 1') {
                     $social_final_array[] =  sprintf($pattern_1, get_sub_field('whatsapp'), 'whatsapp');
                  } elseif (get_sub_field('whatsapp')) {
                     $social_final_array[] =  sprintf($pattern_2, get_sub_field('whatsapp'), 'whatsapp');;
                  }
                  if (get_sub_field('vkontakte') && $this->type_social == 'Type 1') {
                     $social_final_array[] =  sprintf($pattern_1, get_sub_field('vkontakte'), 'vk');
                  } elseif (get_sub_field('vkontakte')) {
                     $social_final_array[] =  sprintf($pattern_2, get_sub_field('vkontakte'), 'vk');
                  }
                  if (get_sub_field('facebook') && $this->type_social == 'Type 1') {
                     $social_final_array[] =  sprintf($pattern_1, get_sub_field('facebook'), 'facebook');
                  } elseif (get_sub_field('facebook')) {
                     $social_final_array[] =  sprintf($pattern_2, get_sub_field('facebook'), 'facebook');
                  }
                  if (get_sub_field('instagram') && $this->type_social == 'Type 1') {
                     $social_final_array[] =  sprintf($pattern_1, get_sub_field('instagram'), 'instagram');
                  } elseif (get_sub_field('instagram')) {
                     $social_final_array[] =  sprintf($pattern_2, get_sub_field('instagram'), 'instagram');
                  }

                  if (get_sub_field('twitter') && $this->type_social == 'Type 1') {
                     $social_final_array[] =  sprintf($pattern_1, get_sub_field('twitter'), 'twitter');
                  } elseif (get_sub_field('twitter')) {
                     $social_final_array[] =  sprintf($pattern_2, get_sub_field('twitter'), 'twitter');
                  }
                  if (get_sub_field('dribbble') && $this->type_social == 'Type 1') {
                     $social_final_array[] =  sprintf($pattern_1, get_sub_field('dribbble'), 'dribbble');
                  } elseif (get_sub_field('dribbble')) {
                     $social_final_array[] =  sprintf($pattern_2, get_sub_field('dribbble'), 'dribbble');
                  }
                  if (get_sub_field('youtube') && $this->type_social == 'Type 1') {
                     $social_final_array[] =  sprintf($pattern_1, get_sub_field('youtube'), 'youtube');
                  } elseif (get_sub_field('youtube')) {
                     $social_final_array[] =  sprintf($pattern_2, get_sub_field('youtube'), 'youtube');
                  }
                  if (get_sub_field('github') && $this->type_social == 'Type 1') {
                     $social_final_array[] =  sprintf($pattern_1, get_sub_field('github'), 'github');
                  } elseif (get_sub_field('github')) {
                     $social_final_array[] =  sprintf($pattern_2, get_sub_field('github'), 'github');
                  }
                  if (get_sub_field('linkedin') && $this->type_social == 'Type 1') {
                     $social_final_array[] =  sprintf($pattern_1, get_sub_field('linkedin'), 'linkedin');
                  } elseif (get_sub_field('linkedin')) {
                     $social_final_array[] =  sprintf($pattern_2, get_sub_field('linkedin'), 'linkedin');
                  }
                  if (get_sub_field('line') && $this->type_social == 'Type 1') {
                     $social_final_array[] =  sprintf($pattern_1, get_sub_field('line'), 'line');
                  } elseif (get_sub_field('line')) {
                     $social_final_array[] =  sprintf($pattern_2, get_sub_field('line'), 'line');
                  }

                  if (get_sub_field('behance') && $this->type_social == 'Type 1') {
                     $social_final_array[] =  sprintf($pattern_1, get_sub_field('behance'), 'behance');
                  } elseif (get_sub_field('behance')) {
                     $social_final_array[] =  sprintf($pattern_2, get_sub_field('twitch'), 'behance');
                  }
               }
            }
         }
      }
      if (isset($social_final_array[0])) {
         if ($class_nav !== NULL) {
            $cw_nav_class = $class_nav;
         } else {
            $cw_nav_class = NULL;
         }
         if ($this->type_social == 'Type 1' || $this->type_social == 'Type 3') {
            $cw_social_final = '<nav class="nav social ' . $cw_nav_class . '">';
         } elseif ($this->type_social == 'Type 2') {
            $cw_social_final = '<nav class="nav social social-muted ' . $cw_nav_class . '">';
         }
         $cw_social_final .= implode('', $social_final_array);
         $cw_social_final .= '</nav>';
      } else {
         $cw_social_final = $social_final;
      }

      if ($this->type_social == 'Disable') {
         $cw_social_final = NULL;
      }

      return $cw_social_final;
   }
}
