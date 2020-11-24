<meta charset="utf-8">
<?php
if(isset($_GET['id'])){
	include("connectdb.php");
	$sql = "delete from orders where oid='".$_GET['id']."'";
	mysqli_query($conn, $sql) or die ("ลบข้อมูลไม่ได้");
	
	
	echo "<script>" ;
	echo "window.location='view_order1.php';";
	echo "</script>" ;}
?>

