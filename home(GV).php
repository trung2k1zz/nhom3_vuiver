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
        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
        <p></p>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="dnhap.php"><img  src="img/logout.jpg" height="25px" width="25px" /></a>
        </div>
    </div>
    <p></p>
    <br />
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
       <div class="row">
    	<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 h-150">
        	<div style="position: relative;background: url(img/nenhoatiet.jpg); width:100%; height:150px;background-repeat:round">
            <p style="position: absolute;top:2.3em; right: -1.4em; width: 100%; height:35px; padding: 4px;font-weight: bold; font-size: 25px;">
             <?php 
					include_once("Controller/cTLBKT(TK).php");
					$p=new cTLBKT();
					$hi=$p->GetHT();
					$com=mysql_fetch_assoc($hi);
			?>
                   <r><a href="UploadTaiLieu.php?Ma=<?php echo $_GET['Ma']?>&&TenMon=<?php echo $com['TenMonHoc']?>">Upload Tài Liệu</a>
                   </r>
                    <?php
						//Viết tiếp Code
				    ?>
                 </p>
           </div>

        </div>
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 ">
        	<div style="position: relative;background: url(img/nenkhung.jpg); width:100%; height:150px;background-repeat:round">
            <p style="position: absolute;top:2.3em; right: -1.1em; width: 100%; height:35px; padding: 4px;font-weight: bold; font-size: 25px;">
                   <r><a href="TaoNHCauHoi.php?Ma=<?php echo $_GET['Ma'];?>">Tạo NH Câu Hỏi</a>
                   </r>
                    <?php
						//Viết tiếp Code
				    ?>
                 </p>
           </div>

        </div>
        <div class="col-xs-3 col-sm-3 col-md-3  col-lg-3 "> 
        <div style="position: relative;background: url(img/khoihinh.jpg); width:100%; height:150px;background-repeat:round">
            <p style="position: absolute;top:2.3em; right: -0.9em; width: 100%; height:35px; padding: 4px;font-weight: bold; font-size: 25px;">
            <?php 
					include_once("Controller/cTLBKT(TK).php");
					$p=new cTLBKT();
					$hi=$p->GetHT();
					$com=mysql_fetch_assoc($hi);
			?>
                   <r><a href="ThietLapBaiKiemTra.php?Ma=<?php echo $_GET['Ma']?>&&TenMon=<?php echo $com['TenMonHoc']?>">Thiết lập bài KTTK</a>
                   
                    <?php
						//Viết tiếp Code
				    ?>
                 </p>
           </div>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3  col-lg-3 "> 
        <div style="position: relative;background: url(img/hoatiet.png); width:100%; height:150px;background-repeat:round">
            <p style="position: absolute;top:2.0em; right: -1.3em; width: 100%; height:35px; padding: 4px;font-weight: bold; font-size: 25px;">
                   <r><a href="FileNopTuLuan.php?Ma=<?php echo $_GET['Ma']?>">Quản Lý File Nộp</a>
                   
                    <?php
						//Viết tiếp Code
				    ?>
                 </p>
                 </div>
           </div>
        </div>
       <br />
       </div>
       <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
       		<div class="row">
            	<div class="col-xs-3 col-sm-3 col-md-3  col-lg-3 "> 
        <div style="position: relative;background: url(img/khoihinh.jpg); width:100%; height:150px;background-repeat:round">
            <p style="position: absolute;top:2.3em; right: -1.1em; width: 100%; height:35px; padding: 4px;font-weight: bold; font-size: 25px;">
                   <r><a href="TraLoiPhanHoi.php?Ma=<?php echo $_GET['Ma'];?>">Trả Lời Phản Hồi</a>
                   
                    <?php
						//Viết tiếp Code
				    ?>
                 </p>
           </div>
        </div>
         	<div class="col-xs-3 col-sm-3 col-md-3  col-lg-3 "> 
        <div style="position: relative;background: url(img/xd.jpg); width:100%; height:150px;background-repeat:round">
            <p style="position: absolute;top:2.3em; right: -2.4em; width: 100%; height:35px; padding: 4px;font-weight: bold; font-size: 25px;">
                   <r><a href="XemDiem.php?Ma=<?php echo $_GET['Ma'];?>&&MonHoc=<?php echo $com['TenMonHoc'] ?>">Xem Điểm</a>
                   
                    <?php
						//Viết tiếp Code
				    ?>
                 </p>
           </div>
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