
<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: index.php');
    exit();
}

include "../connection.php";
include "audit.php"; // Include the file where logAction function is defined

if (isset($_GET['id'])) {
    $a = intval($_GET['id']);

    // Retrieve user details for logging purposes
    $stmt = $conn->prepare("SELECT * FROM users WHERE id=?");
    $stmt->bind_param("i", $a);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    $query = "DELETE FROM users WHERE id='$a'";
    $run = mysqli_query($conn, $query);

    if ($run) {
        // Log the action
        $loggedInUser = $_SESSION['username']; // Get the logged-in user's username
        logAction($loggedInUser, 'Delete User', "Deleted user with ID $a. Username was {$user['username']}.");

        header("Location: users.php");
        exit();
    } else {
        echo "Delete not successful!";
    }
} else {
    echo "Invalid request.";
}
?>
