<?php get_header();

if (get_theme_mod('faq_template') == 'template_1') {
   get_template_part('templates/archive/archive-faq-1', '');
} elseif (get_theme_mod('faq_template') == 'template_2') {
   get_template_part('templates/archive/archive-faq-2', '');
} elseif (get_theme_mod('faq_template') == 'template_3') {
   get_template_part('templates/archive/archive-faq-3', '');
}

get_footer();
