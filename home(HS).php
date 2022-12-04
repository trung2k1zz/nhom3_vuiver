<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home Học Sinh-Môn&nbsp;<?php echo $_GET['TenMon']?>&nbsp;<?php echo $_GET['TenKhoi']?></title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
												<?php
												 ob_start();
												 	include_once("Controller/cTK(ADHT).php");
													if(isset($_GET['submit'])&&isset($_GET['Ma'])){
														$p=new cTKadht();
														$p->CNAnhHS();
														echo "<script>alert('Cập nhật ảnh đại diện thành công')</script>";
														echo header("refresh:0,url='home(HS).php?Ma=".$_GET['Ma']."'");
													}
												  ob_end_flush();
												 ?>
<script type="text/javascript" src="js/bootstrap.js"></script>
<style>
	textarea{
		width:200px;
		height:100px;
	}
	tn{
		color:#F00;
		font-size:18px;
	}
	fr{
		color:#F93;
		font-size:18px;
	}
	gvi{
		color:#C99;
		font-size:18px;
	}
	ms{
		color:#CC6;
		font-size:20px;
	}
	xa{
		color:#C6C;
		font-size:18px;
	}
	ai{
		color:#F60;
	}
	y{
		color:#0CF;
	}
	dm{
		color:#F00;
		font-size:23px;
	}
	at{
		color:#03F;
	}
	ux{
		color:#C69;
	}
	uy{
		color:#090;
	}
	x{
		color:#96F;
		font-size:18px;
		font-weight:350;
	}
	sd{
		color:#06F;
		font-size:18px;
		font-weight:400;
	}
	d{
		color:#C60;
		font-size:25px;
	}
	e{
		color:#F30;
		font-size:15px;
	}
	uf{
		color:#F30;
		font-size:18px;
		font-weight:400;
	}
	f{
		color:#F60;
	}
	v{
		color:#000;
	}
	hy{
		color:#F03;
		font-weight:400;
		font-size:25px;
	}
	.rounded-circle{
	background-color:#9FF;
    }
	.rounded-circle:hover{
		background-color:#FF9;
	}
	a:hover{
		color:#F00;
	}
    h3{
		color:#0CC;
		font-weight:350;
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
				include_once("Controller/cTK(HS).php");
				$p=new cTK();
				$hien=$p->Info();
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
													include_once("Controller/cTK(HS).php");
													$p=new cTK();
													$hien=$p->Info();
													$col=mysql_fetch_assoc($hien);
												?>
                                                <?php 	
												 include_once("Controller/cTK(HS).php");
												 $p=new cTK();
												 $hien=$p->Ten();
												 while($cot=mysql_fetch_assoc($hien)){
					 							 echo "<p>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<x>Họ&Tên:</x>&nbsp;".$cot['TenHS']."</p>";
												 ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<x>Ảnh Đại Diện:</x>&nbsp;&nbsp;<img src="<?php echo "img/".$cot['Anh']; ?>" height="50px" width="50px" class="rounded-circle"><?php
                        						 }
		    										
                                                 include_once("Controller/cMon(HS).php");
				                                 $p=new cMon();
				                                 $xuat=$p->XemMon();
												 $cot=mysql_fetch_assoc($xuat);
												 if($cot['ChucDanh']==0){
													  echo "<p>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<x>Chức vụ:</x>&nbsp;Học Sinh"."</p>";
												 }
												 elseif($cot['ChucDanh']==1){
													   echo "<p>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<x>Chức vụ:</x>&nbsp;Giáo Viên"."</p>";
												 }
												  elseif($cot['ChucDanh']==2){
													   echo "<p>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<x>Chức vụ:</x>&nbsp;Admin Trường"."</p>";
												 }
												  elseif($cot['ChucDanh']==3){
													   echo "<p>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<x>Chức vụ:</x>&nbsp;Admin Hệ Thống"."</p>";
												 }
												  elseif($cot['ChucDanh']==4){
													   echo "<p>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<x>Chức vụ:</x>&nbsp;Tổ Trưởng Chuyên Môn"."</p>";
												 }
												 
												 echo "<p>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<x>Lớp Học:</x>&nbsp;".$cot['TenLop']."</p>";
												  echo "<p>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<x>Email:</x>&nbsp;".$col['Email']."</p>";
												  echo "<p>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<x>Địa Chỉ:</x>&nbsp;".$col['DiaChi']."</p>";
												  echo "<p>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<x>Học Tại Trường:</x>&nbsp;".$cot['TenTruong']."</p>";
													
												 
					                             ?>
                                                 
                                                 <form action="#" method="get" enctype="multipart/form-data">
                                                 &nbsp;&nbsp;&nbsp;&nbsp;
                                                 &nbsp;&nbsp;&nbsp;&nbsp;
                                                 &nbsp;<x>Ảnh:</x>&nbsp;&nbsp;
                                                 <input type="hidden" name="Ma" value="<?php echo $_GET['Ma']?>"/>
                                                 <input type="file" name="a"/>
                                                 	
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
				include_once("Controller/cTK(HS).php");
				$p=new cTK();
				$hien=$p->Ten();
				 while($cot=mysql_fetch_assoc($hien)){
					 	echo "<center>";
						echo "<e>".$cot['TenHS']."</e>";
                        echo "</center>";
				 }
		    ?>
            <p></p>
       </center>
        
        </div>
        <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
        <br />
    <br />
    <br />
    <br />
    <p></p>
     <a href="dnhap.php"><img  src="img/logout.jpg" height="25px" width="25px" /></a>
       
        	<div class="row">
            	<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                	<?php
						//Bổ sung sau
					?>
                </div>
            </div>
        </div>
    </div>
    <p></p>
    <table class="table table-bordered col-xs-12 col-sm-12 col-md-12 col-lg-12 border-0">
    	<thead>
              <tr>
    	        <?php
        	     include_once("View/vMon(HS).php");
		        ?> 
                <?php
					if(isset($_GET['Ma'])&&isset($_GET['TenMon'])){
						include_once("Controller/cMon(HS).php");
						$p=new cMon();
						$xuat=$p->ChiTietMon();
						$cot=mysql_fetch_assoc($xuat);
				?>
                <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <br />
                    <br />
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;
   <?php
	  	if(isset($_GET['MaHS'])&&isset($_GET['MaLop'])&&isset($_GET['MaGV'])){
			include_once("Controller/cTLPH.php");
			$p=new cTLPH();
			$tlph=$p->TNPHHS();
			?>
            <p></p>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            	<div class="row">
                	<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    </div>
                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 border">
                    <fr>FROM:</fr>&nbsp;&nbsp;<gvi><?php echo $cot['TenGV']?></gvi>
                    <br/>
                    <br/><fr>SENT:</fr>
                    <?php
					include_once("Controller/cPhanHoi.php");
					$p=new cPH();
					$ht=$p->CHGui();
					while($ab=mysql_fetch_assoc($ht)){
					?>
                   	<sd><?php
					$d=$ab['NoiDung'];
									if(preg_match("/^[A-Za-z]{1,100}[.(jpg|png)]{3}/",$d)){
										?>
                                        	<img src="img/<?php echo $d?>" height="400px" width="100%"/>
                                        <?php
									}
									else{
										echo "-".$ab['NoiDung']."<br/>"."<br/>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"?> </td> 
                                        <?php 
									}
                                         ?></sd>
                    <?php
					}
					?>
                    <br/>
                    <br/><fr>REPLY:</fr>
                    <?php
					while($vc=mysql_fetch_assoc($tlph)){
					?>
                   	<sd><?php
					$c=$hi['NoiDungPH'];
									if(preg_match("/^[A-Za-z]{1,100}[.(jpg|png)]{3}/",$c)){
										?>
                                        	<img src="img/<?php echo $b?>" height="600px" width="100%"/>
                                        <?php
									}
									else{
										echo "-".$vc['NoiDungPH']."<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"?> </td> 
                                        <?php 
									}
                                         ?></sd>
                    <?php
					}
					?>
                    </div>
                    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    </div>
                </div>
            </div>
            <br/>
            <?php
					
		}
		else{
	  ?>
      <div class="row">
      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
      </div>
      <img src="img/tt.jpg" height="50px" width="50px"/>&nbsp;GIÁO VIÊN:&nbsp;&nbsp;<?php echo "<v>".$cot['TenGV']."</v>";?>&nbsp;&nbsp;&nbsp;
      <div><a href="home(HS).php?Ma=<?php echo $_GET['Ma']?>&&TenMon=<?php echo $_GET['TenMon']?>&&TenKhoi=<?php echo $_GET['TenKhoi']?>&&MaHS=<?php echo $_GET['MaHS']?>&&MaLop=<?php echo $_GET['MaLop']?>&&MaGV=<?php echo $cot['MaGV']?>">
          
           <div style="position: relative;background: url(img/chuong.jpg); width:60px; height:50px;background-repeat:round">
            <p style="position: absolute;top:-0.3em; right: 0.15em; width: 30px; height:30px; padding: 2px;font-weight: bold; font-size: 15px;" class="rounded-circle btn btn-warning">
                   <r><?php
				   		$mahs=$_GET['MaHS'];
						$magv=$cot['MaGV'];
						$malop=$_GET['MaLop'];
						$sql="select count(MaTLPH) as SL from traloiphanhoi where MaHS='$mahs' and MaLop='$malop' and MaGV='$magv'";
						$qr=mysql_query($sql);
						$tn=mysql_fetch_assoc($qr);
						echo "<tn>".$tn['SL']."</tn>";
						
                      ?>
                     </r>
                 </p>
 
           </div>
            </a></div>
         </div>
            </h5>  

                    
                    <br />
                	<h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <img src="img/hoa.jpg" height="50px" width="50px"/>TÀI LIỆU THAM KHẢO&nbsp;&nbsp;<img src="img/tailieuthamkhao.jpg" height="50px" width="50px"/></h5>
                    <r>
                     <?php
				if($cot['TenGV']!=null){
					 if(isset($_GET['Ma'])&&isset($_GET['TenMon'])&&isset($_GET['TenKhoi'])&&isset($_GET['MaLop'])){
						 include_once("Controller/cMon(HS).php");
						 $p=new cMon();
						 $apr=$p->TaiLieuThamKhao();
						 $hi=mysql_fetch_assoc($apr);
						 $ktr=$hi['TenTLTK'];
						 if($hi['TenTLTK']!=null){
						 $a=1;
						 while($hl=mysql_fetch_assoc($apr)){
							 echo "<table>";
							 	echo "<thead>";
									echo "<tr>";	
							 				echo "<td>";
					echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."<ai>".$a++."</ai>".".&nbsp;"."<y>"."<a href='taixuong.php?file=".$hl['TenTLTK']."'/>"."&nbsp;"."<img src='img/tailieu.png' height='30px' width='30px'/>&nbsp;".$hl['TenTLTK']."</a>"."</y>";
											echo "</td>";
									echo "</tr>";
								echo "</thead>";
							 echo "<table>";
						 }
						 $a++;
					 }
					  else{
						 		echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;"."Updating...";
							 }
					 }
					 
					 else{
                     ?>
                     Updating...</r>
                     <?php
					 }
				}
				else{
					 ?>
                     <?php
					 echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;"."Updating...";
				}
					 ?>
                     <br/>
                    <p></p>
                    <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <img src="img/hoa.jpg" height="50px" width="50px"/>BÀI KIỂM TRA</h5>
                    <p></p>
                    <h6>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     THƯỜNG KỲ</h6>
                     <br/>
<?php
	$p=new cMon();
	$hie=$p->MaMon();
	$com=mysql_fetch_assoc($hie);
	
?>
<?php
$startTime = date("Y-m-d H:i:s");

$cenvertedTime = date('Y-m-d H:i:s',strtotime('-1 hour',strtotime($startTime)));

$a=strtotime($cenvertedTime);

?>
                    
<form action='TracNghiem.php' method='GET'>
	<input type="hidden" name="tg" value="<?php echo $a;?>" size="1"/>
    <input type="hidden" name="Ma" value="<?php echo $_GET['Ma']?>"/>
    <input type="hidden" name="MaHS" value="<?php echo $cot['MaHS']?>"/>
    <input type="hidden" name="TenHS" value="<?php echo $cot['TenHS']?>"/>
    <input type="hidden" name="TenKhoi" value="<?php echo $_GET['TenKhoi']?>"/>
    <input type="hidden" name="MaGV" value="<?php echo $cot['MaGV']?>"/>
    <input type="hidden" name="MaLop" value="<?php echo $cot['MaLop']?>"/>
    <input type="hidden" name="TenLop" value="<?php echo $cot['TenLop']?>"/>
    <input type="hidden" name="MaMonHoc" value="<?php echo $com['MaMonHoc']?>"/>
    <input type="hidden" name="TenMon" value="<?php echo $com['TenMonHoc']?>"/>
    <input type="hidden" name="TieuDe" value="TK1"/>
    <r>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <?php
					include_once("Controller/cMon(HS).php");
					$p=new cMon();
					$nut=$p->nuttk1();
					$na=mysql_fetch_assoc($nut);
				?>
                <?php
					if($cot['TenGV']!=null){
						if($na['TieuDe']==null){
							echo "<img src='img/sym.jpg' height='25px' width='25px'/>"."&nbsp;"."Updating...";
						}
						else{
				?>
                    	<img src="img/sym.jpg" height="25px" width="25px"/>&nbsp;Bài Trắc Nghiệm 1
	&nbsp;&nbsp;&nbsp;&nbsp;
    <button type="image" name="kt" class="btn-success"/>Bắt Đầu</button>
    <br/>
    <?php
		include_once("Controller/cMon(HS).php");
		$p=new cMon();
		$mark=$p->Mark();
		$diem=mysql_fetch_assoc($mark);
	?>
    <uy><?php 
		include_once("Controller/cMon(HS).php");
		$p=new cMon();
		$ti=$p->tg();
		$hienthi=mysql_fetch_assoc($ti);
		
	?> <p></p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <img src="img/dho.png" height="25px" width="25px"/>&nbsp;Thời gian cho phép:</uy>&nbsp;&nbsp;<ux><?php if($hienthi['NgayLamBai']==null&&$hienthi['NgayKetThuc']==null){
		echo "Updating...";
	}
	else
	{
		echo $hienthi['NgayLamBai']?>-><?php echo $hienthi['NgayKetThuc'];?></ux><?php
		echo "<br/>";
		echo "<br/>";
		echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."<img src='img/dhc.png' height='25px' width='25px'/>&nbsp;"."<uy>Thời gian làm bài:</uy>&nbsp;"."<xa>".$hienthi['ThoiGianLamBai']."&nbsp;phút</xa>";
		echo "<p><p/>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					 &nbsp;
					 "."<at>"."<img src='img/test.jpg' height='25px' width='25px'/>&nbsp;"."Điểm:&nbsp;&nbsp;"."</at>"."<mk>"."<dm>".$diem['Diem']."</dm>"."</mk>";}?>
    			<?php
					}
					}
					else{
						echo "Updating...";
						echo "<center></center>";
					}
				?>
     </r>
</form> 
<form action='TracNghiem2.php' method='GET'>
	<input type="hidden" name="tg" value="<?php echo $a;?>" size="1"/>
    <input type="hidden" name="Ma" value="<?php echo $_GET['Ma']?>"/>
    <input type="hidden" name="MaHS" value="<?php echo $cot['MaHS']?>"/>
    <input type="hidden" name="TenHS" value="<?php echo $cot['TenHS']?>"/>
    <input type="hidden" name="TenKhoi" value="<?php echo $_GET['TenKhoi']?>"/>
    <input type="hidden" name="MaGV" value="<?php echo $cot['MaGV']?>"/>
    <input type="hidden" name="MaLop" value="<?php echo $cot['MaLop']?>"/>
    <input type="hidden" name="TenLop" value="<?php echo $cot['TenLop']?>"/>
    <input type="hidden" name="MaMonHoc" value="<?php echo $com['MaMonHoc']?>"/>
    <input type="hidden" name="TenMon" value="<?php echo $com['TenMonHoc']?>"/>
    <input type="hidden" name="TieuDe" value="TK2"/>
    <br/>
    <r>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <?php
					include_once("Controller/cMon(HS).php");
					$p=new cMon();
					$nut=$p->nuttk2();
					$nb=mysql_fetch_assoc($nut);
				?>
                <?php
					if($cot['TenGV']!=null){
				?>
                		<?php 
							if($nb['TieuDe']==null){
								echo "<img src='img/sym.jpg' height='25px' width='25px'/>"."&nbsp;"."Updating...";
							}
							else{
						?>
                    	<img src="img/sym.jpg" height="25px" width="25px"/>&nbsp;Bài Trắc Nghiệm 2
	&nbsp;&nbsp;&nbsp;&nbsp;
    <button type="image" name="kt" class="btn-success"/>Bắt Đầu</button>
    <br/>
    <?php
		include_once("Controller/cMon(HS).php");
		$p=new cMon();
		$mark=$p->Mark2();
		$diem=mysql_fetch_assoc($mark);
	?>
    <uy><?php 
		include_once("Controller/cMon(HS).php");
		$p=new cMon();
		$ti=$p->tg2();
		$hienthi=mysql_fetch_assoc($ti);
		
	?> <p></p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <img src="img/dho.png" height="25px" width="25px"/><uy>&nbsp;Thời gian cho phép:</uy>&nbsp;&nbsp;<ux><?php if($hienthi['NgayLamBai']==null&&$hienthi['NgayKetThuc']==null){
		echo "Updating...";
	}
	else
	{
		echo $hienthi['NgayLamBai']?>-><?php echo $hienthi['NgayKetThuc'];?></ux><?php
		echo "<br/>";
		echo "<br/>";
		echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."<img src='img/dhc.png' height='25px' width='25px'/>&nbsp;"."<uy>Thời gian làm bài:</uy>&nbsp;"."<xa>".$hienthi['ThoiGianLamBai']."&nbsp;phút</xa>";
		echo "<p><p/>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					 &nbsp;
					 "."<at>"."<img src='img/test.jpg' height='25px' width='25px'/>&nbsp;"."Điểm:&nbsp;&nbsp;"."</at>"."<mk>"."<dm>".$diem['Diem']."</dm>"."</mk>";}?>
    			<?php
					}
					}
					else{
						echo "Updating...";
						echo "<center></center>";
					}
				?>
     </r>
</form> 
<form action='TracNghiem3.php' method='GET'>
	<input type="hidden" name="tg" value="<?php echo $a;?>" size="1"/>
    <input type="hidden" name="Ma" value="<?php echo $_GET['Ma']?>"/>
    <input type="hidden" name="MaHS" value="<?php echo $cot['MaHS']?>"/>
    <input type="hidden" name="TenHS" value="<?php echo $cot['TenHS']?>"/>
    <input type="hidden" name="TenKhoi" value="<?php echo $_GET['TenKhoi']?>"/>
    <input type="hidden" name="MaGV" value="<?php echo $cot['MaGV']?>"/>
    <input type="hidden" name="MaLop" value="<?php echo $cot['MaLop']?>"/>
    <input type="hidden" name="TenLop" value="<?php echo $cot['TenLop']?>"/>
    <input type="hidden" name="MaMonHoc" value="<?php echo $com['MaMonHoc']?>"/>
    <input type="hidden" name="TenMon" value="<?php echo $com['TenMonHoc']?>"/>
    <input type="hidden" name="TieuDe" value="TK3"/>
    <br/>
    <r>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      
                <?php
					include_once("Controller/cMon(HS).php");
					$p=new cMon();
					$nut=$p->nuttk3();
					$nc=mysql_fetch_assoc($nut);
				?>
                <?php
					if($cot['TenGV']!=null){
						if($nc['TieuDe']==null){
							echo "<img src='img/sym.jpg' height='25px' width='25px'/>"."&nbsp;"."Updating...";
						}
						else{
				?>
                    	<img src="img/sym.jpg" height="25px" width="25px"/>&nbsp;Bài Trắc Nghiệm 3
	&nbsp;&nbsp;&nbsp;&nbsp;
    <button type="image" name="kt" class="btn-success"/>Bắt Đầu</button>
    <br/>
    <?php
		include_once("Controller/cMon(HS).php");
		$p=new cMon();
		$mark=$p->Mark3();
		$diem=mysql_fetch_assoc($mark);
	?>
    <uy><?php 
		include_once("Controller/cMon(HS).php");
		$p=new cMon();
		$ti=$p->tg3();
		$hienthi=mysql_fetch_assoc($ti);
		
	?> <p></p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <img src="img/dho.png" height="25px" width="25px"/><uy>&nbsp;Thời gian cho phép:</uy>&nbsp;&nbsp;<ux><?php if($hienthi['NgayLamBai']==null&&$hienthi['NgayKetThuc']==null){
		echo "Updating...";
	}
	else
	{
		echo $hienthi['NgayLamBai']?>-><?php echo $hienthi['NgayKetThuc'];?></ux><?php
		echo "<br/>";
		echo "<br/>";
		echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."<img src='img/dhc.png' height='25px' width='25px'/>&nbsp;"."<uy>Thời gian làm bài:</uy>&nbsp;"."<xa>".$hienthi['ThoiGianLamBai']."&nbsp;phút</xa>";
		echo "<p><p/>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					 &nbsp;
					 "."<at>"."<img src='img/test.jpg' height='25px' width='25px'/>&nbsp;"."Điểm:&nbsp;&nbsp;"."</at>"."<mk>"."<dm>".$diem['Diem']."</dm>"."</mk>";}?>
    			<?php
					}
					}
					else{
						echo "Updating...";
						echo "<center></center>";
					}
				?>
     </r>
</form> 
<form action='TracNghiem4.php' method='GET'>
	<input type="hidden" name="tg" value="<?php echo $a;?>" size="1"/>
    <input type="hidden" name="Ma" value="<?php echo $_GET['Ma']?>"/>
    <input type="hidden" name="MaHS" value="<?php echo $cot['MaHS']?>"/>
    <input type="hidden" name="TenHS" value="<?php echo $cot['TenHS']?>"/>
    <input type="hidden" name="TenKhoi" value="<?php echo $_GET['TenKhoi']?>"/>
    <input type="hidden" name="MaGV" value="<?php echo $cot['MaGV']?>"/>
    <input type="hidden" name="MaLop" value="<?php echo $cot['MaLop']?>"/>
    <input type="hidden" name="TenLop" value="<?php echo $cot['TenLop']?>"/>
    <input type="hidden" name="MaMonHoc" value="<?php echo $com['MaMonHoc']?>"/>
    <input type="hidden" name="TenMon" value="<?php echo $com['TenMonHoc']?>"/>
    <input type="hidden" name="TieuDe" value="TK4"/>
    <br/>
    <r>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <?php
					include_once("Controller/cMon(HS).php");
					$p=new cMon();
					$nut=$p->nuttk4();
					$nd=mysql_fetch_assoc($nut);
				?>
                <?php
					if($cot['TenGV']!=null){
						if($nd['TieuDe']==null){
							echo "<img src='img/sym.jpg' height='25px' width='25px'/>"."&nbsp;"."Updating...";
						}
						else{
				?>
                    	<img src="img/sym.jpg" height="25px" width="25px"/>&nbsp;Bài Trắc Nghiệm 4
	&nbsp;&nbsp;&nbsp;&nbsp;
    <button type="image" name="kt" class="btn-success"/>Bắt Đầu</button>
    <br/>
    <?php
		include_once("Controller/cMon(HS).php");
		$p=new cMon();
		$mark=$p->Mark4();
		$diem=mysql_fetch_assoc($mark);
	?>
    <uy><?php 
		include_once("Controller/cMon(HS).php");
		$p=new cMon();
		$ti=$p->tg4();
		$hienthi=mysql_fetch_assoc($ti);
		
	?> <p></p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <img src="img/dho.png" height="25px" width="25px"/><uy>&nbsp;Thời gian cho phép:</uy>&nbsp;&nbsp;<ux><?php if($hienthi['NgayLamBai']==null&&$hienthi['NgayKetThuc']==null){
		echo "Updating...";
	}
	else
	{
		echo $hienthi['NgayLamBai']?>-><?php echo $hienthi['NgayKetThuc'];?></ux><?php
		echo "<br/>";
		echo "<br/>";
		echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."<img src='img/dhc.png' height='25px' width='25px'/>&nbsp;"."<uy>Thời gian làm bài:</uy>&nbsp;"."<xa>".$hienthi['ThoiGianLamBai']."&nbsp;phút</xa>";
		echo "<p><p/>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					 &nbsp;
					 "."<at>"."<img src='img/test.jpg' height='25px' width='25px'/>&nbsp;"."Điểm:&nbsp;&nbsp;"."</at>"."<mk>"."<dm>".$diem['Diem']."</dm>"."</mk>";}?>
    			<?php
					}
					}
					else{
						echo "Updating...";
						echo "<center></center>";
					}
				?>
     </r>
</form> 
<form action='TracNghiem5.php' method='GET'>
	<input type="hidden" name="tg" value="<?php echo $a;?>" size="1"/>
    <input type="hidden" name="Ma" value="<?php echo $_GET['Ma']?>"/>
    <input type="hidden" name="MaHS" value="<?php echo $cot['MaHS']?>"/>
    <input type="hidden" name="TenHS" value="<?php echo $cot['TenHS']?>"/>
    <input type="hidden" name="TenKhoi" value="<?php echo $_GET['TenKhoi']?>"/>
    <input type="hidden" name="MaGV" value="<?php echo $cot['MaGV']?>"/>
    <input type="hidden" name="MaLop" value="<?php echo $cot['MaLop']?>"/>
    <input type="hidden" name="TenLop" value="<?php echo $cot['TenLop']?>"/>
    <input type="hidden" name="MaMonHoc" value="<?php echo $com['MaMonHoc']?>"/>
    <input type="hidden" name="TenMon" value="<?php echo $com['TenMonHoc']?>"/>
    <input type="hidden" name="TieuDe" value="TK5"/>
    <br/>
    <r>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 <?php
					include_once("Controller/cMon(HS).php");
					$p=new cMon();
					$nut=$p->nuttk5();
					$ne=mysql_fetch_assoc($nut);
				?>
                <?php
					if($cot['TenGV']!=null){
						if($ne['TieuDe']==null){
							echo "<img src='img/sym.jpg' height='25px' width='25px'/>"."&nbsp;"."Updating...";
						}
						else{
				?>
                    	<img src="img/sym.jpg" height="25px" width="25px"/>&nbsp;Bài Trắc Nghiệm 5
	&nbsp;&nbsp;&nbsp;&nbsp;
    <button type="image" name="kt" class="btn-success"/>Bắt Đầu</button>
    <br/>
    <?php
		include_once("Controller/cMon(HS).php");
		$p=new cMon();
		$mark=$p->Mark5();
		$diem=mysql_fetch_assoc($mark);
	?>
    <uy><?php 
		include_once("Controller/cMon(HS).php");
		$p=new cMon();
		$ti=$p->tg5();
		$hienthi=mysql_fetch_assoc($ti);
		
	?> <p></p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <img src="img/dho.png" height="25px" width="25px"/><uy>&nbsp;Thời gian cho phép:</uy>&nbsp;&nbsp;<ux><?php if($hienthi['NgayLamBai']==null&&$hienthi['NgayKetThuc']==null){
		echo "Updating...";
	}
	else
	{
		echo $hienthi['NgayLamBai']?>-><?php echo $hienthi['NgayKetThuc'];?></ux><?php
		echo "<br/>";
		echo "<br/>";
		echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."<img src='img/dhc.png' height='25px' width='25px'/>&nbsp;"."<uy>Thời gian làm bài:</uy>&nbsp;"."<xa>".$hienthi['ThoiGianLamBai']."&nbsp;phút</xa>";
		echo "<p><p/>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					 &nbsp;
					 "."<at>"."<img src='img/test.jpg' height='25px' width='25px'/>&nbsp;"."Điểm:&nbsp;&nbsp;"."</at>"."<mk>"."<dm>".$diem['Diem']."</dm>"."</mk>";}?>
    			<?php
					}
					}
					else{
						echo "Updating...";
						echo "<center></center>";
					}
				?>
     </r>
</form> 
                    <p></p>
                    <br/>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                       <?php
					include_once("Controller/cMon(HS).php");
					$p=new cMon();
					$nut=$p->nuttk6();
					$nf=mysql_fetch_assoc($nut);
						if($nf['TieuDe']==null){
							echo "<img src='img/tichtuluan.jpg' height='35px' width='35px'/>"."&nbsp;"."Updating...";
						}
						else{
				?>
                      <a href="TuLuan1.php?Ma=<?php echo $_GET['Ma']?>&&TenMon=<?php echo $_GET['TenMon']?>&&TenKhoi=<?php echo $_GET['TenKhoi']?>&&MaHS=<?php echo $cot['MaHS']?>&&MaGV=<?php echo $cot['MaGV']?>&&MaLop=<?php echo $cot['MaLop']?>&&MaMon=<?php echo $com['MaMonHoc']?>"><img src="img/tichtuluan.jpg" height="35px" width="35px"/>Bài Tự Luận 1 Môn <?php echo $_GET['TenMon']?>&nbsp;<?php echo $_GET['TenKhoi']?></a><br/><p></p>
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                         &nbsp;&nbsp;&nbsp;
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <?php 
					  	include_once("Controller/cMon(HS).php");
						$p=new cMon();
						$HTDI=$p->TL1();
						$diemht=mysql_fetch_assoc($HTDI);
						if($diemht==null){
						}
						else{
					  ?><img src="img/test.jpg" height="25px" width="25px" />&nbsp;<at>Điểm:</at>
                      &nbsp;&nbsp;<?php echo "<dm>".$diemht['Diem']."</dm>";
					  }
						}?>
                      <p></p>
                    <p></p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                       <?php
					include_once("Controller/cMon(HS).php");
					$p=new cMon();
					$nut=$p->nuttk7();
					$nf=mysql_fetch_assoc($nut);
						if($nf['TieuDe']==null){
							echo "<img src='img/tichtuluan.jpg' height='35px' width='35px'/>"."&nbsp;"."Updating...";
						}
						else{
				?>
                      <a href="TuLuan2.php?Ma=<?php echo $_GET['Ma']?>&&TenMon=<?php echo $_GET['TenMon']?>&&TenKhoi=<?php echo $_GET['TenKhoi']?>&&MaHS=<?php echo $cot['MaHS']?>&&MaGV=<?php echo $cot['MaGV']?>&&MaLop=<?php echo $cot['MaLop']?>&&MaMon=<?php echo $com['MaMonHoc']?>"><img src="img/tichtuluan.jpg" height="35px" width="35px"/>Bài Tự Luận 2 Môn <?php echo $_GET['TenMon']?>&nbsp;<?php echo $_GET['TenKhoi']?></a><br/><p></p>
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                         &nbsp;&nbsp;&nbsp;
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <?php 
					  	include_once("Controller/cMon(HS).php");
						$p=new cMon();
						$HTDI=$p->TL2();
						$diemht=mysql_fetch_assoc($HTDI);
						if($diemht==null){
						}
						else{
					  ?><img src="img/test.jpg" height="25px" width="25px" />&nbsp;<at>Điểm:</at>
                      &nbsp;&nbsp;<?php echo "<dm>".$diemht['Diem']."</dm>";
					  }
						}?>
                         <p></p>
                    <p></p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                       <?php
					include_once("Controller/cMon(HS).php");
					$p=new cMon();
					$nut=$p->nuttk8();
					$nf=mysql_fetch_assoc($nut);
						if($nf['TieuDe']==null){
							echo "<img src='img/tichtuluan.jpg' height='35px' width='35px'/>"."&nbsp;"."Updating...";
						}
						else{
				?>
                      <a href="TuLuan3.php?Ma=<?php echo $_GET['Ma']?>&&TenMon=<?php echo $_GET['TenMon']?>&&TenKhoi=<?php echo $_GET['TenKhoi']?>&&MaHS=<?php echo $cot['MaHS']?>&&MaGV=<?php echo $cot['MaGV']?>&&MaLop=<?php echo $cot['MaLop']?>&&MaMon=<?php echo $com['MaMonHoc']?>"><img src="img/tichtuluan.jpg" height="35px" width="35px"/>Bài Tự Luận 3 Môn <?php echo $_GET['TenMon']?>&nbsp;<?php echo $_GET['TenKhoi']?></a><br/><p></p>
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                         &nbsp;&nbsp;&nbsp;
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <?php 
					  	include_once("Controller/cMon(HS).php");
						$p=new cMon();
						$HTDI=$p->TL3();
						$diemht=mysql_fetch_assoc($HTDI);
						if($diemht==null){
						}
						else{
					  ?><img src="img/test.jpg" height="25px" width="25px" />&nbsp;<at>Điểm:</at>
                      &nbsp;&nbsp;<?php echo "<dm>".$diemht['Diem']."</dm>";
					  }
						}?>
                      <p></p>
                    <br/>
                      <br />
                
                     <h6>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     GIỮA KỲ</h6>
                    <r>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <form action='TracNghiemGK.php' method='GET'>
	<input type="hidden" name="tg" value="<?php echo $a;?>" size="1"/>
    <input type="hidden" name="Ma" value="<?php echo $_GET['Ma']?>"/>
    <input type="hidden" name="MaHS" value="<?php echo $cot['MaHS']?>"/>
    <input type="hidden" name="TenHS" value="<?php echo $cot['TenHS']?>"/>
    <input type="hidden" name="TenKhoi" value="<?php echo $_GET['TenKhoi']?>"/>
    <input type="hidden" name="MaGV" value="<?php echo $cot['MaGV']?>"/>
    <input type="hidden" name="MaLop" value="<?php echo $cot['MaLop']?>"/>
    <input type="hidden" name="TenLop" value="<?php echo $cot['TenLop']?>"/>
    <input type="hidden" name="MaMonHoc" value="<?php echo $com['MaMonHoc']?>"/>
    <input type="hidden" name="TenMon" value="<?php echo $com['TenMonHoc']?>"/>
    <input type="hidden" name="MaTruong" value="<?php echo $_GET['MaTruong']?>"/>
    <input type="hidden" name="TieuDe" value="GK"/>
    <r>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <?php
					include_once("Controller/cMon(HS).php");
					$p=new cMon();
					$nut=$p->nutGK();
					$na=mysql_fetch_assoc($nut);
				?>
                <?php
					if($cot['TenGV']!=null){
						if($na['TieuDe']==null){
							echo "<img src='img/sym.jpg' height='25px' width='25px'/>"."&nbsp;"."Updating...";
						}
						else{
				?>
                    	<img src="img/sym.jpg" height="25px" width="25px"/>&nbsp;&nbsp;Bài Giữa Kỳ
	&nbsp;&nbsp;&nbsp;&nbsp;
    <button type="image" name="kt" class="btn-success"/>Bắt Đầu</button>
    <br/>
    <?php
		include_once("Controller/cMon(HS).php");
		$p=new cMon();
		$mark=$p->MarkGK();
		$diem=mysql_fetch_assoc($mark);
	?>
    <uy><?php 
		include_once("Controller/cMon(HS).php");
		$p=new cMon();
		$ti=$p->tgGK();
		$hienthi=mysql_fetch_assoc($ti);
		
	?> <p></p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <img src="img/dho.png" height="25px" width="25px"/>&nbsp;Thời gian cho phép:</uy>&nbsp;&nbsp;<ux><?php if($hienthi['NgayLamBai']==null&&$hienthi['NgayKetThuc']==null){
		echo "Updating...";
	}
	else
	{
		echo $hienthi['NgayLamBai']?>-><?php echo $hienthi['NgayKetThuc'];?></ux><?php
		echo "<br/>";
		echo "<br/>";
		echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."<img src='img/dhc.png' height='25px' width='25px'/>&nbsp;"."<uy>Thời gian làm bài:</uy>&nbsp;"."<xa>".$hienthi['ThoiGianLamBai']."&nbsp;phút</xa>";
		echo "<p><p/>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					 &nbsp;
					 "."<at>"."<img src='img/test.jpg' height='25px' width='25px'/>&nbsp;"."Điểm:&nbsp;&nbsp;"."</at>"."<mk>"."<dm>".$diem['Diem']."</dm>"."</mk>";}?>
    			<?php
					}
					}
					else{
						echo "Updating...";
						echo "<center></center>";
					}
				?>
     </r>
</form> </r>
                    <p></p>
                    <br/>
                     <h6>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    CUỐI KỲ</h6>
<form action='TracNghiemCK.php' method='GET'>
	<input type="hidden" name="tg" value="<?php echo $a;?>" size="1"/>
    <input type="hidden" name="Ma" value="<?php echo $_GET['Ma']?>"/>
    <input type="hidden" name="MaHS" value="<?php echo $cot['MaHS']?>"/>
    <input type="hidden" name="TenHS" value="<?php echo $cot['TenHS']?>"/>
    <input type="hidden" name="TenKhoi" value="<?php echo $_GET['TenKhoi']?>"/>
    <input type="hidden" name="MaGV" value="<?php echo $cot['MaGV']?>"/>
    <input type="hidden" name="MaLop" value="<?php echo $cot['MaLop']?>"/>
    <input type="hidden" name="TenLop" value="<?php echo $cot['TenLop']?>"/>
    <input type="hidden" name="MaMonHoc" value="<?php echo $com['MaMonHoc']?>"/>
    <input type="hidden" name="TenMon" value="<?php echo $com['TenMonHoc']?>"/>
    <input type="hidden" name="MaTruong" value="<?php echo $_GET['MaTruong']?>"/>
    <input type="hidden" name="TieuDe" value="CK"/>
    <r>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <?php
					include_once("Controller/cMon(HS).php");
					$p=new cMon();
					$nut=$p->nutCK();
					$na=mysql_fetch_assoc($nut);
				?>
                <?php
					if($cot['TenGV']!=null){
						if($na['TieuDe']==null){
							echo "<img src='img/sym.jpg' height='25px' width='25px'/>"."&nbsp;"."Updating...";
						}
						else{
				?>
                    	<img src="img/sym.jpg" height="25px" width="25px"/>&nbsp;&nbsp;Bài Cuối Kỳ
	&nbsp;&nbsp;&nbsp;&nbsp;
    <button type="image" name="kt" class="btn-success"/>Bắt Đầu</button>
    <br/>
    <?php
		include_once("Controller/cMon(HS).php");
		$p=new cMon();
		$mark=$p->MarkCK();
		$diem=mysql_fetch_assoc($mark);
	?>
    <uy><?php 
		include_once("Controller/cMon(HS).php");
		$p=new cMon();
		$ti=$p->tgCK();
		$hienthi=mysql_fetch_assoc($ti);
		
	?> <p></p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <img src="img/dho.png" height="25px" width="25px"/>&nbsp;Thời gian cho phép:</uy>&nbsp;&nbsp;<ux><?php if($hienthi['NgayLamBai']==null&&$hienthi['NgayKetThuc']==null){
		echo "Updating...";
	}
	else
	{
		echo $hienthi['NgayLamBai']?>-><?php echo $hienthi['NgayKetThuc'];?></ux><?php
		echo "<br/>";
		echo "<br/>";
		echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."<img src='img/dhc.png' height='25px' width='25px'/>&nbsp;"."<uy>Thời gian làm bài:</uy>&nbsp;"."<xa>".$hienthi['ThoiGianLamBai']."&nbsp;phút</xa>";
		echo "<p><p/>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					 &nbsp;
					 "."<at>"."<img src='img/test.jpg' height='25px' width='25px'/>&nbsp;"."Điểm:&nbsp;&nbsp;"."</at>"."<mk>"."<dm>".$diem['Diem']."</dm>"."</mk>";}?>
    			<?php
					}
					}
					else{
						echo "Updating...";
						echo "<center></center>";
					}
				?>
     </r>
</form>
                    <p></p>
                    <br/>
                    <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     <img src="img/hoa.jpg" height="50px" width="50px"/>HỎI GIÁO VIÊN</h5>
                     <?php
					 	if($cot['TenGV']!=null){
					 ?>
                    <r>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" data-toggle="modal" data-target="#like"><img src="img/mss.png" height="50px" width="50px"/></a></r>
                     <div class="modal" id="like">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    	<hy> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                                            &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                                             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                             Nhắn Tin</hy>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="moodal-body">
                                    <?php
										include_once("Controller/cPhanHoi.php");
										if(isset($_POST['submit'])){
											$a=$_POST['a'];
											if($a==null){
												echo "<script>alert('Chưa nhập nội dung!!!')</script>";
											}
											else
											{
											$p=new cPH();
												$kq=$p->ThemCH();
												if($kq==1){
													echo "<script>alert('Gửi câu hỏi thành công')</script>";
												}
											}
										}
									?>
                                    <form action="#" method="post" enctype="multipart/form-data">
                                    <p></p>
                            		<br/>
                                    
                                    	<div class="form-group row">
                                        	<label class="col-xs-3"><uf><p></p>
                                            <p></p>
                                            <p></p>
                                            
                                          
                                            <br/>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                                            &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                                             &nbsp;&nbsp;&nbsp;&nbsp;Nội Dung:</uf></label>
                                            <div class="col-xs-8">
                                            &nbsp;&nbsp;<textarea name="a" placeholder="Soạn thảo...(có thể copy tên ảnh ở dưới để gửi)"></textarea>
                                            </div>
                                            <br/><label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                                            &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                                             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<uf>Ảnh:</uf></label>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            &nbsp;&nbsp;&nbsp;<input type="file" />
                                            <br/><label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                                            &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                                             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<uf>:</uf></label>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            &nbsp;&nbsp;&nbsp;<input type="hidden" name="MaHS" value="<?php echo $_GET['MaHS']?>" />
                                            <br/><label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                                            &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                                             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<uf>:</uf></label>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                           
                                            &nbsp;&nbsp;&nbsp;<input type="hidden" name="MaGV" value="<?php echo $cot['MaGV']?>" />
                                             
                                        </div>           
                                    </div>
                                    <div class="modal-footer">
                                   
                                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                   <input type="submit" value="Gửi" name="submit" class="btn-success"/>
                                   </form>
                                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                   &nbsp;&nbsp;&nbsp;&nbsp;
                                   &nbsp;&nbsp;&nbsp;&nbsp;
                                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                   &nbsp;&nbsp;&nbsp;
                                   
     
                                    </div>
                                        
                                 </div>
                                 
                            </div>
                            <?php
						}
						else{
							echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."<img src='img/mss.png' height='50px' width='50px'/>";
						}
							?>
                     </div>
                <?php
					}
					}
				?>
              </tr>
        </thead>
    </table>
    <p></p>
    <br />
     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border">
     	<div class="row">
        	<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <center><img src="img/on.png" width="100" height="100"/><center></center>
              </center><center>Chào mừng các em đến với giao diện học trực tuyến của học sinh.</center>
            
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <center><img src="img/lk.jpg" width="100" height="100"/><center></center>
              </center><center><a href="#">Hỗ trợ</a><p></p></center>
                </center><center><a href="#">Khác</a><p></p></center>
                
            
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <center><img src="img/dt.gif" width="75" height="75"/><center></center><p></p>
              </center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Phone:0325.927.6xx<p></p>
                </center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email:abc@gmail.com
                
            
            </div>
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