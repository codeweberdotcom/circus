<?php
$user_id = get_the_author_meta('ID');
$result = wp_get_recent_posts([
   'numberposts' => 3,
   'offset' => 0,
   'category' => 0,
   'orderby' => 'post_date',
   'order' => 'DESC',
   'include' => '',
   'exclude' => '',
   'meta_key' => '',
   'meta_value' => '',
   'post_type' => 'post',
   'post_status' => 'publish',
   'suppress_filters' => true,
], OBJECT); ?>
<h3 class="h4 widget-title mb-3"><?php esc_html_e('Recent Posts', 'codeweber'); ?></h3>
<ul class="image-list">
   <?php
   $i = 0;
   foreach ($result as $post) {
      setup_postdata($post);
      $id = $post->ID;
      $title = $post->post_title;
   ?>
      <li>
         <figure class="rounded"><a href="<?php the_permalink($id); ?>"><?php echo get_the_post_thumbnail($id, 'brk_post_sm', array('class' => 'alignleft')); ?></a></figure>
         <div class="post-content">
            <h4 class="h6 mb-2"> <a class="link-dark" href="<?php the_permalink($id); ?>"><?php echo $title; ?></a> </h4>
            <ul class="post-meta">
               <li class="post-date"><i class="uil uil-calendar-alt"></i><span><?php echo get_the_date('d F Y', $post); ?></span></li>
               <li class="post-comments"><a href="<?php echo get_post_permalink(); ?>/#comments"><i class="uil uil-comment"></i><?php echo get_comments_number(); ?></a></li>
            </ul>
            <!-- /.post-meta -->
         </div>
      </li>
   <?php } ?>
</ul>
<?php wp_reset_postdata();
?>
<!-- /.image-list -->