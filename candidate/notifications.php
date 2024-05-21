<?php
require_once('../candidate-header.php')
?>

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
                            <h2 class="sec__title">Job Alerts</h2>
                        </div><!-- end section-heading -->
                        <ul class="list-items d-flex align-items-center">
                            <li class="active__list-item"><a href="<?= base_url ?>index.php">Home</a></li>
                            <li class="active__list-item"><a href="<?= base_url ?>index.php">Dashboard</a></li>
                            <li>Notifications</li>
                        </ul>
                    </div><!-- end breadcrumb-content -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="billing-form-item">
                        <div class="billing-title-wrap">
                            <h3 class="widget-title pb-0">Job Alerts</h3>
                            <div class="title-shape margin-top-10px"></div>
                        </div><!-- billing-title-wrap -->
                        <div class="billing-content pb-0">
                            <div class="manage-job-wrap">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Alert Details</th>
                                            <th>Email Frequency</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div class="manage-candidate-wrap">
                                                    <h2 class="widget-title pb-1 font-size-17">Director</h2>
                                                    <p class="font-size-14">
                                                        <span class="font-weight-medium">Search Keywords:</span>
                                                        temporary
                                                    </p>
                                                </div><!-- end manage-candidate-wrap -->
                                            </td>
                                            <td>Never</td>
                                            <td class="text-center">
                                                <div class="manage-candidate-wrap">
                                                    <div class="bread-action pt-0">
                                                        <ul class="info-list">
                                                            <li class="d-inline-block"><a href="#"><i class="la la-eye" data-toggle="tooltip" data-placement="top" title="View"></i></a></li>
                                                            <li class="d-inline-block"><a href="#"><i class="la la-trash" data-toggle="tooltip" data-placement="top" title="Remove"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="manage-candidate-wrap">
                                                    <h2 class="widget-title pb-1 font-size-17">Alert Official</h2>
                                                    <p class="font-size-14">
                                                        <span class="font-weight-medium">Search Keywords:</span>
                                                        full-time
                                                    </p>
                                                </div><!-- end manage-candidate-wrap -->
                                            </td>
                                            <td>Never</td>
                                            <td class="text-center">
                                                <div class="manage-candidate-wrap">
                                                    <div class="bread-action pt-0">
                                                        <ul class="info-list">
                                                            <li class="d-inline-block"><a href="#"><i class="la la-eye" data-toggle="tooltip" data-placement="top" title="View"></i></a></li>
                                                            <li class="d-inline-block"><a href="#"><i class="la la-trash" data-toggle="tooltip" data-placement="top" title="Remove"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="manage-candidate-wrap">
                                                    <h2 class="widget-title pb-1 font-size-17">My Job Alert</h2>
                                                    <p class="font-size-14">
                                                        <span class="font-weight-medium">Search Keywords:</span>
                                                        part-time
                                                    </p>
                                                </div><!-- end manage-candidate-wrap -->
                                            </td>
                                            <td>Never</td>
                                            <td class="text-center">
                                                <div class="manage-candidate-wrap">
                                                    <div class="bread-action pt-0">
                                                        <ul class="info-list">
                                                            <li class="d-inline-block"><a href="#"><i class="la la-eye" data-toggle="tooltip" data-placement="top" title="View"></i></a></li>
                                                            <li class="d-inline-block"><a href="#"><i class="la la-trash" data-toggle="tooltip" data-placement="top" title="Remove"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="manage-candidate-wrap">
                                                    <h2 class="widget-title pb-1 font-size-17">Database Alert</h2>
                                                    <p class="font-size-14">
                                                        <span class="font-weight-medium">Search Keywords:</span>
                                                        Freelancer
                                                    </p>
                                                </div><!-- end manage-candidate-wrap -->
                                            </td>
                                            <td>Never</td>
                                            <td class="text-center">
                                                <div class="manage-candidate-wrap">
                                                    <div class="bread-action pt-0">
                                                        <ul class="info-list">
                                                            <li class="d-inline-block"><a href="#"><i class="la la-eye" data-toggle="tooltip" data-placement="top" title="View"></i></a></li>
                                                            <li class="d-inline-block"><a href="#"><i class="la la-trash" data-toggle="tooltip" data-placement="top" title="Remove"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!-- end billing-content -->
                    </div><!-- end billing-form-item -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-navigation-wrap mt-4">
                        <div class="page-navigation mx-auto">
                            <a href="#" class="page-go page-prev">
                                <i class="la la-arrow-left"></i>
                            </a>
                            <ul class="page-navigation-nav">
                                <li><a href="#" class="page-go-link">1</a></li>
                                <li class="active"><a href="#" class="page-go-link">2</a></li>
                                <li><a href="#" class="page-go-link">3</a></li>
                                <li><a href="#" class="page-go-link">4</a></li>
                                <li><a href="#" class="page-go-link">5</a></li>
                            </ul>
                            <a href="#" class="page-go page-next">
                                <i class="la la-arrow-right"></i>
                            </a>
                        </div>
                    </div><!-- end page-navigation-wrap -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->

        </div><!-- end container-fluid -->
    </div>
</section><!-- end dashboard-area -->
<!-- ================================
    END DASHBOARD AREA
================================= -->

<!-- start back-to-top -->
<div id="back-to-top">
    <i class="la la-angle-up" title="Go top"></i>
</div>
<!-- end back-to-top -->

<div class="modal-form text-center">
    <div class="modal fade account-delete-modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content p-4">
                <div class="modal-top border-0 mb-4 p-0">
                    <div class="alert-content">
                        <span class="la la-exclamation-circle warning-icon"></span>
                        <h4 class="modal-title mt-2 mb-1">Your account will be deleted permanently!</h4>
                        <p class="modal-sub">Are you sure to proceed.</p>
                    </div>
                </div>
                <div class="btn-box">
                    <button type="button" class="theme-btn border-0" data-dismiss="modal">Cancel</button>
                    <button type="button" class="theme-btn border-0 button-danger">Delete!</button>
                </div>
            </div><!-- end modal-content -->
        </div><!-- end modal-dialog -->
    </div><!-- end modal -->
</div><!-- end modal-form -->

<?php
require_once('../js-files.php')
?>