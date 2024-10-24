<?php
error_reporting(E_ALL);
session_start();
require_once("config.php");

// Sanitize user inputs to prevent SQL injection
$uname = mysqli_real_escape_string($con, $_POST['un']);
$pw = mysqli_real_escape_string($con, $_POST['ps']);
$url = mysqli_real_escape_string($con, $_POST['uri']);
$pw = md5($pw);

// Query to check user credentials and status
$lq = "SELECT * FROM `user` WHERE name='$uname' AND pass='$pw'";
$sq = mysqli_query($con, $lq);

if ($sq) {
    $row = mysqli_fetch_array($sq);

    if (!empty($row) && $uname == $row['name'] && $row['pass'] == $pw) {
        if ($row['status'] == 'blocked') {
            // User is blocked
            header("Location: login.php?value=blocked");
            exit();
        } else {
            // User is not blocked, proceed with login
            $_SESSION = array();
            $_SESSION['un'] = $row['name'];
            $_SESSION['ps'] = $row['pass'];

            header("Location: $url");
            exit();
        }
    } else {
        // Invalid credentials
        header("Location: login.php?value=fail");
        exit();
    }
} else {
    // Query failed
    header("Location: login.php?value=fail");
    exit();
}
?>
