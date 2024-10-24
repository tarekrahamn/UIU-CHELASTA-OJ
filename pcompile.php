<?php
session_start();

require_once("config.php");

if (!isset($_SESSION['un'])) {
    header("Location:login.php");
    exit(); // Ensure script stops execution after redirection
}

$username = $_SESSION['un'];

if (isset($_POST["language"])) {
    $languageID = $_POST["language"];
} else {
    // Handle the case where "language" is not set
    die("Error: No language selected.");
}

error_reporting(E_ALL); // Enable error reporting to catch issues

if (isset($_FILES["file"]) && $_FILES["file"]["name"] != "") {
    include "compilers/make.php"; // Handle file uploads, assuming this script manages compilation
} else {
    switch ($languageID) {
        case "c":
            include("c.php");
            break;
        case "cpp":
            include("cpp.php");
            break;
        case "cpp11":
            include("cpp11.php");
            break;
        case "java":
            include("java.php");
            break;
        case "python2.7":
            include("python27.php");
            break;
        case "python3.2":
            include("python32.php");
            break;
        default:
            // Handle unexpected cases, maybe redirect or show an error message
            die("Error: Unsupported language selected.");
            break;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Back Button</title>
</head>
<body>

<!-- Back Button -->
<button onclick="goBack()">Go Back</button>

<script>
    function goBack() {
        window.history.back(); // Correct function to go to the previous page
    }
</script>

</body>
</html>
