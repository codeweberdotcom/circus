<?php
global $post;
?>
<div class="col-lg-8">
	<div class="blog single">
		<div class="card">
			<figure class="card-img-top">
				<?php the_post_thumbnail('sandbox_hero_5', array('class' => 'img-fluid')); ?>
			</figure>
			<div class="card-body">
				<div class="classic-view">
					<article class="post">
						<div class="post-content mb-5">
							<div class="post-header">
								<h2 class="post-title mt-1 mb-0"><?php esc_html_e('Answer to the question:', 'codeweber') ?></h2>
							</div>
							<?php if (get_field('paragraph')) { ?>
								<p>
									<?php the_field('paragraph'); ?>
								</p>
							<?php	} ?>
						</div>
						<!-- /.post-content -->
						<div class="post-footer d-md-flex flex-md-row justify-content-md-between align-items-center mt-8">
							<div>
								<ul class="list-unstyled tag-list mb-0">
									<?php $tags_post = get_the_terms($post, 'faq_tag'); ?>
									<?php if (is_array($tags_post)) {
										foreach ($tags_post as $tag) {
											$tag_link = get_tag_link($tag->term_id); ?>
											<li><a href="<?php echo $tag_link; ?>" title='<?php echo $tag->name; ?>' class="btn btn-soft-ash btn-sm rounded-pill mb-0 <?php echo $tag->slug; ?>"><?php echo $tag->name; ?></a></li>
									<?php
										}
									}
									?>
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
								<!--/.share-dropdown -->
							</div>
						</div>
						<!-- /.post-footer -->
					</article>
					<!-- /.post -->
				</div>
				<!-- /.classic-view -->
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