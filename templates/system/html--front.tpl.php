<!DOCTYPE html>
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces;?>>
<head <?php print $rdf_namespaces; ?>>
<meta name="google-site-verification" content="qZH8TDWqCFrU5xKP9uOzocAQUAxPqzMnhfHqz5c7AOg" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <!-- HTML5 element support for IE6-8 -->
  <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <?php print $scripts; ?>
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <div id="outer-wrapper">
    <div id="content-wrapper">
      <div id="skip-link">
        <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
      </div>
      <?php print $page_top; ?>
      <?php print $page; ?>
      <?php print $page_bottom; ?>
    </div>
  </div>
 <script>

function initialize() {
    "use strict";
    var myLatlng = new google.maps.LatLng(54.55663, -5.964576),
        mapOptions = {
            zoom: 15,
            center: myLatlng,
            draggable: 0,
            mapTypeControl: 0,
            zoomControl: 0,
            scrollwheel: 0,
            streetViewControl: 0
        },
        map = new google.maps.Map(document.getElementById('map-canvas-block'), mapOptions),
        marker = new google.maps.Marker({
            // icon: 'https://maps.google.com/mapfiles/ms/micons/blue-dot.png',
            icon: '/sites/all/themes/fleming/logo.png',
            position: myLatlng,
            map: map,
            title: 'Fleming Fulton School',
            url: "/contact_us",
            animation: google.maps.Animation.DROP
        });
    google.maps.event.addListener(marker, 'click', function () {
        window.location.href = marker.url;
    });
  }
  // google.maps.event.addDomListener(window, 'load', initialize);
</script>
<script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCYOcSOCi__DSWg6jJvKdex1A8cKBM_iI0&amp;callback=initialize" defer></script>

<script src="/sites/all/themes/fleming/js/jquery.backstretch.min.js"></script>
  <script>
    jQuery(function ($) {
      $("#fp-welcome").backstretch([
        [
          { width: 1170, url: "/sites/all/themes/fleming/images/house1170.jpg", pixelRatio: "auto" },
          { width: 970, url: "/sites/all/themes/fleming/images/house970.jpg", pixelRatio: "auto" },
          { width: 750, url: "/sites/all/themes/fleming/images/house750.jpg", pixelRatio: "auto" }
        ]
      ]);
      $(".col2-mid").backstretch([
        [
          { width: 1170, url: "/sites/all/themes/fleming/images/mural1170.jpg", pixelRatio: "auto" },
          { width: 970, url: "/sites/all/themes/fleming/images/mural970.jpg", pixelRatio: "auto" },
          { width: 750, url: "/sites/all/themes/fleming/images/mural750.jpg", pixelRatio: "auto" }
        ]
      ]);
    });
  </script>


</body>
</html>
