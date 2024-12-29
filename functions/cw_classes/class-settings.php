<?php


//* --- Settings Class ACF---

class CW_Settings
{
   public $cw_settings;
   public $root_theme;
   public $title;
   public $subtitle;
   public $subtitle_first;
   public $subtitle_second;
   public $paragraph;
   public $typewriter;
   public $tag;
   public $color;

   public $buttons;

   public $patterntitle;
   public $patternsubtitle;
   public $patternparagraph;

   public $background_object;
   public $background_class;
   public $background_data;
   public $background_video_bool;
   public $background_video_url;
   public $background_video_preview;
   public $images;

   public $labels_final;

   public $swiper;
   public $swiper_final;

   public $divider_class;
   public $divider_wave;

   public $shapes;

   public $image;
   public $multi_images;

   public $features;
   public $features_array;

   public $tabs;

   public $list;

   public $accordeon;

   public $progress;

   public $section_class;

   public $column_class_1;
   public $column_class_2;
   public $column_class_two;

   public $responsive_classes;

   public function __construct($cw_settings)
   {
      $this->root_theme = get_template_directory_uri();
      $this->cw_settings = $cw_settings;
      $this->typewriter = $this->cw_typewriter($cw_settings);
      $this->shapes = $this->cw_shapes($cw_settings);
      // $this->labels_final = $this->cw_labels($cw_settings);
      $this->title = $this->cw_get_title($cw_settings);
      $this->subtitle = $this->cw_get_subtitle($cw_settings);
      $this->paragraph = $this->cw_get_paragraph($cw_settings);
      $this->buttons = $this->cw_buttons($cw_settings);
      $this->background_object = $this->cw_background_data($cw_settings);
      $this->images = $this->cw_images($cw_settings);

      $this->tabs = $this->cw_tabs($cw_settings);

      $this->multi_images = $this->cw_multi_images($cw_settings);

      $this->features = $this->cw_features($cw_settings);
      $this->column_class_two = $this->cw_column_class($cw_settings);
      $this->swiper_final = $this->cw_swiper_final($cw_settings);

      $this->list = $this->cw_list($cw_settings);
      $this->accordeon = $this->cw_accordeon($cw_settings);

      $this->progress = $this->cw_progress($cw_settings);

      $this->divider_class = $this->cw_divider_class($cw_settings);
      $this->divider_wave = $this->cw_divider_wave($cw_settings);

      $this->section_class = $this->cw_section_class($cw_settings);

      $this->responsive_classes = $this->cw_responsive($cw_settings);
   }

   //Responsive Class
   public function cw_responsive($cw_settings)
   {

      if (have_rows('responsive_settings')) {
         while (have_rows('responsive_settings')) {
            the_row();
            $responsive_obj = new CW_Responsive_col(NULL, NULL, NULL, NULL, NULL, NULL);
            $responsive_class = $responsive_obj->responsive_class_final;
         }
      } else {
         $responsive_class = 'test';
      }



      return $responsive_class;
   }




   //Tabs Class
   public function cw_tabs($cw_settings)
   {
      if (isset($cw_settings['tabs']) && !$cw_settings['tabs'] == NULL) {

         if (isset($cw_settings['tabs_col-1']) && !$cw_settings['tabs_col-1'] == NULL) {
            $tabs_col_1 = $cw_settings['tabs_col-1'];
         } else {
            $tabs_col_1 = NULL;
         }

         if (isset($cw_settings['tabs_col-2']) && !$cw_settings['tabs_col-2'] == NULL) {
            $tabs_col_2 = $cw_settings['tabs_col-2'];
         } else {
            $tabs_col_2 = NULL;
         }

         if (isset($cw_settings['tabs_demo']) && !$cw_settings['tabs_demo'] == NULL) {
            $tabs_demo = $cw_settings['tabs_demo'];
         } else {
            $tabs_demo = NULL;
         }

         if (isset($cw_settings['tabs_type']) && !$cw_settings['tabs_type'] == NULL) {
            $tabs_type = $cw_settings['tabs_type'];
         } else {
            $tabs_type = NULL;
         }

         if (isset($cw_settings['tabs_id']) && !$cw_settings['tabs_id'] == NULL) {
            $tabs_id = $cw_settings['tabs_id'];
         } else {
            $tabs_id =  NULL;
         }

         $tabs_object = new CW_Tabs($tabs_type, $tabs_demo, $tabs_col_1, $tabs_col_2, $tabs_id);
         $cw_tabs = $tabs_object->tabs_final;
      } else {
         $cw_tabs = NULL;
      }
      return $cw_tabs;
   }


