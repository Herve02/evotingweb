<?php
if(!isset($_SESSION)) { 
session_start();
}
include "auth.php";
include "header_voter.php"; 
?>
<h2 style="font-size: 2rem;"> Welcome <?php echo $_SESSION['SESS_NAME']; ?> </h2>
<p style="font-size: 1.3rem;">This is a one time voting system where after anouncing the winner,
    your legistration data will be deleted so you will have to register again for the next votes.
    Thank you!!!
</p>
<h3>Vote for your favorite candidate </h3><center>
<?php
include "voting.php";

?>


