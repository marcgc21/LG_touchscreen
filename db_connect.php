<?php

$link=mysql_connect("localhost","root","lqgalaxy");

mysql_select_db("LG", $link) OR DIE ("Error: No es posible establecer la conexión");

#Solve UTF-8 problems with names
mysql_query("SET NAMES 'utf8'");

?>
