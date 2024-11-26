<?php include('admin_view/template/header.php'); ?>
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
    <!-- side navbar -->
    <aside
        class="sidenav navbar navbar-vertical navbar-expand-xs border-radius-lg fixed-start ms-2 bg-white my-2 position-absolute mb-5"
        id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-dark opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
                aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand px-4 py-3 m-0" href="#" target="_blank">
                <img src="<?php echo site_url(); ?>public/assets/img/logoSide.png" class="navbar-brand-img" width="30"
                    height="30" alt="main_logo" />
                <span class="ms-1 text-sm text-dark font-weight-bold">Delhi District Court</span>
            </a>
        </div>
        <hr class="horizontal dark mt-0 mb-2" />
        <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active bg-gradient-primary text-white" href="#">
                        <i class="material-symbols-rounded opacity-5">dashboard</i>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="<?php echo base_url('admin/logout'); ?>">
                        <i class="material-symbols-rounded opacity-5">Logout</i>
                        <span class="nav-link-text ms-1">Logout</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>
    <!-- /side navbar -->

    <!-- main container -->
    <div class="d-flex">
        <!-- content area -->
        <div class="flex-fill">
            <!-- header -->
            <header class="mt-2 mr-2 p-3 bg-dark text-white border-radius-lg">
                <div class="search-container d-flex justify-content-between align-items-center">
                    <div class="row align-items-center justify-content-between">
                        <!-- Dashboard Heading -->
                        <div class="ms-3 col-12 col-md-8 mt-4 ml-0">
                            <h3 class="mb-0 h4 font-weight-bolder ml-0 text-white">Dashboard</h3>
                        </div>
                        <!-- Navbar -->
                        <div class="container-fluid py-1 px-3">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-3 ml-0">
                                    <li class="breadcrumb-item text-sm">
                                        <a class="opacity-5 text-white" href="#">Home</a>
                                    </li>
                                    <li class="breadcrumb-item text-sm text-white active" aria-current="page">
                                        Dashboard
                                    </li>
                                </ol>
                            </nav>
                        </div>
                        <!-- /Navbar -->
                    </div>
                    <div class="time-area mt-2">
                        <div class="btn btn-secondary">
                            <div class="text-white" id="current-time"></div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- /header -->

            <!-- main content -->
            <div class="mt-2 mr-2 p-3 card text-white border-radius-lg">
                <!-- table row  -->
                <div class="row">
                    <!-- Button to open the modal -->
                    <div class="ms-3 col-12 col-md-3 ml-auto text-md-right mt-3">
                        <button type="submit" class="btn btn-primary col-md-3" data-toggle="modal"
                            data-target="#addDetailsModal">
                            Add <i class="fa fa-plus-circle"></i>
                        </button>
                    </div>
                    <div class="col-16">
                        <div class="card my-4">
                            <div class="px-0 pb-2">
                                <div class="table-responsive">
                                    <!-- table here -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /main content -->

            <!-- footer -->
            <footer class="mt-2 mr-2 p-3 mb-2 bg-dark text-white border-radius-lg fixed-bottom">
                <div class="row">
                    <div class="col-lg-12 mb-lg-0 mb-4">
                        <div class="copyright text-center text-sm text-muted text-lg-start">
                            <span class="font-weight-bold text-white">©</span>
                            <span class="font-weight-bold text-white">
                                <a href="https://delhicourts.nic.in/" target="_blank">Delhi District Court</a>
                            </span>
                            by
                            <a href="#" class="font-weight-bold text-white" target="_blank">IT-Cell (HQs), Tis
                                Hazari.</a>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- /footer -->
        </div>
    </div>
</main>

<!-- Script to update the time -->
<script>
    // Function to format the time as HH:MM:SS
    function updateTime() {
        const currentTime = new Date();
        document.getElementById('current-time').innerText = currentTime.toLocaleTimeString();
    }
    setInterval(updateTime, 1000); // Update time every second
</script>
<?php include('admin_view/template/footer.php'); ?>