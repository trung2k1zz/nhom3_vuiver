<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include_once("Model/mPCGV.php");
class cQLadtruong{
function DinhDanhTruong(){
	$p=new mQLadtruong();
	$dinhdanh=$p->XacDinhTruong();
	return $dinhdanh;
}
function HienLop(){
	$p=new mQLadtruong();
	$lop=$p->XuatLop();
	return $lop;
	
}
function HienMon(){
	$p=new mQLadtruong();
	$mon=$p->XuatMonHoc();
	return $mon;
	
}
function HienGV(){
	$p=new mQLadtruong();
	$gv=$p-> XuatGiaoVien();
	return $gv;
	
}
function ThemPCGV(){
	$p=new mQLadtruong();
	$gv=$p->PCGV();
	return $gv;
	
}
function ThemDay(){
	$p=new mQLadtruong();
	$gv=$p->ChenTiepTableDay();
	return $gv;
	
}
function HienMaLop(){
	$p=new mQLadtruong();
	$code=$p->LayMaLop();
	return $code;
}
function HienMaMon(){
	$p=new mQLadtruong();
	$code=$p->LayMaMon();
	return $code;
}
function HienMaGV(){
	$p=new mQLadtruong();
	$code=$p->LayMaGV();
	return $code;
}
function XuatKhoi(){
	$p=new mQLadtruong();
	$code=$p->XacDinhKhoi();
	return $code;
}
function Xem(){
	$p=new mQLadtruong();
	$app=$p->HienNao();
	return $app;
}
}
?>
</body>
</html>