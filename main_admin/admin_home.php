<?php
session_start();
require_once("../config.php");

if (!isset($_SESSION["un"])) {
    header("Location: admin_login.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['block_user'])) {
        $username = mysqli_real_escape_string($con, $_POST['name']);
        $query = "UPDATE user SET status='blocked' WHERE name='$username'";
        if (!mysqli_query($con, $query)) {
            echo "Error: " . mysqli_error($con);
        }
    }

    if (isset($_POST['unblock_user'])) {
        $username = mysqli_real_escape_string($con, $_POST['name']);
        $query = "UPDATE user SET status='unblocked' WHERE name='$username'";
        if (!mysqli_query($con, $query)) {
            echo "Error: " . mysqli_error($con);
        }
    }

    if (isset($_POST['change_status'])) {
        $username = mysqli_real_escape_string($con, $_POST['name']);
        $status = mysqli_real_escape_string($con, $_POST['status']);
        $query = "UPDATE user SET status='$status' WHERE name='$username'";
        if (!mysqli_query($con, $query)) {
            echo "Error: " . mysqli_error($con);
        }
    }
}

// Fetch users with total count subquery
$query = "
    SELECT name, status,
        (SELECT COUNT(*) FROM user) AS total_users
    FROM user
";
$result = mysqli_query($con, $query);

// Fetch the first row to get the total user count
if ($result && $row = mysqli_fetch_assoc($result)) {
    $total_users = $row['total_users'];
    // Reset the result pointer to the beginning for displaying user rows
    mysqli_data_seek($result, 0);
} else {
    $total_users = 0;
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../logo_style.css">
    <link rel="stylesheet" href="../degine.css">
    <title>Admin Page</title>
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
    <div class="container">
        <table>
            <div style="display: inline; font-weight: bold; color: blue; font-size: 20px;">Manage User's</div>
            <br>
            <div>
                Total number of users: <?php echo htmlspecialchars($total_users); ?>
            </div>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row['name']); ?></td>
                        <td><?php echo htmlspecialchars($row['status']); ?></td>
                        <td>
                            <form method="post" style="display: inline;">
                                <input type="hidden" name="name" value="<?php echo htmlspecialchars($row['name']); ?>">
                                <button type="submit" name="block_user" class="btn btn-danger">Block</button>
                                <button type="submit" name="unblock_user" class="btn btn-success">Unblock</button>
                            </form>
                            <form method="post" style="display: inline;">
                                <input type="hidden" name="name" value="<?php echo htmlspecialchars($row['name']); ?>">
                                <select name="status" class="status-select">
                                    <option value="Student" <?php if ($row['status'] == 'Student') echo 'selected'; ?>>Student</option>
                                    <option value="Teacher" <?php if ($row['status'] == 'Teacher') echo 'selected'; ?>>Teacher</option>
                                    <option value="Problem Setter" <?php if ($row['status'] == 'Problem Setter') echo 'selected'; ?>>Problem Setter</option>
                                    <option value="blocked" <?php if ($row['status'] == 'blocked') echo 'selected'; ?>>Blocked</option>
                                    <option value="unblocked" <?php if ($row['status'] == 'unblocked') echo 'selected'; ?>>Unblocked</option>
                                </select>
                                <button type="submit" name="change_status" class="btn">Change Status</button>
                            </form>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

</body>

</html>