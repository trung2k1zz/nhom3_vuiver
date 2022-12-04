<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 
ob_start();
include_once("Controller/cQLTTT.php");
$p=new cQLadht();
if(isset($_GET['Ma'])&&isset($_GET['TenQuan'])){
	$hien=$p->XuatTruong();
}
elseif(isset($_GET['Ma'])&&isset($_GET['del'])){
	$p->delTruong();
	$a=$_GET['Ma'];
	echo "<script>alert('Xóa Trường Thành Công')</script>";
	echo header("refresh:0,url='QuanLyThongTinTruong.php?Ma=$a");
}
if($hien){
	if(mysql_num_rows($hien)>0){
		while($cot=mysql_fetch_assoc($hien)){
			if($dem==0){
			 echo "<tr>";}
			?>
            	
                        <td><center><?php echo $cot['TenTruong'];?></center></td>
                        <td><center><img src="img/<?php echo $cot['Anh'];?>" height="50px" width="50px" class="rounded-circle" /></center></td>
                        <td><center><a href="XemChiTietTruong.php?Ma=<?php echo $_GET['Ma'];?>&&TenTruong=<?php echo $cot['TenTruong'];?>"><img src="img/cm.png" height="50px" width="50px" /></center></a></td>
                        <td><center><a href="QuanLyThongTinLop.php?Ma=<?php echo $_GET['Ma']?>&&TenTruong=<?php echo $cot['TenTruong'];?>"><img src="img/lopp.png" height="50px" width="50px" class="img-thumbnail"/></a></center></td>
                        <td><center><a href="QuanLyThongTinGiaoVien.php?Ma=<?php echo $_GET['Ma']?>&&TenTruong=<?php echo $cot['TenTruong'];?>"><img src="img/gvlh.jpg" height="50px" width="50px" class="img-thumbnail"/></a></center></td>
                         <td><center><a href="QuanLyThongTinTruong.php?Ma=<?php echo $_GET['Ma']?>&&up=<?php echo $cot['TenTruong'] ?>"><img src="img/bc.jpg" height="35px" width="35px"/></a></center></td>
                        <td><center><a href="#" data-toggle="modal" data-target="#<?php echo $cot['TenTruong'] ?>"><img src="img/del.png" height="35px" width="35px"/></a>
                        <div class="modal" id="<?php echo $cot['TenTruong'] ?>">
                    		<div class="modal-dialog">
                      				  <div class="modal-content">
                           					 <div class="modal-header">
                                             
                      <strong><gh>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <img src="img/cbao.jpg" height="35px" width="35px"/>&nbsp;Bạn chắc chắn xóa trường học này                       chứ?</gh></strong>
                                             </div>
                                             <div>
                                             <p></p>
                                    <button type="button" class="btn-danger" class="close" data-dismiss="modal">&nbsp;&nbsp;No&nbsp;&nbsp;</button>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;<a href="QuanLyThongTinTruong.php?Ma=<?php echo $_GET['Ma']?>&&del=<?php echo $cot['TenTruong'] ?>"><button type="button" class="btn-success">&nbsp;&nbsp;Yes&nbsp;&nbsp;</button></a>
                                    <p></p>
                                             </div>
                                            
                                       </div>
                            </div>
                         </div>
                        </a></center></td>
                        
                        
                       
                    
            <?php
		}
		$dem++;
		if($dem==1){
			echo "</tr>";
		}
	}
	else{
		return false;
	}
}
else{
	return false;
}
ob_end_flush();
?>
</body>
</html>