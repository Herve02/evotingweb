
<?php global $msg; echo $msg;?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-voting-home</title>
    <style>
        body{
        width: 100%;
        height: auto;
        background: linear-gradient(rgba(94, 48, 5, 0.2),rgba(34, 26, 12, 0.8)),url("./imgs/pexels-mikhail-nilov-8846008.jpg");
        background-position: top;
        background-size: cover;
        background-attachment: fixed;

    }

    .container{
        width: 100%;
        min-height: 100vh;
        /* background: linear-gradient(rgba(94, 48, 5, 0.2),rgba(34, 26, 12, 0.8)),url("./imgs/pexels-mikhail-nilov-8846008.jpg");
        background-position: top;
        background-size: cover; */
        padding-top: 4%;
        padding: 0px 30px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    .content{
        width: 100%;
        min-height: auto;
        background: rgb(0,0,0,0.7);
    }
    .content p{
        color: green;
        font-size: 2.8em;
        padding: 0px 15px;
        text-align: start;

    }

    .candsabout{
        display: flex;
    }
    /* responsive */
    @media only screen and (min-width: 480px) and (max-width: 580px){
        .content{
        width: 100%;
        height: auto;
        background: rgb(0,0,0,0.9);
    }
    .content p{
        font-size: 1.5em;
        padding: 0px 5px;
        text-align: start;

    }
    }
</style>
</head>
<body>
<div class="container">
<?php
session_start();
if (isset($_SESSION['SESS_NAME'])!="") {
	header("Location: voter.php");
}
?>
<?php include "header.php";?>
<div class="candidates">


</div>
<div class="content">
<p>This system allows all registered users to vote for their favorite CANDIDATES for available positions.</p>
<p>In order to make a vote you have to register first, after registering you will automaticaly be directed to the login page and then login.</font></center>
</div>

<?php include "footer.php";?>
</div>
</body>
</html>