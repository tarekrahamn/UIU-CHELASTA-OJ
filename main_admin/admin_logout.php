<?php
session_start();
session_unset();  // Clear all session variables
session_destroy();  // Destroy the session

// Ensure no output has been sent before this line
header('Location: admin_login.php');
exit();
?>
