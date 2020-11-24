<?php
	include("connectdb.php");
?>
<!doctype html>
<html>
<head>
	<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>DANIEL WELLTNGTON</title>
			<link rel="icon" type="image/x-icon" href="time_management_clock_icon_152075.ico"/>
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<?php	
	include("connectdb.php");
	$sql = "select * from product where p_id='".$_GET['id']."' ";
	$rs = mysqli_query($conn, $sql) ;
	$data = mysqli_fetch_array($rs);
?>	

                    <div class="container">
						<div class="thumbnail">
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase"><?=$data['p_name'];?></h2>
                                    <p class="item-intro text-muted">Product Detail</p>
                                    <center><img src="images/<?=$data['p_picture'];?>" width="65%"></center>
                             
                                    <ul class="list-inline">
                                        <li>Name : <?=$data['p_name'];?></li>
                                        <li>Color : <?=$data['color'];?></li>
                                        <li>Price : <?=$data['p_price'];?></li>
                                    </ul>
									<p><?=$data['p_detail'];?></p>
									<a href="index1.php">
                                    <center><button class="btn btn-primary" data-dismiss="modal" type="button" >
                                        <i class="fas fa-times mr-1"></i>
											Close Detail
									</button></center>
									</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<body>
</body>
</html>