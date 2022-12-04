<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
    <?php
					if(isset($_POST['tao'])){
						include_once("Controller/cTK(AD).php");
						$p=new cTKad();
						$a=$_POST['a'];
						$b=$_POST['b'];
						$c=$_POST['c'];
						$d=$_POST['d'];
						$f=$_POST['f'];
						$rp=$_POST['rp'];
						if($a==null||$b==null||$c==null||$d==null||$f==null){
							echo "<script>alert('Thiếu thông tin!!!)</script>";
						}
						elseif($b!=$rp){
							echo "<script>alert('MK nhập lại không khớp MK trước đó!!!)</script>";
						}
						else{
							$kq=$p->AddTK();
							if($kq==1){
							echo "<script>alert('Đã thêm tài khoản)</script>";
							}
							
						}
					}
				?>
</body>
</html>