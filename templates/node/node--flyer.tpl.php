<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  <?php  //dpm($node); ?>
  <?php if ($teaser) { ?>
    <div class="flyer flyer-<?php print $node->nid; ?> center-block">
      <a href="<?php print $node_url; ?>">
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
      ?>
    </div>
  <?php } else { ?>
    <div class="content"<?php print $content_attributes; ?>>
      <?php $n=0;
      while ($node->field_image['und'][$n]['fid']) { ?>
        <div class="col-sm-4">
          <div class="flyer">
          <a class="colorbox-load" href="<?php print file_create_url($node->field_image['und'][$n]['uri']); ?>"
            data-colorbox-gallery="gallery-node-<?php print $node->nid; ?>" title="<?php print $title; ?>">
            <img src="<?php print image_style_url('large',$node->field_image['und'][$n]['uri']); ?>">
          </a>
          </div>
        </div>
        <?php $n++;
      } ?>
      <?php if ($node-> field_file['und'][0]['fid']): ?>
        <div class="col-sm-4">
          <a href="<?php print file_create_url($node->field_file['und'][0]['uri']); ?>" title="<?php print ($node->field_file['und'][0]['description']); ?>">
            <?php print render($content['field_file'][0]); ?>
            <div class="small text-center">(Click to download)</div>
          </a>
        </div>
      <?php endif; ?>
      <div class="col-sm-8">
        <?php if ($node->body): ?>
          <div><?php print render($body['und'][0]['value']); ?></div>
        <?php endif; ?>
       </div>
    </div>
    <?php print render($content['links']); ?>
  <?php } ?>
</div>
