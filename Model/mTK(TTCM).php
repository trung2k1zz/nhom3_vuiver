<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include_once("mConnect(TTCM).php");
class mTKttcm{
function kiemtrataikhoanTTCM(){
	$p=new ketnoittcm($ketnoi);
	if($p->ketnoi($ketnoi)){
		if(isset($_POST['submit'])){
			$ten=$_REQUEST['a'];
			$mk=$_REQUEST['b'];
			$sql="select *from taikhoan where MaTK='$ten' && MatKhau='$mk' && ChucDanh='4'";
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
	$p=new ketnoittcm($ketnoi);
	if($p->ketnoi($ketnoi)){
		if(isset($_GET['Ma'])){
		$ten=$_GET['Ma'];
		$sql="select * from taikhoan as tk join totruongchuyenmon as tt on tk.MaTK=tt.MaTK
		join giaovien as gv on tt.MaGV=gv.MaGV where tk.MaTK='$ten'";
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
