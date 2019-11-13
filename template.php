<?php
/**
 * @file
 * The primary PHP file for this theme.
 */

function fleming_html_head_alter(&$head_elements) {
//  dsm($head_elements);
  unset($head_elements['system_meta_content_type']);
}

function fleming_colorbox_node_caption($variables){
  $markup     = "<div class=\"cnc-caption cnc-caption-${variables['location']} center-block\">${variables['caption']}</div>";
  return ( $variables['location'] == 'before' ) ? $markup . $variables['item'] : $variables['item'] . $markup;
}
