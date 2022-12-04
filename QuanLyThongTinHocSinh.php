<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Quản Lý Thông Tin Học Sinh</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<style>
	button:hover{
	background-color:#FF9;
	}
	d{
		color:#C60;
		font-size:25px;
	}
	ri{
		color:#F93;
		font-family:"Comic Sans MS", cursive;
		font-size:25px;
	}
	gh{
		color:#F33;
		font-size:20px;
	}
	input:disabled{
		background-color:#FFF;
		color:#000;
		border-top-color:#000;
		border-top-width:1px;
		border-left-color:#000;
		border-left-width:1px;
		border-right-color:#000;
		border-right-width:1px;
		border-bottom-color:#000;
		border-bottom-width:1px;
		
		
	}
	e{
		color:#F30;
		font-size:15px;
	}
	k{
		color:#FC0;
		font-size:25px;
	}
	sd{
		color:#06F;
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
	.rounded-circle{
	background-color:#0FF;
    }
    h3{
		color:#CC9;
	}
	h5{
		color:#CC0;
	}
	h6{
		color:#F90;
	}
	th{
		background-color:#FF9;
		color:#99F;
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
    <div class="row">
    	<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 h-100 border m-2">
        <p></p>
        <?php
        include_once("Controller/cTK(ADHT).php");
				$p=new cTKadht();
				$hien=$p->infoad();
				$cot=mysql_fetch_assoc($hien);
					 	echo "<center>";?>
						<img src="<?php echo "img/".$cot['Anh']; ?>" height="50px" width="50px" class="rounded-circle">
						<?php echo "</center>";?>
                        <center>
                        <?php
							echo $cot['MaTK'];
						?>
                        </center>
        
        <br />
        </div>
        
     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
     	<div class="row">
        	<div class="col-sm-0 col-xs-0 col-md-0 col-lg-0">
            </div>
            <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12">
     <?php
			if(isset($_GET['Ma'])&&isset($_GET['TenTruong'])&&isset($_GET['Lop'])&&isset($_GET['ThemHS'])){
				include_once("View/vThemHS.php");
				
			}
			elseif(isset($_GET['Ma'])&&isset($_GET['TenTruong'])&&isset($_GET['Lop'])&&isset($_GET['UpHS'])){
				include_once("View/vSuaHS.php");
			}
			elseif(isset($_GET['Ma'])&&isset($_GET['TenTruong'])&&isset($_GET['Lop'])&&isset($_GET['DelHS'])){
				include_once("View/vQLTTHS.php");
			}
			else{
		?>
     	<center><h3>Quản Lý Thông Tin Học Sinh</h3></center>
       
        	<p align="right"><a href="QuanLyThongTinHocSinh.php?Ma=<?php echo $_GET['Ma']?>&&TenTruong=<?php echo $_GET['TenTruong']?>&&Lop=<?php echo $_GET['Lop']?>&&ThemHS"><img src="img/them.jpg" height="60px" width="85px"/></a></p>
        </form>
        	<table class="table table-bordered">
            	<thead>
                	<tr>
                    	
                        <th><center>Tên Học Sinh</center></th>
                        <th><center>Giới Tính</center></th>
                        <th><center>Ngày Sinh</center></th>
                        <th><center>Địa Chỉ</center></th>
                        <th><center>Email</center></th>
                        <th><center>Sửa</center></th>
                        <th><center>Xóa</center></th>
                    </tr>
                    <tr>
                    <?php 
					if(isset($_GET['Ma'])&&isset($_GET['TenTruong'])&&isset($_GET['Lop'])){
						include_once("Controller/cQLTTHS.php");
						$p=new cQLadsys();
						$hienthi=$p->HienHS();
						while($col=mysql_fetch_assoc($hienthi)){
					?>
                    	<td><center><?php echo $col['TenHS']?></center></td>
                    	<td><center><?php if($col['GioiTinh']==1){
							?>
                            <img src="img/iconnu.jpg" height="50px" width="50px"/>
                            <?php
						}
						else{
							?>
                            <img src="img/iconnam.jpg" height="50px" width="50px"/>
                            <?php
						
						}?></center></td>
                        <td><center><?php echo $col['NgaySinh']?></center></td>
                        <td><center><?php echo $col['DiaChi']?></center></td>
                        <td><center><?php echo $col['Email']?></center></td>
                        <td><center><a href="QuanLyThongTinHocSinh.php?Ma=<?php echo $_GET['Ma']?>&&TenTruong=<?php echo $_GET['TenTruong']?>&&Lop=<?php echo $_GET['Lop']?>&&UpHS=<?php echo $col['MaHS']?>"><img src="img/pc.jpg" height="35px" width="35px"/></a></center></td>
                        <td><center><a href="QuanLyThongTinHocSinh.php?Ma=<?php echo $_GET['Ma']?>&&TenTruong=<?php echo $_GET['TenTruong']?>&&Lop=<?php echo $_GET['Lop']?>&&DelHS=<?php echo $col['MaHS']?>"><img src="img/rm.jpg" height="35px" width="35px"/></a></center></td>
                    </tr>
                    <?php
						}
					}
					
					?>
                </thead>
            </table>
            <p></p>
            <?php
				include_once("View/vPhanTrangHS.php");
				
			?>
            <center>
            	<?php
				$p=new XuatphantrangHS();
				$p->page1();
				?>
            </center>
           
            <br />
            <?php
				include_once("Controller/cQLTTHS.php");
				$p=new cQLadsys();
				$hien=$p->HienHS();
				$colm=mysql_fetch_assoc($hien);
			?>
            <center><a href="QuanLyThongTinLop.php?Ma=<?php echo $_GET['Ma'];?>&&TenTruong=<?php echo $_GET['TenTruong']?>"><img src="img/tve.png" height="50px" width="50px"></a></center>
            </div>
            <div class="col-xs-0 col-sm-0 col-md-0 col-lg-0">
            </div>
           </div>
     	
     </div>
     </div>
     <?php
			}
	 ?>
     <br />
     <br />
     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border">
     	<div class="row">
        	<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <center><img src="img/on.png" width="100" height="100"/><center></center>
                </center><center><p>Chào mừng Admin Systems đến với quản trị hệ thống giao diện học trực tuyến.</p></center>
            
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <center><img src="img/lk.jpg" width="100" height="100"/><center></center>
                </center><center><a href="#">Hỗ trợ</a><p></p></center>
                </center><center><a href="#">Khác</a><p></p></center>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <center><img src="img/dt.gif" width="75" height="75"/><center></center><p></p>
                </center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;Phone:0325.927.6xx<p></p>
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