<?php get_header(); ?>

<section class="wrapper bg-light">
	<div class="container pt-12 pt-md-14 pb-14 pb-md-16">
		<div class="row">
			<div class="col-lg-9 col-xl-8 mx-auto">

				<?php if (get_theme_mod('image_control_six')) {
					$image_404_url = get_theme_mod('image_control_six');
				} else {
					$image_404_url = get_template_directory_uri() . '/dist/img/illustrations/404_1.png';
				}
				?>
				<figure class="mb-10"><img class="img-fluid" src="<?php echo $image_404_url; ?>" srcset="<?php echo $image_404_url; ?>" alt=""></figure>
			</div>
			<!-- /column -->
			<div class="col-lg-8 col-xl-7 col-xxl-6 mx-auto text-center">
				<h1 class="mb-3">
					<?php if (get_theme_mod('404_title')) {
						echo get_theme_mod('404_title');
					} else { ?>
						<?php esc_html_e('Oops! Page Not Found.', 'codeweber'); ?>
					<?php } ?>
				</h1>
				<p class="lead mb-7 px-md-12 px-lg-5 px-xl-7">
					<?php if (get_theme_mod('404_description')) {
						echo get_theme_mod('404_description');
					} else { ?>
						<?php esc_html_e('The page you are looking for is not available or has been moved. Try a different page or go to homepage with the button below.', 'codeweber'); ?>
					<?php } ?>
				</p>
				<a href="/" class="btn btn-primary rounded-pill"><?php esc_html_e('Go to Homepage', 'codeweber'); ?></a>
			</div>
			<!-- /column -->
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container -->
</section>
<!-- /section -->

<?php
get_footer();
