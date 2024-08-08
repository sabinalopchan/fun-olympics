<?php  
session_start();
session_destroy();
header("location:index.php");
exit(); // Ensure that no further code is executed after the redirect
?>
