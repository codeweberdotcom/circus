<?php
$args = array(
   'type'            => 'monthly',
   'limit'           => '', // при '0' получим ошибку синтаксиса (значение нужно указывать числом или пустой строкой)
   'format'          => 'html',
   'before'          => '',
   'after'           => '',
   'show_post_count' => false,
   'echo'            => 1,
   'post_type'       => 'post',
);
?>

<h3 class="h4 widget-title mb-3"><?php esc_html_e('Archive', 'codeweber'); ?></h3>
<ul class="unordered-list bullet-primary text-reset">
   <?php wp_get_archives($args); ?>
</ul>