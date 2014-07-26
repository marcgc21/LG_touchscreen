<?php
include 'head.php';
?>
	<body onload="ini_moon()">
<?php
include 'menu.php';
?>
	<div id="right">
		<div class="detailView">
			<a href="javascript:google.maps.event.trigger(gmarkers['Apollo 11'],'click');">
			<div class="item">
            	<img src="img/apollo/apollo11.png"   class="pix"/>
                <div class="txt"><h3>Apollo 11</h3>Here some information about Apollo 11</div>
                 <div class="clear"></div>
            </div>
            </a>
            <div class="item">
            	<img src="img/apollo/apollo12.png"   class="pix"/>
                <div class="txt"><h3>Apollo 12</h3>Here some information about Apollo 12</div>
                 <div class="clear"></div>
            </div>
            <a href="www.google.com">
            <div class="item">
            	<img src="img/apollo/apollo13.png"   class="pix"/>
                <div class="txt"><h3>Apollo 13</h3>Here some information about Apollo 13</div>
                 <div class="clear"></div>
            </div>
            </a>
            <div class="item">
            	<img src="img/apollo/apollo14.png"   class="pix"/>
                <div class="txt"><h3>Apollo 14</h3>Here some information about Apollo 14</div>
                 <div class="clear"></div>
            </div>
            <div class="item">
            	<img src="img/apollo/apollo15.png"   class="pix"/>
                <div class="txt"><h3>Apollo 15</h3>Here some information about Apollo 15</div>
                 <div class="clear"></div>
            </div>
            <div class="item">
            	<img src="img/apollo/apollo16.png"   class="pix"/>
                <div class="txt"><h3>Apollo 16</h3>Here some information about Apollo 16</div>
                 <div class="clear"></div>
            </div>
            <div class="item">
            	<img src="img/apollo/apollo17.png"   class="pix"/>
                <div class="txt"><h3>Apollo 17</h3>Here some information about Apollo 17</div>
                 <div class="clear"></div>
            </div>
        </div>
	</div>
 	<div id="map-canvas"></div>		
	
	</body>

		<script>
		//google.maps.event.addDomListener(window, 'load', initialize2);
			new gnMenu( document.getElementById( 'gn-menu' ) );
		</script>


</html>
