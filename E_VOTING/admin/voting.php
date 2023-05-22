<form style="background-color: grey"method="post" action="submit_vote.php">
    <?php 
    //connect to database
    $DB_HOST= "localhost";
    $DB_USER="root";
    $DB_PASSWORD="";
    $DB_NAME="db_evoting";

    $conn= mysqli_connect("localhost","username","password","database_name");
    $query= "SELECT * FROM candidates";
    $results= mysqli_query($conn,$query);

    // loop through each candidates and create a radio button for each
    while($row = mysqli_fetch_assoc($results)) {
        $id = $row['id'];
        $name = $row['name'];

        echo "<input type='radio' name='candidate' value='$id'>$name";
    }
?>
<input type="submit" name="submit" value="submit vote">
</form>

<?php
// submitting vote
$conn= mysqli_connect("localhost","username","password","database_name");

// get the selected candidate id
$candidate_id= $_POST['candidate'];
// increment the candidates vote
$query = "UPDATE candidates SET votes = votes + 1 WHERE id =$ candidate_id";

// redirect the voter back to voting page
header("location: adminDashboard.php")
?>


