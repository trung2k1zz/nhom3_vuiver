<?php
include_once("mConnect(HS).php");
class mMon{
function HienMon(){
	$p=new ketnoi($ketnoi);
	if($p->ketnoi($ketnoi)){
		if(isset($_GET['Ma'])){
		$tv=$_GET['Ma'];
		$sql="select * from taikhoan t join hocsinh h on t.MaTK=h.MaTK join lop l on h.MaLop=l.MaLop
		join khoi k on k.MaKhoi=l.MaKhoi join monhoc m on m.MaKhoi=k.MaKhoi join truong tr on tr.MaTruong=l.MaTruong
	    where t.MaTK='$tv'";
		$qr=mysql_query($sql);
		return $qr;
		}
		
	}
	else{
		return false;
	}
}
function CTMon(){
	$p=new ketnoi($ketnoi);
	if($p->ketnoi($ketnoi)){
		if(isset($_GET['Ma'])){
		$tv=$_GET['Ma'];
		$mh=$_GET['TenMon'];
		$tenkhoi=$_GET['TenKhoi'];
		$sql="select * from taikhoan t join hocsinh h on t.MaTK=h.MaTK join lop l on h.MaLop=l.MaLop
		join day d on d.MaLop=l.MaLop join giaovien gv on gv.MaGV=d.MaGV join monhoc m on m.MaMonHoc=gv.MaMonHoc
		join khoi as k on k.MaKhoi=l.MaKhoi
		where t.MaTK='$tv' and m.TenMonHoc='$mh' and k.TenKhoi='$tenkhoi'";
		$qr=mysql_query($sql);
		return $qr;
		}
		
	}
	else{
		return false;
	}
}
function MaMon(){
	$p=new ketnoi($ketnoi);
	if($p->ketnoi($ketnoi)){
		if(isset($_GET['Ma'])){
		$mh=$_GET['TenMon'];
		$tenkhoi=$_GET['TenKhoi'];
		$sql="select *from monhoc as mh join khoi as k on mh.MaKhoi=k.MaKhoi
		where mh.TenMonHoc='$mh' and k.TenKhoi='$tenkhoi' ";
		$qr=mysql_query($sql);
		return $qr;
		}
		
	}
	else{
		return false;
	}
}
function ThoiGianLamBai(){
	$p=new ketnoi($ketnoi);
	if($p->ketnoi($ketnoi)){
		if(isset($_GET['Ma'])&&isset($_GET['TenMon'])&&isset($_GET['TenKhoi'])&&isset($_GET['MaLop'])){
			$ma=$_GET['Ma'];
			$tenmon=$_GET['TenMon'];
			$tenkhoi=$_GET['TenKhoi'];
			$malop=$_GET['MaLop'];
			$sql="select *from taikhoan as tk join hocsinh as hs
			on tk.MaTK=hs.MaTK join lop as l on l.MaLop=hs.MaLop join
			khoi as k on k.MaKhoi=l.MaKhoi join monhoc as mh on mh.MaKhoi=k.MaKhoi
			join tk as t on t.MaMonHoc=mh.MaMonHoc
			where tk.MaTK='$ma' and mh.TenMonHoc='$tenmon' and k.TenKhoi='$tenkhoi' and t.MaLop='$malop' and t.TieuDe='TK1'";
			$qr=mysql_query($sql);
			return $qr;
}
	}
}
function XemDiem(){
	$p=new ketnoi($ketnoi);
	if($p->ketnoi($ketnoi)){
		if(isset($_GET['Ma'])&&isset($_GET['TenMon'])&&isset($_GET['TenKhoi'])&&isset($_GET['MaHS'])){
			$ma=$_GET['Ma'];
			$tenmon=$_GET['TenMon'];
			$tenkhoi=$_GET['TenKhoi'];
			$mahs=$_GET['MaHS'];
			$sql="select *from taikhoan as tk join hocsinh as hs
			on tk.MaTK=hs.MaTK join diem as d on d.MaLop=hs.MaLop 
			join monhoc as mh on mh.MaMonHoc=d.MaMon
			where tk.MaTK='$ma' and mh.TenMonHoc='$tenmon' and d.TieuDe='TK1'and d.MaHS='$mahs'";
			$qr=mysql_query($sql);
			return $qr;
		}
	}
	
}
function ThoiGianLamBai2(){
	$p=new ketnoi($ketnoi);
	if($p->ketnoi($ketnoi)){
		if(isset($_GET['Ma'])&&isset($_GET['TenMon'])&&isset($_GET['TenKhoi'])&&isset($_GET['MaLop'])){
			$ma=$_GET['Ma'];
			$tenmon=$_GET['TenMon'];
			$tenkhoi=$_GET['TenKhoi'];
			$malop=$_GET['MaLop'];
			$sql="select *from taikhoan as tk join hocsinh as hs
			on tk.MaTK=hs.MaTK join lop as l on l.MaLop=hs.MaLop join
			khoi as k on k.MaKhoi=l.MaKhoi join monhoc as mh on mh.MaKhoi=k.MaKhoi
			join tk as t on t.MaMonHoc=mh.MaMonHoc
			where tk.MaTK='$ma' and mh.TenMonHoc='$tenmon' and k.TenKhoi='$tenkhoi' and t.MaLop='$malop' and t.TieuDe='TK2'";
			$qr=mysql_query($sql);
			return $qr;
}
	}
}
function XemDiem2(){
	$p=new ketnoi($ketnoi);
	if($p->ketnoi($ketnoi)){
		if(isset($_GET['Ma'])&&isset($_GET['TenMon'])&&isset($_GET['TenKhoi'])&&isset($_GET['MaHS'])){
			$ma=$_GET['Ma'];
			$tenmon=$_GET['TenMon'];
			$tenkhoi=$_GET['TenKhoi'];
			$mahs=$_GET['MaHS'];
			$sql="select *from taikhoan as tk join hocsinh as hs
			on tk.MaTK=hs.MaTK join diem as d on d.MaLop=hs.MaLop 
			join monhoc as mh on mh.MaMonHoc=d.MaMon
			where tk.MaTK='$ma' and mh.TenMonHoc='$tenmon' and d.TieuDe='TK2'and d.MaHS='$mahs'";
			$qr=mysql_query($sql);
			return $qr;
		}
	}
	
}
function ThoiGianLamBai3(){
	$p=new ketnoi($ketnoi);
	if($p->ketnoi($ketnoi)){
		if(isset($_GET['Ma'])&&isset($_GET['TenMon'])&&isset($_GET['TenKhoi'])&&isset($_GET['MaLop'])){
			$ma=$_GET['Ma'];
			$tenmon=$_GET['TenMon'];
			$tenkhoi=$_GET['TenKhoi'];
			$malop=$_GET['MaLop'];
			$sql="select *from taikhoan as tk join hocsinh as hs
			on tk.MaTK=hs.MaTK join lop as l on l.MaLop=hs.MaLop join
			khoi as k on k.MaKhoi=l.MaKhoi join monhoc as mh on mh.MaKhoi=k.MaKhoi
			join tk as t on t.MaMonHoc=mh.MaMonHoc
			where tk.MaTK='$ma' and mh.TenMonHoc='$tenmon' and k.TenKhoi='$tenkhoi' and t.MaLop='$malop' and t.TieuDe='TK3'";
			$qr=mysql_query($sql);
			return $qr;
}
	}
}
function XemDiem3(){
	$p=new ketnoi($ketnoi);
	if($p->ketnoi($ketnoi)){
		if(isset($_GET['Ma'])&&isset($_GET['TenMon'])&&isset($_GET['TenKhoi'])&&isset($_GET['MaHS'])){
			$ma=$_GET['Ma'];
			$tenmon=$_GET['TenMon'];
			$tenkhoi=$_GET['TenKhoi'];
			$mahs=$_GET['MaHS'];
			$sql="select *from taikhoan as tk join hocsinh as hs
			on tk.MaTK=hs.MaTK join diem as d on d.MaLop=hs.MaLop 
			join monhoc as mh on mh.MaMonHoc=d.MaMon
			where tk.MaTK='$ma' and mh.TenMonHoc='$tenmon' and d.TieuDe='TK3' and d.MaHS='$mahs'";
			$qr=mysql_query($sql);
			return $qr;
		}
	}
	
}
function ThoiGianLamBai4(){
	$p=new ketnoi($ketnoi);
	if($p->ketnoi($ketnoi)){
		if(isset($_GET['Ma'])&&isset($_GET['TenMon'])&&isset($_GET['TenKhoi'])&&isset($_GET['MaLop'])){
			$ma=$_GET['Ma'];
			$tenmon=$_GET['TenMon'];
			$tenkhoi=$_GET['TenKhoi'];
			$malop=$_GET['MaLop'];
			$sql="select *from taikhoan as tk join hocsinh as hs
			on tk.MaTK=hs.MaTK join lop as l on l.MaLop=hs.MaLop join
			khoi as k on k.MaKhoi=l.MaKhoi join monhoc as mh on mh.MaKhoi=k.MaKhoi
			join tk as t on t.MaMonHoc=mh.MaMonHoc
			where tk.MaTK='$ma' and mh.TenMonHoc='$tenmon' and k.TenKhoi='$tenkhoi' and t.MaLop='$malop' and t.TieuDe='TK4'";
			$qr=mysql_query($sql);
			return $qr;
}
	}
}
function XemDiem4(){
	$p=new ketnoi($ketnoi);
	if($p->ketnoi($ketnoi)){
		if(isset($_GET['Ma'])&&isset($_GET['TenMon'])&&isset($_GET['TenKhoi'])&&isset($_GET['MaHS'])){
			$ma=$_GET['Ma'];
			$tenmon=$_GET['TenMon'];
			$tenkhoi=$_GET['TenKhoi'];
			$mahs=$_GET['MaHS'];
			$sql="select *from taikhoan as tk join hocsinh as hs
			on tk.MaTK=hs.MaTK join diem as d on d.MaLop=hs.MaLop 
			join monhoc as mh on mh.MaMonHoc=d.MaMon
			where tk.MaTK='$ma' and mh.TenMonHoc='$tenmon' and d.TieuDe='TK4' and d.MaHS='$mahs'";
			$qr=mysql_query($sql);
			return $qr;
		}
	}
	
}
function ThoiGianLamBai5(){
	$p=new ketnoi($ketnoi);
	if($p->ketnoi($ketnoi)){
		if(isset($_GET['Ma'])&&isset($_GET['TenMon'])&&isset($_GET['TenKhoi'])&&isset($_GET['MaLop'])){
			$ma=$_GET['Ma'];
			$tenmon=$_GET['TenMon'];
			$tenkhoi=$_GET['TenKhoi'];
			$malop=$_GET['MaLop'];
			$sql="select *from taikhoan as tk join hocsinh as hs
			on tk.MaTK=hs.MaTK join lop as l on l.MaLop=hs.MaLop join
			khoi as k on k.MaKhoi=l.MaKhoi join monhoc as mh on mh.MaKhoi=k.MaKhoi
			join tk as t on t.MaMonHoc=mh.MaMonHoc
			where tk.MaTK='$ma' and mh.TenMonHoc='$tenmon' and k.TenKhoi='$tenkhoi' and t.MaLop='$malop' and t.TieuDe='TK5'";
			$qr=mysql_query($sql);
			return $qr;
}
	}
}
function XemDiem5(){
	$p=new ketnoi($ketnoi);
	if($p->ketnoi($ketnoi)){
		if(isset($_GET['Ma'])&&isset($_GET['TenMon'])&&isset($_GET['TenKhoi'])&&isset($_GET['MaHS'])){
			$ma=$_GET['Ma'];
			$tenmon=$_GET['TenMon'];
			$tenkhoi=$_GET['TenKhoi'];
			$mahs=$_GET['MaHS'];
			$sql="select *from taikhoan as tk join hocsinh as hs
			on tk.MaTK=hs.MaTK join diem as d on d.MaLop=hs.MaLop 
			join monhoc as mh on mh.MaMonHoc=d.MaMon
			where tk.MaTK='$ma' and mh.TenMonHoc='$tenmon' and d.TieuDe='TK5' and d.MaHS='$mahs'";
			$qr=mysql_query($sql);
			return $qr;
		}
	}
	
}
function ThoiGianLamBaiGK(){
	$p=new ketnoi($ketnoi);
	if($p->ketnoi($ketnoi)){
		if(isset($_GET['Ma'])&&isset($_GET['TenMon'])&&isset($_GET['TenKhoi'])&&isset($_GET['MaTruong'])){
			$ma=$_GET['Ma'];
			$tenmon=$_GET['TenMon'];
			$tenkhoi=$_GET['TenKhoi'];
			$matruong=$_GET['MaTruong'];
			$sql="select *from taikhoan as tk join hocsinh as hs
			on tk.MaTK=hs.MaTK join lop as l on l.MaLop=hs.MaLop
			join khoi as k on k.MaKhoi=l.MaKhoi join monhoc as mh on mh.MaKhoi=k.MaKhoi
			join gkck as gc on gc.MaMonHoc=mh.MaMonHoc join totruongchuyenmon tt on tt.MaTTCM=gc.MaTTCM
			join giaovien gv on gv.MaGV=tt.MaGV join truong tr on tr.MaTruong=gv.MaTruong
			where tk.MaTK='$ma' and mh.TenMonHoc='$tenmon' and k.TenKhoi='$tenkhoi' and gc.TieuDe='GK' and
			tr.MaTruong='$matruong'";
			$qr=mysql_query($sql);
			return $qr;
}
	}
}
function XemDiemGK(){
	$p=new ketnoi($ketnoi);
	if($p->ketnoi($ketnoi)){
		if(isset($_GET['Ma'])&&isset($_GET['TenMon'])&&isset($_GET['TenKhoi'])&&isset($_GET['MaHS'])){
			$ma=$_GET['Ma'];
			$tenmon=$_GET['TenMon'];
			$tenkhoi=$_GET['TenKhoi'];
			$mahs=$_GET['MaHS'];
			$sql="select *from taikhoan as tk join hocsinh as hs
			on tk.MaTK=hs.MaTK join diem as d on d.MaLop=hs.MaLop 
			join monhoc as mh on mh.MaMonHoc=d.MaMon
			where tk.MaTK='$ma' and mh.TenMonHoc='$tenmon' and d.TieuDe='GK' and d.MaHS='$mahs'";
			$qr=mysql_query($sql);
			return $qr;
		}
	}
	
}
//
function ThoiGianLamBaiCK(){
	$p=new ketnoi($ketnoi);
	if($p->ketnoi($ketnoi)){
		if(isset($_GET['Ma'])&&isset($_GET['TenMon'])&&isset($_GET['TenKhoi'])&&isset($_GET['MaTruong'])){
			$ma=$_GET['Ma'];
			$tenmon=$_GET['TenMon'];
			$tenkhoi=$_GET['TenKhoi'];
			$matruong=$_GET['MaTruong'];
			$sql="select *from taikhoan as tk join hocsinh as hs
			on tk.MaTK=hs.MaTK join lop as l on l.MaLop=hs.MaLop
			join khoi as k on k.MaKhoi=l.MaKhoi join monhoc as mh on mh.MaKhoi=k.MaKhoi
			join gkck as gc on gc.MaMonHoc=mh.MaMonHoc join totruongchuyenmon tt on tt.MaTTCM=gc.MaTTCM
			join giaovien gv on gv.MaGV=tt.MaGV join truong tr on tr.MaTruong=gv.MaTruong
			where tk.MaTK='$ma' and mh.TenMonHoc='$tenmon' and k.TenKhoi='$tenkhoi' and gc.TieuDe='CK' and
			tr.MaTruong='$matruong'";
			$qr=mysql_query($sql);
			return $qr;
}
	}
}
function XemDiemCK(){
	$p=new ketnoi($ketnoi);
	if($p->ketnoi($ketnoi)){
		if(isset($_GET['Ma'])&&isset($_GET['TenMon'])&&isset($_GET['TenKhoi'])&&isset($_GET['MaHS'])){
			$ma=$_GET['Ma'];
			$tenmon=$_GET['TenMon'];
			$tenkhoi=$_GET['TenKhoi'];
			$mahs=$_GET['MaHS'];
			$sql="select *from taikhoan as tk join hocsinh as hs
			on tk.MaTK=hs.MaTK join diem as d on d.MaLop=hs.MaLop 
			join monhoc as mh on mh.MaMonHoc=d.MaMon
			where tk.MaTK='$ma' and mh.TenMonHoc='$tenmon' and d.TieuDe='CK' and d.MaHS='$mahs'";
			$qr=mysql_query($sql);
			return $qr;
		}
	}
	
}
//
function tailieuthamkhao(){
	$p=new ketnoi($ketnoi);
	if($p->ketnoi($ketnoi)){
		if(isset($_GET['Ma'])&&isset($_GET['TenMon'])&&isset($_GET['TenKhoi'])&&isset($_GET['MaLop'])){
			$ma=$_GET['Ma'];
			$tenmon=$_GET['TenMon'];
			$tenkhoi=$_GET['TenKhoi'];
			$malop=$_GET['MaLop'];
			$sql="select *from monhoc as mh join khoi as k on mh.MaKhoi=k.MaKhoi
			join tailieuthamkhao as tl on tl.MaMon=mh.MaMonHoc
			where mh.TenMonHoc='$tenmon' and k.TenKhoi='$tenkhoi' and tl.MaLop='$malop'";
			$qr=mysql_query($sql);
			return $qr;
		}
	}
}

function XuatDeTuLuan(){
	$p=new ketnoi($ketnoi);
	if($p->ketnoi($ketnoi)){
		if(isset($_GET['MaGV'])&&isset($_GET['MaLop'])&&isset($_GET['MaMon'])){
			$magv=$_GET['MaGV'];
			$malop=$_GET['MaLop'];
			$mamon=$_GET['MaMon'];
			$sql="select * from tktl where MaGV='$magv' and MaMonHoc='$mamon' and MaLop='$malop' and TieuDe='TK6'";
			$qr=mysql_query($sql);
			return $qr;
		}
	}
}
function XuatDeTuLuan2(){
	$p=new ketnoi($ketnoi);
	if($p->ketnoi($ketnoi)){
		if(isset($_GET['MaGV'])&&isset($_GET['MaLop'])&&isset($_GET['MaMon'])){
			$magv=$_GET['MaGV'];
			$malop=$_GET['MaLop'];
			$mamon=$_GET['MaMon'];
			$sql="select * from tktl where MaGV='$magv' and MaMonHoc='$mamon' and MaLop='$malop' and TieuDe='TK7'";
			$qr=mysql_query($sql);
			return $qr;
		}
	}
}

function XuatDeTuLuan3(){
	$p=new ketnoi($ketnoi);
	if($p->ketnoi($ketnoi)){
		if(isset($_GET['MaGV'])&&isset($_GET['MaLop'])&&isset($_GET['MaMon'])){
			$magv=$_GET['MaGV'];
			$malop=$_GET['MaLop'];
			$mamon=$_GET['MaMon'];
			$sql="select * from tktl where MaGV='$magv' and MaMonHoc='$mamon' and MaLop='$malop' and TieuDe='TK8'";
			$qr=mysql_query($sql);
			return $qr;
		}
	}
}

function DiemTL1(){
	$p=new ketnoi($ketnoi);
	if($p->ketnoi($ketnoi)){
		if(isset($_GET['MaLop'])&&isset($_GET['MaHS'])&&isset($_GET['TenMon'])&&isset($_GET['TenKhoi'])){
			$mahs=$_GET['MaHS'];
			$malop=$_GET['MaLop'];
			$tenmon=$_GET['TenMon'];
			$tenkhoi=$_GET['TenKhoi'];
			$sql="select *from diem as d join monhoc as mh on d.MaMon=mh.MaMonHoc
			join khoi as k on k.MaKhoi=mh.MaKhoi where d.MaHS='$mahs' and d.MaLop='$malop' and d.TieuDe='TK6' and mh.TenMonHoc='$tenmon'
			and k.TenKhoi='$tenkhoi'";
			$qr=mysql_query($sql);
			return $qr;
			
		}
	}
}
function DiemTL2(){
	$p=new ketnoi($ketnoi);
	if($p->ketnoi($ketnoi)){
		if(isset($_GET['MaLop'])&&isset($_GET['MaHS'])&&isset($_GET['TenMon'])&&isset($_GET['TenKhoi'])){
			$mahs=$_GET['MaHS'];
			$malop=$_GET['MaLop'];
			$tenmon=$_GET['TenMon'];
			$tenkhoi=$_GET['TenKhoi'];
			$sql="select *from diem as d join monhoc as mh on d.MaMon=mh.MaMonHoc
			join khoi as k on k.MaKhoi=mh.MaKhoi where d.MaHS='$mahs' and d.MaLop='$malop' and d.TieuDe='TK7' and mh.TenMonHoc='$tenmon'
			and k.TenKhoi='$tenkhoi'";
			$qr=mysql_query($sql);
			return $qr;
			
		}
	}
}

function DiemTL3(){
	$p=new ketnoi($ketnoi);
	if($p->ketnoi($ketnoi)){
		if(isset($_GET['MaLop'])&&isset($_GET['MaHS'])&&isset($_GET['TenMon'])&&isset($_GET['TenKhoi'])){
			$mahs=$_GET['MaHS'];
			$malop=$_GET['MaLop'];
			$tenmon=$_GET['TenMon'];
			$tenkhoi=$_GET['TenKhoi'];
			$sql="select *from diem as d join monhoc as mh on d.MaMon=mh.MaMonHoc
			join khoi as k on k.MaKhoi=mh.MaKhoi where d.MaHS='$mahs' and d.MaLop='$malop' and d.TieuDe='TK8' and mh.TenMonHoc='$tenmon'
			and k.TenKhoi='$tenkhoi'";
			$qr=mysql_query($sql);
			return $qr;
			
		}
	}
}


function KTNUTTK1(){
	$p=new ketnoi($ketnoi);
	if($p->ketnoi($ketnoi)){
			$malop=$_GET['MaLop'];
			$tenmon=$_GET['TenMon'];
			$tenkhoi=$_GET['TenKhoi'];
			$sql="select * from tk as tky join monhoc as mh on tky.MaMonHoc=mh.MaMonHoc
			join khoi as k on mh.MaKhoi=k.MaKhoi where tky.MaLop='$malop' and mh.TenMonHoc='$tenmon'
			and k.TenKhoi='$tenkhoi' and tky.TieuDe='TK1'";
			$qr=mysql_query($sql);
			return $qr;
	}
}

function KTNUTTK2(){
	$p=new ketnoi($ketnoi);
	if($p->ketnoi($ketnoi)){
			$malop=$_GET['MaLop'];
			$tenmon=$_GET['TenMon'];
			$tenkhoi=$_GET['TenKhoi'];
			$sql="select * from tk as tky join monhoc as mh on tky.MaMonHoc=mh.MaMonHoc
			join khoi as k on mh.MaKhoi=k.MaKhoi where tky.MaLop='$malop' and mh.TenMonHoc='$tenmon'
			and k.TenKhoi='$tenkhoi' and tky.TieuDe='TK2'";
			$qr=mysql_query($sql);
			return $qr;
	}
}
function KTNUTTK3(){
	$p=new ketnoi($ketnoi);
	if($p->ketnoi($ketnoi)){
			$malop=$_GET['MaLop'];
			$tenmon=$_GET['TenMon'];
			$tenkhoi=$_GET['TenKhoi'];
			$sql="select * from tk as tky join monhoc as mh on tky.MaMonHoc=mh.MaMonHoc
			join khoi as k on mh.MaKhoi=k.MaKhoi where tky.MaLop='$malop' and mh.TenMonHoc='$tenmon'
			and k.TenKhoi='$tenkhoi' and tky.TieuDe='TK3'";
			$qr=mysql_query($sql);
			return $qr;
	}
}

function KTNUTTK4(){
	$p=new ketnoi($ketnoi);
	if($p->ketnoi($ketnoi)){
			$malop=$_GET['MaLop'];
			$tenmon=$_GET['TenMon'];
			$tenkhoi=$_GET['TenKhoi'];
			$sql="select * from tk as tky join monhoc as mh on tky.MaMonHoc=mh.MaMonHoc
			join khoi as k on mh.MaKhoi=k.MaKhoi where tky.MaLop='$malop' and mh.TenMonHoc='$tenmon'
			and k.TenKhoi='$tenkhoi' and tky.TieuDe='TK4'";
			$qr=mysql_query($sql);
			return $qr;
	}
}

function KTNUTTK5(){
	$p=new ketnoi($ketnoi);
	if($p->ketnoi($ketnoi)){
			$malop=$_GET['MaLop'];
			$tenmon=$_GET['TenMon'];
			$tenkhoi=$_GET['TenKhoi'];
			$sql="select * from tk as tky join monhoc as mh on tky.MaMonHoc=mh.MaMonHoc
			join khoi as k on mh.MaKhoi=k.MaKhoi where tky.MaLop='$malop' and mh.TenMonHoc='$tenmon'
			and k.TenKhoi='$tenkhoi' and tky.TieuDe='TK5'";
			$qr=mysql_query($sql);
			return $qr;
	}
}

function KTNUTTK6(){
	$p=new ketnoi($ketnoi);
	if($p->ketnoi($ketnoi)){
			$malop=$_GET['MaLop'];
			$tenmon=$_GET['TenMon'];
			$tenkhoi=$_GET['TenKhoi'];
			$sql="select * from tktl as tky join monhoc as mh on tky.MaMonHoc=mh.MaMonHoc
			join khoi as k on mh.MaKhoi=k.MaKhoi where tky.MaLop='$malop' and mh.TenMonHoc='$tenmon'
			and k.TenKhoi='$tenkhoi' and tky.TieuDe='TK6'";
			$qr=mysql_query($sql);
			return $qr;
	}
}
function KTNUTTK7(){
	$p=new ketnoi($ketnoi);
	if($p->ketnoi($ketnoi)){
			$malop=$_GET['MaLop'];
			$tenmon=$_GET['TenMon'];
			$tenkhoi=$_GET['TenKhoi'];
			$sql="select * from tktl as tky join monhoc as mh on tky.MaMonHoc=mh.MaMonHoc
			join khoi as k on mh.MaKhoi=k.MaKhoi where tky.MaLop='$malop' and mh.TenMonHoc='$tenmon'
			and k.TenKhoi='$tenkhoi' and tky.TieuDe='TK7'";
			$qr=mysql_query($sql);
			return $qr;
	}
}

function KTNUTTK8(){
	$p=new ketnoi($ketnoi);
	if($p->ketnoi($ketnoi)){
			$malop=$_GET['MaLop'];
			$tenmon=$_GET['TenMon'];
			$tenkhoi=$_GET['TenKhoi'];
			$sql="select * from tktl as tky join monhoc as mh on tky.MaMonHoc=mh.MaMonHoc
			join khoi as k on mh.MaKhoi=k.MaKhoi where tky.MaLop='$malop' and mh.TenMonHoc='$tenmon'
			and k.TenKhoi='$tenkhoi' and tky.TieuDe='TK8'";
			$qr=mysql_query($sql);
			return $qr;
	}
}
function KTNUTGK(){
	$p=new ketnoi($ketnoi);
	if($p->ketnoi($ketnoi)){
			$malop=$_GET['MaLop'];
			$tenmon=$_GET['TenMon'];
			$tenkhoi=$_GET['TenKhoi'];
			$matruong=$_GET['MaTruong'];
			$sql="select * from gkck as gc join monhoc as mh on gc.MaMonHoc=mh.MaMonHoc
			join khoi as k on mh.MaKhoi=k.MaKhoi join totruongchuyenmon tt on tt.MaTTCM=gc.MaTTCM
			join giaovien as gv on gv.MaGV=tt.MaGV join truong tr on tr.MaTruong=gv.MaTruong 
			where mh.TenMonHoc='$tenmon' and k.TenKhoi='$tenkhoi' and gc.TieuDe='GK' and tr.MaTruong='$matruong'";
			$qr=mysql_query($sql);
			return $qr;
	}
}
function KTNUTCK(){
	$p=new ketnoi($ketnoi);
	if($p->ketnoi($ketnoi)){
			$malop=$_GET['MaLop'];
			$tenmon=$_GET['TenMon'];
			$tenkhoi=$_GET['TenKhoi'];
			$matruong=$_GET['MaTruong'];
			$sql="select * from gkck as gc join monhoc as mh on gc.MaMonHoc=mh.MaMonHoc
			join khoi as k on mh.MaKhoi=k.MaKhoi join totruongchuyenmon tt on tt.MaTTCM=gc.MaTTCM
			join giaovien as gv on gv.MaGV=tt.MaGV join truong tr on tr.MaTruong=gv.MaTruong 
			where mh.TenMonHoc='$tenmon' and k.TenKhoi='$tenkhoi' and gc.TieuDe='CK' and tr.MaTruong='$matruong'";
			$qr=mysql_query($sql);
			return $qr;
	}
}



}
?>