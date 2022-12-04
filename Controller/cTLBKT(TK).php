<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include_once("Model/mTLBKT(TK).php");
class cTLBKT{
function MaGV(){
	$p=new ketnoiadht($ketnoi);
	if($p->ketnoi($ketnoi)){
		$p=new mTLBKT();
		$trave=$p->XuatMaGV();
		return $trave;
	}
}
function GetHT(){
	$p=new ketnoiadht($ketnoi);
	if($p->ketnoi($ketnoi)){
		$p=new mTLBKT();
		$trave=$p->HT();
		return $trave;
	}
}
function GetHTMM(){
	$p=new ketnoiadht($ketnoi);
	if($p->ketnoi($ketnoi)){
		$p=new mTLBKT();
		$trave=$p->HTMaMon();
		return $trave;
	}
}
function TaiDe(){
	$p=new ketnoiadht($ketnoi);
	if($p->ketnoi($ketnoi)){
		$p=new mTLBKT();
		$tai=$p->TaoDeKTTK();
		return $tai;
	}
}
function Up(){
	$p=new ketnoiadht($ketnoi);
	if($p->ketnoi($ketnoi)){
		$p=new mTLBKT();
		$tai=$p->CapNhat();
		return $tai;
	}
}
function XuatRa(){
	$p=new ketnoiadht($ketnoi);
	if($p->ketnoi($ketnoi)){
		$p=new mTLBKT();
		$xuat=$p->Xuat();
		return $xuat;
	}
	
}
function sotrang(){
	$p=new ketnoiadht($ketnoi);
	if($p->ketnoi($ketnoi)){
		$p=new mTLBKT();
		$xuat=$p->sotrangcanthiet();
		return $xuat;
	}
}
function upTime(){
	$p=new ketnoiadht($ketnoi);
	if($p->ketnoi($ketnoi)){
		$p=new mTLBKT();
		$upt=$p->CapNhatTime();
		return $upt;
	}
}
function upBaiTL(){
	$p=new ketnoiadht($ketnoi);
	if($p->ketnoi($ketnoi)){
		$p=new mTLBKT();
		$tbtl=$p->TaiBaiTL();
		return $tbtl;
	}
}
function XuatBaiTL(){
	$p=new ketnoiadht($ketnoi);
	if($p->ketnoi($ketnoi)){
		$p=new mTLBKT();
		$tbtl=$p->XuatBaiTL();
		return $tbtl;
	}
}
function NopBai(){
	$p=new ketnoiadht($ketnoi);
	if($p->ketnoi($ketnoi)){
		$p=new mTLBKT();
		$nb=$p->NopBaiTL();
		return $nb;
	}
}
function XuatFile(){
	$p=new ketnoiadht($ketnoi);
	if($p->ketnoi($ketnoi)){
		$p=new mTLBKT();
		$nb=$p->XuatFileDaNop();
		return $nb;
	}
}
function CN(){
	$p=new ketnoiadht($ketnoi);
	if($p->ketnoi($ketnoi)){
		$p=new mTLBKT();
		$up=$p->SuaFile();
		return $up;
	}
}
//
function NopBai2(){
	$p=new ketnoiadht($ketnoi);
	if($p->ketnoi($ketnoi)){
		$p=new mTLBKT();
		$nb2=$p->NopBaiTL2();
		return $nb2;
	}
}
function XuatFile2(){
	$p=new ketnoiadht($ketnoi);
	if($p->ketnoi($ketnoi)){
		$p=new mTLBKT();
		$nb2=$p->XuatFileDaNop2();
		return $nb2;
	}
}
function CN2(){
	$p=new ketnoiadht($ketnoi);
	if($p->ketnoi($ketnoi)){
		$p=new mTLBKT();
		$up2=$p->SuaFile2();
		return $up2;
	}
}
//
function NopBai3(){
	$p=new ketnoiadht($ketnoi);
	if($p->ketnoi($ketnoi)){
		$p=new mTLBKT();
		$nb3=$p->NopBaiTL3();
		return $nb3;
	}
}
function XuatFile3(){
	$p=new ketnoiadht($ketnoi);
	if($p->ketnoi($ketnoi)){
		$p=new mTLBKT();
		$nb3=$p->XuatFileDaNop3();
		return $nb3;
	}
}
function CN3(){
	$p=new ketnoiadht($ketnoi);
	if($p->ketnoi($ketnoi)){
		$p=new mTLBKT();
		$up3=$p->SuaFile3();
		return $up3;
	}
}
function HTFileHS(){
	$p=new ketnoiadht($ketnoi);
	if($p->ketnoi($ketnoi)){
		$p=new mTLBKT();
		$file=$p->XuatFileNopHS();
		return $file;
	}
}
function luudiem(){
	$p=new ketnoiadht($ketnoi);
	if($p->ketnoi($ketnoi)){
		$p=new mTLBKT();
		$di=$p->luudiem();
		return $di;
	}
}
function laydiem(){
	$p=new ketnoiadht($ketnoi);
	if($p->ketnoi($ketnoi)){
		$p=new mTLBKT();
		$xd=$p->xuatdiem();
		return $xd;
	}
	
}
}
?>
</body>
</html>