   //Progress class
   public function cw_progress($cw_settings)
   {
      if (isset($cw_settings['progress']) && !$cw_settings['progress'] == NULL) {
         if (isset($cw_settings['progress_item_wrappers']) && !$cw_settings['progress_item_wrappers'] == NULL) {
            $pattern_array = $cw_settings['progress_item_wrappers'];
         } else {
            $pattern_array = NULL;
         }
         $cw_progress_object = new CW_ProgressList(NULL, $this->cw_settings['progress'], $pattern_array);
         $cw_progress = $cw_progress_object->progress_final;
      } else {
         $cw_progress = NULL;
      }
      return $cw_progress;
   }

   //Accordeon class
   public function cw_accordeon($cw_settings)
   {
      if (isset($cw_settings['accordeon_demo']) && !$cw_settings['accordeon_demo'] == NULL) {
         $accordeon_object = new CW_Accordeon(NULL, NULL, NULL, NULL, NULL, NULL, $this->cw_settings['accordeon_demo']);
         $cw_accordeon = $accordeon_object->accordeon_final;
      } else {
         $cw_accordeon = NULL;
      }
      return $cw_accordeon;
   }

   //Multi Image class
   public function cw_multi_images($cw_settings)
   {
      if (isset($cw_settings['multi_image']) && !$cw_settings['multi_image'] == NULL) {
         $cw_multi_images_obj = new CW_MultiImage($cw_settings['multi_image']);
         $cw_multi_images = $cw_multi_images_obj->final_images_array;
      } else {
         $cw_multi_images = NULL;
      }
      return $cw_multi_images;
   }


   //Column class
   public function cw_column_class($cw_settings)
   {
      if (isset($cw_settings['column_class_1']) && !$cw_settings['column_class_1'] == NULL || isset($cw_settings['column_class_2']) && !$cw_settings['column_class_2'] == NULL) {
         $cw_column_class_obj = new CW_Columns_Two($cw_settings['column_class_1'], $cw_settings['column_class_2'], false);
         $this->column_class_1 = $cw_column_class_obj->column_class_1;
         $this->column_class_2 = $cw_column_class_obj->column_class_2;
      } else {
         $this->column_class_1 = NULL;
         $this->column_class_2 = NULL;
      }
   }

   //Section class
   public function cw_section_class($cw_settings)
   {
      $cw_section_class_array = array();
      if ($this->background_class) {
         $cw_section_class_array[] = $this->background_class;
      }
      if ($this->divider_class) {
         $cw_section_class_array[] = $this->divider_class;
      }
      $cw_section_class = implode(' ', $cw_section_class_array);

      return $cw_section_class;
   }


   //List
   public function cw_list($cw_settings)
   {
      if (isset($cw_settings['list']) && $cw_settings['list'] !== NULL && $cw_settings['list'] !== false) {
         $list_object = new CW_ListCol(NUll, NULL, NULL, NULL, NULL, NULL, NULL);
         $cw_list = $list_object->listcol_final;
         if ($cw_list == NULL) {
            $cw_list = $this->cw_settings['list_demo'];
         }
         // } elseif ($cw_settings['list'] == false) {
         //    $list_object = new CW_ListCol(NUll, NULL, NULL, NULL, NULL, NULL, NULL);
         //    $cw_list = $list_object->listcol_final;
      } else {
         $cw_list = NULL;
      }
      return $cw_list;
   }


