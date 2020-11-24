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
<?php
	include("connectdb.php");
	$sql ="select * from member where mid='".$_GET['id']."' ";
	$rs = mysqli_query($conn, $sql);
	$data= mysqli_fetch_array($rs);

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

<!-- Form Name -->

  <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            รายการข้อมูลทั้งหมด
                        </div>	
<br>
						
						
<div class="form-group">
  <label class="col-md-4 control-label" for="id">รหัสลูกค้า</label>  
  <div class="col-md-4">
  <input id="id" name="id" type="text" placeholder="" class="form-control input-md" readonly value="<?=$data['mid'];?>">   
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="mname">ชื่อลูกค้า</label>  
  <div class="col-md-4">
  <input id="mname" name="mname" type="text" placeholder="" class="form-control input-md" required value="<?=$data['mname'];?>">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="color">Username</label>
  <div class="col-md-4">                     
   <input id="muser" name="muser" type="text" placeholder="" class="form-control input-md" required value="<?=$data['muser'];?>">
    
  </div>
</div>
<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="mpass">Password</label>
  <div class="col-md-4">                     
   <input id="mpass" name="mpass" type="text" placeholder="" class="form-control input-md" required value="<?=$data['mpass'];?>">
</div>
						</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="maddr">ที่อยู่</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="maddr" name="maddr"><?=$data['maddr'];?></textarea>
  </div>

  </div>


<div class="form-group">
  <label class="col-md-4 control-label" for="mphone">เบอร์โทร</label>
  <div class="col-md-4">
    <input id="mphone" name="mphone" type="text" placeholder="" class="form-control input-md" required value="<?=$data['mphone'];?>">
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
	  <a class="glyphicon glyphicon-circle-arrow-left btn btn- btn-lg" href="showmember.php" title="กลับ"> BACK</a></p>
</form>
	
<?php
if (isset($_POST['Submit'])){
	include("connectdb.php");
	$sql = "UPDATE member SET mname='".$_POST['mname']."', muser='".$_POST['muser']."', mpass='".$_POST['mpass']."', maddr='".$_POST['maddr']."', mphone='".$_POST['mphone']."' where mid='".$_GET['id']."' ";
	mysqli_query($conn, $sql) or die("แก้ไขข้อมูลไม่ได้");
		
	echo "<script>" ;
	echo "alert('แก้ไขข้อมูลสำเร็จ');" ;
	echo "window.location='showmember.php';";
	echo "</script>" ;
}
?>	

</body>
</html>