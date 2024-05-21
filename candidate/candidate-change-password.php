<?php
require_once('../candidate-header.php')
?>
<!-- ================================
    START DASHBOARD AREA
================================= -->
<?php
require_once('dashboard-sidebar.php')
?>
<section class="dashboard-area">
    <div class="dashboard-content-wrap">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content d-flex flex-wrap justify-content-between align-items-center">
                        <div class="section-heading">
                            <h2 class="sec__title">Change Password</h2>
                        </div><!-- end section-heading -->
                        <ul class="list-items d-flex align-items-center">
                            <li class="active__list-item"><a href="<?= base_url?>index.php">Home</a></li>
                            <li class="active__list-item">Dashboard</li>
                            <li>Change Password</li>
                        </ul>
                    </div><!-- end breadcrumb-content -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="user-form-action">
                        <div class="billing-form-item">
                            <div class="billing-title-wrap">
                                <h3 class="widget-title pb-0">Change Password</h3>
                                <div class="title-shape margin-top-10px"></div>
                            </div><!-- billing-title-wrap -->
                            <div class="billing-content">
                                <div class="contact-form-action">
                                    <form method="post">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="input-box">
                                                    <label class="label-text">Current Password</label>
                                                    <div class="form-group">
                                                        <span class="la la-lock form-icon"></span>
                                                        <input class="form-control" type="text" name="text" placeholder="Current password">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-4 -->
                                            <div class="col-lg-4">
                                                <div class="input-box">
                                                    <label class="label-text">New Password</label>
                                                    <div class="form-group">
                                                        <span class="la la-lock form-icon"></span>
                                                        <input class="form-control" type="text" name="text" placeholder="New password">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-4 -->
                                            <div class="col-lg-4">
                                                <div class="input-box">
                                                    <label class="label-text">Repeat New Password</label>
                                                    <div class="form-group">
                                                        <span class="la la-lock form-icon"></span>
                                                        <input class="form-control" type="text" name="text" placeholder="Repeat new password">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-4 -->
                                            <div class="col-lg-12">
                                                <div class="btn-box">
                                                    <button class="theme-btn border-0">Updated Password</button>
                                                </div>
                                            </div><!-- end col-lg-12 -->
                                        </div><!-- end row -->
                                    </form>
                                </div><!-- end contact-form-action -->
                            </div><!-- end billing-content -->
                        </div>
                    </div><!-- end user-form-action -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container-fluid -->
    </div>
</section><!-- end dashboard-area -->
<!-- ================================
    END DASHBOARD AREA
================================= -->


<?php
require_once('../js-files.php')
?>