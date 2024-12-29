<?php get_header(); ?>
<?php global $codeweber; ?>
<?php $section_class = $codeweber['page_settings']['angle_class']; ?>
<?php $container_class = $codeweber['page_settings']['container_class']; ?>
<?php $content_class = $codeweber['page_settings']['content_class']; ?>
<?php if (is_singular('services')) {
	while (have_posts()) :
		the_post(); ?>

		<?php
		get_template_part('templates/content/single', get_post_type());
		?>

	<?php
		get_sidebar();
	endwhile;
} else {
	?>
	<div class="container<?php echo $container_class; ?> <?php echo $section_class; ?>">
		<div class="row gx-lg-8 gx-xl-12">
			<?php
			while (have_posts()) :
				the_post();
				get_template_part('templates/content/single', get_post_type()); ?>
				<?php
				if ($codeweber['page_settings']['page_header_type'] !== 'type_5' && $codeweber['page_settings']['page_header_type'] !== 'type_7') {
					get_sidebar();
				} ?>
			<?php
			endwhile;
			?>
		</div>
	</div>
<?php
} ?>

<?php get_footer(); ?>