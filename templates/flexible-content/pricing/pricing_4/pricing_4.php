<?php
/* Add settings */
$settings = new Settings();
$settings->title = "Our Pricing";
$settings->subtitle = 'We offer <span class="underline">great prices</span>, premium and quality products for your business.';
$settings->paragraph = 'Enjoy a <a href="#" class="hover">free 30-day trial</a> and experience the full service. No credit card required!';
//$settings->imageurl = get_template_directory_uri() . '/dist/img/illustrations/i2.png';
//$settings->videourl = get_template_directory_uri() . '/dist/media/movie.mp4';
//$settings->typewriter = 'customer satisfaction,business needs,creative ideas';
//$settings->backgroundcolor = 'dark';
//$settings->backgroundcolor_light = 'light';
//$settings->textcolor = 'white';
$settings->GetDataACF();

/* Add buttons */
$button = new Buttons();
$button->form_button = "rounded-pill mt-2";
$button->button_size = NULL;
$button->class_button_wrapper = "d-flex justify-content-center flex-wrap justify-content-lg-start";
$button->data_cues = "slideInDown";
$button->data_group = "page-title-buttons";
$button->data_delay = "900";
$button->default_button = '<a href="#" class="btn btn-primary rounded-pill mt-2">See All Prices</a>';
?>

<section id="<?php echo esc_html($args['block_id']); ?>" class="<?php echo esc_html($args['block_class']); ?> wrapper bg-light">
   <div class="container py-14 py-md-16">
      <h2 class="display-4 mb-3"><?php echo $settings->title; ?></h2>
      <p class="lead fs-lg"><?php echo $settings->subtitle; ?></p>
      <div class="row">
         <div class="col-lg-4">
            <p><?php echo $settings->paragraph; ?></p>
         </div>
         <!--/column -->
      </div>
      <!--/.row -->
      <!--  buttons group -->
      <?php $button->showbuttons(); ?>
      <!--/buttons group -->

      <div class="table-responsive">
         <table class="table table-borderless table-striped text-center">
            <thead>
               <tr>
                  <th class="w-25"></th>
                  <th>
                     <div class="h4 mb-1">Basic Plan</div>
                     <div class="fs-15 fw-normal text-secondary">$9 / Monthly</div>
                  </th>
                  <th>
                     <div class="h4 mb-1">Premium Plan</div>
                     <div class="fs-15 fw-normal text-secondary">$19 / Monthly</div>
                  </th>
                  <th>
                     <div class="h4 mb-1">Corporate Plan</div>
                     <div class="fs-15 fw-normal text-secondary">$29 / Monthly</div>
                  </th>
                  <th>
                     <div class="h4 mb-1">Business Plan</div>
                     <div class="fs-15 fw-normal text-secondary">$49 / Monthly</div>
                  </th>
               </tr>
            </thead>
            <tbody>
               <tr>
                  <td class="option text-start">Project</td>
                  <td>1</td>
                  <td>5</td>
                  <td>20</td>
                  <td>90</td>
               </tr>
               <tr>
                  <td class="option text-start">API Access</td>
                  <td>100K</td>
                  <td>200K</td>
                  <td>300K</td>
                  <td>900K</td>
               </tr>
               <tr>
                  <td class="option text-start">Storage</td>
                  <td>100MB</td>
                  <td>200MB</td>
                  <td>500MB</td>
                  <td>900MB</td>
               </tr>
               <tr>
                  <td class="option text-start">Weekly Reports</td>
                  <td>-</td>
                  <td><i class="uil uil-check bg-pale-primary text-primary rounded-circle p-1"></i></td>
                  <td><i class="uil uil-check bg-pale-primary text-primary rounded-circle p-1"></i></td>
                  <td><i class="uil uil-check bg-pale-primary text-primary rounded-circle p-1"></i></td>
               </tr>
               <tr>
                  <td class="option text-start">24/7 Support</td>
                  <td>-</td>
                  <td>-</td>
                  <td><i class="uil uil-check bg-pale-primary text-primary rounded-circle p-1"></i></td>
                  <td><i class="uil uil-check bg-pale-primary text-primary rounded-circle p-1"></i></td>
               </tr>
            </tbody>
            <tfoot>
               <tr>
                  <th class="w-25"></th>
                  <th><a href="#" class="btn btn-soft-primary rounded-pill mt-1">Choose Plan</a></th>
                  <th><a href="#" class="btn btn-soft-primary rounded-pill mt-1">Choose Plan</a></th>
                  <th><a href="#" class="btn btn-soft-primary rounded-pill mt-1">Choose Plan</a></th>
                  <th><a href="#" class="btn btn-soft-primary rounded-pill mt-1">Choose Plan</a></th>
               </tr>
            </tfoot>
         </table>
      </div>
      <!-- /.table-responsive -->
   </div>
   <!-- /.container -->
</section>
<!-- /section -->