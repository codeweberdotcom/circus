<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
   <meta charset="<?php bloginfo('charset'); ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <link rel="profile" href="https://gmpg.org/xfn/11">
   <?php wp_head(); ?>
   <?php global $forms; ?>
   <?php $forms = array(); ?>
</head>

<body <?php body_class(); ?>>
   <?php sandbox_page_loader(); ?>
   <?php do_action('codeweber_start_body'); // Hook start body 
   ?>
   <?php wp_body_open(); ?>
   <?php sandbox_frame_open(); ?>
   <div id="content-wrapper" class="content-wrapper">
      <?php global $codeweber; ?>
      <?php do_action('codeweber_start_content_wrapper'); // Hook start content wrapper 

      if (is_category() || is_tag() || is_tax()) {
         $taxonomy_prefix = 'term';
         $term_id = get_queried_object_id();
         $term_id_prefixed = $taxonomy_prefix . '_' . $term_id;
         $codeweber['global']['page_id'] = $taxonomy_prefix . '_' . $term_id;
      } else {
         $term_id_prefixed = NULL;
         $codeweber['global']['page_id'] = NULL;
      }

      if (is_shop()) {

         if (get_theme_mod('codeweber_header_woo_style') !== 'default') {
            $codeweber['page_settings']['header_style'] = get_theme_mod('codeweber_header_woo_style');
         } else {
            $codeweber['page_settings']['header_style'] = get_theme_mod('codeweber_header_style');
         }

         if (get_theme_mod('codeweber_woo_header_bg') == 'default' && get_theme_mod('codeweber_header_style') !== 'transparent') {
            $codeweber['page_settings']['header_bg_color'] = get_theme_mod('codeweber_header_bg');
         } elseif (get_theme_mod('codeweber_woo_header_bg') !== 'transparent' && get_theme_mod('codeweber_woo_header_bg') !== 'default') {
            $codeweber['page_settings']['header_bg_color'] = get_theme_mod('codeweber_woo_header_bg');
         } else {
            $codeweber['page_settings']['header_bg_color'] = NULL;
         }

         if (get_theme_mod('codeweber_header_woo_color') !== 'default') {
            $codeweber['page_settings']['nav_color'] = get_theme_mod('codeweber_header_woo_color');
         } elseif (get_theme_mod('codeweber_header_color')) {
            $codeweber['page_settings']['nav_color'] = get_theme_mod('codeweber_header_color');
         } else {
            $codeweber['page_settings']['nav_color'] = 'navbar-light';
         }
      } elseif (is_product() || is_product_category() || is_tax()) {

         if (get_field('cw_transparent_header', $term_id_prefixed) && get_field('cw_transparent_header', $term_id_prefixed) !== 'default') {
            $codeweber['page_settings']['header_style'] = get_field('cw_transparent_header', $term_id_prefixed);
         } elseif (get_theme_mod('codeweber_header_woo_style') !== 'default') {
            $codeweber['page_settings']['header_style'] = get_theme_mod('codeweber_header_woo_style');
         } else {
            $codeweber['page_settings']['header_style'] = get_theme_mod('codeweber_header_style');
         }
         if (get_field('header_background_color', $term_id_prefixed) && get_field('header_background_color', $term_id_prefixed) !== 'default') {
            $codeweber['page_settings']['header_bg_color'] = get_field('header_background_color', $term_id_prefixed);
         } elseif (get_theme_mod('codeweber_woo_header_bg') == 'default' && get_theme_mod('codeweber_header_style') !== 'transparent') {
            $codeweber['page_settings']['header_bg_color'] = get_theme_mod('codeweber_header_bg');
         } elseif (get_theme_mod('codeweber_woo_header_bg') !== 'transparent' && get_theme_mod('codeweber_woo_header_bg') !== 'default') {
            $codeweber['page_settings']['header_bg_color'] = get_theme_mod('codeweber_woo_header_bg');
         } else {
            $codeweber['page_settings']['header_bg_color'] = NULL;
         }

         if (get_field('navbar_color', $term_id_prefixed) && get_field('navbar_color', $term_id_prefixed) !== 'default') {
            $codeweber['page_settings']['nav_color'] = get_field('navbar_color', $term_id_prefixed);
         } elseif (get_theme_mod('codeweber_header_woo_color') !== 'default') {
            $codeweber['page_settings']['nav_color'] = get_theme_mod('codeweber_header_woo_color');
         } elseif (get_theme_mod('codeweber_header_color')) {
            $codeweber['page_settings']['nav_color'] = get_theme_mod('codeweber_header_color');
         } else {
            $codeweber['page_settings']['nav_color'] = 'navbar-light';
         }
      }

      if (get_field('header', $term_id_prefixed) && get_field('header', $term_id_prefixed) !== 'default') {
         get_template_part('templates/header/header', get_field('header', $term_id_prefixed));
      } elseif (get_theme_mod('woocommerce_header') !== 'default' && get_theme_mod('woocommerce_header')) {
         get_template_part('templates/header/header', get_theme_mod('woocommerce_header'));
      } elseif (get_theme_mod('codeweber_header')) {
         get_template_part('templates/header/header', get_theme_mod('codeweber_header'));
      } else {
         get_template_part('templates/header/header', 'sandbox-woo-01');
      }

      do_action('codeweber_woo_after_header'); // Hook after header
