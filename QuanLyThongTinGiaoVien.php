<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Quản Lý Thông Tin Giáo Viên</title>
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
	th{
		background-color:#FFC;
		color:#F90;
	}
	v{
		color:#000;
	}
	.rounded-circle{
	background-color:#0FF;
    }
    h3{
		color:#C90;
		font-weight:475;
	}
	h5{
		color:#CC0;
	}
	h6{
		color:#F90;
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
			if(isset($_GET['Ma'])&&isset($_GET['TenTruong'])&&isset($_GET['ThemGV'])){
				include_once("View/vThemGV.php");
				
			}
			elseif(isset($_GET['Ma'])&&isset($_GET['TenTruong'])&&isset($_GET['UpGV'])){
				include_once("View/vSuaGV.php");
			}
			elseif(isset($_GET['Ma'])&&isset($_GET['TenTruong'])&&isset($_GET['DelGV'])){
				include_once("View/vQLTTGV.php");
			}
			else{
		?>
     	<center><h3>Quản Lý Thông Tin Giáo Viên</h3></center>
       
        	<p align="right"><a href="QuanLyThongTinGiaoVien.php?Ma=<?php echo $_GET['Ma']?>&&TenTruong=<?php echo $_GET['TenTruong']?>&&ThemGV&&TenMon="><img src="img/them.jpg" height="60px" width="85px"/></a></p>
        </form>
        	<table class="table table-bordered">
            	<thead>
                	<tr>
                    	
                        <th><center>Tên Giáo Viên</center></th>
                        <th><center>Giới Tính</center></th>
                        <th><center>Số Điện Thoại</center></th>
                        <th><center>Địa chỉ</center></th>
                        <th><center>Email</center></th>
                        <th><center>Sửa</center></th>
                        <th><center>Xóa</center></th>
                    </tr>
                    <tr>
                    <?php 
					if(isset($_GET['Ma'])&&isset($_GET['TenTruong'])){
						include_once("Controller/cQLTTGV.php");
						$p=new cQLadsystems();
						$hienthi=$p->HienGV();
						while($cot=mysql_fetch_assoc($hienthi)){
					?>
                    	<td><center><?php echo $cot['TenGV']?></center></td>
                    	<td><center><?php if($cot['GioiTinh']==1){
							?>
                            <img src="img/iconnu.jpg" height="50px" width="50px"/>
                            <?php
						}
						else{
							?>
                            <img src="img/iconnam.jpg" height="50px" width="50px"/>
                            <?php
						
						}?></center></td>
                         <td><center><?php echo $cot['SDT']?></center></td>
                        <td><center><?php echo $cot['DiaChi']?></center></td>
                        <td><center><?php echo $cot['Email']?></center></td>
                        <td><center><a href="QuanLyThongTinGiaoVien.php?Ma=<?php echo $_GET['Ma']?>&&TenTruong=<?php echo $_GET['TenTruong']?>&&UpGV=<?php echo $cot['MaGV']?>"><img src="img/pc.jpg" height="35px" width="35px"/></a></center></td>
                        <td><center><a href="QuanLyThongTinGiaoVien.php?Ma=<?php echo $_GET['Ma']?>&&TenTruong=<?php echo $_GET['TenTruong']?>&&DelGV=<?php echo $cot['MaGV']?>"><img src="img/rm.jpg" height="35px" width="35px"/></a></center></td>
                    </tr>
                    <?php
						}
					}
					
					?>
                </thead>
            </table>
            <p></p>
            <?php
				include_once("View/vPhanTrangGV.php");
				
			?>
            <center>
            	<?php
				$p=new XuatphantrangGV();
				$p->page2();
				?>
            </center>
           
            <br />
             <?php
				include_once("Controller/cQLTTT.php");
				$p=new cQLadht();
				$hien=$p->Detail();
				$colm=mysql_fetch_assoc($hien);
			?>
            <center><a href="QuanLyThongTinTruong.php?Ma=<?php echo $_GET['Ma'];?>&&TenQuan=<?php echo $colm['TenQuan']?>"><img src="img/tve.png" height="50px" width="50px"></a></center>
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