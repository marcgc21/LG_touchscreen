<?php

if (isset($_POST)){
	$file= fopen("/tmp/query_php.txt","w");
	$destination=$_POST['state'];
	$city="search=$destination";
	fwrite($file, $city);
	exec('/home/lg/chown_tmp_query');
	} 



include 'head.php';


if (isset($_POST)){

	if ($_GET['state']=='ON'){
	
?>
<form action="test.php" method="post">
  <input name="state" id="input_field" size="100">
</form>
<script>

var reco = new WebSpeechRecognition();
reco.toggleStartStop();
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
<?php

	}
	else{
		echo"merda";
	}
	} 


?>

