<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>รายชื่อบุคลากร 3</title>

<!-- ### Table apply by Ekkachai -->

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
<!-- ### Table apply by Ekkachai  -->

</head>
<body>
<br>
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
    <td width="300">picture</td>
    <td width="180">fullname</td>
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
	while ($data = mysqli_fetch_array($rs, MYSQL_BOTH)) {
?> 
                                    <tr>
                                        <td>
<a class="glyphicon glyphicon-eye-open btn btn-success btn-xs" href="#" title="ดูรายละเอียด" onClick="window.open('xxx.php?id=<?=$data['id'];?>', 'รายละเอียด', 'width=780, height=600px');"></a>
<a class="glyphicon glyphicon-edit btn btn-primary btn-xs" href="edit.php?id=<?=$data['id'];?>" title="แก้ไข"></a>
<a class="glyphicon glyphicon-trash btn btn-danger btn-xs" href="delete.php?id=<?=$data['id'];?>" title="ลบ" onClick="return confirm('ยืนยันการลบ?');"></a>
                                       </td>
                                        <td align="center"><?=$data['id'];?></td>
                                        <td align="center"><img src="<?=$data['avatar'];?>"></td>
                                        <td><?=$data['fullname'];?></td>
                                        <td><?=$data['gender'];?></td>
                                        <td><?=$data['job'];?></td>
                                        <td><?=$data['company'];?></td>
                                        <td><?=$data['country'];?></td>
                                    </tr>
<?php } ?>

  <?php
	mysqli_close($conn);
  ?>

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