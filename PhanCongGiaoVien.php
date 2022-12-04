<?php
		ob_start();
		
			include_once("Controller/cPCGV.php");
			$p=new cQLadtruong();
			if(isset($_POST['submit'])){
			$a=$_POST['a'];
			$b=$_POST['b'];
			$c=$_POST['c'];
			$d=$_POST['d'];
			$e=$_POST['e'];
			$f=$_POST['f'];
			$a = $_GET['TenTruong'];
			$b=ChuyenSangTiengVietKhongDau($a);
			if($a==null||$b==null||$c==null||$d==null||$e==null||$f==null)
			{
				echo "<script>alert('Vui lòng chọn đầy đủ thông tin!!!')</script>";
			}
			else{
			$kq=$p->ThemPCGV();
			$kq=$p->ThemDay();
				if($kq==1){
					echo "<script>alert('Đã Phân Công Giáo Viên Thành Công')</script>";
					echo header("refresh:0,url='PhanCongGiaoVien.php?Ma=".$_GET['Ma']."&&TenTruong=".$b."'");
				}
			}
			}
		ob_end_flush();
			
			
			?>
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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<style>
	d{
		color:#C60;
		font-size:25px;
	}
	e{
		color:#F30;
		font-size:15px;
	}
	x{
		color:#F90;
		font-size:32px;
	}
	a{
		color:#F60;
	}
	r{
		color:#F60;
		font-weight:100;
	}
	g{
		color:#990;
	}
	f{
		color:#699;
	}
	v{
		color:#000;
	}
	te{
		color:#090;
		font-size:17px;
	}
	.rounded-circle{
	background-color:#0FF;
    }
    h3{
		color:#0CC;
	}
	h5{
		color:#CC0;
	}
	h6{
		color:#F90;
	}
	th{
		background-color:#9FF;
		color:#F66;
	}
    .header{
	  padding: 10px 16px;
    }
    .content {
  padding: 16px;
    }
   .sticky {
  position:fixed;
  top: 0px;
  padding-top:15px;
  left:129px;
  width:83%;
  height:120px;
  z-index:1;
  background-color:rgba(255,255,255,1);
  box-shadow:0.1px 0.1px 0.1px yellow;
   }
