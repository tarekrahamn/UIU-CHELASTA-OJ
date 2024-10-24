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






?>

<!DOCTYPE html>
<html>

<head>


  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Announcement</title>
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
  <script src="bootstrap-3.3.7/js/bootstrap.min.js" </script>
    < script src = "bootstrap-3.3.7/js/bootstrap.js"
  </script>
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



    <div class="row log">
      <div class="col-sm-10">
        <div class="">
          <h3 style="text-align:center;">Announcement</h3>
        </div>
      </div>

      <div class="col-sm-1">

      </div>

      <div class="col-sm-1">

      </div>

    </div>




    <div class="row cspace">
      <div class="col-sm-7">

        <?php

        require_once("connection.php");



        if (isset($_POST['cr'])) {



          $cid = $_POST['ci'];
          $cname = $_POST['cn'];
          $announcement = $_POST['an'];


          $fowner = "SELECT  owner from rapl_oj_contest where cname='$cname'";
          $sendit = mysqli_query($con, $fowner);
          $frow = mysqli_fetch_array($sendit);
          $owner = $frow['owner'];

          if ($username == $owner) {
            $access = 1;
          } else if ($st == "Teacher" || $st == "Developer") {
            $access = 1;
          }


          if ($access == 1) {

            $query = "INSERT INTO announcement(id,cname,des,aid) VALUES('$cid','$cname','$announcement','')";
            $send = mysqli_query($con, $query);

            if ($send) {
              echo "Submitted Successfully. <a href=\"announcement.php\">Check Here</a>";
            }
          } else {
            header("Location:announcement.php?fail=1");
          }
        } else {
          $query = "SELECT * from announcement";
          $send = mysqli_query($con, $query);

          while ($row = mysqli_fetch_array($send)) {
            $aid = $row['aid'];
            echo "<button class=\"btn btn-success\">$aid</button><button class=\"btn btn-primary\">$row[cname]</button> <div class=\"alert alert-info\">$row[des]</div><br>";
          }
        }


        if (isset($_POST['up'])) {



          $aid = $_POST['ann'];
          $cont = $_POST['con'];


          $fowner = "SELECT  owner from rapl_oj_contest where cname='$cont'";
          $sendit = mysqli_query($con, $fowner);
          $frow = mysqli_fetch_array($sendit);
          $owner = $frow['owner'];

          if ($username == $owner) {
            $access = 1;
          } else if ($st == "Teacher" || $st == "Developer") {
            $access = 1;
          }


          if ($access == 1) {
            $query = "DELETE FROM announcement WHERE aid='$aid'";
            $send = mysqli_query($con, $query);

            if ($send) {
              echo "Deleted Successfully. <a href=\"announcement.php\">Check Here</a>";
            }
          } else {
            header("Location:announcement.php?fail=1");
          }
        }



        ?>


      </div>

      <?php

      if ($st == "Teacher" || $st == "Developer" || $st == "Problem Setter") {
      ?>

        <div class="col-sm-5">
          <div class="form-group">
            <legend>Create Announcement</legend>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" name="f2" method="POST">
              <label for="ta">Enter Your Contest ID</label>
              <input type="text" name="ci" class="form-control" required><br><br>
              <label for="ta">Enter Your Contest Name</label>
              <input type="text" name="cn" class="form-control" required><br><br>
              <label for="in">Enter Announcement Description</label>
              <textarea name="an" class="form-control" rows="10" cols="60" required></textarea><br><br>
              <input type="submit" name="cr" class="btn btn-success" value="Create Announcement">
              <br><br>

            </form>

            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" name="f3" method="POST">

              <legend>Delete Announcement</legend>
              <label for="ta">Enter Announcement Number</label>
              <input type="text" name="ann" class="form-control"><br><br>
              <label for="ta">Enter Contest Name</label>
              <input type="text" name="con" class="form-control" required><br><br>
              <input type="submit" name="up" class="btn btn-danger" value="Delete">




            </form>


          </div>

        </div>

      <?php
      }

      if (isset($_GET['fail'])) {
        echo "<script>alert(\"You Are Not Owner Of This Contest. Only Owner Can Control Announcement\");</script>";
      }
      ?>


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