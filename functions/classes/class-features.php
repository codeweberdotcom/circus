<?php
//* --- Features Class ACF---

class Features
{
   public $root_theme = '';
   public $title = '24/7 Support';
   public $paragraph = 'Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus. Cras justo.';
   public $link_url = "#";
   public $link_text = "Learn more";
   public $default_features = '';
   public $pattern = NULL;
   public $iconsize = NULL;
   public $iconpaddingclass = NULL;
   public $iconform = NULL;
   public $linkcolor = NULL;
   public $iconcolor = NULL;

   function __construct()
   {
      $this->root_theme = get_template_directory_uri();
   }
   //* Function Feutures *//
   public function Feutures()
   {
      $i = 0;
      if (have_rows('features_block')) :
         while (have_rows('features_block')) : the_row();
            if (have_rows('features_item')) :
               while (have_rows('features_item')) : the_row();

                  // Select Color 
                  $icon_color = new Color();
                  $icon_color->ColorIcon();
                  $iconcolor = $icon_color->color_icon;

                  // Select Icon
                  $icon = new Icons();
                  $icon->GetIcon();
                  $this->iconsize = $icon->iconsize;

                  if ($icon->icon_type == 'Unicons') :
                     $icon_block = '<div class="icon btn ' . $icon->iconform . ' btn-' . $this->iconsize . ' btn-' . $icon_color->color_icon . ' ' . $this->iconpaddingclass . ' ">' . $icon->icon . '</div>';
                  elseif ($icon->icon_type == 'SVG') :
                     $icon_block = '<img src="' . $icon->icon_url . '" class="svg-inject icon-svg icon-svg-' . $this->iconsize . ' text-' . $icon_color->base_color_icon . ' ' . $this->iconpaddingclass . '"/>';
                  elseif ($icon->icon_type == 'Number') :
                     $icon_block = '<span class="icon btn ' . $icon->iconform . ' btn-' . $this->iconsize . ' btn-' .   $icon_color->color_icon . ' ' . $this->iconpaddingclass . '"><span class="number fs-18">' . $icon->iconnumber . '</span></span>';
                  elseif ($icon->icon_type == 'None') :
                  endif;

                  if (get_sub_field('title')) {
                     $this->title = get_sub_field('title');
                  }
                  if (get_sub_field('paragraph')) {
                     $this->paragraph = get_sub_field('paragraph');
                  }

                  $link = new Links();
                  $link->linkcolor = $this->linkcolor;
                  $link_s = $link->Link();
                  echo wp_sprintf($this->pattern, $this->title, $this->paragraph, $icon_block, $link_s, $iconcolor); //> На дереве сидят 5 обезьян
                  $i++;
               endwhile;

            endif;
         endwhile;
      else :
         echo $this->default_features; ?>
      <?php endif; ?>
      <?php
   }

   //* Function Feutures *//
   public function Feutures_01()
   {
      $i = 0;
      if (have_rows('features_block')) :
         while (have_rows('features_block')) : the_row();
            if (have_rows('features_item')) :
               while (have_rows('features_item')) : the_row();

                  // Select Color 
                  $icon_color = new Color();
                  $icon_color->ColorIcon();
                  $iconcolor = $icon_color->color_icon;

                  // Select Icon
                  $icon = new Icons();
                  $icon->GetIcon();

                  if ($icon->icon_type == 'Unicons') :
                     $icon_block = '<div class="icon btn ' . $icon->iconform . ' btn-' . $this->iconsize . ' btn-' . $icon_color->color_icon . ' ' . $this->iconpaddingclass . ' ">' . $icon->icon . '</div>';
                  elseif ($icon->icon_type == 'SVG') :
                     $icon_block = '<img src="' . $icon->icon_url . '" class="svg-inject icon-svg icon-svg-' . $this->iconsize . ' text-' . $icon_color->color_icon . ' ' . $this->iconpaddingclass . '"/>';
                  elseif ($icon->icon_type == 'Number') :
                     $icon_block = '<span class="icon btn ' . $icon->iconform . ' btn-' . $this->iconsize . ' btn-' .   $icon_color->color_icon . ' ' . $this->iconpaddingclass . '"><span class="number">' . $icon->iconnumber . '</span></span>';
                  elseif ($icon->icon_type == 'None') :

                  endif;

                  if (get_sub_field('title')) {
                     $this->title = get_sub_field('title');
                  }
                  if (get_sub_field('paragraph')) {
                     $this->paragraph = get_sub_field('paragraph');
                  }

                  $link = new Links();
                  $link->linkcolor = $this->linkcolor;
                  $link_s = $link->Link();

                  if ($i == 0) {
                     $this->pattern = '<div class="col-md-5 offset-md-1 align-self-end"><div class="card bg-pale-%5$s"><div class="card-body">%3$s<h4>%1$s</h4><p class="mb-0">%2$s</p>%4$s</div><!--/.card-body --></div><!--/.card --></div><!--/column -->';
                  } elseif ($i == 1) {
                     $this->pattern = '<div class="col-md-6 align-self-end"><div class="card bg-pale-%5$s"><div class="card-body">%3$s<h4>%1$s</h4><p class="mb-0">%2$s</p>%4$s</div><!--/.card-body --></div><!--/.card --></div><!--/column -->';
                  } elseif ($i == 2) {
                     $this->pattern = '<div class="col-md-5"><div class="card bg-pale-%5$s"><div class="card-body">%3$s<h4>%1$s</h4><p class="mb-0">%2$s</p>%4$s</div><!--/.card-body --></div><!--/.card --></div><!--/column -->';
                  } elseif ($i == 3) {
                     $this->pattern = '<div class="col-md-6 align-self-start"><div class="card bg-pale-%5$s"><div class="card-body">%3$s<h4>%1$s</h4><p class="mb-0">%2$s</p>%4$s</div><!--/.card-body --></div><!--/.card --></div><!--/column -->';
                  }

                  echo wp_sprintf($this->pattern, $this->title, $this->paragraph, $icon_block, $link_s, $iconcolor); //> На дереве сидят 5 обезьян
                  $i++;
               endwhile;

            endif;
         endwhile;
      else :
         echo $this->default_features;
      ?>
      <?php endif; ?>
      <?php
   }

