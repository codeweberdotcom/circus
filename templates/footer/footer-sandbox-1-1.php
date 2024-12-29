  <footer class="bg-dark" id="contacts">
     <div class="container pt-14 pb-7">
        <div class="row gx-lg-0 gy-6">
           <div class="col-lg-6">
              <div class="row">
                 <div class="col-lg-12 col-xl-10 col-xxl-10">
                    <h2 class="fs-16 text-uppercase text-secondary mb-3">Цирк Космос</h2>
                    <h3 class="display-1 mb-5 text-white">Контакты</h3>
                    <div class="text-inverse mb-3"><?php echo footer_about_company_option(); ?></div>
                    
                 </div>
              </div>
           </div>
           <!-- /column -->
           <div class="col-lg-3 mt-lg-18">
              <div class="widget">
                 <div class="d-flex flex-row">
                    <div>
                       <div class="icon fs-28 me-4 mt-n1">
                          <div style="cursor: default;" class="btn btn-circle btn-outline-white btn-lg"> <i class="uil uil-location-pin-alt"></i></div>
                       </div>
                    </div>
                    <div class="align-self-start justify-content-start">
                       <h5 class="mb-3 fs-24 text-white">Адрес</h5>
                       <address class="fs-17 text-inverse"><?php echo brk_adress(); ?></address>
                    </div>
                 </div>
                 <!--/div -->
              </div>
              <!-- /.widget -->
           </div>
           <!-- /column -->
           <div class="col-lg-3 mt-lg-18">
              <div class="widget">
                 <div class="d-flex flex-row">
                    <div class="icon fs-28 me-4 mt-n1">
                       <div style="cursor: default;" class="btn btn-circle btn-outline-white btn-lg"> <i class="uil uil-phone-volume"></i></div>
                    </div>
                    <div class="fs-22">
                       <h5 class="mb-3 fs-24 text-white">Контакты</h5>
                       <a class="fs-17 text-inverse" href="mailto:<?php echo brk_email(); ?>"><?php echo brk_email(); ?></a><br />
                       <div class="text-inverse">
                          <?php echo brk_phone_one(NULL); ?><br />
                          <?php echo brk_phone_two(NULL); ?><br />
                       </div>
                    </div>
                 </div>
                 <!--/div -->
              </div>
              <!-- /.widget -->
           </div>
           <!-- /column -->
        </div>
        <!--/.row -->
        <hr class="my-7">
        <div class="row">
           <div class="col-12 d-flex justify-content-center">
              <?php social_icons_option_1(); ?>
           </div>
           <!-- /column -->
        </div>
        <hr class="my-7">
        <div class="row">
           <div class="col-12 mb-8 d-flex justify-content-center">
              <div class="d-md-flex align-items-center justify-content-center text-center">
                 <p class="mb-4"><span class="text-white-50">
                       © <?php echo date("Y"); ?> <?php the_field('company', 'option'); ?></span>
                    <br class="d-none d-lg-block" /><?php esc_html_e('All rights reserved.', 'codeweber'); ?>
                 </p>
              </div>
              <!-- /column -->
           </div>
        </div>
     </div>
     <!-- /.container -->
  </footer>