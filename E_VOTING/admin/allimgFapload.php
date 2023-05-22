<?php
$conn = mysqli_connect("localhost", "root", "", "pollest") or die("error" . mysqli_error($conn));

// Check if a file was uploaded successfully
if ($_FILES['images']['error'] === UPLOAD_ERR_OK) {
    // Retrieve the uploaded file information
    $file = $_FILES['images']['tmp_name'];
    $imageData = file_get_contents($file);
    
    // Get the file extension
    $fileExtension = strtolower(pathinfo($_FILES['images']['name'], PATHINFO_EXTENSION));
    
    // Prepare and execute the database query
    $stmt = $conn->prepare("INSERT INTO position1 (name, image) VALUES (?, ?)");
    $stmt->bind_param("ss", $_FILES['images']['name'], $imageData);
    $stmt->execute();

    // Close the statement and database connection
    $stmt->close();
    $conn->close();

    echo "Image uploaded successfully.";
} else {
    echo "Error uploading image.";
}
?>

<?php
$conn = mysqli_connect("localhost", "root", "", "pollest") or die("error" . mysqli_error($conn));

// Retrieve the image ID from a GET parameter or any other relevant information
$imageId = $_GET['name'];

// Prepare and execute the database query
$stmt = $conn->prepare("SELECT image FROM position1 WHERE name = ?");
$stmt->bind_param("s", $imageId);
$stmt->execute();
$stmt->bind_result($imageData);
$stmt->fetch();

// Set the appropriate headers based on the file extension
$fileExtension = strtolower(pathinfo($imageId, PATHINFO_EXTENSION));
switch ($fileExtension) {
    case 'jpg':
    case 'jpeg':
        header("Content-type: image/jpeg");
        break;
    case 'png':
        header("Content-type: image/png");
        break;
    // Add more cases for other image formats if needed
    default:
        header("Content-type: application/octet-stream");
        break;
}

// Output the image data
echo $imageData;

// Close the statement and database connection
$stmt->close();
$conn->close();
?>




