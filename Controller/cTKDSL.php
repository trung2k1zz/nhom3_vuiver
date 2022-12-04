<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include_once("Model/mTKDSL.php");
class cad{
function XuatTruong(){
	$p=new ketnoiadht($ketnoi);
	if($p->ketnoi($ketnoi)){
		$p=new mad();
		$trave=$p->XuatTruong();
		return $trave;
	}
}
function XuatKhoi(){
	$p=new ketnoiadht($ketnoi);
	if($p->ketnoi($ketnoi)){
		$p=new mad();
		$trakhoi=$p->XuatKhoiTheoTruong();
		return $trakhoi;
	}
}
function XuatLop(){
	$p=new ketnoiadht($ketnoi);
	if($p->ketnoi($ketnoi)){
		$p=new mad();
		$tralop=$p->XuatLopTheoKhoi();
		return $tralop;
	}
}
function XuatDanhSach(){
	$p=new ketnoiadht($ketnoi);
	if($p->ketnoi($ketnoi)){
		$p=new mad();
		$tralop=$p->XuatDanhSachHocSinhTheoLop();
		return $tralop;
	}
}
}
?>
</body>
</html>