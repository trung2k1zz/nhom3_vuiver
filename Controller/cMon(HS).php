<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include_once("Model/mMon(HS).php");
class cMon{
	function XemMon(){
		$p=new mMon();
		$tin=$p->HienMon();
		return $tin;
	}
	function ChiTietMon(){
		$p=new mMon();
		$tin=$p->CTMon();
		return $tin;
	}
	function MaMon(){
		$p=new mMon();
		$tin=$p->MaMon();
		return $tin;
	}
	function tg(){
		$p=new mMon();
		$tg=$p->ThoiGianLamBai();
		return $tg;
		
	}
	function Mark(){
		$p=new mMon();
		$diem=$p->XemDiem();
		return $diem;
		
	}
	function tg2(){
		$p=new mMon();
		$tg=$p->ThoiGianLamBai2();
		return $tg;
		
	}
	function Mark2(){
		$p=new mMon();
		$diem=$p->XemDiem2();
		return $diem;
		
	}
	function tg3(){
		$p=new mMon();
		$tg=$p->ThoiGianLamBai3();
		return $tg;
		
	}
	function Mark3(){
		$p=new mMon();
		$diem=$p->XemDiem3();
		return $diem;
		
	}
	function tg4(){
		$p=new mMon();
		$tg=$p->ThoiGianLamBai4();
		return $tg;
		
	}
	function Mark4(){
		$p=new mMon();
		$diem=$p->XemDiem4();
		return $diem;
		
	}
	function tg5(){
		$p=new mMon();
		$tg=$p->ThoiGianLamBai5();
		return $tg;
		
	}
	function Mark5(){
		$p=new mMon();
		$diem=$p->XemDiem5();
		return $diem;
		
	}
	function tgGK(){
		$p=new mMon();
		$tg=$p->ThoiGianLamBaiGK();
		return $tg;
		
	}
	function MarkGK(){
		$p=new mMon();
		$diem=$p->XemDiemGK();
		return $diem;
		
	}
	function tgCK(){
		$p=new mMon();
		$tg=$p->ThoiGianLamBaiCK();
		return $tg;
		
	}
	function MarkCK(){
		$p=new mMon();
		$diem=$p->XemDiemCK();
		return $diem;
		
	}
	function TaiLieuThamKhao(){
		$p=new mMon();
		$tl=$p->tailieuthamkhao();
		return $tl;
	}
	function HienDeTuLuan(){
		$p=new mMon();
		$dtl=$p-> XuatDeTuLuan();
		return $dtl;
	}
	function HienDeTuLuan2(){
		$p=new mMon();
		$dtl=$p-> XuatDeTuLuan2();
		return $dtl;
	}
	function HienDeTuLuan3(){
		$p=new mMon();
		$dtl=$p-> XuatDeTuLuan3();
		return $dtl;
	}
	function TL1(){
		$p=new mMon();
		$tl1=$p->DiemTL1();
		return $tl1;
	}
	function TL2(){
		$p=new mMon();
		$tl2=$p->DiemTL2();
		return $tl2;
	}
	function TL3(){
		$p=new mMon();
		$tl3=$p->DiemTL3();
		return $tl3;
	}
	function nuttk1(){
		$p=new mMon();
		$nut1=$p->KTNUTTK1();
		return $nut1;
	}
	function nuttk2(){
		$p=new mMon();
		$nut2=$p->KTNUTTK2();
		return $nut2;
	}
	function nuttk3(){
		$p=new mMon();
		$nut3=$p->KTNUTTK3();
		return $nut3;
	}
	function nuttk4(){
		$p=new mMon();
		$nut4=$p->KTNUTTK4();
		return $nut4;
	}
	function nuttk5(){
		$p=new mMon();
		$nut5=$p->KTNUTTK5();
		return $nut5;
	}
	function nuttk6(){
		$p=new mMon();
		$nut6=$p->KTNUTTK6();
		return $nut6;
	}
	function nuttk7(){
		$p=new mMon();
		$nut7=$p->KTNUTTK7();
		return $nut7;
	}
	function nuttk8(){
		$p=new mMon();
		$nut8=$p->KTNUTTK8();
		return $nut8;
	}
	function nutGK(){
		$p=new mMon();
		$nutgk=$p->KTNUTGK();
		return $nutgk;
	}
	function nutCK(){
		$p=new mMon();
		$nutck=$p->KTNUTCK();
		return $nutck;
	}
	
}

?>
</body>
</html>