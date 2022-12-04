<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include_once("Model/mDuyetCH.php");
class cDuyet{
	function HienMonHoc(){
		$p=new mDuyet();
		$m=$p->XuatMon();
		return $m;
	}
	function HienMaMon(){
		$p=new mDuyet();
		$mm=$p->MaMH();
		return $mm;
	}
	function NHCHGK(){
		$p=new mDuyet();
		$nh=$p->HienNHCHGK();
		return $nh;
	}
	function Them(){
		$p=new mDuyet();
		$add=$p->ThemGK();
		return $add;
	}
	function SLDuyetGK(){
		$p=new mDuyet();
		$du=$p->SoCauDuyet();
		return $du;
	}
	function SoTrang(){
		$p=new mDuyet();
		$page=$p->sotrangcanthiet();
		return $page;
	}
	function TimeGK(){
		$p=new mDuyet();
		$time=$p->TGGK();
		return $time;
	}
	function Time(){
		$p=new mDuyet();
		$t=$p->tgdk();
		return $t;
		
	}
	//
	//
	function NHCHCK(){
		$p=new mDuyet();
		$nh=$p->HienNHCHCK();
		return $nh;
	}
	function ThemCK(){
		$p=new mDuyet();
		$add=$p->ThemCK();
		return $add;
	}
	function SLDuyetCK(){
		$p=new mDuyet();
		$du=$p->SoCauDuyetCK();
		return $du;
	}
	function SoTrangCK(){
		$p=new mDuyet();
		$page=$p->sotrangcanthietCK();
		return $page;
	}
	function TimeCK(){
		$p=new mDuyet();
		$time=$p->TGCK();
		return $time;
	}
	function Timei(){
		$p=new mDuyet();
		$t=$p->tgik();
		return $t;
		
	}
}
?>
</body>
</html>