<?php
/* FAQ Class ACF*/

class FAQ
{
   public $root_theme = '';
   public $col_faq = 'col-lg-6';
   public $text_color = 'light';
   public $default_template = NULL;
   public $pattern = '<div class="col-md-6 col-lg-4">
							<div class="card">
								<div class="card-body">
									<div class="d-flex flex-row align-items-center">
										<div>
										%3$s
										</div>
										<div>
											<h3 class="counter mb-1">%1$s</h3>
											<p class="mb-0">%2$s</p>
										</div>
									</div>
								</div>
								<!--/.card-body -->
							</div>
							<!--/.card -->
						</div>
						<!--/column -->';
   public $icon_classes = 'icon btn btn-circle btn-lg btn-soft-red disabled mx-auto me-4 mb-lg-3 mb-xl-0';

   //* Function FAQ5 *//
   public function Faq5()
   {
      $array_bool =  is_array(get_sub_field('faq_repeater')) ? 'true' : 'false';
      if ($array_bool == 'true') :
         $count_row = count(get_sub_field('faq_repeater'));
      elseif ($array_bool == 'false') :
         $count_row = NULL;
      endif;
      if (!$count_row == NULL) :
         if (have_rows('faq_repeater')) :
            while (have_rows('faq_repeater')) : the_row();

               /**Color */
               $color = new  Color;
               $color->ColorIcon();

               /**Icons */
               $icons = new Icons;
               $icons->GetIcon();
               $icons_url = $icons->icon_url;
               $icon = $icons->icon;
               $icon_type = $icons->icon_type;

               /* Settings */
               $this->title = get_sub_field('title');
               $this->paragraph = get_sub_field('paragraph');

               /* Content item */ ?>
               <div class="<?php echo $this->col_faq; ?>">
                  <div class="d-flex flex-row">
                     <div>
                        <?php if ($icon_type == 'Unicons') : ?>
                           <span class="icon btn btn-sm btn-circle btn-<?php echo $color->color_icon; ?> disabled me-5"><?php echo $icon; ?></span>
                        <?php elseif ($icon_type == 'SVG') : ?>
                           <img src=" <?php echo $icons_url; ?>" class="svg-inject icon-svg icon-svg-md text-<?php echo $color->color_icon; ?> me-4" alt="" />
                        <?php endif; ?>
                     </div>
                     <div>
                        <h4 class="text-<?php echo $this->text_color; ?>"><?php the_sub_field('title'); ?></h4>
                        <p class="text-<?php echo $this->text_color; ?> mb-0"><?php the_sub_field('paragraph'); ?></p>
                     </div>
                  </div>
               </div>
               <!-- /column -->
<?php endwhile;
         endif;
      else :
         echo $this->default_template;
      endif;
   }

   public function Facts_3()
   {
      if (have_rows('facts_repeater')) :
         while (have_rows('facts_repeater')) : the_row();
            $label_icons = new LabelIcons;
            $label_icons->pattern = $this->pattern;
            $label_icons->icon_svg_classes = $this->icon_svg_classes;
            $label_icons->icon_classes = $this->icon_classes;

            $label_icons->iconpaddingclass = $this->iconpaddingclass;
            $label_icons->root_theme = get_template_directory_uri();
            echo $label_icons->GetLabel_5();
         endwhile;
      else :
         echo $this->default_template;
      endif;
   }
}
