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





?>


<!DOCTYPE html>
<html>

<head>


  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Home</title>
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
    < script src = "bootstrap-3.3.7/js/bootstrap.js"</script>
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
      color:black;
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

</style








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
          <h3 style="text-align:center;">Online Compiler</h3>
        </div>
      </div>

      <div class="col-sm-1">

      </div>

      <div class="col-sm-1">

      </div>

    </div>




    <div class="row cspace">
      <div class="col-sm-8">
        <div class="form-group">
          <form action="compile.php" name="f2" method="POST">
            <label for="language">Choose Language</label>

            <select class="form-control" name="language">
              <option value="c">C</option>
              <!-- <option value="cpp">C++</option> -->
              <option value="cpp11">C++17</option>
              <option value="java">Java</option>



            </select><br><br>

            <label for="ta">Write Your Code</label>
            <textarea class="form-control" name="code" rows="10" cols="50"></textarea><br><br>
            <label for="in">Enter Your Input</label>
            <textarea class="form-control" name="input" rows="10" cols="50"></textarea><br><br>
            <input type="submit" class="btn btn-success" value="Run Code"><br><br><br>


          </form>

          <!--<script>
"use strict";
function submitForm(oFormElement)
{
  var xhr = new XMLHttpRequest();
  var display=document.getElementById('div');
  xhr.onload = function(){ display.innerHTML=xhr.responseText; }
  xhr.open (oFormElement.method, oFormElement.action, true);
  xhr.send (new FormData (oFormElement));
  return false;
}
</script>-->
          <!--<label for="out">Output</label>
<textarea id='div' class="form-control" name="output" rows="10" cols="50"></textarea><br><br>-->




        </div>
      </div>

      <div class="col-sm-4">
        <div style="margin-left:20px" class="pb">Recent And Upcoming Contests</div>

        <?php

        require_once("connection.php");
        date_default_timezone_set("Asia/Dhaka");

        $q3 = "SELECT * FROM rapl_oj_contest ORDER BY date_on DESC LIMIT 0,2";
        $sq3 = mysqli_query($con, $q3);

        $q4 = "SELECT TIME_FORMAT(end_at,'%H') end_at FROM rapl_oj_contest  ORDER BY date_on DESC";
        $q5 = "SELECT TIME_FORMAT(end_at,'%i') end_at FROM rapl_oj_contest  ORDER BY date_on DESC";
        $q6 = "SELECT TIME_FORMAT(end_at,'%s') end_at FROM rapl_oj_contest  ORDER BY date_on DESC";

        $sq4 = mysqli_query($con, $q4);
        $sq5 = mysqli_query($con, $q5);
        $sq6 = mysqli_query($con, $q6);




        while ($row = mysqli_fetch_array($sq3)) {
          $d = date("Y-m-d");
          $t = date("H:i:s");
          $m = $row['start_at'];

          $nr = mysqli_fetch_array($sq4);
          $nm = mysqli_fetch_array($sq5);
          $ns = mysqli_fetch_array($sq6);

          $shr = $nr['end_at'];
          $shm = $nm['end_at'];
          $shs = $ns['end_at'];
          $cur = date('H');
          $curm = date('i');
          $curs = date('s');

          $h = $shr - $cur;
          $mt = $shm - $curm;
          $scnd = $shs - $curs;

          if ($scnd < 0) {
            $scnd = $scnd + 60;
            $mt = $mt - 1;
          }

          if ($mt < 0) {
            $mt = $mt + 60;
            $h = $h - 1;
          }

          if ($h < 0) {
            $h = $h + 24;
          }

          $en = $row['end_at'];

          $seconds = strtotime($t) - strtotime($m);
          $ss = strtotime($en) - strtotime($t);
          $min = intval($seconds / 60);
          $sec = intval($seconds % 60);
          $hr = intval($min / 60);
          $m = intval($min % 60);











          /*echo(" <a href=\"save.php?name=$row[table_name]\">$row[table_name]</a><br><br>");*/
          if ($row['date_on'] == $d && $seconds >= 0 && $ss >= 0) {
            echo ("<div class=\"xmm\">Contest Name: <a href=\"contestproblem.php?name=$row[cname]\">$row[cname]</a><br><br>Contest Date: $row[date_on] <br><br>Start Time: $row[start_at]<br><br>End Time: $row[end_at] <br><br> Status: <b>Running</b> <br><br>Time Remaining:  $h hour $mt miniute $scnd second <br><br></div>");
          } else if ($d > $row['date_on'] || ($d == $row['date_on'] && $t > $en)) {
            echo ("<div class=\"xmm\">Contest Name: <a href=\"contestproblem.php?name=$row[cname]\">$row[cname]</a><br><br>Contest Date:  $row[date_on] <br><br>Start Time: $row[start_at]<br><br>End Time: $row[end_at] <br><br>Status: <b>Finished</b><br><br></div>");
          } else {
            echo ("<div class=\"xmm\">Contest Name: $row[cname]<br><br>Contest Date:  $row[date_on] <br><br>Start Time: $row[start_at]<br><br>End Time: $row[end_at] <br><br>Status: <b>Not Started Yet</b><br><br></div>");
          }
        }




        ?>

      </div>
    </div>
  </div>
  <br><br><br>
  <div class="area">
    <div class="well foot">
      <div class="row area">
        <div class="col-sm-3">
          <!-- BEGIN: Powered by Supercounters.com -->
          <center>
            <script type="text/javascript" src="http://widget.supercounters.com/online_i.js"></script>
            <script type="text/javascript">
              sc_online_i(1360839, "ffffff", "e61c1c");
            </script><br><noscript><a href="http://www.supercounters.com/">Free Online Counter</a></noscript>
          </center>
          <!-- END: Powered by Supercounters.com -->

        </div>
        <footer class="foot text-center">
    <div class="container">
      <p><b>&copy; 2024 UIU CELESTA OJ. All rights reserved.</b></p>
      <div id="tx"></div> <!-- Server time will be displayed here -->
    </div>
  </footer>

  <?php include('time.php'); ?>
        
      </div>
    </div>
  </div>
</body>

</html>