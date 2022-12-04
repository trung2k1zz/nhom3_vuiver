<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
//Down tệp
				if(isset($_GET['file'])){
					$ten=urlencode(basename($_GET['file']));
					$path="Upload/".$ten;
					if(!empty($ten)&& file_exists($path)){
						header("Cache-Control: public");
						header("Content-Description:File Transfer");
						header("Content-Disposition: attachment; filename=$ten");
						header("Content-Type: application/zip");
						header("Content-Transfer-Encoding: binary");
						
						readfile($path);
						exit;
						
						
					}
					else{
						echo "Tệp không tồn tại";
					}
				}
?>
</body>
</html>