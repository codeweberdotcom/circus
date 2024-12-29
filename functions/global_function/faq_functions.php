<?php

//CPT Function Customizer Faq Settings

function CPT_Faq_Settings($wp_customize)
{

   // Add FAQ section to our panel
   $wp_customize->add_section('faq-section', array(
      'title' => __('FAQ', 'codeweber'),
      'description' => __('FAQ settings', 'codeweber'),
      'panel' => 'cpt-panel',
   ));

   // FAQ Control
   $wp_customize->add_setting(
      'faq_template',
      array(
         'type' => 'theme_mod',
         'capability' => 'edit_theme_options',
         'choices'  => array(
            'default'   => 'template_1',
         )
      )
   );

   $wp_customize->add_control(
      'faq_template',
      array(
         'section' => 'faq-section',
         'label'    => __('Faq archive template', 'codeweber'),
         'type'     => 'select',
         'choices'  => array(
            'template_1'   => 'Template 1',
            'template_2'   => 'Template 2',
            'template_3'   => 'Template 3',
         )
      )
   );


   $wp_customize->add_setting('faq_description', array(
      'default' => '',
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
      'transport' => 'refresh',

   ));

   $wp_customize->add_control('faq_description', array(
      'type' => 'textarea',
      'priority' => 20,
      'label' => __('FAQ Archive Description', 'codeweber'),
      'section' => 'faq-section',
   ));


   $wp_customize->add_setting('faq_title', array(
      'default' => '',
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
      'transport' => 'refresh',

   ));

   $wp_customize->add_control('faq_title', array(
      'type' => 'textarea',
      'priority' => 15,
      'label' => __('FAQ Archive Title', 'codeweber'),
      'section' => 'faq-section',
   ));


   //

   $wp_customize->add_setting(
      'codeweber_header_faq_style',
      array(
         'default' => 'default',
      )
   );


   $wp_customize->add_control(
      'codeweber_header_faq_style',
      array(
         'type' => 'radio',
         'label' => esc_html__('Style FAQ Header', 'codeweber'),
         'section' => 'faq-section',
         'choices' => array(
            'solid' => esc_html__('Solid', 'codeweber'),
            'transparent' => esc_html__('Transparent', 'codeweber'),
            'default' => esc_html__('Default', 'codeweber'),
         ),
      )
   );


   $wp_customize->add_setting(
      'codeweber_header_faq_color',
      array(
         'default' => 'default',
      )
   );


   $wp_customize->add_control(
      'codeweber_header_faq_color',
      array(
         'type' => 'radio',
         'label' => esc_html__('Color Text Header', 'codeweber'),
         'section' => 'faq-section',
         'choices' => array(
            'navbar-dark' => esc_html__('Dark', 'codeweber'),
            'navbar-light' => esc_html__('Light', 'codeweber'),
            'default' => esc_html__('Default', 'codeweber'),
         ),
      )
   );


   // Header Color Background
   $wp_customize->add_setting(
      'codeweber_header_faq_bg',
      array(
         'default'   => 'default',
      )
   );

   $wp_customize->add_control(
      'codeweber_header_faq_bg',
      array(
         'section'  => 'faq-section',
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
            ' bg-soft-pinterest' => 'Soft Pinterest',
            ' bg-soft-red_one' => 'Soft Red One',
            ' bg-soft-blue_one' => 'Soft Blue One',
         )
      )
   );


   $wp_customize->add_setting(
      'codeweber_header_faq_bread',
      array(
         'default' => 'default',
      )
   );


   $wp_customize->add_control(
      'codeweber_header_faq_bread',
      array(
         'type' => 'radio',
         'label' => esc_html__('Breadcrumbs', 'codeweber'),
         'section' => 'faq-section',
         'choices' => array(
            'true' => esc_html__('On', 'codeweber'),
            'false' => esc_html__('Off', 'codeweber'),
            'default' => esc_html__('Default', 'codeweber'),
         ),
      )
   );

   $wp_customize->add_setting(
      'codeweber_header_faq_angle',
      array(
         'default' => 'default',
      )
   );


   $wp_customize->add_control(
      'codeweber_header_faq_angle',
      array(
         'type' => 'radio',
         'label' => esc_html__('Angle Page Header', 'codeweber'),
         'section' => 'faq-section',
         'choices' => array(
            'true' => esc_html__('On', 'codeweber'),
            'false' => esc_html__('Off', 'codeweber'),
            'default' => esc_html__('Default', 'codeweber'),
         ),
      )
   );


   $wp_customize->add_setting(
      'codeweber_header_faq_bread_color',
      array(
         'default' => 'default',
      )
   );


   $wp_customize->add_control(
      'codeweber_header_faq_bread_color',
      array(
         'type' => 'radio',
         'label' => esc_html__('Text Page Header color', 'codeweber'),
         'section' => 'faq-section',
         'choices' => array(
            'white' => esc_html__('Light', 'codeweber'),
            'dark' => esc_html__('Dark', 'codeweber'),
            'default' => esc_html__('Default', 'codeweber'),
         ),
      )
   );

   $wp_customize->add_setting(
      'codeweber_page_faq_header',
      array(
         'default' => 'default',
      )
   );

   $wp_customize->add_control(
      'codeweber_page_faq_header',
      array(
         'type' => 'radio',
         'label' => esc_html__('Secondary Header', 'codeweber'),
         'section' => 'faq-section',
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


   // Color Control Page Background
   $wp_customize->add_setting(
      'codeweber_page_faq_header_bg',
      array(
         'default'   => 'light',
      )
   );

   $wp_customize->add_control(
      'codeweber_page_faq_header_bg',
      array(
         'section'  => 'faq-section',
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
            'bg-soft-bitbucket' => 'Soft Bitbucket',
            'bg-soft-dewalt' => 'Soft Dewalt',
            'bg-soft-atv' => 'Soft ATV',
            'bg-soft-pinterest' => 'Soft Pinterest',
            'bg-soft-red_one' => 'Soft Red One',
            'bg-soft-blue_one' => 'Soft Blue One',
         )
      )
   );


   // Image Background Faq Page Header
   $wp_customize->add_setting('image_control_five', array(
      'default' => '',
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
   ));

   $wp_customize->add_control(
      new WP_Customize_Image_Control($wp_customize, 'image_control_five', array(
         'label' => __('Page Header Faq Background', 'codeweber'),
         'section' => 'faq-section',
         'settings' => 'image_control_five',
      ))
   );
}

add_action('customize_register', 'CPT_Faq_Settings');
