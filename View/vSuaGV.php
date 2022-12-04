<?php
ob_start();
include_once("Controller/cQLTTGV.php");
$p=new cQLadsystems();
$hienthi=$p->DuLieuSan();
$cot=mysql_fetch_assoc($hienthi);
$a = $_GET['TenTruong'];
$b=ChuyenSangTiengVietKhongDau($a);
if(isset($_POST['submit'])){
	include_once("Controller/cQLTTT.php");
	$p=new cQLadht();
	$hien=$p->XuatTruong();
	$colm=mysql_fetch_assoc($hien);
	$p=new cQLadsystems();
    $p->CapNhatGV();
	?>
    <?php
	echo "<script>alert('Sửa Thông Tin Giáo Viên Thành Công')</script>";
	echo header("refresh:0,url='QuanLyThongTinGiaoVien.php?Ma=".$_GET['Ma']."&&TenTruong=".$b."&&TennQuan=".$colm['TenQuan']."'");
	exit;
	
				}
ob_end_flush();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
function ChuyenSangTiengVietKhongDau($str)
{
$str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|� �|ặ|ẳ|ẵ)/", 'a', $str);
$str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $str);
$str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $str);
$str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|� �|ợ|ở|ỡ)/", 'o', $str);
$str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $str);
$str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $str);
$str = preg_replace("/(đ)/", 'd', $str);
$str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|� �|Ặ|Ẳ|Ẵ)/", 'A', $str);
$str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'E', $str);
$str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'I', $str);
$str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|� �|Ợ|Ở|Ỡ)/", 'O', $str);
$str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'U', $str);
$str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'Y', $str);
$str = preg_replace("/(Đ)/", 'D', $str);
$str = preg_replace("/( )/", '%20', $str);
return $str;
}
?>
<div col-xs-12 col-sm-12 col-md-12 col-lg-12>
	<div class="row">
       <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 h-450">
            
            	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <ri>Sửa Thông Tin Giáo Viên</ri>
                <center>
                <p></p>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          		<form action="#" method="post" enctype="multipart/form-data">
                	<div class="form-group row">
                    	<label class="col-sm-3"></label>
                        <label class="col-sm-2">Tên Giáo Viên:</label>
                        <input type="text" name="a" size="22" value="<?php echo $cot['TenGV']?>"/>
                    </div>
                   
                   <?php
					if($cot['GioiTinh']==0){
						$nam="checked";
					}
					else{
						$nu="checked";
					}
					?>
                    <div class="form-group row">
                    	<label class="col-sm-3"></label>
                        <label class="col-sm-2">Giới tính:</label>
                       	<p><input type="radio" name="b" value="0" <?php echo $nam?>/>&nbsp;&nbsp;
                        <img src="img/iconnam.jpg" height="50px" width="50px"/>
                        <input type="radio" name="b" value="1" <?php echo $nu?>/>&nbsp;&nbsp;
                         <img src="img/iconnu.jpg" height="50px" width="50px"/></p>
                        
                    </div>
                    <div class="form-group row">
                    	<label class="col-sm-3"></label>
                        <label class="col-sm-2">Số Điện Thoại:</label>
                        <input type="text" name="c" size="22" value="<?php echo $cot['SDT']?>"/>
                    </div>
                    <?php
						include_once("Controller/cQLTTGV.php");
						$p=new cQLadsystems();
						$hien=$p->TuDong();
						$coln=mysql_fetch_assoc($hien);
					?>   
                    <div class="form-group row">
                    	<label class="col-sm-3"></label>
                        <label class="col-sm-2">Địa Chỉ:</label>
                        <input type="text" name="d" size="22" value="<?php echo $cot['DiaChi']?>"/>
                    </div>
                    <div class="form-group row">
                    	<label class="col-sm-3"></label>
                        <label class="col-sm-2">Email:</label>
                        <input type="text" name="e" size="22" value="<?php echo $cot['Email']?>"/>
                    </div> 
                     <?php
						include_once("Controller/cQLTTGV.php");
						$p=new cQLadsystems();
						$hien=$p->TuDong();
						$colm=mysql_fetch_assoc($hien);
					?>   
                       <div class="form-group row">
                    	<label class="col-sm-3"></label>
                        <label class="col-sm-2">Tên Trường:</label>
                        <input type="text" size="22" value="<?php echo $colm['TenTruong']?>"/>
                        <input type="hidden" name="f" size="22" value="<?php echo $colm['MaTruong']?>"/>
                    </div> 
                  
                    <div class="form-group row">
                    	<label class="col-sm-4"></label>
                        <label class="col-sm-1"></label>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="submit" name="submit" value="Sửa"/>
                    </div>
                </form>
                 </center>
                </div>
          
        </div>
       
       
        <p></p>
    </div>
</div>

</body>
</html>