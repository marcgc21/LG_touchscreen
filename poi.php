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

