<!-- ================================
    START DASHBOARD AREA
================================= -->
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
                    <li><a href="<?= base_url ?>candidate/candidate-dashboard.php"><i class="la la-dashboard icon-element"></i> Dashboard</a></li>
                    <!-- <li><a href="<?= base_url ?>candidate/candidate-message.php"><i class="la la-envelope icon-element"></i> Messages <span class="badge badge-info radius-rounded p-1">3</span></a></li> -->
                    <!-- <li><a href="candidate-dashboard-bookmark.html"><i class="la la-bookmark icon-element"></i> Bookmarks</a></li> -->
                    <li class="page-active">
                        <a href="#"><i class="la la-bell-o icon-element"></i>jobs <span class="la la-caret-down btn-toggle"></span></a>
                        <ul class="dropdown-menu-item">
                            <li><a href="<?= base_url ?>candidate/candidate-applied-jobs.php"> Applied Jobs</a></li>
                            <!-- <li><a href="<?= base_url ?>candidate/notifications.php">Notification</a></li> -->
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="la la-cog icon-element"></i>Settings <span class="la la-caret-down btn-toggle"></span></a>
                        <ul class="dropdown-menu-item">
                            <li><a href="<?= base_url ?>candidate/candidate-edit-profile.php">Edit Profile</a></li>
                            <li><a href="<?= base_url ?>candidate/candidate-change-password.php">Change Password</a></li>
                        </ul>
                    </li>
                    <!-- <li><a href="candidate-dashboard-employer-following.html"><i class="la la-user-plus icon-element"></i> Following Employer</a></li> -->
                    <li>
                        <a href="<?= base_url ?>my-resume.php"><i class="la la-file-text icon-element"></i> Resume <span class="la la-caret-down btn-toggle"></span></a>
                        <ul class="dropdown-menu-item">
                            <li><a href="<?= base_url ?>candidate/add-resume.php">Add Resume</a></li>
                            <li><a href="<?= base_url ?>candidate/my-resume.php">Education</a></li>
                            <li><a href="<?= base_url ?>candidate/my-resume.php">Experience</a></li>
                            <li><a href="<?= base_url ?>candidate/my-resume.php">Skills</a></li>
                            <li><a href="<?= base_url ?>candidate/my-resume.php">Video</a></li>
                        </ul>
                    </li>
                    <li>
                        <div class="section-block mt-3 mb-3"></div>
                    </li>
                    <li><a href="<?= base_url ?>candidate/candidate-profile.php"><i class="la la-user icon-element"></i> View Profile</a></li>
                    <li><a href="<?= base_url ?>index.php"><i class="la la-power-off icon-element"></i> Logout</a></li>
                    <li><a href="javascript:void(0)" data-toggle="modal" data-target=".account-delete-modal"><i class="la la-trash icon-element"></i> Delete Account</a></li>
                </ul>
            </div><!-- end side-menu-wrap -->
            <div class="skillbar-wrap mt-4">
                <h3 class="widget-title font-size-16">Skill Percentage</h3>
                <div class="skillbar" data-percent="85%">
                    <div class="skill-item"><span>85%</span></div>
                </div>
                <p>You're almost done set "Cover Image" field to increase your skill up to "15%"</p>
            </div>
        </div>
    </div><!-- end dashboard-sidebar -->
</section>
<!-- ================================
    END DASHBOARD AREA
================================= -->