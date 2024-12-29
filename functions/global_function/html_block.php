<?php


/* HTML Block */
add_shortcode('html_block', 'html_block_shortcode');
function html_block_shortcode($atts)
{
   $atts = shortcode_atts([
      'post_id'  => NULL,
   ], $atts);

   $post = get_post($atts['post_id']); // specific post
   $the_content = apply_filters('the_content', $post->post_content);
   if (!empty($the_content)) {
      $test =  $the_content;
   }


   return $test;
}

add_filter('manage_edit-html_blocks_columns', 'my_columns');
function my_columns($columns)
{
   $columns['views'] = 'Views';

   return $columns;
}


add_filter('manage_edit-html_blocks_columns', 'posts_columns_id', 5);
add_action('manage_posts_custom_column', 'posts_custom_id_columns', 5, 2);



function posts_columns_id($defaults)
{
   $defaults['wps_post_id'] = __('Shortcode');
   return $defaults;
}

function posts_custom_id_columns($column_name, $id)
{
   if ($column_name === 'wps_post_id') {
      echo "[html_block post_id='";
      echo $id;
      echo "']";
   }
}
