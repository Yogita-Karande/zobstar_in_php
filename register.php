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
    <link rel="icon" href="favicon.png">

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
                    </div><!-- end menu-full-width -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container-fluid -->
    </div><!-- end header-menu-wrapper -->
</header>
      
<!-- ================================
         END HEADER AREA
================================= -->

<!-- ================================
       START FORM AREA
================================= -->
<section class="form-shared padding-top-100px padding-bottom-100px">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="user-action-form">
                    
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="signup-nav" role="tabpanel" aria-labelledby="signup-tab">
                            <div class="billing-form-item mb-0">
                                <div class="billing-title-wrap border-bottom-0 text-center">
                                    <h3 class="widget-title font-size-28 pb-2">Create Your Account!</h3>
                                    <p>Create an account to get recommended jobs that matches
                                        <br> your resume and apply to multiple jobs in seconds! <br>
                                        <strong class="color-text-2 font-weight-medium">Already have an account? <a href="<?= base_url;?>login.php" class="color-text">Sign In</a></strong>
                                    </p>
                                </div><!-- billing-title-wrap -->
                                <div class="billing-content">
                                    <div class="contact-form-action">
                                        <form method="post">
                                            
                                            <div class="input-box">
                                                <label class="label-text">First name</label>
                                                <div class="form-group">
                                                    <i class="la la-user form-icon"></i>
                                                    <input class="form-control" type="text" name="firstname" placeholder="First name" value="firstname">
                                                </div>
                                            </div><!-- input-box -->
                                            <div class="input-box">
                                                <label class="label-text">Last name</label>
                                                <div class="form-group">
                                                    <i class="la la-user form-icon"></i>
                                                    <input class="form-control" type="text" name="text" placeholder="Last name">
                                                </div>
                                            </div><!-- input-box -->
                                            <div class="input-box">
                                                <label class="label-text">Email</label>
                                                <div class="form-group">
                                                    <i class="la la-envelope-o form-icon"></i>
                                                    <input class="form-control" type="email" name="text" placeholder="Enter email address">
                                                </div>
                                            </div><!-- input-box -->
                                            <div class="input-box mb-3">
                                                <label class="label-text">Password</label>
                                                <div class="form-group mb-0">
                                                    <i class="la la-lock form-icon"></i>
                                                    <input class="form-control password-field" type="password" name="password" placeholder="Password">
                                                    <a href="javascript:void(0)" class="btn toggle-password" title="Toggle show/hide password">
                                                        <i class="la la-eye eye-on"></i>
                                                        <i class="la la-eye-slash eye-off"></i>
                                                    </a>
                                                </div>
                                                <span class="mt-1">Must use 8-15 characters and one number or symbol.</span>
                                            </div><!-- input-box -->
                                            <div class="input-box">
                                                <label class="label-text">Confirm Password</label>
                                                <div class="form-group">
                                                    <i class="la la-lock form-icon"></i>
                                                    <input class="form-control password-field" type="password" name="password" placeholder="Confirm password">
                                                </div>
                                            </div><!-- input-box -->
                                            <div class="input-box">
                                                <label class="label-text">Email me career-related SeaMartShipping Jobs updates and job opportunities</label>
                                                <div class="form-group">
                                                    <div class="job-alert">
                                                        <div class="radio-option d-inline-block mr-4">
                                                            <label for="radio-1" class="radio-trigger font-weight-medium mb-3">
                                                                <input type="radio" id="radio-1" name="radio" checked="">
                                                                <span class="checkmark"></span>
                                                                <span class="color-text-3">Yes</span>
                                                            </label>
                                                        </div>
                                                        <div class="radio-option d-inline-block">
                                                            <label for="radio-2" class="radio-trigger font-weight-medium mb-3">
                                                                <input type="radio" id="radio-2" name="radio">
                                                                <span class="checkmark"></span>
                                                                <span class="color-text-3">No</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <span class="font-size-15">SeaMartShipping Jobs will automatically email job postings that are relevant to you. You can unsubscribe on the Manage Saved Searches page or with the opt-out link in the email.</span>
                                                </div>
                                            </div><!-- input-box -->
                                            <div class="input-box">
                                                <div class="form-group">
                                                    <div class="custom-checkbox d-block mr-0">
                                                        <input type="checkbox" id="chb3">
                                                        <label for="chb3">I Agree to SeaMartShipping Jobs's <a href="#" class="color-text">Privacy Policy</a> and <a href="#" class="color-text">Terms of Services</a></label>
                                                    </div><!-- end custom-checkbox -->
                                                </div>
                                            </div><!-- input-box -->
                                            <div class="btn-box margin-top-30px">
                                                <button class="theme-btn border-0" type="submit">Create Account</button>
                                            </div>
                                        </form>
                                    </div><!-- end contact-form-action -->
                                </div><!-- end billing-content -->
                            </div><!-- end billing-form-item -->
                        </div><!-- end tab-pane -->
                        <div class="tab-pane fade" id="login-nav" role="tabpanel" aria-labelledby="login-tab">
                            <div class="billing-form-item mb-0">
                                <div class="billing-title-wrap border-bottom-0 text-center">
                                    <h3 class="widget-title font-size-28 pb-2">Login to Your Account</h3>
                                    <p>with your social network, Note: SeaMartShipping Jobs will never <br> post content to your social pages.</p>
                                </div><!-- billing-title-wrap -->
                                <div class="billing-content">
                                    <div class="contact-form-action">
                                        <form method="post">
                                            <div class="row">
                                                <div class="col-lg-4 responsive-column">
                                                    <div class="form-group">
                                                        <button class="theme-btn bg-7 border-0 w-100" type="submit">
                                                            <i class="la la-google mr-2"></i> Google
                                                        </button>
                                                    </div>
                                                </div><!-- end col-lg-4 -->
                                                <div class="col-lg-4 responsive-column">
                                                    <div class="form-group">
                                                        <button class="theme-btn bg-5 border-0 w-100" type="submit">
                                                            <i class="la la-facebook-f mr-2"></i> Facebook
                                                        </button>
                                                    </div>
                                                </div><!-- end col-lg-4 -->
                                                <div class="col-lg-4 responsive-column">
                                                    <div class="form-group">
                                                        <button class="theme-btn bg-6 border-0 w-100" type="submit">
                                                            <i class="la la-twitter mr-2"></i> Twitter
                                                        </button>
                                                    </div>
                                                </div><!-- end col-lg-4 -->
                                                <div class="col-lg-12">
                                                    <div class="account-assist mt-4 mb-4 text-center">
                                                        <p class="account__desc">or</p>
                                                    </div>
                                                </div><!-- end col-lg-12 -->
                                                <div class="col-lg-12">
                                                    <div class="input-box">
                                                        <label class="label-text">Email Address</label>
                                                        <div class="form-group">
                                                            <i class="la la-user form-icon"></i>
                                                            <input class="form-control" type="email" name="text" placeholder="Your email address">
                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-12 -->
                                                <div class="col-lg-12">
                                                    <div class="input-box">
                                                        <label class="label-text">Password</label>
                                                        <div class="form-group">
                                                            <i class="la la-lock form-icon"></i>
                                                            <input class="form-control password-field" type="password" name="password" placeholder="Password">
                                                            <a href="javascript:void(0)" class="btn toggle-password" title="Toggle show/hide password">
                                                                <i class="la la-eye eye-on"></i>
                                                                <i class="la la-eye-slash eye-off"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-12 -->
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <div class="custom-checkbox mr-0 d-flex align-items-center justify-content-between">
                                                            <div>
                                                                <input type="checkbox" id="chb1">
                                                                <label for="chb1">Keep me logged in</label>
                                                            </div>
                                                            <div>
                                                                <a href="recover.html" class="color-text">Forgot password?</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-12 -->
                                                <div class="col-lg-12">
                                                    <div class="btn-box margin-top-20px margin-bottom-20px">
                                                        <button class="theme-btn border-0" type="submit">Login Account</button>
                                                    </div>
                                                </div><!-- end col-lg-12 -->
                                                <div class="col-lg-12">
                                                    <p>Don't have an account? <a href="<?= base_url;?>register" class="color-text"> Create Account</a></p>
                                                </div><!-- end col-lg-12 -->
                                            </div><!-- end row -->
                                        </form>
                                    </div><!-- end contact-form-action -->
                                </div><!-- end billing-content -->
                            </div><!-- end billing-form-item -->
                        </div><!-- end tab-pane -->
                    </div><!-- end tab-content -->
                </div>
            </div><!-- end col-lg-6 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end form-shared -->
<!-- ================================
       START FORM AREA
================================= -->

<div class="section-block"></div>

<?php
require_once('footer.php')
?>

</body>
</html>
