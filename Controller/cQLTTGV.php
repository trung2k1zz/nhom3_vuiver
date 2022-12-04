<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include_once("Model/mQLTTGV.php");
class cQLadsystems{
	function HienGV(){
		$p=new mQLadsystems();
		$xuat=$p->XuatGiaoVien();
		return $xuat;
	}
	function TuDong(){
		$p=new mQLadsystems();
		$auto=$p->DienTuDong();
		return $auto;
	}
	function Mon(){
		$p=new mQLadsystems();
		$mon=$p->TenMon();
		return $mon;
		
	}
	function MaMon(){
		$p=new mQLadsystems();
		$mamon=$p->MaMon();
		return $mamon;
		
	}
	function ThemGV(){
		$p=new mQLadsystems();
		$add=$p->Add();
		return $add;
	}
	function DuLieuSan(){
		$p=new mQLadsystems();
		$dls=$p->LayDuLieuSan();
		return $dls;
	}
	function CapNhatGV(){
		$p=new mQLadsystems();
		$upgv=$p->SuaGV();
		return $upgv;
	}
	function XoaGV(){
		$p=new mQLadsystems();
		$xoa=$p->Xoa();
		return $xoa;
		
	}
	function sotrang(){
		$p=new mQLadsystems();
		$page=$p->sotrangcanthiet();
		return $page;
		
	}
}
?>

</body>
</html>