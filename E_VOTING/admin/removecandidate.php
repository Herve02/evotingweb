<?php include "connection.php";
if(isset($_POST['submit'])){
    $id= mysqli_real_escape_string($con, $_POST['id']);
    $Querry="DELETE FROM `languages` WHERE `lan_id` = '$id'";
    $sql = mysqli_query($con,$Querry);
    if ($sql) { 
        header("location: adminDashboard.php");  
echo "<script>alert('candidate removed Successfully!')</script>";

}
}
?>
<?php include "connection.php";
if(isset($_POST['clear'])){
    // $id= mysqli_real_escape_string($con, $_POST['id']);
    // $Querry="DELETE * FROM `voters` WHERE `firstname` = '$id'";
    $Query="DELETE FROM `voters`";
    $Querry="DELETE FROM `candidates`";
    $Query1="DELETE FROM `loginusers`";
    $sql = mysqli_query($con,$Query);
    $sql1=  mysqli_query($con,$Querry);
    $sql2 = mysqli_query($con,$Query1);
    if ($sql & $sql1 & $sql2) { 
        echo "<script>alert('candidate removed Successfully!')</script>";
        header("location: adminDashboard.php");  


}
    
//     if ($sql) { 
//         header("location: adminDashboard.php");  
// echo "<script>alert('candidate removed Successfully!')</script>";

// }
}
?>