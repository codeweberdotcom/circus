<?php

//* ---Tabs --

class CW_Tab
{
   public $root_theme;
   public $tab_final;
   public $type_tab;
   public $tab_icon;
   public $tab_title;
   public $tab_description;
   public $tab_content;
   public $tab_content_title;
   public $tab_content_paragraph;
   public $tab_content_list;
   public $tab_content_button;
   public $tab_content_col_1_bool;
   public $tab_content_col_2_bool;
   public $tab_content_col_bool;
   public $tab_id;

   public function __construct($type_tab, $tab_id, $tab_title, $tab_description, $tab_icon, $tab_button, $tab_content, $tab_final, $icon_class, $image_thumb_size, $image_big_size, $image_link_default, $class_col_1, $class_col_2)
   {
      $this->root_theme = get_template_directory_uri();
      $this->type_tab = $this->cw_type_tab($type_tab);
      $this->tab_id = $this->cw_tab_id($tab_id);
      $this->tab_title = $this->cw_tab_title($tab_title);
      $this->tab_description = $this->cw_tab_description($tab_description);
      $this->tab_icon = $this->cw_tab_icon($tab_icon, $icon_class);
      $this->tab_content = $this->cw_tab_content($image_thumb_size, $image_big_size, $image_link_default, $class_col_1, $class_col_2);
      $this->tab_final = $this->cw_tab_final($tab_final);
   }

   public function cw_type_tab($type_tab)
   {
      $cw_type_tab = $type_tab;
      return $cw_type_tab;
   }

   public function cw_tab_id($tab_id)
   {
      $cw_tab_id = NULL;
      return $cw_tab_id;
   }

   public function cw_tab_title($tab_title)
   {
      $cw_tab_title = get_sub_field('title');
      return $cw_tab_title;
   }

   public function cw_tab_description($tab_description)
   {
      $cw_tab_description = get_sub_field('description');
      return $cw_tab_description;
   }

