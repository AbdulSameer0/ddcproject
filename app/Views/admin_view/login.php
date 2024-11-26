<!--
=========================================================
* Material Dashboard 3 - v3.2.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2024 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="apple-touch-icon" sizes="76x76" href="public/assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="public/assets/img/favicon.png" />
    <title>Login</title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700,900" />
    <!-- Nucleo Icons -->
    <link href="public/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="public/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.0/css/all.min.css" />
    <!-- Material Icons -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
    <!-- CSS Files -->
    <link id="pagestyle" href="<?php echo site_url(); ?>public/assets/css/material-dashboard.css?v=3.2.0"
        rel="stylesheet" />
    <link type="text/css" href="<?php echo site_url(); ?>public/assets/css/styles.css" rel="stylesheet" />
</head>

<body class="bg-gray-200">
    <div class="container position-sticky z-index-sticky top-0"></div>
    <!-- main container -->
    <main class="main-content mt-0">
        <div class="page-header align-items-start min-vh-100">
            <span class="mask bg-gradient-white opacity-6"></span>
            <div class="error-message float-right">
                <?php if (session()->getFlashdata('error')): ?>
                    <div id="error-message" class="alert alert-danger col-md-10 text-white">
                        <?= session()->getFlashdata('error'); ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="container my-auto">
                <div class="row">
                    <div class="col-lg-4 col-md-8 col-12 mx-auto">
                        <div class="card z-index-0 fadeIn3 fadeInBottom">
                            <div class="image d-flex justify-content-center align-items-center mt-2">
                                <img src="<?php echo site_url(); ?>public/assets/img/logoSide.png" width="100px"
                                    height="100px">
                            </div>
                            <h4 class="text-dark font-weight-bolder text-center mt-2 mb-0">
                                Login
                            </h4>
                            <div class="card-body">
                                <!-- admin login form -->
                                <form role="form" class="text-start" action="<?php echo base_url('/admin/login'); ?>"
                                    method="POST">
                                    <div class="input-group input-group-outline my-3">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" />
                                    </div>
                                    <div class="input-group input-group-outline mb-3">
                                        <label class="form-label">Password</label>
                                        <input type="password" class="form-control" id="password" name="password" />
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">
                                            Login
                                        </button>
                                    </div>
                                    <p class="mt-4 text-sm text-center">
                                        Don't have an account?
                                        <a href="<?php echo base_url('/admin/register'); ?>"
                                            class="text-primary text-gradient font-weight-bold">Register</a>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!--   Core JS Files   -->
    <script src="<?php echo site_url(); ?>public/assets/js/core/popper.min.js"></script>
    <script src="<?php echo site_url(); ?>public/assets/js/core/bootstrap.min.js"></script>
    <script src="<?php echo site_url(); ?>public/assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="<?php echo site_url(); ?>public/assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script src="<?php echo site_url(); ?>public/assets/js/plugins/function.js"></script>
    <script>
        var win = navigator.platform.indexOf("Win") > -1;
        if (win && document.querySelector("#sidenav-scrollbar")) {
            var options = {
                damping: "0.5",
            };
            Scrollbar.init(document.querySelector("#sidenav-scrollbar"), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="<?php echo site_url(); ?>public/assets/js/material-dashboard.min.js?v=3.2.0"></script>
</body>

</html>