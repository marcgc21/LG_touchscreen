<?php
include 'head.php';
?>
	<body onload="ini_geo()">
<?php
include 'menu.php';
?>	

 	<div id="map-canvas"></div>		

	</body>

		<script>
		//google.maps.event.addDomListener(window, 'load', initialize2);
			new gnMenu( document.getElementById( 'gn-menu' ) );
		</script>


</html>
