<?php

//* ---Image Class ACF---

class CW_Image
{
   public $root_theme;

   public $image_url_big;
   public $image_url_small;

   public $image_link_type;
   public $image_link;

   public $image_id;
   public $image_alt;
   public $image_shape;
   public $image_title;
   public $image_figcaption;
   public $image_description;
   public $image_classes;
   public $cursor_effect;
   public $wrapper_image_classes;

   public $image_thumb_size;
   public $image_big_size;
   public $image_srscet;
   public $image_clean_title;
   public $image_pattern;

   public $final_image;


   public function __construct($image_thumb_size, $image_big_size, $image_link_type, $image_link, $image_alt, $image_shape, $image_classes, $wrapper_image_classes, $final_image, $image_pattern, $label)
   {
      $this->root_theme = get_template_directory_uri();
      $this->image_pattern = $this->cw_image_pattern($image_pattern);
      $this->image_title = $this->cw_title_image();
      $this->image_srscet = $this->cw_image_size($image_thumb_size, $image_big_size);
      $this->image_link = $this->cw_image($image_thumb_size, $image_big_size, $image_link);
      $this->image_classes = $this->cw_image_classes($image_classes, $image_shape);
      $this->image_shape = $this->cw_image_shape($image_shape);
      $this->wrapper_image_classes = $this->cw_wrapper_image_classes($wrapper_image_classes, $image_shape);
      $this->image_link = $this->cw_link_image($image_link);
      $this->final_image = $this->cw_final_image($final_image, $image_link, $image_pattern, $label);
   }

   //Image Pattern
   public function cw_image_pattern($image_pattern)
   {
      if ($image_pattern !== NULL) {
         $cw_image_pattern = $image_pattern;
      } else {
         $cw_image_pattern = NULL;
      }
      return $cw_image_pattern;
   }


   //Image Shape
   public function cw_image_shape($image_shape)
   {
      if (have_rows('cw_image1')) {
         while (have_rows('cw_image1')) {
            the_row();
            if (get_sub_field('cw_shape_image') == 'Theme') {
               $cw_image_shape = get_sub_field('cw_shape_image');
            } elseif (get_sub_field('cw_shape_image') == 'None') {
               $cw_image_shape = NULL;
            } else {
               $cw_image_shape = get_sub_field('cw_shape_image');
            }
         }
      } else {
         $cw_image_shape = NULL;
      }
      return $cw_image_shape;
   }


   //Image Link
   public function cw_link_image($image_link)
   {
      if (have_rows('cw_image1')) {
         while (have_rows('cw_image1')) {
            the_row();
            if (get_sub_field('cw_link_type') == 'image') {
               $cw_image_link =  $this->image_url_big;
            } elseif (get_sub_field('cw_link_type') == 'link') {

               $cw_image_link = get_sub_field('cw_link');
            } elseif (get_sub_field('cw_link_type') == 'video') {
               $cw_image_link = get_sub_field('media');
            } elseif (get_sub_field('cw_link_type') == 'youtube') {
               $cw_image_link = get_sub_field('cw_link_video');
            } elseif (get_sub_field('cw_link_type') == 'youtube_preview') {
               $youtubeid = getYoutubeIdFromUrl(get_sub_field('cw_link_video'));
               $this->image_url_small = 'https://img.youtube.com/vi/' . $youtubeid . '/sddefault.jpg';
               $cw_image_link = get_sub_field('cw_link_video');
            } elseif (get_sub_field('cw_link_type') == 'none') {
               $cw_image_link = NULL;
            }
         }
      } else {
         $cw_image_link = NULL;
      }
      return $cw_image_link;
   }

