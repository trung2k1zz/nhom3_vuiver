<?php
ob_start();
include_once("Controller/cTK(HS).php");
$p=new cTK();
$qr=$p->KTTKHS();
$cot=mysql_fetch_assoc($qr);
$ma=$cot['MaTK'];
include_once("Controller/cTK(GV).php");
$p=new cTKgv();
$tv=$p->KTTKGV();
$col=mysql_fetch_assoc($tv);
$ma1=$col['MaTK'];
include_once("Controller/cTK(AD).php");
$p=new cTKad();
$xx=$p->KTTKAD();
$colm=mysql_fetch_assoc($xx);
$ma2=$colm['MaTK'];
include_once("Controller/cTK(ADHT).php");
$p=new cTKadht();
$yy=$p->KTTKADHT();
$colm=mysql_fetch_assoc($yy);
$ma3=$colm['MaTK'];
include_once("Controller/cTK(TTCM).php");
$p=new cTKttcm();
$kk=$p->KTTKTTCM();
$colm=mysql_fetch_assoc($kk);
$ma4=$colm['MaTK'];
if(mysql_num_rows($qr)==1){
	echo "<script>alert('Đăng nhập thành công')</script>";
	echo header("refresh:0,url='home(HS).php?Ma=$ma");
	include_once("Controller/cTK.php");
	$p=new cad();
	$p->Them();
}
elseif(mysql_num_rows($tv)==1){
	echo "<script>alert('Đăng nhập thành công')</script>";
	echo header("refresh:0,url='home(GV).php?Ma=$ma1");
	include_once("Controller/cTK.php");
	$p=new cad();
	$p->Them();
}
elseif(mysql_num_rows($xx)==1){
	echo "<script>alert('Đăng nhập thành công')</script>";
	echo header("refresh:0,url='home(AD).php?Ma=$ma2");
	include_once("Controller/cTK.php");
	$p=new cad();
	$p->Them();
	
}
elseif(mysql_num_rows($yy)==1){
	echo "<script>alert('Đăng nhập thành công')</script>";
	echo header("refresh:0,url='home(ADHT).php?Ma=$ma3");
	include_once("Controller/cTK.php");
	$p=new cad();
	$p->Them();
}
elseif(mysql_num_rows($kk)==1){
	echo "<script>alert('Đăng nhập thành công')</script>";
	echo header("refresh:0,url='home(TTCM).php?Ma=$ma4");
	include_once("Controller/cTK.php");
	$p=new cad();
	$p->Them();
}
else{
	echo "<script>alert('Đăng nhập thất bại!!!')</script>";
	echo header("refresh:0,url='dnhap.php'");
}
ob_end_flush();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>