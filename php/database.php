
<?php


// Create connection
$conn = mysqli_connect("localhost", "S3959772", "AlexDelPiero10","S3959772");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>
