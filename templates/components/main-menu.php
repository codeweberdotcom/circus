<?php
wp_nav_menu(
    array(
        'theme_location'    => 'header_1',
        'depth'             => 4,
        'container'         => '',
        'container_class'   => '',
        'container_id'      => '',
        'menu_class'        => 'navbar-nav',
        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
        'walker'            => new WP_Bootstrap_Navwalker(),
    )
);
