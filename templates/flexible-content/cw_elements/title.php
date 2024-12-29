<?php

/**
 * CW Title
 */
$block = new CW_Settings(
   $cw_settings = array(
      'title' => 'Who Are We?',
      'patternTitle' => '<h2 class="display-4 mb-3 %2$s">%1$s</h2>',

      'subtitle' => 'We are a digital and branding company that believes in the power of creative strategy and along with great design.',
      'patternSubtitle' => '<p class="lead fs-lg %2$s">%1$s</p>',
   )
);

echo $block->subtitle_first;
echo $block->title;
echo $block->subtitle_second;
