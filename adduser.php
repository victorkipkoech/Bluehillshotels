<?php
session_start();
require_once("connection.php");
if (isset($_POST)) {
	$fullname =mysqli_real_escape_string($conn,$_POST['fullname']);
	$email =mysqli_real_escape_string($conn,$_POST['email']);
	$idNo =mysqli_real_escape_string($conn,$_POST['idNo']);
	$dob=mysqli_real_escape_string($conn,$_POST['dob']);
	$tel=mysqli_real_escape_string($conn,$_POST['telephone']);
	$address=mysqli_real_escape_string($conn,$_POST['address']);
	$city=mysqli_real_escape_string($conn,$_POST['city']);
	$password =mysqli_real_escape_string($conn,$_POST['password']);
	// $usertype =mysqli_real_escape_string($conn,$_POST['usertype']);

	//Encrypt password
	$password =base64_encode(strrev(md5($password)));

	$sql ="SELECT email from users where email ='$email'";
	$result=$conn->query($sql);

	if ($result->num_rows == 0) {

	$sql ="INSERT into users(fullname,email,idNo,dob,telephone,address,city,password)values('$fullname','$email','idNo','$dob','$tel','$address','$city','$password')";
	if ($conn->query($sql)===True) {
		$_SESSION['registerCompleted']=true;
		header("Location:index.php");
		exit();
	}else{
		echo "Error".$sql ."<br>".$conn->error;
	}

}else{
	$_SESSION['registerError']=true;
	header("Location:register.php");
	exit();
}
$conn->close();
}else{
	header("Location:register.php");
	exit();
}
?>