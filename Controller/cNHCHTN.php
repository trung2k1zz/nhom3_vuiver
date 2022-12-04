<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include_once("Model/mNHCHTN.php");
class cCHgv{
function HienMonGVDay(){
	$p=new mCHgv();
	$mon=$p->HienMonGVDay();
	return $mon;
	
}
function LayMa(){
	$p=new mCHgv();
	$ma=$p->LayMa();
	return $ma;
}
function TaoCH(){
	$p=new mCHgv();
	$ma=$p->ChenCH();
	return $ma;
}
function XemXet(){
	$p=new mCHgv();
	$xx=$p->XemXet();
	return $xx;
}
function XuatDSCHTN(){
	$p=new mCHgv();
	$x=$p->XuatNHCHtheoGV();
	return $x;
}
function PhanTrangCH(){
	$p=new mCHgv();
	$pt=$p->sotrangcanthiet();
	return $pt;
}
function dodulieu(){
	$p=new mCHgv();
	$ddl=$p->laydulieu();
	return $ddl;
}
function suaCH(){
	$p=new mCHgv();
	$sua=$p->suaCH();
	return $sua;
}
function xoaCH(){
	$p=new mCHgv();
	$xoa=$p->xoa();
	return $xoa;
}
}
?>
</body>
</html>