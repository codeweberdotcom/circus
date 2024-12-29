<?php

/**
 * Custom comment walker for this theme.
 */

if (!class_exists('codeweber_Walker_Comment')) {
   class codeweber_Walker_Comment extends Walker_Comment
   {
      protected function html5_comment($comment, $depth, $args)
      {
         $tag = ('div' === $args['style']) ? 'div' : 'li';  ?>
         <<?php echo $tag; ?> id="comment-<?php comment_ID(); ?>" <?php comment_class($this->has_children ? 'parent' : '', $comment); ?>>
            <article id="div-comment-<?php comment_ID(); ?>" class="comment-body">
               <div class="comment-header d-md-flex align-items-center">
                  <div class="d-flex align-items-center">
                     <?php
                     $comment_author_url = get_comment_author_url($comment);
                     $comment_author     = get_comment_author($comment);
                     $avatar             = get_avatar($comment, $args['avatar_size']);

                     if (0 !== $args['avatar_size']) {
                        $user_id = $comment->user_id;
                        $user_acf_prefix = 'user_';
                        $user_id_prefixed = $user_acf_prefix . $user_id;
                        if (get_field('avatar', $user_id_prefixed)) :
                           $avatar = get_field('avatar', $user_id_prefixed);
                           if ($avatar) : ?>
                              <figure class="user-avatar">
                                 <img src="<?php echo esc_url($avatar['sizes']['brk_post_sm']); ?>" class='rounded-circle' alt="<?php echo esc_attr($avatar['alt']); ?>" />
                              </figure>
                           <?php endif;
                        else :   ?>
                           <figure class="user-avatar">
                              <?php echo $avatar; ?>
                           </figure>

                     <?php endif;
                     }
                     printf(
                        '<div><div class="comment-author h6">%1$s</div><span class="screen-reader-text says">%2$s</span>',
                        esc_html($comment_author),
                        __('says:', 'codeweber')
                     );
                     ?>
                     <ul class="post-meta">
                        <li><i class="uil uil-calendar-alt"></i>
                           <?php
                           /* translators: 1: Comment date, 2: Comment time. */
                           $comment_timestamp = sprintf(__('%1$s ', 'codeweber'), get_comment_date('', $comment), get_comment_time('H:i'));
                           printf(
                              '<time datetime="%s" title="%s">%s</time>',
                              esc_url(get_comment_link($comment, $args)),
                              get_comment_time('c'),
                              esc_attr($comment_timestamp),
                              esc_html($comment_timestamp)
                           );
                           if (get_edit_comment_link()) {
                              printf(
                                 ' <span aria-hidden="true">&bull;</span> <a class="comment-edit-link" href="%s">%s</a>',
                                 esc_url(get_edit_comment_link()),
                                 __('Edit', 'codeweber')
                              );
                           }
                           ?>
                        </li>
                     </ul>
                  </div>
                  <!-- /.post-meta -->
               </div>
               <?php
               $comment_reply_link = get_comment_reply_link(
                  array_merge(
                     $args,
                     array(
                        'add_below' => 'div-comment',
                        'depth'     => $depth,
                        'max_depth' => $args['max_depth'],
                        'before'    => '<div class="mt-3 mt-md-0 ms-auto comment-reply">',
                        'after'     => '</div>',
                     )
                  )
               );
               $by_post_author = codeweber_is_comment_by_post_author($comment);
               if ($comment_reply_link || $by_post_author) {
                  if ($comment_reply_link) {
                     echo $comment_reply_link;
                  }
               }
               ?>
               </div><!-- .comment-meta -->
               <?php
               comment_text();
               if ('0' === $comment->comment_approved) {
               ?>
                  <div class="alert alert-danger alert-icon" role="alert">
                     <i class="uil uil-star"></i> <?php _e('Your comment is awaiting moderation.', 'codeweber'); ?></a>.
                  </div>
               <?php
               }
               ?>
            </article><!-- .comment-body -->
   <?php
      }
   }
}
