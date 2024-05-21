<?php
define('base_url', 'http://localhost/zobstar/');
define('asset_path', base_url . 'assets/');
define('image_path', asset_path . 'images/');
define('js_path', asset_path . 'js/');
?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from techydevs.com/demos/themes/html/zobstar-demo/zobstar/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Oct 2023 12:36:30 GMT -->

<head>
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JOBS-SeasMart</title>

    <!-- Favicon -->
    <link rel="icon" href="<?= image_path; ?>favicon.png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:100,300,400,500,700,900&amp;display=swap" rel="stylesheet">

    <!-- Template CSS Files -->

    <link rel="stylesheet" href="<?= asset_path; ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= asset_path; ?>css/line-awesome.css">
    <link rel="stylesheet" href="<?= asset_path; ?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= asset_path; ?>css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?= asset_path; ?>css/magnific-popup.css">
    <link rel="stylesheet" href="<?= asset_path; ?>css/daterangepicker.css">
    <link rel="stylesheet" href="<?= asset_path; ?>css/jquery-ui.css">
    <link rel="stylesheet" href="<?= asset_path; ?>css/chosen.min.css">
    <link rel="stylesheet" href="<?= asset_path; ?>css/style.css">
    <link rel="shortcut icon" href="<?= image_path; ?>favicon/favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://highseastech.com/src/css/theme-custom.css?t=1">
    <link rel="stylesheet" href="https://highseastech.com/src/css/owl/owl.carousel.min.css">
    <link rel="stylesheet" href="https://highseastech.com/src/css/owl/owl.theme.default.min.css">

</head>

<body>
    <!-- start per-loader -->
    <div class="loader-container">
        <div class="loader-circle">
            <div class="loader">
                <div class="loader-dot"></div>
                <div class="loader-dot"></div>
                <div class="loader-dot"></div>
                <div class="loader-dot"></div>
                <div class="loader-dot"></div>
                <div class="loader-dot"></div>
            </div>
        </div>
    </div>
    <!-- end per-loader -->

<!-- ================================
            START HEADER AREA
