<?php

//* ---Video Class ACF---

class CW_Video
{
   public $type_video;
   public $link_video_youtube;
   public $link_video_vimeo;
   public $link_video_file;
   public $extract_id;
   public $preload;
   public $final_video;


   public $poster;

   public function __construct($type_video, $link_video_youtube, $link_video_vimeo, $link_video_file, $extract_id, $preload, $final_video, $poster, $demo_video)
   {
      $this->type_video = $this->cw_type_video($type_video);
      $this->link_video_youtube = $this->cw_link_video_youtube($link_video_youtube);
      $this->link_video_vimeo = $this->cw_link_video_vimeo($link_video_vimeo);
      $this->link_video_file = $this->cw_link_video_file($link_video_file);
      $this->poster = $this->cw_poster($poster);
      $this->extract_id = $this->cw_extract_id($extract_id);
      $this->preload = $this->cw_preload($preload);
      $this->final_video = $this->cw_final_video($final_video, $demo_video);
   }

   //Poster
   public function cw_poster($poster)
   {
      if (have_rows('videos_group')) {
         while (have_rows('videos_group')) {
            the_row();
            $cw_poster = get_sub_field('cw_poster');
            if ($cw_poster) {
               $cw_poster = esc_url($cw_poster['url']);
            } else {
               $cw_poster = NULL;
            }
         }
      } else {
         $cw_poster = NULL;
      }
      return $cw_poster;
   }

   //Poster
   public function cw_preload($preload)
   {
      $cw_preload = 'none';
      return $cw_preload;
   }

   //Type Video
   public function cw_type_video($type_video)
   {
      if (have_rows('videos_group')) {
         while (have_rows('videos_group')) {
            the_row();
            $cw_type_video = get_sub_field('cw_type_video');
         }
      } else {
         $cw_type_video = NULL;
      }
      return $cw_type_video;
   }

   //Link Youtube
   public function cw_link_video_youtube($link_video_youtube)
   {
      if (have_rows('videos_group')) {
         while (have_rows('videos_group')) {
            the_row();
            if ($this->type_video == 'youtube') {
               $cw_link_video_youtube =  get_sub_field('cw_link_youtube');
            } else {
               $cw_link_video_youtube = NULL;
            }
         }
      } else {
         $cw_link_video_youtube = NULL;
      }
      return $cw_link_video_youtube;
   }

   //Link Vimeo
   public function cw_link_video_vimeo($link_video_vimeo)
   {
      if (have_rows('videos_group')) {
         while (have_rows('videos_group')) {
            the_row();
            if ($this->type_video == 'vimeo') {
               $cw_link_video_vimeo =  get_sub_field('cw_link_vimeo');
            } else {
               $cw_link_video_vimeo = NULL;
            }
         }
      } else {
         $cw_link_video_vimeo = NULL;
      }
      return $cw_link_video_vimeo;
   }


   //Link File
   public function cw_link_video_file($link_video_file)
   {
      if (have_rows('videos_group')) {
         while (have_rows('videos_group')) {
            the_row();
            if ($this->type_video == 'file') {
               $cw_file = get_sub_field('cw_file');
               if ($cw_file) {
                  $cw_link_video_file = esc_url($cw_file['url']);
               } else {
                  $cw_link_video_file = NULL;
               }
            } else {
               $cw_link_video_file = NULL;
            }
         }
      } else {
         $cw_link_video_file = NULL;
      }
      return $cw_link_video_file;
   }

   //Extract Video ID
   public function cw_extract_id($extract_id)
   {
      if ($this->type_video == 'youtube') {
         $url = $this->link_video_youtube;
         if (preg_match('/https:\/\/(www\.)*youtube\.com\/.*/', $url)) {
            parse_str(parse_url($url, PHP_URL_QUERY), $my_array_of_vars);
            $cw_video_id =  $my_array_of_vars['v'];
         }
      } elseif ($this->type_video == 'vimeo') {
         $url = $this->link_video_vimeo;
         if (preg_match('/https:\/\/(www\.)*vimeo\.com\/.*/', $url)) {
            $urlParts = explode("/", parse_url($url, PHP_URL_PATH));
            $cw_video_id = (int)$urlParts[count($urlParts) - 1];
         }
      } elseif ($extract_id !== NULL) {
         $cw_video_id = $extract_id;
      } else {
         $cw_video_id = NULL;
      }
      return $cw_video_id;
   }

   //Final
   public function cw_final_video($final_video, $demo_video)
   {
      $type_video = $this->type_video;
      if ($type_video == 'youtube') {
         $link_youtube = $this->link_video_youtube;
         if ($link_youtube !== NULL) {
            $youtube_id = $this->extract_id;
            $cw_final_video = '<div class="player" data-plyr-provider="youtube" data-plyr-embed-id="' . $youtube_id . '"></div>';
         } else {
            $cw_final_video = $demo_video;
         }
      } elseif ($type_video == 'vimeo') {
         $link_vimeo = $this->link_video_vimeo;
         if ($link_vimeo !== NULL) {
            $vimeo_id = $this->extract_id;
            $cw_final_video = '<div class="player" data-plyr-provider="vimeo" data-plyr-embed-id="' . $vimeo_id . '"></div>';
         } else {
            $cw_final_video = $demo_video;
         }
      } elseif ($type_video == 'file') {
         if ($this->poster !== NULL) {
            $poster_url = $this->poster;
         } else {
            $poster_url = NULL;
         }

         if ($type_video !== NULL && $this->link_video_file !== NULL) {
            $video_url = $this->link_video_file;
            $cw_final_video = '<video poster="' . $poster_url . '" class="player" playsinline controls preload="none"><source src="' . $video_url . '" type="video/mp4"></video>';
         } else {
            $cw_final_video = $demo_video;
         }
      }

      return $cw_final_video;
   }
}
