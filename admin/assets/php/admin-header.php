<?php

session_start();
if (!isset($_SESSION['username'])) {
    header('location:index.php');
    exit();
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Atish Ojha">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <?php
    $title = basename($_SERVER['PHP_SELF'], '.php');
    $title = explode('-', $title);
    $title = ucfirst($title[1]);
    ?>
    <title><?= $title; ?> | Admin Panel</title>
    <link rel="icon" href="../assets/images/logo.png" type="image/icon type">
    <link rel="stylesheet" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css" />
    <!-- Bootstrap 4 CSS CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- Fontawesome CSS CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />

    <style type="text/css">
        .admin-nav {
            width: 220px;
            min-height: 100vh;
            overflow: hidden;
            background-color: #343a40;
            transition: 0.3s all ease-in-out;
        }

        .admin-link {
            background-color: #343a40;
        }

        .admin-link:hover,
        .nav-active {
            background-color: #212529;
            text-decoration: none;
        }

        .animate {
            width: 0;
            transition: 0.3s all ease-in-out;
        }
    </style>


</head>

<body style="background-color: #000000;">

    <div class="container-fluid">
        <div class="row">
            <div class="admin-nav p-0">
                <h4 class="text-light text-center p-2">Admin Panel</h4>

                <div class="list-group list-group-flush">

                    <a href="admin-dashboard.php" class="list-group-item text-light admin-link <?= (basename($_SERVER['PHP_SELF']) == 'admin-dashboard.php') ? "nav-active" : ""; ?>"><i class="fas fa-chart-pie"></i>&nbsp;&nbsp;Dashboard</a>
                    <a href="admin-users.php" class="list-group-item text-light admin-link <?= (basename($_SERVER['PHP_SELF']) == 'admin-users.php') ? "nav-active" : ""; ?>"><i class="fas fa-user-friends"></i>&nbsp;&nbsp;Users</a>
                    <a href="admin-feedback.php" class="list-group-item text-light admin-link <?= (basename($_SERVER['PHP_SELF']) == 'admin-feedback.php') ? "nav-active" : ""; ?>"><i class="fas fa-comments"></i>&nbsp;&nbsp;Feedback</a>
                    <a href="admin-notification.php" class="list-group-item text-light admin-link <?= (basename($_SERVER['PHP_SELF']) == 'admin-notification.php') ? "nav-active" : ""; ?>"><i class="fas fa-bell"></i>&nbsp;&nbsp;Notification&nbsp;&nbsp;<span id="checkNotification"></span></a>
                    <a href="admin-blockedusers.php" class="list-group-item text-light admin-link <?= (basename($_SERVER['PHP_SELF']) == 'admin-blockedusers.php') ? "nav-active" : ""; ?>"><i class="fas fa-user-slash"></i>&nbsp;&nbsp;Blocked Users</a>
                    <a href="admin-athlete.php" class="list-group-item text-light admin-link <?= (basename($_SERVER['PHP_SELF']) == 'admin-athlete.php') ? "nav-active" : ""; ?>"><i class="fas fa-user-astronaut"></i>&nbsp;&nbsp;Post Athlete</a>
                    <a href="admin-sport.php" class="list-group-item text-light admin-link <?= (basename($_SERVER['PHP_SELF']) == 'admin-sport.php') ? "nav-active" : ""; ?>"><i class="fas fa-swimmer"></i>&nbsp;&nbsp;Post Sport</a>
                    <a href="admin-news.php" class="list-group-item text-light admin-link <?= (basename($_SERVER['PHP_SELF']) == 'admin-news.php') ? "nav-active" : ""; ?>"><i class="fas fa-newspaper"></i>&nbsp;&nbsp;Post News</a>
                    <a href="assets/php/admin-action.php?export=excel" class="list-group-item text-light admin-link"><i class="fas fa-table"></i>&nbsp;&nbsp;Export Users</a>
                    <a href="admin-profile.php" class="list-group-item text-light admin-link <?= (basename($_SERVER['PHP_SELF']) == 'admin-profile.php') ? "nav-active" : ""; ?>"><i class="fas fa-id-card"></i>&nbsp;&nbsp;Profile</a>
                    <a href="admin-settings.php" class="list-group-item text-light admin-link <?= (basename($_SERVER['PHP_SELF']) == 'admin-settings.php') ? "nav-active" : ""; ?>"><i class="fas fa-cog"></i>&nbsp;&nbsp;Settings</a>



                </div>
            </div>

            <div class="col">
                <div class="row">
                    <div class="col-lg-12 pt-2 justify-content-between d-flex" style="background-color: #343a40;">
                        <a href="#" class="text-white" id="open-nav">
                            <h3><i class="fas fa-bars"></i></h3>
                        </a>
                        <h4 class="text-light"><?= $title; ?></h4>

                        <a href="assets/php/logout.php" class="text-light mt-1"><i class="fas fa-sign-out-alt"></i>&nbsp;Logout</a>
                    </div>
                </div>