<?php

/**
 * Implements hook_panels_layouts()
 */
function fleming_2col_nowell_panels_layouts() {
  $items['2col_nowell'] = array(
    'title' => t('2 column - no well'),
    'category' => t('Custom Layouts'),
    'icon' => '2col_nowell.png',
    'theme' => '2col_nowell',
    //'css' => 'panel-cusom.css', // Optional CSS
    'regions' => array(
      'top' => t('Top'),
      'first' => t('First'),
      'second' => t('Second'),
      'third' => t('Third'),
      'fourth' => t('Fourth'),
      'bottom' => t('Bottom'),
    ),
  );
  return $items;
}

