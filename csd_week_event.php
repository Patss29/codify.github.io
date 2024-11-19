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
    <div class="container-fluid p-4 mb-5" style="background-color: #5E9BEB;">
        <h1 class="text-center text-light"><b>CSD Week Events</b></h1>
    </div>
    <div class="container">
        <div class="row">
        
            <div class="col-lg-4 col-md-6 col-12 mb-4">
                <div class="card borderless large-screen-card">
                    <img src="img/Singing-Contest.jpg" class="card-img-top img-fluid">
                    <div class="card-body">
                        <h5 class="card-title">Event 1: Singing Contest</h5>
                        <p class="card-text">Join us on November 21, 2024 for our exciting Singing Contest.
                            Witness the hidden talents of our BSIT, BSCS, and ACT students as they take the stage and serenade us with their voices.
                            Mark your calendars and let's make some noise!</p>
                        <button type="button" class="btn btn-primary text-white" id="btnTake1">Take Attendance</button>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12 mb-4">
                <div class="card borderless large-screen-card">
                    <img src="img/ML.jpg" class="card-img-top img-fluid">
                    <div class="card-body">
                        <h5 class="card-title">Event 2: ML Esports Tournament & Other Programming Related Contest</h5>
                        <p class="card-text">Join us to witness the talented students in Computer Science Department as they battle with each other on November 22.</p>
                        <button type="button" class="btn btn-primary text-white" id="btnTake2">Take Attendance</button>
                    </div>
                </div>
            </div>
  
            <div class="col-lg-4 col-md-6 col-12 mb-4">
                <div class="card borderless large-screen-card">
                    <img src="img/CSD-Night.jpg" class="card-img-top img-fluid">
                    <div class="card-body">
                        <h5 class="card-title">Event 3: CSD Night</h5>
                        <p class="card-text">Join us on November 23, 2024, us as we turn up the volume for an unforgettable night filled with rockstar-themed fun! 🎶🤘 Both students and faculty are invited to dress to impress, so bring out your best rock-inspired outfits! 🎸</p>
                        <button type="button" class="btn btn-primary text-white" id="btnTake3">Take Attendance</button>
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

        const btn1 = document.getElementById('btnTake1');
        const btn2 = document.getElementById('btnTake2');
        const btn3 = document.getElementById('btnTake3');

        btn1.addEventListener('click', function() {
            window.location.href = 'qr_student.php';
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