<?php
ob_start();

include_once("Controller/cQLTTT.php");
$p=new cQLadht;
$qr=$p->laydulieucosan();
$cot=mysql_fetch_assoc($qr);
if(isset($_POST['submit'])){
$a=$_POST['a'];
$b=$_POST['b'];
$c=$_POST['c'];
$d=$_POST['d'];
if($a==Null||$b==Null||$c==Null||$d==Null){
	echo "<script>alert('Thiếu thông tin!!!')</script>";
}
elseif($a!=Null||$b!=Null||$c!=Null||$d!=Null){
	$p=new cQLadht;
    $p->UpDateTruong();
	echo "<script>alert('Sửa Thông Tin Trường Học Thành Công')</script>";
	echo header("refresh:0,url='QuanLyThongTinTruong.php?Ma=".$_GET['Ma']."");
	
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
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                
                <ri>Sửa Thông Tin Trường Học</ri>
                <center>
                <p></p>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          		<form action="#" method="post" enctype="multipart/form-data">
                	<div class="form-group row">
                    	<label class="col-sm-3"></label>
                        <label class="col-sm-2">Mã Trường:</label>
                        <input type="text" name="o" value="<?php echo $cot['MaTruong']?>" size="22"/>
                    </div>
                	<div class="form-group row">
                    	<label class="col-sm-3"></label>
                        <label class="col-sm-2">Tên Trường Học:</label>
                        <input type="text" name="a" value="<?php echo $cot['TenTruong']?>" size="22"/>
                    </div>
                    <div class="form-group row">
                    	<label class="col-sm-3"></label>
                        <label class="col-sm-2">Địa Chỉ:</label>
                        <input type="text" name="b"  value="<?php echo $cot['DiaChi']?>" size="22"/>
                    </div>
                     <div class="form-group row">
                    	<label class="col-sm-3"></label>
                        <label class="col-sm-2">Email:</label>
                        <input type="text" name="c"  value="<?php echo $cot['Email']?>" size="22"/>
                    </div>
                    <div class="form-group row">
                    	<label class="col-sm-3"></label>
                        <label class="col-sm-2">Số Điện Thoại:</label>
                        <input type="text" name="d"  value="<?php echo $cot['SDT']?>" size="22"/>
                    </div>
                    <div class="form-group row">
                    	<label class="col-sm-3"></label>
                        <label class="col-sm-2">Ảnh:</label>
                        <img src='img/<?php echo $cot['Anh']?>' height="100px" width="100px"/>
                        <input type="hidden" name="k" value="<?php echo $cot['Anh']?>"/>
                    </div>
                    <div class="form-group row">
                    	<label class="col-sm-3"></label>
                        <label class="col-sm-2">File Ảnh:</label>
                        <input type="file" name="e"/>
                    </div>
                    <div class="form-group row">
                    	<label class="col-sm-3"></label>
                        <label class="col-sm-2">Năm Thành Lập:</label>
                        <?php
							 $ngay=getdate();
    						 $nam=$ngay["year"];
						?>
                        <input type="text" name="l" value="<?php echo $cot['NamHoatDong']?>" disabled="disabled" size="2" >
                          &nbsp;&nbsp;
                        <select name="f" size="1">
                       		<?php for($i=1950;$i<=$nam;$i++){
									?>
                                    <?php
        							echo"<option value=$i>$i</option>";
							 }
							 ?>
                        </select>
                      
                        
                    </div>
                    <div class="form-group row">
                    	<label class="col-sm-3"></label>
                        <label class="col-sm-2">Quận/Huyện:</label>
                         
                        <input type="text" name="u" value="<?php echo $cot['TenQuan']?>" disabled="disabled" size="10" >
                        &nbsp;&nbsp;
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
                        &nbsp;<input type="submit" name="submit" value="Sửa"/>
                    </div>
                </form>
                 </center>
                </div>
                
          
        </div>
        
    </div>
</div>
