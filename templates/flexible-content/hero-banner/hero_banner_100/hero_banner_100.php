<?php
$hero_banner = new HeroSlider;
$hero_banner->root_theme = get_template_directory_uri();
?>

<div id="<?php echo esc_attr($id); ?>" class="swiper-container dots-over " data-loop="true" data-effect="fade" data-margin="0" data-autoplay="true" data-autoplaytime="5000" data-nav="true" data-dots="true" data-items="1">
  <div class="swiper">
    <div class="swiper-wrapper">
      <!-- swiper items -->
      <?php $hero_banner->heroslideritems1() ?>
      <!-- /.swiper items -->
    </div>
    <!--/.swiper-wrapper -->
  </div>
  <!-- /.swiper -->
</div>
<!-- /.swiper-container -->