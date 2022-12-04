<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include_once("Model/mDiem.php");
class cDiem{
	function Diem(){
		$p=new mDiem();
		$diem=$p->Diem();
		return $diem;
	}
	function buttKT(){
		$p=new mDiem();
		$nut=$p->KTNutKT();
		return $nut;
	}
	function buttKT2(){
		$p=new mDiem();
		$nut=$p->KTNutKT2();
		return $nut;
	}
	function buttKT3(){
		$p=new mDiem();
		$nut=$p->KTNutKT3();
		return $nut;
	}
	function buttKT4(){
		$p=new mDiem();
		$nut=$p->KTNutKT4();
		return $nut;
	}
	function buttKT5(){
		$p=new mDiem();
		$nut=$p->KTNutKT5();
		return $nut;
	}
	function buttGK(){
		$p=new mDiem();
		$nut=$p->KTNutGK();
		return $nut;
	}
	function buttCK(){
		$p=new mDiem();
		$nut=$p->KTNutCK();
		return $nut;
	}
	function MaGV(){
		$p=new mDiem();
		$gv=$p->MaGV();
		return $gv;
	}
	function XuatHS(){
		$p=new mDiem();
		$hs=$p->HS();
		return $hs;
	}
	function XuatDiem1(){
		$p=new mDiem();
		$di=$p->XuatDiem1();
		return $di;
	}
	function XuatDiem2(){
		$p=new mDiem();
		$di1=$p->XuatDiem2();
		return $di1;
	}
	function XuatDiem3(){
		$p=new mDiem();
		$di2=$p->XuatDiem3();
		return $di2;
	}
	function XuatDiem4(){
		$p=new mDiem();
		$di3=$p->XuatDiem4();
		return $di3;
	}
	function XuatDiem5(){
		$p=new mDiem();
		$di4=$p->XuatDiem5();
		return $di4;
	}
	function TL1(){
		$p=new mDiem();
		$tl1=$p->TL1();
		return $tl1;
	}
	function TL2(){
		$p=new mDiem();
		$tl2=$p->TL2();
		return $tl2;
	}
	function TL3(){
		$p=new mDiem();
		$tl3=$p->TL3();
		return $tl3;
	}
	function GK(){
		$p=new mDiem();
		$gk=$p->GK();
		return $gk;
	}
	function CK(){
		$p=new mDiem();
		$ck=$p->CK();
		return $ck;
	}
	
}
?>
</body>
</html>