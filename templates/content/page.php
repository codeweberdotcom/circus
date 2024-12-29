<?php
global $post;

if (get_field('container') == 1) {
   echo '<div class="container py-14 py-md-16">';
}

the_content();

if (get_field('container') == 1) {
   echo '</div>';
}
