<?php


if (isset($_GET)){
	$file= fopen("/tmp/query_php.txt","w");
	$destination=$_GET['poi'];
	$city="search=$destination";
	fwrite($file, $city);
	exec('/home/lg/chown_tmp_query');
	} 


?>