   //Image Title
   public function cw_title_image()
   {
      if (have_rows('cw_image1')) {
         while (have_rows('cw_image1')) {
            the_row();
            if (get_sub_field('cw_cursor_effect') == 'itooltip itooltip-light' || get_sub_field('cw_cursor_effect') == 'itooltip itooltip-dark' || get_sub_field('cw_cursor_effect') == 'itooltip itooltip-primary') {
               if (get_sub_field('cw_caption_image')) {
                  $image_title = 'title="' . get_sub_field('cw_caption_image') . '"';
                  $this->image_clean_title = get_sub_field('cw_caption_image');
                  $this->image_description = get_sub_field('description_image');
               } else {
                  $image_title = 'title="Вы не заполнили Заголовок"';
               }
            } elseif ((get_sub_field('cw_cursor_effect') == 'overlay overlay-1' || get_sub_field('cw_cursor_effect') == 'overlay overlay-2' || get_sub_field('cw_cursor_effect') == 'overlay overlay-3')) {
               $image_title = NULL;
               $this->image_clean_title = NULL;
               if (get_sub_field('cw_caption_image') || get_sub_field('description_image')) {
                  $this->image_clean_title = NULL;
                  $image_title = NULL;
                  $figcaption = '<figcaption>';
                  if (get_sub_field('cw_caption_image') && get_sub_field('cw_cursor_effect') == 'overlay overlay-1') {
                     $figcaption .= '<h5 class="from-top mb-0">' . get_sub_field('cw_caption_image') . '</h5>';
                  } elseif (get_sub_field('cw_caption_image') && get_sub_field('cw_cursor_effect') == 'overlay overlay-2') {
                     $figcaption .= '<h5 class="from-top mb-1">' . get_sub_field('cw_caption_image') . '</h5>';
                  } elseif (get_sub_field('cw_caption_image') && get_sub_field('cw_cursor_effect') == 'overlay overlay-3') {
                     $figcaption .= '<h5 class="from-left mb-1">' . get_sub_field('cw_caption_image') . '</h5>';
                  }
                  if (get_sub_field('description_image') && get_sub_field('cw_cursor_effect') == 'overlay overlay-2') {
                     $figcaption .= '<h5 class="from-bottom">' . get_sub_field('description_image') . '</p>';
                  } elseif (get_sub_field('description_image') && get_sub_field('cw_cursor_effect') == 'overlay overlay-3') {
                     $figcaption .= '<p class="from-left mb-0">' . get_sub_field('description_image') . '</p>';
                  }
                  $figcaption .= '</figcaption>';
                  $this->image_figcaption = $figcaption;
               }
            } elseif (get_sub_field('cw_cursor_effect') == 'video_button') {
               $this->cursor_effect = 'video_button';
               $this->image_description = get_sub_field('description_image');
               $this->image_figcaption = NULL;
               $image_title = get_sub_field('cw_caption_image');
               $this->image_clean_title = get_sub_field('cw_caption_image');
            } elseif (get_sub_field('cw_cursor_effect') == 'swiper-caption') {
               $this->image_clean_title = get_sub_field('cw_caption_image');
               $this->image_figcaption = NULL;
               $image_title = NULL;
            } elseif (get_sub_field('cw_cursor_effect') == 'image-caption') {
               $this->cursor_effect = 'image-caption';
               $image_title = NULL;
               $this->image_clean_title = get_sub_field('cw_caption_image');
               $caption = get_sub_field('cw_caption_image');
               $figcaption = '<div class="project-details d-flex justify-content-center flex-column">
                <div class="post-header">
                  <h2 class="post-title h3 fs-22">' .  $caption . '</h2>
                </div>
              </div>';
               $this->image_figcaption = $figcaption;
            } else {
               $this->image_clean_title = NULL;
               $image_title = NULL;
               $this->image_figcaption = NULL;
            }
         }
      } else {
         $this->image_clean_title = NULL;
         $image_title = NULL;
      }
      return $image_title;
   }


   //Image sizes
   public function cw_image_size($image_thumb_size, $image_big_size)
   {
      if ($image_thumb_size !== NULL) {
         $this->image_thumb_size = $image_thumb_size;
      } else {
         $this->image_thumb_size = NULL;
      }
      if ($image_big_size !== NULL) {
         $this->image_big_size = $image_big_size;
      } else {
         $this->image_big_size = 'project_1';
      }
      $this->image_srscet = $this->image_thumb_size;
   }


