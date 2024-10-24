<?php
session_start();
require_once("config.php");

if (!isset($_SESSION["un"])) {
  header("Location: login.php");
  exit();
}

$username = $_SESSION['un'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $contest_name = mysqli_real_escape_string($con, $_POST['contest_name']);
  $contest_detail = mysqli_real_escape_string($con, $_POST['contest_detail']);
  
  $query = "INSERT INTO contest_requests (username, contest_name, contest_detail) VALUES ('$username', '$contest_name', '$contest_detail')";
  if (mysqli_query($con, $query)) {
    echo "<script>alert('Contest request submitted successfully.');</script>";
  } else {
    echo "<script>alert('Error: " . mysqli_error($con) . "');</script>";
  }
}

// Fetch contest requests
$contest_requests_query = "SELECT * FROM contest_requests WHERE username = '$username'";
$contest_requests_result = mysqli_query($con, $contest_requests_query);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Host a Contest</title>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" type="image/png" href="img/uiu.png">
  <script src="js/vendor/modernizr-2.8.3.min.js"></script>
  <script src="js/vendor/jquery-1.12.0.min.js"></script>
  <script src="bootstrap-3.3.7/js/bootstrap.min.js"> </script>
  <script src="bootstrap-3.3.7/js/bootstrap.js"></script>
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/chart.min.js"></script>
  <link rel="stylesheet" href="degine.css">
  <link rel="stylesheet" href="logo_style.css">

  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f4f4f4;
      margin: 0;
      padding: 0;
    }
    .container {
      max-width: 600px;
      margin: 50px auto;
      background: white;
      padding: 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    h2 {
      text-align: center;
      color: #333;
    }
    label {
      display: block;
      margin: 10px 0 5px;
      color: #666;
    }
    input[type="text"], textarea {
      width: calc(100% - 20px);
      padding: 10px;
      margin: 5px 0 10px;
      border: 1px solid #ddd;
      border-radius: 4px;
    }
    button {
      width: 100%;
      padding: 10px;
      background: #5cb85c;
      border: none;
      color: white;
      border-radius: 4px;
      cursor: pointer;
    }
    button:hover {
      background: #4cae4c;
    }
    .form-group {
      margin-bottom: 15px;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }
    table, th, td {
      border: 1px solid #ddd;
    }
    th, td {
      padding: 10px;
      text-align: left;
    }
    th {
      background: #f4f4f4;
    }
    <style>
    body {
      font-family: 'Arial', sans-serif;
      background-color: #f5f5f5;
    }

    .navbar {
      margin-bottom: 0;
      background-color: #333;
      border-radius: 0;
    }

    .navbar-brand {
      display: flex;
      align-items: center;
      color: #fff !important;
    }

    .navbar-logo {
      width: 30px;
      margin-right: 10px;
    }

    .navbar-inverse .navbar-nav>li>a {
      color: #fff;
    }

    .navbar-inverse .navbar-nav>li>a:hover {
      background-color: #5cb85c;
    }

    .container {
      background-color: rgba(255, 255, 255, 0.9);
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .foot {
      margin-top: 40px;
      background-color: black;
      color: black;
      padding: 20px 0;
    }

    .foot b {
      font-size: 16px;
    }

    .navbar-inverse .navbar-toggle {
      border-color: #5cb85c;
    }

    .navbar-inverse .navbar-toggle:hover {
      background-color: #5cb85c;
    }

    .navbar-inverse .icon-bar {
      background-color: #5cb85c;
    }

    .input-group .glyphicon {
      color: #fff;
    }
  </style>
<style>
    .back-button {
      position: absolute;
      top: 200px;
      left: 20px;
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      border-radius: 5px;
      cursor: pointer;
      border: none;
    }

    .back-button:hover {
      background-color: #45a049;
    }

    .attribution {
      font-size: 11px;
      text-align: center;
    }

    .attribution a {
      color: hsl(228, 45%, 44%);
    }
  </style>
  <script>
    function validateForm() {
      let contestName = document.forms["contestForm"]["contest_name"].value;
      let contestDetail = document.forms["contestForm"]["contest_detail"].value;
      if (contestName == "" || contestDetail == "") {
        alert("All fields must be filled out");
        return false;
      }
      return true;
    }
  </script>
</head>
<body>
<div class="main">
<div class="row">
            <div class="col-sm-12">
                <nav class="shadow navbar navbar-inverse navbar-fixed-top nbar">
                    <div class="navbar-header">
                        <a class="navbar-brand lspace" href="home.php">
                            <img src="img/logo_grayy.png" alt="UIU CELESTA OJ" class="navbar-logo">UIU CELESTA OJ
                        </a>
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse navbar-menubuilder">
                        <ul class="nav navbar-nav">
                            <li class="space"><a href="compiler.php"><i class="fa fa-code ispace"></i>Compiler</a></li>
                            <li class="space"><a href="archive.php"><i class="fa fa-archive ispace"></i>Problemset</a></li>
                            <li class="space"><a href="contest.php"><i class="fa fa-cogs ispace"></i>Contests</a></li>
                            <li class="space"><a href="#"><i class="fa fa-check-square ispace"></i>Debug</a></li>
                            <li class="space"><a href="standing.php"><i class="fa fa-check-square ispace"></i>Rating</a></li>
                            <li class="space"><a href="post/index.php"><i class="fas fa-address-book"></i>Blog</a></li>
                            <li class="space"><a href="standing.php"><i class="fa fa-check-square ispace"></i>ChatBox</a></li>
                            <li class="dropdown">
                                <style>
                                .navbar{
                                  font-size: 11px;
                                }
                                    .dropdown-menu {
                                        background-color: #333;
                                        color: white;
                                        display: none;
                                    }

                                    .navbar-nav li:hover .dropdown-menu {
                                        display: block;
                                    }

                                    .dropdown-menu li a {
                                        color: white;
                                    }

                                    .dropdown-menu li a:hover {
                                        background-color: #444;
                                    }
                                </style>
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> More <i class="fas fa-caret-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Community Chat</a></li>
                                    <li><a href="#">Unlimited Topic List</a></li>
                                    <li><a href="contact_us.php">Contact</a></li>
                                </ul>
                            </li>
                            <li class="lgspace space"><a href="profile.php?user=<?php echo ("$username"); ?>"><i class="fa fa-user ispace"></i><?php echo ("$username"); ?></a></li>
                            <li class="space"><a href="logout.php"><i class="fa fa-power-off ispace"></i>Logout</a></li>

                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div>
    <a href="javascript:history.back()" class="back-button">Back</a>
</div>
    <div class="container">
      <h2>Host a Contest</h2>
      <form name="contestForm" method="post" action="" onsubmit="return validateForm()">
        <div class="form-group">
          <label for="your_name">Name:</label>
          <input type="text" name="name" required>
        </div>
        <div class="form-group">
          <label for="contest_name">Contest Name:</label>
          <input type="text" name="contest_name" required>
        </div>
        <div class="form-group">
          <label for="contest_detail">Contest Detail:</label>
          <textarea name="contest_detail" rows="4" required></textarea>
        </div>
        <button type="submit">Submit Request</button>
      </form>

      <h2>Your Contest Requests</h2>
      <table>
        <tr>
          <th>Contest ID</th>
          <th>Contest Name</th>
          <th>Status</th>
        </tr>
        <?php while ($request = mysqli_fetch_assoc($contest_requests_result)) { ?>
          <tr>
            <td><?php echo htmlspecialchars($request['id']); ?></td>
            <td><?php echo htmlspecialchars($request['contest_name']); ?></td>
            <td><?php echo htmlspecialchars($request['status']); ?></td>
          </tr>
        <?php } ?>
      </table>
    </div>
    <footer class="foot text-center">
    <div class="container">
      <p><b>&copy; 2024 UIU CELESTA OJ. All rights reserved.</b></p>
      <div id="tx"></div> <!-- Server time will be displayed here -->
    </div>
  </footer>
<?php include('time.php'); ?>
</body>

</html>