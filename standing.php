<?php
session_start();
require_once("config.php");
// Redirect to login if session variable is not set
if (!isset($_SESSION["un"])) {
    header("Location: login.php");
    exit(); // Ensure no further execution after redirect
}

$username = $_SESSION['un']; //
// Fetch data from the submission table
$sql = "SELECT sname, SUM(point) as total_points FROM submission GROUP BY sname ORDER BY total_points DESC";
$result = $con->query($sql);

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Standings</title>
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
    <script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>
    <script src="bootstrap-3.3.7/js/bootstrap.js"></script>
    <link rel="stylesheet" href="degine.css">
    <link rel="stylesheet" href="logo_style.css">

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        h2 {
            text-align: center;
            color: #333;
            margin-top: 70px;
        }

        table {
            width: 80%;
            border-collapse: collapse;
            margin: 30px auto;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        th,
        td {
            padding: 15px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            background-color: #007bff;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #e9ecef;
        }

        .high-score {
            font-weight: bold;
        }

        .newbie-badge {
            color: gray;
        }

        .pupil-badge {
            color: green;
        }

        .specialist-badge {
            color: cyan;
        }

        .navbar {
            margin-bottom: 0;
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
        <h2>Rating: users participated in recent 6 months</h2>

        <table>
            <tr>
                <th>Rank</th>
                <th>Name</th>
                <th>Badge</th>
                <th>Total Points</th>
            </tr>
            <?php
            if ($result->num_rows > 0) {
                $rank = 1;
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $rank . "</td>";
                    echo "<td>" . $row["sname"] . "</td>";
                    echo "<td>";
                    if ($row["total_points"] < 500) {
                        echo "<span class='newbie-badge'>Newbie</span>";
                    } elseif ($row["total_points"] >= 500 && $row["total_points"] < 1500) {
                        echo "<span class='pupil-badge'>Pupil</span>";
                    } elseif ($row["total_points"] >= 1500 && $row["total_points"] < 2000) {
                        echo "<span class='specialist-badge'>Specialist</span>";
                    } elseif ($row["total_points"] >= 2000 && $row["total_points"] < 2500) {
                        echo "<span class='specialist-badge'>Specialist</span>";
                    }
                    echo "</td>";
                    echo "<td>" . $row["total_points"] . "</td>";
                    echo "</tr>";
                    $rank++;
                }
            } else {
                echo "<tr><td colspan='4'>No data available</td></tr>";
            }
            ?>
        </table>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </div>
</body>

</html>

<?php
$con->close();
?>