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
            $social_icons .= '<a class="btn btn-circle btn-outline-primary btn-lg btn-' . $value['social-name'] . '" href="' . esc_attr(get_field('social_' . $key, 'option')) . '" title="' . esc_attr($value['social-name']) . '" target="_blank">
            <i class="fs-30 ' . esc_attr($value['icon-style']) . ' ' . esc_attr($value['icon-name']) . '"></i>
         </a>';
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
            $social_icons .= '<a class="btn btn-circle btn-lg btn-outline-primary  btn-' . $value['social-name'] . '" href="' . esc_attr(get_field('social_' . $key, 'option')) . '" title="' . esc_attr($value['social-name']) . '" target="_blank">
            <i class="' . esc_attr($value['icon-style']) . ' ' . esc_attr($value['icon-name']) . '"></i>
         </a>';
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
