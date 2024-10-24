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

$admin = 0;

$mysql = "SELECT  status from user WHERE name='$username'";
$snd = mysqli_query($con, $mysql);
$arrow = mysqli_fetch_array($snd);

$st = $arrow['status'];

if ($st == "Teacher" || $st == "Problem Setter" || $st == "Developer") {
  $admin = 1;
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
  <link rel="icon" type="image/png" href="img/uiu.png">
  <script src="js/vendor/modernizr-2.8.3.min.js"></script>
  <script src="js/vendor/jquery-1.12.0.min.js"></script>
  <script src="bootstrap-3.3.7/js/bootstrap.min.js"> </script>
  <script src="bootstrap-3.3.7/js/bootstrap.js"></script>
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/chart.min.js"></script>
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
<style>
        /* Search bar container styling */
        .search-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }

        /* Search input field */
        .search-input {
            width: 200px;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 16px;
        }

        /* Search button */
        .search-button {
            padding: 10px;
            margin-left: 10px;
            background-color: #5cb85c;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        /* Button hover effect */
        .search-button:hover {
            background-color: #4cae4c;
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
              <li class="space"><a href="chat/chat_index.php"><i class="fa fa-check-square ispace"></i>ChatBox</a></li>
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
                <li><a href="/UIUOJ/oj2/devchatapp/index.php">Community Chat</a></li>
                  <li><a href="#">Unlimited Topic List</a></li>
                  <li><a href="contact_us.php">Contact</a></li>
                  <li><a href="/UIUOJ/oj2/Faq/index.html">Help</a></li>

                </ul>
              </li>
              <li class="lgspace space"><a href="profile.php?user=<?php echo ("$username"); ?>"><i class="fa fa-user ispace"></i><?php echo ("$username"); ?></a></li>
              <li class="space"><a href="logout.php"><i class="fa fa-power-off ispace"></i>Logout</a></li>

            </ul>
          </div>
        </nav>
      </div>
    </div>

    <div class="search-container">
    <form action="search.php" method="GET">
        <input type="text" name="query" class="search-input" placeholder="Search user..." required>
        <button type="submit" class="search-button">Search</button>
    </form>
</div>

    <div class="row log">

      <?php

      if (isset($_GET['user'])) {

        $username = $data;
      }

      $ac = "SELECT COUNT(verdict) AS verdict FROM submissions where verdict='Accepted' and sname='$us'";
      $wa = "SELECT COUNT(verdict) AS verdict FROM submissions where verdict='Wrong Answer' and sname='$us'";
      $tle = "SELECT COUNT(verdict) AS verdict FROM submissions where verdict='Time Limit Exceed' and sname='$us'";

      $s1 = mysqli_query($con, $ac);
      $s2 = mysqli_query($con, $wa);
      $s3 = mysqli_query($con, $tle);

      //$nac=mysqli_fetch_array($s1);
      //$nwa=mysqli_fetch_array($s2);
      //$ntle=mysqli_fetch_array($s3);

      $d = array();
      $result = array();



      //$data[]=$nwa['verdict'];
      //$data[]=$ntle['verdict'];




      foreach ($s1 as $nac) {
        $d[] = $nac;
        //$i++;
      }


      foreach ($s2 as $nwa) {
        $d[] = $nwa;
        //$i++;
      }

      foreach ($s3 as $ntle) {
        $d[] = $ntle;
        //$i++;
      }


      json_encode($d);

      $dd = $d;


      //echo "$username";

      ?>

      <script type="text/javascript">
        var data = <?php print json_encode($d); ?>;

        $(document).ready(function() {
          var verdicts = [];
          var ac = [];
          var wa = [];
          var tle = [];
          var obj;


          console.log(data);

          verdicts.push("User's Statistics");
          //verdicts.push("Wrong Answer");
          //verdicts.push("Time Limit Exceed");



          //console.log(data);




          ac.push(data[0].verdict);
          wa.push(data[1].verdict);
          tle.push(data[2].verdict);

          //console.log(data[i].verdict);







          var chartdata = {
            labels: verdicts,
            datasets: [{
                label: 'AC',
                backgroundColor: 'green',
                borderColor: 'green',
                hoverBackgroundColor: 'green',
                data: ac,
              },

              {
                label: 'WA',
                backgroundColor: 'red',
                borderColor: 'red',
                hoverBackgroundColor: 'red',
                data: wa,
              },

              {
                label: 'TLE',
                backgroundColor: 'blue',
                borderColor: 'blue',
                hoverBackgroundColor: 'blue',
                data: tle,
              }





            ]
          };

          var ctx = $('#mycanvas');
          var barGraph = new Chart(ctx, {

            type: 'bar',
            responsive: true,
            data: chartdata,
            options: {
              scales: {
                yAxes: [{
                  ticks: {
                    beginAtZero: true,

                    callback: function(value) {
                      if (value % 1 === 0) {
                        return value;
                      }
                    }
                  }
                }]
              }
            }

          });


        });
      </script>


      <div class="">
        <h3 style="text-align:center;"><?php echo "$username's  Profile"; ?></h3>
      </div>

    </div>

    <?php

    $sql = "SELECT * FROM user WHERE name='$username'";
    $send = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($send);


    /*$ts="SELECT DISTINCT sname, COUNT(verdict) AS verdict FROM ( SELECT * FROM submission where verdict='Accepted' and sname='$username' GROUP BY pbname, sname)T1 GROUP BY sname";

$sts=mysqli_query($con,$ts);

$solved=mysqli_fetch_array($sts);

$tsolved=$solved['verdict'];

if($tsolved=="")
{
   $tsolved=0;
}
*/

    ?>


    <div class="row cspace">
      <div class="col-sm-2">
      </div>
      <div class="col-sm-6 pbs">

        <div class="ym">
          <div class="pc">Information</div>


          <table class="table">
            <tr class="success">
              <td>Name : <?php echo ("$row[name]") ?></td>
            </tr>
            <tr class="info">
              <td>Email : <?php echo ("$row[email]") ?></td>
            </tr>
            <tr class="danger">
              <td>Occupation : <?php echo ("$row[status]") ?></td>
            </tr>
            <?php

            if ($data == $_SESSION['un']) {
              echo "<tr class=\"warning\"><td><a href=\"edit_profile.php?name=$username\">Edit Profile</a></td></tr>";
              echo "<tr class=\"warning\"><td><a href=\"hostcontest.php?user=$username\">Host a Contest</a></td></tr>";
              echo "<tr class=\"warning\"><td><a href=\"/UIUOJ/oj2/blog-using-php-mysql-main/index.html?user=$username\"> Blog entries</a></td></tr>";
              echo "<tr class=\"warning\"><td><a href=\"/UIUOJ/oj2/text/dashboard.php?user=$username\">Message</a></td></tr>";

            }

            ?>
            <tr class="info">
              <td><?php echo ("<a href=\"allsubmission.php?name=$username\">Submissions</a>") ?></td>
            </tr>

          </table>
        </div>
        <br><br>

        <h3 style="text-align:center;"><?php echo "$username's Statistics" ?></h3><br><br>
        <div id="chart-container">
          <canvas id="mycanvas"></canvas>

        </div><br>

        <!--<div class="alert alert-success"><?php echo "<b>$username's Total Solved Problem = $tsolved</b>"; ?></div><br>--><br><br>

        <h3 style="text-align:center;"><?php echo "$username's Contest History" ?></h3><br><br>

        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Contest Name</th>
                <th>Date</th>
                <th>User's Activity</th>
              </tr>
            </thead>
            <tbody>

              <?php

              require_once("connection.php");

              $his = "SELECT DISTINCT cid FROM `submission` WHERE sname='$username'";
              $shis = mysqli_query($con, $his);
              while ($chis = mysqli_fetch_array($shis)) {
                $conid = $chis['cid'];
                $mycon = "SELECT * from rapl_oj_contest WHERE id='$conid'";
                $sendcon = mysqli_query($con, $mycon);
                $rhis = mysqli_fetch_array($sendcon);

                echo "<tr><td>$rhis[id]</td><td><a href=\"contestproblem.php?name=$rhis[cname]\">$rhis[cname]</a></td><td>$rhis[date_on]</td><td><a class=\"btn btn-primary btn-xs \" href=\"contestsubmission.php?id=$rhis[id]&show=$username\">Show</a></td></tr>";
              }
              echo "</tbody>
           </table>
           </div><br><br>";



              ?>




              <?php

              if ($data == $_SESSION['un']  && $admin == 1) {
                echo " 
          <div class=\"ym\">
    <div class=\"pc\">Dashboard</div>
  
   
   <ul class=\"nav nav-pills nav-stacked\">
    <li role=\"presentation\" class=\"active\"><a href=\"setcontest.php\">Create Contest</a></li>
    <li role=\"presentation\"><a href=\"setcontestproblem.php\">Create Contest Problem</a></li>
    <li role=\"presentation\"><a href=\"setproblem.php\">Create Archive Problem</a></li>
    <li role=\"presentation\"><a href=\"allsubmission.php?name=$username\">My Submission</a></li>
    <li role=\"presentation\"><a href=\"announcement.php\">Announcement</a></li>

  </ul></div>";
              }
              ?>

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
  </div>
  </div>
  </div>
  </div>



</body>

</html>