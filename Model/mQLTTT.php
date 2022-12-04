<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include_once("mConnect(ADHT).php");
class mQLadht{
function XuatTPADHT(){
	$p=new ketnoiadht($ketnoi);
	if($p->ketnoi($ketnoi)){
			$sql="select *from thanhpho";
			$qr=mysql_query($sql);
			return $qr;
	}
	else{
		return false;
	}
}
function XuatQuanHuyen(){
	$p=new ketnoiadht($ketnoi);
	if($p->ketnoi($ketnoi)){
			$sql="select *from quanhuyen join thanhpho";
			$qr=mysql_query($sql);
			return $qr;
	}
	else{
		return false;
	}
	
}
function XuatTruong(){
	$p=new ketnoiadht($ketnoi);
	if($p->ketnoi($ketnoi)){
		if(isset($_GET['Ma'])&&isset($_GET['TenQuan'])){
			$tenquan=$_GET['TenQuan'];
			$sql="select q.TenQuan as TenQuan,tr.Anh as Anh,tr.MaTruong as MaTruong,tr.TenTruong as TenTruong,tr.DiaChi as DiaChi,tr.NamHoatDong as NamHoatDong from thanhpho as tp join quanhuyen as q on q.MaTP=tp.MaTP join truong as tr on tr.MaQuan=q.MaQuan where q.TenQuan='$tenquan'";
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
//Xóa trường
function XoaTruong(){
	$p=new ketnoiadht($ketnoi);
	if($p->ketnoi($ketnoi)){
		if(isset($_GET['Ma'])&&isset($_GET['del'])){
			$ma=$_GET['del'];
			$sql="delete from truong where TenTruong='$ma'";
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
//Xem chi tiết trường
function XemChiTiet(){
	$p=new ketnoiadht($ketnoi);
	if($p->ketnoi($ketnoi)){
		if(isset($_GET['Ma'])&&isset($_GET['TenTruong'])){
			$tentruong=$_GET['TenTruong'];
			$sql="select q.TenQuan as TenQuan,tr.MaTruong as MaTruong,tr.TenTruong as TenTruong,tr.DiaChi as 
			DiaChi,tr.NamHoatDong as NamHoatDong,tr.SDT as SDT,tr.Email as Email,tr.Anh as Anh from 
			thanhpho as tp join quanhuyen as q on q.MaTP=tp.MaTP join truong as tr on tr.MaQuan=q.MaQuan 
			where tr.TenTruong='$tentruong'";
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
 //Lấy dữ liệu đổ vào form khi cập nhật
 function DoDuLieuCapNhat(){
	    $p=new ketnoiadht($ketnoi);
		if($p->ketnoi($ketnoi)){
		 if(isset($_GET['up'])){
			 $ten=$_GET['up'];
			 $sql="select * from truong as tr join quanhuyen as q on tr.MaQuan=q.MaQuan where tr.TenTruong='$ten'";
			 $qr=mysql_query($sql);
			 return $qr;
			 $p->dongketnoi($ketnoi);
		 }
	 }
	 else{
		 return false;
	 }
 }
 //Cập nhật trường
 function UpDateTruong(){
	    $p=new ketnoiadht($ketnoi);
		if($p->ketnoi($ketnoi)){
			if(isset($_POST['submit'])){
				$a=$_POST['a'];
				$b=$_POST['b'];
				$c=$_POST['c'];
				$d=$_POST['d'];
				$anh=$_FILES['e']['name'];
				if($anh==Null){
					$anh=$_POST['k'];
				}
				$f=$_POST['f'];
				$g=$_POST['g'];
				$o=$_POST['o'];
				if(isset($_GET['up'])){
					$ten=$_GET['up'];
	$sql="update truong set MaTruong='$o',TenTruong='$a',DiaChi='$b',Email='$c',SDT='$d',
	Anh='$anh',NamHoatDong='$f',MaQuan='$g' where TenTruong='$ten'";
	$qr =mysql_query($sql);
	return $qr;
	$p->dongketnoi(($ketnoi));
			}
			else{
				return false;
			}
		}
}
 }
//Xem số lượng lớp,học sinh và giáo viên
function SL(){
	$p=new ketnoiadht($ketnoi);
	if($p->ketnoi($ketnoi)){
		if(isset($_GET['Ma'])&&isset($_GET['TenTruong'])){
			$tentruong=$_GET['TenTruong'];
			$sql="select count(gv.MaGV) as slgv from
			giaovien as gv join truong as tr on tr.MaTruong=gv.MaTruong
			where tr.TenTruong='$tentruong'";
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
function SLL(){
	$p=new ketnoiadht($ketnoi);
	if($p->ketnoi($ketnoi)){
		if(isset($_GET['Ma'])&&isset($_GET['TenTruong'])){
			$tentruong=$_GET['TenTruong'];
			$sql="select count(l.MaLop) as sll from
			truong as tr join lop as l
			on l.MaTruong=tr.MaTruong where tr.TenTruong='$tentruong'";
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
function SLHS(){
	$p=new ketnoiadht($ketnoi);
	if($p->ketnoi($ketnoi)){
		if(isset($_GET['Ma'])&&isset($_GET['TenTruong'])){
			$tentruong=$_GET['TenTruong'];
			$sql="select count(MaHS) as slhs from
			truong as tr join lop as l on l.MaTruong=tr.MaTruong
			join hocsinh as hs on hs.MaLop=l.MaLop
			where tr.TenTruong='$tentruong'";
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
function ThemTruong(){
		$p=new ketnoiadht($ketnoi);
		if($p->ketnoi($ketnoi)){
			if(isset($_POST['submit'])){
				$a=$_POST['a'];
				$b=$_POST['b'];
				$c=$_POST['c'];
				$d=$_POST['d'];
				$anh=$_FILES['e']['name'];
				$f=$_POST['f'];
				$g=$_POST['g'];
				
				
		}
		$sql="insert into truong(TenTruong,DiaChi,Email,SDT,Anh,NamHoatDong,MaQuan) 
		values('$a','$b','$c','$d','$anh','$f','$g')";
		$qr=mysql_query($sql);
		return $qr;
		$p->dongketnoi($ketnoi);
		}
	}
	
}

?>
</body>
</html>