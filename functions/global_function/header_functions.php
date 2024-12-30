<?php

/**
 * About company widget offcanvas
 */
function about_company_option()
{
   if (get_field('about_company', 'option')) {
      $about_company_option = '<div class="widget mb-8"><p>' . get_field('about_company', 'option') . '</p></div>';
   } else {
      $about_company_option = NULL;
   }
   return $about_company_option;
}

/**
 * Socials widget offcanvas
 */

function social_icons_option()
{
   if (class_exists('ACF')) {
      $social_icons = NULL;
      foreach (codeweber_socialicons() as $key => $value) {
         if (get_field('social_' . $key, 'option')) {

            $social_icons .= '<a class="btn btn-circle btn-outline-primary btn-lg btn-' . $value['social-name'] . '" href="' . esc_attr(get_field('social_' . $key, 'option')) . '" title="' . esc_attr($value['social-name']) . '" target="_blank">';
            if ($key === 'ok') {
               $social_icons .= '<svg width="26" height="26" fill="white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M275.1 334c-27.4 17.4-65.1 24.3-90 26.9l20.9 20.6 76.3 76.3c27.9 28.6-17.5 73.3-45.7 45.7-19.1-19.4-47.1-47.4-76.3-76.6L84 503.4c-28.2 27.5-73.6-17.6-45.4-45.7 19.4-19.4 47.1-47.4 76.3-76.3l20.6-20.6c-24.6-2.6-62.9-9.1-90.6-26.9-32.6-21-46.9-33.3-34.3-59 7.4-14.6 27.7-26.9 54.6-5.7 0 0 36.3 28.9 94.9 28.9s94.9-28.9 94.9-28.9c26.9-21.1 47.1-8.9 54.6 5.7 12.4 25.7-1.9 38-34.5 59.1zM30.3 129.7C30.3 58 88.6 0 160 0s129.7 58 129.7 129.7c0 71.4-58.3 129.4-129.7 129.4s-129.7-58-129.7-129.4zm66 0c0 35.1 28.6 63.7 63.7 63.7s63.7-28.6 63.7-63.7c0-35.4-28.6-64-63.7-64s-63.7 28.6-63.7 64z"/></svg>';
            } else {
               $social_icons .= '<i class="fs-30 ' . esc_attr($value['icon-style']) . ' ' . esc_attr($value['icon-name']) . '"></i>
         </a>';
            }
         };
      };

      if ($social_icons !== NULL) { ?>
         <div class="widget">
            <div class="widget-title mb-3 widget-title mb-3 h5 fs-24"><?php esc_html_e('Follow Us', 'codeweber'); ?></div>
            <nav class="nav social">
               <?php if (class_exists('ACF')) {
                  echo $social_icons;
               }; ?>
            </nav>
            <!-- /.social -->
         </div>
         <!-- /.widget -->
      <?php
      }
   }
}


function social_icons_option_1()
{
   if (class_exists('ACF')) {
      $social_icons = NULL;
      foreach (codeweber_socialicons() as $key => $value) {
         if (get_field('social_' . $key, 'option')) {
            $social_icons .= '<a class="btn btn-circle btn-lg btn-outline-primary  btn-' . $value['social-name'] . '" href="' . esc_attr(get_field('social_' . $key, 'option')) . '" title="' . esc_attr($value['social-name']) . '" target="_blank">';
if($key === 'ok'){
               $social_icons .= '<svg width="26" height="26" fill="white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M275.1 334c-27.4 17.4-65.1 24.3-90 26.9l20.9 20.6 76.3 76.3c27.9 28.6-17.5 73.3-45.7 45.7-19.1-19.4-47.1-47.4-76.3-76.6L84 503.4c-28.2 27.5-73.6-17.6-45.4-45.7 19.4-19.4 47.1-47.4 76.3-76.3l20.6-20.6c-24.6-2.6-62.9-9.1-90.6-26.9-32.6-21-46.9-33.3-34.3-59 7.4-14.6 27.7-26.9 54.6-5.7 0 0 36.3 28.9 94.9 28.9s94.9-28.9 94.9-28.9c26.9-21.1 47.1-8.9 54.6 5.7 12.4 25.7-1.9 38-34.5 59.1zM30.3 129.7C30.3 58 88.6 0 160 0s129.7 58 129.7 129.7c0 71.4-58.3 129.4-129.7 129.4s-129.7-58-129.7-129.4zm66 0c0 35.1 28.6 63.7 63.7 63.7s63.7-28.6 63.7-63.7c0-35.4-28.6-64-63.7-64s-63.7 28.6-63.7 64z"/></svg>';

}else{
               $social_icons .= '<i class="' . esc_attr($value['icon-style']) . ' ' . esc_attr($value['icon-name']) . '"></i>
         </a>';
}

         };
      };

      if ($social_icons !== NULL) { ?>
         <nav class="nav social">
            <?php if (class_exists('ACF')) {
               echo $social_icons;
            }; ?>
         </nav>
         <!-- /.social -->
      <?php
      }
   }
}


