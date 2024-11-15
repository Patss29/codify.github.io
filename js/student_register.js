$(document).ready(function() {
    $('#signupBtn').on('submit', function(event) {
        event.preventDefault(); 
        $.ajax({
            url: 'student_login.php', 
            type: 'POST',
            data: $(this).serialize(), 
            success: function(response) {
                const result = JSON.parse(response);
                if (result.error) {
                    Swal.fire({
                        title: 'Error!',
                        text: result.message,
                        icon: 'error'
                    });
                } else {
                    Swal.fire({
                        title: 'Register Successful!',
                        text: 'You can now login to have your QR code.',
                        icon: 'success',
                        confirmButtonText: 'OK'
                    })
                }
            },
            error: function() {
                alert('An error occurred while processing your request.');
            }
        });
    });
});