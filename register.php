<?php
	@session_start();
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

<li><a href="index1.php?pt=<?=$data2['pt_id'];?>" class="btn btn-outline-dark"><?=$data2['pt_name'];?></a>

		  <?php } ?></li>
        <li><a href="contact.php">Contact</a></li>
		<div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
      <a class="dropdown-item" href="#">Dropdown link</a>
      <a class="dropdown-item" href="#">Dropdown link</a>
    </div>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="register.php"><span class="glyphicon glyphicon-log-in"></span>&nbsp; Login</a></li>
        <li><a href="basket.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
      </ul>
    </div>
  </div>
</nav>
 <section id="aa-myaccount">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
        <div class="aa-myaccount-area">
            <div class="row">
              <div class="col-md-6">
                <div class="aa-myaccount-login">
                <h4>เข้าสู่ระบบ</h4>
                <form action="" class="aa-login-form" method="post">
                  <label for="">ชื่อผู้ใช้งาน<span>*</span></label>
                   <input type="text" name="muser" placeholder="Username" required>
                   <label for="">รหัสผ่าน<span>*</span></label>
                    <input type="password" name="mpass" placeholder="Password" required>
                    <button type="submit" name="Submit1" class="btn btn-success">Login</button>
                    <label class="rememberme" for="rememberme"><input type="checkbox" id="rememberme"> จดจำฉัน </label>
                    
                  </form>
                </div>
              </div>
              <div class="col-md-6">
                <div class="aa-myaccount-register">
                 <h4>สมัครสมาชิก</h4>
                 <form class="aa-login-form" method="post">
					<label for="">Name<span>*</span></label>
                   <input type="text" name="mname" id="mname" placeholder="Name" required>
                    <label for="">Username<span>*</span></label>
                    <input type="text" name="muser" id="muser" placeholder="Username" required>
                    <label for="">Password<span>*</span></label>
                    <input type="password" name="mpass" id="mpass" placeholder="Password" required>
					 <label for="">Address<span>*</span></label>
                   <textarea class="form-control" name="maddr" id="maddr" rows="6" placeholder="Address" required></textarea>
					 
					 <label for="">Tel.<span>*</span></label>
					 <input type="text" name="mphone" id="mphone" placeholder="Tel." required>
                    <button type="submit" name="Submit" class="btn btn-success">Register</button>
                  </form>
                </div>
              </div>
            </div>
         </div>
       </div>
     </div>
   </div>
 </section>
<?php
if (isset($_POST['Submit'])) {
  $mname = $_POST['mname'];
  $muser = $_POST['muser'];
  $mpass = $_POST['mpass'];
  $maddr = $_POST['maddr'];
  $mphone = $_POST['mphone'];
	
$chk_usr = "SELECT muser FROM member WHERE muser = '$muser'";
  $rs = mysqli_query($conn,$chk_usr);
  $usr_row = mysqli_num_rows($rs);

  if ($usr_row > 0) {
    // $usr_row ไม่ใช่ค่าว่างหรือ username มีอยู่แล้วจะทำการแจ้งเตือน
    echo "<script>
        alert('มีชื่อผู้ใช้งานนี้อยู่ในระบบแล้ว!');
        window.history.back();
        </script>";

  }else {
 $str = "INSERT INTO member VALUES('','$mname','$muser','$mpass','$maddr','$mphone')";
    mysqli_query($conn,$str);

      echo "<script>
          alert('สมัครสมาชิกเรียบร้อยแล้ว!');
          window.location='register.php';
          </script>";
}}
?>	

<?php
if(isset($_POST['Submit1'])){
	include("connectdb.php");//เชื่อมต่อdatabase
	$sql = "select * from member where muser='".$_POST['muser']."' and mpass='".$_POST['mpass']."'";
	$rs = mysqli_query($conn, $sql);
	$num = mysqli_num_rows($rs);//คำสั่งนับselectว่าตรงกันหรือไม่
	
	if ($num == 1){//ถ้าเป็น1แสดงถูก
		$data = mysqli_fetch_array($rs);
		$_SESSION['mid'] = $data['mid'];//รหัส
		$_SESSION['mname'] = $data['mname'];

		echo "<script>";
		echo "window.location='home.php';";//loginถูกจะโชว์หน้าหนังสือ
		echo "</script>";
	} else {//ถ้าไม่ถูกจะเข้าเงื่อนไขนี้
		echo "<script>";
		echo "alert('Username หรือ Password ไม่ถูกต้อง');";
		echo "</script>";
		exit;
	}
}
?>	

<hr>
 <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
    </div>
    <!-- /.container -->
  </footer>

</body>
</html>
