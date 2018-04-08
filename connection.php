<?php
$conn_error="Could Not connect to Database";
$host ="localhost";
$user ="root";
$pass ="";

$db ="bluehills";

$conn = new mysqli($host,$user,$pass,$db);

if ($conn->connect_error) {
	die("Connection Failed: ".$conn->connect_error);
}
?>