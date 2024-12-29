<?php
//* --- Swiper Gallery Class ACF---

class SwiperSlider
{
   public $root_theme = '';
   public $default_imageurl = '/dist/img/photos/about7.jpg';

   public $class_swiper = 'swiper-container dots-over shadow-lg';
   public $data_nav = 'data-nav="true"';
   public $data_dots = 'data-dots="true"';
   public $data_margin = 'data-margin="5"';
   public $image_size = 'sandbox_hero_3';
   public $data_items_lg = 'data-items-lg="1"';
   public $data_items_md = 'data-items-md="1"';
   public $data_items_xs = 'data-items-xs="1"';
   public $data_items_xl = 'data-items-xl="1"';
   public $data_items_xxl = 'data-items-xxl="1"';
   public $data_autoplay = 'data-autoplay="false"';
   public $data_autoplaytime = 'data-autoplaytime="5000"';
   public $data_effect = 'data-effect="slide"';
   public $default_media = '';

   public function GetSwiper()
   { ?>
      <!-- swiper-container -->
      <?php
      $data_args = $this->data_nav . ' ' . $this->data_dots . ' ' . $this->data_margin . ' ' . $this->data_effect . ' ' . $this->data_autoplay . ' ' . $this->data_autoplaytime . ' ' . $this->data_items_lg . ' ' . $this->data_items_md . ' ' . $this->data_items_xs . ' ' . $this->data_items_xl . ' ' . $this->data_items_xxl; ?>
      <?php if (have_rows('gallery')) : ?>
         <div class="<?php echo $this->class_swiper; ?>" <?php echo $data_args; ?>>
            <div class="swiper">
               <div class="swiper-wrapper">
                  <?php while (have_rows('gallery')) : the_row(); ?>
                     <!-- swiper-items -->
                     <?php $video_or_photo = get_sub_field('photo_or_video');
                     if ($video_or_photo === 'Photo') :
                        $image = get_sub_field('photo');
                        $size = $this->image_size;
                        if ($image) :
                           $imageurl = esc_url($image['sizes'][$size]);
                           $imagealt = esc_attr($image['alt']); ?>
                           <div class="swiper-slide"><img src="<?php echo $imageurl; ?>" srcset="<?php echo $imageurl; ?>" class="rounded" alt="<?php echo $imagealt; ?>" /></div>
                        <?php endif;
                     elseif ($video_or_photo === 'Video') :
                        $videourl =  get_sub_field('video');
                        $poster_for_video = get_sub_field('poster_for_video');
                        if ($poster_for_video) :
                           $size = $this->image_size;
                           $video_poster_url = esc_url($poster_for_video['sizes'][$size]);
                           $video_poster_alt = esc_attr($poster_for_video['alt']);
                        endif; ?>
                        <div class="swiper-slide"><a href="<?php echo $videourl; ?>" class="btn btn-circle btn-light btn-play ripple mx-auto mb-5 position-absolute" style="top:50%; left: 50%; transform: translate(-50%,-50%); z-index:3;" data-glightbox data-gallery="hero"><i class="icn-caret-right text-dark"></i></a><img src="<?php echo $video_poster_url; ?>" srcset="<?php echo $video_poster_url; ?>" class="rounded" alt="<?php echo $video_poster_alt; ?>" /></div>
                     <?php endif; ?>
                     <!--/.swiper-items -->
                  <?php endwhile; ?>
               </div>
               <!--/.swiper-wrapper -->
            </div>
            <!--/.swiper -->
         </div>
         <!-- /.swiper-container -->
<?php else :
         echo $this->default_media;
      endif;
   }
};
