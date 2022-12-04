<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include_once("mConnect(AD).php");
class mTKad{
function kiemtrataikhoanAD(){
	$p=new ketnoiad($ketnoi);
	if($p->ketnoi($ketnoi)){
		if(isset($_POST['submit'])){
			$ten=$_REQUEST['a'];
			$mk=$_REQUEST['b'];
			$sql="select *from taikhoan where MaTK='$ten' && MatKhau='$mk' && ChucDanh='2'";
			$qr=mysql_query($sql);
			return $qr;
		}
		else{
			echo "<script>alert('Không có submit')</script>";
		}
	}
	else{
		return false;
	}
}
function XuatInfo(){
	$p=new ketnoiad($ketnoi);
	if($p->ketnoi($ketnoi)){
		if(isset($_GET['Ma'])){
		$ten=$_GET['Ma'];
		$sql="select * from admin_truong at join taikhoan t on at.MaAD=t.MaAD where t.MaTK='$ten'";
		$qr=mysql_query($sql);
		return $qr;
		}
		
	}
	else{
		return false;
	}
}
function XuatGV(){
	$p=new ketnoiad($ketnoi);
	if($p->ketnoi($ketnoi)){
			$matruong=$_GET['MaTruong'];
			$bangghimoitrang=!empty($_GET['per_page'])?$_GET['per_page']:5;
			$tranghientai=!empty($_GET['page'])?$_GET['page']:1;
			$start_from = ($tranghientai-1) * $bangghimoitrang;
			$sql="select *from giaovien where MaTruong='$matruong' limit 
			$start_from,$bangghimoitrang";
			$qr=mysql_query($sql);
			return $qr;
	}
}
function sotrangcanthiet(){
	$p=new ketnoiad($ketnoi);
	if($p->ketnoi($ketnoi)){
		$matruong=$_GET['MaTruong'];
		$bangghimoitrang=!empty($_GET['per_page'])?$_GET['per_page']:5;
		$tranghientai=!empty($_GET['page'])?$_GET['page']:1;
		$sql ="select count(MaGV) from giaovien where MaTruong='$matruong'";
			$qr=mysql_query($sql); 
    		$cot = mysql_fetch_row($qr);  
    		$tongbangghi = $cot[0];  
   		    $tongsotrang = ceil($tongbangghi / $bangghimoitrang); 
			include_once("Controller/cPhanTrangTKGV.php");
			return $tongsotrang;
	}
}
function XuatHS(){
	$p=new ketnoiad($ketnoi);
	if($p->ketnoi($ketnoi)){
			$matruong=$_GET['MaTruong'];
			$bangghimoitrang=!empty($_GET['per_page'])?$_GET['per_page']:5;
			$tranghientai=!empty($_GET['page'])?$_GET['page']:1;
			$start_from = ($tranghientai-1) * $bangghimoitrang;
			$sql="select *from hocsinh hs join lop l on hs.MaLop=l.MaLop
			join truong tr on tr.MaTruong=l.MaTruong where tr.MaTruong='$matruong' limit 
			$start_from,$bangghimoitrang";
			$qr=mysql_query($sql);
			return $qr;
	}
}
function sotrangcanthiet1(){
	$p=new ketnoiad($ketnoi);
	if($p->ketnoi($ketnoi)){
		$matruong=$_GET['MaTruong'];
		$bangghimoitrang=!empty($_GET['per_page'])?$_GET['per_page']:5;
		$tranghientai=!empty($_GET['page'])?$_GET['page']:1;
		$sql ="select count(hs.MaHS) from hocsinh hs join lop l on hs.MaLop=l.MaLop
			join truong tr on tr.MaTruong=l.MaTruong where tr.MaTruong='$matruong'";
			$qr=mysql_query($sql); 
    		$cot = mysql_fetch_row($qr);  
    		$tongbangghi = $cot[0];  
   		    $tongsotrang = ceil($tongbangghi / $bangghimoitrang); 
			include_once("Controller/cPhanTrangTKHS.php");
			return $tongsotrang;
	}
}
function ThemTK(){
	$p=new ketnoiad($ketnoi);
	if($p->ketnoi($ketnoi)){
		if(isset($_POST['tao'])){
			$a=$_POST['a'];
			$b=$_POST['b'];
			$c=$_POST['c'];
			$d=$_POST['d'];
			$f=$_FILES['f']['name'];
			$rp=$_POST['rp'];
			$sql="insert into taikhoan(MaTK,MatKhau,Anh,ChucDanh,MaAD)
			values('$a','$b','$f','$c','$d')";
			$qr=mysql_query($sql);
			return $qr;
		}
	}
}
function NameGV(){
	$p=new ketnoiad($ketnoi);
	if($p->ketnoi($ketnoi)){
		$mgv=$_GET['upTKGV'];
		$sql="select *from giaovien where MaGV='$mgv'";
		$qr=mysql_query($sql);
		return $qr;
	}
	
}
function NameHS(){
	$p=new ketnoiad($ketnoi);
	if($p->ketnoi($ketnoi)){
		$mhs=$_GET['upTKHS'];
		$sql="select *from hocsinh where MaHS='$mhs'";
		$qr=mysql_query($sql);
		return $qr;
	}
	
}
function CNTK(){
	$p=new ketnoiad($ketnoi);
	if($p->ketnoi($ketnoi)){
		if(isset($_GET['up'])){
			$magv=$_GET['magv'];
			$matk=$_GET['matk'];
			$sql="update giaovien set MaTK='$matk' where MaGV='$magv'";
			$qr=mysql_query($sql);
			return $qr;
		}
	}
	
}
function CNTKHS(){
	$p=new ketnoiad($ketnoi);
	if($p->ketnoi($ketnoi)){
		if(isset($_GET['cn'])){
			$mahs=$_GET['mahs'];
			$matk=$_GET['matk'];
			$sql="update hocsinh set MaTK='$matk' where MaHS='$mahs'";
			$qr=mysql_query($sql);
			return $qr;
		}
	}
	
}
//Bầu Tổ Trưởng Chuyên Môn
function bauttcm(){
	$p=new ketnoiad($ketnoi);
	if($p->ketnoi($ketnoi)){
		$mh=$_GET['mh'];
		$matruong=$_GET['MaTruong'];
		$sql="select *  from giaovien gv join truong tr on tr.MaTruong=gv.MaTruong
		join monhoc mh on mh.MaMonHoc=gv.MaMonHoc where gv.MaTruong='$matruong' and mh.TenMonHoc='$mh'";
		$qr=mysql_query($sql);
		return $qr;
	}
}
function DSTienCu(){
	$p=new ketnoiad($ketnoi);
	if($p->ketnoi($ketnoi)){
		$mh=$_GET['mh'];
		$matruong=$_GET['MaTruong'];
		$sql="select *  from giaovien gv join totruongchuyenmon tt
		on tt.MaGV=gv.MaGV join monhoc mh on mh.MaMonHoc=gv.MaMonHoc
		join truong tr on tr.MaTruong=gv.MaTruong where tr.MaTruong='$matruong' && mh.TenMonHoc='$mh'";
		$qr=mysql_query($sql);
		return $qr;
	}
	
}
function TienCap(){
	$p=new ketnoiad($ketnoi);
	if($p->ketnoi($ketnoi)){
	if(isset($_GET['tiencu'])){
		$magv=$_GET['magv'];
		$sql="insert into totruongchuyenmon(MaGV) values('$magv')";
		$qr=mysql_query($sql);
		return $qr;
	}
	}
}
function XuatTTCM(){
	$p=new ketnoiad($ketnoi);
	if($p->ketnoi($ketnoi)){
		$matruong=$_GET['MaTruong'];
		$sql="select tt.MaTK as MaTK,gv.TenGV as TenGV,tt.MaTTCM as MaTTCM from totruongchuyenmon tt join giaovien gv
		on tt.MaGV=gv.MaGV join truong tr on tr.MaTruong=gv.MaTruong
		where tr.MaTruong='$matruong'";
		$qr=mysql_query($sql);
		return $qr;
	}
}
function TenTTCM(){
	$p=new ketnoiad($ketnoi);
	if($p->ketnoi($ketnoi)){
		$upTKTTCM=$_GET['upTKTTCM'];
		$matruong=$_GET['MaTruong'];
		$sql="select tt.MaTK as MaTK,gv.TenGV as TenGV,tt.MaTTCM as MaTTCM from totruongchuyenmon tt join giaovien gv
		on tt.MaGV=gv.MaGV join truong tr on tr.MaTruong=gv.MaTruong
		where tr.MaTruong='$matruong' and tt.MaTTCM='$upTKTTCM'";
		$qr=mysql_query($sql);
		return $qr;
	}
}
function UpTKTTCM(){
	$p=new ketnoiad($ketnoi);
	if($p->ketnoi($ketnoi)){
		if(isset($_GET['cnu'])){
			$upTKTTCM=$_GET['mattcm'];
			$matk=$_GET['matk'];
			$sql="update totruongchuyenmon set MaTK='$matk' where MaTTCM='$upTKTTCM'";
			$qr=mysql_query($sql);
			return $qr;
		}
	}
}
}
?>
</body>
</html>
