<header id="navbar" class="<?php print $navbar_classes; ?>">
  <div class="container">
    <div class="navbar-header">
      <?php if ($logo): ?>
      <a class="logo navbar-btn pull-left" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
      </a>
      <?php endif; ?>

      <?php if (!empty($site_name)): ?>
      <a class="name navbar-brand" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a>
      <?php endif; ?>

      <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".main-navbar-collapse">
<span class="menutitle"><?php print t('Menu'); ?></span>
<span class="menubars">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
 </span>
     </button>
    </div>

    <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
      <div id="main-navbar" class="main-navbar-collapse navbar-collapse collapse">
        <nav>
          <?php if (!empty($primary_nav)): ?>
            <?php print render($primary_nav); ?>
          <?php endif; ?>
          <?php if (!empty($secondary_nav)): ?>
            <?php print render($secondary_nav); ?>
          <?php endif; ?>
          <?php if (!empty($page['navigation'])): ?>
            <?php print render($page['navigation']); ?>
          <?php endif; ?>
        </nav>
      </div>
    <?php endif; ?>
  </div>
</header>

<div class="main-container container">

  <header id="page-header">
    <?php if (!empty($site_slogan)): ?>
      <p class="lead"><?php print $site_slogan; ?></p>
    <?php endif; ?>

    <?php print render($page['header']); ?>
    <div><h1>FLEMING FULTON SCHOOL</h1></div>
  </header> <!-- /#page-header -->

  <div class="row">

    <div<?php print $content_column_class; ?>>
        <div class="well">
            <a id="main-content"></a>
            <h1 class="page-header">Page Not Found</h1>
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
            <div class="alert alert-danger" role="alert">404 - This is not the page you are looking for...</div>
            <?php print render($page['content']); ?>
        </div>
    </div>
  </div>
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
