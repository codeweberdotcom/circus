<?php get_header(); ?>

<?php if (have_rows('back-photo_video', 'option')) :
  while (have_rows('back-photo_video', 'option')) : the_row();
    $banner = get_sub_field('banner');
    if ($banner) {
      $banner_url =  esc_url($banner['url']);
    } else {
      $banner_url = NULL;
    };
    $video = get_sub_field('video');
    if ($video) {
      $banner_video_url = esc_url($video['url']);
    } else {
      $banner_video_url = NULL;
    };
  endwhile;
endif; ?>

<?php
if (get_field('enable_teh', 'option') === 'Отключить') {


  if ($banner_url !== NULL && $banner_video_url !== NULL) { ?>
    <section class="video-wrapper bg-overlay  px-0 mt-0 min-vh-100">
      <video poster="<?php echo $banner_url; ?>" src="<?php echo $banner_video_url; ?>" autoplay loop playsinline muted></video>
    <?php
  } elseif ($banner_url  && $banner_video_url === NULL) {
    ?>
      <section class="video-wrapper bg-overlay-gradient bg-overlay px-0 mt-0 min-vh-100">
        <video poster="<?php echo $banner_url; ?>"></video>
      <?php
    } elseif ($banner_url === NULL && $banner_video_url) { ?>
        <section class="wrapper bg-navy text-white vh-100 align-content-center">
        <?php
      } else {
        ?>
          <section class="wrapper bg-navy text-white vh-100 align-content-center">
          <?php
        }
          ?>
          <div class="video-content">
            <div class="container text-center">
              <div class="row">
                <div class="col-lg-8 col-xl-6 text-center text-white mx-auto">
                  <h1 style="font-weight: 700" class="display-1 fs-90 text-white mb-5"><?php the_field('title', 'option'); ?></h1>
                  <p class="lead fs-24 mb-0 mx-xxl-8"><?php the_field('description', 'option'); ?></p>
                </div>
                <!-- /column -->
              </div>
            </div>
            <!-- /.video-content -->
          </div>
          <!-- /.content-overlay -->
          <?php if (have_rows('photos', 'option')) : ?>
            <?php while (have_rows('photos', 'option')) : the_row(); ?>
              <?php $image_1 = get_sub_field('image_1'); ?>
              <?php if ($image_1) : ?>
                <figure data-cue="slideInLeft" class="hover-scale img3 d-none d-lg-block">
                  <img src="<?php echo esc_url(wp_get_attachment_image_url($image_1['ID'], 'circus_2')); ?>"
                    alt="<?php echo esc_attr($image_1['alt']); ?>" />
                </figure>
              <?php endif; ?>
              <?php $image_2 = get_sub_field('image_2'); ?>
              <?php if ($image_2) : ?>
                <figure data-cue="slideInLeft" class="hover-scale img2 d-none d-lg-block">

                  <img src="<?php echo esc_url(wp_get_attachment_image_url($image_2['ID'], 'circus_1')); ?>"
                    alt="<?php echo esc_attr($image_2['alt']); ?>" />

                </figure>
              <?php endif; ?>
              <?php $image_3 = get_sub_field('image_3'); ?>
              <?php if ($image_3) : ?>
                <figure data-cue="slideInLeft" class="hover-scale img4 d-none d-lg-block">

                  <img src="<?php echo esc_url(wp_get_attachment_image_url($image_3['ID'], 'circus_2')); ?>"
                    alt="<?php echo esc_attr($image_3['alt']); ?>" />

                </figure>
              <?php endif; ?>
              <?php $image_4 = get_sub_field('image_4'); ?>
              <?php if ($image_4) : ?>
                <figure data-cue="slideInLeft" class="hover-scale img1 d-none d-lg-block">

                  <img src="<?php echo esc_url(wp_get_attachment_image_url($image_4['ID'], 'circus_1')); ?>"
                    alt="<?php echo esc_attr($image_4['alt']); ?>" />

                </figure>
              <?php endif; ?>
            <?php endwhile; ?>
          <?php endif; ?>
          <figure style="width: 150px; height: 150px; position: absolute; top: 34%; left: 22.7%; z-index: 2" class="img5 d-none d-lg-block">
            <img style="width: 140px; height: 140px;" src="<?php echo get_template_directory_uri(); ?>/dist/img/about-us_w.svg" alt="" />
          </figure>
          </section>
          <!-- /section -->

          <style>
            .img1 {
              top: 44%;
              position: absolute;
              right: 12%;
              width: 280px;
              z-index: 2;
            }

            .img4 {
              top: 20%;
              position: absolute;
              right: 3%;
              width: 340px;
              z-index: 3;
            }


            .img2 {
              top: 44%;
              position: absolute;
              left: 12%;
              width: 280px;
              z-index: 3;
            }

            .img3 {
              top: 20%;
              position: absolute;
              left: 3%;
              width: 340px;
              z-index: 2;
            }


            .img5 {
              animation: rotate infinite 8s linear;
              transform-origin: center;
              /* Центр вращения */
            }

            @keyframes rotate {
              from {
                transform: rotate(0deg);
              }

              to {
                transform: rotate(360deg);
              }
            }

            .cursor-point {
              position: fixed;
              width: 8px;
              height: 8px;
              border-radius: 50%;
              background-color: #ff4612;
              pointer-events: none;
              transform: translate(-50%, -50%);
              transition: transform 0.1s ease;
              z-index: 999;
            }
          </style>
          <script>
            document.addEventListener('DOMContentLoaded', () => {
              // Проверка ширины окна для десктопов
              const isDesktop = window.innerWidth > 768; // Задаем минимальную ширину для десктопа
              if (!isDesktop) return;

              const cursorPoint = document.querySelector('.cursor-point');
              const arrowIcon = cursorPoint.querySelector('i'); // Выбираем иконку внутри cursor-point
              const galleryCursorElements = document.querySelectorAll('.gallery_cursor');

              // Проверяем существование элементов
              if (!cursorPoint || !arrowIcon || galleryCursorElements.length === 0) {
                return;
              }

              // Обработчик движения курсора
              const offsetX = 20; // смещение по оси X
              const offsetY = 20; // смещение по оси Y
              let mouseX = 0,
                mouseY = 0,
                currentX = 0,
                currentY = 0;
              const speed = 0.1; // скорость следования

              document.addEventListener('mousemove', (e) => {
                mouseX = e.clientX + offsetX;
                mouseY = e.clientY + offsetY;
              });

              function animate() {
                currentX += (mouseX - currentX) * speed;
                currentY += (mouseY - currentY) * speed;
                cursorPoint.style.left = `${currentX}px`;
                cursorPoint.style.top = `${currentY}px`;
                requestAnimationFrame(animate);
              }

              // Наведение на элементы с .gallery_cursor
              galleryCursorElements.forEach((element) => {
                element.addEventListener('mouseenter', () => {
                  cursorPoint.style.width = '60px';
                  cursorPoint.style.height = '60px';
                  cursorPoint.style.backgroundColor = '#ff0000';

                  // Добавляем d-block и удаляем d-none
                  arrowIcon.classList.add('d-block');
                  arrowIcon.classList.remove('d-none');
                });

                element.addEventListener('mouseleave', () => {
                  cursorPoint.style.width = '8px';
                  cursorPoint.style.height = '8px';
                  cursorPoint.style.backgroundColor = '#ff0000';

                  // Удаляем d-block и добавляем d-none
                  arrowIcon.classList.remove('d-block');
                  arrowIcon.classList.add('d-none');
                });
              });

              // Запуск анимации
              animate();
            });
          </script>


          <section id="buy_ticket" class="wrapper image-wrapper bg-image bg-overlay" data-image-src="<?php echo get_template_directory_uri(); ?>/dist/img/29_2-1-copyright.jpg">
            <div class="container py-18">
              <div class="row">
                <div class="col-lg-10 col-xl-9 col-xxl-8">
                  <h2 class="fs-16 text-uppercase text-secondary mb-3">Цирк Космос</h2>
                  <h3 class="display-1 text-white mb-3">Купить билет</h3>
                  <p class="lead fs-lg text-inverse mb-5"><?php the_field('description_buy', 'option'); ?></p>
                </div>
                <!-- /column -->
              </div>
              <script src="https://ticket-place.ru/js/include-widget3.js"></script>
              <script src="https://ticket-place.ru/js/include-calendar-widget.js"></script>
              <style>
                .tp-calendar-container {
                  margin-bottom: 30px;
                }

                .tp-calendar__date {
                  padding: 20px 10px !important;
                }

                .tp-calendar__item {
                  padding: 50px 20px !important;
                  background: #fff !important;
                }

                .tp-calendar__btn {
                  padding: 10px !important;
                }

                .tp-calendar__btn:hover {
                  color: #fff !important;
                  background: #FFA51D;
                }

                button.tp-calendar__more {
                  padding: 0.5rem 2rem !important;
                  border-radius: 50rem !important;
                  font-size: 18px !important;
                  line-height: 31px !important;
                }

                .tp-calendar__btn {
                  padding: 0.52rem 0.9rem !important;
                  border-radius: 50rem !important;
                  font-size: 18px !important;
                  line-height: 31px !important;
                }

                button.btn.btn-primary {
                  background: red !important;
                }

                @media (max-width: 1023px) {
                  .tp-calendar__item {
                    flex: 1 0 calc(50% - 20px) !important;
                    max-width: calc(50% - 20px) !important;
                  }
                }

                @media (max-width: 767px) {
                  .tp-calendar__item {
                    flex: 1 0 100% !important;
                    max-width: 100% !important;
                    margin: 0 auto;
                  }
                }

                .tp-calendar__mounth {
                  font-size: 24px !important;
                }

                .tp-calendar__day {
                  font-size: 57px !important;
                }

                .tp-calendar__more:hover {
                  color: #fff !important;
                  background: #FFA51D;
                }
              </style>
              <div class="tp-calendar-container"
                data-place-id="38"
                data-show-id=""
                data-date-from=""
                data-date-to=""
                data-color-week="#FFA51D"
                data-color-btn="#FFA51D"
                data-more-color="#FFA51D"
                data-more-text="Показать ещё даты"
                data-more-position="center"
                data-text-none="Нет открытых мероприятий"
                data-max-days="4"
                data-all="false"
                data-color-bg="#ffffff">
              </div>
              <div class="row align-items-center">
                <div class="col-lg-6 text-center text-lg-start">
                  <a href="#important_information" class="scroll btn btn-outline-white rounded-pill">Правила покупки и возврата</a>
                </div>
                <div class="col-lg-6 text-end">
                  <div class="d-flex align-items-center justify-content-end ">
                    <p class="mb-0 pb-0 me-3 text-white">Принимаем к оплате карты Мир</p>
                    <img class=" w-12" src="<?php echo get_template_directory_uri(); ?>/dist/img/svg/mir-svgrepo-com.svg">
                  </div>
                </div>
          </section>
          <section id="gallery" class="wrapper bg-light">
            <div class="overflow-hidden">
              <div class="container py-14 py-md-16">
                <div class="row">
                  <div class="col-lg-10 col-xl-9 col-xxl-8">
                    <h2 class="fs-16 text-uppercase text-secondary mb-3">Цирк Космос</h2>
                    <h3 class="display-1 mb-10 text-dark">Анонс программы</h3>
                  </div>
                  <!-- /column -->
                </div>
                <!-- /.row -->
                <div class="swiper-container  grid-view nav-bottom nav-color mb-14" data-margin="30" data-dots="false" data-nav="true" data-items-md="3" data-items-xs="1">
                  <div class="swiper overflow-visible">
                    <div class="swiper-wrapper gallery_cursor">
                      <?php if (have_rows('gallery', 'option')) : ?>
                        <?php while (have_rows('gallery', 'option')) : the_row(); ?>
                          <?php $photo_video = get_sub_field('photo-video'); ?>
                          <?php $photo_media = get_sub_field('photo_media'); ?>
                          <?php $video_st = get_sub_field('video_st'); ?>
                          <?php $photo_media_url = wp_get_attachment_image_url($photo_media['ID'], 'sandbox_hero_3'); // Замените 'your_custom_size' на имя вашего размера 
                          ?>
                          <?php if (isset($video_st['url']) && $photo_video === 'Видео') : ?>
                            <div class="swiper-slide">
                              <figure class="position-relative video_button position-relative">
                                <a href="<?php echo get_sub_field('video_st')['url']; ?>" class="btn btn-circle btn-light btn-play ripple mx-auto mb-5 position-absolute" style="top:50%; left: 50%; transform: translate(-50%,-50%); z-index:3;" data-glightbox data-gallery="g1"><i class="icn-caret-right text-dark"></i></a>
                                <img class="hover-scale" src="<?php echo esc_url($photo_media_url); ?>">
                              </figure>
                            </div>
                          <?php endif; ?>
                          <?php if (isset($photo_media['url']) && $photo_video === 'Фото') : ?>
                            <div class="swiper-slide">
                              <figure class="rounded-0 mb-7 hover-scale">
                                <a href="<?php echo esc_url($photo_media['sizes']['sandbox_hero_6']); ?>" data-glightbox data-gallery="g1">
                                  <img src="<?php echo esc_url($photo_media_url); ?>" alt="" />
                                </a>
                              </figure>
                            </div>
                          <?php endif; ?>
                        <?php endwhile; ?>
                      <?php else : ?>
                      <?php endif; ?>
                    </div>
                    <!--/.swiper-wrapper -->
                  </div>
                  <!-- /.swiper -->
                </div>
                <!-- /.swiper-container -->
              </div>
              <!-- /.container -->
            </div>
            <!-- /.overflow-hidden -->
          </section>
          <!-- /section -->

        <?php
      } else {
        ?>
          <?php $photo_teh = get_field('photo_teh', 'option'); ?>
          <?php if ($photo_teh) { ?>
            <?php if ($photo_teh) { ?>
              <section class="wrapper image-wrapper bg-image bg-full text-white bg-overlay bg-overlay-400 vh-100 align-content-center" data-image-src="<?php echo esc_url($photo_teh['url']); ?>">
              <?php } else {  ?>
                <section class="wrapper bg-navy text-white vh-100 align-content-center">
                <?php
              }; ?>
              <?php }; ?>
              <div class="video-content">
                <div class="container text-center">
                  <div class="row">
                    <div class="col-lg-8 col-xl-6 text-center text-white mx-auto">
                      <h1 style="font-weight: 700" class="display-1 fs-70 text-white mb-5"><?php the_field('title_teh', 'option'); ?>
                      </h1>
                      <p class="lead fs-24 mb-0 mx-xxl-8"><?php the_field('description_teh', 'option'); ?>
                      </p>
                    </div>
                    <!-- /column -->
                  </div>
                </div>
                <!-- /.video-content -->
                </section>
              <?php
            }
              ?>
              <section class="wrapper bg-dark">
                <div class="container py-14 py-md-16">
                  <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
                    <div class="col-lg-7 position-relative order-lg-2">
                      <div class="overlap-grid overlap-grid-2">
                        <?php $photo_about1 = get_field('photo_about1', 'option'); ?>
                        <?php if ($photo_about1) : ?>
                          <?php
                          $photo_about1_size = wp_get_attachment_image_src($photo_about1['ID'], 'contact_2');
                          // Замените 'your-custom-size' на зарегистрированный размер
                          ?>
                          <?php if ($photo_about1_size) : ?>
                            <div class="item">
                              <figure class="rounded-0 shadow"><img src="<?php echo esc_url($photo_about1_size[0]); ?>" alt=""></figure>
                            </div>
                          <?php endif; ?>
                        <?php endif; ?>
                        <?php $photo_about2 = get_field('photo_about2', 'option'); ?>
                        <?php if ($photo_about2) : ?>
                          <?php
                          $photo_about2_size = wp_get_attachment_image_src($photo_about2['ID'], 'contact_2');
                          // Замените 'your-custom-size' на зарегистрированный размер
                          ?>
                          <?php if ($photo_about2_size) : ?>
                            <div class="item">
                              <figure class="rounded-0 shadow"><img src="<?php echo esc_url($photo_about2_size[0]); ?>" alt=""></figure>
                            </div>
                            <figure style="width: 150px; height: 150px; position: absolute; top: 20%; left: 12.7%; z-index: 2" class="img5 d-none d-lg-block">
                              <img style="width: 140px; height: 140px;" src="<?php echo get_template_directory_uri(); ?>/dist/img/about-us_w.svg" alt="" />
                            </figure>
                          <?php endif; ?>
                        <?php endif; ?>

                      </div>
                    </div>
                    <!--/column -->
                    <div class="col-lg-5">
                      <h2 class="fs-16 text-uppercase text-secondary mb-3">Цирк Космос</h2>
                      <h3 class="display-1 text-white mb-3"><?php the_field('title_about', 'option'); ?></h3>
                      <p class="lead fs-lg text-white"><?php the_field('subtitle_about', 'option'); ?></p>
                      <p class="mb-6 text-inverse"><?php the_field('description_about', 'option'); ?></p>
                    </div>
                    <!--/column -->
                  </div>
                  <!--/.row -->
                </div>
                <!-- /.container -->
              </section>
              <!-- /section -->
              <section class="wrapper bg-light" id="important_information">
                <div class="overflow-hidden">
                  <div class="container py-14 py-md-16">
                    <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center mx-auto">
                      <div class="col-12 col-lg-8 mx-auto">
                        <h3 class="display-5 fs-57 mb-7 text-dark">Важная информация</h3>
                        <?php
                        if (have_rows('faq', 'option')) : ?>
                          <div class="accordion accordion-wrapper" id="accordionExample">
                            <?php while (have_rows('faq', 'option')) : the_row();
                              $row_index = get_row_index(); // Получаем номер строки
                              $collapse_id = "collapse" . $row_index; // Уникальный ID для элемента
                              $heading_id = "heading" . $row_index;  // Уникальный ID для заголовка
                            ?>
                              <div class="card plain accordion-item">
                                <div class="card-header" id="<?php echo $heading_id; ?>">
                                  <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#<?php echo $collapse_id; ?>" aria-expanded="false" aria-controls="<?php echo $collapse_id; ?>">
                                    <?php the_sub_field('question'); ?>
                                  </button>
                                </div>
                                <!--/.card-header -->
                                <div id="<?php echo $collapse_id; ?>" class="accordion-collapse collapse" aria-labelledby="<?php echo $heading_id; ?>" data-bs-parent="#accordionExample">
                                  <div class="card-body">
                                    <p><?php the_sub_field('answer'); ?><br>
                                      <?php if (have_rows('link')) : ?>
                                        <?php while (have_rows('link')) : the_row(); ?>

                                          <?php if (get_sub_field('link_url')) { ?>
                                            <a class="mt-3 btn btn-primary rounded-pill" href="<?php echo get_sub_field('link_url'); ?>" target="_blank"><?php echo get_sub_field('link_name'); ?></a>
                                          <?php } ?>
                                        <?php endwhile; ?>
                                      <?php endif; ?>
                                    </p>
                                  </div>
                                  <!--/.card-body -->
                                </div>
                                <!--/.accordion-collapse -->
                              </div>
                            <?php endwhile; ?>
                          </div>
                        <?php else : ?>
                          <p>Вопросы и ответы не найдены.</p>
                        <?php endif; ?>
                      </div>
                      <!--/column -->
                    </div>
                    <!-- /.container -->
                  </div>
                  <!-- /.overflow-hidden -->
              </section>
              <!-- /section -->
              </div>
              <!-- /.content-wrapper -->

              <?php
              if (get_field('enable', 'option') === 'Включить') { ?>
                <div class="modal fade modal-popup" id="modal-signin" tabindex="-1">
                  <div class="modal-dialog modal-dialog-centered modal-xl">
                    <div class="modal-content rounded-0 text-center">
                      <div class="container">
                        <div class="row">
                          <?php $photo_modal = get_field('photo_modal', 'option'); ?>
                          <?php if ($photo_modal) : ?>
                            <?php $photo_modal = get_field('photo_modal', 'option'); ?>
                            <?php if ($photo_modal) : ?>
                              <?php
                              $photo_modal_size = wp_get_attachment_image_src($photo_modal['ID'], 'sandbox_hero_18');
                              // Замените 'your-custom-size' на зарегистрированный размер, например, 'medium', 'large' или пользовательский
                              ?>
                              <?php if ($photo_modal_size) : ?>
                                <div class="col-md-6 wrapper image-wrapper bg-image bg-full " data-image-src="<?php echo esc_url($photo_modal_size[0]); ?>">
                                </div>
                              <?php endif; ?>
                            <?php endif; ?>
                          <?php endif; ?>
                          <div class="col-md-6">
                            <div class="modal-body">
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              <h2 class="mb-3 fs-47 lh-1 text-start"><?php the_field('title_modal', 'option'); ?></h2>
                              <p class="lead mb-6 text-start"><?php the_field('description_modal', 'option'); ?></p>
                              <?php if (have_rows('button_modal', 'option')) : ?>
                                <?php while (have_rows('button_modal', 'option')) : the_row(); ?>
                                  <div class="row">
                                    <div class="col-12 d-flex justify-content-center">
                                      <a class="mt-3 btn btn-primary rounded-pill mb-3" href=" <?php the_sub_field('button_link'); ?>" target="_blank"><?php the_sub_field('text_button'); ?></a>
                                    </div>
                                    <!-- /column -->
                                  </div>
                                  <!--/.social -->
                                <?php endwhile; ?>
                              <?php endif; ?>
                              <div class="row">
                                <div class="col-12 d-flex justify-content-center">
                                  <?php social_icons_option_1(); ?>
                                </div>
                                <!-- /column -->
                              </div>
                              <!--/.social -->
                            </div>
                            <!--/.modal-content -->
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--/.modal-body -->
                  </div>
                  <!--/.modal-dialog -->
                </div>
                <!--/.modal -->
              <?php
              }
              ?>

              <?php
              get_footer();
