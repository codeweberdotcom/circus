<?php

/**
 * Checks if the specified comment is written by the author of the post commented on.
 */
function codeweber_is_comment_by_post_author($comment = null)
{
   if (is_object($comment) && $comment->user_id > 0) {
      $user = get_userdata($comment->user_id);
      $post = get_post($comment->comment_post_ID);
      if (!empty($user) && !empty($post)) {
         return $comment->user_id === $post->post_author;
      }
   }
   return false;
}

/**
 * Filters comment reply link to not JS scroll.
 */
function codeweber_filter_comment_reply_link($link)
{
   $link = str_replace('class=\'', 'class=\'do-not-scroll btn btn-soft-ash btn-sm ' . GetThemeButton() . ' btn-icon btn-icon-start mb-0 ', $link);
   return $link;
}
add_filter('comment_reply_link', 'codeweber_filter_comment_reply_link');
