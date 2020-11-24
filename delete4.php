<meta charset="utf-8">
<?php
if(isset($_GET['id'])){
	include("connectdb.php");
	$sql = "delete from member where mid='".$_GET['id']."'";
	mysqli_query($conn, $sql) or die ("ลบข้อมูลไม่ได้");
	
	unlink("images/".$_GET['p_id'].".jpg");
	
	echo "<script>" ;
	echo "window.location='showmember.php';";
	echo "</script>" ;}
?>

