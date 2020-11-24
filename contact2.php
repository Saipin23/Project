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
	<link rel="icon" type="image/x-icon" href="time_management_clock_icon_152075.ico"/>
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
        <li ><a href="index2.php">HOME</a></li>
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
        <li><a href=""><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['mname'];?></a></li>
		  <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
        <li><a href="basket.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
      </ul>
    </div>
  </div>
	</nav>
</div>


<div class="container alert alert-secondary">
<div class="col-md-6">

		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3826.840873463918!2d102.82336101458873!3d16.432906088657106!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31228a177f96cb25%3A0x89a8966e698a4760!2z4LmA4LiL4LmH4LiZ4LiX4Lij4Lix4Lil4Lie4Lil4Liy4LiL4LiyIOC4guC4reC4meC5geC4geC5iOC4mQ!5e0!3m2!1sth!2sth!4v1604139757102!5m2!1sth!2sth" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

  </div>
	<div class="col-md-6">
		<div class="form-group">
  <div class="aa-contact-address">
             <div class="row">
               <div class="col-md-12">
                 <div class="aa-contact-address-left">
                   <form class="comments-form contact-form" action="" method="post">
                    <div class="row">
					
                      <div class="col-md-12">
                        <div class="form-group">
                          <input type="text" name="name" id="name" placeholder="ชื่อ" class="form-control" required>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <input type="email" name="email" id="email" placeholder="อีเมล์" class="form-control" required>
                        </div>
                      </div>
                    </div>
                     <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <input type="text" name="subject" id="subject" placeholder="เรื่อง" class="form-control" required>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <textarea class="form-control" name="message" id="message" rows="6" placeholder="ข้อความ" required></textarea>
                    </div>
                    <button type="submit" name="Submit" class="btn btn-success">ส่ง</button>
                  </form>
                 </div>
               </div>
<?php
if (isset($_POST['Submit'])) {
  $subj = $_POST['subject'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $comp = $_POST['company'];
  $msg = $_POST['message'];

  $str = "INSERT INTO contact VALUES('','$subj','$name','$email','$comp','$msg',CURRENT_TIMESTAMP)";
  mysqli_query($conn,$str);

  echo "<script>
    window.location='contact.php';
    </script>";
}
?>				 
				 				 
</div>
</div>
</div>
</div>
	</div>
</div>
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
