<?php
include 'head.php';
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
<form action="voice2.php" method="post">
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
	//input_field.form.submit();
	if(reco.final_transcript =="0"){
			$.get("http://192.168.1.70?POID1=0&POID2=0&POID3=0&POID4=0&POID5=0&POID6=0&POID7=0&POID8=0&POID9=0");
  	}
		if(reco.final_transcript =="9"){
			$.get("http://192.168.1.70?POID1=0&POID2=0&POID3=0&POID4=0&POID5=0&POID6=0&POID7=0&POID8=0&POID9=1");
  	}
  		if(reco.final_transcript =="2"){
			$.get("http://192.168.1.70?POID1=0&POID2=1&POID3=0&POID4=0&POID5=0&POID6=0&POID7=0&POID8=0&POID9=0");
  	}
  		if(reco.final_transcript =="3"){
			$.get("http://192.168.1.70?POID1=0&POID2=0&POID3=1&POID4=0&POID5=0&POID6=0&POID7=0&POID8=0&POID9=0");
  	}
  		if(reco.final_transcript =="4"){
			$.get("http://192.168.1.70?POID1=0&POID2=0&POID3=0&POID4=1&POID5=0&POID6=0&POID7=0&POID8=0&POID9=0");
  	}
  		if(reco.final_transcript =="5"){
			$.get("http://192.168.1.70?POID1=0&POID2=0&POID3=0&POID4=0&POID5=1&POID6=0&POID7=0&POID8=0&POID9=0");
  	}
  		if(reco.final_transcript =="6"){
			$.get("http://192.168.1.70?POID1=0&POID2=0&POID3=0&POID4=0&POID5=0&POID6=1&POID7=0&POID8=0&POID9=0");
	
  	}
  		if(reco.final_transcript =="7"){
			$.get("http://192.168.1.70?POID1=0&POID2=0&POID3=0&POID4=0&POID5=0&POID6=0&POID7=1&POID8=0&POID9=0");
	
  	}
  		if(reco.final_transcript =="8"){
			$.get("http://192.168.1.70?POID1=0&POID2=0&POID3=0&POID4=0&POID5=0&POID6=0&POID7=0&POID8=1&POID9=0");
	
  	}
  	}
};
</script>





