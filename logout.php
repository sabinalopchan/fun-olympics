<?php  
session_start();
include "connection.php";

if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];

    // Log the logout action
    $action = "Logout";
    $log_query = "INSERT INTO audit_logs (username, action) VALUES ('$username', '$action')";
    mysqli_query($conn, $log_query);
}session_destroy();
header("location:index.php");
exit(); // Ensure that no further code is executed after the redirect
?>
