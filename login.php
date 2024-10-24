<?php
session_start();
require_once 'config.php';
if (isset($_SESSION["un"])) {
  header("Location:home.php");
}

if (isset($_SESSION['url'])) {
  $url = $_SESSION['url'];
} else {
  $url = "home.php";
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Sign Up</title>
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
  <script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="logo_style.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: black;
      margin: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    .container {
      display: flex;
      width: 100%;
      height: 100%;
    }

    .form-container {
      flex: 1;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 20px;
    }

    .image-container {
      flex: 1;
      background-image: url('img/back.png');
      background-size: 70%;
      background-position: right;
      background-repeat: no-repeat;
    }

    .form-group.log {
      background-color: orange;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0px 0px 10px 0px #00000026;
    }

    .xmm {
      max-width: 500px;
      width: 100%;
    }

    .form-control {
      border-radius: 5px;
    }

    .btn-success {
      background-color: #28a745;
      border: none;
      border-radius: 5px;
    }

    .btn-success:hover {
      background-color: #218838;
    }

    .alert {
      margin-top: 20px;
    }

    .fm {
      text-align: center;
    }

    .fm b {
      font-size: 16px;
    }

    .navbar {
      margin-bottom: 0;
      background-color: #333;
      font-size: 13px;
    }

    .navbar-brand,
    .navbar-nav li a {
      color: #fff !important;
    }

    .navbar-brand:hover,
    .navbar-nav li a:hover {
      color: #f8f9fa !important;
    }

    .foot {
      background-color: black;
      color: black;
      text-align: center;
      padding: 5px 0;
      width: 100%;
      position: absolute;
      bottom: 0;
      height: 60px;
    }

    .navbar {
      font-size: 11px;
    }

    .main {
      padding-top: 100px;
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

</head>

<body>
  <nav class="shadow navbar navbar-inverse navbar-fixed-top nbar">
    <div class="navbar-header">
      <a class="navbar-brand lspace" href="home.php">
        <img src="img/logo_grayy.png" alt="UIU CELESTA OJ" class="navbar-logo">UIU CELESTA OJ
      </a>
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse navbar-menubuilder">
      <ul class="nav navbar-nav">
        <li class="space"><a href="compiler.php"><i class="fa fa-code ispace"></i>Compiler</a></li>
        <li class="space"><a href="archive.php"><i class="fa fa-archive ispace"></i>Problemset</a></li>
        <li class="space"><a href="contest.php"><i class="fa fa-cogs ispace"></i>Contests</a></li>
        <li class="space"><a href="#"><i class="fa fa-check-square ispace"></i>Debug</a></li>
        <li class="space"><a href="standing.php"><i class="fa fa-check-square ispace"></i>Rating</a></li>
        <li class="space"><a href="contact_us.php"><i class="fas fa-address-book"></i>Contact</a></li>
        <li class="space"><a href="User_see.php"><i class="fas fa-address-book"></i>Blog</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"> More <i class="fas fa-caret-down"></i></a>
          <ul class="dropdown-menu">
            <li><a href="#">Community Chat</a></li>
            <li><a href="#">Unlimited Topic List</a></li>
            <li><a href="Faq/index.html">Unlimited Topic List</a></li>

          </ul>
        </li>

        <li class="lgspace space"><a href="login.php"><i class="fa fa-sign-in ispace"></i>Login</a></li>
        <li class="space"><a href="sign.php"><i class="fa fa-chevron-circle-up ispace"></i>Sign Up</a></li>
      </ul>
    </div>
  </nav>
  <div class="container">
    <div class="form-container">
      <div class="form-group log xmm">
        <h2><u>Log In</u></h2><br><br>
        <form action="process.php" name="f1" method="POST">
          <label for="username">Username</label>
          <input type="text" name="un" class="form-control" placeholder="Enter Username" required><br>
          <label for="password">Password</label>
          <input type="password" class="form-control" name="ps" placeholder="Enter Password" required><br>
          <input type="hidden" class="form-control" name="uri" value="<?php echo ("$url"); ?>">
          <button type="submit" class="btn btn-success">Sign In</button> <a href="#" style="margin:0 0 0 230px">Forget Password?</a><br><br>
          <div class="button">
            <a href="sign.php" style="margin:0 0 0 120px">Create new account</a>
          </div>
        </form>
        <?php
        if (isset($_GET['value'])) {
          if ($_GET['value'] == 'blocked') {
            echo "<div class=\"alert alert-danger\">
                        <strong>Sign in Failed!</strong> You are banned by UIU Chelesta OJ.
                    </div><br>";
          } elseif ($_GET['value'] == 'fail') {
            echo "<div class=\"alert alert-danger\">
                        <strong>Sign in Failed!</strong> Wrong Username And Password.
                    </div><br>";
          }
        }
        ?>
      </div>
    </div>
    <div class="image-container"></div>
  </div>

  <footer class="foot">
    <div class="container-fluid well">
      <div class="row">
        <div class="col-sm-12">
          <div class="fm">
            <b>UIUOJ-2024</b><br>
          </div>
        </div>
      </div>
    </div>
  </footer>
</body>

</html>