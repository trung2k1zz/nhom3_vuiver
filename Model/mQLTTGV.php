<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include_once("Model/mConnect(ADHT).php");
class mQLadsystems{
	function XuatGiaoVien(){
		$p=new ketnoiadht($ketnoi);
			if($p->ketnoi($ketnoi)){
			if(isset($_GET['Ma'])&&isset($_GET['TenTruong'])){
				$bangghimoitrang=!empty($_GET['per_page'])?$_GET['per_page']:5;
				$tranghientai=!empty($_GET['page'])?$_GET['page']:1;
				$start_from = ($tranghientai-1) * $bangghimoitrang;
				$tetruong=$_GET['TenTruong'];
				$lop=$_GET['Lop'];
				$sql="select gv.MaGV as MaGV,gv.TenGV as TenGV,gv.GioiTinh as GioiTinh,
				gv.SDT as SDT,gv.DiaChi as DiaChi,gv.Email as Email
				from giaovien as gv join truong as tr
				on gv.MaTruong=tr.MaTruong 
				where tr.TenTruong='$tetruong'  limit $start_from,$bangghimoitrang";
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
	function sotrangcanthiet(){
		if(isset($_GET['Ma'])&&isset($_GET['TenTruong'])){
			$tetruong=$_GET['TenTruong'];
			$bangghimoitrang=!empty($_GET['per_page'])?$_GET['per_page']:5;
			$tranghientai=!empty($_GET['page'])?$_GET['page']:1;
			$sql ="select count(MaGV) from giaovien as gv join truong as tr
				on gv.MaTruong=tr.MaTruong where tr.TenTruong='$tetruong'";
			$qr=mysql_query($sql); 
    		$cot = mysql_fetch_row($qr);  
    		$tongbangghi = $cot[0];  
   		    $tongsotrang = ceil($tongbangghi / $bangghimoitrang); 
			include_once("Controller/cPhanTrangGV.php");
			return $tongsotrang;
		}
	}
	function DienTuDong(){
		$p=new ketnoiadht($ketnoi);
			if($p->ketnoi($ketnoi)){
			if(isset($_GET['Ma'])&&isset($_GET['TenTruong'])){
				$tetruong=$_GET['TenTruong'];
				$lop=$_GET['Lop'];
				$sql="select *
				from truong as tr join quanhuyen as q on q.MaQuan=tr.MaQuan
				where tr.TenTruong='$tetruong'";
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
	function TenMon(){
		$p=new ketnoiadht($ketnoi);
			if($p->ketnoi($ketnoi)){
				$sql="select distinct TenMonHoc from monhoc";
				$qr=mysql_query($sql);
				return $qr;
			}
	}
	function MaMon(){
		$p=new ketnoiadht($ketnoi);
			if($p->ketnoi($ketnoi)){
				if(isset($_GET['Ma'])&&isset($_GET['TenTruong'])&&isset($_GET['ThemGV'])&&isset($_GET['TenMon'])){
					$tenmon=$_GET['TenMon'];
					$sql="select * from monhoc where TenMonHoc='$tenmon'";
					$qr=mysql_query($sql);
					return $qr;
				}
			}
	}
	function Add(){
		$p=new ketnoiadht($ketnoi);
			if($p->ketnoi($ketnoi)){
				if(isset($_POST['submit'])){
					$a=$_POST['a'];
					$b=$_POST['b'];
					$c=$_POST['c'];
					$d=$_POST['d'];
					$e=$_POST['e'];
					$f=$_POST['f'];
					$x=$_POST['x'];
					$sql="insert into giaovien(TenGV,GioiTinh,SDT,DiaChi,Email,MaMonHoc,MaTruong)
					values('$a','$b','$c','$d','$e','$x','$f')";
					$qr=mysql_query($sql);
					return $qr;
				}
			}
		
	}
	function LayDuLieuSan(){
		$p=new ketnoiadht($ketnoi);
			if($p->ketnoi($ketnoi)){
				if(isset($_GET['Ma'])&&isset($_GET['TenTruong'])&&isset($_GET['UpGV'])){
					$magv=$_GET['UpGV'];
					$ttruong=$_GET['TenTruong'];
					$sql="select gv.GioiTinh as GioiTinh,gv.TenGV as TenGV,gv.SDT as SDT,gv.DiaChi as DiaChi,gv.Email as Email
					,tr.MaTruong as MaTruong,tr.TenTruong as TenTruong from giaovien as gv join truong as tr
					on gv.MaTruong=tr.MaTruong
					where gv.MaGV='$magv' and tr.TenTruong='$ttruong'";
					$qr=mysql_query($sql);
					return $qr;
				}
			}
	}
	function SuaGV(){
	$p=new ketnoiadht($ketnoi);
	if($p->ketnoi($ketnoi)){
		if(isset($_POST['submit'])){
			$a=$_POST['a'];
			$b=$_POST['b'];
			$c=$_POST['c'];
			$d=$_POST['d'];
			$e=$_POST['e'];
			$f=$_POST['f'];
		if(isset($_GET['UpGV'])){
			$magv=$_GET['UpGV'];
			$sql="update giaovien set TenGV='$a',GioiTinh='$b',SDT='$c',
			DiaChi='$d',Email='$e',MaTruong='$f'
			where MaGV='$magv'";
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
	function Xoa(){
		$p=new ketnoiadht($ketnoi);
	if($p->ketnoi($ketnoi)){
		if(isset($_GET['Ma'])&&isset($_GET['TenTruong'])&&isset($_GET['DelGV'])){
			$magv=$_GET['DelGV'];
			$sql="delete from giaovien where MaGV='$magv'";
			$qr=mysql_query($sql);
			return $qr;
			
		}
	}
	}
	
}
?>
</body>
</html>