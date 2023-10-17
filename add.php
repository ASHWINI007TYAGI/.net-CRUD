<?php
error_reporting(0);
require_once 'config/setting.php';
if (isset($_POST['submit'])) {
	$firstname = $_POST['firstname'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$number = $_POST['number'];
	$address = $_POST['address'];
    $pswd=rand(1000,9999);
    
	$sql = "INSERT INTO `tbl_users` SET`full_name`='$firstname',`username`='$username',`email`='$email',`pswd`='$pswd',`address`='$address',`mobile`='$number',`status`='1'";
	$data=mysqli_query($con,$sql) or die(mysqli_error($con));
	if ($data) {
		echo "insert";
	}else
	{
		echo "sorry";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>insert</title>
</head>
<body>
<div class="row text-center">
	<div class="container">
		<h1>Insert DATA</h1>
	<form action="" method="post">
	<input type="text" name="firstname" placeholder="firstname"><br><br>
	<input type="text" name="username" placeholder="username"><br><br>
	<input type="email" name="email" placeholder="email"><br><br>
	<input type="text" name="number" placeholder="number"><br><br>
	<input type="text" name="address" placeholder="address"><br><br>
	<input type="submit" name="submit" value="insert"><br><br>
	</form>
<button><a href="index_view.php">show data</a></button>
	</div>
</div>
</body>
</html>
