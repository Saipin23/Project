<?php
@session_start();
if(empty($_SESSION['mname'])) {
	echo "<script>
          alert('กรุณาเข้าสู่ระบบ!');
          window.location='register.php';
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

<img src="1.jpg" width="100%">
  


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li ><a href="home.php">HOME</a></li>
        <li><?php
	$sql2 = "select  *  from product_type ";
	$rs2 = mysqli_query($conn, $sql2) ;
	while ($data2 = mysqli_fetch_array($rs2, MYSQLI_BOTH)) {
?>

<li><a href="index2.php?pt=<?=$data2['pt_id'];?>" class="btn btn-outline-dark"><?=$data2['pt_name'];?></a> </li>

		  <?php } ?></li>
		<li ><a href="contact2.php">Contact</a></li>
		</ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href=""><span class="glyphicon glyphicon-user"></span>  <?php echo $_SESSION['mname'];?></a></li>
		  <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
        <li><a href="basket.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
      </ul>
    </div>
  </div>
</nav>
<body>
<div class="col-lg-12" align="center">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            ประวัติการสั่งซื้อ
                        </div>
						  </div>  </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTablesID">
                                <thead>
                                    <tr>
    <td width="153">&nbsp;</td>
    <td width="153">เลขที่ใบสั่งซื้อ</td>
    <td width="193">วันที่</td>
    <td width="150">ราคารวม</td>
 
  </tr>
  
  <?php
	include("connectdb.php");
	@$sql = "select  *  from  `orders` where member_id='{$_SESSION['mid']}'";  // order by oid  desc
	//var_dump($sql);
	$rs = mysqli_query($conn, $sql) ;
	 while ($data = mysqli_fetch_array($rs, MYSQLI_BOTH)) {
?>
  <tr>
    <td><a href="view_order_detail1.php?a=<?=$data['oid'];?>">ดูรายละเอียด</a></td>
    <td><?=$data['oid'];?></td>
    <td><?=$data['odate'];?></td>
    <td><?=number_format($data['ototal'],0);?></td>
 
  </tr>
  <?php } ?>
</table>
								<a class="glyphicon glyphicon-circle-arrow-left btn btn- btn-lg" href="basket.php" title="เพิ่มสินค้า"> BACK</a></p>
	</div>
</body>
</html>