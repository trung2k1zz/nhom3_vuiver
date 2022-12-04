<?php
												 ob_start();
												 include_once("Controller/cTK(GV).php");
												 $p=new cTKgv();
												 if(isset($_GET['submit'])){
													 $f=$_GET['f'];
													 if($f==null){
														 echo "<script>alert('Chưa chọn ảnh đại diện!!!')</script>";
													 }
													 else{
														 $kq=$p->UpdAnh();
														 if($kq==1){
															  echo "<script>alert('Cập nhật ảnh đại diện thành công')</script>";
														 }
													 }
												 }
												 ob_end_flush();
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
	xs{
		color:#96F;
		font-size:18px;
		font-weight:350;
	}
	tb{
		color:#F00;
		font-size:20px;
	}
	th{
		background-color:#FF6;
		color:#F00;
		
	}
	x{
		color:#C33;
		font-size:24px;
	}
	td{
		color:#03F;
		font-size:18px;
	}
	hs{
		color:#090;
	}
	mh{
		color:#F30;
	}
	d{
		color:#C60;
		font-size:25px;
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
        <p></p>
        	<?php
				include_once("Controller/cTK(GV).php");
				$p=new cTKgv();
				$hien=$p->Info();
				$ab=$p->NameGV();
				$c=mysql_fetch_array($ab);
				while($cot=mysql_fetch_assoc($hien)){
					 	echo "<center>";
						?>
                        <a href="#" data-toggle="modal" data-target="#lk"><img src="<?php echo "img/".$cot['Anh']; ?>" height="50px" width="50px" class="rounded-circle"></a></center>
                        <div class="modal" id="lk">
                    			<div class="modal-dialog">
                       					 <div class="modal-content">
                           						 <div class="modal-header">
                                                 <h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                          		Thông tin cá nhân</h3>
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                 </div>
                                                 <div class="modal-body">
                                                 <?php
												 include_once("Controller/cTK(GV).php");
												 $p=new cTKgv();
												 $lay=$p->Infogv();
												 $cot=mysql_fetch_assoc($lay);
												  echo "<p>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<xs>Họ&Tên:</xs>&nbsp;".$cot['TenGV']."</p>";
												  ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<xs>Ảnh Đại Diện:</xs>&nbsp;<img src="<?php echo "img/".$cot['Anh']; ?>" height="50px" width="50px" class="rounded-circle"><?php
												   if($cot['ChucDanh']==0){
													  echo "<p>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<xs>Chức vụ:</xs>&nbsp;Học Sinh"."</p>";
												 }
												 elseif($cot['ChucDanh']==1){
													   echo "<p>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<xs>Chức vụ:</xs>&nbsp;Giáo Viên"."</p>";
												 }
												  elseif($cot['ChucDanh']==2){
													   echo "<p>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<xs>Chức vụ:</xs>&nbsp;Admin Trường"."</p>";
												 }
												  elseif($cot['ChucDanh']==3){
													   echo "<p>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<xs>Chức vụ:</xs>&nbsp;Admin Hệ Thống"."</p>";
												 }
												  elseif($cot['ChucDanh']==4){
													   echo "<p>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<x>Chức vụ:</x>&nbsp;Tổ Trưởng Chuyên Môn"."</p>";
												 }
												echo "<p>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<xs>Số Điện Thoại:</xs>&nbsp;".$cot['SDT']."</p>";
												echo "<p>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<xs>Địa Chỉ:</xs>&nbsp;".$cot['DiaChi']."</p>";
												echo "<p>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<xs>Email:</xs>&nbsp;".$cot['Email']."</p>";
												echo "<p>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<xs>Công tác tại:</xs>&nbsp;".$cot['TenTruong']."</p>";
												 ?>
                                                 
                                                 
                                                  <form action="#" method="get" enctype="multipart/form-data">
                                                 &nbsp;&nbsp;&nbsp;&nbsp;
                                                 &nbsp;&nbsp;&nbsp;&nbsp;
                                                 &nbsp;<xs>Ảnh:</xs>&nbsp;&nbsp;
                                                 <input type="hidden" name="Ma" value="<?php echo $_GET['Ma']?>"/>
                                                 <input type="file" name="f"/>
                                                 	
                                                    <br/>
                                                    <p></p>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                                 &nbsp;&nbsp;&nbsp;&nbsp;
                                                 &nbsp;&nbsp;&nbsp;
                                                 &nbsp;&nbsp;&nbsp;&nbsp;
                                                 &nbsp;&nbsp;&nbsp;&nbsp;
                                                 &nbsp;&nbsp;&nbsp;
                                                 &nbsp;&nbsp;&nbsp;&nbsp;
                                                 &nbsp;&nbsp;&nbsp;&nbsp;
                                                 &nbsp;<input type="submit" value="Cập Nhật" name="submit"/>
                                                 </form>
                                                  
                                                  
                                                  
                                                 </div>
                                                 <div class="modal-footer">
                                                 <button type="button" class="btn btn-danger" data-dismiss="modal" >Close</button>
                                                 </div>
                                          </div>
                                </div>
                         </div>
            
            <?php
			  }
			?>
    		<p></p>
             <?php
						     
							 echo "<center>"."<g>".$c['TenGV']."</g>"."</center>";
							 
			?>
            <p></p>
            
        </div>
        
        <br />
        </div>
     <div class="row">
     	<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
        </div>
     	<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
        <div class="section">
            <div class="seciton1">
                <center><x> TÌNH HÌNH HỌC TẬP </x></center>
            </div>
            <br />
            <center><mh>Môn Học:</mh>&nbsp;&nbsp;&nbsp;<input type="text" value="<?php echo $_GET['MonHoc']?>" size="7" disabled="disabled"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<mh>Lớp:&nbsp;&nbsp;</mh>
            <select onchange="window.location.href=this.value;">
            <option>
                           	  <?php
								if(isset($_GET['Ma'])&&isset($_GET['Lop'])){
									echo $_GET['Lop'];
								}
								else{
									echo "Choose";
								}
							 ?>
            </option>
            <?php
            include_once("Controller/cTLPH.php");
			$p=new cTLPH();
			$a=$p->Lop();
			while($lop=mysql_fetch_assoc($a)){
			?>
            	<option value="xemdiem.php?Ma=<?php echo $_GET['Ma']?>&&MonHoc=<?php echo $_GET['MonHoc']?>&&Lop=<?php echo $lop['TenLop']?>&&MaLop=<?php echo $lop['MaLop']?>"><?php echo $lop['TenLop']?></option>
            <?php
			}
			?>
            </select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<mh>Học Sinh:&nbsp;&nbsp;</mh>
            <select onchange="window.location.href=this.value;">
            <option>
                           	  <?php
								if(isset($_GET['Ma'])&&isset($_GET['TenHS'])){
									echo $_GET['TenHS'];
								}
								else{
									echo "Choose";
								}
							 ?>
            </option>
            <?php
				include_once("Controller/cDiem.php");
				$p=new cDiem();
				$cot=$p->XuatHS();
				$col=mysql_fetch_assoc($p->MaGV());
				while($u=mysql_fetch_assoc($cot)){
			?>
            	<option value="xemdiem.php?Ma=<?php echo $_GET['Ma']?>&&MonHoc=<?php echo $_GET['MonHoc']?>&&Lop=<?php echo $_GET['Lop']?>&&MaLop=<?php echo $_GET['MaLop']?>&&MaHS=<?php echo $u['MaHS']?>&&TenHS=<?php echo $u['TenHS']?>&&MaGV=<?php echo $col['MaGV']?>"><?php echo $u['TenHS']?></option>
                <?php
				}
				?>
         
            </select>
            </center>
            <br /> 
            <center>     
        <table class=" table-bordered">
          <thead>
            <tr>
              <th><center>Tên HS</center></th>
              <th><center>TK(TN)</center></th>
              <th><center>TK(TL)</center></th>
              <th><center>Giữa Kỳ</center></th>
              <th><center>Cuối Kỳ</center></th>
              <th><center>TBM</center></th>
            </tr>
          </thead>
          <tbody>
          <?php
		  $di=$p->XuatDiem1();
		  $di1=$p->XuatDiem2();
		  $x=mysql_fetch_assoc($di);
		  $y=mysql_fetch_assoc($di1);
		  $di2=mysql_fetch_assoc($p->XuatDiem3());
		  $di3=mysql_fetch_assoc($p->XuatDiem4());
		  $di4=mysql_fetch_assoc($p->XuatDiem5());
		  $tl1=mysql_fetch_assoc($p->TL1());
		  $tl2=mysql_fetch_assoc($p->TL2());
		  $tl3=mysql_fetch_assoc($p->TL3());
		  $gk=mysql_fetch_assoc($p->GK());
		  $ck=mysql_fetch_assoc($p->CK());
		  ?>
            <tr>
              <td><center><hs><?php echo $_GET['TenHS']?></hs></center></td>
              <td><center>&nbsp;&nbsp;&nbsp;<?php echo $x['Diem']?>&nbsp;&nbsp;&nbsp;<?php echo $y['Diem']?>&nbsp;&nbsp;&nbsp;<?php echo $di2['Diem']?>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $di3['Diem']?>&nbsp;&nbsp;&nbsp;<?php echo $di4['Diem']?></center></td>
              <td><center>&nbsp;<?php echo $tl1['Diem']?>&nbsp;&nbsp;&nbsp;<?php echo $tl2['Diem']?>&nbsp;&nbsp;&nbsp;<?php echo $tl3['Diem']?></center></td>
              <td><center><?php echo $gk['Diem']?></center></td>      
              <td><center><?php echo $ck['Diem']?></center></td>
              <td><center>
			  <?php 
			  	if($y['Diem']==null&&$di2['Diem']==null&&$di3['Diem']==null&&$di4['Diem']==null){
					$a=$x['Diem'];
				}
				elseif($di2['Diem']==null&&$di3['Diem']==null&&$di4['Diem']==null){
					$a=($x['Diem']+$y['Diem'])/2;
				}
				elseif($di3['Diem']==null&&$di4['Diem']==null){
					$a=($x['Diem']+$y['Diem']+$di2['Diem'])/3;
				}
				elseif($di4['Diem']==null){
					$a=($x['Diem']+$y['Diem']+$di2['Diem']+$di3['Diem'])/4;
				}
				else{
					$a=($x['Diem']+$y['Diem']+$di2['Diem']+$di3['Diem']+$di4['Diem'])/5;
				}
				?>
                <?php
				if($tl2['Diem']==null&&$tl3['Diem']==null){
					$b=$tl1['Diem'];
				}
				elseif($tl3['Diem']==null){
					$b=($tl1['Diem']+$tl2['Diem'])/2;
				}
				else{
					$b=($tl1['Diem']+$tl2['Diem']+$tl3['Diem'])/3;
				}
				if($ck['Diem']==null){
				}
				else{
				echo "<tb>".round((($a+$b)/2*0.2+$gk['Diem']*0.3+$ck['Diem']*0.5),1)."</tb>";
				}
			  ?>
              </center></td>
            </tr>
          
          </tbody>
        </table>
        </center>
        <br />
        <center><a href="home(GV).php?Ma=<?php echo $_GET['Ma']?>"><img src="img/tve.png" height="50px" width="50px"/></a></center>
        <br />
    </div>
        	
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