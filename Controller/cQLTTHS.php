<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include_once("Model/mQLTTHS.php");
class cQLadsys{
	function HienHS(){
		$p=new mQLadsys();
		$xuat=$p->XuatHocSinh();
		return $xuat;
	}
	function PhanTrangHS(){
		$p=new mQLadsys();
		$page=$p->sotrangcanthiet();
		return $page;
	}
	function TuDong(){
		$p=new mQLadsys();
		$xuat=$p->DienTuDong();
		return $xuat;
	}
	function ChenHS(){
		$p=new mQLadsys();
		$chen=$p-> ThemHS();
		return $chen;
	}
	function DoDuLieuHS(){
		$p=new mQLadsys();
		$dohs=$p-> LayDuLieuCoSan();
		return $dohs;
	}
	function UpHS(){
		$p=new mQLadsys();
		$sua=$p->SuaHS();
		return $sua;
	}
	function DelHS(){
		$p=new mQLadsys();
		$xoa=$p->XoaHS();
		return $xoa;
	}
}
?>
</body>
</html>