<?php
session_start();
require_once("config.php");

$user = mysqli_real_escape_string($con, $_POST['uname']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$pass = mysqli_real_escape_string($con, $_POST['password']);
$password = md5($pass);

// Check if the username already exists
$query = "SELECT * FROM user WHERE name = ?";
$stmt = $con->prepare($query);
$stmt->bind_param('s', $user);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    header("Location: sign.php?value=fail");
    exit();
}

// Check if the email domain is valid
$allowed_domains = ['@bscse.uiu.ac.bd', '@cse.uiu.ac.bd', '@admin.uiuoj.com'];
$valid_domain = false;
foreach ($allowed_domains as $domain) {
    if (substr($email, -strlen($domain)) === $domain) {
        $valid_domain = true;
        break;
    }
}

if (!$valid_domain) {
    header("Location: sign.php?value=invalid_domain");
    exit();
}

// If username does not exist and email domain is valid, insert the new user
$query = "INSERT INTO user (name, pass, status, email) VALUES (?, ?, 'user', ?)";
$stmt = $con->prepare($query);
$stmt->bind_param('sss', $user, $password, $email);
if ($stmt->execute()) {
    header("Location: login.php");
} else {
    header("Location: sign.php?value=fail");
    //echo("Failed to insert user.<br>");
}


?>
