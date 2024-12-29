<?php get_header(); ?>
<?php global $codeweber; ?>
<?php $section_class = $codeweber['page_settings']['angle_class']; ?>
<?php $container_class = $codeweber['page_settings']['container_class']; ?>
<?php $content_class = $codeweber['page_settings']['content_class']; ?>

<section class="wrapper bg-light<?php echo $section_class; ?>">
	<div class="container<?php echo $container_class; ?>">
		<div class="row gx-lg-8 gx-xl-12 <?php echo $content_class; ?>">
			<?php

			/** Faq Content */ ?>
			<?php if (is_post_type_archive('faq')  || is_tax('faq_categories') || is_tax('faq_tag')) {
				if (is_active_sidebar('sidebar-faq') || has_action('sidebar_faq_start') || has_action('sidebar_faq_end')) {
					$class_faq_content = 'col-lg-8';
				} else {
					$class_faq_content = 'col';
				} ?>
				<div class="<?php echo $class_faq_content; ?>">
					<div class="blog classic-view">
						<?php while (have_posts()) :
							the_post();
							get_template_part('templates/content/loop', 'faq');
						endwhile;
						codeweber_pagination(); ?>
						<!-- /post pagination -->
					</div>
				</div>
				<?php get_sidebar(); ?>
				<?php /** Services Content */ ?>
			<?php } elseif (is_post_type_archive('services')  || is_tax('service_category')  || is_tax('types_of_services')) {
				if (is_active_sidebar('sidebar-testimonials')) {
					$class_service_content = 'col-lg-8';
				} else {
					$class_service_content = 'col';
				} ?>
				<div class="<?php echo $class_service_content; ?>">
					<div class="blog classic-view">
						<?php while (have_posts()) :
							the_post();
							get_template_part('templates/content/loop', 'services');
						endwhile;
						codeweber_pagination(); ?>
						<!-- /post pagination -->
					</div>
				</div>
				<?php get_sidebar(); ?>
			<?php } elseif (is_post_type_archive('testimonials')) {
				if (is_active_sidebar('sidebar-testimonials')) {
					$class_testimonials_content = 'col-lg-8';
				} else {
					$class_testimonials_content = 'col';
				} ?>
				<div class="<?php echo $class_testimonials_content; ?>">
					<div class="blog classic-view">
						<?php while (have_posts()) :
							the_post();
							get_template_part('templates/content/loop', 'testimonials');
						endwhile;
						codeweber_pagination(); ?>
						<!-- /post pagination -->
					</div>
				</div>
				<?php get_sidebar(); ?>
			<?php } elseif (is_search() && isset($_GET['s'])) {
			?>
				<div class="shop mb-13 col">

					<?php if (have_posts()) : ?>

						<ul class="products list-unstyled row gx-md-8 gy-5">
							<?php while (have_posts()) :
								the_post();
								get_template_part('templates/content/loop', 'search');
							endwhile;
							codeweber_pagination(); ?>
							<!-- /post pagination -->
						</ul>

					<?php else : ?>
						<p><?php _e('No Search Results found', 'codeweber'); ?></p>
						<?php get_search_form(); ?>

					<?php endif; ?>

				</div>
				<?php get_sidebar(); ?>
			<?php } elseif (have_posts()) {
				if (is_active_sidebar('sidebar-main') || has_action('sidebar_main_start') || has_action('sidebar_main_end')) {
					$class_content = 'col-lg-8';
				} else {
					$class_content = 'col';
				}
				if ($codeweber['page_settings']['page_header_type'] == 'type_5' || $codeweber['page_settings']['page_header_type'] == 'type_7') {
					$class_content = 'col-lg-10 mx-auto';
				} ?>
				<div class="<?php echo $class_content; ?>">
					<div class="blog classic-view">
						<?php while (have_posts()) :
							the_post();
							get_template_part('templates/content/loop', '');
						endwhile;
						codeweber_pagination(); ?>
						<!-- /post pagination -->
					</div>
				</div>
				<?php if ($codeweber['page_settings']['page_header_type'] !== 'type_5' && $codeweber['page_settings']['page_header_type'] !== 'type_7') {
					get_sidebar();
				}
				?>
			<?php
			} else {
				if (is_active_sidebar('sidebar-main') || has_action('sidebar_main_start') || has_action('sidebar_main_end')) {
					$class_content = 'col-lg-8';
				} else {
					$class_content = 'col';
				} ?>
				<div class="<?php echo $class_content; ?>">
					<div class="blog classic-view">
						<?php get_template_part('templates/content/loop', 'none'); ?>
					</div>
				</div>
			<?php get_sidebar();
			}
			?>
		</div>
	</div>
</section>
<?php
get_footer();
