<meta charset="utf-8">
<?php

	@session_start();
	unset($_SESSION['id']);
	unset($_SESSION['mname']);
	
	//session_destroy();คำสั่งลบข้อมูลทั้งหมด
	echo "<meta http-equiv=\"refresh\" content=\"0;URL=clear1.php\">";
	
?>