   //Features
   public function cw_features($cw_settings)
   {
      if (isset($this->cw_settings['feature_pattern_title'])) {
         $features_title_pattern = $this->cw_settings['feature_pattern_title'];
      } else {
         $features_title_pattern = NULL;
      }

      if (isset($this->cw_settings['feature_pattern_paragraph'])) {
         $features_paragraph_pattern = $this->cw_settings['feature_pattern_paragraph'];
      } else {
         $features_paragraph_pattern = NULL;
      }

      if (isset($this->cw_settings['features']) && !$this->cw_settings['features'] == NULL) {
         $features_pattern = $this->cw_settings['features_pattern'];
         $demo = $this->cw_settings['features'];

         if (isset($this->cw_settings['features_style_icon']) && !$this->cw_settings['features_style_icon'] == NULL) {
            $class_icon = $this->cw_settings['features_style_icon'];
         } else {
            $class_icon = NULL;
         }

         if (isset($this->cw_settings['features_image_size']) && !$this->cw_settings['features_image_size'] == NULL) {
            $fetures_image_size = $this->cw_settings['features_image_size'];
         } else {
            $fetures_image_size = NULL;
         }


         $features_object = new CW_Features($features_pattern, $demo, $class_icon, $fetures_image_size, $features_title_pattern, $features_paragraph_pattern);
         $cw_features = $features_object->features_list_final;
         $this->features_array =  $features_object->features_array_final;
         if ($cw_features == NULL) {
            $cw_features = $this->cw_settings['features'];
         }
      } else {
         $cw_features = NULL;
      }
      return $cw_features;
   }


   //Shapes
   public function cw_shapes($cw_settings)
   {
      if (isset($this->cw_settings['shapes']) && !$this->cw_settings['shapes'] == NULL) {
         $shapes_object = new CW_Shapes();
         $shapes = $shapes_object->final_shapes;
         if ($shapes == NULL) {
            $shapes = implode('', $this->cw_settings['shapes']);
         }
      } else {
         $shapes = NULL;
      }
      return $shapes;
   }


   //Typewriter
   public function cw_typewriter($cw_settings)
   {
      if (isset($this->cw_settings['typewriter']) && !$this->cw_settings['typewriter'] == NULL) {
         $typewriter = new CW_Typewriter($cw_settings);
         $typewriter = $typewriter->typewriter_final;
      } else {
         $typewriter = NULL;
      }
      return $typewriter;
   }

