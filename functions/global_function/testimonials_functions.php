<?php

//CPT Function Customizer Testimonials Settings

function CPT_Testimonials_Settings($wp_customize)
{
   // Add Testimonial section to our panel
   $wp_customize->add_section('testimonials-section', array(
      'title' => __('Testimonials', 'codeweber'),
      'description' => __('Testimonials settings', 'codeweber'),
      'panel' => 'cpt-panel',
   ));

   // Add Testimonials section to our panel
   $wp_customize->add_section('testimonials-section', array(
      'title' => __('Testimonials', 'codeweber'),
      'description' => __('Testimonials settings', 'codeweber'),
      'panel' => 'cpt-panel',
   ));

   // Testimonials Archive Template
   $wp_customize->add_setting(
      'testimonials_template',
      array(
         'choices'  => array(
            'default'   => 'template_1',
         )
      )
   );

   $wp_customize->add_control(
      'testimonials_template',
      array(
         'section' => 'testimonials-section',
         'label'    => __('Testimonials archive template', 'codeweber'),
         'type'     => 'select',
         'choices'  => array(
            'template_1'   => 'Template 1',
            'template_2'   => 'Template 2',
            'template_3'   => 'Template 3',
         )
      )
   );

   // Testimonials Archive Description
   $wp_customize->add_setting('testimonial_description', array(
      'default' => '',
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
      'transport' => 'refresh',

   ));

   $wp_customize->add_control('testimonial_description', array(
      'type' => 'textarea',
      'priority' => 20,
      'label' => __('Testimonials Archive Description', 'codeweber'),
      'section' => 'testimonials-section',
   ));


   //Testimonials Archive Title
   $wp_customize->add_setting('testimonial_title', array(
      'default' => '',
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
      'transport' => 'refresh',

   ));


   $wp_customize->add_control('testimonial_title', array(
      'type' => 'textarea',
      'priority' => 15,
      'label' => __('Testimonials Archive Title', 'codeweber'),
      'section' => 'testimonials-section',
   ));


   //

   $wp_customize->add_setting(
      'codeweber_header_testimonial_style',
      array(
         'default' => 'default',
      )
   );


   $wp_customize->add_control(
      'codeweber_header_testimonial_style',
      array(
         'type' => 'radio',
         'label' => esc_html__('Style Testimonial Header', 'codeweber'),
         'section' => 'testimonials-section',
         'choices' => array(
            'solid' => esc_html__('Solid', 'codeweber'),
            'transparent' => esc_html__('Transparent', 'codeweber'),
            'default' => esc_html__('Default', 'codeweber'),
         ),
      )
   );


   $wp_customize->add_setting(
      'codeweber_header_testimonial_color',
      array(
         'default' => 'default',
      )
   );


   $wp_customize->add_control(
      'codeweber_header_testimonial_color',
      array(
         'type' => 'radio',
         'label' => esc_html__('Color Text Header', 'codeweber'),
         'section' => 'testimonials-section',
         'choices' => array(
            'navbar-dark' => esc_html__('Dark', 'codeweber'),
            'navbar-light' => esc_html__('Light', 'codeweber'),
            'default' => esc_html__('Default', 'codeweber'),
         ),
      )
   );


   // Header Color Background
   $wp_customize->add_setting(
      'codeweber_header_testimonial_bg',
      array(
         'default'   => 'default',
      )
   );

   $wp_customize->add_control(
      'codeweber_header_testimonial_bg',
      array(
         'section'  => 'testimonials-section',
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
      'codeweber_header_testimonial_bread',
      array(
         'default' => 'default',
      )
   );


   $wp_customize->add_control(
      'codeweber_header_testimonial_bread',
      array(
         'type' => 'radio',
         'label' => esc_html__('Breadcrumbs', 'codeweber'),
         'section' => 'testimonials-section',
         'choices' => array(
            'true' => esc_html__('On', 'codeweber'),
            'false' => esc_html__('Off', 'codeweber'),
            'default' => esc_html__('Default', 'codeweber'),
         ),
      )
   );

   $wp_customize->add_setting(
      'codeweber_header_testimonial_angle',
      array(
         'default' => 'default',
      )
   );


   $wp_customize->add_control(
      'codeweber_header_testimonial_angle',
      array(
         'type' => 'radio',
         'label' => esc_html__('Angle Page Header', 'codeweber'),
         'section' => 'testimonials-section',
         'choices' => array(
            'true' => esc_html__('On', 'codeweber'),
            'false' => esc_html__('Off', 'codeweber'),
            'default' => esc_html__('Default', 'codeweber'),
         ),
      )
   );


   $wp_customize->add_setting(
      'codeweber_header_testimonial_bread_color',
      array(
         'default' => 'default',
      )
   );


   $wp_customize->add_control(
      'codeweber_header_testimonial_bread_color',
      array(
         'type' => 'radio',
         'label' => esc_html__('Text Page Header color', 'codeweber'),
         'section' => 'testimonials-section',
         'choices' => array(
            'white' => esc_html__('Light', 'codeweber'),
            'dark' => esc_html__('Dark', 'codeweber'),
            'default' => esc_html__('Default', 'codeweber'),
         ),
      )
   );

   $wp_customize->add_setting(
      'codeweber_page_testimonial_header',
      array(
         'default' => 'default',
      )
   );

   $wp_customize->add_control(
      'codeweber_page_testimonial_header',
      array(
         'type' => 'radio',
         'label' => esc_html__('Secondary Header', 'codeweber'),
         'section' => 'testimonials-section',
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
      'codeweber_page_testimonial_header_bg',
      array(
         'default'   => 'light',
      )
   );

   $wp_customize->add_control(
      'codeweber_page_testimonial_header_bg',
      array(
         'section'  => 'testimonials-section',
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


   // Image Background Testimonial Page Header
   $wp_customize->add_setting('image_control_seven', array(
      'default' => '',
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
   ));
   $wp_customize->add_control(
      new WP_Customize_Image_Control($wp_customize, 'image_control_seven', array(
         'label' => __('Page Header Testimonials Background', 'codeweber'),
         'section' => 'testimonials-section',
         'settings' => 'image_control_seven',
      ))
   );
}

add_action('customize_register', 'CPT_Testimonials_Settings');



/**
 * Testimonial autotitle
 */

function auto_generate_post_title($title)
{
   global $post;
   /** Проверка на Post Type */
   if (isset($post->post_type)) {
      $post_type = $post->post_type;
   }
   /** Проверка на Post Type Testimonials*/
   if (isset($post->ID) && $post_type == 'testimonials') {
      if (have_rows('testimonials_post_field')) {
         while (have_rows('testimonials_post_field')) {
            the_row();
            $post_id = get_the_ID();
            $name = get_sub_field('name', $post_id);
            $date = get_the_date();
         }
      }
      /** Формирование Title*/
      $title = 'Отзыв_' . $name . '_ID' . $post_id . '_' . $date;
   }
   return $title;
}

add_filter('title_save_pre', 'auto_generate_post_title');



function ReadMore($string, $link, $quantity_symbol)
{
   $string = strip_tags($string);
   if (strlen($string) > $quantity_symbol) {

      // truncate string
      $stringCut = substr($string, 0, $quantity_symbol);
      $endPoint = strrpos($stringCut, ' ');

      //if the string doesn't contain any space then it will cut without word basis.
      $string = $endPoint ? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
      $string .= '... <a href="' . $link . '" class="text-nowrap">' . esc_html__('Read More', 'codeweber') . '</a>';
   }
   return $string;
}
