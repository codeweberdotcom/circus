<?php
// --- Accordeon ---

class AccordeonS
{
   public $type_accordeon = 'plane';
   public $default_accordeon = NULL;
   public $section_id = NULL;
   public $section_id_2 = NULL;
   public function accordeon()
   {
      if (have_rows('accordeon')) :
         while (have_rows('accordeon')) : the_row();
            $type_accordeon = get_sub_field('type_accordeon');
            $style_accordeon = get_sub_field('style_accordeon');
            if ($style_accordeon == 'border') :
               $card_style_class = NULL;
            elseif ($style_accordeon == 'plain') :
               $card_style_class = 'plain';
            endif;
            if (get_sub_field('custom_or_posttype') == 1) :
               $post = get_sub_field('post');
               if ($post) :
                  $row_id = 1;
                  foreach ($post as $post_ids) :
                     $title = get_the_title($post_ids);
                     $paragraph = get_field('paragraph', $post_ids);
                     if (
                        $type_accordeon == 'Type_1' && $row_id == '1'
                     ) :
                        $class_expand = 'true';
                        $button_accordeon_class = 'accordion-button';
                        $collapse_class = 'accordion-collapse collapse show ';
                     else :
                        $class_expand = 'false';
                        $button_accordeon_class = 'collapsed';
                        $collapse_class = 'collapse';
                     endif; ?>
                     <div class="card <?php echo $card_style_class; ?> accordion-item">
                        <div class="card-header" id="headingOne-<?php echo  $this->section_id . '-' . $row_id; ?>">
                           <button class="<?php echo $button_accordeon_class; ?>" data-bs-toggle="collapse" data-bs-target="#collapseOne-<?php echo $this->section_id . '-' . $row_id; ?>" aria-expanded="<?php echo $class_expand; ?>" aria-controls="collapseOne-<?php echo $this->section_id; ?>"> <?php echo $title; ?> </button>
                        </div>
                        <!--/.card-header -->
                        <div id="collapseOne-<?php echo $this->section_id . '-' . $row_id; ?>" class="<?php echo $collapse_class; ?>" aria-labelledby="headingOne-<?php echo $this->section_id; ?>" data-bs-parent="#<?php echo $this->section_id; ?>">
                           <div class="card-body">
                              <p><?php echo $paragraph; ?></p>
                           </div>
                           <!--/.card-body -->
                        </div>
                        <!--/.accordion-collapse -->
                     </div>
                     <!--/.accordion-item -->
                  <?php $row_id++;
                  endforeach;
               else :
                  echo $this->default_accordeon;
               endif;
            else :
               if (have_rows('accordeon_repeater')) :
                  $row_id = 1;
                  while (have_rows('accordeon_repeater')) : the_row();
                     $title = get_sub_field('title');
                     $paragraph = get_sub_field('paragraph');
                     if (
                        $type_accordeon == 'Type_1' && $row_id == '1'
                     ) :
                        $class_expand = 'true';
                        $button_accordeon_class = 'accordion-button';
                        $collapse_class = 'accordion-collapse collapse show ';
                     else :
                        $class_expand = 'false';
                        $button_accordeon_class = 'collapsed';
                        $collapse_class = 'collapse';
                     endif;
                  ?>
                     <div class="card <?php echo $card_style_class; ?> accordion-item">
                        <div class="card-header" id="headingOne-<?php echo  $this->section_id . '-' . $row_id; ?>">
                           <button class="<?php echo $button_accordeon_class; ?>" data-bs-toggle="collapse" data-bs-target="#collapseOne-<?php echo $this->section_id . '-' . $row_id; ?>" aria-expanded="<?php echo $class_expand; ?>" aria-controls="collapseOne-<?php echo $this->section_id; ?>"> <?php echo $title; ?> </button>
                        </div>
                        <!--/.card-header -->
                        <div id="collapseOne-<?php echo $this->section_id . '-' . $row_id; ?>" class="<?php echo $collapse_class; ?>" aria-labelledby="headingOne-<?php echo $this->section_id; ?>" data-bs-parent="#<?php echo $this->section_id; ?>">
                           <div class="card-body">
                              <p><?php echo $paragraph; ?></p>
                           </div>
                           <!--/.card-body -->
                        </div>
                        <!--/.accordion-collapse -->
                     </div>
                     <!--/.accordion-item -->
                  <?php $row_id++;
                  endwhile;
               else :
                  echo $this->default_accordeon;
               endif;
            endif;
         endwhile;
      endif;
   }

   public function accordeon1()
   {
      if (have_rows('accordeon_repeater_1_accordeon')) :
         while (have_rows('accordeon_repeater_1_accordeon')) : the_row();
            $type_accordeon = get_sub_field('type_accordeon');
            $style_accordeon = get_sub_field('style_accordeon');
            if ($style_accordeon == 'border') :
               $card_style_class = NULL;
            elseif ($style_accordeon == 'plain') :
               $card_style_class = 'plain';
            endif;
            if (have_rows('accordeon_repeater')) :
               while (have_rows('accordeon_repeater')) : the_row();

                  $title = get_sub_field('title');
                  $paragraph = get_sub_field('paragraph');
                  $row_id = get_row_index();

                  if ($type_accordeon == 'Type_1' && $row_id == '1') :
                     $class_expand = 'true';
                     $button_accordeon_class = 'accordion-button';
                     $collapse_class = 'accordion-collapse collapse show ';
                  else :
                     $class_expand = 'false';
                     $button_accordeon_class = 'collapsed';
                     $collapse_class = 'collapse';
                  endif; ?>

                  <div class="card <?php echo $card_style_class; ?> accordion-item">
                     <div class="card-header" id="headingOne-<?php echo  $this->section_id . '-' . $row_id; ?>">
                        <button class="<?php echo $button_accordeon_class; ?>" data-bs-toggle="collapse" data-bs-target="#collapseOne-<?php echo $this->section_id . '-' . $row_id; ?>" aria-expanded="<?php echo $class_expand; ?>" aria-controls="collapseOne-<?php echo $this->section_id; ?>"> <?php echo $title; ?> </button>
                     </div>
                     <!--/.card-header -->
                     <div id="collapseOne-<?php echo $this->section_id . '-' . $row_id; ?>" class="<?php echo $collapse_class; ?>" aria-labelledby="headingOne-<?php echo $this->section_id; ?>" data-bs-parent="#<?php echo $this->section_id; ?>">
                        <div class="card-body">
                           <p><?php echo $paragraph; ?></p>
                        </div>
                        <!--/.card-body -->
                     </div>
                     <!--/.accordion-collapse -->
                  </div>
                  <!--/.accordion-item -->
<?php
               endwhile;
            else :
               echo $this->default_accordeon;
            endif;
         endwhile;
      endif;
   }
}
