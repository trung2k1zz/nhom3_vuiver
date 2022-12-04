<?php
include_once("mConnect(GV).php");
class mCHgv{
function HienMonGVDay(){
	$p=new ketnoigv($ketnoi);
	if($p->ketnoi($ketnoi)){
		if(isset($_GET['Ma'])){
			$tk=$_GET['Ma'];
			$sql="select k.TenKhoi as TenKhoi,mh.TenMonHoc as TenMonHoc from taikhoan as tk join giaovien as gv
			on tk.MaTK=gv.MaTK join monhoc as mh on mh.MaMonHoc=gv.MaMonHoc
			join day as d on d.MaGV=gv.MaGV join lop as l on l.MaLop=d.MaLop
			join khoi as k on k.MaKhoi=l.MaKhoi
			where tk.MaTK='$tk'";
			$qr=mysql_query($sql);
			return $qr;
		}
	}
	}
function LayMa(){
	$p=new ketnoigv();
	if($p->ketnoi($ketnoi)){
		if(isset($_GET['Ma'])&&isset($_GET['TenKhoi'])&&isset($_GET['TenMon'])){
			$khoi=$_GET['TenKhoi'];
			$mon=$_GET['TenMon'];
			$sql="select * from 
			monhoc as mh join khoi as k on k.MaKhoi=mh.MaKhoi
			where k.TenKhoi='$khoi' and mh.TenMonHoc='$mon'";
			$qr=mysql_query($sql);
			return $qr;
		}
		
	}
}
function ChenCH(){
	$p=new ketnoigv();
	if($p->ketnoi($ketnoi)){
		if(isset($_POST['submit'])){
			$tieude=$_POST['td'];
			$cauhoi=$_POST['ch'];
			$a=$_POST['pa'];
			$b=$_POST['pb'];
			$c=$_POST['pc'];
			$d=$_POST['pd'];
			$ans=$_POST['da'];
			$ct=$_POST['ct'];
			$mamon=$_POST['mamon'];
			$socautao=$_POST['SoCauTao'];
			$sql="insert into nganhangcauhoi(TieuDe,NoiDungCH,QA,QB,QC,QD,Ans,Detail,MaMonHoc)
			values('$tieude','$cauhoi','$a','$b','$c','$d','$ans','$ct','$mamon')";
			$qr-mysql_query($sql);
			return $qr;
			
		}
	}
	
}
function XemXet(){
	$p=new ketnoigv();
	if($p->ketnoi($ketnoi)){
		if(isset($_POST['mamon'])){
			$mamon=$_POST['mamon'];
			$sql="select count(MaNHCH) as SLC from nganhangcauhoi where MaMonHoc='$mamon'";
			$qr=mysql_query($sql);
			return $qr;
			
		}
	}
	
}
function XuatNHCHtheoGV(){
	$p=new ketnoigv();
	if($p->ketnoi($ketnoi)){
		if(isset($_GET['Ma'])&&isset($_GET['TenKhoi'])&&isset($_GET['TenMon'])){
			$bangghimoitrang=!empty($_GET['per_page'])?$_GET['per_page']:3;
			$tranghientai=!empty($_GET['page'])?$_GET['page']:1;
			$start_from = ($tranghientai-1) * $bangghimoitrang;
			$khoi=$_GET['TenKhoi'];
			$mon=$_GET['TenMon'];
			$sql="select *from monhoc as mh join khoi as k on k.MaKhoi=mh.MaKhoi join nganhangcauhoi as nh on 
			nh.MaMonHoc=mh.MaMonHoc where k.TenKhoi='$khoi' and mh.TenMonHoc='$mon' limit 
			$start_from,$bangghimoitrang";
			$qr=mysql_query($sql);
			return $qr;
		}
		
	}
}
function sotrangcanthiet(){
		if(isset($_GET['Ma'])&&isset($_GET['TenKhoi'])&&isset($_GET['TenMon'])){
			$khoi=$_GET['TenKhoi'];
			$mon=$_GET['TenMon'];
			$bangghimoitrang=!empty($_GET['per_page'])?$_GET['per_page']:3;
			$tranghientai=!empty($_GET['page'])?$_GET['page']:1;
			$sql ="select count(nh.MaNHCH) from monhoc as mh 
			join khoi as k on k.MaKhoi=mh.MaKhoi
			join nganhangcauhoi as nh on nh.MaMonHoc=mh.MaMonHoc
			where k.TenKhoi='$khoi' and mh.TenMonHoc='$mon'";
			$qr=mysql_query($sql); 
    		$cot = mysql_fetch_row($qr);  
    		$tongbangghi = $cot[0];  
   		    $tongsotrang = ceil($tongbangghi / $bangghimoitrang); 
			include_once("Controller/cPhanTrangCH.php");
			return $tongsotrang;
		}
	}
function laydulieu(){
	if(isset($_GET['Ma'])&&isset($_GET['suaCH'])){
		$manhch=$_GET['suaCH'];
		$sql="select *from nganhangcauhoi where MaNHCH='$manhch'";
		$qr=mysql_query($sql);
		return $qr;
	}
}
function suaCH(){
	$p=new ketnoigv();
	if($p->ketnoi($ketnoi)){
	if(isset($_POST['sua'])){
		$a=$_POST['a'];
		$b=$_POST['b'];
		$c=$_POST['c'];
		$d=$_POST['d'];
		$e=$_POST['e'];
		$f=$_POST['f'];
		$g=$_POST['g'];
		$h=$_POST['h'];
		if(isset($_GET['suaCH'])){
			$manhch=$_GET['suaCH'];
			$sql="update nganhangcauhoi set TieuDe='$a',NoiDungCH='$b'
			,QA='$c',QB='$d',QC='$e',QD='$f',Ans='$g',Detail='$h' where MaNHCH='$manhch'";
			$qr=mysql_query($sql);
			return $qr;
			$p->dongketnoi($ketnoi);
		}
		}
		
	}
}
function xoa(){
	$p=new ketnoigv();
	if($p->ketnoi($ketnoi)){
	if(isset($_GET['xoaCH'])){
			$manhch=$_GET['xoaCH'];
			$sql="delete from nganhangcauhoi where MaNHCH='$manhch'";
			$qr=mysql_query($sql);
			return $qr;
		}
	}
	
}
}
?>