   //Swiper Final
   public function cw_swiper_final($cw_settings)
   {
      // Check for Swiper
      if (isset($this->cw_settings['swiper']) && !$this->cw_settings['swiper'] == NULL) {

         // Check for array ['swiper']['data-drag']
         if (isset($cw_settings['swiper']['data-drag']) && !$cw_settings['swiper']['data-drag'] == NULL) {
            $swiper_data_drag =  $cw_settings['swiper']['data-drag'];
         } else {
            $swiper_data_drag = NULL;
         }

         // Check for array ['swiper']['swiper_container_class']
         if (isset($cw_settings['swiper']['swiper_container_class']) && !$cw_settings['swiper']['swiper_container_class'] == NULL) {
            $swiper_container_class =  $cw_settings['swiper']['swiper_container_class'];
         } else {
            $swiper_container_class = NULL;
         }

         // Check for array ['swiper']['data_thumbs']
         if (isset($cw_settings['swiper']['data_thumbs']) && !$cw_settings['swiper']['data_thumbs'] == NULL) {
            $data_thumbs =  $cw_settings['swiper']['data_thumbs'];
         } else {
            $data_thumbs = NULL;
         }

         // Check for array ['swiper']['swiper_container_content']
         if (isset($cw_settings['swiper']['swiper_container_content']) && !$cw_settings['swiper']['swiper_container_content'] == NULL) {
            $swiper_container_content =  $cw_settings['swiper']['swiper_container_content'];
         } else {
            $swiper_container_content = NULL;
         }

         // Check for array ['swiper']['swiper_first_slide']
         if (isset($cw_settings['swiper']['swiper_first_slide']) && !$cw_settings['swiper']['swiper_first_slide'] == NULL) {
            $swiper_first_slide =  $cw_settings['swiper']['swiper_first_slide'];
         } else {
            $swiper_first_slide = NULL;
         }

         // Check for array ['swiper']['swiper-slide_class']
         if (isset($cw_settings['swiper']['swiper-slide_class']) && !$cw_settings['swiper']['swiper-slide_class'] == NULL) {
            $swiper_slide_class =  $cw_settings['swiper']['swiper-slide_class'];
         } else {
            $swiper_slide_class = NULL;
         }

         // Check for array ['swiper']['swiper-slide_data']
         if (isset($cw_settings['swiper']['swiper-slide_data']) && !$cw_settings['swiper']['swiper-slide_data'] == NULL) {
            $swiper_slide_data =  $cw_settings['swiper']['swiper-slide_data'];
         } else {
            $swiper_slide_data = NULL;
         }

         // Check for array ['swiper']['image_class']
         if (isset($cw_settings['swiper']['image_class']) && !$cw_settings['swiper']['image_class'] == NULL) {
            $swiper_image_class =  $cw_settings['swiper']['image_class'];
         } else {
            $swiper_image_class = NULL;
         }
         // Check for array ['swiper']['image_pattern']
         if (isset($cw_settings['swiper']['image_pattern']) && !$cw_settings['swiper']['image_pattern'] == NULL) {
            $swiper_image_pattern =  $cw_settings['swiper']['image_pattern'];
         } else {
            $swiper_image_pattern = NULL;
         }
         // Check for array ['swiper']['image_thumb_size']
         if (isset($cw_settings['swiper']['image_thumb_size']) && !$cw_settings['swiper']['image_thumb_size'] == NULL) {
            $swiper_image_thumb_size =  $cw_settings['swiper']['image_thumb_size'];
         } else {
            $swiper_image_thumb_size = NULL;
         }
         // Check for array ['swiper']['image_big_size']
         if (isset($cw_settings['swiper']['image_big_size']) && !$cw_settings['swiper']['image_big_size'] == NULL) {
            $swiper_image_big_size =  $cw_settings['swiper']['image_big_size'];
         } else {
            $swiper_image_big_size = NULL;
         }
         // Check for array ['swiper']['img_link']
         if (isset($cw_settings['swiper']['img_link']) && !$cw_settings['swiper']['img_link'] == NULL) {
            $swiper_img_link =  $cw_settings['swiper']['img_link'];
         } else {
            $swiper_img_link = NULL;
         }
         // Check for array ['swiper']['data_margin']
         if (isset($cw_settings['swiper']['data_margin']) && !$cw_settings['swiper']['data_margin'] == NULL) {
            $swiper_data_margin =  $cw_settings['swiper']['data_margin'];
         } else {
            $swiper_data_margin = NULL;
         }
         // Check for array ['swiper']['nav']
         if (isset($cw_settings['swiper']['nav']) && !$cw_settings['swiper']['nav'] == NULL) {
            $swiper_nav =  $cw_settings['swiper']['nav'];
         } else {
            $swiper_nav = NULL;
         }
         // Check for array ['swiper']['nav_color']
         if (isset($cw_settings['swiper']['nav_color']) && !$cw_settings['swiper']['nav_color'] == NULL) {
            $swiper_nav_color =  $cw_settings['swiper']['nav_color'];
         } else {
            $swiper_nav_color = NULL;
         }
         // Check for array ['swiper']['nav']
         if (isset($cw_settings['swiper']['nav']) && !$cw_settings['swiper']['nav'] == NULL) {
            $swiper_nav =  $cw_settings['swiper']['nav'];
         } else {
            $swiper_nav = NULL;
         }
         // Check for array ['swiper']['nav_position']
         if (isset($cw_settings['swiper']['nav_position']) && !$cw_settings['swiper']['nav_position'] == NULL) {
            $swiper_nav_position =  $cw_settings['swiper']['nav_position'];
         } else {
            $swiper_nav_position = NULL;
         }
         // Check for array ['swiper']['dots']
         if (isset($cw_settings['swiper']['dots']) && !$cw_settings['swiper']['dots'] == NULL) {
            $swiper_dots =  $cw_settings['swiper']['dots'];
         } else {
            $swiper_dots = NULL;
         }
         // Check for array ['swiper']['dots_color']
         if (isset($cw_settings['swiper']['dots_color']) && !$cw_settings['swiper']['dots_color'] == NULL) {
            $swiper_dots_color =  $cw_settings['swiper']['dots_color'];
         } else {
            $swiper_dots_color = NULL;
         }
         // Check for array ['swiper']['dots_position']
         if (isset($cw_settings['swiper']['dots_position']) && !$cw_settings['swiper']['dots_position'] == NULL) {
            $swiper_dots_position =  $cw_settings['swiper']['dots_position'];
         } else {
            $swiper_dots_position = NULL;
         }
         // Check for array ['swiper']['swiper_effect']
         if (isset($cw_settings['swiper']['swiper_effect']) && !$cw_settings['swiper']['swiper_effect'] == NULL) {
            $swiper_effect =  $cw_settings['swiper']['swiper_effect'];
         } else {
            $swiper_effect = NULL;
         }
         // Check for array ['swiper']['base_items']
         if (isset($cw_settings['swiper']['base_items']) && !$cw_settings['swiper']['base_items'] == NULL) {
            $swiper_base_items =  $cw_settings['swiper']['base_items'];
         } else {
            $swiper_base_items = NULL;
         }
         // Check for array ['swiper']['items_xs']
         if (isset($cw_settings['swiper']['items_xs']) && !$cw_settings['swiper']['items_xs'] == NULL) {
            $swiper_items_xs =  $cw_settings['swiper']['items_xs'];
         } else {
            $swiper_items_xs = NULL;
         }
         // Check for array ['swiper']['items_sm']
         if (isset($cw_settings['swiper']['items_sm']) && !$cw_settings['swiper']['items_sm'] == NULL) {
            $swiper_items_sm =  $cw_settings['swiper']['items_sm'];
         } else {
            $swiper_items_sm = NULL;
         }
         // Check for array ['swiper']['items_md']
         if (isset($cw_settings['swiper']['items_md']) && !$cw_settings['swiper']['items_md'] == NULL) {
            $swiper_items_md =  $cw_settings['swiper']['items_md'];
         } else {
            $swiper_items_md = NULL;
         }
         // Check for array ['swiper']['items_lg']
         if (isset($cw_settings['swiper']['items_lg']) && !$cw_settings['swiper']['items_lg'] == NULL) {
            $swiper_items_lg =  $cw_settings['swiper']['items_lg'];
         } else {
            $swiper_items_lg = NULL;
         }
         // Check for array ['swiper']['items_xl']
         if (isset($cw_settings['swiper']['items_xl']) && !$cw_settings['swiper']['items_xl'] == NULL) {
            $swiper_items_xl =  $cw_settings['swiper']['items_xl'];
         } else {
            $swiper_items_xl = NULL;
         }
         // Check for array ['swiper']['items_xxl']
         if (isset($cw_settings['swiper']['items_xxl']) && !$cw_settings['swiper']['items_xxl'] == NULL) {
            $swiper_items_xxl =  $cw_settings['swiper']['items_xxl'];
         } else {
            $swiper_items_xxl = NULL;
         }
         // Check for array ['swiper']['autoplay']
         if (isset($cw_settings['swiper']['autoplay']) && !$cw_settings['swiper']['autoplay'] == NULL) {
            $swiper_autoplay =  $cw_settings['swiper']['autoplay'];
         } else {
            $swiper_autoplay = NULL;
         }
         // Check for array ['swiper']['autoplay_time']
         if (isset($cw_settings['swiper']['autoplay_time']) && !$cw_settings['swiper']['autoplay_time'] == NULL) {
            $swiper_autoplay_time =  $cw_settings['swiper']['autoplay_time'];
         } else {
            $swiper_autoplay_time = NULL;
         }
         // Check for array ['swiper']['loop']
         if (isset($cw_settings['swiper']['loop']) && !$cw_settings['swiper']['loop'] == NULL) {
            $swiper_loop =  $cw_settings['swiper']['loop'];
         } else {
            $swiper_loop = NULL;
         }
         // Check for array ['swiper']['autoheight']
         if (isset($cw_settings['swiper']['autoheight']) && !$cw_settings['swiper']['autoheight'] == NULL) {
            $swiper_autoheight =  $cw_settings['swiper']['autoheight'];
         } else {
            $swiper_autoheight = NULL;
         }
         // Check for array ['swiper']['wrapper_image_class']
         if (isset($cw_settings['swiper']['wrapper_image_class']) && !$cw_settings['swiper']['wrapper_image_class'] == NULL) {
            $swiper_wrapper_image_class =  $cw_settings['swiper']['wrapper_image_class'];
         } else {
            $swiper_wrapper_image_class = NULL;
         }
         // Check for array ['swiper']['image_demo']
         if (isset($cw_settings['swiper']['image_demo']) && !$cw_settings['swiper']['image_demo'] == NULL) {
            $swiper_image_demo =  $cw_settings['swiper']['image_demo'];
         } else {
            $swiper_image_demo = NULL;
         }
         // Check for array ['swiper']['image_shape']
         if (isset($cw_settings['swiper']['image_shape']) && !$cw_settings['swiper']['image_shape'] == NULL) {
            $swiper_image_shape =  $cw_settings['swiper']['image_shape'];
         } else {
            $swiper_image_shape = NULL;
         }

         // Check for array ['label_demo']
         if (isset($cw_settings['label_demo']) && !$cw_settings['label_demo'] == NULL) {
            $swiper_label_demo =  $cw_settings['label_demo'];
         } else {
            $swiper_label_demo = NULL;
         }

         // Check for array ['label_pattern']
         if (isset($cw_settings['label_pattern']) && !$cw_settings['label_pattern'] == NULL) {
            $swiper_label_pattern =  $cw_settings['label_pattern'];
         } else {
            $swiper_label_pattern = NULL;
         }
         // Check for array ['swiper']['smooth-scroll']
         if (isset($cw_settings['swiper']['smooth-scroll']) && !$cw_settings['swiper']['smooth-scroll'] == NULL) {
            $smooth_scroll =  $cw_settings['swiper']['smooth-scroll'];
         } else {
            $smooth_scroll = NULL;
         }
         // Check for array ['swiper']['data_speed']
         if (isset($cw_settings['swiper']['data_speed']) && !$cw_settings['swiper']['data_speed'] == NULL) {
            $data_speed =  $cw_settings['swiper']['data_speed'];
         } else {
            $data_speed = NULL;
         }

         $swiper = new CW_Swiper(
            $swiper_container_class,
            $swiper_image_class,
            $swiper_image_pattern,
            $swiper_image_thumb_size,
            $swiper_image_big_size,
            $swiper_img_link,
            $swiper_data_margin,
            $swiper_nav,
            $swiper_nav_color,
            $swiper_nav_position,
            $swiper_dots,
            $swiper_dots_color,
            $swiper_dots_position,
            $swiper_effect,
            $swiper_base_items,
            $swiper_items_xs,
            $swiper_items_sm,
            $swiper_items_md,
            $swiper_items_lg,
            $swiper_items_xl,
            $swiper_items_xxl,
            $swiper_autoplay,
            $swiper_autoplay_time,
            $swiper_loop,
            $swiper_autoheight,
            $swiper_wrapper_image_class,
            $swiper_image_demo,
            $swiper_image_shape,
            $swiper_label_demo,
            $swiper_label_pattern,
            $swiper_first_slide,
            $swiper_slide_class,
            $swiper_slide_data,
            $data_thumbs,
            $swiper_container_content,
            $swiper_data_drag,
            $smooth_scroll,
            $data_speed
         );
         $swiper_final = $swiper->final_swiper;
      } else {
         $swiper_final = NULL;
      }
      return $swiper_final;
   }

