<h3 class="h4 widget-title mb-3"><?php esc_html_e('Tags', 'codeweber'); ?></h3>
<?php
$tags = get_tags([
   'number'       => 4,
   'order'        => 'ASC',
   'hide_empty'   => true,
]); ?>
<ul class="list-unstyled tag-list">
   <?php foreach ($tags as $tag) {
      $tag_link = get_tag_link($tag->term_id); ?>
      <li><a href="<?php echo $tag_link; ?>" title='<?php echo $tag->name; ?>' class="btn btn-soft-ash btn-sm rounded-pill"><?php echo $tag->name; ?></a></li>
   <?php } ?>
</ul>