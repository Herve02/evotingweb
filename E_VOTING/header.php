<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Online Voting System</title>
<script src="jscript/validation.js" type="text/javascript"></script>
<link rel="stylesheet" href="./style.css">
<style>
    *{
        box-sizing: border-box;
    }
    body{
        width: 100%;
        height: 100vh;
  
        
    }
    .headernav{
        display: flex;
        justify-content: space-between;
        align-items: center;
    width: 100%;
    height: 70px;
    background: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.9));
    box-shadow: 0px 2px 5px white, 2px 4px 10px grey, 4px 8px 15px grey;
    
   
}
.headernav ul{
    width: 90%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 4rem;

    
}
.headernav ul li{
    list-style: none;
}
.headernav ul li a{
    text-decoration: none;
    font-size: 1.7rem;
    transition: .4s;
    color: orange;
    overflow-X: none;
}
.headernav ul li a:hover{
color: grey;

}
@media only screen and (min-width: 480px) and (max-width: 580px){
    body{
        padding: 10px;
    }
    .headernav{
    width: 100%;
    height: auto;
    box-shadow: 0px 2px 5px white, 2px 4px 10px grey, 4px 8px 15px grey;
    background: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.9));
    }
    .headernav ul{
    width: 100%;
    height: auto;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    gap: 1rem;

    
}
}

</style>
</head>
<body>
<marquee>Welcome To Online Voting System Coded By T.HERVE & K.Alex & U.Prisca</marquee>
<nav class="headernav">
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="register.php">Register</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="admin/login_admin.php">admin</a></li>
    </ul>
  
</nav>
<br>
<br>