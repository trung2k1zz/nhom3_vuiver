<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Quản Lý Thông Tin Trường</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<style>
	th{
		background-color:#FFC;
		color:#9C0;
	}
	te{
		color:#F90;
		font-size:16px;
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
		color:#9C0;
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
                        <p></p>
                        <?php
							echo "<te>".$cot['TenADHT']."</te>";
						?>
                        
                        </center>
        
        <br />
        </div>
        
     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
     <?php
			if(isset($_GET['Ma'])&&isset($_GET['Add'])){
				include_once("View/vThem.php");
				
			}
			elseif(isset($_GET['Ma'])&&isset($_GET['del'])){
				include_once("View/vQLTTT.php");
			}
			elseif(isset($_GET['Ma'])&&isset($_GET['up'])){
				include_once("View/vSua.php");
			}
			else{
		?>
     	<center><h3>Quản Lý Thông Tin Trường</h3></center>
        <br />
        <p></p>
        <?php
		include_once("Controller/cQLTTT.php");
		$p=new cQLadht();
		$hien=$p->Xuat();
		$cot=mysql_fetch_assoc($hien);
		$hienthi=$p->XuatQuan();
		?>
        <form action="#" method="get">
        <center><p>Thành Phố:&nbsp;&nbsp;<ds><input type="text" value="<?php echo $cot['TenTP'];?>" size="12"
         disabled="True"/></ds>&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Quận/Huyện:&nbsp;&nbsp;<select name="q" id="" size="1" onchange="window.location.href=this.value;">
        <option value="#"><?php 
			if(isset($_GET['TenQuan'])){
					echo $_GET['TenQuan'];
					}
			else{
					echo "Vui lòng chọn";
			}
				
		?></option>
        
                        	<?php
							while($col=mysql_fetch_assoc($hienthi)){
		?>
        <option value="QuanLyThongTinTruong.php?Ma=<?php echo $_GET['Ma']?>&&TenQuan=<?php echo $col['TenQuan'];?>" id="a"><?php echo $col['TenQuan'];?></option>;
                                <?php
							}
							
							?>
                       </select>
        <br />
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         &nbsp;&nbsp;&nbsp;&nbsp;
       
        	<p align="right"><a href="QuanLyThongTinTruong.php?Ma=<?php echo $_GET['Ma']?>&&Add"><img src="img/them.jpg" height="60px" width="85px"/></a></p>
        </form>
        	<table class="table table-bordered">
            	<thead>
                	<tr>
                        <th><center>Tên Trường</center></th>
                        <th><center>Ảnh</center></th>
                        <th><center>Chi Tiết</center></a></th>
                        <th><center>View Lớp</center></th>
                        <th><center>View Giáo Viên</center></th>
                        <th><center>Sửa</center></th>
                        <th><center>Xóa</center></th>
                    </tr>
                    <tr>
                    	<?php
						include_once("View/vQLTTT.php");
						?>
                    </tr>
                </thead>
            </table>
            <p></p>
            <br />
            <center><a href="home(ADHT).php?Ma=<?php echo $_GET['Ma'];?>"><img src="img/hme.png" height="50px" width="55px"></a></center>
     	
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