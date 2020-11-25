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
                               <tbody>

	<br>
<div class="col-lg-12 " align="right">
<div class="col-4 alert alert-danger">
	บริษัท : Daniel Wellington AB&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
    ที่อยู่ : เซ็นทรัลพลาซา ขอนแก่น
99/1 ถนนมิตรภาพ <br> ตำบลในเมือง อำเภอเมืองขอนแก่น&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br>จังหวัดขอนแก่น 40000&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
	โทร. : 066-1452-254&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;						   </div>	</div>						   
	  <div class="col-lg-12" align="left">
<div class="col-4 alert alert-success">
<?php
	include("connectdb.php");
	$sql ="select * from member where mid='".$_GET['b']."' ";
	$rs = mysqli_query($conn, $sql);
	$data= mysqli_fetch_array($rs);

								   
	echo "ชื่อลูกค้า :". $data['mname']."<br>"; 
	echo "ที่อยู่ลูกค้า :".$data['maddr']."<br>"; 
	echo "โทร. : ".$data['mphone'];								   
	?>	  </div><div class="col-8"></div>
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            รายละเอียดใบสั่งซื้อเลขที่ <?=$_GET['a'];?>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTablesID">
                                <thead>
                              
  <tr>
    <td width="80">ที่</td>
    <td width="100">สินค้า</td>
    <td width="100">จำนวน</td>
    <td width="100">ราคา/ชิ้น</td>
    <td width="173">รวม</td>
  </tr>
  </thead>
  <?php
	include("connectdb.php");
	$sql = "SELECT  *  FROM  orders_detail
INNER JOIN product ON orders_detail.pid = product.p_id
WHERE orders_detail.oid = '".$_GET['a']."'  ";
	$rs = mysqli_query($conn, $sql) ;
	$i = 0;
	while ($data = mysqli_fetch_array($rs, MYSQLI_BOTH)) {
		$i++;
		$sum = $data['p_price'] * $data['item'] ;
		@$total += $sum;
?>
  <tr>
    <td><?=$i;?></td>
    <td><img src="images/<?=$data['p_picture'];?>" width="25%"> <br>@
	<?=$data['od_product'];?>  <?=$data['p_name'];?></td>
    <td><?=$data['item'];?></td>
    <td><?=number_format($data['p_price'],0);?></td>
    <td><?=number_format($sum,0);?></td>
  </tr>
 <?php } ?>
  
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>รวมทั้งสิ้น</td>
    <td><?=number_format($total,0);?></td>
								</tr>
							</table>
						</div>
		  </div>
<a class="glyphicon glyphicon-circle-arrow-left btn btn- btn-lg" href="view_order1.php" title="เพิ่มสินค้า"> BACK</a></p>

								   <div class="col-lg-12" align="right">
<a href="view_order_detail.php" onclick="window.print();" target="_blank" class="btn btn-info">
<i class="fa fa-print"></i> Print</a>
								   </div>
</body>
</html>