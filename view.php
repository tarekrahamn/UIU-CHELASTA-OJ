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

if (isset($_GET['user'])) {
  $data = $_GET['user'];
  $us = $_GET['user'];

  //$query="UPDATE world SET value='$data'";
  //$run=mysqli_query($con,$query);

}

$username = $_SESSION['un']; //
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>contact</title>
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
  <script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>
  <script src="bootstrap-3.3.7/js/bootstrap.js"></script>
  <link rel="stylesheet" href="degine.css">
  <link rel="stylesheet" href="logo_style.css">
  <link rel="stylesheet" href="contact_us.css">

  <!-- Fontawesome icon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
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

    </style </head><body><div class="main"><div class="row"><div class="col-sm-12"><nav class="shadow navbar navbar-inverse navbar-fixed-top nbar"><div class="navbar-header"><a class="navbar-brand lspace" href="home.php"><img src="img/logo_grayy.png" alt="UIU CELESTA OJ" class="navbar-logo">UIU CELESTA OJ </a><button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button></div><div class="collapse navbar-collapse navbar-menubuilder"><ul class="nav navbar-nav"><li class="space"><a href="compiler.php"><i class="fa fa-code ispace"></i>Compiler</a></li><li class="space"><a href="archive.php"><i class="fa fa-archive ispace"></i>Problemset</a></li><li class="space"><a href="contest.php"><i class="fa fa-cogs ispace"></i>Contests</a></li><li class="space"><a href="#"><i class="fa fa-check-square ispace"></i>Debug</a></li><li class="space"><a href="standing.php"><i class="fa fa-check-square ispace"></i>Rating</a></li><li class="space"><a href="User_see.php"><i class="fas fa-address-book"></i>Blog</a></li><li class="space"><a href="standing.php"><i class="fa fa-check-square ispace"></i>Standing</a></li><li class="dropdown"><style>.navbar {
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
    <li><a href="Faq/index.html">Help</a></li>

  </ul>
  </li>
  <li class="lgspace space"><a href="profile.php?user=<?php echo ("$username"); ?>"><i class="fa fa-user ispace"></i><?php echo ("$username"); ?></a></li>
  <li class="space"><a href="logout.php"><i class="fa fa-power-off ispace"></i>Logout</a></li>

  </ul>
  </div>
  </nav>
  </div>
  </div>
  </div>
  <header class="p-4 bg-dark text-center">
    <h1><a href="index.php" class="text-light text-decoration-none">Simple Blog</a></h1>
  </header>
  <div class="post-list mt-5">
    <div class="container">
      <?php
      if (isset($_GET['id'])) {
        $id = $_GET['id'];
        include("config.php");
        $sqlSelect = "SELECT * FROM posts WHERE id = $id";
        $result = mysqli_query($con, $sqlSelect);
        if (mysqli_num_rows($result) > 0) {
          while ($data = mysqli_fetch_array($result)) {
      ?>
            <div class="post bg-light p-4 mt-5">
              <h1><?php echo htmlspecialchars($data['title']); ?></h1>
              <p><?php echo htmlspecialchars($data['date']); ?></p>
              <p><?php echo nl2br(htmlspecialchars($data['content'])); ?></p>
            </div>
      <?php
          }
        } else {
          echo "<p>No post found</p>";
        }
      } else {
        echo "<p>No post found</p>";
      }
      ?>
    </div>
  </div>
  </body>

</html>