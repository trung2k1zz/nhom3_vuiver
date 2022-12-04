<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include_once("mConnect(TTCM).php");
class mDuyet{
	function XuatMon(){
		$p=new ketnoittcm($ketnoi);
		if($p->ketnoi($ketnoi)){
			$ma=$_GET['Ma'];
			$sql="select *from taikhoan tk join totruongchuyenmon tt on tk.MaTK=tt.MaTK
			join giaovien gv on gv.MaGV=tt.MaGV join monhoc mh on mh.MaMonHoc=gv.MaMonHoc
			where tk.MaTK='$ma'";
			$qr=mysql_query($sql);
			return $qr;
		}
	}
	function MaMH(){
		$p=new ketnoittcm($ketnoi);
		if($p->ketnoi($ketnoi)){
			$tenmon=$_GET['TenMon'];;
			$tenkhoi=$_GET['TenKhoi'];
			$sql="select *from monhoc mh join khoi k 
			on mh.MaKhoi=k.MaKhoi where mh.TenMonHoc='$tenmon' and k.TenKhoi='$tenkhoi'";
			$qr=mysql_query($sql);
			return $qr;
		}
	}
	function HienNHCHGK(){
		$p=new ketnoittcm($ketnoi);
		if($p->ketnoi($ketnoi)){
			$tenmon=$_GET['TenMon'];;
			$tenkhoi=$_GET['TenKhoi'];
			$bangghimoitrang=!empty($_GET['per_page'])?$_GET['per_page']:5;
			$tranghientai=!empty($_GET['page'])?$_GET['page']:1;
			$start_from = ($tranghientai-1) * $bangghimoitrang;
			$sql="select * from nganhangcauhoi nh join monhoc mh on mh.MaMonHoc=nh.MaMonHoc
			join khoi k on k.MaKhoi=mh.MaKhoi where nh.MaNHCH not in(select gc.MaNHCH from gkck gc)
			and nh.TieuDe='GK' and mh.TenMonHoc='$tenmon' and k.TenKhoi='$tenkhoi' limit 
			$start_from,$bangghimoitrang";
			$qr=mysql_query($sql);
			return $qr;
		}
	}
	function sotrangcanthiet(){
	$p=new ketnoittcm($ketnoi);
		if($p->ketnoi($ketnoi)){
			$tenmon=$_GET['TenMon'];;
			$tenkhoi=$_GET['TenKhoi'];
			$bangghimoitrang=!empty($_GET['per_page'])?$_GET['per_page']:5;
			$tranghientai=!empty($_GET['page'])?$_GET['page']:1;
			$sql ="select count(nh.MaNHCH) from nganhangcauhoi nh join monhoc mh on mh.MaMonHoc=nh.MaMonHoc
			join khoi k on k.MaKhoi=mh.MaKhoi where nh.MaNHCH not in(select gc.MaNHCH from gkck gc)
			and nh.TieuDe='GK' and mh.TenMonHoc='$tenmon' and k.TenKhoi='$tenkhoi'";
			$qr=mysql_query($sql); 
    		$cot = mysql_fetch_row($qr);  
    		$tongbangghi = $cot[0];  
   		    $tongsotrang = ceil($tongbangghi / $bangghimoitrang); 
			include_once("Controller/cPhanTrangGK.php");
			return $tongsotrang;
		}
}
	function ThemGK(){
		$p=new ketnoittcm($ketnoi);
		if($p->ketnoi($ketnoi)){
			if(isset($_GET['duetID'])){
				$id=$_GET['duetID'];
				$sql="insert into gkck(TieuDe,NoiDungCH,QA,QB,QC,QD,Ans,MaMonHoc,MaNHCH)
				select TieuDe,NoiDungCH,QA,QB,QC,QD,Ans,MaMonHoc,MaNHCH
				from nganhangcauhoi where MaNHCH='$id'";
				$qr=mysql_query($sql);
				return $qr;
				
			}
		}
		
	}
	function SoCauDuyet(){
		$p=new ketnoittcm($ketnoi);
		if($p->ketnoi($ketnoi)){
			$tenmon=$_GET['TenMon'];;
			$tenkhoi=$_GET['TenKhoi'];
			$sql="select count(gc.MaNHCH) as SLC from gkck gc join nganhangcauhoi nh on gc.MaNHCH=nh.MaNHCH
			join monhoc as mh on mh.MaMonHoc=gc.MaMonHoc join khoi k on k.MaKhoi=mh.MaKhoi
			where nh.TieuDe='GK' and mh.TenMonHoc='$tenmon' and k.TenKhoi='$tenkhoi'";
			$qr=mysql_query($sql);
			return $qr;
		}
		
	}
	function TGGK(){
		if(isset($_GET['tl'])){
			$lb=$_GET['LoaiBai'];
			$magv=$_GET['MaGV'];
			$mamon=$_GET['MaMon'];
			$nbd=$_GET['nbd'];
			$nkt=$_GET['nkt'];
			$tglb=$_GET['tglb'];
			$mattcm=$_GET['MaTTCM'];
			$hc=$_GET['hc'];
			$sql="update gkck set NgayLamBai='$nbd',NgayKetThuc='$nkt',ThoiGianLamBai='$tglb',HanChot='$hc',MaTTCM='$mattcm'
			where TieuDe='$lb' and MaMonHoc='$mamon'";
			$qr=mysql_query($sql);
			return $qr;
		}
	}
	function tgdk(){
		$p=new ketnoittcm($ketnoi);
		if($p->ketnoi($ketnoi)){
			$tenmon=$_GET['TenMon'];
			$tenkhoi=$_GET['TenKhoi'];
			$sql="select *from gkck gc join monhoc mh on gc.MaMonHoc=mh.MaMonHoc
			join khoi k on k.MaKhoi=mh.MaKhoi where mh.TenMonHoc='$tenmon' and k.TenKhoi='$tenkhoi' and gc.TieuDe='GK'";
			$qr=mysql_query($sql);
			return $qr;
		}
		
	}
	//
	//
	function HienNHCHCK(){
		$p=new ketnoittcm($ketnoi);
		if($p->ketnoi($ketnoi)){
			$tenmon=$_GET['TenMon'];;
			$tenkhoi=$_GET['TenKhoi'];
			$bangghimoitrang=!empty($_GET['per_page'])?$_GET['per_page']:5;
			$tranghientai=!empty($_GET['page'])?$_GET['page']:1;
			$start_from = ($tranghientai-1) * $bangghimoitrang;
			$sql="select * from nganhangcauhoi nh join monhoc mh on mh.MaMonHoc=nh.MaMonHoc
			join khoi k on k.MaKhoi=mh.MaKhoi where nh.MaNHCH not in(select gc.MaNHCH from gkck gc)
			and nh.TieuDe='CK' and mh.TenMonHoc='$tenmon' and k.TenKhoi='$tenkhoi' limit 
			$start_from,$bangghimoitrang";
			$qr=mysql_query($sql);
			return $qr;
		}
	}
	function sotrangcanthietCK(){
	$p=new ketnoittcm($ketnoi);
		if($p->ketnoi($ketnoi)){
			$tenmon=$_GET['TenMon'];;
			$tenkhoi=$_GET['TenKhoi'];
			$bangghimoitrang=!empty($_GET['per_page'])?$_GET['per_page']:5;
			$tranghientai=!empty($_GET['page'])?$_GET['page']:1;
			$sql ="select count(nh.MaNHCH) from nganhangcauhoi nh join monhoc mh on mh.MaMonHoc=nh.MaMonHoc
			join khoi k on k.MaKhoi=mh.MaKhoi where nh.MaNHCH not in(select gc.MaNHCH from gkck gc)
			and nh.TieuDe='CK' and mh.TenMonHoc='$tenmon' and k.TenKhoi='$tenkhoi'";
			$qr=mysql_query($sql); 
    		$cot = mysql_fetch_row($qr);  
    		$tongbangghi = $cot[0];  
   		    $tongsotrang = ceil($tongbangghi / $bangghimoitrang); 
			include_once("Controller/cPhanTrangCK.php");
			return $tongsotrang;
		}
}
	function ThemCK(){
		$p=new ketnoittcm($ketnoi);
		if($p->ketnoi($ketnoi)){
			if(isset($_GET['duyetID'])){
				$id=$_GET['duyetID'];
				$sql="insert into gkck(TieuDe,NoiDungCH,QA,QB,QC,QD,Ans,MaMonHoc,MaNHCH)
				select TieuDe,NoiDungCH,QA,QB,QC,QD,Ans,MaMonHoc,MaNHCH
				from nganhangcauhoi where MaNHCH='$id'";
				$qr=mysql_query($sql);
				return $qr;
				
			}
		}
		
	}
	function SoCauDuyetCK(){
		$p=new ketnoittcm($ketnoi);
		if($p->ketnoi($ketnoi)){
			$tenmon=$_GET['TenMon'];;
			$tenkhoi=$_GET['TenKhoi'];
			$sql="select count(gc.MaNHCH) as SLC from gkck gc join nganhangcauhoi nh on gc.MaNHCH=nh.MaNHCH
			join monhoc as mh on mh.MaMonHoc=gc.MaMonHoc join khoi k on k.MaKhoi=mh.MaKhoi
			where nh.TieuDe='CK' and mh.TenMonHoc='$tenmon' and k.TenKhoi='$tenkhoi'";
			$qr=mysql_query($sql);
			return $qr;
		}
		
	}
	function TGCK(){
		if(isset($_GET['tlck'])){
			$lb1=$_GET['LoaiBai1'];
			$magv=$_GET['MaGV'];
			$mamon=$_GET['MaMon'];
			$nbd1=$_GET['nbd1'];
			$nkt1=$_GET['nkt1'];
			$tglb1=$_GET['tglb1'];
			$mattcm=$_GET['MaTTCM'];
			$hc1=$_GET['hc1'];
			$sql="update gkck set NgayLamBai='$nbd1',NgayKetThuc='$nkt1',ThoiGianLamBai='$tglb1',
			HanChot='$hc1',MaTTCM='$mattcm'
			where TieuDe='$lb1' and MaMonHoc='$mamon'";
			$qr=mysql_query($sql);
			return $qr;
		}
	}
	function tgik(){
		$p=new ketnoittcm($ketnoi);
		if($p->ketnoi($ketnoi)){
			$tenmon=$_GET['TenMon'];
			$tenkhoi=$_GET['TenKhoi'];
			$sql="select *from gkck gc join monhoc mh on gc.MaMonHoc=mh.MaMonHoc
			join khoi k on k.MaKhoi=mh.MaKhoi where mh.TenMonHoc='$tenmon' and k.TenKhoi='$tenkhoi' and gc.TieuDe='CK'";
			$qr=mysql_query($sql);
			return $qr;
		}
		
	}
		
}
?>
</body>
</html>