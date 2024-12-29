<?php

//* ---Icon Class ACF---

class CW_Divider
{
   public $type_divider;
   public $class_divider;
   public $div_wave;
   public $div_border;
   public $div_color;

   public function __construct($type_divider, $class_divider, $div_wave, $div_color, $div_border)
   {
      $this->div_color = $this->cw_div_color($div_color);
      $this->type_divider = $this->cw_type_divider($type_divider);
      $this->class_divider = $this->cw_class_divider($class_divider);
      $this->div_wave = $this->cw_div_wave($div_wave);
      $this->div_border = $this->cw_div_border($div_border);
   }

   //Type_divider
   public function cw_type_divider($type_divider)
   {
      if (have_rows('cw_divider')) {
         while (have_rows('cw_divider')) {
            the_row();
            $type_divider = get_sub_field('cw_start_divider_type');
         }
      } else {
         $type_divider = NULL;
      }
      return $type_divider;
   }

   //Color_divider
   public function cw_div_color($div_color)
   {
      if (have_rows('cw_divider')) {
         while (have_rows('cw_divider')) {
            the_row();
            $cw_div_color_object = new CW_Color(NULL, NULL);
            $cw_div_color = $cw_div_color_object->color;
            if ($cw_div_color == 'none') {
               $cw_div_color = $div_color;
            }
         }
      } else {
         $cw_div_color = NULL;
      }


      return $cw_div_color;
   }

   //Class_divider
   public function cw_class_divider($class_divider)
   {
      $type_divider = $this->type_divider;
      $cw_class_divider = '';
      if (have_rows('cw_divider') && $type_divider == 'angle' && $type_divider !== 'none') {
         while (have_rows('cw_divider')) {
            the_row();
            //$cw_class_divider = 'wrapper angled ' . get_sub_field('cw_start_angle');
            $cw_class_divider = 'angled ' . get_sub_field('cw_start_angle');
         }
      } else {
         $cw_class_divider = NULL;
      }

      if ($class_divider !== NULL) {
         $cw_class_divider .= $class_divider;
      }
      return $cw_class_divider;
   }

