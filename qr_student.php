<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket</title>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Oswald:wght@500&display=swap" rel="stylesheet">
    <link href="bootstrap5/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap5/css/sweetalert2.min.css" rel="stylesheet">
    <style>
        #ticket {
            display: none; 
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            background-color: #fff;
            margin-top: 20px;
            display: flex;
            width: 100%;
            max-width: 600px;
            margin: 20px auto;
        }
        
        #ticket .details {
            flex: 3;
            padding: 20px;
        }
        
        #ticket .details hr {
            width: 80%;
            margin: 10px auto;
            border: 0;
            border-top: 2px solid #ddd;
        }
        
        #ticket .details table {
            width: 100%;
        }
        
        #ticket .details th,
        #ticket .details td {
            text-align: left;
            padding: 5px 0;
        }
        
        #ticket .qr {
            flex: 1;
            background-color: #6256CA;
            color: #fff;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center; 
            padding: 20px;
        }
        
        #ticket .qr img {
            max-width: 100px;
            height: 100px;
            margin-bottom: 10px;
        }
        
        #ticket .qr span {
            font-weight: bold;
        }
    
        .ticket-header {
            color: black;
            padding: 5px;
            text-align: center;
            font-size: 2.2rem;
            font-weight: 400;
            font-family: 'Bebas Neue', sans-serif;
            letter-spacing: 1px;
            text-transform: uppercase;
        }
    </style>
        
</head>
<body style="background-color: whitesmoke;">
    <div class="container-fluid p-4" style="background-color: #5E9BEB;">
        <h1 class="text-center text-light"><b>QR Code Generator</b></h1>
    </div>
    <div class="card m-5 p-3">
        <div class="card-body">
            <center>
                <div id="ticket">
                    <div class="details">
                        <div class="ticket-header">
                            TICKET
                            <hr>
                        </div>
                        <table>
                            <tr>
                                <th>Name:</th>
                                <td id="st-name"></td>
                            </tr>
                            <tr>
                                <th>Event:</th>
                                <td id="st-event"></td>
                            </tr>
                            <tr>
                                <th>ID:</th>
                                <td id="st-ID"></td>
                            </tr>
                            <tr>
                                <th>Course:</th>
                                <td id="st-courseSection"></td>
                            </tr>
                        </table>
                    </div>
                    <div class="qr">
                        <img src="" id="qrImage" alt="QR Code">
                        <span>SCAN ME</span>
                    </div>
                </div>
            </center>
            <form action="functions/qr_ticket.php" method="post" id="ticket-form">
                <label for="firstname" class="mt-4">Enter Firstname</label>
                <input type="text" id="firstname" class="form-control" placeholder="Enter Firstname" required>
            
                <label for="lastname" class="mt-2">Enter Lastname</label>
                <input type="text" id="lastname" class="form-control" placeholder="Enter Lastname" required>
            
                <label for="studentID" class="mt-2">Enter Student ID</label>
                <input type="text" id="studentID" class="form-control" placeholder="Enter Student ID" required>
            
                <label for="course_section" class="mt-2">Enter Course & Section</label>
                <input type="text" id="course_section" class="form-control" placeholder="Enter Course and Section" required>
            
                <div class="text-center mt-2">
                    <button type="button" class="btn btn-primary mt-3" id="ticket-btn">Print Ticket</button>
                </div>
            </form>
        </div>
    </div>
</body>
    <script src="jQuery/jquery-3.7.1.min.js"></script>
    <script src="studentqr/qr_student.js"></script>
    <script src="bootstrap5/js/bootstrap.bundle.min.js"></script>
    <script src="bootstrap5/js/sweetalert2.all.min.js"></script>
</html>