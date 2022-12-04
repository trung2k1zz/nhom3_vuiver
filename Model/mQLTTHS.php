<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include_once("Model/mConnect(ADHT).php");
class mQLadsys{
	function XuatHocSinh(){
		$p=new ketnoiadht($ketnoi);
			if($p->ketnoi($ketnoi)){
			if(isset($_GET['Ma'])&&isset($_GET['TenTruong'])&&isset($_GET['Lop'])){
				$bangghimoitrang=!empty($_GET['per_page'])?$_GET['per_page']:5;
				$tranghientai=!empty($_GET['page'])?$_GET['page']:1;
				$start_from = ($tranghientai-1) * $bangghimoitrang;
				$ttruong=$_GET['TenTruong'];
				$lop=$_GET['Lop'];
				$sql="select q.TenQuan as TenQuan,l.MaLop as MaLop,l.TenLop as TenLop,hs.MaHS as MaHS,
				hs.TenHS as TenHS,hs.GioiTinh as 
				GioiTinh,hs.NgaySinh as NgaySinh,hs.DiaChi as DiaChi,hs.Email as Email
				from hocsinh as hs join lop as l on hs.MaLop=l.MaLop
				join khoi as k on k.MaKhoi=l.MaKhoi join truong as tr on
				tr.MaTruong=l.MaTruong join quanhuyen as q
				on tr.MaQuan=q.MaQuan where tr.TenTruong='$ttruong' and l.TenLop='$lop'  limit $start_from,$bangghimoitrang";
				$qr=mysql_query($sql);
				return $qr;
				
			}
			else{
				return false;
			}
		}
		else{
			echo "Kết nối thất bại";
		}
		
		
		
	}
	function sotrangcanthiet(){
		if(isset($_GET['Ma'])&&isset($_GET['TenTruong'])&&isset($_GET['Lop'])){
			$bangghimoitrang=!empty($_GET['per_page'])?$_GET['per_page']:5;
			$tranghientai=!empty($_GET['page'])?$_GET['page']:1;
			$ttruong=$_GET['TenTruong'];
			$lop=$_GET['Lop'];
			$sql ="select count(MaHS) from hocsinh as hs join lop as l on hs.MaLop=l.MaLop
				join khoi as k on k.MaKhoi=l.MaKhoi join truong as tr on
				tr.MaTruong=l.MaTruong join quanhuyen as q
				on tr.MaQuan=q.MaQuan where tr.TenTruong='$ttruong' and l.TenLop='$lop'";
			$qr=mysql_query($sql); 
    		$cot = mysql_fetch_row($qr);  
    		$tongbangghi = $cot[0];  
   		    $tongsotrang = ceil($tongbangghi / $bangghimoitrang); 
			include_once("Controller/cPhanTrangHS.php");
			return $tongsotrang;
		}
	}
	function DienTuDong(){
		$p=new ketnoiadht($ketnoi);
			if($p->ketnoi($ketnoi)){
			if(isset($_GET['Ma'])&&isset($_GET['TenTruong'])&&isset($_GET['Lop'])){
				$ttruong=$_GET['TenTruong'];
				$lop=$_GET['Lop'];
				$sql="select *from lop as l join khoi as k on k.MaKhoi=l.MaKhoi 
				join truong as tr on tr.MaTruong=l.MaTruong join quanhuyen as q
				on tr.MaQuan=q.MaQuan where tr.TenTruong='$ttruong' and l.TenLop='$lop'";
				$qr=mysql_query($sql);
				return $qr;
				
			}
			else{
				return false;
			}
		}
		else{
			echo "Kết nối thất bại";
		}
		
		
		
	}
	function ThemHS(){
		$p=new ketnoiadht($ketnoi);
			if($p->ketnoi($ketnoi)){
				if(isset($_POST['submit'])){
					$a=$_POST['a'];
					$b=$_POST['b'];
					$c=$_POST['c'];
					$d=$_POST['d'];
					$e=$_POST['e'];
					$f=$_POST['f'];
					$sql="insert into hocsinh(TenHS,NgaySinh,GioiTinh,DiaChi,Email,MaLop)
					values('$a','$b','$c','$d','$e','$f')";
					$qr=mysql_query($sql);
					return $qr;
					
					
				}
				else{
					return false;
				}
			}
		
	}
	function LayDuLieuCoSan(){
		$p=new ketnoiadht($ketnoi);
			if($p->ketnoi($ketnoi)){
				if(isset($_GET['Ma'])&&isset($_GET['TenTruong'])&&isset($_GET['Lop'])&&isset($_GET['UpHS'])){
					$tentruong=$_GET['TenTruong'];
					$tenlop=$_GET['Lop'];
					$mahs=$_GET['UpHS'];
					$sql="select hs.TenHS as TenHS,hs.NgaySinh as NgaySinh,hs.GioiTinh as GioiTinh
					,hs.DiaChi as DiaChi,hs.Email as Email,hs.MaLop as MaLop,l.TenLop as TenLop from hocsinh as hs join lop as                    l on hs.MaLop=l.MaLop join khoi as k on k.MaKhoi=l.MaKhoi join truong
					as tr on tr.MaTruong=l.MaTruong where tr.TenTruong='$tentruong' and
					l.TenLop='$tenlop' and hs.MaHS='$mahs'";
					$qr=mysql_query($sql);
					return $qr;
			
			
					}
		else{
			return false;
		}
		
	}
	else{
		return false;
	}
	}
	function SuaHS(){
	$p=new ketnoiadht($ketnoi);
	if($p->ketnoi($ketnoi)){
		if(isset($_POST['submit'])){
			$a=$_POST['a'];
			$b=$_POST['b'];
			$m=$_POST['m'];
			if($b==Null){
				$b=$m;
			}
			$c=$_POST['c'];
			$d=$_POST['d'];
			$e=$_POST['e'];
			$f=$_POST['f'];
		if(isset($_GET['UpHS'])){
			$mahs=$_GET['UpHS'];
			$sql="update hocsinh set TenHS='$a',NgaySinh='$b',GioiTinh='$c',
			DiaChi='$d',Email='$e',MaLop='$f'
			where MaHS='$mahs'";
			$qr=mysql_query($sql);
			return $qr;
			$p->dongketnoi(($ketnoi));
			}
		else{
			return false;
		}
			
		}
		
	}
}
function XoaHS(){
	$p=new ketnoiadht($ketnoi);
	if($p->ketnoi($ketnoi)){
		if(isset($_GET['Ma'])&&isset($_GET['TenTruong'])&&isset($_GET['Lop'])&&isset($_GET['DelHS'])){
			$mahs=$_GET['DelHS'];
			$sql="delete from hocsinh where MaHS='$mahs'";
			$qr=mysql_query($sql);
			return $qr;
			
		}
	}
	else{
		return false;
	}
	
	}
	
}
?>
</body>
</html>