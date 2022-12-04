<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include_once("Model/mTK(HS).php");
class cTK{
	function KTTKHS(){
		$p=new mTK();
		$ktra=$p->kiemtrataikhoanHS();
		return $ktra;
	}
	function Info(){
		$p=new mTK();
		$tt=$p->XuatThongTin();
		return $tt;
	}
	function Ten(){
		$p=new mTK();
		$tt=$p->TenTK();
		return $tt;
	}
	
}

?>
</body>
</html>