   //Div_wave
   public function cw_div_wave($div_wave)
   {
      $type_divider = $this->type_divider;
      $color = 'text-' . $this->div_color;
      if (have_rows('cw_divider') && $type_divider == 'wave' && $type_divider !== 'none') {
         while (have_rows('cw_divider')) {
            the_row();
            $type_wave = get_sub_field('cw_start_wave');
            $div_wave = '<!-- Wave 2 --><div class="overflow-hidden"><div class="divider ' . $color . ' mx-n2">';
            if ($type_wave == 'wave_1') {
               $div_wave .= '<svg xmlns="http{//www.w3.org/2000/svg" viewBox="0 0 1440 70"><path fill="currentColor" d="M1440,70H0V45.16a5762.49,5762.49,0,0,1,1440,0Z"/></svg>';
            } elseif ($type_wave == 'wave_2') {
               $div_wave .= '<svg xmlns="http{//www.w3.org/2000/svg" viewBox="0 0 1440 60"><path fill="currentColor" d="M0,0V60H1440V0A5771,5771,0,0,1,0,0Z"/></svg>';
            } elseif ($type_wave == 'wave_3') {
               $div_wave .= ' <svg xmlns="http{//www.w3.org/2000/svg" viewBox="0 0 1440 92.26"><path fill="currentColor" d="M1206,21.2c-60-5-119-36.92-291-5C772,51.11,768,48.42,708,43.13c-60-5.68-108-29.92-168-30.22-60,.3-147,27.93-207,28.23-60-.3-122-25.94-182-36.91S30,5.93,0,16.2V92.26H1440v-87l-30,5.29C1348.94,22.29,1266,26.19,1206,21.2Z"/></svg>';
            } elseif ($type_wave == 'wave_4') {
               $div_wave .= '<svg xmlns="http{//www.w3.org/2000/svg" viewBox="0 0 1440 100"><path fill="currentColor" d="M1260,1.65c-60-5.07-119.82,2.47-179.83,10.13s-120,11.48-180,9.57-120-7.66-180-6.42c-60,1.63-120,11.21-180,16a1129.52,1129.52,0,0,1-180,0c-60-4.78-120-14.36-180-19.14S60,7,30,7H0v93H1440V30.89C1380.07,23.2,1319.93,6.15,1260,1.65Z"/></svg>';
            } elseif ($type_wave == 'wave_5') {
               $div_wave .= '<svg xmlns="http{//www.w3.org/2000/svg" viewBox="0 0 1440 100"><path fill="currentColor" d="M1260.2,37.86c-60-10-120-20.07-180-16.76-60,3.71-120,19.77-180,18.47-60-1.71-120-21.78-180-31.82s-120-10-180-1.7c-60,8.73-120,24.79-180,28.5-60,3.31-120-6.73-180-11.74s-120-5-150-5H0V100H1440V49.63C1380.07,57.9,1320.13,47.88,1260.2,37.86Z"/></svg>';
            } elseif ($type_wave == 'wave_6') {
               $div_wave .= '<svg viewBox="0 0 1440 100" fill="currentColor" xmlns="http{//www.w3.org/2000/svg"><path d="M364.5 84.0006C588 82.5 1207.5 -79.9999 1440 52.6209V102.991H0V20.8009C0 20.8009 141 85.5013 364.5 84.0006Z"/></svg>';
            } elseif ($type_wave == 'wave_7') {
               $div_wave .= '<svg fill="currentColor" xmlns="http{//www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none"><path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path></svg>';
            } elseif ($type_wave == 'wave_8') {
               $div_wave .= '<svg viewBox="0 0 1140 114" xmlns="http{//www.w3.org/2000/svg"><path fill="currentColor" d="M1135.37 0.490889C1127.67 1.75327 1120.55 4.63509 1115.27 8.61985L1112.38 10.8003L1108.23 8.75613C1102.15 5.76302 1098.35 4.81361 1091.3 4.5297C1087.63 4.38116 1084.15 4.49563 1082.22 4.8286C1077.56 5.63264 1071.32 7.84352 1067.74 9.95991C1063.66 12.3788 1058.61 17.4611 1056.69 21.0974C1055.86 22.6592 1055.03 23.9365 1054.83 23.9365C1054.64 23.9365 1053.27 23.5204 1051.79 23.0121C1045.35 20.7926 1036.46 20.1721 1029.21 21.4363C1020.1 23.0235 1011.97 27.0659 1005.33 33.2997L1001.41 36.9847L999.14 35.4465C993.539 31.6503 984.262 27.949 976.325 26.3432C970.074 25.0785 957.034 25.2062 950.8 26.5926C933.13 30.5233 918.163 41.3851 909.679 56.4338C908.558 58.423 907.48 60.3172 907.284 60.6434C907.009 61.1004 905.929 60.7692 902.582 59.2029C890.155 53.3857 878.421 50.7546 864.909 50.7546C851.408 50.7546 838.516 53.7032 827.189 59.3814L823.766 61.0976L821.965 59.723C804.429 46.3419 781.33 39.4177 760.077 41.1711C745.572 42.3681 731.138 46.9184 719.878 53.8436C718.188 54.8838 716.732 55.7346 716.644 55.7346C716.556 55.7346 715.928 54.1506 715.25 52.2141C713.053 45.9454 709.582 40.6678 704.76 36.2597C701.301 33.0989 698.926 31.5118 694.452 29.3736C688.055 26.3155 684.545 25.5878 676.164 25.5828C669.52 25.5791 668.545 25.6859 664.808 26.8288C659.573 28.4296 655.035 30.6137 651.432 33.2661L648.577 35.3675L643.519 33.9979C635.676 31.8738 632.322 31.4404 623.697 31.4359C614.587 31.4314 609.676 32.1604 601.666 34.7084C594.989 36.8316 589.277 39.6162 583.273 43.6736C578.928 46.61 578.275 46.9225 578.039 46.1798C577.454 44.3364 572.993 38.0926 570.147 35.134C562.748 27.4416 554.042 22.8636 543.645 21.1978C538.755 20.4147 529.536 20.8303 524.885 22.0441C516.224 24.304 508.675 28.6013 502.883 34.5689C501.77 35.7168 500.682 36.6558 500.467 36.6558C500.251 36.6558 499.221 36.0693 498.176 35.3521C493.151 31.9024 484.481 28.317 477.031 26.608C471.953 25.4429 460.532 24.98 455.022 25.7154C435.088 28.3756 418.231 39.7943 408.432 57.2741L406.216 61.2271L405.916 59.6245C405.75 58.7432 404.701 56.1966 403.584 53.9658C398.863 44.5349 389.01 37.1259 377.207 34.1319C362.772 30.4706 347.698 33.6395 336.382 42.7147L332.777 45.6065L331.964 42.3804C329.193 31.3773 320.461 23.0062 307.664 19.0855C304.064 17.9821 302.959 17.8595 296.404 17.8349C290.662 17.8136 288.476 17.9867 285.994 18.6576C278.366 20.7213 272.265 24.2018 267.675 29.1083C265.061 31.9029 261.653 36.9143 261.653 37.9645C261.653 38.8008 261.23 38.5718 258.773 36.4046C255.695 33.6886 249.121 30.4579 244.845 29.5594C238.446 28.2147 230.557 29.2486 224.634 32.2086C219.571 34.7379 214.012 40.07 210.493 45.7728L208.881 48.3829L205.637 47.0447C191.157 41.0744 173.498 39.4331 157.874 42.6066C148.348 44.5413 137.197 48.9508 129.913 53.6623C128.1 54.8352 126.469 55.6279 126.289 55.4239C126.109 55.22 125.607 53.929 125.175 52.5548C123.141 46.0907 118.47 39.0098 113.5 34.8569C98.9939 22.7359 79.2313 22.0932 64.0945 33.2498L61.1859 35.3934L57.2807 34.2014C51.12 32.3203 47.0548 31.6535 39.9748 31.3614C32.2142 31.0421 25.8146 31.8211 18.5233 33.9734C13.6764 35.4043 5.89537 38.8739 2.15773 41.2715L0 42.6556V78.0406V113.426H720H1440V82.5141V51.6027L1438.75 50.4916C1435.02 47.1741 1427.14 42.3595 1421.09 39.707C1389.74 25.9503 1347.22 28.798 1321.21 46.3965L1316.67 49.4704L1314.17 48.0359C1302.69 41.4428 1289.49 37.1287 1276.42 35.6941C1270.54 35.0491 1258.17 35.4229 1252.62 36.4128C1244.18 37.9186 1233.37 41.336 1227.38 44.3914L1225.41 45.3984L1223.59 43.1848C1214.95 32.671 1202.28 26.4354 1187.37 25.3661L1183.27 25.0722L1182.03 21.8656C1178.21 12.0422 1168.85 4.77001 1155.66 1.37033C1150.26 -0.0201522 1140.95 -0.423988 1135.37 0.490889Z" /></svg>';
            } elseif ($type_wave == 'angle_1') {
               $div_wave .= '<svg viewBox="0 -20 1440 80" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M0 45V60H1440V0L0 45Z" fill="currentColor"></path></svg>';
            } elseif ($type_wave == 'angle_2') {
               $div_wave .= '<svg xmlns="http{//www.w3.org/2000/svg" viewBox="0 -20 1440 60"><path d="M1440 45V60H0V0L1440 45Z" fill="currentColor"/></svg>';
            };
            $div_wave .= '</div></div><!-- /.overflow-hidden -->';

            $this->class_divider = NULL;
         }
      } else {
         $div_wave = $div_wave;
      }
      return $div_wave;
   }


   //Div_border
   public function cw_div_border($div_border)
   {
      $type_divider = $this->type_divider;

      if (have_rows('cw_divider') && $type_divider == 'border' && $type_divider !== 'none') {
         while (have_rows('cw_divider')) {
            the_row();
            $type_border = get_sub_field('cw_border');
            if ($type_border == 'simple') {
               $div_border = '<!-- Simple --><hr class="my-8" />';
            } elseif ($type_border == 'double') {
               $div_border = '<!-- Double --><hr class="double my-8" />';
            } elseif ($type_border == 'icon') {
               $div_border = '<!-- Icon --><div class="divider-icon my-8">' . get_sub_field('border_icon') . '</i></div>';
            } else {
               $div_border = NULL;
            }
         }
         return $div_border;
      }
   }
}
