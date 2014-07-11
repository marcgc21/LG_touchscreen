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

  var markers = [];




  function ini_moon() {
    var myLatlng = new google.maps.LatLng(0, 0);
    var mapOptions = {
      center: myLatlng,
      zoom: 3,
      streetViewControl: false,
      mapTypeControlOptions: {
        mapTypeIds: ['moon']
      }
    };

    var map = new google.maps.Map(document.getElementById('map-canvas'),
        mapOptions);
    map.mapTypes.set('moon', moonMapType);
    map.setMapTypeId('moon');

    setMarkers(map, landings);
  }


  function setMarkers(map, locations) {
    // Add markers to the map

    // Marker sizes are expressed as a Size of X,Y
    // where the origin of the image (0,0) is located
    // in the top left of the image.

    // Origins, anchor positions and coordinates of the marker
    // increase in the X direction to the right and in
    // the Y direction down.
   
    // Shapes define the clickable region of the icon.
    // The type defines an HTML &lt;area&gt; element 'poly' which
    // traces out a polygon as a series of X,Y points. The final
    // coordinate closes the poly by connecting to the first
    // coordinate.
    for (var i = 0; i < locations.length; i++) {
      var landing = locations[i];

    var infowindow = new google.maps.InfoWindow({
      content: landing[3]
  });

      var myLatLng = new google.maps.LatLng(landing[1], landing[2]);
      markers.push(new google.maps.Marker({
          position: myLatLng,
          map: map,
          title: landing[0]
      }));
    google.maps.event.addListener(markers[i], 'click', function(){
            infowindow.open(map,markers[i]);

    });
  
    }
  }





  // Normalizes the coords that tiles repeat across the x axis (horizontally)
  // like the standard Google map tiles.
  function getNormalizedCoord(coord, zoom) {
    var y = coord.y;
    var x = coord.x;

    // tile range in one direction range is dependent on zoom level
    // 0 = 1 tile, 1 = 2 tiles, 2 = 4 tiles, 3 = 8 tiles, etc
    var tileRange = 1 << zoom;

    // don't repeat across y-axis (vertically)
    if (y < 0 || y >= tileRange) {
      return null;
    }

    // repeat across x-axis
    if (x < 0 || x >= tileRange) {
      x = (x % tileRange + tileRange) % tileRange;
    }

    return {
      x: x,
      y: y
    };
  }