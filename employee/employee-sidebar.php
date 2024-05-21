
<section class="dashboard-area">
    <div class="dashboard-sidebar">
        <div class="dashboard-nav-trigger">
            <div class="dashboard-nav-trigger-btn">
                <i class="la la-bars"></i> Dashboard Navigation
            </div>
        </div>
        <div class="dashboard-nav-container">
            <div class="humburger-menu">
                <div class="humburger-menu-lines side-menu-close"></div><!-- end humburger-menu-lines -->
            </div><!-- end humburger-menu -->
            <div class="side-menu-wrap">
                <ul class="side-menu-ul">
                    <li><a href="<?= base_url?>employee/employer-dashboard.php"><i class="la la-dashboard icon-element"></i> Dashboard</a></li>       
                    <li><a href="<?= base_url?>employee/employer-notification.php"><i class="la la-bell-o icon-element"></i>Job Alerts</a></li>
                    <li>
                        <a href="#"><i class="la la-gear icon-element"></i> Settings <span class="la la-caret-down btn-toggle"></span></a>
                        <ul class="dropdown-menu-item">
                            <li><a href="<?= base_url?>employee/employer-edit-profile.php">Edit Profile</a></li>
                            <li><a href="<?= base_url?>employee/change-password.php">Change Password</a></li>
                        </ul>
                    </li>
                    <li class="page-active">
                        <a href="#"><i class="la la-briefcase icon-element"></i> Jobs <span class="la la-caret-down btn-toggle"></span></a>
                        <ul class="dropdown-menu-item">
                            <li><a href="<?= base_url?>employee/employer-manage-job.php">Manage Jobs</a></li>
                            <li><a href="<?= base_url?>employee/manage-candidate.php">Manage Candidates</a></li>
                            <li><a href="<?= base_url?>employee/employer-post-job.php">Post New Job</a></li>
                        </ul>
                    </li>
                    <li><div class="section-block margin-top-30px mb-3"></div></li>
                    <li><a href="<?= base_url?>employee/employer-profile.php"><i class="la la-user icon-element"></i> View Profile</a></li>
                    <li><a href="<?= base_url?>index.php"><i class="la la-power-off icon-element"></i> Logout</a></li>
                </ul>
            </div><!-- end side-menu-wrap -->
        </div>
    </div><!-- end dashboard-sidebar -->
</section> 
