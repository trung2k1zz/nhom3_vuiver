<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
	<?php
	if(isset($_GET['Ma'])&&isset($_GET['TenMon'])){
		include_once("Controller/cMon(HS).php");
		$p=new cMon();
		$xuat=$p->ChiTietMon();
		while($cot=mysql_fetch_assoc($xuat)){?>
			<div style="position: relative;">
            <p style="position: absolute;top:0.2em; left: 3em; width: 115px; height:35px; padding: 4px;font-weight: bold; font-size: 18px;"
            class="rounded-circle btn btn-warning">
            <?php
				   if($cot['MaKhoi']=='1'){
					   $a='6';
				   }
				   elseif($cot['MaKhoi']=='2'){
					   $a='7';
				   }
				   elseif($cot['MaKhoi']=='3'){
					   $a='8';
				   }
				   elseif($cot['MaKhoi']=='4'){
					   $a='9';
				   }
		?>
                   <r><?php
				  echo "<f>".$cot['TenMonHoc']."&nbsp;&nbsp;".$a."</f>";
                      ?>
                     </r>
                 </p><?php
		}
		
				
	}
	elseif(isset($_GET['Ma'])){
				include_once("Controller/cMon(HS).php");
				if(isset($_GET['Ma'])){
				$p=new cMon();
				$xuat=$p->XemMon();
				}
				while($cot=mysql_fetch_assoc($xuat)){
					if($dem==0){
						echo "<tr>";
					}
					 	?>
                        <td>
                        <center>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <div style="position: relative;background: url(<?php echo "img/".$cot['AnhMon']?>); width:150px; height:210px;background-repeat:round">
            <p style="position: absolute;top:-1.5em; right: 1em; width: 125px; height:35px; padding: 4px;font-weight: bold; font-size: 18px;"
            class="rounded-circle btn btn-warning">
                   <r><?php
				   if($cot['MaKhoi']=='1'){
					   $a='6';
				   }
				   elseif($cot['MaKhoi']=='2'){
					   $a='7';
				   }
				   elseif($cot['MaKhoi']=='3'){
					   $a='8';
				   }
				   if($cot['MaKhoi']=='4'){
					   $a='9';
				   }
				  
				   echo "<a href='home(HS).php?Ma=".$_GET['Ma']."&&TenMon=".$cot['TenMonHoc']."&&TenKhoi=".$cot['TenKhoi']."&&MaHS=".$cot['MaHS']."&&MaLop=".$cot['MaLop']."&&MaTruong=".$cot['MaTruong']."'>".$cot['TenMonHoc']."&nbsp;&nbsp;".$a."</a>";
                      ?>
                     </r>
                 </p>
                        </td>
                        </center>
                        <?php
						$dem++;
						if($dem==6){
							echo "</tr>";
						}
				 }
	}
    ?>
    
</body>
</html>