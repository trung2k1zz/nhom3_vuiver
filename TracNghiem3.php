<?php require_once 'ketnoiHS.php';?>

<?php
$tieude=$_GET['TieuDe'];
$mamon=$_GET['MaMonHoc'];
$magv=$_GET['MaGV'];
$malop=$_GET['MaLop'];
$tieude=$_GET['TieuDe'];
$res=mysql_query("select * from tk where TieuDe='$tieude' and MaGV='$magv'
and MaLop='$malop' and MaMonHoc='$mamon' Order By Rand()");?>
<?php
$col=mysql_fetch_assoc($res); 
$b=$col['ThoiGianLamBai'];
$c=$col['NgayLamBai'];
$d=$col['NgayKetThuc'];?>
<!DOCTYPE html>
<html>
    <head>
<title>Trắc Nghiệm <?php echo $tieude?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1" />
<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/countdown.js"></script>
<script language="JavaScript">
function auto_sub()
{
document.form.submit();
}
function auto_sub1()
{
setTimeout("auto_sub()",<?php echo $b?>*60*1000);
}

</script>
<style>
	h2{
	color:brown;
	font-weight:450;
}
	d{
		color:#C60;
		font-size:25px;
	}
    h3{
		color:#0CC;
	}
    h4{
	color:orange;
	font-weight:450;
}
    k{
	color:green;
	font-weight:400;
	
}

	h5{
		color:#CC0;
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
  left:120px;
  width:100%;
  height:120px;
  z-index:-10;
  background-color:rgba(255,255,255,1);
  box-shadow:0.1px 0.1px 0.1px yellow;
   }
</style>
</head>
<body>
 <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
 	<div class="row">
    	<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
        </div>
        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
<?php
	if(isset($_GET['tg'])){
	$tg=$_GET['tg'];
	$ngaylambai=strtotime("$c");
	$ngayhethan=strtotime("$d");
	if($tg-$ngaylambai<0){
	$a=$_GET['Ma'];
	echo "<script>alert('Chưa đến giờ làm bài')</script>";
	echo header("refresh:0,url='home(HS).php?Ma=$a'");
}
elseif($ngaylambai==null&&$hethan==null){
	$a=$_GET['Ma'];
	echo "<script>alert('Bài KT chưa được tạo')</script>";
	echo header("refresh:0,url='home(HS).php?Ma=$a'");
}
elseif($tg-$ngayhethan>=0){
	$a=$_GET['Ma'];
	echo "<script>alert('Quá hạn làm bài')</script>";
	echo header("refresh:0,url='home(HS).php?Ma=$a'");
}
else{

?>
<center><h2>Kiểm tra <?php echo $_GET['TieuDe']?> môn <?php echo $_GET['TenMon']?> lớp <?php echo $_GET['TenLop']?></h2></center>
<div class="row header col-xs-2"  id="codinh" >
	 <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 h-200 m-1">
	</div>
  <?php
  $time=date("d M y H:i:s");
  $ts=strtotime($time);
  $new=($ts+1)-((60-$b)*60);
  ?> 
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 h-200 m-1">
	<center>
		<div countdown="" data-date="<?php echo date('d M y H:i:s',$new) ?>">
 		  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="img/dhc.png" height="25px" width="25px"/>&nbsp;Còn lại:
        		   <span data-hours="">00</span>: 
           		   <span data-minutes="">00</span>:
           		   <span data-seconds="">00</span>
		</div>
        </div>
</div>
<body onLoad="auto_sub1();">

<?php
$tieude=$_GET['TieuDe'];
$mamon=$_GET['MaMonHoc'];
$magv=$_GET['MaGV'];
$malop=$_GET['MaLop'];
$tieude=$_GET['TieuDe'];
$response=mysql_query("select * from tk where TieuDe='$tieude' and MaGV='$magv'
and MaLop='$malop' and MaMonHoc='$mamon' Order By Rand()");?>

<form method='post' id='quiz_form' action='KetQuaLamBai3.php' name='form'>

<?php
$a=1;
while($result=mysql_fetch_assoc($response)){ ?>
<div id="question_<?php echo $result['MaTK'];?>" class='questions'>
<h4><div id="question_<?php echo $result['MaTK'];?>"><?php $result['MaTK']?>&nbsp;<?php echo $a++;?>.<?php
							$anh=$result['NoiDungCH'];
							if(!preg_match("/^[A-Za-z]{1,100}[.(jpg|png)]{3}/",$anh)){
									echo $result['NoiDungCH'];
							}
							else{
								?>	
                                	&nbsp;&nbsp;<img src="img/<?php echo $result['NoiDungCH']?>" height="250px" width="450px"/>
                                <?php 
							}?></div></h4>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" value="A" id='radio1_<?php echo $result['MaTK'];?>' name='<?php echo $result['MaTK'];?>'
<label id='ans1_<?php echo $result['MaTK'];?>' for='1'><?php
							$anh=$result['QA'];
							if(!preg_match("/^[A-Za-z]{1,100}[.(jpg|png)]{3}/",$anh)){
									echo "<k>"."&nbsp;A.".$result['QA']."<br/>"."</k>";

							}
							else{
								?>	
                                	A.&nbsp;&nbsp;<img src="img/<?php echo $result['QA'];?>" height="100px" width="100px"/>&nbsp;&nbsp;
                                <?php 
							}?></label>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" value="B" id='radio2_<?php echo $result['MaTK'];?>' name='<?php echo $result['MaTK'];?>'
<label id='ans2_<?php echo $result['MaTK'];?>' for='1'><?php
							$anh=$result['QB'];
							if(preg_match("/^[A-Za-z]{1,100}[.mp3]{3}/",$anh)){
									?>
                                   <audio controls preload="none">
 										 <source src="img/<?php echo $result['NoiDungCH']?>" type="audio/mpeg">
  									</audio>
                                    <?php
							}
							elseif(!preg_match("/^[A-Za-z]{1,100}[.(jpg|png|gif)]{3}/",$anh)){
									echo $result['NoiDungCH'];
							}
							else{
								?>	
                                	B.&nbsp;&nbsp;<img src="img/<?php echo $result['QB']?>" height="100px" width="100px"/>&nbsp;&nbsp;
                                <?php 
							}?></label>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" value="C" id='radio3_<?php echo $result['MaTK'];?>' name='<?php echo $result['MaTK'];?>'
<label id='ans3_<?php echo $result['MaTK'];?>' for='1'><?php
							$anh=$result['QC'];
							if(!preg_match("/^[A-Za-z]{1,100}[.(jpg|png)]{3}/",$anh)){
									echo "<k>"."&nbsp;C.".$result['QC']."<br/>"."</k>";
							}
							else{
							    ?>	
                                	C.&nbsp;&nbsp;<img src="img/<?php echo $result['QC']?>" height="100px" width="100px"/>&nbsp;&nbsp;
                                <?php
									}
								?></label>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" value="D" id='radio4_<?php echo $result['MaTK'];?>' name='<?php echo $result['MaTK'];?>'
<label id='ans4_<?php echo $result['MaTK'];?>' for='1'><?php
							$anh=$result['QD'];
							if(!preg_match("/^[A-Za-z]{1,100}[.(jpg|png)]{3}/",$anh)){
									echo "<k>"."&nbsp;D.".$result['QD']."<br/>"."</k>";
							}
							else{
								?>	
                                	D.&nbsp;&nbsp;<img src="img/<?php echo $result['QD']?>" height="100px" width="100px"/>&nbsp;&nbsp;
                                    <br/><p></p>
                                <?php 
							}?></label>
<input type="radio" checked='checked' value="5" style='display:none' id='radio4_<?php echo $result['MaTK'];?>' name='<?php echo $result['MaTK'];?>'>
<br/>
</div>
<?php }
$a++;
?>
<br/>
<input type="hidden" name="Ma" value="<?php echo $_GET['Ma']?>"/>
<input type="hidden" name="TenHS" value="<?php echo $_GET['TenHS']?>"/>
<input type="hidden" name="MaHS" value="<?php echo $_GET['MaHS']?>"/>
<input type="hidden" name="TenKhoi" value="<?php echo $_GET['TenKhoi']?>"/>
<input type="hidden" name="MaGV" value="<?php echo $_GET['MaGV']?>"/>
<input type="hidden" name="MaLop" value="<?php echo $_GET['MaLop']?>"/>
<input type="hidden" name="TenLop" value="<?php echo $_GET['TenLop']?>"/>
<input type="hidden" name="MaMonHoc" value="<?php echo $_GET['MaMonHoc']?>"/>
<input type="hidden" name="TenMon" value="<?php echo $_GET['TenMon']?>"/>
<input type="hidden" name="TieuDe" value="<?php echo $_GET['TieuDe']?>"/>

<center><input type="submit" value='Nộp Bài' class='butt' /></center>
<br/>
</form> 
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
};
</script>
<script>
$("body").on("submit", "form", function() {
    $(this).submit(function() {
        return false;
    });
    return true;
});
</script>  
<script type="text/javascript">
    window.onbeforeunload = function() {
         return "Đồng ý tải lại trang";
    }
</script> 
<script type="text/javascript">
function disableF5(e) { if ((e.which || e.keyCode) == 116 || (e.which || e.keyCode) == 82) e.preventDefault(); };

$(document).ready(function(){
     $(document).on("keydown", disableF5);
});
</script>
<?php 
}
}
?>       
        </div>
        <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
        </div>
        
    </div>
 </div>
</body>
</html>