<div class="container">
			<ul id="gn-menu" class="gn-menu-main">
				<li class="gn-trigger">
					<a class="gn-icon gn-icon-menu"><span>Menu</span></a>
					<nav class="gn-menu-wrapper">
						<div class="gn-scroller">
							<ul class="gn-menu">
								<li class="gn-search-item">
								<input placeholder="Search" id="searchTextField" type="search" class="gn-search">
								<a class="gn-icon gn-icon-search"><span>Search</span></a>
								</li>

<li>
<form action="voice.php" method="post">
  <input name="poi" id="input_field">
</form>
</li>
								<li><a class="gn-icon gn-icon-earth">POI</a></li>
								<li><a href="configuration.php" class="gn-icon gn-icon-cog">Settings</a></li>
								<li><a class="gn-icon gn-icon-help">Help</a></li>
								
							
							</ul>
						</div><!-- /gn-scroller -->
					</nav>
				</li>
				<li><a id="earth" href="earth.php">Earth</a></li>
				<li><a id="moon" href="moon.php">Moon</a></li>
				<li><a id="mars" href="mars.php">Mars</a></li>
				<li><a href="voice2.php">Voice</a></li>
				<li><a href="secret.php"> </a></li>
				<li><a href="ajax.php">AJAX</a></li>
				<li><a href="ajax_speech.php">AJAX+SPEECH</a></li>
				<li><a href="index.php"><span>LG</span></a></li>
			</ul>

		</div><!-- /container -->
<script>
$(document).on('click', 'a',function() {
	//$(this).changePlanet('moon');
	var planet = $(this).attr('id');
	//alert(this.id);
	changePlanet(planet);
	$(this).slideUp();



});

function initialize() {

var input = document.getElementById('searchTextField');
var autocomplete = new google.maps.places.Autocomplete(input);
console.log(input);
}

google.maps.event.addDomListener(window, 'load', initialize);


</script>
