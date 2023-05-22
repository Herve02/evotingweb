
<?php  
// include "../header.php";

if(!isset($_SESSION)) {
session_start();
}
if (isset($_SESSION['SESS_NAME'])!="") {
	header("Location: adminDashboard.php");
}
?>
<style>
body{
    display: flex;
    background: lightyellow;
    justify-content: center;
    align-items: center;

}
label{
    font-size: 2em;
}
input{
    width: 400px;
}
#submit{
    width: auto;
    font-size: 1.2rem;
    padding: 0px 15px;
    font-weight: bold;
}
</style>
<br>
<div class="ADlogin">
<center>
<legend> <h3>Login to manage the system </h3></legend> 
<br>
</center>
<?php global $nam; echo $nam; ?>
<?php global $error; echo $error; ?>
<br>
<center><font size="4" >
<form id="f1" action="login_actionAD.php" method="post" id="myform" >
<label>Username :</label>
<input id="user" type="text" name="username" value="" > 
<br>
<br>
<label for="">Password : </label>
<input id="pass" type="password" name="password" value="" >
<br>
<br>
<input type="submit" name="login" onsubmit="return validation()" value="login" id="submit"> &nbsp;&nbsp;&nbsp;<button><a href="../index.php">Return to the user page</a></button>
</form></font>
</center></div>

<!-- <script type="text/javascript" > 
var frmvalidator = new Validator("myform");
frmvalidator.addValidation("username" , "req" , "Please Enter Username");
frmvalidator.addValidation("username", "maxlen=50");
frmvalidator.addValidation("password", "req" , "Please Enter Password");
</script> -->
<script>
function validation()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  

                }  
                
            }  
        </script>