</style>
</head>
<body>
<div class="container h-600 w-100 border">
	<div class="row">
    <div class="row header"  id="codinh" >
    	<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 h-200">
        	<center></center>
            <center><h5>F℧NST℧DY</h5><img src="img/lg.jpg" width="150px" height="75px" /></center>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 h-200 m-1">
        	<img src="img/bner.jpg" width="350px" height=100px"  />
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 h-200 m-1">
        	<img src="img/banner.jpg" width="530px" height=100px"  />
        </div>
    </div>
    </div>
    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 h-150 border">
    	 <p></p>
        	<?php
				include_once("Controller/cTK(AD).php");
				$p=new cTKad();
				$hien=$p->info();
				$cot=mysql_fetch_assoc($hien);
					 	echo "<center>";?>
						<img src="<?php echo "img/".$cot['Anh']; ?>" height="50px" width="50px" class="rounded-circle">
						<?php echo "</center>";?>
                        <center>
                        <p></p>
                        <?php
							echo "<te>".$cot['TenAD']."</te>";
						?>
                        <p></p>
                        </center>
                 
    </div>
    <br />
    <br />
   
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
       <div class="row">
    		<div class="col-12">
               <center><x class="text-center">Phân công giáo viên</x></center>
               <br />
            </div>
        </div>
        <div class="row">
            <div class="col-4 border ">
            <p></p>
                <h5 class="text-center">Nhập thông tin</h5>
            <p></p>
            
            	 <form action="#" method="post">
                 <div class="row form-group">
                        <label class="col-3" for="">Khối:</label>
                        <div class="col-9">
                            <select name="k"  class="form-control" onchange="window.location.href=this.value;">
                            <option>
                            <?php
								if(isset($_GET['Ma'])&&isset($_GET['TenTruong'])){
									echo $_GET['TenKhoi'];
								}
								else{
									echo "Vui lòng chọn";
								}
								?>
                            </option>
                                <?php
									include_once("Controller/cPCGV.php");
									$p=new cQLadtruong();
									$hien=$p->XuatKhoi();
									while($cot=mysql_fetch_assoc($hien)){
										?>
                                         
                                        	<option value="PhanCongGiaoVien.php?Ma=<?php echo $_GET['Ma']?>&&TenTruong=<?php echo $_GET['TenTruong']?>&&TenKhoi=<?php echo $cot['TenKhoi']?>"><?php echo $cot['TenKhoi'];?></option>
                                        <?php
									}
								?>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <label class="col-3" for="">Lớp:</label>
                        <div class="col-9">
                            <select name="a"  class="form-control" onchange="window.location.href=this.value;">
                            <option>
                            <?php
								if(isset($_GET['Ma'])&&isset($_GET['TenTruong'])&&isset($_GET['TenKhoi'])){
									echo $_GET['TenLop'];
								}
								else{
									echo "Vui lòng chọn";
								}
								?>
                            </option>
                                <?php
									include_once("Controller/cPCGV.php");
									$p=new cQLadtruong();
									$hien=$p->HienLop();
									$hienthi=$p->HienMaLop();
									$com=mysql_fetch_assoc($hienthi);
									while($cot=mysql_fetch_assoc($hien)){
										?>
                                         
                                        	<option value="PhanCongGiaoVien.php?Ma=<?php echo $_GET['Ma']?>&&TenTruong=<?php echo $_GET['TenTruong']?>&&TenKhoi=<?php echo $_GET['TenKhoi']?>&&TenLop=<?php echo $cot['TenLop']?>"><?php echo $cot['TenLop'];?></option>
                                        <?php
									}
								?>
                            </select>
                            <input type="hidden" name="d" value="<?php echo $com['MaLop']?>"/>
                        </div>
                    </div>
                    <div class="row form-group">
                        <label for="" class="col-3">Môn học:</label>
                        <div class="col-9">
                            <select name="b" class="form-control" onchange="window.location.href=this.value;">
                             <option>
                            <?php
								if(isset($_GET['Ma'])&&isset($_GET['TenTruong'])&&isset($_GET['TenKhoi'])&&isset($_GET['TenLop'])){
									echo $_GET['TenMonHoc']."&nbsp;".$_GET['TenKhoi'];
								}
								else{
									echo "Vui lòng chọn";
								}
								?>
                            </option>
                            <?php
								include_once("Controller/cPCGV.php");
								$p=new cQLadtruong();
								$hien=$p->HienMon();
								$hienthi=$p->HienMaMon();
								$con=mysql_fetch_assoc($hienthi);
								while($cot=mysql_fetch_assoc($hien)){
							?>
                            	<option value="PhanCongGiaoVien.php?Ma=<?php echo $_GET['Ma']?>&&TenTruong=<?php echo $_GET['TenTruong']?>&&TenKhoi=<?php echo $_GET['TenKhoi']?>&&TenLop=<?php  echo $_GET['TenLop']?>&&TenMonHoc=<?php echo $cot['TenMonHoc']?>"><?php echo $cot['TenMonHoc']?>&nbsp;<?php echo $_GET['TenKhoi']?></option>
                               <?php
								}
							   ?>
                            </select>
                             <input type="hidden" name="e" value="<?php echo $con['MaMonHoc']?>"/>
                        </div>
                    </div>
                    <div class="row form-group">
                        <label for="" class="col-3">Giáo viên:</label>
                        <div class="col-9">
                            <select  name="c" class="form-control" onchange="window.location.href=this.value;">
                             <option>
                            <?php
								if(isset($_GET['Ma'])&&isset($_GET['TenTruong'])&&isset($_GET['TenKhoi'])&&isset($_GET['TenLop'])&&isset($_GET['TenMonHoc'])&&isset($_GET['TenGV'])){
									echo $_GET['TenGV'];
								}
								else{
									echo "Vui lòng chọn";
								}
								?>
                             </option>
                                <?php
									include_once("Controller/cPCGV.php");
									$p=new cQLadtruong();
									$hien=$p->HienGV();
									$hient=$p->HienMaGV();
									$coms=mysql_fetch_assoc($hient);
									while($cot=mysql_fetch_assoc($hien)){
										?>
                                        	<option value="PhanCongGiaoVien.php?Ma=<?php echo $_GET['Ma']?>&&TenTruong=<?php echo $_GET['TenTruong']?>&&TenKhoi=<?php echo $_GET['TenKhoi']?>&&TenLop=<?php echo $_GET['TenLop']?>&&TenMonHoc=<?php echo $_GET['TenMonHoc']?>&&TenGV=<?php echo $cot['TenGV']?>"><?php echo $cot['TenGV']?></option>
                                        <?php
									}
									
								?>
                                
                            </select>
                         <input type="hidden" name="f" value="<?php echo $coms['MaGV']?>"/>
                                    
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-6">

                        </div>
                        <div class="col-6">
                            <input type="submit" name="submit" value="Lưu"  class="btn btn-primary"/>
                        </div>
                    </div>
                 </form>
            </div>
            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 border">
            <p></p>
            <h5 class="text-center">Danh Sách Phân Công Giáo Viên</h5>
            <p></p>
                <table class="table table-bordered">
                	<thead>
                    <tr class="text-center">
                        <th><center>STT</center></th>
                        <th><center>Lớp</center></th>
                        <th><center>Môn học</center></th>
                        <th><center>Giáo viên</center></th>
                    </tr>
                    <?php
						include_once("Controller/cPCGV.php");
						$p=new cQLadtruong();
						$appear=$p->Xem();
						while($cot=mysql_fetch_assoc($appear)){
					?>
                    <tr>
                        <td><center><?php echo $cot['MaPhanCong']?></center></td>
                        <td><center><?php  echo $cot['TenLop']?></center></td>
                        <td><center><?php  echo $cot['TenMonHoc']?></center></td>
                        <td><center><?php echo $cot['TenGV']?></center></td>
                    </tr>
                      <?php
						}
				?>
                    </thead>
                </table>
                   
              
                <div class="row form-group">
                    <div class="col-6">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="home(AD).php?Ma=<?php echo $_GET['Ma'] ?>"><button type="button"  class="btn btn-primary xacnhan">Xác nhận</button></a>
                    </div>
                    <div class="col-6">
                         <a href="home(AD).php?Ma=<?php echo $_GET['Ma'] ?>"><button type="button"  class="btn btn-outline-primary">Thoát</button></a>
                    </div>
                </div>
            </div>
       </div>
       <br />
    </div>
    <br />
    <br />
    <br />
    <br />
     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border">
     	<div class="row">
        	<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <center><img src="img/on.png" width="100" height="100"/><center></center>
                </center><center><p>Chào mừng Admin trường đến với <p/><p>giao diện học trực tuyến.</p></center>
            
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <center><img src="img/lk.jpg" width="100" height="100"/><center></center>
                </center><center><a href="#">Hỗ trợ</a><p></p></center>
                </center><center><a href="#">Khác</a><p></p></center>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <center><img src="img/dt.gif" width="75" height="75"/><center></center><p></p>
                </center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Phone:0325.927.6xx<p></p>
                </center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;Email:abc@gmail.com
                
            
            </div>
        </div>
    	
    </div>
  </div>
</div>
<script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("codinh");

var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>