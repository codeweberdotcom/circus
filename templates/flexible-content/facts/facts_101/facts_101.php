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


/* Facts */
$facts = new Faq;
$facts->text_color = $settings->textcolor;
$facts->icon_classes = 'icon btn btn-circle btn-lg disabled mx-auto me-4 mb-lg-3 mb-xl-0';
$facts->icon_svg_classes = 'svg-inject icon-svg icon-svg-lg mx-auto me-4 mb-lg-3 mb-xl-0';
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


<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo esc_html($args['block_class']); ?> wrapper bg-light">
   <div class="container py-14 py-md-16">
      <div class="row gx-lg-0 gy-10 align-items-center">
         <div class="col-lg-12 grid">
            <?php if ($settings->title) { ?>
               <h2 class="display-4 mb-3 text-dark"><?php echo $settings->title; ?></h2>
            <?php } ?>
            <?php if ($settings->subtitle) { ?>
               <p class="lead fs-lg text-dark"><?php echo $settings->subtitle; ?></p>
            <?php } ?>
            <?php if ($settings->paragraph) { ?>
               <p class="text-dark"><?php echo $settings->paragraph; ?></p>
            <?php } ?>
            <div class="row gx-md-5 gy-5 align-items-center counter-wrapper isotope">
               <?php echo $facts->Facts_3(); ?>
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