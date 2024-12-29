<?php

/**
 * Blog Pageheader Generator
 */


function codeweber_pageheader_generator($title, $subtitle, $type, $background_url, $bg_color, $paralax, $breadcrumbs, $text_color, $class_container, $class_content, $angle_class)
{


   global $codeweber;
   $header_style = $codeweber['page_settings']['header_style'];

   if ($title == NULL) {
      $title =  codeweber_page_title();
   }
   if ($type == 'type_5' && $header_style !== 'disable') {
      if ($header_style == 'transparent') {
         $codeweber['page_settings']['container_class'] = ' pt-16 pb-16 pt-md-18 pb-md-18 mt-0';
         $codeweber['page_settings']['content_class'] = ' mt-n18 mt-md-n20 mt-lg-n22 position-relative';
         $codeweber['page_settings']['col_class'] = ' col-lg-8 mx-auto mb-11';
      } elseif ($header_style == 'solid' || $header_style == 'default') {
         $codeweber['page_settings']['container_class'] = ' pt-10 pb-20 pb-md-20 pt-md-14 pb-lg-20';
         $codeweber['page_settings']['content_class'] = ' mt-n18 mt-md-n20 mt-lg-n21 position-relative';
         $codeweber['page_settings']['col_class'] = ' col-lg-8 mx-auto mb-11';
      }
   } elseif ($type == 'type_7' && $header_style !== 'disable') {
      if ($header_style == 'transparent') {
         $codeweber['page_settings']['container_class'] = ' pt-16 pb-14 pt-md-18 pb-md-14 mt-0';
         $codeweber['page_settings']['col_class'] = ' col-lg-8 mx-auto mb-11';
         $codeweber['page_settings']['content_class'] = ' mt-n21';
      } elseif ($header_style == 'solid' || $header_style == 'default') {
         $codeweber['page_settings']['container_class'] = ' pt-10 pb-20 pb-md-20 pt-md-14 pb-lg-20';
         $codeweber['page_settings']['col_class'] = ' col-lg-8 mx-auto mb-11';
         $codeweber['page_settings']['content_class'] = ' mt-n21';
      }
   } else {
      $codeweber['page_settings']['container_class'] = ' pt-14 pb-12 pt-md-14 pb-md-14';
      $codeweber['page_settings']['content_class'] = NULL;
   }

   if ($background_url) {
      $section_open = '<section class="wrapper image-wrapper bg-image bg-overlay bg-overlay overflow-hidden mt-0" data-image-src="' . $background_url . '">';
   } else {
      $section_open = '<section class="wrapper ' . $bg_color . '">';
   }


   if ($type !== 'disable') {
      if ($type == 'type_1') { ?>
         <?php echo $section_open; ?>
         <div class="container py-10 py-md-14">
            <div class="row">
               <div class="col-md-8 col-lg-7 col-xl-8 col-xxl-8">
                  <?php
                  if ($title !== NULL) { ?>
                     <h1 class="display-1 mb-3 <?php echo $text_color; ?>"><?php echo $title; ?></h1>
                     <?php do_action('codeweber_pageheader_after_title'); // Hook start body 
                     ?>
                  <?php
                  } ?>
                  <?php if ($subtitle !== NULL) { ?>
                     <p class="lead fs-lg pe-lg-15 pe-xxl-12 <?php echo $text_color; ?>"><?php echo $subtitle; ?></p>
                  <?php
                  } ?>
                  <?php
                  if ($breadcrumbs == 'true') {
                     codeweber_breadcrumbs(NULL, $text_color, true);
                  }
                  codeweber_meta_blog(); // Blog Meta Data
                  ?>
               </div>
               <!-- /column -->
            </div>
            <!-- /.row -->
         </div>
         <!-- /.container -->
         </section>
      <?php
      } elseif ($type == 'type_2') { ?>
         <?php echo $section_open; ?>
         <div class="container py-13 py-md-17 text-center">
            <div class="row">
               <div class="col-lg-10 col-xxl-8 mx-auto">
                  <?php
                  if ($title !== NULL) { ?>
                     <h1 class="display-1 mb-3 <?php echo $text_color; ?>"><?php echo $title; ?></h1>
                     <?php do_action('codeweber_pageheader_after_title'); // Hook start body 
                     ?>
                  <?php
                  } ?>
                  <?php if ($subtitle !== NULL) { ?>
                     <p class="lead fs-lg px-lg-10 px-xxl-8 <?php echo $text_color; ?>"><?php echo $subtitle; ?></p>
                  <?php
                  } ?>
                  <?php
                  if ($breadcrumbs !== 'true') {
                     codeweber_breadcrumbs(NULL, $text_color, true);
                  }
                  codeweber_meta_blog(); // Blog Meta Data
                  ?>
               </div>
               <!-- /column -->
            </div>
            <!-- /.row -->
         </div>
         <!-- /.container -->
         </section>
      <?php
      } elseif ($type == 'type_3') { ?>
         <?php echo $section_open; ?>
         <div class="container py-10 py-md-14 text-center">
            <div class="row">
               <div class="col-md-8 col-lg-7 col-xl-7 col-xxl-8 mx-auto">
                  <?php
                  if ($title !== NULL) { ?>
                     <h1 class="display-1 mb-3 <?php echo $text_color; ?>"><?php echo $title; ?></h1>
                     <?php do_action('codeweber_pageheader_after_title'); // Hook start body 
                     ?>
                  <?php
                  } ?>
                  <?php if ($subtitle !== NULL) { ?>
                     <p class="lead fs-lg px-lg-10 px-xxl-8 <?php echo $text_color; ?>"><?php echo $subtitle; ?></p>
                  <?php
                  } ?>

                  <?php
                  if ($breadcrumbs == 'true') {
                     codeweber_breadcrumbs(NULL, $text_color, true);
                  }
                  codeweber_meta_blog(); // Blog Meta Data
                  ?>
               </div>
               <!-- /column -->
            </div>
            <!-- /.row -->
         </div>
         <!-- /.container -->
         </section>
      <?php
      } elseif ($type == 'type_4') { ?>
         <?php echo $section_open; ?>
         <div class="container py-10 py-md-14">
            <div class="row">
               <div class="col-lg-10 col-xxl-8">
                  <?php
                  if ($title !== NULL) { ?>
                     <h1 class="display-1 mb-3 <?php echo $text_color; ?>"><?php echo $title; ?></h1>
                     <?php do_action('codeweber_pageheader_after_title'); // Hook start body 
                     ?>
                  <?php
                  } ?>
                  <?php if ($subtitle !== NULL) { ?>
                     <p class="lead fs-lg <?php echo $text_color; ?>"><?php echo $subtitle; ?></p>
                  <?php
                  } ?>
                  <?php
                  if ($breadcrumbs == 'true') {
                     codeweber_breadcrumbs(NULL, $text_color, true);
                  }
                  codeweber_meta_blog(); // Blog Meta Data
                  ?>
               </div>
               <!-- /column -->
            </div>
            <!-- /.row -->
         </div>
         <!-- /.container -->
         </section>
      <?php
      } elseif ($type == 'type_5') { ?>
         <?php echo $section_open; ?>
         <div class="container <?php echo $codeweber['page_settings']['container_class']; ?>">
            <div class="row">
               <div class="<?php echo $codeweber['page_settings']['col_class']; ?> text-center">
                  <?php if ($subtitle !== NULL) { ?>
                     <div class="h1 fs-15 text-uppercase mb-3 <?php echo $text_color; ?>"><?php echo $subtitle; ?></div>
                     <?php do_action('codeweber_pageheader_after_title'); // Hook start body 
                     ?>
                  <?php
                  } ?>
                  <?php
                  if ($title !== NULL) { ?>
                     <h1 class="display-1 <?php echo $text_color; ?>"><?php echo $title; ?></h1>
                  <?php
                  } ?>
                  <?php
                  if ($breadcrumbs == 'true') {
                     codeweber_breadcrumbs(NULL, $text_color, true);
                  }
                  codeweber_meta_blog(); // Blog Meta Data
                  ?>
               </div>
               <!-- /column -->
            </div>
            <!-- /.row -->
         </div>
         <!-- /.container -->
         </section>
      <?php
      } elseif ($type == 'type_6') {
      ?>
         <?php echo $section_open; ?>
         <div class="container pt-19 pt-md-20 pb-18 pb-md-20 text-center">
            <div class="row">
               <div class="col-md-10 col-lg-8 col-xl-7 col-xxl-6 mx-auto">
                  <?php
                  if ($title !== NULL) { ?>
                     <h1 class="display-1 mb-3 <?php echo $text_color; ?>"><?php echo $title; ?></h1>
                     <?php do_action('codeweber_pageheader_after_title'); // Hook start body 
                     ?>
                  <?php
                  } ?>
                  <?php if ($subtitle !== NULL) { ?>
                     <p class="lead fs-lg px-md-3 px-lg-7 px-xl-9 px-xxl-10 <?php echo $text_color; ?>"><?php echo $subtitle; ?></p>
                  <?php
                  } ?>
                  <?php
                  if ($breadcrumbs == 'true') {
                     codeweber_breadcrumbs(NULL, $text_color, true);
                  }
                  codeweber_meta_blog(); // Blog Meta Data 
                  ?>
               </div>
               <!-- /column -->
            </div>
            <!-- /.row -->
         </div>
         <!-- /.container -->
         </section>
      <?php
      } elseif ($type == 'type_7') { ?>
         <?php echo $section_open; ?>
         <div class="container <?php echo $codeweber['page_settings']['container_class']; ?>">
            <div class="row">
               <div class="<?php echo $codeweber['page_settings']['col_class']; ?> text-center">
                  <?php
                  if ($title !== NULL) { ?>
                     <h1 class="display-1 mb-3 <?php echo $text_color; ?>"><?php echo $title; ?></h1>
                     <?php do_action('codeweber_pageheader_after_title'); // Hook start body 
                     ?>
                  <?php
                  } ?>
                  <?php if ($subtitle !== NULL) { ?>
                     <p class="lead px-lg-7 px-xl-7 px-xxl-6 <?php echo $text_color; ?>"><?php echo $subtitle; ?></p>
                  <?php
                  } ?>
                  <?php
                  if ($breadcrumbs == 'true') {
                     codeweber_breadcrumbs(NULL, $text_color, true);
                  }
                  codeweber_meta_blog(); // Blog Meta Data
                  ?>
               </div>
               <!-- /column -->
            </div>
            <!-- /.row -->
         </div>
         <!-- /.container -->
         </section>
      <?php
      } elseif ($type == 'type_8') { ?>
         <section class="wrapper bg-gray">
            <div class="container py-3 py-md-5">
               <?php codeweber_breadcrumbs(NULL, $text_color, true); ?>
            </div>
            <!-- /.container -->
         </section>
         <section class="wrapper">
            <div class="container text-left pt-9 pb-0">
               <div class="row">
                  <div class="col-md-7 col-lg-6 col-xl-6">
                     <?php
                     if ($title !== NULL) { ?>
                        <h1 class="display-3 mb-3 <?php echo $text_color; ?>"><?php echo $title; ?></h1>
                        <?php do_action('codeweber_pageheader_after_title'); // Hook start body 
                        ?>
                     <?php
                     } ?>
                     <?php if ($subtitle !== NULL) { ?>
                        <p class="lead <?php echo $text_color; ?>"><?php echo $subtitle; ?></p>
                     <?php
                     } ?>
                  </div>
                  <!-- /column -->
               </div>
               <!-- /.row -->
            </div>
            <!-- /.container -->
         </section>
      <?php
      } elseif ($type == 'type_9') { ?>
         <section class="wrapper bg-gray">
            <div class="container py-3 py-md-5">
               <?php codeweber_breadcrumbs(NULL, $text_color, true); ?>
            </div>
            <!-- /.container -->
         </section>
      <?php
      } elseif ($type == 'type_10') { ?>
         <section class="wrapper bg-gray">
            <div class="container py-3">
               <?php codeweber_breadcrumbs(NULL, $text_color, true); ?>
            </div>
            <!-- /.container -->
         </section>
      <?php
      } elseif ($type !== NULL) { ?>
         <section class="wrapper bg-gray">
            <div class="container py-3 py-md-5">
               <?php codeweber_breadcrumbs(NULL, $text_color, true); ?>
            </div>
            <!-- /.container -->
         </section>
         <section class="wrapper">
            <div class="container text-left pt-9 pb-0">
               <div class="row">
                  <div class="col-md-7 col-lg-6 col-xl-6">
                     <?php
                     if ($title !== NULL) { ?>
                        <h1 class="display-3 mb-3 <?php echo $text_color; ?>"><?php echo $title; ?></h1>
                        <?php do_action('codeweber_pageheader_after_title'); // Hook start body 
                        ?>
                     <?php
                     } ?>
                     <?php if ($subtitle !== NULL) { ?>
                        <p class="lead <?php echo $text_color; ?>"><?php echo $subtitle; ?></p>
                     <?php
                     } ?>
                  </div>
                  <!-- /column -->
               </div>
               <!-- /.row -->
            </div>
            <!-- /.container -->
         </section>
<?php }
   }
}