   //Background Data
   public function cw_background_data($cw_settings)
   {
      if (isset($this->cw_settings['background_class_default']) && !$this->cw_settings['background_class_default'] == NULL) {
         $background_object = new CW_Background($cw_settings = $cw_settings);
         $this->background_class = $background_object->class_background;
         $this->background_data = $background_object->data_background;
         $this->background_video_bool = $background_object->bool_video_background;
         $this->background_video_url = $background_object->url_video_background;
         $this->background_video_preview = $background_object->preview_video_background;
      } else {
         $background_object = NULL;
      }
      return $background_object;
   }

   //Images
   public function cw_images($cw_settings)
   {
      if (isset($this->cw_settings['image_pattern']) && !$this->cw_settings['image_pattern'] == NULL) {

         // Check for array ['label_demo']
         if (isset($cw_settings['label_demo']) && !$cw_settings['label_demo'] == NULL) {
            $image_label_demo =  $cw_settings['label_demo'];
         } else {
            $image_label_demo = NULL;
         }

         // Check for array ['label_pattern']
         if (isset($cw_settings['label_pattern']) && !$cw_settings['label_pattern'] == NULL) {
            $image_label_pattern =  $cw_settings['label_pattern'];
         } else {
            $image_label_pattern = NULL;
         }

         $image_labels_object = new CW_Labels($image_label_pattern, $image_label_demo, NULL);
         $labels = $image_labels_object->final_labels;

         $image_object = new CW_Image(
            $cw_settings['image_thumb_size'],
            $cw_settings['image_big_size'],
            NULL,
            $cw_settings['image_link'],
            NULL,
            NULL,
            NULL,
            NULL,
            NULL,
            $cw_settings['image_pattern'],
            $labels
         );
         $images = $image_object->final_image;
      } else {
         $images = NULL;
      }
      return $images;
   }

