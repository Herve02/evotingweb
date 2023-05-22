

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            box-sizing: border-box;
        }
        body{
            width: 100%;
            padding: 0 10%;
            background: grey;
              }
        table{
            border-bottom: 4px solid lightblue;
            width: 100%;
            
        }
        table tr td{
            padding-left: 20px;
            font-size: 1.3rem;
            
        }
        button{
            padding: 20px;
            font-size: 1.2rem;
        }
        span{
            color: green;
            font-size: 1.2rem;
        }
    </style>
</head>
<body>
    <div class="container">
<form method="post" action="submit_vote.php">
    <?php 
    // connect to database
    $host= "localhost";
    $USER="root";
    $PASSWORD="";
    $DB_NAME="pollest";

    $conn= mysqli_connect($host,$USER,$PASSWORD, $DB_NAME);
    // include "connection.php"; 
    $query= "SELECT * FROM candidates";
    $result= mysqli_query($conn,$query);

    // loop through each candidates and create a radio button for each
    while($row = mysqli_fetch_assoc($result)) {
        $id = $row['lan_id'];
        $name = $row['fullname'];
        $position = $row['position'];
        // $votes = $row['votecount'];
     echo " <table> 
      <tr>
     <td><p><b>candidate id:</b> $id &nbsp;&nbsp;&nbsp</p></td>
     </tr>
     <tr>
      <td><p><b> name:</b> $name &nbsp;&nbsp;&nbsp</p></td>
      </tr>
      <tr>
     <td><p><b> position: </b>$position &nbsp;&nbsp;&nbsp</p> </td>
     </tr>
     <tr>
     <td><input type='radio' name='lan' id='candidateid' value='$id'><span>vote</span><br></td>
      </tr>
      </table>";
        // echo "<p> votes: $votes</p>";
        // echo "<p> candidate id: $id</p>";

        // echo "";
    }
?>
<center><input style="font-size: 1.3rem;padding: 10px 15px; margin-top: 20px; margin-bottom: 20px" type="submit" name="submit" value="submit vote"></center>
<?php
   global $msg; echo $msg; 
   global $error; echo $error; 
?>
</form> 
</div>
</body>
</html>

