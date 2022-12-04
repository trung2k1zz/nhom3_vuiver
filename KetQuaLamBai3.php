<?php require_once 'ketnoiHS.php';
?>
<!DOCTYPE html>
<html>
    <head>
<title>Kết Quả Làm Bài</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1" />
<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
<script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/countdown.js"></script>
<style>
	hg{
		color:#FFC;
	}
	th{
		background-color:#FFC;
	}
	as{
		color:#F60;
		font-size:23px;
		font-weight:600;
	}
	h2{
		color:#CC9;
	}
	g{
		color:#C99;
		font-size:23px;
	}
	w{
		color:#9C0;
		font-size:20px;
		font-weight:500;
	}
	t{
		color:#69F;
		font-size:20px;
		font-weight:375;
	}
	kx{
		color:#C9F;
		font-size:23px;
		font-weight:450;
	}
	kz{
		color:#F30;
		font-size:23px;
		font-weight:400;
	}
	tx{
		color:#F00;
		font-size:23px;
		font-weight:400;
	}
	uv{
		color:orange;
		font-size:20px;
	}
	h2{
	color:brown;
	font-weight:450;
}
	d{
		color:#C60;
		font-size:25px;
	}
	vi{
		color:salmon;
		font-size:22px;
}
	v{
		color:blue;
		font-size:25px;
		
}
    h3{
		color:#0CC;
	}
    h4{
	color:orange;
	font-weight:450;
}
	di{
	color:green;
	font-size:20px;
}
    k{
	color:green;
	font-weight:400;
	
}
	d{
	color:red;
	font-size:28px;
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
include_once("ketnoiHS.php");
$tieude=$_POST['TieuDe'];
$mamon=$_POST['MaMonHoc'];
$magv=$_POST['MaGV'];
$malop=$_POST['MaLop'];
$response=mysql_query("select * from tk where TieuDe='$tieude' and MaGV='$magv'
and MaLop='$malop' and MaMonHoc='$mamon'");
	 $right_answer=0;
	 $wrong_answer=0;
	 $unanswered=0;
	 while($result=mysql_fetch_array($response)){
	       $i=$result['MaTK'];
	       if($result['Ans']==$_POST["$i"]){
		       $right_answer++;
		   }
	       elseif($_POST["$i"]==5){
		      $unanswered++;
		   }
	       else{
		 $wrong_answer++;
}
	$i++;
	 }
?>
<center>
	<h2>Kết Quả Bài Làm</h2>
    <br/>
	<table class="col-xs-12 col-sm-12 col-md-12 col-lg-12 table-bordered">
    	<thead>
        	<tr>
            	<th><center><di>Tên Học Sinh</di></center></th>
                <th><center><di>Tên Lớp</di></center></th>
                <th><center><di>Tên Môn Học</di></center></th>
                <th><center><di>Số Câu Đúng</di></center></th>
                <th><center><di>Số Câu Sai</di></center></th>
                <th><center><di>Số Câu Không Trả Lời</di></center></th>
                <th><center><di>Điểm</di></center></th>
            </tr>
            <tr>
            	<td><center><uv><?php echo $_POST['TenHS']?></uv></center></td>
                <td><center><uv><?php echo $_POST['TenLop']?></uv></center></td>
                <td><center><uv><?php echo $_POST['TenMon']?></uv></center></td>
                <td><center><v><?php echo $right_answer ?></v></center></td>
                <td><center><v><?php echo $wrong_answer ?></v></center></td>
                <td><center><v><?php echo $unanswered ?></v></center></td>
                <td><center><d><?php echo round(($right_answer*10)/($right_answer+$wrong_answer+$unanswered),2)."/10"."" ?></d></center></td>
            </tr>
        </thead>
    </table>
    		<br/>
</center>
<br/>
<details>
<summary><vi>Chi Tiết Bài Làm</vi></summary>
    <center>
    	 <table class="col-xs-12 col-sm-12 col-md-12 col-lg-12 table-bordered">
         	<thead>
            	<tr>
                	<th><center><tx>Đáp Án Bài Làm</tx></center></th>
                </tr>
                <tr>
                	<td>
                    <div class="row">
                    	<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                        </div>
                        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
					<?php
include_once("ketnoiHS.php");
$tieude=$_POST['TieuDe'];
$mamon=$_POST['MaMonHoc'];
$magv=$_POST['MaGV'];
$malop=$_POST['MaLop'];
$response=mysql_query("select * from tk where TieuDe='$tieude' and MaGV='$magv'
and MaLop='$malop' and MaMonHoc='$mamon'");
	$a=1;
	 while($result=mysql_fetch_array($response)){
	 $i=$result['MaTK'];
	     ?>
	<kz>Câu</kz> <?php echo "<kz>".$a++."</kz>"?>.<?php
							$anh=$result['NoiDungCH'];
							if(preg_match("/^[A-Za-z]{1,100}[.mp3]{3}/",$anh)){
									?>
                                   <audio controls preload="none">
 										 <source src="img/<?php echo $result['NoiDungCH']?>" type="audio/mpeg">
  									</audio>
                                    <?php
							}
							elseif(!preg_match("/^[A-Za-z]{1,100}[.(jpg|png|gif)]{3}/",$anh)){
									echo "<kx>&nbsp;".$result['NoiDungCH']."</kx>";
							}
							else{
								?>	
                                	&nbsp;&nbsp;<img src="img/<?php echo $result['NoiDungCH']?>" height="250px" width="450px"/>
                                <?php 
							}?><br/>
	<?php
							$anh=$result['QA'];
							if(!preg_match("/^[A-Za-z]{1,100}[.(jpg|png)]{3}/",$anh)){
									echo "<t>"."&nbsp;&nbsp;&nbsp;&nbsp;"."A.".$result['QA']."</t>"."<br/>";
							}
							else{
								?>	
                                	<t>A.</t>&nbsp;&nbsp;<img src="img/<?php echo $result['QA'];?>" height="100px" width="100px"/>
                                <?php 
							}?>
<?php
							$anh=$result['QB'];
							if(!preg_match("/^[A-Za-z]{1,100}[.(jpg|png)]{3}/",$anh)){
									echo "<t>"."&nbsp;&nbsp;&nbsp;&nbsp;"."B.".$result['QB']."</t>"."<br/>";
							}
							else{
								?>	
                                	<t>B.</t>&nbsp;&nbsp;<img src="img/<?php echo $result['QB'];?>" height="100px" width="100px"/>
                                <?php 
							}?>
<?php
							$anh=$result['QC'];
							if(!preg_match("/^[A-Za-z]{1,100}[.(jpg|png)]{3}/",$anh)){
									echo "<t>"."&nbsp;&nbsp;&nbsp;&nbsp;"."C.".$result['QC']."</t>"."<br/>";
							}
							else{
								?>	
                                	<t>C.</t>&nbsp;&nbsp;<img src="img/<?php echo $result['QC'];?>" height="100px" width="100px"/>
                                <?php 
							}?>
<?php
							$anh=$result['QD'];
							if(!preg_match("/^[A-Za-z]{1,100}[.(jpg|png)]{3}/",$anh)){
									echo "<t>"."&nbsp;&nbsp;&nbsp;&nbsp;"."D.".$result['QD']."</t>"."<br/>";
							}
							else{
								?>	
                                	<t>D.</t>&nbsp;&nbsp;<img src="img/<?php echo $result['QD'];?>" height="100px" width="100px"/><br/><br/>
                                <?php 
							}?>
	<p></p>&nbsp;&nbsp;&nbsp;&nbsp;<img src="img/mc.jpg" height="50px" width="50px"/>:&nbsp;<?php 
		if($_POST["$i"]==5){
			echo "<w>"."null&nbsp;&nbsp;"."</w>"."<g>Ans:&nbsp</g>"."<as>".$result['Ans']."</as>"."<br/>";
		} 
		elseif($_POST["$i"]==$result['Ans']){
			echo "<w>".$_POST["$i"]."</w>"."<img src='img/true.jpg' height='50px' width='50px'/>"."<br/>";
		}
		elseif($_POST["$i"]!=$result['Ans']){
			echo "<w>".$_POST["$i"]."</w>"."&nbsp;&nbsp;<img src='img/false.jpg' height='35px' width='35px'/>"."&nbsp;&nbsp;<g>Ans:&nbsp;</g>"."<as>".$result['Ans']."</as>"."<br/>";
		}
	
		else{
			echo $_POST['$i']."<br/>";
		}?><br/>
<?php
$i++;
	 }
	
?>
</div>
<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
</div>
</div></td>
                </tr>
            </thead>
         	
   		 </table>
    <center>
</details>
<center>
<br/>
<form action="LuuDiem.php" method="post">
            <input type="hidden" name="lb" value="<?php echo $_POST['TieuDe']?>"/>
            <input type="hidden" name="Ma" value="<?php echo $_POST['Ma']?>"/>
            <input type="hidden" name="mahs" value="<?php echo $_POST['MaHS']?>"/>
            <input type="hidden" name="malop" value="<?php echo $_POST['MaLop']?>"/>
            <input type="hidden" name="magv" value="<?php echo $_POST['MaGV']?>"/>
            <input type="hidden" name="mamon" value="<?php echo $_POST['MaMonHoc']?>"/>
            <input type="hidden" name="diem" value="<?php echo round(($right_answer*10)/($right_answer+$wrong_answer+$unanswered),2)?>"
    		<center>
            <?php 
				include_once("Controller/cDiem.php");
				if(isset($_POST['MaHS'])&&isset($_POST['MaGV'])&&isset($_POST['MaMonHoc'])){
					$p=new cDiem();
					$co=$p->buttKT3();
					$nut=mysql_fetch_assoc($co);
						if($nut['Diem']!=null){
							$ma=$_POST['Ma'];
							?>
                            <a href="home(HS).php?Ma=<?php echo $ma?>"><img src='img/tve.png' height="50px" width="50px"/></a>
                            <?php
				}
				else{
			?><input type="submit" name="submit" value="Kết Thúc" class="btn-success"/></center>
            <?php
				}
			}
			?>
            </form>
<br/>
</center>
        	
        </div>
        <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
        </div>
    
    </div>

</div>
</body>
</html>
<script src="/assets/backend/js/html2canvas.min.js"></script>


<script>
    $("#download").on('click', function(){
        html2canvas($("#printform"), {
            onrendered: function (canvas) {
                var url = canvas.toDataURL();

                var triggerDownload = $("<a>").attr("href", url).attr("download", getNowFormatDate()+"电子签名详细信息.jpeg").appendTo("body");
                triggerDownload[0].click();
                triggerDownload.remove();
            }
        });
    })
</script>



