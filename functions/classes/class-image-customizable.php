<?php
class ImageCustomizable
{
   public $root_theme = NULL;
   public $title = '';
   public $description = '';
   public $imagebig = '';
   public $imagesmall = '';
   public $imagelink = '#';

   public $imagebigsize = 'brk_big';
   public $imagethumbsize = 'sandbox_youtube_mq';

   public $imagelightbox = 'false';

   public $imageeffectcursor = 'primary';
   public $titleclass = 'from-top mb-1';
   public $descriptionclass = 'from-bottom';
   public $figureclass = '';
   public $overlayclass = '';
   public $hoverclass = '';
   public $hovergradient = '';
   public $imagealt = '';

   function __construct()
   {
      $this->root_theme = get_template_directory_uri();
   }
   function image()
   {
      if (have_rows('image_customizable')) : ?>
         <?php
         while (have_rows('image_customizable')) : the_row();
            $this->title = get_sub_field('caption_image');
            $this->figureclass = 'title = "' . get_sub_field('caption_image') . '"';
            $this->description = get_sub_field('description_image');
            if (get_sub_field('effect_overlay')) {
               $this->overlayclass = get_sub_field('effect_overlay') . ' ';
            }
            if (get_sub_field('effect_hover')) {
               $this->hoverclass = get_sub_field('effect_hover') . ' ';
            }
            if (get_sub_field('gradient')) {
               $this->hovergradient = get_sub_field('gradient') . ' ';
            }

            if (get_sub_field('cursor_effect')) {
               $this->imageeffectcursor =  get_sub_field('cursor_effect') . ' ';
            }

            if (get_sub_field('link')) {
               $this->imagelink = get_sub_field('link');
            }
            if (get_sub_field('cursor_effect') == 'overlay overlay-1') {
               $this->titleclass = 'from-top mb-0';
               $this->figureclass = '';
            } elseif (get_sub_field('cursor_effect') == 'overlay overlay-2') {
               $this->titleclass = 'from-top mb-1';
               $this->descriptionclass = 'from-bottom';
               $this->figureclass = '';
            } elseif (get_sub_field('cursor_effect') == 'overlay overlay-3') {
               $this->titleclass = 'from-left mb-1';
               $this->descriptionclass = 'from-left mb-0';
               $this->figureclass = '';
            } elseif (get_sub_field('cursor_effect') == 'cursor-dark') {
               $this->figureclass = '';
            } elseif (get_sub_field('cursor_effect') == 'cursor-light') {
               $this->figureclass = '';
            } elseif (get_sub_field('cursor_effect') == 'cursor-primary') {
               $this->figureclass = '';
            }

            if (get_sub_field('image')) {
               $image = get_sub_field('image');
               $this->imagealt = $image['alt'];
               $this->imagesmall = $image['sizes'][$this->imagethumbsize];
               $this->imagebig = $image['sizes'][$this->imagebigsize];
            }
            $classcursoreffect = '';
            if (get_sub_field('cursor_effect')) {
               $classcursoreffect = get_sub_field('cursor_effect') . ' ';
               $this->overlayclass = '';
            }
            if (get_sub_field('cursor_effect') == 'cursor-light' || get_sub_field('cursor_effect') == 'cursor-dark' || get_sub_field('cursor_effect') == 'cursor-primary') {
               $this->title = '';
            }
            $glightbox = 'data-glightbox data-gallery="g1"';
            if (get_sub_field('link_type') == 'image') {
               $this->imagelink = $this->imagebig;
            } elseif (get_sub_field('link_type') == 'video') {
               $this->imagelink = get_sub_field('link_video');
            } elseif (get_sub_field('link_type') == 'link') {
               $this->imagelink = get_sub_field('link');
               $glightbox = '';
            } elseif (get_sub_field('link_type') == 'youtube') {
               $youtubeid = getYoutubeIdFromUrl(get_sub_field('link_video'));
               $this->imagesmall = 'https://img.youtube.com/vi/' . $youtubeid . '/hqdefault.jpg';
               $this->imagelink = get_sub_field('link_video');
            } ?>
            <?php
            if (get_sub_field('cursor_effect') !== 'itooltip itooltip-light' || get_sub_field('cursor_effect') !== 'itooltip itooltip-dark' || get_sub_field('cursor_effect') !== 'itooltip itooltip-primary') {
            } ?>
            <figure class="<?php echo $classcursoreffect; ?><?php echo $this->overlayclass; ?><?php echo $this->hovergradient; ?><?php echo $this->hoverclass; ?>rounded" <?php echo $this->figureclass; ?>>
               <?php if (get_sub_field('link_type') != 'none') { ?>
                  <a href="<?php echo $this->imagelink; ?>" <?php echo $glightbox; ?>>
                  <?php }

               if (get_sub_field('link_type') == 'video' || get_sub_field('link_type') == 'youtube') { ?>

                     <div class="wrapper-video position-absolute" style="z-index: 5; top: 50%; left: 50%; filter: drop-shadow(3px 2px 5px #00000078);">
                        <button type="button" style="display: block;" class="plyr__control plyr__control--overlaid" data-plyr="play" aria-label="Play"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                              <path d="M361 215C375.3 223.8 384 239.3 384 256C384 272.7 375.3 288.2 361 296.1L73.03 472.1C58.21 482 39.66 482.4 24.52 473.9C9.377 465.4 0 449.4 0 432V80C0 62.64 9.377 46.63 24.52 38.13C39.66 29.64 58.21 29.99 73.03 39.04L361 215z" fill="#555" />
                           </svg><span class="plyr__sr-only">Play</span></button>
                     </div>
                  <?php }  ?>

                  <img src="<?php echo $this->imagesmall; ?>" srcset="<?php echo $this->imagesmall; ?> 2x" alt="<?php echo $this->imagealt; ?>" />
                  <?php if (get_sub_field('cursor_effect') !== 'itooltip itooltip-light' || get_sub_field('cursor_effect') !== 'itooltip itooltip-dark' || get_sub_field('cursor_effect') !== 'itooltip itooltip-primary') { ?>
                     <?php if (get_sub_field('link_type') != 'none') { ?>
                  </a>
               <?php } ?>
               <?php if (
                        get_sub_field('cursor_effect') == 'overlay overlay-1' || get_sub_field('cursor_effect') == 'overlay overlay-2' ||
                        get_sub_field('cursor_effect') == 'overlay overlay-3'
                     ) { ?>
                  <figcaption>
                     <h5 class="<?php echo $this->titleclass ?>"><?php echo $this->title; ?></h5>
                     <?php if (get_sub_field('cursor_effect') == 'overlay overlay-2' || get_sub_field('cursor_effect') == 'overlay overlay-3') { ?>
                        <p class="<?php echo $this->descriptionclass; ?>"><?php echo $this->description; ?></p>
                     <?php } ?>
                  </figcaption>
               <?php   } ?>
            <?php   } ?>
            <!--/column -->
<?php endwhile;
      endif;
   }
}
