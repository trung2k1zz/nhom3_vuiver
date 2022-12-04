<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include_once("Model/mTK(ADHT).php");
class cTKadht{
	function KTTKADHT(){
		$p=new mTKadht();
		$ktra=$p->kiemtrataikhoanADHT();
		return $ktra;
	}
	function infoad(){
		$p=new mTKadht();
		$ktra=$p->XuatInfo();
		return $ktra;
	}
	function CNAnhHS(){
		$p=new mTKadht();
		$ktra=$p->CapNhatAnhHS();
		return $ktra;
	}
	
}

?>
</body>
</html>