<?php

/**
 * CW Paragraph
 */
$block = new CW_Settings(
   $cw_settings = array(
      'paragraph' => 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.',
      'patternParagraph' => '<p class="mb-6 %2$s">%1$s</p>',
   )
);

echo $block->paragraph;
