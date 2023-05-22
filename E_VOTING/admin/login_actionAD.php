<?php
session_start();
include "connection.php"; 
if(isset($_POST['login'])) {
$username = $_POST["username"];
$password = $_POST["password"];
$username = addslashes($username);
$password = addslashes($password);
$username = mysqli_real_escape_string($con,$username);
$password = mysqli_real_escape_string($con,$password);
$query=$sql = "select *from admins where username = '$username' and password = '$password'"; 
$sql = mysqli_query($con,$query);
if (mysqli_num_rows($sql) >0 ) {
	$member =  mysqli_fetch_assoc($sql);
	$_SESSION['SESS_NAME'] = $member['username'];

	header("location: adminDashboard.php");
	
	if($member['username']=='admins'){
			header("location: adminDashboard.php");
			}
	// 		else if($member['rank']=='voter'){
	// 		header("location: voter.php");
	// 		}
}
else {
	$error = "<center><h4><font color='#FF0000'>Incorrect Username or Password</h4></center></font>";
	include "login_admin.php";
}
}
else {
	$error = "<center><h4><font color='#FF0000'>Invalid Username or Password</h4></center></font>";
	include "login.php";
}
?>