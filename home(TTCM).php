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
	te{
		color:#C93;
		font-size:16px;
	}
	th{
		background-color:#C69;
		color:#FF9;
	}
	dd{
		color:#090;
	}
	nh{
		color:#03F;
	}
	c{
		color:#63F;
		font-size:20px;
	}
	d{
		color:#C60;
		font-size:25px;
	}
	td{
		color:#06F;
	}
	tf{
		color:#03F;
	}
	mh{
		color:#C60;
	}
	e{
		color:#F30;
		font-size:15px;
	}
	ri{
		color:#F30;
	}
	ux{
		color:#F30;
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
				include_once("Controller/cTK(TTCM).php");
				$p=new cTKttcm();
				$hien=$p->infoad();
				$cot=mysql_fetch_assoc($hien);
					 	echo "<center>";?>
						<img src="<?php echo "img/".$cot['Anh']; ?>" height="50px" width="50px" class="rounded-circle">
						<?php echo "</center>";?>
                        <center>
                        <p></p>
                        <?php
							echo "<te>".$cot['TenGV']."</te>";
						?>
                        <p></p>
                        </center>
                 
        </div>
    </div>
    <p></p>
    <div class="row">
        <p></p>
        <p></p>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="dnhap.php"><img  src="img/logout.jpg" height="25px" width="25px" /></a>
        
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    
                    <img src="img/hoa.jpg" height="50px" width="50px"/>DANH SÁCH CÁC CÂU HỎI GK CẦN DUYỆT</h5>
                    <div class="row">
                    	<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                        </div>
                    	<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 border">
                  <form action="#" method="get">
                        <?php 
						include_once("Controller/cDuyetCH.php");
						$p=new cDuyet();
						$hm=$p->HienMonHoc();
						$mon=mysql_fetch_assoc($hm);
						?>
                        <p></p>
                        <center>
                        <mh>Môn Học:</mh>&nbsp;<input type="text" value="<?php echo $mon['TenMonHoc']?>" size="7" disabled="disabled"/>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<mh>Khối:</mh>&nbsp;
            <select onchange="window.location.href=this.value;">
            <option value="#"><?php 
						if(isset($_GET['TenKhoi'])){
							echo $_GET['TenKhoi'];
							}
					else{
							echo "Choose";
							}
				
						?></option>
            	<option value="home(TTCM).php?Ma=<?php echo $_GET['Ma']?>&&TenMon=<?php echo $mon['TenMonHoc']?>&&TenKhoi=6">6</option>
                <option value="home(TTCM).php?Ma=<?php echo $_GET['Ma']?>&&TenMon=<?php echo $mon['TenMonHoc']?>&&TenKhoi=7">7</option>
                <option value="home(TTCM).php?Ma=<?php echo $_GET['Ma']?>&&TenMon=<?php echo $mon['TenMonHoc']?>&&TenKhoi=8">8</option>
                <option value="home(TTCM).php?Ma=<?php echo $_GET['Ma']?>&&TenMon=<?php echo $mon['TenMonHoc']?>&&TenKhoi=9">9</option>
                </select>
                
				
            </center>
            <?php
				$hien=$p->HienMaMon();
				$mamon=mysql_fetch_assoc($hien);
			?>
            <input type="hidden" name="Ma" value="<?php echo $_GET['Ma']?>"/>
            <input type="hidden" name="TenMon" value="<?php echo $_GET['TenMon']?>"/>
            <input type="hidden" name="TenKhoi" value="<?php echo $_GET['TenKhoi']?>"/>
            <input type="hidden" name="LoaiBai" value="GK"/>
            <input type="hidden" name="MaGV" value="<?php echo $cot['MaGV']?>"/>
            <input type="hidden" name="MaMon" value="<?php echo $mamon['MaMonHoc']?>"/>
            <p></p>
            <div class="row">
            	<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
               	<center>
                <table class="table-bordered">
                	<thead>
                    	<tr>
                        	<th><center>Nội Dung CH</center></th>
                            <th><center>Tiêu Đề</center></th>
                            <th><center>QA</center></th>
                            <th><center>QB</center></th>
                            <th><center>QC</center></th>
                            <th><center>QD</center></th>
                            <th><center>Đáp Án</center></th>
                            <th><center>Duyệt</center></th>
                        </tr>
                        <?php
						$nh=$p->NHCHGK();
						while($nhch=mysql_fetch_assoc($nh)){
						
						?>
                        	<tr>
                            	<td><?php
							$anh=$nhch['NoiDungCH'];
							if(preg_match("/^[A-Za-z]{1,100}[.mp3]{3}/",$anh)){
									?>
                                   <audio controls preload="none">
 										 <source src="img/<?php echo $nhch['NoiDungCH']?>" type="audio/mpeg">
  									</audio>
                                    <p></p>
                                    <?php
							}
							elseif(!preg_match("/^[A-Za-z]{1,100}[.(jpg|png|gif)]{3}/",$anh)){
									echo $nhch['NoiDungCH'];
							}
							else{
								?>	
                                	<center><img src="img/<?php echo $nhch['NoiDungCH']?>" height="50px" width="50px"/></center>
                                <?php 
							}?></td>
                                <td><?php echo "<center>".$nhch['TieuDe']."<center>"?></td>
                                <td><?php
							$anh=$nhch['QA'];
							if(!preg_match("/^[A-Za-z]{1,100}[.(jpg|png)]{3}/",$anh)){
									echo "<center>".$nhch['QA']."</center>";
							}
							else{
								?>	
                                	<center><img src="img/<?php echo $nhch['QA']?>" height="50px" width="50px"/></center>
                                <?php 
							}?></td>
                                <td><?php
							$anh=$nhch['QB'];
							if(!preg_match("/^[A-Za-z]{1,100}[.(jpg|png)]{3}/",$anh)){
									echo "<center>".$nhch['QB']."</center>";
							}
							else{
								?>	
                                	<center><img src="img/<?php echo $nhch['QB']?>" height="50px" width="50px"/></center>
                                <?php 
							}?></td>
                                <td><?php
							$anh=$nhch['QC'];
							if(!preg_match("/^[A-Za-z]{1,100}[.(jpg|png)]{3}/",$anh)){
									echo "<center>".$nhch['QC']."</center>";
							}
							else{
								?>	
                                	<center><img src="img/<?php echo $nhch['QC']?>" height="50px" width="50px"/></center>
                                <?php 
							}?></td>
                                <td><?php
							$anh=$nhch['QD'];
							if(!preg_match("/^[A-Za-z]{1,100}[.(jpg|png)]{3}/",$anh)){
									echo "<center>".$nhch['QD']."</center>";
							}
							else{
								?>	
                                	<center><img src="img/<?php echo $nhch['QD']?>" height="50px" width="50px"/></center>
                                <?php 
							}?></td>
                            <td>
							<?php echo "<center>".$nhch['Ans']."<center>"?></td>
                                <td><a href="duyet.php?Ma=<?php echo $_GET['Ma']?>&&TenMon=<?php echo $_GET['TenMon']?>&&TenKhoi=<?php echo $_GET['TenKhoi']?>&&duetID=<?php echo $nhch['MaNHCH']?>"><button type="button" class="btn-success"/>Duyệt</button></a></td>
                            </tr>
                        <?php
						
						}
						?>
                       
                    </thead>
                </table>
                </center>
                 </form>
                <br/>
                <center><?php $p->SoTrang();?></center><p></p>
                <center><dd>Đã Duyệt <?php
				 $sc=mysql_fetch_assoc($p->SLDuyetGK());
				 echo "<c>".$sc['SLC']."</c>";
				 ?>&nbsp;Câu</dd></center><p></p>
                 <?php 
				 $tg=mysql_fetch_assoc($p->Time());
				 echo "<center>"."<ux>Thời gian làm bài:&nbsp</ux>";
				  echo "<tf>".$tg['ThoiGianLamBai']."</tf>"."&nbsp;<ri>phút</ri>"."<br/>"."</center>"."<br/>";
				  echo "<center>"."<ux>Ngày dự kiến:&nbsp;</ux>";
				 echo "<tf>".$tg['NgayLamBai']."</tf>"."</center>"."<br/>";
				 
				 ?></center>
                 <br />
                 <?php
				 	if(isset($_GET['tl'])){
						$tglb=$_GET['tglb'];
						$nbd=$_GET['nbd'];
						$nkt=$_GET['nkt'];
						$hc=$_GET['hc'];
						if($tglb==null){
							echo "<script>alert('Chưa setup thời gian làm bài!!!')</script>";
						}
						elseif($nbd==null){
							echo "<script>alert('Chưa setup ngày làm bài!!!')</script>";
						}
						elseif($nkt==null){
							echo "<script>alert('Chưa setup hạn chót nhấn nút!!!')</script>";
						}
						elseif($hc==null){
							echo "<script>alert('Chưa setup hạn chót làm bài!!!')</script>";
						}
						elseif(strtotime($nkt)<strtotime($nbd)){
							echo "<script>alert('Hạn chót nhấn nút làm bài phải lớn hơn ngày làm bài!!!')</script>";
						}
						elseif(strtotime($hc)<strtotime($nbd)){
							echo "<script>alert('Hạn chót kết thúc làm bài phải lớn hơn ngày làm bài!!!')</script>";
						}
						else{
							$p->TimeGK();
							echo "<script>alert('Setup thời gian làm bài GK thành công')</script>";
						}
					}
				 ?>
                <form action="#" method="get">
                <input type="hidden" name="Ma" value="<?php echo $_GET['Ma']?>"/>
            	<input type="hidden" name="LoaiBai" value="GK"/>
            	<input type="hidden" name="MaGV" value="<?php echo $cot['MaGV']?>"/>
            	<input type="hidden" name="MaMon" value="<?php echo $mamon['MaMonHoc']?>"/>
                <input type="hidden" name="MaTTCM" value="<?php echo $cot['MaTTCM']?>"/>
                
                <center><mh>StartDate:&nbsp;</mh>&nbsp;<input type="text" name="nbd" placeholder="2022-05-10 10:00:00" size="17" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<mh>EndDate:&nbsp;</mh>&nbsp;<input type="text" name="nkt" placeholder="2022-05-10 10:15:00" size="17" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<mh>Hạn chót:&nbsp;<input type="text" name="hc" placeholder="2022-05-10 11:00:00 " size="17" /></mh>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br /><mh>Time:&nbsp;
                <select name="tglb">
                	<option value="45">45</option>
                    <option value="45">60</option>
                    <option value="45">90</option>
                </select>&nbsp;&nbsp;phút
                </mh></center>
                 <br />
                 <center><input type="submit" name="tl" value="Thiết Lập" /></center>
                </form>
                 <br  />
                </div>
                <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                </div>
            </div>
                        </div>
                        <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                        </div>
                    </div>
                       <p></p>
   <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;
                 	<img src="img/hoa.jpg" height="50px" width="50px"/>DANH SÁCH CÁC CÂU HỎI CK CẦN DUYỆT</h5>
                    <form>
                    	<div class="row">
                    	<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                        </div>
                    	<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 border">
                  <form action="#" method="get">
                        <?php 
						include_once("Controller/cDuyetCH.php");
						$p=new cDuyet();
						$hm=$p->HienMonHoc();
						$mon=mysql_fetch_assoc($hm);
						?>
                        <p></p>
                        <center>
                        <mh>Môn Học:</mh>&nbsp;<input type="text" value="<?php echo $mon['TenMonHoc']?>" size="7" disabled="disabled"/>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<mh>Khối:</mh>&nbsp;
            <select onchange="window.location.href=this.value;">
            <option value="#"><?php 
						if(isset($_GET['TenKhoi'])){
							echo $_GET['TenKhoi'];
							}
					else{
							echo "Choose";
							}
				
						?></option>
            	<option value="home(TTCM).php?Ma=<?php echo $_GET['Ma']?>&&TenMon=<?php echo $mon['TenMonHoc']?>&&TenKhoi=6">6</option>
                <option value="home(TTCM).php?Ma=<?php echo $_GET['Ma']?>&&TenMon=<?php echo $mon['TenMonHoc']?>&&TenKhoi=7">7</option>
                <option value="home(TTCM).php?Ma=<?php echo $_GET['Ma']?>&&TenMon=<?php echo $mon['TenMonHoc']?>&&TenKhoi=8">8</option>
                <option value="home(TTCM).php?Ma=<?php echo $_GET['Ma']?>&&TenMon=<?php echo $mon['TenMonHoc']?>&&TenKhoi=9">9</option>
                </select>
                
				
            </center>
            <?php
				$hien=$p->HienMaMon();
				$mamon=mysql_fetch_assoc($hien);
			?>
            <input type="hidden" name="Ma" value="<?php echo $_GET['Ma']?>"/>
            <input type="hidden" name="TenMon" value="<?php echo $_GET['TenMon']?>"/>
            <input type="hidden" name="TenKhoi" value="<?php echo $_GET['TenKhoi']?>"/>
            <input type="hidden" name="LoaiBai1" value="CK"/>
            <input type="hidden" name="MaGV" value="<?php echo $cot['MaGV']?>"/>
            <input type="hidden" name="MaMon" value="<?php echo $mamon['MaMonHoc']?>"/>
            <p></p>
            <div class="row">
            	<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
               	<center>
                <table class="table-bordered">
                	<thead>
                    	<tr>
                        	<th><center>Nội Dung CH</center></th>
                            <th><center>Tiêu Đề</center></th>
                            <th><center>QA</center></th>
                            <th><center>QB</center></th>
                            <th><center>QC</center></th>
                            <th><center>QD</center></th>
                            <th><center>Đáp Án</center></th>
                            <th><center>Duyệt</center></th>
                        </tr>
                        <?php
						$nh=$p->NHCHCK();
						while($nhch=mysql_fetch_assoc($nh)){
						
						?>
                        	<tr>
                            	<td><?php
							$anh=$nhch['NoiDungCH'];
							if(!preg_match("/^[A-Za-z]{1,100}[.(jpg|png)]{3}/",$anh)){
									echo "<center>"."<nh>".$nhch['NoiDungCH']."</nh>"."</center>";
							}
							else{
								?>	
                                	<center><img src="img/<?php echo $nhch['NoiDungCH']?>" height="50px" width="50px"/></center>
                                <?php 
							}?></td>
                                <td><?php echo "<center>".$nhch['TieuDe']."<center>"?></td>
                                <td><?php
							$anh=$nhch['QA'];
							if(!preg_match("/^[A-Za-z]{1,100}[.(jpg|png)]{3}/",$anh)){
									echo "<center>".$nhch['QA']."</center>";
							}
							else{
								?>	
                                	<center><img src="img/<?php echo $nhch['QA']?>" height="50px" width="50px"/></center>
                                <?php 
							}?></td>
                                <td><?php
							$anh=$nhch['QB'];
							if(!preg_match("/^[A-Za-z]{1,100}[.(jpg|png)]{3}/",$anh)){
									echo "<center>".$nhch['QB']."</center>";
							}
							else{
								?>	
                                	<center><img src="img/<?php echo $nhch['QB']?>" height="50px" width="50px"/></center>
                                <?php 
							}?></td>
                                <td><?php
							$anh=$nhch['QC'];
							if(!preg_match("/^[A-Za-z]{1,100}[.(jpg|png)]{3}/",$anh)){
									echo "<center>".$nhch['QC']."</center>";
							}
							else{
								?>	
                                	<center><img src="img/<?php echo $nhch['QC']?>" height="50px" width="50px"/></center>
                                <?php 
							}?></td>
                                <td><?php
							$anh=$nhch['QD'];
							if(!preg_match("/^[A-Za-z]{1,100}[.(jpg|png)]{3}/",$anh)){
									echo "<center>".$nhch['QD']."</center>";
							}
							else{
								?>	
                                	<center><img src="img/<?php echo $nhch['QD']?>" height="50px" width="50px"/></center>
                                <?php 
							}?></td>
                            <td>
							<?php echo "<center>".$nhch['Ans']."<center>"?></td>
                                <td><a href="duyet.php?Ma=<?php echo $_GET['Ma']?>&&TenMon=<?php echo $_GET['TenMon']?>&&TenKhoi=<?php echo $_GET['TenKhoi']?>&&duyetID=<?php echo $nhch['MaNHCH']?>"><button type="button" class="btn-success"/>Duyệt</button></a></td>
                            </tr>
                        <?php
						
						}
						?>
                       
                    </thead>
                </table>
                </center>
                 </form>
                <br/>
                <center><?php $p->SoTrangCK();?></center><p></p>
                <center><dd>Đã Duyệt <?php
				 $sc=mysql_fetch_assoc($p->SLDuyetCK());
				 echo "<c>".$sc['SLC']."</c>";
				 ?>&nbsp;Câu</dd></center><p></p>
                 <?php 
				 $tg=mysql_fetch_assoc($p->Timei());
				 echo "<center>"."<ux>Thời gian làm bài:&nbsp</ux>";
				  echo "<tf>".$tg['ThoiGianLamBai']."</tf>"."&nbsp;<ri>phút</ri>"."<br/>"."</center>"."<br/>";
				  echo "<center>"."<ux>Ngày dự kiến:&nbsp;</ux>";
				 echo "<tf>".$tg['NgayLamBai']."</tf>"."</center>"."<br/>";
				 
				 ?></center>
                 <br />
                 <?php
				 	if(isset($_GET['tlck'])){
						$tglb1=$_GET['tglb1'];
						$nbd1=$_GET['nbd1'];
						$nkt1=$_GET['nkt1'];
						$hc1=$_GET['hc1'];
						if($tglb1==null){
							echo "<script>alert('Chưa setup thời gian làm bài!!!')</script>";
						}
						elseif($nbd1==null){
							echo "<script>alert('Chưa setup ngày làm bài!!!')</script>";
						}
						elseif($nkt1==null){
							echo "<script>alert('Chưa setup hạn chót nhấn nút!!!')</script>";
						}
						elseif($hc1==null){
							echo "<script>alert('Chưa setup hạn chót làm bài!!!')</script>";
						}
						elseif(strtotime($nkt1)<strtotime($nbd1)){
							echo "<script>alert('Hạn chót nhấn nút làm bài phải lớn hơn ngày làm bài!!!')</script>";
						}
						elseif(strtotime($hc1)<strtotime($nbd1)){
							echo "<script>alert('Hạn chót kết thúc làm bài phải lớn hơn ngày làm bài!!!')</script>";
						}
						
						else{
							$p->TimeCK();
							echo "<script>alert('Setup thời gian làm bài CK thành công')</script>";
						}
					}
				 ?>
                <form action="#" method="get">
                <input type="hidden" name="Ma" value="<?php echo $_GET['Ma']?>"/>
            	<input type="hidden" name="LoaiBai1" value="CK"/>
            	<input type="hidden" name="MaGV" value="<?php echo $cot['MaGV']?>"/>
            	<input type="hidden" name="MaMon" value="<?php echo $mamon['MaMonHoc']?>"/>
                <input type="hidden" name="MaTTCM" value="<?php echo $cot['MaTTCM']?>"/>
                
                <center><mh>StartDate:&nbsp;</mh>&nbsp;<input type="text" name="nbd1" placeholder="2022-05-10 10:00:00" size="17" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<mh>EndDate:&nbsp;</mh>&nbsp;<input type="text" name="nkt1" placeholder="2022-05-10 10:15:00" size="17" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<mh>Hạn chót:&nbsp;<input type="text" name="hc1" placeholder="2022-05-10 11:00:00 " size="17" /></mh>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br /><mh>Time:&nbsp;
                <select name="tglb1">
                	<option value="60">45</option>
                	<option value="60">60</option>
                    <option value="90">90</option>
                </select>&nbsp;&nbsp;phút
                </mh></center>
                 <br />
                 <center><input type="submit" name="tlck" value="Thiết Lập" /></center>
                </form>
                 <br  />
                </div>
                <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                </div>
            </div>
                        </div>
                        <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                        </div>
                    </div>
   <h5>
                    </form>
                
                
    
    	 
    </div>
    <br />
    <br />
    <br />
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
  