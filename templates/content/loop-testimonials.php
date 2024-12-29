<article id="post-<?php the_ID(); ?>" class="post">
   <div class="card">
      <div class="card-body">
         <?php if (have_rows('testimonials_post_field')) {
            while (have_rows('testimonials_post_field')) {
               the_row();
               $photo = get_sub_field('photo');
               if (get_sub_field('photo')) {
                  $avatar_url = esc_url($photo['sizes']['cw_icon_lg']);;
               } else {
                  $avatar_url = '#';
               } ?>
               <div class="post-header row">
                  <div class="blockquote-details col-lg-8">
                     <img class="rounded-circle w-12" src="<?php echo $avatar_url; ?>" alt="" />
                     <div class="info">
                        <h2 class="h5 post-title mb-1"><?php the_sub_field('name'); ?></h2>
                        <ul class="post-meta">
                           <li><i class="uil uil-calendar-alt"></i><?php the_time(get_option('date_format')); ?></li>
                        </ul>
                     </div>
                  </div>
                  <!-- /.post-info -->
                  <div class="blockquote-details justify-content-end col-lg-4">
                     <span class="ratings <?php echo acf_rating(); ?>"></span>
                  </div>
               </div>
               <!-- /.post-header -->
               <div class=" post-content">
                  <p><?php the_sub_field('testimonial'); ?></p>
               </div>
               <!-- /.post-content -->
      </div>
      <!--/.card-body -->
<?php }
         } ?>
   </div>
   <!-- /.card -->
   <div class="" id="comments">
      <?php $args = array(
         'post_id' => get_the_ID(),
      );
      $comments = get_comments($args);
      foreach ($comments as $comment) { ?>
         <ul class="children ">
            <li class="comment depth-2 parent card">
               <article id="div-comment-<?php echo $comment->commemt_ID; ?>" class="comment-body card-body">
                  <div class="comment-header d-md-flex align-items-center">
                     <div class="blockquote-details col-lg-8">
                        <figure class="user-avatar">
                           <img class="rounded-circle" alt="" src="<?php print get_avatar_url($comment, $comment->comment_ID); ?>" />
                        </figure>
                        <div class="info">
                           <h2 class="h5 post-title mb-1"><?php echo $comment->comment_author; ?></a></h2>
                           <p class="mb-0">
                              <?php echo $comment->comment_content; ?>
                           </p>
                        </div>
                     </div>
                     <!-- /.post-info -->
                  </div><!-- .comment-meta -->
               </article>
            </li>
         </ul>
      <?php } ?>
   </div>
   <!-- /.card-footer -->
</article> <!-- #post-<?php the_ID(); ?> -->