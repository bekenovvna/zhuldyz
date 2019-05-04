<?php
$type = $_POST['type'];
$name = $_POST['name'];
$rec = $_POST['recipe'];
$image_one = $_POST['Image1'];
$image_two = $_POST['Image2'];
$image_three = $_POST['Image3'];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "product";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO `product` (`type`, `name`, `rec`, `image_one`, `image_two`, `image_three`)
VALUES ('$type','$name','$rec','$image_one','$image_two','$image_three')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>