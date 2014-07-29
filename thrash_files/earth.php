<?php
include 'head.php';
?>
	<body onload="ini_geo()">
<?php
include 'menu.php';
?>	

<div id="right">
		<div class="detailView">
			
			<div class="item">
				<a href="javascript:google.maps.event.trigger(gmarkers['Apollo 11'],'click');">
            	<img src="img/apollo/apollo11.png"   class="pix"/>
                <div class="txt"><h3>Apollo 11</h3>Here some information about Apollo 11</div>
            	<div class="clear"></div>
                </a>
            </div>
            
            <div class="item">
            	<a href="javascript:google.maps.event.trigger(gmarkers['Apollo 12'],'click');">
            	<img src="img/apollo/apollo12.png"   class="pix"/>
                <div class="txt"><h3>Apollo 12</h3>Here some information about Apollo 12</div>
                <div class="clear"></div>
                </a>
            </div>
            <a href="www.google.com">
            <div class="item">
            	<a href="javascript:google.maps.event.trigger(gmarkers['Apollo 13'],'click');">
            	<img src="img/apollo/apollo13.png"   class="pix"/>
                <div class="txt"><h3>Apollo 13</h3>Here some information about Apollo 13</div>
                <div class="clear"></div>
            	</a>
            </div>
            </a>
            <div class="item">
            	<a href="javascript:google.maps.event.trigger(gmarkers['Apollo 14'],'click');">
            	<img src="img/apollo/apollo14.png"   class="pix"/>
                <div class="txt"><h3>Apollo 14</h3>Here some information about Apollo 14</div>
                <div class="clear"></div>
                </a>
            </div>
            <div class="item">
            	<a href="javascript:google.maps.event.trigger(gmarkers['Apollo 15'],'click');">
            	<img src="img/apollo/apollo15.png"   class="pix"/>
                <div class="txt"><h3>Apollo 15</h3>Here some information about Apollo 15</div>
                <div class="clear"></div>
                </a>
            </div>
            <div class="item">
            	<a href="javascript:google.maps.event.trigger(gmarkers['Apollo 16'],'click');">
            	<img src="img/apollo/apollo16.png"   class="pix"/>
                <div class="txt"><h3>Apollo 16</h3>Here some information about Apollo 16</div>
                <div class="clear"></div>
                </a>
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
		
  
var locations = [
    ['Apollo 11', 0.67408, 23.47297, '<p>Apolo 11 fue una misión espacial tripulada de Estados Unidos cuyo objetivo fue lograr que un ser humano caminara en la superficie de la Luna. La misión se envió al espacio el 16 de julio de 1969, llegó a la superficie de la Luna el 20 de julio de ese mismo año y al día siguiente logró que 2 astronautas (Armstrong y Aldrin) caminaran sobre la superficie lunar. El Apolo 11 fue impulsado por un cohete Saturno V desde la plataforma LC 39A y lanzado a las 13:32 hora local del complejo de Cabo Kennedy, en Florida (EE.UU.). Oficialmente se conoció a la misión como AS-506. La misión está considerada como uno de los momentos más significativos de la historia de la Humanidad y la Tecnología.</p>'],
    ['Apollo 12', -3.01239, -23.42157, '<h1>12</h1>'],
    ['Apollo 14', -3.64530, -17.47136, '<h1>14</h1>'],
    ['Apollo 15', 26.13222, 3.63386, '<h1>15</h1>'],
    ['Apollo 16', -8.97301, 15.50019, '<h1>16</h1>'],
    ['Apollo 17', 20.19080, 30.77168, '<h1>17</h1>']
  ];

gmarkers = [];

    //var map;

   

		
		
		//google.maps.event.addDomListener(window, 'load', initialize2);
			new gnMenu( document.getElementById( 'gn-menu' ) );
			
			
			
		</script>


</html>
