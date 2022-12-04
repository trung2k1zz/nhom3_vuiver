<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Thiết Lập Bài Kiểm Tra</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<style>
	th{
		background-color:#FFC;
		color:#F30;
	}
	button{
		background-color:#FF9;
	}
	cv{
		color:#F00;
	}
	y{
		color:#FC0;
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
	kd{
		color:#FC0;
		font-size:23px;
		font-weight:400;
		font-family:"Comic Sans MS", cursive;
	}
	ux{
		color:#FC6;
		font-size:25px;
		font-family:"Comic Sans MS", cursive;
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
            <p></p>
             <?php
						     
							 echo "<center>"."<g>".$c['TenGV']."</g>"."</center>";
							 
			?>
            <p></p>
            
        </div>
    </div>
    <p></p>
    <br />
   	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <center><ux>Thiết Lập Bài Kiểm Tra</ux></center>
        <br/>
        <p></p>
        &nbsp;&nbsp;&nbsp;&nbsp;<button type="button"><cv>Trắc Nghiệm</cv></button>
        <?php
		ob_start();
		include_once("Controller/cTLBKT(TK).php");
		$p=new cTLBKT();
		if(isset($_GET['submit'])){
			$d=$_GET['d'];
			$e=$_GET['e'];
			$g=$_GET['g'];
			if($d==null){
				echo "<script>alert('Chưa có ngày làm bài!!!')</script>";
			}
			elseif($e==null){
				echo "<script>alert('Chưa có hạn cho phép nhấn nút làm bài!!!')</script>";
			}
			elseif($g==null){
				echo "<script>alert('Chưa có số câu cần thiết lập!!!')</script>";
			}
			elseif(strtotime($e)<strtotime($d)){
				echo "<script>alert('Hạn cho phép nhấn nút làm bài lớn hơn ngày làm bài!!!')</script>";
			}
			else{
			$p->TaiDe();
			$p->Up();
			echo "<script>alert('Tạo đề kiểm tra TK thành công')</script>";
			}
		}
		elseif(isset($_GET['cn'])){
			$p->upTime();
			echo "<script>alert('Cập nhật thởi gian làm bài thành công')</script>";
		}
		ob_end_flush();
			 
		?>
        <form action="#" method="get">
        	<div class="row">
            	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
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
                	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="hidden" name="Ma" value="<?php echo $_GET['Ma']?>"/>
                    <input type="hidden" name="MaLop" value="<?php echo $_GET['MaLop']?>"/>
                    <input type="hidden" name="MaMon" value="<?php echo $a?>"/>
                    <input type="hidden" name="a" value="<?php echo $cot['MaGV'];?>" size="1"/>
                    <br/>
                    &nbsp;&nbsp;&nbsp;
                    Môn:&nbsp;&nbsp;
                    <input type="text" name="TenMon" value="<?php echo $com['TenMonHoc']?>" size="6"/>
                    
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lớp:
                    &nbsp;&nbsp;
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
                 	<option value="ThietLapBaiKiemTra.php?Ma=<?php echo $_GET['Ma']?>&&TenMon=<?php echo $_GET['TenMon']?>&&MaLop=<?php echo $col['MaLop']?>&&TenLop=<?php echo $col['TenLop']?>&&TenKhoi=<?php echo $col['TenKhoi']?>&&MaKhoi=<?php echo $col['MaKhoi']?>"><?php echo $col['TenLop']?></option>
                 <?php
					}
				 ?>
                 </select>
                 
                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Loại Bài:
                    &nbsp;&nbsp;
                    <select name="c">
                		<option value="TK1">TK1</option>
                        <option value="TK2">TK2</option>
                        <option value="TK3">TK3</option>
                        <option value="TK4">TK4</option>
                        <option value="TK5">TK5</option>
                    </select>
                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Start Time:
                    &nbsp;&nbsp;
                    <input type="text" name="d" placeholder="2022-05-10 09:00:00" size="17"/>
                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;End Time:
                    &nbsp;&nbsp;
                    <input type="text" name="e" placeholder="2022-05-10 10:00:00" size="17"/>
                </div>
                <p></p>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <p></p>
                <p></p>
                	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;Time:
                    &nbsp;&nbsp;
                    <select name="f">
                    	<option value="10">10</option>
                        <option value="15">15</option>
                        <option value="20">20</option>
                        <option value="25">25</option>
                        <option value="30">30</option>
                    </select>&nbsp;&nbsp;phút
                    &nbsp;&nbsp;&nbsp;&nbsp;Số câu:
                    &nbsp;&nbsp;
                    <input type="text" name="g" placeholder="20" size="1"/>
                    <br/>
                    <br/>
                    <center><input type="submit" value="Thiết Lập" name="submit"/>&nbsp;&nbsp;&nbsp;
                    <input type="submit" value="Cập Nhật" name="cn"/></center>
                </div>
                
            	
            </div>
        	
        </form>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <br/>
    <center>
    <table class="table-bordered">
    	<thead>
        	<tr>
            	<th><y><center>ID</center></y></th>
            	<th><y><center>Dạng Bài</center></y></th>
                <th><y><center>Nội Dung Câu Hỏi</center></y></th>
                <th><y><center>Phương Án A</center></y></th>
                <th><y><center>Phương Án B</center></y></th>
                <th><y><center>Phương Án C</center></y></th>
                <th><y><center>Phương Án D</center></y></th>
                <th><y><center>Đáp Án</center></y></th>
                <th><y><center>Chi Tiết</center></y></th>
                <th><y><center>Thời Gian Làm Bài(phút)</center></y></th>
                <th><y><center>Ngày Làm Bài</center></y></th>
                <th><y><center>Ngày Kết Thúc</center></y></th>
            </tr>
    	<?php
			include_once("Controller/cTLBKT(TK).php");
			$p=new cTLBKT();
		if(isset($_GET['Ma'])&&isset($_GET['TenMon'])&&isset($_GET['TenKhoi'])&&isset($_GET['MaLop'])){
			$x=$p->XuatRa();
			while($hi=mysql_fetch_assoc($x)){
				?>
                	<tr>
                    	<td><center><?php echo $hi['MaTK']?></center></td>
                    	<td><center><?php echo $hi['TieuDe']?></center></td>
                        <td><center><?php
							$anh=$hi['NoiDungCH'];
							if(preg_match("/^[A-Za-z]{1,100}[.mp3]{3}/",$anh)){
									?>
                                   <audio controls preload="none">
 										 <source src="img/<?php echo $hi['NoiDungCH']?>" type="audio/mpeg">
  									</audio>
                                    <?php
							}
							elseif(!preg_match("/^[A-Za-z]{1,100}[.(jpg|png|gif)]{3}/",$anh)){
									echo "<kx>&nbsp;".$hi['NoiDungCH']."</kx>";
							}
							else{
								?>	
                                	&nbsp;&nbsp;<img src="img/<?php echo $hi['NoiDungCH']?>" height="175px" width="175px"/>
                                <?php 
							}?></center></td>
                        <td><center><?php
							$anh=$hi['QA'];
							if(!preg_match("/^[A-Za-z]{1,100}[.(jpg|png)]{3}/",$anh)){
									echo "<k>"."&nbsp;A.".$hi['QA']."<br/>"."</k>";

							}
							else{
								?>	
                                	A.&nbsp;&nbsp;<img src="img/<?php echo $hi['QA'];?>" height="75px" width="75px"/>&nbsp;&nbsp;
                                <?php 
							}?></center></td>
                        <td><center><?php
							$anh=$hi['QB'];
							if(!preg_match("/^[A-Za-z]{1,100}[.(jpg|png)]{3}/",$anh)){
									echo "<k>"."&nbsp;B.".$hi['QB']."<br/>"."</k>";

							}
							else{
								?>	
                                	B.&nbsp;&nbsp;<img src="img/<?php echo $hi['QB']?>" height="75px" width="75px"/>&nbsp;&nbsp;
                                <?php 
							}?></center></td>
                        <td><center><?php
							$anh=$hi['QC'];
							if(!preg_match("/^[A-Za-z]{1,100}[.(jpg|png)]{3}/",$anh)){
									echo "<k>"."&nbsp;C.".$hi['QC']."<br/>"."</k>";
							}
							else{
							    ?>	
                                	C.&nbsp;&nbsp;<img src="img/<?php echo $hi['QC']?>" height="75px" width="75px"/>&nbsp;&nbsp;
                                <?php
									}
								?></center></td>
                        <td><center><?php
							$anh=$hi['QD'];
							if(!preg_match("/^[A-Za-z]{1,100}[.(jpg|png)]{3}/",$anh)){
									echo "<k>"."&nbsp;D.".$hi['QD']."<br/>"."</k>";
							}
							else{
								?>	
                                	D.&nbsp;&nbsp;<img src="img/<?php echo $hi['QD']?>" height="75px" width="75px"/>&nbsp;&nbsp;
                                <?php 
							}?></center></td>
                        <td><center><?php echo $hi['Ans']?></center></td>
                        <td><center><?php echo $hi['Detail']?></center></td>
                        <td><center><?php echo $hi['ThoiGianLamBai']?></center></td>
                        <td><center><?php echo $hi['NgayLamBai']?></center></td>
                        <td><center><?php echo $hi['NgayKetThuc']?></center></td>
                    </tr>
                <?php
				
			}
		}
		else{
			echo "<center>";
			echo "<br/>";
			echo "Can't Found!!!";
			echo "<br/>";
			echo "</center>";
		}
		?>
        </thead>
    </table>
    </center>
    <br />
            <center>
            	<?php
				include_once("View/vTLBKT.php");
				$p=new Xuatphantrang();
				$p->page5();
				?>
            </center>
    </div>
    <div class="row">
    	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <br/>
        <br/>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="button"><cv>&nbsp;&nbsp;&nbsp;Tự Luận&nbsp;&nbsp;&nbsp;</cv></button>
        <?php
			include_once("Controller/cTLBKT(TK).php");
			$p=new cTLBKT();
			if(isset($_POST['tao'])){
				$hn=$_POST['hn'];
				$f=$_FILES['f']['name'];
				if($hn==null){
					echo "<script>alert('Chưa thiết lập hạn chót để nộp!!!')</script>";
					
				}
	 			if($f==null){
		  				 echo "<script>alert('Chưa có tài liệu được chọn!!!')</script>";
	   				}
				else{
					$ten=$_FILES['f']['name'];
					$tam=$_FILES['f']['tmp_name'];
					$path="TuLuan/".$ten;
					$tai=$p->upBaiTL();
					if($tai){
					move_uploaded_file($tam,$path);
							echo "<script>alert('Tải đề lên thành công')</script>";
						}
					else{
								echo "<script>alert('Tải đề lên thất bại')</script>";
						}
					}
				}
		?>
        <form action="#" method="post" enctype="multipart/form-data">
        <?php
					include_once("Controller/cTLBKT(TK).php");
					$p=new cTLBKT();
					$gv=$p->MaGV();
					$cotm=mysql_fetch_assoc($gv);
					$mmi=$p->GetHTMM();
					$cln=mysql_fetch_assoc($mmi);
					$a=$cln['MaMonHoc']
		?>
        		
       			    <input type="hidden" name="Ma" value="<?php echo $_GET['Ma']?>"/>
                    <input type="hidden" name="MaLop" value="<?php echo $_GET['MaLop']?>"/>
                    <input type="hidden" name="MaMon" value="<?php echo $a?>"/>
                    <input type="hidden" name="a" value="<?php echo $cotm['MaGV'];?>" size="1"/>
        <br/>
        <?php
			include_once("Controller/cTLBKT(TK).php");
			$p=new cTLBKT();
			$ab=$p->GetHT();
			$xs=mysql_fetch_assoc($ab);
		?>
        	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Môn:&nbsp;&nbsp;&nbsp;<input type="text" value="<?php echo 
			$xs['TenMonHoc']?>" size="6"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lớp:&nbsp;&nbsp;&nbsp;&nbsp;
            <select name="lop" onchange="window.location.href=this.value;">
             <option value="#"><?php 
						if(isset($_GET['TenLop'])){
							echo $_GET['TenLop'];
							}
					else{
							echo "Choose";
							}
				
						?></option>
            <?php
				include_once("Controller/cTLBKT(TK).php");
				$p=new cTLBKT();
				$hol=$p->GetHT();
				while($colt=mysql_fetch_assoc($hol)){
			?>
            	<option value="ThietLapBaiKiemTra.php?Ma=<?php echo $_GET['Ma']?>&&TenMon=<?php echo $_GET['TenMon']?>&&MaLop=<?php echo $colt['MaLop']?>&&TenLop=<?php echo $colt['TenLop']?>&&TenKhoi=<?php echo $colt['TenKhoi']?>&&MaKhoi=<?php echo $colt['MaKhoi']?>"><?php echo $colt['TenLop']?></option>
            <?php
				}
			?>
            </select>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Loại Bài:&nbsp;&nbsp;&nbsp;
            <select name="lbtl">
            			<option value="TK6">TL1</option>
                        <option value="TK7">TL2</option>
                        <option value="TK8">TL3</option>
            </select>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hạn Nộp:&nbsp;&nbsp;&nbsp;
            <input type="text" name="hn" placeholder="2022-05-15 14:00:00" size="17"/>&nbsp;&nbsp;&nbsp;&nbsp;File:&nbsp;
            <input type="file" name="f"/>
            <br/>
            <br/>
            <center><input type="submit" name="tao" value="Tạo"/></center>
            </br/>
        </form>
        </div>
    </div>
    <br />
    <br />
    <div class="row">
    	<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        </div>
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
        <center><kd>Bộ Đề Tự Luận Đăng Tải</kd></center>
        <br/>
        <br />
        <center>
        <table class="table-bordered">
        	<thead>
            	<tr>
                	<th><center>Bài Kiểm Tra</center></th>
                    <th><center>Hạn Nộp</center></th>
                    <th><center>Lớp</center></th>
                    <th><center>Ngày Đăng Tải</center></th>
                </tr>
                 <?php
					include_once("Controller/cTLBKT(TK).php");
					$p=new cTLBKT();
					$xu=$p->XuatBaiTL();
					while($cum=mysql_fetch_assoc($xu)){
				?>
            	<tr>
                	<td>&nbsp;<a href="download.php?file=<?php echo $cum['TenBaiTL']?>"><img src="img/tichtuluan.jpg" height="25px" width="25px"/><?php echo $cum['TenBaiTL']?></a></td>
                    <td><center><?php echo $cum['HanNop']?></center></td>
                    <td><center><?php echo $_GET['TenLop']?></center></td>
                    <td><center><?php echo $cum['NgayTaoBaiTL']?></center></td>
                </tr>
                 <?php
					}
				?>
            </thead>
        </table>
        </center>
        <br/>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        </div>
    </div>
    <p></p>
    <center><a href="home(GV).php?Ma=<?php echo $_GET['Ma']?>"><img src="img/tve.png" height="50px" width="50px"/></a></center>
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