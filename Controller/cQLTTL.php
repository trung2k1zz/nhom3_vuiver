<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include_once("Model/mQLTTL.php");
class cQLadht{
	function HienLop(){
		$p=new mQLadht();
		$xuat=$p->XuatLop();
		return $xuat;
	}
	function HienKhoi(){
		$p=new mQLadht();
		$xuat=$p->HienKhoi();
		return $xuat;
	}
	function XuatTruong(){
		$p=new mQLadht();
		$xuat=$p->HienTruong();
		return $xuat;
	}
	function AddLop(){
		$p=new mQLadht();
		$them=$p->ThemLop();
		return $them;
	}
	function Phantranglop(){
		$p=new mQLadht();
		$page=$p->sotrangcanthiet();
		return $page;
		
	}
	function LoadDuLieu(){
		$p=new mQLadht();
		$do=$p->LayDuLieu();
		return $do;
	}
	function SuaLop(){
		$p=new mQLadht();
		$sua=$p->UpLop();
		return $sua;
	}
	function XoaDi(){
		$p=new mQLadht();
		$xoa=$p->DelLop();
		return $xoa;
	}
}
?>
</body>
</html>