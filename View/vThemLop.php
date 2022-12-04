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
<?php
ob_start();
if(isset($_POST['submit'])){
	include_once("Controller/cQLTTL.php");
	if(isset($_POST['submit'])){
	$a=$_POST['a'];
	$a = $_GET['TenTruong'];
	$b=ChuyenSangTiengVietKhongDau($a);
	
	if($a==null){
		echo "<script>alert('Thiếu thông tin')</script>";
	}
	else{
	$p=new cQLadht();
	$kq=$p->AddLop();
		if($kq==1){
			echo "<script>alert('Thêm Lớp Học Thành Công')</script>";
			echo header("refresh:0,url='QuanLyThongTinLop.php?Ma=".$_GET['Ma']."&&TenTruong=".$b."'");
			exit;
	
		}
	}
	}
}

ob_end_flush();



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
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <ri>Thêm Mới Lớp Học</ri>
                <center>
                <p></p>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          		<form action="#" method="post" enctype="multipart/form-data">
                	<div class="form-group row">
                    	<label class="col-sm-3"></label>
                        <label class="col-sm-2">Tên Lớp:</label>
                        <input type="text" name="a" size="22"/>
                    </div>
                     <div class="form-group row">
                    	<label class="col-sm-3"></label>
                        <label class="col-sm-2">Tên Khối:</label>
                         <select name="b"> 
                        <?php
                        include_once("Controller/cQLTTL.php");
						$p=new cQLadht();
						$hien=$p->HienKhoi();
						while($cot=mysql_fetch_assoc($hien)){
							?> 
                        	<option value="<?php echo $cot['MaKhoi']?>"><?php echo $cot['TenKhoi'];?></option>
                           <?php
						}
						   ?>
                        </select>
                    </div>
                   
                     <div class="form-group row">
                    	<label class="col-sm-3"></label>
                        <label class="col-sm-2">Tên Trường:</label>
                        <input type="text" value="<?php echo $_GET['TenTruong'];?>" size="22"/>
                         <?php
                        include_once("Controller/cQLTTL.php");
						$p=new cQLadht();
						$hien=$p->XuatTruong();
						$cot=mysql_fetch_assoc($hien);
						?>
                         <input type="hidden" name="c" value="<?php echo $cot['MaTruong'];?>" size="22"/>
                    </div>
                   
                   
                  
                  
                    <div class="form-group row">
                    	<label class="col-sm-4"></label>
                        <label class="col-sm-1"></label>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="submit" name="submit" value="Thêm"/>
                    </div>
                </form>
                 </center>
                </div>
          
        </div>
       
       
        <p></p>
    </div>
</div>
