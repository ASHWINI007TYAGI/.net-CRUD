<?php
require_once ('config/setting.php');
$id = $_GET['id'];
$sql ="DELETE FROM `tbl_users` WHERE id='$id'";
$data = mysqli_query($con,$sql);
if ($data) {
	echo "deleted";
	header('location:show.php');
}else
{
	echo "error";
}
 ?>