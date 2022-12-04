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
															  echo header("refresh:0,url='home(GV).php?Ma=".$_GET['Ma']."'");
														 }
													 }
												 }
												 ob_end_flush();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home Giáo Viên</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<style>
	d{
		color:#C60;
		font-size:25px;
	}
	x{
		color:#96F;
		font-size:18px;
		font-weight:350;
	}
	fe{
		color:#03C;
	}
	e{
		color:#F30;
		font-size:15px;
	}
	cd{
		color:#909;
	}
	a{
		color:#F60;
	}
	de{
		color:#F00;
		font-size:25px;
	}
	r{
		color:#F60;
		font-weight:100;
	}
	du{
		color:#936;
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
	fn{
		color:#090;
		font-size:25px;
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
												  echo "<p>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<x>Họ&Tên:</x>&nbsp;".$cot['TenGV']."</p>";
												  ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<x>Ảnh Đại Diện:</x>&nbsp;<img src="<?php echo "img/".$cot['Anh']; ?>" height="50px" width="50px" class="rounded-circle"><?php
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
												echo "<p>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<x>Số Điện Thoại:</x>&nbsp;".$cot['SDT']."</p>";
												echo "<p>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<x>Địa Chỉ:</x>&nbsp;".$cot['DiaChi']."</p>";
												echo "<p>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<x>Email:</x>&nbsp;".$cot['Email']."</p>";
												echo "<p>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<x>Công tác tại:</x>&nbsp;".$cot['TenTruong']."</p>";
												 ?>
                                                 
                                                 
                                                  <form action="#" method="get" enctype="multipart/form-data">
                                                 &nbsp;&nbsp;&nbsp;&nbsp;
                                                 &nbsp;&nbsp;&nbsp;&nbsp;
                                                 &nbsp;<x>Ảnh:</x>&nbsp;&nbsp;
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
    </div>
    <p></p>
    <br />
    <br />
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    	<div class="row">
        	<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
            </div>
            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 border">
            	<center><fn>Danh sách file nộp</fn></center>
                <br/>
            <?php
				include_once("Controller/cTLBKT(TK).php");
				$p=new cTLBKT();
				if(isset($_GET['ld'])){
					$diem=$_GET['diem'];
					if($diem<0||$diem>10){
						echo "<script>alert('Điểm phải nằm trong khoảng từ [0-10]!!!')</script>";
					}
					elseif($diem==null){
						echo "<script>alert('Chưa cho điểm!!!')</script>";
					}
					else{
						$kq=$p->luudiem();
						if($kq==1){
							echo "<script>alert('Đã cho điểm')</script>";
						}
					}
				}
			?>
             <form action="#" method="get">
                &nbsp;&nbsp;<du>Tên môn:</du>&nbsp;<?php
				include_once("Controller/cTLBKT(TK).php");
				$p=new cTLBKT();
				$mon=$p->GetHT();
				$lop=$p->GetHT();
				$cot=mysql_fetch_assoc($mon);
				$magv=$p->MaGV();
				$ma=mysql_fetch_assoc($magv);
				$mamon=$p->GetHTMM();
				$a=mysql_fetch_assoc($mamon);
				?>
                <input type="text" value="<?php echo $cot['TenMonHoc']?>" size="7"/>
                <input type="hidden" name="magv" value="<?php echo $ma['MaGV']?>"/>
                <input type="hidden" name="malop" value="<?php echo $_GET['MaLop']?>"/>
                <input type="hidden" name="mamon" value="<?php echo $a['MaMonHoc']?>"/>
                <?php $gv=$ma['MaGV'];?>
                &nbsp;&nbsp;&nbsp;&nbsp;<du>Lớp:</du>&nbsp;
                <select onchange="window.location.href=this.value;">
                <option value="#"><?php 
						if(isset($_GET['TenLop'])){
							echo $_GET['TenLop'];
							}
					else{
							echo "Choose";
							}
				
						?></option>
                <?php while($col=mysql_fetch_assoc($lop)){?>
                	<option value="FileNopTuLuan.php?Ma=<?php echo $_GET['Ma']?>&&TenMon=<?php echo $cot['TenMonHoc']?>&&MaLop=<?php echo $col['MaLop']?>&&TenLop=<?php echo $col['TenLop'];?>&&TenKhoi=<?php echo $col['TenKhoi']?>&&MaKhoi=<?php echo $col['MaKhoi']?>"><?php echo $col['TenLop'];?></option>
				<?php }?>
                </select>
                &nbsp;&nbsp;&nbsp;&nbsp;<du>Học Sinh:</du>&nbsp;
                <select onchange="window.location.href=this.value;">
                <option value="#"><?php 
						if(isset($_GET['TenHS'])){
							echo $_GET['TenHS'];
							}
					else{
							echo "Choose";
							}
				
						?></option>
                <?php
					include_once("Controller/cTLPH.php");
					$p=new cTLPH();
					$hs=$p->HS();
					while($hsi=mysql_fetch_assoc($hs)){
				?>
                	<option value="FileNopTuLuan.php?Ma=<?php echo $_GET['Ma']?>&&MaGV=<?php echo $gv?>&&TenMon=<?php echo $_GET['TenMon']?>&&MaLop=<?php echo $_GET['MaLop']?>&&TenLop=<?php echo $_GET['TenLop'];?>&&TenKhoi=<?php echo $_GET['TenKhoi']?>&&MaKhoi=<?php echo $_GET['MaKhoi']?>&&TenHS=<?php echo $hsi['TenHS']?>&&MaHS=<?php echo $hsi['MaHS']?>"><?php echo $hsi['TenHS']?></option>
                   <?php
					}
					?>
                </select>
                <select onchange="window.location.href=this.value;">
                <option value="#"><?php 
						if(isset($_GET['lb'])){
							echo $_GET['lb'];
							}
					else{
							echo "Choose";
							}
				
						?></option>
                	<option value="FileNopTuLuan.php?Ma=<?php echo $_GET['Ma']?>&&MaGV=<?php echo $gv?>&&TenMon=<?php echo $_GET['TenMon']?>&&MaLop=<?php echo $_GET['MaLop']?>&&TenLop=<?php echo $_GET['TenLop'];?>&&TenKhoi=<?php echo $_GET['TenKhoi']?>&&MaKhoi=<?php echo $_GET['MaKhoi']?>&&TenHS=<?php echo $_GET['TenHS']?>&&MaHS=<?php echo $_GET['MaHS']?>&&lb=TK6">TL1</option>
                    <option value="FileNopTuLuan.php?Ma=<?php echo $_GET['Ma']?>&&MaGV=<?php echo $gv?>&&TenMon=<?php echo $_GET['TenMon']?>&&MaLop=<?php echo $_GET['MaLop']?>&&TenLop=<?php echo $_GET['TenLop'];?>&&TenKhoi=<?php echo $_GET['TenKhoi']?>&&MaKhoi=<?php echo $_GET['MaKhoi']?>&&TenHS=<?php echo $_GET['TenHS']?>&&MaHS=<?php echo $_GET['MaHS']?>&&lb=TK7">TL2</option>
                    <option value="FileNopTuLuan.php?Ma=<?php echo $_GET['Ma']?>&&MaGV=<?php echo $gv?>&&TenMon=<?php echo $_GET['TenMon']?>&&MaLop=<?php echo $_GET['MaLop']?>&&TenLop=<?php echo $_GET['TenLop'];?>&&TenKhoi=<?php echo $_GET['TenKhoi']?>&&MaKhoi=<?php echo $_GET['MaKhoi']?>&&TenHS=<?php echo $_GET['TenHS']?>&&MaHS=<?php echo $_GET['MaHS']?>&&lb=TK8">TL3</option>
                </select>
                <br/>
                <br/>
                
                	<div class="row">
                    	<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 border">
                        &nbsp;<fe>File:</fe>&nbsp;&nbsp;
                        <?php include_once("Controller/cTLBKT(TK).php");
							  $p=new cTLBKT();
							  $f=$p->HTFileHS();
							  $files=mysql_fetch_assoc($f);
							  	if($files['FileNop']==null){
								}
								else
								{
									echo "<a href='taifilehs.php?file=".$files['FileNop']."'>".$files['FileNop']."</a>";
								}
							  ?>
                              <br/>
                              <br/>
                              <?php
							  $a=$_files['MaMon'];
							  $diem=$p->laydiem();
							  $ht=mysql_fetch_assoc($diem);
							  ?>
                              &nbsp;<cd>Điểm:</cd>&nbsp;&nbsp;
							  <?php 
							  	if($ht['Diem']==null){
							  ?>
                              <input type="text" name="diem" size="1" />
                              &nbsp;
                              <input type="hidden" name="Ma" value="<?php echo $_GET['Ma']?>" />
                              <input type="hidden" name="MaMon" value="<?php echo $files['MaMon']?>" />
                              <input type="hidden" name="MaLop" value="<?php echo $_GET['MaLop']?>" />
                              <input type="hidden" name="MaGV" value="<?php echo $_GET['MaGV']?>" />
                              <input type="hidden" name="MaHS" value="<?php echo $_GET['MaHS']?>" />
                              <input type="hidden" name="lb" value="<?php echo $_GET['lb']?>" />
                              <input type="submit" value="Lưu" name="ld"/>
                              <?php
								}
								else{
									echo "<de>".$ht['Diem']."</de>";
								}
							  ?>
                           <br/>
                           <br />
                        </div>
                        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                        </div>

                    </div>
               
             </form>
                <br/>
                <center><a href="home(GV).php?Ma=<?php echo $_GET['Ma']?>"><img src="img/trove.jpg" height="50px" width="60px"/></a></center>
                <br/>
            </div>
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
            </div>
        </div>
    </div>
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
                &nbsp;&nbsp;&nbsp;Phone:0325.927.6xx<p></p>
                </center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;Email:abc@gmail.com
                
            
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