<?php
include 'header.php';
?>

<script>
function initialize() {

var input = document.getElementById('searchTextField');
var autocomplete = new google.maps.places.Autocomplete(input);
}

google.maps.event.addDomListener(window, 'load', initialize);

</script>
	<body>
<?php
include 'menu.php';
?>		

<input id="searchTextField" type="text" size="50">


	</body>

		


</html>
