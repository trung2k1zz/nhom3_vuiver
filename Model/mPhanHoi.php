<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include_once("mConnect(GV).php");
class mPH{
function ChenCH(){
	$p=new ketnoigv($ketnoi);
	if($p->ketnoi($ketnoi)){
		if(isset($_POST['submit'])){
			$a=$_POST['a'];
			$mahs=$_POST['MaHS'];
			$magv=$_POST['MaGV'];
			$sql="insert into cauhoiphanhoi(NoiDung,MaHS,MaGV,NgayGuiCH)
			values ('$a','$mahs','$magv',now())";
			$qr=mysql_query($sql);
			return $qr;
		}
	}
}
function XemCHGui(){
	$p=new ketnoigv($ketnoi);
	if($p->ketnoi($ketnoi)){
		if(isset($_GET['MaHS'])&&isset($_GET['MaGV'])){
			$mahs=$_GET['MaHS'];
			$magv=$_GET['MaGV'];
			$sql="select *from cauhoiphanhoi where MaHS='$mahs' and MaGV='$magv' ";
			$qr=mysql_query($sql);
			return $qr;
			
}
}
}
}
?>
</body>
</html>
