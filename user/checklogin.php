<?php
session_start();
require_once("../connection.php");

//Iff user clicked login button
if (isset($_POST)) {

	//Escape special characters in string
	$email =mysqli_real_escape_string($conn,$_POST['email']);
	$password =mysqli_real_escape_string($conn,$_POST['password']);

	//Encrypt password
	$password=base64_encode(strrev(md5($password)));

	$sql ="SELECT * from users where email='$email' AND password='$password'";
	$result =$conn->query($sql);

	if ($result->num_rows > 0) {
		while ($row =$result->fetch_assoc()) {
			$_SESSION['fullname']=$row['fullname'];
			$_SESSION['email']=$row['email'];
			$_SESSION['dob']=$row['dob'];
			$_SESSION['id_user']=$row['id_user'];

			header("Location:dashboard.php");
			exit();
		}
	}else{
		$_SESSION['loginError']=$conn->error;
		header("Location:index.php");
		exit();
	}
	$conn->close();  

}else{
	//redirecting back to login
	header("Location:index.php");
	exit();
}
?>