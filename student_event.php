<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events</title>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="bootstrap5/css/bootstrap.css">
    <link rel="stylesheet" href="style/student_portal.css">
    <link rel="stylesheet" href="style/student_event.css">
</head>
<body>
    <?php include 'portal_includes/student_portal_navigation.php'; ?>
    
    <div class="container">
        <h3 class="mt-4 mb-4" style="font-weight: bold;">Events</h3>
        <div class="row">
        
            <div class="col-lg-4 col-md-6 col-12 mb-4">
                <div class="card borderless large-screen-card">
                    <a href="qr_student.php"><img src="img/Tj-Monterde-Concert.jpg" class="card-img-top img-fluid"></a>
                    <div class="card-body">
                        <h5 class="card-title">Event 1: Tj Monterde Concert</h5>
                        <p class="card-text">Join us for a concert with Tj Monterde at NCST Open Field on November 28th.</p>
                        <button class="btn submit text-white" data-bs-toggle="modal" data-bs-target="#attendanceModal">Take Attendance</button>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12 mb-4">
                <div class="card borderless large-screen-card">
                    <a href="qr_student.php"><img src="img/Tj-Monterde-Concert.jpg" class="card-img-top img-fluid"></a>
                    <div class="card-body">
                        <h5 class="card-title">Event 1: Tj Monterde Concert</h5>
                        <p class="card-text">Join us for a concert with Tj Monterde at NCST Open Field on November 28th.</p>
                        <button class="btn submit text-white" data-bs-toggle="modal" data-bs-target="#attendanceModal">Take Attendance</button>
                    </div>
                </div>
            </div>
  
            <div class="col-lg-4 col-md-6 col-12 mb-4">
                <div class="card borderless large-screen-card">
                    <a href="qr_student.php"><img src="img/Tj-Monterde-Concert.jpg" class="card-img-top img-fluid"></a>
                    <div class="card-body">
                        <h5 class="card-title">Event 1: Tj Monterde Concert</h5>
                        <p class="card-text">Join us for a concert with Tj Monterde at NCST Open Field on November 28th.</p>
                        <button class="btn submit text-white" data-bs-toggle="modal" data-bs-target="#attendanceModal">Take Attendance</button>
                    </div>
                </div>
            </div>
  
        </div>
    </div>
   
    <!--Itong modal par pinagawa ni pat like kapag pipindutin na yung take attendance eto yung sunod na lalabas-->
    <div class="modal fade" id="attendanceModal" tabindex="-1" aria-labelledby="attendanceModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="attendanceModalLabel">Take Attendance</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Click the button below to scan the QR code for attendance.</p>
                    <button class="btn submit text-white">Scan QR Code</button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
  
</body>
</html>