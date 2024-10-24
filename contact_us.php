<?php
session_start();
require_once("config.php");
// Redirect to login if session variable is not set
if (!isset($_SESSION["un"])) {
    header("Location: login.php");
    exit(); // Ensure no further execution after redirect
}

$username = $_SESSION['un']; //
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>contact</title>
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
    <link rel="stylesheet" href="contact_us.css">

    <!-- Fontawesome icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
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

</style

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
                            <li class="space"><a href="User_see.php"><i class="fa fa-check-square ispace"></i>Blog</a></li>
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
                            </li>                            <li class="lgspace space"><a href="profile.php?user=<?php echo ("$username"); ?>"><i class="fa fa-user ispace"></i><?php echo ("$username"); ?></a></li>
                            <li class="space"><a href="sign.php"><i class="fa fa-chevron-circle-up ispace"></i>Sign Up</a></li>

                        </ul>
                    </div>
                </nav>
            </div>
        </div>


        <section class="contact-section">
            <div class="contact-bg">
                <h3>Get in Touch with Us</h3>
                <h2>contact us</h2>
                <div class="line">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <p class="text">We'd absolutely ❤️‍🔥 to hear from you! Reach out to us through any of the following:</p>
            </div>


            <div class="contact-body">
                <div class="contact-info">
                    <div>
                        <span><i class="fas fa-mobile-alt"></i></span>
                        <span style="font-family: 'Roboto', sans-serif; font-size: 16px; font-weight: bold;">Phone</span>
                        <span class="text">01924479047</span>
                    </div>
                    <div>
                        <span><i class="fas fa-mobile-alt"></i></span>
                        <span style="font-family: Roboto, sans-serif; font-size: 16px; font-weight: bold;color:green">WhatsApp (Recommended)</span>
                        <span class="text">01727470233</span>
                    </div>
                    <div>
                        <span><i class="fas fa-envelope-open"></i></span>
                        <span style="font-family: Roboto, sans-serif; font-size: 16px; font-weight: bold;">Email</span>
                        <span class="text">mail@company.com</span>
                    </div>
                    <div>
                        <span><i class="fas fa-map-marker-alt"></i></span>
                        <span style="font-family: 'Roboto', sans-serif; font-size: 16px; font-weight: bold;">Adress</span>
                        <span class="text">United City, Madani Ave, Dhaka 1212, Bangladesh</span>
                    </div>
                </div>
            <div class="contact-form">
                    <form action="https://api.web3forms.com/submit" method="POST">
                        <div>
                            <input type="text" class="form-control" name="first_name" placeholder="First Name" required>
                            <input type="text" class="form-control" name="last_name" placeholder="Last Name" required>
                        </div>
                        <div>
                            <input type="email" class="form-control" name="email" placeholder="E-mail" required>
                            <input type="text" class="form-control" name="phone" placeholder="Phone" required>
                        </div>
                        <div>
                            <textarea rows="5" name="message" placeholder="Message" class="form-control" required></textarea>
                        </div>
                        <input type="hidden" name="access_key" value="0b89eb6e-0c5d-467a-bcd3-9146e5f20bf0">
                        <input type="submit" class="send-btn" value="Send Message">
                    </form>
                </div>


                <div>
                    <img src="imge/contact-png.png" alt="" class="xx">
                </div>

            </div>
    </div>

            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.5821996646127!2d90.44483907808825!3d23.797887731894114!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7d8042caf2d%3A0x686fa3e360361ddf!2sUnited%20International%20University!5e0!3m2!1sen!2sbd!4v1722096586290!5m2!1sen!2sbd" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
            <div class="contact-footer">
                <h3>Follow Us</h3>
                <div class="social-links">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                    <a href="#" class="fab fa-youtube"></a>
                </div>
            </div>
        </section>

    </div>
    
</body>

</html>