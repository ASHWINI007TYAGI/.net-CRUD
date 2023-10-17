<!DOCTYPE html>
<html>
<head>
	<title>show table</title>
</head>
<body>
<?php
require_once ('config/setting.php');
$sql ="select * from tbl_users";
$data =mysqli_query($con,$sql);
$total=mysqli_num_rows($data);
if ($total=mysqli_num_rows($data)) {
	?>
	<table border="2">
<tr>
<th>id</th>
<th>firstname</th>
<th>lastname</th>
<th>gmail</th>
<th>number</th>
<th>address</th>
<th>delete</th>
<th>update</th>
</tr>
	<?php
	while ($result = mysqli_fetch_array($data)) {
		?>
			<tr>
				<td><?php echo $result['id']?></td>
				<td><?php echo $result['full_name']?></td>
				<td><?php echo $result['username']?></td>
				<td><?php echo $result['email']?></td>
				<td><?php echo $result['mobile']?></td>
				<td><?php echo $result['address']?></td>
				<td><a href="update.php?id=<?php echo $result['id']?>"> update </a></td>
				<td><a href="delete.php?id=<?php echo $result['id']?>"> delete </a></td>
			</tr>
		<?php
	}
}
else
{
 	echo "no record found";
}
?>
</table>
</body>
</html>
 <!--------- echo "<br>".$result['id']."  ".$result['firstname']." ".$result['lastname']." ".$result['gmail']."  ".$result['number']."  ".$result['address']."<br>";_----->