<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include_once("mConnect(ADHT).php");
class mTKadht{
function kiemtrataikhoanADHT(){
	$p=new ketnoiadht($ketnoi);
	if($p->ketnoi($ketnoi)){
		if(isset($_POST['submit'])){
			$ten=$_REQUEST['a'];
			$mk=$_REQUEST['b'];
			$sql="select *from taikhoan where MaTK='$ten' && MatKhau='$mk' && ChucDanh='3'";
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
function XuatInfo(){
	$p=new ketnoiadht($ketnoi);
	if($p->ketnoi($ketnoi)){
		if(isset($_GET['Ma'])){
		$ma=$_GET['Ma'];
		$sql="select * from taikhoan tk join adht ah on tk.MaTK=ah.MaTK where tk.MaTK='$ma'";
		$qr=mysql_query($sql);
		return $qr;
		}
		
	}
	else{
		return false;
	}
}
function CapNhatAnhHS(){
	$p=new ketnoiadht($ketnoi);
	if($p->ketnoi($ketnoi)){
		if(isset($_GET['submit'])&&isset($_GET['Ma'])){
				$anh=$_GET['a'];
				$ten=$_GET['Ma'];
				$sql="update taikhoan set Anh='$anh' where MaTK='$ten'";
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
