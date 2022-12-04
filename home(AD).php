<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<style>
	te{
		color:#090;
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
		color:#0CC;
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
    <p></p>
    <div class="row">
        <p></p>
        <p></p>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="dnhap.php"><img  src="img/logout.jpg" height="25px" width="25px" /></a>
        
    </div>
    <br />
    <br />
    <br />
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
       <div class="row">
    	<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 h-150">
        	<div style="position: relative;background: url(img/hoti.jpg); width:100%; height:150px;background-repeat:round">
            <p style="position: absolute;top:2.3em; right: -1.5em; width: 100%; height:35px; padding: 4px;font-weight: bold; font-size: 25px;">
              	 <r><a href="CapTaiKhoan.php?Ma=<?php echo $_GET['Ma'];?>&&MaAD=<?php echo $cot['MaAD']?>&&MaTruong=<?php echo $cot['MaTruong']?>">Cấp Tài Khoản</a>
                   </r>
                    <?php
						//Viết tiếp Code
				    ?>
                 </p>
           </div>

        </div>
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 ">
        	<div style="position: relative;background: url(img/tti1.jpg); width:100%; height:150px;background-repeat:round">
            <p style="position: absolute;top:2.3em; right: -1.1em; width: 100%; height:35px; padding: 4px;font-weight: bold; font-size: 25px;">
                   <r><a href="ThongKe.php?Ma=<?php echo $_GET['Ma'];?>">Thống Kê Truy Cập</a>
                   </r>
                    <?php
						//Viết tiếp Code
				    ?>
                 </p>
           </div>

        </div>
        <div class="col-xs-3 col-sm-3 col-md-3  col-lg-3 "> 
        <div style="position: relative;background: url(img/nt.jpg); width:100%; height:150px;background-repeat:round">
            <p style="position: absolute;top:2.3em; right: -0.5em; width: 100%; height:35px; padding: 4px;font-weight: bold; font-size: 25px;">
            
            <?php
				include_once("Controller/cPCGV.php");
				$p=new cQLadtruong();
				$hien=$p->DinhDanhTruong();
				$cot=mysql_fetch_assoc($hien);
			?>
                   <r><a href="PhanCongGiaoVien.php?Ma=<?php echo $_GET['Ma']?>&&TenTruong=<?php echo $cot['TenTruong']?>">Phân Công Giáo Viên</a>
              
				   
                   
                    <?php
						//Viết tiếp Code
				    ?>
                 </p>
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