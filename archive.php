<?php

session_start();

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
	<title>Archive</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="icon" type="image/png" href="img/uiu.png">
	<script src="js/vendor/modernizr-2.8.3.min.js"></script>
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
                            <li class="space"><a href="allsubmission.php"><i class="fa fa-check-square ispace"></i>Solve</a></li>
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
			<div class="">
				<h3 style="text-align:center;">Problem Archive</h3>
			</div>

		</div>

		<div class="row cspace">
			<div class="col-sm-1">
			</div>
			<div class="col-sm-9">
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th>ID</th>
								<th>Problem Name</th>
								<th>Status</th>
								<th>Accepted/Submission</th>
								<th>Problem Setter</th>
							</tr>
						</thead>
						<tbody>


							<?php

							require_once("config.php");

							error_reporting(0);

							if (isset($_POST['pname'])) {
								$pn = $_POST['pname'];
								$pd = $_POST['description'];
								$author = $_POST['c2'];
								$tc = $_POST['case'];
								$ac = $_POST['result'];
								$ptl = $_POST['tll'];
							}

							error_reporting(0);

							if (isset($pn)) {


								$sql = "INSERT INTO archieve VALUES(NULL,'$pn','$pd','$author','$tc','$ac','','$ptl')";

								$sq = mysqli_query($con, $sql);

								/*if($sq)
{
	$last_id=mysqli_insert_id($con);
}
*/

								$per_page = 10;

								if (isset($_GET['page'])) {
									$page = $_GET['page'];
								} else {
									$page = 1;
								}

								$start = ($page - 1) * $per_page;

								$show = "SELECT * FROM archieve limit $start,$per_page"; //start from 0 index
								$send = mysqli_query($con, $show);





								while ($row = mysqli_fetch_array($send)) {

									$problem_name = $row['pbname'];

									$number = "SELECT verdict from submissions WHERE pbname='$row[pbname]' and sname='$username' and verdict='Accepted'";
									$snumber = mysqli_query($con, $number);
									$tsol = mysqli_num_rows($snumber);

									$acn = "SELECT COUNT(verdict) AS verdict from submissions WHERE verdict='Accepted' AND pbname='$row[pbname]' GROUP BY pbname";
									$sacn = mysqli_query($con, $acn);
									$sol = mysqli_fetch_array($sacn);



									$tsub = "SELECT COUNT(verdict) as sub from submissions WHERE pbname='$row[pbname]' GROUP BY pbname";
									$stsub = mysqli_query($con, $tsub);
									$ntsub = mysqli_fetch_array($stsub);


									if ($tsol > 0) {
										$ver = "Solved";
										echo "

   
	<tr><td>$row[id]</td><td><a href=\"description.php?id=$row[id]\"><div class=\"\">$row[pbname]</div></a></td><td><div class=\"btn btn-success btn-xs\">$ver</div></td><td><progress id=\"myProgress\" value=\"$sol[verdict]\" max=\"$ntsub[sub]\"></progress> $sol[verdict]/$ntsub[sub]</td><td>$row[pbauthor]</td></tr>";
									} else {
										$ver = "Unsolved";
										echo "

   
	<tr><td>$row[id]</td><td><a href=\"description.php?id=$row[id]\"><div class=\"\">$row[pbname]</div></a></td><td><div class=\"btn btn-danger btn-xs\">$ver</div></td><td><progress id=\"myProgress\" value=\"$sol[verdict]\" max=\"$ntsub[sub]\"></progress> $sol[verdict]/$ntsub[sub]</td><td>$row[pbauthor]</td></tr>";
									}
								}

								echo "</tbody>
</table>
</div><br><br>";




								$psql = "SELECT * FROM archieve";
								$sn = mysqli_query($con, $psql);
								$total_rows = mysqli_num_rows($sn);
								$total_page = ceil($total_rows / $per_page);

								$c = "active";

								echo "<div style=\"text-align:center\"><ul class=\"pagination\"><li><a href=\"archive.php?page=1\">First Page</a></li>";

								for ($i = 1; $i < $total_page; $i++) {

									if ($page == $i) {
										$c = "active";
									} else {
										$c = "";
									}
									echo "<li class=\"$c\"><a href=\"archive.php?page=$i\">$i</a></li>";
								}


								echo "<li><a href=\"archive.php?page=$total_page\">Last Page</a></li></ul></div>";
							}

							if (!isset($pn)) {
								$per_page = 10;

								if (isset($_GET['page'])) {
									$page = $_GET['page'];
								} else {
									$page = 1;
								}

								$start = ($page - 1) * $per_page;

								$show = "SELECT * FROM archieve limit $start,$per_page";




								$send = mysqli_query($con, $show);



								while ($row = mysqli_fetch_array($send)) {
									$problem_name = $row['pbname'];

									$number = "SELECT verdict from submissions WHERE pbname='$row[pbname]' and sname='$username' and verdict='Accepted'";
									$snumber = mysqli_query($con, $number);
									$tsol = mysqli_num_rows($snumber);

									$acn = "SELECT COUNT(verdict) AS verdict from submissions WHERE verdict='Accepted' AND pbname='$row[pbname]' GROUP BY pbname";
									$sacn = mysqli_query($con, $acn);
									$sol = mysqli_fetch_array($sacn);


									$tsub = "SELECT COUNT(verdict) as sub from submissions WHERE pbname='$row[pbname]' GROUP BY pbname";
									$stsub = mysqli_query($con, $tsub);
									$ntsub = mysqli_fetch_array($stsub);

									if ($tsol > 0) {
										$ver = "Solved";
										echo "

   
	<tr><td>$row[id]</td><td><a href=\"description.php?id=$row[id]\"><div class=\"\">$row[pbname]</div></a></td><td><div class=\"btn btn-success btn-xs\">$ver</div></td><td><progress id=\"myProgress\" value=\"$sol[verdict]\" max=\"$ntsub[sub]\"></progress> $sol[verdict]/$ntsub[sub]</td><td>$row[pbauthor]</td></tr>";
									} else {
										$ver = "Unsolved";
										echo "

   
	<tr><td>$row[id]</td><td><a href=\"description.php?id=$row[id]\"><div class=\"\">$row[pbname]</div></a></td><td><div class=\"btn btn-danger btn-xs\">$ver</div></td><td><progress id=\"myProgress\" value=\"$sol[verdict]\" max=\"$ntsub[sub]\"></progress> $sol[verdict]/$ntsub[sub]</td><td>$row[pbauthor]</td></tr>";
									}
								}
								echo "</tbody>
</table>
</div><br><br>";


								$psql = "SELECT * FROM archieve";
								$sn = mysqli_query($con, $psql);
								$total_rows = mysqli_num_rows($sn);
								$total_page = ceil($total_rows / $per_page);
								$c = "active";

								echo "<div style=\"text-align:center\"><ul class=\"pagination\"><li><a href=\"archive.php?page=1\">First Page</a></li>";

								for ($i = 1; $i < $total_page; $i++) {

									if ($page == $i) {
										$c = "active";
									} else {
										$c = "";
									}
									echo "<li class=\"$c\"><a href=\"archive.php?page=$i\">$i</a></li>";
								}


								echo "<li><a href=\"archive.php?page=$total_page\">Last Page</a></li></ul></div>";
							}





							?>

				</div>

				<div class="col-sm-2">
					<!--<a href="allsubmission.php"><div class="btn btn-primary">Submissions</div></a><br><br>-->
				</div>
			</div>
		</div><br><br><br><br>
		<footer class="foot text-center">
			<div class="container">
				<p><b>&copy; 2024 UIU CELESTA OJ. All rights reserved.</b></p>
				<div id="tx"></div> <!-- Server time will be displayed here -->
			</div>
		</footer>

		<?php include('time.php'); ?>


</body>

</html>