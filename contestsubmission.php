<?php

session_start();
date_default_timezone_set("Asia/Dhaka");

$_SESSION['url'] = $_SERVER['REQUEST_URI'];

require_once("config.php");
if (!isset($_SESSION['un'])) {
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

require_once("connection.php");

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
  <link rel="icon" type="image/png" href="img/uiu.png">
  <script src="js/vendor/modernizr-2.8.3.min.js"></script>
  <script src="js/vendor/jquery-1.12.0.min.js"></script>
  <script src="bootstrap-3.3.7/js/bootstrap.min.js" </script>
    < script src = "bootstrap-3.3.7/js/bootstrap.js"
  </script>
  <link rel="stylesheet" href="degine.css">
  <link rel="stylesheet" href="logo_style.css">



  <style>
    .deactive {
      pointer-events: none;
      color: gray;
    }
  </style>
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

    <div>
    <a href="javascript:history.back()" class="back-button">Back</a>
</div>
    <div class="row log">

      <h3 style="text-align:center;">Contest Submission</h3><br>

      <?php

      if (isset($_GET['id'])) {
        $conid = $_GET['id'];
        $mycon = "SELECT * from rapl_oj_contest WHERE id='$conid'";
        $sendcon = mysqli_query($con, $mycon);
        $rhis = mysqli_fetch_array($sendcon);


        echo "<center><a class=\"btn btn-primary\" href=\"contestproblem.php?name=$rhis[cname]\">$rhis[cname]</a></center>";
      }


      ?>

    </div>


    <?php

    if (isset($_POST['id'])) {


      $ci = $_POST['id'];

      $fowner = "SELECT  owner from rapl_oj_contest where id='$ci'";
      $sendit = mysqli_query($con, $fowner);
      $frow = mysqli_fetch_array($sendit);
      $owner = !empty($frow['owner']) ? $frow['owner'] : "Unknown";

      if ($username == $owner) {
        $access = 1;
      } else if ($st == "Teacher" || $st == "Problem Setter") {
        $access = 1;
      }


      if ($access == 1) {

        $lnk = "contestshowcode.php?";
        $link = "";
      } else {
        $lnk = "notfound.php?";
        $link = "deactive";
      }
    }

    if (isset($_GET['id'])) {


      $ci = $_GET['id'];

      $fowner = "SELECT  owner from rapl_oj_contest where id='$ci'";
      $sendit = mysqli_query($con, $fowner);
      $frow = mysqli_fetch_array($sendit);
      $owner = $frow['owner'];

      if ($username == $owner) {
        $access = 1;
      } else if ($st == "Teacher" || $st == "Problem Setter") {
        $access = 1;
      }


      if ($access == 1) {

        $lnk = "contestshowcode.php";
        $link = "";
      } else {
        $lnk = "notfound.php?";
        $link = "deactive";
      }
    }




    ?>





    <div class="row cspace">
      <div class="col-sm-1">
      </div>
      <div class="col-sm-9">
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Problem Name</th>
                <th>Verdict</th>
                <th>Points</th>
              </tr>
            </thead>
            <tbody>



              <?php


              error_reporting(0);
              if (isset($_POST['id'])) {
                $cid = $_POST['id'];
                $uo = $_POST['result'];
                $pname = $_POST['pb'];
                $nid = $_POST['mid'];
                $conid = $r4['id'];
                $result = $_POST['vd'];
              }

              $ch = 1;

              if (isset($_GET['id']) && !isset($_GET['show'])) {
                $conid = $_GET['id'];
                $ch = 0;
                error_reporting(0);
                $per_page = 30;

                if (isset($_GET['page'])) {
                  $page = $_GET['page'];
                } else {
                  $page = 1;
                }

                $start = ($page - 1) * $per_page;




                $show = "SELECT * FROM submission WHERE cid='$conid' ORDER BY sid DESC limit $start,$per_page";


                $sts = mysqli_query($con, $show);

                $sql = "SELECT sname, SUM(status) As Solved, SUM(point) As Points FROM submission Where cid='$conid' GROUP BY sname ORDER BY Solved DESC , Points DESC";

                $send = mysqli_query($con, $sql);
                $i = 0;
                while ($bow = mysqli_fetch_array($send)) {
                  $i++;

                  if ($bow['sname'] == $username) {
                    echo "<center><a class=\"btn btn-success\" href=\"standings.php?id=$conid\">$username's Rank = $i</a></center><br>";
                    break;
                  }
                }




                while ($row = mysqli_fetch_array($sts)) {

                  if ($row['verdict'] == "Accepted") {
                    echo "<tr><td><a class=\"$link\" href=\"$lnk?id=$row[sid]&nm=$row[sname]&cn=$ci\">$row[sid]</a></td><td><a href=\"profile.php?user=$row[sname]\">$row[sname]</a></td><td><a href=\"details.php?name=$row[pbname]&cod=$conid\">$row[pbname]</a></td><td><div class=\"btn btn-success btn-xs\">$row[verdict]</div></td><td>$row[point]</td></tr>";
                  } else if ($row['verdict'] == "Time Limit Exceed") {
                    echo "<tr><td><a class=\"$link\" href=\"$lnk?id=$row[sid]&nm=$row[sname]&cn=$ci\">$row[sid]</a></td><td><a href=\"profile.php?user=$row[sname]\">$row[sname]</a></td><td><a href=\"details.php?name=$row[pbname]&cod=$conid\">$row[pbname]</a></td><td><div class=\"btn btn-primary btn-xs\">$row[verdict]</div></td><td>$row[point]</td></tr>";
                  } else if ($row['verdict'] == "Accepted") {
                    echo "<tr><td><a class=\"$link\" href=\"$lnk?id=$row[sid]&nm=$row[sname]&cn=$ci\">$row[sid]</a></td><td><a href=\"profile.php?user=$row[sname]\">$row[sname]</a></td><td><a href=\"details.php?name=$row[pbname]&cod=$conid\">$row[pbname]</a></td><td><div class=\"btn btn-warning btn-xs\">$row[verdict]</div></td><td>$row[point]</td></tr>";
                  } else {
                    echo "<tr><td><a class=\"$link\" href=\"$lnk?id=$row[sid]&nm=$row[sname]&cn=$ci\">$row[sid]</a></td><td><a href=\"profile.php?user=$row[sname]\">$row[sname]</a></td><td><a href=\"details.php?name=$row[pbname]&cod=$conid\">$row[pbname]</a></td><td><div class=\"btn btn-danger btn-xs\">$row[verdict]</div></td><td>$row[point]</td></tr>";
                  }
                }

                echo "</tbody>
</table>
</div>";

                $psql = "SELECT * FROM submission WHERE cid='$conid' ORDER BY sid DESC";
                $sn = mysqli_query($con, $psql);
                $total_rows = mysqli_num_rows($sn);
                $total_page = ceil($total_rows / $per_page);
                $c = "active";

                echo "<div class=\"contain con\"><ul class=\"pagination\"><li><a href=\"contestsubmission.php?id=$conid&page=1\">First Page</a></li>";

                for ($i = 1; $i < $total_page; $i++) {

                  if ($page == $i) {
                    $c = "active";
                  } else {
                    $c = "";
                  }
                  echo "<li class=\"$c\"><a href=\"contestsubmission.php?id=$conid&page=$i\">$i</a></li>";
                }


                echo "<li><a href=\"contestsubmission.php?id=$conid&page=$total_page\">Last Page</a></li></ul></div>";
              }



              if (isset($_GET['id']) && isset($_GET['show'])) {
                $conid = $_GET['id'];
                $suser = $_GET['show'];
                $ch = 0;
                error_reporting(0);
                $per_page = 30;

                if (isset($_GET['page'])) {
                  $page = $_GET['page'];
                } else {
                  $page = 1;
                }

                $start = ($page - 1) * $per_page;




                $show = "SELECT * FROM submission WHERE cid='$conid' AND sname='$suser' ORDER BY sid DESC limit $start,$per_page";


                $sts = mysqli_query($con, $show);
                $detect = mysqli_num_rows($sts);

                $ts = "SELECT DISTINCT sname, COUNT(verdict) AS verdict FROM ( SELECT * FROM submission where verdict='Accepted' AND cid='$conid' AND sname='$suser' GROUP BY pbname, sname)T1 GROUP BY sname";

                $stss = mysqli_query($con, $ts);

                $solved = mysqli_fetch_array($stss);

                $tsolved = $solved['verdict'];


                $sql = "SELECT sname, SUM(status) As Solved, SUM(point) As Points FROM submission Where cid='$conid' GROUP BY sname ORDER BY Solved DESC , Points DESC";

                $send = mysqli_query($con, $sql);
                $i = 0;
                while ($bow = mysqli_fetch_array($send)) {
                  $i++;

                  if (isset($bow['sname']) && isset($suser)) {
                    if ($bow['sname'] == $suser) {
                      echo "<center><a class=\"btn btn-success\" href=\"standings.php?id=$conid\">$suser's Rank = $i</a></center><br><br><br>";
                      break;
                    }
                  }
                }






                while ($row = mysqli_fetch_array($sts)) {

                  if ($row['verdict'] == "Accepted") {
                    echo "<tr><td><a class=\"$link\" href=\"$lnk?id=$row[sid]&nm=$row[sname]&cn=$ci\">$row[sid]</a></td><td><a href=\"profile.php?user=$row[sname]\">$row[sname]</a></td><td><a href=\"details.php?name=$row[pbname]&cod=$conid\">$row[pbname]</a></td><td><div class=\"btn btn-success btn-xs\">$row[verdict]</div></td><td>$row[point]</td></tr>";
                  } else if ($row['verdict'] == "Time Limit Exceed") {
                    echo "<tr><td><a class=\"$link\" href=\"$lnk?id=$row[sid]&nm=$row[sname]&cn=$ci\">$row[sid]</a></td><td><a href=\"profile.php?user=$row[sname]\">$row[sname]</a></td><td><a href=\"details.php?name=$row[pbname]&cod=$conid\">$row[pbname]</a></td><td><div class=\"btn btn-primary btn-xs\">$row[verdict]</div></td><td>$row[point]</td></tr>";
                  } else if ($row['verdict'] == "Runtime Error") {
                    echo "<tr><td><a class=\"$link\" href=\"$lnk?id=$row[sid]&nm=$row[sname]&cn=$ci\">$row[sid]</a></td><td><a href=\"profile.php?user=$row[sname]\">$row[sname]</a></td><td><a href=\"details.php?name=$row[pbname]&cod=$conid\">$row[pbname]</a></td><td><div class=\"btn btn-warning btn-xs\">$row[verdict]</div></td><td>$row[point]</td></tr>";
                  } else {
                    echo "<tr><td><a class=\"$link\" href=\"$lnk?id=$row[sid]&nm=$row[sname]&cn=$ci\">$row[sid]</a></td><td><a href=\"profile.php?user=$row[sname]\">$row[sname]</a></td><td><a href=\"details.php?name=$row[pbname]&cod=$conid\">$row[pbname]</a></td><td><div class=\"btn btn-danger btn-xs\">$row[verdict]</div></td><td>$row[point]</td></tr>";
                  }
                }

                echo "</tbody>
</table>
</div><br><br>";

                if ($tsolved >= 1) {
                  $tsolved = $tsolved;
                } else {
                  $tsolved = 0;
                }

                //echo "<div class=\"alert alert-success\">$suser's Total Solved Problem= $tsolved</div>";
                echo "<div class=\"alert alert-success\">$suser's Total Submission=$detect</div>";

                $psql = "SELECT * FROM submission WHERE cid='$conid' AND sname='$suser' ORDER BY sid DESC";
                $sn = mysqli_query($con, $psql);
                $total_rows = mysqli_num_rows($sn);
                $total_page = ceil($total_rows / $per_page);
                $c = "active";

                echo "<div class=\"contain con\"><ul class=\"pagination\"><li><a href=\"contestsubmission.php?id=$conid&page=1\">First Page</a></li>";

                for ($i = 1; $i < $total_page; $i++) {

                  if ($page == $i) {
                    $c = "active";
                  } else {
                    $c = "";
                  }
                  echo "<li class=\"$c\"><a href=\"contestsubmission.php?id=$conid&page=$i\">$i</a></li>";
                }


                echo "<li><a href=\"contestsubmission.php?id=$conid&page=$total_page\">Last Page</a></li></ul></div>";
              }



              if (isset($_POST['id'])) {



                $sqlp = "SELECT * FROM element WHERE pbid='$cid'";

                $sqp = mysqli_query($con, $sqlp);

                $rowp = mysqli_fetch_array($sqp);



                $conid = $rowp['id'];

                $q3 = "SELECT * FROM rapl_oj_contest WHERE id='$conid'";
                $sq3 = mysqli_query($con, $q3);

                $q4 = "SELECT TIME_FORMAT(end_at,'%H') end_at FROM rapl_oj_contest  ORDER BY date_on DESC";
                $q5 = "SELECT TIME_FORMAT(end_at,'%i') end_at FROM rapl_oj_contest  ORDER BY date_on DESC";
                $q6 = "SELECT TIME_FORMAT(end_at,'%s') end_at FROM rapl_oj_contest  ORDER BY date_on DESC";


                $sq4 = mysqli_query($con, $q4);
                $sq5 = mysqli_query($con, $q5);
                $sq6 = mysqli_query($con, $q6);




                while ($rowp = mysqli_fetch_array($sq3)) {
                  $d = date("Y-m-d");
                  $t = date("Y-m-d H:i:s");
                  $m = $rowp['start_at'];


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

                  $en = $rowp['end_at'];


                  $seconds = strtotime($en) - strtotime($m);
                  $ss = strtotime($en) - strtotime($t);
                  $min = intval($seconds / 60);
                  $sec = intval($seconds % 60);
                  $hr = intval($min / 60);
                  $m = intval($min % 60);

                  $total_time = (($h * 60 + $mt) * 60) + $scnd;
                  $point = (200 / $seconds) * $total_time;
                  $cpoint = sprintf('%0.2f', $point);




                  //$h hour $mt miniute $scnd second










                  /*echo(" <a href=\"save.php?name=$row[table_name]\">$row[table_name]</a><br><br>");*/
                }

                $query = "SELECT output FROM element WHERE pbid='$cid'";
                $quo = "SELECT * FROM element WHERE pbid='$cid'";
                $sq = mysqli_query($con, $query);
                $sq1 = mysqli_query($con, $quo);
                $r3 = mysqli_fetch_array($sq);
                $r4 = mysqli_fetch_array($sq1);

                $ao = $r3['output'];
                $to = $r4['uoutput'];
                $conid = $r4['id'];
                $proname = $r4['pbname'];
                $count = 0;
                $mpoint = 0.00;
                $ignore = 0;
                //var_dump($uo);
                //var_dump($ao);

                $checkq = "SELECT * FROM submission WHERE pbname='$proname' AND cid='$conid' AND sname='$username' AND status='1'";
                $scheckq = mysqli_query($con, $checkq);
                $detect = mysqli_num_rows($scheckq);
                if ($detect >= 1) {

                  $ignore = 1;
                } else {
                  $ignore = 0;
                }

                if ($result != "lt") {

                  if ($result == "e") {
                    $result = "Compilation Error";
                    $count = 0;
                    $mpoint = $mpoint - 5.00;
                  } else if (strcmp($uo, $ao) == 0) {
                    //echo "Accepted";
                    $result = "Accepted";
                    $count = 1;
                    $mpoint = $point;
                  } else if ($result == "rte") {
                    $result = "Runtime Error";
                    $count = 0;
                    $mpoint = $mpoint - 5.00;
                  } else {
                    //echo "Wrong Answer";
                    $result = "Wrong Answer";
                    $count = 0;
                    $mpoint = $mpoint - 5.00;
                  }
                } else {
                  $result = "Time Limit Exceed";
                  $count = 0;
                  $mpoint = $mpoint - 5.00;
                }


                $per_page = 30;

                if (isset($_GET['page'])) {
                  $page = $_GET['page'];
                } else {
                  $page = 1;
                }

                $start = ($page - 1) * $per_page;





                if ($ignore == 0) {
                  $sql = "INSERT INTO submission VALUES('$nid','$username','$result','$pname','$conid','$count','$mpoint')";
                  $stq = mysqli_query($con, $sql);
                } else {
                  echo "
<script type=\"text/javascript\">
  alert('You have already got accepted!');
</script>";
                }

                $show = "SELECT * FROM submission WHERE cid='$conid' ORDER BY sid DESC limit $start,$per_page";

                $sts = mysqli_query($con, $show);

                /*$tsub="SELECT * FROM submission WHERE pbname='$proname' AND cid='$conid' AND sname='$username'";
$stsub=mysqli_query($con,$tsub);
$detect=mysqli_num_rows($stsub);*/


                while ($row = mysqli_fetch_array($sts)) {

                  if ($row['verdict'] == "Accepted") {
                    echo "<tr><td><a class=\"$link\" href=\"$lnk?id=$row[sid]&nm=$row[sname]&cn=$ci\">$row[sid]</a></td><td><a href=\"profile.php?user=$row[sname]\">$row[sname]</a></td><td><a href=\"details.php?name=$row[pbname]&cod=$conid\">$row[pbname]</a></td><td><div class=\"btn btn-success btn-xs\">$row[verdict]</div></td><td>$row[point]</td></tr>";
                  } else if ($row['verdict'] == "Time Limit Exceed") {
                    echo "<tr><td><a class=\"$link\" href=\"$lnk?id=$row[sid]&nm=$row[sname]&cn=$ci\">$row[sid]</a></td><td><a href=\"profile.php?user=$row[sname]\">$row[sname]</a></td><td><a href=\"details.php?name=$row[pbname]&cod=$conid\">$row[pbname]</a></td><td><div class=\"btn btn-primary btn-xs\">$row[verdict]</div></td><td>$row[point]</td></tr>";
                  } else if ($row['verdict'] == "Runtime Error") {
                    echo "<tr><td><a class=\"$link\" href=\"$lnk?id=$row[sid]&nm=$row[sname]&cn=$ci\">$row[sid]</a></td><td><a href=\"profile.php?user=$row[sname]\">$row[sname]</a></td><td><a href=\"details.php?name=$row[pbname]&cod=$conid\">$row[pbname]</a></td><td><div class=\"btn btn-warning btn-xs\">$row[verdict]</div></td><td>$row[point]</td></tr>";
                  } else {
                    echo "<tr><td><a class=\"$link\" href=\"$lnk?id=$row[sid]&nm=$row[sname]&cn=$ci\">$row[sid]</a></td><td><a href=\"profile.php?user=$row[sname]\">$row[sname]</a></td><td><a href=\"details.php?name=$row[pbname]&cod=$conid\">$row[pbname]</a></td><td><div class=\"btn btn-danger btn-xs\">$row[verdict]</div></td><td>$row[point]</td></tr>";
                  }
                }

                echo "</tbody>
</table>
</div>";

                $psql = "SELECT * FROM submission WHERE cid='$conid' ORDER BY sid DESC";
                $sn = mysqli_query($con, $psql);
                $total_rows = mysqli_num_rows($sn);
                $total_page = ceil($total_rows / $per_page);
                $c = "active";

                echo "<div class=\"contain con\"><ul class=\"pagination\"><li><a href=\"contestsubmission.php?id=$conid&page=1\">First Page</a></li>";

                for ($i = 1; $i < $total_page; $i++) {

                  if ($page == $i) {
                    $c = "active";
                  } else {
                    $c = "";
                  }
                  echo "<li class=\"$c\"><a href=\"contestsubmission.php?id=$conid&page=$i\">$i</a></li>";
                }


                echo "<li><a href=\"contestsubmission.php?id=$conid&page=$total_page\">Last Page</a></li></ul></div>";
              }
              ?>




        </div>

        <div class="col-sm-2">

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