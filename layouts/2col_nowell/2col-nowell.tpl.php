<?php
/**
 * @file
 * Template for a 2 column panel layout.
 */
?>
<?php !empty($css_id) ? print '<div id="' . $css_id . '">' : ''; ?>
<?php if (!empty($content['top'])) : ?>
  <div class="row col2-nowell-top">
   <?php print $content['top']; ?>
  </div>
<?php endif; ?>
 <?php
    $panelcontent = array ($content['first'],$content['second'],$content['third'],$content['fourth']);
    $panelcontentfilled = array_values(array_filter($panelcontent));
  ?>
  <div class="row col2-nowell-mid">
    <div class="col-md-6 col-sm-12">
      <div class="col2-nowell-mid-left">
        <?php if (@$panelcontentfilled[0]):
          print $panelcontentfilled[0];
          endif; ?>
      </div>
    </div>
    <div class="col-md-6 col-sm-12">
      <div class="col2-nowell-mid-right">
        <?php if (@$panelcontentfilled[1]):
          print $panelcontentfilled[1];
          endif; ?>
      </div>
    </div>
  </div>
<?php if (!empty($content['bottom'])) : ?>
  <div class="row col2-nowell-bottom">
    <?php print $content['bottom']; ?>
  </div>
<?php endif; ?>
<?php !empty($css_id) ? print '</div>' : ''; ?>
