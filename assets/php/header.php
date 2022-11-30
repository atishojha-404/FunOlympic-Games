<?php
require_once 'assets/php/session.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Atish Ojha">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title><?= ucfirst(basename($_SERVER['PHP_SELF'], '.php')) ?> | FunOlympic-Games</title>
    <link rel="icon" href="assets/images/logo.png" type="image/icon type">
    <link rel="stylesheet" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css" />
    <!-- Bootstrap 4 CSS CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" />
    <!-- Fontawesome CSS CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
    <link rel="stylesheet" href="assets\css\footer.css" />
    <style type="text/css">
        @import url("https://fonts.googleapis.com/css?family=Maven+Pro:400,500,600,700,800,900&display=swap");

        * {
            font-family: "Maven Pro", sans-serif;
        }

        .bg-dark {
            background-color: #000000 !important;
        }

        .form-control {
            background-color: #000000 !important;
        }
    </style>

</head>

<body style="background-color: #000000 !important;">
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">

        <!-- Brand/logo -->
        <a class="navbar-brand" href="home.php">
            <img src="assets\images\logo.png" alt="logo" style="width:40px;">
        </a>

        <!-- Brand -->
        <a class="navbar-brand" href="home.php">&nbsp;&nbsp;FunOlympic-Games</a>

        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link <?= (basename($_SERVER['PHP_SELF']) == "home.php") ? "active" : ""; ?>" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= (basename($_SERVER['PHP_SELF']) == "athletes.php") ? "active" : ""; ?>" href="athletes.php">Athletes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= (basename($_SERVER['PHP_SELF']) == "sport.php") ? "active" : ""; ?>" href="sport.php">Sport</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= (basename($_SERVER['PHP_SELF']) == "news.php") ? "active" : ""; ?>" href="news.php">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= (basename($_SERVER['PHP_SELF']) == "funolympic-Channel.php") ? "active" : ""; ?>" href="funolympic-Channel.php">FunOlympic Channel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= (basename($_SERVER['PHP_SELF']) == "profile.php") ? "active" : ""; ?>" href="profile.php">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= (basename($_SERVER['PHP_SELF']) == "feedback.php") ? "active" : ""; ?>" href="feedback.php">Feedback</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= (basename($_SERVER['PHP_SELF']) == "notification.php") ? "active" : ""; ?>" href="notification.php">Notification&nbsp;<span id="checkNotification"></span> </a>
                </li>

                <form class="form-inline" action="#">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search">
                    <button class="btn btn-success" type="submit">Search</button>
                </form>

                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">
                        <i class="fas fa-user-cog"></i>&nbsp;Hi! <?= $fname; ?>
                    </a>
                    <div class="dropdown-menu">
                        <a href="settings.php" class="dropdown-item"><i class="fas fa-cog"></i>&nbsp;Setting</a>
                        <a href="assets/php/logout.php" class="dropdown-item"><i class="fas fa-sign-out-alt"></i>&nbsp;Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>