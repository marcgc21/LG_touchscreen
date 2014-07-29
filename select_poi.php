<?php
include 'head.php';
?>
	<body onload="ini_geo()">
<?php
include 'menu.php';
include("db_connect.php"); 



	$query = 'SELECT * FROM poi_moon';
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());


// Imprimir los resultados en HTML

?>

<div id="right">
		<div class="detailView">
<?php
	$file= fopen("js/poi_moon.js","w");
	$var=	"var locations=[";
	fwrite($file, $var);	

while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
   	echo"<div class=\"item\" onclick=\"changeQuery(".$line["Name"].")\">";
	echo "<a href=\"javascript:google.maps.event.trigger(gmarkers['".$line["Name"]."'],'click');\">";
	echo "<img src=" . $line["Image"]. " class=\"pix\">";
	echo "<div class=\"txt\"><h1>".$line["Name"]."</h1></div>";
	echo "<div class=\"clear\"></div>";
	echo "</a>";
	echo "</div>";
	
	$city="['".$line["Name"]."', '".$line["Lat"]."', '".$line["Lang"]."', '".$line["Description"]."'],";
	fwrite($file, $city);	

	} 
	$var=	"];";
	fwrite($file, $var);	


// Liberar resultados
mysql_free_result($result);

// Cerrar la conexión
mysql_close($link);

	?>

</div>
</div>


 	<div id="map-canvas"></div>





</body>


	<script>



	gmarkers = [];
 	new gnMenu( document.getElementById( 'gn-menu' ) );
	
			
			
		</script>


</html>
