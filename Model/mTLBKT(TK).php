<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include_once("mConnect(ADHT).php");
class mTLBKT{
function XuatMaGV(){
	$p=new ketnoiadht($ketnoi);
	if($p->ketnoi($ketnoi)){
		if(isset($_GET['Ma'])){
			$ma=$_GET['Ma'];
			$sql="select *from taikhoan as tk join giaovien as gv
			on tk.MaTK=gv.MaTK where tk.MaTK='$ma'";
			$qr=mysql_query($sql);
			return $qr;
		}
	}
}
function HT(){
	$p=new ketnoiadht($ketnoi);
	if($p->ketnoi($ketnoi)){
			$ma=$_GET['Ma'];
			$sql="select l.TenLop as TenLop,l.MaLop as MaLop,k.MaKhoi as MaKhoi,k.TenKhoi as TenKhoi,mh.TenMonHoc as 
			TenMonHoc
			from taikhoan as tk join giaovien as gv
			on tk.MaTK=gv.MaTK join monhoc as mh on mh.MaMonHoc=gv.MaMonHoc
			join day as d on d.MaGV=gv.MaGV join lop as l on l.MaLop=d.MaLop
			join khoi as k on k.MaKhoi=l.MaKhoi
			where tk.MaTK='$ma'";
			$qr=mysql_query($sql);
			return $qr;
	}
	
}
function HTMaMon(){
	$p=new ketnoiadht($ketnoi);
	if($p->ketnoi($ketnoi)){
		$makhoi=$_GET['MaKhoi'];
		$tenmon=$_GET['TenMon'];
		$sql="select * from monhoc where TenMonHoc='$tenmon' and MaKhoi='$makhoi'";
		$qr=mysql_query($sql);
		return $qr;
	}
}
function TaoDeKTTK(){
	$p=new ketnoiadht($ketnoi);
	if($p->ketnoi($ketnoi)){
		if(isset($_GET['submit'])){
			$mamon=$_GET['MaMon'];
			$malop=$_GET['MaLop'];
			$magv=$_GET['a'];
			$loaibai=$_GET['c'];
			$ngaybatdau=$_GET['d'];
			$ngayketthuc=$_GET['e'];
			$tglambai=$_GET['f'];
			$socau=$_GET['g'];
				$sql="insert into tk(MaMonHoc,NoiDungCH,QA,QB,QC,QD,Ans,Detail,NgayTaoBaiKT)
				select MaMonHoc,NoiDungCH,QA,QB,QC,QD,Ans,Detail,now() from nganhangcauhoi
				where TieuDe='TK' and MaMonHoc='$mamon' order by rand() limit 
				$socau";
				$qr=mysql_query($sql);
				return $qr;
			
		}
	}
}
function CapNhat(){
	$p=new ketnoiadht($ketnoi);
	if($p->ketnoi($ketnoi)){
		if(isset($_GET['submit'])){
			$mamon=$_GET['MaMon'];
			$malop=$_GET['MaLop'];
			$magv=$_GET['a'];
			$loaibai=$_GET['c'];
			$ngaybatdau=$_GET['d'];
			$ngayketthuc=$_GET['e'];
			$tglambai=$_GET['f'];
			$socau=$_GET['g'];
			$sql="update tk set TieuDe='$loaibai',NgayLamBai='$ngaybatdau',NgayKetThuc='$ngayketthuc',
			ThoiGianLamBai='$tglambai',MaGV='$magv',MaLop='$malop'
			where NgayTaoBaiKT=now()";
			$qr=mysql_query($sql);
			return $qr;
			
		}
	}
}
function Xuat(){
	$p=new ketnoiadht($ketnoi);
	if($p->ketnoi($ketnoi)){
		if(isset($_GET['Ma'])&&isset($_GET['TenMon'])&&isset($_GET['TenKhoi'])&&isset($_GET['MaLop'])){
			$khoi=$_GET['TenKhoi'];
			$mon=$_GET['TenMon'];
			$malop=$_GET['MaLop'];
			$bangghimoitrang=!empty($_GET['per_page'])?$_GET['per_page']:10;
			$tranghientai=!empty($_GET['page'])?$_GET['page']:1;
			$start_from = ($tranghientai-1) * $bangghimoitrang;
			$sql="select *from monhoc as mh join khoi as k on k.MaKhoi=mh.MaKhoi join tk as t on 
			t.MaMonHoc=mh.MaMonHoc where k.TenKhoi='$khoi' and mh.TenMonHoc='$mon' and t.MaLop='$malop' limit 
			$start_from,$bangghimoitrang";
			$qr=mysql_query($sql);
			return $qr;
		}
	}
	
}
function sotrangcanthiet(){
	if(isset($_GET['Ma'])&&isset($_GET['TenMon'])&&isset($_GET['TenKhoi'])&&isset($_GET['MaLop'])){
			$khoi=$_GET['TenKhoi'];
			$mon=$_GET['TenMon'];
			$malop=$_GET['MaLop'];
			$bangghimoitrang=!empty($_GET['per_page'])?$_GET['per_page']:10;
			$tranghientai=!empty($_GET['page'])?$_GET['page']:1;
			$sql ="select count(t.MaTK) from monhoc as mh join khoi as k on k.MaKhoi=mh.MaKhoi join tk as t on 
			t.MaMonHoc=mh.MaMonHoc where k.TenKhoi='$khoi' and mh.TenMonHoc='$mon' and t.MaLop='$malop'";
			$qr=mysql_query($sql); 
    		$cot = mysql_fetch_row($qr);  
    		$tongbangghi = $cot[0];  
   		    $tongsotrang = ceil($tongbangghi / $bangghimoitrang); 
			include_once("Controller/cPhanTrangTLBKT.php");
			return $tongsotrang;
		}
}
function CapNhatTime(){
	$p=new ketnoiadht($ketnoi);
	if($p->ketnoi($ketnoi)){
		if(isset($_GET['cn'])){
			$mamon=$_GET['MaMon'];
			$malop=$_GET['MaLop'];
			$loaibai=$_GET['c'];
			$ngaybatdau=$_GET['d'];
			$ngayketthuc=$_GET['e'];
			$tglambai=$_GET['f'];
			$sql="update tk set NgayLamBai='$ngaybatdau',NgayKetThuc='$ngayketthuc',
			ThoiGianLamBai='$tglambai'
			where MaMonHoc='$mamon' and MaLop='$malop' and TieuDe='$loaibai'";
			$qr=mysql_query($sql);
			return $qr;
			
		}
	}
}
function TaiBaiTL(){
	$p=new ketnoiadht($ketnoi);
	if($p->ketnoi($ketnoi)){
		if(isset($_POST['tao'])){
			$malop=$_POST['MaLop'];
			$mamon=$_POST['MaMon'];
			$magv=$_POST['a'];
			$tieude=$_POST['lbtl'];
			$hannop=$_POST['hn'];
			$file=$_FILES['f']['name'];
			$sql="insert into tktl(TieuDe,TenBaiTL,HanNop,MaGV,MaMonHoc,MaLop,NgayTaoBaiTL) 
			values('$tieude','$file','$hannop','$magv','$mamon','$malop',now())";
			$qr=mysql_query($sql);
			return $qr;
		}
	}
}
function XuatBaiTL(){
	$p=new ketnoiadht($ketnoi);
	if($p->ketnoi($ketnoi)){
		$khoi=$_GET['TenKhoi'];
		$mon=$_GET['TenMon'];
		$malop=$_GET['MaLop'];
		$sql="select * from monhoc as mh join tktl as tktl on mh.MaMonHoc=tktl.MaMonHoc
		join lop as l on tktl.MaLop=l.MaLop join khoi as k on k.MaKhoi=mh.MaKhoi
		where k.TenKhoi='$khoi' and mh.TenMonHoc='$mon' and tktl.MaLop='$malop'";
		$qr=mysql_query($sql);
		return $qr;
	}
}
function NopBaiTL(){
	$p=new ketnoiadht($ketnoi);
	if($p->ketnoi($ketnoi)){
		if(isset($_POST['nb'])){
			$malop=$_POST['MaLop'];
			$magv=$_POST['MaGV'];
			$mahs=$_POST['MaHS'];
			$mamon=$_POST['MaMon'];
			$f=$_FILES['f']['name'];
			$sql="insert into filenopbaitl(TieuDe,FileNop,MaHS,MaGV,MaLop,MaMon,NgayNopBai)
			values('TK6','$f',$mahs,$magv,$malop,$mamon,now())";
			$qr=mysql_query($sql);
			return $qr;
		}
	}
}
function XuatFileDaNop(){
	$p=new ketnoiadht($ketnoi);
	if($p->ketnoi($ketnoi)){
		if(isset($_GET['MaHS'])&&isset($_GET['MaLop'])&&isset($_GET['MaGV'])&&isset($_GET['MaMon'])){
			$malop=$_GET['MaLop'];
			$magv=$_GET['MaGV'];
			$mahs=$_GET['MaHS'];
			$mamon=$_GET['MaMon'];
			$sql="select *from filenopbaitl where MaGV='$magv' and MaMon='$mamon' and MaLop='$malop' and
			MaHS='$mahs' and TieuDe='TK6'";
			$qr=mysql_query($sql);
			return $qr;
		}
	}
}
function SuaFile(){
	$p=new ketnoiadht($ketnoi);
	if($p->ketnoi($ketnoi)){
		if(isset($_POST['sua'])){
			$malop=$_POST['MaLop'];
			$magv=$_POST['MaGV'];
			$mahs=$_POST['MaHS'];
			$mamon=$_POST['MaMon'];
			$f=$_FILES['f']['name'];
			$sql="update filenopbaitl set FileNop='$f'
			where MaHS='$mahs' and MaGV='$magv' and MaLop='$malop' and MaMon='$mamon' and TieuDe='TK6'";
			$qr=mysql_query($sql);
			return $qr;
		}
	}
}
//
function NopBaiTL2(){
	$p=new ketnoiadht($ketnoi);
	if($p->ketnoi($ketnoi)){
		if(isset($_POST['nb2'])){
			$malop=$_POST['MaLop'];
			$magv=$_POST['MaGV'];
			$mahs=$_POST['MaHS'];
			$mamon=$_POST['MaMon'];
			$f=$_FILES['f']['name'];
			$sql="insert into filenopbaitl(TieuDe,FileNop,MaHS,MaGV,MaLop,MaMon,NgayNopBai)
			values('TK7','$f',$mahs,$magv,$malop,$mamon,now())";
			$qr=mysql_query($sql);
			return $qr;
		}
	}
}
function XuatFileDaNop2(){
	$p=new ketnoiadht($ketnoi);
	if($p->ketnoi($ketnoi)){
		if(isset($_GET['MaHS'])&&isset($_GET['MaLop'])&&isset($_GET['MaGV'])&&isset($_GET['MaMon'])){
			$malop=$_GET['MaLop'];
			$magv=$_GET['MaGV'];
			$mahs=$_GET['MaHS'];
			$mamon=$_GET['MaMon'];
			$sql="select *from filenopbaitl where MaGV='$magv' and MaMon='$mamon' and MaLop='$malop' and
			MaHS='$mahs' and TieuDe='TK7'";
			$qr=mysql_query($sql);
			return $qr;
		}
	}
}
function SuaFile2(){
	$p=new ketnoiadht($ketnoi);
	if($p->ketnoi($ketnoi)){
		if(isset($_POST['sua2'])){
			$malop=$_POST['MaLop'];
			$magv=$_POST['MaGV'];
			$mahs=$_POST['MaHS'];
			$mamon=$_POST['MaMon'];
			$f=$_FILES['f']['name'];
			$sql="update filenopbaitl set FileNop='$f'
			where MaHS='$mahs' and MaGV='$magv' and MaLop='$malop' and MaMon='$mamon' and TieuDe='TK7'";
			$qr=mysql_query($sql);
			return $qr;
		}
	}
}

//
function NopBaiTL3(){
	$p=new ketnoiadht($ketnoi);
	if($p->ketnoi($ketnoi)){
		if(isset($_POST['nb3'])){
			$malop=$_POST['MaLop'];
			$magv=$_POST['MaGV'];
			$mahs=$_POST['MaHS'];
			$mamon=$_POST['MaMon'];
			$f=$_FILES['f']['name'];
			$sql="insert into filenopbaitl(TieuDe,FileNop,MaHS,MaGV,MaLop,MaMon,NgayNopBai)
			values('TK8','$f',$mahs,$magv,$malop,$mamon,now())";
			$qr=mysql_query($sql);
			return $qr;
		}
	}
}
function XuatFileDaNop3(){
	$p=new ketnoiadht($ketnoi);
	if($p->ketnoi($ketnoi)){
		if(isset($_GET['MaHS'])&&isset($_GET['MaLop'])&&isset($_GET['MaGV'])&&isset($_GET['MaMon'])){
			$malop=$_GET['MaLop'];
			$magv=$_GET['MaGV'];
			$mahs=$_GET['MaHS'];
			$mamon=$_GET['MaMon'];
			$sql="select *from filenopbaitl where MaGV='$magv' and MaMon='$mamon' and MaLop='$malop' and
			MaHS='$mahs' and TieuDe='TK8'";
			$qr=mysql_query($sql);
			return $qr;
		}
	}
}
function SuaFile3(){
	$p=new ketnoiadht($ketnoi);
	if($p->ketnoi($ketnoi)){
		if(isset($_POST['sua3'])){
			$malop=$_POST['MaLop'];
			$magv=$_POST['MaGV'];
			$mahs=$_POST['MaHS'];
			$mamon=$_POST['MaMon'];
			$f=$_FILES['f']['name'];
			$sql="update filenopbaitl set FileNop='$f'
			where MaHS='$mahs' and MaGV='$magv' and MaLop='$malop' and MaMon='$mamon' and TieuDe='TK8'";
			$qr=mysql_query($sql);
			return $qr;
		}
	}
}


//
function XuatFileNopHS(){
	$p=new ketnoiadht($ketnoi);
	if($p->ketnoi($ketnoi)){
			$malop=$_GET['MaLop'];
			$magv=$_GET['MaGV'];
			$mahs=$_GET['MaHS'];
			$tenmon=$_GET['TenMon'];
			$makhoi=$_GET['MaKhoi'];
			$lb=$_GET['lb'];
			$sql="select *from filenopbaitl as fl join monhoc as mh on fl.MaMon=mh.MaMonHoc
			where fl.MaLop='$malop' and fl.MaGV='$magv' and fl.MaHS='$mahs' and mh.TenMonHoc='$tenmon' and mh.MaKhoi='$makhoi'
			and TieuDe='$lb'";
			$qr=mysql_query($sql);
			return $qr;
	}
}
function luudiem(){
	if(isset($_GET['ld'])){
			$malop=$_GET['MaLop'];
			$magv=$_GET['MaGV'];
			$mahs=$_GET['MaHS'];
			$mamon=$_GET['MaMon'];
			$lb=$_GET['lb'];
			$d=$_GET['diem'];
			$sql="insert into diem(TieuDe,Diem,MaHS,MaLop,MaMon,MaGV,NgayXNDiem)
			values('$lb','$d','$mahs','$malop','$mamon','$magv',now())";
			$qr=mysql_query($sql);
			return $qr;
	}
}
function xuatdiem(){
			$malop=$_GET['MaLop'];
			$magv=$_GET['MaGV'];
			$mahs=$_GET['MaHS'];
			$tenmon=$_GET['TenMon'];
			$makhoi=$_GET['MaKhoi'];
			$lb=$_GET['lb'];
			$sql="select *from diem as d join monhoc as mh on
			d.MaMon=mh.MaMonHoc where d.MaHS='$mahs' and d.MaLop='$malop' and d.MaGV='$magv'
			and d.TieuDe='$lb' and mh.TenMonHoc='$tenmon' and mh.MaKhoi='$makhoi'";
			$qr=mysql_query($sql);
			return $qr;
}


}
?>
</body>
</html>