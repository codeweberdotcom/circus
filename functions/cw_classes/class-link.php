<?php

//* ---Link---

class CW_Link
{
   public $link_type;
   public $link_url;
   public $link_glightbox;
   public $link_url_target;
   public $link_url_title;
   public $link_form;
   public $utm;
   public $link_data;

   public function __construct($link_type, $link_url, $form)
   {
      $this->utm = $this->cw_utm();
      $this->link_type = $this->cw_link_type($link_type);
      $this->link_data = $this->cw_link_data();
      $this->link_url = $this->cw_link_url($link_url);
      $this->link_form = $this->cw_form($form);
   }

   public function cw_utm()
   {
      if (have_rows('cw_links')) {
         while (have_rows('cw_links')) {
            the_row();
            if (get_sub_field('utm')) {
               $cw_utm = get_sub_field('utm');
            } else {
               $cw_utm = NULL;
            }
         }
      }
      return  $cw_utm;
   }
   //link_data
   public function  cw_link_data()
   {
      if ($this->link_type == 'Popover' || $this->link_type == 'Tooltip') {
         if (have_rows('cw_links')) {
            while (have_rows('cw_links')) {
               the_row();
               $data_link_object = new CW_Tooltip(NULL, NULL, NULL, NULL, NULL);
            }
         }
         $cw_link_data =  $data_link_object->tooltip_data;
      } else {
         $cw_link_data = NULL;
      }
      return $cw_link_data;
   }


   //Link_type
   public function cw_link_type($link_type)
   {
      if (have_rows('cw_links')) {
         while (have_rows('cw_links')) {
            the_row();
            $cw_link_type = get_sub_field('cw_link_type');
         }
      } elseif ($link_type !== NULL) {
         $cw_link_type = $link_type;
      } else {
         $cw_link_type = NULL;
      }
      return $cw_link_type;
   }

   //Link_url
   public function cw_link_url($link_url)
   {
      if (have_rows('cw_links')) {
         while (have_rows('cw_links')) {
            the_row();
            $cw_utm =  $this->utm;
            $cw_url = get_sub_field('cw_url');
            if ($cw_url && $this->link_type == 'URL') {
               $cw_link_url =  'href="' . esc_url($cw_url['url']) . $cw_utm . '"';
               $this->link_url_target = 'target="' . esc_attr($cw_url['target']) . '"';
               $this->link_url_title = 'title="' . esc_html($cw_url['title']) . '"';
            } elseif ($cw_url && $this->link_type == 'Video URL') {
               $cw_link_url =  'href="' . esc_url($cw_url['url'])  . $cw_utm .  '"';
               $this->link_glightbox = 'data-glightbox';
            } elseif (get_sub_field('cw_image') && $this->link_type == 'Image') {
               $cw_image = get_sub_field('cw_image');
               if ($cw_image) {
                  $cw_link_url =  'href="' . esc_url($cw_image['sizes']['brk_big'])  . $cw_utm .  '"';
               }
               $this->link_glightbox = 'data-glightbox';
            } elseif ($this->link_type == 'Tooltip') {
               $cw_link_url =  NULL;
            } elseif ($this->link_type == 'Docs') {
               $docs = get_sub_field('docs');
               if ($docs) {
                  $post = $docs;
                  setup_postdata($post);
                  $file = get_field('file', $post->ID);
                  if ($file) {
                     if (get_sub_field('docs_click') == 'open') {
                        $cw_link_url =  'href="' . esc_url($file['url'])  . $cw_utm .  '" target="_blank"';
                     } elseif (get_sub_field('docs_click') == 'download') {
                        $cw_link_url =  'href="' . esc_url($file['url'])  . $cw_utm .  '" download';
                     }
                  }
                  wp_reset_postdata();
               }
            } else {
               $cw_link_url = 'href="#" role="button"';
            }
         }
      } elseif ($link_url !== NULL) {
         $cw_link_url = $link_url;
      } else {
         $cw_link_url = NULL;
      }
      return $cw_link_url;
   }

   //Form
   public function cw_form($form)
   {
      if (have_rows('cw_links')) {
         while (have_rows('cw_links')) {
            the_row();
            $cw_contact_form = get_sub_field('cw_contact_form');
            if ($cw_contact_form) {
               $form = 'data-bs-toggle="modal" data-bs-target="#modal-form-' . $cw_contact_form . '"';
               global $forms;
               if (is_array($forms)) {
                  array_push($forms, $cw_contact_form);
               }
            } else {
               $form = NULL;
            }
         }
      } else {
         $form = NULL;
      }
      return $form;
   }
}
