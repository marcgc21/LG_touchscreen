<?php
include 'header.php';
?>
	<body>
<?php
include 'menu.php';
?>	
<h1>Interactive Spaces - Web Speech </h1>
<div id="status">
</div>
<p></p>

<div class=poi_moon>
<form action="voice.php" method="post">
  <input name="poi" id="input_field" size="100">
</form>
<button onclick="reco.toggleStartStop()" style="border: 0; background-color:transparent">
  <img id="status_img" src="mic.gif" alt="Start"></button>

</div>


<?php


if (isset($_POST)){
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