   //image 
   public function cw_image($image_thumb_size, $image_big_size, $image_link)
   {
      if (have_rows('cw_image1')) {
         while (have_rows('cw_image1')) {
            the_row();
            $cw_image = get_sub_field('cw_image');
            if ($cw_image) {
               if ($image_thumb_size == NULL) {
                  $this->image_url_small = esc_url($cw_image['url']);
               } else {
                  $this->image_url_small = esc_url($cw_image['sizes'][$this->image_thumb_size]);
               }

               $this->image_url_big = esc_url($cw_image['sizes'][$this->image_big_size]);

               $this->image_alt = esc_attr($cw_image['alt']);
               $this->image_link_type = get_sub_field('cw_link_type');
            } else {
               $this->image_url_big = get_template_directory_uri() . $image_link;
               $this->image_url_small = get_template_directory_uri() . $image_link;
               $this->image_link_type = get_sub_field('cw_link_type');
            }
         }
      }
   }



   //image Classes
   public function cw_image_classes($image_classes, $image_shape)
   {
      $image_class = array();
      if (have_rows('cw_image1')) {
         while (have_rows('cw_image1')) {
            the_row();
            if (get_sub_field('cw_shape_image') == 'rounded-0') {
               $image_class[] = get_sub_field('cw_shape_image');
            } elseif (get_sub_field('cw_shape_image') == 'rounded') {
               $image_class[] = get_sub_field('cw_shape_image');
            } elseif (get_sub_field('cw_shape_image') == 'rounded-pill') {
               $image_class[] = get_sub_field('cw_shape_image');
            } elseif (get_sub_field('cw_shape_image') == 'theme') {
               $image_class[] = get_theme_mod('codeweber_image');
            } elseif (get_sub_field('cw_shape_image') == 'none') {
               $image_class[] = $image_shape;
            } else {
               $image_class[] = NULL;
            }
            if (get_sub_field('cw_class')) {
               $image_class[] = get_sub_field('cw_class');
            }
            $image_classes = implode(' ', $image_class);
         }
      } else {
         $image_classes = NULL;
      }
      return $image_classes;
   }


   //Image Wrapper Classes
   public function cw_wrapper_image_classes($wrapper_image_classes, $image_shape)
   {
      $image_wrapper_class = array();
      if (have_rows('cw_image1')) {
         while (have_rows('cw_image1')) {
            the_row();

            $image_wrapper_class[] = 'position-relative';

            if (get_sub_field('cw_shape_image') == 'rounded-0') {
               $image_wrapper_class[] = get_sub_field('cw_shape_image');
            } elseif (get_sub_field('cw_shape_image') == 'rounded') {
               $image_wrapper_class[] = get_sub_field('cw_shape_image');
            } elseif (get_sub_field('cw_shape_image') == 'rounded-pill') {
               $image_wrapper_class[] = get_sub_field('cw_shape_image');
            } elseif (get_sub_field('cw_shape_image') == 'Theme') {
               $image_wrapper_class[] = get_theme_mod('codeweber_image');
            } elseif (get_sub_field('cw_shape_image') == 'none') {
               $image_wrapper_class[] = $image_shape;
            } else {
               $image_wrapper_class[] = NULL;
            }


            if (get_sub_field('cw_shape_image') == 'img-mask mask-1') {
               $image_wrapper_class[] = $this->image_shape;
            } elseif (get_sub_field('cw_shape_image') == 'img-mask mask-2') {
               $image_wrapper_class[] = $this->image_shape;
            } elseif (get_sub_field('cw_shape_image') == 'img-mask mask-3') {
               $image_wrapper_class[] = $this->image_shape;
            } else {
               $image_wrapper_class[] = NULL;
            }

            if (get_sub_field('cw_effect_hover') == 'hover-scale') {
               $image_wrapper_class[] = 'hover-scale';
            } elseif (get_sub_field('cw_effect_hover') == 'lift') {
               $image_wrapper_class[] = 'lift';
            }

            if (get_sub_field('cw_cursor_effect') !== 'none') {
               $image_wrapper_class[] = get_sub_field('cw_cursor_effect');
            }

            if (get_sub_field('cw_cursor_effect') == 'video_button') {
               $image_wrapper_class[] = 'position-relative';
            }

            if (get_sub_field('cw_gradient') !== 'none') {
               $image_wrapper_class[] = get_sub_field('cw_gradient');
            }

            if ($wrapper_image_classes !== NULL) {
               $image_wrapper_class[] = $wrapper_image_classes;
            }

            $cw_image_wrapper_class = implode(' ', $image_wrapper_class);
         }
      } else {
         $cw_image_wrapper_class = NULL;
      }
      return $cw_image_wrapper_class;
   }


