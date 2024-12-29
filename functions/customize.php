<?php

function codeweber_register_theme_customizer($wp_customize)
{

   /// https://stackoverflow.com/questions/62850036/wordpress-add-second-logo-to-customizer

   $wp_customize->get_setting('blogname')->transport         = 'postMessage';
   $wp_customize->get_setting('blogdescription')->transport  = 'postMessage';
   $wp_customize->get_setting('header_textcolor')->transport = 'postMessage';


   if (isset($wp_customize->selective_refresh)) {
      $wp_customize->selective_refresh->add_partial(
         'blogname',
         array(
            'selector'        => '.site-title a',
            'render_callback' => 'mytheme_customize_partial_blogname',
         )
      );
      $wp_customize->selective_refresh->add_partial(
         'blogdescription',
         array(
            'selector'        => '.site-description',
            'render_callback' => 'mytheme_customize_partial_blogdescription',
         )
      );
   }

   $wp_customize->add_setting('light_logo');
   $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'light_logo', array(
      'label' => __('Light Logo', 'codeweber'),
      'section' => 'title_tagline',
      'settings' => 'light_logo',
      'render_callback' => 'mytheme_customize_partial_blogname',
      'priority' => 8
   )));


   // add a panel
   $wp_customize->add_panel('cpt-panel', array(
      'title'       => __(
         'Codeweber CPT Settings',
         'codeweber'
      ),
      'description' => __('Settings Custom Post Type', 'codeweber'),
      'priority'    => 1,

   ));

   // Theme Options Panel
   $wp_customize->add_panel(
      'codeweber_theme_options',
      array(
         'priority'       => 0,
         'title'            => __('Codeweber Theme Options', 'codeweber'),
         'description'      => __('Theme Modifications like color scheme, theme texts and layout preferences can be done here', 'codeweber'),
      )
   );

   // Button Section
   $wp_customize->add_section(
      'codeweber_button_options',
      array(
         'title'     => __('Button Options', 'codeweber'),
         'priority'  => 50,
         'panel'         => 'codeweber_theme_options'
      )
   );

   // Button Form

   $wp_customize->add_setting('codeweber_button_form', array(
      'default' => 'rounded-pill',
   ));

   $wp_customize->add_control('codeweber_button_form', array(
      'type' => 'radio',
      'section' => 'codeweber_button_options', // Add a default or your own section
      'label' => __('Button style', 'codeweber'),
      //'description' => __('This is a custom radio input.'),
      'choices'    => array(
         'rounded-pill' => __('Rounded-pill', 'codeweber'),
         'rounded' =>  __('Rounded', 'codeweber'),
         'rounded-0' =>  __('Squared', 'codeweber'),
      ),
   ));

   // Button Size

   $wp_customize->add_setting('codeweber_button_size', array(
      'default' => 'btn-lg',
   ));

   $wp_customize->add_control('codeweber_button_size', array(
      'type' => 'radio',
      'section' => 'codeweber_button_options', // Add a default or your own section
      'label' => __('Button Size', 'codeweber'),
      //'description' => __('This is a custom radio input.'),
      'choices'    => array(
         'btn-lg' => __('Button Big', 'codeweber'),
         'btn-md' => __('Button Middle', 'codeweber'),
         'btn-sm' => __('Button Small', 'codeweber'),
      ),
   ));


   // Color Section
   $wp_customize->add_section(
      'codeweber_color_options',
      array(
         'title'     => __('Color Options', 'codeweber'),
         'priority'  => 40,
         'panel'         => 'codeweber_theme_options'
      )
   );

   // Color Control
   $wp_customize->add_setting(
      'codeweber_color',
      array(
         'default'   => 'bg-green',
      )
   );

   $wp_customize->add_control(
      'codeweber_color',
      array(
         'section'  => 'codeweber_color_options',
         'label'    => __('Color Theme', 'codeweber'),
         'type'     => 'select',
         'choices'  => array(
            'aqua'       => 'Aqua',
            'fuchsia'    => 'Fuchsia',
            'grape'      => 'Grape',
            'green'      => 'Green',
            'leaf'       => 'Leaf',
            'navy'       => 'Navy',
            'orange'     => 'Orange',
            'pink'       => 'Pink',
            'purple'     => 'Purple',
            'red'        => 'Red',
            'sky'        => 'Sky',
            'violet'     => 'Violet',
            'pinterest'  => 'Pinterest',
            'telegram' => 'Telegram',
            'whatsapp' => 'Whatsapp',
            'facebook' => 'Facebook',
            'dewalt' => 'Dewalt',
            'atv' => 'ATV',
            'bitbucket' => 'Bitbucket',
            'dark'     => 'Dark',
            'light'     => 'Light',
            'primary'     => 'Primary',
            'red_one' => 'Red One',
            'blue_one' => 'Blue One',

         )
      )
   );


   // Title Section
   $wp_customize->add_section(
      'codeweber_sub_title_options',
      array(
         'title'     => __('Title Options', 'codeweber'),
         'priority'  => 30,
         'panel'         => 'codeweber_theme_options'
      )
   );

   // Title Control
   $wp_customize->add_setting(
      'codeweber_sub_title',
      array(
         'default'   => 'default',
      )
   );

   $wp_customize->add_control(
      'codeweber_sub_title',
      array(
         'section'  => 'codeweber_sub_title_options',
         'label'    => __('Title Theme Style', 'codeweber'),
         'type'     => 'select',
         'choices'  => array(
            'default'    => 'Default',
            'line'      => 'With Line',
         )
      )
   );

   // Color Control
   $wp_customize->add_setting(
      'codeweber_sub_title_color',
      array(
         'default'   => 'default',
      )
   );

   $wp_customize->add_control(
      'codeweber_sub_title_color',
      array(
         'section'  => 'codeweber_sub_title_options',
         'label'    => __('Title Theme Color', 'codeweber'),
         'type'     => 'select',
         'choices'  => array(
            'default'    => 'Default',
            'text-muted'    => 'Muted',
            'text-dark'      => 'Dark',
            'text-light'      => 'Light',
            'text-primary'      => 'Primary',
         )
      )
   );


   // Image Section
   $wp_customize->add_section(
      'codeweber_image_options',
      array(
         'title'     => __('Image Options', 'codeweber'),
         'priority'  => 20,
         'panel'         => 'codeweber_theme_options'
      )
   );

   // Image Control
   $wp_customize->add_setting(
      'codeweber_image',
      array(
         'default'   => 'rounded',
      )
   );

   // Image Control
   $wp_customize->add_control(
      'codeweber_image',
      array(
         'section'  => 'codeweber_image_options',
         'label'    => __('Image Form', 'codeweber'),
         'type'     => 'select',
         'choices'  => array(
            'rounded'       => 'rounded',
            'rounded-pill'    => 'rounded-pill',
            'rounded-0'      => 'rounded-0',
         )
      )
   );


   // Page Header Section
   $wp_customize->add_section(
      'codeweber_page_header_options',
      array(
         'title'     => __('Page Header Options', 'codeweber'),
         'priority'  => 10,
         'panel'         => 'codeweber_theme_options'
      )
   );


   // Global Settings Section
   $wp_customize->add_section(
      'codeweber_global_options',
      array(
         'title'     => __('Global Options', 'codeweber'),
         'priority'  => 5,
         'panel'         => 'codeweber_theme_options'
      )
   );


   // Header Section
   $wp_customize->add_section(
      'codeweber_header_options',
      array(
         'title'     => __('Header Options', 'codeweber'),
         'priority'  => 15,
         'panel'         => 'codeweber_theme_options'
      )
   );


   // Frame Control
   $wp_customize->add_setting(
      'codeweber_frame_content',
      array(
         'default'    =>  'true',
      )
   );

   $wp_customize->add_control(
      'codeweber_frame_content',
      array(
         'section'   => 'codeweber_global_options',
         'label'     => __('Content Frame?', 'codeweber'),
         'type'      => 'checkbox',
      )
   );

   // page_loader
   $wp_customize->add_setting(
      'codeweber_page_loader',
      array(
         'default'    =>  'true',
      )
   );

   $wp_customize->add_control(
      'codeweber_page_loader',
      array(
         'section'   => 'codeweber_global_options',
         'label'     => __('Page Loader?', 'codeweber'),
         'type'      => 'checkbox',
      )
   );


   // Header Control
   $wp_customize->add_setting(
      'codeweber_header',
      array(
         'default'   => 'sandbox-02',
      )
   );

   $wp_customize->add_control(
      'codeweber_header',
      array(
         'section'  => 'codeweber_header_options',
         'label'    => __('Main Header', 'codeweber'),
         'type'     => 'select',
         'choices'  => array(
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
      'codeweber_header_bg',
      array(
         'default'   => 'default',
      )
   );

   $wp_customize->add_control(
      'codeweber_header_bg',
      array(
         'section'  => 'codeweber_header_options',
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
            ' bg-bitbucket' => 'Bitbucket',
            ' bg-dewalt' => 'Dewalt',
            ' bg-atv' => 'ATV',
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
      'codeweber_header_style',
      array(
         'default' => 'solid',
      )
   );


   $wp_customize->add_control(
      'codeweber_header_style',
      array(
         'type' => 'radio',
         'label' => esc_html__('Style Main Header', 'codeweber'),
         'section' => 'codeweber_header_options',
         'choices' => array(
            'solid' => esc_html__('Solid', 'codeweber'),
            'transparent' => esc_html__('Transparent', 'codeweber'),
         ),
      )
   );

   $wp_customize->add_setting(
      'codeweber_header_color',
      array(
         'default' => 'navbar-dark',
      )
   );


   $wp_customize->add_control(
      'codeweber_header_color',
      array(
         'type' => 'radio',
         'label' => esc_html__('Color Text Header', 'codeweber'),
         'section' => 'codeweber_header_options',
         'choices' => array(
            'navbar-dark' => esc_html__('Dark', 'codeweber'),
            'navbar-light' => esc_html__('Light', 'codeweber'),
         ),
      )
   );


   $wp_customize->add_setting(
      'codeweber_page_header',
      array(
         'default' => 'type_1',
         'priority'  => 25,
      )
   );

   $wp_customize->add_control(
      'codeweber_page_header',
      array(
         'type' => 'radio',
         'label' => esc_html__('Secondary Header', 'codeweber'),
         'section' => 'codeweber_page_header_options',
         'choices' => array(
            'disable' => esc_html__('Disable', 'codeweber'),
            'type_1' => esc_html__('Type 1', 'codeweber'),
            'type_2' => esc_html__('Type 2', 'codeweber'),
            'type_3' => esc_html__('Type 3', 'codeweber'),
            'type_4' => esc_html__('Type 4', 'codeweber'),
            'type_5' => esc_html__('Type 5', 'codeweber'),
            'type_6' => esc_html__('Type 6', 'codeweber'),
            'type_7' => esc_html__('Type 7', 'codeweber'),
            'type_8' => esc_html__('Type 8', 'codeweber'),
            'type_10' => esc_html__('Type 10', 'codeweber'),
         ),
      )
   );


   // Color Control Page Background
   $wp_customize->add_setting(
      'codeweber_page_header_bg',
      array(
         'default'   => 'bg-light',
      )
   );

   $wp_customize->add_control(
      'codeweber_page_header_bg',
      array(
         'section'  => 'codeweber_page_header_options',
         'label'    => __('Background Color', 'codeweber'),
         'type'     => 'select',
         'choices'  => array(
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
            'bg-dewalt' => 'Dewalt',
            'bg-atv' => 'ATV',
            'bg-bitbucket' => 'Bitbucket',
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
            'bg-soft-dewalt' => 'Soft Dewalt',
            'bg-soft-atv' => 'Soft ATV',
            'bg-soft-bitbucket' => 'Soft Bitbucket',
            'bg-soft-pinterest' => 'Soft Pinterest',
            'bg-soft-red_one' => 'Soft Red One',
            'bg-soft-blue_one' => 'Soft Blue One'
         )
      )
   );

   $wp_customize->add_setting(
      'codeweber_page_header_bread',
      array(
         'default' => 'true',
      )
   );


   $wp_customize->add_control(
      'codeweber_page_header_bread',
      array(
         'type' => 'radio',
         'label' => esc_html__('Breadcrumbs', 'codeweber'),
         'section' => 'codeweber_page_header_options',
         'choices' => array(
            'true' => esc_html__('On', 'codeweber'),
            'false' => esc_html__('Off', 'codeweber'),
         ),
      )
   );

   $wp_customize->add_setting(
      'codeweber_page_header_angle',
      array(
         'default' => 'true',
      )
   );


   $wp_customize->add_control(
      'codeweber_page_header_angle',
      array(
         'type' => 'radio',
         'label' => esc_html__('Angle Page Header', 'codeweber'),
         'section' => 'codeweber_page_header_options',
         'choices' => array(
            'true' => esc_html__('On', 'codeweber'),
            'false' => esc_html__('Off', 'codeweber'),
         ),
      )
   );


   $wp_customize->add_setting(
      'codeweber_page_header_bread_color',
      array(
         'default' => 'dark',
      )
   );


   $wp_customize->add_control(
      'codeweber_page_header_bread_color',
      array(
         'type' => 'radio',
         'label' => esc_html__('Text Page Header color', 'codeweber'),
         'section' => 'codeweber_page_header_options',
         'choices' => array(
            'white' => esc_html__('Light', 'codeweber'),
            'dark' => esc_html__('Dark', 'codeweber'),
         ),
      )
   );

   // Image Background  Page Header
   $wp_customize->add_setting('image_control_page', array(
      'default' => '',
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
   ));

   $wp_customize->add_control(
      new WP_Customize_Image_Control($wp_customize, 'image_control_page', array(
         'label' => __('Page Header Service Background', 'codeweber'),
         'section' => 'codeweber_page_header_options',
         'settings' => 'image_control_page',
      ))
   );

   // Header Section
   $wp_customize->add_section(
      'codeweber_footer_options',
      array(
         'title'     => __('Footer Options', 'codeweber'),
         'priority'  => 30,
         'panel'         => 'codeweber_theme_options'
      )
   );

   // Footer Control
   $wp_customize->add_setting(
      'codeweber_footer',
      array(
         'default'   => 'sandbox-1',
      )
   );

   $wp_customize->add_control(
      'codeweber_footer',
      array(
         'section'  => 'codeweber_footer_options',
         'label'    => __('Footer', 'codeweber'),
         'type'     => 'select',
         'choices'  => array(
            'sandbox-1'   => 'Footer 01',
            'sandbox-1-1'   => 'Footer 01-1',
            'sandbox-2-6'   => 'Footer 02-06',
            'sandbox-3'   => 'Footer 03',
            'sandbox-4'   => 'Footer 04',
            'sandbox-5'   => 'Footer 05',
            'sandbox-7'   => 'Footer 07',
            'sandbox-8'   => 'Footer 08',
            'sandbox-9'   => 'Footer 09',
            'sandbox-10'   => 'Footer 10',
            'sandbox-11'   => 'Footer 11',
            'sandbox-12'   => 'Footer 12',
            'sandbox-13'   => 'Footer 13',
            'sandbox-14'   => 'Footer 14',
            'sandbox-15'   => 'Footer 15',
            'sandbox-16'   => 'Footer 16',
            'sandbox-17'   => 'Footer 17',
            'sandbox-17-1'   => 'Footer 17-1',
            'sandbox-18'   => 'Footer 18',
            'sandbox-19'   => 'Footer 19',
            'sandbox-20'   => 'Footer 20',
            'sandbox-21'   => 'Footer 21',
            'sandbox-22'   => 'Footer 22',
            'sandbox-25_cw'   => 'Footer 25_CW',

         )
      )
   );
}
add_action('customize_register', 'codeweber_register_theme_customizer');
