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
                            <h2 class="sec__title line-height-45">Hi Rohit, Welcome back!</h2>
                        </div><!-- end section-heading -->
                        <ul class="list-items d-flex align-items-center">
                            <li class="active__list-item"><a href="<?= base_url ?>index.php">Home</a></li>
                            <li class="active__list-item">Candidates</li>
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
                                <i class="la la-briefcase"></i>
                            </div><!-- end icon-element-->
                            <div class="info-content">
                                <span class="info__count">5</span>
                                <h4 class="info__title font-size-16 mt-2">Total Job Applied</h4>
                            </div><!-- end info-content -->
                        </div>
                    </div>
                </div><!-- end col-lg-3 -->
                <div class="col-lg-3 column-lg-half responsive-column">
                    <div class="overview-item">
                        <div class="icon-box bg-2 mb-0 d-flex align-items-center">
                            <div class="icon-element flex-shrink-0">
                                <i class="la la-comment"></i>
                            </div><!-- end icon-element-->
                            <div class="info-content">
                                <span class="info__count">20</span>
                                <h4 class="info__title font-size-16 mt-2">Reviews</h4>
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
            <div class="row mt-2">
                <div class="col-lg-7 column-lg-full">
                    <div class="chart-box chart-item">
                        <div class="chart-headline d-flex align-items-center justify-content-between mb-4">
                            <h3 class="widget-title font-size-16 pb-0"><i class="font-size-20 la la-bar-chart mr-1"></i>Profile Views</h3>
                            <div class="user-chosen-select-container">
                                <select class="user-chosen-select">
                                    <option value="this-week">This Week</option>
                                    <option value="this-month">This Month</option>
                                    <option value="last-months">Last 6 Months</option>
                                    <option value="this-year">This Year</option>
                                </select>
                            </div><!-- end  -->
                        </div>
                        <canvas id="line-chart"></canvas>
                        <div class="chart-legend mt-4">
                            <ul>
                                <li><span class="legend__item legend__one"></span>Green</li>
                            </ul>
                        </div>
                    </div><!-- end chart-box -->
                </div><!-- end col-lg-7 -->
                <div class="col-lg-5 column-lg-full">
                    <div class="dashboard-shared">
                        <div class="mess-dropdown">
                            <div class="mess__title">
                                <img src="<?= image_path?>bg-title-2.jpg" alt="" class="img-fluid">
                                <div class="mess__title-inner p-4">
                                    <h4 class="widget-title font-size-16 d-flex align-items-center">
                                        <i class="font-size-20 la la-comment mr-1"></i> Messages
                                        <a href="#" class="text-white ml-auto font-size-12">Mark all as read</a>
                                    </h4>
                                </div>
                            </div><!-- end mess__title -->
                            <div class="mess__body" style="">
                                <a href="#" class="d-block">
                                    <div class="mess__item">
                                        <div class="avatar dot-status">
                                            <img src="<?= image_path?>small-team1.jpg" alt="Michelle Moreno">
                                        </div>
                                        <div class="content">
                                            <h4 class="widget-title">Michelle Moreno</h4>
                                            <p class="text">Thanks for reaching out. I'm quite busy right now on many</p>
                                            <span class="time">5 min ago</span>
                                        </div>
                                    </div><!-- end mess__item -->
                                </a>
                                <a href="#" class="d-block">
                                    <div class="mess__item">
                                        <div class="avatar dot-status online-status">
                                            <img src="<?= image_path?>small-team2.jpg" alt="Michelle Moreno">
                                        </div>
                                        <div class="content">
                                            <h4 class="widget-title">Alex Smith</h4>
                                            <p class="text">Thanks for reaching out. I'm quite busy right now on many</p>
                                            <span class="time">2 days ago</span>
                                        </div>
                                    </div><!-- end mess__item -->
                                </a>
                                <a href="#" class="d-block">
                                    <div class="mess__item">
                                        <div class="avatar dot-status">
                                            <img src="<?= image_path?>small-team1.jpg" alt="Michelle Moreno">
                                        </div>
                                        <div class="content">
                                            <h4 class="widget-title">Michelle Moreno</h4>
                                            <p class="text">Thanks for reaching out. I'm quite busy right now on many</p>
                                            <span class="time">5 min ago</span>
                                        </div>
                                    </div><!-- end mess__item -->
                                </a>
                                <a href="#" class="d-block">
                                    <div class="mess__item">
                                        <div class="avatar dot-status online-status">
                                            <img src="<?= image_path?>small-team2.jpg" alt="Michelle Moreno">
                                        </div>
                                        <div class="content">
                                            <h4 class="widget-title">Alex Smith</h4>
                                            <p class="text">Thanks for reaching out. I'm quite busy right now on many</p>
                                            <span class="time">2 days ago</span>
                                        </div>
                                    </div><!-- end mess__item -->
                                </a>
                                <a href="#" class="d-block">
                                    <div class="mess__item">
                                        <div class="avatar dot-status">
                                            <img src="<?= image_path?>small-team2.jpg" alt="Michelle Moreno">
                                        </div>
                                        <div class="content">
                                            <h4 class="widget-title">Alex Smith</h4>
                                            <p class="text">Thanks for reaching out. I'm quite busy right now on many</p>
                                            <span class="time">2 days ago</span>
                                        </div>
                                    </div><!-- end mess__item -->
                                </a>
                            </div><!-- end mess__body -->
                            <div class="mess__item border-bottom-0 text-center">
                                <button type="button" class="theme-btn border-0 w-100">Load More</button>
                            </div><!-- end mess__item -->
                        </div>
                    </div><!-- end dashboard-shared -->
                </div><!-- end col-lg-5 -->
            </div><!-- end row -->
            <div class="row margin-top-30px">
                <div class="col-lg-6">
                    <div class="dashboard-shared">
                        <div class="mess-dropdown">
                            <div class="mess__title">
                                <img src="<?= image_path?>bg-title-2.jpg" alt="" class="img-fluid">
                                <div class="mess__title-inner p-4">
                                    <h4 class="widget-title font-size-16 d-flex align-items-center">
                                        <i class="font-size-20 la la-bell mr-1"></i> Notifications
                                        <a href="#" class="text-white ml-auto font-size-12">Mark all as read</a>
                                    </h4>
                                    <p class="mt-1 text-white">You have 5 Notifications</p>
                                </div>
                            </div><!-- end mess__title -->
                            <div class="mess__body" style="">
                                <a href="#" class="d-block">
                                    <div class="mess__item">
                                        <div class="icon-element">
                                            <i class="la la-bolt"></i>
                                        </div>
                                        <div class="content">
                                            <p class="text">Your Resume Updated!</p>
                                            <span class="time">5 hours ago</span>
                                        </div>
                                    </div><!-- end mess__item -->
                                </a>
                                <a href="#" class="d-block">
                                    <div class="mess__item">
                                        <div class="icon-element">
                                            <i class="la la-lock"></i>
                                        </div>
                                        <div class="content">
                                            <p class="text">You changed password</p>
                                            <span class="time">2 day ago</span>
                                        </div>
                                    </div><!-- end mess__item -->
                                </a>
                                <a href="#" class="d-block">
                                    <div class="mess__item">
                                        <div class="icon-element">
                                            <i class="la la-check-circle"></i>
                                        </div>
                                        <div class="content">
                                            <p class="text">You applied for a job <span class="color-text">Front-end Developer</span></p>
                                            <span class="time">1 day ago</span>
                                        </div>
                                    </div><!-- end mess__item -->
                                </a>
                                <a href="#" class="d-block">
                                    <div class="mess__item">
                                        <div class="icon-element">
                                            <i class="la la-user"></i>
                                        </div>
                                        <div class="content">
                                            <p class="text">Your account has been created successfully</p>
                                            <span class="time">1 minute ago</span>
                                        </div>
                                    </div><!-- end mess__item -->
                                </a>
                                <a href="#" class="d-block">
                                    <div class="mess__item">
                                        <div class="icon-element">
                                            <i class="la la-download"></i>
                                        </div>
                                        <div class="content">
                                            <p class="text">Someone downloaded resume</p>
                                            <span class="time">Yesterday</span>
                                        </div>
                                    </div><!-- end mess__item -->
                                </a>
                            </div><!-- end mess__body -->
                            <div class="mess__item border-bottom-0 text-center">
                                <a href="#" class="theme-btn w-100">View All Notifications</a>
                            </div><!-- end mess__item -->
                        </div><!-- end mess-dropdown -->
                    </div><!-- end dashboard-shared -->
                </div><!-- end col-lg-6 -->
                <div class="col-lg-6">
                    <div class="dashboard-shared note-dashboard">
                        <div class="mess-dropdown">
                            <div class="mess__title">
                                <img src="<?= image_path?>bg-title-1.jpg" alt="" class="img-fluid">
                                <div class="mess__title-inner padding-top-30px pr-4 pl-4 pb-4">
                                    <h4 class="widget-title font-size-16 pb-0">
                                        <i class="font-size-20 la la-file-text-o mr-1"></i> Notes
                                    </h4>
                                </div>
                            </div><!-- end mess__title -->
                            <div class="timeline-body">
                                <div class="mess__body">
                                    <div class="mess__item">
                                        <div class="note-badge-wrap d-flex align-items-center justify-content-between">
                                            <span class="badge badge-primary note-badge note-badge-bg-2 p-2">High Priority</span>
                                            <ul class="info-list">
                                                <li class="d-inline-block"><a href="#" ><i class="la la-edit" data-toggle="tooltip" data-placement="top" title="Edit"></i></a></li>
                                                <li class="d-inline-block"><a href="#"><i class="la la-trash" data-toggle="tooltip" data-placement="top" title="Remove"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="content mt-2">
                                            <p class="line-height-24 font-size-13">Medecins du Monde Jane Addams reduce child
                                                mortality challenges Ford Foundation.Diversification shifting
                                                landscape advocate pathway to a better life rights international</p>
                                        </div>
                                    </div><!-- end mess__item -->
                                    <div class="mess__item">
                                        <div class="note-badge-wrap d-flex align-items-center justify-content-between">
                                            <span class="badge badge-success note-badge note-badge-bg-2 p-2">Low Priority</span>
                                            <ul class="info-list">
                                                <li class="d-inline-block"><a href="#" ><i class="la la-edit" data-toggle="tooltip" data-placement="top" title="Edit"></i></a></li>
                                                <li class="d-inline-block"><a href="#"><i class="la la-trash" data-toggle="tooltip" data-placement="top" title="Remove"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="content mt-2">
                                            <p class="line-height-24 font-size-13">Medecins du Monde Jane Addams reduce child
                                                mortality challenges Ford Foundation.Diversification shifting
                                                landscape advocate pathway to a better life rights international</p>
                                        </div>
                                    </div><!-- end mess__item -->
                                    <div class="mess__item">
                                        <div class="note-badge-wrap d-flex align-items-center justify-content-between">
                                            <span class="badge badge-warning text-white note-badge note-badge-bg-2 p-2">Medium Priority</span>
                                            <ul class="info-list">
                                                <li class="d-inline-block"><a href="#" ><i class="la la-edit" data-toggle="tooltip" data-placement="top" title="Edit"></i></a></li>
                                                <li class="d-inline-block"><a href="#"><i class="la la-trash" data-toggle="tooltip" data-placement="top" title="Remove"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="content mt-2">
                                            <p class="line-height-24 font-size-13">Medecins du Monde Jane Addams reduce child
                                                mortality challenges Ford Foundation.Diversification shifting
                                                landscape advocate pathway to a better life rights international</p>
                                        </div>
                                    </div><!-- end mess__item -->
                                </div><!-- end mess__body -->
                            </div>
                            <div class="mess__item border-bottom-0 text-center">
                                <button type="button" class="theme-btn border-0 w-100">Add Note</button>
                            </div><!-- end mess__item -->
                        </div><!-- end mess-dropdown -->
                    </div><!-- end dashboard-shared -->
                </div><!-- end col-lg-6 -->
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
