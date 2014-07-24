<?php
include 'head.php';
?>
	<body>
<?php
include 'menu.php';
?>	
<div id="tools-buttons">
	<!-- progress button -->
	<div id="progress-button" class="progress-button">
	    <!-- button with text -->
	    <button onclick="sendQuery('relaunch')"><span>Relaunch</span></button>
	 
	    <!-- svg circle for progress indication -->
	    <svg class="progress-circle" width="70" height="70">
		<path d="m35,2.5c17.955803,0 32.5,14.544199 32.5,32.5c0,17.955803 -14.544197,32.5 -32.5,32.5c-17.955803,0 -32.5,-14.544197 -32.5,-32.5c0,-17.955801 14.544197,-32.5 32.5,-32.5z"/>
	    </svg>
	 
	    <!-- checkmark to show on success -->
	    <svg class="checkmark" width="70" height="70">
		<path d="m31.5,46.5l15.3,-23.2"/>
		<path d="m31.5,46.5l-8.5,-7.1"/>
	    </svg>
	 
	    <!-- cross to show on error -->
	    <svg class="cross" width="70" height="70">
		<path d="m35,35l-9.3,-9.3"/>
		<path d="m35,35l9.3,9.3"/>
		<path d="m35,35l-9.3,9.3"/>
		<path d="m35,35l9.3,-9.3"/>
	    </svg>
	 
	</div><!-- /progress-button -->


	<div id="progress-button" class="progress-button">
	    <!-- button with text -->
	    <button onclick="sendQuery('reboot')"><span>Reboot</span></button>
	 
	    <!-- svg circle for progress indication -->
	    <svg class="progress-circle" width="70" height="70">
		<path d="m35,2.5c17.955803,0 32.5,14.544199 32.5,32.5c0,17.955803 -14.544197,32.5 -32.5,32.5c-17.955803,0 -32.5,-14.544197 -32.5,-32.5c0,-17.955801 14.544197,-32.5 32.5,-32.5z"/>
	    </svg>
	 
	    <!-- checkmark to show on success -->
	    <svg class="checkmark" width="70" height="70">
		<path d="m31.5,46.5l15.3,-23.2"/>
		<path d="m31.5,46.5l-8.5,-7.1"/>
	    </svg>
	 
	    <!-- cross to show on error -->
	    <svg class="cross" width="70" height="70">
		<path d="m35,35l-9.3,-9.3"/>
		<path d="m35,35l9.3,9.3"/>
		<path d="m35,35l-9.3,9.3"/>
		<path d="m35,35l9.3,-9.3"/>
	    </svg>
	 
	</div><!-- /progress-button -->

	<div id="progress-button" class="progress-button" style="width:100%;">
	    <!-- button with text -->
	    <button onclick="sendQuery('shutdown')"><span>Shutdown</span></button>
	 
	    <!-- svg circle for progress indication -->
	    <svg class="progress-circle" width="70" height="70">
		<path d="m35,2.5c17.955803,0 32.5,14.544199 32.5,32.5c0,17.955803 -14.544197,32.5 -32.5,32.5c-17.955803,0 -32.5,-14.544197 -32.5,-32.5c0,-17.955801 14.544197,-32.5 32.5,-32.5z"/>
	    </svg>
	 
	    <!-- checkmark to show on success -->
	    <svg class="checkmark" width="70" height="70">
		<path d="m31.5,46.5l15.3,-23.2"/>
		<path d="m31.5,46.5l-8.5,-7.1"/>
	    </svg>
	 
	    <!-- cross to show on error -->
	    <svg class="cross" width="70" height="70">
		<path d="m35,35l-9.3,-9.3"/>
		<path d="m35,35l9.3,9.3"/>
		<path d="m35,35l-9.3,9.3"/>
		<path d="m35,35l9.3,-9.3"/>
	    </svg>
	 
	</div><!-- /progress-button -->
</div>


