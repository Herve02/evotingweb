
<style>
form{
    /* background: red; */
    padding: 10px 20px;
}
form table{
    border: 3px solid black;
    margin-bottom: 10px;
    font-size: 1.4rem;
}
form table tr{
    border: 3px solid black;
    height: 30px;
    background: green;
}
/* form table tr td{
    height:;
} */
form table tr td input{
     width: 100%;
     height: 30px;
}
#register{
    font-size: 1.4em;
    padding: 8px 15px;
    border-radius: 15px;
    background: orange;  
}
#register:hover{
     background: tomato;    

}
#textarea{
    width: 100%; 
    height: 100px; 
    resize: none; 
    font-size: 1em;
    background: lightgrey;
}
</style>

<br>
<br>
<center>
<legend> <h3> Register candidate</h3></legend> </center>
<?php global $nam; echo $nam; ?> 
<?php global $error; echo $error; ?>
<center><font size="4" >
<form action= "reg_validationAdmin.php" method= "post" id="myform" >
    <table style="width: 100%">
        <tr>
            <td><lable>CandidateID:</lable></td>
            <td><lable><input type="text" name="id" value="" /></lable></td>
        </tr>
        <tr>
            <td><label for="">Fullname: </label></td>
            <td><input type="text" name="fullname" value="" /></td>
        </tr>
        <tr>
            <td><label for="">position: </label></td>
            <td><input type="text" name="position" value="" /></td>
        </tr>
        <tr>
            <td><label for="">About: </label></td>
            <td><textarea type="text" oninput="limitwords()" name="info" value="" id="textarea"cols="4" rows="5" place-holder="insert candidate info"></textarea></td>
        </tr>
        <tr>
            <td><label for="">upload picture</label></td>
            <td><input type="file"></td>
        </tr>
    </table>


<!-- <br>
<br>


<br>
<br>



<br>
<br> -->
<!-- <input type="file" name="photo" value=""> -->
<!-- <div class="g-recaptcha" data-sitekey="6LeD3hEUAAAAAKne6ua3iVmspK3AdilgB6dcjST0"></div>  -->

<input type="submit" name="submit" value="register" id="register" />
</form>
</font>
</center>
<script type= "text/javascript" >
 var frmvalidator = new Validator("myform"); 
 frmvalidator.addValidation("id","req","Please enter student firstname"); 
 frmvalidator.addValidation("fullname","maxlen=50");
 frmvalidator.addValidation("position","req","Please enter student lastname"); 
 frmvalidator.addValidation("position","maxlen=50");

 function limitwords(){
    const textarea = document.getElementById('info');
    const words = textarea.value.split('');
 
if(words.length > 50){
    // remove the extra words
    textarea.value = words.slice(0,50).join('');
    // show an error message
    alert('you can only enter up to 50 words.');
}
}
</script>

