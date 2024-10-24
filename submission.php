<?php

session_start();

$_SESSION['url'] = $_SERVER['REQUEST_URI'];
require_once("config.php");
if (!isset($_SESSION['un'])) {
  header("Location:login.php");
}
if (isset($_SESSION['un'])) {
  $username = $_SESSION['un'];
}




?>


<!DOCTYPE html>
<html>

<head>


  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>All Submission</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="js/vendor/modernizr-2.8.3.min.js"></script>

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
          <h3 style="text-align:center;">All Submission</h3>
        </div>
      </div>

      <div class="col-sm-1">

      </div>

      <div class="col-sm-1">

      </div>

    </div>




    <div class="row cspace">
      <div class="col-sm-9">
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Problem Name</th>
                <th>Verdict</th>
              </tr>
            </thead>
            <tbody>
              <?php


              error_reporting(0);
              if (isset($_POST['result'])) {
                $uo = $_POST['result'];
                $ao = $_POST['ac'];
                $pname = $_POST['pb'];
              }

              $ch = 1;

              if (!isset($uo)) {
                $ch = 0;
                error_reporting(0);
                $show = "SELECT * FROM submission ORDER BY sid DESC";
                $sts = mysqli_query($con, $show);



                while ($row = mysqli_fetch_array($sts)) {

                  echo "<tr><td><a href=\"showcode.php?id=$row[sid]&nm=$row[sname]\">$row[sid]</a></td><td><a href=\"profile.php?user=$row[sname]\">$row[sname]</a></td><td><a href=\"description.php?name=$row[pbname]\">$row[pbname]</a></td><td>$row[verdict]</td></tr>";
                }
              }


              if (isset($uo)) {

                //var_dump($uo);

                $l = strlen($uo) - 2;


                $m = strlen($ao);



                //var_dump($ao);




                if (strcmp($uo, $ao) == 0) {
                  //echo "Accepted";
                  $result = "Accepted";
                } else {
                  //echo "Wrong Answer";
                  $result = "Wrong Answer";
                }



                $sql = "INSERT INTO submission VALUES('','$username','$result','$pname') ";
                $show = "SELECT * FROM submission ORDER BY sid DESC";

                $stq = mysqli_query($con, $sql);
                $sts = mysqli_query($con, $show);



                while ($row = mysqli_fetch_array($sts)) {


                  echo "<tr><td><a href=\"showcode.php?id=$row[sid]&nm=$row[sname]\">$row[sid]</a></td><td><a href=\"profile.php?user=$row[sname]\">$row[sname]</a></td><td><a href=\"description.php?name=$row[pbname]\">$row[pbname]</a></td><td>$row[verdict]</td></tr>";
                }
              }
              ?>

            </tbody>
          </table>
        </div>


      </div>

      <div class="col-sm-3">

      </div>
    </div>
  </div>
  </div><br><br><br>

  <footer class="foot text-center">
    <div class="container">
      <p><b>&copy; 2024 UIU CELESTA OJ. All rights reserved.</b></p>
      <div id="tx"></div> <!-- Server time will be displayed here -->
    </div>
  </footer>
  <?php include('time.php'); ?>



</body>

</html>