<article id="post-<?php the_ID(); ?>" class="post">
   <div class="card">
      <div class="card-body">
         <div class="post-header">
            <div class="post-category text-line">
               <?php $tags_post = get_the_terms($post, 'faq_categories'); ?>
               <?php if (is_array($tags_post)) {
                  $array_cat_faq = array();
                  foreach ($tags_post as $tag) {
                     $tag_link = get_tag_link($tag->term_id);
                     $array_cat_faq[] = ' <a href="' . $tag_link . '" title=' . $tag->name . ' class="text-ash ' . $tag->slug . '" rel="category">' . $tag->name . '</a>';
                  }
                  echo implode(',&nbsp', $array_cat_faq);
               }
               ?>
            </div>
            <!-- /.post-category -->
            <h2 class="post-title mt-1 mb-0"><a class="link-dark" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
         </div>
         <!-- /.post-header -->
         <div class=" post-content">
            <p><?php the_excerpt(); ?></p>
         </div>
         <!-- /.post-content -->
      </div>
      <!--/.card-body -->
      <div class="card-footer">
         <?php
         global $post;
         $user_id = get_the_author_meta('ID');
         $user_acf_prefix = 'user_';
         $user_id_prefixed = $user_acf_prefix . $user_id;
         ?>
         <ul class="post-meta d-flex mb-0">
            <li class="post-date"><i class="uil uil-calendar-alt"></i><span><?php the_time(get_option('date_format')); ?></span></li>
            <li class="post-comments"><a href="<?php echo get_post_permalink(); ?>/#comments"><i class="uil uil-comment"></i><span><?php echo $post->comment_count; ?> <?php esc_html_e('Comments', 'codeweber'); ?></span></a></li>
            <li class="post-likes ms-auto">
               <?php if (ip_get_like_count('likes') >= 1) { ?>
                  <i class="text-red uil uil-heart-alt"></i>
                  <?php echo ip_get_like_count('likes') ?>
                  <span><?php esc_html_e('Likes', 'codeweber'); ?></span>
               <?php } else { ?>
                  <i class="uil uil-heart-alt"></i>
                  <?php echo ip_get_like_count('likes') ?>
                  <span><?php esc_html_e('Likes', 'codeweber'); ?></span>
               <?php  }
               ?>

            </li>
         </ul>
         <!-- /.post-meta -->
      </div>
      <!-- /.card-footer -->
   </div>
   <!-- /.card -->
</article> <!-- #post-<?php the_ID(); ?> -->