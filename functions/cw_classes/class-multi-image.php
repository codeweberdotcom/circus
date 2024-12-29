<?php

//* ---Background Class ACF---

class CW_MultiImage
{
   public $root_theme;
   public $images_array;
   public $final_images_array;


   public function __construct($images_array)
   {
      $this->root_theme = get_template_directory_uri();
      $this->images_array = $this->cw_images_array($images_array);
      $this->final_images_array = $this->cw_final_images_array($images_array);
   }


   //Image Array
   public function cw_images_array($images_array)
   {
      $cw_images_array = $images_array;
      return $cw_images_array;
   }

   //Final Image Array
   public function cw_final_images_array($images_array)
   {



      $demo_image_array = array();
      foreach ($images_array as $img_array) {

         //Image Link
         if (isset($img_array[0])) {
            $image_link = $img_array[0];
         } else {
            $image_link = NULL;
         }

         //Image Thumb Size
         if (isset($img_array[1])) {
            $image_thumb_size = $img_array[1];
         } else {
            $image_thumb_size = NULL;
         }

         //Image Big Size
         if (isset($img_array[2])) {
            $image_big_size = $img_array[2];
         } else {
            $image_big_size = NULL;
         }

         //Image Pattern
         if (isset($img_array[3]) && isset($img_array[3]) !== NULL) {
            $image_pattern = $img_array[3];
         } else {
            $image_pattern = NULL;
         }

         //Image Demo
         if (isset($img_array[4])) {
            $image_demo = $img_array[4];
         } else {
            $image_demo = NULL;
         }


         //Get Image Size
         // $size = getimagesize(get_template_directory_uri() . $image_link);
         // echo $size[3];



         $image_object = new CW_Image($image_thumb_size, $image_big_size, NULL, $image_link, NULL, NULL, NULL, NULL, $image_demo, $image_pattern, NULL);

         $demo_image_array[] = $image_object->final_image;
      }


      if (have_rows('cw_multi_image')) {
         $row_num = 0;
         $final_images_array = array();
         while (have_rows('cw_multi_image')) {
            the_row();

            //Image Thumb Size
            if (isset($images_array[$row_num][1])) {
               $image_thumb_size = $images_array[$row_num][1];
            } else {
               $image_thumb_size = NULL;
            }

            //Image Link
            if (isset($images_array[$row_num][0])) {
               $image_link = $images_array[$row_num][0];
            } else {
               $image_link = NULL;
            }

            //Image Big Size
            if (isset($images_array[$row_num][2])) {
               $image_big_size = $images_array[$row_num][2];
            } else {
               $image_big_size = NULL;
            }

            //Image Pattern
            if (isset($images_array[$row_num][3]) && $images_array[$row_num][4] !== NULL) {
               $image_pattern = $images_array[$row_num][3];
            } else {
               $image_pattern = NULL;
            }

            //Image Demo
            if (isset($images_array[$row_num][4]) && $images_array[$row_num][4] !== NULL) {
               $image_demo = $images_array[$row_num][4];
            } else {
               $image_demo = NULL;
            }

            $image_object = new CW_Image($image_thumb_size, $image_big_size, NULL, $image_link, NULL, NULL, NULL, NULL, $image_demo, $image_pattern, NULL);
            $demo_image_array[$row_num] =  $image_object->final_image;
            $final_images_array[] = $image_object->final_image;
            $row_num++;
         }
      } else {
         $final_images_array = NULL;
      }

      return $demo_image_array;
   }
}
