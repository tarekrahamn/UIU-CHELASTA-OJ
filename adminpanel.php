<?php

session_start();
require_once("config.php");

$_SESSION['url'] = $_SERVER['REQUEST_URI'];

if (!isset($_SESSION["un"])) {
  header("Location:login.php");
}

if (isset($_SESSION['un'])) {
  $username = $_SESSION['un'];
}

$mysql = "SELECT  status from user WHERE name='$username'";
$snd = mysqli_query($con, $mysql);
$arrow = mysqli_fetch_array($snd);

$st = $arrow['status'];

$access = 0;

if ($st == "Teacher" || $st == "Problem Setter" || $st == "Developer") {
  $access = 1;
} else {
  header("Location:home.php");
}

if (isset($_GET['user'])) {
  $data = $_GET['user'];
}

?>


<!DOCTYPE html>
<html>

<head>


  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Profile</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" type="image/png" href="img/UIU.png">
  <script src="js/vendor/modernizr-2.8.3.min.js"></script>
  <script src="js/vendor/jquery-1.12.0.min.js"></script>
  <script src="bootstrap-3.3.7/js/bootstrap.min.js" </script>
    < script src = "bootstrap-3.3.7/js/bootstrap.js"
  </script>

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

    .main {
      background-image: url('img/background.jpg');
      background-size: cover;
      background-position: center;
      padding: 60px 0;
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
      background-color: black;
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
              <li class="space"><a href="User_see.php"><i class="fas fa-address-book"></i>Blog</a></li>
              <li class="space"><a href="standing.php"><i class="fa fa-check-square ispace"></i>Standing</a></li>
              <li class="dropdown">
                <style>
                  .navbar {
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


    <div class="row log">
      <div class="col-sm-10">
        <div class="">
          <h3 style="text-align:center;"><?php echo " Update Admin Panel"; ?></h3>
        </div>
      </div>

      <div class="col-sm-1">

      </div>

      <div class="col-sm-1">

      </div>

    </div>

    <div class="row cspace">
      <div class="col-sm-8">
        <?php

        if (isset($_POST['name']) || isset($_POST['email']) || isset($_POST['status'])) {
          $name = $_POST['name'];
          $email = $_POST['email'];
          $status = $_POST['status'];

          $sql = "UPDATE user SET  status='$status' WHERE name='$name'";
          $send = mysqli_query($con, $sql);


          if ($send) {
            echo "<div style=\"margin-left:250px;\" class=\"alert alert-success\">
  <strong>Admin Panel Has Been Updated! Go To Your <a href=\"profile.php?user=$name\">Profile</a></strong>
   </div><br><br><br><br>";
          } else {
            echo "<div style=\"margin-left:250px;\" class=\"alert alert-danger\">
    <strong>Operation Failed. Please Try Again By Giving Correct Username And Email</strong>
   </div><br><br><br><br>";
          }
        }





        ?>







      </div>


      <div class="col-sm-4">

      </div>
    </div>
  </div><br><br><br><br>

  <footer class="foot text-center">
    <div class="container">
      <p><b>&copy; 2024 UIU CELESTA OJ. All rights reserved.</b></p>
      <div id="tx"></div> <!-- Server time will be displayed here -->
    </div>
  </footer>

  <?php include('time.php'); ?>



</body>

</html>