<?php

session_start();
require_once("config.php");

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

$sql = "SELECT * FROM archieve WHERE id='$problemid' ";

$sq = mysqli_query($con, $sql);

$row = mysqli_fetch_array($sq);




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
            <a href="javascript:history.back()" class="back-button">Back</a>

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
                  <label for="lang">Choose Language</label>

                  <select class="form-control" name="language">
                     <option value="c">C</option>
                     <!--<option value="cpp">C++</option>-->
                     <option value="cpp11">C++17</option>
                     <option value="java">Java</option>


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
                  <textarea class="form-control" name="code" rows="10" cols="50"></textarea><br><br>
                  <input type="hidden" name='pbn' value="<?php echo $row['pbname']; ?>">
                  <input type="submit" class="btn btn-success" value="Run Code"><br><br><br>


               </form>


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