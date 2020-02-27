<?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 */
?>
<div class="main-container container">

  <header id="page-header">
    <?php if (!empty($site_slogan)): ?>
      <p class="lead"><?php print $site_slogan; ?></p>
    <?php endif; ?>

    <?php print render($page['header']); ?>
    <div><h1>FLEMING FULTON SCHOOL</h1></div>
  </header> <!-- /#page-header -->

  <div class="row">

    <?php if (!empty($page['sidebar_first'])): ?>
      <aside<?php print $sidebar_first_column_class; ?> role="complementary">
        <?php print render($page['sidebar_first']); ?>
      </aside>  <!-- /#sidebar-first -->
    <?php endif; ?>

    <div<?php print $content_column_class; ?>>
        <div class="well">
            <?php if (!empty($page['highlighted'])): ?>
                <div class="highlighted jumbotron"><?php print render($page['highlighted']); ?></div>
            <?php endif; ?>
            <?php if (!empty($breadcrumb)): print $breadcrumb; endif;?>
            <a id="main-content"></a>
            <?php print render($title_prefix); ?>
            <?php if (!empty($title)): ?>
                <h1 class="page-header"><?php print $title;?></h1>
            <?php endif; ?>
            <?php print render($title_suffix); ?>
            <?php print $messages; ?>
            <?php if (!empty($tabs)): ?>
                <?php print render($tabs); ?>
            <?php endif; ?>
            <?php if (!empty($page['help'])): ?>
                <?php print render($page['help']); ?>
            <?php endif; ?>
            <?php if (!empty($action_links)): ?>
                <ul class="action-links"><?php print render($action_links); ?></ul>
            <?php endif; ?>
            <?php print render($page['content']); ?>
        </div>    
    </div>

    <?php if (!empty($page['sidebar_second'])): ?>
      <aside<?php print $sidebar_second_column_class; ?> role="complementary">
        <?php print render($page['sidebar_second']); ?>
      </aside>  <!-- /#sidebar-second -->
    <?php endif; ?>

  </div>
  <?php if (!empty($page['content-bottom'])): ?>
    <div class="row">
      <div class="col-sm-12">
        <?php print render($page['content-bottom']); ?>
      </div>
    </div>
  <?php endif; ?>
  <?php if (!empty($page['content-bottom-left']) || !empty($page['content-bottom-right'])): ?>
    <div class="row">
      <div class="col-sm-6">
        <?php print render($page['content-bottom-left']); ?>
      </div>
      <div class="col-sm-6">
        <?php print render($page['content-bottom-right']); ?>
      </div>
    </div>
  <?php endif; ?>
</div>
<footer class="footer container">
  <div class="col-md-4 col-sm-12">
    <?php print render($page['footer_left']); ?>
  </div>
  <div class="col-md-4 col-sm-6 col-xs-12">
    <?php print render($page['footer_center']); ?>
  </div>
  <div class="col-md-4 col-sm-6 col-xs-12">
    <?php print render($page['footer_right']); ?>
  </div>
</footer>
