<?php
	@session_start();

	//session_destroy();

	unset($_SESSION['sid']);
	unset($_SESSION['sname']);
	unset($_SESSION['sprice']);
	unset($_SESSION['sdetail']);
	unset($_SESSION['spicture']);
	unset($_SESSION['sitem']);

	echo "กำลังดำเนินการ กรุณารอสักครู่....";
	echo "<meta http-equiv=\"refresh\" content=\"2;URL=index2.php\">";
	//header("Location: index.php");

?>
<meta charset="utf-8">