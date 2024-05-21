<?php
require_once('main-header.php')
?>
<!-- ================================
    START BREADCRUMB AREA
================================= -->
<section class="breadcrumb-area">
    <div class="breadcrumb-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content d-flex flex-wrap justify-content-between align-items-center">
                        <div class="section-heading">
                            <h2 class="sec__title mb-0">Login</h2>
                        </div><!-- end section-heading -->
                        <ul class="list-items d-flex align-items-center">
                            <li class="active__list-item"><a href="index.php">Home</a></li>
                            <li class="active__list-item">Pages</li>
                            <li>Login</li>
                        </ul>
                    </div><!-- end breadcrumb-content -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end breadcrumb-wrap -->
</section><!-- end breadcrumb-area -->
<!-- ================================
    END BREADCRUMB AREA
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
                        <div class="tab-pane fade show active" id="login-nav" role="tabpanel" aria-labelledby="login-tab">
                            <div class="billing-form-item mb-0">
                                <div class="billing-title-wrap border-bottom-0 text-center">
                                    <h3 class="widget-title font-size-28 pb-2">Login to Your Account</h3>
                                    <p>with your social network, Note: Zobstar will never <br> post content to your social pages.</p>
                                </div><!-- billing-title-wrap -->
                                <div class="billing-content">
                                    <div class="contact-form-action">
                                        <form method="post">                           
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
                                                                <a href="forget-password.php" class="color-text">Forgot password?</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-12 -->
                                                <div class="col-lg-12">
                                                    <div class="btn-box margin-top-20px margin-bottom-10px">
                                                        <button class="theme-btn border-0" type="submit">Login Account</button>
                                                    </div>
                                                </div><!-- end col-lg-12 -->
                                                <div class="col-lg-12">
                                                    <p>Don't have an account? <a href="register.php" class="color-text"> Create Account</a></p>
                                                </div><!-- end col-lg-12 -->
                                            </div><!-- end row -->
                                        </form>
                                    </div><!-- end contact-form-action -->
                                </div><!-- end billing-content -->
                            </div><!-- end billing-form-item -->
                        </div><!-- end tab-pane -->
                        <div class="tab-pane fade" id="signup-nav" role="tabpanel" aria-labelledby="signup-tab">
                            <div class="billing-form-item mb-0">
                                <div class="billing-title-wrap border-bottom-0 text-center">
                                    <h3 class="widget-title font-size-28 pb-2">Create Your Account!</h3>
                                    <p>Create an account to get recommended jobs that matches
                                        <br> your resume and apply to multiple jobs in seconds! <br>
                                        <strong class="color-text-2 font-weight-medium">Already have an account? <a href="login.php" class="color-text">Login</a></strong>
                                    </p>
                                </div><!-- billing-title-wrap -->
                                <div class="billing-content">
                                    <div class="contact-form-action">
                                        <form method="post">
                                            
                                            <div class="input-box">
                                                <label class="label-text">First name</label>
                                                <div class="form-group">
                                                    <i class="la la-user form-icon"></i>
                                                    <input class="form-control" type="text" name="text" placeholder="First name">
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
                                                <label class="label-text">Email me career-related Zobstar updates and job opportunities</label>
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
                                                    <span class="font-size-15">Zobstar will automatically email job postings that are relevant to you. You can unsubscribe on the Manage Saved Searches page or with the opt-out link in the email.</span>
                                                </div>
                                            </div><!-- input-box -->
                                            <div class="input-box">
                                                <div class="form-group">
                                                    <div class="custom-checkbox d-block mr-0">
                                                        <input type="checkbox" id="chb3">
                                                        <label for="chb3">I Agree to Zobstar's <a href="#" class="color-text">Privacy Policy</a> and <a href="#" class="color-text">Terms of Services</a></label>
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
require_once('main-footer.php')
?>
