<?php include('template/temp_header.php'); ?>

<body>
    <!-- loader -->
    <!-- <div class="pre-loader">
        <div class="pre-loader-box">
            <div class="loader-logo">
                <img src="<?php echo site_url(); ?>public/backend/vendors/images/home-loading.png" alt="" />
            </div>
            <div class="loader-progress" id="progress_div">
                <div class="bar" id="bar1"></div>
            </div>
            <div class="percent" id="percent1">0%</div>
            <div class="loading-text">Loading...</div>
        </div>
    </div> -->
    <!-- /loader -->
    <!-- header -->
    <div class="header">
        <div class="header-left">
            <div class="menu-icon bi bi-list"></div>
            <div class="search-toggle-icon bi bi-search" data-toggle="header_search"></div>
            <div class="header-search">
                <!-- search area form -->
                <form>
                    <div class="form-group mb-0">
                        <i class="dw dw-search2 search-icon"></i>
                        <input type="text" class="form-control search-input" placeholder="Search Here">
                        <div class="dropdown">
                            <a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
                                <i class="ion-arrow-down-c"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">From</label>
                                    <div class="col-sm-12 col-md-10">
                                        <input class="form-control form-control-sm form-control-line" type="text">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">To</label>
                                    <div class="col-sm-12 col-md-10">
                                        <input class="form-control form-control-sm form-control-line" type="text">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">Subject</label>
                                    <div class="col-sm-12 col-md-10">
                                        <input class="form-control form-control-sm form-control-line" type="text">
                                    </div>
                                </div>
                                <div class="text-right">
                                    <button class="btn btn-primary">Search</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- /search area form -->
            </div>
        </div>
        <div class="header-right">
            <div class="dashboard-setting user-notification">
                <div class="dropdown">
                    <a class="dropdown-toggle no-arrow" href="#" data-toggle="right-sidebar">
                        <i class="dw dw-settings2"></i>
                    </a>
                </div>
            </div>
            <!-- users notification  -->
            <div class="user-notification">
                <div class="dropdown">
                    <a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
                        <i class="icon-copy dw dw-notification"></i>
                        <span class="badge notification-active"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="notification-list mx-h-350 customscroll mCustomScrollbar _mCS_1 mCS_no_scrollbar">
                            <div id="mCSB_1" class="mCustomScrollBox mCS-dark-2 mCSB_vertical mCSB_inside"
                                style="max-height: 0px;" tabindex="0">
                                <div id="mCSB_1_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y"
                                    style="position:relative; top:0; left:0;" dir="ltr">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <img src="<?php echo site_url(); ?>public/backend/vendors/images/img.jpg"
                                                    alt="" class="mCS_img_loaded">
                                                <h3>John Doe</h3>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing
                                                    elit, sed...
                                                </p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <img src="<?php echo site_url(); ?>public/backend/vendors/images/photo1.jpg"
                                                    alt="" class="mCS_img_loaded">
                                                <h3>Lea R. Frith</h3>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing
                                                    elit, sed...
                                                </p>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div id="mCSB_1_scrollbar_vertical"
                                    class="mCSB_scrollTools mCSB_1_scrollbar mCS-dark-2 mCSB_scrollTools_vertical mCSB_scrollTools_onDrag_expand"
                                    style="display: none;">
                                    <div class="mCSB_draggerContainer">
                                        <div id="mCSB_1_dragger_vertical" class="mCSB_dragger"
                                            style="position: absolute; min-height: 30px; top: 0px;">
                                            <div class="mCSB_dragger_bar" style="line-height: 30px;"></div>
                                        </div>
                                        <div class="mCSB_draggerRail"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /users notification -->
            <div class="user-info-dropdown">
                <div class="dropdown">
                    <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                        <span class="user-icon">
                            <img src="<?php echo site_url(); ?>public/backend/vendors/images/photo1.jpg" alt="">
                        </span>
                        <!-- <span class="user-name">Ross C. Lopez</span> -->
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                        <a class="dropdown-item" href="profile.html"><i class="dw dw-user1"></i> Profile</a>
                        <a class="dropdown-item" href="profile.html"><i class="dw dw-settings2"></i> Setting</a>
                        <a class="dropdown-item" href="faq.html"><i class="dw dw-help"></i> Help</a>
                        <a class="dropdown-item" href="<?php echo site_url('auth/logout') ?>"><i
                                class="dw dw-logout"></i> Log
                            Out</a>
                    </div>
                </div>
            </div>
            <!-- <div class="github-link">
                <a href="https://github.com/dropways/deskapp" target="_blank"><img src="vendors/images/github.svg"
                        alt=""></a>
            </div> -->
        </div>
    </div>
    <!-- /header -->
    <!-- right sidebar -->
    <div class="right-sidebar">
        <div class="sidebar-title">
            <h3 class="weight-600 font-16 text-blue">
                Layout Settings
                <span class="btn-block font-weight-400 font-12">User Interface Settings</span>
            </h3>
            <div class="close-sidebar" data-toggle="right-sidebar-close">
                <i class="icon-copy ion-close-round"></i>
            </div>
        </div>
        <div class="right-sidebar-body customscroll">
            <div class="right-sidebar-body-content">
                <h4 class="weight-600 font-18 pb-10">Header Background</h4>
                <div class="sidebar-btn-group pb-30 mb-10">
                    <a href="#" class="btn btn-outline-primary header-white active">White</a>
                    <a href="#" class="btn btn-outline-primary header-dark">Dark</a>
                </div>

                <h4 class="weight-600 font-18 pb-10">Sidebar Background</h4>
                <div class="sidebar-btn-group pb-30 mb-10">
                    <a href="#" class="btn btn-outline-primary sidebar-light">White</a>
                    <a href="#" class="btn btn-outline-primary sidebar-dark active">Dark</a>
                </div>

                <h4 class="weight-600 font-18 pb-10">Menu Dropdown Icon</h4>
                <div class="sidebar-radio-group pb-10 mb-10">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="sidebaricon-1" name="menu-dropdown-icon" class="custom-control-input"
                            value="icon-style-1" checked="" />
                        <label class="custom-control-label" for="sidebaricon-1"><i class="fa fa-angle-down"></i></label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="sidebaricon-2" name="menu-dropdown-icon" class="custom-control-input"
                            value="icon-style-2" />
                        <label class="custom-control-label" for="sidebaricon-2"><i class="ion-plus-round"></i></label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="sidebaricon-3" name="menu-dropdown-icon" class="custom-control-input"
                            value="icon-style-3" />
                        <label class="custom-control-label" for="sidebaricon-3"><i
                                class="fa fa-angle-double-right"></i></label>
                    </div>
                </div>

                <h4 class="weight-600 font-18 pb-10">Menu List Icon</h4>
                <div class="sidebar-radio-group pb-30 mb-10">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="sidebariconlist-1" name="menu-list-icon" class="custom-control-input"
                            value="icon-list-style-1" checked="" />
                        <label class="custom-control-label" for="sidebariconlist-1"><i
                                class="ion-minus-round"></i></label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="sidebariconlist-2" name="menu-list-icon" class="custom-control-input"
                            value="icon-list-style-2" />
                        <label class="custom-control-label" for="sidebariconlist-2"><i class="fa fa-circle-o"
                                aria-hidden="true"></i></label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="sidebariconlist-3" name="menu-list-icon" class="custom-control-input"
                            value="icon-list-style-3" />
                        <label class="custom-control-label" for="sidebariconlist-3"><i class="dw dw-check"></i></label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="sidebariconlist-4" name="menu-list-icon" class="custom-control-input"
                            value="icon-list-style-4" checked="" />
                        <label class="custom-control-label" for="sidebariconlist-4"><i
                                class="icon-copy dw dw-next-2"></i></label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="sidebariconlist-5" name="menu-list-icon" class="custom-control-input"
                            value="icon-list-style-5" />
                        <label class="custom-control-label" for="sidebariconlist-5"><i
                                class="dw dw-fast-forward-1"></i></label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="sidebariconlist-6" name="menu-list-icon" class="custom-control-input"
                            value="icon-list-style-6" />
                        <label class="custom-control-label" for="sidebariconlist-6"><i class="dw dw-next"></i></label>
                    </div>
                </div>

                <div class="reset-options pt-30 text-center">
                    <button class="btn btn-danger" id="reset-settings">
                        Reset Settings
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- /right sidebar -->
    <!-- left sidebar -->
    <div class="left-side-bar">
        <div class="brand-logo">
            <a href="index.html">
                <img src="<?php echo site_url(); ?>public/backend/vendors/images/deskapp-logo.svg" alt=""
                    class="dark-logo" />
                <img src="<?php echo site_url(); ?>public/backend/vendors/images/deskapp-logo-white.svg" alt=""
                    class="light-logo" />
            </a>
            <div class="close-sidebar" data-toggle="left-sidebar-close">
                <i class="ion-close-round"></i>
            </div>
        </div>
        <div class="menu-block customscroll">
            <div class="sidebar-menu">
                <ul id="accordion-menu">
                    <li class="dropdown">
                        <a href="<?php echo base_url('auth/dashboard'); ?>" class="dropdown-toggle no-arrow">
                            <span class="micon bi bi-house"></span><span class="mtext">Dashboard</span>
                        </a>
                    </li>
                    <!-- availability -->
                    <li class="dropdown">
                        <a href="<?php echo base_url('availability/'); ?>" class="dropdown-toggle no-arrow">
                            <span class="micon ti-comment-alt"></span><span class="mtext">Check Availablity</span>
                        </a>
                    </li>
                    <!-- reservation -->
                    <li class="dropdown">
                        <a href="<?php echo base_url('reservation/'); ?>" class="dropdown-toggle no-arrow">
                            <span class="micon fa fa-calendar-check-o"></span><span class="mtext">Reservations</span>
                        </a>
                    </li>
                    <!-- booking -->
                    <li class="dropdown">
                        <a href="<?php echo base_url('booking/'); ?>" class="dropdown-toggle no-arrow">
                            <span class="micon fa fa-calendar-check-o"></span><span class="mtext">Booking</span>
                        </a>
                    </li>
                    <!--  invoice-->
                    <li class="dropdown">
                        <a href="<?php echo site_url('invoice'); ?>" class="dropdown-toggle no-arrow">
                            <span class="micon fa fa-group"></span><span class="mtext">Invoice</span>
                        </a>
                    </li>
                    <!-- complaints  -->
                    <li class="dropdown">
                        <a href="<?php echo site_url('complaints'); ?>" class="dropdown-toggle no-arrow">
                            <span class="micon ti-comment-alt"></span><span class="mtext">Manage Complaints</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /left sidebar -->
    <div class="mobile-menu-overlay"></div>
    <!-- main container -->
    <div class="main-container">
        <!-- inner content -->
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Dashboard</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="<?php echo base_url('auth/dashbord') ?>">Home</a>
                                </li>
                                <li class="breadcrumb-item" aria-current="page">Booking</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!-- The form for booking -->
                <form id="bookingForm">
                    <div class="pd-20 card-box mb-30">
                        <div class="content clearfix">
                            <div class="row">
                                <!-- Guest Information -->
                                <div class="col-lg-6 col-md-12 col-sm-12 mb-30">
                                    <div class="pd-30 height-100-p">
                                        <h4 class="mb-30 h4">Guest Information</h4>
                                        <div id="guest-information">
                                            <!-- guest details form -->
                                            <div class="form-group">
                                                <input class="form-control" type="text" id="guest_fullname"
                                                    name="guest_fullname" placeholder="Enter Full Name" />
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" id="guest_email" name="guest_email"
                                                    type="email" placeholder="Enter Email" />
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" id="guest_mobile" name="guest_mobile"
                                                    type="tel" placeholder="Enter Mobile" maxlength="10" />
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" id="guest_address" name="guest_address"
                                                    type="text" placeholder="Enter Address" />
                                            </div>
                                            <div class="form-group">
                                                <select class="form-control" id="guest_id_type" name="guest_id_type">
                                                    <option value="">Select ID</option>
                                                    <option value="Voter ID">Voter ID</option>
                                                    <option value="Aadhaar Card">Aadhaar Card</option>
                                                    <option value="Pan Card">Pan Card</option>
                                                    <option value="Passport">Passport</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" id="guest_idno" name="guest_idno"
                                                    type="text" placeholder="Enter ID No." maxlength="16" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Room Information -->
                                <div class="col-lg-6 col-md-12 col-sm-12 mb-30">
                                    <div class="pd-30 height-100-p">
                                        <h4 class="mb-30 h4">Room Information</h4>
                                        <div id="guest-reservation">
                                            <div class="form-group">
                                                <div class="row d-flex">
                                                    <div class="col-md-6">
                                                        <label for="check_in">Check-in</label>
                                                        <input class="form-control" id="check_in" name="check_in"
                                                            type="date" />
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="check_out">Check-Out</label>
                                                        <input class="form-control" id="check_out" name="check_out"
                                                            type="date" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <select class="form-control" id="floor" name="floor">
                                                    <option value="">Select Floor</option>
                                                    <option value="ground">Ground</option>
                                                    <option value="first">First</option>
                                                    <option value="second">Second</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <select class="form-control" id="room_type" name="room_type">
                                                    <option value="">Select Room Type</option>
                                                    <option value="Single">Single</option>
                                                    <option value="Double">Double</option>
                                                    <option value="Deluxe">Deluxe</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <select class="form-control" id="total_members" name="total_members">
                                                    <option value="">Select Members</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Submit Button -->
                            <div class="form-group">
                                <div class="pull-right">
                                    <button type="submit" class="btn btn-primary btn-sm" id="submit_form_details">Book
                                        Now!</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- /inner content -->
        <!-- booking successfull modal -->
        <div class="modal fade" id="booking-success-modal" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body text-center font-18">
                        <h3 class="mb-20">Booking Successfully!</h3>
                        <div class="mb-30 text-center">
                            <img src="<?php echo site_url(); ?>public/backend/vendors/images/success.png" />
                        </div>
                        <div id="modal_content"></div>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="submit" class="btn btn-primary" data-dismiss="modal">
                            Done
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /booking successfull modal -->
        <!-- payment successfull modal -->
        <!-- <div class="modal fade" id="payment-success-modal" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body text-center font-18">
                        <h3 class="mb-20">Payment Successfully!</h3>
                        <div class="mb-30 text-center">
                            <img src="<?php echo site_url(); ?>public/backend/vendors/images/success.png" />
                        </div>
                        <p>Your booking has been confirmed. Thank you for choosing us!</p>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">
                            Done
                        </button>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- /payment successfull modal -->
    </div>
    <!-- /main container -->
    <!-- footer -->
    <div class="footer-wrap card-box pd-20">
        <span class="text-center">Design by
            <a href="https://github.com/dropways" target="_blank">ABC</a></span>
    </div>
    <!-- /footer -->
</body>
<?php include('template/temp_footer.php'); ?>