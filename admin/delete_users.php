<?php
include '../connection.php';

if(isset($_GET['id'])) {
    $a = $_GET['id'];
    $query = "DELETE FROM users WHERE id='$a'";
    $run = mysqli_query($conn, $query);

    if($run) {
        header("location: users.php");
        exit(); // Make sure to exit to prevent further execution
    }
    else {
        echo "Delete not successful!";
    }
} else {
    echo "Invalid request.";
}
?>

