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


if (isset($_GET['name'])) {

  $coname = $_GET['name'];
}





?>

<?php


require_once("connection.php");

$fowner = "SELECT  owner from rapl_oj_contest where cname='$coname'";
$sendit = mysqli_query($con, $fowner);
$frow = mysqli_fetch_array($sendit);
$owner = $frow['owner'];

if ($username == $owner) {
  $access = 1;
} else if ($st == "Teacher" || $st == "Problem Setter") {
  $access = 1;
} else {
  header("Location:contest.php");
}

?>

<!DOCTYPE html>
<html>

<head>


  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Set Contest</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" type="image/png" href="img/UIU.png">
  <script src="js/vendor/jquery-1.12.0.min.js"></script>
  <script src="js/vendor/modernizr-2.8.3.min.js"></script>
  <script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>
  <script src="bootstrap-3.3.7/js/bootstrap.js"></script>
  <script src="js/vendor/moment.min.js"></script>


  <link href="dcss/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
  <script src="djs/vendor/bootstrap-datetimepicker.js"></script>
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
          <h3 style="text-align:center;">Edit Contest</h3>
        </div>
      </div>

      <div class="col-sm-1">

      </div>

      <div class="col-sm-1">

      </div>

    </div>

    <?php

    require_once("connection.php");

    $fetch = "SELECT * from rapl_oj_contest where cname='$coname'";
    $sfetch = mysqli_query($con, $fetch);
    $erow = mysqli_fetch_array($sfetch);
    $name = $erow['cname'];
    $id = $erow['id'];
    $start = $erow['start_at'];
    $end = $erow['end_at'];
    $date = $erow['date_on'];



    ?>


    <div class="row cspace">
      <div class="col-sm-8">



        <div class="form-group">
          <form action="contest.php" name="f3" method="POST">

            <input type="hidden" name="uci" class="form-control" value="<?php echo "$id"; ?>"><br><br>
            <label for="ta">Enter Your Contest Name</label>
            <input type="text" name="ucn" class="form-control" value="<?php echo "$name"; ?>"><br><br>
            <label for="ta">Enter Contest Date</label>
            <div class="input-group date form_datetime2 col-md-5" data-date="2024-07-15T05:25:07Z" data-date-format=" yyyy-mm-dd " data-link-field="dtp_input1">
              <input type='text' name="ucd" class="form-control" value="<?php echo "$date"; ?>" readonly class="form_datetime2" />

              <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
              <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
            </div><br><br>
            <label for="ta">Enter Contest Start Time</label>
            <!--<input type="text" name="ct" class="form-control"><br><br>-->

            <div class="input-group date form_datetime col-md-5" data-date="2024-07-15T05:25:07Z" data-date-format=" yyyy-mm-dd hh:ii " data-link-field="dtp_input1">
              <input type='text' name="uct" class="form-control" value="<?php echo "$start"; ?>" readonly class="form_datetime" />

              <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
              <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
            </div><br><br>

            <label for="ta">Enter Contest End Time</label>
            <!--<input type="text" name="ce" class="form-control"><br><br>-->


            <div class="input-group date form_datetime1 col-md-5" data-date="2024-07-15T05:25:07Z" data-date-format=" yyyy-mm-dd hh:ii " data-link-field="dtp_input1">
              <input type='text' name="uce" class="form-control" value="<?php echo "$end"; ?>" readonly class="form_datetime1" />

              <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
              <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
            </div><br><br>
            <br><br>

            <input type="submit" name="update" class="btn btn-success" value="Update Contest">
            <input type="submit" name="delete" class="btn btn-danger" value="Delete">



          </form>


        </div>
      </div>

      <div class="col-sm-4">

      </div>
    </div>
  </div><br><br><br>


  <script type="text/javascript" src="djquery/jquery-1.8.3.min.js" charset="UTF-8"></script>
  <script type="text/javascript" src="dboot/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="djs/bootstrap-datetimepicker.js" charset="UTF-8"></script>

  <script type="text/javascript">
    $('.form_datetime').datetimepicker({
      //language:  'fr',
      weekStart: 1,
      todayBtn: 1,
      autoclose: 1,
      todayHighlight: 1,
      startView: 2,
      forceParse: 0,
      showMeridian: 1
    });
  </script>

  <script type="text/javascript">
    $('.form_datetime1').datetimepicker({
      //language:  'fr',
      weekStart: 1,
      todayBtn: 1,
      autoclose: 1,
      todayHighlight: 1,
      startView: 2,
      forceParse: 0,
      showMeridian: 1
    });
  </script>

  <script type="text/javascript">
    $('.form_datetime2').datetimepicker({
      //language:  'fr',
      weekStart: 1,
      todayBtn: 1,
      autoclose: 1,
      todayHighlight: 1,
      startView: 2,
      forceParse: 0,
      showMeridian: 1
    });
  </script>
  <footer class="foot text-center">
    <div class="container">
      <p><b>&copy; 2024 UIU CELESTA OJ. All rights reserved.</b></p>
      <div id="tx"></div> <!-- Server time will be displayed here -->
    </div>
  </footer>
  <?php include('time.php'); ?>


</body>

</html>