$(document).ready(function() {
    $('#loginForm').submit(function(e) {
        e.preventDefault();

        var loginData = {
            idLogin: $('#idLogin').val(),
            idPassword: $('#idPassword').val()
        };

        $.ajax({
            url: 'functions/insert_student_login.php',
            type: 'POST',
            data: loginData,
            dataType: 'json',
            success: function(response) {
                if (response.status === 'success') {
                    Swal.fire({
                        title: 'Login Successful!',
                        text: 'You will be redirected shortly.',
                        icon: 'success',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = response.redirect;
                        }
                    });
                } else {
                    Swal.fire({
                        title: 'Error!',
                        text: response.message,
                        icon: 'error'
                    });
                }
            },
            error: function(xhr, status, error) {
                Swal.fire({
                    title: 'Error!',
                    text: 'An error occurred. Please try again later.',
                    icon: 'error'
                });
            }
        });
    });
});