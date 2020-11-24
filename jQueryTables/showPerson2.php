<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>รายชื่อบุคลากร 2</title>

<!-- ### Table by NK -->

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    
    <style type="text/css">
    body {
		background-color: #FFFFFF;
	}
    </style>
    
    <script src="js/jquery-1.11.1.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="vendor/datatables-responsive/dataTables.responsive.js"></script>

    <script>
    $(document).ready(function() {
        $('#dataTablesID').DataTable({
            responsive: true
        });
    });
    </script>
<!-- ### Table by NK -->

</head>

<body>
<br>

<div class="panel panel-default">
    <div class="panel-heading">
        รายการข้อมูลทั้งหมด
    </div>
    <div class="panel-body">
<table border="1" width="100%" class="table table-striped table-bordered table-hover" id="dataTablesID">
<thead>
  <tr>
    <td width="80">id</td>
    <td width="153">picture</td>
    <td width="226">fullname</td>
    <td width="193">gender</td>
    <td width="150">job</td>
    <td width="150">company</td>
    <td width="150">country</td>
  </tr>
 </thead>
 
  <?php
	include("connectdb.php");
	$sql = "select  *  from  person  order by  id  asc limit 100 ";
	$rs = mysqli_query($conn, $sql) ;
	while ($data = mysqli_fetch_array($rs, MYSQL_BOTH)) {
?>

  <tr>
    <td><?=$data['id'];?></td>
    <td><img src="<?=$data['avatar'];?>"></td>
    <td><?=$data['fullname'];?></td>
    <td><?=$data['gender'];?></td>
    <td><?=$data['job'];?></td>
    <td><?=$data['company'];?></td>
    <td><?=$data['country'];?></td>
  </tr>
  
  <?php  }  ?>
  
</table>
    </div>
</div>

</body>
</html>