   public function Testimonials_01()
   {
      $testimonials_loop = get_sub_field('testimonials_loop');
      if ($testimonials_loop) :
         $i = 0;
         foreach ($testimonials_loop as $post_ids) :
            if (have_rows('testimonials', $post_ids)) :
               while (have_rows('testimonials', $post_ids)) : the_row();
                  $photo = get_sub_field('photo'); ?>
                  <?php if ($photo) : ?>
                     <img src="<?php echo esc_url($photo['url']); ?>" alt="<?php echo esc_attr($photo['alt']); ?>" />
<?php
                  endif;

                  if (get_sub_field('name')) {
                     $this->title = get_sub_field('name');
                  }
                  if (get_sub_field('testimonial')) {
                     $this->paragraph = get_sub_field('testimonial');
                  }
                  if (get_sub_field('town')) {
                     $this->town = get_sub_field('town');
                  }

                  if ($i == 0) {
                     $this->pattern = '<div class="col-md-6 col-xl-5 align-self-end"><div class="card bg-pale-yellow"><div class="card-body">
   <blockquote class="icon mb-0">
            <p>“%2$s”
            </p>
            <div class="blockquote-details">
               <div class="info p-0">
                  <h5 class="mb-1">%1$s</h5>
                  <p class="mb-0">%3$s</p>
               </div>
            </div>
         </blockquote>
      </div>
      <!--/.card-body -->
   </div>
   <!--/.card -->
  </div>
  <!--/column -->';
                  } elseif ($i == 1) {
                     $this->pattern = '<div class="col-md-6 align-self-end">
   <div class="card bg-pale-red">
      <div class="card-body">
         <blockquote class="icon mb-0">
            <p>“%2$s”</p>
            <div class="blockquote-details">
               <div class="info p-0">
                  <h5 class="mb-1">%1$s</h5>
                  <p class="mb-0">%3$s</p>
               </div>
            </div>
         </blockquote>
      </div>
      <!--/.card-body -->
   </div>
   <!--/.card -->
  </div>
  <!--/column -->';
                  } elseif ($i == 2) {
                     $this->pattern = '<div class="col-md-6 col-xl-5 offset-xl-1">
   <div class="card bg-pale-leaf">
      <div class="card-body">
         <blockquote class="icon mb-0">
            <p>“%2$s”</p>
            <div class="blockquote-details">
               <div class="info p-0">
                  <h5 class="mb-1">%1$s</h5>
                  <p class="mb-0">%3$s</p>
               </div>
            </div>
         </blockquote>
      </div>
      <!--/.card-body -->
   </div>
   <!--/.card -->
  </div>
  <!--/column -->';
                  } elseif ($i == 3) {
                     $this->pattern = '<div class="col-md-6 align-self-start">
   <div class="card bg-pale-blue">
      <div class="card-body">
         <blockquote class="icon mb-0">
            <p>“%2$s”</p>
            <div class="blockquote-details">
               <div class="info p-0">
                  <h5 class="mb-1">%1$s</h5>
                  <p class="mb-0">%3$s</p>
               </div>
            </div>
         </blockquote>
      </div>
      <!--/.card-body -->
   </div>
   <!--/.card -->
  </div>
  <!--/column -->';
                  }



               endwhile;
            endif;
            echo wp_sprintf($this->pattern, $this->title, $this->paragraph, $this->town); //> На дереве сидят 5 обезьян

            $i++;
         endforeach;
      endif;
   }
}
