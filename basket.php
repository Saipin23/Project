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
	<link rel="icon" type="image/x-icon" href="time_management_clock_icon_152075.ico" />
   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daily Shop | Product Detail</title>

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
        <li class="active"><a href="home.php">Home</a></li>
		  <li><?php
	$sql2 = "select  *  from product_type ";
	$rs2 = mysqli_query($conn, $sql2) ;
	while ($data2 = mysqli_fetch_array($rs2, MYSQLI_BOTH)) {
?>

<li><a href="index2.php?pt=<?=$data2['pt_id'];?>" class="btn btn-outline-dark"><?=$data2['pt_name'];?></a>
	  <?php } ?></li>
        <li><a href="contact2.php">Contact</a></li>
		<div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
      <a class="dropdown-item" href="#">Dropdown link</a>
      <a class="dropdown-item" href="#">Dropdown link</a>
    </div>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href=""><span class="glyphicon glyphicon-user">  
			</span> <?php echo $_SESSION['mname'];?></a></li>
		  <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
        <li><a href="basket.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
      </ul>
    </div>
  </div>
</nav>
<?php
	@session_start();
	include("connectdb.php");
	@$sql = "select * from product where p_id='".$_GET['id']."' ";
	$rs = mysqli_query($conn, $sql) ;
	$data = mysqli_fetch_array($rs, MYSQLI_BOTH);
	@$id = $_GET['id'] ;
	
	if(isset($_GET['id'])) {
		$_SESSION['sid'][$id] = $data['p_id'];
		$_SESSION['sname'][$id] = $data['p_name'];
		$_SESSION['sprice'][$id] = $data['p_price'];
		$_SESSION['sdetail'][$id] = $data['p_detail'];
		$_SESSION['spicture'][$id] = $data['p_picture'];
		@$_SESSION['sitem'][$id]++;
	}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ตะกร้าสินค้า</title>
<link href="bootstrap.css" rel="stylesheet" type="text/css">

</head>

<body>
<blockquote>
<center>
                  <span class="aa-cart-title">สินค้าในตะกร้า</span></center>
<br><br>
	 <section class="invoice">
  <div class="row">
  <div class="col-xs-12">
<div class="row">
<div class="col-xs-12 table-responsive">
<table class="table ">
<thead>
<tr>
<th>No.</th>
<th>Image</th>
<th>Name</th>
<th>price</th>
<th>Unit</th>
	<th>Total</th>
	<th>Delete</th>
</tr>
</thead>
<?php
if(!empty($_SESSION['sid'])) {
	foreach($_SESSION['sid'] as $pid) {
		@$i++;
		$sum[$pid] = $_SESSION['sprice'][$pid] * $_SESSION['sitem'][$pid] ;
		@$total += $sum[$pid] ;
		$_SESSION['mname'];

?>
	<tr>
		<td><?=$i;?></td>
		<td><img src="images/<?=$_SESSION['spicture'][$pid];?>" width="120"></td>
		<td><?=$_SESSION['sname'][$pid];?></td>
		<td><?=number_format($_SESSION['sprice'][$pid],0);?></td>
		<td> <?=$_SESSION['sitem'][$pid];?></td>
		<td><?=number_format($sum[$pid],0);?></td>
		<td><a href="clear2.php?id=<?=$pid;?>" class="col-md-3 col-md-4"><i class="fa fa-trash" style="font-size:25px;color:red;"></a></td>
	</tr>
<?php } // end foreach ?>
	<tr>
		<td colspan="5" align="right"><strong>รวมทั้งสิ้น</strong> &nbsp; </td>
		<td><strong>&nbsp;&nbsp;&nbsp;<?=number_format($total,0);?></strong></td>
		<td><strong>บาท</strong></td>
	</tr>
	<!--<tr>
		<td colspan="5" align="right"><strong>ภาษี 7%</strong> &nbsp; </td>
		<td><strong>&nbsp;&nbsp;&nbsp;  </strong></td>
		<td><strong>บาท</strong></td>
	
	</tr>
	<tr>
		<td colspan="5" align="right"><strong>ราคาสุทธิ</strong> &nbsp; </td>
		<td><strong>&nbsp;&nbsp;&nbsp; </strong></td>
		<td><strong>บาท</strong></td>
	
	</tr> -->
<?php 
} else {
?>
	<tr>
		<td colspan="7" height="50" align="center">ไม่มีสินค้าในตะกร้า</td>
	</tr>
<?php } // end if ?>	


</table>
	</div></div></div></div></div></div></div></div></div>   
	<a href="index2.php" class="btn btn-primary">กลับไปเลือกสินค้า</a>  
    <a href="clear.php" class="btn btn-warning">ลบสินค้าทั้งหมด</a>
	<a href="view_order.php" class="btn btn-info">ประวัติการสั่งซื้อ</a>
	<a href="record.php" class="btn btn-success pull-right" align="right">สั่งซื้อสินค้า</a> 
</blockquote>
		
	<hr>
 <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
    </div>
    <!-- /.container -->
  </footer>  
</body>
</html>



