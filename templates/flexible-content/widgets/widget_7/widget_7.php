   <div class="widget mt-1 mb-6">
      <h3 class="widget-title h4 mb-3"><?php echo get_sub_field('title_widget'); ?></h4>
         <nav class="navbar navbar-expand-lg woocommerce-menu zindex-1">
            <div class="flex-wrap align-items-center navbar-collapse">
               <?php
               wp_nav_menu(
                  array(
                     'theme_location'    => 'woocommerce',
                     'depth'             => 4,
                     'container'         => '',
                     'container_class'   => '',
                     'container_id'      => '',
                     'menu_class'        => 'navbar-nav flex-column vertical-menu',
                     'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                     'walker'            => new WP_Bootstrap_Navwalker(),
                  )
               );
               ?>
            </div>
         </nav>
   </div>