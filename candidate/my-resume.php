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
                            <h2 class="sec__title"> My Resume</h2>
                        </div><!-- end section-heading -->
                        <ul class="list-items d-flex align-items-center">
                            <li class="active__list-item"><a href="<?= base_url?>index.php">Home</a></li>
                            <li class="active__list-item"><a href="<?= base_url?>candidate/candidate-dashboard.php">Dashboard</a></li>
                            <li>My Resume</li>
                        </ul>
                    </div><!-- end breadcrumb-content -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="billing-form-item" id="education">
                        <div class="billing-title-wrap">
                            <h3 class="widget-title pb-0">Education</h3>
                            <div class="title-shape margin-top-10px"></div>
                        </div><!-- billing-title-wrap -->
                        <div class="billing-content">
                            <div class="manage-job-wrap my-resume-wrap">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Qualification</th>
                                            <th>Dates</th>
                                            <th>School / Colleges</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div class="manage-candidate-wrap">
                                                    <h2 class="widget-title pb-1 font-size-15"><a href="#" class="color-text-2">Masters In Fine Arts</a></h2>
                                                </div><!-- end manage-candidate-wrap -->
                                            </td>
                                            <td class="font-weight-medium">2000 - 2002</td>
                                            <td class="font-weight-medium">Boston University</td>
                                            <td class="text-center">
                                                <div class="manage-candidate-wrap">
                                                    <div class="bread-action pt-0">
                                                        <ul class="info-list">
                                                            <li class="d-inline-block"><a href="#"><i class="la la-edit" data-toggle="tooltip" data-placement="top" title="Edit"></i></a></li>
                                                            <li class="d-inline-block"><a href="#"><i class="la la-trash" data-toggle="tooltip" data-placement="top" title="Remove"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="manage-candidate-wrap">
                                                    <h2 class="widget-title pb-1 font-size-15"><a href="#" class="color-text-2">Masters in Fine Arts</a></h2>
                                                </div><!-- end manage-candidate-wrap -->
                                            </td>
                                            <td class="font-weight-medium">2004 - 2007</td>
                                            <td class="font-weight-medium">Bachelors in Fine Arts</td>
                                            <td class="text-center">
                                                <div class="manage-candidate-wrap">
                                                    <div class="bread-action pt-0">
                                                        <ul class="info-list">
                                                            <li class="d-inline-block"><a href="#"><i class="la la-edit" data-toggle="tooltip" data-placement="top" title="Edit"></i></a></li>
                                                            <li class="d-inline-block"><a href="#"><i class="la la-trash" data-toggle="tooltip" data-placement="top" title="Remove"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="manage-candidate-wrap">
                                                    <h2 class="widget-title pb-1 font-size-15"><a href="#" class="color-text-2">Master in computer science</a></h2>
                                                </div><!-- end manage-candidate-wrap -->
                                            </td>
                                            <td class="font-weight-medium">2008 - 2010</td>
                                            <td class="font-weight-medium">Walters University</td>
                                            <td class="text-center">
                                                <div class="manage-candidate-wrap">
                                                    <div class="bread-action pt-0">
                                                        <ul class="info-list">
                                                            <li class="d-inline-block"><a href="#"><i class="la la-edit" data-toggle="tooltip" data-placement="top" title="Edit"></i></a></li>
                                                            <li class="d-inline-block"><a href="#"><i class="la la-trash" data-toggle="tooltip" data-placement="top" title="Remove"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="manage-candidate-wrap">
                                                    <h2 class="widget-title pb-1 font-size-15"><a href="#" class="color-text-2">Tommers College</a></h2>
                                                </div><!-- end manage-candidate-wrap -->
                                            </td>
                                            <td class="font-weight-medium">2010 - 2012</td>
                                            <td class="font-weight-medium">Imperieal Institute of Art Direction</td>
                                            <td class="text-center">
                                                <div class="manage-candidate-wrap">
                                                    <div class="bread-action pt-0">
                                                        <ul class="info-list">
                                                            <li class="d-inline-block"><a href="#"><i class="la la-edit" data-toggle="tooltip" data-placement="top" title="Edit"></i></a></li>
                                                            <li class="d-inline-block"><a href="#"><i class="la la-trash" data-toggle="tooltip" data-placement="top" title="Remove"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="btn-box margin-top-35px">
                                    <button class="theme-btn border-0 line-height-40 btn-light add-more-btn" type="button"><i class="la la-plus"></i> Add New Item</button>
                                </div>
                            </div>
                        </div><!-- end billing-content -->
                    </div><!-- end billing-form-item -->
                </div><!-- end col-lg-12 -->
                <div class="col-lg-12">
                    <div class="billing-form-item" id="experience">
                        <div class="billing-title-wrap">
                            <h3 class="widget-title pb-0">Experience</h3>
                            <div class="title-shape margin-top-10px"></div>
                        </div><!-- billing-title-wrap -->
                        <div class="billing-content">
                            <div class="manage-job-wrap my-resume-wrap">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Skills</th>
                                            <th>Dates</th>
                                            <th>Company</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div class="manage-candidate-wrap">
                                                    <h2 class="widget-title pb-1 font-size-15"><a href="#" class="color-text-2">Development Manager</a></h2>
                                                </div><!-- end manage-candidate-wrap -->
                                            </td>
                                            <td class="font-weight-medium">2009 - 2010</td>
                                            <td class="font-weight-medium">Bluetech, Inc</td>
                                            <td class="text-center">
                                                <div class="manage-candidate-wrap">
                                                    <div class="bread-action pt-0">
                                                        <ul class="info-list">
                                                            <li class="d-inline-block"><a href="#"><i class="la la-edit" data-toggle="tooltip" data-placement="top" title="Edit"></i></a></li>
                                                            <li class="d-inline-block"><a href="#"><i class="la la-trash" data-toggle="tooltip" data-placement="top" title="Remove"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="manage-candidate-wrap">
                                                    <h2 class="widget-title pb-1 font-size-15"><a href="#" class="color-text-2">Senior PHP Developer</a></h2>
                                                </div><!-- end manage-candidate-wrap -->
                                            </td>
                                            <td class="font-weight-medium">2005 - 2008</td>
                                            <td class="font-weight-medium">Amazon, Inc</td>
                                            <td class="text-center">
                                                <div class="manage-candidate-wrap">
                                                    <div class="bread-action pt-0">
                                                        <ul class="info-list">
                                                            <li class="d-inline-block"><a href="#"><i class="la la-edit" data-toggle="tooltip" data-placement="top" title="Edit"></i></a></li>
                                                            <li class="d-inline-block"><a href="#"><i class="la la-trash" data-toggle="tooltip" data-placement="top" title="Remove"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="manage-candidate-wrap">
                                                    <h2 class="widget-title pb-1 font-size-15"><a href="#" class="color-text-2">Self Employed Professional</a></h2>
                                                </div><!-- end manage-candidate-wrap -->
                                            </td>
                                            <td class="font-weight-medium">2003 - 2004</td>
                                            <td class="font-weight-medium">Apple, Inc</td>
                                            <td class="text-center">
                                                <div class="manage-candidate-wrap">
                                                    <div class="bread-action pt-0">
                                                        <ul class="info-list">
                                                            <li class="d-inline-block"><a href="#"><i class="la la-edit" data-toggle="tooltip" data-placement="top" title="Edit"></i></a></li>
                                                            <li class="d-inline-block"><a href="#"><i class="la la-trash" data-toggle="tooltip" data-placement="top" title="Remove"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="btn-box margin-top-35px">
                                    <button class="theme-btn border-0 line-height-40 btn-light add-more-btn" type="button"><i class="la la-plus"></i> Add New Item</button>
                                </div>
                            </div>
                        </div><!-- end billing-content -->
                    </div><!-- end billing-form-item -->
                </div><!-- end col-lg-12 -->
                <div class="col-lg-12">
                    <div class="billing-form-item" id="skills">
                        <div class="billing-title-wrap">
                            <h3 class="widget-title pb-0">Skills</h3>
                            <div class="title-shape margin-top-10px"></div>
                        </div><!-- billing-title-wrap -->
                        <div class="billing-content">
                            <div class="manage-job-wrap my-resume-wrap">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Skill Or Expertise</th>
                                            <th>Level</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div class="manage-candidate-wrap">
                                                    <h2 class="widget-title pb-1 font-size-15"><a href="#" class="color-text-2">Photoshop</a></h2>
                                                </div><!-- end manage-candidate-wrap -->
                                            </td>
                                            <td class="font-weight-medium">90%</td>
                                            <td class="text-center">
                                                <div class="manage-candidate-wrap">
                                                    <div class="bread-action pt-0">
                                                        <ul class="info-list">
                                                            <li class="d-inline-block"><a href="#"><i class="la la-edit" data-toggle="tooltip" data-placement="top" title="Edit"></i></a></li>
                                                            <li class="d-inline-block"><a href="#"><i class="la la-trash" data-toggle="tooltip" data-placement="top" title="Remove"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="manage-candidate-wrap">
                                                    <h2 class="widget-title pb-1 font-size-15"><a href="#" class="color-text-2">HTML/CSS</a></h2>
                                                </div><!-- end manage-candidate-wrap -->
                                            </td>
                                            <td class="font-weight-medium">70%</td>
                                            <td class="text-center">
                                                <div class="manage-candidate-wrap">
                                                    <div class="bread-action pt-0">
                                                        <ul class="info-list">
                                                            <li class="d-inline-block"><a href="#"><i class="la la-edit" data-toggle="tooltip" data-placement="top" title="Edit"></i></a></li>
                                                            <li class="d-inline-block"><a href="#"><i class="la la-trash" data-toggle="tooltip" data-placement="top" title="Remove"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="manage-candidate-wrap">
                                                    <h2 class="widget-title pb-1 font-size-15"><a href="#" class="color-text-2">JavaScript</a></h2>
                                                </div><!-- end manage-candidate-wrap -->
                                            </td>
                                            <td class="font-weight-medium">60%</td>
                                            <td class="text-center">
                                                <div class="manage-candidate-wrap">
                                                    <div class="bread-action pt-0">
                                                        <ul class="info-list">
                                                            <li class="d-inline-block"><a href="#"><i class="la la-edit" data-toggle="tooltip" data-placement="top" title="Edit"></i></a></li>
                                                            <li class="d-inline-block"><a href="#"><i class="la la-trash" data-toggle="tooltip" data-placement="top" title="Remove"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="manage-candidate-wrap">
                                                    <h2 class="widget-title pb-1 font-size-15"><a href="#" class="color-text-2">PHP</a></h2>
                                                </div><!-- end manage-candidate-wrap -->
                                            </td>
                                            <td class="font-weight-medium">50%</td>
                                            <td class="text-center">
                                                <div class="manage-candidate-wrap">
                                                    <div class="bread-action pt-0">
                                                        <ul class="info-list">
                                                            <li class="d-inline-block"><a href="#"><i class="la la-edit" data-toggle="tooltip" data-placement="top" title="Edit"></i></a></li>
                                                            <li class="d-inline-block"><a href="#"><i class="la la-trash" data-toggle="tooltip" data-placement="top" title="Remove"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="btn-box margin-top-35px">
                                    <button class="theme-btn border-0 line-height-40 btn-light add-more-btn" type="button"><i class="la la-plus"></i> Add New Item</button>
                                </div>
                            </div>
                        </div><!-- end billing-content -->
                    </div><!-- end billing-form-item -->
                </div><!-- end col-lg-12 -->
                <div class="col-lg-12">
                    <div class="billing-form-item" id="video">
                        <div class="billing-title-wrap">
                            <h3 class="widget-title pb-0">Video</h3>
                            <div class="title-shape margin-top-10px"></div>
                        </div><!-- billing-title-wrap -->
                        <div class="billing-content">
                            <div class="manage-job-wrap my-resume-wrap">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Platform </th>
                                            <th class="text-center">Video link</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="manage-candidate-wrap pt-3">
                                                        <h2 class="widget-title pb-1 font-size-15"><a href="#" class="color-text-2">Youtube</a></h2>
                                                    </div><!-- end manage-candidate-wrap -->
                                                </td>
                                                <td class="font-weight-medium">
                                                    <div class="contact-form-action">
                                                        <form method="post">
                                                            <div class="input-box">
                                                                <div class="form-group mb-2">
                                                                    <span class="la la-youtube form-icon"></span>
                                                                    <input class="form-control" type="text" name="text" placeholder="https://www.youtube.com/">
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div><!-- end contact-form-action -->
                                                </td>
                                                <td class="text-center">
                                                    <div class="manage-candidate-wrap">
                                                        <div class="bread-action pt-2">
                                                            <ul class="info-list">
                                                                <li class="d-inline-block"><a href="#"><i class="la la-edit" data-toggle="tooltip" data-placement="top" title="Edit"></i></a></li>
                                                                <li class="d-inline-block"><a href="#"><i class="la la-trash" data-toggle="tooltip" data-placement="top" title="Remove"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="manage-candidate-wrap pt-3">
                                                        <h2 class="widget-title pb-1 font-size-15"><a href="#" class="color-text-2">Vimeo</a></h2>
                                                    </div><!-- end manage-candidate-wrap -->
                                                </td>
                                                <td class="font-weight-medium">
                                                    <div class="contact-form-action">
                                                        <form method="post">
                                                            <div class="input-box">
                                                                <div class="form-group mb-2">
                                                                    <span class="la la-vimeo form-icon"></span>
                                                                    <input class="form-control" type="text" name="text" placeholder="https://vimeo.com/">
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div><!-- end contact-form-action -->
                                                </td>
                                                <td class="text-center">
                                                    <div class="manage-candidate-wrap">
                                                        <div class="bread-action pt-2">
                                                            <ul class="info-list">
                                                                <li class="d-inline-block"><a href="#"><i class="la la-edit" data-toggle="tooltip" data-placement="top" title="Edit"></i></a></li>
                                                                <li class="d-inline-block"><a href="#"><i class="la la-trash" data-toggle="tooltip" data-placement="top" title="Remove"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="manage-candidate-wrap pt-3">
                                                        <h2 class="widget-title pb-1 font-size-15"><a href="#" class="color-text-2">Dailymotion</a></h2>
                                                    </div><!-- end manage-candidate-wrap -->
                                                </td>
                                                <td class="font-weight-medium">
                                                    <div class="contact-form-action">
                                                        <form method="post">
                                                            <div class="input-box">
                                                                <div class="form-group mb-2">
                                                                    <span class="la la-video form-icon"></span>
                                                                    <input class="form-control" type="text" name="text" placeholder="https://www.dailymotion.com/">
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div><!-- end contact-form-action -->
                                                </td>
                                                <td class="text-center">
                                                    <div class="manage-candidate-wrap">
                                                        <div class="bread-action pt-2">
                                                            <ul class="info-list">
                                                                <li class="d-inline-block"><a href="#"><i class="la la-edit" data-toggle="tooltip" data-placement="top" title="Edit"></i></a></li>
                                                                <li class="d-inline-block"><a href="#"><i class="la la-trash" data-toggle="tooltip" data-placement="top" title="Remove"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="btn-box margin-top-35px">
                                    <button class="theme-btn border-0 line-height-40 btn-light add-more-btn" type="button"><i class="la la-plus"></i> Add New Item</button>
                                </div>
                            </div>
                        </div><!-- end billing-content -->
                    </div><!-- end billing-form-item -->
                </div><!-- end col-lg-12 -->
                <div class="col-lg-12">
                    <div class="btn-box">
                        <button class="theme-btn border-0" type="button">Update Profile</button>
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