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
	 <section id="checkout">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
        <div class="checkout-area">
          <form method="post" action="ordersSUBMIT.php">
            <div class="row">
              <div class="col-md-8">
                <div class="checkout-left">
                  <div class="panel-group" id="accordion">
<!-- Coupon section -->
                    
                    <!-- Login section -->
                    
                    <!-- Billing Details -->
   <?php
	include("connectdb.php");
	$sql ="select * from member where mid='".$_GET['p']."' ";
	$rs = mysqli_query($conn, $sql);
	$data= mysqli_fetch_array($rs);
						   
	echo "ชื่อลูกค้า :". $data['mname']."<br>"; 
	echo "ที่อยู่ลูกค้า :".$data['maddr']."<br>"; 
	echo "โทร. : ".$data['mphone'];								   
	?>          
<!-- Shipping Address -->
<div class="panel panel-default aa-checkout-billaddress">
<div class="panel-heading">
   <h4 class="panel-title">
   <a data-toggle="collapse" data-parent="#accordion" 
   href="#collapseFour">อยู่ในการจัดส่ง
   </a>
   </h4>
</div>
   <div id="collapseFour" class="panel-collapse collapse in">
   <div class="panel-body">
   <div class="row">
   <div class="col-md-6">
   <div class="aa-checkout-single-bill">
   <input type="text" name="name1" placeholder="ชื่อ*">
</div>
</div>
   <div class="col-md-6">
   <div class="aa-checkout-single-bill">
   <input type="text" name="name2" placeholder="นานสกุล*">
</div>
</div>
</div>
   <div class="row">
   <div class="col-md-6">
   <div class="aa-checkout-single-bill">
   <input type="tel" name="tel" placeholder="เบอร์โทร*">
</div>
</div>
</div>
   <div class="row">
   <div class="col-md-12">
   <div class="aa-checkout-single-bill">
   <textarea cols="8" name="address" rows="3">ที่อยู่*</textarea>
</div>
</div>
</div>                         
</div>
</div>					  
</div>
</div>
</div>
</div>
   <div class="col-md-4">
   <div class="checkout-right">
   <h4>สินค้าในตะกร้า</h4>
   <div class="aa-order-summary-area">
   <table class="table table-responsive">
   <thead>
       <tr>
          <th>สินค้า</th>
          <th>ราคารวม</th>
       </tr>
    </thead>
    <tbody>
<?php
if(isset($_SESSION["cart_item"])){
  $item_total = 0;
foreach ($_SESSION["cart_item"] as $item){
  $item_total += ($item["price"]*$item["quantity"]);
?>
  <tr>
     <td><?php echo $item["name"]; ?> <strong> x  
         <?php echo $item["quantity"]; ?></strong></td>
     <td>$<?php echo $item["quantity"]*$item["price"]; ?></td>
  </tr>							
<?php
}
?>
  </tbody>
<?php
}
?>
<tfoot>
  <tr>
      <th>ราคาไม่รวมภาษี</th>
         <td>$<?php echo $item_total; ?></td>
  </tr>
         <tr>
            <th>ภาษี</th>
            <td>$<?php echo ($item_total*0.07); ?></td>
          </tr>
          <tr>
             <th>ราคาสุทธิ</th>
             <td>$<?php echo $item_total+($item_total*0.07); ?></td>
          </tr>
</tfoot>
</table>
</div>
<h4>ช่องทางการชำระเงิน</h4>
<div class="aa-payment-method">
<label for="cashdelivery"><input type="radio" id="cashdelivery" 
     name="optionsRadios"> Cash on Delivery </label>
<label for="paypal"><input type="radio" id="paypal" 
     name="optionsRadios" checked> Via Paypal </label>
<img src="https://www.paypalobjects.com/webstatic/mktg/logo/AM_mc_vs_dc_ae.jpg" 
     border="0" alt="PayPal Acceptance Mark">
                    <input type="submit" name="orderok" 
                           value="ชำระเงิน" class="btn btn-success">
                  </div>
                </div>
              </div>
            </div>
          </form>
         </div>
       </div>
     </div>
   </div>
</section>