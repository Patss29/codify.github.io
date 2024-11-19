<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login</title>
    <link href="bootstrap5/css/sweetalert2.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="bootstrap5/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style/forgot_account.css">
</head>

<body>
        
    <style>
        body {
            background-image: url("img/bg-login.jpg");
            background-attachment: fixed;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }
    </style>

    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card p-3" style="width:22rem;" id="emailContainer">
            <div class="card-body">
                <form id="emailForm" method="POST" action="functions/check_email.php">
                    <input type="hidden" name="role" id="roleInput" value="">
                    <div class="text-center">
                        <i class="bi bi-exclamation-circle text-warning fs-1"></i>
                    </div>
                    <h3 class="text-center mt-1" style="font-weight:bold;">Forgot Password</h3>
                    <p class="text-center mt-1 fs-10">Send your email to reset your password</p>
                    <div class="col">
                        <div class="row">
                            <div class="d-flex align-items-center mt-3">
                                <i class="bi bi-envelope fs-4 me-2"></i>
                                <input type="text" class="form-control" id="idAccount" name="idAccount" placeholder="Enter email" required>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col text-center">
                                <button type="button" class="btn w-50" id="conBtn">Continue</button>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col text-center">
                                <a href="student_login.php" class="btn btnBack w-50" role="button">Back to Login</a>
                            </div>
                        </div>
                    </div>

                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="reset-passModal" tabindex="-1" aria-labelledby="Modal" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered d-flex justify-content-center">
            <div class="modal-content w-75">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body px-4">
                    <h5 class="text-center" id="Modal" style="font-weight:bold; color: #6256CA;">Reset Password</h5>
                    <p class="text-center fs-10">Set and confirm new password for</p>
                    <form id="resetPass-form" method="POST" action="functions/reset_password.php">
                        <label for="newpassword" class="form-label mt-4">New Password</label>
                        <input type="password" id="newpassword" name="newpassword" class="form-control input-field" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required autocomplete="new-password">

                        <label for="conpassword" class="form-label mt-4">Confirm Password</label>
                        <input type="password" id="conpassword" name="conpassword" class="form-control input-field" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required autocomplete="new-password">

                        <div class="text-center">
                            <button type="submit" class="btn btn-block mt-4" id="confirmBtn">Confirm</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="jQuery/jquery-3.7.1.min.js"></script>
    <script src="bootstrap5/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="bootstrap5/js/bootstrap.min.js"></script>
    <script src="bootstrap5/js/sweetalert2.all.min.js"></script>
    <script src="js/forgot_account.js"></script>

</body>
</html>