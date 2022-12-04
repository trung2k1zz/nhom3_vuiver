<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'nhom3_vuive');
define('DB_USER','HS');
define('DB_PASSWORD','123456');

$con=mysql_connect(localhost,HS,123456) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(nhom3_vuive,$con) or die("Failed to connect to MySQL: " . mysql_error());

// doan code nay la de giup hien thi font unicode ra man hinh
mysql_query ("set character_set_client='utf8'"); 
mysql_query ("set character_set_results='utf8'"); 
mysql_query ("set collation_connection='utf8_general_ci'"); 

?>