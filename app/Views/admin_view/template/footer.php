<!--   Core JS Files   -->
<script src="<?php echo site_url(); ?>public/assets/js/core/popper.min.js"></script>
<script src="<?php echo site_url(); ?>public/assets/js/core/bootstrap.min.js"></script>
<script src="<?php echo site_url(); ?>public/assets/js/plugins/perfect-scrollbar.min.js"></script>
<script src="<?php echo site_url(); ?>public/assets/js/plugins/smooth-scrollbar.min.js"></script>
<script src="<?php echo site_url(); ?>public/assets/js/plugins/chartjs.min.js"></script>
<!-- script by ritika -->
<script src="<?php echo site_url(); ?>public/assets/js/plugins/function.js"></script>
<!-- Bootstrap JS -->
<script src="<?= site_url('public/assets/js/material-dashboard.min.js?v=3.2.0') ?>"></script>
<!-- jQuery (required for Bootstrap 4 JS) -->
<script src="<?php echo site_url(); ?>public/assets/js/plugins/jquery-3.5.1.slim.min.js"></script>
<!-- Bootstrap JS (required for modals and other interactive components) -->
<script src="<?php echo site_url(); ?>public/assets/js/bootstrap.min.js"></script>
<!-- jQuery CDN (Use only this one) -->
<script src="<?php echo site_url(); ?>public/assets/js/jquery-3.6.0.min.js"></script>
<!-- SweetAlert2 CSS -->
<link href="<?php echo site_url('public/assets/css/sweetalert2.min.css'); ?>" rel="stylesheet">
<!-- SweetAlert2 JS -->
<script src="<?php echo site_url(); ?>public/assets/js/plugins/sweetalert2.min.js"></script>
<!-- add form details by ritika -->
<script>
    $(document).ready(function () {
        $('#save_add_Button').click(function (e) {
            e.preventDefault();  // Prevent default form submission

            // Get form data
            var formData = new FormData($('#form_add_details')[0]);

            // Perform client-side validation before submitting
            var progTitle = $('#progTitle').val(); // Assuming 'progTitle' is the ID of the input
            var targetGroup = $('#targetGroup').val(); // Assuming 'targetGroup' is the ID of the input
            var date = $('#date').val(); // Assuming 'date' is the ID of the input
            var progDirector = $('#progDirector').val(); // Assuming 'progDirector' is the ID of the input
            var dealingAsstt = $('#dealingAsstt').val(); // Assuming 'dealingAsstt' is the ID of the input

            // Check if required fields are filled
            if (!progTitle || !targetGroup || !date || !progDirector || !dealingAsstt) {
                Swal.fire({
                    icon: 'error',
                    title: 'Empty Fields',
                    text: 'Please fill all the required fields.',
                    showConfirmButton: false, // Hide the "OK" button
                    timer: 2000  // Auto-close after 2 seconds
                });
                return; // Stop further execution if validation fails
            }

            // Send the form data using AJAX
            $.ajax({
                url: '<?php echo base_url("/admin/saveDetails"); ?>',  // Adjust URL to your controller
                type: 'POST',
                data: formData,
                dataType: 'json',
                processData: false,
                contentType: false,
                success: function (response) {
                    if (response.status == 'success') {
                        // Reset the form fields after successful submission
                        $('#form_add_details')[0].reset();

                        // Close the modal (if applicable)
                        $('#addDetailsModal').modal('hide');

                        // Show success message dynamically using SweetAlert2
                        Swal.fire({
                            icon: 'success',
                            title: 'Added Details!',
                            text: 'Details Successfully added',
                            showConfirmButton: false,  // Hide the "OK" button
                            timer: 2000  // Auto-close after 2 seconds
                        }).then(() => {
                            location.reload();  // Reload the page to reflect changes
                        });
                    } else {
                        // Show error message dynamically using SweetAlert2
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: response.message || 'There was an issue with the submission.',
                            showConfirmButton: false,  // Hide the "OK" button
                            timer: 2000  // Auto-close after 2 seconds
                        });
                    }
                },
                error: function () {
                    // Handle error case with SweetAlert2
                    Swal.fire({
                        icon: 'error',
                        title: 'Something went wrong!',
                        text: 'Please try again later.',
                        showConfirmButton: false,  // Hide the "OK" button
                        timer: 2000  // Auto-close after 2 seconds
                    });
                }
            });
        });
    });
