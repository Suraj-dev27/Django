<?php
$servername="localhost";
$username="root";
$password="123";
$dbname = "event";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO contact(name,email,message)
VALUES ('".$_POST["name"]."', '".$_POST["email"]."', '".$_POST["message"]."')";

if ($conn->query($sql) === TRUE) {
    echo "New message arrived";
header("Location: http://localhost/Event/index.html");

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

