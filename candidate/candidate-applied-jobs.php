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
                            <h2 class="sec__title">Applied Jobs</h2>
                        </div><!-- end section-heading -->
                        <ul class="list-items d-flex align-items-center">
                            <li class="active__list-item"><a href="<?= base_url ?>index.php">Home</a></li>
                            <li class="active__list-item"><a href="<?= base_url ?>candidate/candidate-dashboard.php">Dashboard</a></li>
                            <li>Applied Jobs</li>
                        </ul>
                    </div><!-- end breadcrumb-content -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="billing-form-item">
                        <div class="billing-title-wrap">
                            <h3 class="widget-title pb-0">My Applied Jobs</h3>
                            <div class="title-shape margin-top-10px"></div>
                        </div><!-- billing-title-wrap -->
                        <div class="billing-content pb-0">
                            <div class="manage-job-wrap">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Job Title</th>
                                            <th>Date Applied</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div class="manage-candidate-wrap">
                                                    <h2 class="widget-title pb-1"><a href="<?= base_url ?>job-details.php" class="color-text-2">Land Development Marketer</a></h2>
                                                    <p class="mb-2">
                                                        <span><i class="la la-map-marker font-size-16"></i> Manhattan, NYC</span>
                                                    </p>
                                                </div><!-- end manage-candidate-wrap -->
                                            </td>
                                            <td>10 April, 2019</td>
                                            <td class="text-center">
                                                <div class="manage-candidate-wrap">
                                                    <div class="bread-action pt-0">
                                                        <ul class="info-list">
                                                            <li class="d-inline-block"><a href="<?= base_url ?>job-details.php" ><i class="la la-eye" data-toggle="tooltip" data-placement="top" title="View"></i></a></li>
                                                            <li class="d-inline-block"><a href="#"><i class="la la-trash" data-toggle="tooltip" data-placement="top" title="Remove"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="manage-candidate-wrap">
                                                    <h2 class="widget-title pb-1"><a href="<?= base_url ?>job-details.php" class="color-text-2">Restaurant Team Member - Crew</a></h2>
                                                    <p class="mb-2">
                                                        <span><i class="la la-map-marker font-size-16"></i> Manhattan, NYC</span>
                                                    </p>

                                                </div><!-- end manage-candidate-wrap -->
                                            </td>
                                            <td>10 Jun, 2019</td>
                                            <td class="text-center">
                                                <div class="manage-candidate-wrap">
                                                    <div class="bread-action pt-0">
                                                        <ul class="info-list">
                                                            <li class="d-inline-block"><a href="<?= base_url ?>job-details.php" ><i class="la la-eye" data-toggle="tooltip" data-placement="top" title="View"></i></a></li>
                                                            <li class="d-inline-block"><a href="#"><i class="la la-trash" data-toggle="tooltip" data-placement="top" title="Remove"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="manage-candidate-wrap">
                                                    <h2 class="widget-title pb-1"><a href="<?= base_url ?>job-details.php" class="color-text-2">Land Development Marketer</a></h2>
                                                    <p class="mb-2">
                                                        <span><i class="la la-map-marker font-size-16"></i> Manhattan, NYC</span>
                                                    </p>
                                                </div><!-- end manage-candidate-wrap -->
                                            </td>
                                            <td>10 July, 2019</td>
                                            <td class="text-center">
                                                <div class="manage-candidate-wrap">
                                                    <div class="bread-action pt-0">
                                                        <ul class="info-list">
                                                            <li class="d-inline-block"><a href="<?= base_url ?>job-details.php" ><i class="la la-eye" data-toggle="tooltip" data-placement="top" title="View"></i></a></li>
                                                            <li class="d-inline-block"><a href="#"><i class="la la-trash" data-toggle="tooltip" data-placement="top" title="Remove"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="manage-candidate-wrap">
                                                    <h2 class="widget-title pb-1"><a href="<?= base_url ?>job-details.php" class="color-text-2">Node.js Developer UNIX</a></h2>
                                                    <p class="mb-2">
                                                        <span><i class="la la-map-marker font-size-16"></i> Manhattan, NYC</span>
                                                    </p>
                                                </div><!-- end manage-candidate-wrap -->
                                            </td>
                                            <td>12 Dec, 2019</td>
                                            <td class="text-center">
                                                <div class="manage-candidate-wrap">
                                                    <div class="bread-action pt-0">
                                                        <ul class="info-list">
                                                            <li class="d-inline-block"><a href="<?= base_url ?>job-details.php" ><i class="la la-eye" data-toggle="tooltip" data-placement="top" title="View"></i></a></li>
                                                            <li class="d-inline-block"><a href="#"><i class="la la-trash" data-toggle="tooltip" data-placement="top" title="Remove"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="manage-candidate-wrap">
                                                    <h2 class="widget-title pb-1"><a href="<?= base_url ?>job-details.php" class="color-text-2">Graduate Inside Sales Executive</a></h2>
                                                    <p class="mb-2">
                                                        <span><i class="la la-map-marker font-size-16"></i> Manhattan, NYC</span>
                                                    </p>
                                                </div><!-- end manage-candidate-wrap -->
                                            </td>
                                            <td>15 Jan, 2020</td>
                                            <td class="text-center">
                                                <div class="manage-candidate-wrap">
                                                    <div class="bread-action pt-0">
                                                        <ul class="info-list">
                                                            <li class="d-inline-block"><a href="<?= base_url ?>job-details.php" ><i class="la la-eye" data-toggle="tooltip" data-placement="top" title="View"></i></a></li>
                                                            <li class="d-inline-block"><a href="#"><i class="la la-trash" data-toggle="tooltip" data-placement="top" title="Remove"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="manage-candidate-wrap">
                                                    <h2 class="widget-title pb-1"><a href="<?= base_url ?>job-details.php" class="color-text-2">C++ Developer at keentech</a></h2>
                                                    <p class="mb-2">
                                                        <span><i class="la la-map-marker font-size-16"></i> Manhattan, NYC</span>
                                                    </p>
                                                </div><!-- end manage-candidate-wrap -->
                                            </td>
                                            <td>24 Jan, 2020</td>
                                            <td class="text-center">
                                                <div class="manage-candidate-wrap">
                                                    <div class="bread-action pt-0">
                                                        <ul class="info-list">
                                                            <li class="d-inline-block"><a href="<?= base_url ?>job-details.php" ><i class="la la-eye" data-toggle="tooltip" data-placement="top" title="View"></i></a></li>
                                                            <li class="d-inline-block"><a href="#"><i class="la la-trash" data-toggle="tooltip" data-placement="top" title="Remove"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="manage-candidate-wrap">
                                                    <h2 class="widget-title pb-1"><a href="<?= base_url ?>job-details.php" class="color-text-2">C Developer .Net Software House</a></h2>
                                                    <p class="mb-2">
                                                        <span><i class="la la-map-marker font-size-16"></i> Manhattan, NYC</span>
                                                    </p>
                                                </div><!-- end manage-candidate-wrap -->
                                            </td>
                                            <td>16 Dec, 2020</td>
                                            <td class="text-center">
                                                <div class="manage-candidate-wrap">
                                                    <div class="bread-action pt-0">
                                                        <ul class="info-list">
                                                            <li class="d-inline-block"><a href="<?= base_url ?>candidate/job-details.php" ><i class="la la-eye" data-toggle="tooltip" data-placement="top" title="View"></i></a></li>
                                                            <li class="d-inline-block"><a href="#"><i class="la la-trash" data-toggle="tooltip" data-placement="top" title="Remove"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="manage-candidate-wrap">
                                                    <h2 class="widget-title pb-1"><a href="<?= base_url ?>job-details.php" class="color-text-2">Senior Statistics Executive Officer</a></h2>
                                                    <p class="mb-2">
                                                        <span><i class="la la-map-marker font-size-16"></i> Manhattan, NYC</span>
                                                    </p>
                                                </div><!-- end manage-candidate-wrap -->
                                            </td>
                                            <td>10 Jan, 2020</td>
                                            <td class="text-center">
                                                <div class="manage-candidate-wrap">
                                                    <div class="bread-action pt-0">
                                                        <ul class="info-list">
                                                            <li class="d-inline-block"><a href="<?= base_url ?>job-details.php" ><i class="la la-eye" data-toggle="tooltip" data-placement="top" title="View"></i></a></li>
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

<?php
require_once('../js-files.php')
?>