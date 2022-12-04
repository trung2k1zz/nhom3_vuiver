<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include_once("mConnect(ADHT).php");
class mUpLoad{
function TaiTaiLieu(){
	$p=new ketnoiadht($ketnoi);
	if($p->ketnoi($ketnoi)){
		if(isset($_POST['submit'])){
			$magv=$_POST['a'];
			$mamon=$_POST['MaMon'];
			$malop=$_POST['MaLop'];
			$ten=$_FILES['f']['name'];
			$sql="insert into tailieuthamkhao(TenTLTK,MaGV,MaMon,MaLop) values ('$ten','$magv','$mamon','$malop')";
			$qr=mysql_query($sql);
			return $qr;			
		}
	}
}
function XuatTaiLieu(){
	$p=new ketnoiadht($ketnoi);
	if($p->ketnoi($ketnoi)){
		if(isset($_GET['Ma'])&&isset($_GET['TenMon'])&&isset($_GET['MaLop'])&&isset($_GET['TenKhoi'])){
			$tenmon=$_GET['TenMon'];
			$malop=$_GET['MaLop'];
			$tenkhoi=$_GET['TenKhoi'];
			$sql="select *from monhoc as mh join khoi as k on mh.MaKhoi=k.MaKhoi join tailieuthamkhao
			as tl on tl.MaMon=mh.MaMonHoc join lop as l on l.MaLop=tl.MaLop
			where mh.TenMonHoc='$tenmon' and tl.MaLop='$malop' and 
			k.TenKhoi='$tenkhoi'";
			$qr=mysql_query($sql);
			return $qr;
		}
	}
}
}
?>
</body>
</html>