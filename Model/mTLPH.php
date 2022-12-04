<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include_once("mConnect(GV).php");
class mTLPH{
function XuatLopDayGV(){
	$p=new ketnoigv($ketnoi);
	if($p->ketnoi($ketnoi)){
		if(isset($_GET['Ma'])){
		$magv=$_GET['Ma'];
		$sql="select * from taikhoan as tk join giaovien as gv on tk.MaTK=gv.MaTK
		join day as d on d.MaGV=gv.MaGV join lop as l on l.MaLop=d.MaLop where tk.MaTK='$magv'";
		$qr=mysql_query($sql);
		return $qr;
		}
		
	}
}
function XuatHSLop(){
	$p=new ketnoigv($ketnoi);
	if($p->ketnoi($ketnoi)){
		if(isset($_GET['Ma'])&&isset($_GET['TenLop'])){
		$magv=$_GET['Ma'];
		$tenlop=$_GET['TenLop'];
		$sql="select * from taikhoan as tk join giaovien as gv on tk.MaTK=gv.MaTK
		join day as d on d.MaGV=gv.MaGV join lop as l on l.MaLop=d.MaLop join hocsinh as hs on hs.MaLop=l.MaLop
		where tk.MaTK='$magv' and l.TenLop='$tenlop'";
		$qr=mysql_query($sql);
		return $qr;
		}
		
	}
}
function XuatNoiDungTinNhan(){
	$p=new ketnoigv($ketnoi);
	if($p->ketnoi($ketnoi)){
		if(isset($_GET['Ma'])){
		$tenhs=$_GET['TenHS'];
		$ma=$_GET['Ma'];
		$tenlop=$_GET['TenLop'];
		$magv=$_GET['MaGV'];
		$sql="select * from taikhoan as tk join giaovien as gv on tk.MaTK=gv.MaTK
		join day as d on d.MaGV=gv.MaGV join lop as l on l.MaLop=d.MaLop join hocsinh as hs on hs.MaLop=l.MaLop
		join cauhoiphanhoi as chph on chph.MaHS=hs.MaHS
		where tk.MaTK='$ma' and l.TenLop='$tenlop' and hs.TenHS='$tenhs' and chph.MaGV='$magv'";
		$qr=mysql_query($sql);
		return $qr;
		}
		
	}
}
function TraLoi(){
	$p=new ketnoigv($ketnoi);
	if($p->ketnoi($ketnoi)){
		if(isset($_GET['submit'])){
			$magv=$_GET['magv'];
			$malop=$_GET['malop'];
			$mahs=$_GET['mahs'];
			$nd=$_GET['a'];
			$sql="insert into traloiphanhoi(NoiDungPH,MaLop,MaHS,MaGV,NgayPH) values('$nd','$malop','$mahs','$magv',now())";
			$qr=mysql_query($sql);
			return $qr;
		}
}
}
function XuatTinNhanPH(){
	$p=new ketnoigv($ketnoi);
	if($p->ketnoi($ketnoi)){
			$magv=$_GET['MaGV'];
			$mahs=$_GET['MaHS'];
			$malop=$_GET['MaLop'];
			$sql="select *from traloiphanhoi where MaGV='$magv' and MaLop='$malop' and MaHS='$mahs'";
			$qr=mysql_query($sql);
			return $qr;
		
	}
}
function XuatTNPHChoHS(){
	$p=new ketnoigv($ketnoi);
	if($p->ketnoi($ketnoi)){
		if(isset($_GET['MaHS'])&&isset($_GET['MaLop'])&&isset($_GET['MaGV'])){
			$mahs=$_GET['MaHS'];
			$malop=$_GET['MaLop'];
			$magv=$_GET['MaGV'];
			$sql="select * from traloiphanhoi as tlph
			where tlph.MaHS='$mahs' and tlph.MaLop='$malop' and tlph.MaGV='$magv'";
			$qr=mysql_query($sql);
			return $qr;
		}
	}
	
}
}
?>
</body>
</html>