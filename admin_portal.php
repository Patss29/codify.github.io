
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <script src="js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap5/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/admin_portal.css">
</head>
<body>
    <div id="sidebar">
        <h5 class="mb-3 ps-3 sublogo">Quick Links</h5>
        <ul>
            <li><a href="admin_portal.php"><i class="material-icons">dashboard</i> Dashboard</a></li>
            <li><a href="admin_students.php"><i class="material-icons">school</i> Students</a></li>
            <li><a href="#"><i class="material-icons">event</i> Attendance</a></li>
        </ul>
    </div>
    <div class="content-wrapper">
        <!-- Navbar -->
        <nav class="navbar">
            <button class="navbar-toggler" onclick="toggleSidebar()">
                <span class="navbar-toggler-icon"></span> 
            </button>
            <a class="navbar-brand" href="/">Codify</a>
        </nav>

        <!-- Main Content -->
        <div class="container mt-4">
            <h3 class="mt-4 mb-4" style="font-weight: bold;">Dashboard</h3> 
            <div class="row justify-content-center align-items-center">
                <div class="col-md-3">
                    <div class="card mb-3 borderless">
                        <div class="card-body">
                            <h5 class="card-title">42</h5>
                            <p class="card-text">Students</p>
                        </div>
                    </div>
                </div>
        
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
        
            <!-- Events Section -->
            <div class="row mt-4">
                <div class="col-md-8 mx-auto">
                    <div class="card mb-3 borderless">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="card-title announcements">Events</h5>
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
                  
                            <!-- Carousel Container -->
                            <div id="eventsCarousel" class="carousel slide mt-3" data-bs-ride="carousel">
                                <div class="carousel-inner">
                  
                                    <!-- First Slide with Two Cards -->
                                    <div class="carousel-item active">
                                        <div class="row">
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
                  
                                    <!-- Second Slide with Two Cards -->
                                    <div class="carousel-item">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="card mb-3">
                                                    <div class="card-body">
                                                        <h5 style="font-weight: bold;">Event 3: Charity Run</h5>
                                                        <p class="card-text">Join us for a charity run to support local schools on November 20th.</p>
                                                        <button class="btn btn-success">Take Attendance</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="card mb-3">
                                                    <div class="card-body">
                                                        <h5 style="font-weight: bold;">Event 4: Art Exhibition</h5>
                                                        <p class="card-text">Explore the artistic talents of students in our annual art exhibition.</p>
                                                        <button class="btn btn-success">Take Attendance</button>
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
                <div class="col-md-4">
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
        
    </div>
    
    <script>
        function toggleSidebar() {
           document.body.classList.toggle("collapsed");
        }
    </script>

</body>
</html>