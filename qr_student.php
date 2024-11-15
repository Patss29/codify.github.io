<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap5/css/bootstrap.min.css">
    <script src="bootstrap5/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container-fluid bg-primary p-5">
        <h1 class="text-center text-light"><b>QR Code Generator</b></h1>
    </div>
    <div class="card m-5 p-3">
        <div class="card-body">
            <center>
            <img src="">
            </center>
            <label for="studentID">Enter Student ID</label>
            <input type="text" name="studentID" id="studentID" class="form-control">
            <button type="button" class="btn btn-primary mt-2">Generate QR</button>
        </div>
    </div>
</body>

    <script src="studentqr/qr_student.js"></script>
</html>