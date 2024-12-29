<?php

function cta_footer_button()
{
   if (have_rows('', 'option')) {
      while (have_rows('', 'option')) {
         the_row();
         $button_object = new CW_Buttons(NULL, NULL, NULL, NULL);
         echo $button_object->final_buttons;
      }
   }
}

function cta_footer_text()
{
   if (have_rows('', 'option')) {
      while (have_rows('', 'option')) {
         the_row();
         the_sub_field('cta_text');
      }
   }
}

/**
 * About company widget offcanvas
 */
function footer_about_company_option()
{
   if (get_field('about_company', 'option')) {
      $about_company_option = '<p class="mb-0">' . get_field('about_company', 'option') . '</p>';
   } else {
      $about_company_option = NULL;
   }
   return $about_company_option;
}


/* Footer Year */
function year_of_birth_company()
{
   if (get_field('year_of_birth_of_the_company', 'option')) {
      $year_of_bth_comp = '© ' . get_field('year_of_birth_of_the_company', 'option') . '-' . date("Y") . ' ' . esc_html__('Made with', 'codeweber') . ' ' . esc_attr(wp_get_theme()->get('Author'));
   } else {
      $year_of_bth_comp = '© ' . date("Y") . ' ' . esc_html__('Made with', 'codeweber') . ' ' . esc_attr(wp_get_theme()->get('Author'));
   }
   return $year_of_bth_comp;
}
