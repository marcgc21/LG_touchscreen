var moonTypeOptions = {
    getTileUrl: function(coord, zoom) {
        var normalizedCoord = getNormalizedCoord(coord, zoom);
        if (!normalizedCoord) {
          return null;
        }
        var bound = Math.pow(2, zoom);
        return 'http://mw1.google.com/mw-planetary/lunar/lunarmaps_v1/clem_bw' +
            '/' + zoom + '/' + normalizedCoord.x + '/' +
            (bound - normalizedCoord.y - 1) + '.jpg';
    },
    tileSize: new google.maps.Size(256, 256),
    maxZoom: 9,
    minZoom: 0,
    radius: 1738000,
    name: 'Moon'
  };

  var moonMapType = new google.maps.ImageMapType(moonTypeOptions);


  var landings = [
    ['Apollo 11', 0.67408, 23.47297, '<h1>11</h1>'],
    ['Apollo 12', -3.01239, -23.42157, '<h1>12</h1>'],
    ['Apollo 14', -3.64530, -17.47136, '<h1>14</h1>'],
    ['Apollo 15', 26.13222, 3.63386, '<h1>15</h1>'],
    ['Apollo 16', -8.97301, 15.50019, '<h1>16</h1>'],
    ['Apollo 17', 20.19080, 30.77168, '<h1>17</h1>']
  ];


function ini_mars() {
    var map;
    var bounds = new google.maps.LatLngBounds();
    var myLatlng = new google.maps.LatLng(0, 0);
 var mapOptions = {
      center: myLatlng,
      zoom: 3,
      streetViewControl: false,
      mapTypeControlOptions: {
        mapTypeIds: ['moon']
      }
    };
          


          
    // Display a map on the page
    map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
    map.mapTypes.set('moon', moonMapType);
    map.setMapTypeId('moon');
    map.setTilt(45);
        
    // Multiple Markers
  var markers = [
    ['Apollo 11', 0.67408, 23.47297, '<h1>11</h1>'],
    ['Apollo 12', -3.01239, -23.42157, '<h1>12</h1>'],
    ['Apollo 14', -3.64530, -17.47136, '<h1>14</h1>'],
    ['Apollo 15', 26.13222, 3.63386, '<h1>15</h1>'],
    ['Apollo 16', -8.97301, 15.50019, '<h1>16</h1>'],
    ['Apollo 17', 20.19080, 30.77168, '<h1>17</h1>']
  ];
                        
    // Info Window Content
    var infoWindowContent = [
        ['<div class="info_content">' +
        '<h3>Apollo 11</h3>' +
        '<p>Information about Apollo 11.</p>' 	+        '</div>'],
        ['<div class="info_content">' +
        '<h3>Apollo 12</h3>' +
        '<p>Information about Apollo 12</p>' +
        '</div>'],
  	['<div class="info_content">' +
        '<h3>Apollo 14</h3>' +
        '<p>Information about Apollo 14</p>' 	+        '</div>'],
 	 ['<div class="info_content">' +
        '<h3>Apollo 15</h3>' +
        '<p>Information about Apollo 15</p>' 	+        '</div>']
   	 ];
        
    // Display multiple markers on a map
    var infoWindow = new google.maps.InfoWindow(), marker, i;
    
    // Loop through our array of markers & place each one on the map  
    for( i = 0; i < markers.length; i++ ) {
        var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
        bounds.extend(position);
        marker = new google.maps.Marker({
            position: position,
            map: map,
            title: markers[i][0]
        });
        
        // Allow each marker to have an info window    
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
                infoWindow.setContent(infoWindowContent[i][0]);
                infoWindow.open(map, marker);
            }
        })(marker, i));

        // Automatically center the map fitting all markers on the screen
        map.fitBounds(bounds);
    }


    
}

