<?php
//* --- Images Class ACF---

class Images
{
   public $root_theme = '';
   public $image_1 = '';
   public $image_2 = '';
   public $image_3 = '';
   public $image_4 = '';
   public $image_5 = '';
   public $image_6 = '';
   public $image_7 = '';
   public $image_size = 'large';

   public function GetImage()
   {
      $image = get_sub_field('image_1');
      if ($image) :
         $size = $this->image_size;
         $imageurl = esc_url($image['sizes'][$size]);
         $imagealt = esc_attr($image['alt']);
         $this->image_1 = $imageurl;
      endif;

      $image = get_sub_field('image_2');
      if ($image) :
         $size = $this->image_size;
         $imageurl = esc_url($image['sizes'][$size]);
         $imagealt = esc_attr($image['alt']);
         $this->image_2 = $imageurl;
      endif;

      $image = get_sub_field('image_3');
      if ($image) :
         $size = $this->image_size;
         $imageurl = esc_url($image['sizes'][$size]);
         $imagealt = esc_attr($image['alt']);
         $this->image_3 = $imageurl;
      endif;

      $image = get_sub_field('image_4');
      if ($image) :
         $size = $this->image_size;
         $imageurl = esc_url($image['sizes'][$size]);
         $imagealt = esc_attr($image['alt']);
         $this->image_4 = $imageurl;
      endif;


      $image = get_sub_field('image_5');
      if ($image) :
         $size = $this->image_size;
         $imageurl = esc_url($image['sizes'][$size]);
         $imagealt = esc_attr($image['alt']);
         $this->image_5 = $imageurl;
      endif;

      $image = get_sub_field('image_6');
      if ($image) :
         $size = $this->image_size;
         $imageurl = esc_url($image['sizes'][$size]);
         $imagealt = esc_attr($image['alt']);
         $this->image_6 = $imageurl;
         echo $imageurl;
      endif;
   }
}
