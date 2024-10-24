<?php
session_start();
include '../config.php';

// Ensure admin is logged in
if (!isset($_SESSION["un"])) {
    header('Location: admin_login.php');
    exit();
}

if (isset($_SESSION['admin'])) {
    $email = $_SESSION['admin'];
}
// Update profile
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update_profile'])) {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $password = password_hash(mysqli_real_escape_string($con, $_POST['password']), PASSWORD_DEFAULT);

    $query = "UPDATE admin SET name=?, password=? WHERE email=?";
    $stmt = $con->prepare($query);
    $stmt->bind_param('sss', $name, $password, $email);
    
    if (!$stmt->execute()) {
        $errorId = uniqid('error_', true);
        echo '<div class="message error" id="' . $errorId . '">Error updating profile: ' . $stmt->error . '</div>';
    } else {
        $successId = uniqid('success_', true);
        echo '<div class="message success" id="' . $successId . '">Profile updated successfully!</div>';
    }
    
    $stmt->close();
}

// Fetch admin details
$query = "SELECT * FROM admin WHERE email=?";
$stmt = $con->prepare($query);
$stmt->bind_param('s', $email);
$stmt->execute();
$result = $stmt->get_result();
$admin = $result->fetch_assoc();
$stmt->close();

// Handle contest request status updates
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update_status'])) {
    $status = mysqli_real_escape_string($con, $_POST['status']);
    $contest_id = mysqli_real_escape_string($con, $_POST['contest_id']);

    $update_query = "UPDATE contest_requests SET status=? WHERE id=?";
    $stmt = $con->prepare($update_query);
    $stmt->bind_param('si', $status, $contest_id);
    
    if (!$stmt->execute()) {
        echo '<div class="message error">Error updating contest request status: ' . $stmt->error . '</div>';    
    } else {
        echo '<div class="message success">Contest request status updated successfully!</div>';
    }
    $stmt->close();
}

// Handle contest request deletions
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['delete_request'])) {
    $contest_id = mysqli_real_escape_string($con, $_POST['contest_id']);

    $delete_query = "DELETE FROM contest_requests WHERE id=?";
    $stmt = $con->prepare($delete_query);
    $stmt->bind_param('i', $contest_id);
    
    if (!$stmt->execute()) {
        echo '<div class="message error">Error deleting contest request: ' . $stmt->error . '</div>';    
    } else {
        echo '<div class="message success">Contest request deleted successfully!</div>';
    }
    $stmt->close();
}

// Fetch all contest requests
$contest_requests_query = "SELECT * FROM contest_requests";
$contest_requests_result = mysqli_query($con, $contest_requests_query);

// Complex query: Count total users and users by status
$complex_query = "
    SELECT
        COUNT(*) AS total_users,
        SUM(CASE WHEN status = 'active' THEN 1 ELSE 0 END) AS active_users,
        SUM(CASE WHEN status = 'inactive' THEN 1 ELSE 0 END) AS inactive_users
    FROM user
