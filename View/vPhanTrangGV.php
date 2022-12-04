<?php
include_once("Controller/cQLTTGV.php");
class XuatphantrangGV{
	function page2(){
		if(isset($_GET['Ma'])&&isset($_GET['TenTruong'])){
			$p=new cQLadsystems();
			$p->sotrang();
		}
	}
	}



?>