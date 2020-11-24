<?php
@session_start();
if(empty($_SESSION['adname'])) {
	echo "<script>
          alert('กรุณาเข้าสู่ระบบ!');
          window.location='admin.php';
          </script>";
	exit;
}
	include("connectdb.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>DANIEL WELLTNGTON</title>
   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daily Shop | Product Detail</title>
<link rel="icon" type="image/x-icon" href="time_management_clock_icon_152075.ico"/>
    <!-- Font awesome -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- SmartMenus jQuery Bootstrap Addon CSS -->
    <link href="css/jquery.smartmenus.bootstrap.css" rel="stylesheet">
    <!-- Product view slider -->
    <link rel="stylesheet" type="text/css" href="css/jquery.simpleLens.css">
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="css/nouislider.css">
    <!-- Theme color -->
    <link id="switcher" href="css/theme-color/default-theme.css" rel="stylesheet">
    <!-- Top Slider CSS -->
    <link href="css/sequence-theme.modern-slide-in.css" rel="stylesheet" media="all">
    <!-- Main style sheet -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
<link href="../jQueryTables/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="../jQueryTables/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../jQueryTables/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../jQueryTables/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <style type="text/css">
    body {
		background-color: #FFFFFF;
	}
    </style>
    
    <script src="../jQueryTables/js/jquery-1.11.1.min.js"></script>
    <!-- DataTables JavaScript -->
    <script src="../jQueryTables/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../jQueryTables/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../jQueryTables/vendor/datatables-responsive/dataTables.responsive.js"></script>

    <script>
    $(document).ready(function() {
        $('#dataTablesID').DataTable({
            responsive: true
        });
    });
    </script>
<!-- ### Table apply by Ekkachai  -->

</head>
<body>
	<title></title>
	<link href="bootstrap.css" rel="stylesheet">
</head>

  </style>
</head>
<body>
	<title></title>
	<link href="bootstrap.css" rel="stylesheet">
</head>

<body>

<div class="col-lg-12" align="right">
		<br>
	<a class="glyphicon glyphicon-user btn btn- btn-sm"> ผู้ใช้งาน : <?php echo $_SESSION['adname'];?></a>
	<a href="logout1.php" class="btn btn-sm btn-warning">loguot</a>
	</div>
<div class="col-lg-12" align="left">
	<a class="glyphicon glyphicon-plus btn btn- btn-lg" href="update.php" title="เพิ่มสินค้า">เพิ่มสินค้า</a>
	<a class="glyphicon glyphicon-list-alt btn btn- btn-lg" href="view_order1.php" title="ออเดอร์"> Order</a>
	<a class="glyphicon glyphicon-folder-open btn btn- btn-lg" href="showmember.php" title="ลูกค้า"> ลูกค้า</a>
	<a class="	glyphicon glyphicon-inbox btn btn- btn-lg" href="showcontact.php" title="ความคิดเห็น"> ความคิดเห็น</a>
	</div>
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            รายการข้อมูลทั้งหมด
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTablesID">
                                <thead>
                                    <tr>
	<td width="130">Edit</td>
    <td width="80">id</td>
    <td width="500">picture</td>
    <td width="180">name</td>
    <td width="180">color</td>
    <td width="500">detail</td>
    <td width="90">price</td>
    <td width="90">type</td>
                                </thead>
                                <tbody>
<?php
include("connectdb.php");
	$sql = "select  *  from product";
	$rs = mysqli_query($conn, $sql) ;
	while ($data = mysqli_fetch_array($rs, MYSQLI_BOTH)) {
?> 
                                    <tr>
                                        <td>

<a class="glyphicon glyphicon-edit btn btn-primary btn-sm" href="edit.php?id=<?=$data['p_id'];?>" title="แก้ไข"></a>
<a class="glyphicon glyphicon-trash btn btn-danger btn-sm" href="delete.php?id=<?=$data['p_id'];?>" title="ลบ" onClick="return confirm('ยืนยันการลบ?');"></a>
                                       </td>
    <td><?=$data['p_id'];?></td>
    <td><img src="images/<?=$data['p_picture'];?>" width="100%" height=""></td>
    <td><?=$data['p_name'];?></td>
    <td><?=$data['color'];?></td>
    <td><?=$data['p_detail'];?></td>
    <td><?=$data['p_price'];?></td>
    <td><?=$data['p_type'];?></td>
    <?php  }  ?>



                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->



</body>
</html>