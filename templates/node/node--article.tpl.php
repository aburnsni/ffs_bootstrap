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

    <?php // dpm($node); ?>
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

        if (($node->field_diary['und'][0]['value'])) {
          print render($content['field_event_datetime']);
        }
        //  TO DO
        //  Render as Media Object if only one image, otherwise show as full article.
        if ((count($node->field_image_gallery['und'])) > 1) {   // More than 1 image in gallery
          print render($content['body']);
          print render($content['field_image_gallery']);
          print render($content['field_file']);
          print render($content['field_department']);
        } else {                                                // Only 1 image in gallery
          if (!($node->field_image_gallery['und'][0]['is_default'])) {  //  Is it default image
            $img_url = image_style_url('article_image', $node->field_image_gallery['und'][0]['uri']);
            $img_alt = $node->field_image_gallery['und'][0]['title'];
      ?>
            <div class="media">
              <div class="media-left">
                <a href="<?php print file_create_url($node->field_image_gallery['und'][0]['uri']); ?>" title="<?php print $img_alt; ?>" class="colorbox" data-cbox-img-attrs="{&quot;title&quot;: &quot;<?php print $img_alt; ?>&quot;, &quot;alt&quot;: &quot;<?php print $img_alt; ?>&quot;}">
                  <img class="media-object img-responsive img-thumbnail" src="<?php print $img_url; ?>" alt="<?php print $img_alt; ?>" title="<?php print $img_alt; ?>">
                </a> 
              </div>
              <div class="media-body">
                <?php print render($content['body']); ?>
                <?php print render($content['field_file']); ?>
              </div>
              <?php print render($content['field_department']); ?>
            </div>
      <?php
          } else {
            print render($content['body']);
            print render($content['field_file']);
            print render($content['field_department']);
          }
        }

        // print render($content);
      ?>
    </div>

    <?php print render($content['links']); ?>

    <?php print render($content['comments']); ?>


  <?php } ?>
</div>