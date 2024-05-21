<?php
define('base_url', 'http://localhost/zobstar/');
define('asset_path', base_url.'assets/');
define('image_path', asset_path.'images/');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JOBS-SeasMart</title>
    <!-- Favicon -->
    <link rel="icon" href="<?= image_path;?>favicon.png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:100,300,400,500,700,900&amp;display=swap" rel="stylesheet">

    <!-- Template CSS Files -->
    
    <link rel="stylesheet" href="<?= asset_path;?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= asset_path;?>css/line-awesome.css">
    <link rel="stylesheet" href="<?= asset_path;?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= asset_path;?>css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?= asset_path;?>css/magnific-popup.css">
    <link rel="stylesheet" href="<?= asset_path;?>css/daterangepicker.css">
    <link rel="stylesheet" href="<?= asset_path;?>css/jquery-ui.css">
    <link rel="stylesheet" href="<?= asset_path;?>css/chosen.min.css">
    <link rel="stylesheet" href="<?= asset_path;?>css/style.css">
    <link rel="shortcut icon" href="<?= image_path;?>favicon/favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://highseastech.com/src/css/theme-custom.css?t=1">
    <link rel="stylesheet" href="https://highseastech.com/src/css/owl/owl.carousel.min.css">
    <link rel="stylesheet" href="https://highseastech.com/src/css/owl/owl.theme.default.min.css">
</head>
<body>
    
<!-- ================================
            START HEADER AREA
================================= -->
<header class="header-area header-area-2">
    <div class="header-menu-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="menu-full-width">
                        <div class="logo">
                            <a href="<?= base_url;?>" ><img src="<?= image_path;?>logo.png" style="width:50%" alt="logo"></a>
                        </div><!-- end logo -->
                        <div class="main-menu-content">
                            <nav>
                                <ul>
                                    <li>
                                        <a href="<?= base_url;?>">Home <i></i></a>
                                    </li>
                                    <li>
                                        <a href="#">Company Registration <i ></i></a>
                                      
                                    </li>
                                    <li>
                                        <a href="#">Candidates Registration<i></i></a>
                                        
                                    </li>
                                </ul>
                            </nav>
                        </div><!-- end main-menu-content -->
                        <div class="logo-right-content">
                            <ul class="author-access-list">
                                <li>
                                    <a href="<?= base_url;?>login.php" target=”_blank>Login</a>
                                    <span class="or-text">or</span>
                                    <a href="<?= base_url;?>register.php" target=”_blank>Register</a>
                                </li>
                                <li>
                                    <a href="<?= base_url;?>posted-jobs.php" class="theme-btn">
                                        <span class="la la-plus"></span>
                                        Post a Job
                                    </a>
                                </li>
                            </ul>
                            <div class="side-menu-open">
                                <span class="menu__bar"></span>
                                <span class="menu__bar"></span>
                                <span class="menu__bar"></span>
                            </div><!-- end side-menu-open -->
                        </div><!-- end logo-right-content -->
                    </div><!-- end menu-full-width -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container-fluid -->
    </div><!-- end header-menu-wrapper -->
    <div class="side-nav-container">
        <div class="humburger-menu">
            <div class="humburger-menu-lines side-menu-close"></div><!-- end humburger-menu-lines -->
        </div><!-- end humburger-menu -->
        <div class="side-menu-wrap">
            <ul class="side-menu-ul">
                <li>
                    <a href="#">Home<i class="la la-caret-down btn-toggle"></i></a>
                    <ul class="dropdown-menu-item">
                        
                        <li><a href="<?= base_url;?>">Home</a></li>
                      
                    </ul>
                </li>
                <li>
                    <a href="#">Company Registration <i class="la la-caret-down btn-toggle"></i></a>
                </li>
                <li>
                    <a href="#">Candidates Registration<i class="la la-caret-down btn-toggle"></i></a>   
                </li>
            </ul>
            <div class="side-nav-button">
                <a href="<?= base_url;?>login.php">Login</a>
                <span class="or-text">or</span>
                <a href="<?= base_url;?>register.php">Register</a>
                <a href="<?= base_url;?>posted-jobs.php" class="theme-btn">Post a Job</a>
            </div><!-- end side-nav-button -->
        </div><!-- end side-menu-wrap -->
    </div><!-- end side-nav-container -->
</header>
<!-- ================================
         END HEADER AREA
================================= -->
