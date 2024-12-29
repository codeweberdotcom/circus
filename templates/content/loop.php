<article id="post-<?php the_ID(); ?>" class="post">
	<div class="card">
		<figure class="card-img-top overlay overlay-1 hover-scale"><a href="<?php the_permalink(); ?>">
				<?php
				the_post_thumbnail(
					'sandbox_hero_5',
					array(
						'class' => '',
						'alt' => get_the_title(),
					)
				);
				?><span class="bg"></span></a>
			<figcaption>
				<div class="from-top h5 mb-0"><?php esc_html_e('Read More', 'codeweber'); ?></div>
			</figcaption>
		</figure>
		<div class="card-body">
			<div class="post-header">
				<div class="post-category text-line">
					<a href="#" class="hover" rel="category"><?php the_category(', '); ?></a>
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
				<li class="post-author"><a href="<?php echo get_author_posts_url($user_id, get_the_author_meta('user_nicename')); ?>"><i class="uil uil-user"></i><span><?php esc_html_e('By', 'codeweber'); ?> <?php the_author_meta('user_firstname'); ?></span></a></li>
				<li class="post-comments"><a href="<?php echo get_post_permalink(); ?>/#comments"><i class="uil uil-comment"></i><span><?php echo $post->comment_count; ?> <?php esc_html_e('Comments', 'codeweber'); ?></span></a></li>
				<li class="post-likes ms-auto">
					<i class="uil uil-heart-alt"></i>
					<?php echo ip_get_like_count('likes') ?>
					<span><?php esc_html_e('Likes', 'codeweber'); ?></span>
				</li>
			</ul>
			<!-- /.post-meta -->
		</div>
		<!-- /.card-footer -->
	</div>
	<!-- /.card -->
</article> <!-- #post-<?php the_ID(); ?> -->