</script>
<!-- delete form details by ritika-->
<script>
    $(document).ready(function () {
        // Handle delete click
        $(".delete-details i").on("click", function () {
            // Get the prog_id
            var prog_id = $(this).data('id');

            // Confirm the action using SweetAlert2
            Swal.fire({
                title: 'Are you sure?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes',
                cancelButtonText: 'Cancel',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    // Perform the AJAX request to delete the record
                    $.ajax({
                        url: '<?php echo base_url("/admin/deleteDetails"); ?>', // URL to the delete method in your controller
                        type: 'POST',
                        data: { prog_id: prog_id }, // Send the prog_id as POST data
                        success: function (response) {
                            // If the deletion was successful, show success message using SweetAlert2
                            if (response.success) {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Deleted!',
                                    text: 'Your record has been deleted.',
                                    showConfirmButton: false,
                                    timer: 2000
                                }).then(() => {
                                    location.reload();  // Reload the page to reflect changes
                                });
                            } else {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Oops...',
                                    text: 'Failed to delete the record.',
                                });
                            }
                        },
                        error: function (xhr, status, error) {
                            Swal.fire({
                                icon: 'error',
                                title: 'Error!',
                                text: 'An error occurred: ' + error,
                            });
                        }
                    });
                }
            });
        });
    });
</script>
<!-- edit form details by ritika -->
<!-- <script>
    $(document).ready(function () {
        $(document).ready(function () {
            $('#update_Button').click(function (e) {
                e.preventDefault();  // Prevent default form submission
                $('#update_form_details').on('click', function () {
                    const progId = $(this).data('id');
                    // Make an AJAX call to fetch data and populate modal
                    $.ajax({
                        url: '/admin/updateRecord', // Replace with the correct URL to fetch data
                        type: 'GET',
                        data: { id: progId },
                        success: function (response) {
                            $('#prog_id').val(response.prog_id);
                            $('#progTitle').val(response.progTitle);
                            $('#targetGroup').val(response.targetGroup);
                            $('#date').val(response.date);
                            $('#progDirector').val(response.progDirector);
                            $('#dealingAsstt').val(response.dealingAsstt);
                            $('#materialLink').val(response.materialLink);
                            $('#paymentdone').val(response.paymentdone);
                        }
                    });
                });
            })

        });

        // Update the record when the save button is clicked
        $('#save_update_Button').on('click', function () {
            var formData = new FormData($('#update_form_details')[0]);

            $.ajax({
                url: '/admin/updateRecord',  // The URL to update record
                type: 'POST',
                data: formData,
                processData: false,  // Important
                contentType: false,  // Important
                success: function (response) {
                    if (response.status == 'success') {
                        alert('Record updated successfully!');
                        $('#updateDetailsModal').modal('hide');
                        location.reload(); // Optionally reload the page to reflect the changes
                    } else {
                        alert('Failed to update record!');
                    }
                }
            });
        });
    });
</script> -->

<script>
    // $(document).ready(function () {
    // Populate modal with data
    // $('.edit_btn').click(function () {


    //     const progId = $(this).data('id');
    //     alert(progId);
    //     $.ajax({

    //         url: '<?php //echo base_url() . "admin/get-data-for-update/" ?>',
    //         dataType: 'json',
    //         contentType: 'application/json',
    //         type: 'GET',
    //         data: {
    //             prog_id: progId,

    //         },
    //         beforeSend: function () { },
    //         success: function (data) {
    //             console.log(data);
    //         },
    //         error: function (data) {
    //             console.log(data);
    //         }
    //     }).done(function (data) {
    //         console.log(data);
    //         console.log(data[0]['prog_id']);
    //         console.log(data[0]['progTitle']);

    //         $("#prog_id").val(data[0]['prog_id']);
    //         $("#progTitle").val(data[0]['progTitle']);


    //         //         if (data == true) {
    //         //             alert("ETC Application Accepted");
    //         //             location.reload();
    //         //         } else {

    //         //             alert("Delivery date is not defined for this application");
    //         //             window.location.href = '<?php //echo base_url() . "etc/etc-delivery-date/" ?>';
    //         //             //alert("Status Not Updated");
    //         //         }
    //     });




    // Update record on save
    
    // });
</script>

</html>