<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap5/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.6/dist/sweetalert2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style/login.css">
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

        #backBtn {
            position: fixed;
            top: 10px;
            left: 10px;
            z-index: 1000;
            font-size: 1.5rem;
            background-color: transparent;
            border: none;
            cursor: pointer;
        }

        #backBtn i {
            color: #6256CA;  /* Set the icon color to white or any color */
        }
    </style>

    <button type="button" class="btn btn-secondary" id="backBtn">
        <i class="bi bi-arrow-left"></i>
    </button>

    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card p-3" style="width:22rem;" id="loginContainer">
            <div class="card-body">
                <form id="loginForm" method="POST" action="functions/insert_student_login.php">
                    <input type="hidden" name="role" id="roleInput" value="">
                        <img src="img/NCST-logo.png" class="mx-auto d-block" id="ncstLogo" alt="">
                        <h3 class="text-center mt-4" style="font-weight:bold;">Login</h3>
                    <div class="col">
                        <div class="row">
                            <label for="idLogin" class="form-label ">Email</label>
                            <input type="text" class="form-control input-field mb-3" id="idLogin" name="idLogin" required>
                        </div>

                         <div class="row">  <!-- pinalatin ko yung name,id -->
                            <label for="idPassword" class="form-label mt-3">Password</label>
                            <input type="password" class="form-control input-field" id="idPassword" name="idPassword" autocomplete="current-password" required>
                        </div>

                        <div class="row mt-4">
                            <div class="col text-center">
                                <button type="submit" class="btn w-50" id="loginBtn">Login</button>
                            </div>
                        </div>

                        <div class="row mt-1">
                            <div class="col text-center">
                                <button type="button" class="btn btnRegister w-50" data-bs-toggle="modal" data-bs-target="#signupModal">Register</button>
                            </div>
                        </div>

                        <div class="row mt-1">
                            <div class="col text-center">
                                <a href="forgot_account.php">Forgot Password?</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--Modal kapag nag login-->
    <div class="modal fade" id="popupModal" tabindex="-1" aria-labelledby="popupModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="popupModalLabel">Login Status</h5>
                </div>
                <div class="modal-body text-center" id="popup-message">
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button type="button" class="btn" id="loginBtn" data-bs-dismiss="modal">Okay</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal kapag mag ssignup-->
    <div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="Modal2" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered d-flex justify-content-center">
            <div class="modal-content w-75">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <h3 class="text-center" id="Modal2" style="font-weight:bold;">Sign-Up</h3>
                    <form id="register-form" method="POST" action="functions/user_login_register.php">
                        <label for="firstName" class="form-label">First Name</label>
                        <input type="text" class="form-control input-field" id="firstName" name="firstName" required>

                        <label for="lastName" class="form-label mt-4">Last Name</label>
                        <input type="text" class="form-control input-field" id="lastName" name="lastName" required>

                        <label for="email_reg" class="form-label mt-4">Email</label>
                        <input type="text" class="form-control input-field" id="email_reg" name="email_reg" required>

                        <label for="password_reg" class="form-label mt-4">Password</label>
                        <input type="password" class="form-control input-field" id="password_reg" name="password_reg" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required autocomplete="new-password">

                        <div class="text-center">
                            <button type="submit" class="btn btn-block mt-4" id="signupBtn">Sign up</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="jQuery/jquery-3.7.1.min.js"></script>
    <script src="bootstrap5/js/bootstrap.bundle.min.js"></script>
    <script src="js/student_login.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.6/dist/sweetalert2.all.min.js"></script>
    <script src="js/student_register.js"></script>

    <script>
        const backBtn = document.getElementById('backBtn');

        backBtn.addEventListener('click', function() {
            window.location.href = 'index.html';
        });
    </script>

</body>
</html>

<!--<script>
        //Eto since wala pa yung sa php nag try lang muna ako gumawa yung modal
        document.getElementById('loginForm').addEventListener('submit', function(e) {
        e.preventDefault();

        const username = document.getElementById('idLogin').value;
        const password = document.getElementById('password').value;
      
        let message = '';
            if (username === 'admin' && password === 'password') {
                message = 'Login successful! Welcome.';
            } else {
                message = 'Incorrect username or password. Please try again.';
            }

        document.getElementById('popup-message').textContent = message;
    
        const modal = new bootstrap.Modal(document.getElementById('popupModal'));
        modal.show();
        });
    </script>-->