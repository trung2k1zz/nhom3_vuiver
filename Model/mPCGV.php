<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include_once("mConnect(AD).php");
class mQLadtruong{
function XacDinhTruong(){
	$p=new ketnoiad($ketnoi);
	if($p->ketnoi($ketnoi)){
		if(isset($_GET['Ma'])){
			$ma=$_GET['Ma'];
			$sql="select * from taikhoan as tk join admin_truong as at on tk.MaAD=at.MaAD
			join truong as tr on tr.MaTruong=at.MaTruong where tk.MaTK='$ma'";
			$qr=mysql_query($sql);
			return $qr;
		}
	}
	else{
		return false;
	}
}
function XacDinhKhoi(){
	$p=new ketnoiad($ketnoi);
	if($p->ketnoi($ketnoi)){
		if(isset($_GET['Ma'])&&isset($_GET['TenTruong'])){
			$sql="select * from khoi";
			$qr=mysql_query($sql);
			return $qr;
		}
	}
	else{
		return false;
	}
}
function XuatLop(){
	$p=new ketnoiad($ketnoi);
	if($p->ketnoi($ketnoi)){
			if(isset($_GET['Ma'])&&isset($_GET['TenTruong'])&&isset($_GET['TenKhoi'])){
				$tentruong=$_GET['TenTruong'];
				$tenkhoi=$_GET['TenKhoi'];
				$sql="select * from lop as l join khoi as k on l.MaKhoi=k.MaKhoi
				join truong as tr on l.MaTruong=tr.MaTruong where tr.TenTruong='$tentruong'
				and k.TenKhoi='$tenkhoi'";
				$qr=mysql_query($sql);
				return $qr;
			}
	}
	else{
		return false;
	}
}
function XuatMonHoc(){
	$p=new ketnoiad($ketnoi);
	if($p->ketnoi($ketnoi)){
			if(isset($_GET['Ma'])&&isset($_GET['TenTruong'])&&isset($_GET['TenKhoi'])&&isset($_GET['TenLop'])){
				$khoilop=$_GET['TenKhoi'];
				$tentruong=$_GET['TenTruong'];
				$sql="select distinct mh.TenMonHoc as TenMonHoc from monhoc as mh join khoi as k on mh.MaKhoi=k.MaKhoi
				join lop as l on l.MaKhoi=k.MaKhoi
				join truong as tr on l.MaTruong=tr.MaTruong where tr.TenTruong='$tentruong'
				and k.TenKhoi='$khoilop'";
				$qr=mysql_query($sql);
				return $qr;
			}
	}
	else{
		return false;
	}
}
function XuatGiaoVien(){
	$p=new ketnoiad($ketnoi);
	if($p->ketnoi($ketnoi)){
			if(isset($_GET['Ma'])&&isset($_GET['TenTruong'])&&isset($_GET['TenKhoi'])&&isset($_GET['TenLop'])&&isset($_GET['TenMonHoc'])){
				$tenmon=$_GET['TenMonHoc'];
				$tentruong=$_GET['TenTruong'];
				$sql="select * from giaovien as gv join monhoc as mh on gv.MaMonHoc=mh.MaMonHoc
				join truong as tr on tr.MaTruong=gv.MaTruong
				where tr.TenTruong='$tentruong' and mh.TenMonHoc='$tenmon'";
				$qr=mysql_query($sql);
				return $qr;
			}
	}
	else{
		return false;
	}
}
function LayMaLop(){
	$p=new ketnoiad($ketnoi);
	if($p->ketnoi($ketnoi)){
		if(isset($_GET['Ma'])&&isset($_GET['TenTruong'])&&isset($_GET['TenLop'])){
			$ttruong=$_GET['TenTruong'];
			$tenlop=$_GET['TenLop'];
			$sql="select l.MaLop as MaLop from lop as l join khoi as k on l.MaKhoi=k.MaKhoi
				join truong as tr on l.MaTruong=tr.MaTruong where tr.TenTruong='$ttruong'
				and l.TenLop='$tenlop'";
			$qr=mysql_query($sql);
			return $qr;
		}
	}
	else{
		return false;
	}
}
function LayMaMon(){
	$p=new ketnoiad($ketnoi);
	if($p->ketnoi($ketnoi)){
		if(isset($_GET['Ma'])&&isset($_GET['TenTruong'])&&isset($_GET['TenKhoi'])&&isset($_GET['TenLop'])){
			$tenkhoi=$_GET['TenKhoi'];
			$tenmon=$_GET['TenMonHoc'];
			$ttruong=$_GET['TenTruong'];
			$tenlop=$_GET['TenLop'];
			$sql="select * from monhoc as mh join khoi as k on mh.MaKhoi=k.MaKhoi
			join lop as l on l.MaKhoi=k.MaKhoi
			join truong as tr on tr.MaTruong=l.MaTruong where mh.TenMonHoc='$tenmon'
			and tr.TenTruong='$ttruong' and k.TenKhoi='$tenkhoi' and l.TenLop='$tenlop'";
			$qr=mysql_query($sql);
			return $qr;
		}
	}
	else{
		return false;
	}
}
function LayMaGV(){
	$p=new ketnoiad($ketnoi);
	if($p->ketnoi($ketnoi)){
		if(isset($_GET['Ma'])&&isset($_GET['TenTruong'])&&isset($_GET['TenKhoi'])&&isset($_GET['TenLop'])&&isset($_GET['TenMonHoc'])&&isset($_GET['TenGV'])){
			$tengv=$_GET['TenGV'];
			$ttruong=$_GET['TenTruong'];
			$sql="select gv.MaGV as MaGV from giaovien as gv join truong as tr on tr.MaTruong=gv.MaTruong
			where tr.TenTruong='$ttruong' and gv.TenGV='$tengv'";
			$qr=mysql_query($sql);
			return $qr;
		}
	}
	else{
		return false;
	}
}
// Đổ dữ liệu sang bảng giáo viên tính sau vs dk where là Mã Trường
// Cần thêm  3 cái Mã tự động hiển thị tên lớp,môn,giáo viên 
function PCGV(){
	$p=new ketnoiad($ketnoi);
	if($p->ketnoi($ketnoi)){
		if(isset($_POST['submit'])){
			$a=$_POST['a'];
			$b=$_POST['b'];
			$c=$_POST['c'];
			$d=$_POST['d'];
			$e=$_POST['e'];
			$f=$_POST['f'];
			
			$sql="insert into phancong(TenLop,TenGV,TenMonHoc,MaLop,MaGV,MaMonHoc,NgayPhanCong) 
			values('$a','$c','$b','$d','$f','$e',now())";
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
function ChenTiepTableDay(){
	$p=new ketnoiad($ketnoi);
	if($p->ketnoi($ketnoi)){
		if(isset($_POST['submit'])){
			$sql="insert into day(MaLop,MaGV) select MaLop,MaGV from phancong
			where NgayPhanCong=now()";
			$qr=mysql_query($sql);
			return $qr;
			
			
		}
	}
	
	
}
function HienNao(){
	$p=new ketnoiad($ketnoi);
	if($p->ketnoi($ketnoi)){
		$ma=$_GET['Ma'];
		$tentruong=$_GET['TenTruong'];
		$sql="select *from phancong pc join lop l on pc.MaLop=l.MaLop
		join truong tr on tr.MaTruong=l.MaTruong join admin_truong at
		on at.MaTruong=tr.MaTruong where tr.TenTruong='$tentruong'";
		$qr=mysql_query($sql);
		return $qr;		
	}
	
}
}
?>
</body>
</html>