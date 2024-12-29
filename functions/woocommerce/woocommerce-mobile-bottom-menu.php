<?php
function add_mobile_bottom_menu()
{
?>
   <nav class="bg-light zindex-20 p-3 fixed-bottom d-lg-none rounded text-center">
      <div class="row">
         <div class="col">
            <a class="nav-link p-0" href="/"><i class="uil uil-home fs-20 text-ash"></i></a>
            <div class="fs-10 "><?php esc_html_e('Home', 'codeweber'); ?></div>
         </div>
         <div class="col">
            <a class="nav-link p-0" href="/shop/"><i class="uil uil-shop fs-20 text-ash"></i></i></a>
            <div class="fs-10 "><?php esc_html_e('Shop', 'codeweber'); ?></div>
         </div>
         <div class="col">
            <a class="nav-link p-0" href="/my-account/"><i class="uil uil-user-circle fs-20 text-ash"></i></a>
            <div class="fs-10 "><?php esc_html_e('Account', 'codeweber'); ?></div>
         </div>
         <div class="col">
            <a href="#" class="justify-content-center position-relative d-flex flex-row align-items-center" id="header-cart" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-cart">
               <i class="uil uil-shopping-cart fs-20 text-ash"></i>
               <span class="badge badge-cart bg-primary"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
            </a>
            <div class="fs-10 "><?php esc_html_e('Cart', 'codeweber'); ?></div>
         </div>
      </div>
   </nav>
<?php
}

if (get_field('woocommerce_mobile_menu', 'option') == 1) {
   add_action('codeweber_end_body', 'add_mobile_bottom_menu', 5);
}
