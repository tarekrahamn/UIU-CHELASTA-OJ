<?php

session_start();
require_once("config.php");

// Redirect to login if user not logged in
if (!isset($_SESSION["un"])) {
    header("Location: login.php");
    exit; // Ensure no further execution after redirection
}

// Fetch logged-in user's information
$username = $_SESSION['un'];

// Fetch current user data for pre-filling form
$sql_fetch = "SELECT name, email, status FROM user WHERE name='$username'";
$result = mysqli_query($con, $sql_fetch);
if (!$result) {
    // Error handling for database query
    die('Database query failed.');
}
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$email = $row['email'];
$status = $row['status'];

// Handle profile update if form is submitted
if (isset($_POST['submit'])) {
    // Sanitize inputs (always sanitize before using in SQL queries)
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $status = mysqli_real_escape_string($con, $_POST['status']);
    $password = md5($status); // Insecure: Consider using a stronger hashing algorithm like bcrypt

    // Update user's profile in the database
    $sql_update = "UPDATE user SET name='$name', email='$email', pass='$password', status='$status' WHERE name='$username'";
    $send = mysqli_query($con, $sql_update);

    if ($send) {
        // Success message with Bootstrap alert (centered)
        echo '<div class="container mt-4">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success!</strong> Your profile has been updated.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Profile Details</h5>
                        <p class="card-text">Name: ' . htmlspecialchars($name) . '</p>
                        <p class="card-text">Email: ' . htmlspecialchars($email) . '</p>
                        <p class="card-text">Status: ' . htmlspecialchars($status) . '</p>
                        <a href="profile.php?user=' . urlencode($username) . '" class="btn btn-primary">View Profile</a>
                    </div>
                </div>
              </div>';
    } else {
        // Error message with Bootstrap alert (centered)
        echo '<div class="container mt-4">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error!</strong> Failed to update profile. Please try again later.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
              </div>';
    }
}
?>
