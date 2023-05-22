<style>
	#candidates{
		border: 2px solid black;
		width: 100%;
	}
	#candidates tr{
		border: 2px solid black;
		height: 50px;
	}
	
	#candidates tr td{
		height: auto;
	}
	#candtable{
		border: 2px solid black;
	}

</style>

<?php
if(!isset($_SESSION)) { 
session_start();
}
include "auth.php";
// include "header_voter.php";
?>
<div class="candtable">
<?php
include "connection.php";
$member = mysqli_query($con, 'SELECT * FROM candidates' );
if (mysqli_num_rows($member)== 0 ) {
	echo '<font color="red">No results found</font>';
}
else {
	echo '<center><table id="candidates"><tr bgcolor="#FF6600">
<td >ID</td>		
<td >LANGAUAGE</td>
<td >POSITION</td>
<td >VOTES</td>
<td style="width: 200px">ABOUT</td>

</tr>';
while($mb=mysqli_fetch_object($member))
		{	
			$id=$mb->lan_id;
			$name=$mb->fullname;
			$position=$mb->position;
			$vote=$mb->votecount;
			$about=$mb->about;
			
			
			echo '<tr bgcolor="#BBBEFF">';
	echo '<td>'.$id.'</td>';		
	echo '<td>'.$name.'</td>';
	echo '<td>'.$position.'</td>';
	echo '<td>'.$vote.'</td>';
	echo '<td>'.$about.'</td>';
	echo "</tr>";
		}
		echo'</table></center>';
	}
	
?></div>