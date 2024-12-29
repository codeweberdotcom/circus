<section id="<?php echo esc_html($args['block_id']); ?>" class="wrapper bg-light d-flex flex-wrap <?php echo esc_html($args['block_class']); ?>">

   <div class="container py-0 order-2">
      <?php $towns = get_sub_field('towns'); ?>
      <?php if ($towns) : ?>
         <?php $num = 1; ?>
         <?php foreach ($towns as $term) : ?>
            <article id="<?php echo $term->slug; ?>">
               <div class="container py-14 py-md-16 pb-md-0">
                  <div class="row gx-lg-0 gy-10 ">
                     <div class="col-lg-3">
                        <h2 class="display-4 mb-3 text-dark">Офисы в городе <?php echo esc_html($term->name); ?>
                        </h2>
                     </div>
                     <!--/column -->
                     <?php $args = array(
                        'post_type' => 'office_addresses',
                        'orderby' => 'date',
                        'order'   => 'DESC',
                        'tax_query' => array(
                           array(
                              'taxonomy' => 'towns',
                              'field'    => 'slug',
                              'terms'    => $term->slug
                           )
                        )
                     );
                     $query = new WP_Query($args);
                     if ($query->have_posts()) { ?>
                        <div class="col-lg-8  offset-lg-1 grid">
                           <div class="row gx-md-5 gy-5 align-items-center counter-wrapper isotope">
                              <?php $addresse_num = 1; ?>
                              <?php while ($query->have_posts()) {
                                 $query->the_post();
                                 $post_id = get_the_ID(); ?>
                                 <div class="item col-12">
                                    <?php if (have_rows('office_addresses', $post_id)) : ?>
                                       <?php while (have_rows('office_addresses', $post_id)) : the_row(); ?>
                                          <div class="card shadow-lg lift card-border-bottom border-soft-primary">
                                             <div class="card-body">
                                                <div class="d-flex d-lg-block d-xl-flex flex-row flex-wrap">
                                                   <div class="col-12">
                                                      <div class="row mb-3 wrapper-border pb-3">
                                                         <div class="col-2 col-md-2 col-lg-2 col-xl-1">
                                                            <span class="icon btn btn-circle btn-primary pe-none me-5"><span class="number fs-18"><?php echo $addresse_num; ?></span></span>
                                                         </div>
                                                         <div class="col align-self-center">
                                                            <h3 class="mb-1"> <?php echo esc_html($term->name); ?></h3>
                                                         </div>
                                                         <?php if (get_sub_field('map_link')) { ?>
                                                            <div class="col align-self-center d-flex justify-content-end">
                                                               <a href="<?php the_sub_field('map_link'); ?>" class="hover more"><?php esc_html_e('Map', 'codeweber'); ?></a>
                                                            </div>
                                                         <?php
                                                         }
                                                         ?>
                                                      </div>
                                                      <div class="row">
                                                         <div class="col-10 col-md-6 offset-2 offset-xl-0 mb-3 mb-xl-0 col-xl-5">
                                                            <p class="mb-0 fs-15 text-primary">Адрес:</p>
                                                            <?php the_sub_field('address_1'); ?><br>
                                                            <?php the_sub_field('address_2'); ?>
                                                         </div>
                                                         <div class="col-10 col-md-4 offset-2 offset-md-0 mb-3 mb-xl-0 col-xl-3">
                                                            <?php if (have_rows('working_time')) : ?>
                                                               <p class="mb-0 fs-15 text-primary">Время работы:</p>
                                                               <?php while (have_rows('working_time')) : the_row(); ?>
                                                                  <?php the_sub_field('working_time'); ?><br>
                                                               <?php endwhile; ?>
                                                            <?php endif; ?>
                                                         </div>
                                                         <div class="col-10 col-md-10 offset-2 offset-md-2 offset-xl-0 mb-3 mb-xl-0 col-xl-4">
                                                            <?php if (have_rows('phones_office')) : ?>
                                                               <p class="mb-0 fs-15 text-primary">Телефоны:</p>
                                                               <?php while (have_rows('phones_office')) : the_row(); ?>
                                                                  <a href="tel:<?php the_sub_field('phone_office'); ?>"><?php the_sub_field('phone_office'); ?></a>
                                                                  <br>
                                                               <?php endwhile; ?>
                                                            <?php endif; ?>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <!--/.card-body -->
                                          </div>
                                          <!--/.card -->
                                       <?php endwhile; ?>
                                    <?php endif; ?>
                                 </div>
                                 <!--/column -->
                                 <?php $addresse_num++; ?>
                              <?php } ?>
                           </div>
                           <!--/.row -->
                        </div>
                        <!--/column -->
                     <?php  } ?>
                  </div>
               </div>
            </article>
            <?php $num++; ?>
         <?php endforeach; ?>
      <?php endif; ?>
   </div>


   <div class="container py-0 order-1">
      <div class="row">
         <div class="col-xl-12 mx-auto">
            <div class="job-list">
               <div class="card mb-4 lift">
                  <div class="card-body p-5">
                     <span class="row justify-content-between align-items-center">
                        <span class="col-md-6 mb-2 mb-md-0 d-flex align-items-center text-body">
                           <span class="btn btn-circle bg-primary text-white w-9 h-9 fs-17 me-3"> <i class="uil uil-location-point"></i></span> Выбрать свой город </span>
                        <span class="col-12 col-md-6  text-body d-flex align-items-center">
                           <div class="form-select-wrapper w-100">
                              <select class="form-select" aria-label="Default select example" onchange="location = this.value;">
                                 <option value="#0" selected>Нажмите для выбора города</option>
                                 <?php $towns = get_sub_field('towns'); ?>
                                 <?php if ($towns) : ?>
                                    <?php $num_option = 1; ?>
                                    <?php foreach ($towns as $term) : ?>
                                       <option value="#<?php echo $term->slug; ?>"><?php echo esc_html($term->name); ?></option>
                                       <?php $num_option++; ?>
                                    <?php endforeach; ?>
                                 <?php endif; ?>
                              </select>
                           </div>
                        </span>
                     </span>
                  </div>
                  <!-- /.card-body -->
               </div>
               <!-- /.card -->
            </div>
         </div>
         <!-- /column -->
      </div>
      <!-- /.row -->
   </div>
   <!-- /.container -->
</section>
<!-- /section -->