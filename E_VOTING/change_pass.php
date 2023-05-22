<?php
if(!isset($_SESSION)) { 
session_start();
}
include "auth.php";
include "header_voter.php"; 
?>
<br>
<br>
<center><h3>Change Password</h3></center>
<h4 style="color:#e60808;"><?php global $nam; echo $nam;?> </h4> 
<?php global $error; echo $error;?>                  

<center><form action="change_pass_action.php" method="post" id="myform">
    <table>

    <tr>
        <td><label for="">Current Password :</label></td>
        <td><input type="password" name="cpassword" value="" ></td>
    </tr>
    <tr>
        <td><label for="">new Password :</label></td>
        <td><input type="password" name="npassword" value="" ></td>
    </tr>
    <tr>
        <td><label for="">Confirm New Password:</label></td>
        <td><input type="password" name="cnpassword" value="" ></td>
    </tr>
    <tr>
        <td rowspan="2"><center><label for=""><input type="submit" name="cpass" value="UPDATE" ></label></center></td>
        <td></td>
    </tr>

<br>


</table>
</form></center>
<script type="text/javascript">
var frmvalidator = new Validator("myform"); 
frmvalidator.addValidation("cpassword","req","Please enter Current Password"); 
frmvalidator.addValidation("cpassword","maxlen=50");
frmvalidator.addValidation("npassword","req","Please enter New Password"); 
frmvalidator.addValidation("npassword","maxlen=50");
frmvalidator.addValidation("cnpassword","req","Please enter Confirm New Password"); 
frmvalidator.addValidation("cnpassword","maxlen=50");
</script>
<br>
<br>
<?php include "footer.php";?>