   //Buttons
   public function cw_buttons()
   {
      if (isset($this->cw_settings['buttons_pattern']) && !$this->cw_settings['buttons_pattern'] == NULL) {
         $buttons_object = new CW_Buttons($this->cw_settings['buttons_pattern'], $this->cw_settings['buttons'], NULL, NULL);
         if ($buttons_object->final_buttons !== false) {
            $buttons = $buttons_object->final_buttons;
         }
      } else {
         $buttons = NULL;
      }
      return $buttons;
   }

   //Divider Class
   public function cw_divider_class($cw_settings)
   {
      if (isset($cw_settings['divider']) && !$cw_settings['divider'] == NULL) {
         if (isset($cw_settings['divider_angles']) && !$cw_settings['divider_angles'] == NULL) {
            $divider_angles_class = $cw_settings['divider_angles'];
         } else {
            $divider_angles_class = NULL;
         }
         $divider_object = new CW_Divider(NULL, $divider_angles_class, NULL, NULL, NULL);
         $divider_class = $divider_object->class_divider;
      } else {
         $divider_class = NULL;
      }

      return $divider_class;
   }

   //Divider Wave
   public function cw_divider_wave($cw_settings)
   {
      if (isset($cw_settings['divider']) && !$cw_settings['divider'] == NULL) {
         if (isset($cw_settings['divider_wave']) && !$cw_settings['divider_wave'] == NULL) {
            $divider_wave_div = $cw_settings['divider_wave'];
         } else {
            $divider_wave_div = NULL;
         }
         $divider_object = new CW_Divider(NULL, NULL, $divider_wave_div, NULL, NULL);
         $div_wave = $divider_object->div_wave;
      } else {
         $div_wave = NULL;
      }
      return $div_wave;
   }

