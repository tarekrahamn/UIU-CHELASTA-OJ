
 <?php 
session_start();
if(!isset($_SESSION['un']) && !empty($_SESSION['un']))
header("location: index.php");
// Require/Include DB Connection
require_once('./db-connect.php');
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $_SESSION['session_name'] = $_POST['session_name'];
    header("location: index.php");
}
?><!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Counting Likes</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js" integrity="sha512-6PM0qYu5KExuNcKt5bURAoT6KCThUmHRewN3zUFNaoI6Di7XJPTMoT6K0nsagZKk2OB4L7E3q1uQKHNHd4stIQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./js/bootstrap.min.js"></script>
 
</head>
 <style>
     html, body{
         height:100%;
         width:100%;
     }
     main{
         height:calc(100%);
         width:calc(100%);
         display:flex;
         flex-direction:column;
         align-items:center;
         justify-content:center
     }
 </style>
<body class="bg-gradient bg-dark bg-opacity-50">
    <script>
        start_loader()
    </script>
    <main>
        <div class="col-lg-12">
            <h1 class="fw-bolder text-center" id="project-title">If you want post blog please give your user name !</h1>
        </div>
        <div class="col-lg-6 col-md-8 col-sm-12 col-xs-12">
            <div class="card rounded-0">
                <div class="card-header">
                    <h4 class="card-title text-center"></h4>
                </div>
                <div class="card-body">
                    <div class="container-fluid">
                        <form action="login.php" method="POST">
                            <div class="form-group">
                                <label for="session_name" class="control-label">Username</label>
                                <input type="text" class="form-control form-control-sm rounded-0" id="session_name" name="session_name" placeholder="Enter your username...." required="required">
                            </div>
                            <div class="form-group text-end my-3">
                                <button class="btn btn-primary btn-sm bg-gradient-primary rounded-0">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>   
    </main>
</body>
</html>