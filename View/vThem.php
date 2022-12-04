<?php
ob_start();
if(isset($_POST['submit'])){
	include_once("Controller/cQLTTT.php");
	if(isset($_POST['submit'])){
	$a=$_POST['a'];
	$ten=$_POST['a'];
	$b=$_POST['b'];
	$c=$_POST['c'];
	$d=$_POST['d'];
	$f=$_POST['f'];
	$g=$_POST['g'];
	
	if($a==null||$b==null||$c==null||$d==null||$f==null||$g==null){
		echo "<script>alert('Thiếu thông tin')</script>";
	}
	if(!preg_match("/^[a-zA-Z\\sàáạã_-]{3,25}/",$ten)){
		echo "<script>alert('Tên trường chưa đúng')</script>";
	}
	if(!preg_match("/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})/",$c)){
		echo "<script>alert('Email không đúng định dạng')</script>";
	}
	if(!preg_match("/\d{9,10}/",$d)){
		echo "<script>alert('Số điện thoại phải từ 9-10 số')</script>";
	}
	else{
	$p=new cQLadht();
	$kq=$p->ThemTruong();
	if($kq==1){
				echo "<script>alert('Thêm Trường Học Thành Công')</script>";
				echo header("refresh:0,url='QuanLyThongTinTruong.php?Ma=".$_GET['Ma']."");
			}
	else{
			if($kq == 0){
				echo "<script>alert('Không Thể Chèn')</script>";
			}elseif($kq == -1){
				echo "<script>alert('Không Thể Upload')</script>";
			}elseif($kq == -2){
				echo "<script>alert('Size <= 2MB')</script>";
			}elseif($kq == -3){
				echo "<script>alert('Không Đúng Định Dạng File')</script>";
			}else{
				echo "<script>alert('Lỗi Gì Đó')</script>";
			}
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
                &nbsp;&nbsp;&nbsp;&nbsp;<ri>Thêm Trường Mới</ri>
                <center>
                <p></p>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          		<form action="#" method="post" enctype="multipart/form-data">
                	<div class="form-group row">
                    	<label class="col-sm-3"></label>
                        <label class="col-sm-2">Tên Trường Học:</label>
                        <input type="text" name="a" size="22" placeholder="THCS HÙNG VƯƠNG"/>
                    </div>
                    <div class="form-group row">
                    	<label class="col-sm-3"></label>
                        <label class="col-sm-2">Địa Chỉ:</label>
                        <input type="text" name="b" size="22"/>
                    </div>
                     <div class="form-group row">
                    	<label class="col-sm-3"></label>
                        <label class="col-sm-2">Email:</label>
                        <input type="text" name="c" size="22" placeholder="hv@edu.vn"/>
                    </div>
                    <div class="form-group row">
                    	<label class="col-sm-3"></label>
                        <label class="col-sm-2">Số Điện Thoại:</label>
                        <input type="text" name="d" size="22" placeholder="0xxxxxxxxx(x)"/>
                    </div>
                    <div class="form-group row">
                    	<label class="col-sm-3"></label>
                        <label class="col-sm-2">Ảnh:</label>
                        <input type="file" name="e"/>
                    </div>
                    <div class="form-group row">
                    	<label class="col-sm-3"></label>
                        <label class="col-sm-2">Năm Thành Lập:</label>
                        <?php
							 $ngay=getdate();
    						 $nam=$ngay["year"];
						?>
                        <select name="f" size="1">
                       		<?php for($i=1950;$i<=$nam;$i++){
        							echo"<option value=$i>$i</option>";
							 }
							 ?>
                        </select>
                    </div>
                    <div class="form-group row">
                    	<label class="col-sm-3"></label>
                        <label class="col-sm-2">Quận/Huyện:</label>
                        <select name="g">
                        	<?php
							include_once("Controller/cQLTTT.php");
							$p=new cQLadht();
							$data=$p->XuatQuan();
							while($cot=mysql_fetch_assoc($data)){
								echo "<option value='".$cot['MaQuan']."'>".$cot['TenQuan']."</option>";
							}
							
							?>
                        </select>
                    </div>
                   
                  
                  
                    <div class="form-group row">
                    	<label class="col-sm-4"></label>
                        <label class="col-sm-1"></label>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;<input type="submit" name="submit" value="Thêm"/>
                    </div>
                </form>
                 </center>
                </div>
          
        </div>
        
    </div>
</div>
