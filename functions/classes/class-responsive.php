<?php
class ResponsiveCol
{
   public $col_sm = 'col-12';
   public $col_md = 'col-md-6';
   public $col_lg = 'col-lg-4';
   public $col_xl = 'col-lg-3';
   public $col_xxl = 'col-lg-3';
   public $class_responsive = NULL;

   public function responsives()
   {
      if (have_rows('responsive_setttings')) :
         while (have_rows('responsive_setttings')) : the_row();
            if (get_sub_field('mobile_sm')) {
               $this->col_sm = get_sub_field('mobile_sm');
            }
            if (get_sub_field('tablet_md')) {
               $this->col_md = get_sub_field('tablet_md');
            }
            if (get_sub_field('desktop_lg')) {
               $this->col_lg = get_sub_field('desktop_lg');
            }
         endwhile;
      endif;
      $this->class_responsive = $this->col_sm . ' ' . $this->col_md . ' ' . $this->col_lg;
      $class_responsive = $this->col_sm . ' ' . $this->col_md . ' ' . $this->col_lg;
      return $class_responsive;
   }
}
