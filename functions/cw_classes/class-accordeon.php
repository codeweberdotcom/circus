<?php

//* ---Accordeon Class ACF---

class CW_Accordeon
{
   public $root_theme;
   public $type_accordeon;
   public $style_accordeon;
   public $roll_down_type;
   public $icon_default;
   public $icon_bool;
   public $responsive_class;

   public $accordeon_final;


   public function __construct($type_accordeon, $style_accordeon, $roll_down_type, $icon_default, $icon_bool, $responsive_class,  $accordeon_final)
   {
      $this->root_theme = get_template_directory_uri();
      $this->responsive_class = $this->cw_responsive_class($responsive_class);
      $this->type_accordeon = $this->cw_type_accordeon($type_accordeon);
      $this->style_accordeon = $this->cw_style_accordeon($style_accordeon);
      $this->roll_down_type = $this->cw_roll_down_type($roll_down_type);
      $this->icon_default = $this->cw_icon_default($icon_default);
      $this->icon_bool = $this->cw_icon_bool($icon_bool);

      $this->accordeon_final = $this->cw_accordeon_final($accordeon_final);
   }

   //type_accordeon
   public function cw_type_accordeon($type_accordeon)
   {
      if (have_rows('accordeon')) {
         while (have_rows('accordeon')) {
            the_row();
            $cw_type_accordeon = get_sub_field('cw_type_accordeon');
         }
      } elseif ($type_accordeon !== NULL) {
         $cw_type_accordeon = $type_accordeon;
      } else {
         $cw_type_accordeon = NULL;
      }
      return $cw_type_accordeon;
   }

   //style_accordeon
   public function cw_style_accordeon($style_accordeon)
   {
      if (have_rows('accordeon')) {
         while (have_rows('accordeon')) {
            the_row();
            $cw_style_accordeon = get_sub_field('cw_style_accordeon');
         }
      } elseif ($style_accordeon !== NULL) {
         $cw_style_accordeon = $style_accordeon;
      } else {
         $cw_style_accordeon = NULL;
      }
      return $cw_style_accordeon;
   }

   //roll_down_type
   public function cw_roll_down_type($roll_down_type)
   {
      if (have_rows('accordeon')) {
         while (have_rows('accordeon')) {
            the_row();
            $cw_roll_down_type = get_sub_field('cw_roll_down');
         }
      } elseif ($roll_down_type !== NULL) {
         $cw_roll_down_type = $roll_down_type;
      } else {
         $cw_roll_down_type = NULL;
      }
      return $cw_roll_down_type;
   }

   //icon_default
   public function cw_icon_default($icon_default)
   {
      if (have_rows('accordeon')) {
         while (have_rows('accordeon')) {
            the_row();
            $cw_icon_default = get_sub_field('icon_default');
         }
      } elseif ($icon_default !== NULL) {
         $cw_icon_default = $icon_default;
      } else {
         $cw_icon_default = NULL;
      }
      return $cw_icon_default;
   }

   //icon_bool
   public function cw_icon_bool($icon_bool)
   {
      if (have_rows('accordeon')) {
         while (have_rows('accordeon')) {
            the_row();
            if (get_sub_field('icon_accordeon') == 1) {
               $cw_icon_bool = true;
            } elseif ($icon_bool !== NULL) {
               $cw_icon_bool = $icon_bool;
            } else {
               $cw_icon_bool = NULL;
            }
         }
      }
      return $cw_icon_bool;
   }

   //responsive_class
   public function cw_responsive_class($responsive_class)
   {
      if (have_rows('accordeon')) {
         while (have_rows('accordeon')) {
            the_row();
            $responsive_object = new CW_Responsive_col(NULL, NULL, NULL, NULL, NULL, NULL);
            $cw_responsive_class = $responsive_object->responsive_class_final;
         }
      } else {
         $cw_responsive_class = NULL;
      }
      return $cw_responsive_class;
   }

