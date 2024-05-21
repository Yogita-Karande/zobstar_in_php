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
                            <h2 class="sec__title">Edit Profile</h2>
                        </div><!-- end section-heading -->
                        <ul class="list-items d-flex align-items-center">
                            <li class="active__list-item"><a href="<?= base_url?>index.php">Home</a></li>
                            <li class="active__list-item">Dashboard</li>
                            <li>Edit Profile</li>
                        </ul>
                    </div><!-- end breadcrumb-content -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="user-profile-action-wrap mb-5">
                        <div class="user-profile-action mb-4 d-flex align-items-center">
                            <div class="user-pro-img">
                                <img src="<?= image_path?>team1.jpg" alt="user-image" class="img-fluid radius-round">
                            </div>
                            <div class="user-upload-img-wrap">
                                <div class="file-upload-wrap file-upload-wrap-2">
                                    <input type="file" name="files[]" class="multi file-upload-input with-preview" multiple maxlength="1">
                                    <span class="file-upload-text"><i class="la la-photo mr-2"></i>Upload Photo</span>
                                    <p>Max file size is 5MB, Minimum dimension: 200x200 And Suitable files are .jpg & .png</p>
                                </div>
                                <a href="#" class="theme-btn mt-3">Remove Photo</a>
                            </div>
                        </div><!-- end user-profile-action -->
                        <div class="user-profile-action d-flex align-items-center">
                            <div class="user-pro-img section-bg border radius-round">
                                <img src="<?= image_path?>cover-img.jpg" alt="user-image" class="img-fluid radius-round">
                            </div>
                            <div class="user-upload-img-wrap">
                                <div class="file-upload-wrap file-upload-wrap-2">
                                    <input type="file" name="files[]" class="multi file-upload-input with-preview" multiple maxlength="1">
                                    <span class="file-upload-text"><i class="la la-photo mr-2"></i>Upload Cover</span>
                                    <p>Max file size is 5MB, Minimum dimension: 1920x400 And Suitable files are .jpg & .png</p>
                                </div>
                                <a href="#" class="theme-btn mt-3">Remove Cover</a>
                            </div>
                        </div><!-- end user-profile-action -->
                    </div><!-- end user-profile-action-wrap -->
                </div><!-- end col-lg-12 -->
                <div class="col-lg-12">
                    <div class="user-form-action">
                        <div class="billing-form-item">
                            <div class="billing-title-wrap">
                                <h3 class="widget-title pb-0">My Profile</h3>
                                <div class="title-shape margin-top-10px"></div>
                            </div><!-- billing-title-wrap -->
                            <div class="billing-content">
                                <div class="contact-form-action">
                                    <form method="post">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="input-box">
                                                    <label class="label-text">Your Name</label>
                                                    <div class="form-group">
                                                        <span class="la la-user form-icon"></span>
                                                        <input class="form-control" type="text" name="text" placeholder="Ali Tupan">
                                                    </div>
                                                </div><!-- end input-box -->
                                            </div><!-- end col-lg-4 -->
                                            <div class="col-lg-4">
                                                <div class="input-box">
                                                    <label class="label-text">Profession Title</label>
                                                    <div class="form-group">
                                                        <span class="la la-briefcase form-icon"></span>
                                                        <input class="form-control" type="text" name="text" placeholder="Senior PHP Developer">
                                                    </div>
                                                </div><!-- end input-box -->
                                            </div><!-- end col-lg-4 -->
                                            <div class="col-lg-4">
                                                <div class="input-box">
                                                    <label class="label-text">Age</label>
                                                    <div class="form-group">
                                                        <span class="la la-user form-icon"></span>
                                                        <input class="form-control" type="text" name="text" placeholder="26">
                                                    </div>
                                                </div><!-- end input-box -->
                                            </div><!-- end col-lg-4 -->
                                            <div class="col-lg-4">
                                                <div class="input-box">
                                                    <label class="label-text">Allow In Search & Listing</label>
                                                    <div class="form-group user-chosen-select-container">
                                                        <select class="user-chosen-select" multiple>
                                                            <option selected="selected">Yes</option>
                                                            <option>No</option>
                                                        </select>
                                                    </div>
                                                </div><!-- end input-box -->
                                            </div><!-- end col-lg-4 -->
                                            <div class="col-lg-4">
                                                <div class="input-box">
                                                    <label class="label-text">Minimum Salary</label>
                                                    <div class="form-group">
                                                        <span class="la la-dollar-sign form-icon"></span>
                                                        <input class="form-control" type="text" name="text" placeholder="4500">
                                                    </div>
                                                </div><!-- end input-box -->
                                            </div><!-- end col-lg-4 -->
                                            <div class="col-lg-4">
                                                <div class="input-box">
                                                    <label class="label-text">Category</label>
                                                    <div class="form-group user-chosen-select-container">
                                                        <select class="user-chosen-select" multiple>
                                                            <option selected="selected">UI & UX Design</option>
                                                            <option>iOS</option>
                                                            <option>Android</option>
                                                            <option>Development</option>
                                                            <option>Laravel</option>
                                                            <option selected="selected">Java</option>
                                                            <option>Javascript</option>
                                                        </select>
                                                    </div>
                                                </div><!-- end input-box -->
                                            </div><!-- end col-lg-4 -->
                                            <div class="col-lg-6">
                                                <div class="input-box">
                                                    <label class="label-text">Qualification</label>
                                                    <div class="form-group user-chosen-select-container">
                                                        <select class="user-chosen-select" multiple>
                                                            <option>No Experience</option>
                                                            <option>Matriculation</option>
                                                            <option selected="selected">Intermediate</option>
                                                            <option>Graduate</option>
                                                        </select>
                                                    </div>
                                                </div><!-- end input-box -->
                                            </div><!-- end col-lg-6 -->
                                            <div class="col-lg-6">
                                                <div class="input-box">
                                                    <label class="label-text">Gender</label>
                                                    <div class="form-group user-chosen-select-container">
                                                        <select class="user-chosen-select" multiple>
                                                            <option selected="selected">Male</option>
                                                            <option>Female</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-6 -->
                                            <div class="col-lg-12">
                                                <div class="input-box">
                                                    <label class="label-text">About Yourselves</label>
                                                    <div class="form-group">
                                                        <textarea class="message-control form-control pt-3 pr-4 pb-3 pl-4">I spent several years working on sheep on Wall Street. I had moderate success investing in Yugos on Wall Street. Managed a small team buying and selling pogo sticks for farmers. Spent several years licensing licorice in West Palm Beach, FL. Developed several new methods for working with banjos in the aftermarket. I spent a weekend importing banjos in West Palm Beach, FL. In this position, the Software Engineer collaborates with Evention's Development team to continuously enhance our current software solutions as well as create new solutions to eliminate the back-office operations and management challenges present</textarea>
                                                    </div>
                                                </div><!-- end input-box -->
                                            </div><!-- end col-lg-12 -->
                                            <div class="col-lg-12">
                                                <div class="input-box">
                                                    <label class="label-text">Account Type</label>
                                                    <div class="custom-label">
                                                        <div class="form-group mb-0 d-flex align-items-center">
                                                            <div class="label-wrap mr-3">
                                                                <label class="label-container">
                                                                    <input type="radio" name="radio">
                                                                    <span class="label-mark"></span>
                                                                    Employer
                                                                </label>
                                                            </div>
                                                            <div class="label-wrap">
                                                                <label class="label-container">
                                                                    <input type="radio" checked="checked" name="radio">
                                                                    <span class="label-mark"></span>
                                                                    Freelancer
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div><!-- end custom-label -->
                                                </div><!-- end input-box -->
                                            </div><!-- end col-lg-12 -->
                                        </div><!-- end row -->
                                    </form>
                                </div><!-- end contact-form-action -->
                            </div><!-- end billing-content -->
                        </div>
                    </div><!-- end user-form-action -->
                </div><!-- end col-lg-12 -->
                <div class="col-lg-12">
                    <div class="user-form-action">
                        <div class="billing-form-item">
                            <div class="billing-title-wrap">
                                <h3 class="widget-title pb-0">Education Profile</h3>
                                <div class="title-shape margin-top-10px"></div>
                            </div><!-- billing-title-wrap -->
                            <div class="billing-content pb-3">
                                <div class="contact-form-action">
                                    <form method="post">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="input-box">
                                                    <label class="label-text">School </label>
                                                    <div class="form-group">
                                                        <i class="la la-building-o form-icon"></i>
                                                        <input class="form-control" type="text" name="text" placeholder="Warsaw School">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-4 -->
                                            <div class="col-lg-4">
                                                <div class="input-box">
                                                    <label class="label-text">Degree</label>
                                                    <div class="form-group">
                                                        <i class="la la-graduation-cap form-icon"></i>
                                                        <input class="form-control" type="text" name="text" placeholder="Popular Master Degree Programs">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-4 -->
                                            <div class="col-lg-4">
                                                <div class="input-box">
                                                    <label class="label-text">Field of Study</label>
                                                    <div class="form-group">
                                                        <i class="la la-book form-icon"></i>
                                                        <input class="form-control" type="text" name="text" placeholder="Warsaw University of Technology">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-4 -->
                                            <div class="col-lg-6">
                                                <div class="input-box">
                                                    <label class="label-text">From</label>
                                                    <div class="form-group">
                                                        <i class="la la-calendar form-icon"></i>
                                                        <input class="form-control" type="text" name="text" placeholder="2002">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-6 -->
                                            <div class="col-lg-6">
                                                <div class="input-box">
                                                    <label class="label-text">To</label>
                                                    <div class="form-group">
                                                        <i class="la la-calendar form-icon"></i>
                                                        <input class="form-control" type="text" name="text" placeholder="2019">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-6 -->
                                        </div><!-- end row -->
                                    </form>
                                </div><!-- end contact-form-action -->
                            </div><!-- end billing-content -->
                        </div>
                    </div><!-- end user-form-action -->
                </div><!-- end col-lg-12 -->
                <div class="col-lg-12">
                    <div class="user-form-action">
                        <div class="billing-form-item">
                            <div class="billing-title-wrap">
                                <h3 class="widget-title pb-0">Company Profile</h3>
                                <div class="title-shape margin-top-10px"></div>
                            </div><!-- billing-title-wrap -->
                            <div class="billing-content">
                                <div class="contact-form-action">
                                    <form method="post">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="input-box">
                                                    <label class="label-text">Company Name</label>
                                                    <div class="form-group">
                                                        <i class="la la-building-o form-icon"></i>
                                                        <input class="form-control" type="text" name="text" placeholder="Bluetech, Inc">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-3 -->
                                            <div class="col-lg-3">
                                                <div class="input-box">
                                                    <label class="label-text">Job title</label>
                                                    <div class="form-group">
                                                        <i class="la la-graduation-cap form-icon"></i>
                                                        <input class="form-control" type="text" name="text" placeholder="PHP Developer">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-3 -->
                                            <div class="col-lg-3">
                                                <div class="input-box">
                                                    <label class="label-text">Date Form</label>
                                                    <div class="form-group">
                                                        <i class="la la-calendar form-icon"></i>
                                                        <input class="form-control" type="text" name="text" placeholder="2002">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-3 -->
                                            <div class="col-lg-3">
                                                <div class="input-box">
                                                    <label class="label-text">Date To</label>
                                                    <div class="form-group">
                                                        <i class="la la-calendar form-icon"></i>
                                                        <input class="form-control" type="text" name="text" placeholder="2019">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-3 -->
                                            <div class="col-lg-12">
                                                <div class="input-box">
                                                    <label class="label-text">Briefly describe where your worked before</label>
                                                    <div class="form-group mb-0">
                                                        <textarea class="message-control form-control pt-3 pr-4 pb-3 pl-4">I spent several years working on sheep on Wall Street. I had moderate success investing in Yugos on Wall Street. Managed a small team buying and selling pogo sticks for farmers. Spent several years licensing licorice in West Palm Beach, FL. Developed several new methods for working with banjos in the aftermarket. I spent a weekend importing banjos in West Palm Beach, FL. In this position, the Software Engineer collaborates with Evention's Development team to continuously enhance our current software solutions as well as create new solutions to eliminate the back-office operations and management challenges present</textarea>
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-12 -->
                                        </div><!-- end row -->
                                    </form>
                                </div><!-- end contact-form-action -->
                            </div><!-- end billing-content -->
                        </div>
                    </div><!-- end user-form-action -->
                </div><!-- end col-lg-12 -->
                <div class="col-lg-12">
                    <div class="user-form-action">
                        <div class="billing-form-item">
                            <div class="billing-title-wrap">
                                <h3 class="widget-title pb-0">Social Profile</h3>
                                <div class="title-shape margin-top-10px"></div>
                            </div><!-- billing-title-wrap -->
                            <div class="billing-content pb-3">
                                <div class="contact-form-action">
                                    <form method="post">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="input-box">
                                                    <label class="label-text">Facebook</label>
                                                    <div class="form-group">
                                                        <span class="la la-facebook form-icon"></span>
                                                        <input class="form-control" type="text" name="text" placeholder="www.facebook.com/alitupan">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-4 -->
                                            <div class="col-lg-4">
                                                <div class="input-box">
                                                    <label class="label-text">Twitter</label>
                                                    <div class="form-group">
                                                        <span class="la la-twitter form-icon"></span>
                                                        <input class="form-control" type="text" name="text" placeholder="www.twitter.com/alitupan">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-4 -->
                                            <div class="col-lg-4">
                                                <div class="input-box">
                                                    <label class="label-text">Instagram</label>
                                                    <div class="form-group">
                                                        <span class="la la-instagram form-icon"></span>
                                                        <input class="form-control" type="text" name="text" placeholder="www.instagram.com/alitupan">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-4 -->
                                            <div class="col-lg-4">
                                                <div class="input-box">
                                                    <label class="label-text">Linkedin</label>
                                                    <div class="form-group">
                                                        <span class="la la-linkedin form-icon"></span>
                                                        <input class="form-control" type="text" name="text" placeholder="www.Linkedin.com/alitupan">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-4 -->
                                            <div class="col-lg-4">
                                                <div class="input-box">
                                                    <label class="label-text">Google Plus</label>
                                                    <div class="form-group">
                                                        <span class="la la-google-plus form-icon"></span>
                                                        <input class="form-control" type="text" name="text" placeholder="www.google-plus.com/alitupan">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-4 -->
                                            <div class="col-lg-4">
                                                <div class="input-box">
                                                    <label class="label-text">Pinterest</label>
                                                    <div class="form-group">
                                                        <span class="la la-pinterest form-icon"></span>
                                                        <input class="form-control" type="text" name="text" placeholder="www.pinterest.com/alitupan">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-4 -->
                                        </div><!-- end row -->
                                    </form>
                                </div><!-- end contact-form-action -->
                            </div><!-- end billing-content -->
                        </div>
                    </div><!-- end user-form-action -->
                </div><!-- end col-lg-12 -->
                <div class="col-lg-12">
                    <div class="user-form-action">
                        <div class="billing-form-item">
                            <div class="billing-title-wrap">
                                <h3 class="widget-title pb-0">Video URL</h3>
                                <div class="title-shape margin-top-10px"></div>
                            </div><!-- billing-title-wrap -->
                            <div class="billing-content pb-3">
                                <div class="contact-form-action">
                                    <form method="post">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="input-box">
                                                    <label class="label-text">Youtube</label>
                                                    <div class="form-group">
                                                        <span class="la la-youtube-play form-icon"></span>
                                                        <input class="form-control" type="text" name="text" placeholder="www.youtube.com/alitupan">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-4 -->
                                            <div class="col-lg-4">
                                                <div class="input-box">
                                                    <label class="label-text">Vimeo</label>
                                                    <div class="form-group">
                                                        <span class="la la-vimeo form-icon"></span>
                                                        <input class="form-control" type="text" name="text" placeholder="https://vimeo.com/123456789">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-4 -->
                                            <div class="col-lg-4">
                                                <div class="input-box">
                                                    <label class="label-text">Dailymotion</label>
                                                    <div class="form-group">
                                                        <span class="la la-video form-icon"></span>
                                                        <input class="form-control" type="text" name="text" placeholder="www.dailymotion.com/alitupan">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-4 -->
                                        </div><!-- end row -->
                                    </form>
                                </div><!-- end contact-form-action -->
                            </div><!-- end billing-content -->
                        </div>
                    </div><!-- end user-form-action -->
                </div><!-- end col-lg-12 -->
                <div class="col-lg-12">
                    <div class="user-form-action">
                        <div class="billing-form-item">
                            <div class="billing-title-wrap">
                                <h3 class="widget-title pb-0">Contact Information</h3>
                                <div class="title-shape margin-top-10px"></div>
                            </div><!-- billing-title-wrap -->
                            <div class="billing-content">
                                <div class="contact-form-action">
                                    <form method="post">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="input-box">
                                                    <label class="label-text">Phone number</label>
                                                    <div class="form-group">
                                                        <span class="la la-phone form-icon"></span>
                                                        <input class="form-control" type="text" name="text" placeholder="+1 246-345-0695">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-4 -->
                                            <div class="col-lg-4">
                                                <div class="input-box">
                                                    <label class="label-text">Email Address</label>
                                                    <div class="form-group">
                                                        <span class="la la-envelope form-icon"></span>
                                                        <input class="form-control" type="text" name="text" placeholder="alitupan@example.com">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-4 -->
                                            <div class="col-lg-4">
                                                <div class="input-box">
                                                    <label class="label-text">Website</label>
                                                    <div class="form-group">
                                                        <span class="la la-external-link form-icon"></span>
                                                        <input class="form-control" type="text" name="text" placeholder="www.alitupan.com">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-4 -->
                                            <div class="col-lg-4">
                                                <div class="input-box">
                                                    <label class="label-text">Country</label>
                                                    <div class="form-group user-chosen-select-container">
                                                        <select class="user-chosen-select" multiple>
                                                            <option value>Select a Location</option>
                                                            <option value="AF">Afghanistan</option>
                                                            <option value="AX">Åland Islands</option>
                                                            <option value="AL">Albania</option>
                                                            <option value="DZ">Algeria</option>
                                                            <option value="AD">Andorra</option>
                                                            <option value="AO">Angola</option>
                                                            <option value="AI">Anguilla</option>
                                                            <option value="AQ">Antarctica</option>
                                                            <option value="AG">Antigua &amp; Barbuda</option>
                                                            <option value="AR">Argentina</option>
                                                            <option value="AM">Armenia</option>
                                                            <option value="AW">Aruba</option>
                                                            <option value="AC">Ascension Island</option>
                                                            <option value="AU">Australia</option>
                                                            <option value="AT">Austria</option>
                                                            <option value="AZ">Azerbaijan</option>
                                                            <option value="BS">Bahamas</option>
                                                            <option value="BH">Bahrain</option>
                                                            <option value="BD">Bangladesh</option>
                                                            <option value="BB">Barbados</option>
                                                            <option value="BY">Belarus</option>
                                                            <option value="BE">Belgium</option>
                                                            <option value="BZ">Belize</option>
                                                            <option value="BJ">Benin</option>
                                                            <option value="BM">Bermuda</option>
                                                            <option value="BT">Bhutan</option>
                                                            <option value="BO">Bolivia</option>
                                                            <option value="BA">Bosnia &amp; Herzegovina</option>
                                                            <option value="BW">Botswana</option>
                                                            <option value="BV">Bouvet Island</option>
                                                            <option value="BR">Brazil</option>
                                                            <option value="IO">British Indian Ocean Territory</option>
                                                            <option value="VG">British Virgin Islands</option>
                                                            <option value="BN">Brunei</option>
                                                            <option value="BG">Bulgaria</option>
                                                            <option value="BF">Burkina Faso</option>
                                                            <option value="BI">Burundi</option>
                                                            <option value="KH">Cambodia</option>
                                                            <option value="CM">Cameroon</option>
                                                            <option value="CA">Canada</option>
                                                            <option value="CV">Cape Verde</option>
                                                            <option value="BQ">Caribbean Netherlands</option>
                                                            <option value="KY">Cayman Islands</option>
                                                            <option value="CF">Central African Republic</option>
                                                            <option value="TD">Chad</option>
                                                            <option value="CL">Chile</option>
                                                            <option value="CN">China</option>
                                                            <option value="CO">Colombia</option>
                                                            <option value="KM">Comoros</option>
                                                            <option value="CG">Congo - Brazzaville</option>
                                                            <option value="CD">Congo - Kinshasa</option>
                                                            <option value="CK">Cook Islands</option>
                                                            <option value="CR">Costa Rica</option>
                                                            <option value="CI">Côte d’Ivoire</option>
                                                            <option value="HR">Croatia</option>
                                                            <option value="CW">Curaçao</option>
                                                            <option value="CY">Cyprus</option>
                                                            <option value="CZ">Czechia</option>
                                                            <option value="DK">Denmark</option>
                                                            <option value="DJ">Djibouti</option>
                                                            <option value="DM">Dominica</option>
                                                            <option value="DO">Dominican Republic</option>
                                                            <option value="EC">Ecuador</option>
                                                            <option value="EG">Egypt</option>
                                                            <option value="SV">El Salvador</option>
                                                            <option value="GQ">Equatorial Guinea</option>
                                                            <option value="ER">Eritrea</option>
                                                            <option value="EE">Estonia</option>
                                                            <option value="SZ">Eswatini</option>
                                                            <option value="ET">Ethiopia</option>
                                                            <option value="FK">Falkland Islands</option>
                                                            <option value="FO">Faroe Islands</option>
                                                            <option value="FJ">Fiji</option>
                                                            <option value="FI">Finland</option>
                                                            <option value="FR">France</option>
                                                            <option value="GF">French Guiana</option>
                                                            <option value="PF">French Polynesia</option>
                                                            <option value="TF">French Southern Territories</option>
                                                            <option value="GA">Gabon</option>
                                                            <option value="GM">Gambia</option>
                                                            <option value="GE">Georgia</option>
                                                            <option value="DE">Germany</option>
                                                            <option value="GH">Ghana</option>
                                                            <option value="GI">Gibraltar</option>
                                                            <option value="GR">Greece</option>
                                                            <option value="GL">Greenland</option>
                                                            <option value="GD">Grenada</option>
                                                            <option value="GP">Guadeloupe</option>
                                                            <option value="GU">Guam</option>
                                                            <option value="GT">Guatemala</option>
                                                            <option value="GG">Guernsey</option>
                                                            <option value="GN">Guinea</option>
                                                            <option value="GW">Guinea-Bissau</option>
                                                            <option value="GY">Guyana</option>
                                                            <option value="HT">Haiti</option>
                                                            <option value="HN">Honduras</option>
                                                            <option value="HK">Hong Kong SAR China</option>
                                                            <option value="HU">Hungary</option>
                                                            <option value="IS">Iceland</option>
                                                            <option value="IN">India</option>
                                                            <option value="ID">Indonesia</option>
                                                            <option value="IR">Iran</option>
                                                            <option value="IQ">Iraq</option>
                                                            <option value="IE">Ireland</option>
                                                            <option value="IM">Isle of Man</option>
                                                            <option value="IL">Israel</option>
                                                            <option value="IT">Italy</option>
                                                            <option value="JM">Jamaica</option>
                                                            <option value="JP">Japan</option>
                                                            <option value="JE">Jersey</option>
                                                            <option value="JO">Jordan</option>
                                                            <option value="KZ">Kazakhstan</option>
                                                            <option value="KE">Kenya</option>
                                                            <option value="KI">Kiribati</option>
                                                            <option value="XK">Kosovo</option>
                                                            <option value="KW">Kuwait</option>
                                                            <option value="KG">Kyrgyzstan</option>
                                                            <option value="LA">Laos</option>
                                                            <option value="LV">Latvia</option>
                                                            <option value="LB">Lebanon</option>
                                                            <option value="LS">Lesotho</option>
                                                            <option value="LR">Liberia</option>
                                                            <option value="LY">Libya</option>
                                                            <option value="LI">Liechtenstein</option>
                                                            <option value="LT">Lithuania</option>
                                                            <option value="LU">Luxembourg</option>
                                                            <option value="MO">Macao SAR China</option>
                                                            <option value="MG">Madagascar</option>
                                                            <option value="MW">Malawi</option>
                                                            <option value="MY">Malaysia</option>
                                                            <option value="MV">Maldives</option>
                                                            <option value="ML">Mali</option>
                                                            <option value="MT">Malta</option>
                                                            <option value="MQ">Martinique</option>
                                                            <option value="MR">Mauritania</option>
                                                            <option value="MU">Mauritius</option>
                                                            <option value="YT">Mayotte</option>
                                                            <option value="MX">Mexico</option>
                                                            <option value="MD">Moldova</option>
                                                            <option value="MC">Monaco</option>
                                                            <option value="MN">Mongolia</option>
                                                            <option value="ME">Montenegro</option>
                                                            <option value="MS">Montserrat</option>
                                                            <option value="MA">Morocco</option>
                                                            <option value="MZ">Mozambique</option>
                                                            <option value="MM">Myanmar (Burma)</option>
                                                            <option value="NA">Namibia</option>
                                                            <option value="NR">Nauru</option>
                                                            <option value="NP">Nepal</option>
                                                            <option value="NL">Netherlands</option>
                                                            <option value="NC">New Caledonia</option>
                                                            <option value="NZ">New Zealand</option>
                                                            <option value="NI">Nicaragua</option>
                                                            <option value="NE">Niger</option>
                                                            <option value="NG">Nigeria</option>
                                                            <option value="NU">Niue</option>
                                                            <option value="MK">North Macedonia</option>
                                                            <option value="NO">Norway</option>
                                                            <option value="OM">Oman</option>
                                                            <option value="PK">Pakistan</option>
                                                            <option value="PS">Palestinian Territories</option>
                                                            <option value="PA">Panama</option>
                                                            <option value="PG">Papua New Guinea</option>
                                                            <option value="PY">Paraguay</option>
                                                            <option value="PE">Peru</option>
                                                            <option value="PH">Philippines</option>
                                                            <option value="PN">Pitcairn Islands</option>
                                                            <option value="PL" selected="selected">Poland</option>
                                                            <option value="PT">Portugal</option>
                                                            <option value="PR">Puerto Rico</option>
                                                            <option value="QA">Qatar</option>
                                                            <option value="RE">Réunion</option>
                                                            <option value="RO">Romania</option>
                                                            <option value="RU">Russia</option>
                                                            <option value="RW">Rwanda</option>
                                                            <option value="WS">Samoa</option>
                                                            <option value="SM">San Marino</option>
                                                            <option value="ST">São Tomé &amp; Príncipe</option>
                                                            <option value="SA">Saudi Arabia</option>
                                                            <option value="SN">Senegal</option>
                                                            <option value="RS">Serbia</option>
                                                            <option value="SC">Seychelles</option>
                                                            <option value="SL">Sierra Leone</option>
                                                            <option value="SG">Singapore</option>
                                                            <option value="SX">Sint Maarten</option>
                                                            <option value="SK">Slovakia</option>
                                                            <option value="SI">Slovenia</option>
                                                            <option value="SB">Solomon Islands</option>
                                                            <option value="SO">Somalia</option>
                                                            <option value="ZA">South Africa</option>
                                                            <option value="GS">South Georgia &amp; South Sandwich Islands</option>
                                                            <option value="KR">South Korea</option>
                                                            <option value="SS">South Sudan</option>
                                                            <option value="ES">Spain</option>
                                                            <option value="LK">Sri Lanka</option>
                                                            <option value="BL">St. Barthélemy</option>
                                                            <option value="SH">St. Helena</option>
                                                            <option value="KN">St. Kitts &amp; Nevis</option>
                                                            <option value="LC">St. Lucia</option>
                                                            <option value="MF">St. Martin</option>
                                                            <option value="PM">St. Pierre &amp; Miquelon</option>
                                                            <option value="VC">St. Vincent &amp; Grenadines</option>
                                                            <option value="SR">Suriname</option>
                                                            <option value="SJ">Svalbard &amp; Jan Mayen</option>
                                                            <option value="SE">Sweden</option>
                                                            <option value="CH">Switzerland</option>
                                                            <option value="TW">Taiwan</option>
                                                            <option value="TJ">Tajikistan</option>
                                                            <option value="TZ">Tanzania</option>
                                                            <option value="TH">Thailand</option>
                                                            <option value="TL">Timor-Leste</option>
                                                            <option value="TG">Togo</option>
                                                            <option value="TK">Tokelau</option>
                                                            <option value="TO">Tonga</option>
                                                            <option value="TT">Trinidad &amp; Tobago</option>
                                                            <option value="TA">Tristan da Cunha</option>
                                                            <option value="TN">Tunisia</option>
                                                            <option value="TR">Turkey</option>
                                                            <option value="TM">Turkmenistan</option>
                                                            <option value="TC">Turks &amp; Caicos Islands</option>
                                                            <option value="TV">Tuvalu</option>
                                                            <option value="UG">Uganda</option>
                                                            <option value="UA">Ukraine</option>
                                                            <option value="AE">United Arab Emirates</option>
                                                            <option value="GB">United Kingdom</option>
                                                            <option value="US">United States</option>
                                                            <option value="UY">Uruguay</option>
                                                            <option value="UZ">Uzbekistan</option>
                                                            <option value="VU">Vanuatu</option>
                                                            <option value="VA">Vatican City</option>
                                                            <option value="VE">Venezuela</option>
                                                            <option value="VN">Vietnam</option>
                                                            <option value="WF">Wallis &amp; Futuna</option>
                                                            <option value="EH">Western Sahara</option>
                                                            <option value="YE">Yemen</option>
                                                            <option value="ZM">Zambia</option>
                                                            <option value="ZW">Zimbabwe</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-4 -->
                                            <div class="col-lg-4">
                                                <div class="input-box">
                                                    <label class="label-text">City</label>
                                                    <div class="form-group user-chosen-select-container">
                                                        <select class="user-chosen-select" multiple>
                                                            <option value>Select a City</option>
                                                            <option>New York</option>
                                                            <option>Los Angeles</option>
                                                            <option>Chicago</option>
                                                            <option>Phoenix</option>
                                                            <option>Washington</option>
                                                            <option selected="selected">Warsaw</option>
                                                            <option>Boston</option>
                                                            <option>Philadelphia</option>
                                                            <option>Baltimore</option>
                                                            <option>Seattle</option>
                                                            <option>San Francisco</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-4 -->
                                            <div class="col-lg-4">
                                                <div class="input-box">
                                                    <label class="label-text">Complete Address</label>
                                                    <div class="form-group">
                                                        <span class="la la-map-marker form-icon"></span>
                                                        <input class="form-control" type="text" name="text" placeholder="Krakowskie Przedmiescie 12/1200-041 Warsaw">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-4 -->
                                            <div class="col-lg-4">
                                                <div class="input-box">
                                                    <label class="label-text">Find On Map</label>
                                                    <div class="form-group">
                                                        <span class="la la-map form-icon"></span>
                                                        <input class="form-control" type="text" name="text" placeholder="Krakowskie Przedmiescie 12/1200-041 Warsaw">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-4 -->
                                            <div class="col-lg-4">
                                                <div class="input-box">
                                                    <label class="label-text">Latitude</label>
                                                    <div class="form-group">
                                                        <span class="la la-map form-icon"></span>
                                                        <input class="form-control" type="text" name="text" placeholder="55.1589689">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-4 -->
                                            <div class="col-lg-4">
                                                <div class="input-box">
                                                    <label class="label-text">Longitude</label>
                                                    <div class="form-group">
                                                        <span class="la la-map form-icon"></span>
                                                        <input class="form-control" type="text" name="text" placeholder="32.1589689">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-4 -->
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <div class="btn-box">
                                                        <button class="theme-btn border-0">Search Location</button>
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-12 -->
                                            <div class="col-lg-12">
                                                <div class="input-box">
                                                    <label class="label-text ">Map location</label>
                                                    <div class="form-group mb-0">
                                                        <div class="gmaps">
                                                            <div id="map" class="radius-round"></div>
                                                        </div><!-- end listing-map -->
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-12 -->
                                        </div><!-- end row -->
                                    </form>
                                </div><!-- end contact-form-action -->
                            </div><!-- end billing-content -->
                        </div>
                    </div><!-- end user-form-action -->
                </div><!-- end col-lg-12 -->
                <div class="col-lg-12">
                    <div class="user-form-action">
                        <div class="billing-form-item">
                            <div class="billing-title-wrap">
                                <h3 class="widget-title pb-0">More Information</h3>
                                <div class="title-shape margin-top-10px"></div>
                            </div><!-- billing-title-wrap -->
                            <div class="billing-content pb-3">
                                <div class="contact-form-action">
                                    <form method="post">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="input-box">
                                                    <label class="label-text">Experience</label>
                                                    <div class="form-group user-chosen-select-container">
                                                        <select class="user-chosen-select" multiple>
                                                            <option>No Experience</option>
                                                            <option>Less than 1 Year</option>
                                                            <option>1 to 2 Year(s)</option>
                                                            <option>2 to 4 Year(s)</option>
                                                            <option>3 to 5 Year(s)</option>
                                                            <option>2 Years</option>
                                                            <option>3 Years</option>
                                                            <option selected="selected">4 Years</option>
                                                            <option>Over 5 Years</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-4 -->
                                            <div class="col-lg-4">
                                                <div class="input-box">
                                                    <label class="label-text">Current Salary</label>
                                                    <div class="form-group user-chosen-select-container">
                                                        <select class="user-chosen-select" multiple>
                                                            <option selected="selected">15K - 16K</option>
                                                            <option>16K - 20K</option>
                                                            <option>20K - 25K</option>
                                                            <option>25K - 30K</option>
                                                            <option>30K - 45K</option>
                                                            <option>45K - 50K</option>
                                                            <option>50K - 60K</option>
                                                            <option>More than 60</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-4 -->
                                            <div class="col-lg-4">
                                                <div class="input-box">
                                                    <label class="label-text">Expected Salary</label>
                                                    <div class="form-group user-chosen-select-container">
                                                        <select class="user-chosen-select" multiple>
                                                            <option selected="selected">20K - 25K</option>
                                                            <option>30K - 40K</option>
                                                            <option>50K - 60K</option>
                                                            <option>65K - 70K</option>
                                                            <option>80K - 85K</option>
                                                            <option>90K - 95K</option>
                                                            <option>100K - 105K</option>
                                                            <option>More than 120</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-4 -->
                                            <div class="col-lg-6">
                                                <div class="input-box">
                                                    <label class="label-text">Education Levels</label>
                                                    <div class="form-group user-chosen-select-container">
                                                        <select class="user-chosen-select" multiple>
                                                            <option>No Experience</option>
                                                            <option selected="selected">Diploma</option>
                                                            <option>Bachelor Degree</option>
                                                            <option>Associate Degree</option>
                                                            <option>Master’s Degree</option>
                                                            <option>Doctorate Degree</option>
                                                            <option>Nursing degree</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-6 -->
                                            <div class="col-lg-6">
                                                <div class="input-box">
                                                    <label class="label-text">Languages</label>
                                                    <div class="form-group user-chosen-select-container">
                                                        <select class="user-chosen-select" multiple>
                                                            <option>No Experience</option>
                                                            <option>Arabic</option>
                                                            <option selected="selected">Chinese</option>
                                                            <option>Japanese</option>
                                                            <option>Farsi</option>
                                                            <option>Swedish</option>
                                                            <option>Greek</option>
                                                            <option>German</option>
                                                            <option>French</option>
                                                            <option selected="selected">English</option>
                                                            <option>Hindi</option>
                                                            <option>Urdu</option>
                                                            <option>Bengali</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-6 -->
                                        </div><!-- end row -->
                                    </form>
                                </div><!-- end contact-form-action -->
                            </div><!-- end billing-content -->
                        </div>
                    </div><!-- end user-form-action -->
                </div><!-- end col-lg-12 -->
                <div class="col-lg-12">
                    <div class="btn-box">
                        <button class="theme-btn border-0" type="button">Update Changes</button>
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