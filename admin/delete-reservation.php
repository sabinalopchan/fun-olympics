<?php
include '../connection.php';

if(isset($_GET['id'])) {
    $a = $_GET['id'];
    $query = "DELETE FROM reservation WHERE id='$a'";
    $run = mysqli_query($conn, $query);

    if($run) {
        header("location: reservation.php");
        exit(); // Make sure to exit to prevent further execution
    }
    else {
        echo "Delete not successful!";
    }
} else {
    echo "Invalid request.";
}
?>