   //cw_accordeon_final
   public function cw_accordeon_final($accordeon_final)
   {
      if (have_rows('accordeon')) {
         while (have_rows('accordeon')) {
            the_row();
            if ($this->type_accordeon == 'post') {
               if (get_sub_field('accordeon_posts')) {
                  $count_column =  count(get_sub_field('accordeon_posts'));
               } else {
                  $count_column = '0';
               }
               if (have_rows('accordeon_posts')) {
                  if ($count_column >= 2) {
                     $cw_accordeon_final = '<div class="row">';
                  } else {
                     $cw_accordeon_final = '';
                  }
                  if ($this->responsive_class !== NULL) {
                     $column_class = $this->responsive_class;
                  } else {
                     $column_class = 'col-12';
                  }
                  if ($this->icon_bool == 1) {
                     $icon_true = ' icon';
                  } else {
                     $icon_true = NULL;
                  }
                  while (have_rows('accordeon_posts')) {
                     the_row();
                     $row_column = '-' . rand(10000, 99999);
                     if ($this->roll_down_type == 'type 3') {
                        $type_3 = '-1';
                     } else {
                        $type_3 = NULL;
                     }
                     $accordeon_posts = get_sub_field('accordeon_posts');
                     if ($accordeon_posts) {
                        if ($this->responsive_class !== NULL && $count_column >= 2) {
                           $custom_accordeon_final = '<div class="' . $column_class . '">';
                        } else {
                           $custom_accordeon_final = '';
                        }
                        $custom_accordeon_final .= '<div class="accordion accordion-wrapper" id="accordionSimple' . $row_column . $type_3 . '">';
                        $row_index = 1;
                        foreach ($accordeon_posts as $post_ids) {
                           if ($row_index == '1' && $this->roll_down_type !== 'type 2' && $this->roll_down_type !== 'type 3') {
                              $show = 'show';
                              $collapsed_icon_class = NULL;
                           } else {
                              $show = NULL;
                              $collapsed_icon_class = ' collapsed';
                           }
                           $custom_accordeon_final .= '<div class="card ' . $this->style_accordeon . ' accordion-item' . $icon_true . '">';
                           $custom_accordeon_final .= '<div class="card-header" id="heading' . $row_index . $row_column . '">';
                           $custom_accordeon_final .= '<button class="accordion-button' . $collapsed_icon_class . '" data-bs-toggle="collapse" data-bs-target="#collapse' . $row_index . $row_column . '" aria-expanded="true" aria-controls="collapse' . $row_index . $row_column . '"></span>';
                           if (get_field('icon', $post_ids) && $this->icon_bool == 1) {
                              $icon_unicons  = '<span>' . get_field('icon', $post_ids) . '</span>';
                              $custom_accordeon_final .= $icon_unicons;
                           } elseif ($this->icon_default  && $this->icon_bool == 1) {
                              $icon_unicons = '<span>' . $this->icon_default . '</span>';
                              $custom_accordeon_final .= $icon_unicons;
                           } elseif ($this->icon_bool == 1) {
                              $icon_unicons = '<span><i class="uil uil-check-circle"></i></span>';
                              $custom_accordeon_final .= $icon_unicons;
                           }
                           $custom_accordeon_final .= get_the_title($post_ids);
                           $custom_accordeon_final .= '</button>';
                           $custom_accordeon_final .= '</div><!--/.card-header -->';
                           $custom_accordeon_final .= '<div id="collapse' . $row_index . $row_column . '" class="accordion-collapse collapse ' . $show . '" aria-labelledby="heading' . $row_index . $row_column . '" data-bs-parent="#accordionSimple' . $row_column . '">';
                           $custom_accordeon_final .= '<div class="card-body">';
                           $custom_accordeon_final .= '<p>' . get_field('paragraph', $post_ids) . '</p>';
                           $custom_accordeon_final .= ' </div><!--/.card-body --></div><!--/.accordion-collapse --></div><!--/.accordion-item -->';
                           $row_index++;
                        }
                        $custom_accordeon_final .= '</div>';
                        if ($this->responsive_class !== NULL && $count_column >= 2) {
                           $custom_accordeon_final .= '</div>';
                        }
                        $cw_accordeon_final .= $custom_accordeon_final;
                     }
                  }
               } else {
                  $cw_accordeon_final = $accordeon_final;
               };
            } elseif ($this->type_accordeon == 'custom') {
               if (get_sub_field('accordeon_custom')) {
                  $count_column =  count(get_sub_field('accordeon_custom'));
               } else {
                  $count_column = '0';
               }
               if (have_rows('accordeon_custom')) {
                  $cw_accordeon_final = '<div class="row">';
                  if ($this->responsive_class !== NULL) {
                     $column_class = $this->responsive_class;
                  } else {
                     $column_class = 'col-12';
                  }
                  if ($this->icon_bool == 1) {
                     $icon_true = ' icon';
                  } else {
                     $icon_true = NULL;
                  }
                  while (have_rows('accordeon_custom')) {
                     the_row();
                     $row_column = get_row_index();

                     if (have_rows('cw_accordeon_column')) {
                        if ($this->roll_down_type == 'type 3') {
                           $type_3 = '-1';
                        } else {
                           $type_3 = NULL;
                        }

                        if ($this->responsive_class !== NULL && $count_column >= 2) {
                           $custom_accordeon_final = '<div class="' . $column_class . '">';
                        } else {
                           $custom_accordeon_final = '';
                        }

                        $custom_accordeon_final .= '<div class="accordion accordion-wrapper" id="accordionSimple' . $row_column . $type_3 . '">';
                        while (have_rows('cw_accordeon_column')) {
                           the_row();
                           if (get_row_index() == '1' && $this->roll_down_type !== 'type 2' && $this->roll_down_type !== 'type 3') {
                              $show = 'show';
                              $collapsed_icon_class = NULL;
                           } else {
                              $show = NULL;
                              $collapsed_icon_class = ' collapsed';
                           }
                           $custom_accordeon_final .= '<div class="card ' . $this->style_accordeon . ' accordion-item' . $icon_true . '">';
                           $custom_accordeon_final .= '<div class="card-header" id="heading' . get_row_index() . $row_column . '">';
                           $custom_accordeon_final .= '<button class="accordion-button' . $collapsed_icon_class . '" data-bs-toggle="collapse" data-bs-target="#collapse' . get_row_index() . $row_column . '" aria-expanded="true" aria-controls="collapse' . get_row_index() . $row_column . '"></span>';

                           if (get_sub_field('cw_icon') && $this->icon_bool == 1) {
                              $icon_unicons  = '<span>' . get_sub_field('cw_icon') . '</span>';
                              $custom_accordeon_final .= $icon_unicons;
                           } elseif ($this->icon_default !== NULL && $this->icon_bool == 1) {
                              $icon_unicons = '<span>' . $this->icon_default . '</span>';
                              $custom_accordeon_final .= $icon_unicons;
                           }
                           $custom_accordeon_final .= get_sub_field('cw_question');
                           $custom_accordeon_final .= '</button>';
                           $custom_accordeon_final .= '</div><!--/.card-header -->';
                           $custom_accordeon_final .= '<div id="collapse' . get_row_index() . $row_column . '" class="accordion-collapse collapse ' . $show . '" aria-labelledby="heading' . get_row_index() . $row_column . '" data-bs-parent="#accordionSimple' . $row_column . '">';
                           $custom_accordeon_final .= '<div class="card-body">';
                           $custom_accordeon_final .= '<p>' . get_sub_field('cw_answer') . '</p>';
                           $custom_accordeon_final .= ' </div><!--/.card-body --></div><!--/.accordion-collapse --></div><!--/.accordion-item -->';
                        }
                        $custom_accordeon_final .= '</div>';

                        if ($this->responsive_class !== NULL && $count_column >= 2) {
                           $custom_accordeon_final .= '</div>';
                        }

                        $cw_accordeon_final .= $custom_accordeon_final;
                     } else {
                        $custom_accordeon_final = $accordeon_final;
                     }
                  }
               } else {
                  $cw_accordeon_final = $accordeon_final;
               }
            }
         }
         if ($count_column >= 2) {
            $cw_accordeon_final .= '</div>';
         }
      } else {
         $cw_accordeon_final = $accordeon_final;
      }
      return $cw_accordeon_final;
   }
}
