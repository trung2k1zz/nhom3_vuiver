
<?php
include("myclass/clsptud.php");
$p = new ptud();
$layidlop=0;
if(isset($_REQUEST['MaLop']))
{
	$layid=$_REQUEST['MaLop'];
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
<script type="text/javascript" src="js/bootstrap.js"></script>
</head>

<body>
<div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Phân công giáo viên</h1>
            </div>
        </div>
        <form id="form1" name="form1" method="post" action="">
        <div class="row">
            <div class="col-4 border ">
                <h5 class="text-center">Nhập thông tin</h5>
                    <div class="row form-group">
                        <label class="col-3" for="">Lớp:</label>
                        <div class="col-9">
                            <!--<select  name="" id="" class="form-control">
                                <option value="6A1">6A1</option>
                                <option value="7A1">7A1</option>
                                <option value="8A1">8A1</option>
                                <option value="9A1">9A1</option>
                            </select> -->
                            <?php
								$layid_lop=$p->laycot("select MaLop from phancong where MaLop='$layid' limit 1");
								$p->loadcombo_lop("select * from lop order by MaLop asc");
								
							?>
                          
                        </div>
                    </div>
                    <div class="row form-group">
                        <label for="" class="col-3">Môn học:</label>
                        <div class="col-9">
                           <!-- <select  name="" id="" class="form-control">
                                <option value="Toán">Toán</option>
                                <option value="Văn">Văn</option>
                                <option value="Anh văn">Anh văn</option>
                                <option value="Vật lý">Vật lý</option>
                            </select> -->
                            <?php
								$p->loadcombo_mon("select *  from monhoc order by MaMonHoc asc ");
							?>
                        </div>
                    </div>
                    <div class="row form-group">
                        <label for="" class="col-3">Giáo viên:</label>
                        <div class="col-9">
                            <!-- <select  name="" id="" class="form-control">
                                <option value="Toán">Nguyễn Văn An</option>
                                <option value="Văn">Lê Thị Hương</option>
                                <option value="Anh văn">Phạm Thị Ngọc</option>
                                <option value="Vật lý">Phan Văn Hưng</option>
                            </select> -->
                            <?php
								$p->loadcombo_giaovien("select * from giaovien order by MaGV asc ");
							?>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-6">

                        </div>
                        <div class="col-6">
                            <input type="submit" name="nut" id="nut" value="Lưu"  class="btn btn-primary" />
                        </div>
                    </div>
         </form>           
                    
                    <div align="center">
    	<?php
			switch($_POST['nut']){
			   case'Lưu':
			   {
				$tenlop=$_REQUEST['lops'];
				$tenmon=$_REQUEST['monhocs'];
				$tengv=$_REQUEST['giaoviens'];
				      if($p->themxoasua("INSERT INTO phancong(TenLop,TenMonHoc,TenGV)VALUES ('$tenlop', '$tenmon','$tenGV')")==1)
					  {
						  echo 'Thanh cong';
					  }
					  else{
						  echo 'that bai';
						  }
				  }break;	
				
			}
		
		?>
    </div>
            </div>
            <div class="col-8 border">
                <h5 class="text-center">Danh sách phân công giáo viên</h5>
                <?php
					$p->load_danhsach_phancong("select * from phancong order by MaPC asc");
				?>
                <div class="row form-group">
                    <div class="col-6">
                        <button type="button"  class="btn btn-primary xacnhan">Xác nhận</button>
                    </div>
                    <div class="col-6">
                        <button type="button"  class="btn btn-outline-primary">Thoát</button>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    
</body>
</html>