";
$complex_result = mysqli_query($con, $complex_query);
$complex_data = mysqli_fetch_assoc($complex_result);



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Profile</title>
    <link rel="stylesheet" href="../logo_style.css">
    <link rel="stylesheet" href="../degine.css">

    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }
        .home-container {
            background-color: #343a40;
            color: white;
            padding: 10px 20px;
        }
        .home-container nav ul {
            list-style: none;
            padding: 0;
        }
        .home-container nav ul a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
        }
        .home-container nav ul a:hover {
            text-decoration: underline;
        }

        .container {
            max-width: 900px;
            margin: 50px auto;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        h2 {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            text-align: left;
        }

        input[type="text"],
        input[type="password"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }

        button {
            background-color: #1877f2;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #165eab;
        }

        .message {
            margin-top: 20px;
            padding: 10px;
            border-radius: 4px;
        }

        .message.success {
            background-color: #d4edda;
            color: #155724;
        }

        .message.error {
            background-color: #f8d7da;
            color: #721c24;
        }

        .contest-requests {
            margin-top: 30px;
        }

        .contest-request {
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 10px;
            margin-bottom: 10px;
        }

        .contest-request form {
            display: inline-block;
        }

        .contest-request select {
            padding: 5px;
            border-radius: 4px;
        }

        .contest-request button {
            padding: 5px 10px;
            margin-left: 10px;
        }
        .profile-details {
    background-color: #ffffff; /* White background for the section */
    border: 1px solid #e0e0e0; /* Light gray border */
    border-radius: 8px; /* Rounded corners */
    padding: 20px; /* Spacing inside the section */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
    max-width: 600px; /* Maximum width of the section */
    margin: 20px auto; /* Center the section horizontally */
}

.profile-details h2 {
    color: #333333; /* Dark text color for the heading */
    font-size: 24px; /* Font size for the heading */
    margin-bottom: 15px; /* Space below the heading */
    text-align: center; /* Center the heading text */
}

.profile-details p {
    font-size: 18px; /* Font size for the paragraph text */
    color: #555555; /* Gray text color for better readability */
    margin: 10px 0; /* Vertical spacing between paragraphs */
}

.profile-details p strong {
    color: #333333; /* Dark color for the labels */
}
.home-container {
            background-color: #343a40;
            color: white;
            padding: 10px 20px;
        }

        .home-container .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar-logo {
            height: 40px;
            vertical-align: middle;
        }

        .navbar-brand {
            display: flex;
            align-items: center;
            text-decoration: none;
            color: white;
            font-size: 1.5em;
        }

        .navbar-nav {
            display: flex;
            list-style: none;
            padding: 0;
        }

        .navbar-nav li {
            margin: 0 10px;
        }

        .navbar-nav a {
            color: white;
            text-decoration: none;
            padding: 10px 15px;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
        }

        .navbar-nav a:hover {
            background-color: #495057;
        }

        .container {
            width: 80%;
            margin: 20px auto;
            padding: 20px;
            background: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #007bff;
            color: white;
        }

        .btn {
            padding: 10px 15px;
            color: white;
            background-color: #007BFF;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-danger {
            background-color: #DC3545;
        }

        .btn-success {
            background-color: #28A745;
        }

        .btn:hover {
            opacity: 0.8;
        }

        .message {
            margin: 20px 0;
            padding: 10px;
            border-radius: 5px;
        }

        .message.success {
            background-color: #d4edda;
            color: #155724;
        }

        .message.error {
            background-color: #f8d7da;
            color: #721c24;
        }

        .status-select {
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #ccc;
            background-color: #f8f9fa;
        }
        .total-users {
            text-align: center;
            margin: 20px 0;
            font-size: 1.5em;
            color: #333;
        }

    </style>
</head>
<body>
<div class="home-container">
        <nav class="navbar">
            <a class="navbar-brand" href="home.php">
                <img src="../img/logo_grayy.png" alt="UIU CELESTA OJ" class="navbar-logo"> UIUOJ Admin
            </a>
            <ul class="navbar-nav">
                <li><a href="admin_home.php">Home</a></li>
                <li><a href="/UIUOJ/oj2/admin/index.php">Blog Manage</a></li>
                <li><a href="admin_profile.php">Contest Request</a></li>
                <li><a href="admin_login.php">Logout</a></li>
            </ul>
        </nav>
    </div>
    
   
   

        <div class="contest-requests">
            <h2>Contest Requests</h2>
            <?php while ($request = mysqli_fetch_assoc($contest_requests_result)) { ?>
                <div class="contest-request">
                    <p><strong>Contest ID:</strong> <?php echo htmlspecialchars($request['id']); ?></p>
                    <p><strong>Username:</strong> <?php echo htmlspecialchars($request['username']); ?></p>
                    <p><strong>Contest Name:</strong> <?php echo htmlspecialchars($request['contest_name']); ?></p>
                    <p><strong>Contest Detail:</strong> <?php echo htmlspecialchars($request['contest_detail']); ?></p>
                    <p><strong>Status:</strong> <?php echo htmlspecialchars($request['status']); ?></p>
                    <form action="admin_profile.php" method="POST">
                        <input type="hidden" name="update_status" value="1">
                        <input type="hidden" name="contest_id" value="<?php echo $request['id']; ?>">
                        <label for="status">Update Status:</label>
                        <input type="text" name="status" value="<?php echo htmlspecialchars($request['status']); ?>" required>
                        <button type="submit">Update Status</button>
                    </form>
                    <form action="admin_profile.php" method="POST" style="display:inline-block;">
                        <input type="hidden" name="delete_request" value="1">
                        <input type="hidden" name="contest_id" value="<?php echo $request['id']; ?>">
                        <button type="submit">Delete Request</button>
                    </form>
                </div>
            <?php } ?>
        </div>
    </div>
    
</body>
</html>