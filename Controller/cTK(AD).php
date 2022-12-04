<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include_once("Model/mTK(AD).php");
class cTKad{
	function KTTKAD(){
		$p=new mTKad();
		$ktra=$p->kiemtrataikhoanAD();
		return $ktra;
	}
	function info(){
		$p=new mTKad();
		$ktra=$p->XuatInfo();
		return $ktra;
	}
	function XuatGV(){
		$p=new mTKad();
		$gv=$p->XuatGV();
		return $gv;
		
	}
	function NameGV(){
		$p=new mTKad();
		$gv=$p->NameGV();
		return $gv;
		
	}
	function NameHS(){
		$p=new mTKad();
		$hs=$p->NameHS();
		return $hs;
		
	}
	
	function AddTK(){
		$p=new mTKad();
		$add=$p->ThemTK();
		return $add;

	}
	function upTK(){
		$p=new mTKad();
		$up=$p->CNTK();
		return $up;

	}
	function XuatPhanTrang(){
		$p=new mTKad();
		$pa=$p->sotrangcanthiet();
		return $pa;

	}
	function XuatHS(){
		$p=new mTKad();
		$hs=$p->XuatHS();
		return $hs;
		
	}
	function upTKHS(){
		$p=new mTKad();
		$up=$p->CNTKHS();
		return $up;

	}
	function XuatPhanTrang1(){
		$p=new mTKad();
		$pa1=$p->sotrangcanthiet1();
		return $pa1;

	}
	
	//Bầu TTCM
	function GV(){
		$p=new mTKad();
		$gv=$p->bauttcm();
		return $gv;

	}
	function TienCu(){
		$p=new mTKad();
		$dh=$p->DSTienCu();
		return $dh;
	}
	function TienCap(){
		$p=new mTKad();
		$tc=$p->TienCap();
		return $tc;
	}
	function ttcm(){
		$p=new mTKad();
		$ttcm=$p->XuatTTCM();
		return $ttcm;
	}
	function namettcm(){
		$p=new mTKad();
		$ttcm=$p->TenTTCM();
		return $ttcm;
	}
	function cntkttcm(){
		$p=new mTKad();
		$upttcm=$p->UpTKTTCM();
		return $upttcm;
	}
	
	
}

?>
</body>
</html>