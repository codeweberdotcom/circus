<?php
$my_posts = new WP_Query;
$myposts = $my_posts->query(array(
   'post_type' => 'post'
)); ?>
<div class="swiper-container dots-closer blog grid-view mb-6" data-margin="0" data-dots="true" data-items-xl="3" data-items-md="2" data-items-xs="1">
   <div class="swiper">
      <div class="swiper-wrapper">
         <?php
         // обрабатываем результат
         foreach ($myposts as $post) { ?>
            <div class="swiper-slide">
               <div class="item-inner">
                  <article>
                     <div class="card">
                        <figure class="card-img-top overlay overlay-1 hover-scale"><a href="<?php the_permalink(); ?>">
                              <?php
                              the_post_thumbnail(
                                 'sandbox_slider_1',
                                 array(
                                    'class' => '',
                                    'alt' => get_the_title(),
                                 )
                              );
                              ?>
                           </a>
                           <figcaption>
                              <h5 class="from-top mb-0"><?php esc_html_e('Read More', 'codeweber'); ?></h5>
                           </figcaption>
                        </figure>

                        <div class="card-body">
                           <div class="post-header">
                              <div class="post-category text-line">
                                 <?php the_category(', '); ?>
                              </div>
                              <!-- /.post-category -->
                              <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="<?php the_permalink(); ?>"><?php echo esc_html($post->post_title); ?></a></h2>
                           </div>
                           <!-- /.post-header -->
                           <div class="post-content">
                              <?php the_excerpt(); ?>
                           </div>
                           <!-- /.post-content -->
                        </div>
                        <!--/.card-body -->
                        <div class="card-footer">
                           <ul class="post-meta d-flex mb-0">
                              <li class="post-date"><i class="uil uil-calendar-alt"></i><span><?php the_time(get_option('date_format')); ?></span></li>
                              <li class="post-comments"><a href="<?php echo get_post_permalink(); ?>/#comments"><i class="uil uil-comment"></i><?php echo $post->comment_count; ?></a></li>
                              <li class="post-likes ms-auto"><span><i class="uil uil-heart-alt"></i><?php echo ip_get_like_count('likes') ?></span></li>
                           </ul>
                           <!-- /.post-meta -->
                        </div>
                        <!-- /.post-footer -->
                  </article>
                  <!-- /article -->
               </div>
            </div>
            <!--/.swiper-slide -->
         <?php }
         ?>
      </div>
      <!--/.swiper-wrapper -->
      <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
   </div>
   <!-- /.swiper -->
   <div class="swiper-controls">
      <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal"><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 1" aria-current="true"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span></div>
   </div>
</div>