<?php
					ob_start();
					if(isset($_GET['up'])){
						$matk=$_GET['matk'];
						if($matk==null){
							echo "<script>alert('Chưa nhập MaTK!!!')</script>";
						}
						else{
							include_once("Controller/cTK(AD).php");
							$p=new cTKad();
							$p->upTK();
							$ma=$_GET['Ma'];
							$maad=$_GET['MaAD'];
							$matruong=$_GET['MaTruong'];
							echo "<script>alert('Đã cập nhật MaTK')</script>";
							echo header("refresh:0,url='CapTaiKhoan.php?Ma=".$ma."&&MaAD=".$maad."&&MaTruong=".$matruong."'");
							
						}
					}
					elseif(isset($_GET['cn'])){
						$matk=$_GET['matk'];
						if($matk==null){
							echo "<script>alert('Chưa nhập MaTK!!!')</script>";
						}
						else{
							include_once("Controller/cTK(AD).php");
							$p=new cTKad();
							$p->upTKHS();
							$ma=$_GET['Ma'];
							$maad=$_GET['MaAD'];
							$matruong=$_GET['MaTruong'];
							echo "<script>alert('Đã cập nhật MaTK')</script>";
							echo header("refresh:0,url='CapTaiKhoan.php?Ma=".$ma."&&MaAD=".$maad."&&MaTruong=".$matruong."'");
							
						}
					}
					elseif(isset($_GET['cnu'])){
										$ma=$_GET['Ma'];
										$maad=$_GET['MaAD'];
										$matruong=$_GET['MaTruong'];
										$matk=$_GET['matk'];
										if($matk==null){
											echo "<script>alert('Vui lòng nhập mã tài khoản!!!')</script>";
										}
										else{
											include_once("Controller/cTK(AD).php");
											$p=new cTKad();
											$p->cntkttcm();
											echo "<script>alert('Đã cập nhật TK')</script>";
											echo header("refresh:0,url='CapTaiKhoan.php?Ma=".$ma."&&MaAD=".$maad."&&MaTruong=".$matruong."'");
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
	ttcm{
		color:#F63;
		font-size:20px;
		
	}
	matk{
		color:#C63;
	}
	cn{
		color:#F30;
		font-size:20px;
		font-weight:300;
	}
	d{
		color:#C60;
		font-size:25px;
	}
	th{
		color:#F30;
		background-color:#FF6;
	}
	ctk{
		color:#F30;
		font-size:25px;
	}
	nd{
		color:#060;
	}
	td{
		color:#633;
	}
	e{
		color:#F30;
		font-size:15px;
	}
	te{
		color:#090;
		font-size:17px;
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
	mh{
		color:#F60;
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
    <br />
		<center><ctk>Cấp Tài Khoản<ctk></center>
    <br />
        <div class="row">
        	<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
            	
            </div>
            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 border">
            <p></p>
            <br />
            	<center><nd>User:</nd>&nbsp;&nbsp;&nbsp;
                <select onchange="window.location.href=this.value;" name="nd">
                <option>
                           	  <?php
								if(isset($_GET['Ma'])&&isset($_GET['nd'])){
									echo $_GET['nd'];
								}
								else{
									echo "Choose";
								}
							 ?>
                </option>
                	<option value="CapTaiKhoan.php?Ma=<?php echo $_GET['Ma']?>&&MaAD=<?php echo $_GET['MaAD']?>&&MaTruong=<?php echo $_GET['MaTruong']?>&&nd=Học Sinh&&User=0">Học Sinh</option>
                    <option value="CapTaiKhoan.php?Ma=<?php echo $_GET['Ma']?>&&MaAD=<?php echo $_GET['MaAD']?>&&MaTruong=<?php echo $_GET['MaTruong']?>&&nd=Giáo Viên&&User=1">Giáo Viên</option>
                    <option value="CapTaiKhoan.php?Ma=<?php echo $_GET['Ma']?>&&MaAD=<?php echo $_GET['MaAD']?>&&MaTruong=<?php echo $_GET['MaTruong']?>&&nd=Tổ Trưởng Chuyên Môn&&User=4">TTCM</option>
                </select>&nbsp;&nbsp;&nbsp;<a href="CapTaiKhoan.php?Ma=<?php echo $_GET['Ma']?>&&MaTruong=<?php echo $_GET['MaTruong']?>&&bauTTCM"><img src="img/vote.jpg" height="50px" width="50px" /></a></center>
             
            <p></p>
                    <center>
                    
                    <?php
						if(isset($_GET['upTKGV'])){
							?>
                            	<form action="#" method="get">
                                	<br />
                                    <cn><center>Cập Nhật Tài Khoản</center></cn>
                                    <p></p>
                                	<matk>Mã TK:</matk>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="matk" size="5" />
                                    <p></p>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;
                                    <matk>Tên GV:</matk>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" value="<?php
                                    $cot=mysql_fetch_assoc($p->NameGV());
									echo $cot['TenGV']?>" size="25" />
                                    <input type="hidden" name="magv" value="<?php echo $_GET['upTKGV']?>" />
                                    <input type="hidden" name="Ma" value="<?php echo $_GET['Ma']?>" />
                                    <input type="hidden" name="MaAD" value="<?php echo $_GET['MaAD']?>" />
                                    <input type="hidden" name="MaTruong" value="<?php echo $_GET['MaTruong']?>" />
                                    <p></p>
                                    <center><input type="submit" value="Cập Nhật" name="up" /></center>
                                    
                                
                                </form>
                            <?php
						}
						elseif(isset($_GET['upTKHS'])){
							?>
                            	<form action="#" method="get">
                                	<br />
                                    <cn><center>Cập Nhật Tài Khoản</center></cn>
                                    <p></p>
                                	<matk>Mã TK:</matk>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="matk" size="5" />
                                    <p></p>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;
                                    <matk>Tên HS:</matk>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" value="<?php
                                    $cot=mysql_fetch_assoc($p->NameHS());
									echo $cot['TenHS']?>" size="25" />
                                    <input type="hidden" name="mahs" value="<?php echo $_GET['upTKHS']?>" />
                                    <input type="hidden" name="Ma" value="<?php echo $_GET['Ma']?>" />
                                    <input type="hidden" name="MaAD" value="<?php echo $_GET['MaAD']?>" />
                                    <input type="hidden" name="MaTruong" value="<?php echo $_GET['MaTruong']?>" />
                                    <p></p>
                                    <center><input type="submit" value="Cập Nhật" name="cn" /></center>
                                    
                                
                                </form>
                             <?php 
								}
								elseif(isset($_GET['upTKTTCM'])){
									
							?>
                            	<form action="#" method="get">
                                	<br />
                                    <cn><center>Cập Nhật Tài Khoản</center></cn>
                                    <p></p>
                                	<matk>Mã TK:</matk>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;<input type="text" name="matk" size="5" />
                                    <p></p>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;
                                    <matk>Tên TTCM:</matk>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" value="<?php
                                    $cot=mysql_fetch_assoc($p->namettcm());
									echo $cot['TenGV']?>" size="25" />
                                    <input type="hidden" name="mattcm" value="<?php echo $_GET['upTKTTCM']?>" />
                                    <input type="hidden" name="Ma" value="<?php echo $_GET['Ma']?>" />
                                    <input type="hidden" name="MaAD" value="<?php echo $_GET['MaAD']?>" />
                                    <input type="hidden" name="MaTruong" value="<?php echo $_GET['MaTruong']?>" />
                                    <p></p>
                                    <center><input type="submit" value="Cập Nhật" name="cnu" /></center>
                                    
                                
                                </form>
                             <?php 
								}
								elseif(isset($_GET['bauTTCM'])){
									$p=new cTKad();
									?>
                                    <center><ttcm>Bầu Tổ Trưởng Chuyên Môn</ttcm></center>
                                    <br />
                                    <br />
                                    <mh>Môn Học:</mh>&nbsp;&nbsp;&nbsp;
                                    <select onchange="window.location.href=this.value;">
   									<option>
                           					  <?php
												if(isset($_GET['Ma'])&&isset($_GET['mh'])){
													echo $_GET['mh'];
													}
												else{
														echo "Choose";
													}
											 ?>
               						 </option>
                                    	<option value="CapTaiKhoan.php?Ma=<?php echo $_GET['Ma']?>&&MaTruong=<?php
                                        echo $_GET['MaTruong']?>&&bauTTCM&&mh=Toán">Toán Học</option>
                                        <option value="CapTaiKhoan.php?Ma=<?php echo $_GET['Ma']?>&&MaTruong=<?php
                                        echo $_GET['MaTruong']?>&&bauTTCM&&mh=Vật Lý">Vật Lý</option>
                                        <option value="CapTaiKhoan.php?Ma=<?php echo $_GET['Ma']?>&&MaTruong=<?php
                                        echo $_GET['MaTruong']?>&&bauTTCM&&mh=Hóa Học">Hóa Học</option>
                                        <option value="CapTaiKhoan.php?Ma=<?php echo $_GET['Ma']?>&&MaTruong=<?php
                                        echo $_GET['MaTruong']?>&&bauTTCM&&mh=Sinh Học">Sinh Học</option>
                                        <option value="CapTaiKhoan.php?Ma=<?php echo $_GET['Ma']?>&&MaTruong=<?php
                                        echo $_GET['MaTruong']?>&&bauTTCM&&mh=Ngữ Văn">Ngữ Văn</option>
                                        <option value="CapTaiKhoan.php?Ma=<?php echo $_GET['Ma']?>&&MaTruong=<?php
                                        echo $_GET['MaTruong']?>&&bauTTCM&&mh=Lịch Sử">Lịch Sử</option>
                                        <option value="CapTaiKhoan.php?Ma=<?php echo $_GET['Ma']?>&&MaTruong=<?php
                                        echo $_GET['MaTruong']?>&&bauTTCM&&mh=Địa Lý">Địa Lý</option>
                                        <option value="CapTaiKhoan.php?Ma=<?php echo $_GET['Ma']?>&&MaTruong=<?php
                                        echo $_GET['MaTruong']?>&&bauTTCM&&mh=GDCD">GDCD</option>
                                        <option value="CapTaiKhoan.php?Ma=<?php echo $_GET['Ma']?>&&MaTruong=<?php
                                        echo $_GET['MaTruong']?>&&bauTTCM&&mh=Công Nghệ">Công Nghệ</option>
                                        <option value="CapTaiKhoan.php?Ma=<?php echo $_GET['Ma']?>&&MaTruong=<?php
                                        echo $_GET['MaTruong']?>&&bauTTCM&&mh=Tin Học">Tin Học</option>
                                        <option value="CapTaiKhoan.php?Ma=<?php echo $_GET['Ma']?>&&MaTruong=<?php
                                        echo $_GET['MaTruong']?>&&bauTTCM&&mh=Tiếng Anh">Tiếng Anh</option>
                                    </select>&nbsp;&nbsp;&nbsp;&nbsp;<mh>Giáo Viên:</mh>&nbsp;&nbsp;&nbsp;
                                    <select onchange="window.location.href=this.value;">
                                    <option>
                                    	<?php
										if(isset($_GET['gv'])){
											echo $_GET['gv'];
										}
										else{
											echo "Choose";
										}
										?>
                                    </option>
                                    <?php 
									$a=$p->GV();
									while($ab=mysql_fetch_assoc($a)){
									?>
                                    	<option value="CapTaiKhoan.php?Ma=<?php echo $_GET['Ma']?>&&MaTruong=<?php
                                        echo $_GET['MaTruong']?>&&bauTTCM&&mh=<?php echo $_GET['mh']?>&&gv=<?php echo $ab['TenGV']?>&&magv=<?php echo $ab['MaGV']?>"><?php echo $ab['TenGV']?></option>
                                    <?php
										}
									?>
                                    </select>
                                    <br />
                                    <br />
                                    <?php
									if(isset($_GET['tiencu'])){
										$p->TienCap();
										echo "<script>alert('Đã bầu TTCM thành công')</script>";
									}
									?>
                                    <form action="#" method="get">
                                    	<input type="hidden" name="Ma" value="<?php echo $_GET['Ma']?>" />
                                        <input type="hidden" name="MaTruong" value="<?php echo $_GET['MaTruong']?>" />
                                        <input type="hidden" name="bauTTCM" value="bauTTCM" />
                                        <input type="hidden" name="mh" value="<?php echo $_GET['mh']?>" />
                                        <input type="hidden" name="gv" value="<?php echo $_GET['gv']?>" />
                                        <input type="hidden" name="magv" value="<?php echo $_GET['magv']?>" />
                                    	<center><input type="submit" value="Tiến Cử" name="tiencu" /> </center>
                                    </form>
                                    <br />
                                    <br />
                                    <?php
									$c=$p->TienCu();
									$tc=mysql_fetch_assoc($c);
									if($tc['TenGV']!=null){
									?>
                                    <center><img src="img/tick.jpg" height="30px" width="30px"/>&nbsp;<mh>Đã tiến cử <?php echo $tc['TenGV']?> làm TTCM môn <?php echo $_GET['mh']?></mh></center>								
									<?php
									}
									else{
										?>
                                    <center><img src="img/chuatiencu.jpg" height="30px" width="30px"/>&nbsp;<mh>Chưa tiến cử TTCM môn <?php echo $_GET['mh']?></mh></center>								
									<?php
									}
									?>
                                    
                                    <br />
                                    <?php
								}
						else{
					?>
                    <table class="table-bordered">
                    	<thead>
                        	<tr>
                            	<th><center>Tên <?php echo $_GET['nd']?></center></th>
                                <th>MaTK</th>
                                <th>Cập Nhật</th>
                            </tr>
                            <?php
			$nd=$_GET['nd'];
			if($nd=='Giáo Viên'){
				$a=$p->XuatGV();
				while($col=mysql_fetch_assoc($a)){
					?>
                            <tr>
                            	<td><?php echo $col['TenGV']?></td>
                                <td><center><?php echo $col['MaTK']?></center></td>
                                <td><center><a href="CapTaiKhoan.php?Ma=<?php echo $_GET['Ma']?>&&MaAD=<?php echo $_GET['MaAD']?>&&MaTruong=<?php echo $_GET['MaTruong']?>&&nd=<?php echo $_GET['nd'];?>&&User=<?php echo  $_GET['User']?>&&upTKGV=<?php echo $col['MaGV']?>"><img  src="img/pc.jpg" height="20px" width="20px" /></a></center></td>
                            </tr>
                     <?php
				}
				
			}
			elseif($nd=='Tổ Trưởng Chuyên Môn'){
				$c=$p->ttcm();
				while($col=mysql_fetch_assoc($c)){
					?>
                            <tr>
                            	<td><?php echo $col['TenGV']?></td>
                                <td><center><?php echo $col['MaTK']?></center></td>
                                <td><center><a href="CapTaiKhoan.php?Ma=<?php echo $_GET['Ma']?>&&MaAD=<?php echo $_GET['MaAD']?>&&MaTruong=<?php echo $_GET['MaTruong']?>&&nd=<?php echo $_GET['nd'];?>&&User=<?php echo  $_GET['User']?>&&upTKTTCM=<?php echo $col['MaTTCM']?>"><img  src="img/pc.jpg" height="20px" width="20px" /></a></center></td>
                            </tr>
                     <?php
				}
				
			}
			elseif($nd=='Học Sinh'){
				$b=$p->XuatHS();
				while($col=mysql_fetch_assoc($b)){
					?>
                            <tr>
                            	<td><?php echo $col['TenHS']?></td>
                                <td><center><?php echo $col['MaTK']?></center></td>
                                <td><center><a href="CapTaiKhoan.php?Ma=<?php echo $_GET['Ma']?>&&MaAD=<?php echo $_GET['MaAD']?>&&MaTruong=<?php echo $_GET['MaTruong']?>&&nd=<?php echo $_GET['nd'];?>&&User=<?php echo  $_GET['User']?>&&upTKHS=<?php echo $col['MaHS']?>"><img  src="img/pc.jpg" height="20px" width="20px" /></a></center></td>
                            </tr>
                     <?php
				}
						}
			?>
                        </thead>
                    </table>
                    <center>
                    <br />
                    <?php 
				if($nd=='Giáo Viên'){
					$p->XuatPhanTrang();}
				elseif($nd=='Học Sinh'){
					$p->XuatPhanTrang1();
				}?>
                    <br />
                    </center>
                    <?php
						}
						
					?>
                    <br />
                    </center>
                    <div class="row">
            	<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 border">
                <br />
 
                 <?php
					if(isset($_POST['tao'])){
						include_once("Controller/cTK(AD).php");
						$a=$_POST['a'];
						$b=$_POST['b'];
						$c=$_POST['c'];
						$d=$_POST['d'];
						$f=$_POST['f'];
						$rp=$_POST['rp'];
						if($a==null||$b==null||$c==null){
							echo "<script>alert('Thiếu thông tin!!!')</script>";
						}
						elseif($b!=$rp){
							echo "<script>alert('MK nhập lại không khớp MK trước đó!!!')</script>";
						}
						elseif($b!='123456'){
							
							echo "<script>alert('MK phải là 123456!!!')</script>";
						}
						else{
							$p=new cTKad();
							$kq=$p->AddTK();
							if($kq==1){
							echo "<script>alert('Đã thêm tài khoản')</script>";
							}
							
						}
					}
				?>
            <form action="#" method="post" enctype="multipart/form-data">
                <uc>Mã Tài Khoản:&nbsp;</uc><input type="text" name="a" placeholder="NVA" size="27" required="required" /><br />
                <p></p>
                <uc>Pass:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</uc><input type="password" name="b" size="27" required="required" /><br />
                <p></p>
                <uc>Re-Pass:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</uc><input type="password" name="rp" size="27" required="required" /><br />
                <p></p>
                <uc>Chức Danh:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</uc>
                <select name="c">
                	<option value="0">Học Sinh</option>
                    <option value="1">Giáo Viên</option>
                    <option value="4">TTCM</option>
                </select>
                <br />
                <p></p>
                <uc>MaAD:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</uc><input type="text" name="d" value="<?php echo $_GET['MaAD']?>" size="27" /><br />
                <p></p>
                <p></p>
                <uc>Ảnh:&nbsp;&nbsp;&nbsp;</uc><input type="file" name="f" size="27" /><br />
                <br />
                <center><input type="submit" name="tao" value="Tạo" /></center>
         </form>
                <br />
                </div>
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                </div>
            </div>
             <br />
              <br />
            </div>
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
            	
            </div>
        </div>
        <br />
        <center><a href="home(AD).php?Ma=<?php echo $_GET['Ma']?>"><img src="img/tve.png" height="50px" width="50px" /></a></center>
        <p></p>
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