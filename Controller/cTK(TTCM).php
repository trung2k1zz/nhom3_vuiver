<?php
include_once("Model/mTK(TTCM).php");
class cTKttcm{
	function KTTKTTCM(){
		$p=new mTKttcm();
		$ktra=$p->kiemtrataikhoanTTCM();
		return $ktra;
	}
	function infoad(){
		$p=new mTKttcm();
		$ktra=$p->XuatInfo();
		return $ktra;
	}
	
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>