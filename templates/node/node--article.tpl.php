<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  <?php if ($teaser) { ?>

      <!-- <a href="<?php print $node_url; ?>">
          <?php if (!$node->field_thumbnail['und'][0]['value']) { ?>
            <img src="<?php print image_style_url('flyer_thumbnail',$node->field_image['und'][0]['uri']); ?>" alt="<php $title; ?>">
          <?php } else { 
            print render($content['field_file'][0]);
          } ?>
        <div class="flyer-title">
          <h3><?php print $title; ?></h3>
        </div>
      </a>
      <?php
        if (drupal_valid_path('node/' . $node->nid . '/edit')) {
          print l('Edit', 'node/' . $node->nid . '/edit');
        }
      ?> -->


    <div class="media article-<?php print $node->nid; ?>">
      <div class="media-left">
        <a href="#">
          <img class="media-object" src="..." alt="...">
        </a>
      </div>
      <div class="media-body">
        <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
        <div><?php print render(field_view_field('node', $node, 'field_department')); ?></div>
        <div><?php print date('d F Y', strtotime($node->field_event_datetime['und'][0]['value']));?></div>

    </div>

  <?php } else { ?>

    <?php  // dpm($node); ?>
    <?php print $user_picture; ?>

    <?php print render($title_prefix); ?>
    <?php if (!$page): ?>
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


  <?php } ?>
</div>
