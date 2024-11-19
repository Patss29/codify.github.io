<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap5/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/student_portal.css">
    <link rel="stylesheet" href="style/student_event.css">
</head>
<body>
    <?php include 'portal_includes/student_portal_navigation.php';?>

    <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="logoutModalLabel">Logout Confirmation</h5>
                </div>
                <div class="modal-body">
                    Are you sure you want to log out?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="confirmLogoutBtn">Confirm</button>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container">
        <h3 class="mt-4 mb-4" style="font-weight: bold;">Events</h3>
        <div class="row">
        
            <div class="col-lg-4 col-md-6 col-12 mb-4">
                <div class="card borderless large-screen-card">
                    <img src="img/CSD-Week.jpg" class="card-img-top img-fluid">
                    <div class="card-body">
                        <h5 class="card-title">Event 1: CSD Week</h5>
                        <p class="card-text">Attention to all the students under the Computer Science Department. Join us as we held a 3-day celebration for our department week on November 21-23.</p>
                        <button type="button" class="btn btn-primary text-white" id="btnCSD">Select Event</button>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12 mb-4">
                <div class="card borderless large-screen-card">
                    <img src="img/Tj-Monterde-Concert.jpg" class="card-img-top img-fluid">
                    <div class="card-body">
                        <h5 class="card-title">Event 2: Tj Monterde Concert</h5>
                        <p class="card-text">Join us for a concert with Tj Monterde at NCST Open Field on November 28th.</p>
                        <button type="button" class="btn btn-primary text-white" id="btn2">Take Attendance</button>
                    </div>
                </div>
            </div>
  
            <div class="col-lg-4 col-md-6 col-12 mb-4">
                <div class="card borderless large-screen-card">
                    <img src="img/Tj-Monterde-Concert.jpg" class="card-img-top img-fluid">
                    <div class="card-body">
                        <h5 class="card-title">Event 3: Tj Monterde Concert</h5>
                        <p class="card-text">Join us for a concert with Tj Monterde at NCST Open Field on November 28th.</p>
                        <button type="button" class="btn btn-primary text-white" id="btn3">Take Attendance</button>
                    </div>
                </div>
            </div>
  
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function toggleSidebar() {
            document.body.classList.toggle("collapsed");
        }

        const logoutBtn = document.getElementById('logoutBtn');
        const logoutModal = new bootstrap.Modal(document.getElementById('logoutModal'));
        const confirmLogoutBtn = document.getElementById('confirmLogoutBtn');

        logoutBtn.addEventListener('click', function() {
            logoutModal.show();
        });

        confirmLogoutBtn.addEventListener('click', function() {
            window.location.href = 'index.html';
        });

        const btn1 = document.getElementById('btnCSD');
        const btn2 = document.getElementById('btn2');
        const btn3 = document.getElementById('btn3');

        btn1.addEventListener('click', function() {
            window.location.href = 'csd_week_event.php';
        });
        btn2.addEventListener('click', function() {
            window.location.href = 'qr_student.php';
        });
        btn3.addEventListener('click', function() {
            window.location.href = 'qr_student.php';
        });
    </script>
  
</body>
</html>