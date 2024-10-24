<?php
session_start();
require_once("config.php"); // Ensure config.php has your database connection details

// Redirect to login if session variable is not set
if (!isset($_SESSION["un"])) {
    header("Location: login.php");
    exit(); // Ensure no further execution after redirect
}

$username = $_SESSION['un']; // Retrieve username from session

// Include your database connection file
require_once("connection.php");
$i = 0;
// Function to calculate countdown and display status
function calculateCountdown($start, $end) {
    $startTimestamp = strtotime($start);
    $endTimestamp = strtotime($end);
    $now = time();

    if ($now < $startTimestamp) {
        // Contest has not started yet
        $distance = $startTimestamp - $now;
        $status = "Countdown: " . gmdate("d \d\ay H \h\our i \m\inute s \s\e\cond", $distance);
    } elseif ($now < $endTimestamp) {
        // Contest is running
        $distance = $endTimestamp - $now;
        $status = "Running... Time Left: " . gmdate("d \d\ay H \h\our i \m\inute s \s\e\cond", $distance);
    } else {
        // Contest has finished
        $status = "Status: Finished";
    }

    return $status;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home</title>
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
    <script src="js/vendor/moment.min.js"></script>
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
        // Function to handle countdown
        function call(start, end, val) {
            var startTimestamp = new Date(start).getTime();
            var endTimestamp = new Date(end).getTime();
            
            var x = setInterval(function() {
                var now = new Date().getTime();
                var distance;

                if (now < startTimestamp) {
                    distance = startTimestamp - now;
                    document.getElementById(val).innerHTML = "Countdown: " + formatTime(distance);
                } else if (now < endTimestamp) {
                    distance = endTimestamp - now;
                    document.getElementById(val).innerHTML = "Running... Time Left: " + formatTime(distance);
                } else {
                    clearInterval(x);
                    document.getElementById(val).innerHTML = "Status: Finished";
                }
            }, 1000);
        }

        // Function to format time in days, hours, minutes, seconds
        function formatTime(distance) {
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);
            return days + "d " + hours + "h " + minutes + "m " + seconds + "s";
        }
    </script>
</head>
<body onload="set()">

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
        <div class="col-sm-2">
        </div>
        <div class="col-sm-7">
            <div class="">
                <h3 style="text-align: center;">Contest Countdown</h3>
            </div>
        </div>
        <div class="col-sm-3">
        </div>
    </div>

    <div class="row cspace">
        <div class="col-sm-3">
        </div>
        <div class="col-sm-7">
            <?php
            // Query to fetch contest details
            $nam = isset($_GET['name']) ? $_GET['name'] : '';
            $q3 = "SELECT * FROM rapl_oj_contest WHERE cname='$nam' ORDER BY date_on DESC LIMIT 1";
            $sq3 = mysqli_query($con, $q3);

            // Loop through contest details
            while ($row = mysqli_fetch_array($sq3)) {
                $start = $row['start_at'];
                $end = $row['end_at'];
                $i++;

                echo "<br><br><h1 id='demo$i'></h1><br><br>";
                echo "<div id='show' style='display:none; margin-left:120px; margin-right:100px;'><a class='btn btn-success' href='contestproblem.php?name=" . htmlspecialchars($row['cname']) . "'>Enter Now</a></div>";

                // Call JavaScript function to start countdown
                echo "<script>call('$start', '$end', 'demo$i');</script>";
            }
            ?>
        </div>
        <div class="col-sm-2">
        </div>
    </div>
</div>

<!-- Footer section -->
<div class="area">
    <div class="well foot">
        <div class="row area">
            <div class="col-sm-3">
                <!-- Online counter -->
                <center>
                    <script type="text/javascript" src="http://widget.supercounters.com/online_i.js"></script>
                    <script type="text/javascript">
                        sc_online_i(1360839, "ffffff", "e61c1c");
                    </script><br><noscript><a href="http://www.supercounters.com/">Free Online Counter</a></noscript>
                </center>
            </div>

            <div class="col-sm-5">
                <!-- Footer content -->
                <div>
                    <b>UIUOJ-2024</b><br>
                </div>
            </div>

            <div class="col-sm-4">
                <!-- Server time display -->
                <div id="tx"></div>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript to display server time -->
<script>
    function set() {
        document.getElementById('tx').innerHTML = "<b>Server Time : " + moment().format('h:mm:ss a') + "</b>";
        var t = setTimeout(set, 1000);
    }
</script>

</body>
</html>
