<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include_once("mConnect(ADHT).php");
class mad{
function XuatTruong(){
	$p=new ketnoiadht($ketnoi);
	if($p->ketnoi($ketnoi)){
		$sql="select *from truong";
		$qr=mysql_query($sql);
		return $qr;
	}
}
function XuatKhoiTheoTruong(){
	$p=new ketnoiadht($ketnoi);
	if($p->ketnoi($ketnoi)){
		if(isset($_GET['TenTruong'])){
		$tentruong=$_GET['TenTruong'];
		$sql="select *from khoi";
		$qr=mysql_query($sql);
		return $qr;
		}
	}
}
function XuatLopTheoKhoi(){
	$p=new ketnoiadht($ketnoi);
	if($p->ketnoi($ketnoi)){
		if(isset($_GET['TenTruong'])&&isset($_GET['TenKhoi'])){
		$tentruong=$_GET['TenTruong'];
		$tenkhoi=$_GET['TenKhoi'];
		$sql="select *from truong as tr join lop as l
		on l.MaTruong=tr.MaTruong join khoi as k on k.MaKhoi=l.MaKhoi
		where tr.TenTruong='$tentruong' and k.TenKhoi='$tenkhoi'";
		$qr=mysql_query($sql);
		return $qr;
		}
	}
}
function XuatDanhSachHocSinhTheoLop(){
	$p=new ketnoiadht($ketnoi);
	if($p->ketnoi($ketnoi)){
		if(isset($_GET['TenTruong'])&&isset($_GET['TenKhoi'])&&isset($_GET['TenLop'])){
		$tentruong=$_GET['TenTruong'];
		$tenkhoi=$_GET['TenKhoi'];
		$tenlop=$_GET['TenLop'];
		$sql="select *from truong as tr join lop as l on l.MaTruong=tr.MaTruong
		join khoi as k on k.MaKhoi=l.MaKhoi join hocsinh as hs on hs.MaLop=l.MaLop
		where tr.TenTruong='$tentruong' and k.TenKhoi='$tenkhoi' and l.TenLop='$tenlop'";
		$qr=mysql_query($sql);
		return $qr;
		}
	}
}
}
?>
</body>
</html>