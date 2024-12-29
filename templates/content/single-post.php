<?php global $codeweber; ?>
<?php $content_class = $codeweber['page_settings']['content_class']; ?>


<?php if ($codeweber['page_settings']['page_header_type'] == 'type_5' || $codeweber['page_settings']['page_header_type'] == 'type_7') {
	$class_content = 'col-lg-10 mx-auto';
} else {
	$class_content = 'col-lg-8';
} ?>


<div class="<?php echo $class_content; ?> <?php echo $content_class; ?>">
	<div class="blog single">
		<div class="card">
			<figure class="card-img-top">
				<?php the_post_thumbnail('sandbox_hero_5', array('class' => 'img-fluid')); ?>
			</figure>
			<div class="card-body">
				<div class="classic-view">
					<article class="post">
						<div class="post-content mb-5">
							<?php the_content(); ?>
						</div>
						<!-- /.post-content -->
						<div class="post-footer d-md-flex flex-md-row justify-content-md-between align-items-center mt-8">
							<div>
								<?php $tags = get_tags([
									'number'       => 4,
									'order'        => 'ASC',
									'hide_empty'   => true,
								]);
								?>
								<ul class="list-unstyled tag-list mb-0">
									<?php foreach ($tags as $tag) {
										$tag_link = get_tag_link($tag->term_id); ?>
										<li><a href="<?php echo $tag_link; ?>" title='<?php echo $tag->name; ?>' class="btn btn-soft-ash btn-sm rounded-pill mb-0 <?php echo $tag->slug; ?>"><?php echo $tag->name; ?></a></li>
									<?php } ?>
								</ul>
							</div>
							<div class="mb-0 mb-md-2">
								<?php // https://github.com/ellisonleao/sharer.js  
								?>
								<div class="dropdown share-dropdown btn-group">
									<button class="btn btn-sm btn-red <?php echo GetThemeButton(); ?> btn-icon btn-icon-start dropdown-toggle mb-0 me-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="uil uil-share-alt"></i> Поделиться </button>
									<div class="dropdown-menu">
										<button class="dropdown-item" data-sharer="vk" data-title="<?php the_title(); ?>" data-hashtag="hashtag" data-url="<?php echo get_permalink(); ?>"><i class="uil uil-vk"></i>Вконтакте</button>
										<button class="dropdown-item button" data-sharer="email" data-title="<?php the_title(); ?>" data-url="<?php echo get_permalink(); ?>" data-subject="Hey! Check out that URL" data-to="inf0@codeweber.com"><i class="uil uil-envelope-share"></i>Email</button>
										<button class="dropdown-item button" data-sharer="whatsapp" data-title="<?php the_title(); ?>" data-url="<?php echo get_permalink(); ?>"><i class="uil uil-whatsapp"></i>Whatsapp</button>
										<button class="dropdown-item button" data-sharer="telegram" data-title="<?php the_title(); ?>" data-url="<?php echo get_permalink(); ?>"><i class="uil uil-telegram"></i>Telegram</button>
										<button class="dropdown-item button" data-sharer="skype" data-url="<?php echo get_permalink(); ?>" data-title="<?php the_title(); ?>"><i class="uil uil-skype"></i>Skype</button>
									</div>
									<!--/.dropdown-menu -->
								</div>
								<!--/.share-dropdown -->
							</div>
						</div>
						<!-- /.post-footer -->
						<hr>
						<div class="author-info d-md-flex align-items-center mb-3">
							<div class="d-flex align-items-center">
								<?php
								$user_id = get_the_author_meta('ID');
								$user_acf_prefix = 'user_';
								$user_id_prefixed = $user_acf_prefix . $user_id;
								$avatar = get_field('avatar', $user_id_prefixed);
								if ($avatar) : ?>
									<figure class="user-avatar">
										<img src="<?php echo esc_url($avatar['sizes']['brk_post_sm']); ?>" class='rounded-circle' alt="<?php echo esc_attr($avatar['alt']); ?>" />
									</figure>
								<?php else : ?>
									<figure class="user-avatar">
										<?php
										echo get_avatar(get_the_author_meta('user_email'), 32);
										?>
									</figure>
								<?php endif; ?>
								<div>
									<div class="h6"><a href="<?php echo get_author_posts_url($user_id, get_the_author_meta('user_nicename')); ?>" class="link-dark"><?php the_author_meta('first_name'); ?> <?php the_author_meta('last_name'); ?></a></div>
									<?php
									$job_title = __('Writer', 'codeweber');
									if (get_field('job_title', $user_id_prefixed)) {
										$job_title = get_field('job_title', $user_id_prefixed);
									}
									?>
									<span class="post-meta fs-15"><?php echo $job_title; ?></span>
								</div>
							</div>
							<div class="mt-3 mt-md-0 ms-auto">
								<a href="<?php echo get_author_posts_url($user_id, get_the_author_meta('user_nicename')); ?>" class="btn btn-sm btn-soft-ash <?php echo GetThemeButton(); ?> btn-icon btn-icon-start mb-0"><i class="uil uil-file-alt"></i> <?php esc_html_e('All Posts', 'codeweber'); ?></a>
							</div>
						</div>
						<p><?php the_author_meta('description'); ?></p>
						<nav class="nav social">
							<?php get_template_part('templates/components/socialicons', ''); ?>
						</nav>
					</article>
					<!-- /.post -->
				</div>
				<!-- /.classic-view -->
				<hr />
				<?php get_template_part("templates/flexible-content/sliders/slider_1/slider_1"); ?>
				<?php

				if (comments_open() || get_comments_number()) { ?>
					<hr />
				<?php
					comments_template();
				}
				?>
			</div>
			<!-- /.card-body -->
		</div>
		<!-- /.card -->
	</div>
	<!-- /.blog -->
</div>
<!-- /column -->