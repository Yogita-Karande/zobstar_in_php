<?php
require_once('../employee-simple-header.php')
?>
<!-- ================================
    START DASHBOARD AREA
================================= -->
<?php
require_once('employee-dashboard-sidebar.php')
?>
<section class="dashboard-area">
    <div class="dashboard-content-wrap">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content d-flex flex-wrap justify-content-between align-items-center">
                        <div class="section-heading">
                            <h2 class="sec__title line-height-45">Welcome, Bluetech!</h2>
                        </div><!-- end section-heading -->
                        <ul class="list-items d-flex align-items-center">
                            <li class="active__list-item"><a href="<?= base_url?>index.php">Home</a></li>
                            <li class="active__list-item">Employers</li>
                            <li>Dashboard</li>
                        </ul>
                    </div><!-- end breadcrumb-content -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="row mt-5">
                <div class="col-lg-3 column-lg-half responsive-column">
                    <div class="overview-item">
                        <div class="icon-box bg-1 mb-0 d-flex align-items-center">
                            <div class="icon-element flex-shrink-0">
                                <i class="la la-cloud-upload"></i>
                            </div><!-- end icon-element-->
                            <div class="info-content">
                                <span class="info__count">11</span>
                                <h4 class="info__title font-size-16 mt-2">Total Job Posted</h4>
                            </div><!-- end info-content -->
                        </div>
                    </div>
                </div><!-- end col-lg-3 -->
                <div class="col-lg-3 column-lg-half responsive-column">
                    <div class="overview-item">
                        <div class="icon-box bg-2 mb-0 d-flex align-items-center">
                            <div class="icon-element flex-shrink-0">
                                <i class="la la-file-text-o"></i>
                            </div><!-- end icon-element-->
                            <div class="info-content">
                                <span class="info__count">121</span>
                                <h4 class="info__title font-size-16 mt-2">Application Submit</h4>
                            </div><!-- end info-content -->
                        </div>
                    </div>
                </div><!-- end col-lg-3 -->
                <div class="col-lg-3 column-lg-half responsive-column">
                    <div class="overview-item">
                        <div class="icon-box bg-3 mb-0 d-flex align-items-center">
                            <div class="icon-element flex-shrink-0">
                                <i class="la la-eye"></i>
                            </div><!-- end icon-element-->
                            <div class="info-content">
                                <span class="info__count">504</span>
                                <h4 class="info__title font-size-16 mt-2">This Month Views</h4>
                            </div><!-- end info-content -->
                        </div>
                    </div>
                </div><!-- end col-lg-3 -->
                <div class="col-lg-3 column-lg-half responsive-column">
                    <div class="overview-item">
                        <div class="icon-box bg-4 mb-0 d-flex align-items-center">
                            <div class="icon-element flex-shrink-0">
                                <i class="la la-phone"></i>
                            </div><!-- end icon-element-->
                            <div class="info-content">
                                <span class="info__count">10</span>
                                <h4 class="info__title font-size-16 mt-2">Call for interview</h4>
                            </div><!-- end info-content -->
                        </div>
                    </div>
                </div><!-- end col-lg-3 -->
            </div><!-- end row -->                        
        </div><!-- end container-fluid -->
    </div>
</section><!-- end dashboard-area -->
<!-- ================================
    END DASHBOARD AREA
================================= -->

<?php
require_once('../js-files.php');
?>

