const image = document.getElementById("qrImage");
const fname = document.getElementById("firstname");
const lname = document.getElementById("lastname");
const sID = document.getElementById("studentID");

const courseSection = document.getElementById("course_section");
const tckt = document.getElementById("ticket-btn");
const api = `https://api.qrserver.com/v1/`;
const api2 = `create-qr-code/?size=100x100&data=`;

$(document).ready(function(){
    $('#ticket-btn').click(function(e) {
        e.preventDefault(); 
    
        Swal.fire({
            title: 'Are you sure?',
            text: "Do you really want to submit the form?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, submit it!',
            cancelButtonText: 'No, cancel',
        }).then((result) => {
            if (result.isConfirmed) {
                const studentFname = $('#firstname').val();
                const studentLname = $('#lastname').val();
                const studentSID = $('#studentID').val();
                const studentCS = $('#course_section').val();

                $('#st-name').text(studentFname + " " + studentLname);
                $('#st-ID').text(studentSID);
                $('#st-courseSection').text(studentCS);
                $('#st-event').text("TJ Monterde Concert"); 

                const qrData = `Name: ${studentFname} ${studentLname}\nStudent ID: ${studentSID}\nCourse: ${studentCS}`;
                const qrCodeUrl = api + api2 + encodeURIComponent(qrData);
                $('#qrImage').attr('src', qrCodeUrl); // Display QR code

                $('#ticket').show();

                Swal.fire({
                    title: 'Success!',
                    text: 'Your form was successfully submitted.',
                    icon: 'success',
                });

            } else {
                Swal.fire({
                    title: 'Cancelled',
                    text: 'Your form was not submitted.',
                    icon: 'info',
                });
            }
        });
    });
});


// tckt.addEventListener("click", () => {
//     image.src = `${api}${api2}${fname.value + " " + lname.value + " " + sID.value + " " + courseSection.value }`;

//     const studentFname = fname.value;
//     const studentLname = lname.value;
//     const studentSID = sID.value;
//     const studentCS = courseSection.value;
//     const studentName = document.getElementById("st-name");
//     const studentID = document.getElementById("st-ID");
//     const studentCourseSection = document.getElementById("st-courseSection");
//     const studentEvent = document.getElementById("st-event");

//     studentName.innerHTML = studentFname + " " + studentLname;
//     studentID.innerHTML = studentSID;
//     studentCourseSection.innerHTML =studentCS;
//     studentEvent.innerHTML ="TJ Monterde Concert";

// });