<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>รายชื่อบุคลากร 1</title>
</head>

<body>
<h1>Persons</h1>
<table width="1140" border="1" cellspacing="1" cellpadding="1">
  <tr>
    <td width="80">id</td>
    <td width="153">picture</td>
    <td width="226">fullname</td>
    <td width="193">gender</td>
    <td width="150">job</td>
    <td width="150">company</td>
    <td width="150">country</td>
  </tr>
  
  <?php
	include("connectdb.php");
	$sql = "select  *  from  person  order by  id  asc limit 20";
	$rs = mysqli_query($conn, $sql) ;
	while ($data = mysqli_fetch_array($rs, MYSQL_BOTH)) {
?>

  <tr>
    <td><?=$data['id'];?></td>
    <td><img src="<?=$data['avatar'];?>"></td>
    <td><?=$data['fullname'];?></td>
    <td><?=$data['gender'];?></td>
    <td><?=$data['job'];?></td>
    <td><?=$data['company'];?></td>
    <td><?=$data['country'];?></td>
  </tr>
  
  <?php  } // End while ?>

  <?php
	mysqli_close($conn);
  ?>
  
</table>
</body>
</html>