<?php
include_once("Controller/cQLTTL.php");
class Xuatphantrang{
	function page(){
		if(isset($_GET['Ma'])&&isset($_GET['TenTruong'])){
			$p=new cQLadht();
			$p->Phantranglop();
		}
	}
	}



?>