   //Title text
   public function cw_get_title($cw_settings)
   {
      if (isset($this->cw_settings['title']) && !$this->cw_settings['title'] == NULL && $this->cw_settings['title'] !== false) {
         if ($cw_settings['patternTitle'] !== NULL) {
            $title_pattern = $cw_settings['patternTitle'];
         } else {
            $title_pattern = NULL;
         }
         if ($cw_settings['title'] !== NULL) {
            $title_text = $cw_settings['title'];
         } else {
            $title_text = NULL;
         }
         $typewriter = $this->typewriter;
         $title_object = new CW_Title(NULL, $title_text, NULL, NULL, NULL, NULL, NULL, NULL, NULL, $title_pattern, $typewriter);
         $title = $title_object->title_final;
         // } elseif ($this->cw_settings['title'] == false) {
         //    if ($cw_settings['patternTitle'] !== NULL) {
         //       $title_pattern = $cw_settings['patternTitle'];
         //    } else {
         //       $title_pattern = NULL;
         //    }
         //    $typewriter = $this->typewriter;
         //    $title_object = new CW_Title(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, $title_pattern, $typewriter);
         //    $title = $title_object->title_final;
      } else {
         if (isset($this->cw_settings['title'])) {
            $title = $this->cw_settings['title'];
         } else {
            $title = NULL;
         }
      }
      return $title;
   }

