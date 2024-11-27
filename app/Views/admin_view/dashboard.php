<?php include('template/header.php'); ?>

<body class="g-sidenav-show bg-gray-100">
    <!-- aside/navbar -->
    <aside
        class="sidenav navbar navbar-vertical navbar-expand-xs border-radius-lg fixed-start ms-2 bg-white my-2 z-index-2"
        id="sidenav-main">
        <!-- Sidenav Header -->
        <div class="sidenav-header d-flex justify-content-between align-items-center">
            <button class="btn btn-link text-dark d-xl-none" type="button" id="iconSidenav">
                <i class="fas fa-times"></i>
            </button>
            <a class="navbar-brand px-4 py-3 m-0" href="#" target="_blank">
                <img src="<?php echo site_url(); ?>public/assets/img/logoSide.png" class="navbar-brand-img" width="30"
                    height="30" alt="main_logo" />
                <span class="ms-1 text-sm text-dark font-weight-bold">Delhi District Court</span>
            </a>
        </div>
        <hr class="horizontal dark mt-0 mb-2" />
        <!-- Navbar Collapse (for toggling the sidebar) -->
        <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <!-- Dashboard Link -->
                <li class="nav-item">
                    <a class="nav-link active text-white bg-gradient-dark" href="#">
                        <i class="material-symbols-rounded opacity-5">dashboard</i>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>
                <!-- Logout Link -->
                <li class="nav-item">
                    <a class="nav-link text-dark" href="<?php echo base_url('admin/logout'); ?>">
                        <i class="material-symbols-rounded opacity-5">logout</i>
                        <span class="nav-link-text ms-1">Logout</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>
    <!-- /aside navbar -->
    <!-- main-content area -->
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
        <!-- main header -->
        <header class="mt-2 mr-2 ml-1 p-1 text-white border-radius-lg bg-gradient-dark"
            style="height: 50px; display: flex; justify-content: space-between; align-items: center;">
            <!-- Logo Section -->
            <div class="badge badge-light logo" style="flex-shrink: 0;">
                <img src="<?php echo site_url(); ?>public/assets/img/logoSide.png" alt="Logo"
                    style="height: 30px; width: auto;">
            </div>
            <!-- Text Section (DELHI DISTRICT COURT) -->
            <div class="text-div ml-0 mt-2 p-2" style="white-space: nowrap;">
                <span class="ms-1 text-white font-weight-bold text-lg text-uppercase mt-0 mb-0">DELHI</span>
                <span class="text-sm d-block ml-1 mt-0 mb-2">DISTRICT COURT</span>
            </div>
            <!-- Navigation Section -->
            <!-- Time Area Section -->
            <div class="time-area mr-2" style="margin-left: auto;">
                <div class="badge badge-pill" style="background-color:#FFFFFF;">
                    <div class="text-dark" id="current-time"></div>
                </div>
            </div>
        </header>
        <!-- /main header -->
        <!-- page header -->
        <div class="card mt-2 mr-2 ml-1 p-2 text-dark border-radius-lg" style="height: auto;">
            <div class="search-container d-flex justify-content-between align-items-center">
                <div class="row align-items-center justify-content-between">
                    <!-- Dashboard Heading -->
                    <div class="ms-3 col-12 col-md-8 mt-2 ml-0">
                        <h3 class="mb-1 h4 font-weight-bolder ml-0 text-dark">Dashboard</h3>
                    </div>
                    <!-- Navbar -->
                    <div class="container-fluid py-1 px-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-3 ml-0">
                                <li class="breadcrumb-item text-sm">
                                    <a class="opacity-5 text-dark" href="#">Home</a>
                                </li>
                                <li class="breadcrumb-item text-sm text-dark active" aria-current="page">
                                    Dashboard
                                </li>
                            </ol>
                        </nav>
                    </div>
                    <!-- /Navbar -->
                </div>
            </div>
        </div>
        <!-- /page header -->
        <!-- main-container -->
        <div class="mt-2 mr-2 mb-2 p-3 ml-1 card text-white border-radius-lg">
            <!-- table row  -->
            <div class="row">
                <div class="add-details">
                    <button type="submit" class="btn btn-primary float-end mt-0 mb-0" data-toggle="modal"
                        data-target="#addDetailsModal">
                        Add Details <i class="fa fa-plus-circle"></i>
                    </button>
                </div>
                <div class="col-16">
                    <div class="card my-4">
                        <div class="px-0 pb-2">
                            <div class="table-responsive">
                                <table class="table table-hover align-items-center mb-0 shadow-sm p-3 display">
                                    <thead class="head">
                                        <tr>
                                            <th class="text-center text-dark text-uppercase text-xs font-weight-bold">
                                                S.No.
                                            </th>
                                            <th class="text-center text-dark text-uppercase text-xs font-weight-bold">
                                                Programme<br>
                                                Title</th>
                                            <th class="text-center text-dark text-uppercase text-xs font-weight-bold">
                                                Target
                                                <br>Group
                                            </th>
                                            <th class="text-center text-dark text-uppercase text-xs font-weight-bold">
                                                Date
                                            </th>
                                            <th class="text-center text-dark text-uppercase text-xs font-weight-bold">
                                                Programme<br>
                                                Director</th>
                                            <th class="text-center text-dark text-uppercase text-xs font-weight-bold">
                                                Dealing<br>
                                                Assistant</th>
                                            <th class="text-center text-dark text-uppercase text-xs font-weight-bold">
                                                Programme
                                                Schedule<br> (in PDF)</th>
                                            <th class="text-center text-dark text-uppercase text-xs font-weight-bold">
                                                Attendance<br> (in PDF)</th>
                                            <th class="text-center text-dark text-uppercase text-xs font-weight-bold">
                                                Reading Material<br> (Link)</th>
                                            <th class="text-center text-dark text-uppercase text-xs font-weight-bold">
                                                Payment
                                                Done
                                            </th>
                                            <th class="text-center text-dark text-uppercase text-xs font-weight-bold">
                                                Actions
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody id="form_details_table">
                                        <?php if (!empty($programme_info)): ?>
                                            <?php $counter = 1; ?>
                                            <?php foreach ($programme_info as $row): ?>
                                                <tr>
                                                    <td class="text-center"><?= esc($counter++); ?></td>
                                                    <td class="text-center text-capitalize"><?= esc($row['progTitle']); ?>
                                                    </td>
                                                    <td class="text-center text-capitalize"><?= esc($row['targetGroup']); ?>
                                                    </td>
                                                    <td class="text-center text-capitalize"><?= esc($row['date']); ?></td>
                                                    <td class="text-center text-capitalize">
                                                        <?= esc($row['progDirector']); ?>
                                                    </td>
                                                    <td class="text-center text-capitalize">
                                                        <?= esc($row['dealingAsstt']); ?>
                                                    </td>
                                                    <!-- Programme Schedule (in PDF) -->
                                                    <td class="text-center text-success text-capitalize"
                                                        style="word-wrap: break-word; white-space: normal;text-transform: lowercase;">
                                                        <?php if ($row['paymentdone'] == 'no'): ?>
                                                            <span class="text-danger">PDF not uploaded. <br>Payment
                                                                pending.</span>
                                                        <?php else: ?>
                                                            <?= esc($row['progPdf']); ?>
                                                        <?php endif; ?>
                                                    </td>
                                                    <!-- Attendance PDF -->
                                                    <td class="text-center text-success text-capitalize"
                                                        style="word-wrap: break-word; white-space: normal;text-transform: lowercase;">
                                                        <?php if ($row['paymentdone'] == 'no'): ?>
                                                            <span class="text-danger">PDF not uploaded. <br>Payment
                                                                pending.</span>
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
                                                                <div class="text-success icon-hover edit-details"
                                                                    style="cursor: pointer;">
                                                                    <i class="fa fa-edit edit_btn" data-toggle="modal"
                                                                        data-target="#updateDetailsModal"
                                                                        data-id="<?= $row['prog_id']; ?>"
                                                                        title="Edit Details"></i>
                                                                </div>
                                                            </div>
                                                            <div class="text-danger icon-hover delete-details"
                                                                style="cursor: pointer;">
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
                            <input type="text" name="prog_id" id="prog_id">
                            <input type="text" name="prog_id1" id="prog_id1">
                            <input type="text" name="prog_id1" id="prog_id2">
                            <input type="text" name="prog_id1" id="prog_id3">
                            <td>
                                <table class="table table-bordered">
                                    <tr>
                                        <td><label for="progTitle">Programme Title</label></td>
                                        <td><input type="text" class="form-control" id="prog_id1" name="prog_id1"></td>
                                    </tr>
                                    <tr>
                                        <td><label for="targetGroup">Target Group</label></td>
                                        <td><input type="text" class="form-control" id="targetGroup" name="targetGroup">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label for="date">Date</label></td>
                                        <td><input type="date" class="form-control" id="date" name="date" required></td>
                                    </tr>
                                    <tr>
                                        <td><label for="progDirector">Programme Director</label></td>
                                        <td><input type="text" class="form-control" id="progDirector"
                                                name="progDirector">
                                        </td>
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
                                        <td><label for="progPdf">Programme Schedule in PDF</label><br>
                                            <span class="badge badge-pill badge-danger" data-toggle="modal"
                                                data-target="#schedule_info_modal" style="cursor: pointer;">Schedule
                                                Pdf</span>
                                        </td>
                                        <td><input type="file" class="form-control" id="progPdf" name="progPdf"></td>
                                    </tr>
                                    <tr>
                                        <td><label for="attandancePdf">Attendance in PDF</label><br>
                                            <span class="badge badge-pill badge-danger" data-toggle="modal"
                                                data-target="#attendance_info_modal" style="cursor: pointer;">Attendance
                                                Pdf</span>
                                        </td>
                                        <td><input type="file" class="form-control" id="attandancePdf"
                                                name="attandancePdf">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label for="materialLink">Reading Material Link</label></td>
                                        <td><input type="url" class="form-control" id="materialLink"
                                                name="materialLink">
                                        </td>
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
        <!-- programme Schedule pdf info  -->
        <div class="modal fade" id="schedule_info_modal" tabindex="-1" role="dialog"
            aria-labelledby="schedule_info_modalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="schedule_info_modalLabel">Pdf history</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        ----
                    </div>
                </div>
            </div>
        </div>
        <!-- /programme Schedule pdf info  -->
        <!-- attendance pdf info  -->
        <div class="modal fade" id="attendance_info_modal" tabindex="-1" role="dialog"
            aria-labelledby="attendance_info_modalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="attendance_info_modalLabel">Pdf history</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        ----
                    </div>
                </div>
            </div>
        </div>
        <!-- /attendance pdf info  -->
        <!-- /modals end  -->
        </div>
        <!-- /main-container -->
        <!-- footer -->
        <footer class="mt-2 mr-2 ml-2 mb-2 p-3 text-white border-radius-lg fixed-bottom z-index-1 bg-gradient-dark">
            <div class="row">
                <div class="col-lg-12 mb-lg-0 mb-4">
                    <div class="copyright text-center text-sm text-muted text-lg-start">
                        <span class="font-weight-bold text-white">©
                            <a href="https://delhicourts.nic.in/" class="text-white" target="_blank">
                                Delhi District Court</a> by
                            <a href="#" class="font-weight-bold text-white" target="_blank">IT-Cell (HQs), Tis
                                Hazari.</a>
                        </span>
                    </div>
                </div>
            </div>
        </footer>
        <!-- /footer -->
    </main>
    <!-- /main-content area -->


    <?php include('template/footer.php'); ?>

    <script>
        // $("#edit_btn").click(function () {
        $(".edit_btn").click(function () {

            // alert();
            const progId = $(this).data('id');
            alert(progId);
            $.ajax({

                url: '<?php echo base_url() . "admin/get-data-for-update/" ?>',
                dataType: 'json',
                contentType: 'application/json',
                type: 'GET',
                data: {
                    prog_id: progId,

                },
                beforeSend: function () { },
                success: function (data) {
                    console.log(data);
                },
                error: function (data) {
                    console.log(data);
                }
            }).done(function (data) {
                console.log(data);
                console.log(data[0]['prog_id']);
                console.log(data[0]['progTitle']);


                $("#prog_id").val(data[0]['prog_id']);
                $("#prog_id1").val(data[0]['progTitle']);
                $("#prog_id2").val(data[0]['paymentdone']);
                $("#prog_id3").val(data[0]['date']);
                // $("#progTitle").val(data[0]['prog_id']);
                $("#targetGroup").val(data[0]['progTitle']);


            });

        });

    </script>