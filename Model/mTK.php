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
function Add(){
	$p=new ketnoiadht($ketnoi);
	if($p->ketnoi($ketnoi)){
	  if(isset($_POST['submit'])){
		$a=$_POST['a'];
		$sql="insert into luottruycap(TenTruyCap,NgayTruyCap,SoLanTruyCap)
		values ('$a',now(),1)";
		$qr=mysql_query($sql);
		return $qr;
		}
	}
}
function HienDS(){
	$p=new ketnoiadht($ketnoi);
	if($p->ketnoi($ketnoi)){
		$bangghimoitrang=!empty($_GET['per_page'])?$_GET['per_page']:5;
		$tranghientai=!empty($_GET['page'])?$_GET['page']:1;
		$start_from = ($tranghientai-1) * $bangghimoitrang;
		$sql="select sum(SoLanTruyCap) as SoLanTruyCap,MaTruyCap,NgayTruyCap,
		TenTruyCap from luottruycap 
		group by MaTruyCap,NgayTruyCap,TenTruyCap 
		 limit $start_from,$bangghimoitrang";
		$qr=mysql_query($sql);
		return $qr;
	}
	
}
function sotrangcanthiet(){
	$p=new ketnoiadht($ketnoi);
	if($p->ketnoi($ketnoi)){
		$bangghimoitrang=!empty($_GET['per_page'])?$_GET['per_page']:5;
		$tranghientai=!empty($_GET['page'])?$_GET['page']:1;
		$sql ="select count(MaTruyCap) from luottruycap";
			$qr=mysql_query($sql); 
    		$cot = mysql_fetch_row($qr);  
    		$tongbangghi = $cot[0];  
   		    $tongsotrang = ceil($tongbangghi / $bangghimoitrang); 
			include_once("Controller/cPhanTrangThongKe.php");
			return $tongsotrang;
	}
	
}
function Tong(){
	$p=new ketnoiadht($ketnoi);
	if($p->ketnoi($ketnoi)){
		$sql="select sum(SoLanTruyCap) as Tong from luottruycap";
		$qr=mysql_query($sql);
		return $qr;
	}
	
}
}
?>
</body>
</html>