   //Paragraph text
   public function cw_get_paragraph($cw_settings)
   {
      if (isset($cw_settings['paragraph']) && !$cw_settings['paragraph'] == NULL && $this->cw_settings['paragraph'] !== false) {
         if ($cw_settings['patternParagraph'] !== NULL) {
            $pattern = $cw_settings['patternParagraph'];
         } else {
            $pattern = NULL;
         }
         if ($cw_settings['paragraph'] !== NULL) {
            $pargraph_text = $cw_settings['paragraph'];
         } else {
            $pargraph_text = NULL;
         }
         $paragraph_object = new CW_Parargraph(NULL, $pargraph_text, NULL, NULL, NULL, NULL, NULL, NULL, NULL, $pattern);
         $paragraph = $paragraph_object->paragraph_final;
         // } elseif ($this->cw_settings['paragraph'] == false) {
         //    if ($cw_settings['patternParagraph'] !== NULL) {
         //       $pattern = $cw_settings['patternParagraph'];
         //    } else {
         //       $pattern = NULL;
         //    }
         //    $paragraph_object = new CW_Parargraph(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, $pattern);
         //    $paragraph = $paragraph_object->paragraph_final;
      } else {
         if (isset($cw_settings['paragraph'])) {
            $paragraph = $cw_settings['paragraph'];
         } else {
            $paragraph = NULL;
         }
      }
      return $paragraph;
   }


   //SubTitle text
   private function cw_get_subtitle($cw_settings)
   {
      if (isset($cw_settings['subtitle']) && !$cw_settings['subtitle'] == NULL) {
         if ($cw_settings['patternSubtitle'] !== NULL) {
            $pattern = $cw_settings['patternSubtitle'];
         } else {
            $pattern = NULL;
         }

         //Lead subtitle
         if (isset($cw_settings['subtitle_lead']) && !$cw_settings['subtitle_lead'] == NULL) {
            if ($cw_settings['subtitle_lead'] == 'true') {
               $lead =  'true';
            } else {
               $lead =  NULL;
            }
         } else {
            $lead =  NULL;
         }

         if ($cw_settings['subtitle'] !== NULL) {
            $subtitle_text = $cw_settings['subtitle'];
         } else {
            $subtitle_text = NULL;
         }

         //New subtitle class
         $subtitle_object = new CW_SubTitle(NULL, $subtitle_text, NULL, NULL, NULL, NULL, NULL, NULL, NULL, $pattern, $lead);
         $subtitle = $subtitle_object->sub_title_final;
         $this->subtitle_first = $subtitle_object->sub_title_final_first;
         $this->subtitle_second = $subtitle_object->sub_title_final_second;
      } else {
         if (isset($cw_settings['subtitle'])) {
            $subtitle = $cw_settings['subtitle'];
         } else {
            $subtitle = NULL;
         }
      }
      return $subtitle;
   }

   // Finish Title, Subtitle, Paragraph
   public function cw_the_title(
      $title,
      $tag,
      $class,
      $display,
      $lead,
      $fs,
      $textalign,
      $cw_id,
      $cw_color,
      $echo = false
   ) {
      if (
         strlen($title) == 0
      ) {
         return;
      }
      if ($tag) {
         if ($class || $display   || $lead  || $fs || $textalign || $cw_color) {
            $classes = 'class="';
            $class_array = array();
            if ($class) {
               $class_array[] = $class;
            }
            if ($display) {
               $class_array[] = $display;
            }
            if ($lead) {
               $class_array[] = $lead;
            }
            if ($fs) {
               $class_array[] = $fs;
            }
            if ($cw_color) {
               $class_array[] = $cw_color;
            }
            if ($textalign) {
               $class_array[] = $textalign;
            }
            $classes .= implode(' ', $class_array);
         } else {
            $classes = NULL;
         }
         if ($cw_id) {
            $cw_id = 'id="' . $cw_id . '"';
         }
         if ($class || $display   || $lead  || $fs || $textalign || $cw_color) {
            $classes .= '"';
         }
         $title = '<' . $tag . ' ' . $classes . ' ' . $cw_id . '>' . $title . '</' . $tag . '>';
      } else {
         $title =  $title;
      }
      if ($echo) {
         echo $title;
      } else {
         return $title;
      }
   }
}
