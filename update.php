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
<form class="form-horizontal" method="post" enctype="multipart/form-data">
<fieldset>
  <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">เพิ่มสินค้า</div>	
<!-- Text input-->
<br>
<div class="form-group">
  <label class="col-md-4 control-label" for="p_id">รหัสสินค้า</label>  
  <div class="col-md-4">
  <input id="p_id" name="p_id" type="text" placeholder="" class="form-control input-md" required>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="p_name">ชื่อสินค้า</label>  
  <div class="col-md-4">
  <input id="p_name" name="p_name" type="text" placeholder="" class="form-control input-md" required>
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="color">สีหน้าปัด</label>
  <div class="col-md-4">                     
    <input class="form-control" id="color" name="color">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="p_detail">รายละเอียด</label>  
  <div class="col-md-4">
   <textarea class="form-control" id="p_detail" name="p_detail"></textarea> 
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="p_price">ราคา</label>  
  <div class="col-md-4">
  <input id="p_price" name="p_price" type="text" placeholder="" class="form-control input-md" required>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="p_type">ชนิด</label>  
  <div class="col-md-4">
  <input id="p_type" name="p_type" type="text" placeholder="" class="form-control input-md" required>
    
  </div>
</div>

<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="p_picture">รูปสินค้า</label>
  <div class="col-md-4">
    <input id="p_picture" name="p_picture" class="input-file" type="file">
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Submit"></label>
  <div class="col-md-4">
    <button id="Submit" name="Submit" class="btn btn-primary">บันทึก</button>
  </div>
</div>

</fieldset>
	<a class="glyphicon glyphicon-circle-arrow-left btn btn- btn-lg" href="showproduct.php" title="เพิ่มสินค้า"> BACK</a></p>
</form>
	
<?php
if (isset($_POST['Submit'])){
	include("connectdb.php");
	$sql = "INSERT INTO `product` VALUES ('".$_POST['p_id']."', '".$_POST['p_name']."', '".$_POST['color']."', '".$_POST['p_detail']."', '".$_POST['p_price']."', '".$_POST['p_id'].".jpg','".$_POST['p_type']."');";
	mysqli_query($conn, $sql) or die("เพิ่มข้อมูลไม่ได้");
		
	if(isset($_FILES['p_picture']['name'])){
	@copy($_FILES['p_picture']['tmp_name'],"images/".$_POST['p_id'].".jpg");
	}
	
	echo "<script>" ;
	echo "alert('เพิ่มข้อมูลสำเร็จ');" ;
	echo "window.location='showproduct.php';";
	echo "</script>" ;
}
?>	

</body>
</html>