<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap5/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/student_portal.css">
</head>

<main>
    <?php include 'portal_includes/student_portal_navigation.php'; ?>

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
        <h3 class="mt-4 mb-4" style="font-weight: bold;">Dashboard</h3> 
        <div class="row justify-content-center align-items-center">
            <div class="col-md-3">
                <div class="card mb-3 borderless">
                    <div class="card-body">
                        <h5 class="card-title">5</h5>
                        <p class="card-text">Teachers</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card mb-3 borderless">
                    <div class="card-body">
                        <h5 class="card-title">0</h5>
                        <p class="card-text">Attendance Today</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card mb-3 borderless">
                    <div class="card-body">
                        <h5 class="card-title">4</h5>
                        <p class="card-text">Events</p>
                    </div>
                </div>
            </div>
        </div> 
    </div>
 
    <div class="container">
        <div class="row mt-4">
    
            <!-- Events Section -->
            <div class="col-lg-8 col-md-12 mb-4">
                <div class="card mb-3 borderless">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="announcements" style="font-weight: bold;">Events</h5>
                            <div class="carousel-controls">
                                <button class="carousel-control-prev btn btn-link p-0" type="button" data-bs-target="#eventsCarousel" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next btn btn-link p-0 ms-2" type="button" data-bs-target="#eventsCarousel" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>

                        <div id="eventsCarousel" class="carousel slide mt-3" data-bs-ride="carousel">
                            <div class="carousel-inner">

                                <!-- First Slide -->
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="card mb-3">
                                                <img src="img/Tj-Monterde-Concert.jpg" class="card-img-top img-fluid">
                                                <div class="card-body">
                                                    <h5 style="font-weight: bold;">Event 1: Tj Monterde Concert</h5>
                                                    <p class="card-text">Join us for a concert with Tj Monterde at NCST Open Field on November 28th.</p>
                                                    <a href="student_event.php" class="btn submit text-white">Take Attendance</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="card mb-3">
                                                <img src="img/Tj-Monterde-Concert.jpg" class="card-img-top img-fluid">
                                                <div class="card-body">
                                                    <h5 style="font-weight: bold;">Event 1: Tj Monterde Concert</h5>
                                                    <p class="card-text">Join us for a concert with Tj Monterde at NCST Open Field on November 28th.</p>
                                                    <button class="btn submit text-white">Take Attendance</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Second Slide-->
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="card mb-3">
                                                <div class="card-body">
                                                    <h5 style="font-weight: bold;">Event 3: Charity Run</h5>
                                                    <p class="card-text">Join us for a charity run to support local schools on November 20th.</p>
                                                    <button class="btn submit text-white">Take Attendance</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card mb-3">
                                                <div class="card-body">
                                                    <h5 style="font-weight: bold;">Event 4: Art Exhibition</h5>
                                                    <p class="card-text">Explore the artistic talents of students in our annual art exhibition.</p>
                                                    <button class="btn submit text-white">Take Attendance</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Announcements Section -->
            <div class="col-lg-4 col-md-12">
                <div class="card mb-3 borderless">
                    <div class="card-body">
                        <h5 class="card-title announcements">Announcements</h5>
                        <p>Welcome back to the new school term!</p>
                        <p>Upcoming holiday on November 25th.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</main>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="bootstrap5/js/bootstrap.bundle.min.js"></script>

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
    </script>

</body>
</html>