<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		body{
			width: 100%;
			height: 100vh;
			padding: 20px;
			background: linear-gradient(rgba(94, 48, 5, 0.5),rgba(34, 26, 12, 0.9)),url("imgs/43916.jpg");
			background-position: center;
            background-size: cover;
			background-attachment: fixed;
			
		}
		#myform{
			padding: 20px;
			background: rgb(0,0,0,0.5);
			width: 400px;
            height: auto;
			border-radius: 25px;
			transition: .5s;
		}
		#myform:hover{
			box-shadow: 0px 2px 5px white, 2px 4px 10px grey, 4px 8px 15px grey;
		}
		#myform label{
			color: white;
			font-size: 1.2rem;
		}
		h3{
			color: white;
			font-size: 2rem;
		}
	</style>
</head>
<body>
	
<?php include "header.php";
if(!isset($_SESSION)) {
session_start();
}
if (isset($_SESSION['SESS_NAME'])!="") {
	header("Location: voter.php");
}
?>

<center>
<legend> <h3> Register </h3></legend> </center>
<?php global $nam; echo $nam; ?> 
<?php global $error; echo $error; ?>
<center><font size="4" >
<form action= "reg_action.php" method= "post" id="myform" >
<label for="">Firstname:</label>
<input type="text" name="firstname" value="" />
<br>
<br>
<label for="">Lastname: </label>
<input type="text" name="lastname" value="" />
<br>
<br>
<label for="">Username:</label> 
<input type="text" name="username" value="" />
<br>
<br>
<label for="">Password: </label>
<input type="password" name="password" value="" />
<br>
<br>
<div class="g-recaptcha" data-sitekey="6LeD3hEUAAAAAKne6ua3iVmspK3AdilgB6dcjST0"></div> 
<br>
<br>
<input type="submit" name="submit" value="Next" />
</form>
</font>
</center>
<script type= "text/javascript" >
 var frmvalidator = new Validator("myform"); 
 frmvalidator.addValidation("firstname","req","Please enter student firstname"); 
 frmvalidator.addValidation("firstname","maxlen=50");
 frmvalidator.addValidation("lastname","req","Please enter student lastname"); 
 frmvalidator.addValidation("lastname","maxlen=50");
 frmvalidator.addValidation("username","req","Please enter student username"); 
 frmvalidator.addValidation("username","maxlen=50");
 frmvalidator.addValidation("password","req","Please enter student password"); 
 frmvalidator.addValidation("password","minlen=6","Password must not be less than 6 characters.");

</script>
<?php include "footer.php" ;?>

</body>
</html>