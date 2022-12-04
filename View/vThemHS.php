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
	include_once("Controller/cQLTTHS.php");
	if(isset($_POST['submit'])){
	$a=$_POST['a'];
	$ten=$_POST['a'];
	$b=$_POST['b'];
	$c=$_POST['c'];
	$d=$_POST['d'];
	$e=$_POST['e'];
	$f=$_POST['f'];
	$a = $_GET['TenTruong'];
	$b=ChuyenSangTiengVietKhongDau($a);
	
	if($a==null||$b==null||$c==null||$d==null||$e==null||$f==null){
		echo "<script>alert('Thiếu thông tin')</script>";
	}
	if(!preg_match("/^[A-Za-z\\sàáạã_-]{3,25}/",$ten)){
		echo "<script>alert('Họ và tên chưa đúng')</script>";
	}
	if(!preg_match("/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})/",$e)){
		echo "<script>alert('Email không đúng định dạng')</script>";
	}
	else{
	$p=new cQLadsys();
	$kq=$p->ChenHS();
		if($kq==1){
			echo "<script>alert('Thêm Mới Học Sinh Thành Công')</script>";
			echo header("refresh:0,url='QuanLyThongTinHocSinh.php?Ma=".$_GET['Ma']."&&TenTruong=".$b."&&Lop=".$_GET['Lop']."'");
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
                <ri>Thêm Học Sinh</ri>
                <center>
                <p></p>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          		<form action="#" method="post" enctype="multipart/form-data">
                	<div class="form-group row">
                    	<label class="col-sm-3"></label>
                        <label class="col-sm-2">Tên Học Sinh:</label>
                        <input type="text" name="a" size="22" placeholder="NGUYỄN A B"/>
                    </div>
                     <div class="form-group row">
                    	<label class="col-sm-3"></label>
                        <label class="col-sm-2">Ngày Sinh:</label>
                        <input type="date" name="b" size="22"/>
                    </div>
                   
                    <div class="form-group row">
                    	<label class="col-sm-3"></label>
                        <label class="col-sm-2">Giới Tính:</label>
                        <select name="c">
                        	<option value="0">Nam</option>
                            <option value="1">Nữ</option>
                        </select>
                    </div>
                    <?php
						include_once("Controller/cQLTTHS.php");
						$p=new cQLadsys();
						$hien=$p->TuDong();
						$coln=mysql_fetch_assoc($hien);
					?>
                    <div class="form-group row">
                    	<label class="col-sm-3"></label>
                        <label class="col-sm-2">Địa Chỉ:</label>
                        <input type="text" name="d" size="22" placeholder="Số ABC,<?php echo $coln['TenQuan'] ?>,TP.HCM"/>
                    </div>
                    <div class="form-group row">
                    	<label class="col-sm-3"></label>
                        <label class="col-sm-2">Email:</label>
                        <input type="text" name="e" size="22" placeholder="xyz@gmail.com"/>
                    </div>
                    <div class="form-group row">
                    	<label class="col-sm-3"></label>
                        <label class="col-sm-2">Tên Lớp:</label>
                        <input type="text" size="22" value="<?php echo $coln['TenLop']?>" disabled="disabled"/>
                        <input type="hidden" name="f" size="22" value="<?php echo $coln['MaLop']?>"/>
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
