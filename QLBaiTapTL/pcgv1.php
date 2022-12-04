<?php
include("myclass/clsptud1.php");
$p = new ptud();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>



<body>
<form id="form1" name="form1" method="post" action="">
  <p>tên lớp: 
    <?php
		$p->loadcombo_lop("select TenLop from lop");
	?>
  </p>
  <p>môn : 
    <?php
		$p->loadcombo_mon("select TenMonHoc from monhoc");
	?>
  </p>
  <p>giáo viên: 
    <?php
		$p->loadcombo_giaovien("select TenGV from giaovien");
	?>
</p>
  <p>
    <input type="submit" name="txtchon" id="txtchon" value="Chon" />
  </p>
  
</form>
<div align="center">
	<?php
		switch($_POST['txtchon'])
		{
			case'Chon':
			{
				$tenlop=$_REQUEST['txtlop'];
				$tenmon=$_REQUEST['txtmon'];
				$tengv=$_REQUEST['txtgv'];
				if($p->themxoasua("INSERT INTO phancong(TenLop,TenMonHoc,TenGV)VALUES(
 '$tenlop', '$tenmon', '$tengv')")==1)
				{
					echo'Thanh cong';
				}
				else 
				{
					echo'That bai';
					
				}
				break;
			}
		}
	?>
</div>
</body>
</html>