<?php

/** List */

class ListUnicon
{
   public $paragraph = 'Aenean quam ornare curabitur blandit consectetur.';
   public $icon = '<i class="uil uil-check"></i>';
   public $color_icon = '-soft-leaf';
   public $default_list = '';
   public $listtrue = NULL;

   public function __construct()
   {
      if (have_rows('list_icon')) :
         $this->listtrue = '1';
      endif;
   }

   public function listunicons()
   {
      if (have_rows('list_icon')) :
         while (have_rows('list_icon')) : the_row();
            $responsive = new ResponsiveCol;
            $responsiveclass = $responsive->responsives();

            /**Color */
            $color = new  Color;
            $color->ColorIcon();

            if (have_rows('list')) : ?>
               <div class="row gy-3">
                  <?php while (have_rows('list')) : the_row();

                     get_sub_field('icon') != NULL ? $icon = get_sub_field('icon') : $icon = '<i class="uil uil-check"></i>';
                  ?>
                     <div class="<?php echo $responsiveclass; ?>">
                        <ul class="icon-list bullet-bg bullet-<?php echo $color->color_icon; ?> mb-0 ">
                           <li class=""><span><?php echo $icon; ?></span><span><?php the_sub_field('paragraph'); ?></span></li>
                        </ul>
                     </div>
                  <?php endwhile; ?>
               </div>
               <!--/row -->
            <?php else :
               echo $this->default_list; ?>
<?php endif;
         endwhile;
      endif;
   }
}