<div id="program_buttons">
	<!-- progress button -->
	<div id="progress-button" class="progress-button">
	    <!-- button with text -->
	    <a href="http://lg1:8086/touchscreen/" target="_blank"> <button onclick="sendQuery('streetview')"><span>StreetView</span></button></a>
	 
	    <!-- svg circle for progress indication -->
	    <svg class="progress-circle" width="70" height="70">
		<path d="m35,2.5c17.955803,0 32.5,14.544199 32.5,32.5c0,17.955803 -14.544197,32.5 -32.5,32.5c-17.955803,0 -32.5,-14.544197 -32.5,-32.5c0,-17.955801 14.544197,-32.5 32.5,-32.5z"/>
	    </svg>
	 
	    <!-- checkmark to show on success -->
	    <svg class="checkmark" width="70" height="70">
		<path d="m31.5,46.5l15.3,-23.2"/>
		<path d="m31.5,46.5l-8.5,-7.1"/>
	    </svg>
	 
	    <!-- cross to show on error -->
	    <svg class="cross" width="70" height="70">
		<path d="m35,35l-9.3,-9.3"/>
		<path d="m35,35l9.3,9.3"/>
		<path d="m35,35l-9.3,9.3"/>
		<path d="m35,35l9.3,-9.3"/>
	    </svg>
	 
	</div><!-- /progress-button -->


	<div id="progress-button" class="progress-button">
	    <!-- button with text -->
	    <button onclick="sendQuery('relaunch')"><span>Google Earth</span></button>
	 
	    <!-- svg circle for progress indication -->
	    <svg class="progress-circle" width="70" height="70">
		<path d="m35,2.5c17.955803,0 32.5,14.544199 32.5,32.5c0,17.955803 -14.544197,32.5 -32.5,32.5c-17.955803,0 -32.5,-14.544197 -32.5,-32.5c0,-17.955801 14.544197,-32.5 32.5,-32.5z"/>
	    </svg>
	 
	    <!-- checkmark to show on success -->
	    <svg class="checkmark" width="70" height="70">
		<path d="m31.5,46.5l15.3,-23.2"/>
		<path d="m31.5,46.5l-8.5,-7.1"/>
	    </svg>
	 
	    <!-- cross to show on error -->
	    <svg class="cross" width="70" height="70">
		<path d="m35,35l-9.3,-9.3"/>
		<path d="m35,35l9.3,9.3"/>
		<path d="m35,35l-9.3,9.3"/>
		<path d="m35,35l9.3,-9.3"/>
	    </svg>
	 
	</div><!-- /progress-button -->


	<div id="progress-button" class="progress-button" style="width:100%;">
	    <!-- button with text -->
	    <button onclick="sendQuery('videocall')"><span>VideoCall</span></button>
	 
	    <!-- svg circle for progress indication -->
	    <svg class="progress-circle" width="70" height="70">
		<path d="m35,2.5c17.955803,0 32.5,14.544199 32.5,32.5c0,17.955803 -14.544197,32.5 -32.5,32.5c-17.955803,0 -32.5,-14.544197 -32.5,-32.5c0,-17.955801 14.544197,-32.5 32.5,-32.5z"/>
	    </svg>
	 
	    <!-- checkmark to show on success -->
	    <svg class="checkmark" width="70" height="70">
		<path d="m31.5,46.5l15.3,-23.2"/>
		<path d="m31.5,46.5l-8.5,-7.1"/>
	    </svg>
	 
	    <!-- cross to show on error -->
	    <svg class="cross" width="70" height="70">
		<path d="m35,35l-9.3,-9.3"/>
		<path d="m35,35l9.3,9.3"/>
		<path d="m35,35l-9.3,9.3"/>
		<path d="m35,35l9.3,-9.3"/>
	    </svg>
	 
	</div><!-- /progress-button -->
</div>




		<script>
		//google.maps.event.addDomListener(window, 'load', initialize2);
			new gnMenu( document.getElementById( 'gn-menu' ) );




		</script>


<script src="js/uiProgressButton.js"></script>
<script>
[].slice.call( document.querySelectorAll( '.progress-button' ) ).forEach( function( bttn, pos ) {
new UIProgressButton( bttn, {
callback : function( instance ) {
var progress = 0,
interval = setInterval( function() {
progress = Math.min( progress + Math.random() * 0.1, 1 );
instance.setProgress( progress );

if( progress === 1 ) {
instance.stop( pos === 1 || pos === 3 ? -1 : 1 );
clearInterval( interval );
}
}, 150 );
}
} );
} );
</script>


</html>
