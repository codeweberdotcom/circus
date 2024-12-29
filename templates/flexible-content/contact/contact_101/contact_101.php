<?php
/* Add settings */
$settings = new Settings();
// адрес корня темы , обязательная переменная для демо
$settings->title = NULL; // демо заголовок
$settings->paragraph = NULL; // демо параграф
$settings->subtitle = NULL; // демо подзаголовок
// $settings->imageurl = get_template_directory_uri() . '/dist/img/photos/bg11.jpg'; // демо фото
// $settings->backgroundurl = $settings->root_theme . '/dist/img/photos/bg37.jpg';
// $settings->videourl = get_template_directory_uri() . '/dist/media/movie.mp4'; // демо видео
// $settings->typewriter = 'customer satisfaction,business needs,creative ideas'; // демо данные эффекта печатной машинки
$settings->backgroundcolor = 'dark'; // цвет бэкгрануда темной темы
//$settings->backgroundcolor_light = 'gray'; // если есть другой цвет бэкграунда, например soft-primary или gray
$settings->textcolor = 'light'; // цвет текста темной темы
$settings->section_id = esc_html($args['block_id']); // присваиваем секции уникальный id
$settings->GetDataACF(); // получаем занчения полей ACF


/* Add buttons */
$button = new Buttons();
$button->form_button = "rounded";
$button->button_size = 'btn-lg';
$button->class_button_wrapper = "d-flex justify-content-start flex-wrap";
$button->data_cues = "slideInDown";
$button->data_group = "page-title-buttons";
$button->data_delay = "900";
$button->default_button = NULL;


/* Facts */
$facts = new Faq;
$facts->text_color = $settings->textcolor;
$facts->icon_classes = 'icon btn btn-circle btn-lg disabled mx-auto me-4 mb-lg-3 mb-xl-0'; // на удаление - после удаления проверить работоспособность labels
$facts->icon_svg_classes = 'svg-inject icon-svg icon-svg-lg mx-auto me-4 mb-lg-3 mb-xl-0'; // на удаление - после удаления проверить работоспособность labels
$facts->iconpaddingclass = 'mx-auto me-4 mb-lg-3 mb-xl-0';
$facts->pattern = '<div class="item col-md-6">
                  <div class="card shadow-lg lift">
                     <div class="card-body">
                        <div class="d-flex d-lg-block d-xl-flex flex-row">
                           <div>
                              %3$s                          
                             </div>
                           <div>
                              <h3 class="mb-1">%1$s</h3>
                              <p class="mb-0">%2$s</p>
                              %4$s
                           </div>
                        </div>
                     </div>
                     <!--/.card-body -->
                  </div>
                  <!--/.card -->
               </div>
               <!--/column -->';
$facts->default_template = '<div class="item col-md-6">
                  <div class="card shadow-lg lift">
                     <div class="card-body">
                        <div class="d-flex d-lg-block d-xl-flex flex-row">
                           <div>
                              <div class="icon btn btn-circle btn-lg btn-soft-purple disabled mx-auto me-4 mb-lg-3 mb-xl-0"> <i class="uil uil-presentation-check"></i> </div>
                           </div>
                           <div>
                              <h3 class="mb-1">Content Marketing</h3>
                              <p class="mb-0">Projects Done</p>
                           </div>
                        </div>
                     </div>
                     <!--/.card-body -->
                  </div>
                  <!--/.card -->
               </div>

               <!--/column -->
               <div class="item col-md-6">
                  <div class="card shadow-lg lift">
                     <div class="card-body">
                        <div class="d-flex d-lg-block d-xl-flex flex-row">
                           <div>
                              <div class="icon btn btn-circle btn-lg btn-soft-red disabled mx-auto me-4 mb-lg-3 mb-xl-0"> <i class="uil uil-users-alt"></i> </div>
                           </div>
                           <div>
                              <h3 class="mb-1">Content Marketing</h3>
                              <p class="mb-0">Happy Customers</p>
                           </div>
                        </div>
                     </div>
                     <!--/.card-body -->
                  </div>
                  <!--/.card -->
               </div>
               <!--/column -->

               <div class="item col-md-6">
                  <div class="card shadow-lg lift">
                     <div class="card-body">
                        <div class="d-flex d-lg-block d-xl-flex flex-row">
                           <div>
                              <div class="icon btn btn-circle btn-lg btn-soft-yellow disabled mx-auto me-4 mb-lg-3 mb-xl-0"> <i class="uil uil-user-check"></i> </div>
                           </div>
                           <div>
                              <h3 class="mb-1">Content Marketing</h3>
                              <p class="mb-0">Expert Employees</p>
                           </div>
                        </div>
                     </div>
                     <!--/.card-body -->
                  </div>
                  <!--/.card -->
               </div>
               <!--/column -->

               <div class="item col-md-6">
                  <div class="card shadow-lg lift">
                     <div class="card-body">
                        <div class="d-flex d-lg-block d-xl-flex flex-row">
                           <div>
                              <div class="icon btn btn-circle btn-lg btn-soft-aqua disabled mx-auto me-4 mb-lg-3 mb-xl-0"> <i class="uil uil-trophy"></i> </div>
                           </div>
                           <div>
                              <h3 class="mb-1">Content Marketing</h3>
                              <p class="mb-0">Awards Won</p>
                           </div>
                        </div>
                     </div>
                     <!--/.card-body -->
                  </div>
                  <!--/.card -->
               </div>
               <!--/column -->';
?>


