<?php
    include_once '../db/db_conn.php'; 

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $login_email = $_POST['idLogin'];
        $login_password = $_POST['idPassword'];

        $emailStmt = $conn->prepare("SELECT * FROM tbl_regusers WHERE email = ?");
        $emailStmt->bind_param("s", $login_email);
        $emailStmt->execute();
        $result = $emailStmt->get_result();

        if ($result->num_rows === 1) {
            $user = $result->fetch_assoc();
            if (password_verify($login_password, $user['password'])) {
                echo json_encode(['status' => 'success', 'redirect' => 'student_portal.php']);
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Incorrect password']);
            }
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Wrong email or password']);
        }

        $emailStmt->close();
    }