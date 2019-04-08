<?php
/**
 * @file
 * The primary PHP file for this theme.
 */

function fleming_html_head_alter(&$head_elements) {
//  dsm($head_elements);
  unset($head_elements['system_meta_content_type']);
}
