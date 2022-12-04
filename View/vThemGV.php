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
	include_once("Controller/cQLTTGV.php");
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
	if(!preg_match("/^[a-zA-Z\\sàáạã_-]{3,25}/",$ten)){
		echo "<script>alert('Họ và tên chưa đúng')</script>";
	}
	if(!preg_match("/\d{9,10}/",$c)){
		echo "<script>alert('Số điện thoại phải từ 9-10 số')</script>";
	}
	if(!preg_match("/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})/",$e)){
		echo "<script>alert('Email không đúng định dạng')</script>";
	}
	
	else{
	include_once("Controller/cQLTTT.php");
	$p=new cQLadht();
	$hien=$p->XuatTruong();
	$colm=mysql_fetch_assoc($hien);
	$p=new cQLadsystems();
	$kq=$p->ThemGV();
		if($kq==1){
			echo "<script>alert('Thêm Mới Giáo Viên Thành Công')</script>";
			echo header("refresh:0,url='QuanLyThongTinGiaoVien.php?Ma=".$_GET['Ma']."&&TenTruong=".$b."&&TenQuan=".$colm['TenQuan']."'");
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
                <ri>Thêm Giáo Viên</ri>
                <center>
                <p></p>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          		<form action="#" method="post" enctype="multipart/form-data">
                	<div class="form-group row">
                    	<label class="col-sm-3"></label>
                        <label class="col-sm-2">Tên Giáo Viên:</label>
                        <input type="text" name="a" size="22" placeholder="NGUYỄN G V"/>
                    </div>
                   
                    <div class="form-group row">
                    	<label class="col-sm-3"></label>
                        <label class="col-sm-2">Giới Tính:</label>
                        <select name="b">
                        	<option value="0">Nam</option>
                            <option value="1">Nữ</option>
                        </select>
                    </div>
                    <div class="form-group row">
                    	<label class="col-sm-3"></label>
                        <label class="col-sm-2">Số Điện Thoại:</label>
                        <input type="text" name="c" size="22" placeholder="0-9 gồm 9-10 số"/>
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
                        <input type="text" name="d" size="22" placeholder="Số A,<?php echo $coln['TenQuan']?>,TP.HCM"/>
                    </div>
                    <div class="form-group row">
                    	<label class="col-sm-3"></label>
                        <label class="col-sm-2">Email:</label>
                        <input type="text" name="e" size="22" placeholder="xx@gmail.com"/>
                    </div> 
                    <?php
						include_once("Controller/cQLTTGV.php"); 
						$p=new cQLadsystems();
						$mon=$p->Mon();
						$mamon=$p->MaMon();
						$cum=mysql_fetch_assoc($mamon);
					?>
                    <div class="form-group row">
                    	<label class="col-sm-3"></label>
                        <label class="col-sm-2">Môn Giảng Dạy:</label>
                        <select onchange="window.location.href=this.value;">
                        <option>
                            <?php
								if(isset($_GET['Ma'])&&isset($_GET['TenTruong'])&&isset($_GET['TenMon'])){
									echo $_GET['TenMon'];
								}
								else{
									echo "Vui lòng chọn";
								}
								?>
                            </option>
                        <?php
							while($cl=mysql_fetch_assoc($mon)){
						?>
                        	<option value="QuanLyThongTinGiaoVien.php?Ma=<?php echo $_GET['Ma']?>&&TenTruong=<?php echo $_GET['TenTruong']?>&&ThemGV&&TenMon=<?php echo $cl['TenMonHoc']?>"><?php echo $cl['TenMonHoc']?></option>
                        <?php 
							}
						?>
                        </select>
                    </div>
                    <input type="hidden" name="x" value="<?php echo $cum['MaMonHoc']?>"/> 
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
                        <input type="submit" name="submit" value="Thêm"/>
                    </div>
                </form>
                 </center>
                </div>
          
        </div>
       
       
        <p></p>
    </div>
</div>