<section id="<?php echo esc_html($args['block_id']); ?>" class="wrapper bg-light <?php echo esc_html($args['block_class']); ?>">
   <div class="container py-14 py-md-16">
      <div class="row gx-lg-0 gy-10 align-items-start">
         <div class="col-lg-4">
            <h2 class="display-4 mb-3 text-dark"><?php echo $settings->title; ?></h2>
            <p class="lead fs-lg text-dark"><?php echo $settings->subtitle; ?></p>
            <p class="text-dark"><?php echo $settings->paragraph; ?></p>
            <?php $button->showbuttons(); ?>
         </div>
         <!--/column -->
         <div class="col-lg-7 offset-lg-1 grid">
            <div class="row gx-md-5 gy-5 align-items-center counter-wrapper isotope">
               <?php $towns = get_sub_field('towns'); ?>
               <?php if ($towns) : ?>
                  <?php foreach ($towns as $term) : ?>
                     <div class="item col-md-6">
                        <div class="card shadow-lg lift card-border-bottom border-soft-primary">
                           <div class="card-body">
                              <div class="d-flex d-lg-block d-xl-flex flex-row">
                                 <div>
                                    <div class="icon btn btn-circle btn-md btn-primary disabled mx-auto me-4 mb-lg-3 mb-xl-0"> <i class="uil uil-map-marker"></i></i> </div>
                                 </div>
                                 <div>
                                    <h3 class="mb-1"><?php echo $term->name; ?></h3>
                                    <a href="#" class="hover more" data-bs-toggle="modal" data-bs-target="#<?php echo $term->slug; ?>">Открыть адреса</a>
                                 </div>
                              </div>
                           </div>
                           <!--/.card-body -->
                        </div>
                        <!--/.card -->
                     </div>

                     <div class="modal fade" id="<?php echo $term->slug; ?>" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                           <div class="modal-content ">
                              <div class="modal-body p-2">
                                 <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                 <h3 class="p-6">Офисы в городе <?php echo $term->name; ?></h3>
                                 <?php
                                 $args = array(
                                    'post_type' => 'office_addresses',
                                    'tax_query' => array(
                                       array(
                                          'taxonomy' => 'towns',
                                          'field'    => 'slug',
                                          'terms'    => $term->slug
                                       )
                                    )
                                 );
                                 $query = new WP_Query($args);
                                 if ($query->have_posts()) {
                                    $f = 1;
                                    while ($query->have_posts()) {
                                       $query->the_post();
                                       $post_id =  get_the_ID(); ?>
                                       <div class="row">
                                          <div class="col-12">
                                             <?php if (have_rows('office_addresses', $post_id)) : ?>
                                                <?php while (have_rows('office_addresses', $post_id)) : the_row(); ?>

                                                   <div class=" card shadow-lg lift card-border-bottom border-soft-primary">
                                                      <div class="card-body">
                                                         <div class="d-flex d-lg-block d-xl-flex flex-row flex-wrap">
                                                            <div class="col-12">
                                                               <div class="row mb-3 wrapper-border pb-3">
                                                                  <div class="col-2 col-md-2 col-lg-2 col-xl-1">
                                                                     <span class="icon btn btn-sm btn-circle btn-primary pe-none me-5"><span class="number fs-18"><?php echo $f; ?></span></span>
                                                                  </div>
                                                                  <div class="col align-self-center">
                                                                     <h3 class="mb-1"><?php echo $term->name; ?></h3>
                                                                  </div>

                                                                  <div class="col align-self-center d-flex justify-content-end">
                                                                     <a href="<?php the_sub_field('map_link'); ?>" class="hover more">На карте</a>
                                                                  </div>
                                                               </div>
                                                               <div class="row">
                                                                  <div class="col-10 col-md-6 offset-2 offset-xl-0 mb-3 mb-xl-0 col-xl-5">
                                                                     <p class="mb-0 fs-15 text-primary">Адрес:</p>
                                                                     <?php the_sub_field('address_1'); ?><br>
                                                                     <?php the_sub_field('address_2'); ?>
                                                                  </div>
                                                                  <div class="col-10 col-md-4 offset-2 offset-md-0 mb-3 mb-xl-0 col-xl-3">
                                                                     <p class="mb-0 fs-15 text-primary">Время работы:</p>
                                                                     <?php if (have_rows('working_time')) : ?>
                                                                        <?php while (have_rows('working_time')) : the_row(); ?>
                                                                           <?php the_sub_field('working_time'); ?></br>
                                                                        <?php endwhile; ?>
                                                                     <?php endif; ?>
                                                                  </div>
                                                                  <div class="col-10 col-md-10 offset-2 offset-md-2 offset-xl-0 mb-3 mb-xl-0 col-xl-4">
                                                                     <p class="mb-0 fs-15 text-primary">Телефоны:</p>

                                                                     <?php if (have_rows('phones_office')) : ?>
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

                                       </div>

                                 <?php $f++;
                                    }
                                 }

                                 wp_reset_postdata();

                                 ?>

                                 <!-- /.row -->
                              </div>
                              <!--/.modal-body -->
                           </div>
                           <!--/.modal-content -->
                        </div>
                        <!--/.modal-dialog -->
                     </div>
                     <!--/.modal -->
                  <?php endforeach; ?>
               <?php endif; ?>
            </div>
            <!--/.row -->
         </div>
         <!--/column -->
      </div>
      <!--/.row -->
   </div>
   <!-- /.container -->
</section>
<!-- /section -->