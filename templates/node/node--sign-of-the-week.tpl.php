<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php print $user_picture; ?>

  <?php print render($title_prefix); ?>
  <?php if (!$page && $title): ?>
    <h2<?php print $title_attributes; ?> class="text-center"><?php print $title; ?></h2>
  <?php endif; ?>
  <?php print render($title_suffix); ?>

  <?php if ($display_submitted): ?>
    <div class="submitted">
      <?php print $submitted; ?>
    </div>
  <?php endif; ?>

  <div class="content"<?php print $content_attributes; ?>>
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      hide($content['field_week_commencing']);
      hide($content['field_symbol']);
      hide($content['field_sign']);
      print "<div class='row'>";
      print "<div class='col-xs-12 col-sm-6 text-center' style='padding: 15px'>";
      print render($content['field_symbol']);
      print "</div>";
      print "<div class='col-xs-12 col-sm-6 text-center' style='padding:15px'>";
      print render($content['field_sign']);
      print "</div>";
      print "</div>";
      if ($page) {
        print "<div class='row'><div class='col-xs-12'>".render($content['week-commencing'])."</div></div>";
      }
//print "<pre>";
//print_r ($node);
//print "</pre>";
//      print render($content);

    ?>
  </div>

  <?php print render($content['links']); ?>

  <?php print render($content['comments']); ?>

</div>
