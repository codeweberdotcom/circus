<h3 class="h4 widget-title mb-3"><?php esc_html_e('Categories', 'codeweber'); ?></h3>
<ul class="unordered-list bullet-primary text-reset">
   <?php
   $categories = get_categories([
      'number'       => 3,
      'order'        => 'ASC',
      'hide_empty'   => true,
   ]);
   foreach ($categories as $category) {
      echo '<li><a href="' . get_category_link($category->term_id) . '">' . $category->name . ' (' . $category->count . ')</a></li>';
   }
   ?>
</ul>