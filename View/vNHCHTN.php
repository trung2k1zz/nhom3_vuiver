<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include_once("Controller/cNHCHTN.php");
class Xuatphantrang{
	function page4(){
		if(isset($_GET['Ma'])&&isset($_GET['TenKhoi'])&&isset($_GET['TenMon'])){
			$p=new cCHgv();
			$p->PhanTrangCH();
		}
	}
	}



?>
</body>
</html>