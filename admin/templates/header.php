<?php
session_start();
if (!isset($_SESSION["un"])) {
    header("Location: ../login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="home-container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="home.php">
                    <img src="../img/logo_grayy.png" alt="UIU CELESTA OJ" class="navbar-logo" style="height: 40px;"> UIUOJ Admin
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                        <li><a href="javascript:void(0);" onclick="history.back()" class="back-button">Back</a></li>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/UIUOJ/oj2/main_admin/admin_home.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/UIUOJ/oj2/admin/index.php">Blog Manage</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/UIUOJ/oj2/main_admin/admin_profile.php">Contest Request</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="dashboard d-flex justify-content-between">
        <div class="sidebar bg-dark vh-100">
            <h1 class="bg-primary p-4"><a href="./index.php" class="text-light text-decoration-none">Dashboard</a></h1>
            <div class="menues p-4 mt-5">
                <div class="menu">
                    <a href="create.php" class="text-light text-decoration-none"><strong>Add New Post</strong></a>
                </div>


            </div>
        </div>