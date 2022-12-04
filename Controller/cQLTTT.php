<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include_once("Model/mQLTTT.php");
class cQLadht{
	function Xuat(){
		$p=new mQLadht();
		$xuat=$p->XuatTPADHT();
		return $xuat;
	}
	function XuatQuan(){
		$p=new mQLadht();
		$xuat=$p->XuatQuanHuyen();
		return $xuat;
	}
	function XuatTruong(){
		$p=new mQLadht();
		$xuat=$p->XuatTruong();
		return $xuat;
	}
	function Detail(){
		$p=new mQLadht();
		$xuat=$p->XemChiTiet();
		return $xuat;
	}
	function sl(){
		$p=new mQLadht();
		$xuat=$p->SL();
		return $xuat;
	}
	function sll(){
		$p=new mQLadht();
		$xuat=$p->SLL();
		return $xuat;
	}
	function slhs(){
		$p=new mQLadht();
		$xuat=$p->SLHS();
		return $xuat;
	}
	function ThemTruong(){
		$p=new mQLadht();
		$kieu=$_FILES['e']['type'];
		$kt=$_FILES['e']['size'];
			if($kieu=='image/jpg'||$kieu=='image/png'||$kieu=='image/jpeg'){
				if($kt<=2*1024*1024){
					if($anh==$ten){
						move_uploaded_file($anh,'img/'.$ten);
						$anh='img/';
						$chen=$p->ThemTruong();
						if($chen){
							
							return 1;
							
						}
						else{
							return 0;
						}
						
						}
					else{
						return -1;
					}
					}
				else{
					return -2;
				}
			}
			else{
				return -3;
			}
			
	}
	function delTruong(){
		$p=new mQLadht();
		$del=$p->XoaTruong();
		return $del;
	}
	//Lấy dữ liệu có sẵn đổ vào form khi cập nhật
	function laydulieucosan(){
		$p=new mQLadht();
		$hien=$p->DoDuLieuCapNhat();
		return $hien;
	}
	function UpDateTruong(){
		$p=new mQLadht();
		$truong=$p->UpDateTruong();
		return $truong;

	}
}
?>
</body>
</html>