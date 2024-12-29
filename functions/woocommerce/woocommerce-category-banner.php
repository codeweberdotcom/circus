<?php
function add_woo_banner()
{
?>
   <div class="swiper-container mb-10 rounded" data-margin="24" data-nav="false" data-dots="false" data-items-xl="2" data-items-md="2" data-items-xs="1">
      <div class="swiper">
         <div class="swiper-wrapper">
            <div class="swiper-slide rounded">
               <img src="https://via.placeholder.com/600x200.jpeg" />
            </div>
            <!--/.swiper-slide -->
            <div class="swiper-slide rounded">
               <img src="https://via.placeholder.com/600x200.jpeg" />
            </div>
            <!--/.swiper-slide -->
            <div class="swiper-slide rounded">
               <img src="https://via.placeholder.com/600x200.jpeg" />
            </div>
            <!--/.swiper-slide -->
            <div class="swiper-slide rounded">
               <img src="https://via.placeholder.com/600x200.jpeg" />
            </div>
            <!--/.swiper-slide -->
            <div class="swiper-slide rounded">
               <img src="https://via.placeholder.com/600x200.jpeg" />
            </div>
            <!--/.swiper-slide -->
         </div>
         <!--/.swiper-wrapper -->
      </div>
      <!-- /.swiper -->
   </div>
   <!-- /.swiper-container -->
<?php
}
add_action('woocommerce_before_main_content', 'add_woo_banner', 200);
?>