================================= -->
<header class="header-area header-desktop">
    <div class="header-menu-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="menu-full-width">
                        <div class="logo">
                            <a href="<?= base_url; ?>index.php"><img src="<?= image_path; ?>logo2.png" alt="logo"></a>
                        </div><!-- end logo -->
                            <div class="main-menu-content">
                                <nav>
                                    <ul>
                                        <li><a href="<?= base_url; ?>index.php">Home </a></li>
                                        <li><a href="<?= base_url; ?>employee/employer-dashboard.php">Employer</a></li>
                                        <li><a href="<?= base_url; ?>candidate/candidate-dashboard.php"> Candidate</a></li>
                                        <li>
                                            <a href="#">Pages <i class="la la-angle-down"></i></a>
                                            <ul class="dropdown-menu-item">
                                                <!-- <li><a href="faq.html">Faq</a></li> -->
                                                <li><a href="<?= base_url; ?>contact.php">Contact</a></li>
                                                <li><a href="<?= base_url; ?>terms-and-condition.php">Terms And Condition</a></li>
                                                <li><a href="<?= base_url; ?>forget-password.php">Forget Password</a></li>
                                                <li><a href="<?= base_url; ?>about.php">About US</a></li>
                                                <li><a href="<?= base_url; ?>faq.php">FAQ</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Jobs <i class="la la-angle-down"></i></a>
                                            <ul class="dropdown-menu-item">
                                                <li><a href="<?= base_url; ?>candidate/job-details.php">Job Details </a></li>
                                                <li><a href="<?= base_url; ?>candidate/candidate-applied-jobs.php">Applied Jobs </a></li>

                                            </ul>
                                        </li>

                                    </ul>
                                </nav>
                            </div><!-- end main-menu-content -->
                            <div class="logo-right-content">
                                <div class="header-action-button d-flex align-items-center">
                                    <div class="user-action-wrap">
                                        <div class="notification-item">
                                            <div class="dropdown">
                                                <button class="notification-btn dot-status online-status dropdown-toggle" type="button" id="userDropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <img src="<?= image_path; ?>small-team1.jpg" alt="John-doe">
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="userDropdownMenu">
                                                    <div class="mess-dropdown">
                                                        <div class="mess__title d-flex align-items-center">
                                                            <div class="image dot-status online-status">
                                                                <a href="#">
                                                                    <img src="<?= image_path; ?>small-team1.jpg" alt="John Doe">
                                                                </a>
                                                            </div>
                                                            <div class="content">
                                                                <h4 class="widget-title font-size-16">
                                                                    <a href="#">Ali Tupan</a>
                                                                </h4>
                                                                <span class="email">alitupan@example.com</span>
                                                            </div>
                                                        </div><!-- end mess__title -->
                                                        <div class="mess__body">
                                                            <ul class="list-items">
                                                                <li class="mb-0">
                                                                    <a href="<?= base_url; ?>candidate/candidate-dashboard.php" class="d-block">
                                                                        <i class="la la-user"></i> Account
                                                                    </a>
                                                                </li>
                                                                <!-- <li class="mb-0">
                                                                    <a href="candidate-dashboard-bookmark.html" class="d-block">
                                                                        <i class="la la-bookmark"></i> Bookmarks
                                                                    </a>
                                                                </li> -->
                                                                <li class="mb-0">
                                                                    <a href="<?= base_url; ?>candidate/add-resume.php" class="d-block">
                                                                        <i class="la la-plus"></i> Add a Resume
                                                                    </a>
                                                                </li>
                                                                <li class="mb-0">
                                                                    <a href="<?= base_url; ?>candidate/candidate-dashboard.php" class="d-block">
                                                                        <i class="la la-question"></i> Help
                                                                    </a>
                                                                </li>
                                                                <li class="mb-0">
                                                                    <a href="<?= base_url; ?>candidate/candidate-dashboard.php" class="d-block">
                                                                        <i class="la la-gear"></i> Setting
                                                                    </a>
                                                                </li>
                                                                <li class="mb-0">
                                                                    <div class="section-block mt-2 mb-2"></div>
                                                                </li>
                                                                <li class="mb-0">
                                                                    <a href="<?= base_url; ?>index.php" class="d-block">
                                                                        <i class="la la-power-off"></i> Logout
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div><!-- end mess__body -->
                                                    </div><!-- end mess-dropdown -->
                                                </div><!-- end dropdown-menu -->
                                            </div><!-- end dropdown -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="menu-toggler d-flex align-items-center">
                            <div class="side-menu-open">
                                <span class="menu__bar"></span>
                                <span class="menu__bar"></span>
                                <span class="menu__bar"></span>
                            </div><!-- end side-menu-open -->
                            <div class="user-menu-open">
                                <i class="la la-user"></i>
                            </div><!-- end user-menu-open -->
                        </div>
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

                    <li><a href="<?= base_url; ?>index.php">Home</a></li>
                    <li><a href="<?= base_url; ?>employee/employer-dashboard.php">Employer </a></li>
                    <li><a href="<?= base_url; ?>candidate/candidates.php">Candidate </a></li>

                    <li>
                        <a href="#">Pages <i class="la la-caret-down btn-toggle"></i></a>
                        <ul class="dropdown-menu-item">
                            <li><a href="<?= base_url; ?>contact.php">Contact</a></li>
                            <li><a href="<?= base_url; ?>terms-and-condition.php">Terms And Condition</a></li>
                            <li><a href="<?= base_url; ?>forget-password.php">Forget Password</a></li>
                            <li><a href="<?= base_url; ?>about.php">About US</a></li>
                            <li><a href="<?= base_url; ?>faq.php">FAQ</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#">Jobs <i class="la la-caret-down btn-toggle"></i></a>
                        <ul class="dropdown-menu-item">
                            <li><a href="<?= base_url; ?>candidate/job-details.php">Job Details </a></li>
                            <li><a href="<?= base_url; ?>candidate/candidate-applied-jobs.php">Applied Jobs </a></li>

                        </ul>
                    </li>
                </ul>
                <div class="side-nav-button">
                    <a href="<?= base_url; ?>login.php">Login</a>
                    <span class="or-text">or</span>
                    <a href="<?= base_url; ?>register.php">Register</a>
                    <a href="<?= base_url; ?>candidate/add-resume.php" class="theme-btn">Add a Resume</a>
                </div><!-- end side-nav-button -->
            </div><!-- end side-menu-wrap -->
        </div><!-- end side-nav-container -->
        <div class="user-nav-container">
            <div class="humburger-menu">
                <div class="humburger-menu-lines side-menu-close"></div><!-- end humburger-menu-lines -->
            </div><!-- end humburger-menu -->
            <div class="user-panel-nav">
                <ul class="nav nav-tabs" id="nav-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link" id="account-tab" data-toggle="tab" href="#account-home" role="tab" aria-controls="account-home" aria-selected="false">Account</a>
                    </li>
                </ul>
            </div>
            <div class="tab-pane fade" id="account-home" role="tabpanel" aria-labelledby="account-tab">
                <div class="user-action-wrap user-sidebar-panel">
                    <div class="mess-dropdown">
                        <div class="mess__title d-flex align-items-center">
                            <div class="image dot-status online-status">
                                <a href="#">
                                    <img src="<?= image_path ?>small-team3.jpg" alt="John Doe">
                                </a>
                            </div>s
                            <div class="content">
                                <h4 class="widget-title">
                                    <a href="#">John doe</a>
                                </h4>
                                <span class="email">alitupan@example.com</span>
                            </div>
                        </div><!-- end mess__title -->
                        <div class="mess__body">
                            <a href="<?= base_url ?>candidate/candidate-dashboard.php" class="d-block">
                                <i class="la la-user"></i> Account
                            </a>
                            <!-- <a href="candidate-dashboard-bookmark.html" class="d-block">
                                    <i class="la la-bookmark"></i> Bookmarks
                                </a> -->
                            <a href="<?= base_url ?>candidate/add-resume.php" class="d-block">
                                <i class="la la-plus"></i> Add a Resume
                            </a>
                            <a href="<?= base_url ?>candidate/candidate-dashboard.php" class="d-block">
                                <i class="la la-question"></i> Help
                            </a>
                            <a href="<?= base_url ?>candidate/candidate-dashboard.php" class="d-block">
                                <i class="la la-gear"></i> Setting
                            </a>
                            <div class="section-block mt-2 mb-2"></div>
                            <a href="<?= base_url ?>index.php" class="d-block">
                                <i class="la la-power-off"></i> Logout
                            </a>
                        </div><!-- end mess__body -->
                    </div><!-- end mess-dropdown -->
                </div>
            </div>
        </div>
    </div><!-- end user-nav-container -->
</header>
<!-- ================================
         END HEADER AREA
================================= -->