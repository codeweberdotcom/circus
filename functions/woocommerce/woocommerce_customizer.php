<?php

//Customizer_Woocommerce_Settings

function Customizer_Woocommerce_Settings($wp_customize)
{

   // Woocommerce Header
   if (class_exists('WooCommerce')) {

      // Add woocommerce section to our panel
      $wp_customize->add_section('woocommerce-section', array(
         'title' => __('Woocommerce', 'codeweber'),
         'description' => __('woocommerce settings', 'codeweber'),
         'panel' => 'cpt-panel',
      ));


      $wp_customize->add_setting('woo_description', array(
         'default' => '',
         'type' => 'theme_mod',
         'capability' => 'edit_theme_options',
         'transport' => 'refresh',

      ));

      $wp_customize->add_control('woo_description', array(
         'type' => 'textarea',
         'priority' => 2,
         'label' => __('Woo Archive Description', 'codeweber'),
         'section' => 'woocommerce-section',
      ));


      $wp_customize->add_setting('woo_title', array(
         'default' => '',
         'type' => 'theme_mod',
         'capability' => 'edit_theme_options',
         'transport' => 'refresh',

      ));

      $wp_customize->add_control('woo_title', array(
         'type' => 'textarea',
         'priority' => 1,
         'label' => __('Woo Archive Title', 'codeweber'),
         'section' => 'woocommerce-section',
      ));


      // Header Control
      $wp_customize->add_setting(
         'woocommerce_header',
         array(
            'default'   => 'default',
         )
      );

      $wp_customize->add_control(
         'woocommerce_header',
         array(
            'section'  => 'woocommerce-section',
            'label'    => __('Woocommerce Header', 'codeweber'),
            'type'     => 'select',
            'choices'  => array(
               'default' => 'Default',
               'sandbox-02'   => 'Header 02',
               'sandbox-03'   => 'Header 03',
               'sandbox-04'   => 'Header 04',
               'sandbox-05'   => 'Header 05',
               'sandbox-06'   => 'Header 06',
               'sandbox-07'   => 'Header 07',
               'sandbox-08'   => 'Header 08',
               'sandbox-09'   => 'Header 09',
               'sandbox-10'   => 'Header 10',
               'sandbox-11'   => 'Header 11',
               'sandbox-12'   => 'Header 12',
               'sandbox-13'   => 'Header 13',
               'sandbox-14'   => 'Header 14',
               'sandbox-15'   => 'Header 15',
               'sandbox-16'   => 'Header 16',
               'sandbox-17'   => 'Header 17',
               'sandbox-18'   => 'Header 18',
               'sandbox-19'   => 'Header 19',
               'sandbox-20'   => 'Header 20',
               'sandbox-21'   => 'Header 21',
               'sandbox-22'   => 'Header 22',
               'sandbox-23'   => 'Header 23',
               'sandbox-24'   => 'Header 24',
               'sandbox-25'   => 'Header 25',
               'sandbox-26'   => 'Header 26',
               'sandbox-27'   => 'Header 27',
               'sandbox-09_cw' => 'Header CW',
               'sandbox-woo-01' => 'Header Woo 1'
            )
         )
      );

      // Header Color Background
      $wp_customize->add_setting(
         'codeweber_woo_header_bg',
         array(
            'default'   => 'default',
         )
      );

      $wp_customize->add_control(
         'codeweber_woo_header_bg',
         array(
            'section'  => 'woocommerce-section',
            'label'    => __(
               'Background Color',
               'codeweber'
            ),
            'type'     => 'select',
            'choices'  => array(
               'default'       => 'Default',
               ' bg-aqua'       => 'Aqua',
               ' bg-fuchsia'    => 'Fuchsia',
               ' bg-grape'      => 'Grape',
               ' bg-green'      => 'Green',
               ' bg-leaf'       => 'Leaf',
               ' bg-navy'       => 'Navy',
               ' bg-orange'     => 'Orange',
               ' bg-pink'       => 'Pink',
               ' bg-purple'     => 'Purple',
               ' bg-red'        => 'Red',
               ' bg-sky'        => 'Sky',
               ' bg-violet'     => 'Violet',
               ' bg-yellow'     => 'Yellow',
               ' bg-pinterest'  => 'Pinterest',
               ' bg-telegram' => 'Telegram',
               ' bg-whatsapp' => 'Whatsapp',
               ' bg-facebook' => 'Facebook',
               ' bg-dewalt' => 'Dewalt',
               ' bg-atv' => 'ATV',
               ' bg-bitbucket' => 'Bitbucket',
               ' bg-dark'     => 'Dark',
               ' bg-light'     => 'Light',
               ' bg-primary'     => 'Primary',
               ' bg-red_one' => 'Red One',
               ' bg-blue_one' => 'Blue One',
               ' bg-soft-primary' => 'Soft Primary',
               ' bg-soft-light' => 'Soft Light',
               ' bg-soft-white' => 'Soft White',
               ' bg-soft-fuchsia' => 'Soft Fuchsia',
               ' bg-soft-green' => 'Soft Green',
               ' bg-soft-orange' => 'Soft Orange',
               ' bg-soft-pink' => 'Soft Pink',
               ' bg-soft-purple' => 'Soft Purple',
               ' bg-soft-red' => 'Soft Red',
               ' bg-soft-sky' => 'Soft Sky',
               ' bg-soft-violet' => 'Soft Violet',
               ' bg-soft-yellow' => 'Soft Yellow',
               ' bg-soft-ash' => 'Soft Ash',
               ' bg-soft-navy' => 'Soft Navy',
               ' bg-soft-grape' => 'Soft Grape',
               ' bg-soft-muted' => 'Soft Muted',
               ' bg-soft-telegram' => 'Soft Telegram',
               ' bg-soft-whatsapp' => 'Soft Whatsapp',
               ' bg-soft-facebook' => 'Soft Facebook',
               ' bg-soft-bitbucket' => 'Soft Bitbucket',
               ' bg-soft-dewalt' => 'Soft Dewalt',
               ' bg-soft-atv' => 'Soft ATV',
               ' bg-soft-pinterest' => 'Soft Pinterest',
               ' bg-soft-red_one' => 'Soft Red One',
               ' bg-soft-blue_one' => 'Soft Blue One',

            )
         )
      );





      $wp_customize->add_setting(
         'codeweber_header_woo_style',
         array(
            'default' => 'default',
         )
      );


      $wp_customize->add_control(
         'codeweber_header_woo_style',
         array(
            'type' => 'radio',
            'label' => esc_html__('Style Woocommerce Header', 'codeweber'),
            'section' => 'woocommerce-section',
            'choices' => array(
               'solid' => esc_html__('Solid', 'codeweber'),
               'transparent' => esc_html__(
                  'Transparent',
                  'codeweber'
               ),
               'default' => esc_html__('Default', 'codeweber'),
            ),
         )
      );


      $wp_customize->add_setting(
         'codeweber_header_woo_color',
         array(
            'default' => 'default',
         )
      );


      $wp_customize->add_control(
         'codeweber_header_woo_color',
         array(
            'type' => 'radio',
            'label' => esc_html__('Color Text Woocommerce Header', 'codeweber'),
            'section' => 'woocommerce-section',
            'choices' => array(
               'navbar-dark' => esc_html__('Dark', 'codeweber'),
               'navbar-light' => esc_html__('Light', 'codeweber'),
               'default' => esc_html__('Default', 'codeweber'),
            ),
         )
      );


      // blog Control
      $wp_customize->add_setting(
         'woocommerce_archive_template',
         array(
            'choices'  => array(
               'default'   => 'template_1',
            )
         )
      );

      $wp_customize->add_control(
         'woocommerce_archive_template',
         array(
            'section' => 'woocommerce-section',
            'label'    => __('Woocommerce archive template', 'codeweber'),
            'type'     => 'select',
            'priority' => 3,
            'choices'  => array(
               'template_1'   => 'Template 1',
               'template_2'   => 'Template 2',
               'template_3'   => 'Template 3',
            )
         )
      );

      // blog Control
      $wp_customize->add_setting(
         'woocommerce_product_template',
         array(
            'choices'  => array(
               'default'   => 'template_1',
            )
         )
      );

      $wp_customize->add_control(
         'woocommerce_product_template',
         array(
            'section' => 'woocommerce-section',
            'label'    => __('Woocommerce product template', 'codeweber'),
            'type'     => 'select',
            'priority' => 4,
            'choices'  => array(
               'template_1'   => 'Template 1',
               'template_2'   => 'Template 2',
               'template_3'   => 'Template 3',
            )
         )
      );


      $wp_customize->add_setting(
         'codeweber_header_woo_bread',
         array(
            'default' => 'default',
         )
      );


      $wp_customize->add_control(
         'codeweber_header_woo_bread',
         array(
            'type' => 'radio',
            'label' => esc_html__('Breadcrumbs', 'codeweber'),
            'section' => 'woocommerce-section',
            'choices' => array(
               'true' => esc_html__('On', 'codeweber'),
               'false' => esc_html__('Off', 'codeweber'),
               'default' => esc_html__('Default', 'codeweber'),
            ),
         )
      );

      $wp_customize->add_setting(
         'codeweber_header_woo_angle',
         array(
            'default' => 'default',
         )
      );


      $wp_customize->add_control(
         'codeweber_header_woo_angle',
         array(
            'type' => 'radio',
            'label' => esc_html__('Angle Page Header', 'codeweber'),
            'section' => 'woocommerce-section',
            'choices' => array(
               'true' => esc_html__('On', 'codeweber'),
               'false' => esc_html__('Off', 'codeweber'),
               'default' => esc_html__('Default', 'codeweber'),
            ),
         )
      );


      $wp_customize->add_setting(
         'codeweber_header_woo_bread_color',
         array(
            'default' => 'default',
         )
      );


      $wp_customize->add_control(
         'codeweber_header_woo_bread_color',
         array(
            'type' => 'radio',
            'label' => esc_html__('Text Color Page Woo Header Archive', 'codeweber'),
            'section' => 'woocommerce-section',
            'choices' => array(
               'white' => esc_html__('Light', 'codeweber'),
               'dark' => esc_html__('Dark', 'codeweber'),
               'default' => esc_html__('Default', 'codeweber'),
            ),
         )
      );

      $wp_customize->add_setting(
         'codeweber_page_woo_header',
         array(
            'default' => 'default',
         )
      );

      $wp_customize->add_control(
         'codeweber_page_woo_header',
         array(
            'type' => 'radio',
            'label' => esc_html__('Secondary Header Woo Archive', 'codeweber'),
            'section' => 'woocommerce-section',
            'choices' => array(
               'type_1' => esc_html__('Type 1', 'codeweber'),
               'type_2' => esc_html__('Type 2', 'codeweber'),
               'type_3' => esc_html__('Type 3', 'codeweber'),
               'type_4' => esc_html__('Type 4', 'codeweber'),
               'type_5' => esc_html__('Type 5', 'codeweber'),
               'type_6' => esc_html__('Type 6', 'codeweber'),
               'type_7' => esc_html__('Type 7', 'codeweber'),
               'type_8' => esc_html__('Type 8', 'codeweber'),
               'type_10' => esc_html__('Type 10', 'codeweber'),
               'disable' => esc_html__('Disable', 'codeweber'),
               'default' => esc_html__('Default', 'codeweber'),
            ),
         )
      );


      $wp_customize->add_setting(
         'codeweber_header_woo_single_bread_color',
         array(
            'default' => 'default',
         )
      );


      $wp_customize->add_control(
         'codeweber_header_woo_single_bread_color',
         array(
            'type' => 'radio',
            'label' => esc_html__('Text Color Page Woo Header Single', 'codeweber'),
            'section' => 'woocommerce-section',
            'choices' => array(
               'white' => esc_html__('Light', 'codeweber'),
               'dark' => esc_html__('Dark', 'codeweber'),
               'default' => esc_html__('Default', 'codeweber'),
            ),
         )
      );

      $wp_customize->add_setting(
         'codeweber_page_woo_product_header',
         array(
            'default' => 'type_9',
         )
      );

      $wp_customize->add_control(
         'codeweber_page_woo_product_header',
         array(
            'type' => 'radio',
            'label' => esc_html__('Secondary Header Product', 'codeweber'),
            'section' => 'woocommerce-section',
            'choices' => array(
               'type_1' => esc_html__('Type 1', 'codeweber'),
               'type_2' => esc_html__('Type 2', 'codeweber'),
               'type_3' => esc_html__('Type 3', 'codeweber'),
               'type_4' => esc_html__('Type 4', 'codeweber'),
               'type_5' => esc_html__('Type 5', 'codeweber'),
               'type_6' => esc_html__('Type 6', 'codeweber'),
               'type_7' => esc_html__('Type 7', 'codeweber'),
               'type_8' => esc_html__('Type 8', 'codeweber'),
               'type_10' => esc_html__('Type 10', 'codeweber'),
               'type_9' => esc_html__('Recomended', 'codeweber'),
               'disable' => esc_html__('Disable', 'codeweber'),
               'default' => esc_html__('Default', 'codeweber'),
            ),
         )
      );



      // Color Control Woo Background
      $wp_customize->add_setting(
         'codeweber_page_woo_header_bg',
         array(
            'default'   => 'bg-light',
         )
      );

      $wp_customize->add_control(
         'codeweber_page_woo_header_bg',
         array(
            'section'  => 'woocommerce-section',
            'label'    => __('Background Color', 'codeweber'),
            'type'     => 'select',
            'choices'  => array(
               'default' => 'Default',
               'bg-aqua'       => 'Aqua',
               'bg-fuchsia'    => 'Fuchsia',
               'bg-grape'      => 'Grape',
               'bg-green'      => 'Green',
               'bg-leaf'       => 'Leaf',
               'bg-navy'       => 'Navy',
               'bg-orange'     => 'Orange',
               'bg-pink'       => 'Pink',
               'bg-purple'     => 'Purple',
               'bg-red'        => 'Red',
               'bg-sky'        => 'Sky',
               'bg-violet'     => 'Violet',
               'bg-yellow'     => 'Yellow',
               'bg-pinterest'  => 'Pinterest',
               'bg-telegram' => 'Telegram',
               'bg-whatsapp' => 'Whatsapp',
               'bg-facebook' => 'Facebook',
               'bg-bitbucket' => 'Bitbucket',
               'bg-dewalt' => 'Dewalt',
               'bg-atv' => 'ATV',
               'bg-dark'     => 'Dark',
               'bg-light'     => 'Light',
               'bg-primary'     => 'Primary',
               'bg-red_one' => 'Red One',
               'bg-blue_one' => 'Blue One',
               'bg-soft-primary' => 'Soft Primary',
               'bg-soft-light' => 'Soft Light',
               'bg-soft-white' => 'Soft White',
               'bg-soft-fuchsia' => 'Soft Fuchsia',
               'bg-soft-green' => 'Soft Green',
               'bg-soft-orange' => 'Soft Orange',
               'bg-soft-pink' => 'Soft Pink',
               'bg-soft-purple' => 'Soft Purple',
               'bg-soft-red' => 'Soft Red',
               'bg-soft-sky' => 'Soft Sky',
               'bg-soft-violet' => 'Soft Violet',
               'bg-soft-yellow' => 'Soft Yellow',
               'bg-soft-ash' => 'Soft Ash',
               'bg-soft-navy' => 'Soft Navy',
               'bg-soft-grape' => 'Soft Grape',
               'bg-soft-muted' => 'Soft Muted',
               'bg-soft-telegram' => 'Soft Telegram',
               'bg-soft-whatsapp' => 'Soft Whatsapp',
               'bg-soft-facebook' => 'Soft Facebook',
               'bg-soft-bitbucket' => 'Soft Bitbucket',
               'bg-soft-dewalt' => 'Soft Dewalt',
               'bg-soft-atv' => 'Soft ATV',
               'bg-soft-pinterest' => 'Soft Pinterest',
               'bg-soft-red_one' => 'Soft Red One',
               'bg-soft-blue_one' => 'Soft Blue One',
            )
         )
      );


      // Image Background Woo Header
      $wp_customize->add_setting('image_control_woo', array(
         'default' => '',
         'type' => 'theme_mod',
         'capability' => 'edit_theme_options',
      ));

      $wp_customize->add_control(
         new WP_Customize_Image_Control($wp_customize, 'image_control_woo', array(
            'label' => __('Woo Header Blog Background', 'codeweber'),
            'section' => 'woocommerce-section',
            'settings' => 'image_control_woo',
         ))
      );
   }
}

add_action('customize_register', 'Customizer_Woocommerce_Settings');
