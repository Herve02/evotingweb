<?php
session_start();
$captcha = "" ;
include "connection.php"; 
if(isset($_POST['submit'])) {
	/*if (isset($_POST['g-recaptcha-response'])){
          $captcha=$_POST['g-recaptcha-response'];
        }
        if(!$captcha){
		  $error = "Please check captcha too";
		  include ('register.php');
		  exit();
        }
        $secretKey = "6LeD3hEUAAAAADNeeaGRfKmABjn1gnsXxrpdTa2J";
        $ip = $_SERVER['REMOTE_ADDR'];
        $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
        $responseKeys = json_decode($response,true);
        if(intval($responseKeys["success"]) !== 1) {
		  $error = "You are spammer !";
        }*/
$id= mysqli_real_escape_string($con, $_POST['id']);
$fullname = mysqli_real_escape_string($con,$_POST['fullname']);
$position = mysqli_real_escape_string($con,$_POST['position']);
$info = mysqli_real_escape_string($con,$_POST['info']);
// $pic = $_FILES["photo"]["name"];


$sq = mysqli_query($con, 'SELECT lan_id FROM candidates WHERE lan_id="'.$_POST['id'].'"');
$exist = mysqli_num_rows($sq);
	
		if($exist==1){
		$nam="<center><h4><font color='#FF0000'>Sorry candidateID allready Used, please choose another one!!!!</h4></center></font>";
		unset($username);
		include('registercandidate.php');
		exit();
		}
$sql = mysqli_query($con, 'INSERT INTO candidates(lan_id,fullname,position,about)
         VALUES("'.$_POST['id'].'","'.$_POST['fullname'].'","'.$_POST['position'].'","'.$_POST['info'].'")');
		 if ($sql) { 
		
			header("location: adminDashboard.php");
echo "<script>alert('Successfully Registered!')</script>";



}
else {
	 $error="<center><h4><font color='#FF0000'>Registration Failed Due To Error !</h4></center></font>";
     include"register.php";
}}
?>
