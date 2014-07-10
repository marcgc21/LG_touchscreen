    /*
    var map;
    function initialize() {
      var mapOptions = {
        zoom: 8,
        center: new google.maps.LatLng(-34.397, 150.644)
      };
      map = new google.maps.Map(document.getElementById('map-canvas'),
          mapOptions);
    }
    */

    var map2;
    function initialize2() {
      var mapOptions = {
        zoom: 10,
        center: new google.maps.LatLng(-34.397, 20.644)
      };
      map2 = new google.maps.Map(document.getElementById('map-canvas'),
          mapOptions);
    }

    //check
    var neighborhoods = [
      new google.maps.LatLng(52.511467, 13.447179),
      new google.maps.LatLng(52.549061, 13.422975),
      new google.maps.LatLng(52.497622, 13.396110),
      new google.maps.LatLng(52.517683, 13.394393)
    ];

    function addMarker() {
      markers.push(new google.maps.Marker({
        position: neighborhoods[iterator],
        map: map,
        draggable: false,
        animation: google.maps.Animation.DROP
      }));
      iterator++;
    }

    function drop() {
      for (var i = 0; i < neighborhoods.length; i++) {
        setTimeout(function() {
          addMarker();
        }, i * 200);
      }
    }

    //



    var map;

    function ini_geo() {
      var mapOptions = {
        zoom: 10
      };
      map = new google.maps.Map(document.getElementById('map-canvas'),
          mapOptions);

      // Try HTML5 geolocation
      if(navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
          var pos = new google.maps.LatLng(position.coords.latitude,
                                           position.coords.longitude);


         var infowindow = new google.maps.Marker({
            map: map,
            position: pos,
            content: 'You are here!',
            draggable: false,
            animation: google.maps.Animation.DROP,
            title: "HOLA"
          });


          map.setCenter(pos);
        }, function() {
          handleNoGeolocation(true);
        });
      } else {
        // Browser doesn't support Geolocation
        handleNoGeolocation(false);
      }
    }

    function handleNoGeolocation(errorFlag) {
      if (errorFlag) {
        var content = 'Error: The Geolocation service failed.';
      } else {
        var content = 'Error: Your browser doesn\'t support geolocation.';
      }

      var options = {
        map: map,
        position: new google.maps.LatLng(60, 105),
        content: content
      };

      var infowindow = new google.maps.InfoWindow(options);
      map.setCenter(options.position);
    }







    //google.maps.event.addDomListener(window, 'load', initialize);

