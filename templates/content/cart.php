<?php
global $post; ?>
<div class="container pt-12 pt-md-14 pb-14 pb-md-16">
   <?php if (get_theme_mod('codeweber_page_header') == 'type_1') : ?>
      <div class="row align-items-center mb-10 position-relative zindex-1">
         <div class="col-12">
            <h1 class="display-6 mb-1 h2"><?php echo codeweber_page_title(); ?></h1>
         </div>
      </div>
   <?php endif; ?>
   <?php the_content(); ?>
</div>Скорее всего удалить этот шаблон cart.php