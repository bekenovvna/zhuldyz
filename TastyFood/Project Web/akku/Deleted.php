<?php
$type = $_POST['type'];
$name = $_POST['name'];


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
$sql = "DELETE FROM `product` WHERE `product`.`names` = '$name'";


if ($conn->query($sql) === TRUE) {
    echo "New record deleted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>