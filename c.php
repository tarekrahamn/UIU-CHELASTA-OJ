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



<!DOCTYPE html>
<html>

<head>


	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Run Code</title>
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
			<a href="javascript:history.back()" class="back-button">Back</a>

			</div>

			<div class="col-sm-7">
				<div class="">
					<h3 style="text-align:center;">Code Compiler</h3>
				</div>
			</div>

			<div class="col-sm-3">

			</div>

		</div>

		<div class="row cspace">
			<div class="col-sm-8">


				<?php
				if (isset($_POST['code'])) {
					putenv("PATH=C:\\Program Files\\CodeBlocks\\MinGW\\bin");
					$lang = $_POST['language'];
					$source = $_POST['code'];
					//$input=$_POST['in'];
					$pb = $_POST['pbn'];
					$pid = $_POST['id'];
					$us = $_SESSION['un'];

					$isql = "SELECT * FROM archieve WHERE id='$pid'";
					$si = mysqli_query($con, $isql);
					$r4 = mysqli_fetch_array($si);

					$limit = $r4['tlimit'];
					//$input=$r4['tc'];

					$CC = "gcc";
					$out = "a.exe";
					$code = $_POST["code"];
					$input = $r4['tc'];
					$filename_code = "main.c";
					$filename_in = "input.txt";
					$filename_error = "error.txt";
					$executable = "a.exe";
					$command = $CC . " -lm " . $filename_code;
					$command_error = $command . " 2>" . $filename_error;
					$check = 0;
					$tle = 0;
					$ce = 0;

					// Write code to file
					file_put_contents($filename_code, $code);

					// Write input to file
					file_put_contents($filename_in, $input);

					// Compile code and capture errors
					shell_exec($command_error);
					$error = file_get_contents($filename_error);

					$sql = "SELECT output FROM archieve WHERE id='$pid'";
					$sq = mysqli_query($con, $sql);
					$row = mysqli_fetch_array($sq);

					$executionStartTime = microtime(true);
					if (trim($error) == "") {
						if (trim($input) == "") {
							$output = shell_exec($out);
						} else {
							$out = $out . " < " . $filename_in;
							$output = shell_exec($out);
						}

						echo "<div class=\"row\"><div class=\"col-sm-4\"></div><div class=\"col-sm-6\"><div class=\"alert alert-success\"> <strong>Successfully Compiled!</strong> Click Below Submit Button To Submit.</div></div><div class=\"col-sm-2\"></div></div><br>";
					} else if (!strpos($error, "error")) {
						echo "<pre>$error</pre>";
						if (trim($input) == "") {
							$output = shell_exec($out);
						} else {
							$out = $out . " < " . $filename_in;
							$output = shell_exec($out);
						}

						echo "<div class=\"row\"><div class=\"col-sm-4\"></div><div class=\"col-sm-6\"><div class=\"alert alert-success\"> <strong>Successfully Compiled!</strong> Click Below Submit Button To Submit.</div></div><div class=\"col-sm-2\"></div></div><br>";
					} else {
						echo "<pre>$error</pre>";
						$check = 1;
						$ce = 1;

						echo "<div class=\"row\"><div class=\"col-sm-5\"></div><div class=\"col-sm-5\"><div class=\"alert alert-danger\"><strong>Compilation Error Or Submit Failed!</strong> Back To Problem Description And Submit Code Again.</div></div><div class=\"col-sm-2\"></div></div><br>";
					}
					$executionEndTime = microtime(true);
					$seconds = $executionEndTime - $executionStartTime;
					$seconds = sprintf('%0.2f', $seconds);
					echo "<pre>Compiled And Executed In: $seconds s</pre>";

					if ($seconds > $limit) {
						$fr = "lt";
					} else if ($ce == 1) {
						$fr = "e";
					} else if (isset($output) && trim($output) == "") {
						$fr = "rte";
					}

					// Clean up files
					unlink($filename_code);
					unlink($filename_in);
					unlink($filename_error);
					if (file_exists($executable)) {
						unlink($executable);
					}

					if ($check == 0 || $check == 1) {
						$nsql = "INSERT into codes VALUES('$us','$source',NULL)";
						$usql = "UPDATE archieve SET uoutput='$output' WHERE id='$pid'";
						$csql = "SELECT uoutput FROM archieve WHERE id='$pid'";
						$q3 = "SELECT id FROM codes ORDER BY id DESC";
						$snq = mysqli_query($con, $nsql);
						$snd = mysqli_query($con, $usql);
						$cnd = mysqli_query($con, $csql);
						$sq3 = mysqli_query($con, $q3);
						$r2 = mysqli_fetch_array($cnd);
						$r4 = mysqli_fetch_array($sq3);

						$uo = $r2['uoutput'];
						$ac = $row['output'];
						$nid = $r4['id'];
					}

					echo "<center><div class=\"row\">";
					echo "<form action=\"allsubmission.php\" method=\"POST\">";
					echo "<input type=\"hidden\" name=\"pb\" value=\"" . htmlspecialchars($pb ?? '') . "\">";
					echo "<input type=\"hidden\" name=\"id\" value=\"" . htmlspecialchars($pid ?? '') . "\">";
					echo "<input type=\"hidden\" name=\"mid\" value=\"" . htmlspecialchars($nid ?? '') . "\">";
					echo "<input type=\"hidden\" name=\"vd\" value=\"" . htmlspecialchars($fr ?? '') . "\">";
					echo "<input type=\"hidden\" name=\"il\" value=\"" . htmlspecialchars($seconds ?? '') . "\">";
					echo "<textarea style=\"display:none;\" name=\"result\" rows=\"10\" cols=\"10\">" . htmlspecialchars($output ?? '') . "</textarea>";
					echo "<input class=\"btn btn-success tm\" type=\"submit\" value=\"Submit Code\">";
					echo "</form></div></center>";
				} else if (isset($_POST['src'])) {
					// Ensure the PATH is set correctly for MinGW
					putenv("PATH=C:\\Program Files\\CodeBlocks\\MinGW\\bin");

					// Include the database connection file
					require_once("connection.php");

					// Retrieve POST data
					$lang = $_POST['language'];
					$source = $_POST['src'];
					$pb = $_POST['pbn'];
					$pid = $_POST['id'];
					$us = $_SESSION['un'];
					$check = 0;
					$tle = 0;
					$ce = 0;

					// Fetch problem details from the database
					$isql = "SELECT * FROM element WHERE pbid='$pid'";
					$si = mysqli_query($con, $isql);
					$r4 = mysqli_fetch_array($si);
					$limit = $r4['tlimit'];

					// Set up compilation and execution commands
					$CC = "g++ -std=c++11";
					$out = "a.exe";
					$code = $_POST["src"];
					$input = $r4['tc'];
					$filename_code = "main.cpp";
					$filename_in = "input.txt";
					$filename_error = "error.txt";
					$executable = "a.exe";
					$command = "$CC $filename_code -o $executable";
					$command_error = "$command 2>$filename_error";

					// Write the code to a file
					file_put_contents($filename_code, $code);

					// Write the input to a file
					file_put_contents($filename_in, $input);

					// Compile the code
					shell_exec($command_error);

					// Check for compilation errors
					$error = file_get_contents($filename_error);

					$sql = "SELECT output FROM element WHERE pbid='$pid'";
					$sq = mysqli_query($con, $sql);
					$row = mysqli_fetch_array($sq);

					$executionStartTime = microtime(true);

					if (trim($error) == "") {
						// Execute the code
						$output = shell_exec("$executable < $filename_in");

						echo "<div class=\"row\"><div class=\"col-sm-5\"></div><div class=\"col-sm-5\"><div class=\"alert alert-success\"><strong>Successfully Compiled!</strong> Click Submit Button To Submit.</div></div><div class=\"col-sm-2\"></div></div><br>";
					} else if (!strpos($error, "error")) {
						echo "<pre>$error</pre>";
						$output = shell_exec("$executable < $filename_in");
						echo "<div class=\"row\"><div class=\"col-sm-5\"></div><div class=\"col-sm-5\"><div class=\"alert alert-success\"><strong>Successfully Compiled!</strong> Click Submit Button To Submit.</div></div><div class=\"col-sm-2\"></div></div><br>";
					} else {
						echo "<pre>$error</pre>";
						$check = 1;
						$ce = 1;
						echo "<div class=\"row\"><div class=\"col-sm-5\"></div><div class=\"col-sm-5\"><div class=\"alert alert-danger\"><strong>Compilation Error Or Submit Failed!</strong> Back To Problem Description And Submit Code Again.</div></div><div class=\"col-sm-2\"></div></div><br>";
					}

					$executionEndTime = microtime(true);
					$seconds = $executionEndTime - $executionStartTime;
					$seconds = sprintf('%0.2f', $seconds);
					echo "<pre>Compiled And Executed In: $seconds s</pre>";

					if ($seconds > 3) {
						$fr = "lt";
					} else if ($ce == 1) {
						$fr = "e";
					} else if (isset($output) && trim($output) == "") {
						$fr = "rte";
					}

					// Clean up generated files
					unlink($filename_code);
					unlink($filename_in);
					unlink($filename_error);
					if (file_exists($executable)) {
						unlink($executable);
					}

					if ($check == 0 || $check == 1) {
						$nsql = "INSERT into code VALUES('$us','$code',NULL)";
						$usql = "UPDATE element SET uoutput='$output' WHERE pbid='$pid'";
						$csql = "SELECT uoutput FROM element WHERE pbid='$pid'";
						$q3 = "SELECT id FROM code ORDER BY id DESC";
						$snq = mysqli_query($con, $nsql);
						$snd = mysqli_query($con, $usql);
						$cnd = mysqli_query($con, $csql);
						$sq3 = mysqli_query($con, $q3);
						$r2 = mysqli_fetch_array($cnd);
						$r4 = mysqli_fetch_array($sq3);

						$uo = $r2['uoutput'];
						$ac = $row['output'];
						$nid = $r4['id'];
					}

					echo "<div class=\"row\">
    <div class=\"col-sm-4\"></div>
    <div class=\"col-sm-5\">
        <form action=\"contestsubmission.php\" method=\"POST\">
            <input type=\"hidden\" name=\"pb\" value=\"" . htmlspecialchars($pb ?? '') . "\">
            <input type=\"hidden\" name=\"id\" value=\"" . htmlspecialchars($pid ?? '') . "\">
            <input type=\"hidden\" name=\"mid\" value=\"" . htmlspecialchars($nid ?? '') . "\">
            <input type=\"hidden\" name=\"vd\" value=\"" . htmlspecialchars($fr ?? '') . "\">
            <input type=\"hidden\" name=\"il\" value=\"" . htmlspecialchars($seconds ?? '') . "\">
            <textarea style=\"display:none\" name=\"result\" rows=\"10\" cols=\"10\">" . htmlspecialchars($output ?? '') . "</textarea>
            <input class=\"btn btn-success tm\" type=\"submit\" value=\"Submit Code\">
        </form>
    </div>
    <div class=\"col-sm-3\"></div>
</div>";
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


</body>

</html>