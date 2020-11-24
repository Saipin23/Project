<?php

@session_start();
if(empty($_SESSION['mname'])) {
	echo "";
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
        <li ><a href="index.php">HOME</a></li>
        <li><?php
	$sql2 = "select  *  from product_type ";
	$rs2 = mysqli_query($conn, $sql2) ;
	while ($data2 = mysqli_fetch_array($rs2, MYSQLI_BOTH)) {
?>

<li><a href="index2.php?pt=<?=$data2['pt_id'];?>" class="btn btn-outline-dark"><?=$data2['pt_name'];?></a>

		  <?php } ?></li>
        <li><a href="contact.php">Contact</a></li>
		<div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
      <a class="dropdown-item" href="#">Dropdown link</a>
      <a class="dropdown-item" href="#">Dropdown link</a>
    </div>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <li><a href=""><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['mname'];?></a></li>
		  <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
        <li><a href="basket.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
      </ul>
    </div>
  </div>
</nav>
	<center><h2>DANIEL WELLTNGTON</h2>
<center><h3>แรงบันดาลใจเริ่มต้นที่นี่</h3><hr>
<p>ค้นหาแรงบันดาลใจของการสวมใส่เครื่องประดับได้จากพาร์ทเนอร์จากทั่วทุกมุมโลกของเรา และค้นหาการมิกซ์แอนแมชเพื่อค้นหาสไตล์ใหม่ๆ เพื่อเติมเต็มลุคของคุณให้สมบูรณ์แบบ</p>
<p>นาฬิกาสำหรับสุภาพสตรีของเราสร้างสรรค์มาอย่างพิถีพิถันและเพิ่มลูกเล่นต่างๆด้วยสายนาฬิกาที่สามารถเปลี่ยนได้หลากหลาย ทำให้เหมาะกับทุกสภาพโอกาส เป็นนาฬิกาที่แสดงถึงตัวตนของคุณตามสายนาฬิกาที่คุณเลือกไม่ว่าจะเป็นสายผ้านาโต้สีสันสวยงาม สายโลหะที่หรูหรา หรือสายหนังสุดคลาสสิค Daniel Wellington ของเรามองหาความสมบูรณ์แบบ เราใส่ใจทุกรายละเอียดเพื่อให้ได้นาฬิกาที่ตอบโจทย์และแสดงถึงความเป็นแดเนียลเวลลิงตันที่สุด</p>
<hr>
<div class="container">
<div class="col-md-3">
    <div class="thumbnail">
		<img src="img/index1.jpg" height="100%" >
	</div>
  </div>
	<div class="col-md-3">
    <div class="thumbnail">
		<img src="img/index2.jpg" height="100%">
	</div>
  </div>
	<div class="col-md-3">
    <div class="thumbnail">
		<img src="img/index3.jpg" height="100%">
	</div>
  </div>
	<div class="col-md-3">
    <div class="thumbnail">
		<img src="img/index4.jpg" height="100%">
	</div>
  </div>
	<div class="col-md-3">
    <div class="thumbnail">
		<img src="img/index5.jpg" height="100%">
	</div>
  </div>
	<div class="col-md-3">
    <div class="thumbnail">
		<img src="img/index6.jpg" width="100%">
	</div>
  </div>
	<div class="col-md-3">
    <div class="thumbnail">
		<img src="img/index7.jpg" width="100%">
	</div>
  </div>
	<div class="col-md-3">
    <div class="thumbnail">
		<img src="img/index8.jpg" width="100%">
	</div>
  </div>
	
</div>


</center>



<hr>
 <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
    </div>
    <!-- /.container -->
  </footer>


</body>
</html>
