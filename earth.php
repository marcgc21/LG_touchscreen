<?php
include 'head.php';
?>
	<body onload="ini_geo()">
<?php
include 'menu.php';
?>	

<form action="earth.php" method="post">
  <input name="poi" id="input_field" size="100">
</form>
	
<?php


if (isset($_POST)){
	;
	$file= fopen("/tmp/query_php.txt","w");
	$destination=$_POST['poi'];
	$city="search=$destination";
	fwrite($file, $city);
	exec('/home/lg/chown_tmp_query');
	} 


?>

 	<div id="map-canvas"></div>		

	</body>

		<script>
		//google.maps.event.addDomListener(window, 'load', initialize2);
			new gnMenu( document.getElementById( 'gn-menu' ) );
		</script>


</html>
