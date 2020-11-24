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

	
<form class="form-horizontal" method="post" enctype="multipart/form-data">
<fieldset>
	
	</fieldset>
	</form>

                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                           ความคิดเห็น
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTablesID">
                                <thead>
                                    <tr>
	<td width="130">Edit</td>
    <td width="80">id</td>
    <td width="300">subject</td>
    <td width="200">name</td>
    <td width="200">Email</td>
    <td width="500">message</td>
	<td width="200">time</td>									

                                </thead>
                                <tbody>
<?php
include("connectdb.php");
	$sql = "select  *  from contact";
	$rs = mysqli_query($conn, $sql) ;
	while ($data = mysqli_fetch_array($rs, MYSQLI_BOTH)) {
?> 
                                    <tr>
                                        <td>
<a class="glyphicon glyphicon-trash btn btn-danger btn-sm" href="delete3.php?id=<?=$data['cid'];?>" title="ลบ" onClick="return confirm('ยืนยันการลบ?');"></a>
                                       </td>
	<td><?=$data['cid'];?></td>									
    <td><?=$data['csubject'];?></td>
    <td><?=$data['cname'];?></td> 
    <td><?=$data['cEmail'];?></td>
    <td><?=$data['cmessage'];?></td>
    <td><?=$data['ctime'];?></td>
								
    <?php  }  ?>



                                </tbody>
								
                            </table>
							<a class="glyphicon glyphicon-circle-arrow-left btn btn- btn-lg" href="showproduct.php" title="กลับ"> BACK</a></p>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->



</body>
</html>