<?php

session_start();
date_default_timezone_set("Asia/Dhaka");
require_once("config.php");
require_once("connection.php");

$_SESSION['url'] = $_SERVER['REQUEST_URI'];

if (!isset($_SESSION['un'])) {
  header("Location:login.php");
}
if (isset($_SESSION['un'])) {
  $username = $_SESSION['un'];
}
?>



<?php

$c = 0;

if (isset($_GET['id'])) {
  $problemid = $_GET['id'];
  $c = 1;
}

$sql = "SELECT * FROM element WHERE pbid='$problemid' ";

$sq = mysqli_query($con, $sql);

$r1 = mysqli_fetch_array($sq);




//echo "<textarea  style=\"display:none;\" name=\"in\" 

?>

<!DOCTYPE html>
<html>

<head>


  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Submit</title>
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

          //document.getElementById(val).innerHTML = "Countdown : " + days + "d " + hours + "h " + minutes + "m " + seconds + "s ";
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
          //document.getElementById(val).innerHTML = " Running.... : "+ days + "d " + hours + "h "
          //+ minutes + "m " + seconds + "s ";

          document.getElementById("show").style.display = "block";




        }

        // If the count down is over, write some text 
        else if (now > countDownDate) {
          clearInterval(x);


          document.getElementById("fin").innerHTML = "Contest has Finished";


        }



      }, 1000);

      return x;
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
      <div class="col-sm-10">
        <div class="">
          <h3 style="text-align:center;">Submit Code</h3>
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
          <form action="pcompile.php" name="f2" method="POST">
            <label for="language">Choose Language</label>


            <select class="form-control" name="language">
              <option value="c">C</option>
              <!-- <option value="cpp">C++</option>-->
              <option value="cpp11">C++17</option>
              <option value="java">Java</option>
              <!--<option value="python2.7">Python2</option>
<option value="python3.2">Python2</option>-->

            </select><br><br>

            <?php

            if ($c == 1) {
              //echo "<input type=\"hidden\" name=\"pbn\" value=\"$problem\">";
              echo "<input type=\"hidden\" name=\"id\" value=\"$problemid\">";
            } else {
              echo "<label for=\"pp\">Enter Problem ID</label><br>";
              //echo "<input class=\"form-control\" type=\"text\" name=\"pbn\">";
              echo "<input class=\"form-control\" type=\"text\" name=\"id\">";
            }

            ?>

            <label for="ta">Write Your Code</label>
            <textarea class="form-control" name="src" rows="10" cols="50"></textarea><br><br>
            <input type="hidden" name='pbn' value="<?php echo $r1['pbname']; ?>">
            <!--<input type="submit" class="btn btn-success" value="Submit"><br><br><br>-->

            <?php

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

                header("Location:countdown.php");
              }

              echo ("<div id=\"show\" style=\"display:none;\"><input type=\"submit\" class=\"btn btn-success\" value=\"Submit\"></div><br><br><br>");

              echo ("<div id=\"fin\"></div>");




              /*echo(" <a href=\"save.php?name=$row[table_name]\">$row[table_name]</a><br><br>");
        if($row['date_on']==$d && $seconds>=0 && $ss>=0 )
        {
             echo "<input type=\"submit\" class=\"btn btn-success\" value=\"Submit\"><br><br><br>";
         }
         else if($d>$row['date_on'] || ($d==$row['date_on'] && $t>$en))
         {
            echo "Contest Has Finished<br><br>";
         }
         else
         {
            echo " Contest Has Not Started Yet<br><br> ";
         }*/
            }




            ?>


          </form><br><br>


        </div>

        <div class="col-sm-4">

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