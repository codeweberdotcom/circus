<?php

/**
 * Blog Pageheader Meta (Переписать этот код, слишком сложные условия, нужно упростить)
 */

if (!function_exists('codeweber_meta_blog')) {
   function codeweber_meta_blog()
   {
      if (class_exists('WooCommerce')) {
         if (get_post_type() == 'post' && is_singular() && !is_product() || is_singular('faq')) { ?>

            <?php
            $post_id = get_the_ID();
            $author_id = get_post_field('post_author', $post_id); ?>
            <p class="lead px-lg-5 px-xxl-8">
            <ul class="post-meta">
               <li class="post-date"><i class="uil uil-calendar-alt"></i><span><?php echo get_the_date('d M Y'); ?></span></li>
               <li class="post-author"><i class="uil uil-user"></i><a href="<?php echo get_author_posts_url($author_id, get_the_author_meta('user_nicename')); ?>" class="text-reset"><span> <?php echo __("By", "codeweber"); ?> <?php echo get_the_author(); ?></span></a></li>
               <li class="post-comments"><i class="uil uil-comment"></i><a href="#comments" class="text-reset scroll"><?php echo get_comments_number(); ?><span> <?php echo __("Comments", "codeweber"); ?></span></a></li>
               <li class="post-likes">
                  <a href="<?php echo add_query_arg('post_action', 'like'); ?>" class="text-reset">
                     <i class="uil uil-heart-alt"></i>
                     <?php echo ip_get_like_count('likes') ?>
                     <span><?php esc_html_e('Likes', 'codeweber'); ?></span></a>
               </li>
            </ul>
            </p>
         <?php };
      } else {
         if ((get_post_type() == 'post' && is_singular()) || is_singular('faq')) {
            $post_id = get_the_ID();
            $author_id = get_post_field('post_author', $post_id); ?>
            <p class="lead px-lg-5 px-xxl-8">
            <ul class="post-meta">
               <li class="post-date"><i class="uil uil-calendar-alt"></i><span><?php echo get_the_date('d M Y'); ?></span></li>
               <li class="post-author"><i class="uil uil-user"></i><a href="<?php echo get_author_posts_url($author_id, get_the_author_meta('user_nicename')); ?>" class="text-reset"><span> <?php echo __("By", "codeweber"); ?> <?php echo get_the_author(); ?></span></a></li>
               <li class="post-comments"><i class="uil uil-comment"></i><a href="#comments" class="text-reset scroll"><?php echo get_comments_number(); ?><span> <?php echo __("Comments", "codeweber"); ?></span></a></li>
               <li class="post-likes">
                  <a href="<?php echo add_query_arg('post_action', 'like'); ?>" class="text-reset">
                     <i class="uil uil-heart-alt"></i>
                     <?php echo ip_get_like_count('likes') ?>
                     <span><?php esc_html_e('Likes', 'codeweber'); ?>
                     </span></a>
               </li>
            </ul>
            </p>
   <?php };
      }
   }
}


/**
 * Set Page Header
 */

