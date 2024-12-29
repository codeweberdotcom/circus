<?php
//* --- Counters Class ACF---

class Counter
{
   public $counters_default = NULL;
   public $textcolor = 'light';
   public function Counters()
   {
      if (have_rows('counters_block')) :
         while (have_rows('counters_block')) : the_row();
            if (have_rows('counter')) :
               while (have_rows('counter')) : the_row();
                  echo '<div class="col-6 col-lg-3">
                              <h3 class="counter counter-lg text-' . $this->textcolor . '">' . get_sub_field('number_counter') . '</h3>
                              <p class="text-' . $this->textcolor . '">' . get_sub_field('text_counter') . '</p>
                           </div>';
               endwhile;
            endif;
         endwhile;
      else :
         echo $this->counters_default;
      endif;
   }

   public function Counters_1()
   {
      if (have_rows('counters_block')) :
         while (have_rows('counters_block')) : the_row();
            if (have_rows('counter')) :
               while (have_rows('counter')) : the_row();
                  echo '<div class="col-md-4 text-center">
                              <h3 class="counter counter-lg text-' . $this->textcolor . '">' . get_sub_field('number_counter') . '</h3>
                              <p class="text-dark">' . get_sub_field('text_counter') . '</p>
                           </div>';
               endwhile;
            endif;
         endwhile;
      else :
         echo $this->counters_default;
      endif;
   }
   public function Counters_2()
   {
      if (have_rows('counters_block')) :
         while (have_rows('counters_block')) : the_row();
            if (have_rows('counter')) :
               while (have_rows('counter')) : the_row();
                  /**Color */
                  $color = new  Color;
                  $color->ColorIcon();
                  echo '<div class="col-md-6">
                        <div class="progressbar semi-circle ' . $color->color_icon . '" data-value="' . get_sub_field('number_counter') . '"></div>
                        <h4 class="mb-0">' . get_sub_field('text_counter') . '</h4>
                        </div>
                        <!-- /column -->';
               endwhile;
            endif;
         endwhile;
      else :
         echo $this->counters_default;
      endif;
   }
   public function Counters_3()
   {
      if (have_rows('counters_block')) :
         while (have_rows('counters_block')) : the_row();
            if (have_rows('counter')) :
               while (have_rows('counter')) : the_row();
                  /**Color */
                  $color = new  Color;
                  $color->ColorIcon();
                  echo '<div class="col-md-6 col-lg-3">
                        <div class="progressbar semi-circle ' . $color->color_icon . '" data-value="' . get_sub_field('number_counter') . '"></div>
                        <h4 class="mb-0">' . get_sub_field('text_counter') . '</h4>
								<p class="mb-0">' . get_sub_field('paragraph_counter') . '</p>
                        </div>
                        <!-- /column -->';
               endwhile;
            endif;
         endwhile;
      else :
         echo $this->counters_default;
      endif;
   }
}
