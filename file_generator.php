<?php


if (isset($_POST)){
	;
	$file= fopen("/var/naruto.txt","w");
	$destination=$_GET['poi'];
	$city="search=$destination";
	fwrite($file, $city);
	//exec('/home/lg/chown_tmp_query');
	} 


?>
