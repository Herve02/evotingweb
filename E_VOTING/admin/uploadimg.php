
<?php
// Configuration variables
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'pollest';

// Connect to MySQL server
$conn = mysqli_connect($hostname, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if a file has been uploaded
if (isset($_FILES['image'])) {
    $file = $_FILES['image'];

    // Check for errors during file upload
    if ($file['error'] === UPLOAD_ERR_OK) {
        $fileName = $file['name'];
        $tmpPath = $file['tmp_name'];

        // Read the file content
        $imageData = file_get_contents($tmpPath);

        // Prepare the SQL statement
        $sql = "INSERT INTO position1 (name, data) VALUES (?, ?)";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, 'ss', $fileName, $imageData);

        // Execute the SQL statement
        if (mysqli_stmt_execute($stmt)) {
            echo "Image uploaded successfully.";
        } else {
            echo "Error uploading image: " . mysqli_error($conn);
        }

        // Close the statement
        mysqli_stmt_close($stmt);
    } else {
        echo "Error during file upload: " . $file['error'];
    }
}

// Close the database connection
mysqli_close($conn);
?>


<!-- Retrieve and displaying stored image -->

<!-- 
// Database connection settings
$conn = mysqli_connect("localhost","root","","pollest") or die ("error" . mysqli_error($conn));

// Check if the connection was successful
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// Retrieve the image ID from a GET parameter or any other relevant information
$imageId = $_GET['name'];

// Prepare and execute the database query
$stmt = $conn->prepare("SELECT image FROM position1 WHERE name= ?");
$stmt->bind_param("i", $imageId);
$stmt->execute();
$stmt->bind_result($imageData);
$stmt->fetch();

// Set the appropriate headers to display the image
header("Content-type: image/jpg");

// Output the image data
echo $imageData;

// Close the statement and database connection
$stmt->close();
$conn->close();
?>

 -->
