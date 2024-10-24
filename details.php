<?php

ob_start();
session_start();
require_once("config.php");

$_SESSION['url'] = $_SERVER['REQUEST_URI'];

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

if (isset($_GET['id'])) {
  $pid = $_GET['id'];
}


?>

<?php

require_once("connection.php");

if (isset($_GET['id'])) {

  $getcon = "SELECT cname from element WHERE pbid='$pid'";
  $sendcon = mysqli_query($con, $getcon);
  $namerow = mysqli_fetch_array($sendcon);
  $coname = $namerow['cname'];

  $fowner = "SELECT  owner from rapl_oj_contest where cname='$coname'";
  $sendit = mysqli_query($con, $fowner);
  $frow = mysqli_fetch_array($sendit);
  $owner = $frow['owner'];

  if ($username == $owner) {
    $access = 1;
  } else if ($st == "Teacher" || $st == "Developer") {
    $access = 1;
  } else {
    $access = 0;
  }
}


?>




<!DOCTYPE html>
<html>

<head>


  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Contest</title>
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




  <script>
    // Set the date we're counting down to

    function call(d, val, st) {

      //console.log(d);
      //console.log(val);
      //console.log(st);
      var countDownDate = new Date(d).getTime();
      var start = new Date(st).getTime();

      //console.log(start);

      var result;

      // Update the count down every 1 second
      var x = setInterval(function() {

        // Get todays date and time
        var now = new Date().getTime();

        // Find the distance between now an the count down date





        if (start > now) {

          var distance = start - now;

          // Time calculations for days, hours, minutes and seconds
          var days = Math.floor(distance / (1000 * 60 * 60 * 24));
          var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
          var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
          var seconds = Math.floor((distance % (1000 * 60)) / 1000);


          // Output the result in an element with id="demo"
          var result = days + "d " + hours + "h " +
            minutes + "m " + seconds + "s ";

          //console.log(result);

          document.getElementById(val).innerHTML = "Countdown : " + days + "d " + hours + "h " + minutes + "m " + seconds + "s ";
        } else if (countDownDate >= now) {


          var distance = countDownDate - now;

          // Time calculations for days, hours, minutes and seconds
          var days = Math.floor(distance / (1000 * 60 * 60 * 24));
          var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
          var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
          var seconds = Math.floor((distance % (1000 * 60)) / 1000);


          // Output the result in an element with id="demo"
          var result = days + "d " + hours + "h " +
            minutes + "m " + seconds + "s ";

          //console.log(result);
          document.getElementById("demo").innerHTML = "Running : " + days + "d " + hours + "h " +
            minutes + "m " + seconds + "s ";

          // document.getElementById("dem").innerHTML = " Running.... : "+ days + "d " + hours + "h "
          //+ minutes + "m " + seconds + "s ";

          document.getElementById("show").style.display = "block";




        }

        // If the count down is over, write some text 
        else if (now > countDownDate) {
          clearInterval(x);

          document.getElementById("demo").innerHTML = "Status : Finished";

          document.getElementById("fin").innerHTML = "Contest has Finished";


        }



      }, 1000);

      return x;
    }
  </script>
  <style>
    .back-button {
      position: absolute;
      top: 20px;
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
        <a href="javascript:history.back()" class="back-button">Back</a>

          <h3 style="text-align:center;">Problem Details</h3>
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

        require_once("connection.php");

        date_default_timezone_set("Asia/Dhaka");

        if (isset($_GET['id'])) {
          $des = $_GET['id'];


          $q3 = "SELECT * FROM element WHERE pbid='$des'";

          $sq3 = mysqli_query($con, $q3);

          $r1 = mysqli_fetch_array($sq3);

          $cnt = $r1['cname'];


          echo ("Problem Name: $r1[pbname]<br><br> Problem ID: $r1[pbid]<br><br>Time Limit: $r1[tlimit] Seconds<br><br> Problem Details<br><br><textarea class=\"form-control\" rows=\"30\" cols=\"95\" readonly>$r1[pbdes]</textarea><br><br>Problem Setter: $r1[pbauthor]<br><br>");

          $conid = $r1['id'];

          $q3 = "SELECT * FROM rapl_oj_contest WHERE id='$conid'";
          $sq3 = mysqli_query($con, $q3);

          $q4 = "SELECT TIME_FORMAT(end_at,'%H') end_at FROM rapl_oj_contest  ORDER BY date_on DESC";
          $q5 = "SELECT TIME_FORMAT(end_at,'%i') end_at FROM rapl_oj_contest  ORDER BY date_on DESC";
          $q6 = "SELECT TIME_FORMAT(end_at,'%s') end_at FROM rapl_oj_contest  ORDER BY date_on DESC";


          $sq4 = mysqli_query($con, $q4);
          $sq5 = mysqli_query($con, $q5);
          $sq6 = mysqli_query($con, $q6);


          $i = 0;




          while ($row = mysqli_fetch_array($sq3)) {
            $d = date("Y-m-d");
            $t = date("H:i:s");
            $current = date("Y-m-d H:i:s ");

            $m = $row['start_at'];
            $nv = $row['start_at'];


            $i++;
            $demo = "demo" . $i;
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



        ?>

            <script type="text/javascript">
              var end = <?php print json_encode($en); ?>;
              var val = <?php print json_encode($i); ?>;
              var nv = <?php print json_encode($nv); ?>;

              //console.log("Start" +nv);

              call(end, val, nv);
            </script>

            <?php

            $diff = strtotime($nv) - strtotime($current);
            $current = strtotime($current);

            // echo "$current<br>";

            //echo "$diff";

            if ($diff > 0 && $access == 0) {

              header("Location:countdown.php?name=$cnt");
            }

            echo ("<div id=\"show\" style=\"display:none;\"><a class=\"btn btn-success\" href=\"contestsubmit.php?id=$r1[pbid]\">Submit Your Code</a></div>");

            echo "<div id=\"fin\"></div><br><br>";















            /*echo(" <a href=\"save.php?name=$row[table_name]\">$row[table_name]</a><br><br>");
        if($row['date_on']==$d && $seconds>=0 && $ss>=0 )
        {
             echo "<a class=\"btn btn-success\" href=\"contestsubmit.php?id=$r1[pbid]\">Submit Your Code</a>";
         }
         else if($d>$row['date_on'] || ($d==$row['date_on'] && $t>$en))
         {
            echo "Contest Has Finished<br><br>";
         }
         else
         {
            echo " Contest Has Not Started Yet<br><br> ";
            header("Location:contest.php");
         }*/
          }
        }

        if (isset($_GET['name']) && isset($_GET['cod'])) {
          $des = $_GET['name'];
          $cod = $_GET['cod'];

          $q3 = "SELECT * FROM element WHERE pbname='$des' AND id='$cod'";

          $sq3 = mysqli_query($con, $q3);

          $r1 = mysqli_fetch_array($sq3);


          echo ("Problem Name: $r1[pbname]<br><br> Problem ID: $r1[pbid]<br><br>Time Limit: $r1[tlimit] Seconds<br><br> Problem Details<br><br><textarea class=\"form-control\" rows=\"30\" cols=\"95\" readonly>$r1[pbdes]</textarea><br><br>Problem Setter: $r1[pbauthor]<br><br>");



          $conid = $r1['id'];


          $q3 = "SELECT * FROM rapl_oj_contest WHERE id='$conid'";
          $sq3 = mysqli_query($con, $q3);

          $q4 = "SELECT TIME_FORMAT(end_at,'%H') end_at FROM rapl_oj_contest  ORDER BY date_on DESC";
          $q5 = "SELECT TIME_FORMAT(end_at,'%i') end_at FROM rapl_oj_contest  ORDER BY date_on DESC";
          $q6 = "SELECT TIME_FORMAT(end_at,'%s') end_at FROM rapl_oj_contest  ORDER BY date_on DESC";


          $sq4 = mysqli_query($con, $q4);
          $sq5 = mysqli_query($con, $q5);
          $sq6 = mysqli_query($con, $q6);



          $i = 0;




          while ($row = mysqli_fetch_array($sq3)) {
            $d = date("Y-m-d");
            $t = date("H:i:s");
            $current = date("Y-m-d H:i:s ");

            $m = $row['start_at'];
            $nv = $row['start_at'];


            $i++;
            $demo = "demo" . $i;
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



            ?>

            <script type="text/javascript">
              var end = <?php print json_encode($en); ?>;
              var val = <?php print json_encode($i); ?>;
              var nv = <?php print json_encode($nv); ?>;

              //console.log("Start" +nv);

              call(end, val, nv);
            </script>

        <?php

            $diff = strtotime($nv) - strtotime($current);
            $current = strtotime($current);

            // echo "$current<br>";

            //echo "$diff";

            if ($diff > 0) {

              header("Location:countdown.php?name=$des");
            }

            echo ("<div id=\"show\" style=\"display:none;\"><a class=\"btn btn-success\" href=\"contestsubmit.php?id=$r1[pbid]\">Submit Your Code</a></div>");

            echo "<div id=\"fin\"></div><br><br>";





            /*echo(" <a href=\"save.php?name=$row[table_name]\">$row[table_name]</a><br><br>");
        if($row['date_on']==$d && $seconds>=0 && $ss>=0 )
        {
             echo "<a class=\"btn btn-success\" href=\"contestsubmit.php?id=$r1[pbid]\">Submit Your Code</a>";
         }
         else if($d>$row['date_on'] || ($d==$row['date_on'] && $t>$en))
         {
            echo "Contest Has Finished<br><br>";
         }
         else
         {
            echo " Contest Has Not Started Yet<br><br> ";
            header("Location:contest.php");
         }*/
          }
        }

        ?>

      </div>
      <div class="col-sm-4">

        <?php

        if (isset($_GET['id'])) {
          $des = $_GET['id'];

          $q3 = "SELECT * FROM element WHERE pbid='$des'";

          $sq3 = mysqli_query($con, $q3);

          $r1 = mysqli_fetch_array($sq3);


          $cnt = $r1['cname'];

          $conid = $r1['id'];


          $q3 = "SELECT * FROM rapl_oj_contest WHERE id='$conid'";
          $sq3 = mysqli_query($con, $q3);

          $q4 = "SELECT TIME_FORMAT(end_at,'%H') end_at FROM rapl_oj_contest  ORDER BY date_on DESC";
          $q5 = "SELECT TIME_FORMAT(end_at,'%i') end_at FROM rapl_oj_contest  ORDER BY date_on DESC";
          $q6 = "SELECT TIME_FORMAT(end_at,'%s') end_at FROM rapl_oj_contest  ORDER BY date_on DESC";


          $sq4 = mysqli_query($con, $q4);
          $sq5 = mysqli_query($con, $q5);
          $sq6 = mysqli_query($con, $q6);




          $i = 0;




          while ($row = mysqli_fetch_array($sq3)) {
            $d = date("Y-m-d");
            $t = date("H:i:s");
            $current = date("Y-m-d H:i:s ");

            $m = $row['start_at'];
            $nv = $row['start_at'];


            $i++;
            $demo = "demo" . $i;
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



        ?>

            <script type="text/javascript">
              var end = <?php print json_encode($en); ?>;
              var val = <?php print json_encode($i); ?>;
              var nv = <?php print json_encode($nv); ?>;

              //console.log("Start" +nv);

              call(end, val, nv);
            </script>

        <?php

            $diff = strtotime($nv) - strtotime($current);
            $current = strtotime($current);

            // echo "$current<br>";

            //echo "$diff";

            if ($diff > 0 && $access == 0) {

              header("Location:countdown.php?name=$cnt");
            }


            if ($access == 1) {
              echo "<center><a class=\"btn btn-success\" href=\"editcontestproblem.php?id=$pid\">Edit</a></center>";
            }

            echo ("<center><h2 id=\"demo\" class=\"btn btn-primary btn-lg\"></h2></center><br><br>");

            echo ("<div class=\"xmm\">Contest Name: <a href=\"contestproblem.php?name=$row[cname]\">$row[cname]</a><br><br>Contest Date: $row[date_on] <br><br>Start Time: $row[start_at]<br><br>End Time: $row[end_at] <br><br><br><br></div>");






            /*echo(" <a href=\"save.php?name=$row[table_name]\">$row[table_name]</a><br><br>");
        if($row['date_on']==$d && $seconds>=0 && $ss>=0 )
        {
             echo("<div class=\"xmm\">Contest Name: <a href=\"contestproblem.php?name=$row[cname]\">$row[cname]</a><br><br>Contest Date: $row[date_on] <br><br>Start Time: $row[start_at]<br><br>End Time: $row[end_at] <br><br> Status: <b>Running</b> <br><br>Time Remaining:  $h hour $mt miniute $scnd second <br><br></div>");
         }
         else if($d>$row['date_on'] || ($d==$row['date_on'] && $t>$en))
         {
            echo("<div class=\"xmm\">Contest Name: <a href=\"contestproblem.php?name=$row[cname]\">$row[cname]</a><br><br>Contest Date:  $row[date_on] <br><br>Start Time: $row[start_at]<br><br>End Time: $row[end_at] <br><br>Status: <b>Finished</b><br><br></div>");
         }
         else
         {
            echo("<div class=\"xmm\">Contest Name: $row[cname]<br><br>Contest Date:  $row[date_on] <br><br>Start Time: $row[start_at]<br><br>End Time: $row[end_at] <br><br>Status: <b>Not Started Yet</b><br><br></div>");
         }*/
          }
        } else {
          if (isset($_GET['name']) && isset($_GET['cod'])) {

            $des = $_GET['name'];
            $cod = $_GET['cod'];


            $q10 = "SELECT * FROM element WHERE pbname='$des' AND id='$cod'";

            $sq10 = mysqli_query($con, $q10);


            $r8 = mysqli_fetch_array($sq10);

            $conid = $r1['id'];


            $q12 = "SELECT * FROM rapl_oj_contest WHERE id='$conid'";
            $sq12 = mysqli_query($con, $q12);
            $oc = mysqli_fetch_array($sq12);




            echo ("<center><h2 id=\"demo\" class=\"btn btn-primary btn-lg\"></h2></center><br><br>");

            echo ("<div class=\"xmm\">Contest Name: <a href=\"contestproblem.php?name=$r8[cname]\">$oc[cname]</a><br><br>Contest Date: $oc[date_on] <br><br>Start Time: $oc[start_at]<br><br>End Time: $oc[end_at] <br><br></div>");
          }
        }


        ?>
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