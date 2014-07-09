<?php
include 'head.php';
?>
	<body>
<?php
include 'menu.php';
?>	
<script type="text/javascript">
			setTimeout(function() {Ajax();}, 1000);
		</script>

		<div id="ReloadThis">Default text</div>

<h1>Interactive Spaces - Web Speech </h1>
<div id="status">
</div>
<p></p>

<div class=poi_moon>
<form action="ajax_speech.php" method="post">
  <input name="poi" id="input_field" size="100">
</form>
<button onclick="reco.toggleStartStop()" style="border: 0; background-color:transparent">
  <img id="status_img" src="mic.gif" alt="Start"></button>

</div>


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

</body>
</html>

<script>
var reco = new WebSpeechRecognition();
reco.statusText('status');
reco.statusImage('status_img');
reco.finalResults('input_field');

reco.onEnd = function() {
  if (reco.final_transcript != '') {
	//document.write(reco.final_transcript);
	//reco.sendPOI(reco.final_transcript);
	input_field.form.submit();
	
  	}
};
</script>
<script type="text/javascript">

			function Ajax()
			{
				var
					$http,
					$self = arguments.callee;

				if (window.XMLHttpRequest) {
					$http = new XMLHttpRequest();
				} else if (window.ActiveXObject) {
					try {
						$http = new ActiveXObject('Msxml2.XMLHTTP');
					} catch(e) {
						$http = new ActiveXObject('Microsoft.XMLHTTP');
					}
				}

				if ($http) {
					$http.onreadystatechange = function()
					{
						if (/4|^complete$/.test($http.readyState)) {
							document.getElementById('ReloadThis').innerHTML = $http.responseText;
							setTimeout(function(){$self();}, 1000);
						}
						if ($http.responseText =='ON'){

setTimeout(Ajax, 5000);
	reco.toggleStartStop();
	
						}
					};
					$http.open('GET', 'state.txt', true);
					$http.send(null);
				}

			}

		</script>


