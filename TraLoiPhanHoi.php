<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Trả Lời Phản Hồi</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<style>
	#a,#b{
		background-color:#FFC;
	}
	hs{
		color:#093;
	}
	ts{
		color:#9C0;
		font-size:18px;
	}
	ph{
		color:#03F;
		font-size:18px;
	}
	m{
		color:#F33;
	}
	ui{
		color:#F30;
	}
	uy{
		color:#966;
		font-size:25px;
		font-weight:400;
	}
	d{
		color:#C60;
		font-size:25px;
	}
	b{
		color:#CC6;
		font-weight:300;
		font-size:20px;
	}
	x{
		color:#F66;
		font-size:32px;
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
	h1{
		color:#C99;
		font-weight:400;
		
	}
	xs{
		color:#96F;
		font-size:18px;
		font-weight:350;
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
       *{box-sizing: border-box;}
        .dslop, .dshs, .dsch{
            padding-top: 20px;
        }
        /* Nút Để Mở Chatbox */
        .nut-mo-chatbox {
        background-color:#C99;
        color: white;
        padding: 16px 20px;
        border: none;
		border-radius:15px;
        cursor: pointer;
        opacity: 0.8;
        position: fixed;
        bottom: 23px;
        right: 2px;
        width: 100px;
        }
        /* Ẩn chatbox mặc định */
        .Chatbox {
        display: none;
        position: fixed;
        bottom: 0;
        right: 15px;
        border: 3px solid #f1f1f1;
        z-index: 9;
        }
        /* Thêm style cho form */
        .form-container {
        max-width: 300px;
        padding: 10px;
        background-color: white;
        }
        /* thiết lập style textarea */
        .form-container textarea {
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;
        border: none;
        background: #f1f1f1;
        resize: none;
        min-height: 200px;
        }
        /*thiết lập style cho textarea khi được focus */
        .form-container textarea:focus {
        background-color: #ddd;
        outline: none;
        }
        /* Thiết lập style cho nút trong form*/
        .form-container .btn {
        background-color: #4CAF50;
        color: white;
        padding: 16px 20px;
        border: none;
        cursor: pointer;
        width: 100%;
        margin-bottom:10px;
        opacity: 0.8;
        }/* Thiết lập màu nền cho nút đóng chatbox */
        .form-container .nut-dong-chatbox {
        background-color: red;
        }
        /* Thêm hiệu ứng hover cho nút*/
        .form-container .btn:hover, .nut-mo-chatbox:hover {
        opacity: 1;
        }
</style>
<script>
        /*Hàm Mở Form*/
        function moForm() {
        document.getElementById("myForm").style.display = "block";
        }
        /*Hàm Đóng Form*/
        function dongForm() {
        document.getElementById("myForm").style.display = "none";
        }
    </script>
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
       <div class="col-12">
                <center><x class="text-center">Trả lời phản hồi</x></center>
                <br />
                <br/>
            </div>
        </div>
        <div class="row">
           <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="row">
            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
               </div>
            	<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 border" id="a">
                <br/>
                <center>
                	<table>
                    	<thead>
                        	<tr>
                               <?php
									include_once("Controller/cTLPH.php");
									$p=new cTLPH();
									$lop=$p->Lop();
									$hs=$p->HS();
									$tn=$p->TinNhan();
									
								?>
                            	<td><ui>Danh Sách Lớp:</ui>&nbsp;&nbsp;</td>
                                <td> <select class="form-control" onchange="window.location.href=this.value;">
                                 <option>
                           	  <?php
								if(isset($_GET['Ma'])&&isset($_GET['TenLop'])){
									echo $_GET['TenLop'];
								}
								else{
									echo "Choose";
								}
							 ?>
                            </option>
                                <?php
									while($cot=mysql_fetch_assoc($lop)){
								?>
                                		<option value="TraLoiPhanHoi.php?Ma=<?php echo $_GET['Ma']?>&&TenLop=<?php echo $cot['TenLop']?>"><?php echo $cot['TenLop']?></option>
                                <?php
									}
								?>
                               		 </select>
                                </td>
                            </tr>
                        </thead>
                    </table>
                </center>
                <br/>
                </div>
                <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7 border" id="b">
                	<div>
                    	 <br/>
                <center>
                	<table>
                    	<thead>
                        	<tr>
                            	<td><ui>Danh Sách Học Sinh:</ui>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                <td><select class="form-control" onchange="window.location.href=this.value;">
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
									while($col=mysql_fetch_assoc($hs)){
								?>
                                		<option value="TraLoiPhanHoi.php?Ma=<?php echo $_GET['Ma']?>&&TenLop=<?php echo $_GET['TenLop']?>&&TenHS=<?php echo $col['TenHS']?>&&MaHS=<?php echo $col['MaHS']?>&&MaGV=<?php echo $col['MaGV']?>&&MaLop=<?php echo $col['MaLop']?>"><?php echo $col['TenHS']?></option>
                                        
                                <?php
									}
									
								?>
                                
                               		 </select>
                                    
                                </td>
                            </tr>
                        </thead>
                    </table>
                </center>
                <br/>
                    </div>
                </div>
               <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
               </div>
            </div>
            <div class="row">
            <br/>
            	<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
               </div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                <br/>
                <table class="table-bordered">
                	<thead>
                    	<tr>
                        	<th><center><uy>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;Message&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</uy></center></th>
                        </tr>
                  
                        <tr>
                        	<td><m>FROM:</m>&nbsp;&nbsp;<?php echo "<ts>".$_GET['TenHS']."</ts>";?><br/><p></p>
                            <m>NỘI DUNG:</m>&nbsp;&nbsp;<?php while($com=mysql_fetch_assoc($tn)){
								 $a=$com['NoiDung'];
								 if(preg_match("/^[A-Za-z]{1,100}[.(jpg|png)]{3}/",$a)){
									 ?>
                                     	<img src="img/<?php echo $a?>" height="600px" width="100%"/>
                                     <?php
								 }
								 else{
										 echo "<hs>".$com['NoiDung']."<hs>"."<br/>";
								 }
                                 }?>
                                 <br/>
                                 <br/>
                                 <m>ANSWER:</m>&nbsp;<?php 
								 $tnph=$p->Xuat();
								 while($hi=mysql_fetch_assoc($tnph)){
								 $b=$hi['NoiDungPH'];
									if(preg_match("/^[A-Za-z]{1,100}[.(jpg|png)]{3}/",$b)){
										?>
                                        	<img src="img/<?php echo $b?>" height="600px" width="100%"/>
                                        <?php
									}
									else{
										echo "<ph>"."-".$b."</ph>"."<br/>"."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
									}
								 }?> </td> 
                                        
                            
                            
                        </tr>
                        
                    </thead>
                	
                </table>
               </div>
                <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
               </div>
               
            	
            </div>
           </div> 
        </div>
           
    <br />
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
                &nbsp;&nbsp;&nbsp;Phone:0325.927.6xx<p></p>
                </center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;Email:abc@gmail.com
                
            
            </div>
        </div>
    	
    </div>
  </div>
   <button class="nut-mo-chatbox" onclick="moForm()">Chat</button>
        <div class="Chatbox" id="myForm">
        <?php
ob_start();
	include_once("Controller/cTLPH.php");
	if(isset($_GET['submit'])){
		$p=new cTLPH();
		$nd=$_GET['a'];
		if($nd==null){
			echo "<script>alert('Chưa có nội dung phản hồi')</script>";
		}
		else{
			$kq=$p->Reply();
			if($kq==1){
				echo "<script>alert('Trả lời tin nhắn thành công')</script>";
			}
		}
		
	}
ob_end_flush();
?>
            <form action="#" method="get" class="form-container">
            <input type="hidden" name="Ma" value="<?php echo $_GET['Ma']?>"/>
            <input type="hidden" name="TenLop" value="<?php echo $_GET['TenLop']?>"/>
            <input type="hidden" name="TenHS" value="<?php echo $_GET['TenHS']?>"/>
            <input type="hidden" name="mahs" value="<?php echo $_GET['MaHS']?>"/>
            <input type="hidden" name="malop" value="<?php echo $_GET['MaLop']?>"/>
            <input type="hidden" name="magv" value="<?php echo $_GET['MaGV']?>"/>
                <h1>Chatbox</h1>
                <label for="msg">&nbsp;<b>Lời Nhắn</b></label>
                <textarea placeholder="Bạn hãy nhập lời nhắn...(có thể copy tên ảnh bên dưới dán vào đây để gửi)" name="a" required></textarea>
                <input type="file"/>
                <br/>
                <br/>
                <button type="submit" name="submit" class="btn">Gửi</button>
                <button type="button" class="btn nut-dong-chatbox" onclick="dongForm()">Đóng</button>
            </form>
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