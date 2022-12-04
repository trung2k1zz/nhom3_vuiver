<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include_once("Model/mTLPH.php");
class cTLPH{
	function Lop(){
		$p=new mTLPH();
		$class=$p->XuatLopDayGV();
		return $class;
	}
	function HS(){
		$p=new mTLPH();
		$stu=$p->XuatHSLop();
		return $stu;
	}
	function TinNhan(){
		$p=new mTLPH();
		$xu=$p->XuatNoiDungTinNhan();
		return $xu;
	}
	function Reply(){
		$p=new mTLPH();
		$tl=$p->TraLoi();
		return $tl;
	}
	function Xuat(){
		$p=new mTLPH();
		$tnph=$p->XuatTinNhanPH();
		return $tnph;
	}
	function TNPHHS(){
		$p=new mTLPH();
		$tnph=$p->XuatTNPHChoHS();
		return $tnph;
	}
}
?>
</body>
</html>