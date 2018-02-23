var myLatlng = new google.maps.LatLng(54.55663, -5.964576);

function initialize() {
    "use strict";

    var mapOptions = {
            zoom: 15,
            center: myLatlng,
            draggable: 0,
            mapTypeControl: 0,
            zoomControl: 0,
            scrollwheel: 0,
            streetViewControl: 0,
            fullscreenControl: 0
        },
        map = new google.maps.Map(document.getElementById('map-canvas-block'), mapOptions),
        marker = new google.maps.Marker({
            icon: 'http://maps.google.com/mapfiles/ms/micons/blue-dot.png',
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

google.maps.event.addDomListener(window, 'load', initialize);
