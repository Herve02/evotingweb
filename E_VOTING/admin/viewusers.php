<style>
	.users{
		display: flex; 
		justify-content: center; 
		gap: 10rem;
		padding: 10px 30px;
		position: relative;
		margin-top: 40px;
		background: lightblue;
	}
	.users h1{
		position: absolute;
		top: -80px;
		font-size: 2em;
	
	}
	h2{
		font-size: 2rem;
	}
	.users .vote_numbers{
		box-shadow: 0 5px 5px black;
		padding: 20px;
		display: flex; 
		flex-direction: column;
		justify-content: center; 
		align-items: center;
		
		
	}
	@media only screen and (min-width: 480px) and (max-width: 900px){
		.users{
		display: flex;
		flex-direction: column;
		justify-content: center; 
		gap: 5rem;
	}
	.tables{
		width:100%;
		font-size: 1.5rem;
		background: red;
		
	}
	}
</style>

<div class="users">
<h1 style="display: block">user of the system information</h1>


<?php
if(!isset($_SESSION)) { 
session_start();
}
include "auth.php";
// include "header_voter.php";
?>

<?php
include "connection.php";
$member = mysqli_query($con, 'SELECT * FROM voters' );
if (mysqli_num_rows($member)== 0 ) {
	echo '<font color="red">No results found</font>';
}
else {
	echo '<center>
    <div>
    <h2>voters status</h2>
    </div>
<table class="tables"><tr bgcolor="#FF6600">
<td fontsize="16">first name</td>		
<td >last name</td>
<td >username</td>
<td >status</td>
</tr>';
while($mb=mysqli_fetch_object($member))
		{	
			$fname=$mb->firstname;
			$lname=$mb->lastname;
			$username=$mb->username;
			$status=$mb->status;
			echo '<tr bgcolor="#BBBEFF">';
	echo '<td>'.$fname.'</td>';		
	echo '<td>'.$lname.'</td>';
	echo '<td>'.$username.'</td>';
	echo '<td>'.$status.'</td>';
	echo "</tr>";
		}
		echo'</table></center>';
	}
?>

<?php
if(!isset($_SESSION)) { 
session_start();
}
include "auth.php";
// include "header_voter.php";
?>

<?php
include "connection.php";
$member = mysqli_query($con, 'SELECT * FROM loginusers' );

if (mysqli_num_rows($member)== 0 ) {
	echo '<font color="red">No results found. there are no registered users yet</font>';
}
else {
	echo '<center>
<div>
<h2>all registered users ids</h2>
</div>
<table class="tables">

<tr bgcolor="#FF6600">

<td >registered users ID</td>		

</tr>';
while($mb=mysqli_fetch_object($member))
		{	
			$vid=$mb->id;

			echo '<tr bgcolor="#BBBEFF">';
	echo '<td>'.$vid.'</td>';		

		}
		echo'</table></center>';
	}
?>

<div class="vote_numbers">

<!-- displaying total votes -->
<?php


// SQL query to count votes
$sql = "SELECT COUNT('votes') AS vote_count FROM voters WHERE status='voted'";

// Execute the query
$result = mysqli_query($con, $sql);

// Check if the query was successful
if ($result) {
  // Fetch the result as an associative array
  $row = mysqli_fetch_assoc($result);

  // Get the vote count
  $voteCount = $row['vote_count'];

  // Display the vote count on the user interface
  echo "<h2>Total Votes: <big>$voteCount</big> </h2>" ;
} else {
  // If the query failed, display an error message
  echo "Error: " . mysqli_error($con);
}

// Close the database connection
// mysqli_close($con);
?>

<!-- displaying total number of users who didnot vote -->
<br>
<?php


// SQL query to count votes
$sql = "SELECT COUNT('votes') AS not_Voted FROM voters WHERE status='NOTVOTED'";

// Execute the query
$result = mysqli_query($con, $sql);

// Check if the query was successful
if ($result) {
  // Fetch the result as an associative array
  $row = mysqli_fetch_assoc($result);

  // Get the vote count
  $voteCount = $row['not_Voted'];

  // Display the vote count on the user interface
  echo "<h2 class='h2'>Not Voted: <big>$voteCount</big></h2> " ;
} else {
  // If the query failed, display an error message
  echo "Error: " . mysqli_error($con);
}

// Close the database connection
mysqli_close($con);
?>

</div>
</div>
