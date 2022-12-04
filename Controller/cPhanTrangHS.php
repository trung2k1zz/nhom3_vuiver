<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

if ($tranghientai>2){
	$trangdau=1;
    		echo '<button><a href="QuanLyThongTinHocSinh.php?Ma='.$_GET['Ma'].'&&'.'TenTruong='.$_GET['TenTruong'].'&&'.'Lop='.$_GET['Lop'].'&&'.'page='.$trangdau.'">First</a></button> ';
}
if ($tranghientai > 2 && $tongsotrang > 2){
    		echo '<button><a href="QuanLyThongTinHocSinh.php?Ma='.$_GET['Ma'].'&&'.'TenTruong='.$_GET['TenTruong'].'&&'.'Lop='.$_GET['Lop'].'&&'.'page='.($tranghientai-2).'"><<</a></button>  ';
}

if ($tranghientai > 1 && $tongsotrang > 1){
   			echo '<button><a href="QuanLyThongTinHocSinh.php?Ma='.$_GET['Ma'].'&&'.'TenTruong='.$_GET['TenTruong'].'&&'.'Lop='.$_GET['Lop'].'&&'.'page='.($tranghientai-1).'"><</a></button>  ';
}
 
for ($i = 1; $i <= $tongsotrang; $i++){
    if ($i == $tranghientai){
       		 echo '<button class="btn-warning"><span>'.$i.'</span></button>  ';
    }
    elseif($i>$tranghientai-3&&$i<$tranghientai+3){
       		echo '<button><a href="QuanLyThongTinHocSinh.php?Ma='.$_GET['Ma'].'&&'.'TenTruong='.$_GET['TenTruong'].'&&'.'Lop='.$_GET['Lop'].'&&'.'page='.$i.'">'.$i."&nbsp;".'</a></button> ';
    }
}
 
if ($tranghientai< $tongsotrang && $tongsotrang > 1){
   			echo '<button><a href="QuanLyThongTinHocSinh.php?Ma='.$_GET['Ma'].'&&'.'TenTruong='.$_GET['TenTruong'].'&&'.'Lop='.$_GET['Lop'].'&&'.'page='.($tranghientai+1).'">></a></button>  ';
}
if ($tranghientai< $tongsotrang && $tongsotrang > 2){
   			echo '<button><a href="QuanLyThongTinHocSinh.php?Ma='.$_GET['Ma'].'&&'.'TenTruong='.$_GET['TenTruong'].'&&'.'Lop='.$_GET['Lop'].'&&'.'page='.($tranghientai+2).'">>></a></button>  ';
}	
if ($tranghientai < $tongsotrang - 3){
			 $trangcuoi=$tongsotrang;
   			 echo '<button><a href="QuanLyThongTinHocSinh.php?Ma='.$_GET['Ma'].'&&'.'TenTruong='.$_GET['TenTruong'].'&&'.'Lop='.$_GET['Lop'].'&&'.'page='.$trangcuoi.'">Last</a></button> ';
}
	



?>
</body>
</html>