<?php
session_start();
require_once("config.php");
require_once("time.php"); // Include the time.php file

$_SESSION['url'] = $_SERVER['REQUEST_URI'];

if (!isset($_SESSION["un"])) {
  header("Location:login.php");
}

if (isset($_SESSION['un'])) {
  $username = $_SESSION['un'];
}

$mysql = "SELECT status FROM user WHERE name='$username'";
$snd = mysqli_query($con, $mysql);
$arrow = mysqli_fetch_array($snd);

$st = $arrow['status'];

$access = 0;

if ($st == "Teacher" || $st == "Problem Setter" || $st == "Developer") {
  $access = 1;
} else {
  header("Location:home.php");
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Set Contest</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" type="image/png" href="img/ruet.png">
  <script src="js/vendor/jquery-1.12.0.min.js"></script>
  <script src="js/vendor/modernizr-2.8.3.min.js"></script>
  <script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>
  <script src="bootstrap-3.3.7/js/bootstrap.js"></script>
  <script src="js/vendor/moment.min.js"></script>
  <link href="dcss/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
  <script src="djs/vendor/bootstrap-datetimepicker.js"></script>
  <link rel="stylesheet" href="degine.css">
  <link rel="stylesheet" href="logo_style.css">
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

    .form-group label {
      color: #333;
      font-size: 16px;
    }

    .form-control {
      border-radius: 0;
      box-shadow: none;
      border-color: #ccc;
    }

    .form-control:focus {
      border-color: #5cb85c;
      box-shadow: none;
    }

    .input-group-addon {
      background-color: #5cb85c;
      border-color: #5cb85c;
      color: #fff;
    }

    .btn-success {
      background-color: #28a745;
      border: none;
      font-size: 16px;
      width: 100%;
      margin-top: 20px;
      transition: background-color 0.3s ease;
    }

    .btn-success:hover {
      background-color: #218838;
    }

    .well {
      background: rgba(255, 255, 255, 0.8);
      border: none;
      border-radius: 10px;
      padding: 20px;
    }

    .foot {
      margin-top: 40px;
      background-color: #333;
      color: black;
      padding: 20px 0;
    }

    .foot b {
      font-size: 16px;
    }

    .form-header {
      text-align: center;
      margin-bottom: 30px;
    }

    .form-header h3 {
      font-size: 24px;
      color: #333;
    }

    .input-group .form-control {
      z-index: 0;
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
</head>

<body>
  <div class="main">
    <div class="container">
      <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="home.php">
              <img src="img/logo_grayy.png" alt="UIU CELESTA OJ" class="navbar-logo"> UIU CELESTA OJ
            </a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="nav navbar-nav">
              <li><a href="compiler.php"><i class="fa fa-code"></i> Compiler</a></li>
              <li><a href="archive.php"><i class="fa fa-archive"></i> Problemset</a></li>
              <li><a href="contest.php"><i class="fa fa-cogs"></i> Contests</a></li>
              <li><a href="#"><i class="fa fa-check-square"></i> Debug</a></li>
              <li><a href="standing.php"><i class="fa fa-trophy"></i> Rating</a></li>
              <li><a href="post/index.php"><i class="fa fa-address-book"></i> Blog</a></li>
              <li class="dropdown">
                                <style>
                                .navbar{
                                  font-size: 11px;
                                }
                                    .dropdown-menu {
                                        background-color:white;
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
                                    <li><a href="Faq/index.html">Contact</a></li>

                                </ul>
                            </li>
              <li><a href="profile.php?user=<?php echo $username; ?>"><i class="fa fa-user"></i> <?php echo $username; ?></a></li>
              <li><a href="logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="well">
            <div class="form-header">
              <h3>Create New Contest</h3>
            </div>
            <form action="contest.php" name="f2" method="POST">
              <div class="form-group col-md-5" data-date="2024-07-15T05:25:07Z">
                <label for="ci">Enter Your Contest ID</label>
                <input type="text" name="ci" id="ci" class="form-control" required>
              </div>
              <div class="form-group col-md-5" data-date="2024-07-15T05:25:07Z">
                <label for="cn">Enter Your Contest Name</label>
                <input type="text" name="cn" id="cn" class="form-control" required>
              </div>
              <div class="form-group col-md-5" data-date="2024-07-15T05:25:07Z">
                <label for="cd">Enter Contest Date</label>
                <div class="input-group date form_datetime2" data-date-format="yyyy-mm-dd" data-link-field="dtp_input1">
                  <input type="text" name="cd" id="cd" class="form-control" readonly required>
                  <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                  <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                </div>
              </div>
              <div class="form-group col-md-5" data-date="2024-07-15T05:25:07Z">
                <label for="ct">Enter Contest Start Time</label>
                <div class="input-group date form_datetime" data-date-format="yyyy-mm-dd hh:ii" data-link-field="dtp_input1">
                  <input type="text" name="ct" id="ct" class="form-control" readonly required>
                  <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                  <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                </div>
              </div>
              <div class="form-group col-md-5" data-date="2024-07-15T05:25:07Z">
                <label for="ce">Enter Contest End Time</label>
                <div class="input-group date form_datetime2" data-date-format="yyyy-mm-dd hh:ii" data-link-field="dtp_input1">
                  <input type="text" name="ce" id="ce" class="form-control" readonly required>
                  <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                  <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                </div>
              </div>
              <button type="submit" class="btn btn-success">Create Contest</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer class="foot text-center">
    <div class="container">
      <p><b>&copy; 2024 UIU CELESTA OJ. All rights reserved.</b></p>
      <div id="tx"></div> <!-- Server time will be displayed here -->
    </div>
  </footer>

  <?php include('time.php'); ?>
  <script type="text/javascript" src="djquery/jquery-1.8.3.min.js" charset="UTF-8"></script>
  <script type="text/javascript" src="dboot/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="djs/bootstrap-datetimepicker.js" charset="UTF-8"></script>
  <script type="text/javascript">
    $('.form_datetime').datetimepicker({
      weekStart: 1,
      todayBtn: 1,
      autoclose: 1,
      todayHighlight: 1,
      startView: 2,
      forceParse: 0,
      showMeridian: 1
    });

    $('.form_datetime2').datetimepicker({
      weekStart: 1,
      todayBtn: 1,
      autoclose: 1,
      todayHighlight: 1,
      startView: 2,
      forceParse: 0,
      showMeridian: 1
    });
  </script>
</body>

</html>