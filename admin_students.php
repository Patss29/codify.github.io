
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

        <!-- Eto para dun sa mag lologin na mga students -->
        <div class="container mt-4">
            <h3 class="mt-4 mb-4" style="font-weight: bold;">Students</h3> 
            <div class="table-responsive">
                <table class="table table-bordered table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th class="py-3">Name</th>
                            <th class="py-3">Title</th>
                            <th class="py-3">Status</th>
                            <th class="py-3">Role</th>
                            <th class="py-3">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Kenneth Gawa na Papers</td>
                            <td>Student</td>
                            <td>Active</td>
                            <td>Senior</td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-sm dropdown-toggle" type="button" id="actionMenu1" data-bs-toggle="dropdown" aria-expanded="false">
                                        Edit
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="actionMenu1">
                                        <li><a class="dropdown-item" href="#">Edit</a></li>
                                        <li><a class="dropdown-item" href="#">Delete</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
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