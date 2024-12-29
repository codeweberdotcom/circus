<?php get_header(); ?>

<?php do_action('page_content_start'); ?>

<?php while (have_posts()) {
   the_post();
   get_template_part('templates/content/page', '');
} ?>

<?php do_action('page_content_end'); ?>

<?php get_footer();
