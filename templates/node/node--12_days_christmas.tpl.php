<?php if (!$teaser) { ?>
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
  <div class="content"<?php print $content_attributes; ?>>
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      print render($content);
    ?>
  </div>
  <?php print render($content['links']); ?>
  <?php print render($content['comments']); ?>
</div>
<?php } else { ?>

<div class="twelvedays">
  <div class="thumbnail">
    <?php print render($content['field_embeddedvideo']); ?>
    <div class="caption">
      <span class="day">Day <?php  print $node->field_day['und'][0]['value']; ?></span> <br /><span class="title"><?php print $title; ?></span>
    </div>
  </div>
</div>

<?php } ?>
