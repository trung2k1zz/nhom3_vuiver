<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
class ketnoigv{
	function ketnoi($ketnoi){
		$ketnoi=mysql_connect('localhost','GV','12345678');
		mysql_set_charset("utf8");
		if($ketnoi){
			return mysql_select_db('nhom3_vuive');
		}
		else{
			echo "Không kết nối dc";
		}
		
	}
	function dongketnoi($ketnoi){
		mysql_close($ketnoi);
	}
}


?>
</body>
</html>
