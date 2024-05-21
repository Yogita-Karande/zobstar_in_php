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
                            <h2 class="sec__title">CV & Cover Letter</h2>
                        </div><!-- end section-heading -->
                        <ul class="list-items d-flex align-items-center">
                            <li class="active__list-item"><a href="<?= base_url?>index.php">Home</a></li>
                            <li class="active__list-item">Dashboard</li>
                            <li>CV & Cover Letter</li>
                        </ul>
                    </div><!-- end breadcrumb-content -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="user-form-action">
                        <div class="billing-form-item section-bg shadow-none">
                            <div class="billing-content">
                                <div class="cv-profile-action-wrap">
                                    <h3 class="widget-title pb-0">Your CV</h3>
                                    <div class="title-shape margin-top-10px"></div>
                                    <div class="user-profile-action mt-4">
                                        <div class="file-upload-wrap file-upload-wrap-2">
                                            <input type="file" name="files[]" class="multi file-upload-input with-preview" multiple maxlength="1">
                                            <span class="file-upload-text"><i class="la la-photo mr-2"></i>Upload CV</span>
                                            <p>Max file size is 5MB, Suitable files are .doc, docx, rft, pdf & .pdf</p>
                                        </div>
                                    </div><!-- end user-profile-action -->
                                </div><!-- end cv-profile-action-wrap -->
                            </div><!-- end billing-content -->
                        </div>
                    </div><!-- end user-form-action -->
                </div><!-- end col-lg-12 -->
                <div class="col-lg-12">
                    <div class="user-form-action">
                        <div class="billing-form-item">
                            <div class="billing-title-wrap">
                                <h3 class="widget-title pb-0">Your Cover Letter</h3>
                                <div class="title-shape margin-top-10px"></div>
                            </div><!-- billing-title-wrap -->
                            <div class="billing-content pb-3">
                                <div class="contact-form-action">
                                    <form method="post">
                                        <div class="input-box">
                                            <label class="label-text">Bio</label>
                                            <div class="form-group">
                                                <textarea class="message-control form-control pt-3 pr-4 pb-3 pl-4">I spent several years working on sheep on Wall Street. I had moderate success investing in Yugos on Wall Street.</textarea>
                                            </div>
                                        </div>
                                    </form>
                                </div><!-- end contact-form-action -->
                            </div><!-- end billing-content -->
                        </div>
                    </div><!-- end user-form-action -->
                </div>
                <div class="col-lg-12">
                    <div class="btn-box">
                        <button class="theme-btn border-0" type="button">Update</button>
                    </div>
                </div>
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