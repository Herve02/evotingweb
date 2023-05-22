<style>
    span{
        font-size: 1.3rem;
        margin-left: 50px;
        color: green;
    }
</style>


<?php
if(!isset($_SESSION)) { 
session_start();
}
include "auth.php";
include "header_voter.php";
include "connection.php";
?>
<!-- <h4> Welcome <?php echo $_SESSION['SESS_NAME']; ?> </h4> -->
<?php
$username = $_SESSION['SESS_NAME'];
$query = 'SELECT status FROM voters WHERE username="'.$_SESSION['SESS_NAME'].'"';
if ($result = mysqli_query($con,$query)) {
if (mysqli_num_rows($result) > 0) {
$sql = mysqli_query($con, 'SELECT firstname,lastname,username from voters WHERE username="'.$_SESSION['SESS_NAME'].'"');
$row = mysqli_fetch_assoc($sql);
        echo "<br><br><span>First Name: </span>". " " . $row['firstname'] ;
       
        echo "<br><br><span>Last Name: </span>" . " " . $row['lastname'];
        
        echo "<br><br><span>User Name: </span>" . " " . $row['username'];
        echo"<br><br>";
        
}}
?>

<?php
// if(!isset($_SESSION)) { 
// session_start();
// }

include "connection.php";
?>

<?php
$username = $_SESSION['SESS_NAME'];
$query = 'SELECT status FROM voters WHERE username="'.$_SESSION['SESS_NAME'].'" AND status = "VOTED"';
if ($result = mysqli_query($con,$query)) {
if (mysqli_num_rows($result) > 0) {
$sql = mysqli_query($con, 'SELECT voted from voters WHERE username="'.$_SESSION['SESS_NAME'].'"');
$row = mysqli_fetch_assoc($sql);
        echo "<span>You have voted for:</span> " . " " . $row['voted'];
    } else {
        echo "<span>You have not voted yet. Please submit your vote!</span>";
    }
}
?>

