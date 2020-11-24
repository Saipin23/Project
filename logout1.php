<meta charset="utf-8">
<?php

	@session_start();
	unset($_SESSION['mid']);
	unset($_SESSION['adname']);
	
	//session_destroy();คำสั่งลบข้อมูลทั้งหมด
	echo "<script>" ;
	echo "window.location='admin.php';";
	echo "</script>" ;
?>