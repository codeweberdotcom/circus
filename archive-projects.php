<?php get_header();

if (get_theme_mod('project_template') == 'template_1') {
   get_template_part('templates/archive/archive-projects-1', '');
} elseif (get_theme_mod('project_template') == 'template_2') {
   get_template_part('templates/archive/archive-projects-2', '');
} elseif (get_theme_mod('project_template') == 'template_3') {
   get_template_part('templates/archive/archive-projects-3', '');
} elseif (get_theme_mod('project_template') == 'template_4') {
   get_template_part('templates/archive/archive-projects-4', '');
} elseif (get_theme_mod('project_template') == 'template_5') {
   get_template_part('templates/archive/archive-projects-5', '');
}

get_footer();
