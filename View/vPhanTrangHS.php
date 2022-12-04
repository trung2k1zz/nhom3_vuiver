<?php
include_once("Controller/cQLTTHS.php");
class XuatphantrangHS{
	function page1(){
		if(isset($_GET['Ma'])&&isset($_GET['TenTruong'])&&isset($_GET['Lop'])){
			$p=new cQLadsys();
			$p->PhanTrangHS();
		}
	}
	}



?>