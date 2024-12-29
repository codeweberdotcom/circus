<?php get_header();

if (get_theme_mod('service_template') == 'template_1') {
   get_template_part('templates/archive/archive-services-1', '');
} elseif (get_theme_mod('service_template') == 'template_2') {
   get_template_part('templates/archive/archive-services-2', '');
} elseif (get_theme_mod('service_template') == 'template_3') {
   get_template_part('templates/archive/archive-services-3', '');
}

get_footer();
