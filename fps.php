
<!DOCTYPE HTML>
<html lang="en"><head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Performance Testing Game Sprites using HTML5 Canvas</title>
	<style type="text/css" media="screen">
		body { margin:1em; background:#eee }
		#game { margin:0 auto; border:1px solid black; position:relative }
		#game canvas { display:block; width:1024px; height:768px; }
	</style>

	<script>
var filterStrength = 20;
			var frameTime = 0, lastLoop = new Date, thisLoop;
			
</script>

</head><body onload="fps_test()">
	<h1>Performance Testing Game Sprites using HTML5 Canvas</h1>
	<p>Testing basic browser performance for <a href="http://stackoverflow.com/questions/4842872/web-page-image-move-performance-comparison-style-change-vs-html5-canvas">this Stack Overflow question</a>.</p>
	<p><label><input type="checkbox" id="full-bg-clear"> Clear Full Background Each Frame?</label></p>
	<p id="fps">??? fps</p>
	<div id="game"><canvas></canvas></div>	
	

<script type="text/javascript" charset="utf-8">
var filterStrength = 20;
			var frameTime = 0, lastLoop = new Date, thisLoop;

		function fps_test(){
			

			var thisFrameTime = (thisLoop=new Date) - lastLoop;
			  frameTime+= (thisFrameTime - frameTime) / filterStrength;
			  lastLoop = thisLoop;


			console.log(frameTime);
var fpsOut  = document.getElementById('fps');
			setInterval(function(){
						fpsOut.innerHTML = (1000/frameTime).toFixed(1) + " fps";
					},2000);


			setTimeout('fps_test()',2000);
		};
	</script>
</body></html>

