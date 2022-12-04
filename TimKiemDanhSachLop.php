<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tìm Kiếm Danh Sách Lớp</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<style>
	th{
		background-color:#FFC;
		color:#C60;
	}
	te{
		color:#F90;
		font-size:16px;
	}
	d{
		color:#C60;
		font-size:25px;
	}
	e{
		color:#F30;
		font-size:15px;
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
	pr{
		color:#F30;
		font-weight:300;
		font-size:20px;
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
		color:#FC3;
		font-weight:450;
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
<div class="container h-600 border">
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
                        <p></p>
                        <?php
							echo "<te>".$cot['TenADHT']."</te>";
						?>
                        <p></p>
                        </center>
                 
        </div>
    </div>
    <p></p>
    <br />
    	<div class="col-sm-12">
        	<center><h3>TÌM KIẾM DANH SÁCH LỚP</h3></center>
            <br />
            <center>
        	<form action="get" method="#">
            	<pr>Tên Trường:</pr>&nbsp;&nbsp;<select name="a" onchange="window.location.href=this.value;" >
                 <option value="#"><?php 
			if(isset($_GET['TenTruong'])){
					echo $_GET['TenTruong'];
					}
			else{
					echo "Vui lòng chọn";
			}
				
		?></option>
                 <?php 
				include_once("Controller/cTKDSL.php");
				$p=new cad();
				$hien=$p->XuatTruong();
				while($cot=mysql_fetch_assoc($hien)){
					?>
                	<option value="TimKiemDanhSachLop.php?Ma=<?php echo $_GET['Ma']?>&&TenTruong=<?php echo $cot['TenTruong']?>">
                    <?php echo $cot['TenTruong']?></option>
                    <?php 
				}
				?>
                </select>&nbsp;&nbsp;
                <pr>Tên Khối:</pr>&nbsp;&nbsp;<select name="b" onchange="window.location.href=this.value;">
                 <option value="#"><?php 
			if(isset($_GET['TenKhoi'])){
					echo $_GET['TenKhoi'];
					}
			else{
					echo "Vui lòng chọn";
			}
				
		?></option>
         <?php 
				include_once("Controller/cTKDSL.php");
				$p=new cad();
				$hien=$p->XuatKhoi();
				while($cot=mysql_fetch_assoc($hien)){
					?>
                	<option value="TimKiemDanhSachLop.php?Ma=<?php echo $_GET['Ma']?>&&TenTruong=<?php echo $_GET['TenTruong']?>&&TenKhoi=<?php 
					echo $cot['TenKhoi']?>"><?php 
					echo $cot['TenKhoi']?></option>
                    <?php
				}
				?>
                </select>&nbsp;&nbsp;
                <pr>Lớp:</pr>&nbsp;&nbsp;<select name="c"  onchange="window.location.href=this.value;">
                  <option value="#"><?php 
			if(isset($_GET['TenLop'])){
					echo $_GET['TenLop'];
					}
			else{
					echo "Vui lòng chọn";
			}
				
		?></option>
         <?php 
				include_once("Controller/cTKDSL.php");
				$p=new cad();
				$hien=$p->XuatLop();
				while($cot=mysql_fetch_assoc($hien)){
					?>
                	<option value="TimKiemDanhSachLop.php?Ma=<?php echo $_GET['Ma']?>&&TenTruong=<?php echo $_GET['TenTruong']?>&&TenKhoi=<?php 
					echo $_GET['TenKhoi']?>&&TenLop=<?php echo $cot['TenLop']?>"><?php echo $cot['TenLop']?></option>
                    <?php
				}
					?>
                </select>
            </form>
           <center>
           <?php
		   		 if(isset($_GET['TenTruong'])&&isset($_GET['TenKhoi'])&&isset($_GET['TenLop'])){
					
           ?>
           <br />
           <p></p>
            <table class="table table-bordered">
               <tr>
                <th><center>Mã Học Sinh</center></th>
                <th><center>Tên Học Sinh</center></th>
                <th><center>Ngày Sinh</center></th>
                <th><center>Địa Chỉ</center></th>
                <th><center>Email</center></th>
               </tr>
               <?php 
				include_once("Controller/cTKDSL.php");
				$p=new cad();
				$hien=$p->XuatDanhSach();
				while($col=mysql_fetch_assoc($hien)){
				?>
               <tr>
               				<td><center><?php echo $col['MaHS']?></center></td>
                            <td><center><?php echo $col['TenHS']?></center></td>
                            <td><center><?php echo $col['NgaySinh']?></center></td>
                            <td><center><?php echo $col['DiaChi']?></center></td>
                            <td><center><?php echo $col['Email']?></center></td>
                            
                <?php
				}
			   }
			   else{
				   echo "<br/>";
				   echo "Chưa tìm thấy danh sách học sinh theo lớp!!!";
			   }
				?>
                    
               </tr>
            </table>
           </center>
            </center>
        </div>
        <br/>
        	<center><a href="home(ADHT).php?Ma=<?php echo $_GET['Ma']?>"><img src="img/tve.png" height="50px" width="50px"/></a></center>
        <br/>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border">
     	<div class="row">
        	<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <center><img src="img/on.png" width="100" height="100"/><center></center>
                </center><center><p>Chào mừng Admin Hệ Thống đến với <p/><p>giao diện học trực tuyến.</p></center>
            
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
</body>
</html>
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