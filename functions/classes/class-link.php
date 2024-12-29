<?php
// --- Links Class ACF---

class Links
{
   public $linkurl = '#';
   public $linktext = 'Learn More';
   public $linkcolor = 'text-primary';
   public $linkstyle = 'hover';
   public $linktype = 'more';

   public function Link()
   {
      if (have_rows('link_text')) :
         while (have_rows('link_text')) : the_row();
            if (get_sub_field('text_link')) :
               $this->linktext = get_sub_field('text_link');
            endif;
            if (get_sub_field('style_link') == 'hover') :
               $this->linkstyle = 'hover';
            elseif (get_sub_field('style_link') == 'hover-2') :
               $this->linkstyle = 'hover-2';
            elseif (get_sub_field('style_link') == 'hover-3') :
               $this->linkstyle = 'hover-3';
            endif;
            if (get_sub_field('theme_btn_solid_color')) :
               $this->linkcolor = get_sub_field('theme_btn_solid_color');
            endif;
            if (get_sub_field('type_link') == 'link-body') :
               $this->linktype = 'link-body';
            elseif (get_sub_field('type_link') == 'default') :
               $this->linktype = NULL;
            elseif (get_sub_field('type_link') == 'more') :
               $this->linktype = 'more';
            endif;
            $link = get_sub_field('link');
            if ($link) :
               $this->linkurl = esc_url($link);
            endif;
            if (get_sub_field('text_link')) {
               $link_s = '<a href="' . $this->linkurl . '" class="' . $this->linkstyle . ' ' . $this->linktype . ' link-' . $this->linkcolor . '">' . $this->linktext . '</a>';
            } else {
               $link_s = NULL;
            }
         endwhile;
      endif;
      return $link_s;
   }
}
