<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<style>
	ac{
		color:#C99;
		font-size:20px;
		font-weight:475;
	}
	g{
		color:#FC6;
	}
	ky{
		color:#9C3;
		font-weight:450;
	}
	
	d{
		color:#C60;
		font-size:25px;
	}
	ts{
		color:#F90;
		font-weight:450;
	}
	e{
		color:#F30;
		font-size:15px;
	}
	k{
		color:#FC0;
		font-size:25px;
	}
	
	a{
		color:#F60;
	}
	r{
		color:#F60;
		font-weight:100;
	}
	g{
		color:#F36;
		font-weight:450;
	}
	f{
		color:#699;
	}
	gi{
		color:#C63;
		font-weight:450;
	}
	v{
		color:#000;
	}
	.rounded-circle{
	background-color:#0FF;
    }
    h3{
		color:#CC6;
		font-weight:475;
	}
	h5{
		color:#CC0;
	}
	h6{
		color:#F90;
	}
	x{
		color:#F60;
		font-weight:450;
	}
	y{
		color:#966;
		font-weight:450;
	}
	z{
		color:#9C0;
		font-weight:450;
	}
	c{
		color:#6C9;
		font-weight:450;
	}
	e{
		color:#C96;
		font-weight:450;
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
        <?php
        include_once("Controller/cQLTTT.php");
				$p=new cQLadht();
				$hien=$p->Detail();
				$cot=mysql_fetch_assoc($hien);
		?>
     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
     	<center><h3>Thông Tin Chi Tiết Trường Học</h3></center>
        <br />
       <div class="row">
       <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
       </div>
       <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
      	<table class="table-bordered col-xs-12 col-sm-12 col-md-12 col-lg-12">
        	<thead>
            	<tr>
                	<th colspan="6"><strong><center><ac>TRƯỜNG <?php echo $cot['TenTruong'];?></ac></center></strong></th>
                </tr>
                <tr>
                	<td colspan="3">&nbsp;&nbsp;<img src="img/<?php echo $cot['Anh'];?>" height="175px" width="200px" /></td>
                	<td colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><x>Tên trường:<?php echo $cot['TenTruong']?></x><br />
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<y>Địa Chỉ:<?php echo $cot['DiaChi']?></y><br />
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<z>Email:<?php echo $cot['Email']?></z><br />
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<c>Số Điện Thoại:<?php echo $cot['SDT']?></c><br />
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<e>Năm Hoạt Động:<?php echo $cot['NamHoatDong']?></e><br />
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<ky>Số Lượng Lớp:&nbsp;<?php 
					 $thi=$p->sll();
					 $col=mysql_fetch_assoc($thi);
						if($col['sll']>0){
						 echo $col['sll'];
						}
						else{
							echo '0';
						}
					 
					 ?></ky>
                     <br />
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<ts>Số Lượng Học Sinh:&nbsp;<?php 
					 $thi=$p->slhs();
					 $col=mysql_fetch_assoc($thi);
						if($col['slhs']>0){
						 echo $col['slhs'];
						}
						else{
							echo '0';
						}
					
					 
					 ?>
                     </ts>
                     <br />
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<g>Số Lượng Giáo Viên:&nbsp;<?php 
					 $thi=$p->sl();
					 $col=mysql_fetch_assoc($thi);
						if($col['slgv']>0){
						 echo $col['slgv'];
						}
						else{
							echo '0';
						}
					 
					 
					 ?></g>
                     <br />
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<gi>Trạng Thái:&nbsp;
                     			<?php 
									if($col['slgv']>0||$col['slhs']>0||$col['sll']>0){
										echo "Hoạt Động";
									}
									else{
										echo "Chưa Hoạt Động";
									}
								?>
                     </gi>
                  
                  </b>
                    </td>
                    
                </tr>
                <tr>
                	<th colspan="6">
                    <p></p>
                    <p align="center">
                	<a href="QuanLyThongTinTruong.php?Ma=<?php echo $_GET['Ma']?>&&TenQuan=<?php echo $cot['TenQuan'];?>"><input type="image" src="img/trove.jpg" 
                    height="50px" width="55px"/></a></p>
                    </th>
                    
                </tr>
            </thead>
        </table>
       </div>
         <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
       </div>
      </div>
        <br />
        
     	
     </div>
     </div>
     <br />
     <br />
     <br />
     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border">
     	<div class="row">
        	<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <center><img src="img/on.png" width="100" height="100"/><center></center>
                </center><center><p>Chào mừng quý thầy cô đến với <p/><p>giao diện học trực tuyến.</p></center>
            
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <center><img src="img/lk.jpg" width="100" height="100"/><center></center>
                </center><center><a href="#">Hỗ trợ</a><p></p></center>
                </center><center><a href="#">Khác</a><p></p></center>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <center><img src="img/dt.gif" width="75" height="75"/><center></center><p></p>
                </center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Phone:0325.927.6xx<p></p>
                </center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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