if (!function_exists('page_header')) {
   function page_header()
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

      if (is_post_type_archive('services') || is_tax('service_category') || is_singular('services')) {

         //Title
         if (get_theme_mod('service_title') && !is_singular('services') && !is_tax('service_category')) {
            $codeweber['page_settings']['page_header_title'] = get_theme_mod('service_title');
         } else {
            $codeweber['page_settings']['page_header_title'] = codeweber_page_title();
         }

         //Description
         if (get_theme_mod('service_description') && !is_singular('services') && !is_tax('service_category')) {
            $codeweber['page_settings']['page_header_sub_title'] = get_theme_mod('service_description');
         } else {
            $codeweber['page_settings']['page_header_sub_title'] = NULL;
         }

         //Page Header Type
         if (!is_post_type_archive('services') && get_field('page_header_type', $term_id_prefixed) && get_field('page_header_type', $term_id_prefixed) !== 'default' && get_field('page_header_type', $term_id_prefixed) !== 'disable' && get_theme_mod('codeweber_page_header') !== 'disable' && get_theme_mod('codeweber_page_service_header') !== 'disable') {
            $codeweber['page_settings']['page_header_type'] = get_field('page_header_type', $term_id_prefixed);
         } elseif (get_field('page_header_type', $term_id_prefixed) && get_field('page_header_type', $term_id_prefixed) == 'default') {
            if (get_theme_mod('codeweber_page_service_header') !== 'default' && get_theme_mod('codeweber_page_service_header') !== 'disable') {
               $codeweber['page_settings']['page_header_type'] = get_theme_mod('codeweber_page_service_header');
            } elseif (get_theme_mod('codeweber_page_service_header') == 'default' && get_theme_mod('codeweber_page_header') !== 'disable') {
               $codeweber['page_settings']['page_header_type'] = get_theme_mod('codeweber_page_header');
            } else {
               $codeweber['page_settings']['page_header_type'] = NULL;
            }
         } elseif (is_post_type_archive('services')) {
            if (get_theme_mod('codeweber_page_service_header') !== 'default' && get_theme_mod('codeweber_page_service_header') !== 'disable') {
               $codeweber['page_settings']['page_header_type'] = get_theme_mod('codeweber_page_service_header');
            } elseif (get_theme_mod('codeweber_page_service_header') == 'default' && get_theme_mod('codeweber_page_header') !== 'disable') {
               $codeweber['page_settings']['page_header_type'] = get_theme_mod('codeweber_page_header');
            } else {
               $codeweber['page_settings']['page_header_type'] = NULL;
            }
         } else {
            $codeweber['page_settings']['page_header_type'] = NULL;
         }

         //Page Header Background
         if (!is_post_type_archive('services') && get_field('select_background_image', $term_id_prefixed)) {
            $codeweber['page_settings']['page_header_url'] = get_field('select_background_image', $term_id_prefixed);
         } elseif (is_post_type_archive('services') && get_theme_mod('image_control_one')) {
            $codeweber['page_settings']['page_header_url'] = get_theme_mod('image_control_one');
         } else {
            $codeweber['page_settings']['page_header_url'] = NULL;
         }

         //Page Header Breadcrumbs
         if (!is_post_type_archive('services') && get_field('breadcrumbs', $term_id_prefixed) && get_field('breadcrumbs', $term_id_prefixed) !== 'default') {
            $codeweber['page_settings']['breadcrumbs'] = get_field('breadcrumbs', $term_id_prefixed);
         } elseif (get_theme_mod('codeweber_header_service_bread') == 'default') {
            $codeweber['page_settings']['breadcrumbs'] = get_theme_mod('codeweber_page_header_bread');
         } elseif (get_theme_mod('codeweber_header_service_bread')) {
            $codeweber['page_settings']['breadcrumbs'] = get_theme_mod('codeweber_header_service_bread');
         } else {
            $codeweber['page_settings']['breadcrumbs'] = 'true';
         }

         //Page Header Color Breadcrumbs
         if (!is_post_type_archive('services') && get_field('color_breadcrumbs', $term_id_prefixed) && get_field('color_breadcrumbs', $term_id_prefixed) !== 'default') {
            $codeweber['page_settings']['color_breadcrumbs'] = 'text-' . get_field('color_breadcrumbs', $term_id_prefixed);
         } elseif (get_theme_mod('codeweber_header_service_bread_color') == 'default') {
            $codeweber['page_settings']['color_breadcrumbs'] = 'text-' . get_theme_mod('codeweber_page_header_bread_color');
         } elseif (get_theme_mod('codeweber_header_service_bread_color')) {
            $codeweber['page_settings']['color_breadcrumbs'] = 'text-' . get_theme_mod('codeweber_header_service_bread_color');
         } else {
            $codeweber['page_settings']['color_breadcrumbs'] = 'text-dark';
         }

         //Page Header Color Background
         if (!is_post_type_archive('services') && get_field('color_page_header', $term_id_prefixed) && get_field('color_page_header', $term_id_prefixed) !== 'default') {
            $codeweber['page_settings']['page_header_color'] = get_field('color_page_header', $term_id_prefixed);
         } elseif (get_theme_mod('codeweber_page_service_header_bg') !== 'default') {
            $codeweber['page_settings']['page_header_color'] = get_theme_mod('codeweber_page_service_header_bg');
         } elseif (get_theme_mod('codeweber_page_service_header_bg') == 'default') {
            $codeweber['page_settings']['page_header_color'] = get_theme_mod('codeweber_page_header_bg');
         } else {
            $codeweber['page_settings']['page_header_color'] = ' bg-light';
         }

         //Page Header Angle
         if (!is_post_type_archive('services') && get_field('page_header_angle', $term_id_prefixed) && get_field('page_header_angle', $term_id_prefixed) !== 'default') {
            if (get_field('page_header_angle', $term_id_prefixed) == 'true') {
               $codeweber['page_settings']['angle_class'] = ' angled upper-end';
            } else {
               $codeweber['page_settings']['angle_class'] = NULL;
            }
         } elseif (get_theme_mod('codeweber_header_service_angle') == 'default') {
            if (get_theme_mod('codeweber_page_header_angle') == 'true') {
               $codeweber['page_settings']['angle_class'] = ' angled upper-end';
            } else {
               $codeweber['page_settings']['angle_class'] = NULL;
            }
         } elseif (get_theme_mod('codeweber_header_service_angle') == 'true') {
            $codeweber['page_settings']['angle_class'] = ' angled upper-end';
         } else {
            $codeweber['page_settings']['angle_class'] = NULL;
         }
      } elseif (is_post_type_archive('projects') || is_tax('projects_category') || is_singular('projects')) {

         //Title Page Header
         if (get_theme_mod('project_title') && !is_singular('projects') && !is_tax('projects_category')) {
            $codeweber['page_settings']['page_header_title'] = get_theme_mod('project_title');
         } else {
            $codeweber['page_settings']['page_header_title'] = codeweber_page_title();
         }

         //Description Page Header
         if (is_post_type_archive('projects') && get_theme_mod('project_description') && !is_singular('projects') && !is_tax('projects_category')) {
            $codeweber['page_settings']['page_header_sub_title'] = get_theme_mod('project_description');
         } else {
            $codeweber['page_settings']['page_header_sub_title'] = NULL;
         }

         //Background Image Page Header
         if (!is_post_type_archive('projects') && get_field('select_background_image', $term_id_prefixed)) {
            $codeweber['page_settings']['page_header_url'] = get_field('select_background_image', $term_id_prefixed);
         } elseif (get_theme_mod('image_control_three' && !is_post_type_archive('projects'))) {
            $codeweber['page_settings']['page_header_url'] = get_theme_mod('image_control_three');
         } elseif (is_post_type_archive('projects') && get_theme_mod('image_control_three')) {
            $codeweber['page_settings']['page_header_url'] = get_theme_mod('image_control_three');
         } else {
            $codeweber['page_settings']['page_header_url'] = NULL;
         }

         //Type Page Header
         if (!is_post_type_archive('projects') && get_field('page_header_type', $term_id_prefixed) && get_field('page_header_type', $term_id_prefixed) !== 'default' && get_field('page_header_type', $term_id_prefixed) !== 'disable' && get_theme_mod('codeweber_page_project_header') !== 'disable') {
            $codeweber['page_settings']['page_header_type'] = get_field('page_header_type', $term_id_prefixed);
         } elseif (is_post_type_archive('projects') || is_tax('projects_category')) {
            if (get_theme_mod('codeweber_page_project_header') !== 'default' && get_theme_mod('codeweber_page_project_header') !== 'disable') {
               $codeweber['page_settings']['page_header_type'] = get_theme_mod('codeweber_page_project_header');
            } elseif (get_theme_mod('codeweber_page_project_header') == 'default' && get_theme_mod('codeweber_page_header') !== 'disable') {
               $codeweber['page_settings']['page_header_type'] = get_theme_mod('codeweber_page_header');
            } else {
               $codeweber['page_settings']['page_header_type'] = NULL;
            }
         } else {
            $codeweber['page_settings']['page_header_type'] = NULL;
         }

         //Bool Breadcrumbs Page Header
         if (!is_post_type_archive('projects') && get_field('breadcrumbs', $term_id_prefixed) && get_field('breadcrumbs', $term_id_prefixed) !== 'default') {
            $codeweber['page_settings']['breadcrumbs'] = get_field('breadcrumbs', $term_id_prefixed);
         } elseif (get_theme_mod('codeweber_header_project_bread') == 'default') {
            $codeweber['page_settings']['breadcrumbs'] = get_theme_mod('codeweber_page_header_bread');
         } elseif (get_theme_mod('codeweber_header_project_bread')) {
            $codeweber['page_settings']['breadcrumbs'] = get_theme_mod('codeweber_header_project_bread');
         } else {
            $codeweber['page_settings']['breadcrumbs'] = 'true';
         }

         //Color Breadcrumbs Page Header
         if (!is_post_type_archive('projects') && get_field('color_breadcrumbs', $term_id_prefixed) && get_field('color_breadcrumbs', $term_id_prefixed) !== 'default') {
            $codeweber['page_settings']['color_breadcrumbs'] = 'text-' . get_field('color_breadcrumbs', $term_id_prefixed);
         } elseif (get_theme_mod('codeweber_header_project_bread_color') == 'default') {
            $codeweber['page_settings']['color_breadcrumbs'] = 'text-' . get_theme_mod('codeweber_page_header_bread_color');
         } elseif (get_theme_mod('codeweber_header_project_bread_color')) {
            $codeweber['page_settings']['color_breadcrumbs'] = 'text-' . get_theme_mod('codeweber_header_project_bread_color');
         } else {
            $codeweber['page_settings']['color_breadcrumbs'] = 'text-dark';
         }

         //Color Background Page Header
         if (!is_post_type_archive('projects') && get_field('color_page_header', $term_id_prefixed) && get_field('color_page_header', $term_id_prefixed) !== 'default') {
            $codeweber['page_settings']['page_header_color'] = get_field('color_page_header', $term_id_prefixed);
         } elseif (get_theme_mod('codeweber_page_project_header_bg') !== 'default') {
            $codeweber['page_settings']['page_header_color'] = get_theme_mod('codeweber_page_project_header_bg');
         } elseif (get_theme_mod('codeweber_page_project_header_bg') == 'default') {
            $codeweber['page_settings']['page_header_color'] = get_theme_mod('codeweber_page_header_bg');
         } else {
            $codeweber['page_settings']['page_header_color'] = ' bg-light';
         }

         //Angle Page Header
         if (!is_post_type_archive('projects') && get_field('page_header_angle', $term_id_prefixed) && get_field('page_header_angle', $term_id_prefixed) !== 'default') {
            if (get_field('page_header_angle', $term_id_prefixed) == 'true') {
               $codeweber['page_settings']['angle_class'] = ' angled upper-end';
            } else {
               $codeweber['page_settings']['angle_class'] = NULL;
            }
         } elseif (get_theme_mod('codeweber_header_project_angle') == 'default') {
            if (get_theme_mod('codeweber_page_header_angle') == 'true') {
               $codeweber['page_settings']['angle_class'] = ' angled upper-end';
            } else {
               $codeweber['page_settings']['angle_class'] = NULL;
            }
         } elseif (get_theme_mod('codeweber_header_project_angle') == 'true') {
            $codeweber['page_settings']['angle_class'] = ' angled upper-end';
         } else {
            $codeweber['page_settings']['angle_class'] = NULL;
         }
      } elseif (is_post_type_archive('testimonials')) {

         //Title Page Header
         if (get_theme_mod('testimonial_title') && !is_singular('testimonials')) {
            $codeweber['page_settings']['page_header_title'] = get_theme_mod('testimonial_title');
         } else {
            $codeweber['page_settings']['page_header_title'] = codeweber_page_title();
         }

         //Description Page Header
         if (is_post_type_archive('testimonials') && get_theme_mod('testimonial_description') && !is_singular('testimonial')) {
            $codeweber['page_settings']['page_header_sub_title'] = get_theme_mod('testimonial_description');
         } else {
            $codeweber['page_settings']['page_header_sub_title'] = NULL;
         }

         //Background Image Page Header
         if (!is_post_type_archive('testimonials') && get_field('select_background_image', $term_id_prefixed)) {
            $codeweber['page_settings']['page_header_url'] = get_field('select_background_image', $term_id_prefixed);
         } elseif (get_theme_mod('image_control_seven' && !is_post_type_archive('testimonials'))) {
            $codeweber['page_settings']['page_header_url'] = get_theme_mod('image_control_seven');
         } elseif (is_post_type_archive('testimonials') && get_theme_mod('image_control_seven')) {
            $codeweber['page_settings']['page_header_url'] = get_theme_mod('image_control_seven');
         } else {
            $codeweber['page_settings']['page_header_url'] = NULL;
         }

         //Type Page Header
         if (!is_post_type_archive('testimonials') && get_field('page_header_type', $term_id_prefixed) && get_field('page_header_type', $term_id_prefixed) !== 'default' && get_field('page_header_type', $term_id_prefixed) !== 'disable' && get_theme_mod('codeweber_page_testimonial_header') !== 'disable') {
            $codeweber['page_settings']['page_header_type'] = get_field('page_header_type', $term_id_prefixed);
         } elseif (is_post_type_archive('testimonials')) {
            if (get_theme_mod('codeweber_page_testimonial_header') !== 'default' && get_theme_mod('codeweber_page_testimonial_header') !== 'disable') {
               $codeweber['page_settings']['page_header_type'] = get_theme_mod('codeweber_page_testimonial_header');
            } elseif (get_theme_mod('codeweber_page_testimonial_header') == 'default' && get_theme_mod('codeweber_page_header') !== 'disable') {
               $codeweber['page_settings']['page_header_type'] = get_theme_mod('codeweber_page_header');
            } else {
               $codeweber['page_settings']['page_header_type'] = NULL;
            }
         } else {
            $codeweber['page_settings']['page_header_type'] = NULL;
         }

         //Bool Breadcrumbs Page Header
         if (!is_post_type_archive('testimonials') && get_field('breadcrumbs', $term_id_prefixed) && get_field('breadcrumbs', $term_id_prefixed) !== 'default') {
            $codeweber['page_settings']['breadcrumbs'] = get_field('breadcrumbs', $term_id_prefixed);
         } elseif (get_theme_mod('codeweber_header_testimonial_bread') == 'default') {
            $codeweber['page_settings']['breadcrumbs'] = get_theme_mod('codeweber_page_header_bread');
         } elseif (get_theme_mod('codeweber_header_testimonial_bread')) {
            $codeweber['page_settings']['breadcrumbs'] = get_theme_mod('codeweber_header_testimonial_bread');
         } else {
            $codeweber['page_settings']['breadcrumbs'] = 'true';
         }

         //Color Breadcrumbs Page Header
         if (!is_post_type_archive('testimonials') && get_field('color_breadcrumbs', $term_id_prefixed) && get_field('color_breadcrumbs', $term_id_prefixed) !== 'default') {
            $codeweber['page_settings']['color_breadcrumbs'] = 'text-' . get_field('color_breadcrumbs', $term_id_prefixed);
         } elseif (get_theme_mod('codeweber_header_testimonial_bread_color') == 'default') {
            $codeweber['page_settings']['color_breadcrumbs'] = 'text-' . get_theme_mod('codeweber_page_header_bread_color');
         } elseif (get_theme_mod('codeweber_header_testimonial_bread_color')) {
            $codeweber['page_settings']['color_breadcrumbs'] = 'text-' . get_theme_mod('codeweber_header_testimonial_bread_color');
         } else {
            $codeweber['page_settings']['color_breadcrumbs'] = 'text-dark';
         }

         //Color Background Page Header
         if (!is_post_type_archive('testimonials') && get_field('color_page_header', $term_id_prefixed) && get_field('color_page_header', $term_id_prefixed) !== 'default') {
            $codeweber['page_settings']['page_header_color'] = get_field('color_page_header', $term_id_prefixed);
         } elseif (get_theme_mod('codeweber_page_testimonial_header_bg') !== 'default') {
            $codeweber['page_settings']['page_header_color'] = get_theme_mod('codeweber_page_testimonial_header_bg');
         } elseif (get_theme_mod('codeweber_page_testimonial_header_bg') == 'default') {
            $codeweber['page_settings']['page_header_color'] = get_theme_mod('codeweber_page_header_bg');
         } else {
            $codeweber['page_settings']['page_header_color'] = ' bg-light';
         }

         //Angle Page Header
         if (!is_post_type_archive('testimonials') && get_field('page_header_angle', $term_id_prefixed) && get_field('page_header_angle', $term_id_prefixed) !== 'default') {
            if (get_field('page_header_angle', $term_id_prefixed) == 'true') {
               $codeweber['page_settings']['angle_class'] = ' angled upper-end';
            } else {
               $codeweber['page_settings']['angle_class'] = NULL;
            }
         } elseif (get_theme_mod('codeweber_header_testimonial_angle') == 'default') {
            if (get_theme_mod('codeweber_page_header_angle') == 'true') {
               $codeweber['page_settings']['angle_class'] = ' angled upper-end';
            } else {
               $codeweber['page_settings']['angle_class'] = NULL;
            }
         } elseif (get_theme_mod('codeweber_header_testimonial_angle') == 'true') {
            $codeweber['page_settings']['angle_class'] = ' angled upper-end';
         } else {
            $codeweber['page_settings']['angle_class'] = NULL;
         }
      } elseif (is_post_type_archive('faq')) {
         if (get_theme_mod('faq_title')) {
            $codeweber['page_settings']['page_header_title'] = get_theme_mod('faq_title');
         } else {
            $codeweber['page_settings']['page_header_title'] = codeweber_page_title();
         }

         if (get_theme_mod('faq_description')) {
            $codeweber['page_settings']['page_header_sub_title'] = get_theme_mod('faq_description');
         } else {
            $codeweber['page_settings']['page_header_sub_title'] = NULL;
         }

         //Page Header Type
         if (!is_post_type_archive('faq') && get_field('page_header_type', $term_id_prefixed) && get_field('page_header_type', $term_id_prefixed) !== 'default' && get_field('page_header_type', $term_id_prefixed) !== 'disable' && get_theme_mod('codeweber_page_header') !== 'disable' && get_theme_mod('codeweber_page_faq_header') !== 'disable') {
            $codeweber['page_settings']['page_header_type'] = get_field('page_header_type', $term_id_prefixed);
         } elseif (get_field('page_header_type', $term_id_prefixed) && get_field('page_header_type', $term_id_prefixed) == 'default') {
            if (get_theme_mod('codeweber_page_faq_header') !== 'default' && get_theme_mod('codeweber_page_faq_header') !== 'disable') {
               $codeweber['page_settings']['page_header_type'] = get_theme_mod('codeweber_page_faq_header');
            } elseif (get_theme_mod('codeweber_page_faq_header') == 'default' && get_theme_mod('codeweber_page_header') !== 'disable') {
               $codeweber['page_settings']['page_header_type'] = get_theme_mod('codeweber_page_header');
            } else {
               $codeweber['page_settings']['page_header_type'] = NULL;
            }
         } elseif (is_post_type_archive('faq')) {

            if (get_theme_mod('codeweber_page_faq_header') !== 'default' && get_theme_mod('codeweber_page_faq_header') !== 'disable') {
               $codeweber['page_settings']['page_header_type'] = get_theme_mod('codeweber_page_faq_header');
            } elseif (get_theme_mod('codeweber_page_faq_header') == 'default' && get_theme_mod('codeweber_page_header') !== 'disable') {
               $codeweber['page_settings']['page_header_type'] = get_theme_mod('codeweber_page_header');
            } else {
               $codeweber['page_settings']['page_header_type'] = NULL;
            }
         } else {
            $codeweber['page_settings']['page_header_type'] = NULL;
         }


         if (get_theme_mod('codeweber_page_faq_header')) {
            $codeweber['page_settings']['page_header_type'] = get_theme_mod('codeweber_page_faq_header');
         }

         if (get_theme_mod('image_control_five')) {
            $codeweber['page_settings']['page_header_url'] = get_theme_mod('image_control_five');
         } else {
            $codeweber['page_settings']['page_header_url'] = NULL;
         }

         if (get_theme_mod('codeweber_page_faq_header_bg')) {
            $codeweber['page_settings']['page_header_color'] = get_theme_mod('codeweber_page_faq_header_bg');
         } else {
            $codeweber['page_settings']['page_header_color'] = ' bg-light';
         }

         if (get_theme_mod('codeweber_header_faq_color') == 'default') {
            $codeweber['page_settings']['nav_color'] = get_theme_mod('codeweber_header_color');
         } else {
            $codeweber['page_settings']['nav_color'] = get_theme_mod('codeweber_header_faq_color');
         }

         if (get_theme_mod('codeweber_header_faq_style') == 'default') {
            $codeweber['page_settings']['header_style'] = get_theme_mod('codeweber_header_style');
         } else {
            $codeweber['page_settings']['header_style'] = get_theme_mod('codeweber_header_faq_style');
         }

         if (get_theme_mod('codeweber_header_faq_bread') == 'default') {
            $codeweber['page_settings']['breadcrumbs'] = get_theme_mod('codeweber_page_header_bread');
         } else {
            $codeweber['page_settings']['breadcrumbs'] = get_theme_mod('codeweber_header_faq_bread');
         }

         if (get_theme_mod('codeweber_header_faq_bread_color') == 'default') {
            $codeweber['page_settings']['color_breadcrumbs'] = 'text-' . get_theme_mod('codeweber_page_header_bread_color');
         } else {
            $codeweber['page_settings']['color_breadcrumbs'] = 'text-' . get_theme_mod('codeweber_header_faq_bread_color');
         }

         if (get_theme_mod('codeweber_header_faq_angle') == 'default') {
            if (get_theme_mod('codeweber_page_header_angle') == 'true') {
               $codeweber['page_settings']['angle_class'] = ' angled upper-end';
            } else {
               $codeweber['page_settings']['angle_class'] = NULL;
            }
         } elseif (get_theme_mod('codeweber_header_faq_angle') == 'true') {
            $codeweber['page_settings']['angle_class'] = ' angled upper-end';
         } else {
            $codeweber['page_settings']['angle_class'] = NULL;
         }
      } elseif (is_page()) {
         $codeweber['page_settings']['page_header_title'] = codeweber_page_title();
         $codeweber['page_settings']['page_header_sub_title'] = NULL;

         //ready
         if (get_field('page_header_type', $term_id_prefixed) && get_field('page_header_type', $term_id_prefixed) !== 'default' && get_field('page_header_type', $term_id_prefixed) !== 'disable' && get_field('page_header_type', $term_id_prefixed) !== NULL) {
            $codeweber['page_settings']['page_header_type'] = get_field('page_header_type', $term_id_prefixed);
         } elseif (get_field('page_header_type', $term_id_prefixed) == 'default') {
            $codeweber['page_settings']['page_header_type'] = get_theme_mod('codeweber_page_header');
         } else {
            $codeweber['page_settings']['page_header_type'] = NULL;
         }

         //ready
         if (get_field('color_page_header', $term_id_prefixed) && get_field('color_page_header', $term_id_prefixed) !== 'default') {
            $codeweber['page_settings']['page_header_color'] = get_field('color_page_header', $term_id_prefixed);
         } elseif (get_field('color_page_header', $term_id_prefixed) && get_field('color_page_header', $term_id_prefixed) == 'default') {
            $codeweber['page_settings']['page_header_color'] = get_theme_mod('codeweber_page_header_bg');
         } else {
            $codeweber['page_settings']['page_header_color'] = ' bg-light';
         }

         //ready
         if (get_field('select_background_image', $term_id_prefixed)) {
            $codeweber['page_settings']['page_header_url'] = get_field('select_background_image', $term_id_prefixed);
         } elseif (get_theme_mod('image_control_page')) {
            $codeweber['page_settings']['page_header_url'] = get_theme_mod('image_control_page');
         } else {
            $codeweber['page_settings']['page_header_url'] = NULL;
         }

         //ready
         if (get_field('breadcrumbs', $term_id_prefixed) && get_field('breadcrumbs', $term_id_prefixed) !== 'default') {
            $codeweber['page_settings']['breadcrumbs'] = get_field('breadcrumbs', $term_id_prefixed);
         } elseif (get_theme_mod('codeweber_page_header_bread')) {
            $codeweber['page_settings']['breadcrumbs'] = get_theme_mod('codeweber_page_header_bread');
         } else {
            $codeweber['page_settings']['breadcrumbs'] = 'true';
         }

         //ready
         if (get_field('color_breadcrumbs', $term_id_prefixed) && get_field('color_breadcrumbs', $term_id_prefixed) !== 'default') {
            $codeweber['page_settings']['color_breadcrumbs'] = 'text-' . get_field('color_breadcrumbs', $term_id_prefixed);
         } elseif (get_theme_mod('codeweber_page_header_bread_color')) {
            $codeweber['page_settings']['color_breadcrumbs'] = 'text-' . get_theme_mod('codeweber_page_header_bread_color');
         } else {
            $codeweber['page_settings']['color_breadcrumbs'] = 'text-dark';
         }

         //ready
         if (get_field('page_header_angle', $term_id_prefixed) && get_field('page_header_angle', $term_id_prefixed) !== 'default') {
            if (get_field('page_header_angle', $term_id_prefixed) == 'true') {
               $codeweber['page_settings']['angle_class'] = ' angled upper-end';
            } else {
               $codeweber['page_settings']['angle_class'] = NULL;
            }
         } elseif (get_theme_mod('codeweber_page_header_angle')) {
            if (get_theme_mod('codeweber_page_header_angle') == 'true') {
               $codeweber['page_settings']['angle_class'] = ' angled upper-end';
            } else {
               $codeweber['page_settings']['angle_class'] = NULL;
            }
         } else {
            $codeweber['page_settings']['angle_class'] = NULL;
         }
      } elseif (is_blog()) {
         //ready
         if (is_home() && get_theme_mod('blog_title') && !is_category() && !is_tag() && !is_author() && !is_singular()) {
            $codeweber['page_settings']['page_header_title'] = get_theme_mod('blog_title');
         } else {
            $codeweber['page_settings']['page_header_title'] = codeweber_page_title();
         }

         //ready
         if (is_home() && get_theme_mod('blog_description') && !is_category() && !is_tag() && !is_author() && !is_singular()) {
            $codeweber['page_settings']['page_header_sub_title'] = get_theme_mod('blog_description');
         } else {
            $codeweber['page_settings']['page_header_sub_title'] = NULL;
         }

         //Page Header Type
         if (is_home() || is_author()) {
            //Archive Page Header

            if (get_theme_mod('codeweber_page_blog_header') && get_theme_mod('codeweber_page_blog_header') !== 'disable' && get_theme_mod('codeweber_page_blog_header') !== 'default') {
               $codeweber['page_settings']['page_header_type'] = get_theme_mod('codeweber_page_blog_header');
            } elseif (get_theme_mod('codeweber_page_header') && get_theme_mod('codeweber_page_header') !== 'disable') {
               $codeweber['page_settings']['page_header_type'] = get_theme_mod('codeweber_page_header');
            } elseif (get_theme_mod('codeweber_page_header') == 'disable') {
               $codeweber['page_settings']['page_header_type'] = NULL;
            } else {
               $codeweber['page_settings']['page_header_type'] = NULL;
            }
         } else {
            //Singular-Tag-Category-Page Header
            if (get_field('page_header_type', $term_id_prefixed) && get_field('page_header_type', $term_id_prefixed) !== 'default' && !is_home() && !is_author() && get_field('page_header_type', $term_id_prefixed) !== 'disable') {
               $codeweber['page_settings']['page_header_type'] = get_field('page_header_type', $term_id_prefixed);
            } elseif (
               get_field('page_header_type', $term_id_prefixed) && get_field('page_header_type', $term_id_prefixed) == 'default' && get_field('page_header_type', $term_id_prefixed) !== 'disable' && get_theme_mod('codeweber_page_blog_single_header') && get_theme_mod('codeweber_page_blog_single_header') !== 'disable' && get_theme_mod('codeweber_page_blog_single_header') !== 'default' && !is_home() && !is_author()
            ) {
               $codeweber['page_settings']['page_header_type'] = get_theme_mod('codeweber_page_blog_single_header');
            } elseif (get_theme_mod('codeweber_page_blog_single_header') && get_theme_mod('codeweber_page_blog_single_header') !== 'disable' && get_theme_mod('codeweber_page_blog_single_header') == 'default' && get_theme_mod('codeweber_page_blog_header') && get_theme_mod('codeweber_page_blog_header') !== 'disable' && get_theme_mod('codeweber_page_blog_header') !== 'default' && !is_home() && !is_author() && get_theme_mod('codeweber_page_blog_single_header') !== 'disable' && get_field('page_header_type', $term_id_prefixed) && get_field('page_header_type', $term_id_prefixed) !== 'disable') {
               $codeweber['page_settings']['page_header_type'] = get_theme_mod('codeweber_page_blog_header');
            } elseif (get_theme_mod('codeweber_page_header') && get_theme_mod('codeweber_page_header') !== 'disable' && !is_home() && !is_author() && get_theme_mod('codeweber_page_blog_single_header') !== 'disable') {

               $codeweber['page_settings']['page_header_type'] = get_theme_mod('codeweber_page_header');
            } elseif (get_theme_mod('codeweber_page_header') == 'disable' && !is_home() && !is_author() && get_theme_mod('codeweber_page_blog_single_header') !== 'disable') {
               $codeweber['page_settings']['page_header_type'] = NULL;
            } elseif (!is_home() && !is_author()) {
               $codeweber['page_settings']['page_header_type'] = NULL;
            }
         }

         //ready
         if (get_field('color_page_header', $term_id_prefixed) && get_field('color_page_header', $term_id_prefixed) !== 'default' && !is_home() && !is_author()) {
            $codeweber['page_settings']['page_header_color'] = get_field('color_page_header', $term_id_prefixed);
         } elseif (get_theme_mod('codeweber_page_blog_header_bg') !== 'default') {
            $codeweber['page_settings']['page_header_color'] = get_theme_mod('codeweber_page_blog_header_bg');
         } elseif (get_theme_mod('codeweber_page_header_bg')) {
            $codeweber['page_settings']['page_header_color'] = get_theme_mod('codeweber_page_header_bg');
         } else {
            $codeweber['page_settings']['page_header_color'] = ' bg-light';
         }

         //ready
         if (get_field('select_background_image', $term_id_prefixed) && !is_home() && !is_author()) {
            $codeweber['page_settings']['page_header_url'] = get_field('select_background_image', $term_id_prefixed);
         } elseif (get_theme_mod('image_control_four') && (is_home() || is_author())) {
            $codeweber['page_settings']['page_header_url'] = get_theme_mod('image_control_four');
         } else {
            $codeweber['page_settings']['page_header_url'] = NULL;
         }

         //ready
         if (get_field('breadcrumbs', $term_id_prefixed) && get_field('breadcrumbs', $term_id_prefixed) !== 'default' && !is_home() && !is_author()) {
            $codeweber['page_settings']['breadcrumbs'] = get_field('breadcrumbs', $term_id_prefixed);
         } elseif (get_theme_mod('codeweber_header_blog_bread') !== 'default') {
            $codeweber['page_settings']['breadcrumbs'] = get_theme_mod('codeweber_header_blog_bread');
         } elseif (get_theme_mod('codeweber_page_header_bread')) {
            $codeweber['page_settings']['breadcrumbs'] = get_theme_mod('codeweber_page_header_bread');
         } else {
            $codeweber['page_settings']['breadcrumbs'] = 'true';
         }

         //ready
         if (get_field('color_breadcrumbs', $term_id_prefixed) && get_field('color_breadcrumbs', $term_id_prefixed) !== 'default' && !is_home() && !is_author()) {
            $codeweber['page_settings']['color_breadcrumbs'] = 'text-' . get_field('color_breadcrumbs', $term_id_prefixed);
         } elseif (get_theme_mod('codeweber_header_blog_bread_color') !== 'default' && (is_home() || is_author())) {
            $codeweber['page_settings']['color_breadcrumbs'] = 'text-' . get_theme_mod('codeweber_header_blog_bread_color');
         } elseif (get_theme_mod('codeweber_header_blog_bread_color') == 'default' && get_theme_mod('codeweber_header_blog_single_bread_color') == 'default') {
            $codeweber['page_settings']['color_breadcrumbs'] = 'text-' . get_theme_mod('codeweber_page_header_bread_color');
         } elseif (get_theme_mod('codeweber_header_blog_single_bread_color') == 'default' && get_theme_mod('codeweber_header_blog_single_bread_color') !== 'disable') {
            $codeweber['page_settings']['color_breadcrumbs'] = 'text-' . get_theme_mod('codeweber_header_blog_bread_color');
         } elseif (get_theme_mod('codeweber_header_blog_single_bread_color') !== 'default' && get_theme_mod('codeweber_header_blog_single_bread_color') !== 'disable') {
            $codeweber['page_settings']['color_breadcrumbs'] = 'text-' . get_theme_mod('codeweber_header_blog_single_bread_color');
         } elseif (get_theme_mod('codeweber_header_blog_bread_color') !== 'disable' && get_theme_mod('codeweber_header_blog_bread_color') !== 'default') {
            $codeweber['page_settings']['color_breadcrumbs'] = get_theme_mod('codeweber_header_blog_bread_color');
         }

         //ready
         if (get_field('page_header_angle', $term_id_prefixed) && get_field('page_header_angle', $term_id_prefixed) !== 'default' && !is_home() && !is_author()) {
            $codeweber['page_settings']['angle_class'] = get_field('page_header_angle', $term_id_prefixed);
         } elseif (get_theme_mod('codeweber_header_blog_angle') == 'default') {
            if (get_theme_mod('codeweber_page_header_angle') == 'true') {
               $codeweber['page_settings']['angle_class'] = ' angled upper-end';
            } else {
               $codeweber['page_settings']['angle_class'] = NULL;
            }
         } elseif (get_theme_mod('codeweber_header_blog_angle') == 'true') {
            $codeweber['page_settings']['angle_class'] = ' angled upper-end';
         } else {
            $codeweber['page_settings']['angle_class'] = NULL;
         }
      } elseif (is_404()) {
         $codeweber['page_settings']['page_header_type'] = NULL;
         $codeweber['page_settings']['page_header_title'] = NULL;
         $codeweber['page_settings']['page_header_sub_title'] = NULL;
         $codeweber['page_settings']['angle_class'] = NULL;
         $codeweber['page_settings']['page_header_color'] = NULL;
         $codeweber['page_settings']['breadcrumbs'] = NULL;
         $codeweber['page_settings']['color_breadcrumbs'] = NULL;
         $codeweber['page_settings']['page_header_url'] = NULL;
      } else {
         if (get_field('page_header_type', $term_id_prefixed) !== 'default') {
            $codeweber['page_settings']['page_header_type'] = get_field('page_header_type', $term_id_prefixed);
         } else {
            $codeweber['page_settings']['page_header_type'] = get_theme_mod('codeweber_page_header');
         }

         $codeweber['page_settings']['page_header_title'] = codeweber_page_title();
         $codeweber['page_settings']['page_header_sub_title'] = NULL;

         if (get_field('color_page_header', $term_id_prefixed) !== 'default') {
            $codeweber['page_settings']['page_header_color'] = get_field('color_page_header', $term_id_prefixed);
         } else {
            $codeweber['page_settings']['page_header_color'] = get_theme_mod('codeweber_page_header_bg');
         }


         if (get_field('page_header_angle', $term_id_prefixed) == 'default') {
            $codeweber['page_settings']['angle_class'] = get_theme_mod('codeweber_page_header_angle');
         } elseif (get_field('page_header_angle', $term_id_prefixed) == 'disable') {
            $codeweber['page_settings']['angle_class'] = NULL;
         } else {
            $codeweber['page_settings']['angle_class'] = 'true';
         }


         if (get_field('breadcrumbs', $term_id_prefixed) == 'default') {
            $codeweber['page_settings']['breadcrumbs'] = get_theme_mod('codeweber_page_header_bread');
         } elseif (get_field('breadcrumbs', $term_id_prefixed) == 'disable') {
            $codeweber['page_settings']['breadcrumbs'] = 'false';
         } else {
            $codeweber['page_settings']['breadcrumbs'] = 'true';
         }

         if (get_field('color_breadcrumbs', $term_id_prefixed) !== 'default') {
            $codeweber['page_settings']['color_breadcrumbs'] = 'text-' . get_field('color_breadcrumbs', $term_id_prefixed);
         } else {
            $codeweber['page_settings']['color_breadcrumbs'] = 'text-' . get_theme_mod('codeweber_page_header_bread_color');
         }

         if (get_field('select_background_image', $term_id_prefixed)) {
            $codeweber['page_settings']['page_header_url'] = get_field('select_background_image', $term_id_prefixed);
            $codeweber['page_settings']['page_header_color'] = NULL;
         } elseif (get_theme_mod('image_control_page')) {
            $codeweber['page_settings']['page_header_url'] = get_theme_mod('image_control_page');
         } else {
            $codeweber['page_settings']['page_header_url'] = NULL;
         }
      }

      if (is_search() && isset($_GET['s'])) {
         $codeweber['page_settings']['page_header_type'] = get_theme_mod('codeweber_page_blog_header');
         $codeweber['page_settings']['page_header_title'] = get_theme_mod('blog_title');
         $codeweber['page_settings']['breadcrumbs'] = 'true';

         $codeweber['page_settings']['page_header_sub_title'] = NULL;
         $codeweber['page_settings']['angle_class'] = NULL;
         $codeweber['page_settings']['page_header_color'] = NULL;

         $codeweber['page_settings']['color_breadcrumbs'] = NULL;
         $codeweber['page_settings']['page_header_url'] = NULL;
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
}

add_action('codeweber_after_header', 'page_header', 20);


function search_widget()
{
   ?>
   <div class="mb-5"> <?php
                        get_search_form();

                        ?>
   </div>
<?php
}

add_action('sidebar_search_end', 'search_widget', 90);
