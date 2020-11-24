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
<br>
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            รายการใบสั่งซื้อ
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTablesID">
                                <thead>
                                    <tr>
  <tr>
    <td width="153">&nbsp;</td>
    <td width="153">เลขที่ใบสั่งซื้อ</td>
    <td width="193">วันที่</td>
    <td width="150">ราคารวม</td>
    <td width="155">ลูกค้า</td>
  </tr>
  						</thead>
  <?php
	include("connectdb.php");
	$sql = "select  *  from  `orders`  order by oid  desc ";
	$rs = mysqli_query($conn, $sql) ;
	while ($data = mysqli_fetch_array($rs, MYSQLI_BOTH)) {
?>

  <tr>
    <td><a class="glyphicon glyphicon-trash btn btn-danger btn-xs" href="delete1.php?id=<?=$data['oid'];?>" title="ลบ" onClick="return confirm('ยืนยันการลบ?');"></a><a href="view_order_detail.php?a=<?=$data['oid'];?>&b=<?=$data['member_id'];?>"> ดูรายละเอียด </a></td>
    <td><?=$data['oid'];?></td>
    <td><?=$data['odate'];?></td>
    <td><?=number_format($data['ototal'],0);?></td>
    <td><?=$data['member_id'];?></td>
  </tr>
  
  <?php  }  ?>
  
</table>
						</div></div></div>
						<a class="glyphicon glyphicon-circle-arrow-left btn btn- btn-lg" href="showproduct.php" title="กลับ"> BACK</a></p>
</body>
</html>