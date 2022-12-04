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
		font-size:17px;
	}
	th{
		background-color:#9FC;
	}
	t{
		color:#F30;
		font-size:20px;
		font-family:"Comic Sans MS", cursive;
	}
	ui{
		color:#F60;
	}
	tk{
		color:#060;
		font-size:20px;
	}
	x{
        color:#F33;
		font-size:24px;
    }
	d{
		color:#C60;
		font-size:25px;
	}
	n{
		color:#F90;
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
    <div class="row">
    	<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 h-100 border m-2">
        <div>
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
                        </center>
                 
												  
                                                 </div>
        
        
        <br />
        </div>
<div class="container">
  <p id="demo"></p>
</div>
     <div class="col0xs-12 col-sm-12 col-md-12 col-lg-12">
     <br />
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;
                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;
                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;
                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<x>LƯỢT TRUY CẬP</x>
        <div class="row">
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <hr> 
        <center>   
        <table class="table table-bordered">
          <thead>
            <tr>
              <th><center><ui>STT<ui></center></th>
              <th><center><ui>Tên người truy cập<ui></center></th>
              <th><center><ui>Ngày truy cập<ui></center></th>
              <th><center><ui>Tổng số lần truy cập<ui></center></th>
            </tr>
            <?php
				include_once("Controller/cTK.php");
				$p=new cad();
				$h=$p->Tke();
				$i=$p->Tong();
				$cot=mysql_fetch_assoc($i);
				while($co=mysql_fetch_assoc($h)){
			?>
            <tr>
            	<td><center><tk><?php echo $co['MaTruyCap']?></tk></center></td>
                <td><center><?php echo $co['TenTruyCap']?></center></td>
                <td><center><?php echo $co['NgayTruyCap']?></center></td>
                <td><center><?php echo $co['SoLanTruyCap']?></center></td>
            </tr>
            <?php
            }
				
			?>
            <tr>
            	<td colspan="4">
                <center><?php
				$p->pageTke();
                ?></center></td>
            </tr>
             <tr>
             	<th colspan="3"></th>
                <strong><th><center><n>Traffic Website:&nbsp;<?php
				echo "<t>".$cot['Tong']."</t>";?></n></center></th></strong>
            </tr>
          </thead>
          <tbody>
            <tr>
          	</tr>
          </tbody>
        </table>
        <br/>
        <center><a href="home(AD).php?Ma=<?php echo $_GET['Ma']?>"><img src="img/tve.png" height="50px" width="50px"/></a></center>
        </br/>
    </div>
    <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
    </div>
     </div>
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
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Phone:0325.927.6xx<p></p>
                </center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email:abc@gmail.com
                
            
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