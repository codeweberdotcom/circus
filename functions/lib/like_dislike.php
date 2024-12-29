<?php

//---- Get like or dislike count
function ip_get_like_count($type = 'likes')
{
   $current_count = get_post_meta(get_the_id(), $type, true);

   return ($current_count ? $current_count : 0);
}

//---- Process like or dislike
function ip_process_like()
{
   $processed_like = false;
   $redirect       = false;

   // Check if like or dislike
   if (is_singular('post') || is_singular('faq')) {
      if (isset($_GET['post_action'])) {
         if ($_GET['post_action'] == 'like') {
            // Like
            $like_count = get_post_meta(get_the_id(), 'likes', true);

            if ($like_count) {
               $like_count = $like_count + 1;
            } else {
               $like_count = 1;
            }

            $processed_like = update_post_meta(get_the_id(), 'likes', $like_count);
         } elseif ($_GET['post_action'] == 'dislike') {
            // Dislike
            $dislike_count = get_post_meta(get_the_id(), 'dislikes', true);

            if ($dislike_count) {
               $dislike_count = $dislike_count + 1;
            } else {
               $dislike_count = 1;
            }

            $processed_like = update_post_meta(get_the_id(), 'dislikes', $dislike_count);
         }

         if ($processed_like) {
            $redirect = get_the_permalink();
         }
      }
   }

   // Redirect
   if ($redirect) {
      wp_redirect($redirect);
      die;
   }
}

add_action('template_redirect', 'ip_process_like');