/**
 * Menu widget offcanvas
 */

function offcanvas_menu_option()
{
   if (has_nav_menu('offcanvas_right')) { ?>

      <div class="widget mb-8">
         <div class="widget-title mb-3 h5 fs-24"><?php esc_html_e('Learn More', 'codeweber'); ?></div>
         <?php
         wp_nav_menu(
            array(
               'theme_location'    => 'offcanvas_right',
               'depth'             => 1,
               'container'         => '',
               'container_class'   => '',
               'container_id'      => '',
               'menu_class'        => '',
               'items_wrap'      => '<ul id="%1$s" class="%2$s list-unstyled">%3$s</ul>',
               'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
               'walker'            => new WP_Bootstrap_Navwalker(),
            )
         );
         ?>
      </div>
   <?php
   }
}


/**
 * Contact widget offcanvas
 */

function offcanvas_contact_option()
{ ?>
   <div class="widget mb-8">
      <div class="widget-title mb-3 h5 fs-24"><?php esc_html_e('Contact Info', 'codeweber'); ?></div>
      <address> <?php echo brk_adress(); ?> </address>
      <a href="mailto:<?php brk_email(); ?>"><?php echo brk_email(); ?></a><br />
      <?php echo brk_phones(NULL); ?>
   </div>
<?php
}

/**
 * Contact widget md_offcanvas
 */

function md_offcanvas_contact_option()
{ ?>
   <a href="mailto:<?php echo brk_email(); ?>" class="link-inverse"><?php echo brk_email(); ?></a>
   <br />
   <?php echo brk_phones('light'); ?>
   <?php
}

/**
 * Socials widget md_offcanvas
 */

function md_social_icons_option()
{
   if (class_exists('ACF')) {
      $social_icons = NULL;
      foreach (codeweber_socialicons() as $key => $value) {
         if (get_field('social_' . $key, 'option')) {
            $social_icons .= '<a href="' . esc_attr(get_field('social_' . $key, 'option')) . '" title="' . esc_attr($value['social-name']) . '" target="_blank">
            <i class="fs-30 ' . esc_attr($value['icon-style']) . ' ' . esc_attr($value['icon-name']) . '"></i>
         </a>';
         };
      };

      if ($social_icons !== NULL) { ?>

         <nav class="nav social social-white mt-4">
            <?php if (class_exists('ACF')) {
               echo $social_icons;
            }; ?>
         </nav>
         <!-- /.social -->

      <?php
      }
   }
}


/**
 * Socials widget md_offcanvas
 */

function sm_social_icons_option()
{
   if (class_exists('ACF')) {
      $social_icons = NULL;
      foreach (codeweber_socialicons() as $key => $value) {
         if (get_field('social_' . $key, 'option')) {
            $social_icons .= '<a  href="' . esc_attr(get_field('social_' . $key, 'option')) . '" title="' . esc_attr($value['social-name']) . '" target="_blank">
            <i class="fs-25 ' . esc_attr($value['icon-style']) . ' ' . esc_attr($value['icon-name']) . '"></i>
         </a>';
         };
      };

      if ($social_icons !== NULL) { ?>

         <nav class="nav social social-white ms-lg-2">
            <?php if (class_exists('ACF')) {
               echo $social_icons;
            }; ?>
         </nav>
         <!-- /.social -->

<?php
      }
   }
}


add_filter('get_the_archive_title_prefix', '__return_empty_string');
