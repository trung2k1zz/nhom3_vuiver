<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include_once("mConnect(HS).php");
class mTK{
function kiemtrataikhoanHS(){
	$p=new ketnoi($ketnoi);
	if($p->ketnoi($ketnoi)){
		if(isset($_POST['submit'])){
			$ten=$_REQUEST['a'];
			$mk=$_REQUEST['b'];
			$sql="select *from taikhoan where MaTK='$ten' && MatKhau='$mk' && ChucDanh='0'";
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
	$p=new ketnoi($ketnoi);
	if($p->ketnoi($ketnoi)){
		if(isset($_GET['Ma'])){
		$tv=$_GET['Ma'];
		$sql="select * from taikhoan t join hocsinh h on t.MaTK=h.MaTK where t.MaTK='$tv'";
		$qr=mysql_query($sql);
		return $qr;
		}
		
	}
	else{
		return false;
	}
}
function TenTK(){
	$p=new ketnoi($ketnoi);
	if($p->ketnoi($ketnoi)){
		if(isset($_GET['Ma'])){
		$tv=$_GET['Ma'];
		$sql="select * from taikhoan t join hocsinh h on t.MaTK=h.MaTK where t.MaTK='$tv'";
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