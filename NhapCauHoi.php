<?php 
ob_start();
	include_once("Controller/cNHCHTN.php");
	if(isset($_POST['sua'])){
		$p=new cCHgv();
		$p->suaCH();
		echo "<script>alert('Sửa câu hỏi thành công!')</script>";
		$a=$_GET['Ma'];
		$b=$_GET['TenMon'];
		$m=ChuyenSangTiengVietKhongDau($b);
		$c=$_GET['TenKhoi'];
		$d=$_GET['SoCauTao'];
		$e=$_GET['submit'];
		echo header("refresh:0,url='#'");
	}
ob_end_flush();
?>
<?php
function ChuyenSangTiengVietKhongDau($str)
{
$str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|� �|ặ|ẳ|ẵ)/", 'a', $str);
$str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $str);
$str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $str);
$str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|� �|ợ|ở|ỡ)/", 'o', $str);
$str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $str);
$str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $str);
$str = preg_replace("/(đ)/", 'd', $str);
$str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|� �|Ặ|Ẳ|Ẵ)/", 'A', $str);
$str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'E', $str);
$str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'I', $str);
$str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|� �|Ợ|Ở|Ỡ)/", 'O', $str);
$str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'U', $str);
$str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'Y', $str);
$str = preg_replace("/(Đ)/", 'D', $str);
$str = preg_replace("/( )/", '%20', $str);
return $str;
}
?>
      
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Nhập Câu Hỏi Ngân Hàng Trắc Nghiệm</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>

