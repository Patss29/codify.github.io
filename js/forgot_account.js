document.getElementById('conBtn').addEventListener('click', function(event) {
    var emailInput = document.getElementById('idAccount').value;

    if (emailInput.trim() === '') {
        Swal.fire({
            icon: 'warning',
            title: 'Warning',
            text: 'Please enter your email address.',
            confirmButtonText: 'OK'
        });
        return;
    }

    Swal.fire({
        title: 'Checking...',
        text: 'Please wait while we check your email.',
        icon: 'info',
        showConfirmButton: false,
        didOpen: () => {
            Swal.showLoading();
        }
    });

    $.ajax({
        url: 'functions/check_email.php',
        method: 'POST',
        data: { email: emailInput },
        success: function(response) {
            try {
                console.log("Raw Response: ", response);

                const data = JSON.parse(response);

                setTimeout(() => {
                    Swal.close();

                    if (data.status === 'success') {
                        Swal.fire({
                            icon: 'success',
                            title: 'Email Found!',
                            text: 'This email exists in the database.',
                        }).then((result) => {
                            if (result.isConfirmed && data.showModal) {
                                $('#reset-passModal').modal('show');
                            }
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Email Not Found!',
                            text: 'This email is not registered.',
                        });
                    }
                }, 1500);
            } catch (e) {
                console.error("Invalid JSON response: ", response);
                Swal.close();
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'An unexpected error occurred. Please try again later.',
                });
            }
        },
        error: function(xhr, status, error) {
            console.error('AJAX request failed: ', status, error);
            Swal.close();
            Swal.fire({
                icon: 'error',
                title: 'Request Failed',
                text: 'There was an issue connecting to the server.',
            });
        }
    });
});

$('#reset-passModal').on('shown.bs.modal', function () {
    $('#newpassword').trigger('focus');
});

$('#resetPass-form').on('submit', function(event) {
    event.preventDefault();

    var newPassword = $('#newpassword').val();
    var confirmPassword = $('#conpassword').val();
    var emailInput = $('#idAccount').val().trim();

    if (newPassword !== confirmPassword) {
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'Passwords do not match.',
        });
        return;
    }

    Swal.fire({
        title: 'Updating password...',
        text: 'Please wait a moment.',
        icon: 'info',
        allowOutsideClick: false,
        showCancelButton: false,
        didOpen: () => {
            Swal.showLoading();
        }
    });

    $.ajax({
        url: 'functions/reset_password.php',
        method: 'POST',
        data: { email: emailInput, newpassword: newPassword },
        success: function(response) {
            setTimeout(() => {
                Swal.close();
                console.log("Response: ", response);
                var data = JSON.parse(response);

                if (data.status === 'success') {
                    Swal.fire({
                        icon: 'success',
                        title: 'Password Updated!',
                        text: data.message,
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = 'student_login.php';
                        }
                    });
                } else {
                    Swal.fire({
                        title: 'Error',
                        text: data.message,
                        icon: 'error'
                    });
                }
            }, 1500);
        },
        error: function() {
            Swal.close();
            Swal.fire({
                title: 'Error',
                text: 'An error occurred while updating the password. Please try again.',
                icon: 'error'
            });
        }
    });
});