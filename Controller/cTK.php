<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include_once("Model/mTK.php");
class cad{
function Them(){
	$p=new ketnoiadht($ketnoi);
	if($p->ketnoi($ketnoi)){
		$p=new mad();
		$trave=$p->Add();
		return $trave;
	}
}
function Tke(){
	$p=new ketnoiadht($ketnoi);
	if($p->ketnoi($ketnoi)){
		$p=new mad();
		$trave=$p->HienDS();
		return $trave;
	}
}
function Tong(){
	$p=new ketnoiadht($ketnoi);
	if($p->ketnoi($ketnoi)){
		$p=new mad();
		$trave=$p->Tong();
		return $trave;
	}
}
function pageTke(){
	$p=new mad();
	$trang=$p->sotrangcanthiet();
	return $trang;
}
}
?>
</body>
</html>