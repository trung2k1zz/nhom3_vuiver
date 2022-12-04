<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include_once("mConnect(GV).php");
class mTKgv{
function kiemtrataikhoanGV(){
	$p=new ketnoigv($ketnoi);
	if($p->ketnoi($ketnoi)){
		if(isset($_POST['submit'])){
			$ten=$_REQUEST['a'];
			$mk=$_REQUEST['b'];
			$sql="select *from taikhoan where MaTK='$ten' && MatKhau='$mk' && ChucDanh='1'";
			$qr=mysql_query($sql);
			return $qr;
		}
		else{
			echo "<script>alert('Không có submit')</script>";
		}
	}
	else{
		return false;
	}
}
function XuatThongTin(){
	$p=new ketnoigv($ketnoi);
	if($p->ketnoi($ketnoi)){
		if(isset($_GET['Ma'])){
		$ten=$_GET['Ma'];
		$sql="select * from taikhoan where MaTK='$ten'";
		$qr=mysql_query($sql);
		return $qr;
		}
		
	}
	else{
		return false;
	}
}
function XemTenGV(){
	$p=new ketnoigv($ketnoi);
	if($p->ketnoi($ketnoi)){
		if(isset($_GET['Ma'])){
		$ten=$_GET['Ma'];
		$sql="select * from taikhoan t join giaovien gv on t.MaTK=gv.MaTK where t.MaTK='$ten'";
		$qr=mysql_query($sql);
		return $qr;
		}
		
	}
	else{
		return false;
	}
}
function XuatInfo(){
	$p=new ketnoigv($ketnoi);
	if($p->ketnoi($ketnoi)){
		if(isset($_GET['Ma'])){
		$ten=$_GET['Ma'];
		$sql="select gv.TenGV as TenGV,t.Anh as Anh,t.ChucDanh as ChucDanh,gv.SDT as SDT,
		gv.DiaChi as DiaChi,gv.Email as Email
		,tr.TenTruong 
		from taikhoan t join giaovien as gv on t.MaTK=gv.MaTK 
		join truong tr on tr.MaTruong=gv.MaTruong 
		where t.MaTK='$ten'";
		$qr=mysql_query($sql);
		return $qr;
		}
		
	}
	else{
		return false;
	}
}
function capnhatanh(){
	$p=new ketnoigv($ketnoi);
	if($p->ketnoi($ketnoi)){
		if(isset($_GET['submit'])){
			$ma=$_GET['Ma'];
			$f=$_GET['f'];
			$sql="update taikhoan set Anh='$f' where MaTK='$ma'";
			$qr=mysql_query($sql);
			return $qr;
	
}
	}
}

}
?>
</body>
</html>
