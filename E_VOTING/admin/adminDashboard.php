<?php
if(!isset($_SESSION)) { 
session_start();
}
include "auth.php";
// include "adminDashboard.php"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminDashboard</title>
    <style>
     *{
        box-sizing: border-box;
        padding: 0;
        margin: 0;
     }
     body{
        width: 100%;
        padding: 5%;
        background: lightgrey;
     }
      h3{
        font-size: 2rem;
      }
     a{
      background: orange;
      text-decoration: none;
      transition: .4s;
      padding:10px 20px;
      font-size: 1.7rem;      
      border-radius: 25px;
      color: black;
      font-weight: bold;
      float: right;
     }
     a:hover{
      background: black;
      color: white;

     }
     .hp{
        font-size: 1.5rem;
     }
     .descrcontent{
        width: 100%;
        height: auto;
        margin: 30px 0;
       

     }
     .descrcontent h4{
        font-size: 4rem;
        text-align: center;
        color: blue;
        margin-bottom: 20px;
     }
     .descrcontent h3{
         font-size: 1.5rem;
     }
     .descrcontent ul{
        width: 100%;
        font-size: 1.3em;
        padding-left: 20px;
     }
     .container{
        display: flex;
        
        width: 100%;
        padding: 5px;
        box-shadow: 0px 0px 5px grey;

     }
     .managediv{
        background: green; 
        display: flex;
        justify-content: space-around;
        align-items: center;
        width: 60%;
        padding: 0 5%
    }
    .candds{
         background: blue;
         width: 40%;
    }
    .candds h2{
        font-size: 2rem;
        color: white;
        margin: 10px 0;
    }
    .removecandidate{
      margin-top: -20px;
    }


    #rform table{
    width: 100%;
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
#reg{
    font-size: 1.4em;
    padding: 8px 15px;
    border-radius: 15px;
    background: orange;  
}
#reg:hover{
     background: red;    

}
.note{
    font-size:1.3em;
    font-style: italic;
    color: red;
}

    @media only screen and (min-width: 480px) and (max-width: 980px)
    {

        .container{
        display: block;
       } 
       .candds{
         background: blue;
         width: 100%;
         margin: 20px 0
    }
       .managediv{
        display: block;
        width: 100%;
        padding: 10px;

       }
       .removecandidate{
        margin: 20px 0;
        
       }
       .descrcontent h4{
        font-size: 2rem;
        text-align: center;
        color: blue;
        margin-bottom: 20px;
        
     }
    }
    </style>
</head>
<body>

    
<a href="../index.php">logout</a>
   

<div class="descrcontent">
<h4> Welcome <?php echo $_SESSION['SESS_NAME']; ?> </h4>
<p class="hp">Hello <b> <?php echo $_SESSION['SESS_NAME']; ?></b>!! As you are now an  admin for this voting system
 you should know that this is a one time system where after every vote
 session you will have to clear the tables for new postion to be voted for.</p>

<br><br> <h3>here are your tasks as an admin</h3>
<ul>
    <li>Registering a candidate</li>
    <li>Deleting a candidate</li>
    <li>Clearing all tables</li>

    
</ul>
<p class="note">i.e to clear tables you will have to wait until voting period is over.
    deleting votes datas before check up will lead to further punishiments.
</p>
</div>
<div class="container">
<div class="candds"><center><h2>candidates info</h2></center>
<?php
include "lan_view.php";
?>
</div>

<div class="managediv">

<div class="register">
<?php
include "registercandidate.php" ;
?>
</div>
<div class="removecandidate">
     <h3>Delete Candidate</h3>
    <form action="removecandidate.php" method="post" id="rform">
        <table>
            <tr>
                <td> CandidateID:</td>
                <td><input type="text" name="id" value="" /></td>
            </tr>
        </table>
        
        
        <br>
        <center><input style="margin-top: 20px; font-size: 1.2rem" type="submit" name="submit" value="remove" id="register"  /></center>
        <center><input style="margin-top: 20px; font-size: 1.2rem" type="submit" name="clear" value="clear tables" id="reg" class=" reg"/></center>
        
    </form>
</div>
</div>
</div>
<br>
<br>
<div class="votersstatus">
<div class="users">
<?php
include "viewusers.php";
?>
</div>
<!-- <div class="removecandidate">
      <h3>clean voters status table</h3>
    <form action="deletingusers.php" method="post" id="rform">

        <center><input style="margin-top: 20px; font-size: 1.2rem" type="submit" name="submit" value="clear table" /></center>
        
    </form>
</div> -->
</div>
</body>
</html>


