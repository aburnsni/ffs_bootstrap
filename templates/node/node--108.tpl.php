<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php print $user_picture; ?>

  <?php print render($title_prefix); ?>
  <?php if (!$page && $title): ?>
    <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
  <?php endif; ?>
  <?php print render($title_suffix); ?>

  <?php if ($display_submitted): ?>
    <div class="submitted">
      <?php print $submitted; ?>
    </div>
  <?php endif; ?>
<?php
// print "<pre>";
// print_r ($node);
// print "</pre>";
?>
  <div class="content"<?php print $content_attributes; ?>>
    <?php
      hide($content['comments']);
      hide($content['links']);
      hide($content['field_file']);
      print "<div class='col-xs-12'>";
      print render($content);
      print "</div>";
      $n = 0;
      while ($node->field_file['und'][$n]['fid']) {
        print "<div class='col-xs-6 col-sm-4 col-md-3 text-center'>";
        print render($content['field_file'][$n]);
        print "<h3>";
        print l($node->field_file['und'][$n]['description'],file_create_url($node->field_file['und'][$n]['uri']));
        print "</h3></div>";
        $n++;
        $clearfixclass = '';
        if ($n % 2 == 0) {
          $clearfixclass .= "visible-xs-block ";
        }
        if ($n % 3 == 0) {
          $clearfixclass .= "visible-sm-block ";
        }
        if ($n % 4 == 0) {
          $clearfixclass .= "visible-md-block ";
        }
        if (strlen($clearfixclass) > 0) {
          print "<div class='clearfix " . $clearfixclass . "'></div>";
        }


      }
    ?>
  </div>
  <div class="col-xs-12">
    <?php print render($content['links']); ?>
    <?php print render($content['comments']); ?>
  </div>
</div>