<style>
	th{
		background-color:#FFC;
		color:#C90;
	}
	textarea{
		height:100px;
		width:290px
	}
	tx{
		color:#C93;
		font-size:20px;
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
<?php
	if(isset($_GET['submit'])){
		$socautao=$_GET['SoCauTao'];
		$ma=$_GET['Ma'];
		if($socautao==null){
			echo "<script>alert('Vui lòng nhập số câu cần tạo không được bỏ trống!')</script>";
			echo header("refresh:0,url='TaoNHCauHoi.php?Ma=$ma'");
		}
		elseif($socautao<=0){
			echo "<script>alert('Số câu cần tạo không được <=0 !')</script>";
			echo header("refresh:0,url='TaoNHCauHoi.php?Ma=$ma'");
			
		}
		elseif($socautao>1000){
			echo "<script>alert('Số câu cần tạo cho phép của một môn không vượt quá 1000 !')</script>";
			echo header("refresh:0,url='TaoNHCauHoi.php?Ma=$ma'");
			
		}
		
	else{
?>
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
            
        </div>
        
        </div>
        <br />
        <br />
<?php
ob_start();
	include_once("Controller/cNHCHTN.php");
	$p=new cCHgv();
	if(isset($_POST['submit'])){
			$tieude=$_POST['td'];
			$cauhoi=$_POST['ch'];
			$a=$_POST['pa'];
			$b=$_POST['pb'];
			$c=$_POST['pc'];
			$d=$_POST['pd'];
			$ans=$_POST['da'];
			$socautao=$_POST['SoCauTao'];
	
	if($tieude==null){
		echo "<script>alert('Thiếu tiêu đề!')</script>";
	}
	if($cauhoi==null){
		echo "<script>alert('Thiếu câu hỏi!')</script>";
	}
	if($a==null){
		echo "<script>alert('Thiếu phương án A !')</script>";	
		}
	if($b==null){
		echo "<script>alert('Thiếu phương án B!')</script>";
	}
	if($c==null){
		echo "<script>alert('Thiếu phương án C!')</script>";
	}
	if($d==null){
		echo "<script>alert('Thiếu phương án D!')</script>";
	}
	if($ans==null){
		echo "<script>alert('Thiếu đáp án!')</script>";
	}
	if($ans!='A'&&$ans!='B'&&$ans!='C'&&$ans!='D'){
		echo "<script>alert('Đáp án phải là A hoặc B hoặc C hoặc D!')</script>";
	}
	elseif($tieude!='TK'&&$tieude!='GK'&&$tieude!='CK'){
		echo "<script>alert('Tiêu đề phải là TK hoặc GK hoặc CK!')</script>";
	}
	else{
	$kt=$p->XemXet();
	$sl=mysql_fetch_assoc($kt);
	$ktra=$sl['SLC'];
		if($ktra>$socautao-1){
			echo "<script>alert('Vượt ngưỡng số câu cần tạo!')</script>";
		}
		else{
			$kq=$p->TaoCH();
			echo "<script>alert('Tạo câu hỏi thành công!')</script>";
				
		}
	}
	}
ob_end_flush();


?>
     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
     	<div class="row">
        	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 border">
            	<form action="#" method="post">
                	<center><tx>Nhập câu hỏi môn <?php echo $_GET['TenMon']?> khối <?php echo $_GET['TenKhoi']?></tx></center>
                    <br />
                    <?php
						include_once("Controller/cNHCHTN.php");
						$p=new cCHgv();
						$hi=$p->LayMa();
						$com=mysql_fetch_assoc($hi);
					?>
                     <div class="form-group row">
                    	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;<ta>Môn Học:</ta>
                        &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" value="<?php echo $_GET['TenMon']?>"  size="8" disabled="disabled"/>
                        <input type="hidden" name="mamon" value="<?php echo $com['MaMonHoc']?>"  size="8"/>
                    </div>
                     <div class="form-group row">
                    	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;<ta>Khối Lớp:</ta>
                        &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" value="<?php echo $_GET['TenKhoi']?>"  size="1" disabled="disabled"/>
                        <input type="hidden" name="SoCauTao" value="<?php echo $_GET['SoCauTao']?>"  size="8"/>
                    </div>
                    <div class="form-group row">
                    	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;
                        
                        &nbsp;&nbsp;&nbsp;<ta>Tiêu Đề:</ta>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <select name="td">
                        	<option value="TK">TK</option>
                            <option value="GK">GK</option>
                            <option value="CK">CK</option>
                        </select>
                    </div>
                     <div class="form-group row">
                    	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;<ta>Nội Dung Câu Hỏi:</ta>
                        &nbsp;&nbsp;&nbsp;&nbsp;<textarea name="ch" placeholder="&nbsp;xxxxx... hoặc là ảnh x.jpg(png) hoặc là audio .mp3"  size="35" required="required"/></textarea>
                    </div>
                     <div class="form-group row">
                    	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;<ta>Phương Án A:</ta>
                        &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="pa" placeholder="&nbsp;26 hoặc là ảnh x.jpg(png)"  size="35" required="required"/>
                    </div>
                     <div class="form-group row">
                    	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;<ta>Phương Án B:</ta>
                        &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="pb" placeholder="&nbsp;29  hoặc là ảnh x.jpg(png)"   size="35" required="required"/>
                    </div>
                     <div class="form-group row">
                    	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;<ta>Phương Án C:</ta>
                        &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="pc" placeholder="&nbsp;33  hoặc là ảnh x.jpg(png)"  size="35" required="required" />
                    </div>
                     <div class="form-group row">
                    	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;<ta>Phương Án D:</ta>
                        &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="pd" placeholder="&nbsp;44  hoặc là ảnh x.jpg(png)"  size="35" required="required"/>
                    </div>
                     <div class="form-group row">
                    	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;<ta>Đáp Án Đúng:</ta>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <select name="da">
                        	<option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                        </select>
                    </div>
                    <div class="form-group row">
                    	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;<ta>Chi tiết:</ta>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="ct" placeholder="&nbsp;Ghi chú lời giải"  size="35" required="required"/>
                    </div>
                    <div class="form-group row">
                    	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;<input type="submit" name="submit" value="Tạo"/>
                    </div>
                </form>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 border">
            <?php 
				if(isset($_GET['suaCH'])){
					?>
                    	<center><tx>Sửa Câu Hỏi</tx></center>
            <?php
				include_once("Controller/cNHCHTN.php"); 
				$p=new cCHgv();
				$ap=$p->dodulieu();
				$com=mysql_fetch_assoc($ap);
			?>
                  <form action="#" method="post">
                    <br />
                    <div class="form-group row">
                    	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;
                        
                        &nbsp;&nbsp;&nbsp;<ta>Tiêu Đề:</ta>
                        &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="a" value="<?php echo $com['TieuDe']?>"   size="8"/>
                    </div>
                     <div class="form-group row">
                    	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;<ta>Nội Dung Câu Hỏi:</ta>
                        &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="b" value="<?php echo $com['NoiDungCH']?>" />
                    </div>
                     <div class="form-group row">
                    	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;<ta>Phương Án A:</ta>
                        &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="c" value="<?php echo $com['QA']?>" size="35"/>
                    </div>
                     <div class="form-group row">
                    	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;<ta>Phương Án B:</ta>
                        &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="d" value="<?php echo $com['QB']?>" size="35"/>
                    </div>
                     <div class="form-group row">
                    	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;<ta>Phương Án C:</ta>
                        &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="e" value="<?php echo $com['QC']?>" size="35"/>
                    </div>
                     <div class="form-group row">
                    	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;<ta>Phương Án D:</ta>
                        &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="f" value="<?php echo $com['QD']?>" size="35"/>
                    </div>
                     <div class="form-group row">
                    	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;<ta>Đáp Án Đúng:</ta>
                        &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="g" value="<?php echo $com['Ans']?>" size="35"/>
                    </div>
                    <div class="form-group row">
                    	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;<ta>Chi tiết:</ta>
                        &nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;
                          &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="h" value="<?php echo $com['Detail']?>" size="35"/>
                    </div>
                    <div class="form-group row">
                    	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;<input type="submit" name="sua" value="Sửa"/>
                    </div>
                </form>
                <?php
					$ma=$_GET['Ma'];
					$tenmon=$_GET['TenMon'];
					$tenkhoi=$_GET['TenKhoi'];
					$socautao=$_GET['SoCauTao'];
					$next=$_GET['submit']
				?>
                <center><a href="NhapCauHoi.php?Ma=<?php echo $ma ?>&&TenMon=<?php echo $tenmon?>&&TenKhoi=<?php echo $tenkhoi?>&&SoCauTao=<?php echo $socautao?>&&submit=<?php echo $next?>"><img src='img/tve.png' height="50px" width="50px"/></a></center>
                    <?php
				}
				else{
			?>
            	<center><tx>Danh Sách Ngân Hàng Câu Hỏi</tx></center>
                <br />
                <table class="table-bordered">
                	<thead>
                    	<tr>
                        	<th><center>Dạng Bài</center></th>
                    		<th><center>Câu Hỏi</center></th>
                        	<th><center>Phương Án A</center></th>
                        	<th><center>Phương Án B</center></th>
                            <th><center>Phương Án C</center></th>
                            <th><center>Phương Án D</center></th>
                            <th><center>Đáp Án</center></th>
                            <th><center>Chi Tiết</center></th>
                            <th><center>Sửa</center></th>
                            <th><center>Xóa</center></th>
                        </tr>
                        <?php 
						include_once("Controller/cNHCHTN.php");
						$p=new cCHgv();
						$app=$p->XuatDSCHTN();
						while($comn=mysql_fetch_assoc($app)){
						?>
                        <tr>
                        	<td><center><?php echo $comn['TieuDe']?></center></td>
                            <td><center><?php
							$anh=$comn['NoiDungCH'];
							if(preg_match("/^[A-Za-z]{1,100}[.mp3]{3}/",$anh)){
									?>
                                   <audio controls preload="none" style="width:30%">
 										 <source src="img/<?php echo $comn['NoiDungCH']?>" type="audio/mpeg">
  									</audio>
                                    <?php
							}
							elseif(!preg_match("/^[A-Za-z]{1,100}[.(jpg|png|gif)]{3}/",$anh)){
									echo $comn['NoiDungCH'];
							}
							else{
								?>	
                                	<img src="img/<?php echo $comn['NoiDungCH']?>" height="110px" width="110px"/>
                                <?php 
							}?></center></td>
                            <td><center><?php
							$anh=$comn['QA'];
							if(!preg_match("/^[A-Za-z]{1,100}[.(jpg|png)]{3}/",$anh)){
									echo $comn['QA'];
							}
							else{
								?>	
                                	<img src="img/<?php echo $comn['QA']?>" height="50px" width="50px"/>
                                <?php 
							}?></center></td>
                            <td><center><?php
							$anh=$comn['QB'];
							if(!preg_match("/^[A-Za-z]{1,100}[.(jpg|png)]{3}/",$anh)){
									echo $comn['QB'];
							}
							else{
								?>	
                                	<img src="img/<?php echo $comn['QB']?>" height="50px" width="50px"/>
                                <?php 
							}?></center></td>
                            <td><center><?php
							$anh=$comn['QC'];
							if(!preg_match("/^[A-Za-z]{1,100}[.(jpg|png)]{3}/",$anh)){
									echo $comn['QC'];
							}
							else{
								?>	
                                	<img src="img/<?php echo $comn['QC']?>" height="50px" width="50px"/>
                                <?php 
							}?></center></td>
                            <td><center><?php
							$anh=$comn['QD'];
							if(!preg_match("/^[A-Za-z]{1,100}[.(jpg|png)]{3}/",$anh)){
									echo $comn['QD'];
							}
							else{
								?>	
                                	<img src="img/<?php echo $comn['QD']?>" height="50px" width="50px"/>
                                <?php 
							}?></center></td>
                            <td><center><?php echo $comn['Ans']?></center></td>
                            <td><center><?php echo $comn['Detail']?></center></td>
                            <td><center><a href="NhapCauHoi.php?Ma=<?php echo $_GET['Ma']?>&&TenMon=<?php echo $_GET['TenMon']?>&&TenKhoi=<?php echo $_GET['TenKhoi']?>&&SoCauTao=<?php echo $_GET['SoCauTao']?>&&submit=<?php echo "Next";?>&&suaCH=<?php echo $comn['MaNHCH']?>"><img src='img/bc.jpg' height="20px" width="20px"/></a></center></td>
                            <td><center><a href="NhapCauHoi.php?Ma=<?php echo $_GET['Ma']?>&&TenMon=<?php echo $_GET['TenMon']?>&&TenKhoi=<?php echo $_GET['TenKhoi']?>&&SoCauTao=<?php echo $_GET['SoCauTao']?>&&submit=<?php echo "Next";?>&&xoaCH=<?php echo $comn['MaNHCH']?>"><img src='img/del.png' height="20px" width="20px"/></a></center></td>
                        </tr>
                          <?php
						}
						?>
                        
                    </thead>
                </table>
                 <?php
				include_once("View/vNHCHTN.php");
				
			?>
            <br />
            <center>
            	<?php
				$p=new Xuatphantrang();
				$p->page4();
				?>
            </center>
            </div>
            <br />
            <?php
				}
			?>
            
        </div>
     </div>
     <br />
     
     <center><a href="TaoNHCauHoi.php?Ma=<?php echo $_GET['Ma']?>"><img src="img/tve.png" height="50px" width="50px"/></a></center>
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
<?php
	}
	}
?>
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
<?php
ob_start();
	include_once('Controller/cNHCHTN.php');
	if(isset($_GET['xoaCH'])){
		$p=new cCHgv(); 
		$p->xoaCH();
		echo "<script>alert('Xóa câu hỏi thành công')</script>";
	}
ob_end_flush();
?>
