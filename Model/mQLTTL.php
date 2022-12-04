<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
//Xuất danh sách lớp của một trường đã chọn
class mQLadht{
function XuatLop(){
	$p=new ketnoiadht($ketnoi);
	if($p->ketnoi($ketnoi)){
		if(isset($_GET['Ma'])&&isset($_GET['TenTruong'])){
			$bangghimoitrang=!empty($_GET['per_page'])?$_GET['per_page']:5;
			$tranghientai=!empty($_GET['page'])?$_GET['page']:1;
			$start_from = ($tranghientai-1) * $bangghimoitrang;
			$tentruong=$_GET['TenTruong'];
			$sql="select *from quanhuyen as q join truong as tr on q.MaQuan=tr.MaQuan join lop 
			as l on l.MaTruong=tr.MaTruong join khoi as k on k.MaKhoi=l.MaKhoi
			where tr.TenTruong='$tentruong' limit $start_from,$bangghimoitrang";
			$qr=mysql_query($sql);
			return $qr;
		}
		else{
			return false;
		}
	}
	else{
		return false;
	}
	
}
function sotrangcanthiet(){
		if(isset($_GET['Ma'])&&isset($_GET['TenTruong'])){
			$tentruong=$_GET['TenTruong'];
			$bangghimoitrang=!empty($_GET['per_page'])?$_GET['per_page']:5;
			$tranghientai=!empty($_GET['page'])?$_GET['page']:1;
			$sql ="select count(l.MaLop) from lop as l join truong as tr on tr.MaTruong=l.MaTruong
			join khoi as k on k.MaKhoi=l.MaKhoi
			where tr.TenTruong='$tentruong'";
			$qr=mysql_query($sql); 
    		$cot = mysql_fetch_row($qr);  
    		$tongbangghi = $cot[0];  
   		    $tongsotrang = ceil($tongbangghi / $bangghimoitrang); 
			include_once("Controller/cPhanTrang.php");
			return $tongsotrang;
		}
	}
function HienTruong(){
	$p=new ketnoiadht($ketnoi);
	if($p->ketnoi($ketnoi)){
		if(isset($_GET['Ma'])&&$_GET['TenTruong']){
		$tentruong=$_GET['TenTruong'];
		$sql="select *from truong where TenTruong='$tentruong'";
		$qr=mysql_query($sql);
		return $qr;
		}
		
	}
}
function HienKhoi(){
	$p=new ketnoiadht($ketnoi);
	if($p->ketnoi($ketnoi)){
		$sql="select *from khoi";
		$qr=mysql_query($sql);
		return $qr;
		
	}
}
function ThemLop(){
	$p=new ketnoiadht($ketnoi);
	if($p->ketnoi($ketnoi)){
		if(isset($_POST['submit'])){
		  $a=$_POST['a'];
		  $b=$_POST['b'];
		  $c=$_POST['c'];
			$sql="insert into lop(TenLop,MaKhoi,MaTruong) values ('$a','$b','$c')";
			$qr=mysql_query($sql);
			return $qr;
			
		}
		else{
			return false;
		}
	}
	else{
		return false;
	}
	
	
}
function LayDuLieu(){
	$p=new ketnoiadht($ketnoi);
	if($p->ketnoi($ketnoi)){
		if(isset($_GET['Ma'])&&isset($_GET['TenTruong'])&&isset($_GET['UpLop'])){
			$tentruong=$_GET['TenTruong'];
			$malop=$_GET['UpLop'];
			$sql="select *
			from truong as tr join lop as l on
			l.MaTruong=tr.MaTruong join khoi as k on k.MaKhoi=l.MaKhoi
			where tr.TenTruong='$tentruong' and l.MaLop='$malop'";
			$qr=mysql_query($sql);
			return $qr;
			
			
		}
		else{
			return false;
		}
		
	}
	else{
		return false;
	}
	
}
function UpLop(){
	$p=new ketnoiadht($ketnoi);
	if($p->ketnoi($ketnoi)){
		if(isset($_POST['submit'])){
			$a=$_POST['a'];
			$b=$_POST['b'];
		if(isset($_GET['UpLop'])){
			$malop=$_GET['UpLop'];
			$tentruong=$_GET['TenTruong'];
			$sql="update lop set TenLop='$a',MaKhoi='$b'
			where MaLop='$malop'";
			$qr=mysql_query($sql);
			return $qr;
			$p->dongketnoi(($ketnoi));
			}
		else{
			return false;
		}
			
		}
		
	}
}
function DelLop(){
	$p=new ketnoiadht($ketnoi);
	if($p->ketnoi($ketnoi)){
		if(isset($_GET['Ma'])&&isset($_GET['TenTruong'])&&isset($_GET['DelLop'])){
			$tenlop=$_GET['DelLop'];
			$tentruong=$_GET['TenTruong'];
			$sql="delete l from truong as tr join lop as l on tr.MaTruong=l.MaTruong
			where tr.TenTruong='$tentruong' and l.TenLop='$tenlop'";
			$qr=mysql_query($sql);
			return $qr;
			
		}
	}
	else{
		return false;
	}
	
}
}
?>
</body>
</html>