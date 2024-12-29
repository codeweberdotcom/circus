<?php

/**
 * Set Page Header
 */

function woo_header()
{

   global $codeweber;

   if (is_tax() || is_category() || is_tag()) {
      $taxonomy = get_queried_object();
      $taxonomy_prefix = $taxonomy->taxonomy;
      $term_id = get_queried_object_id();
      $term_id_prefixed = $taxonomy_prefix . '_' . $term_id;
   } else {
      $term_id_prefixed = NULL;
   }

   if (is_woocommerce() && !is_product()) {
      if (get_theme_mod('woo_title') && !is_product() && !is_tax() && !is_tag() && !is_category()) {
         $codeweber['page_settings']['page_header_title'] = get_theme_mod('woo_title');
      } else {
         $codeweber['page_settings']['page_header_title'] = codeweber_page_title();
      }

      if (get_theme_mod('woo_description') && !is_product() && !is_tax() && !is_tag() && !is_category()) {
         $codeweber['page_settings']['page_header_sub_title'] = get_theme_mod('woo_description');
      } else {
         $codeweber['page_settings']['page_header_sub_title'] = NULL;
      }

      //ready
      if (get_field('page_header_type', $term_id_prefixed) && get_field('page_header_type', $term_id_prefixed) !== 'default' && !is_shop()) {
         $codeweber['page_settings']['page_header_type'] = get_field('page_header_type', $term_id_prefixed);
      } elseif (get_theme_mod('codeweber_page_woo_header') !== 'default' && get_theme_mod('codeweber_page_woo_header') !== 'disable') {
         $codeweber['page_settings']['page_header_type'] = get_theme_mod('codeweber_page_woo_header');
      } elseif (get_theme_mod('codeweber_page_header') !== 'disable' && get_theme_mod('codeweber_page_woo_header') == 'default') {
         $codeweber['page_settings']['page_header_type'] = get_theme_mod('codeweber_page_header');
      } else {
         $codeweber['page_settings']['page_header_type'] = NULL;
      }

      //ready
      if (get_field('select_background_image', $term_id_prefixed) && !is_shop()) {
         $codeweber['page_settings']['page_header_url'] = get_field('select_background_image', $term_id_prefixed);
      } elseif (get_theme_mod('image_control_woo')) {
         $codeweber['page_settings']['page_header_url'] = get_theme_mod('image_control_woo');
      } else {
         $codeweber['page_settings']['page_header_url'] = NULL;
      }


      //ready
      if (get_field('color_page_header', $term_id_prefixed) && get_field('color_page_header', $term_id_prefixed) !== 'default' && !is_shop()) {
         $codeweber['page_settings']['page_header_color'] = get_field('color_page_header', $term_id_prefixed);
      } elseif (get_theme_mod('codeweber_page_woo_header_bg') !== 'default') {
         $codeweber['page_settings']['page_header_color'] = get_theme_mod('codeweber_page_woo_header_bg');
      } elseif (get_theme_mod('codeweber_page_header_bg')) {
         $codeweber['page_settings']['page_header_color'] = get_theme_mod('codeweber_page_header_bg');
      } else {
         $codeweber['page_settings']['page_header_color'] = ' bg-light';
      }

      //ready
      if (get_field('breadcrumbs', $term_id_prefixed) && get_field('breadcrumbs', $term_id_prefixed) !== 'default' && !is_shop()) {
         $codeweber['page_settings']['breadcrumbs'] = get_field('breadcrumbs', $term_id_prefixed);
      } elseif (get_theme_mod('codeweber_header_woo_bread') !== 'default') {
         $codeweber['page_settings']['breadcrumbs'] = get_theme_mod('codeweber_header_woo_bread');
      } elseif (get_theme_mod('codeweber_page_header_bread')) {
         $codeweber['page_settings']['breadcrumbs'] = get_theme_mod('codeweber_page_header_bread');
      } else {
         $codeweber['page_settings']['breadcrumbs'] = 'true';
      }

      //ready
      if (get_field('color_breadcrumbs', $term_id_prefixed) && get_field('color_breadcrumbs', $term_id_prefixed) !== 'default' && !is_shop()) {
         $codeweber['page_settings']['color_breadcrumbs'] = 'text-' . get_field('color_breadcrumbs', $term_id_prefixed);
      } elseif (get_theme_mod('codeweber_header_woo_bread_color') !== 'default') {
         $codeweber['page_settings']['color_breadcrumbs'] = 'text-' . get_theme_mod('codeweber_header_woo_bread_color');
      } elseif (get_theme_mod('codeweber_page_header_bread_color')) {
         $codeweber['page_settings']['color_breadcrumbs'] = 'text-' . get_theme_mod('codeweber_page_header_bread_color');
      } else {
         $codeweber['page_settings']['color_breadcrumbs'] = 'text-dark';
      }

      //ready
      if (get_field('page_header_angle', $term_id_prefixed) && get_field('page_header_angle', $term_id_prefixed) !== 'default' && !is_shop()) {
         $codeweber['page_settings']['angle_class'] = get_field('page_header_angle', $term_id_prefixed);
      } elseif (get_theme_mod('codeweber_header_woo_angle') == 'default') {
         if (get_theme_mod('codeweber_page_header_angle') == 'true') {
            $codeweber['page_settings']['angle_class'] = ' angled upper-end';
         } else {
            $codeweber['page_settings']['angle_class'] = NULL;
         }
      } elseif (get_theme_mod('codeweber_header_woo_angle') == 'true') {
         $codeweber['page_settings']['angle_class'] = ' angled upper-end';
      } else {
         $codeweber['page_settings']['angle_class'] = NULL;
      }
   } elseif (is_woocommerce() && is_product()) {
      $codeweber['page_settings']['page_header_title'] = codeweber_page_title();
      $codeweber['page_settings']['page_header_sub_title'] = NULL;

      //ready
      if (get_field('page_header_type', $term_id_prefixed) && get_field('page_header_type', $term_id_prefixed) !== 'default' && get_field('page_header_type', $term_id_prefixed) !== 'disable') {
         $codeweber['page_settings']['page_header_type'] = get_field('page_header_type', $term_id_prefixed);
      } elseif (get_theme_mod('codeweber_page_woo_product_header') !== 'default' && get_field('page_header_type', $term_id_prefixed) !== 'disable' && get_theme_mod('codeweber_page_woo_product_header') !== 'disable') {
         $codeweber['page_settings']['page_header_type'] = get_theme_mod('codeweber_page_woo_product_header');
      } elseif (get_theme_mod('codeweber_page_woo_header') !== 'default' && get_field('page_header_type', $term_id_prefixed) !== 'disable' && get_theme_mod('codeweber_page_woo_product_header') !== 'disable') {
         $codeweber['page_settings']['page_header_type'] = get_theme_mod('codeweber_page_woo_header');
      } elseif (get_theme_mod('codeweber_page_header') && get_field('page_header_type', $term_id_prefixed) !== 'disable' && get_theme_mod('codeweber_page_woo_product_header') !== 'disable') {
         $codeweber['page_settings']['page_header_type'] = get_theme_mod('codeweber_page_header');
      } else {
         $codeweber['page_settings']['page_header_type'] = NULL;
      }


      //ready
      if (get_field('color_page_header', $term_id_prefixed) && get_field('color_page_header', $term_id_prefixed) !== 'default') {
         $codeweber['page_settings']['page_header_color'] = get_field('color_page_header', $term_id_prefixed);
      } elseif (get_theme_mod('codeweber_page_woo_header_bg') !== 'default') {
         $codeweber['page_settings']['page_header_color'] = get_theme_mod('codeweber_page_woo_header_bg');
      } elseif (get_theme_mod('codeweber_page_header_bg')) {
         $codeweber['page_settings']['page_header_color'] = get_theme_mod('codeweber_page_header_bg');
      } else {
         $codeweber['page_settings']['page_header_color'] = ' bg-light';
      }

      //ready
      if (get_field('select_background_image', $term_id_prefixed)) {
         $codeweber['page_settings']['page_header_url'] = get_field('select_background_image', $term_id_prefixed);
      } elseif (get_theme_mod('image_control_woo')) {
         $codeweber['page_settings']['page_header_url'] = get_theme_mod('image_control_woo');
      } else {
         $codeweber['page_settings']['page_header_url'] = NULL;
      }

      //ready
      if (get_field('breadcrumbs', $term_id_prefixed) && get_field('breadcrumbs', $term_id_prefixed) !== 'default') {
         $codeweber['page_settings']['breadcrumbs'] = get_field('breadcrumbs', $term_id_prefixed);
      } elseif (get_theme_mod('codeweber_header_woo_bread') !== 'default') {
         $codeweber['page_settings']['breadcrumbs'] = get_theme_mod('codeweber_header_woo_bread');
      } elseif (get_theme_mod('codeweber_page_header_bread')) {
         $codeweber['page_settings']['breadcrumbs'] = get_theme_mod('codeweber_page_header_bread');
      } else {
         $codeweber['page_settings']['breadcrumbs'] = 'true';
      }

      //ready
      if (get_field('color_breadcrumbs', $term_id_prefixed) && get_field('color_breadcrumbs', $term_id_prefixed) !== 'default') {
         $codeweber['page_settings']['color_breadcrumbs'] = 'text-' . get_field('color_breadcrumbs', $term_id_prefixed);
      } elseif (get_theme_mod('codeweber_header_woo_single_bread_color') == 'default') {
         $codeweber['page_settings']['color_breadcrumbs'] = 'text-' . get_theme_mod('codeweber_header_woo_bread_color');
      } elseif (get_theme_mod('codeweber_header_woo_single_bread_color')) {
         $codeweber['page_settings']['color_breadcrumbs'] = 'text-' . get_theme_mod('codeweber_header_woo_single_bread_color');
      } else {
         $codeweber['page_settings']['color_breadcrumbs'] = 'text-dark';
      }

      //ready
      if (get_field('page_header_angle', $term_id_prefixed) && get_field('page_header_angle', $term_id_prefixed) !== 'default' && !is_shop()) {
         $codeweber['page_settings']['angle_class'] = get_field('page_header_angle', $term_id_prefixed);
      } elseif (get_theme_mod('codeweber_header_woo_angle') == 'default') {
         if (get_theme_mod('codeweber_page_header_angle') == 'true') {
            $codeweber['page_settings']['angle_class'] = ' angled upper-end';
         } else {
            $codeweber['page_settings']['angle_class'] = NULL;
         }
      } elseif (get_theme_mod('codeweber_header_woo_angle') == 'true') {
         $codeweber['page_settings']['angle_class'] = ' angled upper-end';
      } else {
         $codeweber['page_settings']['angle_class'] = NULL;
      }
   }

   codeweber_pageheader_generator(
      $codeweber['page_settings']['page_header_title'],
      $codeweber['page_settings']['page_header_sub_title'],
      $codeweber['page_settings']['page_header_type'],
      $codeweber['page_settings']['page_header_url'],
      $codeweber['page_settings']['page_header_color'],
      NULL,
      $codeweber['page_settings']['breadcrumbs'],
      $codeweber['page_settings']['color_breadcrumbs'],
      NULL,
      NULL,
      NULL,
      NULL,
      NULL
   );
}

add_action('codeweber_woo_after_header', 'woo_header', 20);
