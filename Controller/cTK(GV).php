<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include_once("Model/mTK(GV).php");
class cTKgv{
	function KTTKGV(){
		$p=new mTKgv();
		$ktra=$p->kiemtrataikhoanGV();
		return $ktra;
	}
	function Info(){
		$p=new mTKgv();
		$tt=$p->XuatThongTin();
		return $tt;
	}
	function NameGV(){
		$p=new mTKgv();
		$tt=$p->XemTenGV();
		return $tt;
	}
	function Infogv(){
		$p=new mTKgv();
		$tt=$p->XuatInfo();
		return $tt;
	}
	function UpdAnh(){
		$p=new mTKgv();
		$anh=$p->capnhatanh();
		return $anh;
	}
	
}

?>
</body>
</html>