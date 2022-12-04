<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
ob_start();
$a="Dia%20Ly";
include_once("Controller/cDuyetCH.php");
$p=new cDuyet();
				 	if(isset($_GET['duetID'])){
						$kq=$p->Them();
						if($kq==1){
							echo "<script>alert('Đã Duyệt')</script>";
							echo header("refresh:0,url='home(TTCM).php?Ma=".$_GET['Ma']."&&TenMon=".$a."&&TenKhoi=".$_GET['TenKhoi']."'");
						}
					}
					else{
						if(isset($_GET['duyetID'])){
						$kq=$p->ThemCK();
						if($kq==1){
							echo "<script>alert('Đã Duyệt')</script>";
							echo header("refresh:0,url='home(TTCM).php?Ma=".$_GET['Ma']."&&TenMon=".$a."&&TenKhoi=".$_GET['TenKhoi']."'");
						}
						}
					}
				 ob_end_flush();
?>
</body>
</html>