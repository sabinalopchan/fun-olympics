<?php
function logAction($username, $action, $details) {
    include "../connection.php"; 
    $stmt = $conn->prepare("INSERT INTO audit_logs (user_id, action, details) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $action, $details);
    $stmt->execute();
}
?>
