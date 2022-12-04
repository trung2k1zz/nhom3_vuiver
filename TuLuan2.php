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
	fi{
		color:#F33;
	}
	uy{
		color:#CF9;
		font-size:20px;
		font-weight:400;
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
		color:#F96;
		font-size:18px;
		font-weight:350;
	}
	f{
		color:#F60;
	}
	v{
		color:#000;
	}
	hy{
		color:#FC0;
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
	a:link{
		color:#F90;
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
            
        </div>
        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
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
    <div class="row">
    	<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        </div>
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 border">
        	<center><uy>Bài Tập Kiểm Tra Tự Luận 2</uy></center>
            <br/>
            <ux>Đề:&nbsp;</ux><?php
				include_once("Controller/cMon(HS).php");
				$p=new cMon();
				$de=$p->HienDeTuLuan2();
				while($dei=mysql_fetch_assoc($de)){
					echo "<a href='download.php?file=".$dei['TenBaiTL']."'>"."<img src='img/tichtuluan.jpg' height='35px' width='35px'/>".$dei['TenBaiTL']."</a>";
				}
			?>
             &nbsp;&nbsp;<ux>Hạn Nộp:&nbsp;&nbsp;</ux><?php
				include_once("Controller/cMon(HS).php");
				$p=new cMon();
				$de=$p->HienDeTuLuan2();
				while($dei=mysql_fetch_assoc($de)){
					echo $dei['HanNop'];
					$a=strtotime($dei['HanNop']);
				}
			?>
            &nbsp;&nbsp;<ux>Ghi Chú:&nbsp;&nbsp;</ux>Học sinh up file để nộp<br/>
            <br/>
            <?php
			include_once("Controller/cTLBKT(TK).php");
			$p=new cTLBKT();
			if(isset($_POST['sua2'])){
				$file=$_FILES['f']['name'];
				if($file==null){
					echo "<script>alert('Chưa có file nộp thay thế!!!')</script>";
				}
				else{
					$ten=$_FILES['f']['name'];
					$tam=$_FILES['f']['tmp_name'];
					$path="QLBaiTapTL/".$ten;
					$thaythe=$p->CN2();
					if($thaythe){
						move_uploaded_file($tam,$path);
							echo "<script>alert('Đã đổi file nộp')</script>";
						}
						else{
							echo "<script>alert('Không đổi được file!!!')</script>";
						}
				}
			}
			?>
            <?php
				include_once("Controller/cTLBKT(TK).php");
				if(isset($_POST['nb2'])){
					$p=new cTLBKT();
					$file=$_FILES['f']['name'];
					if($file==null){
						echo "<script>alert('Chưa có bài nộp!!!')</script>";
					}
					else{
					$ten=$_FILES['f']['name'];
					$tam=$_FILES['f']['tmp_name'];
					$path="QLBaiTapTL/".$ten;
					$nop=$p->NopBai2();
					if($nop){
						move_uploaded_file($tam,$path);
							echo "<script>alert('Nộp bài rồi nhé')</script>";
						}
						else{
							echo "<script>alert('Không nộp được!!!')</script>";
						}
					}
				}
				
			?>
            <form action="#" method="post" enctype="multipart/form-data">
            	<input type="hidden" name="MaGV" value="<?php echo $_GET['MaGV']?>"/>
                <input type="hidden" name="MaLop" value="<?php echo $_GET['MaLop']?>"/>
                <input type="hidden" name="MaMon" value="<?php echo $_GET['MaMon']?>"/>
                <input type="hidden" name="MaHS" value="<?php echo $_GET['MaHS']?>"/>
                <input type="hidden" name="TieuDe" value="<?php echo $_GET['TieuDe']?>"/>
            	<br/><ux>Up File tại đây:</ux>&nbsp;&nbsp;&nbsp;<input type="file" name="f"/><br /><p></p><p></p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;
				<?php 
				$startTime = date("Y-m-d H:i:s");
				$cenvertedTime = date('Y-m-d H:i:s',strtotime('-1 hour',strtotime($startTime)));
				$tg=strtotime($cenvertedTime);
				if($tg-$a>=0){
				}
				else{
					?><input type="submit" name="nb2" value="Nộp Bài"/>
                    
                <?php }
			?>
            <p></p>
            <ux>Submitted:</ux>&nbsp;&nbsp;
			<?php 
				include_once("Controller/cTLBKT(TK).php");
				$p=new cTLBKT();
				$fi=$p->XuatFile2();
				$file=mysql_fetch_assoc($fi);
				echo "<a href='taifilehs.php?file=".$file['FileNop']."'>"."<fi>".$file['FileNop']."</fi>"."</a>";
			?>&nbsp;&nbsp;&nbsp;<?php 
								if($tg-$a>=0){
								}
								else{
								?>
                                <input type="submit" name="sua2" value="Sửa"/>
                                <?php
								}
								?>
                                
             </form>
            <br/>
            <br/>
            Lưu ý:File nộp dưới 10MB,định dạng file:HoTen_TenMon_Lop.[docx|pdf|rar]
            <br/>
            <br />
            <center><a href="home(HS).php?Ma=<?php echo $_GET['Ma']?>&&TenMon=<?php echo $_GET['TenMon']?>&&TenKhoi=<?php echo $_GET['TenKhoi']?>&&MaHS=<?php echo $_GET['MaHS']?>&&MaLop=<?php echo $_GET['MaLop']?>"><img src="img/trove.jpg" height="50px" width="60px"/></a></center>
            <br/>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        </div>
        
    </div>
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
</body>
</html>
	