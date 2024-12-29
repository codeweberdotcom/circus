<?php
// --- New Gutenberg Block Layout Codeweber---
if (!function_exists('checkCategoryOrder')) {
   function checkCategoryOrder($categories)
   {
      //custom category array
      $temp = array(
         'slug'  => 'codeweber',
         'title' => 'Codeweber Blocks'
      );
      $temp_1 = array(
         'slug'  => 'codeweber_elements',
         'title' => 'Codeweber Elements'
      );
      //new categories array and adding new custom category at first location
      $newCategories = array();
      $newCategories[0] = $temp;
      $newCategories[1] = $temp_1;
      //appending original categories in the new array
      foreach ($categories as $category) {
         $newCategories[] = $category;
      }
      //return new categories
      return $newCategories;
   }
}
add_filter('block_categories_all', 'checkCategoryOrder', 99, 1);




// --- ACF Flexible Block
add_action('acf/init', 'my_acf_blocks_init');
function my_acf_blocks_init()
{

   // Check function exists.
   if (function_exists('acf_register_block_type')) {

      // Register a Hero_banner block.
      acf_register_block_type(array(
         'name'              => 'hero_banner',
         'title'             => __('Hero banner'),
         'description'       => __('Hero banner flexible block.'),
         'render_template'   => 'templates/flexible-content/hero_banner.php',
         'category'          => 'codeweber',
         'align'           => 'full',
         'supports'        => array(
            'align'        => array('full'),
            'align'        => true,
         ),
         'mode' => 'preview',

      ));


      // Register a Services block.
      acf_register_block_type(array(
         'name'              => 'services',
         'title'             => __('Services'),
         'description'       => __('Services flexible block.'),
         'render_template'   => 'templates/flexible-content/services.php',
         'category'          => 'codeweber',
         'align'           => 'full',
         'supports'        => array(
            'align'        => array('full'),
            'align'        => true,
         ),
         'mode' => 'preview',

      ));

      // Register Grid block.
      acf_register_block_type(array(
         'name'              => 'grid',
         'title'             => __('Grid block'),
         'description'       => __('Grid block flexible block.'),
         'render_template'   => 'templates/flexible-content/grid.php',
         'category'          => 'codeweber',
         'align'           => 'full',
         'supports'        => array(
            'align'        => array('full'),
            'align'        => true,
         ),
         'mode' => 'preview',

      ));

      // Register a Slider block.
      acf_register_block_type(array(
         'name'              => 'sliders',
         'title'             => __('Slider'),
         'description'       => __('Slider block flexible block.'),
         'render_template'   => 'templates/flexible-content/sliders.php',
         'category'          => 'codeweber',
         'align'           => 'full',
         'supports'        => array(
            'align'        => array('full'),
            'align'        => true,
         ),
         'mode' => 'preview',

      ));

      // Register a Contact block.
      acf_register_block_type(array(
         'name'              => 'contact',
         'title'             => __('Contact'),
         'description'       => __('Contact block flexible block.'),
         'render_template'   => 'templates/flexible-content/contact.php',
         'category'          => 'codeweber',
         'align'           => 'full',
         'supports'        => array(
            'align'        => array('full'),
            'align'        => true,
         ),
         'mode' => 'preview',

      ));

      // Register a Сlients block.
      acf_register_block_type(array(
         'name'              => 'clients',
         'title'             => __('Clients'),
         'description'       => __('Clients block flexible block.'),
         'render_template'   => 'templates/flexible-content/clients.php',
         'category'          => 'codeweber',
         'align'           => 'full',
         'supports'        => array(
            'align'        => array('full'),
            'align'        => true,
         ),
         'mode' => 'preview',

      ));

      // Register a About block.
      acf_register_block_type(array(
         'name'              => 'about',
         'title'             => __('About'),
         'description'       => __('About block flexible block.'),
         'render_template'   => 'templates/flexible-content/about.php',
         'category'          => 'codeweber',
         'align'           => 'full',
         'supports'        => array(
            'align'        => array('full'),
            'align'        => true,
         ),
         'mode' => 'preview',

      ));

      // Register a CTA block.
      acf_register_block_type(array(
         'name'              => 'call-to-action',
         'title'             => __('Call to action'),
         'description'       => __('call to Action block flexible block.'),
         'render_template'   => 'templates/flexible-content/call-to-action.php',
         'category'          => 'codeweber',
         'align'           => 'full',
         'supports'        => array(
            'align'        => array('full'),
            'align'        => true,
         ),
         'mode' => 'preview',

      ));

      // Register a Blog block.
      acf_register_block_type(array(
         'name'              => 'blog',
         'title'             => __('Blog'),
         'description'       => __('Blog block flexible block.'),
         'render_template'   => 'templates/flexible-content/blog.php',
         'category'          => 'codeweber',
         'align'           => 'full',
         'supports'        => array(
            'align'        => array('full'),
            'align'        => true,
         ),
         'mode' => 'preview',

      ));

      // Register a Process block.
      acf_register_block_type(array(
         'name'              => 'process',
         'title'             => __('Process'),
         'description'       => __('Process block flexible block.'),
         'render_template'   => 'templates/flexible-content/process.php',
         'category'          => 'codeweber',
         'align'           => 'full',
         'supports'        => array(
            'align'        => array('full'),
            'align'        => true,
         ),
         'mode' => 'preview',

      ));

      // Register a Widgets block.
      acf_register_block_type(array(
         'name'              => 'widgets',
         'title'             => __('Widgets'),
         'description'       => __('Widgets flexible block.'),
         'render_template'   => 'templates/flexible-content/widgets.php',
         'category'          => 'codeweber',
         'align'           => 'full',
         'supports'        => array(
            'align'        => array('full'),
            'align'        => true,
         ),
         'mode' => 'preview',
      ));

      // Register a Features block.
      acf_register_block_type(
         array(
            'name'              => 'features',
            'title'             => __('Features'),
            'description'       => __('Features.'),
            'render_template'   => 'templates/flexible-content/features.php',
            'category'          => 'codeweber',
            'mode'                    => 'auto',
            'align'           => 'full',
            'supports'        => array(
               'align'        => array('full'),
               'align'        => true,
            ),
            'mode' => 'preview',
         )
      );

      // Register a Facts block.
      acf_register_block_type(
         array(
            'name'              => 'facts',
            'title'             => __('Facts'),
            'description'       => __('Facts.'),
            'render_template'   => 'templates/flexible-content/facts.php',
            'category'          => 'codeweber',
            'mode'                    => 'auto',
            'align'           => 'full',
            'supports'        => array(
               'align'        => array('full'),
               'align'        => true,
            ),
            'mode' => 'preview',

         )

      );

      // Register a FAQ block.
      acf_register_block_type(
         array(
            'name'              => 'faq',
            'title'             => __('Faq'),
            'description'       => __('Faq.'),
            'render_template'   => 'templates/flexible-content/faq.php',
            'category'          => 'codeweber',
            'mode'                    => 'auto',
            'align'           => 'full',
            'supports'        => array(
               'align'        => array('full'),
               'align'        => true,
            ),
            'mode' => 'preview',
         )
      );

      // Register a Testimonial block.
      acf_register_block_type(
         array(
            'name'              => 'testimonial',
            'title'             => __('Testimonial'),
            'description'       => __('Testimonial.'),
            'render_template'   => 'templates/flexible-content/testimonials.php',
            'category'          => 'codeweber',
            'mode'                    => 'auto',
            'align'           => 'full',
            'supports'        => array(
               'align'        => array('full'),
               'align'        => true,
            ),
            'mode' => 'preview',
         )
      );


      // Register a Pricing block.
      acf_register_block_type(
         array(
            'name'                => 'pricing',
            'title'                => 'Pricing',
            'description'        => 'A pricing content block.',
            'render_template'   => 'templates/flexible-content/pricing.php',
            'category'          => 'codeweber',
            'mode'                    => 'auto',
            'align'           => 'full',
            'supports'        => array(
               'align'        => array('full'),
               'align'        => true,
            ),
            'mode' => 'preview',
         )
      );

      // Register a Page Header.
      acf_register_block_type(
         array(
            'name'                => 'page_header',
            'title'                => 'Page Header',
            'description'        => 'A page header content block.',
            'render_template'   => 'templates/flexible-content/page_header.php',
            'category'          => 'codeweber',
            'mode'                    => 'auto',
            'align'           => 'full',
            'supports'        => array(
               'align'        => array('full'),
               'align'        => true,
            ),
            'mode' => 'preview',
         )
      );



      // Register a Restricted block.
      acf_register_block_type(array(
         'name'                => 'restricted',
         'title'                => 'Restricted',
         'description'        => 'A restricted content block.',
         'category'            => 'formatting',
         'mode'                => 'preview',
         'supports'            => array(
            'align' => true,
            'mode' => false,
            'jsx' => true
         ),
         'render_template' => 'template-parts/flexible-content/block-restricted.php',
      ));


      // Register a Section.
      acf_register_block_type(
         array(
            'name'              => 'section',
            'title'             => __('Section'),
            'description'       => __('Section.'),
            'render_template'   => 'templates/flexible-content/section.php',
            'category'          => 'codeweber_elements',
            'mode'                    => 'auto',
            'align'           => 'full',
            'supports'        => array(
               'align'        => array('full'),
               'align'        => true,
               'jsx' => true,
            ),
            'mode' => 'preview',

         )

      );


      // Register a Section.
      acf_register_block_type(
         array(
            'name'              => 'woocommerce',
            'title'             => __('Woocommerce'),
            'description'       => __('Woocommerce.'),
            'render_template'   => 'templates/flexible-content/woocommerce.php',
            'category'          => 'codeweber_elements',
            'mode'                    => 'auto',
            'align'           => 'full',
            'supports'        => array(
               'align'        => array('full'),
               'align'        => true,
               'jsx' => true,
            ),
            'mode' => 'preview',

         )

      );

      // Register a Icon.
      acf_register_block_type(
         array(
            'name'              => 'cw_elements',
            'title'             => __('CW Elements'),
            'description'       => __('CW Elements.'),
            'render_template'   => 'templates/flexible-content/cw_elements.php',
            'category'          => 'codeweber_elements',
            'mode'                    => 'auto',
            'align'           => 'full',
            'supports'        => array(
               'align'        => array('full'),
               'align'        => true,
               'jsx' => true,
            ),
            'mode' => 'preview',

         )

      );


      // Register a Portfolio block.
      acf_register_block_type(
         array(
            'name'              => 'portfolio',
            'title'             => __('Portfolio'),
            'description'       => __('Portfolio.'),
            'render_template'   => 'templates/flexible-content/portfolio.php',
            'category'          => 'codeweber',
            'mode'                    => 'auto',
            'align'           => 'full',
            'supports'        => array(
               'align'        => array('full'),
               'align'        => true,
            ),
            'mode' => 'preview',
         )
      );


      // Register a Team block.
      acf_register_block_type(
         array(
            'name'              => 'team',
            'title'             => __('Team'),
            'description'       => __('Team.'),
            'render_template'   => 'templates/flexible-content/team.php',
            'category'          => 'codeweber',
            'mode'                    => 'auto',
            'align'           => 'full',
            'supports'        => array(
               'align'        => array('full'),
               'align'        => true,
            ),
            'mode' => 'preview',
         )
      );

      // Register a Modal block.
      acf_register_block_type(
         array(
            'name'              => 'modal',
            'title'             => __('Modal'),
            'description'       => __('Modal.'),
            'render_template'   => 'templates/flexible-content/modal.php',
            'category'          => 'codeweber',
            'mode'                    => 'auto',
            'align'           => 'full',
            'supports'        => array(
               'align'        => array('full'),
               'align'        => true,
            ),
            'mode' => 'preview',
         )
      );
   }
}
