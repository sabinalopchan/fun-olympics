<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "olympics";
$port = 3307; // Specify the port number

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db_name, $port);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";

// Close the connection
// mysqli_close($conn);
?>