   //Final Image
   public function cw_final_image($final_image, $image_link, $image_pattern, $label)
   {
      $image_classes = $this->image_classes;
      $image_wrapper_classes = $this->wrapper_image_classes;
      $image_shape = $this->image_shape;
      $image_alt = $this->image_alt;
      $image_url_small = $this->image_url_small; // %1$s
      $image_url_big = $this->image_url_big; // %2$s
      $image_url_src = $this->image_srscet;
      $img_link = $this->image_link;
      $image_link_type = $this->image_link_type;
      $image_title = $this->image_title;
      $cursor_effect = $this->cursor_effect;
      $image_description = $this->image_description;
      $image_figcaption = $this->image_figcaption;


      if ($image_classes || $image_wrapper_classes || $image_description || $image_url_src || $image_title || $image_figcaption || $img_link || $image_shape) {

         // %3$s
         if ($image_alt) {
            $image_alt = 'alt="' . $image_alt . '"';
         } else {
            $image_alt = NULL;
         }

         // %4$s
         if ($image_classes) {
            $image_classes = 'class="' . $image_classes . '"';
         } else {
            $image_classes = NULL;
         }

         // %5$s
         if ($image_wrapper_classes) {
            $wrapper_image_classes = 'class="' . $image_wrapper_classes . '"';
         } else {
            $wrapper_image_classes = NULL;
         }

         //
         if ($image_description) {
            $image_description_1 = 'data-description="' . $image_description . '"';
            $image_description_simple = $image_description;
         } else {
            $image_description_1 = NULL;
            $image_description_simple = NULL;
         }


         // %8$s
         if ($image_url_src) {
            $image_url_src = $image_url_src;
         } else {
            $image_url_src = NULL;
         }

         // %9$s
         if ($image_title) {
            $image_title = $image_title;
         } else {
            $image_title = NULL;
         }

         // %10$s
         if ($image_figcaption) {
            $image_figcaption = $image_figcaption;
         } else {
            $image_figcaption = NULL;
         }

         // %6$s - %7$s
         if ($this->image_link) {
            if (have_rows('cw_image1')) {
               while (have_rows('cw_image1')) {
                  the_row();
                  if ($cursor_effect == 'video_button' && $this->image_link_type !== 'link') {
                     $image_link_open = '<a href="' . $img_link . '" class="btn btn-circle btn-light btn-play ripple mx-auto mb-5 position-absolute" style="top:50%; left: 50%; transform: translate(-50%,-50%); z-index:3;" data-glightbox  ' . $image_description_1 . ' data-title="' . $image_title . '" data-gallery="hero"><i class="icn-caret-right text-dark"></i></a>';
                     $image_link_close = NULL;
                  } elseif ($this->cursor_effect == 'video_button' && $this->image_link_type == 'link') {
                     $image_link_open = '<a href="' . $img_link . '" class="btn btn-circle btn-light btn-play ripple mx-auto mb-5 position-absolute" style="top:50%; left: 50%; transform: translate(-50%,-50%); z-index:3;" target="blank"><i class="icn-caret-right text-dark"></i></a>';
                     $image_link_close = NULL;
                  } elseif (get_sub_field('cw_cursor_effect') == 'itooltip itooltip-light' || get_sub_field('cw_cursor_effect') == 'itooltip itooltip-dark' || get_sub_field('cw_cursor_effect') == 'itooltip itooltip-primary') {
                     $image_link_open = '<a href="' . $img_link . '" data-glightbox="title: ' . get_sub_field('cw_caption_image') . '; description: ' .  $image_description_simple . '" data-gallery="g1">';
                     $image_link_close = '</a>';
                  } elseif ($this->image_link_type == 'image') {
                     $image_link_open = '<a class="item-link" href="' . $img_link . '" data-glightbox="" data-gallery="projects-group"><i class="uil uil-focus-add"></i></a>';
                     $image_link_close = NULL;
                  } elseif ($this->image_link_type == 'link') {
                     $image_link_open = '<a class="item-link" href="' . $img_link . '">';
                     $image_link_close = '</a>';
                  } else {
                     $image_link_open = '<a href="' . $img_link . '" ' . $image_description_1 . ' ' . $image_title . '" data-glightbox="title: ' . get_sub_field('cw_caption_image') . '; description: ' .  $image_description_simple . '" data-gallery="g1">';
                     $image_link_close = '</a>';
                  }
               }
            }
         } else {
            $image_link_open = NULL;
            $image_link_close = NULL;
         }

         if ($image_pattern !== NULL) {
            $image_pattern_default = $image_pattern;
         } else {
            $image_pattern_default = '<figure %5$s %9$s>%6$s<img %4$s src="%1$s" srcset="%1$s" %3$s />%7$s %10$s %11$s</figure>';
         }

         if ($this->cursor_effect == 'image-caption') {
            $image_pattern_default = '<figure %5$s %9$s>%6$s<img %4$s src="%1$s" srcset="%1$s" %3$s />%7$s  %11$s</figure>%10$s';
            $wrapper_image_classes = 'class="rounded mb-6 shadow position-relative"';
         }

         if (have_rows('cw_image1')) {
            while (have_rows('cw_image1')) {
               the_row();
               if (get_sub_field('cw_show') == 0) :
                  $label_object = new CW_Labels(
                     '<div class="card shadow-lg position-absolute zindex-1 %6$s" %7$s><div class="card-body py-4 px-5"><div class="d-flex flex-row align-items-center"><div>%2$s</div><div><p class="counter mb-0 text-nowrap text-dark h3">%3$s</p><p class="fs-14 lh-sm mb-0 text-nowrap text-dark">%4$s</p>%5$s</div></div></div><!--/.card-body --></div><!--/.card -->',

                     '<div class="card shadow-lg position-absolute zindex-1" style="bottom: 0rem; left: 0rem;"><div class="card-body py-4 px-5"><div class="d-flex flex-row align-items-center"><div><img src="' . get_template_directory_uri() . '/dist/img/icons/lineal/check.svg" class="svg-inject icon-svg icon-svg-sm text-primary mx-auto me-3" alt="" /></div><div><h3 class="counter mb-0 text-nowrap">250+</h3><p class="fs-14 lh-sm mb-0 text-nowrap">Projects Done</p></div></div></div><!--/.card-body --></div><!--/.card -->',
                     NULL
                  );
                  $label = $label_object->final_labels;
               else :
                  $label = NULL;
               endif;
            }
         }

         $final_image = sprintf($image_pattern_default, $image_url_small, $image_url_small, $image_alt, $image_classes, $wrapper_image_classes, $image_link_open, $image_link_close, $image_url_src, $image_title, $image_figcaption, $label);
      } else {

         $final_image = $final_image . $label;
      }

      return $final_image;
   }
}
