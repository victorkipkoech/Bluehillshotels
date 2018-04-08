<?php
session_start();
require_once('../connection.php');

if (isset($_POST)) {
	$type =mysqli_real_escape_string($conn,$_POST['type']);
	$roomNo=mysqli_real_escape_string($conn,$_POST['roomNo']);
	$guests =mysqli_real_escape_string($conn,$_POST['guests']);
	$floor=mysqli_real_escape_string($conn,$_POST['floor']);


	$sql ="INSERT into rooms(roomType,roomNo,maxGuests,floorNo) values('$type','$roomNo','$guests','$floor')";

	if ($conn->query($sql)===True) {
		$_SESSION['roomAdded'];
		header("Location:dashboard.php");
		exit();
	}else{
		echo "Error".$sql ."<br>".$conn->error;
	}

}else{
	header("Location:addroom.php");
	exit();
}
?>