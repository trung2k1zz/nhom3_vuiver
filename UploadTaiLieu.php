<?php
	include_once("Controller/cUpload.php");
	$p=new cUpLoad();
	if(isset($_POST['submit'])){
	   $f=$_FILES['f']['name'];
	   if($f==null){
		   echo "<script>alert('Chưa có tài liệu được chọn!!!')</script>";
	   }
	   else{
		$ten=$_FILES['f']['name'];
		$tam=$_FILES['f']['tmp_name'];
		$path="Upload/".$ten;
		$tai=$p->TaiLen();
		if($tai){
			move_uploaded_file($tam,$path);
			echo "<script>alert('Upload Thành Công!!!')</script>";
		}
		else{
			echo "<script>alert('Upload Thất Bại!!!')</script>";
		}
		
	 	  }
	}
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
	th{
		background-color:#CFC;
		color:#F63;
	}
	uv{
		font-size:18px;
		color:#96C;
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
	ux{
		color:#F90;
		font-size:20px;
		font-weight:350;
	}
	tm{
		color:#C63;
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
	hu{
		color:#F60;
		font-weight:450;
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
												  echo "<p>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Họ&Tên:&nbsp;".$cot['TenGV']."</p>";
												  ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ảnh Đại Diện:&nbsp;<img src="<?php echo "img/".$cot['Anh']; ?>" height="50px" width="50px" class="rounded-circle"><?php
												   if($cot['ChucDanh']==0){
													  echo "<p>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Chức vụ:&nbsp;Học Sinh"."</p>";
												 }
												 elseif($cot['ChucDanh']==1){
													   echo "<p>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Chức vụ:&nbsp;Giáo Viên"."</p>";
												 }
												  elseif($cot['ChucDanh']==2){
													   echo "<p>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Chức vụ:&nbsp;Admin Trường"."</p>";
												 }
												  elseif($cot['ChucDanh']==3){
													   echo "<p>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Chức vụ:&nbsp;Admin Hệ Thống"."</p>";
												 }
												  elseif($cot['ChucDanh']==4){
													   echo "<p>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Chức vụ:&nbsp;Tổ Trưởng Chuyên Môn"."</p>";
												 }
												echo "<p>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Số Điện Thoại:&nbsp;".$cot['SDT']."</p>";
												echo "<p>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Địa Chỉ:&nbsp;".$cot['DiaChi']."</p>";
												echo "<p>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email:&nbsp;".$cot['Email']."</p>";
												echo "<p>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Công tác tại:&nbsp;".$cot['TenTruong']."</p>";
												 ?>
                                                  
                                                  
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
       		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            	<center><hu>Upload Tài Liệu</hu></center>
                <br/>
                <div class="row">
                	<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    </div>
                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
               <form action="#" method="post" enctype="multipart/form-data">
                 <?php
					include_once("Controller/cTLBKT(TK).php");
					$p=new cTLBKT();
					$hien=$p->MaGV();
					$cot=mysql_fetch_assoc($hien);
					$hi=$p->GetHT();
					$hie=$p->GetHT();
					$com=mysql_fetch_assoc($hi);
					$mm=$p->GetHTMM();
					$clm=mysql_fetch_assoc($mm);
					$a=$clm['MaMonHoc'];
				?>
               	    <input type="hidden" name="Ma" value="<?php echo $_GET['Ma']?>"/>
                    <input type="hidden" name="MaLop" value="<?php echo $_GET['MaLop']?>"/>
                    <input type="hidden" name="MaMon" value="<?php echo $a?>"/>
                    <input type="hidden" name="a" value="<?php echo $cot['MaGV'];?>" size="1"/>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;
                    <tm>Tên Môn:</tm>&nbsp;&nbsp;<input type="text" value="<?php echo $_GET['TenMon']?>" disabled="disabled" size="7"/> 
                   		&nbsp;&nbsp;&nbsp;&nbsp;<tm>Lớp:</tm>&nbsp;&nbsp;
                        <select name="b" onchange="window.location.href=this.value;">
                        <option value="#"><?php 
						if(isset($_GET['TenLop'])){
							echo $_GET['TenLop'];
							}
					else{
							echo "Choose";
							}
				
			     ?></option>
                        <?php
							while($col=mysql_fetch_assoc($hie)){
						?>
                        	<option value="UploadTaiLieu.php?Ma=<?php echo $_GET['Ma']?>&&TenMon=<?php echo $_GET['TenMon']?>&&MaLop=<?php echo $col['MaLop']?>&&TenLop=<?php echo $col['TenLop']?>&&TenKhoi=<?php echo $col['TenKhoi']?>&&MaKhoi=<?php echo $col['MaKhoi']?>"><?php echo $col['TenLop']?></option>
                         <?php
					}
					?>
                        </select>
                        &nbsp;&nbsp;&nbsp;&nbsp;<tm>Tài Liệu:</tm>&nbsp;&nbsp;<input type="file" name="f"/>
                         <br />
                         <br/>
                         
                    <center><input type="submit" name="submit" value="Đăng Tải" /></center>
                    </div>
                   
                    </form>
                    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    </div>
                </div>
                <br/>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                	<div class="row">
                    	<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                		</div>
                        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                        <center><ux>Danh Sách Tài Liệu Upload</ux></center>
                        <p></p>
                        <center>
                        	<table class="table-bordered">
                            	<thead>
                                	<tr>
                                    	<th><center><us>Tên Tài Liệu</us></center></th>
                                        <th><center><us>Môn Học</us></center></th>
                                        <th><center><us>Lớp Học</us></center></th>
                                    </tr>
                                    <?php
							 if(isset($_GET['Ma'])&&isset($_GET['TenMon'])&&isset($_GET['MaLop'])&&isset($_GET['TenKhoi'])){
                                   include_once("Controller/cUpload.php");
								   $p=new cUpLoad();
								   $hi=$p->XuatTL();
								   while($cot=mysql_fetch_assoc($hi)){ 
								   ?>
                                   	<tr>
                                    	<td><a href="taixuong.php?file=<?php echo $cot['TenTLTK']?>"><uv><?php echo $cot['TenTLTK']?></uv></a></td>
                                        <td><center><?php echo $cot['TenMonHoc']?></center></td>
                                        <td><center><?php echo $cot['TenLop']?></center></td>
                                        
                                    </tr>
                                   <?php
								   }
							 }
							 else{
								   ?>
                                    <?php
							echo "Can't Found";
							 }
							?>
                                   
                                </thead>
                            </table>
                            <p></p>
                           </center>
                		</div>
                        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                		</div>
               	    </div>
                </div>
            </div>
    	
       </div>
       <br />
    </div>
    <br />
    <center><a href="home(GV).php?Ma=<?php echo $_GET['Ma']?>"><img src="img/tve.png" height="50px" width="50px"/></a></center>
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