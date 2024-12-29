<?php
global $codeweber;

?>

<section class="wrapper bg-light<?php echo $codeweber['page_settings']['angle_class']; ?>">
   <div class="container<?php echo $codeweber['page_settings']['container_class']; ?>">

      <div class="row gx-5 gy-5 <?php echo $codeweber['page_settings']['content_class']; ?>">
         <aside class="col-xl-3 sidebar mt-md-0 d-none d-xl-block">
            <div class="widget sticky-top">
               <h4 class="widget-title mb-3"><?php esc_html_e('Categories', 'codeweber'); ?></h4>
               <nav id="sidebar-nav">
                  <?php
                  $args = [
                     'taxonomy' => 'faq_categories',
                     'orderby'       => 'name',
                     'order'         => 'ASC'
                  ]; ?>
                  <?php $terms = get_terms($args); ?>
                  <ul class="list-unstyled text-reset">
                     <?php foreach ($terms as $term) : ?>
                        <li><a class="nav-link scroll" href="#<?php echo esc_html($term->slug); ?>"><?php echo esc_html($term->name); ?></a></li>
                     <?php endforeach; ?>
                  </ul>
               </nav>
               <!-- /nav -->
            </div>
            <!-- /.widget -->
            <?php do_action('sidebar_faq_end_type_1'); ?>
         </aside>
         <!-- /column -->
         <div class="col-xl-9 mt-md-0">
            <?php foreach ($terms as $term) { ?>
               <section id="<?php echo esc_html($term->slug); ?>" class="wrapper mt-0">
                  <div class="card mb-5">
                     <div class="card-body p-10">
                        <h2 class="mb-6"><?php echo esc_html($term->name); ?></h2>
                        <div class="accordion accordion-wrapper" id="accordion<?php echo esc_html($term->slug); ?>">
                           <?php
                           $args = array(
                              'post_type' => 'faq',
                              'posts_per_page' => -1,
                              'post_status' => 'publish',
                              'tax_query' => array(
                                 array(
                                    'taxonomy' => 'faq_categories',
                                    'field'    => 'slug',
                                    'terms'    => $term->slug
                                 )
                              )
                           );
                           $query = new WP_Query($args);
                           if ($query->have_posts()) {
                              while ($query->have_posts()) {
                                 $query->the_post();
                                 $post_id =  get_the_ID(); ?>
                                 <div class="card plain accordion-item">
                                    <div class="card-header" id="headingOne">
                                       <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $post_id; ?>" aria-expanded="true" aria-controls="collapse<?php echo $post_id; ?>">
                                          <h3 class="h6"><?php the_title(); ?></h3>
                                       </button>
                                    </div>
                                    <!--/.card-header -->
                                    <div id="collapse<?php echo $post_id; ?>" class="accordion-collapse collapse" aria-labelledby="heading<?php echo $post_id; ?>" data-bs-parent="#accordion<?php echo esc_html($term->slug); ?>">
                                       <div class="card-body">
                                          <p><?php the_field('paragraph', $post_id); ?></p>
                                       </div>
                                       <!--/.card-body -->
                                    </div>
                                    <!--/.accordion-collapse -->
                                 </div>
                                 <!--/.accordion-item -->
                           <?php
                              }
                           }
                           wp_reset_postdata();
                           ?>
                        </div>
                        <!--/.accordion -->
                     </div>
                     <!--/.card-body -->
                  </div>
                  <!--/.card -->
               </section>
            <?php }; ?>
         </div>
         <!-- /column -->
      </div>
      <!-- /.row -->
   </div>
   <!-- /.container -->
   </div>
   <!-- /.content-wrapper -->
   </div>



</section>
<!-- /section -->