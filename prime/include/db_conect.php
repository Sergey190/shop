<?php

$db_host		= 'localhost';
$db_user		= 'Admin';
$db_pass		= '123456';
$db_database	= 'db_shop'; 
$db_charset     = 'utf-8';
$link = mysql_connect($db_host,$db_user,$db_pass, $db_charset);

mysql_select_db($db_database,$link) or die("Нет соединения с БД ".mysql_error());
mysql_query("SET names utf-8");
?>
	