   public function cw_tab_content($image_thumb_size, $image_big_size, $image_link_default, $class_col_1, $class_col_2)
   {
      $cw_tab_content = '';
      $swiper_content_object = new CW_Swiper('overflow-hidden rounded', NULL, NULL, 'sandbox_about_4', 'sandbox_hero_6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<figure %5$s %9$s>%6$s<img %4$s src="%1$s" srcset="%1$s" %3$s />%7$s %10$s %11$s</figure>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

      $swiper_content = $swiper_content_object->final_swiper;

      $title_content_object = new CW_Title(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<h4 class="h2 mb-3">%s</h4>', NULL);
      $title_content = $title_content_object->title_final;

      $paragraph_content_object = new CW_Parargraph(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<p>%s</p>');
      $paragraph_content = $paragraph_content_object->paragraph_final;


      $button_content_object = new CW_Buttons('<div class="d-flex">%s</div>', NULL, NULL, NULL);
      $button_content = $button_content_object->final_buttons;

      $list_content_object = new CW_ListCol(NULL, NULL, NULL, NULL, NULL, NULL, NULL);
      $list_content = $list_content_object->listcol_final;


      $this->tab_content_title = $title_content;
      $this->tab_content_paragraph = $paragraph_content;
      $this->tab_content_list = $list_content;
      $this->tab_content_button = $button_content;

      if ($swiper_content) {
         $this->tab_content_col_1_bool = true;
      } else {
         $this->tab_content_col_1_bool = false;
      }


      if (isset($title_content_object->title_text) || isset($paragraph_content_object->paragraph_text)) {
         $this->tab_content_col_2_bool = true;
      } else {
         $this->tab_content_col_2_bool = false;
      }

      if ($this->tab_content_col_1_bool == true && $this->tab_content_col_2_bool == true) {
         $this->tab_content_col_bool = true;
      } else {
         $this->tab_content_col_bool = false;
      }

      if ($this->tab_content_col_bool == true) {
         $cw_tab_content .= '<div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">';
      }
      if ($class_col_1 !== NULL) {
         $cw_class_col_1 = $class_col_1;
      } elseif ($this->tab_content_col_bool == true) {
         $cw_class_col_1 = 'col-md-6';
      } else {
         $cw_class_col_1 = 'col-md-12';
      }

      if ($this->tab_content_col_bool == true) {
         $cw_tab_content .= '<div class="' . $cw_class_col_1 . '">';
      }

      $cw_tab_content .= $swiper_content;

      if ($this->tab_content_col_bool == true) {
         $cw_tab_content .= '</div>';
      }

      if ($class_col_2 !== NULL) {
         $cw_class_col_2 = $class_col_2;
      } elseif ($this->tab_content_col_bool == true) {
         $cw_class_col_2 = 'col-md-6';
      } else {
         $cw_class_col_2 = 'col-md-12';
      }

      if ($this->tab_content_col_bool == true) {
         $cw_tab_content .= '<div class="' . $cw_class_col_2 . '">';
      }

      if ($title_content !== '<h4 class="h2 mb-3"></h4>') {
         $cw_tab_content .= $title_content;
      }

      if ($paragraph_content !== '<p></p>') {
         $cw_tab_content .= $paragraph_content;
      }
      $cw_tab_content .= $list_content;
      $cw_tab_content .= $button_content;

      if ($this->tab_content_col_bool == true) {
         $cw_tab_content .= '</div>';
      }

      if ($this->tab_content_col_bool == true) {
         $cw_tab_content .= '</div>';
      }

      return $cw_tab_content;
   }

   public function cw_tab_icon($tab_icon, $icon_class)
   {
      $cw_tab_icon_object = new CW_Icon(NULL, NULL, $icon_class, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
      $cw_tab_icon = $cw_tab_icon_object->cw_final_icon(NULL, NULL);
      return $cw_tab_icon;
   }

   public function cw_tab_final($tab_final)
   {
      $cw_tab_final = NULL;
      return $cw_tab_final;
   }
}

class CW_Tabs
{
   public $root_theme;
   public $type_tabs;
   public $tabs_final;
   public $tabs_id;

   public function __construct($type_tabs, $tabs_final, $class_col_1, $class_col_2, $tabs_id)
   {
      $this->root_theme = get_template_directory_uri();
      $this->type_tabs = $this->cw_type_tabs($type_tabs);
      $this->tabs_final = $this->cw_tabs_final($tabs_final, $class_col_1, $class_col_2, $tabs_id);
      $this->$tabs_id = $this->cw_tabs_id($tabs_id);
   }

   public function cw_tabs_id($tabs_id)
   {
      $cw_tabs_id = $tabs_id;
      return $cw_tabs_id;
   }

   public function cw_type_tabs($type_tabs)
   {
      if (have_rows('cw_tabs')) {
         while (have_rows('cw_tabs')) {
            the_row();
            if ($type_tabs !== NULL) {
               $cw_type_tabs = $type_tabs;
            } else {
               $cw_type_tabs = get_sub_field('cw_type_tabs');
            }
         }
      } else {
         $cw_type_tabs = NULL;
      }
      return $cw_type_tabs;
   }

   public function cw_tabs_final($tabs_final, $class_col_1, $class_col_2, $tabs_id)
   {
      $cw_tabs_nav = '';
      $cw_tabs_content = '';

      if (have_rows('cw_tabs')) {
         while (have_rows('cw_tabs')) {
            the_row();
            if (have_rows('cw_tabs_repeater')) {
               if ($this->type_tabs == 'type 1') {
                  $cw_tabs_nav .= '<ul class="nav nav-tabs nav-tabs-basic">';
                  $class_icon = NULL;
               } elseif ($this->type_tabs == 'type 2') {
                  $cw_tabs_nav .= '<ul class="nav nav-tabs nav-pills">';
                  $class_icon = 'me-2';
               } elseif ($this->type_tabs == 'type 3') {
                  $class_icon = 'me-4';
                  $cw_tabs_nav .= '<ul class="nav nav-tabs nav-tabs-bg nav-tabs-shadow-lg d-flex justify-content-between nav-justified flex-lg-row flex-column">';
               } else {
                  $class_icon = NULL;
               }

               $cw_tabs_content .= '<div class="tab-content mt-6 mt-lg-8">';

               while (have_rows('cw_tabs_repeater')) {
                  the_row();
                  $row_num =  get_row_index();

                  if (get_row_index() == '1') {
                     $active_class = ' active';
                  } else {
                     $active_class = NULL;
                  }

                  $tab_object = new CW_Tab($this->type_tabs, NULL, NULL, NULL, NULL, NULL, NULL, NULL, $class_icon, NULL, NULL, NULL, $class_col_1, $class_col_2);
                  if ($this->type_tabs == 'type 1') {
                     $cw_tabs_nav .= ' <li class="nav-item"><a class="nav-link' . $active_class . '" data-bs-toggle="tab" href="#tab' . $tabs_id . '-' . $row_num . '">' . $tab_object->tab_title . '</a>';
                  } elseif ($this->type_tabs == 'type 2') {
                     $cw_tabs_nav .= '<li class="nav-item"><a class="nav-link' . $active_class . '" data-bs-toggle="tab" href="#tab' . $tabs_id . '-' . $row_num . '">' . $tab_object->tab_icon . '<span>' . $tab_object->tab_title . '</span></a></li>';
                  } elseif ($this->type_tabs == 'type 3') {
                     $cw_tabs_nav .= '<li class="nav-item"><a class="nav-link d-flex h-100 flex-row' . $active_class . '" data-bs-toggle="tab" href="#tab' . $tabs_id . '-' . $row_num . '"><div>' . $tab_object->tab_icon . '</div><div><h4 class="mb-1">' . $tab_object->tab_title . '</h4><p>' . $tab_object->tab_description . '</p></div></a> </li>';
                  }

                  $cw_tabs_content .= '<div class="tab-pane fade show' . $active_class . '" id="tab' . $tabs_id . '-' . $row_num . '">';

                  if ($tab_object) {
                     $cw_tabs_content .= NULL;
                  }

                  $cw_tabs_content .= $tab_object->tab_content;

                  $cw_tabs_content .= '</div><!--/.tab-pane -->';
               }
               $cw_tabs_content .= '</div>';
               $cw_tabs_nav .= '</ul>';

               $cw_tabs_final = $cw_tabs_nav . $cw_tabs_content;
            } elseif ($tabs_final !== NULL) {
               $cw_tabs_final = $tabs_final;
            } elseif ($this->type_tabs == 'type 1') {
               $cw_tabs_final = '<ul class="nav nav-tabs nav-tabs-basic" role="tablist">
                  <li class="nav-item" role="presentation"> <a class="nav-link active" data-bs-toggle="tab" href="#tab3-1" aria-selected="true" role="tab">Support</a> </li>
                  <li class="nav-item" role="presentation"> <a class="nav-link" data-bs-toggle="tab" href="#tab3-2" aria-selected="false" role="tab" tabindex="-1">Payments</a> </li>
                  <li class="nav-item" role="presentation"> <a class="nav-link" data-bs-toggle="tab" href="#tab3-3" aria-selected="false" role="tab" tabindex="-1">Updates</a> </li>
                </ul><!-- /.nav-tabs -->
                <div class="tab-content mt-0 mt-md-5">
                  <div class="tab-pane fade active show" id="tab3-1" role="tabpanel">
                    <p>Aenean lacinia bibendum nulla sed consectetur. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Vestibulum id ligula porta felis euismod semper. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                    <p>Donec sed odio dui. Donec sed odio dui. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Maecenas faucibus mollis interdum.</p>
                    <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                      <li><i class="uil uil-check"></i>Aenean eu leo quam. Pellentesque ornare.</li>
                      <li><i class="uil uil-check"></i>Nullam quis risus eget urna mollis ornare.</li>
                      <li><i class="uil uil-check"></i>Donec id elit non mi porta gravida at eget.</li>
                      <li><i class="uil uil-check"></i>Fusce dapibus, tellus ac cursus commodo.</li>
                    </ul>
                  </div>
                  <!--/.tab-pane -->
                  <div class="tab-pane fade" id="tab3-2" role="tabpanel">
                    <p>Sed posuere consectetur est at lobortis. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Maecenas faucibus mollis interdum. Maecenas faucibus mollis interdum. Sed posuere consectetur est at lobortis. Vestibulum id ligula porta felis euismod.</p>
                    <p> Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor vel scelerisque nisl.</p>
                    <p class="mb-0">Maecenas faucibus mollis interdum. Sed posuere consectetur est at lobortis. Maecenas sed diam eget risus varius blandit sit amet non magna. Donec id elit non mi porta gravida at eget metus. Curabitur blandit tempus porttitor. Nullam id dolor id nibh ultricies vehicula ut id elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus.</p>
                  </div>
                  <!--/.tab-pane -->
                  <div class="tab-pane fade" id="tab3-3" role="tabpanel">
                    <p>Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                    <p class="mb-0">Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Nullam id dolor id nibh ultricies vehicula ut id elit. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
                  </div>
                  <!--/.tab-pane -->
                </div>';
            } elseif ($this->type_tabs == 'type 2') {
               $cw_tabs_final = '<ul class="nav nav-tabs nav-pills" role="tablist">
                  <li class="nav-item" role="presentation"> <a class="nav-link active" data-bs-toggle="tab" href="#tab1-1" aria-selected="true" role="tab"><i class="uil uil-phone-volume pe-1"></i><span>Support</span></a> </li>
                  <li class="nav-item" role="presentation"> <a class="nav-link" data-bs-toggle="tab" href="#tab1-2" aria-selected="false" tabindex="-1" role="tab"><i class="uil uil-shield-exclamation pe-1"></i><span>Payments</span></a> </li>
                  <li class="nav-item" role="presentation"> <a class="nav-link" data-bs-toggle="tab" href="#tab1-3" aria-selected="false" tabindex="-1" role="tab"><i class="uil uil-laptop-cloud pe-1"></i><span>Updates</span></a> </li>
                </ul><!-- /.nav-tabs --><div class="tab-content">
                  <div class="tab-pane fade show active" id="tab1-1" role="tabpanel">
                    <p>Aenean lacinia bibendum nulla sed consectetur. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Vestibulum id ligula porta felis euismod semper. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                    <p>Donec sed odio dui. Donec sed odio dui. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Maecenas faucibus mollis interdum.</p>
                    <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                      <li><i class="uil uil-check"></i>Aenean eu leo quam. Pellentesque ornare.</li>
                      <li><i class="uil uil-check"></i>Nullam quis risus eget urna mollis ornare.</li>
                      <li><i class="uil uil-check"></i>Donec id elit non mi porta gravida at eget.</li>
                      <li><i class="uil uil-check"></i>Fusce dapibus, tellus ac cursus commodo.</li>
                    </ul>
                  </div>
                  <!--/.tab-pane -->
                  <div class="tab-pane fade" id="tab1-2" role="tabpanel">
                    <p>Sed posuere consectetur est at lobortis. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Maecenas faucibus mollis interdum. Maecenas faucibus mollis interdum. Sed posuere consectetur est at lobortis. Vestibulum id ligula porta felis euismod.</p>
                    <p> Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor vel scelerisque nisl.</p>
                    <p class="mb-0">Maecenas faucibus mollis interdum. Sed posuere consectetur est at lobortis. Maecenas sed diam eget risus varius blandit sit amet non magna. Donec id elit non mi porta gravida at eget metus. Curabitur blandit tempus porttitor. Nullam id dolor id nibh ultricies vehicula ut id elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus.</p>
                  </div>
                  <!--/.tab-pane -->
                  <div class="tab-pane fade" id="tab1-3" role="tabpanel">
                    <p>Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                    <p class="mb-0">Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Nullam id dolor id nibh ultricies vehicula ut id elit. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
                  </div>
                  <!--/.tab-pane -->
                </div><!-- /.tab-content -->';
            } elseif ($this->type_tabs == 'type 3') {
               $cw_tabs_final = '<ul class="nav nav-tabs nav-tabs-bg nav-tabs-shadow-lg d-flex justify-content-between nav-justified flex-lg-row flex-column" role="tablist">
                  <li class="nav-item" role="presentation"> <a class="nav-link d-flex flex-row active" data-bs-toggle="tab" href="#tab2-1" aria-selected="true" role="tab">
                      <div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 294.2 409.6" data-inject-url="https://sandbox.elemisthemes.com/assets/img/icons/lineal/rocket.svg" class="svg-inject icon-svg icon-svg-md text-yellow me-4"><path class="lineal-stroke" d="M31.2 342.9c-2.4 1.7-5.8 1.1-7.5-1.3-.6-.9-1-2-1-3.1v-77.1l68.9-77.2V150L5 247.1c-3.2 3.6-5 8.2-5 13v78.4c0 15.5 12.6 28.1 28.1 28.1 5.8 0 11.5-1.8 16.2-5.1l9.6-6.8-13.1-18.6-9.6 6.8zm258.1-95.8L200.7 148v34.2l70.8 79.3v77.1c0 3-2.4 5.4-5.4 5.4-1.1 0-2.2-.3-3.1-1l-9.6-6.7-13.1 18.6 9.6 6.7c12.7 8.9 30.3 5.9 39.2-6.9 3.3-4.7 5.1-10.4 5.1-16.1v-78.4c0-4.8-1.8-9.5-4.9-13.1zM147.1 409.6l-6.1-3.9c-2-1.3-49.3-32-49.3-72.5 0-40 23.3-72.6 53.1-74.2.8 0 1.6-.1 2.3-.1 4.1 0 8.1.6 12.1 1.7 9.1 2.7 17.6 8.4 24.6 16.6 11.9 14 18.7 34.4 18.7 55.9 0 40.5-47.2 71.2-49.3 72.5l-6.1 4zm0-127.9h-1c-17.5.9-31.7 24-31.7 51.5 0 19.6 19.9 39.1 32.6 48.9 12.7-9.8 32.6-29.3 32.6-48.9 0-16.2-4.9-31.2-13.3-41.1-4.1-4.8-8.8-8.1-13.6-9.5-1.8-.6-3.7-.9-5.6-.9z"></path><path class="lineal-fill" d="M147.1 11.4c-13.1 0-96.4 71.4-96.4 143.4 0 24.5 29.3 178.4 29.3 178.4h134.1s29.3-153.9 29.3-178.4c.1-72.4-83.9-143.4-96.3-143.4zm49.8 159.2c-1 4.9-2.7 9.6-5.1 14-.8 1.4-1.6 2.8-2.5 4.2-3.7 5.4-8.3 10.1-13.7 13.7-1.3.9-2.7 1.8-4.2 2.5-24.7 13.4-55.6 4.2-68.9-20.5s-4.2-55.6 20.5-68.9c7.4-4 15.8-6.2 24.3-6.1 3.4 0 6.9.3 10.2 1 4.9 1 9.6 2.7 14 5.1 7.2 3.9 13.4 9.5 17.9 16.3 5.7 8.4 8.7 18.3 8.7 28.4-.1 3.5-.4 6.9-1.2 10.3z"></path><path class="lineal-stroke" d="M147.1 222.6c-34.4 0-62.2-28-62.2-62.3 0-34.4 28-62.2 62.3-62.2 10.3 0 20.4 2.6 29.5 7.5 2.6 1.4 5.2 3.1 7.6 4.9 24.8 18.5 32.2 52.4 17.5 79.6-1 1.8-2 3.5-3.1 5.1-4.5 6.6-10.2 12.3-16.8 16.8-1.6 1.1-3.4 2.2-5.1 3.1-9.1 4.9-19.3 7.5-29.7 7.5zm0-101.7c-21.8-.3-39.7 17-40.1 38.8s17 39.7 38.8 40.1h1.3c2.7 0 5.4-.3 8-.8 3.8-.8 7.4-2.1 10.8-4 1.1-.6 2.2-1.3 3.2-2 4.2-2.8 7.8-6.5 10.7-10.7.7-1.1 1.4-2.1 2-3.3 1.9-3.4 3.2-7 4-10.8.5-2.6.8-5.3.8-8 0-12.5-5.9-24.2-15.9-31.6-1.5-1.1-3.1-2.2-4.8-3.1-3.4-1.9-7-3.2-10.8-4-2.6-.5-5.3-.8-8-.8v.2z"></path><path class="lineal-stroke" d="M89.5 321.8h115.2c9-47.9 27.4-149.1 27.4-167 0-63-69.5-123.9-85-131.5-6.7 3.3-26.8 18.4-46.8 43.2-24.6 30.4-38.2 61.8-38.2 88.4 0 17.9 18.4 119.1 27.4 166.9zm134.1 22.8H70.7l-1.8-9.3c-3-15.9-29.5-155.7-29.5-180.6 0-42.2 25-80.9 45.9-106C101.1 29.9 131.8 0 147.1 0c15 0 45.7 29.8 61.5 48.6 21.1 25.1 46.2 63.8 46.2 106.2 0 24.9-26.5 164.7-29.5 180.6l-1.7 9.2z"></path></svg></div>
                      <div>
                        <h4 class="mb-1">Easy Usage</h4>
                        <p>Duis mollis commodo luctus cursus commodo tortor mauris.</p>
                      </div>
                    </a> </li>
                  <li class="nav-item" role="presentation"> <a class="nav-link d-flex flex-row" data-bs-toggle="tab" href="#tab2-2" aria-selected="false" tabindex="-1" role="tab">
                      <div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 465.5" data-inject-url="https://sandbox.elemisthemes.com/assets/img/icons/lineal/savings.svg" class="svg-inject icon-svg icon-svg-md text-green me-4"><path class="lineal-stroke" d="M156.8 465.5c-9.9 0-24.2-4.8-56.2-40.6-16.2-18.2-29.5-36-30.1-36.8-.4-.5-.7-1-1-1.6-6.1-11-9.3-23.3-9.3-35.8v-90.9c0-7.9 6.4-14.4 14.3-14.4h116c16.5 0 32.4 6.5 44.2 18.1l59.4 58.5c17.2 17.2 17.3 45.1.1 62.3s-45.1 17.3-62.3.1L172.7 325c-5.9 0-15.5-.1-23.1-.1l-10.8-.1c-7.9 0-14.3-6.5-14.3-14.4s6.5-14.3 14.4-14.3h.1l10.8.1c6.8 0 14.1.1 19.6.1h6.9c4.2 0 8.5.1 12.7 4.3l63.5 63.5c6 6 15.7 6 21.7 0s6-15.7 0-21.7L214.6 284c-6.4-6.3-15-9.9-24-9.8H88.9v76.5c0 7.4 1.8 14.6 5.2 21.1 2.6 3.5 13.6 17.9 26.5 32.4 25.5 28.8 35.2 32.2 36.5 32.6h155.1c10.6 0 22.9-5.5 34.6-11.2 9.9-4.8 83.3-54.6 127.3-84.9l.7-.5c8.2-5.1 10.7-15.8 5.6-23.9-4.9-7.9-15.2-10.5-23.3-6L350 381.4c-6.6 4.4-15.5 2.6-19.9-4-4.4-6.6-2.6-15.5 4-19.9l107.5-71.3c.2-.1.3-.2.5-.3 21.8-13.1 50.1-6 63.2 15.8 12.9 21.6 6.2 49.6-15.2 62.8-13.3 9.2-115.8 79.6-130.8 86.9-14.7 7.1-30.5 14.1-47.1 14.1H156.8z"></path><path class="lineal-fill" d="M14.4 242.2h84.2v189.6H14.4z"></path><path class="lineal-stroke" d="M98.5 446.1H14.4c-7.9 0-14.4-6.4-14.4-14.4V242.2c0-7.9 6.4-14.4 14.3-14.4h84.1c7.9 0 14.3 6.4 14.3 14.4v189.6c.1 7.9-6.3 14.3-14.2 14.3zm-69.8-28.7h55.4V256.5H28.7v160.9zM273 214.2c-59.2 0-107.1-48-107.1-107.1C165.9 47.9 213.9 0 273.1 0c59.1 0 107.1 48 107.1 107.1-.1 59.1-48.1 107.1-107.2 107.1zm0-185.5c-43.3 0-78.4 35.1-78.4 78.4s35.1 78.4 78.4 78.4c43.3 0 78.4-35.1 78.4-78.4-.1-43.3-35.1-78.3-78.4-78.4z"></path><circle class="lineal-fill" cx="348.9" cy="178.6" r="92.8"></circle><path class="lineal-stroke" d="M348.9 285.7c-59.1 0-107.1-47.9-107.1-107.1 0-59.1 47.9-107.1 107.1-107.1S456 119.4 456 178.6c-.1 59.1-48 107-107.1 107.1zm0-185.5c-43.3 0-78.4 35.1-78.4 78.4S305.7 257 349 257s78.4-35.1 78.4-78.4c-.1-43.3-35.2-78.4-78.5-78.4z"></path><path class="lineal-stroke" d="M345.4 224.9c-15.5-.5-28.2-8.5-28.2-16.8 0-4.4 3.9-10.9 8.8-10.9 5.4 0 9.8 7.6 19.4 9.3v-20.9c-11.9-4.5-25.9-10.1-25.9-26.6s12.1-24.3 25.9-26.2v-3.6c0-1.8 2.1-3.5 4.9-3.5 2.5 0 4.9 1.7 4.9 3.5v3.2c8 .3 23.1 2.3 23.1 11.2 0 3.5-2.3 10.6-8 10.6-4.3 0-6.7-4.1-15.1-4.8v18.9c11.8 4.4 25.5 10.5 25.5 27.9 0 16-10.4 25.7-25.5 28.2v3.8c0 1.8-2.5 3.5-4.9 3.5-2.9 0-4.9-1.7-4.9-3.5v-3.3zm1.3-59.7v-15.4c-5.8 1.2-8.3 4.1-8.3 7.2 0 3.8 3.4 6.1 8.3 8.2zm7.2 23.9v17.3c4.4-1 7.9-3.5 7.9-8.1 0-4.3-3.2-7-7.9-9.2z"></path></svg></div>
                      <div>
                        <h4 class="mb-1">Fast Transactions</h4>
                        <p>Vivamus sagittis lacus augue fusce dapibus tellus nibh.</p>
                      </div>
                    </a> </li>
                </ul><div class="tab-content">
                  <div class="tab-pane fade show active" id="tab2-1" role="tabpanel">
                    <p class="mb-0">Etiam porta sem malesuada magna mollis euismod. Donec ullamcorper nulla non metus auctor fringilla. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Nullam quis risus eget urna. Curabitur blandit tempus porttitor. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Maecenas faucibus mollis interdum. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
                  </div>
                  <!--/.tab-pane -->
                  <div class="tab-pane fade" id="tab2-2" role="tabpanel">
                    <p class="mb-0">Etiam porta sem malesuada magna mollis euismod. Donec ullamcorper nulla non metus auctor fringilla. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Nullam quis risus eget urna. Curabitur blandit tempus porttitor. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Maecenas faucibus mollis interdum. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
                  </div>
                  <!--/.tab-pane -->
                </div>';
            }
         }
      } elseif ($tabs_final !== NULL) {
         $cw_tabs_final =  $tabs_final;
      } else {
         $cw_tabs_final  = NULL;
      }
      return $cw_tabs_final;
   }
}
