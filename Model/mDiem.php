<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include_once("mConnect(GV).php");
class mDiem{
function Diem(){
	$p=new ketnoigv($ketnoi);
	if($p->ketnoi($ketnoi)){
		if(isset($_POST['submit'])){
			$td=$_POST['lb'];
			$mahs=$_POST['mahs'];
			$malop=$_POST['malop'];
			$magv=$_POST['magv'];
			$mamon=$_POST['mamon'];
			$diem=$_POST['diem'];
			$sql="insert into diem(TieuDe,Diem,MaHS,MaLop,MaMon,MaGV,NgayXNDiem)
			values('$td','$diem','$mahs','$malop','$mamon','$magv',now())";
			$qr=mysql_query($sql);
			return $qr;
			
		}
	}
}
function KTNutKT(){
	if(isset($_POST['MaHS'])&&isset($_POST['MaGV'])&&isset($_POST['MaMonHoc'])){
		$mahs=$_POST['MaHS'];
		$magv=$_POST['MaGV'];
		$mamon=$_POST['MaMonHoc'];
		$sql="select *from diem where MaHS='$mahs' and MaGV='$magv' and MaMon='$mamon' and TieuDe='TK1'";
		$qr=mysql_query($sql);
		return $qr;
	}
}
function KTNutKT2(){
	if(isset($_POST['MaHS'])&&isset($_POST['MaGV'])&&isset($_POST['MaMonHoc'])){
		$mahs=$_POST['MaHS'];
		$magv=$_POST['MaGV'];
		$mamon=$_POST['MaMonHoc'];
		$sql="select *from diem where MaHS='$mahs' and MaGV='$magv' and MaMon='$mamon' and TieuDe='TK2'";
		$qr=mysql_query($sql);
		return $qr;
	}
}
function KTNutKT3(){
	if(isset($_POST['MaHS'])&&isset($_POST['MaGV'])&&isset($_POST['MaMonHoc'])){
		$mahs=$_POST['MaHS'];
		$magv=$_POST['MaGV'];
		$mamon=$_POST['MaMonHoc'];
		$sql="select *from diem where MaHS='$mahs' and MaGV='$magv' and MaMon='$mamon' and TieuDe='TK3'";
		$qr=mysql_query($sql);
		return $qr;
	}
}
function KTNutKT4(){
	if(isset($_POST['MaHS'])&&isset($_POST['MaGV'])&&isset($_POST['MaMonHoc'])){
		$mahs=$_POST['MaHS'];
		$magv=$_POST['MaGV'];
		$mamon=$_POST['MaMonHoc'];
		$sql="select *from diem where MaHS='$mahs' and MaGV='$magv' and MaMon='$mamon' and TieuDe='TK4'";
		$qr=mysql_query($sql);
		return $qr;
	}
}
function KTNutKT5(){
	if(isset($_POST['MaHS'])&&isset($_POST['MaGV'])&&isset($_POST['MaMonHoc'])){
		$mahs=$_POST['MaHS'];
		$magv=$_POST['MaGV'];
		$mamon=$_POST['MaMonHoc'];
		$sql="select *from diem where MaHS='$mahs' and MaGV='$magv' and MaMon='$mamon' and TieuDe='TK5'";
		$qr=mysql_query($sql);
		return $qr;
	}
}
function KTNutGK(){
	if(isset($_POST['MaHS'])&&isset($_POST['MaGV'])&&isset($_POST['MaMonHoc'])){
		$mahs=$_POST['MaHS'];
		$magv=$_POST['MaGV'];
		$mamon=$_POST['MaMonHoc'];
		$sql="select *from diem where MaHS='$mahs' and MaGV='$magv' and MaMon='$mamon' and TieuDe='GK'";
		$qr=mysql_query($sql);
		return $qr;
	}
}
function KTNutCK(){
	if(isset($_POST['MaHS'])&&isset($_POST['MaGV'])&&isset($_POST['MaMonHoc'])){
		$mahs=$_POST['MaHS'];
		$magv=$_POST['MaGV'];
		$mamon=$_POST['MaMonHoc'];
		$sql="select *from diem where MaHS='$mahs' and MaGV='$magv' and MaMon='$mamon' and TieuDe='CK'";
		$qr=mysql_query($sql);
		return $qr;
	}
}
function MaGV(){
	$ma=$_GET['Ma'];
	$sql="select * from taikhoan tk join giaovien gv on tk.MaTK=gv.MaTK
	where tk.MaTK='$ma'";
	$qr=mysql_query($sql);
	return $qr;
}
function HS(){
	$malop=$_GET['MaLop'];
	$sql="select * from hocsinh hs join lop l on hs.MaLop=l.MaLop 
	where l.MaLop='$malop'";
	$qr=mysql_query($sql);
	return $qr;
}
function XuatDiem1(){
	$mahs=$_GET['MaHS'];
	$malop=$_GET['MaLop'];
	$magv=$_GET['MaGV'];
	$sql="select *from diem d join hocsinh hs on d.MaHS=hs.MaHS where d.MaHS='$mahs' and d.MaLop='$malop' and d.MaGV='$magv' and 
	d.TieuDe='TK1'";
	$qr=mysql_query($sql);
	return $qr;
}
function XuatDiem2(){
	$mahs=$_GET['MaHS'];
	$malop=$_GET['MaLop'];
	$magv=$_GET['MaGV'];
	$sql="select *from diem d join hocsinh hs on d.MaHS=hs.MaHS where d.MaHS='$mahs' and d.MaLop='$malop' and d.MaGV='$magv' and 
	d.TieuDe='TK2'";
	$qr=mysql_query($sql);
	return $qr;
}
function XuatDiem3(){
	$mahs=$_GET['MaHS'];
	$malop=$_GET['MaLop'];
	$magv=$_GET['MaGV'];
	$sql="select *from diem d join hocsinh hs on d.MaHS=hs.MaHS where d.MaHS='$mahs' and d.MaLop='$malop' and d.MaGV='$magv' and 
	d.TieuDe='TK3'";
	$qr=mysql_query($sql);
	return $qr;
}
function XuatDiem4(){
	$mahs=$_GET['MaHS'];
	$malop=$_GET['MaLop'];
	$magv=$_GET['MaGV'];
	$sql="select *from diem d join hocsinh hs on d.MaHS=hs.MaHS where d.MaHS='$mahs' and d.MaLop='$malop' and d.MaGV='$magv' and 
	d.TieuDe='TK4'";
	$qr=mysql_query($sql);
	return $qr;
}
function XuatDiem5(){
	$mahs=$_GET['MaHS'];
	$malop=$_GET['MaLop'];
	$magv=$_GET['MaGV'];
	$sql="select *from diem d join hocsinh hs on d.MaHS=hs.MaHS where d.MaHS='$mahs' and d.MaLop='$malop' and d.MaGV='$magv' and 
	d.TieuDe='TK5'";
	$qr=mysql_query($sql);
	return $qr;
}

function TL1(){
	$mahs=$_GET['MaHS'];
	$malop=$_GET['MaLop'];
	$magv=$_GET['MaGV'];
	$sql="select *from diem d join hocsinh hs on d.MaHS=hs.MaHS where d.MaHS='$mahs' and d.MaLop='$malop' and d.MaGV='$magv' and 
	d.TieuDe='TK6'";
	$qr=mysql_query($sql);
	return $qr;
}
function TL2(){
	$mahs=$_GET['MaHS'];
	$malop=$_GET['MaLop'];
	$magv=$_GET['MaGV'];
	$sql="select *from diem d join hocsinh hs on d.MaHS=hs.MaHS where d.MaHS='$mahs' and d.MaLop='$malop' and d.MaGV='$magv' and 
	d.TieuDe='TK7'";
	$qr=mysql_query($sql);
	return $qr;
}
function TL3(){
	$mahs=$_GET['MaHS'];
	$malop=$_GET['MaLop'];
	$magv=$_GET['MaGV'];
	$sql="select *from diem d join hocsinh hs on d.MaHS=hs.MaHS where d.MaHS='$mahs' and d.MaLop='$malop' and d.MaGV='$magv' and 
	d.TieuDe='TK8'";
	$qr=mysql_query($sql);
	return $qr;
}
function GK(){
	$mahs=$_GET['MaHS'];
	$malop=$_GET['MaLop'];
	$magv=$_GET['MaGV'];
	$sql="select *from diem d join hocsinh hs on d.MaHS=hs.MaHS where d.MaHS='$mahs' and d.MaLop='$malop' and d.MaGV='$magv' and 
	d.TieuDe='GK'";
	$qr=mysql_query($sql);
	return $qr;
}
function CK(){
	$mahs=$_GET['MaHS'];
	$malop=$_GET['MaLop'];
	$magv=$_GET['MaGV'];
	$sql="select *from diem d join hocsinh hs on d.MaHS=hs.MaHS where d.MaHS='$mahs' and d.MaLop='$malop' and d.MaGV='$magv' and 
	d.TieuDe='CK'";
	$qr=mysql_query($sql);
	return $qr;
}
}
?>
</body>
</html>