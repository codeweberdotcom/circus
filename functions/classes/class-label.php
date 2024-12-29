<?php
//* --- Label Class ACF---

class LabelIcons
{
   public $root_theme = '';
   public $title = "25000+";
   public $paragraph = 'Happy Clients';
   public $icon = '<div class="icon btn btn-circle btn-md btn-soft-primary disabled mx-auto me-3"> <i class="uil uil-users-alt"></i></div>';
   public $icon_lg = '<div class="icon btn btn-circle btn-lg btn-soft-primary disabled mx-auto me-3"> <i class="uil uil-users-alt"></i></div>';
   public $color_icon = 'primary';
   public $default_card_body = '';
   public $pattern = NULL;
   public $icon_svg_classes = 'svg-inject icon-svg icon-svg-lg mx-auto me-4 mb-lg-3 mb-xl-0'; // на удаление
   public $icon_classes = 'icon btn btn-circle btn-lg disabled mx-auto me-4 mb-lg-3 mb-xl-0'; // на удаление

   public $iconpaddingclass = 'mx-auto me-4 mb-lg-3 mb-xl-0';

   public function GetLabel()
   {
      if (have_rows('label_on_banner')) :
         while (have_rows('label_on_banner')) : the_row();

            /*Settings */
            if (get_sub_field('label_title')) {
               $this->title = get_sub_field('label_title');
            }
            if (get_sub_field('label_text')) {
               $this->paragraph = get_sub_field('label_text');
            }
            // Select Color 

            $icon_color = new Color();
            $icon_color->ColorIcon();


            // Get icon
            $icon = new Icons;
            $icon->GetIcon();
            if (have_rows('type_icons')) :
               while (have_rows('type_icons')) : the_row();
                  if ($icon->icon_type == 'Unicons') :
                     $icon_block = '<div class="icon btn btn-circle btn-md btn-' . $icon_color->color_icon . ' disabled mx-auto me-3">' . get_sub_field('icon') . '</div>';
                  else :
                     $icon_block = '<img src="' . $this->root_theme . '/dist/img/icons/lineal/' . get_sub_field('icon_lineal_svg') . '.svg" class="svg-inject icon-svg icon-svg-sm text-' . $icon_color->color_icon . ' mx-auto me-3" alt=""/>
								';
                  endif; ?>
                  <div class="card-body py-4 px-5">
                     <div class="d-flex flex-row align-items-center">
                        <div>
                           <?php echo $icon_block; ?>
                        </div>
                        <div>
                           <h3 class="counter mb-0 text-nowrap"><?php echo $this->title; ?></h3>
                           <p class="fs-14 lh-sm mb-0 text-nowrap"><?php echo $this->paragraph; ?></p>
                        </div>
                     </div>
                  </div>
                  <!--/.card-body -->
               <?php
               endwhile;
            endif;
         endwhile;
      endif;
   }


   public function GetLabel_4()
   {
      if (have_rows('label_on_banner')) :
         while (have_rows('label_on_banner')) : the_row();
            if (get_sub_field('label_title')) {
               $this->title = get_sub_field('label_title');
            }
            if (get_sub_field('label_text')) {
               $this->paragraph = get_sub_field('label_text');
            }

            // Select Color 
            $icon_color = new Color();
            $icon_color->ColorIcon();

            // Get icon
            $icon = new Icons;
            $icon->GetIcon();

            if (have_rows('type_icons')) :
               while (have_rows('type_icons')) : the_row();
                  if ($icon->icon_type == 'Unicons') :
                     $icon_block = '<div class="icon btn btn-circle btn-lg btn-' . $icon_color->color_icon . ' disabled mx-auto me-4 mb-lg-3 mb-xl-0">' . get_sub_field('icon') . '</div>';
                  else :
                     $icon_block = '<img src="' . $this->root_theme . '/dist/img/icons/lineal/' . get_sub_field('icon_lineal_svg') . '.svg" class="svg-inject icon-svg icon-svg-lg text-' . $icon_color->color_icon . ' me-4 mb-lg-3 mb-xl-0"/>';
                  endif; ?>

                  <div class="col-md-6 col-lg-4">
                     <div class="card">
                        <div class="card-body">
                           <div class="d-flex flex-row align-items-center">
                              <div>
                                 <?php echo $icon_block; ?>
                              </div>
                              <div>
                                 <h3 class="counter mb-1"><?php echo $this->title; ?></h3>
                                 <p class="mb-0"><?php echo $this->paragraph; ?></p>
                              </div>
                           </div>
                        </div>
                        <!--/.card-body -->
                     </div>
                     <!--/.card -->
                  </div>
                  <!--/column -->
<?php
               endwhile;
            endif;
         endwhile;
      endif;
   }
   public function GetLabel_5()
   {
      if (have_rows('label_on_banner')) :
         while (have_rows('label_on_banner')) : the_row();
            if (get_sub_field('label_title')) {
               $this->title = get_sub_field('label_title');
            }
            if (get_sub_field('label_text')) {
               $this->paragraph = get_sub_field('label_text');
            }

            // Select Color 
            $icon_color = new Color();
            $icon_color->ColorIcon();
            $iconcolor = $icon_color->color_icon;

            // Get Icon
            $icon = new Icons;
            $icon->GetIcon();
            $this->iconsize = $icon->iconsize;


            // Get Link
            $link = new Links();
            $link->linkcolor = $this->linkcolor;
            $link_s = $link->Link();


            if (have_rows('type_icons')) :
               while (have_rows('type_icons')) : the_row();

                  if ($icon->icon_type == 'Unicons') :
                     $icon_block = '<div class="icon btn ' . $icon->iconform . ' btn-' . $this->iconsize . ' btn-' . $icon_color->color_icon . ' ' . $this->iconpaddingclass . ' ">' . $icon->icon . '</div>';
                  elseif ($icon->icon_type == 'SVG') :
                     $icon_block = '<img src="' . $icon->icon_url . '" class="svg-inject icon-svg icon-svg-' . $this->iconsize . ' text-' . $icon_color->base_color_icon . ' ' . $this->iconpaddingclass . '"/>';
                  elseif ($icon->icon_type == 'Number') :
                     $icon_block = '<span class="icon btn ' . $icon->iconform . ' btn-' . $this->iconsize . ' btn-' .   $icon_color->color_icon . ' ' . $this->iconpaddingclass . '"><span class="number fs-18">' . $icon->iconnumber . '</span></span>';
                  elseif ($icon->icon_type == 'None') :
                  endif;

                  $pattern = $this->pattern;
                  echo wp_sprintf($pattern, $this->title, $this->paragraph, $icon_block, $link_s); //> На дереве сидят 5 обезьян
               endwhile;
            endif;
         endwhile;
      endif;
   }
};
