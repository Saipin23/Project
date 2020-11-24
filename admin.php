<?php
	@session_start();
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
	<script src="https://kit.fontawesome.com/yourcode.js"></script>
</style>
</head>
<body>
 <section id="aa-myaccount">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
        <div class="aa-myaccount-area">
            <div class="row">
              <div class="col-md-6">
                <div class="aa-myaccount-login">
                <h4>เข้าสู่ระบบในฐานะผู้ดูแลระบบ   <i class="fa fa-cog fa-spin"></i></h4>
                <form action="" class="aa-login-form" method="post">
                  <label for="">ชื่อผู้ใช้งาน<span>*</span></label>
                   <input type="text" name="muser" placeholder="Username">
                   <label for="">รหัสผ่าน<span>*</span></label>
                    <input type="password" name="mpass" placeholder="Password">
                    <button type="submit" name="Submit1" class="btn btn-success">Login</button>
                  
                  </form>
                </div>
</div>
<?php
if(isset($_POST['Submit1'])){
	include("connectdb.php");//เชื่อมต่อdatabase
	$sql = "select * from admin where aduser='".$_POST['muser']."' and adpass='".$_POST['mpass']."'";
	$rs = mysqli_query($conn, $sql);
	$num = mysqli_num_rows($rs);//คำสั่งนับselectว่าตรงกันหรือไม่
	
	if ($num == 1){//ถ้าเป็น1แสดงถูก
		$data = mysqli_fetch_array($rs);
		$_SESSION['mid'] = $data['mid'];//รหัส
		$_SESSION['adname'] = $data['adname'];//ชื่อadmin
		echo "<script>";
		echo "window.location='showproduct.php';";//loginถูกจะโชว์หน้าหนังสือ
		echo "</script>";
	} else {//ถ้าไม่ถูกจะเข้าเงื่อนไขนี้
		echo "<script>";
		echo "alert('Username หรือ Password ไม่ถูกต้อง');";
		echo "</script>";
		exit;
	}
}
?>	
	
</body>
</html>





