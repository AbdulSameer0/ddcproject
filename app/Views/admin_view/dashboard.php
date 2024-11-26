<?php include('template/header.php'); ?>

<body class="g-sidenav-show bg-gray-100">
    <!-- aside/navbar -->
    <aside
        class="sidenav navbar navbar-vertical navbar-expand-xs border-radius-lg fixed-start ms-2 bg-white my-2 z-index-2"
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
                    <a class="nav-link active text-white" href="#" style="background-color:#5B6880;">
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
    <!-- /aside/navbar -->
    <!-- main-content area -->
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
        <!-- header -->
        <header class="mt-2 mr-2 p-3 text-white border-radius-lg" style="background-color:#5B6880;">
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
                <div class="time-area mt-5">
                    <div class="badge badge-pill" style="background-color:#FFFFFF;">
                        <div class="text-dark" id="current-time"></div>
                    </div>
                </div>
            </div>
        </header>
        <!-- /header -->
        <script>
            // Function to format the time as HH:MM:SS
            function updateTime() {
                const currentTime = new Date();
                document.getElementById('current-time').innerText = currentTime.toLocaleTimeString();
            }
            setInterval(updateTime, 1000); // Update time every second
        </script>
        <style>
            /* for image set on background */
            .custom-background {
                background-image: url('public/assets/img/logoSide.png');
                background-size: cover;
                background-position: center;
                min-height: 400px;
                /* Ensure it's visible */
            }
        </style>
        <!-- main-container -->
        <div class="mt-2 mr-2 mb-2 p-3 card text-white border-radius-lg">
            <!-- table row  -->
            <div class="row">
                <div class="col-16">
                    <!-- <div class="list-heading">
                        <h4>List</h4>
                    </div> -->
                    <div class="card my-4 custom-background">
                        <div class="px-0 pb-2">
                            <div class="table-responsive">
                                <table class="table table-hover align-items-center mb-0 shadow-sm p-3">
                                    <thead class="head">
                                        <tr>
                                            <th colspan="11"><!-- Button to open the modal -->
                                                <div class="">
                                                    <button type="submit" class="btn btn-primary float-end mt-0 mb-0"
                                                        data-toggle="modal" data-target="#addDetailsModal">
                                                        Add Details <i class="fa fa-plus-circle"></i>
                                                    </button>
                                                </div>
                                            </th>
                                        </tr>
                                        <tr class="text-white">
                                            <th class="text-center text-uppercase text-xs font-weight-bold">S.No.</th>
                                            <th class="text-center text-uppercase text-xs font-weight-bold">
                                                Programme<br>
                                                Title</th>
                                            <th class="text-center text-uppercase text-xs font-weight-bold">Target
                                                <br>Group
                                            </th>
                                            <th class="text-center text-uppercase text-xs font-weight-bold">Date</th>
                                            <th class="text-center text-uppercase text-xs font-weight-bold">
                                                Programme<br>
                                                Director</th>
                                            <th class="text-center text-uppercase text-xs font-weight-bold">Dealing<br>
                                                Assistant</th>
                                            <th class="text-center text-uppercase text-xs font-weight-bold">Programme
                                                Schedule<br> (in PDF)</th>
                                            <th class="text-center text-uppercase text-xs font-weight-bold">
                                                Attendance<br> (in PDF)</th>
                                            <th class="text-center text-uppercase text-xs font-weight-bold">
                                                Reading Material<br> (Link)</th>
                                            <th class="text-center text-uppercase text-xs font-weight-bold">Payment Done
                                            </th>
                                            <th class="text-center text-uppercase text-xs font-weight-bold">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody id="form_details_table">
                                        <?php if (!empty($programme_info)): ?>
                                            <?php $counter = 1; ?>
                                            <?php foreach ($programme_info as $row): ?>
                                                <tr>
                                                    <td class="text-center"><?= esc($counter++); ?></td>
                                                    <td class="text-center text-capitalize"><?= esc($row['progTitle']); ?></td>
                                                    <td class="text-center text-capitalize"><?= esc($row['targetGroup']); ?>
                                                    </td>
                                                    <td class="text-center text-capitalize"><?= esc($row['date']); ?></td>
                                                    <td class="text-center text-capitalize"><?= esc($row['progDirector']); ?>
                                                    </td>
                                                    <td class="text-center text-capitalize"><?= esc($row['dealingAsstt']); ?>
                                                    </td>
                                                    <!-- Programme Schedule (in PDF) -->
                                                    <td class="text-center text-success text-capitalize"
                                                        style="word-wrap: break-word; white-space: normal;text-transform: lowercase;">
                                                        <?php if ($row['paymentdone'] == 'no'): ?>
                                                            <span class="text-danger">PDF not uploaded. <br>Payment pending.</span>
                                                        <?php else: ?>
                                                            <?= esc($row['progPdf']); ?>
                                                        <?php endif; ?>
                                                    </td>
                                                    <!-- Attendance PDF -->
                                                    <td class="text-center text-success text-capitalize"
                                                        style="word-wrap: break-word; white-space: normal;text-transform: lowercase;">
                                                        <?php if ($row['paymentdone'] == 'no'): ?>
                                                            <span class="text-danger">PDF not uploaded. <br>Payment pending.</span>
                                                        <?php else: ?>
                                                            <?= esc($row['attandancePdf']); ?>
                                                        <?php endif; ?>
                                                    </td>
                                                    <td class="text-center" style="word-wrap: break-word; white-space: normal;">
                                                        <a href="<?= esc($row['materialLink']); ?>" target="_blank">
                                                            <?= esc($row['materialLink']); ?>
                                                        </a>
                                                    </td>
                                                    <td class="text-center text-capitalize"><?= esc($row['paymentdone']); ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="d-flex justify-content-center">
                                                            <!-- edit details -->
                                                            <div class="me-3">
                                                                <div class="text-success icon-hover edit-details">
                                                                    <i class="fa fa-edit " data-toggle="modal"
                                                                        data-target="#updateDetailsModal"
                                                                        data-id="<?= $row['prog_id']; ?>"
                                                                        title="Edit Details"></i>
                                                                </div>
                                                            </div>
                                                            <div class="text-danger icon-hover delete-details">
                                                                <i class="fa fa-trash" data-id="<?= $row['prog_id']; ?>"
                                                                    title="Edit Details" name="prog_id"></i>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        <?php else: ?>
                                            <tr>
                                                <td colspan=" 11" class="text-center text-uppercase text-danger">No
                                                    records
                                                    found.
                                                </td>
                                            </tr>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Pagination Component -->
                    <div class="pagination float-end">
                        <nav class="">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <li class="page-item active">
                                    <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">3</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">4</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!-- /Pagination Component -->
                </div>
            </div>
        </div>
        <!-- modals start  -->
        <!-- add details modal -->
        <div class="modal fade" id="addDetailsModal" tabindex="-1" role="dialog" aria-labelledby="addDetailsModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="background-color:#608BC1;">
                        <h5 class="modal-title text-white" id="addDetailsModalLabel">Add Details</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-area custom-background">
                            <form id="form_add_details">
                                <table class="table table-bordered">
                                    <tr>
                                        <td style="width: 20px;"><label for="progTitle">Programme Title</label></td>
                                        <td><input type="text" class="form-control" id="progTitle" name="progTitle"
                                                placeholder=""></td>
                                    </tr>
                                    <tr>
                                        <td style="width: 20px;"><label for="targetGroup">Target Group</label></td>
                                        <td><input type="text" class="form-control" id="targetGroup" name="targetGroup"
                                                placeholder=""></td>
                                    </tr>
                                    <tr>
                                        <td style="width: 20px;"><label for="date">Date</label></td>
                                        <td><input type="date" class="form-control" id="date" name="date"></td>
                                    </tr>
                                    <tr>
                                        <td style="width: 20px;"><label for="progDirector">Programme Director</label>
                                        </td>
                                        <td><input type="text" class="form-control" id="progDirector"
                                                name="progDirector" placeholder=""></td>
                                    </tr>
                                    <tr>
                                        <td style="width: 20px;"><label for="dealingAsstt">Dealing Assistant</label>
                                        </td>
                                        <td>
                                            <select class="form-control" id="dealingAsstt" name="dealingAsstt">
                                                <option value="">Select</option>
                                                <option value="DA-1">DA-1</option>
                                                <option value="DA-2">DA-2</option>
                                                <option value="DA-3">DA-3</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 20px;"><label for="progPdf">Programme Schedule in PDF</label>
                                        </td>
                                        <td><input type="file" class="form-control mt-2" id="progPdf" name="progPdf">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 20px;"><label for="attandancePdf">Attendance in PDF</label>
                                        </td>
                                        <td><input type="file" class="form-control mt-2" id="attandancePdf"
                                                name="attandancePdf"></td>
                                    </tr>
                                    <tr>
                                        <td style="width: 20px;"><label for="materialLink">Reading Material Link</label>
                                        </td>
                                        <td><input class="form-control" id="materialLink" name="materialLink"></td>
                                    </tr>
                                    <tr>
                                        <td style="width: 20px;"><label for="paymentdone">Payment Done</label></td>
                                        <td>
                                            <select class="form-control" id="paymentdone" name="paymentdone">
                                                <option value="">Select</option>
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr></tr>
                                </table>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal" id="save_add_Button">Save
                            Details</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Update Details Modal -->
        <div class="modal fade" id="updateDetailsModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #608BC1;">
                <h5 class="modal-title text-white">Update Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="update_form_details">
                    <input type="hidden" name="prog_id" id="prog_id">
                    <table class="table table-bordered">
                        <tr>
                            <td><label for="progTitle">Programme Title</label></td>
                            <td><input type="text" class="form-control" id="progTitle" name="progTitle" required></td>
                        </tr>
                        <tr>
                            <td><label for="targetGroup">Target Group</label></td>
                            <td><input type="text" class="form-control" id="targetGroup" name="targetGroup"></td>
                        </tr>
                        <tr>
                            <td><label for="date">Date</label></td>
                            <td><input type="date" class="form-control" id="date" name="date" required></td>
                        </tr>
                        <tr>
                            <td><label for="progDirector">Programme Director</label></td>
                            <td><input type="text" class="form-control" id="progDirector" name="progDirector"></td>
                        </tr>
                        <tr>
                            <td><label for="dealingAsstt">Dealing Assistant</label></td>
                            <td>
                                <select class="form-control" id="dealingAsstt" name="dealingAsstt">
                                    <option value="">Select</option>
                                    <option value="DA-1">DA-1</option>
                                    <option value="DA-2">DA-2</option>
                                    <option value="DA-3">DA-3</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="progPdf">Programme Schedule in PDF</label></td>
                            <td><input type="file" class="form-control" id="progPdf" name="progPdf"></td>
                        </tr>
                        <tr>
                            <td><label for="attandancePdf">Attendance in PDF</label></td>
                            <td><input type="file" class="form-control" id="attandancePdf" name="attandancePdf"></td>
                        </tr>
                        <tr>
                            <td><label for="materialLink">Reading Material Link</label></td>
                            <td><input type="url" class="form-control" id="materialLink" name="materialLink"></td>
                        </tr>
                        <tr>
                            <td><label for="paymentdone">Payment Done</label></td>
                            <td>
                                <select class="form-control" id="paymentdone" name="paymentdone">
                                    <option value="">Select</option>
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="update_Button">Save Details</button>
            </div>
        </div>
    </div>
</div>



        <!-- /modals end  -->
        </div>
        <!-- /main-container -->
        <!-- footer -->
        <footer class="mt-2 mr-2 p-3 text-white border-radius-lg fixed-bottom z-index-1"
            style="margin-left: 240px; margin-bottom: 0px; background-color:#5B6880;">
            <div class="row">
                <div class="col-lg-12 mb-lg-0 mb-4">
                    <div class="copyright text-center text-sm text-muted text-lg-start">
                        <span class="font-weight-bold text-white">©</span>
                        <a href="https://delhicourts.nic.in/" target="_blank">
                            <span class="font-weight-bold text-white">Delhi District Court</span></a>
                        <span class="font-weight-bold text-white">by</span>
                        <a href="#" class="font-weight-bold text-white" target="_blank">IT-Cell (HQs), Tis Hazari.</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- /footer -->
    </main>
    <!-- /main-content area -->
    <?php include('template/footer.php'); ?>