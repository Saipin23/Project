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
<p></p>  
	
<br><br>
<!-- Text input-->
<center>
</center>
	<br>
  <?php
	@$kw = $_POST['kw'] ;
	$pt = $_GET['pt'] ;
	if (isset($_GET['pt'])) {
		$s = "and (p_type = '$pt')"; 
	} else {
		$s = "";	
	}
	$sql = "select * from product where ( p_name like '%$kw%' or color like '%$kw%' ) $s ";
	$rs = mysqli_query($conn, $sql) ;
	$i = 0;
	while ($data = mysqli_fetch_array($rs, MYSQLI_BOTH)) {
		$i++;
		if( ($i % 4) == 1) {
			echo "<div class='row' align='center' style='width:100%;'>";
		}
?>
<div class="container col-md-3 align-center">
    <div class="thumbnail">
		<div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="detail.php?id=<?=$data['p_id'];?>">
								<img src="images/<?=$data['p_picture'];?>" width="65%"></a></div>
      <div class="caption">
        <h4><?=$data['p_name'];?></h4>
		  color : <?=$data['color'];?> <br>
       ฿ <?=number_format($data['p_price'],0);?> 
        <p><a href="basket.php?id=<?=$data['p_id'];?>" class="btn btn-primary" role="button">หยิบลงตะกร้า</a> </p>
      </div>
    </div>
</div>

<?php 
		if ( ($i % 4 ) == 0){
			echo "</div>";	
		}
	} // end while

	mysqli_close($conn);
?>

</div>

<hr>
 <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
    </div>
    <!-- /.container -->
  </footer>

</body>
</html>
